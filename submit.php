<?php 
$uploadDir = 'uploads/'; 
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
); 
 
// If form is submitted 
if(isset($_POST['title']) || isset($_POST['course_dtls']) || isset ($_POST['semester']) || isset($_POST['year']) || isset($_POST['file'])){ 
    // Get the submitted form data 
    $name = $_POST['title']; 
    $course = $_POST['course_dtls'];
    $semester = $_POST['semester'];
    $year = $_POST['year'];

     
    // Check whether submitted data is not empty 
    if(!empty($name) && !empty($course) && !empty($semester) && !empty($year)){  
            $uploadStatus = 1; 
             
            // Upload file 
            $uploadedFile = ''; 
            if(!empty($_FILES["file"]["title"])){ 
                 
                // File path config 
                $fileName = basename($_FILES["file"]["name"]); 
                $targetFilePath = $uploadDir . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                 
                // Allow certain file formats 
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 
                if(in_array($fileType, $allowTypes)){ 
                    // Upload file to the server 
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                        $uploadedFile = $fileName; 
                    }else{ 
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    } 
                }else{ 
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
                } 
            } 
             
            if($uploadStatus == 1){ 
                // Include the database config file 
                include_once 'connection.php'; 
                 
                // Insert form data in the database 
                $sql= "INSERT INTO comp_sci_tech (title,course,semester,year,upload_year,pdf_file) VALUES ('$title', '$course', $semester , $year , now() , '$pdf_file')";

                $insert = $db->query($sql);
                 
                if($insert){ 
                    $response['status'] = 1; 
                    $response['message'] = 'Form data submitted successfully!'; 
                } 
            }  
    }else{ 
         $response['message'] = 'Please fill all the mandatory fields (name and email).'; 
    } 
} 
 
// Return response 
echo json_encode($response);

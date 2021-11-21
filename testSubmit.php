 <?php
error_reporting(0);
upload_File();

function upload_File(){
    $uploadStatus = 0;
    if (isset($_POST["title"]) || isset ($_POST["course"]) || isset ($_POST["semester"]) || isset ($_POST["year"]) || isset ($_POST["file"])) {
            $title = $_POST['title'];
            $course = $_POST['course'];
            $semester = $_POST['semester'];
            $year = $_POST['year'];
        if(!empty($title) && !empty($course) && !empty($semester) && !empty($year))
        {
            $fileName = $_FILES['file']['name'];
            $tempPath = $_FILES['file']['tmp_name'];

            $uploadDir = "uploads/";
            $basename = basename($fileName);
            $originalPath = $uploadDir.$basename;
            // $fileType = pathinfo($originalPath,PATHINFO_EXTENSION);

                if(move_uploaded_file($tempPath,$originalPath)){
                    $uploadStatus = 1;
                    // echo $fileName. " uploaded successfully";
                }else{
                    echo "File uploading error";
                }

            if($uploadStatus === 1){
            
                include_once "connection.php";

                $sql = "INSERT INTO diploma (TITLE,  SEMESTER, YEAR, DEPARTMENT, UPLOADED_TIME_DATE, PDF_FILE) VALUES ('$title',  $semester,  $year, '$course', NOW(), '$fileName')";

                $insert = $conn->query($sql);

                if ($insert) {
                    echo "Records inserted successfully.";

                    $conn->close();
                } else {
                    echo "Error!! There was an problem occur!! Try again";
                }

            }
        }else{
            echo "Please fill at the fields!!";
        }
            

        } else {
            echo "form submission error";
        }

}
?>

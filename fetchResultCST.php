<?php
include "connection.php";
$year = $_POST['selectYear'];
$query = array();
$uploadTimeDate = " ";

for ($q = 0; $q <= 5; $q++) {
    $sem = $q + 1; //Increment value by 1 for SEMESTER condition
    $query[$q] = "SELECT TITLE,PDF_FILE,UPLOADED_TIME_DATE FROM diploma WHERE DEPARTMENT='CST' AND SEMESTER=$sem AND YEAR=$year";
    // echo $query[$q];
    // echo "<br>";
    // echo "Query Created where SEMESTER= " . $sem;
    // echo "<br>";
}

$mySql = array();

for ($i = 0; $i <= 5; $i++) {
    $mySql[$i] = mysqli_query($conn, $query[$i]);
    // echo "<br>";

    if (mysqli_num_rows($mySql[$i]) > 0) {
        // $data = 
?>
        <div class="col-xl-6 my-2">
            <div class="card h-100 shadow-sm border-info card-table-under1" style="margin: 0 auto;">
                <div class="card-header" style="font-family: 'Kaushan Script', cursive; font-size: 18px; "><?php echo $year; ?> CST : <?php echo $i+1 ?> Semester</div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <?php

                        while ($result = mysqli_fetch_array($mySql[$i])) {
                            // echo "QUERY " . $i . " executed |||";
                        ?>
                            <a href="uploads/<?php echo $result['PDF_FILE'] ?>" class="list-group-item list-group-item-action" target="_blank" style="background-color: #ced4da;">
                                <?php echo $result['TITLE'] ?>
                            </a>


                        <?php
                            //storing the last uploaded date_time
                            $uploadTimeDate = $result['UPLOADED_TIME_DATE'];
                            // echo $uploadTimeDate;
                            // echo "<br>";
                        }
                        // extract only date from timestamp (SQL)
                        $uploadTimeDate = date('Y-m-d', strtotime($uploadTimeDate));
                        ?>
                    </div>
                </div>
                <!-- <div class="card-footer">
                    
                </div> -->
            </div>
        </div>
<?php

    }
}

?>
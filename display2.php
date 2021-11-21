<?php
include "connection.php";
// $year = $_POST['selectYear'];
$year = 2021;
$query = array();
$uploadTimeDate = " ";
$data = array();

for ($q = 0; $q < 4; $q++) {
    $sem = $q + 1; //Increment value by 1 for SEMESTER condition
    $query[$q] = "SELECT TITLE,PDF_FILE,UPLOADED_TIME_DATE FROM diploma WHERE DEPARTMENT='CST' AND SEMESTER=$sem AND YEAR=$year";
    $year = $year - 1;
    echo $year;
    echo "<br>";
    $data[$q] = getDiv($query[$q]);
}

$data = getDiv($query);
echo json_encode($data);



function getDiv($query)
{
    $mySql = array();
    include "connection.php";
    for ($i = 0; $i < 4; $i++) {
        echo "Running $i <br>";
        $mySql[$i] = mysqli_query($conn, $query[$i]);
        if (!$mySql[$i]) {
            die('Could not get data: ' . mysqli_error($conn));
        }

        while ($row = mysqli_fetch_array($mySql[$i], MYSQLI_ASSOC)) {
            echo "EMP ID :{$row['TITLE']}  <br> " .
                "EMP NAME : {$row['PDF_FILE']} <br> " .
                "EMP SALARY : {$row['UPLOADED_TIME_DATE']} <br> " .
                "--------------------------------<br>";
        }

        echo "Fetched data successfully\n";
    }
}

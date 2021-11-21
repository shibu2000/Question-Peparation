<?php
$listName = $_POST['listName'];
// echo $listName;
if ($listName == 'Diploma') {
?>
    <ul class="list-group list-group-horizontal-sm justify-content-around">
        <a href="./diploma_cst.php" data-value="CST" class="list-group-item list-group-item-action">Computer Science & Technology</a>
        <a href="#" class="list-group-item list-group-item-action">A third link item</a>
        <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
        <!-- <li class="list-group-item" ><a class="list-group-item list-item-action" data-value="CST" href="./test/display1.php">Computer Science & Technology</a></li>
        <li class="list-group-item">Electrical Engineering</li>
        <li class="list-group-item">ECE</li>
        <li class="list-group-item">Mechanical Engineering</li> -->
    </ul>
<?php
} elseif ($listName == 'B.Tech') {
    echo "B.Tech Section";
} else {
    echo 'Unknown';
}

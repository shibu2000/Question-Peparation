<?php
//fetching the comment from database and display

$connect = new PDO('mysql:host=localhost; dbname=question_peparation', 'root', '');
$query = "SELECT * FROM diploma_cst_comments WHERE parent_comment_id='0' ORDER BY comment_id DESC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach ($result as $row) {
    $output .= '
 <div class="card comment_parent_card">
  <div class="card-header comment_header text-primary">By <b>' . $row["comment_sender_name"] . '</b> on <i class="comment_header_datetime">' . $row["date"] . '</i></div>
  <div class="card-body comment_body d-flex">
      <span  style="width: 100%;">' . $row["comment"] . '</span>
      
      <button type="button" class="btn btn-info reply" id="' . $row["comment_id"] . '">Reply</button>
</div>
  
 </div>
 ';
    $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
    $query = "SELECT * FROM diploma_cst_comments WHERE parent_comment_id = '" . $parent_id . "'";
    $output = '';
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $count = $statement->rowCount();
    if ($parent_id == 0) {
        $marginleft = 0;
    } else {
        $marginleft = $marginleft + 48;
    }
    if ($count > 0) {
        foreach ($result as $row) {
            $output .= '
            <div class="card" style="margin-left:'.$marginleft.'px">
                <div class="card-header comment_header">By <b>'.$row["comment_sender_name"].'</b> on <i class="comment_header_datetime">'.$row["date"].'</i></div>
                <div class="card-body comment_body d-flex">
                    <span  style="width: 100%;">' . $row["comment"] . '</span>
      
                    <button type="button" class="btn btn-info reply" id="' . $row["comment_id"] . '">Reply</button>

                </div>
            </div>
               ';
            $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
        }
    }
    return $output;
}
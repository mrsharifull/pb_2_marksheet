<?php 
require('db_con.php');

$sql = "SELECT marks.*, students.name
FROM marks
JOIN students ON marks.student_id = students.id";


$result = $conn->query($sql);




if($result){
    $marks = $result->fetch_all(MYSQLI_ASSOC);
}


include('view/mark_list.view.php');
?>
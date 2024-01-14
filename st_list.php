<?php 
require('db_con.php');

$sql = "SELECT * FROM students";

$result = $conn->query($sql);


if($result){
    $students = $result->fetch_all(MYSQLI_ASSOC);
}


include('view/st_list.view.php');
?>
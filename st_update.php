<?php
require('db_con.php');

if(isset($_POST['submit'])){
    date_default_timezone_set('Asia/Dhaka');
    // $id = $_POST['id'];       //ata ke niche $_GET method dhora hoise karon Form e Action dara URL e pathanu hoise...jodi type hidden kore pathanu hoto tahole $_POST method e dhora hoito...
    $id = $_GET['id'];
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $registration = $_POST['registration'];
    $updated_at = date("Y-m-d H:i:s");

    $sql = "UPDATE students SET name='$name',roll='$roll',registration='$registration',updated_at='$updated_at' WHERE id=$id";

    $result = $conn->query($sql);
    if($result){
        header('location:st_list.php');
    }

}








?>
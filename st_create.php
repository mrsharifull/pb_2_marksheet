<?php 
require('db_con.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $registration = $_POST['registration'];


    $insert = "INSERT INTO students(name, roll, registration) VALUE('$name','$roll','$registration')";

    $result = $conn->query($insert);

    if($result){
        header('location:st_list.php');
    }

}


include('view/st_create.view.php');

?>
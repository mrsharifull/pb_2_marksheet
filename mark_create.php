<?php 
require('db_con.php');


$sql = "SELECT * FROM students";

$result = $conn->query($sql);
if($result){
    $students = $result->fetch_all(MYSQLI_ASSOC);
}

if(isset($_POST['submit'])){
    $student_id = $_POST['student_id'];
    $bangla = $_POST['bangla'];
    $english = $_POST['english'];
    $math = $_POST['math'];
    $physics = $_POST['physics'];
    $chemistry = $_POST['chemistry'];



    $insert = "INSERT INTO marks(student_id, bangla, english, math, physics, chemistry) VALUE('$student_id','$bangla','$english','$math','$physics','$chemistry' )";

    $result = $conn->query($insert);

    if($result){
        header('location:mark_list.php');
    }

}


include('view/mark_create.view.php');

?>
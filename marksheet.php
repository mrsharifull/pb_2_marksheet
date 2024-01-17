<?php
require('db_con.php');


if(isset($_GET['id'])){
    $id = base64_decode($_GET['id']);

    $sql = "SELECT marks.*,students.name FROM marks JOIN students ON marks.student_id = students.id WHERE marks.id = $id";

    $result = $conn->query($sql);
    if($result){
        $data = $result->fetch_assoc();

        $bangla = $data['bangla'];
        $english = $data['english'];
        $math = $data['math'];
        $physics = $data['physics'];
        $chemistry = $data['chemistry'];

        $marks = ['Bangla'=>$bangla, 'English'=>$english, 'Math'=>$math, 'Physics'=>$physics, 'Chemistry'=>$chemistry];
    }
}






include('view/marksheet.view.php');

?>
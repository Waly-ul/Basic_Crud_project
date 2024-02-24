<?php 

    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $saddress = $_POST['saddress'];
    $sclass = $_POST['sclass'];
    $sphone = $_POST['sphone'];

    $conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

    $sql = "UPDATE student
    SET sname = '{$sname}', saddress = '{$saddress}', sclass = '{$sclass}', sphone = '{$sphone}'
    WHERE student.sid = $sid";

    $result = mysqli_query($conn, $sql) or die("Query Failed");

    header("Location: http://basic_crud_project.test/index.php");
    mysqli_close($conn);
    

?>
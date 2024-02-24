<?php 

    $sname = $_POST['sname'];
    $saddress = $_POST['saddress'];
    $sclass = $_POST['class'];
    $sphone = $_POST['sphone'];

    $conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

    $sql = "insert into student(sname, saddress, sclass, sphone) values('{$sname}', '{$saddress}', '{$sclass}', '{$sphone}')";

    $result = mysqli_query($conn, $sql) or die("Query Failed");

    header("Location: http://basic_crud_project.test/index.php");

    mysqli_close($conn);
?>

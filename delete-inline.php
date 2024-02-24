<?php 
    $conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

    $sid = $_REQUEST['id'];
    $sql = "DELETE FROM student WHERE student.sid = $sid";

    $query = mysqli_query($conn, $sql) or die("Query Failed");

    header("Location: http://basic_crud_project.test/index.php");

    mysqli_close($conn);
    
?>
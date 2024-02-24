<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <?php 
        if(isset($_POST['deletebtn'])){
            $conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

            $sid = $_POST['sid'];
            $sql = "DELETE FROM student WHERE student.sid = $sid";

            $query = mysqli_query($conn,$sql) or die("Query Failed");

            header("Location: http://basic_crud_project.test/index.php");

            mysqli_close($conn);
        }
    ?>
    <form class="post-form" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>

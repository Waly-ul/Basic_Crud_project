<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php 
    if(isset($_POST['showbtn'])){
        $conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");
        $sid = $_POST["sid"];
        $sql = "select * from student where student.sid = $sid";
        $result = mysqli_query($conn, $sql) or die("Query Failed");

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']; ?>" />
            <input type="text" name="sname" value="<?php echo $row['sname']; ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <?php 
        $sql = "select * from studentclass where 1";
        $result2 = mysqli_query($conn, $sql) or die("Query Failed");

           echo '<select name="sclass">';
                while($row2 = mysqli_fetch_assoc($result2)){
                    if($row['sclass'] == $row2["cid"]){
                        $select = "selected";
                    }
                    else{
                        $select = "";
                    }

                    echo "<option $select value='{$row2['cid']}'>{$row2['cname']}</option>";
                }
           echo '</select>';
        ?>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>

    <?php 
            }
        }else{
            echo "<h2>No records Found</h2>";
        }
        mysqli_close($conn);
    }
    ?>
</div>
</div>
</body>
</html>

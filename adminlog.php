<?php
        if(isset($_POST['username']))
        {
            $con = mysqli_connect('localhost:3306', 'root', '','boxing');;

            // Check connection
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM admin_login WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result)==1) {
                header("location: admin_details.php");
            }
            else {
                echo "<script>alert('INVALID USERNAME OR PASSWORD')</script>";
                echo "<script>window.location.href='Admin.php';</script>";
    
              }
        }
?>
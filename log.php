
<?php
        // database connection code
        

        $con = mysqli_connect('localhost', 'root','','boxing');

        if(isset($_POST['log']))
        {
            // Check connection
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql2 = "SELECT * FROM student_login WHERE username = '$username' AND password = '$password'";
            $result2 = mysqli_query($con, $sql2);
            if (mysqli_num_rows($result2)== 1) {
                  header("Location: Tournamentstu.php");
                  session_start();
                  $_SESSION['uname'] = $username;
        }
        else{
            echo '<script type ="text/JavaScript">';  
            echo 'alert("INCORRECT USERNAME OR PASSWORD")';  
            echo '</script>'; 
            echo '<script>window.location.href="Student_login.php";</script>';
        }
    }
?>
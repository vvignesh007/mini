<?php
    $con = mysqli_connect('localhost:3306', 'root', '','boxing');
$uname=$_GET['id'];
$sql="DELETE from student where St_uname='$uname'";
$sql1="DELETE from student_login where username='$uname'";

    $res=mysqli_query($con,$sql);
    $res1=mysqli_query($con,$sql1);
    if($res )
    {
        echo '<script>alert("Student Deleted Successfully!!")</script>';
        echo '<script> window.location.href = "admin_details.php";</script>';
    }
    else{
        echo "failed";
    }



?>
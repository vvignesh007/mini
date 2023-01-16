<?php
    $con = mysqli_connect('localhost:3306', 'root', '','boxing');
$uname=$_GET['id'];
$sql="DELETE from staff where S_uname='$uname'";
$sql1="DELETE from staff where username='$uname'";
    $res=mysqli_query($con,$sql);
    $res1 = mysqli_query($con, $sql1);
    if($res && $res1)
    {
        echo '<script>alert("Staff Deleted Successfully!!")</script>';
        echo '<script> window.location.href = "admin_details.php";</script>';
    }
    else{
        echo "failed";
    }


?>
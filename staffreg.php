<?php
if(isset($_POST['addstaff']))
{
    $con = mysqli_connect('localhost:3306', 'root', '','boxing');
    $fname=mysqli_real_escape_string($con,$_POST['fname']);
    $lname=mysqli_real_escape_string($con,$_POST['lname']);
    $uname=mysqli_real_escape_string($con,$_POST['uname']);
    $sex=mysqli_real_escape_string($con,$_POST['gender']);
    $add=mysqli_real_escape_string($con,$_POST['address']);
    $phno=mysqli_real_escape_string($con,$_POST['phno']);
    $sal=mysqli_real_escape_string($con,$_POST['sal']);
    $type=mysqli_real_escape_string($con,$_POST['artform']);
    $pass=mysqli_real_escape_string($con,$_POST['pass']);    
    $query="INSERT INTO staff(Fname,Lname,S_uname,Sex,Address,Phno,Salary,type) values('$fname','$lname','$uname','$sex','$add',$phno,$sal,'$type')";
    
    $res=mysqli_query($con,$query);
    $quer="INSERT into staff_login(username,password) values('$uname','$pass')";
    $result=mysqli_query($con,$quer);
    if($res && $result)
    {
        echo '<script>alert("New Staff Added Successfully!!")</script>';
        echo '<script> window.location.href = "admin_details.php";</script>';  
    }
}

?>

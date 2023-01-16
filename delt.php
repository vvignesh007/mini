<?php
    $con = mysqli_connect('localhost:3306', 'root', '','boxing');
    $tid=$_GET['id'];
    $sql="DELETE from tournament where t_id=$tid";
    $res=mysqli_query($con,$sql);
    if($res)
    {
        echo '<script>alert("Tournament Deleted Successfully!!")</script>';
        echo '<script> window.location.href = "admin_details.php";</script>';
    }
    else{
        echo "failed";
    }

?>
<?php
$uname=$_GET['uname'];
$tid=$_GET['id'];
$con = mysqli_connect('localhost', 'root','','boxing');

$result="SELECT *from tour_regs where t_id=$tid and uname='$uname'";
$r=mysqli_query($con,$result);
if(mysqli_num_rows($r) == 0){
        $res="INSERT INTO tour_regs (t_id,uname) values($tid,'$uname')";
        $ress=mysqli_query($con,$res);
        echo '<script type ="text/JavaScript">';  
        echo 'alert("REGISTERED SUCCESSFULLY")';  
        echo '</script>'; 
        echo '<script>window.location.href="Tournamentstu.php";</script>';
}

else{
            echo '<script type ="text/JavaScript">';  
            echo 'alert("ALREADY REGISTERED!!!!!!!")';  
            echo '</script>'; 
            echo '<script>window.location.href="Tournamentstu.php";</script>';

}
?>
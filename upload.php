<?php
if(isset($_POST['addcar']) ){
    $con = mysqli_connect('localhost:3306', 'root','','boxing');

   echo "<prev>";
   print_r($_FILES['image']);
   echo "</prev>";
   $img_name= $_FILES['image']['name'];
   $tmp_name= $_FILES['image']['tmp_name'];
   $error= $_FILES['image']['error'];
    if($error === 0){
        $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
        $img_ex_lc= strtolower($img_ex);

        $allowed_exs = array("jpg","jpeg","png","webp","svg");
        if(in_array($img_ex_lc,$allowed_exs)){
            $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
            $img_upload_path='images/'.$new_img_name;
            move_uploaded_file($tmp_name,$img_upload_path);

                $tname=mysqli_real_escape_string($con,$_POST['tname']);
                $tdesc=mysqli_real_escape_string($con,$_POST['desc']);
                $type=mysqli_real_escape_string($con,$_POST['type']);
                $venue=mysqli_real_escape_string($con,$_POST['venue']);
                $date=mysqli_real_escape_string($con,$_POST['date']);

                $query="INSERT INTO tournament (t_name,t_desc,t_type,venue,date,t_img) values('$tname','$tdesc','$type','$venue','$date','$new_img_name')";
                $res=mysqli_query($con,$query);
                if($res){
                    echo '<script>alert("New Tournament Added Successfully!!")</script>';
                    echo '<script> window.location.href = "addtour.php";</script>';   
                  
                
                }

        }else{
            echo '<script>alert("Cant upload this type of image")</script>';
            // echo '<script> window.location.href = "addcar.php";</script>';   
        }
    }
    else{
        $em="unknown error occured";
        // header("Location: addcar.php?error=$em");
    }









}
else{
    echo "false";
}



?>

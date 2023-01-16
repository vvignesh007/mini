<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student details</title>

   </head>
  <body>
<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  background: linear-gradient(120deg,#2980b9, #8e44ad);
  height: 100vh;

}
.center{
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 450px;
  height: 750px;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
.center h1{
  text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid silver;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
  flex-direction:column-reverse ;

}
form .txt_field{
  position: relative;
  border-bottom: 1px solid #adadad;
  margin: 30px 0;
  display: flex;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 15px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 30%;
  left: 5px;
  color: #adadad;
  transform: translateY(-20%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}
.pass{
  margin: -5px 0 40px 5px;
  color: #2691d9;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
}
input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  background: #2691d9;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}
input[type="submit"]:hover{
  border-color: #2691d9;
  transition: .5s;
}
.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}
.signup_link a{
  color: #2691d9;
  text-decoration: none;
}
.signup_link a:hover{
  text-decoration: underline;
}

form .txt_field_read{
  position: relative;
  border-bottom: 1px solid #2691d9;
  margin: 30px 0;
  display: flex;
}

.txt_field_read {
  position: absolute;
  top: 30%;
  left: 5px;
  color: #2691d9;
  font-size: 16px;
  pointer-events: none;
}
.txt_field_read input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 15px;
  border: none;
  background: none;
  outline: none;
}
.buttonn {
  background-color:  ;
  border: none;
  color: white;
  padding: 5px 6px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.txt_field_read label{
  position: absolute;
  bottom: 72%;
  left: 5px;
  color: #2691d9;
  transform: translateY(-20%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.button {
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  border: solid 1px #20538D;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
  background: #4479BA;
  color: #FFF;
  padding: 8px 12px;
  text-decoration: none;
  position: fixed;
  right: 70px;
  top: 70px;
}
</style>
<!-- <button id="back"><a href="register.php">Back</a></button> -->
<a href="register.php" class="button">back</a>
</div>

  <?php
        // database connection code
        if(isset($_POST['fname']))
        {
        $con = mysqli_connect('localhost:3306', 'root', '','boxing');

        // Check connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['Sex'];
        $art_form = $_POST['artform'];
        $address = $_POST['address'];
        $bg = $_POST['type'];
        $phno = $_POST['phno'];
        $password = $_POST['password'];  

        $username = $fname.'_'.lcfirst($lname);
        $ssn = rand();

        $sql = "SELECT * FROM student_login WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        if ($result && mysqli_fetch_assoc($result) == 0) {
            // Insert student login details
            $sql = "INSERT INTO student_login (use_id, username, password)
            VALUES ('$ssn', '$username', '$password')";
            $result = mysqli_query($con, $sql);

            // Insert student details
            $sql = "INSERT INTO student (SSN, Fname, Lname, Sex, Art_form, Blood, St_uname, Phno, Address)
            VALUES ('$ssn', '$fname', '$lname', '$gender', '$art_form', '$bg', '$username', '$phno', '$address')";
            $result = mysqli_query($con, $sql);

            if ($result) {
                // Fecth newly inserted data
                $sql = "SELECT SSN, Fname, Lname, Sex, Art_form, Blood, Phno, St_uname, Address FROM student WHERE St_uname = '$username'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                echo '<script type ="text/javascript">';
                echo 'alert("REGISTERED SUCCESSFULLY..!")'; 
                echo '</script>'; 
                // echo '<script>window.location.href="student_registration_details.php"</script>';

            ?>
            <!-- <?php
             echo '<script type ="text/javascript">';
             echo 'alert("REGISTERED SUCCESSFULLY..!")'; 
             echo '</script>'; 
             echo '<script>window.location.href="student_registration_details.php"</script>';
             ?> -->

            
            <div class="center">
            <h1>Student deatils</h1>
            <form method="post">
            <div class="txt_field_read">
                <input type="text" value=<?php echo $row["SSN"]; ?> readonly>   
                <span></span>
                <label>SSN</label>
                </div>
                <div class="txt_field_read">
                <input type="text" value=<?php echo $row["St_uname"]; ?> readonly>   
                <span></span>
                <label>User Name</label>
                </div>
                <div class="txt_field_read">
                <input type="text" value=<?php echo $row["Fname"]; ?> readonly>   
                <span></span>
                <label>First Name</label>
                </div>
                <div class="txt_field_read">
                <input type="text" value=<?php echo $row["Lname"]; ?> readonly>   
                <span></span>
                <label>Last Name</label>
                </div>
                <div class="txt_field_read">
                <input type="text" value=<?php echo $row["Sex"]; ?> readonly>   
                <span></span>
                <label>Gender</label>
                </div>
                <div class="txt_field_read">
                <input type="text" value=<?php echo $row["Art_form"]; ?> readonly>   
                <span></span>
                <label>Art Form</label>
                </div>
                <div class="txt_field_read">
                <input type="text" value=<?php echo $row["Blood"]; ?> readonly>   
                <span></span>
                <label>Blood</label>
                </div>
                <div class="txt_field_read">
                <input type="text" value=<?php echo $row["Phno"]; ?> readonly>   
                <span></span>
                <label>Phone Number</label>
                </div>
                <div class="txt_field_read">
                <input type="text" value=<?php echo $row["Address"]; ?> readonly>   
                <span></span>
                <label>Address</label>
                </div>
            </form>
            </div>
        <?php } else { ?>
            <h1>Error while inserting user data</h1>
        <?php }
    } else { ?>
        <h1>User already exits....!</h1>
    <?php }
         mysqli_close($con);

        }
  ?>
  
    
  </body>
</html>



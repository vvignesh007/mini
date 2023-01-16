<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Staff details</title>
    <!-- <link rel="stylesheet" type="text/css" href="./Register.css">  -->
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
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 450px;
  height: 650px;
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
  top: 60px;
} 
  </style>




  <?php
        // database connection code
        $con = mysqli_connect('localhost:3306', 'root', '','boxing');

        if(isset($_POST['username']))
        {
            // Check connection
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM staff_login WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($con, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                
                $sql = "SELECT Fname, Lname, Sex, Address, Phno, Salary FROM staff WHERE S_uname = '$username'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
            ?>
            <div class="center">
            <h1>Staff deatils</h1>
            <form method="post">
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
                <input type="text" value=<?php echo $row["Address"]; ?> readonly>   
                <span></span>
                <label>Address</label>
                </div>
                
                <div class="txt_field_read">
                <input type="text" value=<?php echo $row["Phno"]; ?> readonly>   
                <span></span>
                <label>Phone Number</label>
                </div>

                <div class="txt_field_read">
                <input type="text" value=<?php echo $row["Salary"]; ?> readonly>   
                <span></span>
                <label>Salary</label>
                </div>

            </form>
            </div>
            <a href="index.php">
                <button class="button">Logout</button>
            </a>
            </form>
            <?php } else {
                    echo "<h1>Invalid user</h1>";
                }
        }

        // To show data to update
        if (isset($_POST['userId'])) {
          // Check connection
          if (!$con) {
              die("Connection failed: " . mysqli_connect_error());
          }
          
          $userId = $_POST['userId'];

          $sql = "SELECT S_id, Fname, Lname, Sex, Address, Phno, Salary FROM staff WHERE S_id = '$userId'";
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_assoc($result);

          if ($result && mysqli_num_rows($result) > 0) { 
          ?>
          <div class="center">
          <h1>Staff deatils</h1>
          <form method="post" action="">
              <div class="txt_field">
              <input type="text" name="Fname" id="Fname" value=<?php echo $row["Fname"]; ?> >   
              <span></span>
              <label>First Name</label>
              </div>
              <div class="txt_field">
              <input type="text" name="Lname" id="Lname" value=<?php echo $row["Lname"]; ?> >   
              <span></span>
              <label>Last Name</label>
              </div>
              <div class="txt_field">
              <input type="text" name="Sex" id="Sex" value=<?php echo $row["Sex"]; ?> >   
              <span></span>
              <label>Gender</label>
              </div>
              
              <div class="txt_field">
              <input type="text" name="Address" id="Address" value=<?php echo $row["Address"]; ?> >   
              <span></span>
              <label>Address</label>
              </div>
              
              <div class="txt_field">
              <input type="text" name="Phno" id="Phno" value=<?php echo $row["Phno"]; ?> >   
              <span></span>
              <label>Phone Number</label>
              </div>

              <div class="txt_field">
              <input type="text" name="Salary" id="Salary" value=<?php echo $row["Salary"];?> required>   
              <span></span>
              <label>Salary</label>
              </div>
              <input type='hidden' id='update' name='update'  value=<?php echo $row["S_id"];?>>
              <div style="padding-top: 20px;">
                <input type="submit" value="Submit">
              </div>
          </form>

          </div>
          <a href="index.php">
              <button class="button">Logout</button>
          </a>
          </form>
        <?php } else {
                echo "<h1>Invalid user</h1>";
            }
        }

        // To Update the data
        if (isset($_POST['update'])) {
          // Check connection
          if (!$con) {
              die("Connection failed: " . mysqli_connect_error());
          }
          
          $userId = $_POST['update'];
          $Fname = $_POST['Fname'];
          $Lname = $_POST['Lname'];
          $Sex = $_POST['Sex'];
          $Address = $_POST['Address'];
          $Phno = $_POST['Phno'];
          $Salary = $_POST['Salary'];

          $sql = "UPDATE staff SET Fname = '$Fname', Lname = '$Lname', Sex = '$Sex', Address = '$Address', Phno = '$Phno', Salary = '$Salary' WHERE S_id = '$userId'";
          $result = mysqli_query($con, $sql);

          if ($result) { 
              echo '<script> window.location.href = "admin_details.php";</script>'; 
          } else {
              echo "<h1>Invalid user</h1>";
          }
        }

        mysqli_close($con);
  ?>
  
    
  </body>
</html>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="./Register.css"> 
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
  margin-top:50px;
  top: 45%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 450px;
  height: 720px;
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
button {
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

  .colum {
    float: left;
    height: 20%;
    width: 40%;
    margin-left: 800px;
    margin-top: -370px;
    padding: 20px;
    position: absolute;
    top: 30%;
    left: 5px;
    pointer-events: none;
    transition: .5s;
  }
  
  
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  @media screen and (max-width: 300px) {
    .column, input[type=submit] {
      width: 1500%;
      margin-top: 0;
    }
  }

  .colum label{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 15px;
  border: none;
  background: none;
  outline: none;
}



</style>
    <button id="back"><a href="index.php">Back</a></button>
    <div class="center">
      <h1>Register</h1>
      <form method="post" action="student_registration_details.php">
        <div class="txt_field">
          <input type="text" id="fname" name="fname" required>   
          <span></span>
          <label>First Name</label>
        </div>
        <div class="txt_field">
          <input type="text" id="lname" name="lname" required>   
          <span></span>
          <label>Last Name</label>
        </div>
        <div class="colum">
        <!--input type="text" id="gender" name="gender" required>  
          <span></span>
          <label>Gender</label-->

          <label for="Sex">Gender</label>
          <br>
          <select type=text id="Sex" name="Sex">
          <option value="" disabled selected>Choose option</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Oth</option>
          
          </select>
         
          <hr></hr>

        </div>

        <div class="colum">
        <!--input type="text" id="art_form" name="art_form" required>  
          <span></span>
          <label>Art Form</label-->
          <br>
        
          <label for="type">Art form</label>
          <br>
          <select id="type" name="artform">
          <option value="" disabled selected>Choose option</option>
            <option value="professional Boxing">professional boxing</option>
            <option value="kickboxing">Kickboxing</option>
            <option value="muay thai">muay thai</option>
            <option value="savate">savate</option>
            <option value="sanda">sanda</option>

          </select>
          <hr></hr>

        </div>
        <div class="txt_field">
          <input type="text" id="address" name="address" required>  
          <span></span>
          <label>Address</label>
        </div>
        <div class="colum">
        <!--input type="text" id="bg" name="bg" required>  
          <span></span>
          <label>Blood Group</label-->

          
          <label for="type">Blood group</label>
          <br>
          <select id="type" name="type">
          <option value="" disabled selected>Choose option</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="HH">HH</option>

          </select>
          <hr></hr>


        </div>
        <div class="txt_field">
          <input type="text" id="phno" name="phno" required>  
          <span></span>
          <label>Phone Number</label>
        </div>
        <div class="txt_field">
          <input type="password" id="password" name="password" required>  
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass"></div>
        <input type="submit" value="Register">
        <div class="signup_link">
        </div>

      </form>
    </div>
    
  </body>
</html>

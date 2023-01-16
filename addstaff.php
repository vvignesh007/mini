<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
</head>
<body>
<style>
*{
    margin: 0;
    padding: 0;

}
body{
    background-image: url("../images/regs.jpg");
    
    
    background-size: cover;
    background-position: center;
    /* margin-top: 0px; */
    
}
.main{
    width: 400px;
    margin: 100px auto 0px auto;
    margin-top: 30px;
}
.btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border:none;
    margin-top: 30px;
    margin-left: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:blue ;
    transition: 0.4s ease;
}

.btnn:hover{
    background: #fff;
    color:#ff7200;
}

.btnn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

h2{
    text-align: center;
    padding: 20px;
    font-family: sans-serif;

}
.register{
    background-color: rgba(0,0,0,0.6);
    width: 100%;
    font-size: 18px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
    color: #fff;
    margin: auto;

}

form#register{
    margin: 40px;
    margin-top: 10px;

}

label{
    font-family: sans-serif;
    font-size: 18px;
    font-style: italic;
}

input#name{
    width:300px;
    border:1px solid #ddd;
    border-radius: 3px;
    outline: 0;
    padding: 7px;
    background-color: #fff;
    box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
}


#back{
    width: 100px;
    height: 40px;
    background: #ff7200;
    border:none;
    margin-top: 10px;
    margin-left: 20px;
    font-size: 18px;
   

}


#back a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

#fam{
    color: #ff7200;
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top:-10px;
    text-align: center;
    letter-spacing: 2px;
    display: inline;
    margin-left: 250px;
}

.reg{
    width: 100%;
}



</style>






<button id="back"><a href="admin_details.php">HOME</a></button> 
    
 <div class="main">
        
        <div class="register">
        <h2>Enter Details Of New STAFF</h2>
        <form id="register"  action="staffreg.php" method="POST" enctype="multipart/form-data">    
            <label>FIRST NAME : </label>
            <br>
            <input type ="text" name="fname"
            id="name" placeholder="Enter First Name" required>
            <br><br>

            <label>LAST NAME : </label>
            <br>
            <input type ="text" name="lname"
            id="name" placeholder="Enter Last Name" required>
            <br><br>
           
            <label>USER NAME : </label>
            <br>
            <input type ="text" name="uname"
            id="name" placeholder="Enter User Name" required>
            <br><br>
           
            <label for="Sex">Gender</label>
          <br>
          <select type=text id="Sex" name="gender">
          <option value="" disabled selected>Choose option</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Oth</option>
          
          </select>
            <hr>
            <label>ADDRESS : </label>
            <br>
            <input type ="text" name="address"
            id="name" placeholder="Enter Address" required>
            <br><br>

            <label>Phone Number : </label>
            <br>
            <input type ="tel" name="phno"
            id="name" placeholder="Enter phone number" required>
            <br><br>

            <label>SALARY : </label>
            <br>
            <input type ="number" name="sal"
            id="name" placeholder="Enter salary" required>
            <br><br>

            <label>PASSWORD : </label>
            <br>
            <input type ="password" name="pass"
            id="name" placeholder="Enter a Password" required>
            <br><br>

            <label for="type">Art form</label>
          <br>
          <select id="type" name="artform">
          <option value="" disabled selected>Choose option</option>
          <option value="professional Boxing">professional boxing</option>
            <option value="kickboxing">Kickboxing</option>
            <option value="muay thai">muay thai</option>
            <option value="savate">savate</option>
            <option value="sanda">sanda</option>

            <!-- <option value="Boxing">Boxing</option>
            <option value="Krav Maga">Krav Maga</option>
            <option value="Karate">Karate</option>
            <option value="Kung-fu">Kung-fu</option>
            <option value="Judo">Judo</option> -->

          </select>
          <hr></hr>
            <input type="submit" class="btnn"  value="ADD STAFF" name="addstaff">

            
            
        
        
        </input>
            
        </form>
        </div> 
    </div.main>
</body>
</html>
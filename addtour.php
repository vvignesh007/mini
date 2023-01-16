<?php
        $con = mysqli_connect('localhost:3306', 'root','','boxing');

session_start();
$uname=$_SESSION['uname'];
$mysql="SELECT *FROM staff where S_uname='$uname'";
$result=mysqli_query($con,$mysql);
$res=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAFF</title>
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
    color:#fff;
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
    width: 95px;
    height: 40px;
    background: #ff7200;
    border:none;
    float:right;
    margin-top: 10px;
    margin-left: 20px;
    margin-right: 40px;
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







    <h1>WELCOME  <?php echo $res['Fname']." ".$res['Lname']?></h1>
    <button id="back"><a href="index.php">LOGOUT</a></button> 
    <button id="back"><a href="staffdet.php?uname=<?php echo $uname?>">PROFILE</a></button> 
    <button id="back"><a href="partstu.php?uname=<?php echo $uname?>">STUDENT </a></button> 

 <div class="main">
        
        <div class="register">
        <h2>Enter Details Of New Tournament</h2>
        <form id="register"  action="upload.php" method="POST" enctype="multipart/form-data">    
            <label>Tournament Name : </label>
            <br>
            <input type ="text" name="tname"
            id="name" placeholder="Enter Tournament name" required>
            <br><br>

            <label>Tournament Description : </label>
            <br>
            <textarea type ="textfeild" name="desc"
            id="name" placeholder="Enter the description of tournament" required></textarea>
            <br><br>

            <label for="type">Art form</label>
          <br>
          <select id="type" name="type">
          <option value="" disabled selected>Choose option</option>
            <option value="professional Boxing">professional Boxing</option>
            <option value="Kick boxing">Kick boxing</option>
            <option value="Muay Thai">Muay Thai</option>
            <option value="savate">savate</option>
            <option value="sanda">sanda</option>

          </select>
          <hr></hr>
            
            <label>Venue : </label>
            <br>
            <input type="text" name="venue" 
            id="name" placeholder="Enter the Venue" required>
            <br><br>

            <label>Tournament Date : </label>
            <br>
            <input type="date" name="date" 
            id="name" placeholder="date" required>
            <br><br>

            <label>Tournament Image : </label>
            <br>
            <input type="file" name="image" required>
           <br><br>

            <input type="submit" class="btnn"  value="ADD Tournament" name="addcar">
            
        
        
        </textarea>
            
        </form>
        </div> 
    </div.main>
</body>
</html>
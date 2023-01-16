<?php
    
    
    $con = mysqli_connect('localhost:3306', 'root','','boxing');
    
    session_start();
    $username = $_SESSION['uname'];
        

        $sql = "SELECT *FROM tournament";
        $result = mysqli_query($con, $sql);
       
        $sql2="SELECT *FROM student where St_uname='$username'";
        $result2=mysqli_query($con,$sql2);
        $udet=mysqli_fetch_array($result2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOURNAMENT</title>
    <link rel="stylesheet" href="./Tournament.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<style>


*{
    margin: 0;
    margin-right: fit-content;
    margin-left: fit-content;

    padding: 0;

}


body{
    width: 25px;
    height: 100px;
    margin: 0;
    background-repeat: no-repeat;
    background-image: url("/images/311668.jpg");
    background-size: cover;
    position: center;
}




@media screen and (max-width: 300px) {
    body{
        width: 1500%;
      margin-top: 0;
    }

    
}
.logo{
    height: 10%;
    width: -80%;
    display: table;
    float: left;
}

.logo h1{
    color: rgb(245, 59, 35);
    height: 100%;
    display: table-cell;
    vertical-align: middle;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 32px;

}

.logo h2{
    color: rgb(245, 59, 35);
    height: 100%;
     top:25px; 
    justify:flex;
    display: center;
    text-align:left; */
    /* vertical-align: middle; */
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 20px;

}




.logo{
    color: #fdfb5ee1;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    padding-top: 10px;
    display: block;
}


ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 50px;
    margin-right: 50px;
    margin-top: 30px;
    font-size: 14px;
    margin-bottom: 30px;

}

ul li a{
    text-decoration: none;
    color: black;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;

}

ul li a:hover{
    color:orange;

}
.box{
    position:center;
    top: 40%;
    left: 50%;
    padding: 50px;
    box-sizing: border-box;
    background: #fff;
    border-radius: 4px;
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
    background: linear-gradient(to top, rgba(255, 251, 251, 0.8)50%,rgba(250, 246, 246, 0.8)50%);
    display: flex;
    align-content: center;
    width: 600px;
    height: 300px;
    margin-top: 150px;
    margin-left: 350px;
}

.box .imgBx{
    width: 150px;
    flex:0 0 150px;
}

.box .imgBx img{
    max-width: 130%;
}

.box .content{
    margin-top: -25px;
    padding-left: 100px;
    width: 1500px;
    text-align:left;
}

.box .button{
    width: 240px;
    height: 40px;
    background: #c8f364;
    border:none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}

.utton{
    width: 240px;
    height: 40px;
    background: #c8f364;
    border:none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}
.utton:hover{
    
    color:#ff7200;
}

.utton a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

.de{
    float: left;
    clear: left;
    display: block;
    


}


.de li a:hover{
    color:black;

}
.de .lis:hover{
    color: white;
}




.nn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
    
}

footer{
    height: -50%;
    padding: 10%;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px 100px;
    border: 1px solid #ccc;
    margin-top: 60px;
    margin-bottom: 16px;
    resize: vertical;
  }
  
  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 20px 200px;
    border: none;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  
  .container {
    border-radius:50px;
    border-style:inset;
    background-color: #f5eaea;
    padding: 500px;
    width: 100%;
    height: 100%; ;
    margin-bottom: 90px;
    margin-top: 100%;
    position: relative;
    
  }
  
  
  .column {
    float: left;
    width: 40%;
    height: -100px;
    margin-top: 6px;
    padding: 20px;
  }
  .colum {
    float:inline-end;
    height: 100%;
    width: 40%;

    margin-left: 100px;
    margin-top: -370px;
    padding: 20px;
  }
  
  
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  @media screen and (max-width: 300px) {
    .column, input[type=submit] {
      width: 150%;
      margin-top: 0;
    }
  }


  footer{
    position: absolute;
    bottom: -1230px;
    left: 0;
    right: 0;
    background: #111;
    height: -50%;
    width: 1250px;
    font-family: "Open Sans";
    padding-top: 40px;
    color: #fff;
}
.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h3{
    font-size: 1.8rem;
    font-weight: 400;
    text-transform: capitalize;
    line-height: 3rem;
}
.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
}
.socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}
.socials li{
    margin: 0 10px;
}
.socials a{
    text-decoration: none;
    color: #fff;
}
.socials a i{
    font-size: 1.1rem;
    transition: color .4s ease;

}
.socials a:hover i{
    color: aqua;
}

.footer-bottom{
    background: #000;
    width: 1250px;
    padding: 20px 0;
    text-align: center;
}
.footer-bottom p{
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}
.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}

 button{
    width: 100px;
    height: 30px;
    background: #adadad;
    border:none;
    margin-top: 10px;
    margin-left: 20px;
    font-size: 18px;
    text-decoration: none;
    color: black;
    font-weight: bold;

}
button a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

</style>



        <div class="in_header">
            <div class="logo">
                <h1>TOURNAMENT</h1>
                <h2>WELCOME --> <?php echo $udet['Fname']." ".$udet['Lname']?></h2>
                <button><a href="index.php">LOGOUT</a></button>
                <button><a href="payment.php?id=<?php echo $username?>">PAYMENT</a></button>
                
</div>
        </div>
    </div>
    <ul class="de">
    <?php
        while($res= mysqli_fetch_array($result))
        {
            
            
    ?>    
    
    <li>
    <form method="POST">
    <div class="box">
       <div class="imgBx">
            <img src="images/<?php echo $res['t_img']?>">
        </div>
        <div class="content">
          
            <h1>NAME : <?php echo $res['t_name']?></h1>
            <h2>DESCRIPTION :<a><?php echo $res['t_desc']?></a> </h2>
            <h2>TYPE : <a><?php echo $res['t_type']?></a> </h2>
            <h2>VENUE : <a><?php echo $res['venue']?></a> </h2>
            <h2>DATE : <a><?php echo $res['date']?></a> </h2>
            <button type="submit"  name="booknow" class="utton" style="margin-top: 5px;"><a href="registeredt.php?id=<?php echo $res['t_id'];?>&uname=<?php echo $username;?>">REGISTER</a></button>

        </div>
        
    </div>
</form></li>
    <?php
        }
    
    ?>
    <!-- <footer>
        <div class="footer-content">
            <h3>DRACLETS</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo iste corrupti doloribus odio sed!</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 DRACLETS. designed by <span>Yashwanth & Veena</span></p>
        </div>
    </footer> -->
</body>

</html>
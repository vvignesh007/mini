<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Payment details</title>
    <link rel="stylesheet" type="text/css" href="./Register.css"> 
   </head>
  <body>
  <?php
        // database connection code
        if(isset($_POST['sub']))
        {
            $username=$_GET['id'];
            $con = mysqli_connect('localhost:3306', 'root', '','boxing');

            // Check connection
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            
            $accno = $_POST['accno'];
            $bank_name = $_POST['bank_name'];
            $ifsc = $_POST['ifsc'];
            $amount = $_POST['amount'];
            $payment_method = $_POST['payment_method'];

            // Insert payment details
            $sql = "INSERT INTO payment (acc_no, IFSC, bank_name, payment_mode, Amount, username)
            VALUES ('$accno', '$ifsc', '$bank_name', '$payment_method', '$amount', '$username')";
            $result = mysqli_query($con, $sql);
            if($result){
                echo '<script>alert("Payment Done Successfully!!")</script>';
                echo '<script> window.location.href = "Tournamentstu.php";</script>';
            }
        }
  ?>

  </body>
</html>



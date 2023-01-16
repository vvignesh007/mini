<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Students</title>
</head>
<body>
<button id="back"><a href="addtour.php">Back</a></button>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
  
.hai a{
  text-decoration: none;
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
  right: 20px;
  top: 25px;
}

button{
    width: 100px;
    height: 30px;
    background: #adadad;
    border:none;
    margin-top: 10px;
    margin-left: 1px;
    font-size: 18px;
    text-decoration: none;
    color: black;
    font-weight: bold;
}

.btn{
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
  position: relative;
  right: -1245px;
  top: -45px;

}
button a{
  text-decoration:none;

}
.button a{
  text-decoration:none;

}
</style>  


<?php
$con = mysqli_connect('localhost:3306', 'root', '','boxing');
$username=$_GET['uname'];
$sql2="SELECT *FROM staff where S_uname='$username'";
$result2=mysqli_query($con,$sql2);
$res=mysqli_fetch_assoc($result2);
$type=$res['type'];
$sql = "SELECT SSN, Fname, Lname, Sex, Art_form, Blood, Phno, St_uname, Address FROM student where Art_form ='$type'";
$result = mysqli_query($con, $sql);
echo "<br><h2>Student details</h2>";
echo "<table border='1'>
<tr>
<th>SSN</th>
<th>First Name</th>
<th>Last Name</th>
<th>Sex</th>
<th>Art Form</th>  
<th>Blood Group</th>
<th>Phone no</th>   
<th>Address</th>     
</tr>";         
while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>" . $row['SSN'] . "</td>";
    echo "<td>" . $row['Fname'] . "</td>";
    echo "<td>" . $row['Lname'] . "</td>";
    echo "<td>" . $row['Sex'] . "</td>";
    echo "<td>" . $row['Art_form'] . "</td>";
    echo "<td>" . $row['Blood'] . "</td>";
    echo "<td>" . $row['Phno'] . "</td>";
    echo "<td>" . $row['Address'] . "</td>";
    echo "</tr>";
}
echo "</table>";



?>
</body>
</html>
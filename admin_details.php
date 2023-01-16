<!DOCTYPE html>
<html>
<head>
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

.button a{
  text-decoration:none;

}

</style>
</head>
<body>

<button class="button"><a href="index.php">LOGOUT</a></button>
  <?php
        // // database connection code
        // if(isset($_POST['username']))
        // {
        //     $con = mysqli_connect('localhost:3306', 'root', '','draclets_martial_arts_academy');

        //     // Check connection
        //     if (!$con) {
        //         die("Connection failed: " . mysqli_connect_error());
        //     }
            
        //     $username = $_POST['username'];
        //     $password = $_POST['password'];

        //     $sql = "SELECT * FROM admin_login WHERE username = '$username' AND password = '$password'";
        //     $result = mysqli_query($con, $sql);

            // if ($result && mysqli_num_rows($result) > 0) {
                $con = mysqli_connect('localhost:3306', 'root', '','boxing');

                // Staff details
                $sql = "SELECT * FROM staff";
                $result = mysqli_query($con, $sql);
                echo "<h2>Staff details</h2>";
                echo "<button class =btn><a href='addstaff.php'>ADD STAFF</a></button>";
                echo "<table border='1'>
                <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Sex</th>
                <th>Address</th>  
                <th>Phone no</th>   
                <th>Salary</th>
                <th>Art Form</th>
                <th>Edit</th> 
                <th>Delete</th>        
                </tr>";         
                while($row = mysqli_fetch_assoc($result))
                {
                    $uname=$row['S_uname'];
                    echo "<tr>";
                    echo "<td>" . $row['Fname'] . "</td>";
                    echo "<td>" . $row['Lname'] . "</td>";
                    echo "<td>" . $row['Sex'] . "</td>";
                    echo "<td>" . $row['Address'] . "</td>";
                    echo "<td>" . $row['Phno'] . "</td>";
                    echo "<td>" . $row['Salary'] . "</td>";
                    echo "<td>" . $row['type'] . "</td>";
                    echo "<td><form action='staff_details.php' method='POST'><input type='hidden' id='userId' name='userId'  value='".$row["S_id"]."'/><input type='submit' name='submit-btn' value='Update' /></form></td>";
                    echo "<td><button><a href=deletestaff.php?id=$uname>DELETE</a></button></td>";
                    echo "</tr>";;
                }
                echo "</table>";

                // Student details
                $sql = "SELECT SSN, Fname, Lname, Sex, Art_form, Blood, Phno, St_uname, Address FROM student";
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
                <th>Edit</th>    
                <th>Delete</th>
                </tr>";         
                while($row = mysqli_fetch_assoc($result))
                {
                    $sname=$row['St_uname'];
                    echo "<tr>";
                    echo "<td>" . $row['SSN'] . "</td>";
                    echo "<td>" . $row['Fname'] . "</td>";
                    echo "<td>" . $row['Lname'] . "</td>";
                    echo "<td>" . $row['Sex'] . "</td>";
                    echo "<td>" . $row['Art_form'] . "</td>";
                    echo "<td>" . $row['Blood'] . "</td>";
                    echo "<td>" . $row['Phno'] . "</td>";
                    echo "<td>" . $row['Address'] . "</td>";
                    echo "<td><form action='student_details.php' method='POST'><input type='hidden' id='ssn' name='ssn'  value='".$row["SSN"]."'/><input type='submit' name='submit-btn' value='Update' /></form></td>";
                    echo "<td><button><a href=deletestu.php?id=$sname>DELETE</a></button></td>";
                    echo "</tr>";
                }
                echo "</table>";
                //tournamnet
                
        // // database connection code
        // if(isset($_POST['username']))
        // {
        //     $con = mysqli_connect('localhost:3306', 'root', '','draclets_martial_arts_academy');

        //     // Check connection
        //     if (!$con) {
        //         die("Connection failed: " . mysqli_connect_error());
        //     }
            
        //     $username = $_POST['username'];
        //     $password = $_POST['password'];

        //     $sql = "SELECT * FROM admin_login WHERE username = '$username' AND password = '$password'";
        //     $result = mysqli_query($con, $sql);

            // if ($result && mysqli_num_rows($result) > 0) {
                $con = mysqli_connect('localhost:3306', 'root', '','boxing');

                // Staff details
                $sql = "SELECT * FROM tournament";
                $result = mysqli_query($con,$sql);
                echo "<h2>Tournament details</h2>";
                echo "<table border='1'>
                <tr>
                <th>Tournament Name</th>
                <th>Tournament Description</th>
                <th>Type</th>
                <th>Venue</th>  
                <th>Date</th>   
                <th>Delete</th>       
                </tr>";         
                while($row = mysqli_fetch_assoc($result))
                {
                    $tid=$row['t_id'];
                    echo "<tr>";
                    echo "<td>" . $row['t_name'] . "</td>";
                    echo "<td>" . $row['t_desc'] . "</td>";
                    echo "<td>" . $row['t_type'] . "</td>";
                    echo "<td>" . $row['venue'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                   
                    echo "<td><button class=hai><a href=delt.php?id=$tid>DELETE</a></button></td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Payment details
                $sql = "SELECT acc_no, IFSC, bank_name, payment_mode, Amount, username FROM payment";
                $result = mysqli_query($con, $sql);
                echo "<br><h2>Payment details</h2>";
                echo "<table border='1'>
                <tr>
                <th>User Name</th>
                <th>Account No</th>
                <th>IFSC</th>
                <th>Bank Name</th>
                <th>Payment mode</th>  
                <th>Amount</th>          
                </tr>";         
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['acc_no'] . "</td>";
                    echo "<td>" . $row['IFSC'] . "</td>";
                    echo "<td>" . $row['bank_name'] . "</td>";
                    echo "<td>" . $row['payment_mode'] . "</td>";
                    echo "<td>" . $row['Amount'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
             
          

        
  ?>

</body>
</html>
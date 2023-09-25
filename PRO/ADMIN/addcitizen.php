<?php
define('SITE_URL','http://localhost/ADMIN/add-admin.php') ;
define('LOCALHOST','localhost');
 define('DB_USERNAME','root');
 define('DB_PASSWORD','');
 define('DB_NAME','caretaker');
 $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error($conn));
 $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Citizen</title>
    <link rel="stylesheet" href="../css/admin.css">
   
</head>
<body>
    <!-- menu section -->
    <div class="menu">

    <div class="wrapper">
    <ul>
            <li><a href="index.php">HOME</a></li>
                <li><a href="manageadmin.php">ADMIN</a></li>
                <li><a href="managestaff.php">STAFF DATA</a></li>
                <li><a href="manage_citizen.php">CITIZEN</a></li>
                <li><a href="edit.php">DELIVERY LOCATION</a></li>
                <li><a href="query.php">QUERY</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
            </ul>
        </div>

    </div>
    <div class="main">
      <div class="wrapper">
            
         <h1>ADD CITIZEN</h1>
      </div>
      </div>
      <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="name" placeholder="Enter your Full name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder=" Enter your Email"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="Address" placeholder="Enter your Address"></td>
                </tr>
                <br></br>
                <tr>
                    
                    <td colspan="2">
                    <input type="hidden" name="Id" value="">
                        <input type="submit" name="submit" value="ADD" class="btn-primary">
                        
                    </td>
                    
                </tr>
            </table>
           
        </form>
        <a href="manage_citizen.php"><button class="btn-primary">OK</button></a>
   



<?php 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Address = $_POST['Address'];

    $sql1 = "INSERT INTO user SET
        name = '$name',
        email = '$email',
        Address = '$Address'";
    $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
}
?>

 <!-- footer section -->
 <div class="footer">
<div class="wrapper">
          <p>Developed by team Hermanos

          </p>
        </div>


    </div>
    
</body>
</html>

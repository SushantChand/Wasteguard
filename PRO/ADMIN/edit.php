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
    <title>Add delivery location</title>
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
                <li><a href="edit.php">DELIVERY LOCATION</a></li>
                <li><a href="query.php">Query</a></li>
            </ul>
        </div>

    </div>
    <div class="main">
      <div class="wrapper">
            
         <h1>Add delivery location</h1>
      </div>
      </div>
      <form action="" method="POST">
    <table class="tbl-30">
        <tr>
            <td>Day:</td>
            <td><input type="text" name="day" placeholder="Enter the day"></td>
        </tr>
        <tr>
            <td>Starting Location:</td>
            <td><input type="text" name="starting_location" placeholder="Enter starting location"></td>
        </tr>
        <tr>
            <td>Departure Time:</td>
            <td><input type="text" name="departure_time" placeholder="Enter departure time"></td>
        </tr>
        <tr>
            <td>Ending Location:</td>
            <td><input type="text" name="ending_location" placeholder="Enter ending location"></td>
        </tr>
        <tr>
            <td>Arrival Time:</td>
            <td><input type="text" name="arrival_time" placeholder="Enter arrival time"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="Id" value="">
                <input type="submit" name="submit" value="ADD" class="btn-primary">
            </td>
        </tr>
    </table>
</form>
<a href="manageedit.php"><button class="btn-primary">OK</button></a>

<?php
// Define your database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'caretaker';

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    // Retrieve data from the form
    $day = $_POST['day'];
    $starting_location = $_POST['starting_location'];
    $departure_time = $_POST['departure_time'];
    $ending_location = $_POST['ending_location'];
    $arrival_time = $_POST['arrival_time'];

    // Define the SQL query to insert data into the database
    $sql = "INSERT INTO travel_schedule (day, starting_location, departure_time, ending_location, arrival_time)
            VALUES ('$day', '$starting_location', '$departure_time', '$ending_location', '$arrival_time')";

    // Execute the SQL query
    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
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

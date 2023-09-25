<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Schedule</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .schedule-table {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
        }
        th, td {
            text-align: left;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        th:first-child, td:first-child {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="schedule-table">
        <h1>Travel Schedule</h1>
        <table>
            <tr>
                <th>Day</th>
                <th>Starting Location</th>
                <th>Departure Time</th>
                <th>Ending Location</th>
                <th>Arrival Time</th>
            </tr>
            <?php
            // Connect to the database (replace with your database credentials)
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'caretaker';

            $mysqli = new mysqli($host, $username, $password, $database);

            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }

            // Query to retrieve schedule data
            $query = "SELECT * FROM travel_schedule";
            $result = $mysqli->query($query);

            // Fetch and display schedule data
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['day'] . "</td>";
                echo "<td>" . $row['starting_location'] . "</td>";
                echo "<td>" . $row['departure_time'] . "</td>";
                echo "<td>" . $row['ending_location'] . "</td>";
                echo "<td>" . $row['arrival_time'] . "</td>";
                echo "</tr>";
            }

            // Close the database connection
            $mysqli->close();
            ?>
        </table>
    </div>
</body>
</html>

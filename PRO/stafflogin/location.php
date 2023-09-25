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
            <tr>
                <td>Sunday</td>
                <td>Location A</td>
                <td>9:00 AM</td>
                <td>Location B</td>
                <td>12:00 PM</td>
            </tr>
            <tr>
                <td>Monday</td>
                <td>Location B</td>
                <td>8:30 AM</td>
                <td>Location C</td>
                <td>11:30 AM</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>Location C</td>
                <td>10:00 AM</td>
                <td>Location D</td>
                <td>1:00 PM</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>Location D</td>
                <td>9:30 AM</td>
                <td>Location E</td>
                <td>12:30 PM</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>Location E</td>
                <td>7:45 AM</td>
                <td>Location F</td>
                <td>10:45 AM</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>Location F</td>
                <td>11:15 AM</td>
                <td>Location G</td>
                <td>2:15 PM</td>
            </tr>
            <tr>
                <td>Saturday</td>
                <td>Location G</td>
                <td>8:00 AM</td>
                <td>Location A</td>
                <td>11:00 AM</td>
            </tr>
        </table>
    </div>
</body>
</html>

<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM sensor_data ORDER BY id DESC LIMIT 10");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Smoke Detection Dashboard</title>

    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            text-align: center;
        }

        h2 {
            background: #333;
            color: white;
            padding: 10px;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        th {
            background: #444;
            color: white;
        }

        .SAFE { color: green; font-weight: bold; }
        .WARNING { color: orange; font-weight: bold; }
        .DANGER { color: red; font-weight: bold; }

    </style>
</head>

<body>

<h2>🔥 Smoke Detection System Dashboard</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Temperature (°C)</th>
        <th>Humidity (%)</th>
        <th>Smoke Level</th>
        <th>Status</th>
        <th>Time</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['temperature']; ?></td>
        <td><?php echo $row['humidity']; ?></td>
        <td><?php echo $row['smoke_level']; ?></td>
        <td class="<?php echo $row['status']; ?>">
            <?php echo $row['status']; ?>
        </td>
        <td><?php echo $row['created_at']; ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
<?php

include "config.php";
$username = $_GET['name'];
$sql = "SELECT * FROM `personal details` WHERE `Name` = '$username'";
$result1 = mysqli_query ($conn , $sql);
$row = mysqli_fetch_assoc($result1);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Rajwt's Hospital Dashboard</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}

main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.patient-details {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 10px;
    background-color: #f0f0f0;
}

.patient-card {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

    </style>
</head>
<body>
    <header>
        <h1>Rajwt's Hospital Dashboard</h1>
    </header>
    <main>
        <section class="patient-details">
            <h2>Patient Details</h2>
            <div class="patient-card" id="patient-card">
                <h3><?php echo $row['Name']?></h3>
                <p><?php echo $row['Age']?></p>
                <p><?php echo $row ['Gender']?></p>
                <p><?php echo $row ['Address']?></p>
                <p><?php echo $row ['Phone_Number']?></p>
                <p><?php echo $row ['Email']?></p>
                <!-- Patient details will be displayed here -->
            </div>
        </section>
    </main>
</body>
</html>

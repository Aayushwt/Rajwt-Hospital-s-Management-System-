<?php

    include "config.php";

    $username = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql_check = "SELECT * FROM `personal details` WHERE `Email` = '$email'";



    
    $result1 = mysqli_query ($conn , $sql_check);
    if($result1->num_rows > 0){

        echo "<script>
                    alert('User already registered! Please try with another Email.');
                    window.location.href = 'register.html';
                </script>";
        
    }
    else{
        $sql = "INSERT INTO `personal details` (`Name`,`Age` ,`Gender`,`Address`, `Email`,`Phone_Number`, `Password`) VALUES ('$username',' $age',' $gender','$address', '$email','$phoneNumber', '$password')";
        $result = mysqli_query ($conn , $sql);
        if ($result === true) {
            echo "<script>
                    alert('Registered Successfully');
                    window.location.href = 'dashboard.php?name=".$username."';
                </script>";
        } 
        else {
                echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>
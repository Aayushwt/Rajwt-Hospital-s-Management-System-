<?php

include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `personal details` WHERE `Name` = '$username' and `Password` = '$password'";

$result = mysqli_query ($conn , $sql);


if($result){
  
    header('Location:dashboard.php?name='.$username.'');
   echo "hello";
}
else{
    echo "<script> alert('Incorrect Details');
     </script>";
}
?>
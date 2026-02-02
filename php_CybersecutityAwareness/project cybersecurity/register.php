<?php

$servername = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "userdb";


$conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Database connection failed");
}


$username = $_POST['username'];  
$email    = $_POST['cyber_email'];     
$pass = $_POST['password'];   


$success = false;


function registrationCounter() {
    static $count = 0;
    $count++;
    return $count;
}


$sql = "INSERT INTO cyberusers (username, cyber_email, password)
        VALUES ('$username', '$email', '$pass')";

if (mysqli_query($conn, $sql)) {
    $success = true;
    echo "<h3>Registration Successful </h3>";
    echo "Total registrations this request: " . registrationCounter();
} else {
    echo "Registration Failed ";
}


mysqli_close($conn);
?>

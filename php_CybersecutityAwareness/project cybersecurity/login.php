<?php
$conn = mysqli_connect("localhost", "root", "", "userdb");

if (!$conn) {
    die("Database connection failed");
}


function validateLogin($conn) {

    $username = $_POST['username'];      // local variable
    $password = $_POST['password']; // local variable

    $sql = "SELECT * FROM cyberusers WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed");
    }

    if (mysqli_num_rows($result) == 1) {
        print "Login successful ";
    } else {
        print "Invalid email or password ";
    }
}


validateLogin($conn);

mysqli_close($conn);
?>

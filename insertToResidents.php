<?php
    include "dbconnect.php";

    $email=$_GET["email"];
    $password=$_GET["password"];
    $firstName=$_GET["firstName"];
    $lastName=$_GET["lastName"];
    $rutgersID=$_GET["rutgersID"];
    $apartmentNumber=$_GET["apartmentNumber"];

    $hashedPass=password_hash($password, PASSWORD_DEFAULT);


    $resultin = $mysqli->query("INSERT INTO Logins VALUES ('" .$email. "', '" .$hashedPass. "', '" .$firstName. "','" .$lastName. "','" .$rutgersID. "', '" .$apartmentNumber. "');"); 
    $resultout = $mysqli->query("SELECT * from Logins WHERE email='" .$email. "';");
    if($resultout->num_rows > 0) {
        echo "Insert was a success!";
    } else{
        echo "Insert was a failure!";
    }
    $mysqli->close();
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv = "Refresh" content = "2.5; url = index.php">
        </head>
        <body>
            <p><em>Redirecting in 2 seconds...</em></p>
        </body>
    </html>
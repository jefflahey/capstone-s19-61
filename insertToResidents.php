<?php
    include "dbconnect.php";

    $username=$_GET["username"];
    $password=$_GET["password"];
    $firstName=$_GET["firstName"];
    $lastName=$_GET["lastName"];
    $rutgersID=$_GET["rutgersID"];
    $apartmentNumber=$_GET["apartmentNumber"];


    $resultin = $mysqli->query("INSERT INTO Logins VALUES ('" .$username. "', '" .$password. "', '" .$firstName. "','" .$lastName. "','" .$rutgersID. "', '" .$apartmentNumber. "');"); 
    $resultout = $mysqli->query("SELECT * from Logins WHERE username='" .$username. "';");
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
            <meta http-equiv = "Refresh" content = "5; url = index.php">
        </head>
        <body>
            <p><em>Redirecting in 5 seconds...</em></p>
        </body>
    </html>
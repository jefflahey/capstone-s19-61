<?php
    include "dbconnect.php";
    date_default_timezone_set("America/New_York");

    $firstName=$_GET["firstName"];
    $lastName=$_GET["lastName"];
    $rutgersID=$_GET["rutgersID"];
    $residentName=$_GET["residentName"];
    $apartmentNumber=$_GET["apartmentNumber"];
    $dateTime = date("Y-m-d H:i:s");



    //Top Drinkers at Bar
    $resultin = $mysqli->query("INSERT INTO Queued_Guests VALUES ('" .$firstName. "','" .$lastName. "','" .$rutgersID. "', '" .$residentName. "', '" .$apartmentNumber. "', '" .$dateTime. "');"); 
    $resultout = $mysqli->query("SELECT * from Queued_Guests WHERE ruid='" .$rutgersID. "';");
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
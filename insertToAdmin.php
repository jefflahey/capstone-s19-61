<?php
    include "dbconnect.php";

    $time=$_GET["time"];
    $status=$_GET["action"];

    $resultin = $mysqli->query("INSERT INTO Admin_Table SELECT first_name, last_name, ruid, resident_name, apt_num, time, '".$status."' FROM Queued_Guests WHERE time = '".$time."';"); 
    $resultout = $mysqli->query("DELETE FROM Queued_Guests WHERE time='" .$time. "';");
    $result = $mysqli->query("SELECT * FROM Admin_Table WHERE time = '".$time."';");
    if($result->num_rows > 0) {
        echo "Action was a success!";
    } else{
        echo "Action was a failure!";
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
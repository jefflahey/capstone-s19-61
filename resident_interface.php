<!DOCTYPE html>
<html>
<head>
    <title>Guests requesting access to your apartment</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style type = "text/css">
        html,
        body{
            height: 100%;
        }

        #cover {
            background: white url('') center center no-repeat;
            background-size: cover;
            height: 100%;
            text-align: center;
            display: flex;
            align-items: center;
        }

    #cover-caption {
        width: 100%;
    }
        table {
            border-collapse: collapse;
            width: 100%;
            color: #d96459;
            font-family: monospace;
            font-size: 25px;
            text-align: left
        }
        th {
            background-color: #d96459;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>
        <?php
            include "dbconnect.php";
		    // get user input data
            $email = $_GET["email"];
            $password = $_GET["password"];
            $validatePass = "SELECT 
                            password
                        FROM
                            Logins
                        WHERE
                            email = '" .$email. "';";
            $hashedPass = $mysqli->query($validatePass);
            $row = $hashedPass->fetch_assoc();
            $hashedResult = (string) $row['password'];
            if(!password_verify($password, $hashedResult)){ ?>
                <html>
                <head>
                    <meta http-equiv = "Refresh" content = "5; url = login.php">
                </head>
                <body>
                <p><em>Password is incorrect.</em></p> <br>
                <p><em>Redirecting in 5 seconds...</em></p>
                </body>
                </html> <?php
                exit;
            }
            ?>
            <body>
            <table>
                <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Time Requested</th>
                <th>Action</th>
                </tr>
            <?php
                $validateRoom = "SELECT 
                                    apt_num
                                FROM
                                    Logins
                                WHERE
                                    email = '" .$email. "';";
                $apt_num = $mysqli->query($validateRoom);
                $row = $apt_num->fetch_assoc();
                $roomResult = (int) $row['apt_num'];

                $sql = "SELECT first_name, last_name, time 
                        FROM Queued_Guests 
                        WHERE apt_num = $roomResult ";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                //output data of each row
                $c = 0;
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>". $row["first_name"] ."</td>";
                    echo "<td>". $row["last_name"] ."</td>";
                    echo "<td>". $row["time"] ."</td>";
                    echo "<td> <a href='insertToAdmin.php?time=".$row["time"]."&action=Approved'>Approve</a> 
                        <a href='insertToAdmin.php?time=".$row["time"]."&action=Denied'>Deny</a></td>";
                    echo "</tr>";
                    $c++;
                    }
                echo "</table>";
                } else {
                echo "0 results";
                }
                //free memory associated with result
                $result->close();
                ?>
    </table>
        
        <a href="index.php" class="btn btn-outline-secondary btn-sm" role="button">
            Home
        </a>
</body>
</html>
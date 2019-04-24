<!DOCTYPE html>
<html>
<head>
    <title>Status</title>
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
<body>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Apartment Requested
            <th>Time Requested</th>
            <th>Status</th>
        </tr>
        <?php
            include "dbconnect.php";
		    $sql = "SELECT 
                        first_name, last_name, apt_num, time, status
                    FROM
                        Admin_Table
                    ORDER BY time desc";
		    $result = $mysqli->query($sql);
		
		    if ($result->num_rows > 0) {
			    //output data of each row
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>". $row["first_name"] ."</td>";
                    echo "<td>". $row["last_name"] ."</td>";
                    echo "<td>". $row["apt_num"] ."</td>";
                    echo "<td>". $row["time"] ."</td>";
                    echo "<td>". $row["status"] ."</td>";
                    echo "</tr>";
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
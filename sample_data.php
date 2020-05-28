<?php
$servername = "localhost";
$username = "dbuser";
$password = "dbpass";
$dbname = "valid";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `name`, `dateofbirth`, `address`, `village`, `zip`, `precinct` FROM `20200521` WHERE `NAME` LIKE '%lujan, geo%' AND `ZIP` = 96929";



$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo    "Name: " . $row["name"]. "<br>". 
                "Born: " . $row["dateofbirth"]. "<br>".
                "Mail: " . $row["address"]." ". $row["village"]. ", GU ". $row["zip"]. "<br>". 
                "Precinct: " . $row["precinct"]. "<br>";
    }
    
} else {
    echo "0 results";
}
$conn->close();
?>
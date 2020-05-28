<?php
$servername = "localhost";
$username = "dbuser";
$password = "dbpass";
$dbname = "webcache_apps";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `name`, `dateofbirth`, `address`, `village`, `zipcode`, `precinct` FROM `20200521` WHERE name LIKE 'lujan, geo%' AND dateofbirth = '04/18/1973' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo    "<p>Voter record found <br>".
        		"Name: " . $row["name"]. "<br>". 
                "Born: " . $row["dateofbirth"]. "<br>".
                "Mail: " . $row["address"]." ". $row["village"]. ", GU ". $row["zip"]. "<br>". 
                "Precinct: " . $row["precinct"]. "</p><br>";
    }
    
} else {
    echo "0 results found";
}
$conn->close();
?>
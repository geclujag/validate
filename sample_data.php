<?php
$servername = "localhost";
$username = "dbuser";
$password = "dbuser";
$dbname = "valid";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT `id`, `first_name`, `middle_name`, `last_name`, `email`, `address_line_1`, `address_line_2`, `address_village`, `address_zip`, `ID_type`, `ID_num`, `date_issued`, `date_expired`, `height`, `weight`, `hair`, `eye`, `sex`, `class`, `endorsements`, `restrictions`, `dob` FROM `2015_12d` WHERE `first_name` = 'jeremy' AND `middle_name` = 'scott' AND `last_name` = 'berry' AND `dob` = '10/31/1960' AND `address_zip` = '96912' AND `ID_num` = '1129653294' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo 	"Name: " . $row["first_name"]. " " . $row["middle_name"]. " " . $row["last_name"]. "<br>". 
        		"Born: " . $row["dob" ]. "<br>". 
        		$row["email"]. "<br>".  
        		"Address:". "<br>".
        		$row["address_line_1"]. "<br>". 
        		$row["address_line_2"]. "<br>". 
        		"Village: " . $row["address_village"]. ",GU Zip: " . $row["address_zip"]. "<br>". 
        		"ID type and Number: " . $row["ID_type"]. " #". $row["ID_num"]. "<br>". 
        		"Issued on: " . $row["date_issued"]. ", Expires on: " . $row["date_expired"]. "<br>". 
        		"Height: " . $row["height"]. ", Weight: " . $row["weight"]. ", Hair: " . $row["hair"]. ", Eyes: " . $row["eye"]. ", Gender: " . $row["sex"]. "<br>". 
        		"Class: " . $row["class"]. "<br>". 
        		"Endorsements: ". $row["endorsements"]. "<br>". 
        		"Restrictions: " . $row["restrictions"]. "<br>". 
        		"<br>";
    }
    
} else {
    echo "0 results";
}
$conn->close();
?>

<!-- SELECT `id`, `first_name`, `middle_name`, `last_name`, `email`, `address_line_1`, `address_line_2`, `address_village`, `address_zip`, `ID_type`, `ID_num`, `date_issued`, `date_expired`, `height`, `weight`, `hair`, `eye`, `sex`, `class`, `endorsements`, `restrictions`, `dob` FROM `2015_12d` WHERE 1 -->
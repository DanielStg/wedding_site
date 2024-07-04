<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wedding2024";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "RSVP_SCRIPT: Server connection failed\n";
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM guests";

$result = $conn->query($sql);
$rows = mysqli_fetch_all($result);

echo json_encode($rows);
// if ($result->num_rows > 0){
//     while($row =$result->fetch_assoc()){
//         echo $row["Name"] . "\n";
//         echo $row["Diet"] . "\n";
//     } 
// } else {
//     echo "0 results"; 
// } 

$conn->close();

?>
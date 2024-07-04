<?php

if (
    $_SERVER['REQUEST_METHOD'] === 'POST'
    && isset($_POST["fname"])
    && isset($_POST["diet"])
    
) {

    $guestname = $_POST["fname"];
    $guestdiet = implode(',', $_POST["diet"]); //send array as string

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
    $sql = "INSERT INTO guests(Name, Diet) VALUES ('$guestname', '$guestdiet')";

    if ($conn->query($sql) === TRUE) {
        
        echo "RSVP_SCRIPT New record created successfully\n";
    } else {
        
        echo "RSVP_SCRIPT Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
    echo "RSVP_SCRIPT End\n";
 }
?>



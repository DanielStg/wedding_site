<?php

if (
    $_SERVER['REQUEST_METHOD'] === 'POST'
    && isset($_POST["fname"])
    && isset($_POST["diet"])
    
) {

     $guestname = $_POST["fname"];
     $guestdiet = implode(',', $_POST["diet"]); //send array as string

     $newData = [
        [
            "name" => $guestname,
            "diet" => $guestdiet
        ]
     ];

     //echo $newData[0];
    echo json_encode($newData);
    }
    else{
        echo "null";
    }
?>



<?php
if (
    $_SERVER['REQUEST_METHOD'] === 'POST'
    && isset($_POST["fname"])
    && isset($_POST["events"])
    // && isset($_POST["diet"])
    
) {

    $json = json_encode($_POST).PHP_EOL;

    //$message = $json.PHP_EOL;
    // Save JSON to file
    file_put_contents("guests.json", $json, FILE_APPEND);
    // Return some data back to the AJAX request.
    echo $json;
    // PS it's not wise to send passwords that way.
}


?>
<?php

session_start();

#if(isset($_SESSION["user_id"])){
    #$mysqli = require __DIR__ . "/assets/database/database.php";
    #$sql = "SELECT * FROM user WHERE id={$_SESSION["user_id"]}";

    #$result = $mysqli->query($sql);
    #$user = $result->fetch_assoc();
#}

#?>

<!DOCTYPE html>
<html>
    <head>
        <title>Job2Be - Semana da Biomédica</title>
        <link rel="icon" type="image/x-icon" href="assets/images/logocolorido.png">
        <meta charset="UTF-8">
        <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    </head>
    <body>
        Hello World!
    </body>

</html>

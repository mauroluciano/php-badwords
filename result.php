<?php
$name = $_GET["name"];
$surname = $_GET["surname"];
$note = $_GET["note"];

$result = str_replace($note, '***', $note );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>risultato primo PHP</title>
</head>
<body>
    <label>Nome:</label><br>
    <p><?php echo $name ?></p>
    <hr>

    <label>Cognome:</label><br>
    <p><?php echo $surname ?></p>
    <hr>

    <label>lunghezza Cognome:</label><br>
    <p><?php var_dump ($surname); ?></p>
    <hr>

    <label>Note:</label><br>
    <p><?php echo $result ?></p>



</body>
</html>
<?php
require_once __DIR__ . '/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./result.php" method="GET">
        <input type="text" name="pswd_length" placeholder="Quanti caratteri vuoi inserire?">
        <button>Genera Password</button>
    </form>
</body>

</html>
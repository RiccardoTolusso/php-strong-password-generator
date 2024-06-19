<?php
$pswd_length = 0;

if (!empty($_GET['pswd_length'])) {
    $pswd_length = intval($_GET['pswd_length']);
}

if ($pswd_length > 0) {
    echo "genero password di lunghezza: $pswd_length";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="." method="GET">
        <input type="text" name="pswd_length" placeholder="Quanti caratteri vuoi inserire?">
        <button>Genera Password</button>
    </form>
</body>

</html>
<?php
require __DIR__ . '/functions.php';

if ($_SESSION['pswd'] == "") {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password generata</title>
</head>

<body>
    <h1><?php echo $_SESSION['pswd'] ?></h1>
</body>

</html>
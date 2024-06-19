<?php
$pswd_length = 0;
$pswd = "";

if (!empty($_GET['pswd_length'])) {
    $pswd_length = intval($_GET['pswd_length']);
}

$valid_params = [
    'char' => true,
    'number' => true,
    'simbol' => true
];

$valid_simbols = ['-', '_', '.', ',', '@', '?'];

$params_to_use = [];

foreach ($valid_params as $key => $value) {
    if ($value) {
        $params_to_use[] = $key;
    }
}

function random_char()
{
    $char_int_range = [65, 90];
    $use_lowercase = random_int(0, 1);
    if ($use_lowercase == 1) {
        $char_int_range = [97, 122];
    }
    $char_int = random_int($char_int_range[0], $char_int_range[1]);
    $char = chr($char_int);

    return $char;
}

function random_simbol($valid_simbols)
{
    return $valid_simbols[random_int(0, count($valid_simbols) - 1)];
}

// random_char();
// random_simbol($valid_simbols);

if ($pswd_length > 0 && count($params_to_use) > 0) {
    for ($i = 0; $i < $pswd_length; $i++) {
        $temp_param = $params_to_use[random_int(0, count($params_to_use) - 1)];
        if ($temp_param == "char") {
            $pswd = $pswd . random_char();
        } elseif ($temp_param == "number") {
            $pswd = $pswd . random_int(0, 9);
        } elseif ($temp_param == "simbol") {
            $pswd = $pswd . random_simbol(($valid_simbols));
        } else {
            $pswd = $pswd . "#";
        }
    }
}

echo $pswd




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
<?php

session_start();


if (!isset($_SESSION['pswd'])) {

    $_SESSION['pswd'] = "";
}

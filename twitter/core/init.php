<?php
include "database/connection.php";
include "classes/user.php";
include "classes/follow.php";
include "classes/tweet.php";
include "classes/message.php";

global $pdo;

session_start();

date_default_timezone_set('Africa/nairobi');

$getFromU = new User($pdo);
$getFromT = new Tweet($pdo);
$getFromF = new Follow($pdo);
$getFromM = new Message($pdo);

define("BASE_URL","http://localhost/twiga/twitter/");
?>
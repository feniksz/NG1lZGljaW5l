<?php


$dsn = "mysql:host=localhost;dbname=zadanie";
$user = "root";
$passwd = "";

try{
    $db = new PDO($dsn, $user, $passwd);
}catch(PDOException $e){
    echo 'Połączenie nie mogło zostać utworzone.<br />' . $e->getMessage();
}


if (true === isset($_SERVER['REDIRECT_URL']) && $_SERVER['REDIRECT_URL'] == '/delete') {
    include "delete.php";
}
elseif  (true === isset($_SERVER['REDIRECT_URL']) && $_SERVER['REDIRECT_URL'] == '/setup'){
    include "setup.php";
} else {
    include "home.php";
}
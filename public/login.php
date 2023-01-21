<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\User;


if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $user = new User();

   $result = $user->login($login,$pass);

   if($result===true){
        echo "helo User";

   }else {
        echo "error Login";
   }
}

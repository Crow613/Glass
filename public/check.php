<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\User;

if (($_SERVER['REQUEST_METOD']?? 'GET')  === 'post') {


    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $user = new User;

    $user->addUser($name, $surname, $login, $email, $password);

}

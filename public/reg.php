<?php



require_once dirname(__DIR__) . '/vendor/autoload.php';


use App\User;



if ($_SERVER['REQUEST_METHOD']  === 'POST') {
   
    $name = $_POST['name']; 
    $surname = $_POST['surname'];
    $login = $_POST['login'];
    $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
    $email = filter_var($email,FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];


    $user = new User;

    $user->addUser($name, $surname, $login, $email, $password);

}

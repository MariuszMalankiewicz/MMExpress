<?php

require("core/Validation.php");

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST')
{

    $formData = 
    [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];

    Validation::trimData($formData);

    if(!Validation::passwordVerify($formData['email'], $formData['password']))
    {

        $errors['passwordVeryfy'] = "Email lub hasło jest nie poprawne";

    }

    if(empty($errors))
    {
        $config = require("config.php");

        $dbh = new Database($config['database']);

        $userId = $dbh->query("SELECT id FROM `user` WHERE email = :data", [':data' => $formData['email']])->fetch();

        $_SESSION['userId'] = $userId;

        header("location: /account");

        exit();
    }
    
}

require("views/auth/login.view.php");
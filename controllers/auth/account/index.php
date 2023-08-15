<?php

$heading = 'Moje oferty';

$config = require "config.php";

$dbh = new Database($config['database']);

$userProducts = $dbh->query("SELECT `id`, `category`, `name`, `price` FROM `products` WHERE user_id = :user_id", 

[':user_id' => $_SESSION['userId']['id']])

->fetchall();

require 'views/auth/account/index.view.php';
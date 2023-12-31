<?php

use Core\App;
use Core\Database;
use Core\Validation;

$db = App::resolve(Database::class);

$editProduct = $db->query("SELECT `user_id`, `category`, `name`, `price` FROM `products` WHERE id = :product_id", 

[':product_id' => $_POST['id']])

->findOrFail();

authorize($editProduct['user_id'] === $_SESSION['userId']['id']);

$errors = [];

$formData = 
[
    'name' => $_POST['name'],
    'category' => $_POST['category'],
    'price' => $_POST['price'],
];

Validation::trimData($formData);

if(Validation::strlenString($formData['name'], 3, 50))
{

    $errors['nameLength'] = 'Nazwa musi posiadać od 3 do 50 znaków';

}

if(empty($formData['price']))
{

    $errors['priceLength'] = 'Cena nie może być mniejsza niż 0';

}

if(!empty($errors))
{

    view('products/edit.view.php',
    [
        'heading' => 'Edytuj produkt',
        'errors' => $errors,
    ]
    );
}

$query = 'UPDATE `products` SET `category`=:category,`name`=:name, `price`=:price WHERE id= :id';

$db->query($query, 
[
    ':category' => $formData['category'], 
    ':name' => $formData['name'],
    ':price' => $formData['price'],
    ':id' => $_POST['id'],
]);

header("location: /products");

exit();
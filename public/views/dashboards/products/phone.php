<?php

$config = require("config.php");

require_once("Core/Database.php");

require_once("Core/functions.php");

$dbh = new Database($config['database']);

$products = $dbh->query("SELECT * FROM products where category = :category", ['category' => 'telefony'])->fetchAll();

?>


<!-- category wrapper -->
<div class='flex justify-center content-center'>
    <h1 class='pt-6 text-xl font-bold'><?= ucfirst($products[0]['category']) ?></h1>
</div>

<!-- products wrapper -->
<div class='flex overflow-x-scroll'>

<?php

foreach ($products as $key => $product) 
{

echo
"
    <div class='py-6 px-3'>
        <div class='flex flex-col justify-around items-center  w-72 h-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700'>
            <a href='#'>
                <img class='p-2 rounded-t-lg w-72 h-60' src= 'data:image/jpeg;base64, ".base64_encode( $product['img'] ) ."' />
            </a>
            <div class='px-5 pb-5'>
                <a href='#'>
                    <h5 class='text-xl font-semibold tracking-tight text-gray-900 dark:text-white'>". ucfirst($product['name']) ."</h5>
                </a>
                <div class='flex items-center mt-2.5 mb-5'>
                    <svg class='w-4 h-4 text-yellow-300 mr-1' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='currentColor' viewBox='0 0 22 20'>
                        <path d='M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z'/>
                    </svg>
                    <svg class='w-4 h-4 text-yellow-300 mr-1' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='currentColor' viewBox='0 0 22 20'>
                        <path d='M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z'/>
                    </svg>
                    <svg class='w-4 h-4 text-yellow-300 mr-1' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='currentColor' viewBox='0 0 22 20'>
                        <path d='M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z'/>
                    </svg>
                    <svg class='w-4 h-4 text-gray-200 dark:text-gray-600' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='currentColor' viewBox='0 0 22 20'>
                        <path d='M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z'/>
                    </svg>
                    <svg class='w-4 h-4 text-gray-200 dark:text-gray-600' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='currentColor' viewBox='0 0 22 20'>
                        <path d='M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z'/>
                    </svg>
                
                    <span class='bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3'> ". $product['rating'] ."</span>
                </div>
                <div class='flex items-center justify-between'>
                    <span class='text-2xl font-bold text-gray-900 dark:text-white'>". $product['price'] ." zł</span>
                    <a href='#' class='text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>Dodaj do koszyka</a>
                </div>
            </div>
        </div>
    </div>
"; 
        
}   
?>



</div>
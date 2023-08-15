<?php

return [
    '/' => 'controllers/dashboards/index.php',
    '/news' => 'controllers/dashboards/news.php',
    '/contact' => 'controllers/dashboards/contact.php',

    '/welcome' => 'controllers/auth/welcome.php',
    '/login' => 'controllers/auth/login.php',
    '/registration' => 'controllers/auth/registration.php',

    '/account' => 'controllers/auth/account/index.php',
    '/create' => 'controllers/auth/account/create.php',

    '/logout' => 'controllers/auth/account/logout.php',
];
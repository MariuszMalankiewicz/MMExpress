<?php

require base_path("views/partials/head.php");

require base_path("views/partials/nav.php");

?>

<div class="flex flex-col items-center justify-center h-screen bg-white">
    <div>
        <h1 class="font-bold text-2xl mb-4">Zarejestruj się</h1>
    </div>
    <div class="w-full max-w-xs">

        <form method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Nazwa
            </label>
            <input 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                type="text" 
                name="username" 
                value="<?= isset($_POST['registration']) ? $_POST['username'] : '' ?>" 
                placeholder="Nazwa"
                minlength="3"
                maxlength="15"
                required
            >
            </div>

            <?= isset($errors['usernameLength']) ? '<p class="text-red-500 text-sm font-bold mb-3">'.$errors['usernameLength'].'</p>' : ''; ?>

            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                type="email" 
                name="email" 
                value="<?= isset($_POST['registration']) ? $_POST['email'] : '' ?>" 
                placeholder="Email"
                minlength="3"
                maxlength="15"
                required
            >
            </div>

            <?= isset($errors['emailLength']) ? '<p class="text-red-500 text-sm font-bold mb-3">'.$errors['emailLength'].'</p>' : ''; ?>
            <?= isset($errors['emailValid']) ? '<p class="text-red-500 text-sm font-bold mb-3">'.$errors['emailValid'].'</p>' : ''; ?>
            <?= isset($errors['emailInDb']) ? '<p class="text-red-500 text-sm font-bold mb-3">'.$errors['emailInDb'].'</p>' : ''; ?>

            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password1">
                Hasło
            </label>
            <input 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" 
                type="password" 
                name="password" 
                value="<?= isset($_POST['registration']) ? $_POST['password'] : '' ?>" 
                placeholder="******************" 
                minlength="3"
                maxlength="15"
                required
            >
            </div>

            <?= isset($errors['passwordLength']) ? '<p class="text-red-500 text-sm font-bold mb-3">'.$errors['passwordLength'].'</p>' : ''; ?>

            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Powtórz Hasło
            </label>
            <input 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" 
                type="password" 
                name="repassword" 
                value="<?= isset($_POST['registration']) ? $_POST['repassword'] : '' ?>" 
                placeholder="******************" 
                minlength="3"
                maxlength="15"
                required
            >

            <?= isset($errors['repasswordLength']) ? '<p class="text-red-500 text-sm font-bold mb-3">'.$errors['repasswordLength'].'</p>' : ''; ?>
            <?= isset($errors['passwordDiffrent']) ? '<p class="text-red-500 text-sm font-bold mb-3">'.$errors['passwordDiffrent'].'</p>' : ''; ?>

        </div>
            <div class="flex items-center justify-around">
                <button class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="registration">
                    Zarejestruj się
                </button>
                <a class="py-2 px-4" href="/welcome">Powrót</a>
            </div>

        </form>

    </div>
</div>

<?php

require base_path("views/partials/footer.php");

?>

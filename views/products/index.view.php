<?php

require base_path('views/partials/head.php');

require base_path('views/partials/nav.php');

require base_path('views/partials/header.php');

?>

<main class="min-h-full w-full bg-white shadow-md px-1 pt-6 my-2 overflow-x-auto">

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nazwa
                </th>
                <th scope="col" class="px-6 py-3">
                    Zdjecie
                </th>
                <th scope="col" class="px-6 py-3">
                    Kategoria
                </th>
                <th scope="col" class="px-6 py-3">
                    Cena
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>

        <?php foreach($userProducts as $userProduct) : ?>

            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 hover:bg-gray-800 hover:text-white hover:cursor-pointer">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= htmlspecialchars($userProduct['name']); ?>
                    </th>
                    <td class="px-6 py-4">
                        Zdjęcie
                    </td>
                    <td class="px-6 py-4">
                    <?= htmlspecialchars($userProduct['category']); ?>
                    </td>
                    <td class="px-6 py-4">
                    <?= htmlspecialchars($userProduct['price']); ?>
                    </td>
                    <td class="px-6 py-4 text-center flex flex-row justify-center items-center">
                        <a href="/product/edit?id=<?= $userProduct['id']; ?>" class="pl-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edytuj</a>

                        <form method="POST" action="/product">
                            <input type="hidden" name="_method" value='DELETE'>
                            <input type="hidden" name="id" value='<?= $userProduct['id']; ?>'>
                            <button class="pl-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Usuń</button>
                        </form>
                    </td>
                </tr>
            </tbody>

        <?php endforeach ?>
        
    </table>
    
</main>

<?php

require base_path('views/partials/footer.php');

?>

<footer class="bg-white rounded-lg shadow dark:bg-gray-900 mt-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <p class="flex items-center mb-4 sm:mb-0">
                <img src="/imgs/logo.png" class="h-8 mr-3 border rounded-md" alt="MMExpress logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"><?php $config = require base_path("config.php"); echo $config['app']['name']; ?></span>
            </p>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="https://mariusz-malankiewicz-portfolio.netlify.app" target="blank" class="mr-4 hover:underline md:mr-6 ">Portfolio</a>
                </li>
                <li>
                    <a href="/contact" class="hover:underline">Kontakt</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline"><?php $config = require base_path("config.php"); echo $config['app']['name']; ?></a>. wszystkie prawa zastrzeżone.</span>
    </div>
</footer>
    <script src="tailwind.js"></script>
</body>
</html>
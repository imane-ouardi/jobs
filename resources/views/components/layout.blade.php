<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JobPortal</title>
    <link rel="icon" href="{{ asset('jobportal.webp') }}" type="image/webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


</head>

<body class="bg-light text-black font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('jobportal.webp') }}"  class="h-16" alt="Logo">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">JobPortal</span>
                </a>
        
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    @auth
                        <a href="/admin/jobs/create" class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Post a Job</a>
                        <form method="POST" action="/logout" class="ml-2">
                            @csrf
                            @method('DELETE')
                            <button class="text-sm font-medium text-red-600 dark:text-red-400 hover:underline">Log Out</button>
                        </form>
                    @endauth
        
                    @guest
                        <a href="/admin/register" class="text-sm font-medium text-orange-700 dark:text-orange-400 hover:underline px-4 py-2">Sign Up</a>
                        <a href="/admin/login" class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Log In</a>
                    @endguest
        
                    <!-- Hamburger Menu -->
                    <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                </div>
        
                <!-- Navbar Links -->
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li><a href="/" class="block py-2 px-3 text-gray-900 md:p-0 md:hover:text-orange-700 dark:text-white dark:hover:text-orange-400">Jobs</a></li>
                        <li><a href="#" class="block py-2 px-3 text-gray-900 md:p-0 md:hover:text-orange-700 dark:text-white dark:hover:text-orange-400">Careers</a></li>
                        <li><a href="#" class="block py-2 px-3 text-gray-900 md:p-0 md:hover:text-orange-700 dark:text-white dark:hover:text-orange-400">Salaries</a></li>
                        <li><a href="#" class="block py-2 px-3 text-gray-900 md:p-0 md:hover:text-orange-700 dark:text-white dark:hover:text-orange-400">Companies</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>

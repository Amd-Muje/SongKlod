@props(["title", "section_title" => "Menu"])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css"
    />
    <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css"
    />
    <title>{{ $title }}</title>
</head>
<body class="bg-gray-950">
    <header x-data="{ open: false }"
        class="flex items-center justify-between p-5 bg-gray-900">
        <h2
        class="text-lg sm:text-xl font-bold text-gray-600">SongKlod</h2>
        {{-- Desktop --}}
        <nav>
            <ul class="hidden md:flex">
                <li>
                    <a href="{{ route('dashboard') }}"
                    class="{{ request()->is('dashboard') ? 'text-yellow-400' : 'text-gray-200' }}
                    text-gray-600 text-lg sm:text-xl hover:text-gray-200 hover:border-b-2 hover:border-gray-200 px-4 py-2">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('songs.index') }}"
                    class="{{ request()->is('songs') ? 'text-yellow-400' : 'text-gray-200' }}
                    text-gray-600 text-lg sm:text-xl hover:text-gray-200 hover:border-b-2 hover:border-gray-200 px-4 py-2">
                        Songs
                    </a>
                </li>
                <li>
                    <a href=""
                    class="text-gray-600 text-lg sm:text-xl hover:text-gray-200 hover:border-b-2 hover:border-gray-200 px-4 py-2">
                        Albums
                    </a>
                </li>
                <li>
                    <a href=""
                    class="text-gray-600 text-lg sm:text-xl hover:text-gray-200 hover:border-b-2 hover:border-gray-200 px-4 py-2">
                        Genres
                    </a>
                </li>
                <li>
                    <a href=""
                    class="text-gray-600 text-lg sm:text-xl hover:text-gray-200 hover:border-b-2 hover:border-gray-200 px-4 py-2">
                        Profile
                    </a>
                </li>
                
            </ul>
        </nav>
    </header>
    <section class="px-3 py-4 flex flex-col gap-6">
        <h1 class="text-3xl font-bold text-gray-200">{{ $section_title }}</h1>
        {{ $slot }}
    </section>
</body>
</html>
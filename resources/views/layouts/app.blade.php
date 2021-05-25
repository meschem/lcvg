<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laracasts Videogames</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex items-center justify-between px-4 py-6">
            <div class="flex items-center">
                <a href='/'>
                    <div class="w-32 flex-none">LARACASTS</div>
                </a>
                <ul class="flex ml-16 space-x-8">
                    <il><a href="/games" class="hover-text-grey-400">Games</a></il>
                    <il><a href="/games" class="hover-text-grey-400">Reviews</a></il>
                    <il><a href="/games" class="hover-text-grey-400">Coming Soon</a></il>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')

</body>
</html>

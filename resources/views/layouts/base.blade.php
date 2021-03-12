<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Characters</a></li>
            <li><a href="addDraftsman">Add Draftsman</a></li>
            <li><a href="addCharacter">Add Character</a></li>
        </ul>
    </nav>
    <main>
        <div id="banniere_image">
        </div>
        @yield('content')
    </main>
    <footer></footer>
</body>
</html>
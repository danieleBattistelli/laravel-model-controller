<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    @vite(['resources/sass/app.scss', "resources/js/app.js"])
</head>
<body>
    <header>
        <nav class="nav">
            <div class="container-fluid" style="background-color: blue; color: white;">
                @yield("title")
            </div>
        </nav>
    </header>
    <div class="container py-4">
        @yield("content")
    </div>

</body>
</html>

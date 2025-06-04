<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <link rel="canonical" href="/login">
    <link rel="shortcut icon" type="image/jpg" href="https://i.imgur.com/UyXqJLi.png" />
    <title>{{ $title }}</title>
    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;50
0;600;700&display=swap" rel="stylesheet">
    <!-- JS -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <!-- content -->
    @yield('content')
</body>

</html>
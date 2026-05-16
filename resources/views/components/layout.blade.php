<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <x-nav-link href="/" style="color:rgb(255, 53, 255)">Home</x-nav-link> |
        <x-nav-link href="/jobs" style="color:rgb(255, 53, 255)">Jobs</x-nav-link>
    </nav>
    {{ $slot }}
</body>

</html>
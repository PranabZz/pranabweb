<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased bg-gray-200" style="font-family: Open Sans, sans-serif;">

    {{ $slot }}

    @stack('scripts')

</body>

</html>
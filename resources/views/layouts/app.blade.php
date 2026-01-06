<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | MyWebsite</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800 font-sans flex flex-col min-h-screen">

    <!-- Navbar -->
    @include('header')

    <!-- Page Content -->
    <main class="flex-1 container mx-auto py-16 px-6">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('footer')

</body>
</html>

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
    <nav class="bg-indigo-600 text-white px-8 py-4 flex justify-between items-center shadow-md">
        <h1 class="text-2xl font-bold">MyWebsite</h1>
        <div class="space-x-6">
            <a href="/" class="hover:text-indigo-200 transition">Home</a>
            <a href="/about" class="hover:text-indigo-200 transition">About</a>
            <a href="/services" class="hover:text-indigo-200 transition">Services</a>
            <a href="/contact" class="hover:text-indigo-200 transition">Contact</a>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="flex-1 container mx-auto py-16 px-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-indigo-600 text-white text-center py-4">
        <p>© {{ date('Y') }} MyWebsite. All rights reserved.</p>
    </footer>
</body>
</html>

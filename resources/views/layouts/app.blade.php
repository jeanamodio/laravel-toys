<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inventario dei Giocattoli')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col ">

    <!-- Header -->
    <header class="bg-blue-600 text-white">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold font-bubble ">
                <a href="{{ url('/') }}" class="hover:underline">I Giocattoli di Matteo</a>
            </h1>
            <nav>
                <a href="{{ route('toys.index') }}" class="px-4 py-2 hover:bg-blue-700 rounded">Giocattoli</a>
                <a href="{{ route('brands.index') }}" class="px-4 py-2 hover:bg-blue-700 rounded">Brand</a>
                <a href="{{ route('categories.index') }}" class="px-4 py-2 hover:bg-blue-700 rounded">Categorie</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-6 min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} I Giocattoli di Matteo.
        </div>
    </footer>

</body>
</html>

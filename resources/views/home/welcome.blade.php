<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-black min-h-screen flex flex-col">

    <header class="border-b border-gray-200 py-4 mb-8">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold tracking-tight">{{ $brand ?? 'Brand Name' }}</h1>
       
    <x-nav-link></x-resources>

        </div>
    </header>
 <section class="max-w-xl mx-auto text-center mt-20">
    <h2 class="text-3xl font-semibold mb-2">Contact</h2>
    <p class="text-gray-700 mb-6">Feel free to reach out via email or connect on GitHub.</p>
    <div class="space-x-4">
        <a href="mailto:john@example.com" class="underline">Email</a>
        <a href="https://github.com/johndoe" class="underline" target="_blank">GitHub</a>
    </div>
</section>

 <footer class="border-t border-gray-200 py-4 mt-8 text-center text-xs text-gray-500">
        &copy; 2025 {{ $brand ?? 'Brand Name' }}. {{ $label ?? '' }}
    </footer>
    <script src="{{ asset('assets/js/script.js') }}"></script>


</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukun Electric Retailer</title>

    <link rel="stylesheet" href="{{ asset('icons/fontawesome/css/all.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900">

<!-- ================= HEADER ================= -->
<header class="bg-white shadow sticky top-0 z-50">
   <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

    <!-- LEFT: Logo + Menu -->
    <div class="flex items-center gap-8">
        <!-- Logo -->
        <a href="/" class="">
            <img  class="w-28 h-11" src="{{ asset('images/sukun.png') }}" alt=" ⚡ Sukun Electric">
            
           
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex items-center gap-6 text-sm font-medium">
            <a href="/" class="hover:text-blue-600">Home</a>
            <a href="/products" class="hover:text-blue-600">Products</a>
            <a href="/cart" class="hover:text-blue-600">Cart</a>
            <a href="/contact" class="hover:text-blue-600">Contact</a>
        </nav>
    </div>

    <!-- RIGHT: Search + Admin -->
    <div class="hidden md:flex items-center gap-4">
        <div class="relative">
            <input type="text"
                   placeholder="Search products..."
                   class="border rounded-full px-4 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500">🔍</span>
        </div>

        <a href="/admin"
           class="bg-blue-600 text-white px-4 py-1.5 rounded hover:bg-blue-700 transition text-sm font-medium">
            Admin Login
        </a>
    </div>

    <!-- Mobile Button -->
    <button id="menu-btn" class="md:hidden focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>

</div>


    <!-- ================= MOBILE MENU ================= -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
        <nav class="flex flex-col space-y-4 px-6 py-4 text-sm font-medium">
            <a href="/" class="hover:text-blue-600">Home</a>
            <a href="/products" class="hover:text-blue-600">Products</a>
            <a href="/cart" class="hover:text-blue-600">Cart</a>
            <a href="/contact" class="hover:text-blue-600">Contact</a>

            <div class="relative">
                <input type="text"
                       placeholder="Search products..."
                       class="border rounded-full px-4 py-1 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500">🔍</span>
            </div>

            <a href="/admin"
               class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700 transition text-sm font-medium text-center">
                Admin Login
            </a>
        </nav>
    </div>
</header>

<!-- ================= PAGE CONTENT ================= -->
<main>
    @yield('content')
</main>

<!-- ================= FOOTER ================= -->
<footer class="bg-gray-900 text-gray-300">
    <div class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-4 gap-10">

        <div>
            <h3 class="text-xl font-bold text-white mb-4">
                Sukun Electric Retailer
            </h3>
            <p class="text-sm leading-relaxed">
                Your trusted local electrical shop for lights, fans, wires,
                switches, and all electrical accessories.
            </p>
        </div>

        <div>
            <h4 class="font-semibold text-white mb-4">Quick Links</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="/" class="hover:text-white">Home</a></li>
                <li><a href="/products" class="hover:text-white">Products</a></li>
                <li><a href="/cart" class="hover:text-white">Cart</a></li>
                <li><a href="/contact" class="hover:text-white">Contact</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold text-white mb-4">Contact</h4>
            <ul class="space-y-2 text-sm">
                <li>Dhandhuka, Gujarat</li>
                <li>📞 +91 99999 99999</li>
                <li>📧 sukunelectric@gmail.com</li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold text-white mb-4">Pay & Order Support</h4>
            <a href="https://wa.me/919999999999"
               class="inline-block bg-green-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-600 transition">
                WhatsApp Support
            </a>
        </div>
    </div>

    <div class="border-t border-gray-700 text-center py-4 text-sm">
        © {{ date('Y') }} Sukun Electric Retailer. All rights reserved.
    </div>
</footer>

</body>
</html>

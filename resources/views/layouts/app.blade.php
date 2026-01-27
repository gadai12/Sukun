<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davat Beverages – Tamanna Sales</title>
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900">

    <!-- Header -->
<header class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">

        <!-- LEFT SIDE: Logo + Menu -->
        <div class="flex items-center space-x-4">
            <!-- Logo -->
            <a href="/" class="text-xl font-bold text-blue-700">
                Tamanna Sales
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-4 text-sm font-medium">
                <a href="/" class="hover:text-blue-600">Home</a>
                <a href="/products" class="hover:text-blue-600">Products</a>
                <a href="/contact" class="hover:text-blue-600">Contact</a>
            </nav>
        </div>

        <!-- RIGHT SIDE: Search + Login (Desktop) -->
        <div class="hidden md:flex items-center space-x-4">
            <!-- Search -->
            <div class="relative">
                <input type="text"
                       placeholder="Search products..."
                       class="border rounded-full px-4 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500">
                    🔍
                </span>
            </div>

            <!-- Login -->
            <a href="/login"
               class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700 transition text-sm font-medium">
                Login
            </a>
        </div>

        <!-- Mobile Hamburger -->
        <button id="menu-btn" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
        <nav class="flex flex-col space-y-4 px-6 py-4 text-sm font-medium">
            <a href="/" class="hover:text-blue-600">Home</a>
            <a href="/products" class="hover:text-blue-600">Products</a>
            <a href="/contact" class="hover:text-blue-600">Contact</a>

            <!-- Mobile Search -->
            <div class="relative">
                <input type="text"
                       placeholder="Search products..."
                       class="border rounded-full px-4 py-1 w-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500">
                    🔍
                </span>
            </div>

            <!-- Mobile Login -->
            <a href="/login"
               class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700 transition text-sm font-medium text-center">
                Login
            </a>
        </nav>
    </div>
</header>
    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300">
        <div class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-4 gap-10">

            <div>
                <h3 class="text-xl font-bold text-white mb-4">
                    Tamanna Sales
                </h3>
                <p class="text-sm leading-relaxed">
                    Authorized Davat Beverages distributor providing reliable
                    beverage supply to retailers in Dhandhuka.
                </p>
            </div>

            <div>
                <h4 class="font-semibold text-white mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:text-white">Home</a></li>
                    <li><a href="/products" class="hover:text-white">Products</a></li>
                    <li><a href="/contact" class="hover:text-white">Contact</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold text-white mb-4">Contact</h4>
                <ul class="space-y-2 text-sm">
                    <li>Dhandhuka, Gujarat</li>
                    <li>📞 +91 99999 99999</li>
                    <li>📧 tamannasales@gmail.com</li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold text-white mb-4">Order Now</h4>
                <a href="https://wa.me/919999999999"
                    class="inline-block bg-green-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-600 transition">
                    WhatsApp Order
                </a>
            </div>
        </div>

        <div class="border-t border-gray-700 text-center py-4 text-sm">
            © {{ date('Y') }} Tamanna Sales. All rights reserved.
        </div>
    </footer>


</body>

</html>
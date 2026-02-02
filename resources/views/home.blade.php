@extends('layouts.app')

@section('content')

<!-- ================= HERO SECTION ================= -->
<section class="relative min-h-[85vh] flex items-center justify-center bg-blue-900 fade-in">
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-blue-700/80"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 text-center text-white">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
            Sukun Electric Retailer
        </h1>

        <p class="text-lg md:text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
            Your trusted local shop for lights, fans, wires, switches & electrical solutions
        </p>

        <div class="flex flex-wrap justify-center gap-4">
            <a href="#products"
               class="bg-white text-blue-900 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                View Products
            </a>

            <a href="https://wa.me/919999999999"
               class="bg-green-500 px-8 py-3 rounded-lg font-semibold hover:bg-green-600 transition">
                Order on WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- ================= WHY ORDER ONLINE ================= -->
<section class="py-16 bg-white fade-in">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-10">Why Buy From Us?</h2>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            @foreach([
                ['⚡','Quick Ordering','Add to cart & place order easily'],
                ['📦','Genuine Products','Trusted electrical brands'],
                ['📱','WhatsApp Support','Instant order & payment help'],
                ['💰','Fair Pricing','Clear prices, no hidden cost']
            ] as [$icon,$title,$desc])
                <div class="p-6 bg-gray-50 rounded shadow border border-transparent
                            hover:border-blue-500 hover:shadow-2xl hover:-translate-y-1 transition">
                    <div class="text-4xl mb-4">{{ $icon }}</div>
                    <h3 class="font-bold mb-2">{{ $title }}</h3>
                    <p>{{ $desc }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= WHY CHOOSE US ================= -->
<section class="py-20 bg-gray-100 fade-in">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12 text-blue-800">
            Why Choose Sukun Electric
        </h2>

        <div class="grid md:grid-cols-3 gap-10 text-center">
            @foreach([
                ['Wide Range','Lights, fans, wires & more'],
                ['Local Shop','Fast local service & support'],
                ['Easy Ordering','Website or WhatsApp']
            ] as [$title,$desc])
                <div class="bg-white p-8 rounded-xl shadow border border-transparent
                            hover:border-blue-600 hover:shadow-2xl hover:-translate-y-1 transition">
                    <h3 class="text-xl font-bold mb-3">{{ $title }}</h3>
                    <p class="text-gray-600">{{ $desc }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= OWNER ================= -->
<section class="py-20 bg-white fade-in">
    <div class="max-w-7xl mx-auto px-6 text-center">

        <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mb-4">
            Meet the Shop Owner
        </h2>

        <p class="text-gray-600 max-w-2xl mx-auto mb-10">
            Sukun Electric Retailer is committed to providing quality electrical products
            with honest pricing and local support.
        </p>

        <div class="max-w-sm mx-auto bg-gray-50 rounded-xl p-8 shadow">
            <img src="images/owner-1.jpeg"
                 class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-blue-100" />

            <h3 class="text-xl font-bold">Mr. [Owner Name]</h3>
            <p class="text-blue-600 font-semibold text-sm">Owner – Sukun Electric</p>
        </div>
    </div>
</section>

<!-- ================= PRODUCTS ================= -->
<!-- ================= PRODUCTS ================= -->
<section id="products" class="py-20 bg-white fade-in">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="flex justify-between items-center mb-10">
            <h2 class="text-3xl font-bold text-blue-800">Our Popular Products</h2>
            <a href="/products" class="text-blue-700 font-semibold hover:underline">View All →</a>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($products as $product)
                <div class="relative bg-red rounded p-4 border border-transparent
                            hover:border-blue-600 hover:shadow-2xl hover:-translate-y-1 transition fade-in">

                    <!-- Product Image -->
                    <img src="{{ $product->image_url ?? 'https://via.placeholder.com/150' }}"
                         class="mx-auto bg-red mb-4" alt="{{ $product->name }}">

                    <!-- Product Info -->
                    <h3 class="font-bold text-lg mb-1">{{ $product->name }}</h3>
                    <p class="text-gray-600 mb-1">Pack: {{ $product->pack_size ?? 'N/A' }}</p>
                    <p class="font-semibold text-gray-800 mb-3">₹{{ $product->price }}</p>

                    <!-- Add to Cart Button -->
                    <button class="bg-blue-600 text-white w-full py-2 rounded hover:bg-blue-700 active:scale-95 transition">
                        Add to Cart
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</section>



<!-- ================= HOW IT WORKS ================= -->
<section class="py-16 bg-gray-50 fade-in">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-10">How Ordering Works</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div>1️⃣ <h3 class="font-bold mt-2">Add to Cart</h3></div>
            <div>2️⃣ <h3 class="font-bold mt-2">Pay via GPay</h3></div>
            <div>3️⃣ <h3 class="font-bold mt-2">Order Confirmed</h3></div>
        </div>
    </div>
</section>

<!-- ================= CTA ================= -->
<section class="py-20 bg-blue-800 text-white text-center fade-in">
    <h2 class="text-3xl font-bold mb-4">Need Help or Bulk Order?</h2>
    <p class="mb-6">Chat with us directly on WhatsApp</p>
    <a href="https://wa.me/919999999999"
       class="bg-green-500 px-8 py-3 rounded-lg font-semibold hover:bg-green-600 transition">
        Contact on WhatsApp
    </a>
</section>

<!-- ================= FLOATING WHATSAPP ================= -->
<a href="https://wa.me/919999999999"
   class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full flex items-center justify-center
          bg-green-500 shadow-lg hover:scale-110 transition text-white text-2xl">
    <i class="fab fa-whatsapp"></i>
</a>

@endsection

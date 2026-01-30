@extends('layouts.app')

@section('content')


<!-- ================= HERO SECTION ================= -->
<section class="relative min-h-[85vh] flex items-center justify-center bg-blue-900 fade-in">
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-blue-700/80"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 text-center text-white">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
            Your Trusted Davat Beverages Distributor
        </h1>

        <p class="text-lg md:text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
            Tamanna Sales – Serving retailers with fast, reliable beverage supply in Dhandhuka
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
        <h2 class="text-3xl font-bold mb-10">Why Order Online?</h2>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            @foreach([
                ['⚡','Fast Ordering','Place orders anytime, hassle-free'],
                ['📦','Reliable Supply','Direct from your local dealer'],
                ['📱','WhatsApp Updates','Instant order confirmation'],
                ['💰','Transparent Pricing','No hidden charges']
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
            Why Choose Us
        </h2>

        <div class="grid md:grid-cols-3 gap-10 text-center">
            @foreach([
                ['Reliable Supply','Daily stock availability'],
                ['Local Support','Dedicated city support'],
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
<!-- ================= OWNER / DEALERSHIP ================= -->
<section class="py-20 bg-white fade-in">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Title -->
        <div class="text-center mb-4">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-800">
                Meet Your Local Distributor
            </h2>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
                Tamanna Sales is an authorized Davat Beverages distributor, proudly serving
                retailers with trust, transparency, and timely supply.
            </p>
        </div>

        <!-- Owner Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- OWNER CARD -->
            <div
                class="bg-gray-50 rounded-xl p-8 text-center border border-transparent
                       hover:border-blue-600 hover:shadow-2xl hover:-translate-y-1 transition">

                <img
                    src="images/owner-1.jpeg"
                    alt="Owner"
                    class="w-32 h-32 rounded-full mx-auto mb-6 object-cover border-4 border-blue-100 shadow">

                <h3 class="text-xl font-bold text-gray-800">
                    Mr. Gaffar Ghoghari
                </h3>

                <p class="text-sm text-blue-600 font-semibold mt-1">
                    Proprietor – Tamanna Sales
                </p>

                <p class="text-gray-600 text-sm mt-4 leading-relaxed">
                    With 10 years of experience in beverage distribution, ensuring
                    reliable stock and long-term retailer relationships.
                </p>
            </div>

           <div
                class="bg-gray-50 rounded-xl p-8 text-center border border-transparent
                       hover:border-blue-600 hover:shadow-2xl hover:-translate-y-1 transition">

                <img
                    src="images/owner-1.jpeg"
                    alt="Owner"
                    class="w-32 h-32 rounded-full mx-auto mb-6 object-cover border-4 border-blue-100 shadow-md">

                <h3 class="text-xl font-bold text-gray-800">
                    Mr. [Owner Name]
                </h3>

                <p class="text-sm text-blue-600 font-semibold mt-1">
                    Proprietor – Tamanna Sales
                </p>

                <p class="text-gray-600 text-sm mt-4 leading-relaxed">
                    With 10 years of experience in beverage distribution, ensuring
                    reliable stock and long-term retailer relationships.
                </p>
            </div>

            <!-- CONTACT CARD -->
          <div
                class="bg-gray-50 rounded-xl p-8 text-center border border-transparent
                       hover:border-blue-600 hover:shadow-2xl hover:-translate-y-1 transition">

                <img
                    src="images/owner-1.jpeg"
                    alt="Owner"
                    class="w-32 h-32 rounded-full mx-auto mb-6 object-cover border-4 border-blue-100 shadow">

                <h3 class="text-xl font-bold text-gray-800">
                    Mr. [Owner Name]
                </h3>

                <p class="text-sm text-blue-600 font-semibold mt-1">
                    Proprietor – Tamanna Sales
                </p>

                <p class="text-gray-600 text-sm mt-4 leading-relaxed">
                    With years of experience in beverage distribution, ensuring
                    reliable stock and long-term retailer relationships.
                </p>
            </div>

        </div>
    </div>
</section>


<!-- ================= PRODUCTS ================= -->
<section id="products" class="py-20 bg-white fade-in">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center mb-10">
            <h2 class="text-3xl font-bold text-blue-800">Our Popular Products</h2>
            <a href="/products" class="text-blue-700 font-semibold hover:underline">View All →</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach($products as $product)
                <div
                    class="relative bg-white rounded p-4 border border-transparent
                           hover:border-blue-600 hover:shadow-2xl hover:-translate-y-1 transition fade-in">

                    {{-- BADGES --}}
                    @if($product->is_new)
                        <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-2 py-1 rounded-full">
                            NEW
                        </span>
                    @endif

                    @if($product->is_hot)
                        <span class="absolute top-3 right-3 bg-red-500 text-white text-xs px-2 py-1 rounded-full">
                            HOT
                        </span>
                    @endif

                    <img src="{{ $product->image_url ?? 'https://via.placeholder.com/150' }}"
                         class="mx-auto mb-4" alt="{{ $product->name }}">

                    <h3 class="font-bold text-lg mb-1">{{ $product->name }}</h3>
                    <p class="text-gray-600">Pack: {{ $product->pack_size }}</p>
                    <p class="font-semibold text-gray-800 mb-3">₹{{ $product->price }}</p>

                    <button
                        class="bg-blue-600 text-white w-full py-2 rounded
                               hover:bg-blue-700 active:scale-95 transition">
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
        <h2 class="text-3xl font-bold mb-10">How It Works</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div>1️⃣ <h3 class="font-bold mt-2">Browse Products</h3></div>
            <div>2️⃣ <h3 class="font-bold mt-2">Add to Cart</h3></div>
            <div>3️⃣ <h3 class="font-bold mt-2">Place Order</h3></div>
        </div>
    </div>
</section>

<!-- ================= CTA ================= -->
<section class="py-20 bg-blue-800 text-white text-center fade-in">
    <h2 class="text-3xl font-bold mb-4">Need Help or Quick Ordering?</h2>
    <p class="mb-6">Chat directly on WhatsApp</p>
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

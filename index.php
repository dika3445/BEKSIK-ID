<?php require 'koneksi.php'; ?>
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>

<style>
  
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.animate-fade {
  animation: fadeIn 1.2s ease-in-out forwards;
}

.animate-slide-up {
  animation: fadeIn 1.4s ease-out forwards;
}

.animate-fade-delay {
  animation: fadeIn 1.6s ease forwards;
  animation-delay: 0.3s;
  animation-fill-mode: forwards;
}

.animate-fade-delay2 {
  animation: fadeIn 1.6s ease forwards;
  animation-delay: 0.6s;
  animation-fill-mode: forwards;
}

.animate-fade-delay3 {
  animation: fadeIn 1.6s ease forwards;
  animation-delay: 0.9s;
  animation-fill-mode: forwards;
}
</style>

  <style> 
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-white text-gray-800">
  <!-- Navbar -->
  <header class="absolute top-0 left-0 w-full z-50 flex items-center justify-between px-10 py-6 text-white bg-dark shadow-md">
    <div class="flex items-center space-x-2 font-bold text-xl">
      <span>Beksik ID</span>
    </div>
    <nav>
      <ul class="flex space-x-6 font-medium">
        <li><a href="index.php" class="relative after:block after:h-[2px] after:bg-white after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:origin-left duration-300">Home</a></li>
        <li><a href="profile.php" class="relative after:block after:h-[2px] after:bg-white after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:origin-left duration-300">Profile</a></li>
        <li><a href="saldo.php" class="relative after:block after:h-[2px] after:bg-white after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:origin-left duration-300">Saldo</a></li>
        <li><a href="transaksi.php" class="relative after:block after:h-[2px] after:bg-white after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:origin-left duration-300">Transaksi</a></li>
        
      </ul>
    </nav>

  </header>

  <!-- Hero -->
  <!-- Hero -->
<section class="relative h-[700px] bg-cover bg-center flex items-center justify-center overflow-hidden" style="background-image: url('WhatsApp Image 2026-04-27 at 15.07.08.jpeg');">
  <div class="absolute inset-0 bg-black/30 animate-fade"></div>
  <div class="relative z-10 text-white text-center animate-slide-up">
    <p class="uppercase text-sm tracking-widest mb-2 opacity-0 animate-fade-delay">Digital Shopping</p>
    <h1 class="text-3xl md:text-6xl font-bold leading-tight opacity-0 animate-fade-delay2">Beksik ID<br>
             SHOES TERMURAH<br></h1>
    <button class="mt-6 px-6 py-3 bg-primary text-white rounded hover:bg-green-500 font-semibold opacity-0 animate-fade-delay3">Discovery Now</button>
  </div>
</section>

<!-- New Arrivals -->
<section class="px-6 md:px-20 py-14">

  <h2 class="section-title">Produk Digital Terbaru</h2>

  <!-- Tabs -->
  <div class="flex justify-center space-x-6 mb-10 text-sm font-semibold tab-menu">
    <a class="tab-active">Top Up</a>
    <a>adidas</a>
    <a>Nike</a>
    <a>Ventela</a>
    <a>Vans</a>
  </div>

  <!-- Product Grid -->
  <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

    <div class="product-card">
      <img src="WhatsApp Image 2026-04-27 at 15.07.48.jpeg" class="product-img">
      <p class="product-name">Adidas</p>
      <p class="product-price">Mulai Rp 1.000</p>
      <a href="tambah_transaksi.php?produk=Top Up Game" class="product-btn">Beli</a>
    </div>

    <div class="product-card">
      <img src="WhatsApp Image 2026-04-27 at 15.09.17.jpeg" class="product-img">
      <p class="product-name">Adidas Sanghai</p>
      <p class="product-price">Mulai Rp 5.000</p>
      <a href="tambah_transaksi.php?produk=Pulsa" class="product-btn">Beli</a>
    </div>

    <div class="product-card">
      <img src="WhatsApp Image 2026-04-27 at 15.10.17.jpeg" class="product-img">
      <p class="product-name">Adidas London Brown Exclusive IG5406 Original</p>
      <p class="product-price">Mulai Rp 10.000</p>
      <a href="tambah_transaksi.php?produk=Paket Data" class="product-btn">Beli</a>
    </div>

    

  </div>
</section>


<!-- Promotional Banners -->
<section class="px-6 md:px-20 pb-16">
  <div class="grid md:grid-cols-4 gap-6">

    <div class="banner-card p-6 text-center rounded">
      <p class="banner-subtitle">Top Up Game</p>
      <h3 class="banner-title">Murah • Instan • Resmi</h3>
      <a href="tambah_transaksi.php?produk=Top Up Game" class="btn-banner">Top Up Sekarang</a>
    </div>

    <div class="banner-card p-6 text-center rounded">
      <p class="banner-subtitle">Pulsa & Paket Data</p>
      <h3 class="banner-title">Tersedia Semua Operator</h3>
      <a href="tambah_transaksi.php?produk=Paket Data" class="btn-banner">Beli Sekarang</a>
    </div>

    <div class="banner-card p-6 text-center rounded">
      <p class="banner-subtitle">Token PLN</p>
      <h3 class="banner-title">Langsung Masuk Meteran</h3>
      <a href="tambah_transaksi.php?produk=Token PLN" class="btn-banner">Isi Token</a>
    </div>

    <div class="banner-card-dark text-white p-6 text-center rounded">
      <h3 class="banner-sale-title">Diskon Besar!</h3>
      <p class="banner-sale-percent">50%</p>
      <p class="banner-sale-text">UNTUK MEMBER</p>
    </div>

  </div>
</section>



  <!-- Experience Section -->
<section class="px-6 md:px-20 py-20 bg-blue-50">
  <div class="grid md:grid-cols-2 gap-12 items-center">

    <!-- Text Area -->
    <div>
      <p class="text-sm uppercase tracking-wide text-blue-600 font-semibold mb-2">
        Tentang Kawan Dika Store
      </p>

      <h2 class="text-3xl font-bold text-gray-800 mb-4">
        Platform Digital Terpercaya & Berpengalaman
      </h2>

      <p class="mb-4 text-sm text-gray-600">
        Kawan Dika Store menyediakan layanan digital cepat, aman, dan terpercaya seperti pulsa, paket data, token PLN, top up game, dan berbagai layanan digital lainnya. Dengan proses otomatis dan harga bersaing, kami telah dipercaya oleh ribuan pelanggan.
      </p>

      <!-- Stats -->
      <div class="flex space-x-10 mb-6">
        <div>
          <p class="text-2xl font-bold text-blue-700">5+</p>
          <p class="text-sm text-gray-500">Tahun Pengalaman</p>
        </div>

        <div>
          <p class="text-2xl font-bold text-blue-700">50.000+</p>
          <p class="text-sm text-gray-500">Transaksi Sukses</p>
        </div>

        <div>
          <p class="text-2xl font-bold text-blue-700">100+</p>
          <p class="text-sm text-gray-500">Produk Aktif</p>
        </div>
      </div>

      <button class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
        Selengkapnya
      </button>
    </div>

    <!-- Images -->
    <div class="grid grid-cols-2 gap-4">
      <img src="VINTAGE CARHARTT & DICKIES WORKWEAR.jpg" class="w-full rounded shadow" />
      <img src="download.jpg" class="w-full rounded shadow" />
    </div>

  </div>
</section>
  <!-- Testimonials -->
  <section class="bg-white px-6 md:px-20 py-16 text-center">
    <h2 class="text-2xl font-bold mb-6">What Our Customers Say</h2>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="bg-gray-100 p-6 rounded"><p class="italic">"Great quality and fast delivery!"</p><h4 class="font-semibold mt-4">— Anna, Jakarta</h4></div>
      <div class="bg-gray-100 p-6 rounded"><p class="italic">"Customer service was helpful."</p><h4 class="font-semibold mt-4">— Budi, Bandung</h4></div>
      <div class="bg-gray-100 p-6 rounded"><p class="italic">"Stylish and comfortable."</p><h4 class="font-semibold mt-4">— Citra, Surabaya</h4></div>
    </div>
  </section>

 <!-- FOOTER -->
<footer class="bg-black text-white px-6 md:px-20 py-10">
  <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
    <div>
      <h3 class="font-bold text-lg mb-4">Nusantara</h3>
      <p class="text-sm text-gray-400">Urban fashion meets cultural pride. Stay stylish with our curated collections.</p>
    </div>
    <div>
      <h4 class="font-semibold mb-3">Shop</h4>
      <ul class="space-y-2 text-sm text-gray-400">
        <li><a href="#">Men</a></li>
        <li><a href="#">Women</a></li>
        <li><a href="#">Shoes</a></li>
        <li><a href="#">Accessories</a></li>
      </ul>
    </div>
    <div>
      <h4 class="font-semibold mb-3">Help</h4>
      <ul class="space-y-2 text-sm text-gray-400">
        <li><a href="#">Customer Service</a></li>
        <li><a href="#">Shipping Info</a></li>
        <li><a href="#">Returns</a></li>
        <li><a href="#">FAQs</a></li>
      </ul>
    </div>
    <div>
      <h4 class="font-semibold mb-3">Follow Us</h4>
      <div class="flex space-x-4">
        <a href="#" class="text-gray-400 hover:text-white">Facebook</a>
        <a href="#" class="text-gray-400 hover:text-white">Instagram</a>
        <a href="#" class="text-gray-400 hover:text-white">Twitter</a>
      </div>
    </div>
  </div>
  <div class="mt-10 text-center text-sm text-gray-500">&copy; 2025 Nusantara. All rights reserved.</div>
</footer>


</div>

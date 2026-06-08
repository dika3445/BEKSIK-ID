<?php
require "koneksi.php";

// Ambil data profile admin
$profile = $pdo->query("SELECT * FROM profile WHERE username='admin'")->fetch();

// Ambil data saldo
$saldo = $pdo->query("SELECT * FROM saldo")->fetchAll();

// Ambil transaksi
$transaksi = $pdo->query("SELECT * FROM transaksi ORDER BY tanggal DESC")->fetchAll();
?>

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
<section class="relative h-[700px] bg-cover bg-center flex items-center justify-center overflow-hidden" style="background-image: url('WhatsApp Image 2026-04-27 at 15.12.51.jpeg');">
  <div class="absolute inset-0 bg-black/30 animate-fade"></div>
  <div class="relative z-10 text-white text-center animate-slide-up">
    <p class="uppercase text-sm tracking-widest mb-2 opacity-0 animate-fade-delay">Digital Shopping</p>
    <h1 class="text-3xl md:text-6xl font-bold leading-tight opacity-0 animate-fade-delay2">Beksik ID<br>
           MURAH AMAN DAN BERGARANSI<br></h1>
    <button class="mt-6 px-6 py-3 bg-primary text-white rounded hover:bg-green-500 font-semibold opacity-0 animate-fade-delay3">Discovery Now</button>
  </div>
</section>


<hr>

<!-- PROFILE -->
<section id="profile" class="profile-section">
    <div class="profile-card">
        <h2>Profil Admin</h2>

        <img src="assets/img/<?= $profile['foto'] ?>" 
             alt="Foto Admin"
             class="profile-photo">

        <div class="profile-info">
            <p><strong>Username:</strong> <?= $profile['username'] ?></p>
            <p><strong>Nama Lengkap:</strong> <?= $profile['nama_lengkap'] ?></p>
            <p><strong>Email:</strong> <?= $profile['email'] ?></p>
            <p><strong>No HP:</strong> <?= $profile['no_hp'] ?></p>
        </div>
    </div>
</section>


<hr>

<!-- SEPUTAR TOKO -->
<section id="about" class="about-section">
  <div class="about-container">
    <div class="about-text">
      <h2>Tentang Kawan Dika Store</h2>
      <p>
        Kawan Dika Store adalah platform layanan digital terpercaya yang menyediakan berbagai produk digital seperti pulsa, paket data, token PLN, top up game, voucher internet, dan apps premium.
      </p>
      <p>
        Kami mengutamakan proses cepat, aman, dan harga bersaing. Semua transaksi tercatat otomatis dan mudah dipantau oleh admin maupun pelanggan. Bergabunglah dengan ribuan pelanggan kami yang sudah merasakan kemudahan bertransaksi digital!
      </p>
      <a href="#produk" class="btn-about">Lihat Produk</a>
    </div>
    <div class="about-image">
      <img src="assets/img/store_about.jpg" alt="Kawan Dika Store">
    </div>
  </div>
</section>


<hr>

<!-- LOKASI TOKO -->
<section id="lokasi" class="lokasi-section">
  <div class="lokasi-container">
    <div class="lokasi-text">
      <h2>Lokasi Toko</h2>
      <p>Kawan Dika Store berlokasi di pusat kota Jakarta. Kamu bisa menghubungi kami langsung atau melihat lokasi melalui Google Maps di bawah ini.</p>
      <p><strong>Alamat:</strong> Jl. Contoh Raya No.123, Jakarta</p>
      <p><strong>Telepon:</strong> +62 812 3456 7890</p>
      <p><strong>Email:</strong> admin@kawandika.store</p>
    </div>
    <div class="lokasi-map">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.123456!2d106.827153!3d-6.175392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1234567890%3A0xabcdef123456!2sJl.%20Contoh%20Raya%20No.123%2C%20Jakarta!5e0!3m2!1sid!2sid!4v1699999999999!5m2!1sid!2sid" 
        width="100%" 
        height="300" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>

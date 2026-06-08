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
<section class="relative h-[700px] bg-cover bg-center flex items-center justify-center overflow-hidden" style="background-image: url('WhatsApp Image 2026-04-27 at 15.13.27.jpeg');">
  <div class="absolute inset-0 bg-black/30 animate-fade"></div>
  <div class="relative z-10 text-white text-center animate-slide-up">
    <p class="uppercase text-sm tracking-widest mb-2 opacity-0 animate-fade-delay">Digital Shopping</p>
    <h1 class="text-3xl md:text-6xl font-bold leading-tight opacity-0 animate-fade-delay2">Beksik ID<br>
            KAWAN DIGITALMU YANG ASIK<br></h1>
    <button class="mt-6 px-6 py-3 bg-primary text-white rounded hover:bg-green-500 font-semibold opacity-0 animate-fade-delay3">Discovery Now</button>
  </div>
</section>

<!-- PEMBAYARAN SALDO -->
<section id="pembayaran" class="pembayaran-section">
  <div class="pembayaran-container">
    <h2>Pembayaran Saldo</h2>

    <div class="pembayaran-cards">

      <!-- DANA -->
      <a href="https://link.dana.id/" target="_blank" class="card cursor-pointer hover:scale-105 transition">
        <h3>DANA</h3>
        <p>0896xxxxxx</p>
        <small>Klik untuk buka aplikasi DANA</small>
      </a>

      <!-- LIVIN MANDIRI -->
      <a href="https://livinmandiri.id/" target="_blank" class="card cursor-pointer hover:scale-105 transition">
        <h3>Livin Mandiri</h3>
        <p>1400xxxxxxxx</p>
        <small>Klik untuk buka Livin Mandiri</small>
      </a>

    </div>
  </div>
</section>
<!-- FAQ -->
<section class="py-20 px-10">
<h2 class="text-3xl font-bold text-center mb-10">FAQ</h2>
<div class="max-w-2xl mx-auto space-y-4">
  <details class="glass p-4"><summary>Aman?</summary><p>100% aman & bergaransi</p></details>
  <details class="glass p-4"><summary>Proses berapa lama?</summary><p>5–10 menit</p></details>
</div>
</section>

<section class="tutorial-section">
  <div class="container">
    <h1 class="title">Tutorial Login Layanan Digital</h1>

    <div class="card-wrapper">
      <!-- Card Netflix -->
      <div class="card">
        <h2>Netflix</h2>
        <ol>
          <li>Buka <strong>https://www.netflix.com</strong></li>
          <li>Klik <strong>Login / Sign In</strong></li>
          <li>Masukkan email & password</li>
          <li>Klik <strong>Masuk</strong></li>
        </ol>
      </div>

      <!-- Card YouTube -->
      <div class="card">
        <h2>YouTube</h2>
        <ol>
          <li>Buka <strong>https://www.youtube.com</strong></li>
          <li>Klik <strong>Login</strong></li>
          <li>Masukkan email & password Gmail</li>
        </ol>
      </div>

      <!-- Card Vidio -->
      <div class="card">
        <h2>Vidio</h2>
        <ol>
          <li>Buka <strong>https://www.vidio.com</strong></li>
          <li>Klik <strong>Masuk</strong></li>
          <li>Pilih login Google/Facebook/HP</li>
        </ol>
      </div>

      <!-- Card CapCut -->
      <div class="card">
        <h2>CapCut</h2>
        <ol>
          <li>Buka aplikasi CapCut</li>
          <li>Pilih menu <strong>Saya / Me</strong></li>
          <li>Klik <strong>Login</strong> dan pilih metode login</li>
        </ol>
      </div>

      <!-- Card iQIYI -->
      <div class="card">
        <h2>iQIYI</h2>
        <ol>
          <li>Buka <strong>https://www.iq.com</strong></li>
          <li>Klik <strong>Login</strong></li>
          <li>Pilih Google/Facebook/Email</li>
        </ol>
      </div>

      <!-- Card Disney Hotstar -->
      <div class="card">
        <h2>Disney+ Hotstar</h2>
        <ol>
          <li>Buka <strong>https://www.hotstar.com</strong></li>
          <li>Klik <strong>Login</strong></li>
          <li>Masukkan nomor HP & OTP</li>
        </ol>
      </div>

      <!-- Card Bstation -->
      <div class="card">
        <h2>Bstation</h2>
        <ol>
          <li>Buka <strong>https://www.bilibili.tv/id</strong></li>
          <li>Klik <strong>Login</strong></li>
          <li>Pilih Google/Facebook/Email</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<style>
/* ===== CUSTOMER SERVICE BUTTON ===== */
.cs-btn{
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 9999;
}

.cs-btn button{
  background: #22c55e;
  color: #fff;
  padding: 14px 20px;
  border-radius: 50px;
  border: none;
  font-weight: bold;
  cursor: pointer;
  box-shadow: 0 8px 25px rgba(0,0,0,0.25);
  transition: all 0.3s ease;
}

.cs-btn button:hover{
  transform: scale(1.1);
  background: #16a34a;
}

/* ===== PANEL ===== */
.cs-panel{
  position: fixed;
  bottom: 90px;
  right: 20px;
  width: 300px;
  background: #ffffff;
  border-radius: 18px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.2);
  overflow: hidden;
  display: none;
  animation: fadeUp 0.3s ease;
  z-index: 9999;
}

/* ===== HEADER ===== */
.cs-header{
  background: linear-gradient(135deg, #22c55e, #16a34a);
  color: white;
  padding: 16px;
}

.cs-header h3{
  margin: 0;
  font-size: 18px;
}

.cs-header p{
  margin-top: 4px;
  font-size: 12px;
  opacity: 0.9;
}

/* ===== ITEM ===== */
.cs-item{
  display: flex;
  gap: 12px;
  padding: 14px 16px;
  text-decoration: none;
  color: #111;
  border-bottom: 1px solid #f1f5f9;
  transition: 0.3s;
}

.cs-item:hover{
  background: #f0fdf4;
  transform: translateX(6px);
}

.cs-item strong{
  font-size: 14px;
}

.cs-item p{
  font-size: 12px;
  color: #6b7280;
}

/* ===== FOOTER ===== */
.cs-footer{
  padding: 12px;
  font-size: 11px;
  text-align: center;
  color: #6b7280;
  background: #f9fafb;
}

/* ===== ANIMATION ===== */
@keyframes fadeUp{
  from{
    opacity: 0;
    transform: translateY(15px) scale(0.95);
  }
  to{
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}
</style>

<style>
/* ===== CUSTOMER SERVICE BUTTON ===== */
.cs-btn{
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 9999;
}

.cs-btn button{
  background: #064e3b; /* HIJAU TUA */
  color: #fff;
  padding: 14px 20px;
  border-radius: 50px;
  border: none;
  font-weight: bold;
  cursor: pointer;
  box-shadow: 0 8px 25px rgba(6,78,59,0.5);
  transition: all 0.3s ease;
}

.cs-btn button:hover{
  transform: scale(1.1);
  background: #022c22; /* HIJAU TUA GELAP */
}

/* ===== PANEL ===== */
.cs-panel{
  position: fixed;
  bottom: 90px;
  right: 20px;
  width: 300px;
  background: #ffffff;
  border-radius: 18px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.25);
  overflow: hidden;
  display: none;
  animation: fadeUp 0.3s ease;
  z-index: 9999;
}

/* ===== HEADER ===== */
.cs-header{
  background: linear-gradient(135deg, #064e3b, #022c22);
  color: white;
  padding: 16px;
}

.cs-header h3{
  margin: 0;
  font-size: 18px;
}

.cs-header p{
  margin-top: 4px;
  font-size: 12px;
  opacity: 0.9;
}

/* ===== ITEM ===== */
.cs-item{
  display: flex;
  gap: 12px;
  padding: 14px 16px;
  text-decoration: none;
  color: #111;
  border-bottom: 1px solid #e5e7eb;
  transition: 0.3s;
}

.cs-item:hover{
  background: #ecfdf5; /* hijau muda */
  transform: translateX(6px);
}

.cs-item strong{
  font-size: 14px;
}

.cs-item p{
  font-size: 12px;
  color: #6b7280;
}

/* ===== FOOTER ===== */
.cs-footer{
  padding: 12px;
  font-size: 11px;
  text-align: center;
  color: #6b7280;
  background: #f9fafb;
}

/* ===== ANIMATION ===== */
@keyframes fadeUp{
  from{
    opacity: 0;
    transform: translateY(15px) scale(0.95);
  }
  to{
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}
</style>

<!-- CUSTOMER SERVICE -->
<div class="cs-btn">
  <button onclick="toggleCS()">💬 CS Online</button>
</div>

<div id="csPanel" class="cs-panel">
  <div class="cs-header">
    <h3>Customer Service</h3>
    <p>Online • 08.00 - 22.00</p>
  </div>

  <a href="https://wa.me/62896xxxxxx" target="_blank" class="cs-item">
    📱
    <div>
      <strong>WhatsApp</strong>
      <p>Respon cepat</p>
    </div>
  </a>

  <a href="https://t.me/username" target="_blank" class="cs-item">
    ✈️
    <div>
      <strong>Telegram</strong>
      <p>Chat alternatif</p>
    </div>
  </a>

  <a href="mailto:support@kawandikastore.com" class="cs-item">
    📧
    <div>
      <strong>Email</strong>
      <p>support@kawandikastore.com</p>
    </div>
  </a>

  <div class="cs-footer">
    Kami siap membantu Anda
  </div>
</div>

<script>
function toggleCS(){
  const panel = document.getElementById("csPanel");
  panel.style.display = panel.style.display === "block" ? "none" : "block";
}
</script>





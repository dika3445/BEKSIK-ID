<?php
require "koneksi.php";

/* ================= UPDATE STATUS (AUTO SUBMIT) ================= */
if(isset($_POST['update_status'])){
  $stmt = $pdo->prepare("UPDATE transaksi SET status=? WHERE id=?");
  $stmt->execute([$_POST['status'], $_POST['id']]);
  header("Location: transaksi.php");
  exit;
}

/* ================= FILTER LOGIC ================= */
$where = [];
$params = [];

if(!empty($_GET['q'])){
  $where[] = "produk LIKE ?";
  $params[] = "%".$_GET['q']."%";
}

if(!empty($_GET['status'])){
  $where[] = "status = ?";
  $params[] = $_GET['status'];
}

if(!empty($_GET['tgl'])){
  $where[] = "DATE(tanggal) = ?";
  $params[] = $_GET['tgl'];
}

/* ================= DATA TRANSAKSI ================= */
$sql = "SELECT * FROM transaksi";
if($where){
  $sql .= " WHERE " . implode(" AND ", $where);
}
$sql .= " ORDER BY tanggal DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$rows = $stmt->fetchAll();

/* ================= DATA SUMMARY ================= */
$totalTransaksi = $pdo->query("SELECT COUNT(*) FROM transaksi")->fetchColumn();
$totalSukses   = $pdo->query("SELECT COUNT(*) FROM transaksi WHERE status='Sukses'")->fetchColumn();
$totalPending  = $pdo->query("SELECT COUNT(*) FROM transaksi WHERE status='Pending'")->fetchColumn();
$totalDiproses = $pdo->query("SELECT COUNT(*) FROM transaksi WHERE status='Diproses'")->fetchColumn();
$totalDikirim  = $pdo->query("SELECT COUNT(*) FROM transaksi WHERE status='Dikirim'")->fetchColumn();
$totalGagal    = $pdo->query("SELECT COUNT(*) FROM transaksi WHERE status='Gagal'")->fetchColumn();

function persen($j,$t){ return $t?round($j/$t*100,1):0; }
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Transaksi</title>

<link rel="stylesheet" href="assets/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>body{font-family:Inter}</style>
</head>

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
<section class="relative h-[700px] bg-cover bg-center flex items-center justify-center overflow-hidden" style="background-image: url('WhatsApp Image 2026-04-27 at 15.13.05 (1).jpeg');">
  <div class="absolute inset-0 bg-black/30 animate-fade"></div>
  <div class="relative z-10 text-white text-center animate-slide-up">
    <p class="uppercase text-sm tracking-widest mb-2 opacity-0 animate-fade-delay">Digital Shopping</p>
    <h1 class="text-3xl md:text-6xl font-bold leading-tight opacity-0 animate-fade-delay2">Beksik ID<br>
            KAWAN DIGITALMU YANG ASIK<br></h1>
    <button class="mt-6 px-6 py-3 bg-primary text-white rounded hover:bg-green-500 font-semibold opacity-0 animate-fade-delay3">Discovery Now</button>
  </div>
</section>

<section class="max-w-7xl mx-auto px-6 py-16">

<h2 class="text-3xl font-bold mb-6">Dashboard Admin</h2>

<!-- SUMMARY -->
<div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-10 text-sm">
  <div class="bg-green-100 p-4 rounded shadow">Sukses<br><b><?= persen($totalSukses,$totalTransaksi) ?>%</b><br><?= $totalSukses ?></div>
  <div class="bg-blue-100 p-4 rounded shadow">Diproses<br><b><?= persen($totalDiproses,$totalTransaksi) ?>%</b><br><?= $totalDiproses ?></div>
  <div class="bg-purple-100 p-4 rounded shadow">Dikirim<br><b><?= persen($totalDikirim,$totalTransaksi) ?>%</b><br><?= $totalDikirim ?></div>
  <div class="bg-yellow-100 p-4 rounded shadow">Pending<br><b><?= persen($totalPending,$totalTransaksi) ?>%</b><br><?= $totalPending ?></div>
  <div class="bg-red-100 p-4 rounded shadow">Gagal<br><b><?= persen($totalGagal,$totalTransaksi) ?>%</b><br><?= $totalGagal ?></div>
</div>

<!-- CHART -->
<div class="bg-white p-4 rounded shadow mb-10 max-w-md">
  <canvas id="chartPenjualan"></canvas>
</div>

<!-- FILTER -->
<form method="GET" class="mb-6 flex flex-wrap gap-3">
  <input type="text" name="q" placeholder="Cari produk..." value="<?= $_GET['q'] ?? '' ?>" class="border px-4 py-2 rounded">
  <select name="status" class="border px-4 py-2 rounded">
    <option value="">Semua Status</option>
    <?php foreach(['Pending','Diproses','Dikirim','Sukses','Gagal'] as $s): ?>
      <option value="<?= $s ?>" <?= ($_GET['status']??'')==$s?'selected':'' ?>><?= $s ?></option>
    <?php endforeach; ?>
  </select>
  <input type="date" name="tgl" value="<?= $_GET['tgl'] ?? '' ?>" class="border px-4 py-2 rounded">
  <button class="bg-black text-white px-5 py-2 rounded">Filter</button>
</form>
<a href="tambah_transaksi.php"
 class="inline-block mt-6 bg-green-600 text-white px-6 py-2 rounded">
+ Tambah Transaksi
</a>


<!-- TABLE -->
<table class="w-full shadow rounded">
<thead class="bg-gray-100">
<tr>
  <th class="p-3">Foto</th>
  <th class="p-3">Produk</th>
  <th class="p-3">Status</th>
  <th class="p-3">Tanggal</th>
  <th class="p-3">Aksi</th>
</tr>
</thead>
<tbody>
<?php foreach($rows as $r): ?>
<tr class="border-b hover:bg-gray-50">
  <td class="p-3"><img src="assets/img/<?= $r['foto'] ?>" class="w-14 rounded"></td>
  <td class="p-3"><?= $r['produk'] ?></td>

  <!-- STATUS DROPDOWN -->
  <td class="p-3">
    <form method="POST">
      <input type="hidden" name="id" value="<?= $r['id'] ?>">
      <input type="hidden" name="update_status" value="1">
      <select name="status" onchange="this.form.submit()"
        class="px-3 py-1 rounded text-white
        <?= $r['status']=='Sukses'?'bg-green-600':'' ?>
        <?= $r['status']=='Pending'?'bg-yellow-500':'' ?>
        <?= $r['status']=='Diproses'?'bg-blue-600':'' ?>
        <?= $r['status']=='Dikirim'?'bg-purple-600':'' ?>
        <?= $r['status']=='Gagal'?'bg-red-600':'' ?>">
        <?php foreach(['Pending','Diproses','Dikirim','Sukses','Gagal'] as $s): ?>
          <option value="<?= $s ?>" <?= $r['status']==$s?'selected':'' ?>><?= $s ?></option>
        <?php endforeach; ?>
      </select>
    </form>
  </td>

  <td class="p-3"><?= $r['tanggal'] ?></td>
  <td class="p-3 space-x-2">
    <a class="text-blue-600" href="cetak_struk.php?id=<?= $r['id'] ?>">Cetak</a>
    <a class="text-yellow-600" href="edit_struk.php?id=<?= $r['id'] ?>">Edit</a>
    <a class="text-red-600" href="hapus_transaksi.php?id=<?= $r['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
  </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

</section>

<script>
new Chart(document.getElementById('chartPenjualan'),{
  type:'doughnut',
  data:{
    labels:['Sukses','Diproses','Dikirim','Pending','Gagal'],
    datasets:[{data:[
      <?= $totalSukses ?>,
      <?= $totalDiproses ?>,
      <?= $totalDikirim ?>,
      <?= $totalPending ?>,
      <?= $totalGagal ?>
    ],
    backgroundColor:['#16a34a','#3b82f6','#8b5cf6','#facc15','#dc2626']}]
  },
  options:{cutout:'65%'}
});
</script>

</body>
</html>

<!-- Update Transaction Feature -->
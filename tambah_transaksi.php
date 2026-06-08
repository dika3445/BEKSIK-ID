<?php
require "koneksi.php";

// Ambil daftar produk untuk referensi (opsional untuk autocomplete)
$produkList = $pdo->query("SELECT * FROM produk")->fetchAll(PDO::FETCH_ASSOC);

// Proses tambah transaksi
if(isset($_POST['tambah'])){
    $produk = $_POST['produk']; // sekarang bisa bebas diketik
    $nama_pemesan = $_POST['nama_pemesan'];
    $harga_produk = $_POST['harga_produk'];
    $admin = $_POST['admin'];
    $potongan = $_POST['potongan'];
    $membership = $_POST['membership'];
    $sn = $_POST['sn'];
    $total = $harga_produk - $potongan - $membership;

    // Jika produk ada di tabel produk, ambil foto, kalau tidak kosong
    $stmtFoto = $pdo->prepare("SELECT foto FROM produk WHERE nama=?");
    $stmtFoto->execute([$produk]);
    $foto = $stmtFoto->fetchColumn() ?: '';

    $stmt = $pdo->prepare("INSERT INTO transaksi 
        (produk,nama_pemesan,harga_produk,admin,potongan,membership,sn,total,foto,status) 
        VALUES (?,?,?,?,?,?,?,?,?,?)");
    $stmt->execute([
        $produk,$nama_pemesan,$harga_produk,$admin,
        $potongan,$membership,$sn,$total,$foto,'Pending'
    ]);

    header("Location: transaksi.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Transaksi</title>

<style>
body{
    font-family: 'Inter', sans-serif;
    background:#f4f6f8;
    padding:40px;
    color:#1f2937;
}

h2{
    text-align:center;
    font-size:26px;
    font-weight:700;
    margin-bottom:25px;
}

form{
    max-width:520px;
    margin:auto;
    background:#fff;
    padding:28px 32px;
    border-radius:14px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

form input{
    width:100%;
    padding:12px 14px;
    margin-bottom:14px;
    border-radius:10px;
    border:1px solid #d1d5db;
    background:#f9fafb;
    font-size:14px;
    transition:.25s;
}

form input:focus{
    outline:none;
    border-color:#2563eb;
    background:#fff;
    box-shadow:0 0 0 3px rgba(37,99,235,.15);
}

button.btn{
    width:100%;
    padding:13px;
    margin-top:10px;
    background:linear-gradient(135deg,#2563eb,#1e40af);
    color:#fff;
    border:none;
    border-radius:12px;
    font-size:15px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
}

button.btn:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 20px rgba(37,99,235,.3);
}

@media(max-width:600px){
    body{padding:20px}
    h2{font-size:22px}
}
</style>
</head>

<body>

<h2>Tambah Transaksi Baru</h2>

<form method="POST">
    Produk:
    <input type="text" name="produk" list="produkList" required>
    <datalist id="produkList">
        <?php foreach($produkList as $p){ ?>
            <option value="<?= $p['nama'] ?>" data-harga="<?= $p['harga'] ?>">
        <?php } ?>
    </datalist>

    Harga Produk:
    <input name="harga_produk" id="harga_produk" required>

    Nama Pemesan:
    <input name="nama_pemesan" required>

    Admin:
    <input name="admin" required>

    Potongan:
    <input name="potongan" value="0">

    Membership:
    <input name="membership" value="0">

    SN / Token:
    <input name="sn">

    <button name="tambah" class="btn">Tambah Transaksi</button>
</form>

<script>
// Auto-set harga jika admin memilih produk dari daftar
const datalist = document.getElementById('produkList');
const inputProduk = document.querySelector('input[name="produk"]');
const inputHarga = document.getElementById('harga_produk');

inputProduk.addEventListener('input', () => {
    const val = inputProduk.value;
    const option = Array.from(datalist.options).find(o => o.value === val);
    if(option) {
        inputHarga.value = option.dataset.harga;
    }
});
</script>

</body>
</html>

<?php require "koneksi.php"; 
$id = $_GET['id']; 
$trx = $pdo->query("SELECT * FROM transaksi WHERE id=$id")->fetch(); 
?>  

<div class="struk-container">

    <!-- Logo Store Bulat -->
    <div class="struk-logo">
        <img src="WhatsApp Image 2026-04-27 at 15.24.50.jpeg" alt="Logo Store">
    </div>

    <h2 class="ri">KAWANDIKA.STORE</h2>
    <p class="slogan">Store The Next Level</p>

    <div class="struk-detail">
        <p><strong>Nama Pemesan:</strong> <?= $trx['nama_pemesan'] ?></p>
        <p><strong>Produk:</strong> <?= $trx['produk'] ?></p>
        <p><strong>Harga Produk:</strong> <?= number_format($trx['harga_produk'],0,',','.') ?></p>
        <p><strong>Nama Admin:</strong> <?= $trx['admin'] ?></p>
        <p><strong>Potongan:</strong> <?= number_format($trx['potongan'],0,',','.') ?></p>
        <p><strong>Membership:</strong> <?= $trx['membership'] ?></p>
        <p><strong>Nomor Token/SN:</strong> <?= $trx['sn'] ?></p>
        <p><strong>Total Bayar:</strong> <?= number_format($trx['total'],0,',','.') ?></p>
    </div>
</div>

<!-- Tombol Download PNG -->
<button onclick="downloadPNG()"  
style="margin:20px auto; display:block; padding:10px 20px; background:#003300; color:#fff; border:none; border-radius:8px; cursor:pointer;">
    Download Struk PNG
</button>

<style>
/* Container struk */
.struk-container {
    width: 400px;
    margin: 20px auto;
    padding: 20px;
    background: #ffffff; /* 📄 Putih seperti kertas */
    border-radius: 12px;
    box-shadow: 0 3px 15px rgba(0,0,0,0.15);
    font-family: 'Segoe UI', sans-serif;
    color: #000000; /* Hijau kuat */
    text-align: center;
}

/* Logo store bulat */
.struk-logo {
    display: flex;
    justify-content: center;  /* ⬅️ pusat horizontal */
    align-items: center;      /* ⬅️ pusat vertikal */
    width: 100%;
    margin-bottom: 15px;
}

.struk-logo img {
    width: 100px;            /* dibuat lebih besar agar maksimal */
    height: 100px;
    object-fit: cover;
    border-radius: 50%;
    border: 3px solid #000000; /* hijau pekat */
}

/* Judul struk */
.struk-container h2.ri {
    font-size: 1.6rem;
    font-weight: 700;
    color: #000000;
    margin-bottom: 5px;
    position: relative;
}

.struk-container h2.ri::after {
    content: "";
    display: block;
    width: 70px;
    height: 3px;
    background-color: #000000;
    margin: 6px auto 0 auto;
    border-radius: 2px;
}

/* Slogan */
.slogan {
    font-size: 0.9rem;
    color: #000000;
    margin-bottom: 15px;
    font-style: italic;
}

/* Detail struk */
.struk-detail {
    text-align: left;
}

.struk-detail p {
    padding: 6px 0;
    font-size: 14px;
    border-bottom: 1px dashed #000000;
    display: flex;
    justify-content: space-between;
    color: #000000;
}

.struk-detail p strong {
    color: #000000;
}

/* Highlight total bayar */
.struk-detail p:last-child {
    font-weight: 700;
    font-size: 15px;
    color: #000000;
    border-bottom: none;
}

</style>

<!-- PRINT STRUK -->
<script>
    window.print();
</script>

<!-- Library html2canvas -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<!-- Download PNG -->
<script>
function downloadPNG() {
    const element = document.querySelector('.struk-container');

    html2canvas(element, { scale: 3 }).then(canvas => {
        const link = document.createElement('a');
        link.download = "struk_<?= $trx['id'] ?>.png";
        link.href = canvas.toDataURL();
        link.click();
    });
}
</script>

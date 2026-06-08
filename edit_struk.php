<?php
require "koneksi.php";
$id = $_GET['id'];
$trx = $pdo->query("SELECT * FROM transaksi WHERE id=$id")->fetch();

if($_POST){
    $stmt = $pdo->prepare("
        UPDATE transaksi SET
        nama_pemesan=?,
        harga_produk=?,
        admin=?,
        potongan=?,
        membership=?,
        sn=?,
        total=?
        WHERE id=?
    ");
    $stmt->execute([
        $_POST['nama_pemesan'],
        $_POST['harga_produk'],
        $_POST['admin'],
        $_POST['potongan'],
        $_POST['membership'],
        $_POST['sn'],
        $_POST['total'],
        $id
    ]);
    header("Location: transaksi.php");
}
?>

<div class="form-container">
    <h2 class="ri">Edit Transaksi</h2>

    <form method="POST" class="edit-form">
        <label>Nama Pemesan</label>
        <input type="text" name="nama_pemesan" value="<?= htmlspecialchars($trx['nama_pemesan']) ?>">

        <label>Harga Produk</label>
        <input type="number" name="harga_produk" value="<?= htmlspecialchars($trx['harga_produk']) ?>">


        <label>Admin</label>
        <input type="text" name="admin" value="<?= htmlspecialchars($trx['admin']) ?>">

        <label>Potongan</label>
        <input type="number" name="potongan" value="<?= htmlspecialchars($trx['potongan']) ?>">

        <label>Membership</label>
        <input type="text" name="membership" value="<?= htmlspecialchars($trx['membership']) ?>">

        <label>SN</label>
        <input type="text" name="sn" value="<?= htmlspecialchars($trx['sn']) ?>">

        <label>Total</label>
        <input type="number" name="total" value="<?= htmlspecialchars($trx['total']) ?>">

        <button type="submit" class="btn btn-add">Simpan</button>
    </form>
</div>

<style>
/* Container Form */
.form-container {
    width: 400px;
    margin: 30px auto;
    padding: 20px;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 3px 15px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', sans-serif;
}

/* Judul Form */
.form-container h2.ri {
    text-align: center;
    font-size: 1.5rem;
    font-weight: 600;
    color: #1d4ed8;
    margin-bottom: 20px;
    position: relative;
}

.form-container h2.ri::after {
    content: "";
    display: block;
    width: 60px;
    height: 3px;
    background-color: #1d4ed8;
    margin: 6px auto 0 auto;
    border-radius: 2px;
}

/* Form */
.edit-form label {
    display: block;
    margin-bottom: 5px;
    font-weight: 500;
    color: #555;
}

.edit-form input {
    width: 100%;
    padding: 8px 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 14px;
    box-sizing: border-box;
    transition: border-color 0.2s;
}

.edit-form input:focus {
    border-color: #1d4ed8;
    outline: none;
}

/* Tombol */
.btn {
    padding: 8px 16px;
    font-size: 14px;
    border-radius: 6px;
    text-decoration: none;
    color: white;
    background: #6c757d;
    border: none;
    cursor: pointer;
    transition: 0.2s;
}

.btn:hover {
    opacity: 0.85;
}

.btn-add {
    background-color: #27ae60;
}
</style>

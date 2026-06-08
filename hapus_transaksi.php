<?php
require "koneksi.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM transaksi WHERE id=?");
    $stmt->execute([$id]);
}

header("Location: transaksi.php");
exit;

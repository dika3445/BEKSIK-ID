<?php
$config = require 'config.php';

$pdo = new PDO(
  "mysql:host={$config->db_host};dbname={$config->db_name}",
  $config->db_user,
  $config->db_pass,
  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
?>

<?php

require "../core.php";

$id = $_GET['id'];
$id_aduan = $_GET['id_aduan'];

try {
    $stmt = $pdo->prepare("DELETE FROM `tanggapan` WHERE `id_tanggapan`= $id");
    $stmt->execute();
    header('location:detail-pengaduan.php?id='. $id_aduan);
} catch (Exception $ex) {
    print_r($ex);
    die();
} 
?>
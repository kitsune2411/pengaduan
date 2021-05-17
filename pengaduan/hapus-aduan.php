<?php

require "../core.php";

$id = $_GET['id'];

try {
    $stmt = $pdo->prepare("DELETE FROM `pengaduan` WHERE `id_pengaduan`= $id");
    $stmt->execute();
    header('location:pengaduan.php?pesan=sukses');
} catch (Exception $ex) {
    print_r($ex);
    die();
} 
?>



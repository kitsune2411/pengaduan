<?php
require "core.php";

$id = $_GET['id'];

try {
    $stmt = $pdo->prepare("UPDATE `petugas` SET `nama_petugas`=?,`username`=?, `password`=?, `telp`=?, `level`=? WHERE `id_petugas`= $id ");
    $stmt->execute([$_POST['nama'], $_POST['user'], $_POST['pass'], $_POST['tlp'],$_POST['role']]);
    header('location:2-admin.php');
} catch (Exception $ex) {
    print_r($ex);
    die();
}

?>
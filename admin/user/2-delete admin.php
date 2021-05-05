<?php

$id = $_GET['id'];

require "../core.php";

try {
    $stmt = $pdo->prepare("DELETE FROM `petugas` WHERE `id_petugas`= $id");
    $stmt->execute();
    header('location:2-admin.php');
} catch (Exception $ex) {
    print_r($ex);
    die();
}
?>
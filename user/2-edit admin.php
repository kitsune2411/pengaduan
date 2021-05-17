<?php
require "../core.php";

$id = $_GET['id'];
if ($_POST['pass'] == $_POST['confirm-pass'] ) {

    try {
        $stmt = $pdo->prepare("UPDATE `petugas` SET `nama_petugas`=?,`username`=?, `password`=?, `telp`=?, `level`=? WHERE `id_petugas`= $id ");
        $stmt->execute([$_POST['nama'], $_POST['user'], md5($_POST['pass']), $_POST['tlp'],$_POST['role']]);
        header('location:2-admin.php?pesan=ubah');
    } catch (Exception $ex) {
        print_r($ex);
        die();
    }
} else {
    header('location:2-form-edit-admin.php?pesan=gagal');
}

?>
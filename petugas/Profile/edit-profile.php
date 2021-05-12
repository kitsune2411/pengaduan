<?php
require "../core.php";

$username= $_SESSION['username'];
if ($_POST['pass'] == $_POST['confirm-pass'] ) {

    try {
        $stmt = $pdo->prepare("UPDATE `petugas` SET `nama_petugas`=?,`username`=?, `password`=?, `telp`=?, `level`=? WHERE `username`='$username'  ");
        $stmt->execute([$_POST['nama'], $_POST['user'], md5($_POST['pass']), $_POST['tlp'],$_POST['role']]);
        header('location:profile.php');
    } catch (Exception $ex) {
        print_r($ex);
        die();
    }
} else {
    header('location:form-edit-profile.php?pesan=gagal');
}

?>
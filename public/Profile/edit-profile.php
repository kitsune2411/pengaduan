<?php
session_start();
require "../core.php";

$username= $_SESSION['username'];

if ($_POST['pass'] == $_POST['confirm-pass'] ) {

    try {
        $stmt = $pdo->prepare("UPDATE `masyarakat` SET `nik`=?,`nama`=?,`username`=? , `password`=?, `telp`=?, `email`=? WHERE `username`='$username'");
        $stmt->execute([$_POST['nik'],$_POST['nama'], $_POST['user'], md5($_POST['pass']), $_POST['tlp'],$_POST['email']]);
        header('location:profile.php');
    } catch (Exception $ex) {
        print_r($ex);
        die();
    }
} else {
    header('location:2-form-edit-profile.php?pesan=gagal');
}

?>
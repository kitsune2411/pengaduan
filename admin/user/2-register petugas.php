<?php
require "../core.php";

if(isset($_POST['submit'])) { 

    if ($_POST['pass'] == $_POST['confirm-pass'] ) {
        try {
            $stmt = $pdo->prepare("INSERT INTO `petugas`(nama_petugas,username,password, telp,level) VALUES (?, ?, ?,?, ?); "); 
            $stmt->execute([$_POST['nama'],$_POST['user'],md5($_POST['pass']),$_POST['tlp'],$_POST['role']]);
            header("location:2-admin.php");
        } catch (Exception $ex) {
            print_r($ex);
            die();
        }
        
        }else{
            header("location:2-form-register-admin.php?pesan=gagal");
        } 
}
?>
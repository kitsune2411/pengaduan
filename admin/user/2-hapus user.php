<?php

$nik = $_GET['nik'];

require "../core.php";

try {
    $stmt = $pdo->prepare("DELETE FROM `masyarakat` WHERE `nik`= $nik");
    $stmt->execute();
    header('location:2-user.php');
} catch (Exception $ex) {
    print_r($ex);
    die();
}
?>
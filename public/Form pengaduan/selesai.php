<?php include "../core.php"; 

$id = $_GET['id'];

try {
    $stmt = $pdo->prepare("UPDATE `pengaduan` SET `status` = 'selesai' WHERE `id_pengaduan` = $id ");
    $stmt->execute();
    
    header('location:../Rating/form-rating.php?id='. $id);
    exit; 
} catch (Exception $ex) {
        print_r($ex);
        die();
} 
?>
<?php

require "../core.php";

try{
  $stmt = $pdo->prepare("INSERT INTO tanggapan (id_pengaduan,tgl_tanggapan, tanggapan,id_petugas) VALUES (:id_aduan, CURRENT_TIMESTAMP, :isi, :id_petugas)");

      $stmt->bindParam(':id_aduan', $id_aduan);
      $stmt->bindParam(':isi', $isi);
      $stmt->bindParam(':id_petugas', $id_petugas);
      
  // insert a row
      $id_aduan = $_POST["id_aduan"];
      $isi = $_POST["isi"];
      $id_petugas = $_POST["id_petugas"];
      $stmt->execute();

      $stmt2 = $pdo->prepare("UPDATE `pengaduan` SET `status` = 'proses' WHERE `id_pengaduan` = $id_aduan ");
      $stmt2->execute();
    
      header('location:detail-pengaduan.php?id='. $id_aduan);
      exit;
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
?>


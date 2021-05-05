<?php

require "../core.php";

try{
  $stmt = $pdo->prepare("INSERT INTO pengaduan (tgl_pengaduan, isi_laporan,foto,status) VALUES (CURRENT_TIMESTAMP,:isi, :foto, '0')");
      $stmt->bindParam(':isi', $isi);
      $stmt->bindParam(':foto', $foto);

  // insert a row
      $isi = $_POST["isi"];
      $foto = $_POST["foto"];
      $stmt->execute();

      echo "New records created successfully";
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
?>


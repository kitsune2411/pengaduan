<?php session_start();include "../core.php"; 

$id = $_GET['id'];

if (!empty($_POST["rating"]))
{
    try{
    $stmt = $pdo->prepare("INSERT INTO rating (id_pengaduan,username,pesan,rate) VALUES (:id_aduan, :user, :isi, :rate)");
  
        $stmt->bindParam(':id_aduan', $id);
        $stmt->bindParam(':user', $username);
        $stmt->bindParam(':isi', $isi);
        $stmt->bindParam(':rate', $rate);
        
    // insert a row
        $username = $_SESSION["username"]; 
        $isi = $_POST["pesan"];
        $rate = $_POST["rating"];
        $stmt->execute();
      
        header('location:../Form pengaduan/pengaduan.php');
        exit;
  }
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}else{
   die('ratings required');
}

  ?>
<?php $judul="Rating"; include "../core.php"; include "../templates/header.php"; 

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

   <div class="container mt-5">
   <h3><span style="font-size:45px;color:orange;">Rating</span></h3>
<hr style="height:3px;color: #FFA900 ;">
  <?php
  $no = 1;
  $stmt = $pdo->prepare("SELECT * FROM `rating` "); 
  $stmt->execute();
  
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  
    ?>
    <div class="container">
    <div class="list-group mt-5">
      <div href="#" class="list-group-item list-group-item-action " aria-current="true">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1"><?=$row['username'];?></h5>
        </div>
        <p>Id pengaduan : <a href="../pengaduan/detail-pengaduan.php?id=<?=$row['id_pengaduan'];?>"><?=$row['id_pengaduan'];?></a></p>
        <p>Rating : <?=$row['rate'];?></p>
        <p class="mb-1"><?=$row['pesan'];?></p>
      </div>
    </div>
    </div>
    <?php } ?>
 
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    

<?php 
include "../templates/footer.php";
?>


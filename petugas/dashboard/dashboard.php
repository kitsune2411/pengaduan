<?php $judul="Dashboard";include "../core.php";include "../templates/header.php";  ?>

<style>
.border{
  border:3px solid #F7882F;
}
</style>


  <div class="container mt-5">
    <h2 class="display-6" style="color: #F7882F;">Halo, <span style="color:grey;"><?= $_SESSION['username'] ?></span></h2>
    <p class="lead">Selamat datang di PT Pekok Sejati </p>
  

<hr style="color: #F7882F; height: 3px;">

<!--CARD-->
<section>
  <?php 
  
    $masyarakat = $pdo->prepare("SELECT * FROM masyarakat");
    $masyarakat->execute();
    $user = $masyarakat->rowCount();
    
    $Petugas = $pdo->prepare("SELECT * FROM petugas");
    $Petugas->execute();
    $petugas = $Petugas->rowCount();

    $pengaduan = $pdo->prepare("SELECT * FROM pengaduan");
    $pengaduan->execute();
    $aduan = $pengaduan->rowCount();

    $rating = $pdo->prepare("SELECT AVG(rate) AS avg FROM rating");
    $rating->execute();
    while ($avg = $rating->fetch(PDO::FETCH_ASSOC)) :
      $average = $avg['avg'];
      $rate = round($average);
    endwhile;
  ?>

<div class="container overflow-hidden">
  <div class="row gy-3">
    <div class="col-6">
      <div class="p-3 border border-warning border-3 rounded-3" style="height:250px;"><a href="../user/2-user.php"><img class="rounded float-start" src="../img/oren1.png" alt="..." height="200"></a>
      <span class=""><p class="h1">Masyarakat</p><p class="h3"><?= $user ?></p></span></div>
    </div>
    
    <div class="col-6">
      <div class="p-3 border border-warning border-3 rounded-3" style="height:250px;"><a href="../pengaduan/pengaduan.php"><img class="rounded float-start" src="../img/oren3.png" alt="..." height="200"></a>
      <span class=""><p class="h1">Pengaduan</p><p class="h3"><?= $aduan ?></p></span></div>
    </div>
    <div class="col-6">
      <div class="p-3 border border-warning border-3 rounded-3" style="height:250px;"><a href="../rating/rating.php"><img class="rounded float-start" src="../img/oren4.png" alt="..." height="200"></a>
      <span class=""><p class="h1">Avg Rating</p><p class="h3"><?=$rate?></p></span></div>
    </div>
</div>
</section>


<?php 
include "../templates/footer.php";
?>
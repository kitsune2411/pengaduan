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
    #$rating    = 
    #$average   = array_sum($rating) / rowCount($pengaduan);
    #$avg       = ceil($average);

    
  ?>

<div class="container overflow-hidden">
  <div class="row gy-3">
    <div class="col-6">
      <div class="p-3 border border-warning border-3 rounded-3" style="height:250px;"><a href=""><img class="rounded float-start" src="../img/oren1.png" alt="..." height="200"></a>
      <span class=""><p class="h2">Masyarakat</p><p class=""><?= $user ?></p></span></div>
    </div>
    
    <div class="col-6">
      <div class="p-3 border border-warning border-3 rounded-3" style="height:250px;"><img class="rounded float-start" src="../img/oren3.png" alt="..." height="200">
      <span class=""><p class="h2">Pengaduan</p><p class=""><?= $aduan ?></p></span></div>
    </div>
    <div class="col-6">
      <div class="p-3 border border-warning border-3 rounded-3" style="height:250px;"><img class="rounded float-start" src="../img/oren4.png" alt="..." height="200">
      <span class=""><p class="h2">Avg Rating</p><p class=""></p></span></div>
    </div>
</div>
</section>


<?php include "../templates/footer.php";?>
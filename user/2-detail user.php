<?php 

$judul = "detail user";
require "../core.php"; 
include "../templates/header.php"; 

$nik    = $_GET['nik'];
?>

<div class="container mt-5">
<h3><span style="font-size:45px;color:orange;">User</span> List User</h3>

<ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active" href="2-user.php">Kembali ke daftar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="2-hapus user.php?nik=<?=$nik?>">Hapus</a>
    </li>
  </ul>

<hr style="height:3px;color:orange;">

<h4>INFORMASI USER</h4>

<table class="table table-borderless table-sm">
<tbody>
<?php
$stmt = $pdo->prepare("SELECT * FROM `masyarakat` WHERE nik=$nik"); 
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
    <tr>
        <th scope="row" style="width:20%;">NIK</th>
        <td>: <?= $row['nik'];?></td>
    </tr>
    <tr>
        <th scope="row">Nama</th>
        <td>: <?= $row['nama'];?></td>
    </tr>
    <tr>
        <th scope="row">Username</th>
        <td>: <?= $row['username'];?></td>
    </tr>
    <tr>
        <th scope="row">No. Handphone</th>
        <td>: <?= $row['telp'];?></td>
    </tr>
    


<?php } ?>
</tbody>    
</div>

<?php include "../templates/footer.php";?>

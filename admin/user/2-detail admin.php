<?php 

$judul = "detail admin";
include "../templates/header.php"; 
require "../core.php"; 

$id    = $_GET['id'];
?>

<div class="container mt-5">
<h3><span style="font-size:45px;color:orange;">User</span> List User</h3>

<ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active" href="2-admin.php">Kembali ke daftar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="2-form-edit-admin.php?id=<?=$id?>">Edit</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="2-delete admin.php?id=<?=$id?>">Hapus</a>
    </li>
  </ul>

<hr style="height:3px;color:orange;">

<h4>INFORMASI PETUGAS</h4>

<table class="table table-borderless table-sm">
<tbody>
<?php
$stmt = $pdo->prepare("SELECT * FROM `petugas` WHERE id_petugas=$id"); 
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
    <tr>
        <th scope="row" style="width:20%;">ID</th>
        <td>: <?= $row['id_petugas'];?></td>
    </tr>
    <tr>
        <th scope="row">Nama</th>
        <td>: <?= $row['nama_petugas'];?></td>
    </tr>
    <tr>
        <th scope="row">Username</th>
        <td>: <?= $row['username'];?></td>
    </tr>
    <tr>
        <th scope="row">Posisi</th>
        <td>: <?= $row['level'];?></td>
    </tr>
    <tr>
        <th scope="row">No. Handphone</th>
        <td>: <?= $row['telp'];?></td>
    </tr>
    <tr>
        <th scope="row">Password</th>
        <td>: <?= $row['password'];?></td>
    </tr>


<?php } ?>
</tbody>    
</div>

<?php include "../templates/footer.php";?>

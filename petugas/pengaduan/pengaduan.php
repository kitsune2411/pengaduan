<?php 
require "../core.php";
$judul = "Pengaduan";
include "../templates/header.php";

?>
<style>
.badge.rounded-pill{
  font-size:14.4px;
  width: 81px;
}
</style>

<div class="container mt-5">
<h3><span style="font-size:45px;color:orange;">Pengaduan</span> List aduan</h3>
<hr style="height:3px;color: #FFA900 ;">
<table class="table text-center mt-3">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">ID</th>
      <th scope="col">TANGGAL</th>
      <th scope="col">NIK</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody >
    <?php
      $no = 1;
      $stmt = $pdo->prepare("SELECT * FROM `pengaduan` "); 
      $stmt->execute();
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <tr>
      <td><?= $no; $no++ ?></td>
      <td><a href="detail-pengaduan.php?id=<?=$row['id_pengaduan'];?>"><?= $row['id_pengaduan']; ?></a></td>
      <td><?= $row['tgl_pengaduan']; ?></td>
      <td><?= $row['nik']; ?></td>
      <td>
      <?php 
          if($row['status'] == '0'){echo '<span class="badge rounded-pill bg-primary">Terkirim</span>';} 
          elseif($row['status'] == 'proses'){echo '<span class="badge rounded-pill bg-warning">Diproses</span>';}
          elseif($row['status'] == 'selesai'){echo '<span class="badge rounded-pill bg-success">Selesai</span>';} 
          else echo "erorr"
        ?>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>

<?php include "../templates/footer.php"; ?>
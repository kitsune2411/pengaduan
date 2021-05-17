<?php 
$judul = "user";
require "../core.php";
include "../templates/header.php"; 


?>
<style>
  .n{
    width:100px;
  }
  .n.active {
    border-bottom: 3px solid #FF8C00;
    color: #FF8C00 !important;
  }
</style>

<div class="container mt-5">

  <h3><span style="font-size:45px;color:orange;">User</span> List User</h3>

<ul class="nav justify-content-end invisible">
    <li class="nav-item">
      <a class="nav-link" href=""><i class="fas fa-plus-square me-2" style="color:#FFA900; font-size:25px;"></i><span style="color:black;">Tambah Petugas</span></a>
    </li>
  </ul>
  <hr style="height:3px;color: #FFA900 ;">
  <?php 
				if(isset($_GET['pesan'])){
					if($_GET['pesan']=="sukses"){
						echo "<div class='alert alert-success' role='alert'>akun berhasil terhapus<span onclick=\"this.parentElement.style.display='none'\" style='float:right; cursor:pointer;'>X</span></div>";
					}
				}
				?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light mt-n2 ms-n4 mb-2">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item me-2">
          <a class="nav-link text-center n active" aria-current="page" href="2-user.php">Masyarakat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center n" href="2-admin.php">Petugas</a>
        </li>
    
      </ul>
    </div>
  </div>
</nav>

      <!-- user-->
      <table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">NIK</th>
            <th scope="col">USERNAME</th>
            <th scope="col">NAME</th>
            <th scope="col">TELEPON</th>
            <th scope="colgroup" colspan="2" class="text-center">AKSI</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $batas          = 5;
            $halaman        = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
            $halaman_awal   = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

            $previous       = $halaman - 1;
            $next           = $halaman + 1;
            $no             = $halaman_awal + 1;
            $data           = $pdo->prepare("SELECT * FROM masyarakat");
            $data->execute();

            $jumlah_data    = $data->rowCount();
            $total_halaman  = ceil($jumlah_data / $batas);

            $sql            = "SELECT * FROM masyarakat LIMIT $halaman_awal, $batas";
            $stmt           = $pdo->prepare($sql);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          ?>
          <tr>
            <td>
              <?= $no; $no++ ?>
            </td>
            <td>
              <?= $row['nik']; ?>
            </td>
            <td>
              <?= $row['username']; ?>
            </td>
            <td>
              <?= $row['nama']; ?>
            </td>
            <td>
              <?= $row['telp'];?>
            </td>
            <td class="text-end"><a href="2-detail user.php?nik=<?= $row['nik']; ?>"><i class="far fa-eye" style="color:grey;"></i></td>
            <td><a href="2-hapus user.php?nik=<?= $row['nik']; ?>"><i class="fas fa-times-circle" style="color:red;"></i></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <nav aria-label="Page navigation example">
			<ul class="pagination justify-content-end">				
        <li class="page-item"><a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>	</li>			
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
				?> 
			    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
				<?php
				}
				?>				
				<li class="page-item"><a class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a></li>			
			</ul>
		    </nav>
    </div>
          
</div>
</div>




<?php include "../templates/footer.php";?>
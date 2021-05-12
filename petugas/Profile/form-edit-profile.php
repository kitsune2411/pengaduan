<?php $judul="Edit Profil"; include "../core.php"; include "../templates/header.php";  $username = $_SESSION['username']; ?>

<style>
.btn-custom{ background-color: grey; color:white;}
.btn-custom:hover{ background-color: #696969; color:white;}
</style>
<?php 
				if(isset($_GET['pesan'])){
					if($_GET['pesan']=="gagal"){
						echo "<div class='alert alert-danger' role='alert'>ERORR !<span onclick=\"this.parentElement.style.display='none'\" style='float:right; cursor:pointer;'>X</span></div>";
					}
				}
				?>
<div class="container mt-5">
    <h1 class="text-center">Edit Profile</h1>
    
</div>

<div class="container my-5" style="border: 3px solid #F7882F ; border-radius:15px; width:50%">
    
    <?php
    $stmt = $pdo->prepare("SELECT * FROM `petugas` WHERE username = '$username' "); 
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
    ?>
    <form action="2-edit admin.php?id=<?=$id?>" method="post" class="mt-5">
    <div class="form-outline mb-4">
      <input type="text" id="form1Example1" class="form-control" name="nama" value="<?= $row['nama_petugas']; ?>"/>
      <label class="form-label" for="form1Example1">Nama</label>
    </div>
    <div class="form-outline mb-4">
      <input type="text" id="form1Example1" class="form-control" name="user" value="<?= $row['username']; ?>"/>
      <label class="form-label" for="form1Example1">Username</label>
    </div>
        <div class="form-outline mb-4">
          <input type="number" id="form1Example1" class="form-control" name="tlp" value="<?= $row['telp'];?>"/>
          <label class="form-label" for="form1Example1">Nomor Telepon</label>
        </div>
      <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="password" id="form1Example2" class="form-control" name="pass" />
          <label class="form-label" for="form1Example2">Password</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline ">
          <input type="password" id="form1Example2" class="form-control" name="confirm-pass" />
          <label class="form-label" for="form1Example2">Confirm Password</label>
        </div>
      </div>
    </div>
    <div class="form-outline mb-4">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Role</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="role">
        <option value="" selected hidden>Role</option>
        <option value="Admin">Admin</option>
        <option value="Petugas">Petugas</option>
      </select>
    </div>
      <button type="submit" class="btn btn-warning float-right mt-3 ms-2"  style="color:white; width:83.78px" name="submit">Save</button>
      <button type="cancel" onclick="window.location='profile.php';return false;" class="btn btn-custom float-right mt-3 me-2">Cancel</button>
      
  </form>
</div>
<?php endwhile; ?>
<?php include "../templates/footer.php"; ?>
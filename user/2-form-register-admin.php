<?php $judul = "tambah petugas"; include "../templates/header.php"; ?>

<style>
  .btn-c{
    background-color:#FF8C00;
    color:white;
  }

  .btn-c:hover{
    background-color:#CC6600;
    color:white;
  }


  .btn-custom {
    background-color: grey;
    color: white;
  }

  .btn-custom:hover {
    background-color: #696969;
    color: white;
  }

  /* Chrome, Safari, Edge, Opera */
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  /* Firefox */
  input[type=number] {
    -moz-appearance: textfield;
  }
</style>
<div class="container-fluid mt-5">

  <h2>Tambah Petugas</h2>
  <hr style="height:3px;color:orange;">
<?php 
				if(isset($_GET['pesan'])){
					if($_GET['pesan']=="gagal"){
						echo "<div class='alert alert-danger' role='alert'>ERORR !<span onclick=\"this.parentElement.style.display='none'\" style='float:right; cursor:pointer;'>X</span></div>";
					}
				}
				?>
  <form action="2-register petugas.php" method="post" class="mt-5">
    <div class="form-outline mb-4">
      <input type="text" id="form1Example1" class="form-control" name="nama" required/>
      <label class="form-label" for="form1Example1">Nama</label>
    </div>
    <div class="form-outline mb-4">
      <input type="text" id="form1Example1" class="form-control" name="user" required/>
      <label class="form-label" for="form1Example1">Username</label>
    </div>
    <div class="form-outline mb-4">
      <input type="number" id="form1Example1" class="form-control" name="tlp" required/>
      <label class="form-label" for="form1Example1">Nomor Telepon</label>
    </div>

    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="password" id="form1Example2" class="form-control" name="pass" required/>
          <label class="form-label" for="form1Example2">Password</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline ">
          <input type="password" id="form1Example2" class="form-control" name="confirm-pass" required/>
          <label class="form-label" for="form1Example2">Confirm Password</label>
        </div>
      </div>
    </div>
    <div class="form-outline mb-4">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Role</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="role"required>
        <option value="" selected hidden>Role</option>
        <option value="Admin">Admin</option>
        <option value="Petugas">Petugas</option>
      </select>
    </div>
    <button type="submit" class="btn btn-warning float-right mt-3 ms-2"  style="color:white; width:83.78px" name="submit">Save</button>
      <button type="cancel" onclick="window.location='2-admin.php';return false;" class="btn btn-custom float-right mt-3 me-2">Cancel</button>
  </form>
</div>
<?php include "../templates/footer.php"; ?>
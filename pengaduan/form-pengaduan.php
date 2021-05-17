<?php include "../templates/header.php"; ?>

<div class="container">
    <form class="mt-5" action="upload.php" method="POST" enctype="multipart/form-data">
        <h1>Form Pengaduan</h1>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="isi"></textarea>
        </div>
        <div class="custom-file">
            <input type="file" name="foto" class="custom-file-input" id="inputGroupFile04" multiple>
            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
        </div>

        <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

<?php include "../templates/footer.php"; ?>
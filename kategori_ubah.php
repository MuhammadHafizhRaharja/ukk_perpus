<h1 class="mt-4" style="color:#eddcfc">Ubah kategori buku</h1>
<div class="card" style="background-color:#321247">
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="" method="post">
          <?php
          $id = $_GET["id"];

          if (isset($_POST["submit"])) {
            $kategori = $_POST["kategori"];
            $query = mysqli_query($koneksi, "UPDATE kategori SET kategori = '$kategori' WHERE id_kategori = '$id'");

            if ($query) {
              echo "<script>location.href = '?page=kategori'</script>";
            }
          }

          $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori = '$id'");
          $data = mysqli_fetch_array($query);
          ?>
          <div class="row mb-3">
            <div class="col-md-2" style="color:#eddcfc">Nama kategori</div>
            <div class="col-md-8">
              <input class="form-control" type="text" name="kategori" value="<?= $data["kategori"]; ?>">
            </div>
          </div>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <button class="btn btn-primary" name="submit" value="submit">Simpan</button>
              <button class="btn btn-secondary" name="reset">Reset</button>
              <a href="?page=kategori" class="btn btn-danger">Kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
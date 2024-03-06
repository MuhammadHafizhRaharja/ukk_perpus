<h1 class="mt-4" style="color:#eddcfc">Buku</h1>
<div class="card" style="background-color:#321247">
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="" method="post" enctype="multipart/form-data">
          <?php
          if (isset($_POST["submit"])) {
            $id_kategori = $_POST["id_kategori"];
            $judul = $_POST["judul"];
            $deskripsi = $_POST["deskripsi"];
            $penulis = $_POST["penulis"];
            $penerbit = $_POST["penerbit"];
            $tahunTerbit = $_POST["tahunTerbit"];

            $fileBuku = $_FILES['cover'];
            $fileType = explode("image/", $fileBuku["type"]);
            $fileName = rand(100_000, 999_999) . '.' . $fileType[1];

            move_uploaded_file($fileBuku['tmp_name'], './assets/upload/' . $fileName);

            $query = mysqli_query($koneksi, "INSERT INTO buku(id_kategori, judul, cover, deskripsi, penulis, penerbit, tahun_terbit) VALUES('$id_kategori', '$judul', '$fileName', '$deskripsi', '$penulis', '$penerbit', '$tahunTerbit')");

            if ($query) {
              echo "<script>location.href = '?page=buku'</script>";
            }
          }
          ?>
          <div class="row mb-3">
            <div class="col-md-2" style="color:#eddcfc">Kategori</div>
            <div class="col-md-8">
              <select name="id_kategori" class="form-control">
                <?php
                $kat = mysqli_query($koneksi, "SELECT * FROM kategori");

                while ($kategori = mysqli_fetch_array($kat)) {
                ?>
                  <option value="<?= $kategori["id_kategori"] ?>"><?= $kategori["kategori"] ?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-2" style="color:#eddcfc">Judul</div>
            <div class="col-md-8">
              <input class="form-control" type="text" name="judul">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-2" style="color:#eddcfc">Cover</div>
            <div class="col-md-8">
              <input class="form-control" type="file" name="cover">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-2" style="color:#eddcfc">Deskripsi</div>
            <div class="col-md-8">
              <textarea rows="5" class="form-control" type="text" name="deskripsi"></textarea>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-2" style="color:#eddcfc">Penulis</div>
            <div class="col-md-8">
              <input class="form-control" type="text" name="penulis">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-2" style="color:#eddcfc">Penerbit</div>
            <div class="col-md-8">
              <input class="form-control" type="text" name="penerbit">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-2" style="color:#eddcfc">Tahun terbit</div>
            <div class="col-md-8">
              <input class="form-control" type="text" name="tahunTerbit">
            </div>
          </div>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <button class="btn btn-primary" name="submit" value="submit">Simpan</button>
              <button class="btn btn-secondary" name="reset">Reset</button>
              <a href="?page=buku" class="btn btn-danger">Kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
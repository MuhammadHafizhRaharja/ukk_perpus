<h1 class="mt-4" style="color:#eddcfc">Buku</h1>
<div class="card"style="background-color:#321247">
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="" method="post" enctype="multipart/form-data">
          <?php
          $id = $_GET["id"];

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

            $query = mysqli_query($koneksi, "UPDATE buku SET id_kategori = '$id_kategori', judul = '$judul', cover = '$fileName', deskripsi = '$deskripsi', penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = '$tahunTerbit' WHERE id_buku = '$id'");

            if ($query) {
              echo "<script>location.href = '?page=buku'</script>";
            }
          }

          $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = '$id'");
          $data = mysqli_fetch_array($query);
          ?>
          <div class="row mb-3" style="color:#eddcfc">
            <div class="col-md-2">Kategori</div>
            <div class="col-md-8">
              <select name="id_kategori" class="form-control">
                <?php
                $kat = mysqli_query($koneksi, "SELECT * FROM kategori");

                while ($kategori = mysqli_fetch_array($kat)) {
                ?>
                  <option <?php if ($kategori['id_kategori'] == $data["id_kategori"]) echo 'selected'; ?> value="<?= $kategori["id_kategori"] ?>"><?= $kategori["kategori"] ?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="row mb-3" style="color:#eddcfc">
            <div class="col-md-2">Judul</div>
            <div class="col-md-8">
              <input class="form-control" type="text" value="<?= $data['judul']; ?>" name="judul">
            </div>
          </div>
          <div class="row mb-3" style="color:#eddcfc">
            <div class="col-md-2">Cover</div>
            <div class="col-md-8">
              <input class="form-control" type="file" name="cover">
            </div>
          </div>
          <div class="row mb-3" style="color:#eddcfc">
            <div class="col-md-2">Deskripsi</div>
            <div class="col-md-8">
              <textarea rows="5" class="form-control" type="text" name="deskripsi">
                <?= $data['deskripsi']; ?>
              </textarea>
            </div>
          </div>
          <div class="row mb-3" style="color:#eddcfc">
            <div class="col-md-2">Penulis</div>
            <div class="col-md-8">
              <input class="form-control" type="text" value="<?= $data['penulis']; ?>" name="penulis">
            </div>
          </div>
          <div class="row mb-3" style="color:#eddcfc">
            <div class="col-md-2">Penerbit</div>
            <div class="col-md-8">
              <input class="form-control" type="text" value="<?= $data['penerbit']; ?>" name="penerbit">
            </div>
          </div>
          <div class="row mb-3" style="color:#eddcfc">
            <div class="col-md-2">Tahun terbit</div>
            <div class="col-md-8">
              <input class="form-control" type="text" value="<?= $data['tahun_terbit']; ?>" name="tahunTerbit">
            </div>
          </div>
          <div class="row">
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
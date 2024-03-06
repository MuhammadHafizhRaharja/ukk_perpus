<h1 class="mt-4" style="color:#eddcfc">Ulasan buku</h1>
<div class="card" style="background-color:#321247">
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="" method="post">
          <?php
          $id = $_GET["id"];

          if (isset($_POST["submit"])) {
            $id_buku = $_POST["id_buku"];
            $id_user = $_SESSION['user']['id_user'];
            $ulasan = $_POST["ulasan"];
            $rating = $_POST["rating"];

            $query = mysqli_query($koneksi, "UPDATE ulasan SET id_buku = '$id_buku', ulasan = '$ulasan', rating = '$rating' WHERE id_ulasan = '$id'");

            if ($query) {
              echo "<script>location.href = '?page=ulasan'</script>";
            }
          }

          $query = mysqli_query($koneksi, "SELECT * FROM ulasan WHERE id_ulasan = '$id'");
          $data = mysqli_fetch_array($query);
          ?>
          <div class="row mb-3" style="color:#eddcfc">
            <div class="col-md-2">Buku</div>
            <div class="col-md-8">
              <select name="id_buku" class="form-control">
                <?php
                $buk = mysqli_query($koneksi, "SELECT * FROM buku");

                while ($buku = mysqli_fetch_array($buk)) {
                ?>
                  <option <?php if ($data['id_buku'] == $buku["id_buku"]) echo "selected"; ?> value="<?= $buku["id_buku"] ?>"><?= $buku["judul"] ?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="row mb-3" style="color:#eddcfc">
            <div class="col-md-2">Ulasan</div>
            <div class="col-md-8">
              <textarea rows="5" class="form-control" type="text" name="ulasan"><?= $data["ulasan"]; ?></textarea>
            </div>
          </div>
          <div class="row mb-3" style="color:#eddcfc">
            <div class="col-md-2">Rating</div>
            <div class="col-md-8">
              <select class="form-control" name="rating" id="">
                <?php
                for ($i = 1; $i <= 5; $i++) {
                ?>
                  <option <?php if ($data["rating"] == $i) echo "selected"; ?>><?= $i; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <button class="btn btn-primary" name="submit" value="submit">Simpan</button>
              <button class="btn btn-secondary" name="reset">Reset</button>
              <a href="?page=ulasan" class="btn btn-danger">Kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
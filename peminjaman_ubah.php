<h1 class="mt-4" style="color:#eddcfc">Peminjaman buku</h1>
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
            $tanggalPeminjaman = $_POST["tanggal_peminjaman"];
            $tanggalPengembalian = $_POST["tanggal_pengembalian"];
            $statusPeminjaman = $_POST["status_peminjaman"];
            $rating = $_POST["rating"];

            $query = mysqli_query($koneksi, "UPDATE peminjaman SET id_buku = '$id_buku', tanggal_peminjaman = '$tanggalPeminjaman', tanggal_peminjaman = '$tanggalPengembalian', status_peminjaman = '$statusPeminjaman' WHERE id_peminjaman = '$id'");

            if ($query) {
              echo "<script>location.href = '?page=peminjaman'</script>";
            }
          }

          $query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjaman = '$id'");
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
                  <option <?php if ($buku['id_buku'] == $data["id_buku"]) echo 'selected'; ?> value="<?= $buku["id_buku"] ?>"><?= $buku["judul"] ?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="row mb-3"style="color:#eddcfc">
            <div class="col-md-2">Tanggal peminjaman</div>
            <div class="col-md-8">
              <input type="date" class="form-control" value="<?= $data["tanggal_peminjaman"] ?>" name="tanggal_peminjaman">
            </div>
          </div>
          <div class="row mb-3" style="color:#eddcfc">
            <div class="col-md-2">Tanggal pengembalian</div>
            <div class="col-md-8">
              <input type="date" class="form-control" value="<?= $data["tanggal_pengembalian"] ?>" name="tanggal_pengembalian">
            </div>
          </div>
          <div class="row mb-3" style="color:#eddcfc">
            <div class="col-md-2">Status peminjaman</div>
            <div class="col-md-8">
              <select name="status_peminjaman" class="form-control" id="">
                <option <?php if ($data['status_peminjaman'] == "dipinjam") echo 'selected'; ?> value="dipinjam">Dipinjam</option>
                <option <?php if ($data['status_peminjaman'] == "dikembalikan") echo 'selected'; ?> value="dikembalikan">Dikembalikan</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <button class="btn btn-primary" name="submit" value="submit">Simpan</button>
              <button class="btn btn-secondary" name="reset">Reset</button>
              <a href="?page=peminjaman" class="btn btn-danger">Kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
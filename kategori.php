<?php
if ($_SESSION["user"]["level"] == 'petugas' || $_SESSION["user"]["level"] == 'admin') {
    echo "<h3 style='color:#eddcfc'>Selamat datang di </h3>";
} else {
    echo "<script>alert('Hanya admin dan petugas yang bisa mengakses halaman ini!'); document.location.href='index.php'</script>";
}
?>
<h1 class="mt-4" style="color:#eddcfc">Kategori buku</h1>
<div class="card" style="background-color:#321247">
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <a href="?page=kategori_tambah" class="btn btn-primary my-4">Tambah data</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <tr style="color:#eddcfc">
            <th>No</th>
            <th>Nama kategori</th>
            <th>aksi</th>
          </tr>
          <?php
          $num = 1;
          $query = mysqli_query($koneksi, "SELECT * FROM kategori");
          while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr style="color:#eddcfc">
              <td><?= $num++; ?></td>
              <td><?= $data["kategori"]; ?></td>
              <td>
                <a href="?page=kategori_ubah&&id=<?= $data['id_kategori']; ?>" class="btn btn-info text-light">Ubah</a>
                <a onclick="return confirm('Apakah anda yakin menghapus kategori ini?');" href="?page=kategori_hapus&&id=<?= $data['id_kategori']; ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php }; ?>
        </table>
      </div>
    </div>
  </div>
</div>
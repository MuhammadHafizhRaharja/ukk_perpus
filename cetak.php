<h2 align="center">Laporan peminjaman</h2>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
  <tr>
    <th>No</th>
    <th>User</th>
    <th>Buku</th>
    <th>Tanggal peminjaman</th>
    <th>Tanggal pengembalian</th>
    <th>Status peminjam</th>
  </tr>
  <?php
  require_once "koneksi.php";
  $num = 1;
  $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user ON user.id_user = peminjaman.id_user LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku");
  while ($data = mysqli_fetch_array($query)) {
  ?>
    <tr>
      <td><?= $num++; ?></td>
      <td><?= $data["nama"]; ?></td>
      <td><?= $data["judul"]; ?></td>
      <td><?= $data["tanggal_peminjaman"]; ?></td>
      <td><?= $data["tanggal_pengembalian"]; ?></td>
      <td><?= $data["status_peminjaman"]; ?></td>
    </tr>
  <?php }; ?>
</table>
<script>
  window.print();
  setTimeout(() => {
    window.close();
  }, 100);
</script>
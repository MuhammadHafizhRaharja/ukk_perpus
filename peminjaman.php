<h1 class="mt-4 text-center" style="color:#eddcfc">Peminjaman buku</h1>
<div class="card" style="background-color:#321247">
  <div class="card-body"style="background-color:#321247">
    <div class="row">
      <div class="col-md-12" style="background-color:#321247">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"style="background-color:#321247">
          <tr style="color:#eddcfc">
            <th>No</th>
            <th>User</th>
            <th>Buku</th>
            <th>Cover</th>
            <th>Tanggal peminjaman</th>
            <th>Tanggal pengembalian</th>
            <th>Status peminjam</th>
            <th>Aksi</th>
          </tr>
          <?php
          $id_user = $_SESSION["user"]["id_user"];
          $num = 1;
          $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user ON user.id_user = peminjaman.id_user LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku WHERE peminjaman.id_user = '$id_user'");
          while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr style="color:#eddcfc">
              <td><?= $num++; ?></td>
              <td><?= $data["nama"]; ?></td>
              <td><?= $data["judul"]; ?></td>
              <td style="width: 250px;">
                <img class="w-100" src="./assets/upload/<?= $data["cover"]; ?>" alt="">
              </td>
              <td><?= $data["tanggal_peminjaman"]; ?></td>
              <td><?= $data["tanggal_pengembalian"]; ?></td>
              <td><?= $data["status_peminjaman"]; ?></td>
              <td>
                <?php if ($data["status_peminjaman"] != "dikembalikan") { ?>
                  <a href="?page=detail&&id=<?php echo $data['id_buku']; ?>" class="btn btn-info">Detail</a>
                <?php } ?>
              </td>
            </tr>
          <?php }; ?>
        </table>
      </div>
    </div>
  </div>
</div>
<h1 class="mt-4 text-center" style="color:#eddcfc">Ulasan</h1>
<div class="card" style="background-color:#321247">
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <tr style="color:#eddcfc">
            <th>No</th>
            <th>User</th>
            <th>Buku</th>
            <th>Cover</th>
            <th>Ulasan</th>
            <th>Rating</th>
            <th>Aksi</th>
          </tr>
          <?php
          $num = 1;
          // $query = mysqli_query($koneksi, "SELECT ulasan.*, buku.*, user.* FROM ulasan INNER JOIN user ON user.id_user = ulasan.id_user INNER JOIN buku ON buku.id_buku = ulasan.id_buku");
          $query = mysqli_query($koneksi, "SELECT ulasan.*, buku.*, user.* FROM ulasan INNER JOIN user ON user.id_user = ulasan.id_user INNER JOIN buku ON buku.id_buku = ulasan.id_buku");
          while ($data = mysqli_fetch_array($query)) {
            // print_r($data);
          ?>
            <tr style="color:#eddcfc">
              <td><?= $num++; ?></td>
              <td><?= $data["nama"]; ?></td>
              <td><?= $data["judul"]; ?></td>
              <td style="width: 250px;">
                <img class="w-100" src="./assets/upload/<?= $data["cover"]; ?>" alt="">
              </td>
              <td><?= $data["ulasan"]; ?></td>
              <td><?= $data["rating"]; ?></td>
              <td>
                <a onclick="return confirm('Apakah anda yakin menghapus kategori ini?');" href="?page=ulasan_hapus&&id=<?= $data['id_ulasan']; ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php }; ?>
        </table>
      </div>
    </div>
  </div>
</div>
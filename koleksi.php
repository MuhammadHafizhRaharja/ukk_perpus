<h1 class="mt-4 text-center" style="color:#eddcfc">Koleksi Buku</h1>
<div class="card" style="background-color:#321247">
  <div class="card-body">
    <div class="row">
      <div class="col_md_12">
        <table class="table table-bordered mt-3" id="dataTable" width="100%" cellspacing="0">
          <tr style="color:#eddcfc">
            <th>No</th>
            <th>Nama Buku</th>
            <th>Buku</th>
            <th>Aksi</th>
          </tr>
          <?php
          // Check if the "id" parameter is set in the URL
          $id = isset($_GET["id"]) ? $_GET["id"] : null;

          if ($id) {
            $i = 1;
            $query = mysqli_query($koneksi, "SELECT buku.*, koleksi.* FROM buku INNER JOIN koleksi ON koleksi.id_buku = buku.id_buku WHERE koleksi.id_user = $id");
            while ($data = mysqli_fetch_array($query)) {
          ?>
              <tr style="color:#eddcfc">
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['judul']; ?></td>
                <td style="width: 250px;">
                  <img class="w-100" src="./assets/upload/<?= $data["cover"]; ?>" alt="">
                </td>
                <td>
                  <a href="?page=detail&&id=<?php echo $data['id_buku']; ?>" class="btn btn-info">Detail</a>
                  <a onclick="return confirm('apakah anda yakin menghapus data ini??')" href="?page=koleksi_hapus&&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
          <?php
            }
          }
          ?>
        </table>
      </div>
    </div>
  </div>
</div>
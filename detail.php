<h1 class="mt-4" style="color:#eddcfc">Tentang Buku</h1>
<?php
// include 'koneksi.php';
$id = $_GET['id'];
$query=mysqli_query($koneksi,"SELECT * FROM buku WHERE id_buku='$id'");
$buku=mysqli_fetch_array($query);
$data = [
    'buku' => [
        'id_buku' => $buku['id_buku'],
        'judul' => $buku['judul'],
        'penulis' => $buku['penulis'],
        'penerbit' => $buku['penerbit'],
        'tahun_terbit' => $buku['tahun_terbit'],
        'deskripsi' => $buku['deskripsi'],
        'cover' => $buku['cover'],
    ]
    ];
// Ambil data ulasan dari database
$queryUlasan = mysqli_query($koneksi, "SELECT ulasan.*, user.username
FROM ulasan
JOIN user ON ulasan.id_user = user.id_user WHERE id_buku='$id'");
$ulasan = [];
while ($row = mysqli_fetch_assoc($queryUlasan)) {
    $ulasan[] = $row;
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline" style="background-color:#321247">
                <div class="card-body box-profile" style="color:#eddcfc">
                    <h3 class="profile-username text-center"><?= $data['buku']['judul']; ?></h3>
                    <tr>
                        <td style="width: 250px;">
                            <img class="w-100" src="./assets/upload/<?= $data['buku']["cover"]; ?>" alt="cover">
                        </td>
                    </tr>
                    <a href="?page=ulasan_tambah&id=<?= $data["buku"]["id_buku"] ?>" class="btn btn-success btn-block mt-2">
                        <b>Berikan Ulasan </b>
                    </a>
                    <a href="?page=peminjaman_tambah&id=<?= $data["buku"]["id_buku"] ?>" class="btn btn-danger btn-block mt-2">
                        <b>Pinjam</b>
                    </a>
                    <a href="?page=koleksi_tambah&id=<?= $data["buku"]["id_buku"] ?>" class="btn btn-danger btn-block mt-2">
                        <b>Koleksi</b>
                    </a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div><!-- /.col -->

        <div class="col-md-9">
            <div class="card card-primary card-outline" style="background-color:#321247">
                <div class="card-header">
                    <h4 style="color:#eddcfc">Informasi Buku</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" style="color:#eddcfc">
                        <tr>
                            <td style="width: 150px; color:#eddcfc">Penulis</td>
                            <td style="color:#eddcfc"><?= $data['buku']['penulis']; ?></td>
                        </tr>
                        <tr>
                            <td>Penerbit</td>
                            <td><?= $data['buku']['penerbit']; ?></td>
                        </tr>
                        <tr>
                            <td style="color:#eddcfc">Tahun Terbit</td>
                            <td style="color:#eddcfc"><?= $data['buku']['tahun_terbit']; ?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?= $data['buku']['deskripsi']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="card card-primary card-outline" style="background-color:#321247">
                <div class="card-header ">
                    <h4 style="color:#eddcfc">Ulasan</h4>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped" style="color:#eddcfc">
                        <thead>
                            <tr>
                                <th>Ulasan</th>
                                <th>Rating</th>
                                <th>Pemberi Ulasan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ulasan as $row): ?>
                                <tr>
                                    <td style="color:#eddcfc"><?= $row['ulasan']; ?></td>
                                    <td style="color:#eddcfc"><?= $row['rating']; ?></td>
                                    <td style="color:#eddcfc"><?= $row['username']; ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->

<?php
// Periksa apakah id buku tersedia di parameter GET
if (isset($_GET["id"])) {
    $id = $_GET["id"];
} else {
    echo "ID parameter is not set.";
    exit;
}
?>
<h1 class="mt-4" style="color:#eddcfc">Tambah Koleksi Buku</h1>
<div class="card" style="background-color:#321247">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    if (isset($_POST['submit'])) {
                        $id_user = $_SESSION['user']['id_user'];

                        if (isset($id)) {

                            $query = mysqli_query($koneksi, "INSERT INTO koleksi(id_user, id_buku) VALUES ('$id_user','$id')");

                            if ($query) {
                                echo '<script>alert("Tambah Data Berhasil.");</script>';
                            } else {
                                echo '<script>alert("Tambah Data Gagal.");</script>';
                            }
                        } else {
                            echo "ID buku tidak didefinisikan.";
                        }
                    }
                    ?>
                    <div class="row mb-3">
                        <div class="col-md-1" style="color:#eddcfc">Buku :</div>
                        <div class="col-md-8">
                            <?php

                            $queryBuku = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = $id");
                            $resultBuku = mysqli_fetch_array($queryBuku);

                            if ($resultBuku) {
                                echo '<input class="text-light" type="text" value="' . $resultBuku["judul"] . '" disabled>';
                            } else {
                                echo "Buku tidak ditemukan.";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-10" style="color:#eddcfc">Mau ditambah ke koleksi?</div>
                        <div class="col-md-8">
                            <button name="submit" class="btn btn-primary">Tambah</button>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-1">
                                <a href="?page=daftar_buku&id=<?= $_SESSION["user"]["id_user"]; ?>" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
// Periksa apakah 'id' diset di URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];
} else {
    echo "ID parameter is not set.";
    exit;
}

require_once "koneksi.php"; // Hubungkan ke file koneksi

$id_buku = $id;

?>
<h1 class="mt-4" style="color:#eddcfc">Peminjaman buku</h1>
<div class="card" style="background-color:#321247">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    <?php

                    if (isset($_POST["submit"])) {
                        $id_buku = $_GET["id"];
                        $id_user = $_SESSION['user']['id_user'];
                        $tanggalPeminjaman = $_POST["tanggal_peminjaman"];
                        $tanggalPengembalian = $_POST["tanggal_pengembalian"];
                        $statusPeminjaman = $_POST["status_peminjaman"];


                        $query = mysqli_query($koneksi, "INSERT INTO peminjaman (id_buku, id_user, tanggal_peminjaman, tanggal_pengembalian, status_peminjaman) VALUES ('$id_buku', '$id_user', '$tanggalPeminjaman', '$tanggalPengembalian', '$statusPeminjaman')");

                        // Check if the query was executed successfully
                        if ($query) {
                            // Redirect the user to the desired page after successful insertion
                            echo "<script>location.href = '?page=peminjaman'</script>";
                            exit;
                        } else {
                            // Handle database errors
                            echo "Error: " . mysqli_error($koneksi);
                        }
                    }
                    ?>
                    <div class="row mb-3">
                        <div class="col-md-1" style="color:#eddcfc">Buku :</div>
                        <div class="col-md-8">
                            <?php
                            $queryBuku = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = $id");
                            $resultBuku = mysqli_fetch_array($queryBuku);
                            ?>
                            <input class="text-light" type="text" value="<?= $resultBuku["judul"] ?>" disabled>
                        </div>
                    </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2" style="color:#eddcfc">Tanggal peminjaman</div>
                <div class="col-md-8">
                    <input id="tanggalPeminjaman" type="date" class="form-control" name="tanggal_peminjaman" autofocus required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2" style="color:#eddcfc">Tanggal Pengembalian Maksimal 7 hari</div>
                <div class="col-md-8">
                    <input id="tanggalPengembalian" type="date" class="form-control" name="tanggal_pengembalian" onchange="setMaximumDate()" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2" style="color:#eddcfc">Status peminjaman</div>
                <div class="col-md-8">
                    <select name="status_peminjaman" class="form-control" id="">
                        <option value="dipinjam">Dipinjam</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <button class="btn btn-primary" name="submit" value="submit">Simpan</button>
                    <button class="btn btn-secondary" name="reset">Reset</button>
                    <a href="?page=daftar_buku" class="btn btn-danger">Kembali</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<script>
    function setMaximumDate() {
        var today = new Date().toISOString().slice(0, 10);
        var tanggalPeminjaman = document.getElementById('tanggalPeminjaman').value;
        var tanggalPengembalian = document.getElementById('tanggalPengembalian');

        // Set the minimum date for "Tanggal Peminjaman" to today
        document.getElementById('tanggalPeminjaman').setAttribute('min', today);

        // Set the maximum date for "Tanggal Pengembalian" to 7 days from today
        var maxDate = new Date(today);
        maxDate.setDate(maxDate.getDate() + 7);
        var formattedMaxDate = maxDate.toISOString().slice(0, 10);
        tanggalPengembalian.setAttribute('max', formattedMaxDate);

        // If "Tanggal Pengembalian" is already set to a date earlier than today, reset it
        if (tanggalPeminjaman && tanggalPengembalian.value < today) {
            tanggalPengembalian.value = today;
        }
    }

    document.getElementById('bookSelect').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var coverPath = selectedOption.getAttribute('data-cover');
        document.getElementById('coverImage').src = './assets/upload/' + coverPath;
    });

    // Ensure that "Tanggal Peminjaman" is set to today or later initially
    document.getElementById('tanggalPeminjaman').setAttribute('min', today);
</script> 
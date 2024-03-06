<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password =  md5($_POST["password"]);
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : ''; 
    $no_telepon = $_POST['no_telepon'];
    $level = $_POST['level'];

    // Use prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($koneksi, "INSERT INTO user(username, password, email, nama, alamat, no_telepon, level) VALUES (?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sssssss", $username, $password, $email, $nama, $alamat, $no_telepon ,$level);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo '<script>alert("Tambah Data User Berhasil"); </script>';
    } else {
        echo '<script>alert("Tambah Data User Gagal"); </script>';
    }

    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (head section remains unchanged) ... -->
</head>
<body>
    <h1 class="mt-4" style="color:#eddcfc">User</h1>
    <div class="card" style="background-color:#321247">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                <form method="post">
                        <div class="row mb-3" style="color:#eddcfc">
                            <div class="col-md-2">Username</div>
                            <div class="col-md-8"><input type="text" class="form-control" name="username" autofocus required></div>
                        </div>
                        <div class="row mb-3" style="color:#eddcfc">
                            <div class="col-md-2">Password</div>
                            <div class="col-md-8"><input type="password" id="alamat" class="form-control" name="password" required></div>
                        </div>
                        <div class="row mb-3" style="color:#eddcfc">
                            <div class="col-md-2">Email</div>
                            <div class="col-md-8"><input type="text" class="form-control" name="email" autofocus ></div>
                        </div>
                        <div class="row mb-3" style="color:#eddcfc">
                            <div class="col-md-2">Nama Lengkap</div>
                            <div class="col-md-8"><input type="text" class="form-control" name="nama" autofocus ></div>
                        </div>
                        <div class="row mb-3" style="color:#eddcfc">
                            <div class="col-md-2">nomor telepon</div>
                            <div class="col-md-8"><input type="number" id="noTelepon" class="form-control" name="no_telepon" autofocus ></div>
                        </div>
                        <div class="row mb-3" style="color:#eddcfc">
                            <div class="col-md-2">Alamat</div>
                            <div class="col-md-8"><input type="text" class="form-control" name="alamat" autofocus ></div>
                        </div>
                        <div class="row mb-3" style="color:#eddcfc">
                        <input type="radio" value="petugas" name="level">
                          <p class="col-md-2">petugas</p>

                          <input type="radio" value="peminjam" name="level">
                          <p class="col-md-2">peminjaman</p>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <a href="?page=kategori" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ... (body section remains unchanged) ... -->
</body>
</html>

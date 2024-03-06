<?php
require_once "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id'");
?>
<script>
    alert('hapus data berhasil');
    location.href = "index.php?page=user";
</script>


<?php
require_once "koneksi.php";

$id = $_GET["id"];
$query = mysqli_query($koneksi, "DELETE FROM ulasan WHERE id_ulasan = '$id'");
echo "<script>location.href = '?page=kategori'</script>";

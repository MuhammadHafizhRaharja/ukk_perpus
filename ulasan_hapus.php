<?php
require_once "koneksi.php";

$id = $_GET["id"];
$query = mysqli_query($koneksi, "DELETE FROM ulasan WHERE id_ulasan = '$id'");
echo "<script>location.href = '?page=kategori'</script>";
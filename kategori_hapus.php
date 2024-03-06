<?php
require_once "koneksi.php";

$id = $_GET["id"];
$query = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori = '$id'");
echo "<script>location.href = '?page=kategori'</script>";

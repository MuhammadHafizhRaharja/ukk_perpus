<?php
require_once "koneksi.php";

$id = $_GET["id"];
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku = '$id'");
echo "<script>location.href = '?page=buku'</script>";

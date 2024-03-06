<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM koleksi WHERE id=$id");
?>
<script>
  alert('hapus data berhasil');
  location.href = "index.php?page=koleksi&id=<?= $_SESSION["user"]["id_user"]; ?>";
</script>
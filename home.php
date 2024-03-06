<!DOCTYPE html>
<html lang="en">

<body>
  <h1 class="mt-4" style="color:#eddcfc">Selamat Datang</h1>
  <ol class="breadcrumb mb-8">
    <li class="m-0" style="color:#eddcfc"><?= $_SESSION["user"]["nama"]; ?></li>
  </ol>

  <h1 class="mt-4 text-center" style="color:#eddcfc">Sedang Populer</h1>

  <div class="container-fluid d-flex justify-content-between mt-3">
    <div style="display: flex; justify-content: flex-end; align-items: right;">
      <a href="logout_user.php">
        <i class="bi bi-box-arrow-left" style="margin-right:10px; color:#eddcfc;"></i>
      </a>
    </div>
  </div>

  <div class="container">
    <div class="row" style="color:#eddcfc">
    <?php
// Assuming you have a valid database connection named $koneksi
$conn = $koneksi;

$query_books = mysqli_query($koneksi, "SELECT buku.*, kategori.kategori
    FROM buku
    JOIN kategori ON buku.id_kategori = kategori.id_kategori;");

$counter = 0; // Initialize a counter variable

while ($buku = mysqli_fetch_assoc($query_books)) :
    $id_buku = $buku['id_buku'];
    $query_avg_rating = "SELECT AVG(rating) AS avg_rating FROM ulasan WHERE id_buku = ?";
    $stmt_avg_rating = $conn->prepare($query_avg_rating);

    if ($stmt_avg_rating) {
        $stmt_avg_rating->bind_param("i", $id_buku);
        $stmt_avg_rating->execute();
        $result_avg_rating = $stmt_avg_rating->get_result();
        $row_avg_rating = $result_avg_rating->fetch_assoc();
        $avg_rating = $row_avg_rating['avg_rating'];
    } else {
        $avg_rating = null;
    }
    ?>
        <div class="col-lg-4 d-flex justify-content-center mb-4">
          <div class="card col-lg-8" style="background-color:#321247">
            <div class="card-img">
              <img class="w-100" src="./assets/upload/<?= $buku["cover"]; ?>" alt="">
            </div>
            <div class="card-body" style="background-color:#321247">
              <p class="mb-0 fs-4"><?php echo $buku['judul']; ?></p>
              <?php if (isset($buku['kategori'])) : ?>
                <p class="mb-0 text-secondary"><?php echo $buku['kategori']; ?></p>
              <?php endif; ?>
              <p class="mb-0 text-secondary"><?php echo $buku['penulis']; ?></p>
            </div>
            <div class="rating">
              <?php
              if ($avg_rating !== null) {
                $rating_out_of_5 = ($avg_rating / 5) * 5;
                echo "Rating: " . number_format($rating_out_of_5, 1) . "/5.0";
              } else {
                echo 'Belum ada Rating';
              }
              ?>
            </div>
            <div class="card-body">
              <a class="btn btn-primary" style="text-decoration:none" href="?page=detail&id=<?php echo $buku['id_buku']; ?>">Detail</a>
            </div>
          </div>
        </div>
      <?php
        $counter++;
        if ($counter >= 3) break; // Display only three books
      endwhile
      ?>
    </div>
  </div>

  <div class="card" style="background-color:#321247">
    <div class="card-body">
      <table class="table table-bordered" style="color:#eddcfc">
        <tr>
          <td width="200">Nama</td>
          <td width="1">:</td>
          <td><?= $_SESSION["user"]['nama']; ?></td>
        </tr>
        <tr>
          <td width="100">Login sebagai</td>
          <td width="1">:</td>
          <td><?= $_SESSION["user"]['level']; ?></td>
        </tr>
        <tr>
          <td width="100">Tanggal login</td>
          <td width="1">:</td>
          <td><?= date('d-m-Y'); ?></td>
        </tr>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

<?php
require_once 'koneksi.php';

if (!$_SESSION['user']) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mari Baca</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- ... (kode HTML yang sudah ada) ... -->
    <style>
        .navbar {
            background-color: #13021e;
            /* Gantilah #000 dengan kode warna hitam atau sesuai keinginan Anda */
        }

        .sb-sidenav {
            background-color: #13021e;
            /* Warna hitam untuk sidebar */
        }

        .sb-sidenav a.nav-link {
            color: #eddcfc !important;
            /* Warna teks putih untuk menu-link di sidebar */
        }
    </style>
</head>


<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand bg-Tan">
        <a class="navbar-brand ps-3" href="?" style="color:#eddcfc"> Mari Baca </a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="?" style="color:#eddcfc"><i class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading" style="color:#eddcfc">Jelajahi</div>
                        <a class="nav-link" href="?">
                            <div class="sb-nav-link-icon"><i class="fas fa-house" style="color:#eddcfc"></i></div>
                            Home
                        </a>

                        <?php
                        if ($_SESSION["user"]["level"] != "peminjam") {
                        ?>
                            <a class="nav-link" href="?page=kategori">
                                <div class="sb-nav-link-icon"><i class="fas fa-table" style="color:#eddcfc"></i></div>
                                Kategori
                            </a>
                            <a class="nav-link" href="?page=user">
                                <div class="sb-nav-link-icon"><i class="fas fa-user" style="color:#eddcfc"></i></div>
                                User
                            </a>
                            <a class="nav-link" href="?page=buku">
                                <div class="sb-nav-link-icon"><i class="fas fa-book" style="color:#eddcfc"></i></div>
                                Buku
                            </a>
                        <?php } else { ?>
                            <a class="nav-link" href="?page=daftar_buku">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open" style="color:#eddcfc"></i></div>
                                Daftar buku
                            </a>
                            <a class="nav-link" href="?page=peminjaman">
                                <div class="sb-nav-link-icon"><i class="fas fa-book" style="color:#eddcfc"></i></div>
                                Peminjaman
                            </a>
                            <a class="nav-link" href="?page=koleksi&id=<?= $_SESSION["user"]["id_user"]; ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-bookmark" style="color:#eddcfc"></i></div>
                                Koleksi
                            </a>
                        <?php } ?>
                        <a class="nav-link" href="?page=ulasan">
                            <div class="sb-nav-link-icon"><i class="fas fa-comment" style="color:#eddcfc"></i></div>
                            Ulasan
                        </a>
                        <?php
                        if ($_SESSION["user"]["level"] != "peminjam") {
                        ?>
                            <a class="nav-link" href="?page=laporan">
                                <div class="sb-nav-link-icon"><i class="fas fa-book" style="color:#eddcfc"></i></div>
                                Laporan peminjaman
                            </a>
                        <?php
                        }
                        ?>
                        <a class="nav-link" href="logout.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-power-off" style="color:#eddcfc"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer" style="background: #13021e">
                    <div class="small" style="color:#eddcfc">Login sebagai:</div>
                    <p class="m-0" style="color:#eddcfc"><?= $_SESSION["user"]["nama"]; ?></p>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content" style="background:#13021e">
            <main>
                <div class="container-fluid px-4">
                    <?php
                    $page = isset($_GET["page"]) ? $_GET["page"] : "home";

                    if (file_exists($page . ".php")) {
                        require_once $page . ".php";
                    } else {
                        require_once "404.php";
                    }
                    ?>
                </div>
            </main>
            <!-- <footer style="background-color:#13021e" class="py-4 mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-centerl">
                        <div style="color:#eddcfc">Copyright &copy;Mari Baca</div>
                    </div>
                </div>
            </footer> -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
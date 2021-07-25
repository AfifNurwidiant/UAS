<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Website</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <nav>
            <a class="saya" href="index.php"></a>
            <h2>Website</h2>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                <div class="btn btn-warning">HOME</div>
                            </a>
                            <a class="nav-link" href="hal2.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                <div class="btn btn-warning">ABOUT US</div>
                            </a>
                            <a class="nav-link" href="hal3.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                <div class="btn btn-warning">NEWS</div>
                            </a>
                            <a class="nav-link" href="logout.php">
                            <div class="btn btn-warning">Login</div>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="content">
                        <h1>TENTANG SAYA</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <p>Nama saya adalah Afif Nurwidianto, saya kuliah di Universitas Ahmad Dahlan</p><br>
                               <p> saya sekarang berada di Jawa Tengah , Pemalang.</p>
                               <p> Fakulatas saya di kuliah adalah Teknologi Industri </p>
                               <p> dan Prodi saya adalah Teknik Informatika.</p>
                                <p>TerimaKasih.</p>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

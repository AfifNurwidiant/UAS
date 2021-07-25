<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Website</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
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
                        <h1 class="saya">BERITA TERKINI</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                            <img src="yap.jpg">
                            <p>Hari ini 21 tahun lalu, tepatnya 25 Juli 2000, terjadi kecelakaan pesawat Air France dengan nomor penerbangan 4590.
                              Pesawat ini merupakan penerbangan pesawat supersonik Concorde yang jatuh di Gonesse, pinggiran Kota Paris.
                              Mengutip Britannica, pesawat itu terbakar tidak lama setelah lepas landas, menewaskan 109 orang di dalamnya, dan 4 orang lainnya di darat.
                              Kecelakaan pesawat itu menjadi kecelakaan fatal pertama Concorde sepanjang 24 tahun melayani penumpang reguler.
                              Peristiwa itu diyakini telah mempercepat berakhirnya semua operasi Concorde pada tahun 2003.</p>
                            </div>
                        </div>
                    </div>
                </main>
                <br>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Afif Nurwidianto Website 2021</div>
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
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

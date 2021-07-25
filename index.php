<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>website saya </title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <nav>
            <a class="navbar-brand ps-3" href="index.php"></a>
            <h2>Website</h2>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
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
                        <h1>DESKRIPSI</h1>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                            <img src="afif.jpg"><P>Website adalah kumpulan halaman web yang dapat diakses publik dan saling terkait yang berbagi satu nama domain. Website dapat dibuat dan dikelola oleh individu, grup, bisnis, atau organisasi untuk melayani berbagai tujuan.
                            Bersama-sama, semua website yang dapat diakses publik membentuk World Wide Web.
                            Meskipun terkadang disebut "halaman web", definisi ini salah, karena website terdiri dari beberapa halaman web.
                            Website memiliki variasi yang hampir tidak ada habisnya, termasuk situs pendidikan, situs berita, forum, situs media sosial, situs e-commerce, dan sebagainya. Halaman-halaman dalam sebuah website biasanya merupakan campuran teks dan media lainnya. Meskipun demikian, tidak ada aturan yang mengatur bentuk website.</P>
                            </div>
                        </div>
                    </div>
                </main>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       
    </body>

</html>

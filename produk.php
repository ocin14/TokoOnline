<?php
include "koneksi.php";
$qry_produk = mysqli_query($conn, "select * from produk ");
while ($data_produk = mysqli_fetch_array($qry_produk)) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gadgetshop</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="style1.css" rel="stylesheet">
    </head>

    <body>

        <!-- Navigation-->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">GadgetShop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="headerf.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="shopping-cart.html">Keranjang</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Transaksi</a></li>


                    </ul>

                </div>
            </div>
        </nav>
        <!-- Product section-->
        <div>

            <section class="py-5">
                <div class="container px-4 px-lg-5 my-5">
                    <form action="masukkankeranjang.php?id_produk=<?= $data_produk['id_produk'] ?>" method="post">
                        <div class="row gx-4 gx-lg-5 align-items-center">
                            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?= $data_produk['foto_produk'] ?>" /></div>
                            <div class="col-md-6">
                                <div class="small mb-1">Silahkan pilih smartphone anda</div>
                                <h1 class="display-5 fw-bolder"><?=$data_produk['nama_produk'] ?></h1>
                                <div class="fs-5 mb-5">
                                    <?= $data_produk['harga'] ?>
                                </div>
                                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                                <input type="number" name="beli" value="1">
                                <div class="d-flex">

                                    <button class="btn btn-outline-dark mt-auto" type="submit">Buy Now</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </section>
            <!-- Related items section-->
            <section class="py-5 bg-light">

                <div class="container px-4 px-lg-5 mt-5">

                    <h2 class="fw-bolder mb-4">Related products</h2>
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="asset/s23.png" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <?php $qry_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = 8");
                                    while ($data_produk = mysqli_fetch_array($qry_produk)) {
                                    ?>
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder"><?= $data_produk['nama_produk'] ?></h5>
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                            </div>
                                            <!-- Product price-->
                                            <?= $data_produk['harga'] ?>

                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="keranjang.php?id_produk=8">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="asset/z-fold5.png" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <?php $qry_produk = mysqli_query($conn, "SELECT * FROM `produk` WHERE `nama_produk` = 'Galaxy Z Fold5'");
                                    while ($data_produk = mysqli_fetch_array($qry_produk)) {
                                    ?>
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder"><?= $data_produk['nama_produk'] ?></h5>
                                            <!-- Product reviews-->
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                            </div>
                                            <!-- Product price-->
                                            <?= $data_produk['harga'] ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="shopping-cart.html?id_produk=9">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="asset/z-flip5.png" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <?php $qry_produk = mysqli_query($conn, "SELECT * FROM `produk` WHERE `nama_produk` = 'Galaxy Z Flip5'");
                                    while ($data_produk = mysqli_fetch_array($qry_produk)) {
                                    ?>
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder"><?= $data_produk['nama_produk'] ?></h5>
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                            </div>
                                            <!-- Product price-->
                                            <span class="text-muted text-decoration-line-through">Rp 20.000.000</span>
                                            <?= $data_produk['harga'] ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="keranjang.php?id_produk=10">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="asset/uk-galaxy-a54-5g-sm-a546-sm-a546blgdeub-535771507.png" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <?php $qry_produk = mysqli_query($conn, "SELECT * FROM `produk` WHERE `nama_produk` = 'Galaxy A54 5G'");
                                    while ($data_produk = mysqli_fetch_array($qry_produk)) {
                                    ?>
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder"><?= $data_produk['nama_produk'] ?></h5>
                                            <!-- Product reviews-->
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star"></div>
                                            </div>
                                            <!-- Product price-->
                                            <span class="text-muted text-decoration-line-through">Rp 6.500.000</span>
                                            <?= $data_produk['harga'] ?>
                                            <?= $data_produk['deskripsi'] ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="keranjang.php?id_produk=11">Buy Now</a></div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </section>

        </div>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

    </body>

    </html>
<?php
}
?>
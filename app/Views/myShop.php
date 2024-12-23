<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-warning fixed-top">
        <div class="container">
            <h3 class="mt-2"><i class="fa-solid fa-cart-plus text-success me-2"></i></h3>
            <a class="navbar-brand font-weight-bold" href="#">My Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Reseller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Hubungi Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Bantuan</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="icon mt-2">
                    <h5><i class="fa-solid fa-cart-plus ms-2 me-2" data-bs-toggle="tooltip"
                            title="Keranjang Belanja"></i>
                        <i class="fa-solid fa-envelope me-2" data-bs-toggle="tooltip" title="Surat Masuk"></i>
                        <i class="fa-regular fa-bell me-2" data-bs-toggle="tooltip" title="Notifikasi"></i>
                    </h5>
                </div>
            </div>
        </div>
    </nav>

    <section id="toko">
        <div class="container-fluid">
            <div class="row no-gutters" style="margin-top: 48px;">
                <div class="col-md-2 bg-leight">
                    <ul class="list-group p-2 pt-4 list-group-flush">
                        <li class="list-group-item bg-warning"><i class="fas fa-list"></i> KATEGORI PRODUK</li>
                        <li class="list-group-item"><i class="fas fa-angle-right"></i> Peralatan Elektoronik</li>
                        <li class="list-group-item"><i class="fas fa-angle-right"></i> Aksesoris Elektornik</li>
                        <li class="list-group-item"><i class="fas fa-angle-right"></i> Fashion Pria</li>
                        <li class="list-group-item"><i class="fas fa-angle-right"></i> Fashion Wanita</li>
                        <li class="list-group-item"><i class="fas fa-angle-right"></i> Fashion Anak</li>
                        <li class="list-group-item"><i class="fas fa-angle-right"></i> Otomotif</li>
                        <li class="list-group-item"><i class="fas fa-angle-right"></i> Hobi dan Olahraga</li>
                    </ul>
                </div>
                <div class="col-md-10">

                    <div class="row">
                        <div class="col">
                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner pt-3">
                                    <div class="carousel-item active">
                                        <img src="slide/slide1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="slide/slide2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="slide/slide3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <h4 class="text-center font-weight-bold m-4">PRODUK TERBARU</h4>
                        </div>
                    </div>


                    <div class="row mx-auto">
                        <div class="col-md-3">
                            <div class="card mb-2 ">
                                <img src="produk/headphone.jpg" class="card-img-top" alt="...">
                                <div class="card-body bg-light">
                                    <h5 class="card-title">Headphone</h5>
                                    <p class="card-text"> Bluetooth Free Ongkir.</p>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star-half-alt text-success"></i>
                                    <i class="far fa-star text-success"></i><br>
                                    <a href="#" class="btn btn-primary" data-bs-target="#produk1"
                                        data-bs-toggle="modal">Detail</a>
                                    <a href="#" class="btn btn-danger">Rp. 500,000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-2">
                                <img src="produk/jacket.jpg" class="card-img-top" alt="...">
                                <div class="card-body bg-light">
                                    <h5 class="card-title">Headphone</h5>
                                    <p class="card-text"> Bluetooth Free Ongkir.</p>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star-half-alt text-success"></i>
                                    <i class="far fa-star text-success"></i><br>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                    <a href="#" class="btn btn-danger">Rp. 500,000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-2">
                                <img src="produk/kamera.jpg" class="card-img-top" alt="...">
                                <div class="card-body bg-light">
                                    <h5 class="card-title">Headphone</h5>
                                    <p class="card-text"> Bluetooth Free Ongkir.</p>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star-half-alt text-success"></i>
                                    <i class="far fa-star text-success"></i><br>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                    <a href="#" class="btn btn-danger">Rp. 500,000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-2">
                                <img src="produk/laptop.jpg" class="card-img-top" alt="...">
                                <div class="card-body bg-light">
                                    <h5 class="card-title">Headphone</h5>
                                    <p class="card-text"> Bluetooth Free Ongkir.</p>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star-half-alt text-success"></i>
                                    <i class="far fa-star text-success"></i><br>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                    <a href="#" class="btn btn-danger">Rp. 500,000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-2">
                                <img src="produk/sdcard.jpg" class="card-img-top" alt="...">
                                <div class="card-body bg-light">
                                    <h5 class="card-title">Headphone</h5>
                                    <p class="card-text"> Bluetooth Free Ongkir.</p>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star-half-alt text-success"></i>
                                    <i class="far fa-star text-success"></i><br>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                    <a href="#" class="btn btn-danger">Rp. 500,000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-2">
                                <img src="produk/speaker.jpg" class="card-img-top" alt="...">
                                <div class="card-body bg-light">
                                    <h5 class="card-title">Headphone</h5>
                                    <p class="card-text"> Bluetooth Free Ongkir.</p>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star-half-alt text-success"></i>
                                    <i class="far fa-star text-success"></i><br>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                    <a href="#" class="btn btn-danger">Rp. 500,000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-2">
                                <img src="produk/ssd.jpg" class="card-img-top" alt="...">
                                <div class="card-body bg-light">
                                    <h5 class="card-title">Headphone</h5>
                                    <p class="card-text"> Bluetooth Free Ongkir.</p>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star-half-alt text-success"></i>
                                    <i class="far fa-star text-success"></i><br>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                    <a href="#" class="btn btn-danger">Rp. 500,000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-2">
                                <img src="produk/usb.jpg" class="card-img-top" alt="...">
                                <div class="card-body bg-light">
                                    <h5 class="card-title">Headphone</h5>
                                    <p class="card-text"> Bluetooth Free Ongkir.</p>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star-half-alt text-success"></i>
                                    <i class="far fa-star text-success"></i><br>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                    <a href="#" class="btn btn-danger">Rp. 500,000</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Produk</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="img-fluid" src="produk/headphone.jpg" alt="">
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table table-borderless">
                                                <tr>
                                                    <th>Nama Produk</th>
                                                    <td>HeadPhone</td>
                                                </tr>
                                                <tr>
                                                    <th>Type Produk</th>
                                                    <td>ABCD1234</td>
                                                </tr>
                                                <tr>
                                                    <th>Rating Produk</th>
                                                    <td><i class="fas fa-star text-success"></i>
                                                        <i class="fas fa-star text-success"></i>
                                                        <i class="fas fa-star text-success"></i>
                                                        <i class="fas fa-star-half-alt text-success"></i>
                                                        <i class="far fa-star text-success"></i><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Tersedia</th>
                                                    <td>150 Pcs</td>
                                                </tr>
                                                <tr>
                                                    <th>Harga</th>
                                                    <td>Rp. 500,00</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger"
                                        data-bs-dismiss="modal">Kembali</button>
                                    <button type="button" class="btn btn-primary">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- akhir modal -->
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white p-5">
        <div class="row">
            <div class="col-md-3">
                <h5>LAYANAN PELANGGAN</h5>
                <ul>
                    <li>Pusat Pembelian</li>
                    <li>Cara Pembelian</li>
                    <li>Pengiriman</li>
                    <li>Cara Pengembalian</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>TENTANG KAMI</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error cumque veniam eaque provident sunt,
                    nam unde, odio doloribus amet reprehenderit rem eos. Ipsum eius ullam qui culpa molestiae!
                    Perferendis, suscipit.</p>
            </div>
            <div class="col-md-3">
                <h5>MITRA KERJA SAMA</h5>
                <ul>
                    <li>Pusat Pembelian</li>
                    <li>Cara Pembelian</li>
                    <li>Pengiriman</li>
                    <li>Cara Pengembalian</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>HUBUNGI KAMI</h5>
                <ul>
                    <li>Pusat Pembelian</li>
                    <li>Cara Pembelian</li>
                    <li>Pengiriman</li>
                    <li>Cara Pengembalian</li>
                </ul>
            </div>
        </div>
    </footer>

    <section id="copyright">
        <div class="copyright text-center text-white font-weight-bold bg-warning p-2">
            <p>Develop By THoriq Nst Copyright <i class="far fa-copyright"></i> 2024</p>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="script.js"></script> -->
</body>

</html>
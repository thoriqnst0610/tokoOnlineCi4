<section id="toko">
    <div class="container-fluid">
        <div class="row no-gutters" style="margin-top: 48px;">
            <div class="col-md-2 bg-leight">
                <ul class="list-group p-2 pt-4 list-group-flush">
                    <?php
                    foreach ($dataKategori as $kategori) {
                    ?>
                        <li class="list-group-item bg-warning"><i class="fas fa-list"></i> <a class="text-decoration-none text-black" href="/homeKategori?kategori=<?= $kategori['namaKategori'] ?>"><?= $kategori['namaKategori'] ?></a></li>
                    <?php } ?>
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

                <!-- Modal -->
                <div class="modal fade" id="produkKonten" tabindex="-1" aria-labelledby="exampleModalLabel"
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

                                <h5 id="halo"></h5>
                                    <div class="col-md-6">
                                        <img class="img-fluid" id="gambarProdukKonten" alt="Gambar Produk">
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table table-borderless">
                                            <tr>
                                                <th>Nama Produk</th>
                                                <td id="namaProdukKonten"></td>
                                            </tr>
                                            <tr>
                                                <th>Type Produk</th>
                                                <td id="jenisProdukKonten"></td>
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
                                                <td id="tersediaProdukKonten"></td>
                                            </tr>
                                            <tr>
                                                <th>Harga</th>
                                                <td id="hargaProdukKonten"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger"
                                    data-bs-dismiss="modal">Kembali</button>
                                <a href="" id="beliProdukKonten" type="button" class="btn btn-primary">Beli</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- akhir modal -->


                <div class="row mx-auto">
                    <?php
                    function formatRupiah($angka) {
                        // Format angka menjadi format mata uang Rupiah
                        return "Rp " . number_format($angka, 0, ',', '.');
                    }
                    foreach ($dataProduk as $produk) {
                    ?>
                        <div class="col-md-3">
                            <div class="card mb-2 ">
                                <img src="<?= base_url('uploads/' . $produk['gambarProduk']); ?>" class="card-img-top" alt="...">
                                <div class="card-body bg-light">
                                    <h5 class="card-title"><?= $produk['namaProduk'] ?></h5>
                                    <p class="card-text"><?= $produk['jenisProduk'] ?></p>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star text-success"></i>
                                    <i class="fas fa-star-half-alt text-success"></i>
                                    <i class="far fa-star text-success"></i><br>
                                    <button class="btn btn-primary" data-bs-target="#produkKonten"
                                        data-bs-toggle="modal" onclick="kontentProduk('<?= htmlspecialchars($produk['idProduk'], ENT_QUOTES, 'UTF-8') ?>')">Detail</button>
                                        <a href="https://wa.me/085261762764?text=Halo,%20saya%20ingin%20membeli%20<?= $produk['namaProduk'] ?>%20dengan%20harga%20<?= formatRupiah($produk['hargaProduk']) ?>" target="_blank" class="btn btn-danger"><?= formatRupiah($produk['hargaProduk']) ?></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Produk</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>


    <!-- modal menambah Kategori Produk -->
    <div class="modal fade" id="tambahProduk" tabindex="-1" aria-labelledby="tambahModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModalLabel">Menambah Data Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/produks" method="post" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="namaProduk">Nama Produk</label>
                                    <input type="text" class="form-control" id="namaProduk"
                                        aria-describedby="textHelp" name="namaProduk">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tersedia">tersedia</label>
                                    <input type="text" class="form-control" id="tersedia"
                                        aria-describedby="textHelp" name="tersedia">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenisProduk">jenisProduk</label>
                                    <input type="text" class="form-control" id="jenisProduk"
                                        name="jenisProduk">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hargaProduk">Harga</label>
                                    <input type="text" class="form-control" id="hargaProduk"
                                        name="hargaProduk">
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="gambarProduk">Gambar Produk</label>
                                    <input type="file" class="form-control" id="gambarProduk"
                                        name="gambarProduk">
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">SImpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Akhir  Menambah Kategori Produk -->


    <!-- modal mengedit Kategori Produk -->
    <div class="modal fade" id="editProduk" tabindex="-1" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Menambah Data Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/updateProduks" method="post" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="namaProdukEdit">Nama Produk</label>
                                    <input type="hidden" id="idProdukEdit" name="idProdukEdit">
                                    <input type="text" class="form-control" id="namaProdukEdit"
                                        aria-describedby="textHelp" name="namaProdukEdit">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tersediaEdit">Kategori Produk</label>
                                    <input type="text" class="form-control" id="tersediaEdit"
                                        aria-describedby="textHelp" name="tersediaEdit">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenisProdukEdit">jenis Produk</label>
                                    <input type="text" class="form-control" id="jenisProdukEdit"
                                        name="jenisProdukEdit">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hargaProdukEdit">Harga</label>
                                    <input type="text" class="form-control" id="hargaProdukEdit"
                                        name="hargaProdukEdit">
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="gambarProdukEdit">Gambar Produk</label>
                                    <input type="file" class="form-control" id="gambarProdukEdit"
                                        name="gambarProdukEdit">
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">SImpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Mengedit Kategori Produk -->

    <!-- modal meghapus -->
    <div class="modal fade" id="hapusProduk" tabindex="-1" role="dialog"
        aria-labelledby="hapustersediaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapustersediaLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus?
                </div>
                <div class="modal-footer">
                    <form action="/hapusProduks" method="post">
                        <input type="hidden" name="idProdukHapus" id="idProdukHapus">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" id="confirmDeleteProduk" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal akhir menghapus -->

    <!-- DataTales edit -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#tambahProduk">
                Tambah Data
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kategori Produk</th>
                            <th>Tersedia</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kategori</th>
                            <th>tersedia</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach($data as $produk){
                        ?>
                        <tr>
                            <td><?= $produk['namaProduk'] ?></td>
                            <td><?= $produk['jenisProduk'] ?></td>
                            <td><?= $produk['tersedia'] ?></td>
                            <td><?= $produk['hargaProduk'] ?></td>
                            <td><img src="<?= base_url('uploads/'. $produk['gambarProduk']); ?>" class="img-fluid img-thumbnail" style="max-width: 15%" alt="gambarProduk"></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#editProduk" onclick="editProduk('<?= htmlspecialchars($produk['idProduk'], ENT_QUOTES, 'UTF-8') ?>')">Edit
                                </button>
                                <button type="button" id="menghapusProduk"
                                    class="btn btn-danger" data-toggle="modal"
                                    data-target="#hapusProduk" onclick="hapusProduk('<?= htmlspecialchars($produk['idProduk'], ENT_QUOTES, 'UTF-8') ?>')">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

</div>
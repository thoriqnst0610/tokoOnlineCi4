<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kategori Produk</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- modal menambah Kategori Produk -->
                    <!-- Modal -->
                    <div class="modal fade" id="tambahKategoriProduk" tabindex="-1" aria-labelledby="tambahModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahModalLabel">Menambah Data Kategori Produk</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/kategoriProduk" method="post">
                                        <div class="form-group">
                                            <label for="namaKategori">Nama Kategori</label>
                                            <input type="text" class="form-control" id="namaKategori"
                                                aria-describedby="textHelp" name="namaKategori">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenisKategori">Jenis Kategori</label>
                                            <input type="text" class="form-control" id="jenisKategori"
                                                aria-describedby="textHelp" name="jenisKategori">
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsiKategori">Deskripsi</label>
                                            <input type="text" class="form-control" id="deskripsiKategori"
                                                name="deskripsiKategori">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- akhir Menambah Kategori Produk -->


                    <!-- modal mengedit Kategori Produk -->
                    <div class="modal fade" id="editKategoriProduk" tabindex="-1" aria-labelledby="editModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Mengedit Data Kategori Produk</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/editKategoriProduk" method="post">
                                        <div class="form-group">
                                            <label for="namaKategoriEdit">Nama Kategori</label>
                                            <input type="hidden" name="idKategoriEdit" id="idKategoriEdit">
                                            <input type="text" class="form-control" id="namaKategoriEdit"
                                                aria-describedby="textHelp" name="namaKategoriEdit">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenisKategoriEdit">Jenis Kategori</label>
                                            <input type="text" class="form-control" id="jenisKategoriEdit"
                                                aria-describedby="textHelp" name="jenisKategoriEdit">
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsiKategoriEdit">Deskripsi</label>
                                            <input type="text" class="form-control" id="deskripsiKategoriEdit"
                                                name="deskripsiKategoriEdit">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- akhir Mengedit Kategori Produk -->

                    <!-- modal meghapus -->
                    <div class="modal fade" id="hapusKategoriProduk" tabindex="-1" role="dialog"
                        aria-labelledby="hapusKategoriProdukLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="hapusKategoriProdukLabel">Konfirmasi Hapus</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus ?
                                    <form action="/hapusKategoriProdukId" method="post">
                                        <input type="hidden" id="idKategoriHapus" name="idKategoriHapus"> 
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" id="confirmDelete" class="btn btn-danger">Hapus</button>
                                </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal akhir menghapus -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#tambahKategoriProduk">
                                Tambah Data
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jenis Kategori</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jenis Kategori</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        foreach($data as $kategori){
                                        ?>
                                        <tr>
                                            <td><?= $kategori['namaKategori'] ?></td>
                                            <td><?= $kategori['jenisKategori'] ?></td>
                                            <td><?= $kategori['deskripsiKategori'] ?></td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#editKategoriProduk" onclick="editKategoriProduk('<?= htmlspecialchars($kategori['idKategori'], ENT_QUOTES, 'UTF-8') ?>')">Edit
                                                </button>
                                                <button type="button"
                                                    class="btn btn-danger" data-toggle="modal"
                                                    data-target="#hapusKategoriProduk" onclick="hapusKategoriProduk('<?= htmlspecialchars($kategori['idKategori'], ENT_QUOTES, 'UTF-8') ?>')">
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
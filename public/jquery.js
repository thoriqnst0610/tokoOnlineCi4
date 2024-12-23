function editKategoriProduk(idKategori) {
    function ambilKategori(idKategori)
    {
        $.ajax({

            url: '/ambilKategoriProdukId/' + idKategori,
            type: 'GET',
            dataType: 'json',
            success: function(data){

                $('#idKategoriEdit').val(data.idKategori);
                $('#namaKategoriEdit').val(data.namaKategori);
                $('#jenisKategoriEdit').val(data.jenisKategori);
                $('#deskripsiKategoriEdit').val(data.deskripsiKategori);

            },
            error: function(xhr, status, error){
                console.error('terjadi kesalahan saat mengambil data', error);
            }

        });
    };

    ambilKategori(idKategori);

}

function hapusKategoriProduk(idKategori){

   $('#idKategoriHapus').val(idKategori);

}

// produk
function editProduk(idProduk) {
    function ambilProduk(idProduk)
    {
        $.ajax({

            url: '/ambilProdukId/' + idProduk,
            type: 'GET',
            dataType: 'json',
            success: function(data){

                $('#idProdukEdit').val(data.idProduk);
                $('#namaProdukEdit').val(data.namaProduk);
                $('#tersediaEdit').val(data.tersedia);
                $('#jenisProdukEdit').val(data.jenisProduk);
                $('#hargaProdukEdit').val(data.hargaProduk);

            },
            error: function(xhr, status, error){
                console.error('terjadi kesalahan saat mengambil data', error);
            }

        });
    };

    ambilProduk(idProduk);

}

function hapusProduk(idProduk){

    $('#idProdukHapus').val(idProduk);
 
 }

 function formatRupiah(angka) {
    // Pastikan angka adalah tipe data yang benar
    var formatRupiah = new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
        minimumFractionDigits: 0 // Tidak ada angka desimal
    });
    return formatRupiah.format(angka);
}

 //modal Beli Konten
 function kontentProduk(idProduk){

    function ambilProduk(idProduk)
    {
        $.ajax({

            url: '/ambilProdukIdLagi/' + idProduk,
            type: 'GET',
            dataType: 'json',
            success: function(data){

                $('#gambarProdukKonten').attr('src', 'uploads/' + data.gambarProduk);
                $('#namaProdukKonten').text(data.namaProduk);
                $('#jenisProdukKonten').text(data.jenisProduk);
                $('#tersediaProdukKonten').text(data.tersedia);
                $('#hargaProdukKonten').text(data.hargaProduk);
                $('#beliProdukKonten').attr('href', `https://wa.me/085261762764?text=Halo,%20saya%20ingin%20membeli%20${data.namaProduk}%20dengan%20harga%20${formatRupiah(data.hargaProduk)}`)

            },
            error: function(xhr, status, error){
                console.error('terjadi kesalahan saat mengambil data produk', error);
            }

        });
    };

    ambilProduk(idProduk);

 }

 //modal beli kategoriProduk

 function beliProduk(idProduk){

    function ambilProduk(idProduk)
    {
        $.ajax({

            url: '/ambilProdukIdLagi/' + idProduk,
            type: 'GET',
            dataType: 'json',
            success: function(data){

                $('#gambarProdukBeli').attr('src', 'uploads/' + data.gambarProduk);
                $('#namaProdukBeli').text(data.namaProduk);
                $('#jenisProdukBeli').text(data.jenisProduk);
                $('#tersediaProdukBeli').text(data.tersedia);
                $('#hargaProdukBeli').text(data.hargaProduk);
                $('#beliProdukBeli').attr('href', `https://wa.me/085261762764?text=Halo,%20saya%20ingin%20membeli%20${data.namaProduk}%20dengan%20harga%20${formatRupiah(data.hargaProduk)}`)

            },
            error: function(xhr, status, error){
                console.error('terjadi kesalahan saat mengambil data produk', error);
            }

        });
    };

    ambilProduk(idProduk);

 }

 //modal beli daftar Produk

 function daftarProduk(idProduk){

    function ambilProduk(idProduk)
    {
        $.ajax({

            url: '/ambilProdukIdLagi/' + idProduk,
            type: 'GET',
            dataType: 'json',
            success: function(data){

                $('#gambarProdukDaftar').attr('src', 'uploads/' + data.gambarProduk);
                $('#namaProdukDaftar').text(data.namaProduk);
                $('#jenisProdukDaftar').text(data.jenisProduk);
                $('#tersediaProdukDaftar').text(data.tersedia);
                $('#hargaProdukDaftar').text(data.hargaProduk);
                $('#beliProdukDaftar').attr('href', `https://wa.me/085261762764?text=Halo,%20saya%20ingin%20membeli%20${data.namaProduk}%20dengan%20harga%20${formatRupiah(data.hargaProduk)}`)

            },
            error: function(xhr, status, error){
                console.error('terjadi kesalahan saat mengambil data produk', error);
            }

        });
    };

    ambilProduk(idProduk);

 }
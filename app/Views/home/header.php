<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .gantiWarna:hover {
            color: red;
            /* Ganti warna latar belakang */
            transform: scale(1.1);
            /* Perbesar sedikit tombol */
        }
    </style>
</head>

<body data-success-message="<?= session()->getFlashdata('success') ?>" data-error-message="<?= session()->getFlashdata('error') ?>">

    <nav class="navbar navbar-expand-lg bg-warning fixed-top">
        <div class="container">
            <h3 class="mt-2"><i class="fa-solid fa-cart-plus text-success me-2"></i></h3>
            <a class="navbar-brand font-weight-bold gantiWarna" href="/">My Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active gantiWarna" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active gantiWarna" aria-current="page" href="/daftarproduk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active gantiWarna" aria-current="page" href="/register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active gantiWarna" aria-current="page" href="/login">Login</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

            </div>
        </div>
    </nav>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Watch Store - Exclusive Watches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-image: url('https://via.placeholder.com/1500x800');
            background-size: cover;
            background-position: center;
            padding: 150px 0;
            color: white;
        }
        .feature-icon {
            font-size: 3rem;
            color: #000;
        }
        .product-img {
            width: 100%;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Watch Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#features">Fitur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#products">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Jam Tangan Eksklusif untuk Anda</h1>
        <p class="lead">Temukan koleksi jam tangan mewah dengan desain elegan dan kualitas terbaik.</p>
        <a href="#products" class="btn btn-primary btn-lg">Belanja Sekarang</a>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="feature-icon mb-3">
                    <i class="bi bi-watch"></i>
                </div>
                <h4>Desain Elegan</h4>
                <p>Jam tangan dengan tampilan modern dan elegan cocok untuk segala suasana.</p>
            </div>
            <div class="col-md-4">
                <div class="feature-icon mb-3">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h4>Kualitas Terjamin</h4>
                <p>Material premium dan mekanisme yang tahan lama memberikan kualitas terbaik.</p>
            </div>
            <div class="col-md-4">
                <div class="feature-icon mb-3">
                    <i class="bi bi-lightning-charge"></i>
                </div>
                <h4>Pengiriman Cepat</h4>
                <p>Proses pengiriman yang cepat dan aman sampai ke tangan Anda.</p>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section id="products" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Koleksi Jam Tangan</h2>
            <p>Pilihan jam tangan terbaik yang cocok untuk Anda.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/300x400" class="product-img card-img-top" alt="Product 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jam Tangan Klasik</h5>
                        <p class="card-text">Rp 1.200.000</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/300x400" class="product-img card-img-top" alt="Product 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jam Tangan Sporty</h5>
                        <p class="card-text">Rp 2.500.000</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/300x400" class="product-img card-img-top" alt="Product 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jam Tangan Modern</h5>
                        <p class="card-text">Rp 3.000.000</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container text-center">
        <h2>Hubungi Kami</h2>
        <p>Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi kami.</p>
        <a href="mailto:info@watchstore.com" class="btn btn-outline-dark">Email Kami</a>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Watch Store. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

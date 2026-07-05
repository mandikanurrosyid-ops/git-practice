<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$login = isset($_SESSION['login']);

?>  
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Foodie. - Makanan Enak, Harga Bersahabat</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="Css/style.css">
 
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
  <div class="container">

    <a class="brand navbar-brand" href="foodie.php">Foodie</a>

    <button class="navbar-toggler border-0"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">

      <ul class="navbar-nav mx-auto gap-lg-2">

        <li class="nav-item">
          <a class="nav-link" href="foodie.php">Beranda</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#menu">Menu</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#testimoni">Testimoni</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#tentang">Tentang Kami</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#kontak">Kontak</a>
        </li>

      </ul>

      <div class="d-flex gap-2">

        <?php if($login){ ?>

          <a href="logout.php"
            class="btn btn-danger rounded-pill px-4">

            Logout

          </a>

          <?php } else { ?>

          <a href="login.php"
            class="btn btn-outline-dark rounded-pill px-4">

            Login

          </a>

          <?php } ?>

       
      </div>

    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6 fade-up">
        <span class="hero-badge">✦ Nikmati Makanan Lezat</span>
        <h1>Makanan Enak,<br>Harga Bersahabat</h1>
        <p>Kami menyediakan berbagai makanan lezat dengan bahan pilihan dan rasa terbaik.</p>
        <a href="#menu" class="btn-primary-orange">Lihat Menu</a>
      </div>
      <div class="col-lg-6 text-center fade-up">
        <img
          src="Foto/Mkn.jpeg"
          alt="Burger Lezat"
          class="hero-img"
        />
      </div>
    </div>
  </div>
</section>

<!-- MENU -->
<section class="menu-section" id="menu">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="section-label">Menu Kami</div>
      <h2 class="section-title">Pilihan Makanan Terbaik</h2>
    </div>
    <div class="row g-4" id="menuGrid">
      <!-- Cards injected by JS -->
    </div>
   
  </div>
</section>

<!-- TENTANG -->
<section class="about-section" id="tentang">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-5 fade-up">
        <img
          src="Foto/Restoran.jpg"
          alt="Restoran Kami"
          class="about-img"
        />
      </div>
      <div class="col-lg-7 fade-up">
        <div class="section-label">Tentang Kami</div>
        <h2>Kualitas, Rasa,<br>Kepuasan Anda</h2>
        <p>Kami berkomitmen untuk menyajikan makanan berkualitas dengan rasa terbaik untuk pelanggan kami. Bahan segar, proses higienis, dan pelayanan ramah adalah prioritas kami.</p>
        <div class="row g-3">
          <div class="col-4 feature-box">
            <div class="feature-icon"><i class="bi bi-shield-plus"></i></div>
            <h6>Bahan Segar</h6>
            <p>Hanya bahan berkualitas setiap hari.</p>
          </div>
          <div class="col-4 feature-box">
            <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
            <h6>Dimasak Higienis</h6>
            <p>Proses memasak bersih dan terjaga.</p>
          </div>
          <div class="col-4 feature-box">
            <div class="feature-icon"><i class="bi bi-emoji-smile"></i></div>
            <h6>Pelayanan Ramah</h6>
            <p>Kepuasan Anda adalah kebahagiaan kami.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONI -->
<section class="py-5 bg-light" id="testimoni">

  <div class="container">

    <div class="text-center mb-5">
      <div class="section-label">Testimoni</div>
      <h2 class="section-title">Apa Kata Mereka?</h2>
    </div>

    <div class="row g-4">

      <div class="col-md-4">
        <div class="card-menu p-4 h-100">
          <h5>⭐⭐⭐⭐</h5>
          <p>"Makanannya enak dan harganya murah banget!"</p>
          <strong>- Andi</strong>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-menu p-4 h-100">
          <h5>⭐⭐⭐⭐⭐</h5>
          <p>"Pelayanannya cepat dan rasanya mantap."</p>
          <strong>- Budi</strong>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-menu p-4 h-100">
          <h5>⭐⭐⭐⭐⭐</h5>
          <p>"Tempat favorit buat makan bareng teman."</p>
          <strong>- Siti</strong>
        </div>
      </div>

    </div>

  </div>

</section>

<!-- FOOTER -->
<footer id="kontak">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4">
        <div class="brand mb-2">Foodie.</div>
        <p style="font-size:.87rem;max-width:240px;">Makanan enak setiap hari, untuk mood yang lebih baik.</p>
        <div class="mt-3">
          <a href="https://www.facebook.com/share/1Chth75Boq/" class="social-icon"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/who_is_diik/" class="social-icon"><i class="bi bi-instagram"></i></a>
          <a href="whatsapp://send?phone=6281930501523" target target="_blank" class="social-icon"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>
      <div class="col-6 col-lg-2">
        <h6>Menu</h6>
        <ul>
          <li><a href="#">Beranda</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#tentang">Tentang Kami</a></li>
          <li><a href="#kontak">Kontak</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-3">
        <h6>Kontak</h6>
        <ul>
          <li><a href="#"><i class="bi bi-geo-alt me-1"></i>Jl. Makanan Enak No. 10</a></li>
          <li><a href="https://wa.me"><i class="bi bi-telephone me-1"></i>0819-3050-1523</a></li>
          <li><a href="mailto:info@foodie.id"><i class="bi bi-envelope me-1"></i>info@foodie.id</a></li>
        </ul>
      </div>
      <div class="col-lg-3">
        <h6>Jam Buka</h6>
        <p style="font-size:.87rem;">Senin – Jumat : 09.00 – 21.00</p>
        <p style="font-size:.87rem;">Sabtu – Minggu : 10.00 – 22.00</p>
      </div>
    </div>
    <hr class="footer-divider" />
    <p class="footer-bottom">© 2026 GetSkill</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- MODAL -->
<div class="modal fade" id="pesanModal" tabindex="-1">

  <div class="modal-dialog-centered modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Pesanan Berhasil</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        Produk berhasil ditambahkan ke pesanan.
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">
          Tutup
        </button>
      </div>

    </div>
  </div>

</div>
<!-- MODAL LOGIN -->
<div class="modal fade" id="loginModal" tabindex="-1">

  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title">
          Login Diperlukan
        </h5>

        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal">
        </button>

      </div>

      <div class="modal-body">

        Anda harus login terlebih dahulu
        sebelum melihat detail makanan.

      </div>

      <div class="modal-footer">

        <button
          type="button"   
          class="btn btn-secondary"
          data-bs-dismiss="modal">

          Tutup

        </button>

        <a href="login.php"
           class="btn btn-warning">

          Login

        </a>

      </div>

    </div>

  </div>

</div>
<script>
const sudahLogin =
<?= $login ? 'true' : 'false' ?>;

</script>


 <script src="JS/Foodie.js?v=2"></script> 
</body>
</html>
<?php
$id = $_GET['id'];

if($id == 1){

    $nama = "Ayam Geprek";
    $foto = "Foto/AyamGeprek.jpg";
    $komposisi = "Komposisi : Daging ayam, Tepung terigu, Tepung maizena atau tepung bumbu, Telur, Bawang putih, Garam, Merica, Cabai, dan minyak.";
    $harga = "Rp 18.000";

}

elseif($id == 2){

    $nama = "Mie Ayam";
    $foto = "Foto/MieAyam.jpg";
    $komposisi = "Komposisi : mie , potongan daging ayam yang dimasak kecap, dan minyak ayam bawang.";
    $harga = "Rp 15.000";

}

elseif($id == 3){

    $nama = "Spaghetti Bolognese";
    $foto = "Foto/Spageti.jpg";
    $komposisi = "Komposisi : Spaghetti (tepung gandum durum, air), saus bolognese (daging sapi, tomat, bawang bombai, bawang putih, minyak nabati, gula, garam, rempah-rempah), keju parmesan..";
    $harga = "Rp 20.000";

}

elseif($id == 4){

    $nama = "Sate Ayam";
    $foto = "Foto/SateAyam.jpg";
    $komposisi = "Komposisi : Daging ayam, kecap manis, kacang tanah, bawang putih, bawang merah, cabai, gula merah, garam, ketumbar, dan minyak goreng.";
    $harga = "Rp 15.000";

}

elseif($id == 5){

    $nama = "Pizza";
    $foto = "Foto/Pizza.jpg";
    $komposisi = "Komposisi : Adonan pizza (tepung terigu, air, ragi, gula, garam, minyak nabati), saus tomat (tomat, bawang putih, rempah-rempah), keju mozzarella, dan topping sesuai varian.";
    $harga = "Rp 30.000";

}

else{

    $nama = "Produk Tidak Ditemukan";
    $foto = "";
    $komposisi = "Produk tidak tersedia.";
    $harga = "-";

}

?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= $nama ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body style="background:#FFF4E5;">

<!-- Tombol Kembali -->
<div class="container mt-4">

    <a href="foodie.php" class="btn btn-outline-dark">
        ← Kembali
    </a>

</div>

<!-- Detail Produk -->
<div class="container mt-4">

    <div class="card shadow border-0">

        <div class="row g-0 align-items-center">

            <div class="col-md-5">

                <?php if($foto != ""){ ?>

                <img
                    src="<?= $foto ?>"
                    class="img-fluid rounded-start"
                    alt="<?= $nama ?>">

                <?php } ?>

            </div>

            <div class="col-md-7">

                <div class="card-body p-4">

                    <h2 class="fw-bold">
                        <?= $nama ?>
                    </h2>

                    <p class="text-muted">
                        <?= $komposisi ?>
                    </p>

                    <h3 class="text-warning fw-bold">
                        <?= $harga ?>
                    </h3>
                    <hr>

<h5 class="mt-4">Pilihan Porsi</h5>

<div class="row mt-3">

    <div class="col-md-6">

        <div class="card border-1 shadow-sm p-3">

            <h6>Regular</h6>

            <p class="mb-2">
                <?= $harga ?>
            </p>

            <button
                class="btn btn-warning"
                onclick="alert('Pesanan berhasil ditambahkan!')">

                Pesan

            </button>

        </div>

    </div>

    <div class="col-md-6">

        <div class="card border-1 shadow-sm p-3">

            <h6>Jumbo</h6>

            <p class="mb-2">

                <?php

                if($id == 1){

                    echo "Rp 22.000";

                }elseif($id == 2){

                    echo "Rp 20.000";

                }elseif($id == 3){

                    echo "Rp 25.000";

                }elseif($id == 4){

                    echo "Rp 20.000";

                }elseif($id == 5){

                    echo "Rp 40.000";

                }
                
                

                ?>

            </p>

            <button
                class="btn btn-warning"
                onclick="alert('Pesanan berhasil ditambahkan!')">

                Pesan

            </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
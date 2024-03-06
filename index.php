<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLT - Desa Rama Indra</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="plugins/alert.js"></script>
    <script src="https://kit.fontawesome.com/0b9574c8b5.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top p-3">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-warning fw-bold">BLT</span> Desa Rama Indra</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#informasi">Informasi</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#kontak">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <!-- beranda -->
    <div class="beranda d-flex align-items-center" id="beranda">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 text-center text-white">
                    <h1><span class="text-warning fw-bold">BLT</span> Desa Rama Indra</h1>
                    <P>Silahkan masukan NIK anda</P>
                    <form action="" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="123XXXXXXXXXXXXXXX" style="height: 3.5em;" name="nik" required min="16" max="16">
                            <button class="btn btn-lg btn-warning text-white" name="cekblt"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end beranda-->
    <!-- informasi -->
    <div class="informasi" id="informasi">
        <div class="container">
            <div class="row">
                <div class="text-title mb-3 text-center">
                    <h3>Informasi</h3>
                </div>
                <div class="col-md-6 align-self-center">
                    <img src="assets/image/bernda.jpg" alt="" class="img-fluid rounded">
                </div>
                <div class="col-md-6 align-self-center p-5">
                    <p>
                        Bantuan Langsung Tunai atau disingkat BLT adalah program bantuan pemerintah berjenis pemberian uang tunai atau beragam bantuan lainnya, baik bersyarat (conditional cash transfer) maupun tak bersyarat (unconditional cash transfer) untuk masyarakat miskin. Negara yang pertama kali memprakarsai BLT adalah Brasil, dan selanjutnya diadopsi oleh negara-negara lainnya. Besaran dana yang diberikan dan mekanisme yang dijalankan dalam program BLT berbeda-beda tergantung kebijakan pemerintah di negara tersebut.
                    </p>
                    <p>
                        Indonesia juga merupakan negara penyelenggara BLT, dengan mekanisme berupa pemberian kompensasi uang tunai, pangan, jaminan kesehatan, dan pendidikan dengan target pada tiga tingkatan: hampir miskin, miskin, sangat miskin. BLT dilakukan pertama kali pada tahun 2005, berlanjut pada tahun 2009 dan di 2013 berganti nama menjadi Bantuan Langsung Sementara Masyarakat (BLSM). Program BLT diselenggarakan sebagai respon kenaikan Bahan Bakar Minyak (BBM) dunia pada saat itu, dan tujuan utama dari program ini adalah membantu masyarakat miskin untuk tetap memenuhi kebutuhan hariannya.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- informasi end -->
    <!-- profile -->
    <div class="profile" id="profile">
        <div class="container">
            <div class="row">
                <div class="text-title mb-3 text-center">
                    <h3>Profile</h3>
                </div>
                <div class="col-md-6 align-self-center d-flex justify-content-center order-md-1 p-4">
                    <div class="ratio" style="--bs-aspect-ratio: 50%;">
                        <iframe src="https://www.youtube.com/embed/-vNMdV_n4-o?si=9NjSiMusyH9iOTvh" title="YouTube video" allowfullscreen></iframe>
                    </div>
                    <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Lambang_Kabupaten_Lampung_Tengah.png" alt="" class="img-fluid rounded" width="250"> -->
                </div>
                <div class="col-md-6 align-self-center p-5 text-center">
                    <h2 class="fw-light">
                        "Rama Indra adalah sebuah kampung di Kecamatan Seputih Raman, Kabupaten Lampung Tengah, Provinsi Lampung, Indonesia"
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- profile end -->
    <!-- kontak -->
    <div class="kontak" id="kontak">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-self-center d-flex justify-content-center p-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Lambang_Kabupaten_Lampung_Tengah.png" alt="" class="img-fluid rounded" width="100">
                </div>
                <div class="col-md-4 align-self-center text-center p-3">
                    <p>Jika memiliki pertanyaan terkait Desa Rama Indra silahkan hubungi</p>
                    <div class="nav icon justify-content-center">
                        <a href="https://www.facebook.com/rama.indra.16752754" class="nav-link" target="_blank"><i class="fab fa-facebook-square"></i></i></a>
                        <a href="https://www.instagram.com/kampung_ramaindra/" class="nav-link" target="_blank"><i class="fab fa-instagram-square"></i></a>
                        <a href="https://www.youtube.com/watch?v=-vNMdV_n4-o" class="nav-link" target="_blank"><i class="fab fa-youtube-square"></i></i></a>
                        <a href="https://api.whatsapp.com/send?phone=6285769798101" class="nav-link" target="_blank"><i class="fab fa-whatsapp-square"></i></i></a>

                    </div>
                </div>
                <div class="col-md-4 align-self-center p-5 text-center">
                    <div class="ratio ratio-4x3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254316.94431292018!2d105.09498340684186!3d-5.151537634206477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40a0ef31485f25%3A0xdb5bd32f27fccbc0!2sRama%20Indera%2C%20Kec.%20Seputih%20Raman%2C%20Kabupaten%20Lampung%20Tengah%2C%20Lampung!5e0!3m2!1sid!2sid!4v1708841602624!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- kontak end -->
    <!-- lisensi -->
    <div class="lisensi ">
        <div class="container">
            <div class="row">
                <p class="text-center fw-bold">
                    © Copyright BLT Desa Rama Indra 2024. All Rights Reserved
                </p>
            </div>
        </div>
    </div>
    </div>
    <!-- lisensi end -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<?php
include 'inc/koneksi.php';

if (isset($_POST['cekblt'])) {
    $nik = $_POST['nik'];

    $bltmiskin = $koneksi->query("SELECT * FROM tb_mkn WHERE nik LIKE '%$nik%'");
    $bltumkm = $koneksi->query("SELECT * FROM tb_umk WHERE nik LIKE '%$nik%'");

    if ($bltmiskin->num_rows == 1 || $bltumkm->num_rows == 1) {
        echo "<script>
        Swal.fire({
            title: 'NIK Terdaftar Sebagai Penerima BLT',
            text: '',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then((result) => {if (result.value)
          {window.location = 'cekblt.php?uuid=$nik';
          }
        })</script>";
    } else {
        echo "<script>
        Swal.fire({
            title: 'NIK Tidak Terdaftar Sebagai Penerima BLT',
            text: '',
            icon: 'error',
            confirmButtonText: 'OK'
        })</script>";
    }
}
?>
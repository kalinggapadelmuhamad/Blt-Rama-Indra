<?php
include 'inc/koneksi.php';

if (isset($_GET['uuid'])) {
    $nik = $_GET['uuid'];

    $bltmiskin = $koneksi->query("SELECT * FROM tb_mkn WHERE nik LIKE '%$nik%'");
    $bltumkm = $koneksi->query("SELECT * FROM tb_umk WHERE nik LIKE '%$nik%'");
    $databltmiskin = $bltmiskin->fetch_object();
    $databltumkm = $bltumkm->fetch_object();

    // var_dump($databltmiskin);
    // die;


    if ($bltmiskin->num_rows == 1 || $bltumkm->num_rows == 1) { ?>
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
            <div class="cekblt d-flex align-items-center" id="beranda">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8">
                            <h1 class="mb-4 text-center"><span class="text-warning fw-bold">BLT</span> Desa Rama Indra</h1>
                            <div class="card mb-4">
                                <div class="row g-0">
                                    <div class="col-md-4 align-self-center d-flex justify-content-center p-3">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Lambang_Kabupaten_Lampung_Tengah.png" class="img-fluid rounded-start" width="200">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body text-left">
                                            <h5 class="card-title">Detail Penerima</h5>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 150px">
                                                            <b>NIK</b>
                                                        </td>
                                                        <td>:
                                                            <?= $nik ?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 150px">
                                                            <b>Nama</b>
                                                        </td>
                                                        <td>:
                                                            <?= ($databltmiskin->nama) ? $databltmiskin->nama : $databltumkm->nama ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 150px">
                                                            <b>TTL</b>
                                                        </td>
                                                        <td>:
                                                            <?= ($databltmiskin->tempat_lh) ? $databltmiskin->tempat_lh : $databltumkm->tempat_lh ?> /
                                                            <?= ($databltmiskin->tgl_lh) ? $databltmiskin->tgl_lh : $databltumkm->tgl_lh ?> </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 150px">
                                                            <b>Jenis Kelamin</b>
                                                        </td>
                                                        <td>:
                                                            <?= ($databltmiskin->jekel) ? $databltmiskin->jekel : $databltumkm->jekel ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 150px">
                                                            <b>Alamat</b>
                                                        </td>
                                                        <td>:
                                                            <?= ($databltmiskin->desa) ? $databltmiskin->desa : $databltumkm->desa ?>,
                                                            <?= ($databltmiskin && $databltmiskin->rt) ? $databltmiskin->rt : (($databltumkm && $databltumkm->rt) ? $databltumkm->rt : 'RT'); ?>
                                                            /
                                                            <?= ($databltmiskin && $databltmiskin->rw) ? $databltmiskin->rw : (($databltumkm && $databltumkm->rw) ? $databltumkm->rw : 'RW'); ?>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 150px">
                                                            <b>Agama</b>
                                                        </td>
                                                        <td>:
                                                            <?= ($databltmiskin->agama) ? $databltmiskin->agama : $databltumkm->agama ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 150px">
                                                            <b>Status Kawin</b>
                                                        </td>
                                                        <td>:
                                                            <?= ($databltmiskin && $databltmiskin->kawin) ? $databltmiskin->kawin : (($databltumkm && $databltumkm->kawin) ? $databltumkm->kawin : 'Kawin'); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 150px">
                                                            <b>Jenis BLT</b>
                                                        </td>
                                                        <td>:
                                                            <?= ($databltmiskin->nik) ? 'Masyarakat Miskin' : 'UMKM' ?> </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-md btn-primary no-print" onclick="window.print()">Cetak</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="plugins/jquery/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </body>

        </html>

    <?php } else { ?>
<?php }
} else {
    header('location: index.php');
}
?>
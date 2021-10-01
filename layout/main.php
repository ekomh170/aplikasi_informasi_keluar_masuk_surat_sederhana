<?php
@session_start();
$url = explode('/', $_SERVER['REQUEST_URI']); ?>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="../../assets/img/Logo.png" width="50px" height="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="<?= base_url() ?>">Halaman Utama</a>
                <?php if ($url[3] == "pengguna_app") { ?>
                <a class="nav-item active nav-link" href="<?= base_url() ?>system/pengguna_app/index.php">Pengguna
                    APP</a>
                <?php } ?>
                <?php if ($url[3] != "pengguna_app") { ?>
                <a class="nav-item nav-link" href="<?= base_url() ?>system/pengguna_app/index.php">Pengguna APP</a>
                <?php } ?>

                <?php if ($url[3] == "informasi_surat") { ?>
                <a class="nav-item active nav-link" href="<?= base_url() ?>system/informasi_surat/index.php">Informasi
                    Surat</a>
                <?php } ?>
                <?php if ($url[3] != "informasi_surat") { ?>
                <a class="nav-item nav-link" href="<?= base_url() ?>system/informasi_surat/index.php">Informasi
                    Surat</a>
                <?php } ?>

                <?php if ($url[3] == "surat_keluar") { ?>
                <a class="nav-item active nav-link" href="<?= base_url() ?>system/surat_keluar/index.php">Surat
                    Keluar</a>
                <?php } ?>
                <?php if ($url[3] != "surat_keluar") { ?>
                <a class="nav-item nav-link" href="<?= base_url() ?>system/surat_keluar/index.php">Surat Keluar</a>
                <?php } ?>

                <?php if ($url[3] == "surat_masuk") { ?>
                <a class="nav-item active nav-link" href="<?= base_url() ?>system/surat_masuk/index.php">Surat Masuk</a>
                <?php } ?>
                <?php if ($url[3] != "surat_masuk") { ?>
                <a class="nav-item nav-link" href="<?= base_url() ?>system/surat_masuk/index.php">Surat Masuk</a>
                <?php } ?>
                <a class="nav-item nav-link" href="<?= base_url() ?>auth/keluar_akun.php">Keluar Akun</a>
            </div>
        </div>
    </div>
</nav>
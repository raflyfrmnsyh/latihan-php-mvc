<?php
    $siswa = $data['siswa'];
?>
    <style>
        *{
            list-style: none;
        }
    </style>
<div class="container">
    <div class="pt-3">
        <div class="card" style="width: 32rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $siswa['nama']?></h5>
                <h6 class="card-subtitle mb-2 text-muted">NIS : <?= $siswa['nis']?></h6>
                <div class="mt-3">
                    <p style="margin-bottom : -1px;">Kelas : XII - <?= $siswa['jurusan']?> 1</p>
                    <p style="margin-bottom : -1px;">Email : <?= $siswa['email'] ?></p>
                    <p>Organisasi : <?= $siswa['organisasi'] ?></p>
                </div>
                
                <a href="<?= base_url;?>siswa" class="card-link btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
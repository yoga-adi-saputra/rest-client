<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Band
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $daftar_band['nama']; ?></h5>
                    <p class="card-text"><?= $daftar_band['genre']; ?></p>
                    <p class="card-text"><?= $daftar_band['kota']; ?></p>
                    <p class="card-text"><?= $daftar_band['kontak']; ?></p>
                    <a href="<?= base_url(); ?>band" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>
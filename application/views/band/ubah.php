<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Band
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $daftar_band['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $daftar_band['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="genre">Genre</label>
                            <input type="text" name="genre" class="form-control" id="genre" value="<?= $daftar_band['genre']; ?>">
                            <small class="form-text text-danger"><?= form_error('genre'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kota">Kota</label>
                            <input type="text" name="kota" class="form-control" id="kota" value="<?= $daftar_band['kota']; ?>">
                            <small class="form-text text-danger"><?= form_error('kota'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input type="text" name="kontak" class="form-control" id="kontak" value="<?= $daftar_band['kontak']; ?>">
                            <small class="form-text text-danger"><?= form_error('kontak'); ?></small>
                        </div>
                        
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>
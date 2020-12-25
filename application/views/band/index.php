<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?= $this->session->flashdata('flash'); ?>.
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>band/tambah" class="btn btn-primary">Tambah
                Data Band</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Band</h3>
            <?php if (empty($daftar_band)) : ?>
                <div class="alert alert-danger" role="alert">
                data band tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($daftar_band as $b) : ?>
                <li class="list-group-item">
                    <?= $b['nama']; ?>
                    <a href="<?= base_url(); ?>band/hapus/<?= $b['id']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                    <a href="<?= base_url(); ?>band/ubah/<?= $b['id']; ?>"
                        class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>band/detail/<?= $b['id']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
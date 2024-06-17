<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data mahasiswa.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h3><?= $judul; ?></h3>
            <?php if (empty($poples)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data mahasiswa <?= $this->input->post('keyword'); ?> tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($peoples as $p) : ?>
                    <li class="list-group-item">
                        <?= $p["name"]; ?>
                        <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $p['id']; ?>" class="badge badge-danger float-right hapus">Hapus</a>
                        <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $p['id']; ?>" class="badge badge-success float-right">Ubah</a>
                        <a href="<?= base_url(); ?>mahasiswa/detail/<?= $p['id']; ?>" class="badge badge-primary float-right">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
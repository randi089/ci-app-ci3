<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                <?php if ( validation_errors() ) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif; ?>                    
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nobp">No BP</label>
                            <input type="text" name="nobp" class="form-control" id="nobp">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" name="jurusan" id="jurusan">
                                <option>Manajemen Informatika</option>
                                <option>Sistem Komputer</option>
                                <option>Sistem Informasi</option>
                                <option>Pendidikan Agama Islam</option>
                                <option>Ekonomi</option>
                                <option>Psikologi</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>                       
                        <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary float-right mr-2">Batal</a>
                    </form>
                </div>
            </div>            
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3 class="my-3"><?= $judul; ?></h3>

            <div class="flash-data1" data-flashdata1="<?= $this->session->flashdata('flash1'); ?>"></div>

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peoples as $p) : ?>
                        <tr>
                            <th><?= ++$start; ?></th>
                            <td><?= $p['name']; ?></td>
                            <td><?= $p['email']; ?></< /td>
                            <td>
                                <a href="<?= base_url('peoples/detail/' . $p['id'] . ''); ?>" class="badge badge-warning">detail</a>
                                <a href="<?= base_url('peoples/edit/' . $p['id'] . ''); ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url('peoples/delete/' . $p['id'] . ''); ?>" class="badge badge-danger delete">delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="row justify-content-center my-4">
                <div class="column">
                    <?= $pagination; ?>
                </div>
            </div>
        </div>
    </div>
</div>
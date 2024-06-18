<div class="container">
    <h3 class="my-3"><?= $judul; ?></h3>

    <div class="row">
        <div class="col-md-5">
            <form action="<?= base_url('peoples'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search keyword.." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10">
            <div class="flash-data1" data-flashdata1="<?= $this->session->flashdata('flash1'); ?>"></div>
            <h5>Result : <?= $tot_rows; ?></h5>
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
                    <?php if (empty($peoples)) : ?>
                        <tr>
                            <td colspan="4">
                                <div class="alert alert-danger text-center" role="alert">
                                    Data not found!
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
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
            <div class="row justify-content-center mb-3">
                <div class="column">
                    <?= $pagination; ?>
                </div>
            </div>
        </div>
    </div>
</div>
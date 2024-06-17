<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data People
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $people['name']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $people['email']; ?></h6>
                    <p class="card-text"><?= $people['address']; ?></p>
                    <a href="<?= base_url('peoples'); ?>" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
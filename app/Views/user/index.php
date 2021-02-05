<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid mt-5">

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= base_url('/img/' . user()->user_image); ?>" class="card-img" alt="<?= user()->fullname; ?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">

                    <ul class="list-group list-group-flush">
                        <?php if (user()->fullname) : ?>
                            <li class="list-group-item"><?= user()->fullname; ?></li>
                        <?php endif; ?>
                        <li class="list-group-item"><?= user()->email; ?></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>
<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4"><?= lang('Auth.register') ?></h3>
                </div>
                <div class="card-body">
                    <?= view('Myth\Auth\Views\_message_block') ?>
                    <form action="<?= route_to('register') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label class="small mb-1" for="inputUsername">Username</label>
                            <input class="form-control py-4 <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" type="text" aria-describedby="Username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control py-4 <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" type="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" />
                            <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input class="form-control py-4 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" type="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                    <input class="form-control py-4 <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" type="password" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4 mb-0"><button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button></div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small">
                        <p><a href="<?= route_to('login') ?>"><?= lang('Auth.alreadyRegistered') ?><?= lang('Auth.signIn') ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
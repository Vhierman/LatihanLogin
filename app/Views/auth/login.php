<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4"><?= lang('Auth.loginTitle') ?></h3>
                </div>
                <div class="card-body">
                    <?= view('Myth\Auth\Views\_message_block') ?>
                    <form action="<?= route_to('login') ?>" method="post">
                        <?= csrf_field() ?>

                        <?php if ($config->validFields === ['email']) : ?>
                            <div class="form-group">
                                <label class="small mb-1" for="login"><?= lang('Auth.email') ?></label>
                                <input class="form-control py-4 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" type="email" placeholder="<?= lang('Auth.email') ?>" />
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="form-group">
                                <label class="small mb-1" for="login"><?= lang('Auth.emailOrUsername') ?></label>
                                <input class="form-control py-4 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" type="text" placeholder="<?= lang('Auth.emailOrUsername') ?>" />
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label class="small mb-1" for="password"><?= lang('Auth.password') ?></label>
                            <input class="form-control py-4 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" type="password" placeholder="<?= lang('Auth.password') ?>" />
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>
                        <?php if ($config->allowRemembering) : ?>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" <?php if (old('remember')) : ?> checked <?php endif ?> name="remember" type="checkbox" />
                                    <?= lang('Auth.rememberMe') ?>
                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small"><a href="<?= base_url('register'); ?>">Need an account? Sign up!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

            <div class="card border-2 shadow-lg rounded-4" style="background-color: #615C98;">

                <div class="card-body p-4 p-sm-5">
                    <h2 class="card-title text-center mb-3 fw-light fs-3 text-white"><?= lang('Auth.resetYourPassword') ?></h2>
                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <p><?= lang('Auth.enterCodeEmailPassword') ?></p>

                    <form action="<?= url_to('reset-password') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-floating mb-3">
                            <input type="text" id="floatingInputToken" class="form-control <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>" name="token" placeholder="<?= lang('Auth.token') ?>" value="<?= old('token', $token ?? '') ?>">
                            <label for="floatingInputToken"><?= lang('Auth.token') ?></label>
                            <div class="invalid-feedback">
                                <?= session('errors.token') ?>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" id="floatingInputEmail" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                            <label for="floatingInputEmail"><?= lang('Auth.email') ?></label>
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <br>

                        <div class="form-floating mb-3">
                            <input type="password" id="floatingPassword" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.newPassword'); ?>">
                            <label for="floatingPassword"><?= lang('Auth.newPassword') ?></label>
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" id="floatingPassConfirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?= lang('Auth.newPasswordRepeat'); ?>">
                            <label for="floatingPassConfirm"><?= lang('Auth.newPasswordRepeat') ?></label>
                            <div class="invalid-feedback">
                                <?= session('errors.pass_confirm') ?>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-secondary btn-login text-uppercase fw-bold"><?= lang('Auth.resetPassword') ?></button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
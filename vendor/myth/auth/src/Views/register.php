<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

            <div class="card border-2 shadow-lg rounded-4" style="background-color: #615C98;">

                <div class="card-body p-4 p-sm-5">
                    <h2 class="card-title text-center mb-3 fw-light fs-3 text-white"><?= lang('Auth.register') ?></h2>
                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('register') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-floating mb-3">
                            <input type="email" id="floatingInputEmail" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                            <label for="floatingInputEmail"><?= lang('Auth.email') ?></label>
                            <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" id="floatingInputUsername" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                            <label for="floatingInputUsername"><?= lang('Auth.username') ?></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" id="floatingPassword" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                            <label for="floatingPassword"><?= lang('Auth.password') ?></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" id="floatingPassConfirm" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                            <label for="floatingPassConfirm"><?= lang('Auth.repeatPassword') ?></label>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-secondary btn-login text-uppercase fw-bold"><?= lang('Auth.register') ?></button>
                    </form>

                    <hr>

                    <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
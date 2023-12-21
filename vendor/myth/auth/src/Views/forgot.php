<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

            <div class="card border-2 shadow-lg rounded-4" style="background-color: #615C98;">
                <div class="card-body p-4 p-sm-5">
                    <h2 class="card-title text-center mb-3 fw-light fs-3 text-white"><?= lang('Auth.forgotPassword') ?></h2>

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <p><?= lang('Auth.enterEmailForInstructions') ?></p>

                    <form action="<?= url_to('forgot') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-floating mb-3">
                            <input type="email" id="floatingInputEmail" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
                            <label for="floatingInputEmail"><?= lang('Auth.emailAddress') ?></label>
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-secondary btn-login text-uppercase fw-bold"><?= lang('Auth.sendInstructions') ?></button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
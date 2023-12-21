<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

			<div class="card border-2 shadow-lg rounded-4" style="background-color: #615C98;">
				<div class="card-body p-4 p-sm-5">
					<h2 class="card-title text-center mb-3 fw-light fs-3 text-white"><?= lang('Auth.loginTitle') ?></h2>

					<?= view('Myth\Auth\Views\_message_block') ?>

					<form action="<?= url_to('login') ?>" method="post">
						<?= csrf_field() ?>

						<?php if ($config->validFields === ['email']) : ?>
							<div class="form-floating mb-3">
								<input type="email" id="floatingInput" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
								<label for="floatingInput"><?= lang('Auth.email') ?></label>
								<div class="invalid-feedback">
									<?= session('errors.login') ?>
								</div>
							</div>
						<?php else : ?>
							<div class="form-floating mb-3">
								<input type="text" id="floatingInput" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
								<label for="floatingInput"><?= lang('Auth.emailOrUsername') ?></label>
								<div class="invalid-feedback">
									<?= session('errors.login') ?>
								</div>
							</div>
						<?php endif; ?>

						<div class="form-floating mb-3">
							<input type="password" id="floatingPassword" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
							<label for="floatingPassword"><?= lang('Auth.password') ?></label>
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
						</div>



						<?php if ($config->allowRemembering) : ?>
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
									<?= lang('Auth.rememberMe') ?>
								</label>
							</div>
						<?php endif; ?>

						<br>
						<div class="d-grid">
							<button type="submit" class="btn btn-secondary btn-login text-uppercase fw-bold"><?= lang('Auth.loginAction') ?></button>
							<a href="<?= base_url('home'); ?>" name="login" class="btn btn-secondary btn-login text-uppercase fw-bold my-2" type="submit">Back to Home</a>
						</div>

					</form>

					<hr>

					<?php if ($config->allowRegistration) : ?>
						<p><a href="<?= url_to('register') ?>" class="btn btn-secondary btn-login text-uppercase fw-bold"><?= lang('Auth.needAnAccount') ?></a></p>
					<?php endif; ?>
					<?php if ($config->activeResetter) : ?>
						<p><a href="<?= url_to('forgot') ?>" class="btn btn-secondary btn-login text-uppercase fw-bold"><?= lang('Auth.forgotYourPassword') ?></a></p>
					<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</div>

<?= $this->endSection() ?>
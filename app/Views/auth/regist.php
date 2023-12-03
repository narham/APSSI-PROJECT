<?= $this->extend('auth/auth'); ?>
<?= $this->Section('auth'); ?>
<div class="container">

    <form action="<?= base_url('daftar'); ?>">
        <div class="row justify-content-md-center">
            <div class="col-xl-5 col-md-6 col-sm-12">
                <div class="login-screen">
                    <div class="login-box">
                        <a href="#" class="login-logo">
                            <img src="img/logo-dark.svg" alt="Best Admin Template" />
                        </a>
                        <h5>Welcome,<br />Create your Admin Account.</h5>
                        <div class="form-group">
                            <input name="username" type="text" class="form-control" placeholder="Username" />
                        </div>
                        <div class="form-group">
                            <input name="email" type="text" class="form-control" placeholder="Email Address" />
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input name="password" type="password" class="form-control" placeholder="Password" />
                            </div>
                            <small id="passwordHelpInline" class="text-muted">
                                Password must be 8-20 characters long.
                            </small>
                        </div>
                        <div class="actions mb-4">
                            <button type="submit" class="btn btn-primary">Signup</button>
                        </div>
                        <hr>
                        <div class="m-0">
                            <span class="additional-link">Have an account? <a href="<?= base_url('/'); ?>" class="btn btn-dark">Login</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
<?= $this->endSection(); ?>
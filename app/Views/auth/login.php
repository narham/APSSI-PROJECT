<?= $this->extend('auth/auth'); ?>
<?= $this->Section('auth'); ?>
<div class="container">

    <form action="<?= base_url('login'); ?>">
        <div class="row justify-content-md-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="login-screen">
                    <div class="login-box">
                        <a href="#" class="login-logo">
                            <img src="img/logo-dark.svg" alt="Best Admin Template" />
                        </a>
                        <!-- INFORMASI -->
                        <!-- END INFORMASI -->
                        <h5>Welcome back,<br />Please Login to your Account.</h5>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" />
                        </div>
                        <div class="actions mb-4">
                            <div class="custom-control custom-checkbox">

                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="forgot-pwd">
                            <a class="link" href="<?= base_url('lupa'); ?>">Forgot password?</a>
                        </div>
                        <hr>
                        <div class="actions align-left">
                            <span class="additional-link">New here?</span>
                            <a href="<?= base_url('regist'); ?>" class="btn btn-dark">Create an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
<?= $this->endSection(); ?>
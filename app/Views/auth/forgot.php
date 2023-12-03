<?= $this->extend('auth/auth'); ?>
<?= $this->Section('auth'); ?>
<div class="container">

    <form action="index.html">
        <div class="row justify-content-md-center">
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                <div class="login-screen">
                    <div class="login-box">
                        <a href="#" class="login-logo">
                            <img src="img/logo-dark.svg" alt="Best Admin Template" />
                        </a>
                        <h5>In order to access your dashboard, please enter the email id you provided during the registration
                            process.</h5>
                        <div class="form-group">
                            <input name="email" type="text" class="form-control" placeholder="Enter Email Address" />
                        </div>
                        <div class="actions">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
<?= $this->endSection(); ?>
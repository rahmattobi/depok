<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Account</title>
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/bootstrap.css">
    
    <link rel="shortcut icon" href="<?= base_url('assets/')?>images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/app.css">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="<?= base_url('assets/')?>images/favicon.svg" height="48" class='mb-4'>
                        <h3>Sign Up</h3>
                        <p>Please fill the form to register.</p>
                    </div>
                <form action="<?php echo site_url('c_login/registeraccount'); ?>" method="post" enctype="multipart/form-data" class="login100-form validate-form">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Username</label>
                                    <input type="text" id="first-name-column" class="form-control"  name="username" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Password</label>
                                    <input type="password" id="last-name-column" class="form-control"  name="password" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="username-column">Nama</label>
                                    <input type="text" id="username-column" class="form-control" name="nama" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">Foto</label>
                                    <input type="file" id="country-floating" class="form-control" name="gambar" required>
                                </div>
                            </div>
                        </div>
                                <a href="<?php echo base_url(); ?>c_login">Have an account? Login</a>
                        <div class="clearfix">
                            <button class="btn btn-primary float-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="<?= base_url('assets/')?>js/feather-icons/feather.min.js"></script>
    <script src="<?= base_url('assets/')?>js/app.js"></script>
    
    <script src="<?= base_url('assets/')?>js/main.js"></script>
</body>

</html>

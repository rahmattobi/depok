<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Update Data Kuliner</h3>
                <p class="text-subtitle text-muted">Silahkan Masukkan Data Kuliner</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>c_kuliner">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>c_kuliner/profile">Profile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update Data profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

<section id="input-style">
        <div class="row">
            <div class="col-md-12">
                <?php echo $this->session->flashdata('info'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Profile</h4>
                    </div>
                    <div class="card-body">
                    <form action="<?php echo site_url('c_kuliner/edit_profile/'); ?><?php echo $get_userprofile->id_user ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">username</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="text" id="roundText" class="form-control round" name="username" value="<?php echo $get_userprofile->username ?>" placeholder="Username" required>
                                </div>
                            </div>

                         <!--     <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Foto Tempat kuliner</label>
                                </div>  
                                <div class="col-lg-10 col-9">
                                    <input type="file" name="gambar" value="<?php echo $get_userprofile->foto; ?>" id="roundText" class="form-control round" placeholder="Foto Kuliner">
                                    <img style="width:250px" src="<?php echo base_url("images/"); ?><?php echo $get_userprofile->foto; ?>">
                                </div>
                            </div> -->

                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">password</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="password" id="roundText" class="form-control round" name="password" value="<?php echo $get_userprofile->password ?>" placeholder="password" required>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Nama User</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="text" id="roundText" class="form-control round" name="nama" value="<?php echo $get_userprofile->nama ?>" placeholder="Nama User" required>
                                </div>
                            </div>
                        </div>
                    <br>
                        <div>
                            <button type="submit" class="btn btn-primary" style="float:right;margin-left:5px">Update</button>
                            <a href="<?php echo base_url(); ?>c_kuliner/profile">
                                <span type="submit" class="btn btn-danger" style="float:right">cancel</span>
                            </a>
                        </div>
                  </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="<?= base_url('assets/')?>js/feather-icons/feather.min.js"></script>
<script src="<?= base_url('assets/')?>vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/')?>vendors/simple-datatables/simple-datatables.js"></script>
<script src="<?= base_url('assets/')?>js/vendors.js"></script>
<link rel="stylesheet" href="<?= base_url('assets/')?>vendors/simple-datatables/style.css">


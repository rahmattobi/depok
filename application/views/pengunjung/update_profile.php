<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url('asset/images/')?>2.png');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread" style="color: white">Edit Profile</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <br>
    <div class="row">
    <form action="<?php echo site_url('c_pengunjung/updateprofile/') ?><?php echo $get_userprofile->id_user;?>" method="post" enctype="multipart/form-data"> 
        <div class="col-md-12 ftco-animate">
            <h3 class="mb-4 billing-heading">Biodata Penerima</h3>
            <div class="row align-items-end">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="firstname">Nama </label>
                        <input type="text" value="<?php echo $get_userprofile->nama;?>" name="nama" class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="firstname">Foto Profile(masukkan file gambar)</label>
                        <input type="file" name="gambar" class="form-control" placeholder="" required>
                    </div>
                    <img style="width:100px" src="<?php echo site_url('images/'); ?><?php echo $get_userprofile->foto;?>" />
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="firstname">Username</label>
                        <input type="text" value="<?php echo $get_userprofile->username;?>" name="username" class="form-control" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="firstname">Password</label>
                        <input type="text" value="<?php echo $get_userprofile->password;?>" name="password" class="form-control" placeholder="" required>
                    </div>
                </div>
            </div>
            <button name="submit" type="submit" style="float:right;padding:10px;color:#fff;" class="btn btn-success">update</button>
        </form>
    </div>
</div>

<script src="<?= base_url('assets/')?>js/feather-icons/feather.min.js"></script>
<script src="<?= base_url('assets/')?>vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/')?>vendors/simple-datatables/simple-datatables.js"></script>
<script src="<?= base_url('assets/')?>js/vendors.js"></script>
<link rel="stylesheet" href="<?= base_url('assets/')?>vendors/simple-datatables/style.css">


<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Update Data Wisata</h3>
                <p class="text-subtitle text-muted">Silahkan Masukkan Data Wisata</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>c_admin">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>c_admin/form_wisata">Input Wisata</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update Data Wisata</li>
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
                        <h4 class="card-title">Update Data Wisata</h4>
                    </div>
                    <div class="card-body">
                    <form action="<?php echo site_url('c_admin/edit_wisata/'); ?><?php echo $get_updatewisata->id_wisata ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Nama Tempat Wisata</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="text" id="roundText" class="form-control round" name="nama" value="<?php echo $get_updatewisata->nama_wisata; ?>" placeholder="Nama Wisata" required>
                                </div>
                            </div>

                             <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Foto Tempat Wisata</label>
                                </div>  
                                <div class="col-lg-10 col-9">
                                    <input type="file" name="gambar" id="roundText" class="form-control round" placeholder="Nama Wisata" required> <br>
                                    <img src="<?php echo site_url('images/'); ?><?php echo $get_updatewisata->foto; ?>" class="img-responsive" style="width:250px">
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Jam Operasional</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="text" id="roundText" class="form-control round" name="jam" value="<?php echo $get_updatewisata->jam; ?>" placeholder="Jam Operasional" required>
                                </div>
                            </div>

                             <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Deskripsi Wisata</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                <Textarea style="height: 100px;" id="roundText" class="form-control round" rows="3" type="text" name="desc" placeholder="Deskripsi wisata" required><?php echo $get_updatewisata->desc; ?></Textarea>

                                </div>
                            </div>
                        </div>
                    <br>
                        <div>
                            <button type="submit" class="btn btn-primary" style="float:right;margin-left:5px">Update</button>
                            <a href="<?php echo base_url(); ?>c_admin/form_wisata">
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


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
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>c_kuliner/form_kuliner">Input Kuliner</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update Data Kuliner</li>
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
                        <h4 class="card-title">Update Data Kuliner</h4>
                    </div>
                    <div class="card-body">
                    <form action="<?php echo site_url('c_kuliner/edit_kuliner/'); ?><?php echo $get_updatekuliner->id_kuliner ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Nama Tempat kuliner</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="text" id="roundText" class="form-control round" name="nama" value="<?php echo $get_updatekuliner->nama_kuliner ?>" placeholder="Nama kuliner" required>
                                </div>
                            </div>

                             <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Foto Tempat kuliner</label>
                                </div>  
                                <div class="col-lg-10 col-9">
                                    <input type="file" name="gambar" value="<?php echo $get_updatekuliner->foto; ?>" id="roundText" class="form-control round" placeholder="Foto Kuliner">
                                    <img style="width:250px" src="<?php echo base_url("images/"); ?><?php echo $get_updatekuliner->foto; ?>">
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Jam Operasional</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="text" id="roundText" class="form-control round" name="jam" value="<?php echo $get_updatekuliner->jam ?>" placeholder="Jam Operasional" required>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Lokasi Tempat kuliner</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="text" id="roundText" class="form-control round" name="lokasi" value="<?php echo $get_updatekuliner->lokasi ?>" placeholder="Lokasi Tempat kuliner" required>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Jumlah Kursi yg tersedia</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="number" id="roundText" class="form-control round" name="kursi" value="<?php echo $get_updatekuliner->jumlah_kursi ?>" placeholder="Kursi yg Tersedia" min="0" required>
                                </div>
                            </div>

                             <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Deskripsi kuliner</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                <Textarea style="height: 100px;" id="roundText" class="form-control round" rows="3" type="text" name="desc" placeholder="Deskripsi kuliner" required><?php echo $get_updatekuliner->desc ?></Textarea>

                                </div>
                            </div>
                        </div>
                    <br>
                        <div>
                            <button type="submit" class="btn btn-primary" style="float:right;margin-left:5px">Update</button>
                            <a href="<?php echo base_url(); ?>c_kuliner/form_kuliner">
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


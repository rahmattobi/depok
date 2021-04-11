<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Input Data Wisata</h3>
                <p class="text-subtitle text-muted">Silahkan Masukkan Data Wisata</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>c_admin">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input</li>
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
                        <h4 class="card-title">Input Data Wisata</h4>
                    </div>
                    <div class="card-body">
                    <form action="<?php echo site_url('c_admin/input_wisata'); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Nama Tempat Wisata</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="text" id="roundText" class="form-control round" name="nama" placeholder="Nama Wisata" required>
                                </div>
                            </div>

                             <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Foto Tempat Wisata</label>
                                </div>  
                                <div class="col-lg-10 col-9">
                                    <input type="file" name="gambar" id="roundText" class="form-control round" placeholder="Nama Wisata" required>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Jam Operasional</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="text" id="roundText" class="form-control round" name="jam" placeholder="Jam Operasional" required>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Lokasi Wisata</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="text" id="roundText" class="form-control round" name="lokasi" placeholder="Lokasi Wisata" required>
                                </div>
                            </div>

                             <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Deskripsi Wisata</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                <Textarea style="height: 100px;" id="roundText" class="form-control round" rows="3" type="text" name="desc" placeholder="Deskripsi wisata" required></Textarea>

                                </div>
                            </div>
                        </div>
                    <br>
                        <div>
                            <button type="submit" class="btn btn-outline-primary" style="float:right">Simpan</button>
                        </div>
                  </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Wisata Depok</h4>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th style="text-align:center">Nama Wisata</th>
                            <th style="text-align:center">Aksi</th>
                            <th style="text-align:center">Jam Operasional</th>
                            <th style="text-align:center">Foto</th>
                            <th style="text-align:center">Desc</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($get_wisata as $key => $value): ?>   
                        <tr>
                            <td style="text-align:center"><?php echo $value->nama_wisata; ?></td>
                            <td style="text-align:center">
                                <div class="buttons">
                                    <a href="<?php echo base_url('c_admin/update_wisata/'); ?><?php echo $value->id_wisata; ?>" class="btn icon btn-primary">
                                        <i data-feather="edit"></i>
                                    </a>
                                    <a href="<?php echo base_url('c_admin/delete_wisata/'); ?><?php echo $value->id_wisata; ?>" class="btn icon btn-danger">
                                        <i data-feather="trash"></i>
                                    </a>
                                </div>
                            </td>
                            <td style="text-align:center"><?php echo $value->jam; ?></td>
                            <td style="text-align:center"><img src="<?php echo site_url('images/'); ?><?php echo $value->foto; ?>" class="img-responsive" style="width:250px"></td>
                            <td style="text-align:center"><?php echo $value->desc; ?></td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<script src="<?= base_url('assets/')?>js/feather-icons/feather.min.js"></script>
<script src="<?= base_url('assets/')?>vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/')?>vendors/simple-datatables/simple-datatables.js"></script>
<script src="<?= base_url('assets/')?>js/vendors.js"></script>
<link rel="stylesheet" href="<?= base_url('assets/')?>vendors/simple-datatables/style.css">


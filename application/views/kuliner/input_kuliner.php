<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Input Data kuliner</h3>
                <p class="text-subtitle text-muted">Silahkan Masukkan Data kuliner</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>c_kuliner">Dashboard</a></li>
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
                        <h4 class="card-title">Input Data kuliner</h4>
                    </div>
                    <div class="card-body">
                    <form action="<?php echo site_url('c_kuliner/input_kuliner'); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Nama Tempat kuliner</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="text" id="roundText" class="form-control round" name="nama" placeholder="Nama kuliner" required>
                                </div>
                            </div>

                             <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Foto Tempat kuliner</label>
                                </div>  
                                <div class="col-lg-10 col-9">
                                    <input type="file" name="gambar" id="roundText" class="form-control round" placeholder="Nama kuliner" required>
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
                                    <label class="col-form-label">Lokasi Tempat kuliner</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="text" id="roundText" class="form-control round" name="lokasi" placeholder="Lokasi Tempat kuliner" required>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Jumlah Kursi yg tersedia</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="number" id="roundText" class="form-control round" name="kursi" placeholder="Kursi yg Tersedia" min="0" required>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Harga Booking</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                    <input type="number" id="roundText" class="form-control round" name="booking" placeholder="Harga Booking" min="0" required>
                                </div>
                            </div>

                             <div class="form-group row align-items-center">
                                <div class="col-lg-2 col-3">
                                    <label class="col-form-label">Deskripsi kuliner</label>
                                </div>
                                <div class="col-lg-10 col-9">
                                <Textarea style="height: 100px;" id="roundText" class="form-control round" rows="3" type="text" name="desc" placeholder="Deskripsi kuliner" required></Textarea>

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
                <h4 class="card-title">Data kuliner Depok</h4>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th style="text-align:center">Nama kuliner</th>
                            <th style="text-align:center">Aksi</th>
                            <th style="text-align:center">Foto</th>
                            <th style="text-align:center">Jam Operasional</th>
                            <th style="text-align:center">Lokasi</th>
                            <th style="text-align:center">Jumlah Kursi Tersedia</th>
                            <th style="text-align:center">Harga Booking</th>
                            <th style="text-align:center">Desc</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($get_kuliner as $key => $value): ?>
                        <tr>
                            <td style="text-align:center"><?php echo $value->nama_kuliner; ?></td>
                            <td style="text-align:center">
                                <div class="buttons">
                                    <a href="<?php echo base_url('c_kuliner/update_kuliner/'); ?><?php echo $value->id_kuliner; ?>" class="btn icon btn-primary">
                                        <i data-feather="edit"></i>
                                    </a>
                                    <a href="<?php echo base_url('c_kuliner/delete_kuliner/'); ?><?php echo $value->id_kuliner; ?>" class="btn icon btn-danger">
                                        <i data-feather="trash"></i>
                                    </a>
                                </div>
                            </td>
                            <td style="text-align:center"><img src="<?php echo site_url('images/'); ?><?php echo $value->foto; ?>" class="img-responsive" style="width:250px"></td>
                            <td style="text-align:center"><?php echo $value->jam; ?></td>
                            <td style="text-align:center"><?php echo $value->lokasi; ?></td>
                            <td style="text-align:center"><span style="color:red"><?php echo $value->jumlah_kursi; ?></span></td>
                            <td style="text-align:center">Rp.<?php echo $value->harga_booking; ?></td>
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


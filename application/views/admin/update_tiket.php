<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Input Tiket Wisata</h3>
                <p class="text-subtitle text-muted">Silahkan Masukkan Tiket Wisata</p>
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
                        <h4 class="card-title">Input Tiket Wisata</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url('c_admin/edit_tiket'); ?>" method="post" enctype="multipart/form-data">
                            <?php foreach ($get_updatetiket as $key => $value): ?>
                                <input type="hidden" name="id_tiket" value="<?php echo $value->id_tiket ?>">
                                <div class="row">
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-3">
                                            <label class="col-form-label">Nama Wisata</label>
                                        </div>
                                        <div class="col-lg-10 col-9">
                                            <div class="form-group">
                                                <select class="form-select round" name="id" aria-label="Default select example">
                                                    <option value="<?php echo $value->id_wisata ?>"><?php echo $value->nama_wisata; ?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-3">
                                            <label class="col-form-label">Harga Tiket</label>
                                        </div>
                                        <div class="col-lg-10 col-9">
                                            <input type="number" id="roundText" class="form-control round" name="harga" value="<?php echo $value->harga ?>" placeholder="Harga Tiket Wisata" required>
                                        </div>
                                    </div>

                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-3">
                                            <label class="col-form-label">Jumlah Tiket Wisata</label>
                                        </div>
                                        <div class="col-lg-10 col-9">
                                            <input type="number" id="roundText" class="form-control round" name="jumlah" value="<?php echo $value->jumlah ?>" placeholder="Jam Operasional" required>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <button type="submit" class="btn btn-outline-primary" style="float:right">Simpan</button>
                                </div>
                            <?php endforeach ?>

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



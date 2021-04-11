<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Konfirmasi Pemesanan Tempat</h3>
                <p class="text-subtitle text-muted">Konfirmasi Pemesanan Tempat</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>c_kuliner">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Konfirmasi Pemesanan Tempat</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Konfirmasi Pemesanan</h4>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th style="text-align:center">Nama Orderan</th>
                            <th style="text-align:center">View Orderan</th>
                            <th style="text-align:center">Status</th>
                            <th style="text-align:center">Nama Pemesan</th>
                            <th style="text-align:center">Tanggal yg dipesan</th>
                            <th style="text-align:center">Total Harga</th>
                            <th style="text-align:center">Bukti Dp Tempat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        <?php foreach ($get_booking as $key => $value): ?>
                        <tr>
                            <td style="text-align:center"><?php echo $value->nama_pesanan; ?> <?php echo $no++; ?></td>
                            <td style="text-align:center">  
                                <a href="<?php echo site_url('c_kuliner/view_orderan/') ?><?php echo $value->id_pesanan;?>">
                                    <span type="submit" class="btn btn-primary">View</span>
                                </a></td>
                            <td style="text-align:center">
                                <?php if ($value->status == 0){ ?>
                                <a href="<?php echo site_url('c_kuliner/konfirmasitiket/') ?><?php echo$value->id_pesanan;?>">
                                    <span type="submit" class="btn btn-danger">Konfirmasi</span>
                                </a>
                                <?php }else{ ?>
                                <span class="btn btn-success">Lunas</span>
                                <?php } ?>
                            </td>
                            <td style="text-align:center"><?php echo $value->nama; ?></td>
                            <td style="text-align:center"><?php echo $value->tanggal; ?></td>
                            <td style="text-align:center"><?php echo $value->total_harga; ?></td>
                            <td style="text-align:center">
                                <a href="<?php echo base_url('images/'); ?><?php echo $value->buktipembayaran; ?>">
                                <img style="width:100px" src="<?php echo base_url('images/'); ?><?php echo $value->buktipembayaran; ?>">
                                </a>
                            </td>
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
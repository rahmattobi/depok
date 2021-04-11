<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Konfirmasi Tiket</h3>
                <p class="text-subtitle text-muted">Konfirmasi Tiket Wisata</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>c_kuliner">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Konfirmasi Tiket Wisata</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Konfirmasi Tiket Wisata</h4>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th style="text-align:center">Nama Pemesan</th>
                            <th style="text-align:center">Nama Kuliner</th>
                            <th style="text-align:center">Jumlah meja</th>
                            <th style="text-align:center">Harga Booking</th>
                            <th style="text-align:center">Harga Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($get_booking as $key => $value): ?>
                            <?php 
                                $jumlah_booking = $value->jumlah_booking;
                                $harga_booking = $value->harga_booking;
                                $total = $jumlah_booking*$harga_booking;
                             ?>
                        <tr>
                            <td style="text-align:center"><?php echo $value->nama; ?></td> 
                            <td style="text-align:center"><?php echo $value->nama_kuliner; ?></td>
                            <td style="text-align:center"><?php echo $value->jumlah_booking; ?></td>
                            <td style="text-align:center"><?php echo $value->harga_booking; ?></td>
                            <td style="text-align:center"><?php echo $total; ?></td>
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
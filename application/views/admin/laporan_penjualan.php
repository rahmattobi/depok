<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan Penjualan</h3>
                <p class="text-subtitle text-muted">Laporan Penjualan per-bulan</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>c_admin">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laporan Penjualan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Laporan Penjualan</h4>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th style="text-align:center">Bulan</th>
                            <th style="text-align:center">Jumlah Transaksi</th>
                            <th style="text-align:center">Transaksi</th>
                            <th style="text-align:center">Total Produk</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($data as $key => $value): ?>
                                <td style="text-align:center"><?php echo $value->bulan; ?></td>
                                <td style="text-align:center"><?php echo $value->pendapatan; ?></td>
                                <td style="text-align:center"><?php echo $value->jumlah_transaksi; ?></td>
                                <td style="text-align:center"><?php echo $value->total_produk; ?></td>
                                <td style="text-align:center">
                                    <a href="<?php  echo base_url() ?>c_admin/laporan_detail/<?php  echo $value->tanggal ?>">
                                        <button class="btn btn-primary">Detail</button>
                                    </a>
                                </td>
                            <?php endforeach ?>
                        </tr>
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
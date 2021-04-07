<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan Penjualan Detail</h3>
                <p class="text-subtitle text-muted">Laporan Penjualan Detail</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>c_admin">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url(); ?>c_admin/laporan_penjualan">Laporan Penjualan</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laporan Penjualan Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Laporan Penjualan Detail</h4>
            </div>
            <div class="card-body">
                <div>   
                    <a href="<?php echo base_url();?>c_kuliner/cetak_laporan/<?php echo $tanggal->tanggal; ?>" target="__blank">
                        <span type='submit' class='btn btn-primary'>
                           Cetak Laporan 
                       </span>
                   </a>
               </div>
               <br> 
               <table class='table table-striped' id="table1">
                <thead>
                    <tr>
                        <th style="text-align:center">Nama Pelanggan</th>
                        <th style="text-align:center">wisata</th>
                        <th style="text-align:center">Jumlah</th>
                        <th style="text-align:center">Harga</th>
                        <th style="text-align:center">Total</th>
                        <th style="text-align:center">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($data as $data):
                        $total = $data->jumlah*$data->harga;
                        ?>
                        <tr>            
                            <td><?php echo $data->namapelanggan;?></td>
                            <td><?php echo $data->kuliner;?></td>
                            <td><?php echo $data->jumlah;?></td>
                            <td><?php echo $data->harga;?></td>
                            <td><?php echo $total;?></td>
                            <td><?php echo $data->tanggal; ?></td>
                        </tr>
                    <?php endforeach;?>
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
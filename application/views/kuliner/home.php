<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
    </div>
    <br>
    <section class="section">
        <div class="row mb-2">
            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Kuliner yang Terdaftar</h3>
                            </div>
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'><?php echo $kuliner; ?> Kuliner</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Seluruh Transaksi</h3>
                            </div>
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'><?php echo $transaksi; ?> Booking</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                   <?php $total_pendapatan = 0; ?>
                   <?php foreach ($pendapatan as $key => $value): 
                    $total = $value->total_harga;
                    $total_pendapatan += $total;
                    ?>
                <?php endforeach ?>
                <div class="card-body p-0">
                    <div class="d-flex flex-column">
                        <div class='px-3 py-3 d-flex justify-content-between'>
                            <h3 class='card-title'>Total Pendapatan</h3>
                        </div>
                        <div class='px-3 py-3 d-flex justify-content-between'>
                            <h3 class='card-title'>Rp. <?php echo $total_pendapatan; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
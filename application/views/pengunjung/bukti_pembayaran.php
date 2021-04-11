 <div class="hero-wrap hero-bread" style="background-image: url('<?= base_url('asset/images/')?>bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>c_pengunjung/pengunjung">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 ftco-animate">
		<form action="<?php echo site_url('c_pengunjung/uploudbuktipembayaran'); ?>" method="post" enctype="multipart/form-data" class="billing-form">
				<h3 class="mb-4 billing-heading">Detail Pembayaran</h3>
				<?php foreach ($get_detailorderan1 as $key => $value): ?>
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="firstname">Nama Pemesan</label>
	                  <input type="text" value="<?php echo $value->nama; ?>" class="form-control" placeholder="" disabled>
	                </div>
	              </div>
                </div>

                <div class="row align-items-end">
	          	   <div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Nama Tempat Wisata</label>
	                  <input type="text" value="<?php echo $value->nama_wisata; ?>" class="form-control" placeholder="" disabled>
	                </div>
	              </div>

	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Jumlah Tiket</label>
	                  <input type="text" value="<?php echo $value->jumlah_tiket; ?>" class="form-control" placeholder="" disabled>
	                </div>
                  </div>

                </div>
	          <div class="row mt-5 pt-3 d-flex">
	          	<div class="col-md-6 d-flex">
	          		<?php 
	          		$harga = $value->harga;	          		
	          		$jumlah = $value->jumlah_tiket;
	          		$harga_total = $harga*$jumlah;	          		
	          	 ?>
	          		<div class="cart-detail cart-total bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
	          			<p class="d-flex">
    						<span>Subtotal</span>
    						<span>Rp.<?php echo $harga_total; ?></span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>Rp.<?php echo $harga_total; ?></span>
    					</p>
					</div>
					<input type="hidden" class="form-control" name="id_pesdet" required="" value="<?php echo $value->id_pesdet;?>">
	          	<?php endforeach ?>
	          	</div>
	          	<div class="col-md-6">
	          		<div class="cart-detail bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Pembayaran</h3>
							<div class="form-group">
								<div class="col-md-12">
									<div class="checkbox">
									   <input type="file" name="gambar" value="" class="mr-2" required> 
									   <label>Silahkan Transfer Ke Rek.<b> 12345678 - BNI </b></label>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary py-3 px-4">Kirim</button>
					</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
          </form>
        </div>
      </div>
    </section> <!-- .section -->
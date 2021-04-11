<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url('asset/images/')?>1.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>c_pengunjung/pengunjung">Home</a></span> <span>Cart</span></p>
				<h1 class="mb-0 bread">My Cart Wisata & Kuliner</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-cart">
	<!-- wisata -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<h2>Wisata</h2><br>
				<form action="<?php echo site_url('c_pengunjung/checkout'); ?>" method="post" enctype="multipart/form-data">
					<div class="cart-list">
						<table class="table">
							<thead class="thead-primary">
								<tr class="text-center">
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Product</th>
									<th>Price</th>
									<th>Quantity</th>
								</tr>
							</thead>
							<tbody>				    	
								<?php $totalharga = 0;?> 
								<?php foreach ($get_cart as $key => $value):
									$subharga = $value->harga*$value->jumlah;
									$totalharga += $subharga;
									?>
									<tr class="text-center">
										<td class="product-remove"><a href="<?php echo base_url(); ?>c_pengunjung/delete_cart/<?php echo $value->id_cart; ?>"><span class="ion-ios-close"></span></a></td>

										<td class="image-prod"><div class="img" style="background-image:url(<?= base_url('images/')?><?php echo $value->foto; ?>);"></div></td>

										<td class="product-name">
											<h3><?php echo $value->nama_wisata; ?></h3>
											<p><?php echo $value->desc; ?></p>
										</td>

										<td class="price" id="price<?php echo $value->id_cart; ?>"><?php echo $value->harga; ?></td>
										<td>
											<div class="row mt-4 justify-content-center">
												<div class="input-group col-md-10">
													<span class="input-group-btn mr-2">
														<button type="button" class="quantity-left-minus btn" onclick="minus(<?php echo $value->id_cart; ?>);"  data-type="minus" data-field="">
															<i class="ion-ios-remove"></i>
														</button>
													</span>
													<input type="text" id="quantity<?php echo $value->id_cart; ?>" name="quantity<?php echo $value->id_cart ?>" class="form-control input-number" value="<?php echo $value->jumlah; ?>" min="1" max="100">
													<span class="input-group-btn ml-2">
														<button type="button" class="quantity-right-plus btn" onclick="plus(<?php echo $value->id_cart; ?>);" data-type="plus" data-field="">
															<i class="ion-ios-add"></i>
														</button>
													</span>
												</div>
											</div>
										</td>						   
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<br>
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="ftco-animate">
						<h3 class="mb-4 billing-heading">Detail Pembayaran Wisata</h3>
						<div class="align-items-end">
							<div class="form-group">
								<label for="firstname">Bukti Pembayaran</label>
								<p>Silahkan Transfer Ke Rek.<b> 12345678 - BNI </b></p>
								<input type="file" name="gambar" class="form-control" required>
							</div>
						</div>
					</div> 
				</div>
				<div class="col-md-6">
					<div class="mt-5 cart-wrap ftco-animate">
						<div class="cart-total mb-3">
							<h3>Cart Totals</h3>
							<hr>
							<p class="d-flex total-price">
								<span>Total</span>
								<span id="total_price"><?php echo $totalharga; ?></span>
							</p>
						</div>
						<button class="btn btn-primary py-3 px-4">Proceed to Checkout</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<br>
	<br>

	<!-- kuliner -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<h2>Kuliner</h2><br>
				<form action="<?php echo site_url('c_pengunjung/checkout_tempat'); ?>" method="post" enctype="multipart/form-data">
					<div class="cart-list">
						<table class="table">
							<thead class="thead-primary">
								<tr class="text-center">
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Product</th>
									<th>Price</th>
									<th>Jumlah Meja</th>
								</tr>
							</thead>
							<tbody>
								<?php $totalhargatempat = 0; ?>
								<?php foreach ($get_carttempat as $key => $value):
									$subharga = $value->harga_booking*$value->jumlah;
									$totalhargatempat += $subharga;
									?>						    	
									<form action="<?php echo site_url('c_pengunjung/checkout_tempat'); ?>" method="post" enctype="multipart/form-data">
										<tr class="text-center">
											<td class="product-remove"><a href="<?php echo base_url(); ?>c_pengunjung/delete_carttempat/<?php echo $value->id_carttempat; ?>"><span class="ion-ios-close"></span></a></td>
											<td class="image-prod"><div class="img" style="background-image:url(<?= base_url('images/')?><?php echo $value->foto; ?>);"></div></td>

											<td class="product-name">
												<h3><?php echo $value->nama_kuliner; ?></h3>
												<p><?php echo $value->lokasi; ?></p>
											</td>

											<td id="price_tempat<?php echo $value->id_carttempat; ?>">
												<?php echo $value->harga_booking; ?>
											</td>

											<td>
												<div class="row mt-4 justify-content-center">
													<div class="input-group col-md-10">
														<span class="input-group-btn mr-2">
															<button type="button" class="quantity-left-minus btn" onclick="minus_tempat(<?php echo $value->id_carttempat; ?>);"  data-type="minus" data-field="">
																<i class="ion-ios-remove"></i>
															</button>
														</span>
														<input type="text" id="quantity_tempat<?php echo $value->id_carttempat; ?>" name="quantity<?php echo $value->id_carttempat; ?>" class="form-control input-number" value="<?php echo $value->jumlah; ?>" min="1" max="100">
														<span class="input-group-btn ml-2">
															<button type="button" class="quantity-right-plus btn" onclick="plus_tempat(<?php echo $value->id_carttempat; ?>);" data-type="plus" data-field="">
																<i class="ion-ios-add"></i>
															</button>
														</span>
													</div>
												</div>
											</td>					        
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<br>
				<div class="row justify-content-center">
					<div class="col-md-6">
						<div class="ftco-animate">
							<h3 class="mb-4 billing-heading">Detail Pembayaran Kuliner</h3>
							<div class="align-items-end">
								<div class="form-group">
									<label for="firstname">Bukti Pembayaran</label>
									<p>Silahkan Transfer Ke Rek.<b> 12345678 - BNI </b></p>
									<input type="file" name="gambar" class="form-control" required>
								</div>
							</div>
						</div>
					</div> 
					<div class="col-md-6">
						<div class="mt-5 cart-wrap ftco-animate">
							<div class="cart-total mb-3">
								<h3>Cart Totals</h3>
								<hr>
								<p class="d-flex total-price">
									<span>Total</span>
									<span id="total_pricetempat"><?php echo $totalhargatempat; ?></span>
								</p>
							</div>
							<button class="btn btn-primary py-3 px-4">Proceed to Checkout</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		var totalharga1 = 0;
		var jumlah = 1;
		var hasil = 0;
		var total = 0;

		function minus($var) {
			var price = document.getElementById("price"+$var);
			var quantity = document.getElementById("quantity"+$var);
			var total_price = document.getElementById("total_price");
			if (parseInt(quantity.value)-jumlah >=1) {
				totalharga1 = parseInt(total_price.textContent) - parseInt(price.textContent);
				hasil = parseInt(quantity.value)-jumlah;
				console.log(hasil);
			}
			quantity.value = hasil;
			total_price.textContent = totalharga1;
		}

		function plus($var) {
			var price = document.getElementById("price"+$var);
			var quantity = document.getElementById("quantity"+$var);
			var total_price = document.getElementById("total_price");
			if (parseInt(quantity.value)+jumlah >=1) {
				totalharga1 = parseInt(total_price.textContent) + parseInt(price.textContent);
				hasil = parseInt(quantity.value)+jumlah;
			}
			quantity.value = hasil;
			total_price.textContent = totalharga1;
		}

		function minus_tempat($var) {
			var price = document.getElementById("price_tempat"+$var);
			var quantity = document.getElementById("quantity_tempat"+$var);
			var total_price = document.getElementById("total_pricetempat");
			if (parseInt(quantity.value)-jumlah >=1) {
				totalharga1 = parseInt(total_price.textContent) - parseInt(price.textContent);
				hasil = parseInt(quantity.value)-jumlah;
			}
			quantity.value = hasil;
			total_price.textContent = totalharga1;
		}

		function plus_tempat($var) {
			var price = document.getElementById("price_tempat"+$var);
			var quantity = document.getElementById("quantity_tempat"+$var);
			var total_price = document.getElementById("total_pricetempat");
			if (parseInt(quantity.value)+jumlah >=1) {
				totalharga1 = parseInt(total_price.textContent) + parseInt(price.textContent);
				hasil = parseInt(quantity.value)+jumlah;
			}
			quantity.value = hasil;
			total_price.textContent = totalharga1;
		}

	</script>

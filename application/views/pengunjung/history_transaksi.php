<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url('asset/images/')?>1.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>c_pengunjung/pengunjung">Home</a></span> <span>Cart</span></p>
				<h1 class="mb-0 bread">History Transaksi</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-cart">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<table class="table">
						<h2>History Wisata</h2>
						<thead class="thead-primary">
							<tr class="text-center">
								<th>Nama Orderan</th>
								<!-- <th>Detail Orderan</th> -->
								<th>Tanggal</th>
								<th>aksi</th>
								<th>status</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; ?>
							<?php foreach ($get_tiket as $key => $value): ?>
								<tr class="text-center">
									<td class="product-name">
										<h3><?php echo $value->nama_pesanan; ?> <?php echo $no++; ?></h3>
									</td>	

									<td><?php echo $value->tanggal; ?></td>

									<td style="text-align:center">
										<a href="<?php echo site_url('c_pengunjung/detail_pesanan/') ?><?php echo$value->id_pesanan;?>">
											<span class="btn btn-info" >Lihat Orderan</span>
										</a>
									</td>



									<!-- <td style="text-align:center">
										<?php if ($value->status == 0){ ?>
											<span class="btn btn-danger">Tiket Belum di konfirmasi</span>
										<?php }else{ ?>
											<a href="<?php echo site_url('c_pengunjung/tiket/') ?><?php echo$value->id_pesanan;?>" target="__blank">
												<span class="btn btn-info" >Lihat Tiket</span>
											</a>
										<?php } ?>
									</td> -->
									<td style="text-align:center">
										<?php if ($value->status == 0){ ?>
											<span class="btn btn-danger">Tiket Belum di konfirmasi</span>
										<?php }else{ ?>
											<span class="btn btn-success">Lunas</span>
										<?php } ?>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<table class="table">
						<thead class="thead-primary">
							<h2>History Kuliner</h2>
							<tr class="text-center">
								<th>Nama Booking</th>
								<th>Tanggal</th>
								<th>Aksi</th>
								<th>Status</th>
								<!-- <th>Jumlah Booking</th>
									<th>Harga Booking</th> -->
									<!-- <th>Harga Akhir</th> -->
								</tr>
							</thead>
							<tbody>
								<?php $no =1; ?>
								<?php foreach ($get_booking as $key => $value): ?>
									<tr class="text-center">
						       	<!-- <?php
						       		$harga = $value->harga;
						       		$jumlah = $value->jumlah_tiket;
						       		$harga_akhir = $harga*$jumlah;
						       		?> -->
						       		<td class="product-name">
						       			<h3><?php echo $value->nama_pesanan; ?> <?php echo $no++; ?></h3>
						       		</td>
						       		<td><?php echo $value->tanggal; ?></td>		
						       		
						       		<td style="text-align:center">
						       			<?php if ($value->status == 0){ ?>
<<<<<<< HEAD
						       				<span class="btn btn-danger">Pemesanan Belum di konfirmasi</span>
=======
						       				<span class="btn btn-danger">Tiket Belum di konfirmasi</span>
>>>>>>> 81f08e59ae19c39556e4d05ed3a708c8e23a8232
						       			<?php }else{ ?>
						       				<a href="<?php echo site_url('c_pengunjung/detail_booking/') ?><?php echo$value->id_pesanan;?>">
						       					<span class="btn btn-info" >Lihat Booking</span>
						       				</a>
						       			<?php } ?>
						       		</td>
						       		<td style="text-align:center">
						       			<?php if ($value->status == 0){ ?>
<<<<<<< HEAD
						       				<span class="btn btn-danger">Pemesanan Belum di konfirmasi</span>
=======
						       				<span class="btn btn-danger">Tiket Belum di konfirmasi</span>
>>>>>>> 81f08e59ae19c39556e4d05ed3a708c8e23a8232
						       			<?php }else{ ?>
						       				<span class="btn btn-success">Lunas</span>
						       			<?php } ?>
						       		</td>
						       		<!-- <td><?php echo $value->jumlah_booking; ?></td> -->         
						       		<!-- <td class="product-name">
						       			<h3><?php echo $value->harga_booking; ?></h3>
						       		</td> -->
						       	</tr>
						       <?php endforeach ?>
						   </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>


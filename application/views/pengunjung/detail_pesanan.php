<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url('asset/images/')?>1.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>c_pengunjung/pengunjung">Home</a></span> <span>Cart</span></p>
				<h1 class="mb-0 bread">Detail Orderan</h1>
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
						<thead class="thead-primary">
							<tr class="text-center">
								<th>Nama Wisata</th>
								<th>Jumlah Tiket</th>
								<th>Tanggal</th>
								<th>Lokasi</th>
								<th>Desc</th>
								<th>Lihat Tiket</th>
								<th>Kasih Ulasan</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; ?>
							<?php foreach ($get_tiket as $key => $value): ?>
								<tr class="text-center">
									<td class="product-name">
										<h3><?php echo $value->nama_wisata; ?></h3>
									</td>	
									<td><?php echo $value->jumlah_tiket; ?></td>
									<td><?php echo $value->tanggal; ?></td>
									<td><?php echo $value->lokasi; ?></td>
									<td><?php echo $value->desc; ?></td>
									<td style="text-align:center">
										<?php if ($value->status == 0){ ?>
											<span class="btn btn-danger">Tiket Belum di konfirmasi</span>
										<?php }else{ ?>
											<a href="<?php echo site_url('c_pengunjung/tiket/') ?><?php echo $value->id_pesdet;?>" target="__blank">
												<span class="btn btn-info" >Lihat Tiket</span>
											</a>
										<?php } ?>
									</td>
									<td style="text-align:center">
										<?php if ($value->status == 0){ ?>
											<span class="btn btn-danger">Tiket Belum di konfirmasi</span>
										<?php }else{ ?>
											<a href="<?php echo site_url('c_pengunjung/ulasan/') ?><?php echo $value->id_wisata;?>" >
												<span class="btn btn-primary" >Input Ulasan</span>
											</a>
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
</section>


<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url('asset/images/')?>1.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url() ?>c_pengunjung/pengunjung">Home</a></span> <span>Wisata</span></p>
				<h1 class="mb-0 bread">Wisata Depok</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<h1 style="color: grey" class="mb-3"><b>WISATA DEPOK</b></h1>
		<div class="row">
			<div class="col-lg-8 ftco-animate">
				<?php foreach ($get_wisata as $key => $value): ?>
					<div class="row">
						<div class="col-md-12 d-flex ftco-animate">
							<div class="blog-entry align-self-stretch d-md-flex">
								<a href="<?php echo base_url() ?>c_pengunjung/detail_wisata/<?php echo $value->id_wisata ?>" class="block-20" style="background-image: url('<?= base_url('images/')?><?php echo $value->foto; ?>');">
								</a>
								<div class="text d-block pl-md-4">
									<div class="meta mb-3">
										<div>
											<p>Jam Operational : <?php echo $value->jam; ?></p>
										</div>
									</div>
									<h3 class="heading"><a href="<?php echo base_url() ?>c_pengunjung/detail_wisata/<?php echo $value->id_wisata ?>"><?php echo strtoupper($value->nama_wisata); ?></a></h3>
									<p><?php echo $value->desc; ?></p>
									<p><a href="<?php echo base_url('c_pengunjung/detail_wisata/') ?><?php echo $value->id_wisata ?>" class="btn btn-primary py-2 px-3">Detail Wisata</a></p>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div> <!-- .col-md-8 -->
			<div class="col-lg-4 sidebar ftco-animate">
				<div class="sidebar-box ftco-animate">
					<h3 CLASS="heading">Categories</h3>
					<ul class="categories">
						<li><a href="<?php echo base_url() ?>c_pengunjung/wisata">WISATA DEPOK <span><?php echo $wisata; ?></span></a></li>
						<li><a href="<?php echo base_url() ?>c_pengunjung/kuliner">WISATA KULINER <span><?php echo $kuliner; ?></span></a></li>
					</ul>
				</div>
			</div>

		</div>
	</div>
    </section> <!-- .section -->
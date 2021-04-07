<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url('asset/images/')?>2.png');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url() ?>c_pengunjung/pengunjung" style="color: white">Home</a></span> <span style="color: white">Wisata</span></p>
				<h1 class="mb-0 bread" style="color: white">Wisata Kuliner</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<h1 style="color: grey" class="mb-1"><b>WISATA KULINER</b></h1>
		<div class="row">
			<div class="col-lg-8 ftco-animate">
				<div class="row">
					<?php foreach ($get_kuliner as $key => $value): ?>
						<div class="col-md-12 d-flex ftco-animate">
							<div class="blog-entry align-self-stretch d-md-flex">
								<a href="<?php echo base_url() ?>c_pengunjung/detail_kulinerr/<?php echo $value->id_kuliner ?>" class="block-20" style="background-image: url('<?= base_url('images/')?><?php echo $value->foto; ?>');">
								</a>
								<div class="text d-block pl-md-4">
									<div class="meta mb-3">
										<div>
											<p>Jam Operational : <?php echo $value->jam; ?></p>
										</div>
									</div>
									<h3 class="heading"><a href="<?php echo base_url() ?>c_pengunjung/detail_kulinerr/<?php echo $value->id_kuliner ?>"><?php echo strtoupper($value->nama_kuliner); ?></a></h3>
									<p><?php echo $value->desc; ?></p>
									<p><a href="<?php echo base_url() ?>c_pengunjung/detail_kulinerr/<?php echo $value->id_kuliner ?>" class="btn btn-primary py-2 px-3">Detail Kuliner</a></p>
								</div>
							</div>
						</div>
					<?php endforeach ?>

				</div>
			</div> 
			<div class="col-lg-4 sidebar ftco-animate">
				<div class="sidebar-box ftco-animate">
					<h3 CLASS="heading">Categories</h3>
					<ul class="categories">
						<li><a href="<?php echo base_url() ?>c_pengunjung/kulinerr">WISATA KULINER <span><?php echo $kuliner; ?></span></a></li>
						<li><a href="<?php echo base_url() ?>c_pengunjung/wisataa">WISATA DEPOK <span><?php echo $wisata; ?></span></a></li>
					</ul>
				</div>
			</div>

		</div>
	</div>
    </section>	
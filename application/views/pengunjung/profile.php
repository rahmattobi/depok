<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url('asset/images/')?>2.png');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-0 bread" style="color: white">Profile</h1>
			</div>
		</div>
	</div>
</div>
<?php
foreach($data as $data):
	?>
	<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
		<div class="container">
			<br>
			<div class="row">
				<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('<?php echo site_url('images/'); ?><?php echo $data->foto; ?>');height: 400px">
				</div>
				<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
					<div class="heading-section-bold mb-4 mt-md-5">
						<div class="ml-md-0">
							<h2 class="mb-4"><?php echo $data->nama ?></h2>
						</div>
					</div>
					<div class="pb-md-5">
						<p><a href="<?php echo base_url(); ?>c_pengunjung/edit_profile" class="btn btn-primary">Edit My Profile</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endforeach;?>
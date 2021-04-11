<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url('asset/images/')?>1.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>c_pengunjung/pengunjung">Home</a></span> <span>Cart</span></p>
        <h1 class="mb-0 bread">Input</h1>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12 ftco-animate">
      <div class="comment-form-wrap pt-5">
        <h3 class="mb-5">Input Testimoni</h3>
        <form action="<?php echo site_url('c_pengunjung/input_testimoni'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="name">Nama Kuliner</label>
              <input type="text" value="<?php echo $get_detailboking->nama_kuliner ?>" class="form-control" id="name">
              <input type="hidden" name="id_kuliner" value="<?php echo $get_detailboking->id_kuliner ?>" class="form-control" id="name">
              <input type="hidden" name="id_pesanan" value="<?php echo $get_detailboking->id_pesanan ?>" class="form-control" id="name">
              <input type="hidden" name="id_user" value="<?php echo $get_detailboking->id_user ?>" class="form-control" id="name">
            </div>

          <div class="form-group">
            <label for="message">Testimoni</label>
            <textarea name="testimoni" id="message" cols="30" rows="10" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Input Ulasan" class="btn py-3 px-4 btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-12 ftco-animate">
      <div class="cart-list">
        <table class="table">
          <thead class="thead-primary">
            <tr class="text-center">
              <th>Nama Kuliner</th>
              <th>Tanggal</th>
              <th>Ulasan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($get_ulasan as $key => $value): ?>
            <tr>
              <td><?php echo $value->nama_kuliner; ?></td>
              <td><?php echo $value->tanggal; ?></td>
              <td><?php echo $value->testimoni; ?></td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

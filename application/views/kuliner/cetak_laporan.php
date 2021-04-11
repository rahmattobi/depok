<html>
<head>
  <title>Laporan Penjualan Wisata Depok</title>
  <style>
body{
  width:85%;
  margin-right:auto;
  margin-left:auto;
}
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: grey;
  color: black;
}
  </style>
</head>
<script>
    window.print();
</script>
<body>
  <div>
      <table id="t01">
        <h2 style="text-align:center">Depok</h2>
        <br>
        <h4>LAPORAN PENJUALAN</h4>
        <?php foreach ($bulan as $bulan) : ?>
        <h4><?php echo $bulan->bulan; ?></h4>
      <?php endforeach;?>
        <thead>
            <tr>
              <th>NO.</th>
              <th>Tanggal</th>
              <th>Nama Pelanggan</th>
              <th>Produk</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
          <?php $total=0?>
          <?php $jumlah=0?>
          <?php $no = 1;  ?>
        <?php foreach ($data as $data): ?>
          <?php $totalharga = $data->harga*$data->jumlah ?>
        <tr>
          <td><?php echo $no++?></td>
          <td><?php echo $data->tanggal?></td>
          <td><?php echo $data->namapelanggan?></td>
          <td><?php echo $data->kuliner?></td>
          <td><?php echo $data->harga?></td>
          <td><?php echo $data->jumlah?></td>
          <td><?php echo $totalharga?></td>
          <?php $total=$total+$totalharga; ?>
          <?php $jumlah=$jumlah+$data->jumlah; ?>
        </tr>
      <?php endforeach; ?>
        <tr>
          <td colspan="6" style="text-align:right"><b>Total Pemesanan Produk :</b> </td>
          <td><?php echo $jumlah; ?></td>
        </tr>
        <tr>
          <td colspan="6" style="text-align:right"><b>Total Harga :</b> </td>
          <td><?php echo $total; ?></td>
        </tr>
        </tbody>
    </table>
  </div>  
</body>
</html>
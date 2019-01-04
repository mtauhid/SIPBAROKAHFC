<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>	
	
	<center><?php echo anchor('c_Data/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>Kode</th>
			<th>Nama</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($produk as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->kd_kategori ?></td>
			<td><?php echo $u->nama_kategori ?></td>
			<td>
			      <?php echo anchor('c_Data/edit/'.$u->kd_kategori,'Edit'); ?>
                              <?php echo anchor('c_Data/hapus/'.$u->kd_kategori,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body style="background: #f0f0f0;">
<?php 
	include 'koneksi.php';
?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h2>Data Parkir Kendaraan</h2>
		</div>
		<div class="panel-body">
        <br><br>
			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>NOMOR KENDARAAN</th>
					<th>NOMOR BLOK</th>
					<th>TANGGAL PARKIR</th>
                	<th>USER</th>
				</tr>
				<?php 
				$data = mysqli_query($koneksi, "select * from parkir, user where parkir.kd_user = user.kd_user");				
				$no = 1;
				while ($d=mysqli_fetch_array($data)) {
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['no_kendaraan']; ?></td>
						<td><?php echo $d['no_blok']; ?></td>
						<td><?php echo $d['tanggal']; ?></td>
                        <td><?php echo $d['nama_user']; ?></td>
					</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>
	
</div>
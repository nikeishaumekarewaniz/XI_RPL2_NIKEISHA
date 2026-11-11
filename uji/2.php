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
			<h4>Data Parkir Kendaraan</h4>
		</div>
		<div class="panel-body">
        <br><br>
			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>NOMOR KENDARAAN</th>
					<th>STATUS</th>
					<th>LEVEL USER</th>
				</tr>
				<?php 
				$data = mysqli_query($koneksi, "select * from parkir, blok where parkir.no_kendaraan = blok.status ");				
				$no = 1;
				while ($d=mysqli_fetch_array($data)) {
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['no_kendaraan']; ?></td>
						<td><?php echo $d['status']; ?></td>
						<td><?php echo $d['level']; ?></td>
					</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>
	
</div>
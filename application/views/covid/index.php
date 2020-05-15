<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<!-- <?php 
	echo "<pre>";
	print_r($indonesia); // tes datanya dengan print r
?> -->
<h2>DATA KASUS GLOBAL</h2>

<table border="1">
	<tr>
		<th>Positif</th>
		<th>Sembuh</th>
		<th>Meninggal</th>
	</tr>
	<tr>
		<!-- karena key pada jsonnya jadi kita langsung panggil saja key array nya
		{
			"name": "Total Positif",
			"value": "307,278"
		}
		-->
		<td><?= $globalPos['value']; ?></td>
		<td><?= $globalSem['value']; ?></td>
		<td><?= $globalMeni['value']; ?></td>
	</tr>
</table>

<h2>DATA KASUS <?= $getSingleProvince['provinsi']; ?></h2>

<table border="1">
	<tr>
		<th>Positif</th>
		<th>Sembuh</th>
		<th>Meninggal</th>
	</tr>
	<tr>
		<!-- karena key pada jsonnya jadi kita langsung panggil saja key array nya
		{
			"name": "Total Positif",
			"value": "307,278"
		}
		-->
		<td><?= $getSingleProvince['positif']; ?></td>
		<td><?= $getSingleProvince['sembuh']; ?></td>
		<td><?= $getSingleProvince['meninggal']; ?></td>
	</tr>
</table>

<h2>DATA INDONESIA</h2>
<body>
	<table border="1">
		<tr>
			<th>Positif</th>
			<th>Sembuh</th>
			<th>Meninggal</th>
		</tr>
		<?php foreach ($indonesia as $value) { ?> 
		<!-- datanya kita looping -->
		<tr>
			<td><?= $value['positif']; ?></td>
			<td><?= $value['sembuh']; ?></td>
			<td><?= $value['meninggal']; ?></td>
		</tr>
	<?php } ?>
	</table>

<h2>DATA PROVINSI INDONESIA</h2>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Provinsi</th>
			<th>Positif</th>
			<th>Sembuh</th>
			<th>Meninggal</th>
		</tr>
		<?php 
		$no = 1;
		foreach ($provinsi as $value) { ?>	
			<!-- melakukan looping data pada data provinsi -->
			<!-- lalu ambil key array multidimensi $value['Key']['value']; -->
		<tr>
			<td><?= $no; ?></td>
			<td><?= $value['attributes']['Provinsi']; ?></td>
			<td><?= number_format($value['attributes']['Kasus_Posi']); ?></td>
			<td><?= number_format($value['attributes']['Kasus_Semb']); ?></td>
			<td><?= number_format($value['attributes']['Kasus_Meni']); ?></td>
		</tr>
		<?php $no++; } ?>
	</table>

	<h2>DATA NEGARA GLOBAL</h2>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Negara</th>
			<th>Positif</th>
			<th>Sembuh</th>
			<th>Meninggal</th>
		</tr>
		<?php 
		$no = 1;
		foreach ($global as $value) { ?>	
			<!-- melakukan looping data pada data global -->
			<!-- lalu ambil key array multidimensi $value['Key']['value']; -->
		<tr>
			<td><?= $no; ?></td>
			<td><?= $value['attributes']['Country_Region']; ?></td>
			<td><?= number_format($value['attributes']['Confirmed']); ?></td>
			<td><?= number_format($value['attributes']['Recovered']); ?></td>
			<td><?= number_format($value['attributes']['Deaths']); ?></td>
			<!-- number format digunakan untuk memisahkan angka yang tadinya 1400500 menjadi 1,400,500 -->
		</tr>
		<?php $no++; } ?>
	</table>
</body>
</html>
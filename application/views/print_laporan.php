<html><head>
<title>Report Table</title></head>
<style type="text/css">
	table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}
</style>
<body>
<h2><center>Laporan Transaksi</center></h2>
<table>
<thead>
<tr>
 <th><center>No</center></th>
 <th><center>Tanggal</center></th>
 <th><center>Nama</center></th>
 <th><center>Alamat</center></th>
 <th><center>Telepon</center></th>
 <th><center>List Sepatu</center></th>
 <th><center>Total</center></th>
</tr>
</thead>
<tbody>
<?php $no=1;
 foreach ($transaksi as $value) { ?>
<tr>
 <td><?php echo $value['no_transaksi'] ?></td>
					<td><?php echo $value['tanggal'] ?></td>
					<td><?php echo $value['nama'] ?></td>
					<td><?php echo $value['alamat'] ?></td>
					<td><?php echo $value['telepon'] ?></td>
					<td><?php echo $value['list_sepatu'] ?></td>
					<td><?php echo $value['total'] ?></td>
</tr>
<?php $no++; } ?>
</tbody></table>
</body></html>
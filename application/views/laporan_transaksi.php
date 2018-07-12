<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Navbar example</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
		<a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
	</div>
	<h1>Laporan Transaksi</h1>

	<!-- File Header -->
	<table class="table table-striped table-bordered" width="100%" id="example">
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>No Tran</th>
				<th>Tanggal</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>List Sepatu</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($transaksi as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $value['no_transaksi'] ?></td>
					<td><?php echo $value['tanggal'] ?></td>
					<td><?php echo $value['nama'] ?></td>
					<td><?php echo $value['alamat'] ?></td>
					<td><?php echo $value['telepon'] ?></td>
					<td><?php echo $value['list_sepatu'] ?></td>
					<td><?php echo $value['total'] ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<!-- File Footer -->

</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('footer') ?>
<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Navbar example</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
		<a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
	</div>
	<h1>Sepatu</h1>
	<a href="<?php echo base_url('Sepatu/input') ?>" class="btn btn-primary mb-3">input</a>

	<!-- File Header -->
	<table class="table table-striped table-bordered" width="100%" id="example">
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>ID</th>
				<th>Nama</th>
				<th>Keterangan</th>
				<th>Harga</th>
				<th>Image</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $value['id'] ?></td>
					<td><?php echo $value['nama'] ?></td>
					<td><?php echo $value['keterangan'] ?></td>
					<td><?php echo $value['harga'] ?></td>
					<td><img src="<?php echo base_url('uploads/'.$value['image']) ?>" style="width: 100px;"></td>
					<td>
						<!-- --AKSI-- -->
						<a href="<?php echo base_url('Sepatu/update/'.$value['id']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('Sepatu/hapus/'.$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
					</td>
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
<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<main role="main" class="container">
	<h1>Member</h1>
	<a href="<?php echo base_url('Member/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>
	<table class="table table-striped table-bordered" width="100%" id="example">
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>Nama</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>Email</th>
				<th>Username</th>
				<th>Password</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $value['nama'] ?></td>
					<td><?php echo $value['alamat'] ?></td>
					<td><?php echo $value['telepon'] ?></td>
					<td><?php echo $value['email'] ?></td>
					<td><?php echo $value['username'] ?></td>
					<td><?php echo $value['password'] ?></td>
					<td>
						<!-- --AKSI-- -->
						<a href="<?php echo base_url('Member/ubah/'.$value['id']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('Member/hapus/'.$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('footer') ?>
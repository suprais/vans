<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<main role="main" class="container">
	<h1>Update</h1>
	<!-- load header -->
	<!-- action akan dilakukan ke controller product dengan fungsi ubah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e -->
	<form action="<?php echo base_url('Sepatu/update/'.$getData['id']); ?>" method="post">
		<div class="form-group row">
			<label for="nama" class="col-sm-2 col-form-label">nama</label>
			<div class="col-sm-10">
				<input type="text" name="nama" class="form-control" id="nama"  value="<?php echo $getData['nama'] ?>" placeholder="nama">
				<?php echo form_error('nama') ?> <!-- menampilkan error saat rule nama gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="keterangan" class="col-sm-2 col-form-label">keterangan</label>
			<div class="col-sm-10">
				<input type="text" name="keterangan" class="form-control" id="keterangan"  value="<?php echo $getData['keterangan'] ?>" placeholder="keterangan">
				<?php echo form_error('keterangan') ?> <!-- menampilkan error saat rule keterangan gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="ukuran" class="col-sm-2 col-form-label">ukuran</label>
			<div class="col-sm-10">
				<input type="text" name="ukuran" class="form-control" id="ukuran"  value="<?php echo $getData['ukuran'] ?>" placeholder="ukuran">
				<?php echo form_error('ukuran') ?> <!-- menampilkan error saat rule ukuran gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="stok" class="col-sm-2 col-form-label">stok</label>
			<div class="col-sm-10">
				<input type="text" name="stok" class="form-control" id="stok"  value="<?php echo $getData['stok'] ?>" placeholder="stok">
				<?php echo form_error('stok') ?> <!-- menampilkan error saat rule stok gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="harga" class="col-sm-2 col-form-label">harga</label>
			<div class="col-sm-10">
				<input type="text" name="harga" class="form-control" id="harga"  value="<?php echo $getData['harga'] ?>" placeholder="harga">
				<?php echo form_error('harga') ?> <!-- menampilkan error saat rule harga gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="col-sm-2"></label>
			<input type="submit" class="btn btn-success" value="Ubah">
		</div>
	</form>
	<!-- load footer -->
</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('footer') ?>
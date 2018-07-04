<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<main role="main" class="container">
	<h1>Table</h1>
	<?php echo form_open_multipart('Sepatu/ubah/'.$getData['id']); ?>
	<!-- sama kaya tambah -->
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
		<label for="harga" class="col-sm-2 col-form-label">harga</label>
		<div class="col-sm-10">
			<input type="text" name="harga" class="form-control" id="harga"  value="<?php echo $getData['harga'] ?>" placeholder="harga">
			<?php echo form_error('harga') ?> <!-- menampilkan error saat rule harga gagal -->
		</div>
	</div>
	<div class="form-group">
		<label for="image">Image</label>
		<input type="file" name="image">
		<?php echo (isset($message) ? $message : ''); ?>
	</div>
	<div class="form-group row">
		<label for="col-sm-2"></label>
		<input type="submit" class="btn btn-success" value="Ubah">
	</div>
</form>
</main>
<?php $this->load->view('footer') ?>
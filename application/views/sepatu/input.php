<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Navbar example</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
		<a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
	</div>
	<h1>Table</h1>

	<!-- load header -->
	<!-- action akan dilakukan ke controller product dengan fungsi input -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e
	 -->
	 <?php if(isset($error)) echo $error; ?>
	<?php echo form_open_multipart('') ?>
		<div class="form-group row">
			<label for="nama" class="col-sm-2 col-form-label">nama</label>
			<div class="col-sm-10">
				<input type="text" name="nama" class="form-control" id="nama" value="" placeholder="nama">
				<?php echo form_error('nama') ?> <!-- menampilkan error saat rule nama gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="keterangan" class="col-sm-2 col-form-label">keterangan</label>
			<div class="col-sm-10">
				<input type="text" name="keterangan" class="form-control" id="keterangan" value="" placeholder="keterangan">
				<?php echo form_error('keterangan') ?> <!-- menampilkan error saat rule keterangan gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="ukuran" class="col-sm-2 col-form-label">ukuran</label>
			<div class="col-sm-10">
				<input type="text" name="ukuran" class="form-control" id="ukuran" value="" placeholder="ukuran">
				<?php echo form_error('ukuran') ?> <!-- menampilkan error saat rule ukuran gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="stok" class="col-sm-2 col-form-label">stok</label>
			<div class="col-sm-10">
				<input type="text" name="stok" class="form-control" id="stok" value="" placeholder="stok">
				<?php echo form_error('stok') ?> <!-- menampilkan error saat rule stok gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="harga" class="col-sm-2 col-form-label">harga</label>
			<div class="col-sm-10">
				<input type="text" name="harga" class="form-control" id="harga" value="" placeholder="harga">
				<?php echo form_error('harga') ?> <!-- menampilkan error saat rule harga gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="image" class="col-sm-2 col-form-label">image</label>
			<div class="col-sm-10">
				<input type="file" name="image">
			</div>
		</div>
		<div class="form-group row">
			<label for="col-sm-2"></label>
			<input type="submit" class="btn btn-primary" value="input">
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
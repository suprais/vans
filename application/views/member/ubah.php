<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<main role="main" class="container">
	<h1>Member Update</h1>
	<form action="<?php echo base_url('Member/ubah/'.$getData['id']); ?>" method="post">
		<!-- sama kaya tambah -->
		<div class="form-group row">
			<label for="nama" class="col-sm-2 col-form-label">nama</label>
			<div class="col-sm-10">
				<input type="text" name="nama" class="form-control" id="nama"  value="<?php echo $getData['nama'] ?>" placeholder="nama">
				<?php echo form_error('nama') ?> <!-- menampilkan error saat rule nama gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="alamat" class="col-sm-2 col-form-label">alamat</label>
			<div class="col-sm-10">
				<input type="text" name="alamat" class="form-control" id="alamat"  value="<?php echo $getData['alamat'] ?>" placeholder="alamat">
				<?php echo form_error('alamat') ?> <!-- menampilkan error saat rule alamat gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="telepon" class="col-sm-2 col-form-label">telepon</label>
			<div class="col-sm-10">
				<input type="text" name="telepon" class="form-control" id="telepon"  value="<?php echo $getData['telepon'] ?>" placeholder="telepon">
				<?php echo form_error('telepon') ?> <!-- menampilkan error saat rule telepon gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="email" class="col-sm-2 col-form-label">email</label>
			<div class="col-sm-10">
				<input type="text" name="email" class="form-control" id="email"  value="<?php echo $getData['email'] ?>" placeholder="email">
				<?php echo form_error('email') ?> <!-- menampilkan error saat rule email gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="username" class="col-sm-2 col-form-label">username</label>
			<div class="col-sm-10">
				<input type="text" name="username" class="form-control" id="username"  value="<?php echo $getData['username'] ?>" placeholder="username">
				<?php echo form_error('username') ?> <!-- menampilkan error saat rule username gagal -->
			</div>
		</div>
		<div class="form-group row">
			<label for="password" class="col-sm-2 col-form-label">password</label>
			<div class="col-sm-10">
				<input type="text" name="password" class="form-control" id="password"  value="<?php echo $getData['password'] ?>" placeholder="password">
				<?php echo form_error('password') ?> <!-- menampilkan error saat rule password gagal -->
			</div>
		</div>
		
		
		<div class="form-group row">
			<label for="col-sm-2"></label>
			<input type="submit" class="btn btn-success" value="Ubah">
		</div>
	</form>
</main>
<?php $this->load->view('footer') ?>
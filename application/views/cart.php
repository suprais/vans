<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<?php echo form_open('Transaksi/update_cart'); ?>
<main role="main" class="container">
	<h1>Keranjang</h1>
  
	<ul class="list-unstyled">
  <?php $i = 1; ?>
		<?php foreach ($this->cart->contents() as $key => $value): ?>
      <?php echo form_hidden($i.'[rowid]', $value['rowid']); ?>
			<li class="media mb-3">
    <img class="mr-3" src="<?php echo base_url('uploads/'.$value['image']) ?>" alt="Generic placeholder image" style="width: 30%;max-height: 200px;">
    <div class="media-body">
      <h5 class="mt-0 mb-1">Nama : <?php echo $value['name'] ?></h5>
      <?php echo form_input(array('name' => $i.'[qty]', 'value' => $value['qty'], 'maxlength' => '3', 'size' => '5')); ?><br>
      Harga  : <?php  echo $value['price'] ?><br>
      Total : <?php   echo $value['subtotal'] ?><br>
      <a href="<?php echo site_url('Transaksi/delete_cart/'.$value['rowid']) ?>" class="btn btn-sm btn-danger">Delete</a>
    </div>
  </li>
  <?php $i++; ?>
		<?php endforeach ?>
  </ul>
  
  <?php if (count($this->cart->contents())): ?>
    <?php echo form_submit('', 'Update your Cart',array('class' => 'btn btn-success')); ?>
  <a href="<?php echo base_url("Transaksi/reset_cart") ?>" class="btn btn-danger">Remove All</a>
  <a href="<?php echo base_url("Transaksi/checkout") ?>" class="btn btn-primary float-right">Bayar (Total <?php echo $this->cart->total(); ?>)</a>
<?php else: ?>
	<a href="<?php echo base_url("") ?>" class="btn btn-info">Cart Kosong</a>
<?php endif ?>
</main>
<?php echo form_close(); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('footer') ?>
<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<main role="main" class="container">
	<h1>Keranjang</h1>
	<ul class="list-unstyled">
		<?php foreach ($this->cart->contents() as $key => $value): ?>
			<li class="media mb-3">
    <img class="mr-3" src="<?php echo base_url('uploads/'.$value['image']) ?>" alt="Generic placeholder image" style="width: 30%;max-height: 200px;">
    <div class="media-body">
      <h5 class="mt-0 mb-1"><?php echo $value['name'] ?></h5>
      <?php echo $value['qty'] ?>
      <a href="<?php echo site_url('Transaksi/delete_cart/'.$value['rowid']) ?>" class="btn btn-sm btn-danger">Delete</a>
    </div>
  </li>
		<?php endforeach ?>
  </ul>
  <?php if (count($this->cart->contents())): ?>
  <a href="<?php echo base_url("Transaksi/reset_cart") ?>" class="btn btn-danger">Remove All</a>
<?php else: ?>
	<a href="<?php echo base_url("") ?>" class="btn btn-info">Cart Kosong</a>
<?php endif ?>
</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('footer') ?>
<?php $this->load->view('header') ?>
<?php $this->load->view('navbar') ?>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Punny headline</h1>
    <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
    <a class="btn btn-outline-secondary" href="#">Coming soon</a>
  </div>
  <div class="product-device box-shadow d-none d-md-block"></div>
  <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
</div>

<?php for($i=0;$i<=count($sepatu);$i++){ ?>
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-info mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5"><?php echo $sepatu[$i]->nama ?></h2>
      <p class="lead"><?php echo $sepatu[$i]->keterangan ?> <b><?php echo $sepatu[$i]->harga ?></b></p>
      <a href="<?php echo base_url('index.php/Transaksi/add_cart/'.$sepatu[$i]->id) ?>" class="btn btn-primary">Buy</a>
    </div>
    <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;background-size:cover;background-image: url(<?php echo base_url('uploads/'.$sepatu[$i]->image) ?>);"></div>
  </div>
  <?php $i++; ?>
  <?php if (isset($sepatu[$i])): ?>
    <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5"><?php echo $sepatu[$i]->nama ?></h2>
      <p class="lead"><?php echo $sepatu[$i]->keterangan ?> <b><?php echo $sepatu[$i]->harga ?></b></p>
       <a href="<?php echo base_url('index.php/Transaksi/add_cart/'.$sepatu[$i]->id) ?>" class="btn btn-primary">Buy</a>
    </div>
    <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;background-size:cover;background-image: url(<?php echo base_url('uploads/'.$sepatu[$i]->image) ?>);"></div>
  </div>
  <?php endif ?>
</div>
<?php } ?>
<?php $this->load->view('footer') ?>
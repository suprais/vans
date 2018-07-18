<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Footwear a Fashion Category Bootstrap Responsive website Template | Home :: w3layouts</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Footwear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Custom Theme files -->
  <link href="<?php echo base_url('assets_home/') ?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
  <link href="<?php echo base_url('assets_home/') ?>css/style.css" type="text/css" rel="stylesheet" media="all">   
  <link href="<?php echo base_url('assets_home/') ?>css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets_home/') ?>css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS --> 
  <link href='<?php echo base_url('assets_home/') ?>css/simplelightbox.css' rel='stylesheet' type='text/css'>  
  <!-- //Custom Theme files --> 
  <!-- js -->
  <script src="<?php echo base_url('assets_home/') ?>js/jquery-2.2.3.min.js"></script>  
  <!-- //js -->
  <!-- web-fonts -->  
  <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
  <!-- //web-fonts -->
</head>
<body> 
  <!-- banner -->
  <div class="agileits-banner jarallax">  
    <!-- navigation -->
    <div class ="top-nav">
      <div class="container"> 
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button> 
          </div>
          <div class="search">
            <input class="search_box" type="checkbox" id="search_box">
            <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
            <div class="search_form">
              <form action="#" method="post">
                <input type="text" name="Search" placeholder="Search..." required="">
                <input type="submit" value="Send">
              </form>
            </div>
          </div> 
          <!-- navbar-header -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
              <li><a href="index.html" class="hvr-underline-from-center active">Home</a></li>
              <li><a href="#about" class="hvr-underline-from-center scroll">About Us</a></li>
              <li><a href="#services" class="hvr-underline-from-center scroll">Services</a></li>
              <li><a href="#gallery" class="hvr-underline-from-center scroll">Gallery</a></li>
              <li><a href="#team" class="hvr-underline-from-center scroll">Our Team</a></li>
              <li><a href="#blog" class="hvr-underline-from-center scroll">Blog</a></li>
              <li><a href="#contact" class="hvr-underline-from-center scroll">Contact Us</a></li>
            </ul>
          </div> 
          <div class="clearfix"> </div> 
        </nav>
      </div>
    </div>
    <!-- //navigation -->
    <!-- banner-text -->
    <div class="banner-text"> 
      <div class="container"> 
        <div class="banner-w3lstext"> 
          <h1><a href="index.html">Footwear<span>Welcome To Trendy</span></a></h1>
          <p>Nulla ultricies nunc et lorem semper quis accumsan dui aliquam aucibus sagittis placerat quis accumsan</p>
        </div> 
      </div>
    </div>
    <!-- //banner-text --> 
  </div>
  <!-- //banner --> 
  <!-- banner-bottom-grids -->
  <div id="cart" class="banner-bottom-grids" style="margin-top: 5rem;margin-bottom: 5rem;">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <h1 class="text-center">Cart</h1>
        <?php echo form_open('Transaksi/update_cart'); ?>
        <table class="table table-striped table-hover table-bordered"> 
          <thead> 
            <tr> 
              <th></th>
              <th>Nama</th>
              <th>Jumlah</th>
              <th>Harga</th>
              <th>Sub Total</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody> 
            <?php $i = 1; ?>
            <?php foreach ($this->cart->contents() as $key => $value): ?>
              <?php echo form_hidden($i.'[rowid]', $value['rowid']); ?>
              <tr>  
                <td>
                  <img class="mr-3" src="<?php echo base_url('uploads/'.$value['image']) ?>" alt="Generic placeholder image" style="width: 30%;max-height: 200px;">
                </td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $value['qty'], 'maxlength' => '3', 'size' => '5','class'=>'form-control')); ?></td>
                <td><?php  echo $value['price'] ?></td>
                <td><?php   echo $value['subtotal'] ?></td>
                <td><a href="<?php echo site_url('Transaksi/delete_cart/'.$value['rowid']) ?>" class="btn btn-sm btn-danger">Delete</a></td>
              </tr>
              <?php $i++; ?>
            <?php endforeach ?>
          </tbody>
        </table>
        <?php if (count($this->cart->contents())): ?>
          <?php echo form_submit('', 'Update your Cart',array('class' => 'btn btn-success')); ?>
          <a href="<?php echo base_url("Transaksi/reset_cart") ?>" class="btn btn-danger">Remove All</a>
          <a href="<?php echo base_url("Transaksi/checkout") ?>" class="btn btn-primary float-right">Bayar (Total <?php echo $this->cart->total(); ?>)</a>
        <?php else: ?>
          <a href="<?php echo base_url("") ?>" class="btn btn-info">Cart Kosong</a>
        <?php endif ?>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div> 
  
  <div class="subscribe jarallax">    
    <div class="subscribe-agileinfo">    
      <div class="container"> 
        <h3>SignUp Newsletter</h3>  
        <form action="#" method="post"> 
          <input type="text" name="name" placeholder="Your Name" required="">
          <input type="email" name="email" placeholder="Your Email" required="">
          <input type="submit" value="Submit">
          <div class="clearfix"> </div>
        </form> 
      </div> 
    </div>
  </div>
  <!-- //contact --> 
  <!-- copy rights start here -->
  <div class="copyw3-agile">
    <div class="container">  
      <div class="social-w3lsicon footer-w3icons"> 
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
      </div>
      <p>© 2017 Footwear. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
  </div>
  <!-- //copy right end here -->  
  <!-- Owl-Carousel-JavaScript -->
  <script src="<?php echo base_url('assets_home/') ?>js/owl.carousel.js"></script>
  <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel ({
        items : 4,
        lazyLoad : true,
        autoPlay : true,
        pagination : false,
      });
    });
  </script>
  <!-- //Owl-Carousel-JavaScript -->   
  <!-- jarallax -->   
  <script src="<?php echo base_url('assets_home/') ?>js/SmoothScroll.min.js"></script> 
  <script src="<?php echo base_url('assets_home/') ?>js/jarallax.js"></script> 
  <script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
      speed: 0.5,
      imgWidth: 1366,
      imgHeight: 768
    })
  </script> 
  <!-- //jarallax --> 
  <!-- start-smooth-scrolling --> 
  <script type="text/javascript" src="<?php echo base_url('assets_home/') ?>js/move-top.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets_home/') ?>js/easing.js"></script> 
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){   
        event.preventDefault();

        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
      });
    });
  </script>
  <!-- //end-smooth-scrolling --> 
  <!-- smooth-scrolling-of-move-up -->
  <script type="text/javascript">
    $(document).ready(function() {
      /*
      var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
      };
      */
      
      $().UItoTop({ easingType: 'easeOutQuart' });
      
    });
  </script>
  <!-- //smooth-scrolling-of-move-up -->    
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets_home/') ?>js/bootstrap.js"></script>
  </body>
  </html>

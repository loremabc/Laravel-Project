<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Pay | Customer-Purchase List</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('css/MainPage.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/Create.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/CreateButton.css')); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Reveal - v4.0.1
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- <iframe src="<?php echo e(asset('music/RunicPower.mp3')); ?>" allow="autoplay" style="display: none"></iframe>
<audio id="player" autoplay loop>
    <source src="<?php echo e(asset('music/RunicPower.mp3')); ?>" type="audio/mp3">
</audio> -->

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:epay.management.21@gmail.com">EPay@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel:+8801869510882">+880 186 510882</a></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/Nafi71340800" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/nafi.king16/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/dauntless_nafi/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/nafi-mahmud-350141185/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="<?php echo e(route('customer.purchaselist')); ?>">E<span>Pay</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="img/logo.png" alt=""></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="<?php echo e(route('customer.create')); ?>">Refer Customer</a></li>
        <li><a class="nav-link scrollto" href="<?php echo e(route('customer.balancecreate')); ?>">Create Balance</a></li>
        <li><a class="nav-link scrollto" href="<?php echo e(route('customer.reviewcreate')); ?>">Create Review</a></li>
        <li><a class="nav-link scrollto" href="<?php echo e(route('customer.customer')); ?>">Home</a></li>
        <li><a class="nav-link scrollto" href="<?php echo e(route('logout.index')); ?>">Logout</a></li>
        <li class="dropdown"><a class="nav-link scrollto" href="#contact"><span><?php echo e(session('username')); ?></span> <i class="bi bi-chevron-down"></i></a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">

    <div class="hero-content" data-aos="fade-up">
      <h2>Total Purchased Bill ৳<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($i['total_purchased']); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><br><span style="color: red; text-decoration:none"><?php echo e(session('username')); ?></span></h2>
      <div>
        <a href="<?php echo e(route('customer.userlist')); ?>" class="btn-get-started scrollto">Profile</a>
        <a href="<?php echo e(route('customer.balancelist')); ?>" class="btn-get-started scrollto">Balance</a>
        <a href="<?php echo e(route('customer.balanceLog')); ?>" class="btn-get-started scrollto">Log</a>
        <a href="<?php echo e(route('customer.reviewlist')); ?>" class="btn-get-started scrollto">Review</a>
        <a href="<?php echo e(route('customer.messagelist')); ?>" class="btn-get-started scrollto">Message</a>
      </div>
    </div>

    <div class="hero-slider swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/1.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/2.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/3.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/4.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('img/hero-carousel/5.jpg');"></div>
      </div>
    </div>

  </section><!-- End Hero Section -->

  <main id="main">
<br>
    <!-- ======= Services Section ======= -->
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Payment</h2>
        </div>

    <section id="contact">
      <div class="container">
 
                <div class="card-body">
				<span class="login100-form-title" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
        You can pay from your account
					</span>

          <table class="table table-striped table-bordered" border="0" style="width: 100%; text-align:center">
        <tr>
            <th>Id&nbsp;&nbsp;</th>
            <th>Username&nbsp;&nbsp;</th>
            <th>Total Purchased Amount&nbsp;&nbsp;</th>
            <th>Action&nbsp;&nbsp;</th>
        </tr>

        <?php for($i=0; $i < count($list); $i++): ?>
        <tr>
            <td><?php echo e($list[$i]['id']); ?></td>
            <td><?php echo e($list[$i]['username']); ?></td>
            <td>৳<?php echo e($list[$i]['total_purchased']); ?></td>
            <td>
                <a href="<?php echo e(route('customer.loan', [$list[$i]['id']])); ?>">Get Loan</a><br>
                <a href="<?php echo e(route('customer.recharge', [$list[$i]['id']])); ?>">Mobile Recharge</a><br>
                <a href="<?php echo e(route('customer.electricitybill', [$list[$i]['id']])); ?>">Electricity Bill</a><br>
                <a href="<?php echo e(route('customer.balancedelete', [$list[$i]['id']])); ?>">Delete</a><br>
                <a href="/E-Pay/home/details/purchase/customer/<?php echo e($list[$i]['id']); ?>">Details</a>
            </td>
        </tr>
        
        </div>
        </div>
        </section>
        <?php endfor; ?>
    </table>
    <br>
    <?php echo e(session('msg')); ?>


      </div>

    <!-- ======= Contact Section ======= -->
    
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Contact to Admin</h2>
          <p><strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong> responses as soon as possible when when we are active. Feel free to discuss with us.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>Dhaka, Bangladesh</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+8801869510882">+880 186 9510882</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:epay.management.21@gmail.com">EPay@gmail.com</a></p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        Copyright  &copy; 2021 | <strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
      -->
        Powered by <a href="https://github.com/sourcebd/Laravel-Project"><strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong> Team</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/swiper/swiper-bundle.min.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('js/MainPage.js')); ?>"></script>

</body>

</html><?php /**PATH F:\13th Semester\ATP 3\Laravel-Project\laratest\resources\views/customer/purchaselist.blade.php ENDPATH**/ ?>
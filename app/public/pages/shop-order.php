<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <!-- Instrux. for Bootstrap 5.3 on this page https://getbootstrap.com/docs/5.3/getting-started/introduction/  -->
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Additional meta tags -->
    <meta name="description" content="Specialize in creating custom website designs for creatives, non-profits, and small businesses.">
    <meta name="author" content="Anne S. Katzeff">
    <link rel="icon" href="../images/images-common/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

     <!-- Custom styles for this template -->
    <link href="../css-custom/ask-custom.css" rel="stylesheet">
    <link href="../css-custom/ask-custom-isotope.css" rel="stylesheet">

    <!-- Google fonts now imported into stylesheet -->

    <!-- our project is using icons from Solid Brands -->
    <link href="../fonts/fontawesome-free-7.1.0-web/css/fontawesome.css" rel="stylesheet" />
    <link href="../fonts/fontawesome-free-7.1.0-web/css/brands.css" rel="stylesheet" />
    <link href="../fonts/fontawesome-free-7.1.0-web/css/solid.css" rel="stylesheet" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TJXHZ9L2');</script>
<!-- End Google Tag Manager -->
     
	  <!-- Cookie Yes CDN -->
	  <!-- Start cookieyes banner --> <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/4d293afb74c2261024a934e6ecbaf1fe/script.js"></script> <!-- End cookieyes banner -->

	<!-- Paypal script -->
	<script src="https://www.paypalobjects.com/ncp/cart/cart.js" data-merchant-id="L4382JETLWMYU"></script>

    <title>ASK Design | Shop - Order</title>
  </head>

  
  <body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJXHZ9L2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 
<!--  secondary nav = full width, centered content -->
<nav class="navbar navbar-expand-lg navbar2" aria-label="secondary nav">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">

      <?php 
      include '../includes/nav2.inc.php'; 
      ?> 

    </div><!-- end of collapse navbar-collapse -->
  </div><!-- end of container-fluid -->
</nav>

<!-- header -->
 
<header>
  <div class="container-xxl">


      <?php 
      include '../includes/brand.inc.php'; 
      ?> 


</div><!-- end of container -->

</header>

<!-- primary nav -->
<nav class="navbar navbar-expand-lg navbar border-bottom" aria-label="primary nav">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>

        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="portgd-rec.php" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Design</li>
                  <li><a class="dropdown-item" href="portgd-rec.php">Recent</a></li>
                  <li><a class="dropdown-item" href="portgd-arch.php">Archives</a></li>
                  <li class="dropdown-header divider"></li>
                  <li class="dropdown-header">Art</li>
                  <li><a class="dropdown-item" href="portart-rec.php">Recent</a></li>
                  <li><a class="dropdown-item" href="portart-lic.php">Licensed</a></li>
                </ul>
        </li>

        <li class="nav-item dropdown"><a class="nav-link active dropdown-toggle" href="shop-cat.php" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="shop-cat.php">Original Art</a></li>
                  <li><a class="dropdown-item" href="shop-cat-sale.php">Sale</a></li>
                  <li><a class="dropdown-item" href="shop-cat-cards.php">Cards</a></li>
                  <li><a class="dropdown-item" href="shop-cat-prints.php">Prints</a></li>
                  <li><a class="dropdown-item" href="shop-cat-tees.php">Tees</a></li>
                  <li><a class="dropdown-item" href="shop-cat-sold.php">Sold/NFS</a></li>
                  <li class="dropdown-header divider"></li>
                  <li><a class="dropdown-item active" aria-current="page" href="shop-order.php">Order</a></li>
                </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="https://www.askdesign.biz/blog">Blog</a></li>
        <li class="nav-item dropdown"><a class="nav-link last dropdown-toggle" href="contact.php" data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="contact.php">Contact Me</a></li>
                  <li><a class="dropdown-item" href="cookie-policy.php">Cookie Policy</a></li>
                  <li><a class="dropdown-item" href="privacy-policy.php">Privacy Policy</a></li>
                </ul>        
        </li>
    </ul>
    </div>
  </div>
</nav>
  

<!-- main -->
<main>
  <div class="container-xxl">

    <section class="page-title-lead">   
          <h2 class="page-title">Shop - Order</h2>
          <h3 class="page lead subhd">Purchase from Anne</h3>

          <p class="page lead">The order forms on this page are for the cards, prints, and tees that you can purchases directly from me. </p>

    </section>

    <section class="content"><!-- content area -->

	  <section class="order-form-section">

    <div class="row"><!-- Cards -->
	  <div class="col-xl-6 col-lg-12 border-right">
      <div class="order-box">

<!-- View Cart -->
<paypal-cart-button data-id="pp-view-cart"></paypal-cart-button>
<script>
  cartPaypal.Cart({ id: "pp-view-cart" })
</script>

<!-- Add to Cart -->
<paypal-add-to-cart-button data-id="J6JYUU7GFXV4U"></paypal-add-to-cart-button>
<script>
  cartPaypal.AddToCart({ id: "J6JYUU7GFXV4U" })
</script>

		  </div><!-- order box -->
	  </div><!-- columns -->

    <div class="col-xl-6 col-lg-12 order-form-list">
      <p><strong>Postcards: </strong>Printed on coated paper, 6”x4-1/4”. Sold in sets of 5 and 10</p>
			<p><strong>Notecards: </strong>Printed on soft-white, smooth, uncoated, recycled paper. Blank inside. A6 size (6”x4-1/2” when folded); includes envelopes. Sold in sets of 10 and 16. </p>
			<p>Be sure to specify the art title and number when filling out the order form. Otherwise, I'll send you a mixed sampler.</p>
    </div><!-- end of list -->

	  </div><!-- row -->

      <div class="divider"></div>

    <div class="row"><!-- Prints -->
	  <div class="col-xl-6 col-lg-12 border-right">
      <div class="order-box">

<!-- View Cart -->
<paypal-cart-button data-id="pp-view-cart"></paypal-cart-button>
<script>
  cartPaypal.Cart({ id: "pp-view-cart" })
</script>

<!-- Add to Cart -->
<paypal-add-to-cart-button data-id="T5JD4BXGE7LLA"></paypal-add-to-cart-button>
<script>
  cartPaypal.AddToCart({ id: "T5JD4BXGE7LLA" })
</script>


		  </div><!-- order box -->
	  </div><!-- columns -->

  <div class="col-xl-6 col-lg-12 order-form-list">
      <p><strong>Prints: </strong>All giclees are fine art inkjet prints, on archival Crescent Velvet Art paper, sold with standard-size acid-free mat. All are available in the Small 5”x7” size. Only 2 paintings are available in the Large 11”x14” size: Celebration (#0607) and Butterfly Garden (#0605). Be sure to specify the art title and number of the print(s) you want when filling out the order form.</p>

  </div><!-- end of list -->

	  </div><!-- row -->

      <div class="divider"></div>

    <div class="row"><!-- Tees -->
	  <div class="col-xl-6 col-lg-12 border-right">
      <div class="order-box">

<!-- View Cart -->
<paypal-cart-button data-id="pp-view-cart"></paypal-cart-button>
<script>
  cartPaypal.Cart({ id: "pp-view-cart" })
</script>

<!-- Add to Cart -->
<paypal-add-to-cart-button data-id="TMNS8DUYRFF8E"></paypal-add-to-cart-button>
<script>
  cartPaypal.AddToCart({ id: "TMNS8DUYRFF8E" })
</script>



		  </div><!-- order box -->
	  </div><!-- columns -->

  <div class="col-xl-6 col-lg-12 order-form-list">
      <p>Two T-shirts can be purchased directly from me. My illustrations are paired with one of his famous quotes. I designed these T-shirts to honor Henry David Thoreau; they initially sold exclusively at the Walden Pond State Reservation shop. Now, you can get them here!</p>


  </div><!-- end of list -->

	  </div><!-- row -->

        <div class="divider"></div>

    <div class="row justify-content-center original-art-note"><!-- Original Art -->
	  <div class="col-xl-6 col-lg-12">
	  <h3 class="page lead subhd text-center">Original Artwork</h3>
    <p class="page lead text-center">To purchase original artwork, please go to my <a href="contact.php">Contact</a> page.</p>
	  </div><!-- columns -->


	  </div><!-- row -->

	  </section><!-- paypal carts -->



	<section class="page-bottom-lead">   

	    <h3 class="page lead subhd">Purchase from FAA Shop</h3>
          <p class="page lead">If the item you want isn't displayed on my website, check out my <a href="https://fineartamerica.com/profiles/anne-katzeff/shop">Fine Art America shop</a>! You'll find additional choices. All sorts of beautiful reproductions are in my shop: cards, prints, masks, tees, mugs, and more! </p>
	</section>

    
    </section><!-- END OF content -->

  </div><!-- END OF container-xxl -->
</main><!-- END OF MAIN -->

<section class="subscribe-section"><!-- subscribe -->
  <div class="container-fluid">
	  <div class="row justify-content-center">
		  <div class="col-xl-6 col-lg-8 col-sm-12">

      <?php 
      include '../includes/subscribe.inc.php'; 
      ?> 

      </div><!-- end of col -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</section><!-- end of subscribe -->

<!-- footer -->
<footer><!-- footer bottom -->
  <section class="container-fluid footer-bottom-content"><!--- footer-bottom-content -->
      <?php 
      include '../includes/footer-bottom.inc.php'; 
      ?> 

  </section><!-- end of section -->

  <nav class="navbar navbar-expand-lg navbar2" aria-label="secondary nav">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">

      <?php 
      include '../includes/nav2.inc.php'; 
      ?> 

    </div><!-- end of navbar -->
  </div><!-- end of container-fluid -->
</nav>
  
</footer><!-- end of footer bottom -->




    <!-- Bootstrap Javascript bundle - goes before the closing body tag -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    <!-- BS Lightbox required scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.5/dist/index.bundle.min.js"></script>

    <!-- Isotope for filtering and loading images -->
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

	<script src="../js/askgalleryscript.js"></script>

  </body>
</html>
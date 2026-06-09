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

  	<!-- Global site tag (gtag.js) - Google Analytics GA4 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CLYRB4VKST"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-CLYRB4VKST');
    </script>
  	<!-- end of Global site tag (gtag.js) - Google Analytics GA4 -->

	<!-- Paypal script -->
  <script src="https://www.paypalobjects.com/ncp/cart/cart.js" data-merchant-id="L4382JETLWMYU"></script>

    <title>ASK Design | Shop - Tees</title>
  </head>

  
  <body>
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
                  <li><a class="dropdown-item active" aria-current="page" href="shop-cat-tees.php">Tees</a></li>
                  <li><a class="dropdown-item" href="shop-cat-sold.php">Sold/NFS</a></li>
                  <li class="dropdown-header divider"></li>
                  <li><a class="dropdown-item" href="shop-order.php">Order</a></li>
                </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="https:www.askdesign.biz/blog">Blog</a></li>
        <li class="nav-item"><a class="nav-link last" href="contact.php">Contact</a></li>
    </ul>
    </div>
  </div>
</nav>
  

<!-- main -->
<main>
  <div class="container-xxl">

    <section class="page-title-lead">   
          <h2 class="page-title">Shop - Tees</h2>
          <h3 class="page lead subhd">Purchase from Anne</h3>

          <p class="page lead">The two T-shirts displayed on this page can be purchased directly from me. My illustrations are paired with one of his famous quotes. I designed these T-shirts to honor Henry David Thoreau; they initially sold exclusively at the Walden Pond State Reservation shop. Now, you can get them here!</p>
            
          <p class="page lead">Please use the order form at the bottom of the page.</p>

	        <p><em>NOTE: click on the thumbnail image to see it enlarged in a slideshow!</em></p>
    </section>

    <section class="content"><!-- content area -->

    <div id="portart" class="gallery row">

    <div class="col-12"><!-- columns -->

      <div class="row mb-4">

      <div class="col-sm-4 mb-4 gallery-item landscapes">
  	    <a href="../gallery/images/portart/portil0902-drums3f-kiwitee.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="3 DRUMS (0902) Digital<br>
		    &bull; Original Art: 8.5&rdquo;x11&rdquo;; licensed for T-shirt.">
		    <img src="../gallery/images/portart/portil0902-drums3f-kiwitee-thumbnail.jpg" class="img-fluid" alt="Thoreau tee: 3 Drums">
		    <h6 class="gallery-caption text-center mt-2">Thoreau: 3 Drums</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals">
  	    <a href="../gallery/images/portart/portil0901-childchip-skyblue.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MIRACLE EYES (0901) Digital<br>
		    &bull; Original Art: 8.5&rdquo;x11&rdquo;; licensed for T-shirt.">
		    <img src="../gallery/images/portart/portil0901-childchip-skyblue-thumbnail.jpg" class="img-fluid" alt="Thoreau tee: Miracle Eyes">
		    <h6 class="gallery-caption text-center mt-2">Thoreau: Miracle Eyes</h6>
	      </a>
      </div>


</div><!-- END OF row mb-4-->


    </div><!-- END OF col-12 -->

    </div><!-- END OF portart ID and gallery row -->





	<section class="order-form-section">
    <div class="row justify-content-center">
	  <div class="col-xl-5 col-lg-8 col-sm-10">

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


		</div><!-- contact box -->
	</div><!-- columns -->
	</div><!-- row -->
	</section><!-- paypal cart -->



	<section class="page-bottom-lead">   

	    <h3 class="page lead subhd">Purchase from FAA Shop</h3>
          <p class="page lead">Check out my Fine Art America shop, where you'll find a lot more to choose from. All sorts of Tees and other kinds of reproductions are in my shop: cards, prints, masks, mugs, and more! If the art you like isn't already reproduced, special arrangements can be made, so <a href="contact.php">Contact</a> me!</p>

			<p><a href="https://fineartamerica.com/profiles/anne-katzeff/shop"><button type="button" class="btn btn-outline-primary btn-lg">BROWSE ANNE'S FAA SHOP</button></a></p>

	</section>

    
    </section><!-- END OF content -->

  </div><!-- END OF container-xxl -->
</main><!-- END OF MAIN -->

<section class="subscribe-section"><!-- subscribe -->
  <div class="container-fluid">
	  <div class="row justify-content-center">
		  <div class="col-xl-5 col-lg-8 col-sm-10">

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
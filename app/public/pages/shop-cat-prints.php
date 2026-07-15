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
     
	  <!-- Cookie Yes CDN -->
	  <!-- Start cookieyes banner --> <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/4d293afb74c2261024a934e6ecbaf1fe/script.js"></script> <!-- End cookieyes banner -->

	<!-- Paypal script -->
  <script src="https://www.paypalobjects.com/ncp/cart/cart.js" data-merchant-id="L4382JETLWMYU"></script>

    <title>ASK Design | Shop - Prints</title>
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
                  <li><a class="dropdown-item active" aria-current="page" href="shop-cat-prints.php">Prints</a></li>
                  <li><a class="dropdown-item" href="shop-cat-tees.php">Tees</a></li>
                  <li><a class="dropdown-item" href="shop-cat-sold.php">Sold/NFS</a></li>
                  <li class="dropdown-header divider"></li>
                  <li><a class="dropdown-item" href="shop-order.php">Order</a></li>
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
          <h2 class="page-title">Shop - Prints</h2>
          <h3 class="page lead subhd">Purchase from Anne</h3>

          <p class="page lead">The giclee prints displayed on this page can be purchased directly from me. These are beautiful reproductions of my most popular, early paintings. Please use the order form at the bottom of the page.</p>

			<div class="row page lead list">
        	<p><strong>Prints: </strong>All giclees are fine art inkjet prints, on archival Crescent Velvet Art paper, sold with acid-free mat. Most are available in the Small 5”x7” size. Only 2 paintings are available in the Large 11”x14” size: Celebration (#0607) and Butterfly Garden (#0605). Be sure to specify the art title and number of the print(s) you want when filling out the order form.</p>
    	</div><!-- end of page lead list -->

	        <p><em>NOTE: click on the thumbnail image to see it enlarged in a slideshow!</em></p>
    </section>

    <section class="content"><!-- content area -->
      <!-- Filtering UI -->
      <!-- Isotope Grid Container -->
      <div class="btn-group filters-button-group mb-4" role="group" aria-label="Design filters">
        <button type="button" class="btn btn-outline-primary is-checked" data-filter="*">all</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".landscapes">landscapes</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".flowersplants">flowers and plants</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".animals">animals</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".pastel">pastel</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".pencil">colored pencil</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".small">small</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".lg">large</button>

      </div><!-- END OF btn-group -->

    <div id="portart" class="gallery row">

    <div class="col-12"><!-- columns -->

      <div class="row mb-4">

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel small">
  	    <a href="../gallery/images/portart/portil0621-lenoxaudpond3.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LENOX AUDUBON POND 3 (0621) Pastel <br>
		    Lenox, MA.<br>
    		&bull; Original Art: 16&rdquo;x12&rdquo;; with Mat: 20&rdquo;x16&rdquo;, $130.">
		    <img src="../gallery/images/portart/portil0621-lenoxaudpond3-thumbnail.jpg" class="img-fluid" alt="pond at Lenox Audubon sanctuary">
		    <h6 class="gallery-caption text-center mt-2">Lenox Audubon Pond #3<br>Small Print</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel small">
  	    <a href="../gallery/images/portart/portil0618-onemesa.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ONE MESA (0618) Pastel<br>
		    Pt. Reyes, CA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0618-onemesa-thumbnail.jpg" class="img-fluid" alt="B&B at Pt. Reyes">
		    <h6 class="gallery-caption text-center mt-2">One Mesa<br>Small Print</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel small">
  	    <a href="../gallery/images/portart/portil0616-oceandaybreak.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OCEAN DAYBREAK (0616) Pastel<br>
		    Provincetown, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0616-oceandaybreak-thumbnail.jpg" class="img-fluid" alt="oceandaybreak at Ptown">
		    <h6 class="gallery-caption text-center mt-2">Ocean Daybreak<br>Small Print</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel small">
  	    <a href="../gallery/images/portart/portil0610-omegaafternoon.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OMEGA AFTERNOON (0610) Pastel<br>
		    Rhinebeck, NY.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0610-omegaafternoon-thumbnail.jpg" class="img-fluid" alt="afternoon at Omega">
		    <h6 class="gallery-caption text-center mt-2">Omega Afternoon<br>Small Print</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel small">
  	    <a href="../gallery/images/portart/portil0609-omegamorning.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OMEGA MORNING (0609) Pastel<br>
		    Rhinebeck, NY.<br>
    		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0609-omegamorning-thumbnail.jpg" class="img-fluid" alt="morning at Omega">
		    <h6 class="gallery-caption text-center mt-2">Omega Morning<br>
				Small Print</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel lg">
  	    <a href="../gallery/images/portart/portil0607-celebration.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CELEBRATION (0607) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0607-celebration-thumbnail.jpg" class="img-fluid" alt="celebration artwork">
		    <h6 class="gallery-caption text-center mt-2">Celebration<br>
				Large Print Only</h6>
	      </a>
      </div>


       <div class="col-sm-4 mb-4 gallery-item landscapes pastel small lg">
  	    <a href="../gallery/images/portart/portil0605-bflygarden.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BUTTERFLY GARDEN (0605) Pastel<br>
		    Cambridge, MA.<br>
    		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0605-bflygarden-thumbnail.jpg" class="img-fluid" alt="butterflygarden">
		    <h6 class="gallery-caption text-center mt-2">Butterfly Garden<br>
        Small & Large Prints</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel small">
  	    <a href="../gallery/images/portart/portil0604-1stlight.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FIRST LIGHT (0604) Pastel<br>
        Wellfleet, MA.<br>
        &bull; Original Art: 17.75&rdquo;x12.75&rdquo;; with Mat &amp; Frame: 20&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0604-1stlight-thumbnail.jpg" class="img-fluid" alt="FirstLight">
		    <h6 class="gallery-caption text-center mt-2">First Light<br>Small Print</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel small">
  	    <a href="../gallery/images/portart/portil0520-sanctuary.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SANCTUARY (0520) Pastel<br>
        Lenox, MA <br>
        &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0520-sanctuary-thumbnail.jpg" class="img-fluid" alt="purplestrife">
		    <h6 class="gallery-caption text-center mt-2">Sanctuary<br>Small print</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel small">
  	    <a href="../gallery/images/portart/portil0513-wellfleetwaves.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WELLFLEET WAVES (0513) Pastel<br>
        &bull; Original Art: 12.75&rdquo;x10&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0513-wellfleetwaves-thumbnail.jpg" class="img-fluid" alt="WellfleetWaves">
		    <h6 class="gallery-caption text-center mt-2">Wellfleet Waves<br>
          Small Print</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel notecard">
  	    <a href="../gallery/images/portart/portil0406-antelopecanyon.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTELOPE CANYON 1 (0406) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat &amp; Frame: 12&rdquo;x16&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0406-antelopecanyon-thumbnail.jpg" class="img-fluid" alt="Antelope Canyon1 - art series">
		    <h6 class="gallery-caption text-center mt-2">Antelope Canyon #1<br>
				Small Print</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel small">
  	    <a href="../gallery/images/portart/portil0318-infinity3.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 3 (0318) Pastel<br>
    		&bull; Original Art: 18&rdquo;x12&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0318-infinity3-thumbnail.jpg" class="img-fluid" alt="Infinity art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #3<br>Small Print</h6>
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
<paypal-add-to-cart-button data-id="T5JD4BXGE7LLA"></paypal-add-to-cart-button>
<script>
  cartPaypal.AddToCart({ id: "T5JD4BXGE7LLA" })
</script>

		</div><!-- order box -->
	</div><!-- columns -->
	</div><!-- row -->
	</section><!-- paypal cart -->



	<section class="page-bottom-lead">   

	    <h3 class="page lead subhd">Purchase from FAA Shop</h3>
          <p class="page lead">If the print you want isn't displayed on this page, check out my <a href="https://fineartamerica.com/profiles/anne-katzeff/shop">Fine Art America shop</a>! You'll find additional choices. All sorts of beautiful reproductions are in my shop: cards, prints, masks, tees, mugs, and more!</p>

			<p><a href="https://fineartamerica.com/profiles/anne-katzeff/shop"><button type="button" class="btn btn-outline-primary btn-lg">ANNE'S FAA SHOP</button></a></p>

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
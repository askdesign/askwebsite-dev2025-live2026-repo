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




    <title>ASK Design | Shop - Cards</title>
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
                  <li><a class="dropdown-item active" aria-current="page" href="shop-cat-cards.php">Cards</a></li>
                  <li><a class="dropdown-item" href="shop-cat-prints.php">Prints</a></li>
                  <li><a class="dropdown-item" href="shop-cat-tees.php">Tees</a></li>
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
          <h2 class="page-title">Shop - Cards</h2>
          <h3 class="page lead subhd">Purchase from Anne</h3>

          <p class="page lead">The cards displayed on this page can be purchased directly from me. These are beautiful reproductions of my most popular, early paintings. Please use the order form at the bottom of the page.</p>

			<div class="row page lead list">
        	<p><strong>Postcards: </strong>Printed on coated paper, 6”x4-1/4”. Sold in sets of 5 and 10</p>
			<p><strong>Notecards: </strong>Printed on soft-white, smooth, uncoated, recycled paper. Blank inside. A6 size (6”x4-1/2” when folded); includes envelopes. Sold in sets of 10 and 15. </p>
			<p>Be sure to specify the art title and number when filling out the order form. Otherwise, I'll send you a mixed sampler.</p>
    		</div><!-- end of page lead list -->

          <h3 class="page lead subhd">Purchase from FAA Shop</h3>
          <p class="page lead">If the card you want isn't displayed on this page, check out my Fine Art America shop! You'll find a lot more cards to choose from. All sorts of beautiful reproductions are in my shop: cards, prints, masks, tees, mugs, and more! If the art you like isn't already reproduced, special arrangements can be made, so <a href="contact.php">Contact</a> me!</p>

			<div class="row page lead list">
			<p><strong>Notecards: </strong>Printed on 110 lb. paper, coated with a semi-gloss finish. Blank inside has a matte white finish; can be customized with a text message. 5”x7” in size; includes white envelope.</p>
			<p><a href="https://fineartamerica.com/profiles/anne-katzeff/shop"><button type="button" class="btn btn-outline-primary btn-lg">BROWSE ANNE'S FAA SHOP</button></a></p>

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
        <button type="button" class="btn btn-outline-primary" data-filter=".postcard">postcard</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".notecard">notecard</button>
      </div><!-- END OF btn-group -->

    <div id="portart" class="gallery row">

    <div class="col-12"><!-- columns -->

      <div class="row mb-4">

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel notecard">
  	    <a href="../gallery/images/portart/portil0805-jardindejuillet.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="JARDIN DE JUILLET (0805) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0805-jardindejuillet-thumbnail.jpg" class="img-fluid" alt="A garden visit in hot July">
		    <h6 class="gallery-caption text-center mt-2">Jardin de Juillet<br>
				Notecard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel postcard">
  	    <a href="../gallery/images/portart/portil0716-return.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="RETURN (0716) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0716-return-thumbnail.jpg" class="img-fluid" alt="Fond Return to Lenox">
		    <h6 class="gallery-caption text-center mt-2">Return<br>
				Postcard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel notecard">
  	    <a href="../gallery/images/portart/portil0714-dunesatdawn.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DUNES AT DAWN (0714) Pastel<br>
		    Provincetown, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0714-dunesatdawn-thumbnail.jpg" class="img-fluid" alt="Provincetown Dunes at Dawn">
		    <h6 class="gallery-caption text-center mt-2">Dunes at Dawn<br>
				Notecard</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel notecard">
  	    <a href="../gallery/images/portart/portil0707-azaleasinmay.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AZALEAS IN MAY (0707) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0707-azaleasinmay-thumbnail.jpg" class="img-fluid" alt="May Azaleas">
		    <h6 class="gallery-caption text-center mt-2">Azaleas in May<br>
				Notecard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants paste notecard">
  	    <a href="../gallery/images/portart/portil0620-flowersymphony-c2018.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FLOWER SYMPHONY (0620) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Licensed for Book Cover <br>
		    &bull; Original Art: 14&rdquo;x18&rdquo;; with Mat &amp; Frame: 18&rdquo;x22&rdquo;, $315.">
		    <img src="../gallery/images/portart/portil0620-flowersymphony-c2018-thumbnail.jpg" class="img-fluid" alt="Flower Symphony in Lenox">
		    <h6 class="gallery-caption text-center mt-2">Flower Symphony<br>
				Notecard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel postcard">
  	    <a href="../gallery/images/portart/portil0615-heronshome.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HERONS' HOME (0615) Pastel<br>
		    Wellfleet, MA.<br>
		    &bull; Original Art: 16&rdquo;x12&rdquo;; with Mat &amp; Frame: 20&rdquo;x16&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0615-heronshome-thumbnail.jpg" class="img-fluid" alt="Heron's Home in Wellfleet">
		    <h6 class="gallery-caption text-center mt-2">Heron's Home<br>
				Postcard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel notecard">
  	    <a href="../gallery/images/portart/portil0609-omegamorning.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OMEGA MORNING (0609) Pastel<br>
		    Rhinebeck, NY.<br>
    		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0609-omegamorning-thumbnail.jpg" class="img-fluid" alt="morning at Omega">
		    <h6 class="gallery-caption text-center mt-2">Omega Morning<br>
				Notecard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel notecard">
  	    <a href="../gallery/images/portart/portil0607-celebration.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CELEBRATION (0607) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0607-celebration-thumbnail.jpg" class="img-fluid" alt="celebration artwork">
		    <h6 class="gallery-caption text-center mt-2">Celebration<br>
				Notecard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel notecard">
  	    <a href="../gallery/images/portart/portil0508-sundance.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SUN DANCE (0508) Pastel<br>
        Mt. Auburn Cemetery, Cambridge, MA.<br>
        &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0508-sundance-thumbnail.jpg" class="img-fluid" alt="Sundance">
		    <h6 class="gallery-caption text-center mt-2">Sun Dance<br>
				Notecard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel notecard">
  	    <a href="../gallery/images/portart/portil0506-epiphany.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="KRIPALU EPIPHANY (0506) Pastel<br>
        Lenox, MA.<br>
        &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0506-epiphany-thumbnail.jpg" class="img-fluid" alt="Epiphany artwork">
		    <h6 class="gallery-caption text-center mt-2">Kripalu Epiphany<br>
				Notecard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel notecard">
  	    <a href="../gallery/images/portart/portil0406-antelopecanyon.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTELOPE CANYON 1 (0406) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat &amp; Frame: 12&rdquo;x16&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0406-antelopecanyon-thumbnail.jpg" class="img-fluid" alt="Antelope Canyon1 - art series">
		    <h6 class="gallery-caption text-center mt-2">Antelope Canyon #1<br>
				Notecard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pencil notecard">
  	    <a href="../gallery/images/portart/portil0404-greetings-colpencil.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GREETINGS (0404) Colored Pencil<br>
    		&bull; Original Art: 5&rdquo;x8&rdquo;; with Mat &amp; Frame: 8&rdquo;x10&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0404-greetings-colpencil-thumbnail.jpg" class="img-fluid" alt="3 Dolphins greeting">
		    <h6 class="gallery-caption text-center mt-2">Greetings<br>
				Notecard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals flowersplants pencil notecard">
  	    <a href="../gallery/images/portart/portil0401-weareallconnected.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WE ARE ALL CONNECTED (0401) Colored Pencil <br>
    		&bull; Original Art: 9&rdquo;x9&rdquo;; with Mat &amp; Frame: 12&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0401-weareallconnected-thumbnail.jpg" class="img-fluid" alt="Connected project">
		    <h6 class="gallery-caption text-center mt-2">We Are All Connected<br>
				Notecard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel notecard">
  	    <a href="../gallery/images/portart/portil0320-infinity5.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 5 / FOREVER PEACE (0320) Pastel <br>
    		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0320-infinity5-thumbnail.jpg" class="img-fluid" alt="Infinity2 art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #5<br>
				Notecard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel notecard">
  	    <a href="../gallery/images/portart/portil0319-infinity4.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 4 / THIRD EYE (0319) Pastel <br>
    		&bull; Original Art: 18&rdquo;x12&rdquo;; with Mat: 24&rdquo;x18&rdquo;, $100.">
		    <img src="../gallery/images/portart/portil0319-infinity4-thumbnail.jpg" class="img-fluid" alt="Infinity art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #4<br>
				Notecard</h6>
	      </a>
      </div>
 
<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item animals pastel notecard">
  	    <a href="../gallery/images/portart/portil0318-infinity3.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 3 (0318) Pastel<br>
    		&bull; Original Art: 18&rdquo;x12&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0318-infinity3-thumbnail.jpg" class="img-fluid" alt="Infinity art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #3<br>
				Notecard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pencil notecard">
  	    <a href="../gallery/images/portart/portil0317-infinity2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 2 (0317) Colored Pencil <br>
    		&bull; Original Art:  11.5&rdquo;x8.5&rdquo;; with Mat: 16&rdquo;x12&rdquo;, $100.">
		    <img src="../gallery/images/portart/portil0317-infinity2-thumbnail.jpg" class="img-fluid" alt="Infinity2 art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #2<br>
				Notecard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel notecard">
  	    <a href="../gallery/images/portart/portil0316-infinity.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY (0316) Pastel<br>
		    &bull; Licensed for book cover <br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0316-infinity-thumbnail.jpg" class="img-fluid" alt="Infinity art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity<br>
				Notecard</h6>
	      </a>
      </div>


</div><!-- END OF row mb-4-->


    </div><!-- END OF col-12 -->

    </div><!-- END OF portart-rec ID and gallery row -->
    
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
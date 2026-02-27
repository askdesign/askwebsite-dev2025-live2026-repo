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




    <title>ASK Design | Art Portfolio - Shop Cat All</title>
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

    </div>
  </div>
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

        <li class="nav-item dropdown"><a class="nav-link active dropdown-toggle" href="portgd-rec.php" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Design</li>
                  <li><a class="dropdown-item" href="portgd-rec.php">Recent</a></li>
                  <li><a class="dropdown-item" href="portgd-arch.php">Archives</a></li>
                  <li class="dropdown-header divider"></li>
                  <li class="dropdown-header">Art</li>
                  <li><a class="dropdown-item active" href="portart-rec.php">Recent</a></li>
                  <li><a class="dropdown-item" href="#">Archives</a></li>
                </ul>
        </li>

        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="shop-cat.php" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="shop-cat.php">Original Art</a></li>
                  <li><a class="dropdown-item" href="shop-cat-sale.php">Sale</a></li>
                  <li><a class="dropdown-item" href="shop-cat-cards.php">Cards</a></li>
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
          <h2 class="page-title">Portfolio - Art - Shop Cat All</h2>
          <h3 class="page lead subhd">Recent Art Work</h3>
          <p class="page lead">These are samples of my recent art and illustration work.</p>
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
        <button type="button" class="btn btn-outline-primary" data-filter=".watercolor">watercolor</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".penandink">pen and ink</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".pencil">colored pencil</button>
      </div>

    <div id="portart-rec" class="gallery row">

    <div class="col-12"><!-- columns -->

      <div class="row mb-4">

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0706-heartofspring.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HEART OF SPRING (0706) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0706-heartofspring.jpg" class="img-fluid" alt="Spring Hearts shapes in bushes">
		    <h6 class="gallery-caption text-center mt-2">Heart of Spring</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil0705-orchid.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ORCHID (0705) Colored Pencil<br>
		    &bull; Original Art: 4&rdquo;x5.5&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0705-orchid.jpg" class="img-fluid" alt="Orchid">
		    <h6 class="gallery-caption text-center mt-2">Orchid</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0622-evergreen.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="EVER GREEN (0622) Pastel &amp; Gouache <br>
		    Lenox, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0622-evergreen.jpg" class="img-fluid" alt="Evergreens at Kripalu">
		    <h6 class="gallery-caption text-center mt-2">Evergreen</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0621-lenoxaudpond3.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LENOX AUDUBON POND 3 (0621) Pastel <br>
		    Lenox, MA.<br>
    		&bull; Original Art: 16&rdquo;x12&rdquo;; with Mat: 20&rdquo;x16&rdquo;, $130.">
		    <img src="../gallery/images/portart/portil0621-lenoxaudpond3.jpg" class="img-fluid" alt="pond at Lenox Audubon sanctuary">
		    <h6 class="gallery-caption text-center mt-2">Lenox Audubon Pond #3</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0620-flowersymphony.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FLOWER SYMPHONY (0620) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Licensed for Book Cover <br>
		    &bull; Original Art: 14&rdquo;x18&rdquo;; with Mat &amp; Frame: 18&rdquo;x22&rdquo;, $315.">
		    <img src="../gallery/images/portart/portil0620-flowersymphony.jpg" class="img-fluid" alt="Flower Symphony in Lenox">
		    <h6 class="gallery-caption text-center mt-2">Flower Symphony</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0619-fairfaxredwoods.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FAIRFAX REDWOODS (0619) Pastel<br>
		    &bull; Original Art: 7&rdquo;x5&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0619-fairfaxredwoods.jpg" class="img-fluid" alt="Park in Fairfax, CA">
		    <h6 class="gallery-caption text-center mt-2">Fairfax Redwoods</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0618-onemesa.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ONE MESA (0618) Pastel<br>
		    Pt. Reyes, CA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, <strong>SOLD.">
		    <img src="../gallery/images/portart/portil0618-onemesa.jpg" class="img-fluid" alt="B&B at Pt. Reyes">
		    <h6 class="gallery-caption text-center mt-2">One Mesa</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0617-ptreyesbeach.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PT. REYES BEACH (0617) Pastel<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 11&rdquo;x14&rdquo; SOLD.">
		    <img src="../gallery/images/portart/portil0617-ptreyesbeach.jpg" class="img-fluid" alt="beach at Pt. Reyes">
		    <h6 class="gallery-caption text-center mt-2">Pt. Reyes Beach</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0616-oceandaybreak.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OCEAN DAYBREAK (0616) Pastel<br>
		    Provincetown, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0616-oceandaybreak.jpg" class="img-fluid" alt="oceandaybreak at Ptown">
		    <h6 class="gallery-caption text-center mt-2">Ocean Daybreak</h6>
	      </a>
      </div>


<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pencil">
  	    <a href="../gallery/images/portart/portil0615-heronshome.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HERONS' HOME (0615) Pastel<br>
		    Wellfleet, MA.<br>
		    &bull; Original Art: 16&rdquo;x12&rdquo;; with Mat &amp; Frame: 20&rdquo;x16&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0615-heronshome.jpg" class="img-fluid" alt="Heron's Home in Wellfleet">
		    <h6 class="gallery-caption text-center mt-2">Heron's Home</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0614-iris4iris.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="IRIS FOR IRIS (0614) Pastel<br>
		    &bull; Original Art: 8&rdquo;x10&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0614-iris4iris.jpg" class="img-fluid" alt="Iris art for friend">
		    <h6 class="gallery-caption text-center mt-2">Iris for Iris</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0613-beautifultree.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BEAUTIFUL TREE (0613) Pastel<br>
		    Rhinebeck, NY.<br>
    		&bull; Original Art: 9&rdquo;x12&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0613-beautifultree.jpg" class="img-fluid" alt="beautiful tree at Omega">
		    <h6 class="gallery-caption text-center mt-2">Beautiful Tree</h6>
	      </a>
      </div>


<!-- end of row -->

       <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil0611-iris.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="IRIS (0611) Colored Pencil<br>
    		&bull; Original Art: 3.5&rdquo;x5.5&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0611-iris.jpg" class="img-fluid" alt="iris artwork">
		    <h6 class="gallery-caption text-center mt-2">Iris</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0610-omegaafternoon.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OMEGA AFTERNOON (0610) Pastel<br>
		    Rhinebeck, NY.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0610-omegaafternoon.jpg" class="img-fluid" alt="afternoon at Omega">
		    <h6 class="gallery-caption text-center mt-2">Omega Afternoon</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0609-omegamorning.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OMEGA MORNING (0609) Pastel<br>
		    Rhinebeck, NY.<br>
    		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0609-omegamorning.jpg" class="img-fluid" alt="morning at Omega">
		    <h6 class="gallery-caption text-center mt-2">Omega Morning</h6>
	      </a>
      </div>


<!-- end of row -->
       
      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0608-beardediris.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BEARDED IRIS (0608) Pastel<br>
		    Cambridge, MA.<br>
    		&bull; Original Art: 5&rdquo;x7&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0608-beardediris.jpg" class="img-fluid" alt="beardediris">
		    <h6 class="gallery-caption text-center mt-2">Bearded Iris</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0607-celebration.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CELEBRATION (0607) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0607-celebration.jpg" class="img-fluid" alt="celebration artwork">
		    <h6 class="gallery-caption text-center mt-2">Celebration</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0606-bridgespecpond.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SPECTACLE POND (0606) Pastel<br>
        Mt. Auburn Cemetery, Cambridge, MA.<br>
        &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $30.">
		    <img src="../gallery/images/portart/portil0606-bridgespecpond.jpg" class="img-fluid" alt="spectaclepond bridge">
		    <h6 class="gallery-caption text-center mt-2">Spectacle Pond</h6>
	      </a>
      </div>


<!-- end of row -->
       

       <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0605-bflygarden.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BUTTERFLY GARDEN (0605) Pastel<br>
		    Cambridge, MA.<br>
    		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0605-bflygarden.jpg" class="img-fluid" alt="butterflygarden">
		    <h6 class="gallery-caption text-center mt-2">Butterfly Garden</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0604-1stlight.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FIRST LIGHT (0604) Pastel<br>
        Wellfleet, MA.<br>
        &bull; Original Art: 17.75&rdquo;x12.75&rdquo;; with Mat &amp; Frame: 20&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0604-1stlight.jpg" class="img-fluid" alt="FirstLight">
		    <h6 class="gallery-caption text-center mt-2">First Light</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pencil">
  	    <a href="../gallery/images/portart/portil0601-healinglight.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HEALING LIGHT (0601) Colored Pencil<br>
        &bull; Original Art: 5&rdquo;x4.75&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0601-healinglight.jpg" class="img-fluid" alt="healinglight">
		    <h6 class="gallery-caption text-center mt-2">Healing Light</h6>
	      </a>
      </div>


<!-- end of row -->
     
      

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0522-kripaluautumn.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="KRIPALU AUTUMN (0522) Pastel<br>
        Lenox, MA.<br>
        &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0522-kripaluautumn.jpg" class="img-fluid" alt="Kripalu autumn colors">
		    <h6 class="gallery-caption text-center mt-2">Kripalu Autumn</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0521-solitude.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SOLITUDE (0521) Pastel<br>
        Lenox, MA.<br>
        &bull; Original Art: 16&rdquo;x12&rdquo;; with Mat &amp; Frame: 20&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0521-solitude.jpg" class="img-fluid" alt="Solitary tree">
		    <h6 class="gallery-caption text-center mt-2">Solitude</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0520-sanctuary.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SANCTUARY (0520) Pastel<br>
        Lenox, MA <br>
        &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0520-sanctuary.jpg" class="img-fluid" alt="purplestrife">
		    <h6 class="gallery-caption text-center mt-2">Sanctuary</h6>
	      </a>
      </div>


<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0517-spiritmtn.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SPIRIT MOUNTAIN (0517) Pastel<br>
        Lenox, MA.<br>
        &bull; Original Art: 10&rdquo;x10&rdquo;; with Mat: 12&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0517-spiritmtn.jpg" class="img-fluid" alt="spiritmtn">
		    <h6 class="gallery-caption text-center mt-2">Spirit Mountain</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0513-wellfleetwaves.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WELLFLEET WAVES (0513) Pastel<br>
        &bull; Original Art: 12.75&rdquo;x10&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0513-wellfleetwaves.jpg" class="img-fluid" alt="WellfleetWaves">
		    <h6 class="gallery-caption text-center mt-2">Wellfleet Waves</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0512-purplestrife.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PURPLE STRIFE (0512) Pastel<br>
        Wellesley, MA <br>
        &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0512-purplestrife.jpg" class="img-fluid" alt="purplestrife">
		    <h6 class="gallery-caption text-center mt-2">Purple Strife</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0511-yellowliles.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="YELLOW LILIES (0511) Pastel<br>
        Mt. Auburn Cemetery, Cambridge, MA.<br>
        &bull; Original Art: 18&rdquo;x12.5&rdquo;; with Mat: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0511-yellowliles.jpg" class="img-fluid" alt="yellowlilies">
		    <h6 class="gallery-caption text-center mt-2">Yellow Lilies</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0510-willowpondpath.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WILLOW POND PATH (0510) Pastel<br>
        Mt. Auburn Cemetery, Cambridge, MA.<br>
        &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0510-willowpondpath.jpg" class="img-fluid" alt="willowpondpath">
		    <h6 class="gallery-caption text-center mt-2">Willow Pond Path</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0509-path1atmac.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PATH 1 AT MOUNT AUBURN (0509) Pastel<br>
        &bull; Original Art: 18&rdquo;x12.5&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0509-path1atmac.jpg" class="img-fluid" alt="path at mac">
		    <h6 class="gallery-caption text-center mt-2">Path 1 at Mount Auburn</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0508-sundance.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SUN DANCE (0508) Pastel<br>
        Mt. Auburn Cemetery, Cambridge, MA.<br>
        &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0508-sundance.jpg" class="img-fluid" alt="Sundance">
		    <h6 class="gallery-caption text-center mt-2">Sun Dance</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0507-cactuspose.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CACTUS POSE (0507) Pastel<br>
        &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat: 24&rdquo;x18&rdquo;, $120.">
		    <img src="../gallery/images/portart/portil0507-cactuspose.jpg" class="img-fluid" alt="cactuspose">
		    <h6 class="gallery-caption text-center mt-2">Cactus Pose</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0506-epiphany.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="KRIPALU EPIPHANY (0506) Pastel<br>
        Lenox, MA.<br>
        &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0506-epiphany.jpg" class="img-fluid" alt="Epiphany artwork">
		    <h6 class="gallery-caption text-center mt-2">Kripalu Epiphany</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0505-aftertherain.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AFTER THE RAIN (0505) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat  &amp; Frame: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0505-aftertherain.jpg" class="img-fluid" alt="After the Rain at Kripalu">
		    <h6 class="gallery-caption text-center mt-2">After the Rain</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0502-antelopecanyon4.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTELOPE CANYON 4 &#8212; FOR GLORIA (0502) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0502-antelopecanyon4.jpg" class="img-fluid" alt="Antelope Canyon4 art series">
		    <h6 class="gallery-caption text-center mt-2">Antelope Canyon #4 For Gloria</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0501-antelopecanyon3.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTELOPE CANYON 3 (0501) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0501-antelopecanyon3.jpg" class="img-fluid" alt="Antelope Canyon3 - art series">
		    <h6 class="gallery-caption text-center mt-2">Antelope Canyon #3</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0407-antelopecanyon2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTELOPE CANYON 2 (0407) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat  &amp; Frame: 12&rdquo;x16&rdquo;, $265.">
		    <img src="../gallery/images/portart/portil0407-antelopecanyon2.jpg" class="img-fluid" alt="Antelope Canyon2 - art series">
		    <h6 class="gallery-caption text-center mt-2">Antelope Canyon #2</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0406-antelopecanyon.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTELOPE CANYON 1 (0406) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat &amp; Frame: 12&rdquo;x16&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0406-antelopecanyon.jpg" class="img-fluid" alt="Antelope Canyon1 - art series">
		    <h6 class="gallery-caption text-center mt-2">Antelope Canyon #1</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pencil">
  	    <a href="../gallery/images/portart/portil0405-greetings-colpencil.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GREETINGS (0404) Colored Pencil<br>
    		&bull; Original Art: 5&rdquo;x8&rdquo;; with Mat &amp; Frame: 8&rdquo;x10&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0405-greetings-colpencil.jpg" class="img-fluid" alt="3 Dolphins greeting">
		    <h6 class="gallery-caption text-center mt-2">Greetings</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item animals flowersplants pencil">
  	    <a href="../gallery/images/portart/portil0401-weareallconnected.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WE ARE ALL CONNECTED (0401) Colored Pencil <br>
    		&bull; Original Art: 9&rdquo;x9&rdquo;; with Mat &amp; Frame: 12&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0401-weareallconnected.jpg" class="img-fluid" alt="Connected project">
		    <h6 class="gallery-caption text-center mt-2">We Are All Connected</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0320-infinity5.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 5 / FOREVER PEACE (0320) Pastel <br>
    		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0320-infinity5.jpg" class="img-fluid" alt="Infinity2 art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #5</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0319-infinity4.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 4 / THIRD EYE (0319) Pastel <br>
    		&bull; Original Art: 18&rdquo;x12&rdquo;; with Mat: 24&rdquo;x18&rdquo;, $100.">
		    <img src="../gallery/images/portart/portil0319-infinity4.jpg" class="img-fluid" alt="Infinity art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #4</h6>
	      </a>
      </div>
 
<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0318-infinity3.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 3 (0318) Pastel<br>
    		&bull; Original Art: 18&rdquo;x12&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0318-infinity3.jpg" class="img-fluid" alt="Infinity art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #3</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pencil">
  	    <a href="../gallery/images/portart/portil0317-infinity2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 2 (0317) Colored Pencil <br>
    		&bull; Original Art:  11.5&rdquo;x8.5&rdquo;; with Mat: 16&rdquo;x12&rdquo;, $100.">
		    <img src="../gallery/images/portart/portil0317-infinity2.jpg" class="img-fluid" alt="Infinity2 art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #2</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0316-infinity.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY (0316) Pastel<br>
		    &bull; Licensed for book cover <br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0316-infinity.jpg" class="img-fluid" alt="Infinity art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity</h6>
	      </a>
      </div>


      </div><!-- end of row -->


    </div><!-- columns -->

    </div><!-- end of gallery row -->




    
    </section><!-- end of content -->

  </div><!-- end of container -->
</main><!-- end of main -->

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
  </div><!-- end of container -->
</nav>
  
</footer><!-- end of footer bottom -->




    <!-- Bootstrap Javascript bundle - goes before the closing body tag -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    <!-- BS Lightbox required scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.5/dist/index.bundle.min.js"></script>

    <!-- Isotope for filtering -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="../js/askgalleryscript.js"></script>

  </body>
</html>

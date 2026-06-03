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




    <title>ASK Design | Shop - Original Art Sale Items</title>
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
                  <li><a class="dropdown-item" href="portart-arch.php">Licensed</a></li>
                </ul>
        </li>

        <li class="nav-item dropdown"><a class="nav-link active dropdown-toggle" href="shop-cat.php" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="shop-cat.php">Original Art</a></li>
                  <li><a class="dropdown-item active" href="shop-cat-sale.php">Sale</a></li>
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
          <h2 class="page-title">Shop - Sale Items</h2>
          <h3 class="page lead subhd">Reduced Prices</h3>
          <p class="page lead">The artwork listed here is available for purchase at significantly reduced prices. Most pastel pieces are matted, and many are framed. The art may be purchased without the frame: please inquire! To purchase original artwork, please go to my <a href="contact.php">Contact</a> page.</p>
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
        <button type="button" class="btn btn-outline-primary" data-filter=".mixed">mixed media</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".pencil">colored pencil</button>
      </div><!-- END OF btn-group -->

    <div id="portart-rec" class="gallery row">

    <div class="col-12"><!-- columns -->

      <div class="row mb-4">

<!-- first row has only 2 entries -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2518-paintingwithlesley.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PAINTING WITH LESLEY (2518) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat 5.5”x6.75”, $80.">
		    <img src="../gallery/images/portart/portil2518-paintingwithlesley-thumbnail.jpg" class="img-fluid" alt="Painting with Lesley at Steamboat Wharf Marina">
		    <h6 class="gallery-caption text-center mt-2">Painting with Lesley</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2408-morninglight-at-wellfleet.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MORNING LIGHT AT WELLFLEET BAY(2408) Pastel <br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat 16”x12”, $250.">
		    <img src="../gallery/images/portart/portil2408-morninglight-at-wellfleet-thumbnail.jpg" class="img-fluid" alt="Wellfleet Bay, I missed you!">
		    <h6 class="gallery-caption text-center mt-2">Morning Light at Wellfleet Bay</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2405-dogwood-at-willow-pond2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DOGWOOD AT WILLOW POND (2405) Pastel <br>
		&bull; Original Art: 5&rdquo;x5&rdquo;; with Mat 8”x8”, $120.">
		    <img src="../gallery/images/portart/portil2405-dogwood-at-willow-pond2-thumbnail.jpg" class="img-fluid" alt="2nd painting of a vibrant tree">
		    <h6 class="gallery-caption text-center mt-2">Dogwood at Willow Pond 2</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2404-dogwood-at-willow-pond1.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DOGWOOD AT WILLOW POND (2404) Pastel <br>
		&bull; Original Art: 5.5&rdquo;x8&rdquo;; with Mat: 8”x10”, $120.">
		    <img src="../gallery/images/portart/portil2404-dogwood-at-willow-pond1-thumbnail.jpg" class="img-fluid" alt="vibrant tree really caught my eye">
		    <h6 class="gallery-caption text-center mt-2">Dogwood at Willow Pond 1</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2219-great-tall-tree.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GREAT TALL TREES (2219) Pastel <br>
		&bull; Original Art: 3.75&rdquo;x12&rdquo;; $120.">
		    <img src="../gallery/images/portart/portil2219-great-tall-tree-thumbnail.jpg" class="img-fluid" alt="One of the incredible trees in the Winfield Robbins Memorial Garden.">
		    <h6 class="gallery-caption text-center mt-2">Great Tall Tree</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2214-butterly-garden-corner.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BUTTERFLY GARDEN CORNER (2214) Pastel <br>
		&bull; Original Art: 5.5&rdquo;x8&rdquo;; $60.">
		    <img src="../gallery/images/portart/portil2214-butterly-garden-corner-thumbnail.jpg" class="img-fluid" alt="The butterfly garden is filled with colorful flowers that attract butterflies and bees!">
		    <h6 class="gallery-caption text-center mt-2">Butterfly Garden Corner</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2201-waterlily.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WATERLILY CALM (2201) Watercolor <br>
		&bull; Original Art: 5.75&rdquo;x5&rdquo;; $60.">
		    <img src="../gallery/images/portart/portil2201-waterlily-thumbnail.jpg" class="img-fluid" alt="waterlilies represent quiet and calm">
		    <h6 class="gallery-caption text-center mt-2">Water Lily Calm</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2120-salt-pepper-bridge.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SALT 'N PEPPER BRIDGE (2120) Pastel <br>
		&bull; Original Art: 9&rdquo;x3.5&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil2120-salt-pepper-bridge-thumbnail.jpg" class="img-fluid" alt="Salt and Pepper Bridge">
		    <h6 class="gallery-caption text-center mt-2">Salt and Pepper Bridge</h6>
	      </a>
      </div>

<!-- end of row -->

     <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2117-public-garden-summer.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PUBLIC GARDEN IN SUMMER (2117) Pastel <br>
		&bull; Original Art: 8.25&rdquo;x3.75&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil2117-public-garden-summer-thumbnail.jpg" class="img-fluid" alt="Public Garden quick sketch">
		    <h6 class="gallery-caption text-center mt-2">Public Garden in Summer</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2116-boston-without-bldgs.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BOSTON WITHOUT BUILDINGS (2116) Pastel <br>
		&bull; Original Art: 12&rdquo;x4.5&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil2116-boston-without-bldgs-thumbnail.jpg" class="img-fluid" alt="what Boston might have looked like before there were buildings">
		    <h6 class="gallery-caption text-center mt-2">Boston without Buildings</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes watercolor">
  	    <a href="../gallery/images/portart/portil2021-birch-closeup-nc.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BIRCH CLOSEUP (2021) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 3.5&rdquo;x5.125&rdquo;, $30.">
		    <img src="../gallery/images/portart/portil2021-birch-closeup-nc-thumbnail.jpg" class="img-fluid" alt="closeup of birch bark">
		    <h6 class="gallery-caption text-center mt-2">Birch Closeup</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes watercolor">
  	    <a href="../gallery/images/portart/portil2020-birches-at-daybreak.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BIRCHES AT DAYBREAK (2020) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 3.75&rdquo;x5.25&rdquo;, $30.">
		    <img src="../gallery/images/portart/portil2020-birches-at-daybreak-thumbnail.jpg" class="img-fluid" alt="A quiet morning in the woods of New England.">
		    <h6 class="gallery-caption text-center mt-2">Birches at Daybreak</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes watercolor">
  	    <a href="../gallery/images/portart/portil2019-marsh-nc.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MARSH (2019) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 5&rdquo;x2.5&rdquo;, $30.">
		    <img src="../gallery/images/portart/portil2019-marsh-nc-thumbnail.jpg" class="img-fluid" alt="marsh">
		    <h6 class="gallery-caption text-center mt-2">Marsh</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes watercolor">
  	    <a href="../gallery/images/portart/portil2018-beach-nc.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BEACH (2018) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 5.5&rdquo;x3.5&rdquo;, $30.">
		    <img src="../gallery/images/portart/portil2018-beach-nc-thumbnail.jpg" class="img-fluid" alt="beach notecard">
		    <h6 class="gallery-caption text-center mt-2">Beach</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1922-triplepink.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="TRIPLE PINK (1922) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 10&rdquo;x3.75&rdquo;; with Mat: 14&rdquo;x8&rdquo;, $165.">
		    <img src="../gallery/images/portart/portil1922-triplepink-thumbnail.jpg" class="img-fluid" alt="small pink orchids sharing their sweetness with the world">
		    <h6 class="gallery-caption text-center mt-2">Triple Pink</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1917-cloudscape-Keywest.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CLOUDSCAPE ON THE WAY TO KEY WEST (1917) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 5.5&rdquo;x3.75&rdquo;;  with Mat: 10&rdquo;x8&rdquo;, $40.">
		    <img src="../gallery/images/portart/portil1917-cloudscape-Keywest-thumbnail.jpg" class="img-fluid" alt="A relaxing ride to Key West, painting these beautiful clouds">
		    <h6 class="gallery-caption text-center mt-2">Cloudscape on the Way to Key West</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1913-tiny-orchid.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="TINY ORCHID (1913) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 5.5&rdquo;x3.75&rdquo;; no Mat: $20.">
		    <img src="../gallery/images/portart/portil1913-tiny-orchid-thumbnail.jpg" class="img-fluid" alt="Tiny orchid.">
		    <h6 class="gallery-caption text-center mt-2">Tiny Orchid</h6>
	      </a>
      </div>


</div><!-- END OF row mb-4-->

<div class="row mb-4">

      <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil1906-lavender-orchid.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LAVENDER ORCHID (1906) Colored Pencil <br>
		Naples, FL<br>
		&bull; Original Art: 3.75&rdquo;x5&rdquo;; with Mat &amp; Frame: 8&rdquo;x10&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil1906-lavender-orchid-thumbnail.jpg" class="img-fluid" alt="Drawing with colored pencils lets me capture the details.">
		    <h6 class="gallery-caption text-center mt-2">Lavender Orchid</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1809-corkscrew-corner.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CORKSCREW CORNER (1809) Pastel<br>
		Naples, FL<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $125.">
		    <img src="../gallery/images/portart/portil1809-corkscrew-corner-thumbnail.jpg" class="img-fluid" alt="Dragonflies visited me continually in this Corkscrew corner">
		    <h6 class="gallery-caption text-center mt-2">Corkscrew Corner</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1808-salmon-hibiscus.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SALMON HIBISCUS (1808) Pastel<br>
		Naples, FL<br>
		&bull; Original Art: 7&rdquo;x7&rdquo;; with Mat: 10&rdquo;x10&rdquo;, $50.">
		    <img src="../gallery/images/portart/portil1808-salmon-hibiscus-thumbnail.jpg" class="img-fluid" alt="salmon-colored hibiscus has elaborate, double-layered petals">
		    <h6 class="gallery-caption text-center mt-2">Salmon Hibiscus</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1804-sawgrass-palmetto-study.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SAWGRASS PALMETTO STUDY (1804) Pastel<br>
		Naples, FL<br>
		&bull; Original Art: 5.5&rdquo;x3.5&rdquo;; $20.">
		    <img src="../gallery/images/portart/portil1804-sawgrass-palmetto-study-thumbnail.jpg" class="img-fluid" alt="sawgrass palmettos: native to Florida, quite prolific">
		    <h6 class="gallery-caption text-center mt-2">Sawgrass Palmetto Study</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item animals pencil">
  	    <a href="../gallery/images/portart/portil1801-sea-turtle.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SEA TURTLE (1801) Colored Pencil <br>
		Naples, FL<br>
		&bull; Original Art: 7&rdquo;x5&rdquo;; $20.">
		    <img src="../gallery/images/portart/portil1801-sea-turtle-thumbnail.jpg" class="img-fluid" alt="When I became aware of the red tide, I became very concerned for the sea life, especially the sea turtles.">
		    <h6 class="gallery-caption text-center mt-2">Sea Turtle</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1715-early-spring-buds.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="EARLY SPRING BUDS (1715) Pastel <br>
		&bull; Original Art: 5&rdquo;x7&rdquo;; with Mat: 8&rdquo;x10&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1715-early-spring-buds-thumbnail.jpg" class="img-fluid" alt="Spring is the sweetest time of year">
		    <h6 class="gallery-caption text-center mt-2">Early Spring Buds</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1615-mystery-flower.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MYSTERY FLOWER (1615) Pastel <br>
		&bull; Original Art: 6&rdquo;x6&rdquo;; with Mat: 8&rdquo;x8&rdquo;, $30.">
		    <img src="../gallery/images/portart/portil1615-mystery-flower-thumbnail.jpg" class="img-fluid" alt="Mystery Flower">
		    <h6 class="gallery-caption text-center mt-2">Mystery Flower</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1612-on-the-corner.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ON THE CORNER (1612) Pastel <br>
		&bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, $145.">
		    <img src="../gallery/images/portart/portil1612-on-the-corner-thumbnail.jpg" class="img-fluid" alt="Tree on the cornerr">
		    <h6 class="gallery-caption text-center mt-2">On the Corner</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1520-canyondechelly-cliffdwellers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CANYON DE CHELLY CLIFFDWELLERS (1520) Pastel <br>
		Navajo Nation, Arizona<br>
		&bull; Original Art: 5&rdquo;x9&rdquo;; with Mat: 8&rdquo;x11&rdquo;, $50.">
		    <img src="../gallery/images/portart/portil1520-canyondechelly-cliffdwellers-thumbnail.jpg" class="img-fluid" alt="amazing cliffs in Canyon de Chelly">
		    <h6 class="gallery-caption text-center mt-2">Canyon de Chelly Cliffdwellers</h6>
	      </a>
      </div>

<!-- end of row -->

     <div class="col-sm-4 mb-4 gallery-item animals mixed">
  	    <a href="../gallery/images/portart/portil1516-greenturtlesheaven2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GREEN TURTLES HEAVEN 2 (1516) Mixed Media <br>
		&bull; Original Art: 8&rdquo;x8&rdquo;; nfs.">
		    <img src="../gallery/images/portart/portil1516-greenturtlesheaven2-thumbnail.jpg" class="img-fluid" alt="collage: Green Turtles Heaven 2">
		    <h6 class="gallery-caption text-center mt-2">Green Turtles Heaven2</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals mixed">
  	    <a href="../gallery/images/portart/portil1515-greenturtlesheaven1.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GREEN TURTLES HEAVEN 1 (1515) Mixed Media <br>
		&bull; Original Art: 8&rdquo;x8&rdquo;; nfs.">
		    <img src="../gallery/images/portart/portil1515-greenturtlesheaven1-thumbnail.jpg" class="img-fluid" alt="collage: Green Turtles Heaven 1">
		    <h6 class="gallery-caption text-center mt-2">Green Turtles Heaven 1</h6>
	      </a>
      </div>

     <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1507-blueridges1.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BLUE RIDGES 1 (1507) Pastel <br>
		Asheville, North Carolina<br>
		&bull; Original Art: 12&rdquo;x3.75&rdquo;; with Mat: 16&rdquo;x8&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil1507-blueridges1-thumbnail.jpg" class="img-fluid" alt="view of Blue Ridges">
		    <h6 class="gallery-caption text-center mt-2">Blue Ridges 1</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1505-vibration-loved-earth.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="VIBRATION OF A LOVED EARTH (1505) Pastel <br>
		&bull; Original Art: 6.5&rdquo;x9&rdquo;; with Mat: 9&rdquo;x12&rdquo;, $20.">
		    <img src="../gallery/images/portart/portil1505-vibration-loved-earth-thumbnail.jpg" class="img-fluid" alt="Loved earth vibes">
		    <h6 class="gallery-caption text-center mt-2">Vibration of a Loved Earth</h6>
	      </a>
      </div>

<!-- end of row -->

 
<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1414-thrugate.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="THROUGH THE GATE (1414) Pastel <br>
		&bull; Habitat Audubon Sanctuary, Belmont, MA<br>
		&bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, $160.">
		    <img src="../gallery/images/portart/portil1414-thrugate-thumbnail.jpg" class="img-fluid" alt="Looking at the garden through the gate">
		    <h6 class="gallery-caption text-center mt-2">Through the Gate</h6>
	      </a>
      </div>

 
<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1411-love-ribbons.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LOVE RIBBONS (1411) Pastel <br> 
		&bull; Original Art: 6.5&rdquo;x8.5&rdquo;; with Mat: 12&rdquo;x9&rdquo;, $50.">
		    <img src="../gallery/images/portart/portil1411-love-ribbons-thumbnail.jpg" class="img-fluid" alt="Playing with the idea of ribbons floating around a heart shape.">
		    <h6 class="gallery-caption text-center mt-2">Love Ribbons</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1410-love-rising.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LOVE RISING (1410) Pastel <br> 
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat: 11&rdquo;x14&rdquo;, $85.">
		    <img src="../gallery/images/portart/portil1410-love-rising-thumbnail.jpg" class="img-fluid" alt="Love Rising in the mountains">
		    <h6 class="gallery-caption text-center mt-2">Love Rising</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1205-danceforjoy.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DANCE FOR JOY (1205) Pastel<br>
		The garden at Omega Institute, Rhinebeck, NY.<br>
		&bull; Original Art: 7&rdquo;x5&rdquo;; $20.">
		    <img src="../gallery/images/portart/portil1205-danceforjoy-thumbnail.jpg" class="img-fluid" alt="The garden at Omega Institute">
		    <h6 class="gallery-caption text-center mt-2">Dance for Joy</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1116-BostonPublicGarden.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BOSTON PUBLIC GARDEN (1116) Pastel &amp; watercolor<br>
		&bull; Original Art: 12&rdquo;x6.25&rdquo;; with Mat: 16&rdquo;x10&rdquo;, $65.">
		    <img src="../gallery/images/portart/portil1116-BostonPublicGarden-thumbnail.jpg" class="img-fluid" alt="Boston Public Garden">
		    <h6 class="gallery-caption text-center mt-2">Boston Public Garden</h6>
	      </a>
      </div>

<!-- end of row -->

     <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1108-StoneBridge.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="STONE BRIDGE, WATERTOWN (Bike 'n Paint) (1108) Pastel<br>
		&bull; Original Art:10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil1108-StoneBridge-thumbnail.jpg" class="img-fluid" alt="Bike 'n Paint: Stone Bridge">
		    <h6 class="gallery-caption text-center mt-2">Stone Bridge</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1012-HoneyCrispApples.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HONEY CRISP APPLES (1012) Pastel<br>
		    &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, $20.">
		    <img src="../gallery/images/portart/portil1012-HoneyCrispApples-thumbnail.jpg" class="img-fluid" alt="Honey Crisp Apples at farmer's market">
		    <h6 class="gallery-caption text-center mt-2">Honey Crisp Apples</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0717-anticipation.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTICIPATION (0717) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $75.">
		    <img src="../gallery/images/portart/portil0717-anticipation-thumbnail.jpg" class="img-fluid" alt="Anticipating a storm">
		    <h6 class="gallery-caption text-center mt-2">Anticipation</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0712-biminibubbles-c2018.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BIMINI BUBBLES (0712) Pastel<br>
        &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, $20.">
		    <img src="../gallery/images/portart/portil0712-biminibubbles-c2018-thumbnail.jpg" class="img-fluid" alt="Dolphin bubbles at Bimini">
		    <h6 class="gallery-caption text-center mt-2">Bimini Bubbles</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0711-spottedhello.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SPOTTED HELLO (0711) Pastel<br>
		    &bull; Original Art: 9&rdquo;x6&rdquo;; with Mat: 12&rdquo;x9&rdquo;, $30.">
		    <img src="../gallery/images/portart/portil0711-spottedhello-thumbnail.jpg" class="img-fluid" alt="Spotted dolphins saying hello">
		    <h6 class="gallery-caption text-center mt-2">Spotted Hello</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0621-lenoxaudpond3.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LENOX AUDUBON POND 3 (0621) Pastel <br>
		    Lenox, MA.<br>
    		&bull; Original Art: 16&rdquo;x12&rdquo;; with Mat: 20&rdquo;x16&rdquo;, $130.">
		    <img src="../gallery/images/portart/portil0621-lenoxaudpond3-thumbnail.jpg" class="img-fluid" alt="pond at Lenox Audubon sanctuary">
		    <h6 class="gallery-caption text-center mt-2">Lenox Audubon Pond #3</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0606-bridgespecpond.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SPECTACLE POND (0606) Pastel<br>
        Mt. Auburn Cemetery, Cambridge, MA.<br>
        &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $30.">
		    <img src="../gallery/images/portart/portil0606-bridgespecpond-thumbnail.jpg" class="img-fluid" alt="spectaclepond bridge">
		    <h6 class="gallery-caption text-center mt-2">Spectacle Pond</h6>
	      </a>
      </div>


<!-- end of row -->
       
      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0319-infinity4.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 4 / THIRD EYE (0319) Pastel <br>
    		&bull; Original Art: 18&rdquo;x12&rdquo;; with Mat: 24&rdquo;x18&rdquo;, $100.">
		    <img src="../gallery/images/portart/portil0319-infinity4-thumbnail.jpg" class="img-fluid" alt="Infinity art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #4</h6>
	      </a>
      </div>
 
<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item animals pencil">
  	    <a href="../gallery/images/portart/portil0317-infinity2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 2 (0317) Colored Pencil <br>
    		&bull; Original Art:  11.5&rdquo;x8.5&rdquo;; with Mat: 16&rdquo;x12&rdquo;, $100.">
		    <img src="../gallery/images/portart/portil0317-infinity2-thumbnail.jpg" class="img-fluid" alt="Infinity2 art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #2</h6>
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

    <!-- Isotope for filtering -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="../js/askgalleryscript.js"></script>

  </body>
</html>
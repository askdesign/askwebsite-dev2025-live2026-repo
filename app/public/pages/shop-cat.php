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


    <title>ASK Design | Shop - Original Art</title>
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
                  <li><a class="dropdown-item active" aria-current="page" href="shop-cat.php">Original Art</a></li>
                  <li><a class="dropdown-item" href="shop-cat-sale.php">Sale</a></li>
                  <li><a class="dropdown-item" href="shop-cat-cards.php">Cards</a></li>
                  <li><a class="dropdown-item" href="shop-cat-prints.php">Prints</a></li>
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
          <h2 class="page-title">Shop - Original Art</h2>
          <h3 class="page lead subhd">Original Artwork For Purchase</h3>
          <p class="page lead">This is a catalog of artwork available for purchase. Most pastel pieces are matted, and many are framed. The art may be purchased without the frame: please inquire! To purchase original artwork, please go to my <a href="contact.php">Contact</a> page.</p>
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

    <div id="portart" class="gallery row">

    <div class="col-12"><!-- columns -->

      <div class="row mb-4">

<!-- first row has only 2 entries -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2525-weirriverestuary.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WEIR RIVER ESTUARY (2525) pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat & Frame: 14”x11”, $250.">
		    <img src="../gallery/images/portart/portil2525-weirriverestuary-thumbnail.jpg" class="img-fluid" alt="my first real experience of the marsh at the Weir River Estuary">
		    <h6 class="gallery-caption text-center mt-2">Weir River Estuary</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2523-aroundthebend.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AROUND THE BEND (2523) Pastel <br>
		&bull; Original Art: 6&rdquo;x5&rdquo;; with Mat & Frame 8”x8”, $165.">
		    <img src="../gallery/images/portart/portil2523-aroundthebend-thumbnail.jpg" class="img-fluid" alt="curious about what lies around the bend in Hull Gut">
		    <h6 class="gallery-caption text-center mt-2">Around the Bend</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2522-ptallterton.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="POINT ALLERTON (2522) pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat & Frame: 14”x11”, $250.">
		    <img src="../gallery/images/portart/portil2522-ptallterton-thumbnail.jpg" class="img-fluid" alt="concave curve of the land, the perspective, and the protrusion of Point Allerton in the distance">
		    <h6 class="gallery-caption text-center mt-2">Point Allerton</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2521-watersedge.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WATER'S EDGE (2521) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat 14”x11, $165.">
		    <img src="../gallery/images/portart/portil2521-watersedge-thumbnail.jpg" class="img-fluid" alt="quiet and relaxing vibe on Sunset Point">
		    <h6 class="gallery-caption text-center mt-2">Water's Edge</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2520-earlysummer.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="EARLY SUMMER (2520) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat 14”x11, $165.">
		    <img src="../gallery/images/portart/portil2520-earlysummer-thumbnail.jpg" class="img-fluid" alt="tree with amazing red leaves">
		    <h6 class="gallery-caption text-center mt-2">Early Summer</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2519-bobsboat.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BOB'S BOAT (2519) pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat 14”x11, $165.">
		    <img src="../gallery/images/portart/portil2519-bobsboat-thumbnail.jpg" class="img-fluid" alt="Bob's boat moving through Mariner's Park.">
		    <h6 class="gallery-caption text-center mt-2">Bob's Boat</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2517-movingclouds.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WORLD'S END CLOUDS (2517) Pastel <br>
		&bull; Original Art: 11.5&rdquo;x3.5&rdquo;; with Mat 14”x8”, $165.">
		    <img src="../gallery/images/portart/portil2517-movingclouds-thumbnail.jpg" class="img-fluid" alt="These moving clouds were spectacular!">
		    <h6 class="gallery-caption text-center mt-2">World's End Clouds</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2515-firsttownhallhull.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FIRST TOWN HALL, HULL (2515) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat 14”x11”, $165.">
		    <img src="../gallery/images/portart/portil2515-firsttownhallhull-thumbnail.jpg" class="img-fluid" alt="Hull's first Town Hall & School 1848">
		    <h6 class="gallery-caption text-center mt-2">First Town Hall, Hull</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2514-mayflowers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MAY FLOWERS (2514) Pastel <br>
		&bull; Original Art: 7&rdquo;x5&rdquo;; with Mat 10”x8”, $120.">
		    <img src="../gallery/images/portart/portil2514-mayflowers-thumbnail.jpg" class="img-fluid" alt="flowers emerging in a serene corner">
		    <h6 class="gallery-caption text-center mt-2">May Flowers</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2513-solsticesky.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SOLSTICE SKY (2513) Pastel <br>
		&bull; Original Art: 6&rdquo;x5&rdquo;; with Mat 8”x8”, $120.">
		    <img src="../gallery/images/portart/portil2513-solsticesky-thumbnail.jpg" class="img-fluid" alt="Glorious views of Hull Bay on the solstice.">
		    <h6 class="gallery-caption text-center mt-2">Solstice Sky</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2512-tuckedaway.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="TUCKED AWAY (2512) Pastel <br>
		&bull; Original Art: 9&rdquo;x5&rdquo;; with Mat & Frame 12”x9”, $140.">
		    <img src="../gallery/images/portart/portil2512-tuckedaway-thumbnail.jpg" class="img-fluid" alt="beautiful area, tucked into neighborhood">
		    <h6 class="gallery-caption text-center mt-2">Tucked Away</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2511-viewfrombillsdeck.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="VIEW FROM BILL'S DECK (2511) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat 14”x11”, $165.">
		    <img src="../gallery/images/portart/portil2511-viewfrombillsdeck-thumbnail.jpg" class="img-fluid" alt="We gathered on the back deck of a private home, with nice views of Allerton Bay and Spinnaker Island.">
		    <h6 class="gallery-caption text-center mt-2">View from Bill's Deck</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2510-scituateshore.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SCITUATE SHORE (2510) Pastel <br>
		&bull; Original Art: 11.5&rdquo;x3.5&rdquo;; with Mat 14”x8”, $165.">
		    <img src="../gallery/images/portart/portil2510-scituateshore-thumbnail.jpg" class="img-fluid" alt="Scituate Harbor">
		    <h6 class="gallery-caption text-center mt-2">Scituate Shore</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2509-travelinglight.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="TRAVELING LIGHT (2509) Pastel <br>
		&bull; Original Art: 5&rdquo;x6&rdquo;; with Mat 8”x8”, $120.">
		    <img src="../gallery/images/portart/portil2509-travelinglight-thumbnail.jpg" class="img-fluid" alt="Spectacular light on Japanese Maple kept moving">
		    <h6 class="gallery-caption text-center mt-2">Traveling Light</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2508-autumnatcorkscrew.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AUTUMN AT CORKSCREW SANCTUARY (2508) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat & Frame 11”x14”, $250.">
		    <img src="../gallery/images/portart/portil2508-autumnatcorkscrew-thumbnail.jpg" class="img-fluid" alt="subtle autumn colors">
		    <h6 class="gallery-caption text-center mt-2">Autumn at Corkscrew Sanctuary</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2507-treeatthebridge.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="TREE AT THE BRIDGE (2507) Pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat 14”x11”, $165.">
		    <img src="../gallery/images/portart/portil2507-treeatthebridge-thumbnail.jpg" class="img-fluid" alt="iconic scene with the Yoshino Cherry tree near the Swan Boats">
		    <h6 class="gallery-caption text-center mt-2">Tree at the Bridge</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2506-omegaechinacea.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DANCING FLOWERS (2506) Pastel <br>
		&bull; Original Art: 8&rdquo;x5.5&rdquo;; with Mat 10”x8”, $120.">
		    <img src="../gallery/images/portart/portil2506-omegaechinacea-thumbnail.jpg" class="img-fluid" alt="Echinacea were plentiful and joyful, as if they were dancing.">
		    <h6 class="gallery-caption text-center mt-2">Dancing Flowers</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2412-clouds-allerton-harbor.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ALLERTON HARBOR (2412) Pastel<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat & Frame: 14”x11”, $250.">
		    <img src="../gallery/images/portart/portil2412-clouds-allerton-harbor-thumbnail.jpg" class="img-fluid" alt="A serene sailboat glides across a tranquil turquoise sea under a sky filled with fluffy clouds.">
		    <h6 class="gallery-caption text-center mt-2">Allerton Harbor</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2411-spectaclepond-weddingspot.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OUR WEDDING SPOT (2411) Pastel <br>
		&bull; Original Art: 9&rdquo;x4&rdquo;; with Mat 12”x9”, $130.">
		    <img src="../gallery/images/portart/portil2411-spectaclepond-weddingspot-thumbnail.jpg" class="img-fluid" alt="our wedding spot at Mt. Auburn Cemetery">
		    <h6 class="gallery-caption text-center mt-2">Our Wedding Spot</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2409-sunflower.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OMEGA SUNFLOWER (2409) Pastel<br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat & Frame: 11”x14”, $250.">
		    <img src="../gallery/images/portart/portil2409-sunflower-thumbnail.jpg" class="img-fluid" alt="One vibrant yellow sunflower seemed to be waving to me.">
		    <h6 class="gallery-caption text-center mt-2">Omega Sunflower</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2302-midnightmarvel.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MIDNIGHT MARVEL (2302) Pastel <br>
		&bull; Original Art: 9&rdquo;x12&rdquo;; with Mat & Frame: 12”x16”, $300.">
		    <img src="../gallery/images/portart/portil2302-midnightmarvel-thumbnail.jpg" class="img-fluid" alt="amazing cluster of enormous hibiscus (Midnight Marvel)">
		    <h6 class="gallery-caption text-center mt-2">Midnight Marvel</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2301-willowpond-lateaugust.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WILLOW POND, LATE AUGUST (2301) Pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat & Frame: 14”x11”, $250.">
		    <img src="../gallery/images/portart/portil2301-willowpond-lateaugust-thumbnail.jpg" class="img-fluid" alt="I was completely taken out of my intense busyness while painting this quiet, meditative scene.">
		    <h6 class="gallery-caption text-center mt-2">Willow Pond, Late August</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2218-autumn-joy.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AUTUMN JOY (2218) Pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat & Frame: 14”x11”, $250.">
		    <img src="../gallery/images/portart/portil2218-autumn-joy-thumbnail.jpg" class="img-fluid" alt="The sedum of Autumn Joy live in a shady path.">
		    <h6 class="gallery-caption text-center mt-2">Autumn Joy</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2217-magnetic-reds.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MAGNETIC REDS (2217) Pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14”x11”, $165.">
		    <img src="../gallery/images/portart/portil2217-magnetic-reds-thumbnail.jpg" class="img-fluid" alt="The flowers in Magnetic Reds live in bright sunlight.">
		    <h6 class="gallery-caption text-center mt-2">Magnetic Reds</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2215-emerging.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="EMERGING (2215) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat: 11”x14”, $165.">
		    <img src="../gallery/images/portart/portil2215-emerging-thumbnail.jpg" class="img-fluid" alt="These zinnias emerge out of tall grasses that surround the Asa Garden.">
		    <h6 class="gallery-caption text-center mt-2">Emerging</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2211-hot-summer-day-under-japanese-elm.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HOT SUMMER DAY UNDER THE JAPANESE ELM (2211) Pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat & Frame: 14”x11”, $250.">
		    <img src="../gallery/images/portart/portil2211-hot-summer-day-under-japanese-elm-thumbnail.jpg" class="img-fluid" alt="I was able to stay cool on a hot summer day, thanks to the Japanese Elm that provided me with shade.">
		    <h6 class="gallery-caption text-center mt-2">Hot Summer Day Under the Japanese Elm</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2210-oak-at-entryway.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OAK AT ENTRYWAY (2210) Pastel<br>
		&bull; Original Art: 6&rdquo;x9&rdquo;; with Mat: 9”x12”, $130.">
		    <img src="../gallery/images/portart/portil2210-oak-at-entryway-thumbnail.jpg" class="img-fluid" alt="lovely freshness in the hue of the trees' leaves">
		    <h6 class="gallery-caption text-center mt-2">Oak at Entryway</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2209-hidden-azaleas.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HIDDEN AZALEAS (2209) Pastel <br>
		&bull; Original Art: 5.5&rdquo;x8&rdquo;; with Mat & Frame: 8”x10”, $165.">
		    <img src="../gallery/images/portart/portil2209-hidden-azaleas-thumbnail.jpg" class="img-fluid" alt="a hidden jewel">
		    <h6 class="gallery-caption text-center mt-2">Hidden Azaleas</h6>
	      </a>
      </div>


<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2206-lilacs-in-shade.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LILACS IN THE SHADE (2206) Pastel <br>
		&bull; Original Art: 6&rdquo;x4.25&rdquo;; with Mat: 8”x8”, $120.">
		    <img src="../gallery/images/portart/portil2206-lilacs-in-shade-thumbnail.jpg" class="img-fluid" alt="large group of lilac bushes">
		    <h6 class="gallery-caption text-center mt-2">Lilacs in the Shade</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2205-azaleas-willowpond.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AZALEAS AT WILLOW POND (2205) Pastel <br>
		&bull; Original Art: 5.5&rdquo;x5.25&rdquo;; with Mat & Frame: 8”x8”, $140.">
		    <img src="../gallery/images/portart/portil2205-azaleas-willowpond-thumbnail.jpg" class="img-fluid" alt="loosen things up and be more expressive">
		    <h6 class="gallery-caption text-center mt-2">Azaleas at Willow Pond</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2204-dawnredwood-azaleas.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DAWN REDWOOD AZALEAS 2 (2204) Pastel<br>
		&bull; Original Art: 5&rdquo;x4.75&rdquo;; with Mat: 8”x8”, $120.">
		    <img src="../gallery/images/portart/portil2204-dawnredwood-azaleas-thumbnail.jpg" class="img-fluid" alt="remarkable magenta and rose colors of the Dawn Redwood Azaleas">
		    <h6 class="gallery-caption text-center mt-2">Dawn Redwood Azaleas 2</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2203-dawnredwood-azaleas.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DAWN REDWOOD AZALEAS 1 (2203) Pastel <br>
		&bull; Original Art: 5&rdquo;x4.75&rdquo;; with Mat: 8”x8”, $120.">
		    <img src="../gallery/images/portart/portil2203-dawnredwood-azaleas-thumbnail.jpg" class="img-fluid" alt="remarkable magenta and rose colors of the Dawn Redwood Azaleas">
		    <h6 class="gallery-caption text-center mt-2">Dawn Redwood Azaleas 1</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2119-dahlia.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DAHLIA (2119) Pastel <br>
		&bull; Original Art: mat to come 8&rdquo;x8&rdquo;, $120.">
		    <img src="../gallery/images/portart/portil2119-dahlia-thumbnail.jpg" class="img-fluid" alt="dahlias are regal flowers">
		    <h6 class="gallery-caption text-center mt-2">Dahlia</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2118-grandmother-willow.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GRANDMOTHER WILLOW (2118) Pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $165.">
		    <img src="../gallery/images/portart/portil2118-grandmother-willow-thumbnail.jpg" class="img-fluid" alt="grandmother willow tree">
		    <h6 class="gallery-caption text-center mt-2">Grandmother Willow</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2115-simplyred-hibiscus.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SIMPLY RED (2115) Watercolor <br>
		&bull; Original Art: 4.25&rdquo;x5&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil2115-simplyred-hibiscus-thumbnail.jpg" class="img-fluid" alt="Red hibiscus are abundant in Florida">
		    <h6 class="gallery-caption text-center mt-2">Simply Red</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2114-salmon-ruffled-hibiscus2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SALMON RUFFLED HIBISCUS #2 (2114) Watercolor <br>
		&bull; Original Art: 4.75&rdquo;x5&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil2114-salmon-ruffled-hibiscus2-thumbnail.jpg" class="img-fluid" alt="Ruffled hibiscus in Florida">
		    <h6 class="gallery-caption text-center mt-2">Salmon Ruffled Hibiscus #2</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil2113-extraordinary.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FINDING THE EXTRAORDINARY (2113) Colored Pencil <br>
		&bull; Original Art: 8.25&rdquo;x7&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, $145.">
		    <img src="../gallery/images/portart/portil2113-extraordinary-thumbnail.jpg" class="img-fluid" alt="Finding the Extraordinary in the Ordinary">
		    <h6 class="gallery-caption text-center mt-2">Finding the Extraordinary</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2111-red-roses-atpond1.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="RED ROSES AT THE POND 1 (2111) Pastel <br>
		&bull; Original Art: 6.25&rdquo;x5.25&rdquo;; with Mat & Frame: 8&rdquo;x8&rdquo;, $140.">
		    <img src="../gallery/images/portart/portil2111-red-roses-atpond1-thumbnail.jpg" class="img-fluid" alt="a conscious effort to loosen up my paintings">
		    <h6 class="gallery-caption text-center mt-2">Red Roses at the Pond 1</h6>
	      </a>
      </div>


<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item animals watercolor">
  	    <a href="../gallery/images/portart/portil2106-cardinal-visiting.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CARDINAL VISITING (2106) Watercolor <br>
		&bull; Original Art: 4&rdquo;x5.5&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil2106-cardinal-visiting-thumbnail.jpg" class="img-fluid" alt="cardinals offer us their cheerful color, song, and presence">
		    <h6 class="gallery-caption text-center mt-2">Cardinal Visiting</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2101-floatingmagnolia.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FLOATING MAGNOLIA (2101) Watercolor <br>
		Belmont, MA<br>
		&bull; Original Art: 5.25&rdquo;x7&rdquo;; with Mat &amp; Frame: 8&rdquo;x10&rdquo;, $165">
		    <img src="../gallery/images/portart/portil2101-floatingmagnolia-thumbnail.jpg" class="img-fluid" alt="magnolia trees in our neighborhood are beautiful in springtime">
		    <h6 class="gallery-caption text-center mt-2">Floating Magnolia</h6>
	      </a>
      </div>


<!-- end of row -->

     <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2025-rose.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ROSE (2025) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 8&rdquo;x5.25&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil2025-rose-thumbnail.jpg" class="img-fluid" alt="this rose was a stunner!">
		    <h6 class="gallery-caption text-center mt-2">Rose</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2024-QuietSaturationontheWest.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUIET SATURATION ON THE WEST (2024) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 11&rdquo;x3.75&rdquo;; with Mat: 16&rdquo;x8&rdquo;, $240.">
		    <img src="../gallery/images/portart/portil2024-QuietSaturationontheWest-thumbnail.jpg" class="img-fluid" alt="west side of the bridge">
		    <h6 class="gallery-caption text-center mt-2">Quiet Saturation on the West</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2023-HiddenHomesonEast.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HIDDEN HOMES ON THE EAST (2023) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 12&rdquo;x3.75&rdquo;; with Mat: 16&rdquo;x8&rdquo;, $240.">
		    <img src="../gallery/images/portart/portil2023-HiddenHomesonEast-thumbnail.jpg" class="img-fluid" alt="east side of the bridge">
		    <h6 class="gallery-caption text-center mt-2">Hidden Homes on the East</h6>
	      </a>
      </div>


<!-- end of row -->

     <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2016-redongreen.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="RED ON GREEN (2016) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 11&rdquo;x7.5&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil2016-redongreen-thumbnail.jpg" class="img-fluid" alt="lilies bloom in July">
		    <h6 class="gallery-caption text-center mt-2">Red on Green</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2015-i-see-a-hydrangea.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="I SEE A HYDRANGEA (2015) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 7.5&rdquo;x11&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil2015-i-see-a-hydrangea-thumbnail.jpg" class="img-fluid" alt="Experimenting with a new technique">
		    <h6 class="gallery-caption text-center mt-2">I See a Hydrangea</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes mixed">
  	    <a href="../gallery/images/portart/portil2014-celestial-burst.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CELESTIAL BURST (2014) Watercolor and Gouache <br>
		Naples, FL<br>
		&bull; Original Art: 7.5&rdquo;x5.5&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil2014-celestial-burst-thumbnail.jpg" class="img-fluid" alt="Abstract, colorful view of the night sky and stars.">
		    <h6 class="gallery-caption text-center mt-2">Celestial Burst</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes mixed">
  	    <a href="../gallery/images/portart/portil2011-celestial-sky.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CELESTIAL SKY (2011) Watercolor and Gouache<br>
		Naples, FL<br>
		&bull; Original Art: 6.75&rdquo;x5.75&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil2011-celestial-sky-thumbnail.jpg" class="img-fluid" alt="Lots of different techniques were used in this painting.">
		    <h6 class="gallery-caption text-center mt-2">Celestial Sky</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1923-pickerelweed.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PICKERELlWEED (1923) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $165.">
		    <img src="../gallery/images/portart/portil1923-pickerelweed-thumbnail.jpg" class="img-fluid" alt="I love the shape of this plant's leaves and the lavender flower it produces.">
		    <h6 class="gallery-caption text-center mt-2">Pickerellweed</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1920-encouragement.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ENCOURAGEMENT (1920) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 9.75&rdquo;x5&rdquo;; with Mat: 14&rdquo;x8&rdquo;, $165.">
		    <img src="../gallery/images/portart/portil1920-encouragement-thumbnail.jpg" class="img-fluid" alt="encouraged to paint at the beach">
		    <h6 class="gallery-caption text-center mt-2">Encouragement</h6>
	      </a>
      </div>

<!-- end of row -->

     <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1919-firstbeachimmersion.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FIRST BEACH IMMERSION (1919) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;;  with Mat &amp; Frame: 16&rdquo;x12&rdquo;, $300.">
		    <img src="../gallery/images/portart/portil1919-firstbeachimmersion-thumbnail.jpg" class="img-fluid" alt="My first painting on the beach was an encouraging learning experience.">
		    <h6 class="gallery-caption text-center mt-2">First Beach Immersion</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1917-cloudscape-Keywest.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CLOUDSCAPE ON THE WAY TO KEY WEST (1917) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 5.5&rdquo;x3.75&rdquo;; with Mat: 10&rdquo;x8&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil1917-cloudscape-Keywest-thumbnail.jpg" class="img-fluid" alt="A relaxing ride to Key West, painting these beautiful clouds">
		    <h6 class="gallery-caption text-center mt-2">Cloudscape on the Way to Key West</h6>
	      </a>
      </div>

<!-- end of row -->

     <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1916-allquiet-keywest.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ALL'S QUIET ON THE BOAT TO KEY WEST (1916) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 11.5&rdquo;x3.75&rdquo;;  with Mat: 14&rdquo;x8&rdquo;, $165.">
		    <img src="../gallery/images/portart/portil1916-allquiet-keywest-thumbnail.jpg" class="img-fluid" alt="boat ride from Ft. Lauderdale to Key West">
		    <h6 class="gallery-caption text-center mt-2">All's Quiet on the Boat to Key West</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1915-gordonriver-greenway.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SUNDAY ON GORDON RIVER GREENWAY (1915) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, $240.">
		    <img src="../gallery/images/portart/portil1915-gordonriver-greenway-thumbnail.jpg" class="img-fluid" alt="great spot to paint, as I was sheltered by shade and had a nice view of the river.">
		    <h6 class="gallery-caption text-center mt-2">Sunday on the Gordon River Greenway</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1914-longarms.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LONG ARMS (1914) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $165.">
		    <img src="../gallery/images/portart/portil1914-longarms-thumbnail.jpg" class="img-fluid" alt="purple hues and long petals">
		    <h6 class="gallery-caption text-center mt-2">Long Arms</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1911-fireflag-rainyday.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FIREFLAG ON A RAINY DAY (1911) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 12.5&rdquo;x4.75&rdquo;; with Mat: 16&rdquo;x8&rdquo;, $200.">
		    <img src="../gallery/images/portart/portil1911-fireflag-rainyday-thumbnail.jpg" class="img-fluid" alt="The rain creates a mystical overture, with sounds and sights that make you pause and smile.">
		    <h6 class="gallery-caption text-center mt-2">Fireflag on a Rainy Day</h6>
	      </a>
      </div>

</div><!-- END OF row mb-4-->

<div class="row mb-4">

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1910-swaying-vandas.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SWAYING VANDAS (1910) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $165.">
		    <img src="../gallery/images/portart/portil1910-swaying-vandas-thumbnail.jpg" class="img-fluid" alt="Vanda orchids swaying gently in the breeze.">
		    <h6 class="gallery-caption text-center mt-2">Swaying Vandas</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1907-siam-tulip.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SIAM TULIP (1907) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, $240.">
		    <img src="../gallery/images/portart/portil1907-siam-tulip-thumbnail.jpg" class="img-fluid" alt="Siam Tulip is striking and bold, a member of the ginger family.">
		    <h6 class="gallery-caption text-center mt-2">Siam Tulip</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1904-sweet-spot.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SWEET SPOT (1904) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $165.">
		    <img src="../gallery/images/portart/portil1904-sweet-spot-thumbnail.jpg" class="img-fluid" alt="underneath a thatched roof shelter that overlooks this sweet scene">
		    <h6 class="gallery-caption text-center mt-2">Sweet Spot</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1902-croton-closeup.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CROTONS CLOSEUP (1902) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 8&rdquo;x8&rdquo;; with Mat: 11&rdquo;x14&rdquo;, $165.">
		    <img src="../gallery/images/portart/portil1902-croton-closeup-thumbnail.jpg" class="img-fluid" alt="The colors of the croton plant are vibrant and happy!">
		    <h6 class="gallery-caption text-center mt-2">Crotons Closeup</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1901-first-palmtree.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FIRST PALM TREE (1901) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat: 11&rdquo;x14&rdquo;, $165.">
		    <img src="../gallery/images/portart/portil1901-first-palmtree-thumbnail.jpg" class="img-fluid" alt="I biked downtown and sat at Starbucks while painting my first palm tree!">
		    <h6 class="gallery-caption text-center mt-2">First Palm Tree</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants animals mixed">
  	    <a href="../gallery/images/portart/portil1813-first-xmas-in-FL.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FIRST CHRISTMAS IN FLORIDA (1813) Collage <br>
		Naples, FL<br>
		&bull; Original Art: 17&rdquo;x11&rdquo;; $125.">
		    <img src="../gallery/images/portart/portil1813-first-xmas-in-FL-thumbnail.jpg" class="img-fluid" alt="a tribute to the wonders of Florida">
		    <h6 class="gallery-caption text-center mt-2">First Christmas in Florida</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1812-windy-day-lowdermilk.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WINDY DAY AT LOWDERMILK BEACH (1812) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 10&rdquo;x5&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, $210.">
		    <img src="../gallery/images/portart/portil1812-windy-day-lowdermilk-thumbnail.jpg" class="img-fluid" alt="I biked to Lowdermilk Beach and hadn't realized how windy it was until I sat to paint this scene.">
		    <h6 class="gallery-caption text-center mt-2">Windy Day at Lowdermilk Beach</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1811-lettuce-lake-corkscrew-swamp.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LETTUCE LAKE AT CORKSCREW SWAMP (1811) Pastel<br>
		Naples, FL<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $125.">
		    <img src="../gallery/images/portart/portil1811-lettuce-lake-corkscrew-swamp-thumbnail.jpg" class="img-fluid" alt="Water Lettuce is an important part of the ecosystem, providing safe havens for wildlife species to breed and forage">
		    <h6 class="gallery-caption text-center mt-2">Lettuce Lake at Corkscrew Swamp</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1810-vineyards-view.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="VINEYARDS VIEW (1810) Pastel<br>
		Naples, FL<br>
		&bull; Original Art: 10&rdquo;x3.75&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $125.">
		    <img src="../gallery/images/portart/portil1810-vineyards-view-thumbnail.jpg" class="img-fluid" alt="The bike path on Vineyards Blvd is wide, shaded by trees, and winds along a large pond at one end.">
		    <h6 class="gallery-caption text-center mt-2">Vineyards View</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1807-hibiscus-study.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HIBISCUS STUDY (1807) Pastel<br>
		Naples, FL<br>
		&bull; Original Art: 5&rdquo;x3.75&rdquo;; with Mat &amp; Frame: 10&rdquo;x8&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil1807-hibiscus-study-thumbnail.jpg" class="img-fluid" alt="showy and elaborate hibiscus petals, with lots of folds.">
		    <h6 class="gallery-caption text-center mt-2">Hibiscus Study</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1806-a-tricolored-heron-said-stay.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="A TRICOLORED HERON SAID STAY (1806) Pastel<br>
		Naples, FL<br>
		&bull; Original Art: 9&rdquo;x4.25&rdquo;; with Mat: 12&rdquo;x9&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil1806-a-tricolored-heron-said-stay-thumbnail.jpg" class="img-fluid" alt="a tricolored heron flew in as if to say <em>Stay</em>">
		    <h6 class="gallery-caption text-center mt-2">A Tricolored Heron Said Stay</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1805-hibiscus-enchantment.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HIBISCUS ENCHANTMENT (1805) Pastel<br>
		Naples, FL<br>
		&bull; Original Art: 9.75&rdquo;x3.5&rdquo;; with Mat &amp; Frame: 12&rdquo;x9&rdquo;, $100.">
		    <img src="../gallery/images/portart/portil1805-hibiscus-enchantment-thumbnail.jpg" class="img-fluid" alt="This hibiscus plant towers over me">
		    <h6 class="gallery-caption text-center mt-2">Hibiscus Enchantment</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1803-crotons-catch-my-eye.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CROTONS CATCH MY EYE (1803) Pastel<br>
		Naples, FL<br>
		&bull; Original Art: 7&rdquo;x7&rdquo;; with Mat &amp; Frame: 10&rdquo;x10&rdquo;, $100.">
		    <img src="../gallery/images/portart/portil1803-crotons-catch-my-eye-thumbnail.jpg" class="img-fluid" alt="colorful crotons caught my eye">
		    <h6 class="gallery-caption text-center mt-2">Crotons Catch my Eye</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pencil">
  	    <a href="../gallery/images/portart/portil1802-stunning-clouds-at-vanderbilt.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="STUNNING CLOUDS AT VANDERBILT (1802) Colored Pencil<br>
		Naples, FL<br>
		&bull; Original Art: 9&rdquo;x5&rdquo;; $30.">
		    <img src="../gallery/images/portart/portil1802-stunning-clouds-at-vanderbilt-thumbnail.jpg" class="img-fluid" alt="Stunning Clouds at Vanderbilt Beach">
		    <h6 class="gallery-caption text-center mt-2">Stunning Clouds at Vanderbilt</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals flowersplants mixed">
  	    <a href="../gallery/images/portart/portil1716-new-traditions.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="NEW TRADITIONS (1716) Mixed Media <br>
		&bull; Original Art: 8&rdquo;x8&rdquo;; $60.">
		    <img src="../gallery/images/portart/portil1716-new-traditions-thumbnail.jpg" class="img-fluid" alt="new Christmas eve tradition">
		    <h6 class="gallery-caption text-center mt-2">New Traditions</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1714-late-summer.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PEGGY'S GARDEN IN LATE SUMMER (1714) Pastel <br>
		Belmont, MA<br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat: 11&rdquo;x14&rdquo;, $85.">
		    <img src="../gallery/images/portart/portil1714-late-summer-thumbnail.jpg" class="img-fluid" alt="Late summer in Peggy's garden">
		    <h6 class="gallery-caption text-center mt-2">Peggy's Garden in Late Summer</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1713-country-garden-inspiration.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="COUNTRY GARDEN INSPIRATION (1713) Pastel <br>
		Sharon, CT<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $85.">
		    <img src="../gallery/images/portart/portil1713-country-garden-inspiration-thumbnail.jpg" class="img-fluid" alt="Balo's garden: lots of inspiration">
		    <h6 class="gallery-caption text-center mt-2">Country Garden Inspiration</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1712-balos-country-garden.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BALO'S COUNTRY GARDEN (1712) Pastel <br>
		Sharon, CT<br>
		&bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, $200.">
		    <img src="../gallery/images/portart/portil1712-balos-country-garden-thumbnail.jpg" class="img-fluid" alt="A section of the beautiful garden at my friends' country home.">
		    <h6 class="gallery-caption text-center mt-2">Balo's Country Garden</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1710-happy-coleus.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HAPPY COLEUS (1710) Pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $85.">
		    <img src="../gallery/images/portart/portil1710-happy-coleus-thumbnail.jpg" class="img-fluid" alt="Peggy's garden: coleus planted in enormous pots">
		    <h6 class="gallery-caption text-center mt-2">Happy Coleus</h6>
	      </a>
      </div>

<!-- end of row -->

     <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1709-setting-sun-on-olifants.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SETTING SUN ON THE OLIFANTS (1709) Pastel <br>
		South Africa<br>
		&bull; Original Art: 9.5&rdquo;x7.5&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $85.">
		    <img src="../gallery/images/portart/portil1709-setting-sun-on-olifants-thumbnail.jpg" class="img-fluid" alt="changing the colors makes this a more abstract rendering of the setting sun">
		    <h6 class="gallery-caption text-center mt-2">Setting Sun on the Olifants</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1708-riverboat-sunset.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="RIVERBOAT SUNSET (1708) Pastel <br>
		South Africa<br>
		&bull; Original Art: 9.5&rdquo;x7.5&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $85.">
		    <img src="../gallery/images/portart/portil1708-riverboat-sunset-thumbnail.jpg" class="img-fluid" alt="Despite a severe drought, the Olifants River had an abundance of water.">
		    <h6 class="gallery-caption text-center mt-2">Riverboat Sunset</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1707-lebata-rest-camp.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LEBATA REST CAMP (1707) Pastel <br>
		Kruger National Park, South Africa<br>
		&bull; Original Art: 10.5&rdquo;x5.5&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, $210.">
		    <img src="../gallery/images/portart/portil1707-lebata-rest-camp-thumbnail.jpg" class="img-fluid" alt="Stunning vista at our lunch spot, Lebata Rest Camp">
		    <h6 class="gallery-caption text-center mt-2">Lebata Rest Camp</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1706-afternoon-on-lebata-river.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AFTERNOON ON LEBATA RIVER (1706) Pastel <br>
		Kruger National Park, South Africa<br>
		&bull; Original Art: 10.5&rdquo;x6&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $85.">
		    <img src="../gallery/images/portart/portil1706-afternoon-on-lebata-river-thumbnail.jpg" class="img-fluid" alt="first day on safari in Kruger Park">
		    <h6 class="gallery-caption text-center mt-2">Afternoon on Lebata River</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1705-trail-to-moholoholo.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="TRAIL TO MOHOLOHOLO (1705) Pastel <br>
		South Africa<br>
		&bull; Original Art: 9.5&rdquo;x5.5&rdquo;; with Mat: 12&rdquo;x9&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil1705-trail-to-moholoholo-thumbnail.jpg" class="img-fluid" alt="Moholoho: trail to the animal sanctuary">
		    <h6 class="gallery-caption text-center mt-2">Trail to Moholoholo</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1704-mountains-at-moholoholo.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MOUNTAINS AT MOHOLOHOLO (1704) Pastel <br>
		South Africa<br>
		&bull; Original Art: 9&rdquo;x5.5&rdquo;; with Mat &amp; Frame: 12&rdquo;x9&rdquo;, $100.">
		    <img src="../gallery/images/portart/portil1704-mountains-at-moholoholo-thumbnail.jpg" class="img-fluid" alt="Moholoho Wildlife Rehabilitation Center">
		    <h6 class="gallery-caption text-center mt-2">Mountains at Moholoholo</h6>
	      </a>
      </div>

<!-- end of row -->

     <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1703-fantasy-flower.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FANTASY FLOWER (1703) Pastel <br>
		&bull; Original Art: 3.75&rdquo;x5&rdquo;; with Mat &amp; Frame: 8&rdquo;x10&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil1703-fantasy-flower-thumbnail.jpg" class="img-fluid" alt="this flower emerged from my imagination">
		    <h6 class="gallery-caption text-center mt-2">Fantasy Flower</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1610-entry-overlook.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ENTRY OVERLOOK (1610) Pastel <br>
		Lenox, MA<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, $200.">
		    <img src="../gallery/images/portart/portil1610-entry-overlook-thumbnail.jpg" class="img-fluid" alt="entry overlook">
		    <h6 class="gallery-caption text-center mt-2">Entry Overlook</h6>
	      </a>
      </div>

<!-- end of row -->

     <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1609-lake-mahkeenac.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LAKE MAHKEENAC (1609) Pastel <br>
		Lenox, MA<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $85.">
		    <img src="../gallery/images/portart/portil1609-lake-mahkeenac-thumbnail.jpg" class="img-fluid" alt="Late fall in Lenox brings darker, subdued colors">
		    <h6 class="gallery-caption text-center mt-2">Lake Mahkeenac</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1605-stelladeoro2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="STELLA DE ORO #2 (1605) Pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $85.">
		    <img src="../gallery/images/portart/portil1605-stelladeoro2-thumbnail.jpg" class="img-fluid" alt="Stella d'Oro in full bloom in front yard garden.">
		    <h6 class="gallery-caption text-center mt-2">Stella de Oro #2</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1603-canyondechelly-cliffdwellers2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CANYON DE CHELLY CLIFFDWELLERS #2 (1603) Pastel <br>
		Navajo Nation, Arizona<br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat: 11&rdquo;x14&rdquo;, $85.">
		    <img src="../gallery/images/portart/portil1603-canyondechelly-cliffdwellers2-thumbnail.jpg" class="img-fluid" alt="A lovely hike from the rim to the base of this canyon">
		    <h6 class="gallery-caption text-center mt-2">Canyon de Chelly Cliffdwellers #2</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1602-giantwindow.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GIANT WINDOW (1602) Pastel <br>
		Arches National Park, Utah<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, $210.">
		    <img src="../gallery/images/portart/portil1602-giantwindow-thumbnail.jpg" class="img-fluid" alt="Giant Arch at Arches">
		    <h6 class="gallery-caption text-center mt-2">Giant Window</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1519-blueridgemist2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BLUE RIDGES MIST 2 (1519) Pastel <br>
		Asheville, North Carolina<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 11&rdquo;x14&rdquo;, $85.">
		    <img src="../gallery/images/portart/portil1519-blueridgemist2-thumbnail.jpg" class="img-fluid" alt="floating mist in Blue Ridges">
		    <h6 class="gallery-caption text-center mt-2">Blue Ridges Mist 2</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1517-blueridges4.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BLUE RIDGES 4 (1517) Pastel <br>
		Asheville, North Carolina<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, $265.">
		    <img src="../gallery/images/portart/portil1517-blueridges4-thumbnail.jpg" class="img-fluid" alt="depth and expanse of peaks in the beautiful Blue Ridge Mountains">
		    <h6 class="gallery-caption text-center mt-2">Blue Ridges 4</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1514-blueridges3.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BLUE RIDGES 3 (1514) Pastel <br>
		Asheville, North Carolina<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, $265.">
		    <img src="../gallery/images/portart/portil1514-blueridges3-thumbnail.jpg" class="img-fluid" alt="The morning light in the Blue Ridge Mountains is always changing and intriguing.">
		    <h6 class="gallery-caption text-center mt-2">Blue Ridges 3</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1513-betatakin-cliffdwellers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BETATAKIN CLIFFDWELLERS (1513) Pastel <br>
		Navajo National Monument, Arizona<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, $200.">
		    <img src="../gallery/images/portart/portil1513-betatakin-cliffdwellers-thumbnail.jpg" class="img-fluid" alt="Cliffdwellers at Betatakin">
		    <h6 class="gallery-caption text-center mt-2">Betatakin Cliffdwellers</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1512-burstofjoy.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BURST OF JOY (1512) Pastel <br>
		&bull; Original Art: 9&rdquo;x12&rdquo;; with Mat &amp; Frame: 12&rdquo;x16&rdquo;, $265.">
		    <img src="../gallery/images/portart/portil1512-burstofjoy-thumbnail.jpg" class="img-fluid" alt="neighbor's yard is filled with all kinds of large, colorful lilies.">
		    <h6 class="gallery-caption text-center mt-2">Burst of Joy</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1511-pink-whispers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PINK WHISPERS (1511) Pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, $210.">
		    <img src="../gallery/images/portart/portil1511-pink-whispers-thumbnail.jpg" class="img-fluid" alt="small lilies with compelling color">
		    <h6 class="gallery-caption text-center mt-2">Pink Whispers</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1510-floating-mist.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FLOATING MIST (1510) Pastel <br>
		Asheville, North Carolina<br>
		&bull; Original Art: 6.5&rdquo;x10.5&rdquo;; with Mat &amp; Frame: 11&rdquo;x14&rdquo;, $210.">
		    <img src="../gallery/images/portart/portil1510-floating-mist-thumbnail.jpg" class="img-fluid" alt="mist over Blue Ridges">
		    <h6 class="gallery-caption text-center mt-2">Floating Mist</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes mixed">
  	    <a href="../gallery/images/portart/portil1506-standout-redbush.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="STANDOUT (1506) Pastel &amp; Watercolor <br>
		Summer at Kripalu Center, Lenox, MA<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, $265.">
		    <img src="../gallery/images/portart/portil1506-standout-redbush-thumbnail.jpg" class="img-fluid" alt="Red bush standing out">
		    <h6 class="gallery-caption text-center mt-2">Standout</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1504-hana-heaven.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HANA HEAVEN (1504) Pastel<br>
		Red Sand Beach, Hana, Maui.<br>
		&bull; Original Art: 10&rdquo;x8	&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, $210.">
		    <img src="../gallery/images/portart/portil1504-hana-heaven-thumbnail.jpg" class="img-fluid" alt="Heavenly day in Hana">
		    <h6 class="gallery-caption text-center mt-2">Hana Heaven</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1502-allium-geranium.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ALLIUM AND GERANIUM (1502) Pastel<br>
		&bull; Original Art: 7.5&rdquo;x10&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, $210.">
		    <img src="../gallery/images/portart/portil1502-allium-geranium-thumbnail.jpg" class="img-fluid" alt="Peggy's garden: Allium and Geranium">
		    <h6 class="gallery-caption text-center mt-2">Allium and Geranium</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes mixed">
  	    <a href="../gallery/images/portart/portil1408-lapassion.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LA PASSION (1408) Mixed Media <br> 
		&bull; Original Art: with Mat & Frame: 11&rdquo;x14&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil1408-lapassion-thumbnail.jpg" class="img-fluid" alt="A mixture of my graphic design sensibilities with my love of paper, texture, and language.">
		    <h6 class="gallery-caption text-center mt-2">La Passion</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1307-afternoon-rest.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AFTERNOON REST (1307) Pastel<br>
		Long Pond Lake, Omega Institute, Rhinebeck, NY.<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil1307-afternoon-rest-thumbnail.jpg" class="img-fluid" alt="restful afternoon">
		    <h6 class="gallery-caption text-center mt-2">Afternoon Rest</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes mixed">
  	    <a href="../gallery/images/portart/portil1302-kalalau-valley.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="KALALAU VALLEY (1302) Pastel, watercolor, gouache<br>
		Kalalau Valley, on the northwest side of the island of Kaua'i in Hawai'i. <br>
		&bull; Original Art: 15&rdquo;x6.25&rdquo;; with Mat &amp; Frame: 18&rdquo;x9&rdquo;, $300.">
		    <img src="../gallery/images/portart/portil1302-kalalau-valley-thumbnail.jpg" class="img-fluid" alt="Kalalau Valley, Kaua'i">
		    <h6 class="gallery-caption text-center mt-2">Kalalau Valley</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1115-ColeusGoneWild.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="COLEUS GONE WILD (1115) Pastel<br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat &amp; Frame: 11&rdquo;x14&rdquo;, $210.">
		    <img src="../gallery/images/portart/portil1115-ColeusGoneWild-thumbnail.jpg" class="img-fluid" alt="Wild Coleus">
		    <h6 class="gallery-caption text-center mt-2">Coleus Gone Wild</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1106-SweetAuburn.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SWEET AUBURN (1106) Pastel<br>
		Mt. Auburn Cemetery, Cambridge, MA.<br>
		&bull; Original Art:10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, $210.">
		    <img src="../gallery/images/portart/portil1106-SweetAuburn-thumbnail.jpg" class="img-fluid" alt="MAC: Sweet Auburn">
		    <h6 class="gallery-caption text-center mt-2">Sweet Auburn</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0912-willowpond-summer.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WILLOW POND, SUMMER (0912) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, $210.">
		    <img src="../gallery/images/portart/portil0912-willowpond-summer-thumbnail.jpg" class="img-fluid" alt="summer day at Willow Pond">
		    <h6 class="gallery-caption text-center mt-2">Willow Pond, Summer</h6>
	      </a>
      </div>

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


<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscape pastel">
  	    <a href="../gallery/images/portart/portil0815-inthewoods.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="IN THE WOODS (0815) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 9.75&rdquo;x8&rdquo;; with Mat &amp; Frame: 11&rdquo;x14&rdquo;, $210.">
		    <img src="../gallery/images/portart/portil0815-inthewoods-thumbnail.jpg" class="img-fluid" alt="Spectacle Pond woods">
		    <h6 class="gallery-caption text-center mt-2">In the Woods</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0718-portal-c2018.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PORTAL (0718) Pastel<br>
        &bull; Original Art: 16&rdquo;x12&rdquo;, $315.">
		    <img src="../gallery/images/portart/portil0718-portal-c2018-thumbnail.jpg" class="img-fluid" alt="Imagining a portal in the mountains">
		    <h6 class="gallery-caption text-center mt-2">Portal</h6>
	      </a>
      </div>


<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0407-antelopecanyon2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTELOPE CANYON 2 (0407) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat  &amp; Frame: 12&rdquo;x16&rdquo;, $265.">
		    <img src="../gallery/images/portart/portil0407-antelopecanyon2-thumbnail.jpg" class="img-fluid" alt="Antelope Canyon2 - art series">
		    <h6 class="gallery-caption text-center mt-2">Antelope Canyon #2</h6>
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
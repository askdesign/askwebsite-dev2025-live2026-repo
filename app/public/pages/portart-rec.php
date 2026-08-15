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


    <title>ASK Design | Art Portfolio</title>
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
        <li class="nav-item"><a class="nav-link" href="https://www.askdesign.biz">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>

        <li class="nav-item dropdown"><a class="nav-link active dropdown-toggle" href="portgd-rec.php" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Design</li>
                  <li><a class="dropdown-item" href="portgd-rec.php">Recent</a></li>
                  <li><a class="dropdown-item" href="portgd-arch.php">Archives</a></li>
                  <li class="dropdown-header divider"></li>
                  <li class="dropdown-header">Art</li>
                  <li><a class="dropdown-item active" aria-current="page" href="">Recent</a></li>
                  <li><a class="dropdown-item" href="portart-lic.php">Licensed</a></li>
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

        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="https://www.askdesign.biz/blog" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="https://www.askdesign.biz/blog/">Blog Home</a></li>
                  <li><a class="dropdown-item" href="https://www.askdesign.biz/blog/calendar/">Calendar</a></li>
                </ul>
        </li>

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
          <h2 class="page-title">Portfolio - Art</h2>
          <h3 class="page lead subhd">Recent Art Work</h3>
          <p class="page lead">These are samples of my recent art and illustration work.</p>
          <p><em>NOTE: click on the thumbnail image to see it enlarged in a slideshow!</em></p>
    <!-- Display past 3 years of art -->
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

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2526-nantasketbeach.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="NANTASKET BEACH (2526) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat & Frame 10”x8”, SOLD.">
		    <img src="../gallery/images/portart/portil2526-nantasketbeach-thumbnail.jpg" class="img-fluid" alt="late summer view of Nantasket Beach">
		    <h6 class="gallery-caption text-center mt-2">Nantasket Beach 2025</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2525-weirriverestuary.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WEIR RIVER ESTUARY (2525) pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat 10”x8”, $250.">
		    <img src="../gallery/images/portart/portil2525-weirriverestuary-thumbnail.jpg" class="img-fluid" alt="my first real experience of the marsh at the Weir River Estuary">
		    <h6 class="gallery-caption text-center mt-2">Weir River Estuary</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2524-suddenly.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SUDDENLY (2524) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat 10”x8”, nfs.">
		    <img src="../gallery/images/portart/portil2524-suddenly-thumbnail.jpg" class="img-fluid" alt="a storm suddenly emerged">
		    <h6 class="gallery-caption text-center mt-2">Suddenly</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2523-aroundthebend.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AROUND THE BEND (2523) Pastel <br>
		&bull; Original Art: 6&rdquo;x5&rdquo;; with Mat & Frame 8”x8”, $165.">
		    <img src="../gallery/images/portart/portil2523-aroundthebend-thumbnail.jpg" class="img-fluid" alt="curious about what lies around the bend in Hull Gut">
		    <h6 class="gallery-caption text-center mt-2">Around the Bend</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2522-ptallterton.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="POINT ALLERTON (2522) pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat 10”x8”, $250.">
		    <img src="../gallery/images/portart/portil2522-ptallterton-thumbnail.jpg" class="img-fluid" alt="concave curve of the land, the perspective, and the protrusion of Point Allerton in the distance">
		    <h6 class="gallery-caption text-center mt-2">Point Allerton</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2521-watersedge.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WATER'S EDGE (2521) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat 10”x8”, $165.">
		    <img src="../gallery/images/portart/portil2521-watersedge-thumbnail.jpg" class="img-fluid" alt="quiet and relaxing vibe on Sunset Point">
		    <h6 class="gallery-caption text-center mt-2">Water's Edge</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2520-earlysummer.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="EARLY SUMMER (2520) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat & Frame 10”x8”, $165.">
		    <img src="../gallery/images/portart/portil2520-earlysummer-thumbnail.jpg" class="img-fluid" alt="tree with amazing red leaves">
		    <h6 class="gallery-caption text-center mt-2">Early Summer</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2519-bobsboat.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BOB'S BOAT (2519) pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat 10”x8”, $165.">
		    <img src="../gallery/images/portart/portil2519-bobsboat-thumbnail.jpg" class="img-fluid" alt="Bob's boat moving through Mariner's Park.">
		    <h6 class="gallery-caption text-center mt-2">Bob's Boat</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2518-paintingwithlesley.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PAINTING WITH LESLEY (2518) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat 5.5”x6.75”, $80.">
		    <img src="../gallery/images/portart/portil2518-paintingwithlesley-thumbnail.jpg" class="img-fluid" alt="Painting with Lesley at Steamboat Wharf Marina">
		    <h6 class="gallery-caption text-center mt-2">Painting with Lesley</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2517-movingclouds.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WORLD'S END CLOUDS (2517) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat & Frame 11.5”x3.5”, $165.">
		    <img src="../gallery/images/portart/portil2517-movingclouds-thumbnail.jpg" class="img-fluid" alt="These moving clouds were spectacular!">
		    <h6 class="gallery-caption text-center mt-2">World's End Clouds</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2516-roseofsharon.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ROSE OF SHARON (2516) watercolor <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat 5”x7”, nfs.">
		    <img src="../gallery/images/portart/portil2516-roseofsharon-thumbnail.jpg" class="img-fluid" alt="Rose of Sharon take my breath away!">
		    <h6 class="gallery-caption text-center mt-2">Rose of Sharon</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2515-firsttownhallhull.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FIRST TOWN HALL, HULL (2515) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat 10”x8”, $165.">
		    <img src="../gallery/images/portart/portil2515-firsttownhallhull-thumbnail.jpg" class="img-fluid" alt="Hull's first Town Hall & School 1848">
		    <h6 class="gallery-caption text-center mt-2">First Town Hall, Hull</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2514-mayflowers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MAY FLOWERS (2514) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat & Frame 7”x5”, $120.">
		    <img src="../gallery/images/portart/portil2514-mayflowers-thumbnail.jpg" class="img-fluid" alt="flowers emerging in a serene corner">
		    <h6 class="gallery-caption text-center mt-2">May Flowers</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2513-solsticesky.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SOLSTICE SKY (2513) Pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat 6”x5”, $120.">
		    <img src="../gallery/images/portart/portil2513-solsticesky-thumbnail.jpg" class="img-fluid" alt="Glorious views of Hull Bay on the solstice.">
		    <h6 class="gallery-caption text-center mt-2">Solstice Sky</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2512-tuckedaway.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="TUCKED AWAY (2512) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat 9”x5”, $140.">
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
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat 11.5”x3.5”, $165.">
		    <img src="../gallery/images/portart/portil2510-scituateshore-thumbnail.jpg" class="img-fluid" alt="Scituate Harbor">
		    <h6 class="gallery-caption text-center mt-2">Scituate Shore</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2509-travelinglight.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="TRAVELING LIGHT (2509) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat 5”x6”, $120.">
		    <img src="../gallery/images/portart/portil2509-travelinglight-thumbnail.jpg" class="img-fluid" alt="Spectacular light on Japanese Maple kept moving">
		    <h6 class="gallery-caption text-center mt-2">Traveling Light</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2508-autumnatcorkscrew.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AUTUMN AT CORKSCREW SANCTUARY (2508) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat & Frame 11”x14”, $265.">
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

      <div class="col-sm-4 mb-4 gallery-item animals watercolor">
  	    <a href="../gallery/images/portart/portil2502-birdsandwords-list.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BIRDS AND WORDS 2 - LIST (2502) Watercolor <br>
		&bull; Original Art: 7.5&rdquo;x5&rdquo;; nfs.">
		    <img src="../gallery/images/portart/portil2502-birdsandwords-list-thumbnail.jpg" class="img-fluid" alt="I loved crafting a single, large word and placing birds on it.">
		    <h6 class="gallery-caption text-center mt-2">Birds and Words 2 - List</h6>
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
  	    <a href="../gallery/images/portart/portil2410-gratitude.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GRATITUDE (2410) Pastel <br>
		&bull; Original Art: 5.5&rdquo;x8&rdquo;; with Mat & Frame: 8”x10”, nfs.">
		    <img src="../gallery/images/portart/portil2410-gratitude-thumbnail.jpg" class="img-fluid" alt="grateful to paint at Habitat Education Center & Wildlife Sanctuary">
		    <h6 class="gallery-caption text-center mt-2">Gratitude</h6>
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

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2408-morninglight-at-wellfleet.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MORNING LIGHT AT WELLFLEET BAY(2408) Pastel <br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat 16”x12”, $250.">
		    <img src="../gallery/images/portart/portil2408-morninglight-at-wellfleet-thumbnail.jpg" class="img-fluid" alt="Wellfleet Bay, I missed you!">
		    <h6 class="gallery-caption text-center mt-2">Morning Light at Wellfleet Bay</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2407-lilies-pak.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LILY FOR PEGGY (2407) Watercolor <br>
		&bull; Original Art: 4.75&rdquo;x6.75&rdquo;; with Frame: 8”x10”, nfs.">
		    <img src="../gallery/images/portart/portil2407-lilies-pak-thumbnail.jpg" class="img-fluid" alt="vibrant orange lily">
		    <h6 class="gallery-caption text-center mt-2">Lily for Peggy</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2406-roses-pak.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BRATTLE STREET ROSES (2406) Watercolor<br>
		&bull; Original Art: 7&rdquo;x9&rdquo;; with Frame: 8”x10”, nfs.">
		    <img src="../gallery/images/portart/portil2406-roses-pak-thumbnail.jpg" class="img-fluid" alt="I was astounded by the hundreds of pink roses gracefully arching over a white picket fence.">
		    <h6 class="gallery-caption text-center mt-2">Brattle Street Roses</h6>
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

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2403-amaryllis-bday-carl.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AMARYLLIS FOR CARL (2403) Watercolor<br>
		&bull; Original Art: 10&rdquo;x13&rdquo;; nfs.">
		    <img src="../gallery/images/portart/portil2403-amaryllis-bday-carl-thumbnail.jpg" class="img-fluid" alt="amaryllis has soft, blended hues of pink, purple, and orange">
		    <h6 class="gallery-caption text-center mt-2">Amaryllis for Carl</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2402-valentine-rose.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="VALENTINE ROSE (2402) Watercolor <br>
		&bull; Original Art: 5&rdquo;x3.5&rdquo;; nfs.">
		    <img src="../gallery/images/portart/portil2402-valentine-rose-thumbnail.jpg" class="img-fluid" alt="Valentine rose">
		    <h6 class="gallery-caption text-center mt-2">Valentine Rose</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2401-10year-anniversary-rose.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="10 YEAR ANNIVERSARY ROSE (2401) Watercolor <br>
		&bull; Original Art: 5&rdquo;x7&rdquo;; nfs.">
		    <img src="../gallery/images/portart/portil2401-10year-anniversary-rose-thumbnail.jpg" class="img-fluid" alt="10h Anniversary card for Peggy">
		    <h6 class="gallery-caption text-center mt-2">10 Year Anniversary Rose</h6>
	      </a>
      </div>

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




      </div><!-- end of row mb-4 -->


    </div><!-- columns -->

    </div><!-- end of gallery row -->




    
    </section><!-- end of content -->

  </div><!-- end of container -->
</main><!-- end of main -->

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
  </div><!-- end of container -->
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

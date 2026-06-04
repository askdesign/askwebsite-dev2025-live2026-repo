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



    <title>ASK Design | Shop - Original Art - Cat 2012 to 2019</title>

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
                  <li><a class="dropdown-item active" href="shop-cat.php">Original Art</a></li>
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
          <h2 class="page-title">Shop - Original Art - Cat 2012 to 2019</h2>
          <h3 class="page lead subhd">Original Art Work</h3>
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

    <div id="portart-rec" class="gallery row">

    <div class="col-12"><!-- columns -->

      <div class="row mb-4">

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1924-lettucelake.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LETTUCE LAKE IN THE SUN (1924) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, $200.">
		    <img src="../gallery/images/portart/portil1924-lettucelake-thumbnail.jpg" class="img-fluid" alt="backlit trees in the swamp">
		    <h6 class="gallery-caption text-center mt-2">Lettuce Lake in the Sun</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1923-pickerelweed.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PICKERELlWEED (1923) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $165.">
		    <img src="../gallery/images/portart/portil1923-pickerelweed-thumbnail.jpg" class="img-fluid" alt="I love the shape of this plant's leaves and the lavender flower it produces.">
		    <h6 class="gallery-caption text-center mt-2">Pickerellweed</h6>
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
  	    <a href="../gallery/images/portart/portil1921-corkscrewcypress.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CORKSCREW CYPRESS (1921) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1921-corkscrewcypress-thumbnail.jpg" class="img-fluid" alt="incredible trees in the swamp!">
		    <h6 class="gallery-caption text-center mt-2">Corkscrew Cypress</h6>
	      </a>
      </div>

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
  	    <a href="../gallery/images/portart/portil1918-waitingwatching.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WAITING AND WATCHING (1918) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 10&rdquo;x3.75&rdquo;; with Mat: 14&rdquo;x8&rdquo;, $125.">
		    <img src="../gallery/images/portart/portil1918-waitingwatching-thumbnail.jpg" class="img-fluid" alt="sun becoming a bright orange ball">
		    <h6 class="gallery-caption text-center mt-2">Waiting and Watching</h6>
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

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1913-tiny-orchid.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="TINY ORCHID (1913) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 5.5&rdquo;x3.75&rdquo;; no Mat: $20.">
		    <img src="../gallery/images/portart/portil1913-tiny-orchid-thumbnail.jpg" class="img-fluid" alt="Tiny orchid.">
		    <h6 class="gallery-caption text-center mt-2">Tiny Orchid</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants landscapes pastel">
  	    <a href="../gallery/images/portart/portil1912-palm-and-orchids.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PALM AND ORCHID (1912) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat &amp; Frame: 11&rdquo;x14&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil1912-palm-and-orchids-thumbnail.jpg" class="img-fluid" alt="This palm tree is my companion.">
		    <h6 class="gallery-caption text-center mt-2">Orchids on a Palm Tree</h6>
	      </a>
      </div>

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

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1909-finding-voice.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FINDING MY ART VOICE (1909) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 11.5&rdquo;x3.75&rdquo;; no Mat:  $115.">
		    <img src="../gallery/images/portart/portil1909-finding-voice-thumbnail.jpg" class="img-fluid" alt="Discovering my voice in art was a gradual process.">
		    <h6 class="gallery-caption text-center mt-2">Finding My Art Voice</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1908-here-i-stand.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HERE I STAND (1908) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil1908-here-i-stand-thumbnail.jpg" class="img-fluid" alt="The tree in the swamp is in an open area, exposed to the elements.">
		    <h6 class="gallery-caption text-center mt-2">Here I Stand</h6>
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

      <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil1906-lavender-orchid.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LAVENDER ORCHID (1906) Colored Pencil <br>
		Naples, FL<br>
		&bull; Original Art: 3.75&rdquo;x5&rdquo;; with Mat &amp; Frame: 8&rdquo;x10&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil1906-lavender-orchid-thumbnail.jpg" class="img-fluid" alt="Drawing with colored pencils lets me capture the details.">
		    <h6 class="gallery-caption text-center mt-2">Lavender Orchid</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1905-scarlet-passionflower.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SCARLET PASSIONFLOWER (1905) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 9&rdquo;x6&rdquo;; with Mat &amp; Frame: 12&rdquo;x9&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1905-scarlet-passionflower-thumbnail.jpg" class="img-fluid" alt="energetic-looking Passion Flower in a shady spot next to the waterfall">
		    <h6 class="gallery-caption text-center mt-2">Scarlet Passionflower</h6>
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

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1903-calusa-clouds.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CALUSA CLOUDS (1903) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil1903-calusa-clouds-thumbnail.jpg" class="img-fluid" alt="Wonderful morning at the botanical garden.">
		    <h6 class="gallery-caption text-center mt-2">Calusa Clouds</h6>
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
		&bull; Original Art: 17&rdquo;x11&rdquo;; no Mat: $125.">
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

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1809-corkscrew-corner.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CORKSCREW CORNER (1809) Pastel<br>
		Naples, FL<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $125.">
		    <img src="../gallery/images/portart/portil1809-corkscrew-corner-thumbnail.jpg" class="img-fluid" alt="Dragonflies visited me continually in this Corkscrew corner">
		    <h6 class="gallery-caption text-center mt-2">Corkscrew Corner</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1808-salmon-hibiscus.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SALMON HIBISCUS (1808) Pastel<br>
		Naples, FL<br>
		&bull; Original Art: 7&rdquo;x7&rdquo;; with Mat: 10&rdquo;x10&rdquo;, $50.">
		    <img src="../gallery/images/portart/portil1808-salmon-hibiscus-thumbnail.jpg" class="img-fluid" alt="salmon-colored hibiscus has elaborate, double-layered petals">
		    <h6 class="gallery-caption text-center mt-2">Salmon Hibiscus</h6>
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
  	    <a href="../gallery/images/portart/portil1804-sawgrass-palmetto-study.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SAWGRASS PALMETTO STUDY (1804) Pastel<br>
		Naples, FL<br>
		&bull; Original Art: 5.5&rdquo;x3.5&rdquo;; $20.">
		    <img src="../gallery/images/portart/portil1804-sawgrass-palmetto-study-thumbnail.jpg" class="img-fluid" alt="sawgrass palmettos: native to Florida, quite prolific">
		    <h6 class="gallery-caption text-center mt-2">Sawgrass Palmetto Study</h6>
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

      <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil1802-stunning-clouds-at-vanderbilt.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="STUNNING CLOUDS AT VANDERBILT (1802) Colored Pencil<br>
		Naples, FL<br>
		&bull; Original Art: 9&rdquo;x5&rdquo;; $30.">
		    <img src="../gallery/images/portart/portil1802-stunning-clouds-at-vanderbilt-thumbnail.jpg" class="img-fluid" alt="Stunning Clouds at Vanderbilt Beach">
		    <h6 class="gallery-caption text-center mt-2">Stunning Clouds at Vanderbilt</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pencil">
  	    <a href="../gallery/images/portart/portil1801-sea-turtle.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SEA TURTLE (1801) Colored Pencil <br>
		Naples, FL<br>
		&bull; Original Art: 7&rdquo;x5&rdquo;; $20.">
		    <img src="../gallery/images/portart/portil1801-sea-turtle-thumbnail.jpg" class="img-fluid" alt="When I became aware of the red tide, I became very concerned for the sea life, especially the sea turtles.">
		    <h6 class="gallery-caption text-center mt-2">Sea Turtle</h6>
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
  	    <a href="../gallery/images/portart/portil1715-early-spring-buds.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="EARLY SPRING BUDS (1715) Pastel <br>
		&bull; Original Art: 5&rdquo;x7&rdquo;; with Mat: 8&rdquo;x10&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1715-early-spring-buds-thumbnail.jpg" class="img-fluid" alt="Spring is the sweetest time of year">
		    <h6 class="gallery-caption text-center mt-2">Early Spring Buds</h6>
	      </a>
      </div>

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

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1711-contemplative.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CONTEMPLATIVE (1711) Pastel <br>
		Walden Pond, Lincoln, MA<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1711-contemplative-thumbnail.jpg" class="img-fluid" alt="A contemplative spot at Walden Pond">
		    <h6 class="gallery-caption text-center mt-2">Contemplative</h6>
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

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1702-narcissus-hello.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="NARCISSUS HELLO (1702) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat &amp; Frame: 11&rdquo;x14&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1702-narcissus-hello-thumbnail.jpg" class="img-fluid" alt="sweet, delicate narcissus">
		    <h6 class="gallery-caption text-center mt-2">Narcissus Hello</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pen">
  	    <a href="../gallery/images/portart/portil1616-lebata-rest-camp.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LEBATA REST CAMP (1616) Pen & Ink <br>
		&bull; Original Art: 9&rdquo;x5.75&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil1616-lebata-rest-camp-thumbnail.jpg" class="img-fluid" alt="study: Lebata Rest Camp">
		    <h6 class="gallery-caption text-center mt-2">Lebata Rest Camp</h6>
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

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1614-quiet-corner.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUIET CORNER (1614) Pastel <br>
		Boston Public Garden, MA<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1614-quiet-corner-thumbnail.jpg" class="img-fluid" alt="Quiet corner in Boston Public Garden">
		    <h6 class="gallery-caption text-center mt-2">Quiet Corner</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1613-colorful-fence.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="COLORFUL FENCE (1613) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat: 11&rdquo;x14&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1613-colorful-fence-thumbnail.jpg" class="img-fluid" alt="Peggy's garden: the colorful fence">
		    <h6 class="gallery-caption text-center mt-2">Colorful Fence</h6>
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

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1611-no-wonder-he-lived-here.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="NO WONDER HE LIVED HERE (1611) Pastel <br>
		Frederic Church's home in Olana, Hudson, NY<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil1611-no-wonder-he-lived-here-thumbnail.jpg" class="img-fluid" alt="Frederic Church studio view of Hudson River Valley">
		    <h6 class="gallery-caption text-center mt-2">No Wonder He Lived Here</h6>
	      </a>
      </div>

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
  	    <a href="../gallery/images/portart/portil1608-echinacea-and-gayfeather.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ECHINACEA AND GAY FEATHER (1608) Pastel <br>
		&bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1608-echinacea-and-gayfeather-thumbnail.jpg" class="img-fluid" alt="study: echinacea and gay feather">
		    <h6 class="gallery-caption text-center mt-2">Echinacea and Gay Feather</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1607-daylilies.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DAY LILIES (1607) Pastel <br>
		&bull; Original Art: 9&rdquo;x6.5&rdquo;; with Mat &amp; Frame: 12&rdquo;x9&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1607-daylilies-thumbnail.jpg" class="img-fluid" alt="Happy yellow flowers">
		    <h6 class="gallery-caption text-center mt-2">Day Lilies</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1606-yinyang.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="YIN YANG (1606) Pastel <br>
		Antelope Canyon, Navajo Nation, Arizona<br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat &amp; Frame: 11&rdquo;x14&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil1606-yinyang-thumbnail.jpg" class="img-fluid" alt="Other-worldly contours and shapes">
		    <h6 class="gallery-caption text-center mt-2">Yin Yang</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1605-stelladeoro2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="STELLA DE ORO #2 (1605) Pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $85.">
		    <img src="../gallery/images/portart/portil1605-stelladeoro2-thumbnail.jpg" class="img-fluid" alt="Stella d'Oro in full bloom in front yard garden.">
		    <h6 class="gallery-caption text-center mt-2">Stella de Oro #2</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1604-fireworks.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FIREWORKS (1604) Pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1604-fireworks-thumbnail.jpg" class="img-fluid" alt="Fireworks">
		    <h6 class="gallery-caption text-center mt-2">Fireworks</h6>
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

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1520-canyondechelly-cliffdwellers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CANYON DE CHELLY CLIFFDWELLERS (1520) Pastel <br>
		Navajo Nation, Arizona<br>
		&bull; Original Art: 5&rdquo;x9&rdquo;; with Mat: 8&rdquo;x11&rdquo;, $50.">
		    <img src="../gallery/images/portart/portil1520-canyondechelly-cliffdwellers-thumbnail.jpg" class="img-fluid" alt="amazing cliffs in Canyon de Chelly">
		    <h6 class="gallery-caption text-center mt-2">Canyon de Chelly Cliffdwellers</h6>
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
  	    <a href="../gallery/images/portart/portil1518-blueridgemist1.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BLUE RIDGES MIST 1 (1518) Pastel <br>
		Asheville, North Carolina<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 11&rdquo;x14&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1518-blueridgemist1-thumbnail.jpg" class="img-fluid" alt="morning mist floating in the peaks in the Blue Ridge Mountains">
		    <h6 class="gallery-caption text-center mt-2">Blue Ridges Mist 1</h6>
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

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1509-lovely-lilies.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LOVELY LILIES (1509) Pastel <br>
		&bull; Original Art: 10&rdquo;x7.5&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1509-lovely-lilies-thumbnail.jpg" class="img-fluid" alt="sweet, lovely lilies">
		    <h6 class="gallery-caption text-center mt-2">Lovely Lilies</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1508-blueridges2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BLUE RIDGES 2 (1508) Pastel <br>
		Asheville, North Carolina<br>
		&bull; Original Art: 11.5&rdquo;x3.75&rdquo;; with Mat: 16&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1508-blueridges2-thumbnail.jpg" class="img-fluid" alt="view of Blue Ridges 2">
		    <h6 class="gallery-caption text-center mt-2">Blue Ridges 2</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1507-blueridges1.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BLUE RIDGES 1 (1507) Pastel <br>
		Asheville, North Carolina<br>
		&bull; Original Art: 12&rdquo;x3.75&rdquo;; with Mat: 16&rdquo;x8&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil1507-blueridges1-thumbnail.jpg" class="img-fluid" alt="view of Blue Ridges">
		    <h6 class="gallery-caption text-center mt-2">Blue Ridges 1</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes mixed">
  	    <a href="../gallery/images/portart/portil1506-standout-redbush.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="STANDOUT (1506) Pastel &amp; Watercolor <br>
		Summer at Kripalu Center, Lenox, MA<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, $265.">
		    <img src="../gallery/images/portart/portil1506-standout-redbush-thumbnail.jpg" class="img-fluid" alt="Red bush standing out">
		    <h6 class="gallery-caption text-center mt-2">Standout</h6>
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

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1504-hana-heaven.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HANA HEAVEN (1504) Pastel<br>
		Red Sand Beach, Hana, Maui.<br>
		&bull; Original Art: 10&rdquo;x8	&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, $210.">
		    <img src="../gallery/images/portart/portil1504-hana-heaven-thumbnail.jpg" class="img-fluid" alt="Heavenly day in Hana">
		    <h6 class="gallery-caption text-center mt-2">Hana Heaven</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1503-azaleas-in-pink.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AZALEAS IN PINK (1503) Pastel<br>
		&bull; Original Art: 5&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1503-azaleas-in-pink-thumbnail.jpg" class="img-fluid" alt="Peggy's garden: Azaleas in Pink">
		    <h6 class="gallery-caption text-center mt-2">Azaleas in Pink</h6>
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

     <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1501-azaleas.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AZALEAS (1501) Pastel<br>
		&bull; Original Art: 7&rdquo;x5&rdquo;; with Mat &amp; Frame: 10&rdquo;x8&rdquo;, SOLD">
		    <img src="../gallery/images/portart/portil1501-azaleas-thumbnail.jpg" class="img-fluid" alt="Peggy's Garden: azaleas">
		    <h6 class="gallery-caption text-center mt-2">Azaleas</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes watercolor">
  	    <a href="../gallery/images/portart/portil1416-definition-wonderful-day.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DEFINITION OF A WONDERFUL DAY (1416) Watercolor <br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; nfs.">
		    <img src="../gallery/images/portart/portil1416-definition-wonderful-day-thumbnail.jpg" class="img-fluid" alt="Wonderful Day Painting with Tina">
		    <h6 class="gallery-caption text-center mt-2">Definition of a Wonderful Day</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes mixed">
  	    <a href="../gallery/images/portart/portil1415-monument-valley.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MONUMENT VALLEY (1415) Pastel, Gouache, Watercolor <br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1415-monument-valley-thumbnail.jpg" class="img-fluid" alt="Iconic structures of Monument Valley">
		    <h6 class="gallery-caption text-center mt-2">Monument Valley</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1414-thrugate.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="THROUGH THE GATE (1414) Pastel <br>
		&bull; Habitat Audubon Sanctuary, Belmont, MA<br>
		&bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, $160.">
		    <img src="../gallery/images/portart/portil1414-thrugate-thumbnail.jpg" class="img-fluid" alt="Looking at the garden through the gate">
		    <h6 class="gallery-caption text-center mt-2">Through the Gate</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1413-berkshires-late-fall.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BERKSHIRES: LATE FALL (1413) Pastel <br>
		&bull; Kripalu Center, Lenox, MA<br>
		&bull; Original Art: 8.375&rdquo;x4.625&rdquo;; with Mat: 12&rdquo;x9&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1413-berkshires-late-fall-thumbnail.jpg" class="img-fluid" alt="Late Fall in the Berkshires">
		    <h6 class="gallery-caption text-center mt-2">Berkshires: Late Fall</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1412-lastday.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LAST DAY (1412) Pastel <br>
		&bull; Omega Institute, Rhinebeck, NY<br>
		&bull; Original Art: 9&rdquo;x12&rdquo;; with Mat &amp; Frame: 12&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1412-lastday-thumbnail.jpg" class="img-fluid" alt="I love painting Long Pond Lake, especially in the morning when all is quiet.">
		    <h6 class="gallery-caption text-center mt-2">Last Day</h6>
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

      <div class="col-sm-4 mb-4 gallery-item people mixed">
  	    <a href="../gallery/images/portart/portil1409-louise-boston1944.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LOUISE: BOSTON 1944 (1409) Mixed Media<br>
		Created in memory of my mother. One of my fave photos of my mother. I surrounded that picture with things that my mother loved: the beach, butterflies, flowers, and the color purple..<br>
		&bull; Original Art: 10&rdquo;x15.5&rdquo;; nfs.">
		    <img src="../gallery/images/portart/portil1409-louise-boston1944-thumbnail.jpg" class="img-fluid" alt="Created in memory of my mother. ">
		    <h6 class="gallery-caption text-center mt-2">Louise: Boston 1944</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes mixed">
  	    <a href="../gallery/images/portart/portil1408-lapassion.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LA PASSION (1408) Mixed Media <br> 
		&bull; Original Art: 6.25&rdquo;x10.75&rdquo;; no Mat or Frame, $60.">
		    <img src="../gallery/images/portart/portil1408-lapassion-thumbnail.jpg" class="img-fluid" alt="A mixture of my graphic design sensibilities with my love of paper, texture, and language.">
		    <h6 class="gallery-caption text-center mt-2">La Passion</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1310-berkshires-late-oct.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BERKSHIRES: LATE AUTUMN (1310) Pastel<br>
		View of Lake Mahkeenac at Kripalu Center, Lenox, MA.<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil1310-berkshires-late-oct-thumbnail.jpg" class="img-fluid" alt="View of Lake Mahkeenac in October">
		    <h6 class="gallery-caption text-center mt-2">Berkshires: Late October</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1309-olanaoverlook.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OLANA OVERLOOK (1309) Pastel<br>
		Olana State Historic Site, Hudson, NY. The 19th century artist Frederic Edwin Church lived and painted here.<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1309-olanaoverlook-thumbnail.jpg" class="img-fluid" alt="The overlook scene from Olana">
		    <h6 class="gallery-caption text-center mt-2">Olana Overlook</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1308-raquel-morning-walk.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="RAQUEL'S MORNING WALK (1308) Pastel<br>
		Long Pond Lake, Omega Institute, Rhinebeck, NY. As I was finishing this painting, a woman walked by and started talking to me about it. She decided to buy the painting right then and there!<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD. ">
		    <img src="../gallery/images/portart/portil1308-raquel-morning-walk-thumbnail.jpg" class="img-fluid" alt="Raquel bought this while on her morning walk">
		    <h6 class="gallery-caption text-center mt-2">Raquel's Morning Walk</h6>
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

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1306-hand-onmy-heart.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HAND ON MY HEART (1306) Pastel<br>
		Omega Institute, Rhinebeck, NY.<br>
		&bull; Original Art: 9&rdquo;x6&rdquo;; with Mat &amp; Frame: 12&rdquo;x9&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1306-hand-onmy-heart-thumbnail.jpg" class="img-fluid" alt="Flowers' beauty caused me to place my hand on my heart">
		    <h6 class="gallery-caption text-center mt-2">Hand on my Heart</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1305-bright-lightness.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BRIGHT LIGHTNESS (1305) Pastel<br>
		Omega Institute, Rhinebeck, NY.<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1305-bright-lightness-thumbnail.jpg" class="img-fluid" alt="Bright yellow Iris">
		    <h6 class="gallery-caption text-center mt-2">Bright Lightness</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1304-hosta-pattern.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HOSTA PATTERN (1304) Pastel<br>
		Omega Institute, Rhinebeck, NY.<br>
		&bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1304-hosta-pattern-thumbnail.jpg" class="img-fluid" alt="pattern in Hosta plant">
		    <h6 class="gallery-caption text-center mt-2">Hosta Pattern</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1303-iris-sweetness.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="IRIS SWEETNESS (1303) Pastel<br>
		&bull; Original Art: 7&rdquo;x5&rdquo;; with Mat &amp; Frame: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1303-iris-sweetness-thumbnail.jpg" class="img-fluid" alt="Peggy's garden: Iris">
		    <h6 class="gallery-caption text-center mt-2">Iris Sweetness</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes mixed">
  	    <a href="../gallery/images/portart/portil1302-kalalau-valley.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="KALALAU VALLEY (1302) Pastel, watercolor, gouache<br>
		Kalalau Valley, on the northwest side of the island of Kaua'i in Hawai'i. <br>
		&bull; Original Art: 15&rdquo;x6.25&rdquo;; with Mat &amp; Frame: 18&rdquo;x9&rdquo;, $265.">
		    <img src="../gallery/images/portart/portil1302-kalalau-valley-thumbnail.jpg" class="img-fluid" alt="Kalalau Valley, Kaua'i">
		    <h6 class="gallery-caption text-center mt-2">Kalalau Valley</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1301-morning-mist.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MORNING MIST (1301) Pastel<br>
		An early morning view of Lake Mahkeenac at Kripalu Center, Lenox, MA<br>
		&bull; Original Art: 12.5&rdquo;x4.75&rdquo;; with Mat: 15&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1301-morning-mist-thumbnail.jpg" class="img-fluid" alt="early morning view of Lake Mahkeenac">
		    <h6 class="gallery-caption text-center mt-2">Morning Mist</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1208-quiet.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUIET (1208) Pastel<br>
		A quiet fall afternoon at Lake Mahkeenac at Kripalu Center, Lenox, MA.<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1208-quiet-thumbnail.jpg" class="img-fluid" alt="A quiet fall afternoon at Lake Mahkeenac">
		    <h6 class="gallery-caption text-center mt-2">Quiet</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1207-soft-bend.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SOFT BEND (1207) Pastel<br>
		View of road in front of Mary's Farm, Rhinebeck, NY.<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1207-soft-bend-thumbnail.jpg" class="img-fluid" alt="View of road in front of Mary's Farm">
		    <h6 class="gallery-caption text-center mt-2">Garden Welcoming</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1206-walking-meditation.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WALKING MEDITATION (1206) Pastel<br>
		The labyrinth at Kripalu Center, Lenox, MA.<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil1206-walking-meditation-thumbnail.jpg" class="img-fluid" alt="The labyrinth at Kripalu Center">
		    <h6 class="gallery-caption text-center mt-2">Walking Meditation</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1205-danceforjoy.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DANCE FOR JOY (1205) Pastel<br>
		The garden at Omega Institute, Rhinebeck, NY.<br>
		&bull; Original Art: 7&rdquo;x5&rdquo;; $20.">
		    <img src="../gallery/images/portart/portil1205-danceforjoy-thumbnail.jpg" class="img-fluid" alt="The garden at Omega Institute">
		    <h6 class="gallery-caption text-center mt-2">Dance for Joy</h6>
	      </a>
      </div>

<!-- end of row -->

     <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1204-garden-welcoming.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GARDEN WELCOMING (1204) Pastel<br>
		The garden entrance at Omega Institute, Rhinebeck, NY.<br>
		&bull; Original Art: 9&rdquo;x7&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1204-garden-welcoming-thumbnail.jpg" class="img-fluid" alt="The garden entrance at Omega Institute, Rhinebeck, NY">
		    <h6 class="gallery-caption text-center mt-2">Garden Welcoming</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1203-deep-breath.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DEEP BREATH (1203) Pastel<br>
		Long Pond Lake, Omega Institute, Rhinebeck, NY.<br>
		&bull; Original Art: 11-1/8&rdquo;x5&rdquo;; with Mat &amp; Frame: 15&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1203-deep-breath-thumbnail.jpg" class="img-fluid" alt="Long Pond Lake, Omega Institute, Rhinebeck, NY">
		    <h6 class="gallery-caption text-center mt-2">Deep Breath</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1202-waking-up.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WAKING UP (1202) Pastel<br>
		Crisp fall morning at Kripalu Center, Lenox, MA.<br>
		&bull; Original Art: 9&rdquo;x12&rdquo;; with Mat &amp; Frame: 12&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1202-waking-up-thumbnail.jpg" class="img-fluid" alt="Crisp fall morning at Kripalu Center, Lenox, MA.">
		    <h6 class="gallery-caption text-center mt-2">Waking Up</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1201-hydrangea.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HYDRANGEA (1201) Pastel<br>
		&bull; Original Art: 5&rdquo;x5&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil1201-hydrangea-thumbnail.jpg" class="img-fluid" alt="Peggy's Garden: Hydrangea">
		    <h6 class="gallery-caption text-center mt-2">Hydrangea</h6>
	      </a>
      </div>


</div><!-- END OF row mb-4-->


    </div><!-- END OF col-12 -->

    </div><!-- END OF portart-rec ID and gallery row -->
    <h5>
      <a href="shop-cat-all-2006-11.php"><button type="button" class="btn btn-outline-primary">MORE ART</button></a>
    </h5>

    
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
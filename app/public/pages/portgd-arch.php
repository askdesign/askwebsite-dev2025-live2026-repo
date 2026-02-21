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




    <title>ASK Design | Design Archives Portfolio</title>
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
                  <li><a class="dropdown-item active" href="portgd-arch.php">Archives</a></li>
                  <li class="dropdown-header divider"></li>
                  <li class="dropdown-header">Art</li>
                  <li><a class="dropdown-item" href="portart-rec.php">Recent</a></li>
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
          <h2 class="page-title">Portfolio - Design Archives</h2>
          <h3 class="page lead subhd">Past Design Work</h3>
          <p class="page lead">These are samples of my web design and graphic design work done in the past few years.</p>
          <p><em>NOTE: click on the thumbnail image to see it enlarged in a slideshow!</em></p>
    </section>

    <section class="content"><!-- content area -->
      <!-- Filtering UI -->
      <!-- Isotope Grid Container -->
      <div class="btn-group filters-button-group mb-4" role="group" aria-label="Design filters">
        <button type="button" class="btn btn-outline-primary is-checked" data-filter="*">all</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".web-design">web design</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".graphic-design">graphic design</button>
      </div>

    <div class="gallery row">
    <div class="col-12"><!-- columns -->

      <div class="row mb-4">
      <div class="col-sm-4 mb-4 gallery-item web-design">
        <a href="../gallery/images/portgd-arch/2021janetsmith-website.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="WEB DEVELOPMENT - Janet Smith Photos: <br>Content updates, customizations, maintenance, and improved functionality.">
		    <img src="../gallery/images/portgd-arch/2021janetsmith-website-thumbnail.jpg" class="img-fluid" alt="JSmith original site">
		    <h6 class="gallery-caption text-center mt-2">Janet Smith Photos</h6>    
        </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
	      <a href="../gallery/images/portgd-arch/2021gbdog-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Greater Boston Dog Training: <br>Original site was using outdated legacy code and was not mobile-responsive. We rebuilt the site in WordPress and migrated it to a new webhost. Improved site performance, functionality, speed, and mobile-responsiveness.">
		    <img src="../gallery/images/portgd-arch/2021gbdog-website.jpg" class="img-fluid" alt="GBDT">
		    <h6 class="gallery-caption text-center mt-2">Greater Boston Dog Training</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
	      <a href="../gallery/images/portgd-arch/2021abbalocksmith-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Abbalocksmith Services: <br>Overhauled site with a new look and feel, improved mobile-responsiveness, and a major SEO boost. Moved hosting to WP Engine to provide easier client access to the back-end. Lots of behind-the-scenes features bring this website to a whole new level!">
		    <img src="../gallery/images/portgd-arch/2021abbalocksmith-website.jpg" class="img-fluid" alt="AbbaLocksmith">
		    <h6 class="gallery-caption text-center mt-2">Abba Locksmith Services</h6>
	      </a>
      </div><!-- end of col -->

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2018medialiteracynow-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN - Media Literacy Now: <br>Design update, customization, and maintenance. Improved aesthetics, functionality, and mobile-responsiveness; more user-interaction.">
		    <img src="../gallery/images/portgd-arch/2018medialiteracynow-website.jpg" class="img-fluid" alt="MLN">
		    <h6 class="gallery-caption text-center mt-2">Media Literacy Now</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2017tford-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DEVELOPMENT &amp; MAINTENANCE - TFord - General Contractors: <br>The site was about 10 years old and needed a complete overhaul to make the design more contemporary and meet current coding standards. My friend and colleague, Janice Moore, was the lead designer and I was the front-end developer implementing her design. The site was rebuilt on the Bootstrap framework and is now mobile responsive. Special features: fly-out navigation menu and full-width image on home page.">
		    <img src="../gallery/images/portgd-arch/2017tford-website.jpg" class="img-fluid" alt="TFord earlier website">
		    <h6 class="gallery-caption text-center mt-2">TFord</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
        <a href="../gallery/images/portgd-arch/2019sps-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEBMASTER<br>Skin Perfect Spas: Website content updates, customizations, and maintenance.">
		    <img src="../gallery/images/portgd-arch/2019sps-website.jpg" class="img-fluid" alt="SPS original website">
		    <h6 class="gallery-caption text-center mt-2">SPS</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2018websurfer-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN - Websurfer Associates: <br>Website design, customization, and maintenance.">
		    <img src="../gallery/images/portgd-arch/2018websurfer-website.jpg" class="img-fluid" alt="Websurfer tech consultants">
		    <h6 class="gallery-caption text-center mt-2">Websurfer Associates</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2019cmp-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEBMAESTRO - Colore Me Perfect: <br>Website content updates, customizations, and maintenance.">
		    <img src="../gallery/images/portgd-arch/2019cmp-website.jpg" class="img-fluid" alt="CMP">
		    <h6 class="gallery-caption text-center mt-2">Colore Me Perfect</h6>
	      </a>
      </div>      
      
      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2019spu-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEBMAESTRO - Skin Perfect University: <br>Website content updates, customizations, and maintenance.">
		    <img src="../gallery/images/portgd-arch/2019spu-website.jpg" class="img-fluid" alt="SPU">
		    <h6 class="gallery-caption text-center mt-2">Skin Perfect University</h6>
	      </a>
      </div>


<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2017waa-website-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEBMAESTRO - Watertown Art Association: <br>Website content updates, customizations, and maintenance.">
		    <img src="../gallery/images/portgd-arch/2017waa-website.jpg" class="img-fluid" alt="WAA">
		    <h6 class="gallery-caption text-center mt-2">Watertown Art Association</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2017onecanhelp-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEBMAESTRO  - One Can Help: <br>Website content updates, customizations, and maintenance.">
		    <img src="../gallery/images/portgd-arch/2017onecanhelp-website.jpg" class="img-fluid" alt="OCH">
		    <h6 class="gallery-caption text-center mt-2">One Can Help</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2018quietside-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN - Quietside Gallery: <br>Design and web consult; Squarespace configuration and tutorials. https://www.quietsidegallery.com/">
		    <img src="../gallery/images/portgd-arch/2018quietside-website.jpg" class="img-fluid" alt="Quietside Art Gallery">
		    <h6 class="gallery-caption text-center mt-2">Quietside Gallery</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2018taylor-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN - Duck Taylor: <br>Site configuration, theme settings, consult. https://ducktaylor1.wordpress.com/">
		    <img src="../gallery/images/portgd-arch/2018taylor-website.jpg" class="img-fluid" alt="Fran Taylor writings">
		    <h6 class="gallery-caption text-center mt-2">Duck Taylor</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2018johncnorton-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN - John C. Norton: <br>Design and web consult; Squarespace configuration and tutorials.">
		    <img src="../gallery/images/portgd-arch/2018johncnorton-website.jpg" class="img-fluid" alt="John Norton artwork">
		    <h6 class="gallery-caption text-center mt-2">John C. Norton</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2018dustymiller-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN - Dusty J. Miller: <br>Website design, configuration, and maintenance.">
		    <img src="../gallery/images/portgd-arch/2018dustymiller-website.jpg" class="img-fluid" alt="Dusty Miller writings">
		    <h6 class="gallery-caption text-center mt-2">Dusty J. Miller</h6>
	      </a>
      </div>

<!-- end of row -->
<!-- RESUME FROM THIS POINT -->

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2019kwelling-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DEVELOPMENT - Welling Coaching and Counseling: </br>
        Website maintenance and consult. https://www.kwelling.com/">
		    <img src="../gallery/images/portgd-arch/2019kwelling-website-thumbnail.jpg" class="img-fluid" alt="Karen Welling">
		    <h6 class="gallery-caption text-center mt-2">Welling Coaching and Counseling</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2018zamir-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Zamir Chorale of Boston: </br>
        Website design, customization, and maintenance. Special Features: members portal, slide shows, Constant Contact/YouTube/Paypal integration. https://www.zamir.org/">
		    <img src="../gallery/images/portgd-arch/2018zamir-website-thumbnail.jpg" class="img-fluid" alt="Zamir Chorale site">
		    <h6 class="gallery-caption text-center mt-2">Zamir Chorale of Boston</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2018perpetualmobiles-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Perpetual Mobiles: </br>
        Website design, customization, and maintenance. https://www.perpetualmobiles.com">
		    <img src="../gallery/images/portgd-arch/2018perpetualmobiles-website-thumbnail.jpg" class="img-fluid" alt="Mobile artist">
		    <h6 class="gallery-caption text-center mt-2">Perpetual Mobiles</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2018morse-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Helen Morse / Photographer: </br>
        Photoshelter platform customization, and maintenance. https://www.helenmorse.com">
		    <img src="../gallery/images/portgd-arch/2018morse-website-thumbnail.jpg" class="img-fluid" alt="Morse Photography">
		    <h6 class="gallery-caption text-center mt-2">Helen Morse / Photographer</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2017bga-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Belmont Gallery of Art: </br>
        Website design, customization, and maintenance. Special Features: slide shows, event listings, Constant Contact, and SignUp.com integration. http://www.belmontgallery.org/">
		    <img src="../gallery/images/portgd-arch/2017bga-website-thumbnail.jpg" class="img-fluid" alt="BGA">
		    <h6 class="gallery-caption text-center mt-2">Belmont Gallery of Art</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2017katzeff-paul-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Paul Katzeff:  </br>
        Website design, customization, and maintenance. https://www.paulkatzeff.com/">
		    <img src="../gallery/images/portgd-arch/2017katzeff-paul-website-thumbnail.jpg" class="img-fluid" alt="Writer site">
		    <h6 class="gallery-caption text-center mt-2">Paul Katzeff</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2016pak-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Peggy Kornegger: </br>
        Site configuration, theme settings, consult. https://spiritflower.wordpress.com/">
		    <img src="../gallery/images/portgd-arch/2016pak-website-thumbnail.jpg" class="img-fluid" alt="Spirit Flower">
		    <h6 class="gallery-caption text-center mt-2">Peggy Kornegger</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/kornegger-loseyourmind-cover-reprint-ofcp-kdp-1600.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION, GRAPHIC DESIGN, ART - Peggy Kornegger: </br>
        Cover &amp; Interior for Peggy's book &quot;Lose Your Mind, Open Your Heart&quot;, available on Amazon.com! The art licensed for this cover is a pastel painting titled &quot;Flower Symphony&quot;. Notecards are available for purchase in my Fine Art America shop.">
		    <img src="../gallery/images/portgd-arch/kornegger-loseyourmind-cover-reprint-ofcp-kdp-thumbnail.jpg" class="img-fluid" alt="Lose Your Mind">
		    <h6 class="gallery-caption text-center mt-2">Peggy Kornegger</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/010413ts-longwoodcentbklt-chap1.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="GRAPHIC DESIGN - Longwood Cricket Club:  </br>
        Design production and photo retouching. Winner of N.E. Book Show Award!">
		    <img src="../gallery/images/portgd-arch/010413ts-longwoodcentbklt-chap1-thumbnail.jpg" class="img-fluid" alt="LCC Centennial Book">
		    <h6 class="gallery-caption text-center mt-2">Longwood Cricket Club</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/2024CKatzeff-websurfer-bizcard.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="GRAPHIC DESIGN - Websurfer: </br>
        Corporate ID (logo, business cards and signage).">
		    <img src="../gallery/images/portgd-arch/2024CKatzeff-websurfer-bizcard-thumbnail.jpg" class="img-fluid" alt="Carl Katzeff bizcard">
		    <h6 class="gallery-caption text-center mt-2">Websurfer</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/092710addison-gf4e-cover-1600.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION, GRAPHIC DESIGN - Tina Addison: </br>
        Cover and Interior for Tina's cookbook &quot;Good Food For Everyone&quot;. Consultation and coordination with self-publishing vendor. Image scans, color correction, and retouching. The proceeds of sales for this cookbook go to food pantries.">
		    <img src="../gallery/images/portgd-arch/092710addison-gf4e-cover-thumbnail.jpg" class="img-fluid" alt="Good Food for Everyone">
		    <h6 class="gallery-caption text-center mt-2">Tina Addison</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/kornegger-livingwithspirit-cover-reprint-ofcp-kdp-1600.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="ART DIRECTION, GRAPHIC DESIGN, ART - Peggy Kornegger: </br>
        Cover &amp; Interior for Peggy's book  &quot;Living With Spirit&quot;, available on Amazon.com! The art licensed for this cover is a pastel painting titled &quot;Infinity&quot;, which is available on a notecard in my Shop: https://fineartamerica.com/featured/infinity-anne-katzeff.html">
		    <img src="../gallery/images/portgd-arch/kornegger-livingwithspirit-cover-reprint-ofcp-kdp-thumbnail.jpg" class="img-fluid" alt="Living with Spirit">
		    <h6 class="gallery-caption text-center mt-2">Peggy Kornegger</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2020kastles-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DEVELOPMENT - Kathleen Kastles: </br>
        Website updates, customization, and consult.">
		    <img src="../gallery/images/portgd-arch/2020kastles-website-thumbnail.jpg" class="img-fluid" alt="Kastles artwork">
		    <h6 class="gallery-caption text-center mt-2">Kathleen Kastles</h6>
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

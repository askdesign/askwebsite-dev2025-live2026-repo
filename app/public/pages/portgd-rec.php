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


    <title>ASK Design | Design Portfolio</title>
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
                  <li><a class="dropdown-item active" aria-current="page" href="">Recent</a></li>
                  <li><a class="dropdown-item" href="portgd-arch.php">Archives</a></li>
                  <li class="dropdown-header divider"></li>
                  <li class="dropdown-header">Art</li>
                  <li><a class="dropdown-item" href="portart-rec.php">Recent</a></li>
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

        <li class="nav-item"><a class="nav-link" href="https:www.askdesign.biz/blog">Blog</a></li>
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
          <h2 class="page-title">Portfolio - Design</h2>
          <h3 class="page lead subhd">Recent Design Work</h3>
          <p class="page lead">These are samples of my recent web design and graphic design work.</p>
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

    <div id="portgd" class="gallery row">
    <div class="col-12"><!-- columns -->

      <div class="row mb-4">
      <div class="col-sm-4 mb-4 gallery-item web-design">
        <a href="../gallery/images/portgd/2025sps-website.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Skin Perfect Spas: </br>Site had previously used a custom theme built in 2017. Long overdue for an update, we rebuilt the site with all new content (including optimized images) and a Kadence theme. Streamlined the navigation, conformed to accessibility guidelines, and improved overall performance, functionality, security, and SEO. https://skinperfectspas.com/">
		    <img src="../gallery/images/portgd/2025sps-website-thumbnail.jpg" class="img-fluid" alt="SPS">
		    <h6 class="gallery-caption text-center mt-2">Skin Perfect Spas</h6>    
        </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
	      <a href="../gallery/images/portgd/2025larainearmenti-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DEVELOPMENT - Laraine Armenti: <br> Site had been using a Classic theme built with the Genesis framework. When client began experiencing barriers to content and layout modifications, we decided to switch to a more current Block theme. Site was rebuilt with a Kadence theme, enhancing functionality, performance, accessibility, security, and SEO. https://www.larainearmenti.com">
		    <img src="../gallery/images/portgd/2025larainearmenti-website-thumbnail.jpg" class="img-fluid" alt="LArmenti">
		    <h6 class="gallery-caption text-center mt-2">Laraine Armenti</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item graphic-design">
	      <a href="../gallery/images/portgd/kornegger-breastcancerbeyond-cover-ofcp-kdp-1600.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="ART DIRECTION, GRAPHIC DESIGN, and ART - Peggy Kornegger:<br> Cover and Interior of Peggy's book &quot;Breast Cancer &amp; Beyond: An Unexpected Soul Path&quot;, available on Amazon.com! The art licensed for this cover is a watercolor painting titled &quot;Magnolia&quot;. Reproductions on sale: https://fineartamerica.com/featured/magnolia-anne-katzeff.html. Several more of my paintings are licensed for this book interior.">
		    <img src="../gallery/images/portgd/kornegger-breastcancerbeyond-cover-ofcp-kdp-thumbnail.jpg" class="img-fluid" alt="Breast Cancer and Beyond">
		    <h6 class="gallery-caption text-center mt-2">Breast Cancer & Beyond</h6>
	      </a>
      </div><!-- end of col -->

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd/2024lesleymwaite-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Lesley M. Waite: </br>Moderate modifications to a Squarespace site. Primary goal was to make it look more like an author's website, showcasing Lesley's books and providing some Calls to Action. <br>
		    Key changes: • Improved layout • New content: pages, images, CTA, Instagram feed. • Widened content area. • Placed social media icons in more prominent positions. • Adjusted navigation. Take a look at her website and enjoy! https://www.lesleymwaite.com/">
		    <img src="../gallery/images/portgd/2024lesleymwaite-website-thumbnail.jpg" class="img-fluid" alt="Waite site on Squarespace">
		    <h6 class="gallery-caption text-center mt-2">Lesley M. Waite</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd/2024mondorocco-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - MondoRocco: </br>Overhaul of 10+ year-old website. Updated layout, code, mobile-responsiveness, navigation. Adapted branding colors, logo, and icons to current web accessibility standards and SEO. Rebuilt with WordPress. Key new features: • Created a child theme, based on the 2024 theme, using the Full Site Editor and the Create Block Theme plugin. • Wider content area. • Consolidated content on a single page. • Updated the icons. • Increased the font sizes, changed typefaces. • Installed an SSL certificate. • Optimized and used Alt text on all images. • Improved functionality, accessibility, and mobile-responsiveness. • Increased site speed. Take a look at his new website and enjoy! https://www.mondorocco.com/">
		    <img src="../gallery/images/portgd/2024mondorocco-website-thumbnail.jpg" class="img-fluid" alt="Rocco Giuliano site">
		    <h6 class="gallery-caption text-center mt-2">MondoRocco</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
        <a href="../gallery/images/portgd/2023janetsmithphotos-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Janet Smith Photos: </br>Website design, development, and maintenance. Updated site with more user-friendly theme; improved functionality, accessibility, and mobile-responsiveness; increased site speed. https://janetsmithphotos.com/">
		    <img src="../gallery/images/portgd/2023janetsmithphotos-website-thumbnail.jpg" class="img-fluid" alt="JSmith site">
		    <h6 class="gallery-caption text-center mt-2">Janet Smith Photos</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd/2023SenatorMikeBarrett-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DEVELOPMENT - Senator Mike Barrett: </br>Site evaluation, consult, and update: clean up plugins area, optimize images, improve functionality, configure Google Analytics. https://senatormikebarrett.com/">
		    <img src="../gallery/images/portgd/2023SenatorMikeBarrett-website-thumbnail.jpg" class="img-fluid" alt="Sen. Barrett">
		    <h6 class="gallery-caption text-center mt-2">Senator Mike Barrett</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd/2022TFord-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - TFord: </br>Client requested a fresh, new design and a parallax scroll effect on the Home page. Tools included Photoshop, Adobe XD, and Bootstrap. https://tford.com/">
		    <img src="../gallery/images/portgd/2022TFord-website-thumbnail.jpg" class="img-fluid" alt="TFC">
		    <h6 class="gallery-caption text-center mt-2">TFord</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd/kornegger-rainbow-cover-ofcp-kdp-1600.jpg" class="" data-toggle="lightbox" data-gallery="graphic-design" data-size="xl" data-caption="ART DIRECTION, GRAPHIC DESIGN, and ART - Peggy Kornegger: </br>Cover and Interior of Peggy's &quot;Inside the Rainbow: Soul Connection in Nature&quot;, available on Amazon.com! The art licensed for this cover is a pastel painting titled &quot;Palm and Orchid&quot;. Reproductions on sale: https://fineartamerica.com/featured/palm-and-orchid-anne-katzeff.html. Several more of my paintings are licensed for this book interior.">
		    <img src="../gallery/images/portgd/kornegger-rainbow-cover-ofcp-kdp-thumbnail.jpg" class="img-fluid" alt="Rainbow book cover">
		    <h6 class="gallery-caption text-center mt-2">Inside the Rainbow</h6>
	      </a>
      </div>

<!-- end of row -->



      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd/2020barrett-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Mike Barrett: </br>
        Improved aesthetics, functionality, and mobile-responsiveness. https://www.barrettforstatesenate.org/">
		    <img src="../gallery/images/portgd/2020barrett-website-thumbnail.jpg" class="img-fluid" alt="Barrett campaign site">
		    <h6 class="gallery-caption text-center mt-2">Barrett for State Senate</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd/2020peterberry-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; CONSULTATION - Peter Berry: </br>
        Very personal website launched on Squarespace for a dear friend who passed away in 2020 of an aggressive cancer. His death came just a few weeks after the shocking diagnosis. Our friendship began with him and Andy (his wife) over 30 years ago, all of us working together at dnh typesetting. Be sure to read his obituary, written lovingly and eloquently by Andy. It will give you some sense of all the goodness that was Peter. He was one of the most wonderful, kind men on the planet. We love you Peter. Rest in peace you beautiful soul. https://www.peterberry2020.com/">
		    <img src="../gallery/images/portgd/2020peterberry-website-thumbnail.jpg" class="img-fluid" alt="Peter's tribute site">
		    <h6 class="gallery-caption text-center mt-2">Peter Berry</h6>
	      </a>
      </div>


      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd/2019baa-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Belmont Art Association: </br>
        Website design, customization, and maintenance. Improved aesthetics, functionality, and mobile-responsiveness. https://www.belmontart.org/">
		    <img src="../gallery/images/portgd/2019baa-website-thumbnail.jpg" class="img-fluid" alt="BAA">
		    <h6 class="gallery-caption text-center mt-2">Belmont Art Association</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd/2019kwelling-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DEVELOPMENT - Welling Coaching and Counseling: </br>
        Website maintenance and consult. https://www.kwelling.com/">
		    <img src="../gallery/images/portgd/2019kwelling-website-thumbnail.jpg" class="img-fluid" alt="Karen Welling">
		    <h6 class="gallery-caption text-center mt-2">Welling Coaching and Counseling</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd/2018zamir-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Zamir Chorale of Boston: </br>
        Website design, customization, and maintenance. Special Features: members portal, slide shows, Constant Contact/YouTube/Paypal integration. https://www.zamir.org/">
		    <img src="../gallery/images/portgd/2018zamir-website-thumbnail.jpg" class="img-fluid" alt="Zamir Chorale site">
		    <h6 class="gallery-caption text-center mt-2">Zamir Chorale of Boston</h6>
	      </a>
      </div>


<!-- end of row -->




      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd/2017bga-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Belmont Gallery of Art: </br>
        Website design, customization, and maintenance. Special Features: slide shows, event listings, Constant Contact, and SignUp.com integration. http://www.belmontgallery.org/">
		    <img src="../gallery/images/portgd/2017bga-website-thumbnail.jpg" class="img-fluid" alt="BGA">
		    <h6 class="gallery-caption text-center mt-2">Belmont Gallery of Art</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd/2017katzeff-paul-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Paul Katzeff:  </br>
        Website design, customization, and maintenance. https://www.paulkatzeff.com/">
		    <img src="../gallery/images/portgd/2017katzeff-paul-website-thumbnail.jpg" class="img-fluid" alt="Writer site">
		    <h6 class="gallery-caption text-center mt-2">Paul Katzeff</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd/2016pak-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Peggy Kornegger: </br>
        Site configuration, theme settings, consult. https://spiritflower.wordpress.com/<br>
        The art licensed for this cover is a pastel painting titled &quot;Flower Symphony&quot;. <br>
        Reproductions on sale in my Shop: https://fineartamerica.com/featured/flower-symphony-anne-katzeff.html.">
		    <img src="../gallery/images/portgd/2016pak-website-thumbnail.jpg" class="img-fluid" alt="Spirit Flower">
		    <h6 class="gallery-caption text-center mt-2">Peggy Kornegger</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd/kornegger-loseyourmind-cover-reprint-ofcp-kdp-1600.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION, GRAPHIC DESIGN, ART - Peggy Kornegger: </br>
        Cover &amp; Interior for Peggy's book &quot;Lose Your Mind, Open Your Heart&quot;, available on Amazon.com! The art licensed for this cover is a pastel painting titled &quot;Flower Symphony&quot;. Reproductions on sale in my Shop: https://fineartamerica.com/featured/flower-symphony-anne-katzeff.html. Several more of my paintings are licensed for this book interior.">
		    <img src="../gallery/images/portgd/kornegger-loseyourmind-cover-reprint-ofcp-kdp-thumbnail.jpg" class="img-fluid" alt="Lose Your Mind">
		    <h6 class="gallery-caption text-center mt-2">Peggy Kornegger</h6>
	      </a>
      </div>



<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd/2024CKatzeff-websurfer-bizcard.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="GRAPHIC DESIGN - Websurfer: </br>
        Corporate ID (logo, business cards and signage).">
		    <img src="../gallery/images/portgd/2024CKatzeff-websurfer-bizcard-thumbnail.jpg" class="img-fluid" alt="Carl Katzeff bizcard">
		    <h6 class="gallery-caption text-center mt-2">Websurfer</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd/kornegger-livingwithspirit-cover-reprint-ofcp-kdp-1600.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="ART DIRECTION, GRAPHIC DESIGN, ART - Peggy Kornegger: </br>
        Cover &amp; Interior for Peggy's book  &quot;Living With Spirit&quot;, available on Amazon.com! The art licensed for this cover is a pastel painting titled &quot;Infinity&quot;. Reproductions on sale in my Shop: https://fineartamerica.com/featured/infinity-anne-katzeff.html. Several more of my paintings are licensed for this book interior.">
		    <img src="../gallery/images/portgd/kornegger-livingwithspirit-cover-reprint-ofcp-kdp-thumbnail.jpg" class="img-fluid" alt="Living with Spirit">
		    <h6 class="gallery-caption text-center mt-2">Peggy Kornegger</h6>
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

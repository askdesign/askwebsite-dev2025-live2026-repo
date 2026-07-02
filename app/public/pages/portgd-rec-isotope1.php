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




    <title>ASK Design | Contact</title>
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
                  <li><a class="dropdown-item active" aria-current="page" href="portgd-rec.php">Recent</a></li>
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
        <li class="nav-item"><a class="nav-link last" href="contact.php">Contact</a></li>
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
          <p class="page lead">
These are samples of my recent web design and graphic design work.</p>
<p><em>NOTE: click on the thumbnail image to see it enlarged in a slideshow!</em>
</p>
    </section><!-- end of page title lead area -->

    <section class="content"><!-- content area -->
      <!-- Filtering UI -->
      <!-- Isotope Grid Container -->


<!-- <div class="button-group filters-button-grou mb-4">
  <button class="button is-checked" data-filter="*">show all</button>
  <button class="button" data-filter=".web-design">wd</button>
  <button class="button" data-filter=".graphic-design">gd</button>
  <button class="button" data-filter=".metal">metal</button>
  <button class="button" data-filter=".transition">transition</button>
  <button class="button" data-filter=".alkali, .alkaline-earth">alkali and alkaline-earth</button>
  <button class="button" data-filter=":not(.transition)">not transition</button>
  <button class="button" data-filter=".metal:not(.transition)">metal but not transition</button>
  <button class="button" data-filter="numberGreaterThan50">number > 50</button>
  <button class="button" data-filter="ium">name ends with &ndash;ium</button>
</div> -->


<h1>Isotope - filtering</h1>

<div class="btn-group filters-button-group mb-4" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-outline-primary is-checked" data-filter="*">all</button>
  <button type="button" class="btn btn-outline-primary" data-filter=".web-design">wd</button>
  <button type="button" class="btn btn-outline-primary" data-filter=".graphic-design">gd</button>
  <button type="button" class="btn btn-outline-primary" data-filter=".metal">metal</button>
  <button type="button" class="btn btn-outline-primary" data-filter=".transition">transition</button>
  <button type="button" class="btn btn-outline-primary" data-filter=".alkali, .alkaline-earth">alkali + alkaline-earth</button>
  <button type="button" class="btn btn-outline-primary" data-filter=":not(.transition)">not transition</button>
  <button type="button" class="btn btn-outline-primary" data-filter=".metal:not(.transition)">metal but not transition</button>
  <button type="button" class="btn btn-outline-primary" data-filter="ium">name ends w/ &ndash;ium</button>
</div>


<div class="grid">
  <div class="element-item transition metal web-design" data-category="transition">
    <h3 class="name">Mercury</h3>
    <p class="symbol">Hg</p>
    <p class="number">80</p>
    <p class="weight">200.59</p>
  </div>
  <div class="element-item metalloid graphic-design" data-category="metalloid">
    <h3 class="name">Tellurium</h3>
    <p class="symbol">Te</p>
    <p class="number">52</p>
    <p class="weight">127.6</p>
  </div>
  <div class="element-item post-transition metal " data-category="post-transition">
    <h3 class="name">Bismuth</h3>
    <p class="symbol">Bi</p>
    <p class="number">83</p>
    <p class="weight">208.980</p>
  </div>
  <div class="element-item post-transition metal " data-category="post-transition">
    <h3 class="name">Lead</h3>
    <p class="symbol">Pb</p>
    <p class="number">82</p>
    <p class="weight">207.2</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Gold</h3>
    <p class="symbol">Au</p>
    <p class="number">79</p>
    <p class="weight">196.967</p>
  </div>
  <div class="element-item alkali metal " data-category="alkali">
    <h3 class="name">Potassium</h3>
    <p class="symbol">K</p>
    <p class="number">19</p>
    <p class="weight">39.0983</p>
  </div>
  <div class="element-item alkali metal " data-category="alkali">
    <h3 class="name">Sodium</h3>
    <p class="symbol">Na</p>
    <p class="number">11</p>
    <p class="weight">22.99</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Cadmium</h3>
    <p class="symbol">Cd</p>
    <p class="number">48</p>
    <p class="weight">112.411</p>
  </div>
  <div class="element-item alkaline-earth metal " data-category="alkaline-earth">
    <h3 class="name">Calcium</h3>
    <p class="symbol">Ca</p>
    <p class="number">20</p>
    <p class="weight">40.078</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Rhenium</h3>
    <p class="symbol">Re</p>
    <p class="number">75</p>
    <p class="weight">186.207</p>
  </div>
  <div class="element-item post-transition metal " data-category="post-transition">
    <h3 class="name">Thallium</h3>
    <p class="symbol">Tl</p>
    <p class="number">81</p>
    <p class="weight">204.383</p>
  </div>
  <div class="element-item metalloid " data-category="metalloid">
    <h3 class="name">Antimony</h3>
    <p class="symbol">Sb</p>
    <p class="number">51</p>
    <p class="weight">121.76</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Cobalt</h3>
    <p class="symbol">Co</p>
    <p class="number">27</p>
    <p class="weight">58.933</p>
  </div>
  <div class="element-item lanthanoid metal inner-transition " data-category="lanthanoid">
    <h3 class="name">Ytterbium</h3>
    <p class="symbol">Yb</p>
    <p class="number">70</p>
    <p class="weight">173.054</p>
  </div>
  <div class="element-item noble-gas nonmetal " data-category="noble-gas">
    <h3 class="name">Argon</h3>
    <p class="symbol">Ar</p>
    <p class="number">18</p>
    <p class="weight">39.948</p>
  </div>
  <div class="element-item diatomic nonmetal " data-category="diatomic">
    <h3 class="name">Nitrogen</h3>
    <p class="symbol">N</p>
    <p class="number">7</p>
    <p class="weight">14.007</p>
  </div>
  <div class="element-item actinoid metal inner-transition " data-category="actinoid">
    <h3 class="name">Uranium</h3>
    <p class="symbol">U</p>
    <p class="number">92</p>
    <p class="weight">238.029</p>
  </div>
  <div class="element-item actinoid metal inner-transition " data-category="actinoid">
    <h3 class="name">Plutonium</h3>
    <p class="symbol">Pu</p>
    <p class="number">94</p>
    <p class="weight">(244)</p>
  </div>
</div>

<div class="grid">

      <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 mx-auto mb-4">
      <div class="gap-4 d-md-flex align-content-center align-items-center"> 
	<a href="../gallery/images/portgd/2025sps-website.jpg" class="gallery-item-border web-design" data-toggle="lightbox" data-gallery="web-design" data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Skin Perfect Spas: </br>Site had previously used a custom theme built in 2017. Long overdue for an update, we rebuilt the site with all new content (including optimized images) and a Kadence theme. Streamlined the navigation, conformed to accessibility guidelines, and improved overall performance, functionality, security, and SEO. https://skinperfectspas.com/">
		<img src="../gallery/images/portgd/2025sps-website.jpg" class="img-fluid">
		<h6 class="gallery-caption text-center mt-2">Skin Perfect Spas</h6>    </a>

	<a href="../gallery/images/portgd/2025larainearmenti-website.jpg" class="gallery-item-border web-design" data-toggle="lightbox" data-gallery="web-design" data-size="xl" data-caption="WEB DEVELOPMENT - Laraine Armenti: <br> Site had been using a Classic theme built with the Genesis framework. When client began experiencing barriers to content and layout modifications, we decided to switch to a more current Block theme. Site was rebuilt with a Kadence theme, enhancing functionality, performance, accessibility, security, and SEO. https://www.larainearmenti.com">
		<img src="../gallery/images/portgd/2025larainearmenti-website.jpg" class="img-fluid">
		<h6 class="gallery-caption text-center mt-2">Laraine Armenti</h6>
	</a>

	<a href="../gallery/images/portgd/kornegger-breastcancerbeyond-cover-ofcp-kdp-1600.jpg" class="gallery-item-border graphic-design" data-toggle="lightbox" data-gallery="graphic-design" data-size="xl" data-caption="ART DIRECTION, GRAPHIC DESIGN, and ART<br> Book Cover and Interior of Breast Cancer &amp; Beyond: An Unexpected Soul Path by Peggy Kornegger, available on Amazon.com! The art licensed for this cover is a watercolor painting titled Magnolia. Notecards of the art are available for purchase: https://fineartamerica.com/featured/magnolia-anne-katzeff.html">
		<img src="../gallery/images/portgd/kornegger-breastcancerbeyond-cover-ofcp-kdp-1600.jpg" class="img-fluid">
		<h6 class="gallery-caption text-center mt-2">Breast Cancer & Beyond</h6>
	</a>

      </div><!-- end of gap -->
      </div><!-- end of col -->
      </div><!-- end of row -->

      <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 mx-auto mb-4">
      <div class="gap-4 d-md-flex align-content-center align-items-center">

  	<a href="../gallery/images/portgd/2024lesleymwaite-website.jpg" class="gallery-item-border" data-toggle="lightbox" data-gallery="web-design" data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Lesley M. Waite: </br>Moderate modifications to a Squarespace site. Primary goal was to make it look more like an author's website, showcasing Lesley's books and providing some Calls to Action. <br>
		Key changes: • Improved layout • New content: pages, images, CTA, Instagram feed. • Widened content area. • Placed social media icons in more prominent positions. • Adjusted navigation. Take a look at her website and enjoy! https://www.lesleymwaite.com/">
		<img src="../gallery/images/portgd/2024lesleymwaite-website.jpg" class="img-fluid">
		<h6 class="gallery-caption text-center mt-2">Lesley M. Waite</h6>
	  </a>

  	<a href="../gallery/images/portgd/2024mondorocco-website.jpg" class="gallery-item-border web-design" data-toggle="lightbox" data-gallery="web-design" data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - MondoRocco: </br>Overhaul of 10+ year-old website. Updated layout, code, mobile-responsiveness, navigation. Adapted branding colors, logo, and icons to current web accessibility standards and SEO. Rebuilt with WordPress. Key new features: • Created a child theme, based on the 2024 theme, using the Full Site Editor and the Create Block Theme plugin. • Wider content area. • Consolidated content on a single page. • Updated the icons. • Increased the font sizes, changed typefaces. • Installed an SSL certificate. • Optimized and used Alt text on all images. • Improved functionality, accessibility, and mobile-responsiveness. • Increased site speed. Take a look at his new website and enjoy! https://www.mondorocco.com/">
		<img src="../gallery/images/portgd/2024mondorocco-website.jpg" class="img-fluid">
		<h6 class="gallery-caption text-center mt-2">MondoRocco</h6>
	  </a>

    <a href="../gallery/images/portgd/2023janetsmithphotos-website.jpg" class="gallery-item-border web-design" data-toggle="lightbox" data-gallery="web-design" data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Janet Smith Photos: </br>Website design, development, and maintenance. Updated site with more user-friendly theme; improved functionality, accessibility, and mobile-responsiveness; increased site speed. https://janetsmithphotos.com/">
		<img src="../gallery/images/portgd/2023janetsmithphotos-website.jpg" class="img-fluid">
		<h6 class="gallery-caption text-center mt-2">Janet Smith Photos</h6>
	  </a>

      </div><!-- end of gap -->
      </div><!-- end of col -->
      </div><!-- end of row -->

      <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 mx-auto mb-4">
      <div class="gap-4 d-md-flex align-content-center align-items-center">

  	<a href="../gallery/images/portgd/2023SenatorMikeBarrett-website.jpg" class="gallery-item-border" data-toggle="lightbox" data-gallery="web-design" data-size="xl" data-caption="WEB DEVELOPMENT - Senator Mike Barrett: </br>Site evaluation, consult, and update: clean up plugins area, optimize images, improve functionality, configure Google Analytics. https://senatormikebarrett.com/">
		<img src="../gallery/images/portgd/2023SenatorMikeBarrett-website.jpg" class="img-fluid">
		<h6 class="gallery-caption text-center mt-2">Senator Mike Barrett</h6>
	  </a>

  	<a href="../gallery/images/portgd/2022TFord-website.jpg" class="gallery-item-border web-design" data-toggle="lightbox" data-gallery="web-design" data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - TFord: </br>Client requested a fresh, new design and a parallax scroll effect on the Home page. Tools included Photoshop, Adobe XD, and Bootstrap. https://tford.com/">
		<img src="../gallery/images/portgd/2022TFord-website.jpg" class="img-fluid">
		<h6 class="gallery-caption text-center mt-2">TFord</h6>
	  </a>

    <a href="../gallery/images/portgd/kornegger-rainbow-cover-ofcp-kdp-1600.jpg" class="gallery-item-border graphic-design" data-toggle="lightbox" data-gallery="graphic-design" data-size="xl" data-caption="ART DIRECTION, GRAPHIC DESIGN, and ART </br>Book Cover and Interior of <em>Inside the Rainbow: Soul Connection in Nature</em> by Peggy Kornegger, available on Amazon.com! The art licensed for this cover is a pastel painting titled Palm and Orchid. Notecards of the art are available for purchase: https://fineartamerica.com/featured/palm-and-orchid-anne-katzeff.html">
		<img src="../gallery/images/portgd/kornegger-rainbow-cover-ofcp-kdp-1600.jpg" class="img-fluid">
		<h6 class="gallery-caption text-center mt-2">Inside the Rainbow</h6>
	  </a>

      </div><!-- end of gap -->
      </div><!-- end of col -->
      </div><!-- end of row -->

      <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 mx-auto mb-4">
      <div class="gap-4 d-md-flex align-content-center align-items-center">

  	<a href="../gallery/images/portgd/2021robertdix-website.jpg" class="gallery-item-border web-design" data-toggle="lightbox" data-gallery="web-design" data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Robert Dix: </br>
    Created website for musician on WordPress platform. Moderate customizations, consult, and maintenance.	https://robertdix.org/">
		<img src="../gallery/images/portgd/2021robertdix-website.jpg" class="img-fluid">
		<h6 class="gallery-caption text-center mt-2">Robert Dix</h6>
	  </a>

  	<a href="../gallery/images/portgd/2021abbeyk-website.jpg" class="gallery-item-border web-design" data-toggle="lightbox" data-gallery="web-design" data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - AbbeyK: </br>
    Updated site with more user-friendly theme; improved functionality and mobile-responsiveness; increased site speed.">
		<img src="../gallery/images/portgd/2021abbeyk-website.jpg" class="img-fluid">
		<h6 class="gallery-caption text-center mt-2">AbbeyK</h6>
	  </a>

  	<a href="../gallery/images/portgd/2020barrett-website.jpg" class="gallery-item-border web-design" data-toggle="lightbox" data-gallery="web-design" data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Mike Barrett: </br>
    Improved aesthetics, functionality, and mobile-responsiveness. https://www.barrettforstatesenate.org/">
		<img src="../gallery/images/portgd/2020barrett-website.jpg" class="img-fluid">
		<h6 class="gallery-caption text-center mt-2">Barrett for State Senate</h6>
	  </a>

      </div><!-- end of gap -->
      </div><!-- end of col -->
      </div><!-- end of row -->

    </div>

	  </section><!-- end of content -->
    
  </div><!-- end of container -->

</main>

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

    <!-- Isotope for filtering -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="../js/askgalleryscript1.js"></script>
    
  </body>
</html>

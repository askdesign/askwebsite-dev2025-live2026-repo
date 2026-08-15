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


    <title>ASK Design | Services</title>
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
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Services</a></li>

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
      <h2 class="page-title">Services</h2>
      <h3 class="page lead subhd">PARTNER, COLLABORATE, PROVIDE</h3>
      <p class="page lead">
I look at your business from a systems viewpoint and examine how everything works together. Unique designs that fit your needs and emphasize what you do best will help separate you from the crowd. I build all kinds of sites: e-commerce shops and artist portfolios, individuals and non-profits, small and medium-sized businesses, Bootstrap and WordPress. Tell me your needs and together we'll find the solution that works best for you.</p>

		<div class="row page lead list">
        <h3 class="page lead subhd2">Key areas that I focus on: </h3>
				<!-- column left -->
        <div class="col-xl-6 col-lg-12 border-right">
        <ul>
          <li>Creating a positive user experience </li>
          <li>Improving performance and site speed </li>
          <li>Complying with accessibility standards</li>
        </ul>

        </div><!-- col left -->

				<!-- column right -->
        <div class="col-xl-6 col-lg-12">
        <ul>
          <li>Ensuring mobile responsiveness </li>
          <li>Enhancing Search Engine Optimization (SEO) </li>
          <li>Increasing site visibility and number of visits</li>
        </ul>

        </div><!-- col right -->


    </div><!-- end of page lead list -->
    </section><!-- end of page title lead area -->

    <section class="content"><!-- columns -->
			<div class="row">
				<!-- column left -->
				<div class="col-xl-6 col-lg-12 border-right">

				  <h4 class="page subhd"><i class="fa-solid fa-display service-icon"></i>WEB DESIGN</h4>
					<p>10+ years of experience in the web world and now my primary focus. Design and front-end development for both static (html) and dynamic (content-management system) sites with features such as ecommerce, art portfolios, marketing tools, blogs, calendars, slideshows, and social media integration. I can provide custom designs that make your website unique or use existing templates for the styling framework.
          </p>


          <h4 class="page subhd"><i class="fa-solid fa-book-open service-icon"></i>GRAPHIC DESIGN</h4>
          <p>20+ years of experience in the print world have informed me in all areas of: corporate identity, brochures, catalogs, books (cover, interior, digital), magazines, educational and self-publishing, multimedia, and prepress production.</p>
 

          <h4 class="page subhd"><i class="fa-solid fa-circle-info service-icon"></i>CONSULTATION</h4>
          <p>Advice on projects, design, and technology issues. Software training, based on several years of teaching experience at high school, college, and adult levels. Most of my teaching has been done face-to-face. I began to teach online in the fall of 2018. Speaking gigs, panel discussions, and forums are also in my repertoire. Subscribe to my <a href="https://askdesign.biz/blog">Blog</a> to receive useful information!
          </p>

				</div><!-- end column left -->

				<!-- column right -->
				<div class="col-xl-6 col-lg-12">
					<h4 class="page subhd"><i class="fa-solid fa-wand-sparkles service-icon"></i>ART DIRECTION</h4>
					<p>Project management, creative direction, team-building.</p>

          <h4 class="page subhd"><i class="fa-solid fa-paintbrush service-icon"></i>ARTWORK</h4>
          <p>Landscape and floral paintings and drawings using pastels, watercolor, acrylics, gouache, colored pencils, ink, and mixed media.</p>

          <h4 class="page subhd"><i class="fa-solid fa-toolbox service-icon"></i>TOOLSET</h4>
          <p>Adobe Creative Suite (InDesign, Photoshop, Illustrator, Premiere, and Acrobat), Figma, Visual Studio Code, Github, Cacher, Local by Flywheel, CSS, HTML, and PHP.</p>

          <h4 class="page subhd"><i class="fa-solid fa-share service-icon"></i>REFERRALS</h4>
          <p>ASK Design is built on solid relationships. Referrals are encouraged, welcomed, and rewarded. I am currently looking for art-related referrals: exhibits, contests, and selling opportunities. A successful referral will net you, the referrer, 1 FREE set of my art notecards. If the referral leads to a new design project and/or art sale, it is considered successful.</p>

				</div><!-- end column right -->

      </div><!-- end of row -->
	  </section><!-- end of content columns-->
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
    
  </body>
</html>

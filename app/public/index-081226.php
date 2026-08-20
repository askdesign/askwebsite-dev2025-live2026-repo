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
    <link rel="icon" href="images/images-common/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

     <!-- Custom styles for this template -->
    <link href="css-custom/ask-custom.css" rel="stylesheet">

    <!-- Google fonts now imported into stylesheet -->

    <!-- our project is using icons from Solid Brands -->
    <link href="/fonts/fontawesome-free-7.1.0-web/css/fontawesome.css" rel="stylesheet" />
    <link href="/fonts/fontawesome-free-7.1.0-web/css/brands.css" rel="stylesheet" />
    <link href="/fonts/fontawesome-free-7.1.0-web/css/solid.css" rel="stylesheet" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TJXHZ9L2');</script>
<!-- End Google Tag Manager -->

    <title>ASK Design | Web Designer, Artist, Teacher</title>
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
      include 'includes/nav2.inc.php'; 
      ?> 

    </div>
  </div>
</nav>

<!-- header -->
 
<header class="home">
  <div class="container-xxl">

      <?php 
      include 'includes/brand.inc.php'; 
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
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="pages/about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="pages/services.php">Services</a></li>

        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="pages/portgd-rec.php" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Design</li>
                  <li><a class="dropdown-item" href="pages/portgd-rec.php">Recent</a></li>
                  <li><a class="dropdown-item" href="pages/portgd-arch.php">Archives</a></li>
                  <li class="dropdown-header divider"></li>
                  <li class="dropdown-header">Art</li>
                  <li><a class="dropdown-item" href="pages/portart-rec.php#">Recent</a></li>
                  <li><a class="dropdown-item" href="pages/portart-lic.php">Licensed</a></li>
                </ul>
        </li>

        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="pages/shop-cat.php" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="pages/shop-cat.php">Original Art</a></li>
                  <li><a class="dropdown-item" href="pages/shop-cat-sale.php">Sale</a></li>
                  <li><a class="dropdown-item" href="pages/shop-cat-cards.php">Cards</a></li>
                  <li><a class="dropdown-item" href="pages/shop-cat-prints.php">Prints</a></li>
                  <li><a class="dropdown-item" href="pages/shop-cat-tees.php">Tees</a></li>
                  <li><a class="dropdown-item" href="pages/shop-cat-sold.php">Sold/NFS</a></li>
                  <li class="dropdown-header divider"></li>
                  <li><a class="dropdown-item" href="pages/shop-order.php">Order</a></li>
                </ul>
        </li>

        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="https://www.askdesign.biz/blog" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="https://www.askdesign.biz/blog/">Blog Home</a></li>
                  <li><a class="dropdown-item" href="https://www.askdesign.biz/blog/calendar/">Calendar</a></li>
                </ul>
        </li>

        <li class="nav-item dropdown"><a class="nav-link last dropdown-toggle" href="pages/contact.php" data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="pages/contact.php">Contact Me</a></li>
                  <li><a class="dropdown-item" href="pages/cookie-policy.php">Cookie Policy</a></li>
                  <li><a class="dropdown-item" href="pages/privacy-policy.php">Privacy Policy</a></li>
                </ul>        
        </li>
    </ul>
    </div>
  </div>
</nav>
  

<!-- main -->
<main>
    <div class="container-xxl text-center">
    <div class="hero">   

      <div class="px-4 py-5 text-center"> 
        <div class="col-xl-6 mx-auto"> 
        <div class="row sub-primary-nav-cta mx-auto">
          <div class="gap-4 d-sm-flex justify-content-between align-items-center"> 

          <div class="sub-primary-nav-cta-item"><a class="nav-link" href="pages/portgd-rec.php">Designer</a></div>
          <div class="sub-primary-nav-cta-item divider">|</div>
          <div class="sub-primary-nav-cta-item"><a class="nav-link" href="pages/shop-cat.php">Artist</a></div>
          <div class="sub-primary-nav-cta-item divider">|</div>
          <div class="sub-primary-nav-cta-item"><a class="nav-link" href="https://www.askdesign.biz/blog/">Teacher</a></div>
        </div>

        </div><!-- end of nav cta -->
        </div><!-- end of col -->

        <div class="col-lg-6 mx-auto"> 
          <p class="description lead mx-auto">
            Custom website design for small businesses, nonprofits, and artists.
          </p>
        </div><!-- end of col -->
    </div>


    </div><!-- end of hero area -->
    </div><!-- container -->

    <section><!-- cta -->
    <div class="container-xxl">
			<div class="row cta-section justify-content-center">
				<!-- cta-item -->
				<div class="col-lg-4 col-md-6">
        <div class="cta-item d-grid align-content-between">
          <div class-="cta-item-content">

						<h2 class="cta-item-hd">Web Design</h2>
						<p class="cta-item-text">I look at your business from a systems viewpoint and examine how everything works together. I design and build all kinds of sites. Together we'll find the solution that works best for you. WordPress is one of my specialties: configuration, customization, and training.
            </p>
          </div>

          <div class="cta-item-button">
            <a href="pages/portgd-rec.php"><button type="button" class="btn btn-outline-primary btn-lg">HIRE ME</button></a>
          </div>

        </div><!-- end of cta-item -->
				</div>

				<div class="col-lg-4 col-md-6">
        <div class="cta-item d-grid align-content-between">
          <div class-="cta-item-content">
						<h2 class="cta-item-hd">Artwork</h2>
						<p class="cta-item-text">I create art about earth’s beauty in the hope that people will be moved by it enough to cherish our planet. Go to my Shop to check out original art for sale and see recent work. You can also purchase notecards, prints, and tees!</p>
          </div>

          <div class="cta-item-button">
            <a href="pages/shop-cat.php"><button type="button" class="btn btn-outline-primary btn-lg">SHOP</button></a>
          </div>
          
        </div><!-- end of cta-item -->
				</div>

				<div class="col-lg-4 col-md-6">
        <div class="cta-item-last d-grid align-content-between">
          <div class-="cta-item-content">
						<h2 class="cta-item-hd">Newest Blog Post</h2>
						<p class="cta-item-text"><strong>Redesigning My Bootstrap Website</strong> - It had been at least 10 years since I last redesigned my website. I try to keep up with the ever-changing web landscape by using Bootstrap for my main site and WordPress for my blog. A fresh start was needed for both. In this post, I share my process and the tools used as I tackled the main site.</p>
          </div>

          <div class="cta-item-button">
            <a href="https://www.askdesign.biz/blog/"><button type="button" class="btn btn-outline-primary btn-lg">KEEP READING</button></a>
          </div>
          
        </div><!-- end of cta-item -->
				</div>

      </div><!-- end of row -->
      </div><!-- end of container -->
	  </section><!-- end of cta section-->

</main>

<section class="subscribe-section"><!-- subscribe -->
  <div class="container-fluid">
	  <div class="row justify-content-center">
		  <div class="col-xl-6 col-lg-8 col-sm-12">

      <?php 
      include 'includes/subscribe.inc.php'; 
      ?> 


      </div><!-- end of col -->
    </div><!-- end of row -->
  </div><!-- end of container -->
</section><!-- end of subscribe -->


<!-- footer -->
<footer><!-- footer bottom -->
  <div class="container-fluid footer-bottom-content"><!--- footer-bottom-content -->

      <?php 
      include 'includes/footer-bottom.inc.php'; 
      ?> 

  </div><!-- end of container -->

  <nav class="navbar navbar-expand-lg navbar2" aria-label="secondary nav">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">

      <?php 
      include 'includes/nav2.inc.php'; 
      ?> 

    </div>
  </div>
</nav>
  
</footer><!-- end of footer bottom -->




    <!-- Bootstrap Javascript bundle - goes before the closing body tag -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
  </body>
</html>

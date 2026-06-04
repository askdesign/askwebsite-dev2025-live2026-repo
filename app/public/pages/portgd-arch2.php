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




    <title>ASK Design | Design Archives Portfolio 2</title>
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
          <h2 class="page-title">Portfolio - Design Archives (cont'd)</h2>
          <h3 class="page lead subhd">More Design Work</h3>
          <p class="page lead">These are samples of my web design and graphic design work done 15 to 25 years ago.</p>
          <p><em>NOTE: click on the thumbnail image to see it enlarged in a slideshow!</em></p>
    </section>

    <section class="content"><!-- content area -->
      <h4>Distant Past</h4>

      <!-- Filtering UI -->
      <!-- Isotope Grid Container -->
      <div class="btn-group filters-button-group mb-4" role="group" aria-label="Design filters">
        <button type="button" class="btn btn-outline-primary is-checked" data-filter="*">all</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".web-design">web design</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".graphic-design">graphic design</button>
      </div>

    <div id="portgd-arch2" class="gallery row">
    <div class="col-12"><!-- columns -->

      <div class="row mb-4">

      <div class="col-sm-3 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2014macleish-website.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB CONSULTATION - Morellen MacLeish / Writer: <br>Website consultation, configuration, and maintenance.">
		    <img src="../gallery/images/portgd-arch/2014macleish-website-thumbnail.jpg" class="img-fluid" alt="Macleish writings">
		    <h6 class="gallery-caption text-center mt-2">Morellen MacLeish </h6>
	      </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2014parkman-acm-web.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - American Century Music: <br>Website re-design and configuration. Special Features: slideshows, Mail Chimp and Radio Station integration.">
		    <img src="../gallery/images/portgd-arch/2014parkman-acm-web-thumbnail.jpg" class="img-fluid" alt="ACM redesign">
		    <h6 class="gallery-caption text-center mt-2">American Century Music</h6>
	      </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch//2013wellness-web.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - The Wellness Room Newton: <br>Website design and customization. Special Features: lightbox, calendar.">
		    <img src="../gallery/images/portgd-arch//2013wellness-web-thumbnail.jpg" class="img-fluid" alt="Wellnes Room therapy">
		    <h6 class="gallery-caption text-center mt-2">The Wellness Room Newton</h6>
	      </a>
      </div>


      <!-- end of group -->

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/Kellem-corpid-2013-final-all.png" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="GRAPHIC DESIGN - David Kellem Law Group: <br>Corporate ID (logo, letterhead, business cards, envelopes, and mailing labels).">
		    <img src="../gallery/images/portgd-arch/Kellem-corpid-2013-final-all-thumbnail.jpg" class="img-fluid" alt="Kellem Corp. ID">
		    <h6 class="gallery-caption text-center mt-2">David Kellem Law Group</h6>
	      </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2013bodeau-rockpine-web.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Rock and Pine Healing: <br>Logo design, website design, customization, and maintenance.">
		    <img src="../gallery/images/portgd-arch/2013bodeau-rockpine-web-thumbnail.jpg" class="img-fluid" alt="RockandPine">
		    <h6 class="gallery-caption text-center mt-2">Rock and Pine Healing</h6>
	      </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/Fellow9781111348120-13.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="GRAPHIC DESIGN - Cengage Learning: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/Fellow9781111348120-13-thumbnail.jpg" class="img-fluid" alt="Fellow textbook">
		    <h6 class="gallery-caption text-center mt-2">American Media History</h6>
	      </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/Gillon9781133309857-13.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="GRAPHIC DESIGN - Cengage Learning: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/Gillon9781133309857-13-thumbnail.jpg" class="img-fluid" alt="Gillon textbook">
		    <h6 class="gallery-caption text-center mt-2">The American Paradox</h6>
	      </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/2012ucp-brochures.png" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="GRAPHIC DESIGN - United Cerebral Palsy of MetroBoston: <br>Marketing brochures.">
		    <img src="../gallery/images/portgd-arch/2012ucp-brochures-thumbnail.jpg" class="img-fluid" alt="UCP">
		    <h6 class="gallery-caption text-center mt-2">United Cerebral Palsy of MetroBoston</h6>
	      </a>
      </div>      

     <div class="col-sm-3 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/DayHurwitz9780495913573_12.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="GRAPHIC DESIGN - Cengage Learning: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/DayHurwitz9780495913573_12-thumbnail.jpg" class="img-fluid" alt="DayHurwitz textbook">
		    <h6 class="gallery-caption text-center mt-2">Children and Their Art</h6>
	      </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/KolinConcise0495901946_12.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="GRAPHIC DESIGN - Cengage Learning: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/KolinConcise0495901946_12-thumbnail.jpg" class="img-fluid" alt="Kolin textbook">
		    <h6 class="gallery-caption text-center mt-2">Successful Writing at Work</h6>
	      </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2012Jmindfuldrawer-web.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN - The Mindful Drawer: <br>Design, consultation, and customization on Wordpress website.">
		    <img src="../gallery/images/portgd-arch/2012Jmindfuldrawer-web-thumbnail.jpg" class="img-fluid" alt="MindfulDrawer site">
		    <h6 class="gallery-caption text-center mt-2">The Mindful Drawer</h6>
	      </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2011fis-web.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN - Free Investment Score: <br>Design and front-end development of interactive investment site. Special features: slideshow and online test that measures risk and uncertainty within user's financial portfolio.">
		    <img src="../gallery/images/portgd-arch/2011fis-web-thumbnail.jpg" class="img-fluid" alt="FIS">
		    <h6 class="gallery-caption text-center mt-2">Free Investment Score</h6>
	      </a>
      </div>
      <!-- end of group -->

      <div class="col-sm-3 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2011zamir-web.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Zamir Chorale of Boston (2011-16): <br>Website design, customization, and maintenance. Special Features: members portal, slide shows, Constant Contact/YouTube/Paypal integration.">
		    <img src="../gallery/images/portgd-arch/2011zamir-web-thumbnail.jpg" class="img-fluid" alt="Zamir previous site">
		    <h6 class="gallery-caption text-center mt-2">Zamir Chorale of Boston</h6>
	      </a>
      </div>

      

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/Worthen9781428288140_11.png" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="GRAPHIC DESIGN - Cengage Learning: <br>College textbook covers.">
		    <img src="../gallery/images/portgd-arch/Worthen9781428288140_11-thumbnail.jpg" class="img-fluid" alt="Worthen textbook">
		    <h6 class="gallery-caption text-center mt-2">Wadsworth Anthology of Drama</h6>
	      </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/velasquez049580875x_11.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="GRAPHIC DESIGN - Cengage Learning: <br> College textbook cover.">
		    <img src="../gallery/images/portgd-arch/velasquez049580875x_11-thumbnail.jpg" class="img-fluid" alt="Velasquez textbook">
		    <h6 class="gallery-caption text-center mt-2">Philosophy</h6>
	      </a>
      </div>
      <!-- end of group -->

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/mitchell0495808962_11.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="GRAPHIC DESIGN - Cengage Learning: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/mitchell0495808962_11-thumbnail.jpg" class="img-fluid" alt="Mitchell textbook">
		    <h6 class="gallery-caption text-center mt-2">Roots of Wisdom</h6>
	      </a>
      </div>


      <div class="col-sm-3 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2011scottparkman-web.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN - Scott Parkman: <br>Website re-design and maintenance.">
		    <img src="../gallery/images/portgd-arch/2011scottparkman-web-thumbnail.jpg" class="img-fluid" alt="Parkman site">
		    <h6 class="gallery-caption text-center mt-2">Scott Parkman</h6>
	      </a>
      </div>
      <!-- end of group -->
      
      <div class="col-sm-3 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2011bcf-web.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN - Belmont Citizens Forum: <br>Wordpress website design, customization, and maintenance. Migration from static html site to CMS on a new webhost. Special Features: slide show, Google calendar, and Paypal integration. https://www.belmontcitizensforum.org">
		    <img src="../gallery/images/portgd-arch/2011bcf-web-thumbnail.jpg" class="img-fluid" alt="BCF site">
		    <h6 class="gallery-caption text-center mt-2">Belmont Citizens Forum</h6>
	      </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2010addison-food-web.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Good Food For Everyone: <br>Website design and customization.">
		    <img src="../gallery/images/portgd-arch/2010addison-food-web-thumbnail.jpg" class="img-fluid" alt="Addison site">
		    <h6 class="gallery-caption text-center mt-2">Good Food For Everyone</h6>
	      </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2010acmweb.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - American Century Music: <br>Website design, customization, and maintenance. Special Features: slideshows, calendar, Mail Chimp and Radio Station integration.">
		    <img src="../gallery/images/portgd-arch/2010acmweb-thumbnail.jpg" class="img-fluid" alt="ACM previous site">
		    <h6 class="gallery-caption text-center mt-2">American Century Music</h6>
	      </a>
      </div>
      <!-- end of group -->

      <div class="col-sm-3 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2010eireweb.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN &amp; DEVELOPMENT - Eire Society: <br>Updated coding from tables to CSS &amp; HTML.">
		    <img src="../gallery/images/portgd-arch/2010eireweb-thumbnail.jpg" class="img-fluid" alt="Eire site">
		    <h6 class="gallery-caption text-center mt-2">Eire Society</h6>
	      </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item web-design">
  	    <a href="../gallery/images/portgd-arch/2010Ruby-gws-web.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="WEB DESIGN - Great Women Series: <br>Website design, customization, and maintenance. Special Features: Google Analytics, Twitter feed.">
		    <img src="../gallery/images/portgd-arch/2010Ruby-gws-web-thumbnail.jpg" class="img-fluid" alt="GWS site">
		    <h6 class="gallery-caption text-center mt-2">Great Women Series</h6>
	      </a>
      </div>


      <div class="col-sm-3 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch//gri9780547167336-10.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch//gri9780547167336-10-thumbnail.jpg" class="img-fluid" alt="Griffin Moorhead textbook">
		    <h6 class="gallery-caption text-center mt-2">Organizational Behavior</h6>
	      </a>
      </div>



      <!-- end of group -->


      <div class="col-sm-3 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/prideferrell9780547167466-10.jpg" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch//prideferrell9780547167466-10-thumbnail.jpg" class="img-fluid" alt="Pride Ferrell textbook">
		    <h6 class="gallery-caption text-center mt-2">Marketing</h6>
	      </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/013009thoreau.png" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="ART DIRECTION, GRAPHIC DESIGN, &amp; ART - The Thoreau Society: <br>Kids' Tees sold at Shop at Walden Pond. The art is available on Adult Tees in my FAA Shop https://www.askdesign.biz/ask_shop/shop-cat.php">
		    <img src="../gallery/images/portgd-arch/013009thoreau-thumbnail.jpg" class="img-fluid" alt="Thoreau T-shirts">
		    <h6 class="gallery-caption text-center mt-2">The Thoreau Society</h6>
	      </a>
      </div>
      <!-- end of group -->

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
  	    <a href="../gallery/images/portgd-arch/100509pawsrulecorpid.png" class="" data-toggle="lightbox" data-gallery="design"  data-size="xl" data-caption="GRAPHIC DESIGN - Paws Rule!: <br>Logo, corporate identity, and signage.">
		    <img src="../gallery/images/portgd-arch/100509pawsrulecorpid-thumbnail.jpg" class="img-fluid" alt="Paws Rule branding">
		    <h6 class="gallery-caption text-center mt-2">Paws Rule!</h6>
	      </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/dub9780547143965-10.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION &amp; GRAPHIC DESIGN - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/dub9780547143965-10-thumbnail.jpg" class="img-fluid" alt="Dubrin textbook">
		    <h6 class="gallery-caption text-center mt-2">Leadership</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/Koch9780547193106-10.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION &amp; GRAPHIC DESIGN - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/Koch9780547193106-10-thumbnail.jpg" class="img-fluid" alt="Koch textbook">
		    <h6 class="gallery-caption text-center mt-2">Science Stories</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/dyck9780618832040-10.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/dyck9780618832040-10-thumbnail.jpg" class="img-fluid" alt="Dyck textbook">
		    <h6 class="gallery-caption text-center mt-2">Management</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/ryan9780547204888-10.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/ryan9780547204888-10-thumbnail.jpg" class="img-fluid" alt="Ryan/Cooper textbook">
		    <h6 class="gallery-caption text-center mt-2">Those Who Can, Teach</h6>    
        </a>
      </div>
      <!-- end of group -->

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/bloom9780547190785-10.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/bloom9780547190785-10-thumbnail.jpg" class="img-fluid" alt="Bloom textbook">
		    <h6 class="gallery-caption text-center mt-2">The Essay Connection</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/coyle9780547190815-10.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/coyle9780547190815-10-thumbnail.jpg" class="img-fluid" alt="Coyle textbook">
		    <h6 class="gallery-caption text-center mt-2">Research Papers</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/van9780618756223-10.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/van9780618756223-10-thumbnail.jpg" class="img-fluid" alt="Van Rys/Meyer/Sebranek textbook">
		    <h6 class="gallery-caption text-center mt-2">The College Research Writer</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/Alexander9780547189536-10.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/Alexander9780547189536-10-thumbnail.jpg" class="img-fluid" alt="Alexander textbook">
		    <h6 class="gallery-caption text-center mt-2">A Community of Readers</h6>    
        </a>
      </div>
      <!-- end of group -->

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch//boy9780618396894-10.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/boy9780618396894-10-thumbnail.jpg" class="img-fluid" alt="Boyle/Scanlon textbook">
		    <h6 class="gallery-caption text-center mt-2">Methods and Strategies for Teaching Students with Mild Disabilities</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/hopper9780547199962-10.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/hopper9780547199962-10-thumbnail.jpg" class="img-fluid" alt="Hopper textbook">
		    <h6 class="gallery-caption text-center mt-2">Practicing College <br>Learning Strategies</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/gri0618767959-08.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover. Winner of 2008 N.E. Book Show Award!">
		    <img src="../gallery/images/portgd-arch/gri0618767959-08-thumbnail.jpg" class="img-fluid" alt="Griffin textbook">
		    <h6 class="gallery-caption text-center mt-2">Management<br>Winner of N.E. Book Show Award!</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/gar9780618938735-08.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/gar9780618938735-08-thumbnail.jpg" class="img-fluid" alt="Garman textbook">
		    <h6 class="gallery-caption text-center mt-2">Personal <br>Finance</h6>    
        </a>
      </div>
      <!-- end of group -->

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch//needles-08.png" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook covers.">
		    <img src="../gallery/images/portgd-arch//needles-08-thumbnail.jpg" class="img-fluid" alt="Needles textbook series">
		    <h6 class="gallery-caption text-center mt-2">Principles of Accounting Series</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/aufmanncat-08.png" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook covers.">
		    <img src="../gallery/images/portgd-arch/aufmanncat-08-thumbnail.jpg" class="img-fluid" alt="Aufmann textbook series">
		    <h6 class="gallery-caption text-center mt-2">College Math Series</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/zum9780618946907-09.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/zum9780618946907-09-thumbnail.jpg" class="img-fluid" alt="Zumdahl textbook">
		    <h6 class="gallery-caption text-center mt-2">Chemical Principles</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/shi9780618935796-09.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/shi9780618935796-09-thumbnail.jpg" class="img-fluid" alt="Shipman textbook">
		    <h6 class="gallery-caption text-center mt-2">An Intro. to Physical Sciences</h6>    
        </a>
      </div>
      <!-- end of group -->


      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch//kes9780618870783-09.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/kes9780618870783-09-thumbnail.jpg" class="img-fluid" alt="Kesselman textbook">
		    <h6 class="gallery-caption text-center mt-2">European Politics in Transition</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/man9780618974511-09.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/man9780618974511-09-thumbnail.jpg" class="img-fluid" alt="Mansbach/Rhodes textbook">
		    <h6 class="gallery-caption text-center mt-2">Global Politics</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/blu978061882068X-09.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/blu978061882068X-09-thumbnail.jpg" class="img-fluid" alt="Blum-Malley textbook">
		    <h6 class="gallery-caption text-center mt-2">Translating Culture</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/cha9780618947195-09.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/cha9780618947195-09-thumbnail.jpg" class="img-fluid" alt="Chaffee textbook">
		    <h6 class="gallery-caption text-center mt-2">Thinking Critically</h6>    
        </a>
      </div>
      <!-- end of group -->

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch//lauterhaal-09.png" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook covers.">
		    <img src="../gallery/images/portgd-arch/lauterhaal-09-thumbnail.jpg" class="img-fluid" alt="Lauter textbook series">
		    <h6 class="gallery-caption text-center mt-2">American Literature series</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/coo9780618907083-09.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/coo9780618907083-09-thumbnail.jpg" class="img-fluid" alt="Cooper textbook">
		    <h6 class="gallery-caption text-center mt-2">Literacy</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/koc9780618842001-09.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION &amp; GRAPHIC DESIGN - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/koc9780618842001-09-thumbnail.jpg" class="img-fluid" alt="Koch textbook">
		    <h6 class="gallery-caption text-center mt-2">So You Want to be a Teacher?</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/ell9780618950034-09.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/ell9780618950034-09-thumbnail.jpg" class="img-fluid" alt="Ellis textbook">
		    <h6 class="gallery-caption text-center mt-2">Becoming a Master Student</h6>    
        </a>
      </div>
      <!-- end of group -->

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch//sam0618348948-08.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover.">
		    <img src="../gallery/images/portgd-arch/sam0618348948-08-thumbnail.jpg" class="img-fluid" alt="Samaniego textbook">
		    <h6 class="gallery-caption text-center mt-2"><br>De Una Vez</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/ano0618259813-08.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover. Winner of N.E. Book Show Award!">
		    <img src="../gallery/images/portgd-arch/ano0618259813-08-thumbnail.jpg" class="img-fluid" alt="Anover textbook">
		    <h6 class="gallery-caption text-center mt-2">A Vous!<br> Winner of N.E. Book Show Award!</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/mer0618678123-rt-07.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook cover. Winner of N.E. Book Show Award!">
		    <img src="../gallery/images/portgd-arch/mer0618678123-rt-07-thumbnail.jpg" class="img-fluid" alt="Merlonghi textbook">
		    <h6 class="gallery-caption text-center mt-2">Oggi in Italia<br> Winner of N.E. Book Show Award!</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/mckay-07.png" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook covers. Winner of N.E. Book Show Award!">
		    <img src="../gallery/images/portgd-arch/mckay-07-thumbnail.jpg" class="img-fluid" alt="McKay history textbook series">
		    <h6 class="gallery-caption text-center mt-2">World History Series<br> Winner of N.E. Book Show Award!</h6>    
        </a>
      </div>
      <!-- end of group -->

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch//perry-07.png" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook covers. Winner of N.E. Book Show Award!">
		    <img src="../gallery/images/portgd-arch//perry-07-thumbnail.jpg" class="img-fluid" alt="Perry history textbook series">
		    <h6 class="gallery-caption text-center mt-2">Western Civilization History Series<br> Winner of N.E. Book Show Award!</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/larson-07.png" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook covers.">
		    <img src="../gallery/images/portgd-arch/larson-07-thumbnail.jpg" class="img-fluid" alt="Larson textbook series">
		    <h6 class="gallery-caption text-center mt-2">College Math Series</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/aufmann-08.png" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook covers.">
		    <img src="../gallery/images/portgd-arch/aufmann-08-thumbnail.jpg" class="img-fluid" alt="Aufmann textbook series">
		    <h6 class="gallery-caption text-center mt-2">College Algebra Series</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/kaseberg-08.png" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook covers.">
		    <img src="../gallery/images/portgd-arch/kaseberg-08-thumbnail.jpg" class="img-fluid" alt="Kaseman textbook series">
		    <h6 class="gallery-caption text-center mt-2">College Algebra Series</h6>    
        </a>
      </div>
      <!-- end of group -->

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/pri0618799702-08.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION - Houghton Mifflin Company: <br>College textbook covers.">
		    <img src="../gallery/images/portgd-arch/pri0618799702-08-thumbnail.jpg" class="img-fluid" alt="Pride-Ferrell textbook">
		    <h6 class="gallery-caption text-center mt-2">Marketing</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/Reece-entirecoverf-08.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION &amp; GRAPHIC DESIGN - Houghton Mifflin Company: <br>College textbook covers.">
		    <img src="../gallery/images/portgd-arch/Reece-entirecoverf-08-thumbnail.jpg" class="img-fluid" alt="Reece/Grant textbook">
		    <h6 class="gallery-caption text-center mt-2">Effective Human Relations</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/guarneri-05.png" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION &amp; GRAPHIC DESIGN - Houghton Mifflin Company: <br>College textbook covers.">
		    <img src="../gallery/images/portgd-arch/guarneri-05-thumbnail.jpg" class="img-fluid" alt="Guarneri textbook series">
		    <h6 class="gallery-caption text-center mt-2">America Compared</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/2004ww-EarthDayPoster.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="GRAPHIC DESIGN and ILLUSTRATION<br> Mass. Community Water Watch: Poster.">
		    <img src="../gallery/images/portgd-arch/2004ww-EarthDayPoster-thumbnail.jpg" class="img-fluid" alt="MA Community Water Watch">
		    <h6 class="gallery-caption text-center mt-2">Earth Day Poster</h6>    
        </a>
      </div>
      <!-- end of group -->

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/sch0618170375-04.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION &amp; GRAPHIC DESIGN - Houghton Mifflin Company: <br>College textbook covers.">
		    <img src="../gallery/images/portgd-arch/sch0618170375-04-thumbnail.jpg" class="img-fluid" alt="Schaller textbook">
		    <h6 class="gallery-caption text-center mt-2">Present Tense</h6>    
        </a>
      </div>

      <div class="col-sm-3 mb-4 gallery-item graphic-design">
        <a href="../gallery/images/portgd-arch/ves0618152997-04.jpg" class="" data-toggle="lightbox" data-gallery="design" data-size="xl" data-caption="ART DIRECTION &amp; GRAPHIC DESIGN - Houghton Mifflin Company: <br>College textbook covers.">
		    <img src="../gallery/images/portgd-arch/ves0618152997-04-thumbnail.jpg" class="img-fluid" alt="Folse/Vestri textbook">
		    <h6 class="gallery-caption text-center mt-2">Top 20: Great Grammer for Great Writing</h6>    
        </a>
      </div>

      <!-- end of group -->


 

    </div><!-- end of row -->


    </div><!-- columns -->

    </div><!-- end of gallery row - portgd-arch -->


    
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

    <!-- Isotope for filtering and loading images -->
  	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  	<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

    <script src="../js/askgalleryscript.js"></script>

  </body>
</html>

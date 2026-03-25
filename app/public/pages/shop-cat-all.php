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




    <title>ASK Design | Art Portfolio - Shop Cat All</title>
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
                  <li><a class="dropdown-item" href="portgd-arch.php">Archives</a></li>
                  <li class="dropdown-header divider"></li>
                  <li class="dropdown-header">Art</li>
                  <li><a class="dropdown-item active" href="portart-rec.php">Recent</a></li>
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
          <h2 class="page-title">Portfolio - Art - Shop Cat All</h2>
          <h3 class="page lead subhd">Recent Art Work</h3>
          <p class="page lead">These are samples of my recent art and illustration work.</p>
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
        <button type="button" class="btn btn-outline-primary" data-filter=".penandink">pen and ink</button>
        <button type="button" class="btn btn-outline-primary" data-filter=".pencil">colored pencil</button>
      </div>

    <div id="portart-rec" class="gallery row">

    <div class="col-12"><!-- columns -->

      <div class="row mb-4">

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1201-hydrangea.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HYDRANGEA (1201) Pastel<br>
		&bull; Original Art: 5&rdquo;x5&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil1201-hydrangea.jpg" class="img-fluid" alt="Peggy's Garden: Hydrangea">
		    <h6 class="gallery-caption text-center mt-2">Hydrangea</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1119-DelicateArch.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DELICATE ARCH (1119) Pastel &amp; gouache<br>
		A hike in Arches National Park, Utah.<br>
		&bull; Original Art: 15&rdquo;x6&rdquo;; with Mat &amp; Frame: 18&rdquo;x9&rdquo;, $265.">
		    <img src="../gallery/images/portart/portil1119-DelicateArch.jpg" class="img-fluid" alt="A hike in Arches National Park, Utah">
		    <h6 class="gallery-caption text-center mt-2">Delicate Arch</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1118-Garden-in-the-Woods.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GARDEN IN THE WOOODS (1118) Pastel<br>
		Framingham, MA.<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1118-Garden-in-the-Woods.jpg" class="img-fluid" alt="Garden in the Woods">
		    <h6 class="gallery-caption text-center mt-2">Garden in the Woods</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1117-Cosmos.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="COSMOS (1117) Pastel<br>
		&bull; Original Art: 8.5&rdquo;x6.5&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1117-Cosmos.jpg" class="img-fluid" alt="Peggy's Garden: Cosmos">
		    <h6 class="gallery-caption text-center mt-2">Cosmos</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1116-BostonPublicGarden.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BOSTON PUBLIC GARDEN (1116) Pastel &amp; watercolor<br>
		&bull; Original Art: 12&rdquo;x6.25&rdquo;; with Mat: 16&rdquo;x10&rdquo;, $65.">
		    <img src="../gallery/images/portart/portil1116-BostonPublicGarden.jpg" class="img-fluid" alt="Boston Public Garden">
		    <h6 class="gallery-caption text-center mt-2">Boston Public Garden</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1115-ColeusGoneWild.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="COLEUS GONE WILD (1115) Pastel<br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat &amp; Frame: 11&rdquo;x14&rdquo;, $21.">
		    <img src="../gallery/images/portart/portil1115-ColeusGoneWild.jpg" class="img-fluid" alt="Wild Coleus">
		    <h6 class="gallery-caption text-center mt-2">Coleus Gone Wild</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1114-Eggplants.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="EGGPLANTS: HUTCHINS FARM (1114) Pastel<br>
		Belmont Farmer's Market, MA.<br>
		&bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1114-Eggplants.jpg" class="img-fluid" alt="Hutchins Farm: Eggplants">
		    <h6 class="gallery-caption text-center mt-2">Eggplants: Hutchins Farm</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1113-Stargazers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="STARGAZERS (1113) Pastel<br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil1113-Stargazers.jpg" class="img-fluid" alt="Star-gazers">
		    <h6 class="gallery-caption text-center mt-2">Star-gazers</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pencil">
  	    <a href="../gallery/images/portart/portil1112-QuietFallDay.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUIET FALL DAY (1112) Colored Pencil<br>
		&bull; Original Art: 5.5&rdquo;x3.5&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil1112-QuietFallDay.jpg" class="img-fluid" alt="Card: Quiet Fall Day">
		    <h6 class="gallery-caption text-center mt-2">Quiet Fall Day</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1111-PtownSettingSun.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PROVINCETOWN SUN SETTING (1111) Pastel<br>
		&bull; Original Art:7&rdquo;x5&rdquo;; nfs.">
		    <img src="../gallery/images/portart/portil1111-PtownSettingSun.jpg" class="img-fluid" alt="Card: P-Town Sun Setting">
		    <h6 class="gallery-caption text-center mt-2">P-Town Sun Setting</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1110-PtownDunes.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DUNES (1110) Pastel<br>
		Provincetown, MA.<br>
		&bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1110-PtownDunes.jpg" class="img-fluid" alt="Stella de Oro flower">
		    <h6 class="gallery-caption text-center mt-2">Stella de Oro</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1109-MtAuburn.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MT. AUBURN (Bike 'n Paint) (1109) Pastel<br>
		Mt. Auburn Cemetery, Cambridge, MA.<br>
		&bull; Original Art: 9&rdquo;x4.5&rdquo;; with Mat: 12&rdquo;x9&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1109-MtAuburn.jpg" class="img-fluid" alt="MAC: Sweet Auburn">
		    <h6 class="gallery-caption text-center mt-2">Sweet Auburn</h6>
	      </a>
      </div>

<!-- end of row -->

     <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1108-StoneBridge.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="STONE BRIDGE, WATERTOWN (Bike 'n Paint) (1108) Pastel<br>
		&bull; Original Art:10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $60.">
		    <img src="../gallery/images/portart/portil1108-StoneBridge.jpg" class="img-fluid" alt="Bike 'n Paint: Stone Bridge">
		    <h6 class="gallery-caption text-center mt-2">Stone Bridge</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1107-Stella-de-Oro.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="STELLA DE ORO (1107) Pastel<br>
		Belmont, MA.<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1107-Stella-de-Oro.jpg" class="img-fluid" alt="Stella de Oro flower">
		    <h6 class="gallery-caption text-center mt-2">Stella de Oro</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1106-SweetAuburn.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SWEET AUBURN (1106) Pastel<br>
		Mt. Auburn Cemetery, Cambridge, MA.<br>
		&bull; Original Art:10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, $210.">
		    <img src="../gallery/images/portart/portil1106-SweetAuburn.jpg" class="img-fluid" alt="MAC: Sweet Auburn">
		    <h6 class="gallery-caption text-center mt-2">Sweet Auburn</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1105-FreshPond.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FRESH POND (Bike 'n Paint) (1105) Pastel<br>
		Cambridge, MA.<br>
		&bull; Original Art: 10&rdquo;x7&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1105-FreshPond.jpg" class="img-fluid" alt="Bike 'n Paint: Fresh Pond">
		    <h6 class="gallery-caption text-center mt-2">Fresh Pond</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1104-CharlesRiver.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CHARLES RIVER (Bike 'n Paint) (1104) Pastel <br>
		Watertown, MA.<br>
		&bull; Original Art: 9&rdquo;x6&rdquo;; with Mat: 12&rdquo;x9&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1104-CharlesRiver.jpg" class="img-fluid" alt="Bike 'n Paint: Charles River">
		    <h6 class="gallery-caption text-center mt-2">Charles River</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel watercolor">
  	    <a href="../gallery/images/portart/portil1103-PolihaleBeach.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="POLIHALE BEACH, KAUAI (1103) Mixed Media<br>
		&bull; Original Art:11&rdquo;x6-3/4&rdquo;; with Mat: 14&rdquo;x11&rdquo;,  SOLD.">
		    <img src="../gallery/images/portart/portil1103-PolihaleBeach.jpg" class="img-fluid" alt="Polihale Beach in Kauai">
		    <h6 class="gallery-caption text-center mt-2">Polihale Beach, Kauai</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil1102-DogSmiling.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DOG SMILING (1102) Pastel<br>
		&bull; Original Art: 6&rdquo;x9&rdquo;; with Mat: 9&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1102-DogSmiling.jpg" class="img-fluid" alt="Smiling Dog">
		    <h6 class="gallery-caption text-center mt-2">Dog Smiling</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1101-Columbine.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="COLUMBINE (1101) Pastel<br>
		&bull; Original Art: 7&rdquo;x5&rdquo;; with Mat &amp; Frame: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1101-Columbine.jpg" class="img-fluid" alt="Columbine in Peggy's garden">
		    <h6 class="gallery-caption text-center mt-2">Columbine</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1015-UndermountainAutumn.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="UNDERMOUNTAIN AUTUMN (1015) Pastel<br>
		Lenox, MA.<br>
		&bull; Original Art: 16&rdquo;x12&rdquo;; with Mat &amp; Frame: 20&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1015-UndermountainAutumn.jpg" class="img-fluid" alt="Autumn at Undermountain Farm">
		    <h6 class="gallery-caption text-center mt-2">Undermountain Autumn</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1014-OmegaMeditation.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OMEGA MEDITATION (1014) Pastel<br>
		The Sanctuary at Omega Institute, Rhinebeck, NY.<br>
		&bull; Original Art: 10&rdquo;x6&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1014-OmegaMeditation.jpg" class="img-fluid" alt="The Sanctuary at Omega">
		    <h6 class="gallery-caption text-center mt-2">Omega Meditation</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1013-MarysFarm.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MARY'S FARM (1013) Pastel<br>
		Rhinebeck, NY.<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1013-MarysFarm.jpg" class="img-fluid" alt="Mary's Farm near Omega">
		    <h6 class="gallery-caption text-center mt-2">Mary's Farm</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1012-HoneyCrispApples.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HONEY CRISP APPLES (1012) Pastel<br>
		    &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, $20.">
		    <img src="../gallery/images/portart/portil1012-HoneyCrispApples.jpg" class="img-fluid" alt="Honey Crisp Apples at farmer's market">
		    <h6 class="gallery-caption text-center mt-2">Honey Crisp Apples</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1011-BlanketFlowersandCosmos.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BLANKET FLOWERS AND COSMOS (1011) Pastel<br>
		    &bull; Original Art: 8&rdquo;x10&rdquo;; with Mat: 11&rdquo;x14&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1011-BlanketFlowersandCosmos.jpg" class="img-fluid" alt="A mix of Blanket Flowers and Cosmos">
		    <h6 class="gallery-caption text-center mt-2">Blanket Flowers and Cosmos</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1010-HotHotPeppers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HOT, HOT PEPPERS (1010) Pastel<br>
		    Belmont Farmer's Market, Belmont, MA.<br>
		    &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1010-HotHotPeppers.jpg" class="img-fluid" alt="Hot peppers">
		    <h6 class="gallery-caption text-center mt-2">Hot, Hot Peppers</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1009-PeacefulBeginnings.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PEACEFUL BEGINNINGS (1009) Pastel<br>
		    Long Pond Lake, Omega Institute, Rhinebeck, NY.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1009-PeacefulBeginnings.jpg" class="img-fluid" alt="Early morning peace">
		    <h6 class="gallery-caption text-center mt-2">Peaceful Beginnings</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1008-PtownLitehouse.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PROVINCETOWN LIGHTHOUSE (1008) Pastel<br>
		    Provincetown, MA.<br>
		    &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1008-PtownLitehouse.jpg" class="img-fluid" alt="Lighthouse at tip of Provincetown">
		    <h6 class="gallery-caption text-center mt-2">Provincetown Lighthouse</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1007-RestfulRidetoPTown.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="RESTFUL RIDE TO PROVINCETOWN (1007) Pastel<br>
		    Cape Cod, MA.<br>
		    &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1007-RestfulRidetoPTown.jpg" class="img-fluid" alt="view of ocean on the way to PTown">
		    <h6 class="gallery-caption text-center mt-2">Restful Ride to Provincetown</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1006-StonyBrookAudubon.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="STONYBROOK AUDUBON (1006) Pastel<br>
		    Norfolk, MA.<br>
		    &bull; Original Art: 10&rdquo;x31/2&rdquo;; with Mat: 14&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1006-StonyBrookAudubon.jpg" class="img-fluid" alt="Audubon Sanctuary at Stonybrook">
		    <h6 class="gallery-caption text-center mt-2">Stonybrook Audubon</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1005-CosmicConeflowers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="COSMIC CONEFLOWERS (1005) Pastel<br>
		    &bull; Original Art: 8&rdquo;x10&rdquo;; with Mat &amp; Frame: 11&rdquo;x14&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1005-CosmicConeflowers.jpg" class="img-fluid" alt="Large coneflowers">
		    <h6 class="gallery-caption text-center mt-2">Cosmic Coneflowers</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1004-BetweenRainstorms.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BETWEEN RAINSTORMS (1004) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1004-BetweenRainstorms.jpg" class="img-fluid" alt="Paint outside between rainstorms">
		    <h6 class="gallery-caption text-center mt-2">Between Rainstorms</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1003-quiet-on-the-charles.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUIET ON THE CHARLES (1003) Pastel<br>
		    Watertown, MA.<br>
		    &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1003-quiet-on-the-charles.jpg" class="img-fluid" alt="Enjoying a quiet day on the Charles">
		    <h6 class="gallery-caption text-center mt-2">Quiet on the Charles</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1002-MemoriesAfterRain.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MEMORIES OF AFTER THE RAIN (1002) Pastel<br>
		    Kripalu Center, Lenox, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil1002-MemoriesAfterRain.jpg" class="img-fluid" alt="Remembering an earlier painting outing">
		    <h6 class="gallery-caption text-center mt-2">Memories of After the Rain</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1001-HutchinsFarminFall.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HUTCHINS FARM IN FALL (1001) Pastel &amp; Watercolor<br>
		    Concord, MA. &bull; Original Art: 12&rdquo;x6.25&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1001-HutchinsFarminFall.jpg" class="img-fluid" alt="A fall visit to Hutchins Farm">
		    <h6 class="gallery-caption text-center mt-2">Hutchins Farm in Fall</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0920-crispkripalumorning-c2010.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CRISP KRIPALU MORNING (0920) Pastel<br>
		    Kripalu Center, Lenox, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0920-crispkripalumorning-c2010.jpg" class="img-fluid" alt="Crisp Morning at Kripalu">
		    <h6 class="gallery-caption text-center mt-2">Crisp Kripalu Morning</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0919-thoreauscove.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="THOREAU'S COVE (0919) Pastel<br>
		    Walden Pond, Concord, MA.<br>
		    &bull; Original Art: 11&rdquo;x6&rdquo;; with Mat: 14&rdquo;x9&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0919-thoreauscove.jpg" class="img-fluid" alt="Cove near Thoreau's home">
		    <h6 class="gallery-caption text-center mt-2">Thoreau's Cove</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0918-mexicansunflowers-cleome.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MEXICAN SUNFLOWERS AND CLEOME (0918) Pastel<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0918-mexicansunflowers-cleome.jpg" class="img-fluid" alt="Cleome and Mexican Sunflowers">
		    <h6 class="gallery-caption text-center mt-2">Mexican Sunflowers and Cleome</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0917-sergisflowers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SERGI'S SUNFLOWERS (0917) Pastel<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0917-sergisflowers.jpg" class="img-fluid" alt="Sunflowers at Sergi's farm">
		    <h6 class="gallery-caption text-center mt-2">Sergi's Sunflowers</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0916-thoreausview.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="THOREAU'S VIEW (0916) Pastel<br>
		    View of Walden Pond in front of Thoreau's home, Concord, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0916-thoreausview.jpg" class="img-fluid" alt="Thoreau's view of Walden Pond">
		    <h6 class="gallery-caption text-center mt-2">Thoreau's View</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0915-hydrangeasatwillowpond.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HYDRANGEA AT WILLOW POND (0915) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0915-hydrangeasatwillowpond.jpg" class="img-fluid" alt="White Hydrangea">
		    <h6 class="gallery-caption text-center mt-2">Hydrangea at Willow Pond</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0913-heirloomtomatoes.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HEIRLOOM TOMATOES (0913) Pastel<br>
		    Belmont Farmer's Market in MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0913-heirloomtomatoes.jpg" class="img-fluid" alt="Heirloom Tomatoes at farmer's market">
		    <h6 class="gallery-caption text-center mt-2">Heirloom Tomatoes</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0912-willowpond-summer.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WILLOW POND, SUMMER (0912) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, $210.">
		    <img src="../gallery/images/portart/portil0912-willowpond-summer.jpg" class="img-fluid" alt="summer day at Willow Pond">
		    <h6 class="gallery-caption text-center mt-2">Willow Pond, Summer</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0911-rainbowchard.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="RAINBOW CHARD (0911) Pastel<br>
		    Belmont Farmer's Market, Belmont, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0911-rainbowchard.jpg" class="img-fluid" alt="Rainbow Chard at farmer's market">
		    <h6 class="gallery-caption text-center mt-2">Ranbow Chard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0910-orangelilies.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ORANGE LILIES (0910) Pastel<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0910-orangelilies.jpg" class="img-fluid" alt="Orange Lilies next door">
		    <h6 class="gallery-caption text-center mt-2">Orange Lilies</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0909-goodneighbors.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GOOD NEIGHBORS (0909) Pastel<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0909-goodneighbors.jpg" class="img-fluid" alt="thanks to our good neighbors">
		    <h6 class="gallery-caption text-center mt-2">Good Neighbors</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0908-echinacea.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ECHINACEA (0908) Pastel<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0908-echinacea.jpg" class="img-fluid" alt="Echinacea in our garden">
		    <h6 class="gallery-caption text-center mt-2">Echinacea</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0907-beebalmquad.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BEE BALM QUAD (0907) Pastel<br>
		    &bull; Original Art: 6&rdquo;x9&rdquo;; with Mat: 9&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0907-beebalmquad.jpg" class="img-fluid" alt="4 Bee Balm">
		    <h6 class="gallery-caption text-center mt-2">Bee Balm Quad</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0906-beebalmsparklers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BEE BALM SPARKLERS (0906) Pastel<br>
		    &bull; Original Art: 6&rdquo;x9&rdquo;; with Mat: 9&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0906-beebalmsparklers.jpg" class="img-fluid" alt="Bee Balm resembling sparklers">
		    <h6 class="gallery-caption text-center mt-2">Bee Balm Sparklers</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0905-julypetunias.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="JULY PETUNIAS (0905) Pastel<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0905-julypetunias.jpg" class="img-fluid" alt="Peggy's July Petunias">
		    <h6 class="gallery-caption text-center mt-2">July Petunias</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0904-charlesriverspring.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CHARLES RIVER, SPRING (0904) Pastel<br>
		    &bull; Original Art: 12&rdquo;x3.25&rdquo;; with Mat &amp; Frame: 16&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0904-charlesriverspring.jpg" class="img-fluid" alt="view of Charles River in spring">
		    <h6 class="gallery-caption text-center mt-2">Charles River</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes">
  	    <a href="../gallery/images/portart/portil0902-drums3f-kiwitee.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="3 DRUMS (0902) Digital<br>
		    &bull; Original Art: 8.5&rdquo;x11&rdquo;; licensed for T-shirt.">
		    <img src="../gallery/images/portart/portil0902-drums3f-kiwitee.jpg" class="img-fluid" alt="Thoreau tee: 3 Drums">
		    <h6 class="gallery-caption text-center mt-2">Thoreau: 3 Drums</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals">
  	    <a href="../gallery/images/portart/portil0901-childchip-skyblue.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MIRACLE EYES (0901) Digital<br>
		    &bull; Original Art: 8.5&rdquo;x11&rdquo;; licensed for T-shirt.">
		    <img src="../gallery/images/portart/portil0901-childchip-skyblue.jpg" class="img-fluid" alt="Thoreau tee: Miracle Eyes">
		    <h6 class="gallery-caption text-center mt-2">Thoreau: Miracle Eyes</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0823-shimmering.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SHIMMERING (0823) Pastel<br>
		    Bimini, Bahamas.<br>
        &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0823-shimmering.jpg" class="img-fluid" alt="Shimmering ocean">
		    <h6 class="gallery-caption text-center mt-2">Shimmering</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0820-pathtoautumntrees.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PATH TO AUTUMN TREES (0820) Pastel<br>
        &bull; Original Art: 10&rdquo;x3.5&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0820-pathtoautumntrees.jpg" class="img-fluid" alt="Path leading to trees in autumn">
		    <h6 class="gallery-caption text-center mt-2">Path to Autumn Trees</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscape pastel">
  	    <a href="../gallery/images/portart/portil0819-fallcomfort.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FALL COMFORT (0819) Pastel<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0819-fallcomfort.jpg" class="img-fluid" alt="Fall comfort colors">
		    <h6 class="gallery-caption text-center mt-2">Fall Comfort</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0817-loon.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LOON (0817) Pastel<br>
		    Squam Lake, New Hampshire.<br>
		    &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0817-loon.jpg" class="img-fluid" alt="Loon at Squam Lake">
		    <h6 class="gallery-caption text-center mt-2">Loon</h6>
	      </a>
      </div>

<!-- end of row -->

       <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0816-woodlandpond.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WOODLAND POND (0816) Pastel<br>
        &bull; Original Art: 10&rdquo;x8&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0816-woodlandpond.jpg" class="img-fluid" alt="Pond in a woodsy area">
		    <h6 class="gallery-caption text-center mt-2">Woodland Pond</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscape pastel">
  	    <a href="../gallery/images/portart/portil0815-inthewoods.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="IN THE WOODS (0815) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 9.75&rdquo;x8&rdquo;; with Mat &amp; Frame: 11&rdquo;x14&rdquo;, $210.">
		    <img src="../gallery/images/portart/portil0815-inthewoods.jpg" class="img-fluid" alt="Spectacle Pond woods">
		    <h6 class="gallery-caption text-center mt-2">In the Woods</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil0814-tophatzinnias.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="TOP HAT ZINNIAS (0814) Colored Pencil<br>
        &bull; Original Art: 3.5&rdquo;x5.25&rdquo;; with Mat: 8&rdquo;x10&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0814-tophatzinnias.jpg" class="img-fluid" alt="Tophat zinnias">
		    <h6 class="gallery-caption text-center mt-2">Top Hat Zinnias</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0813-quintethotzinnias.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUINTET: HOT ZINNIAS (0813) Pastel<br>
        &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 12&rdquo;x10&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0813-quintethotzinnias.jpg" class="img-fluid" alt="Series of 5 paintings: hot zinnias">
		    <h6 class="gallery-caption text-center mt-2">Quintet: Hot Zinnias</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0812-quintetcosmos.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUINTET: COSMOS (0812) Pastel<br>
        &bull; Original Art: 8&rdquo;x5.5&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0812-quintetcosmos.jpg" class="img-fluid" alt="Series of 5 paintings: cosmos">
		    <h6 class="gallery-caption text-center mt-2">Quintet: Cosmos</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0811-quintetmarigolds.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUINTET: MARIGOLDS (0811) Pastel<br>
        &bull; Original Art: 5.5&rdquo;x8&rdquo;; with Mat: 10”x12”, SOLD.">
		    <img src="../gallery/images/portart/portil0811-quintetmarigolds.jpg" class="img-fluid" alt="Series of 5 paintings: marigolds">
		    <h6 class="gallery-caption text-center mt-2">Quintet: Marigolds</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0810-quintetpetunias.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUINTET: PETUNIAS (0810) Pastel<br>
		    &bull; Original Art: 5.5&rdquo;x8&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0810-quintetpetunias.jpg" class="img-fluid" alt="Series of 5 paintings: petunias">
		    <h6 class="gallery-caption text-center mt-2">Quintet: Petunias</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0809-quintetzinnias.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUINTET: ZINNIAS (0809) Pastel<br>
        &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 12&rdquo;x10&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0809-quintetzinnias.jpg" class="img-fluid" alt="Series of 5 paintings: zinnias">
		    <h6 class="gallery-caption text-center mt-2">Quintet: Zinnias</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil0808-rainydaybouquet.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="RAINY DAY BOUQUET (0808) Colored Pencil<br>
		    &bull; Original Art: 5&rdquo;x5&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0808-rainydaybouquet.jpg" class="img-fluid" alt="Bouquet art on a rainy day">
		    <h6 class="gallery-caption text-center mt-2">Rain Day Bouquet</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0807-reflections.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="REFLECTIONS (0807) Pastel<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0807-reflections.jpg" class="img-fluid" alt="Reflections at Willow Pond">
		    <h6 class="gallery-caption text-center mt-2">Reflections</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0806-waldenpond.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WALDEN POND (0806) Pastel<br>
		    Concord, MA.<br>
        &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0806-waldenpond.jpg" class="img-fluid" alt="Relaxing at Walden Pond">
		    <h6 class="gallery-caption text-center mt-2">Walden Pond</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0805-jardindejuillet.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="JARDIN DE JUILLET (0805) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0805-jardindejuillet.jpg" class="img-fluid" alt="A garden visit in hot July">
		    <h6 class="gallery-caption text-center mt-2">Jardin de Juillet</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0804-ptowndeparture.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PROVINCETOWN DEPARTURE (0804) Pastel<br>
		    &bull; Original Art: 10&rdquo;x3.75&rdquo;; with Mat &amp; Frame: 14&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0804-ptowndeparture.jpg" class="img-fluid" alt="Leaving Provincetown">
		    <h6 class="gallery-caption text-center mt-2">Provincetown Departure</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0803-ptownarrival.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PROVINCETOWN ARRIVAL (0803) Pastel<br>
		    &bull; Original Art: 10&rdquo;x3.75&rdquo;; with Mat &amp; Frame: 14&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0803-ptownarrival.jpg" class="img-fluid" alt="Arriving at Provincetown">
		    <h6 class="gallery-caption text-center mt-2">Provincetown Arrival</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0802-springvalentine.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SPRING VALENTINE (0802) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0802-springvalentine.jpg" class="img-fluid" alt="Bushes in shape of valentine">
		    <h6 class="gallery-caption text-center mt-2">Spring Valentine</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0801-azaleasonslope.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AZALEAS ON THE SLOPE (0801) Pastel<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0801-azaleasonslope.jpg" class="img-fluid" alt="Cluster of Azaleas on a hill">
		    <h6 class="gallery-caption text-center mt-2">Azaleas on the Slope</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil0722-altermyria.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ALTERMYRIA (0722) Colored Pencil<br>
        &bull; Original Art: 7&rdquo;x5&rdquo;; nfs.">
		    <img src="../gallery/images/portart/portil0722-altermyria.jpg" class="img-fluid" alt="Altermyria bouquet">
		    <h6 class="gallery-caption text-center mt-2">Altermyria</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0721-islandtime.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ISLAND TIME (0721) Pastel<br>
		    Bimini, Bahamas.<br>
        &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0721-islandtime.jpg" class="img-fluid" alt="Island corner">
		    <h6 class="gallery-caption text-center mt-2">Island Time</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0719-lenoxfarmhouse-c2018.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LENOX FARMHOUSE (0719) Pastel<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0719-lenoxfarmhouse-c2018.jpg" class="img-fluid" alt="Farmhouse with garden">
		    <h6 class="gallery-caption text-center mt-2">Lenox Farmhouse</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0718-portal-c2018.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PORTAL (0718) Pastel<br>
        &bull; Original Art: 16&rdquo;x12&rdquo;; $315.">
		    <img src="../gallery/images/portart/portil0718-portal-c2018.jpg" class="img-fluid" alt="Imagining a portal in the mountains">
		    <h6 class="gallery-caption text-center mt-2">Portal</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0717-anticipation.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTICIPATION (0717) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $75.">
		    <img src="../gallery/images/portart/portil0717-anticipation.jpg" class="img-fluid" alt="Anticipating a storm">
		    <h6 class="gallery-caption text-center mt-2">Anticipation</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0716-return.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="RETURN (0716) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0716-return.jpg" class="img-fluid" alt="Fond Return to Lenox">
		    <h6 class="gallery-caption text-center mt-2">Return</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0715-audubonoverlook.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AUDUBON OVERLOOK (0715) Pastel<br>
        &bull; Original Art: 7&rdquo;x5&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0715-audubonoverlook.jpg" class="img-fluid" alt="Overlook at Drumlin Farm">
		    <h6 class="gallery-caption text-center mt-2">Audubon Overlook</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0714-dunesatdawn.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DUNES AT DAWN (0714) Pastel<br>
		    Provincetown, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0714-dunesatdawn.jpg" class="img-fluid" alt="Provincetown Dunes at Dawn">
		    <h6 class="gallery-caption text-center mt-2">Dunes at Dawn</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0713-wellfleetwetlands.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WELLFLEET WETLANDS (0713) Pastel<br>
		    &bull; Original Art: 16&rdquo;x12&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0713-wellfleetwetlands.jpg" class="img-fluid" alt="Wetlands in Wellfleet">
		    <h6 class="gallery-caption text-center mt-2">Wellfleet Wetlands</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0712-biminibubbles-c2018.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BIMINI BUBBLES (0712) Pastel<br>
        &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, $20.">
		    <img src="../gallery/images/portart/portil0712-biminibubbles-c2018.jpg" class="img-fluid" alt="Dolphin bubbles at Bimini">
		    <h6 class="gallery-caption text-center mt-2">Bimini Bubbles</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0711-spottedhello.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SPOTTED HELLO (0711) Pastel<br>
		    &bull; Original Art: 9&rdquo;x6&rdquo;; with Mat: 12&rdquo;x9&rdquo;, $30.">
		    <img src="../gallery/images/portart/portil0711-spottedhello.jpg" class="img-fluid" alt="Spotted dolphins saying hello">
		    <h6 class="gallery-caption text-center mt-2">Spotted Hello</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0710-biminisunrise.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BIMINI SUNRISE (0710) Pastel<br>
		    &bull; Original Art: 10&rdquo;x3.5&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0710-biminisunrise.jpg" class="img-fluid" alt="Sunrise in Bimini">
		    <h6 class="gallery-caption text-center mt-2">Bimini Sunrise</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0708-mistedmtns.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MISTED MOUNTAINS (0708) Pastel<br>
		    &bull; Original Art: 12.5&rdquo;x5&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0708-mistedmtns.jpg" class="img-fluid" alt="Misted Mountains at Kripalu">
		    <h6 class="gallery-caption text-center mt-2">Misted Mountains</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0707-azaleasinmay.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AZALEAS IN MAY (0707) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0707-azaleasinmay.jpg" class="img-fluid" alt="May Azaleas">
		    <h6 class="gallery-caption text-center mt-2">Azaleas in May</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0706-heartofspring.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HEART OF SPRING (0706) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0706-heartofspring.jpg" class="img-fluid" alt="Spring Hearts shapes in bushes">
		    <h6 class="gallery-caption text-center mt-2">Heart of Spring</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil0705-orchid.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ORCHID (0705) Colored Pencil<br>
		    &bull; Original Art: 4&rdquo;x5.5&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0705-orchid.jpg" class="img-fluid" alt="Orchid">
		    <h6 class="gallery-caption text-center mt-2">Orchid</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0622-evergreen.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="EVER GREEN (0622) Pastel &amp; Gouache <br>
		    Lenox, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0622-evergreen.jpg" class="img-fluid" alt="Evergreens at Kripalu">
		    <h6 class="gallery-caption text-center mt-2">Evergreen</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0621-lenoxaudpond3.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LENOX AUDUBON POND 3 (0621) Pastel <br>
		    Lenox, MA.<br>
    		&bull; Original Art: 16&rdquo;x12&rdquo;; with Mat: 20&rdquo;x16&rdquo;, $130.">
		    <img src="../gallery/images/portart/portil0621-lenoxaudpond3.jpg" class="img-fluid" alt="pond at Lenox Audubon sanctuary">
		    <h6 class="gallery-caption text-center mt-2">Lenox Audubon Pond #3</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0620-flowersymphony-c2018.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FLOWER SYMPHONY (0620) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Licensed for Book Cover <br>
		    &bull; Original Art: 14&rdquo;x18&rdquo;; with Mat &amp; Frame: 18&rdquo;x22&rdquo;, $315.">
		    <img src="../gallery/images/portart/portil0620-flowersymphony-c2018.jpg" class="img-fluid" alt="Flower Symphony in Lenox">
		    <h6 class="gallery-caption text-center mt-2">Flower Symphony</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0619-fairfaxredwoods.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FAIRFAX REDWOODS (0619) Pastel<br>
		    &bull; Original Art: 7&rdquo;x5&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0619-fairfaxredwoods.jpg" class="img-fluid" alt="Park in Fairfax, CA">
		    <h6 class="gallery-caption text-center mt-2">Fairfax Redwoods</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0618-onemesa.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ONE MESA (0618) Pastel<br>
		    Pt. Reyes, CA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, <strong>SOLD.">
		    <img src="../gallery/images/portart/portil0618-onemesa.jpg" class="img-fluid" alt="B&B at Pt. Reyes">
		    <h6 class="gallery-caption text-center mt-2">One Mesa</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0617-ptreyesbeach.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PT. REYES BEACH (0617) Pastel<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 11&rdquo;x14&rdquo; SOLD.">
		    <img src="../gallery/images/portart/portil0617-ptreyesbeach.jpg" class="img-fluid" alt="beach at Pt. Reyes">
		    <h6 class="gallery-caption text-center mt-2">Pt. Reyes Beach</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0616-oceandaybreak.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OCEAN DAYBREAK (0616) Pastel<br>
		    Provincetown, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0616-oceandaybreak.jpg" class="img-fluid" alt="oceandaybreak at Ptown">
		    <h6 class="gallery-caption text-center mt-2">Ocean Daybreak</h6>
	      </a>
      </div>


<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pencil">
  	    <a href="../gallery/images/portart/portil0615-heronshome.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HERONS' HOME (0615) Pastel<br>
		    Wellfleet, MA.<br>
		    &bull; Original Art: 16&rdquo;x12&rdquo;; with Mat &amp; Frame: 20&rdquo;x16&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0615-heronshome.jpg" class="img-fluid" alt="Heron's Home in Wellfleet">
		    <h6 class="gallery-caption text-center mt-2">Heron's Home</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0614-iris4iris.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="IRIS FOR IRIS (0614) Pastel<br>
		    &bull; Original Art: 8&rdquo;x10&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0614-iris4iris.jpg" class="img-fluid" alt="Iris art for friend">
		    <h6 class="gallery-caption text-center mt-2">Iris for Iris</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0613-beautifultree.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BEAUTIFUL TREE (0613) Pastel<br>
		    Rhinebeck, NY.<br>
    		&bull; Original Art: 9&rdquo;x12&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0613-beautifultree.jpg" class="img-fluid" alt="beautiful tree at Omega">
		    <h6 class="gallery-caption text-center mt-2">Beautiful Tree</h6>
	      </a>
      </div>


<!-- end of row -->

       <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil0611-iris.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="IRIS (0611) Colored Pencil<br>
    		&bull; Original Art: 3.5&rdquo;x5.5&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0611-iris.jpg" class="img-fluid" alt="iris artwork">
		    <h6 class="gallery-caption text-center mt-2">Iris</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0610-omegaafternoon.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OMEGA AFTERNOON (0610) Pastel<br>
		    Rhinebeck, NY.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0610-omegaafternoon.jpg" class="img-fluid" alt="afternoon at Omega">
		    <h6 class="gallery-caption text-center mt-2">Omega Afternoon</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0609-omegamorning.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OMEGA MORNING (0609) Pastel<br>
		    Rhinebeck, NY.<br>
    		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0609-omegamorning.jpg" class="img-fluid" alt="morning at Omega">
		    <h6 class="gallery-caption text-center mt-2">Omega Morning</h6>
	      </a>
      </div>


<!-- end of row -->
       
      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0608-beardediris.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BEARDED IRIS (0608) Pastel<br>
		    Cambridge, MA.<br>
    		&bull; Original Art: 5&rdquo;x7&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0608-beardediris.jpg" class="img-fluid" alt="beardediris">
		    <h6 class="gallery-caption text-center mt-2">Bearded Iris</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0607-celebration.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CELEBRATION (0607) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0607-celebration.jpg" class="img-fluid" alt="celebration artwork">
		    <h6 class="gallery-caption text-center mt-2">Celebration</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0606-bridgespecpond.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SPECTACLE POND (0606) Pastel<br>
        Mt. Auburn Cemetery, Cambridge, MA.<br>
        &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, $30.">
		    <img src="../gallery/images/portart/portil0606-bridgespecpond.jpg" class="img-fluid" alt="spectaclepond bridge">
		    <h6 class="gallery-caption text-center mt-2">Spectacle Pond</h6>
	      </a>
      </div>


<!-- end of row -->
       

       <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0605-bflygarden.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BUTTERFLY GARDEN (0605) Pastel<br>
		    Cambridge, MA.<br>
    		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0605-bflygarden.jpg" class="img-fluid" alt="butterflygarden">
		    <h6 class="gallery-caption text-center mt-2">Butterfly Garden</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0604-1stlight.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FIRST LIGHT (0604) Pastel<br>
        Wellfleet, MA.<br>
        &bull; Original Art: 17.75&rdquo;x12.75&rdquo;; with Mat &amp; Frame: 20&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0604-1stlight.jpg" class="img-fluid" alt="FirstLight">
		    <h6 class="gallery-caption text-center mt-2">First Light</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pencil">
  	    <a href="../gallery/images/portart/portil0601-healinglight.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HEALING LIGHT (0601) Colored Pencil<br>
        &bull; Original Art: 5&rdquo;x4.75&rdquo;; SOLD.">
		    <img src="../gallery/images/portart/portil0601-healinglight.jpg" class="img-fluid" alt="healinglight">
		    <h6 class="gallery-caption text-center mt-2">Healing Light</h6>
	      </a>
      </div>


<!-- end of row -->
     
      

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0522-kripaluautumn.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="KRIPALU AUTUMN (0522) Pastel<br>
        Lenox, MA.<br>
        &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0522-kripaluautumn.jpg" class="img-fluid" alt="Kripalu autumn colors">
		    <h6 class="gallery-caption text-center mt-2">Kripalu Autumn</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0521-solitude.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SOLITUDE (0521) Pastel<br>
        Lenox, MA.<br>
        &bull; Original Art: 16&rdquo;x12&rdquo;; with Mat &amp; Frame: 20&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0521-solitude.jpg" class="img-fluid" alt="Solitary tree">
		    <h6 class="gallery-caption text-center mt-2">Solitude</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0520-sanctuary.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SANCTUARY (0520) Pastel<br>
        Lenox, MA <br>
        &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0520-sanctuary.jpg" class="img-fluid" alt="purplestrife">
		    <h6 class="gallery-caption text-center mt-2">Sanctuary</h6>
	      </a>
      </div>


<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0517-spiritmtn.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SPIRIT MOUNTAIN (0517) Pastel<br>
        Lenox, MA.<br>
        &bull; Original Art: 10&rdquo;x10&rdquo;; with Mat: 12&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0517-spiritmtn.jpg" class="img-fluid" alt="spiritmtn">
		    <h6 class="gallery-caption text-center mt-2">Spirit Mountain</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0513-wellfleetwaves.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WELLFLEET WAVES (0513) Pastel<br>
        &bull; Original Art: 12.75&rdquo;x10&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0513-wellfleetwaves.jpg" class="img-fluid" alt="WellfleetWaves">
		    <h6 class="gallery-caption text-center mt-2">Wellfleet Waves</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0512-purplestrife.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PURPLE STRIFE (0512) Pastel<br>
        Wellesley, MA <br>
        &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0512-purplestrife.jpg" class="img-fluid" alt="purplestrife">
		    <h6 class="gallery-caption text-center mt-2">Purple Strife</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0511-yellowliles.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="YELLOW LILIES (0511) Pastel<br>
        Mt. Auburn Cemetery, Cambridge, MA.<br>
        &bull; Original Art: 18&rdquo;x12.5&rdquo;; with Mat: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0511-yellowliles.jpg" class="img-fluid" alt="yellowlilies">
		    <h6 class="gallery-caption text-center mt-2">Yellow Lilies</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0510-willowpondpath.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WILLOW POND PATH (0510) Pastel<br>
        Mt. Auburn Cemetery, Cambridge, MA.<br>
        &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0510-willowpondpath.jpg" class="img-fluid" alt="willowpondpath">
		    <h6 class="gallery-caption text-center mt-2">Willow Pond Path</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0509-path1atmac.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PATH 1 AT MOUNT AUBURN (0509) Pastel<br>
        &bull; Original Art: 18&rdquo;x12.5&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0509-path1atmac.jpg" class="img-fluid" alt="path at mac">
		    <h6 class="gallery-caption text-center mt-2">Path 1 at Mount Auburn</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0508-sundance.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SUN DANCE (0508) Pastel<br>
        Mt. Auburn Cemetery, Cambridge, MA.<br>
        &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0508-sundance.jpg" class="img-fluid" alt="Sundance">
		    <h6 class="gallery-caption text-center mt-2">Sun Dance</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0507-cactuspose.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CACTUS POSE (0507) Pastel<br>
        &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat: 24&rdquo;x18&rdquo;, $120.">
		    <img src="../gallery/images/portart/portil0507-cactuspose.jpg" class="img-fluid" alt="cactuspose">
		    <h6 class="gallery-caption text-center mt-2">Cactus Pose</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0506-epiphany.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="KRIPALU EPIPHANY (0506) Pastel<br>
        Lenox, MA.<br>
        &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0506-epiphany.jpg" class="img-fluid" alt="Epiphany artwork">
		    <h6 class="gallery-caption text-center mt-2">Kripalu Epiphany</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0505-aftertherain.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AFTER THE RAIN (0505) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat  &amp; Frame: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0505-aftertherain.jpg" class="img-fluid" alt="After the Rain at Kripalu">
		    <h6 class="gallery-caption text-center mt-2">After the Rain</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0502-antelopecanyon4.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTELOPE CANYON 4 &#8212; FOR GLORIA (0502) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0502-antelopecanyon4.jpg" class="img-fluid" alt="Antelope Canyon4 art series">
		    <h6 class="gallery-caption text-center mt-2">Antelope Canyon #4 For Gloria</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0501-antelopecanyon3.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTELOPE CANYON 3 (0501) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0501-antelopecanyon3.jpg" class="img-fluid" alt="Antelope Canyon3 - art series">
		    <h6 class="gallery-caption text-center mt-2">Antelope Canyon #3</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0407-antelopecanyon2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTELOPE CANYON 2 (0407) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat  &amp; Frame: 12&rdquo;x16&rdquo;, $265.">
		    <img src="../gallery/images/portart/portil0407-antelopecanyon2.jpg" class="img-fluid" alt="Antelope Canyon2 - art series">
		    <h6 class="gallery-caption text-center mt-2">Antelope Canyon #2</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0406-antelopecanyon.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTELOPE CANYON 1 (0406) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat &amp; Frame: 12&rdquo;x16&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0406-antelopecanyon.jpg" class="img-fluid" alt="Antelope Canyon1 - art series">
		    <h6 class="gallery-caption text-center mt-2">Antelope Canyon #1</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pencil">
  	    <a href="../gallery/images/portart/portil0405-greetings-colpencil.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GREETINGS (0404) Colored Pencil<br>
    		&bull; Original Art: 5&rdquo;x8&rdquo;; with Mat &amp; Frame: 8&rdquo;x10&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0405-greetings-colpencil.jpg" class="img-fluid" alt="3 Dolphins greeting">
		    <h6 class="gallery-caption text-center mt-2">Greetings</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item animals flowersplants pencil">
  	    <a href="../gallery/images/portart/portil0401-weareallconnected.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WE ARE ALL CONNECTED (0401) Colored Pencil <br>
    		&bull; Original Art: 9&rdquo;x9&rdquo;; with Mat &amp; Frame: 12&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0401-weareallconnected.jpg" class="img-fluid" alt="Connected project">
		    <h6 class="gallery-caption text-center mt-2">We Are All Connected</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0320-infinity5.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 5 / FOREVER PEACE (0320) Pastel <br>
    		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0320-infinity5.jpg" class="img-fluid" alt="Infinity2 art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #5</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0319-infinity4.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 4 / THIRD EYE (0319) Pastel <br>
    		&bull; Original Art: 18&rdquo;x12&rdquo;; with Mat: 24&rdquo;x18&rdquo;, $100.">
		    <img src="../gallery/images/portart/portil0319-infinity4.jpg" class="img-fluid" alt="Infinity art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #4</h6>
	      </a>
      </div>
 
<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0318-infinity3.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 3 (0318) Pastel<br>
    		&bull; Original Art: 18&rdquo;x12&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0318-infinity3.jpg" class="img-fluid" alt="Infinity art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #3</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pencil">
  	    <a href="../gallery/images/portart/portil0317-infinity2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 2 (0317) Colored Pencil <br>
    		&bull; Original Art:  11.5&rdquo;x8.5&rdquo;; with Mat: 16&rdquo;x12&rdquo;, $100.">
		    <img src="../gallery/images/portart/portil0317-infinity2.jpg" class="img-fluid" alt="Infinity2 art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #2</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0316-infinity.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY (0316) Pastel<br>
		    &bull; Licensed for book cover <br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0316-infinity.jpg" class="img-fluid" alt="Infinity art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity</h6>
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

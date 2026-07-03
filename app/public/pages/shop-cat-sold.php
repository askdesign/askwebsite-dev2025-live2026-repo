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




    <title>ASK Design | Shop - Original Art Sold / NFS</title>
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
                  <li><a class="dropdown-item" href="shop-cat.php">Original Art</a></li>
                  <li><a class="dropdown-item" href="shop-cat-sale.php">Sale</a></li>
                  <li><a class="dropdown-item" href="shop-cat-cards.php">Cards</a></li>
                  <li><a class="dropdown-item" href="shop-cat-prints.php">Prints</a></li>
                  <li><a class="dropdown-item" href="shop-cat-tees.php">Tees</a></li>
                  <li><a class="dropdown-item active" aria-current="page" href="shop-cat-sold.php">Sold/NFS</a></li>
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
          <h2 class="page-title">Shop - Sold / NFS</h2>
          <h3 class="page lead subhd">Original Artwork Sold or NFS (Not For Sale)</h3>
          <p class="page lead">The original artwork on this page has either been Sold or is Not For Sale (nfs). You can purchase reproductions through my <a href="https://fineartamerica.com/profiles/anne-katzeff/shop">Fine Art America shop</a>: cards, prints, masks, tees, mugs, and more! If the one you like isn't already reproduced as a card or print, special arrangements can be made, so <a href="contact.php">contact</a> me!</p>
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
  	    <a href="../gallery/images/portart/portil2526-nantasketbeach.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="NANTASKET BEACH (2526) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat 14”x11”, SOLD.">
		    <img src="../gallery/images/portart/portil2526-nantasketbeach-thumbnail.jpg" class="img-fluid" alt="late summer view of Nantasket Beach">
		    <h6 class="gallery-caption text-center mt-2">Nantasket Beach 2025</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil2524-suddenly.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SUDDENLY (2524) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat & Frame: 14”x11”, nfs.">
		    <img src="../gallery/images/portart/portil2524-suddenly-thumbnail.jpg" class="img-fluid" alt="a storm suddenly emerged">
		    <h6 class="gallery-caption text-center mt-2">Suddenly</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2516-roseofsharon.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ROSE OF SHARON (2516) watercolor <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat & Frame 8”x10”, nfs.">
		    <img src="../gallery/images/portart/portil2516-roseofsharon-thumbnail.jpg" class="img-fluid" alt="Rose of Sharon take my breath away!">
		    <h6 class="gallery-caption text-center mt-2">Rose of Sharon</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item animals watercolor">
  	    <a href="../gallery/images/portart/portil2502-birdsandwords-list.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BIRDS AND WORDS 2 - LIST (2502) Watercolor <br>
		&bull; Original Art: 7.5&rdquo;x5&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2502-birdsandwords-list-thumbnail.jpg" class="img-fluid" alt="I loved crafting a single, large word and placing birds on it.">
		    <h6 class="gallery-caption text-center mt-2">Birds and Words 2 - List</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2410-gratitude.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GRATITUDE (2410) Pastel <br>
		&bull; Original Art: 5.5&rdquo;x8&rdquo;; with Mat & Frame: 8”x10”, nfs.">
		    <img src="../gallery/images/portart/portil2410-gratitude-thumbnail.jpg" class="img-fluid" alt="grateful to paint at Habitat Education Center & Wildlife Sanctuary">
		    <h6 class="gallery-caption text-center mt-2">Gratitude</h6>
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

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2403-amaryllis-bday-carl.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AMARYLLIS FOR CARL (2403) Watercolor<br>
		&bull; Original Art: 10&rdquo;x13&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2403-amaryllis-bday-carl-thumbnail.jpg" class="img-fluid" alt="amaryllis has soft, blended hues of pink, purple, and orange">
		    <h6 class="gallery-caption text-center mt-2">Amaryllis for Carl</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2402-valentine-rose.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="VALENTINE ROSE (2402) Watercolor <br>
		&bull; Original Art: 5&rdquo;x3.5&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2402-valentine-rose-thumbnail.jpg" class="img-fluid" alt="Valentine rose">
		    <h6 class="gallery-caption text-center mt-2">Valentine Rose</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2401-10year-anniversary-rose.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="10 YEAR ANNIVERSARY ROSE (2401) Watercolor <br>
		&bull; Original Art: 5&rdquo;x7&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2401-10year-anniversary-rose-thumbnail.jpg" class="img-fluid" alt="10h Anniversary card for Peggy">
		    <h6 class="gallery-caption text-center mt-2">10 Year Anniversary Rose</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2220-8year-anniversary-rose.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="8 YEAR ANNIVERSARY ROSE (2220) Watercolor <br>
		&bull; Original Art: 5.5&rdquo;x3.75&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2220-8year-anniversary-rose-thumbnail.jpg" class="img-fluid" alt="Anniversary card for Peggy">
		    <h6 class="gallery-caption text-center mt-2">8 Year Anniversary Rose</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2216-daris-hydrangea.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DARI'S HYDRANGEA (2216) Pastel <br>
		&bull; Original Art: 5.5&rdquo;x8&rdquo;; with Mat & Frame: 8”x10”, SOLD.">
		    <img src="../gallery/images/portart/portil2216-daris-hydrangea-thumbnail.jpg" class="img-fluid" alt="My painting friend, Dari, invited me to paint in her garden.">
		    <h6 class="gallery-caption text-center mt-2">Dari's Hydrangea</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item animals watercolor">
  	    <a href="../gallery/images/portart/portil2213-woodthrush-sings-hb.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WOODTHRUSH SINGS HAPPY BIRTHDAY (2213) Watercolor<br>
		&bull; Original Art: 5&rdquo;x7&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2213-woodthrush-sings-hb-thumbnail.jpg" class="img-fluid" alt="Wood Thrush is one of Peggy's favorite birds.">
		    <h6 class="gallery-caption text-center mt-2">Woodthrush Sings Happy Birthday</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2212-infinity-rose.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY YEAR ROSES (2212) Watercolor <br>
		&bull; Original Art: 5&rdquo;x7&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2212-infinity-rose-thumbnail.jpg" class="img-fluid" alt="An 8th anniversary card for Peggy!">
		    <h6 class="gallery-caption text-center mt-2">Infinity Year Roses</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2207-lilac-for-carl.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LILAC FOR CARL (2207) Watercolor<br>
		&bull; Original Art: 6.5&rdquo;x9.75&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2207-lilac-for-carl-thumbnail.jpg" class="img-fluid" alt="Lilacs were my mother's favorite flower.">
		    <h6 class="gallery-caption text-center mt-2">Lilac for Carl</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2202-tulips.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="TULIP VALENTINES (2202) Watercolor <br>
		&bull; Original Art: 5.5&rdquo;x5&rdquo;; with Mat & Frame: 6.5”x6.25”, nfs.">
		    <img src="../gallery/images/portart/portil2202-tulips-thumbnail.jpg" class="img-fluid" alt="Painted for my valentine, Peggy.">
		    <h6 class="gallery-caption text-center mt-2">Tulip Valentines</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2123-asiatic-lilies.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ASIATIC LILIES (2123) Watercolor <br>
		&bull; Original Art: 4.25&rdquo;x5&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2123-asiatic-lilies-thumbnail.jpg" class="img-fluid" alt="Asiatic Lilies">
		    <h6 class="gallery-caption text-center mt-2">Asiatic Lilies</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2122-7year-anniversary-rose.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="7 YEAR ANNIVERSARY ROSE (2122) Watercolor <br>
		&bull; Original Art: 4.25&rdquo;x5.5&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2122-7year-anniversary-rose-thumbnail.jpg" class="img-fluid" alt="anniversary card for Peggy">
		    <h6 class="gallery-caption text-center mt-2">7 Year Anniversary Rose</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2121-valentine-memories.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="VALENTINE MEMORIES (2121) Watercolor <br>
		&bull; Original Art: 4.25&rdquo;x5.5&rdquo;, nfs">
		    <img src="../gallery/images/portart/portil2121-valentine-memories-thumbnail.jpg" class="img-fluid" alt="valentine memories">
		    <h6 class="gallery-caption text-center mt-2">Valentine Memories</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowerplants pastel">
  	    <a href="../gallery/images/portart/portil2112-red-roses-atpond2.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="RED ROSES AT THE POND 2 (2112) Pastel <br>
		&bull; Original Art: 6&rdquo;x4.75&rdquo;; with Mat &amp; Frame: 8&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil2112-red-roses-atpond2-thumbnail.jpg" class="img-fluid" alt="companion piece to Red Roses at the Pond 1">
		    <h6 class="gallery-caption text-center mt-2">Red Roses at the Pond 2</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item animals watercolor">
  	    <a href="../gallery/images/portart/portil2110-magnolia-warbler.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MAGNOLIA WARBLER (2110) Watercolor <br>
		&bull; Original Art: 4.5&rdquo;x4.75&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2110-magnolia-warbler-thumbnail.jpg" class="img-fluid" alt="One of my favorite birds!">
		    <h6 class="gallery-caption text-center mt-2">Magnolia Warbler</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes watercolor">
  	    <a href="../gallery/images/portart/portil2108-hometuckedintohill.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HOME TUCKED INTO HILL (2108) Watercolor <br>
		&bull; Original Art: 9&rdquo;x9.5&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2108-hometuckedintohill-thumbnail.jpg" class="img-fluid" alt="humble home tucked into the hills">
		    <h6 class="gallery-caption text-center mt-2">Home Tucked Into a Hill</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2102-magnolia.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MAGNOLIA (2102) Watercolor <br>
		&bull; Original Art: 5&rdquo;x7&rdquo;; with Mat &amp; Frame: 8&rdquo;x10&rdquo;, nfs">
		    <img src="../gallery/images/portart/portil2102-magnolia-thumbnail.jpg" class="img-fluid" alt="this rose was a stunner!">
		    <h6 class="gallery-caption text-center mt-2">Magnolia</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil2026-hibiscus.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HIBISCUS (2026) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 8&rdquo;x5.25&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2026-hibiscus-thumbnail.jpg" class="img-fluid" alt="an ethereal view of a floating hibiscus">
		    <h6 class="gallery-caption text-center mt-2">Hibiscus</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes watercolor">
  	    <a href="../gallery/images/portart/portil2022-three-birches-nc.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="THREE BIRCHES (2022) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 3.5&rdquo;x5.25&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2022-three-birches-nc-thumbnail.jpg" class="img-fluid" alt="3 birch trees">
		    <h6 class="gallery-caption text-center mt-2">Three Birches</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2017-lily-for-sue-nc.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LILY FOR SUE (2017) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 6.5&rdquo;x4.5&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2017-lily-for-sue-nc-thumbnail.jpg" class="img-fluid" alt="lily for sue">
		    <h6 class="gallery-caption text-center mt-2">Lily for Sue</h6>
	      </a>
      </div>

<!-- end of row -->

     <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2013-hibiscus-for-peggy-nc.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HIBISCUS FOR PEGGY (2013) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 5&rdquo;x7&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2013-hibiscus-for-peggy-nc-thumbnail.jpg" class="img-fluid" alt="hibiscus with complex, ruffled, varied petals">
		    <h6 class="gallery-caption text-center mt-2">Hibiscus for Peggy</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2012-iris-for-peggy-nc.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="IRIS FOR PEGGY (2012) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 5&rdquo;x7&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2012-iris-for-peggy-nc-thumbnail.jpg" class="img-fluid" alt="Iris are always a welcome site in our garden in the spring">
		    <h6 class="gallery-caption text-center mt-2">Iris for Peggy</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2010-salmon-ruffled-hibiscus1.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SALMON RUFFLED HIBISCUS (2010) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 5&rdquo;x4.5&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2010-salmon-ruffled-hibiscus1-thumbnail.jpg" class="img-fluid" alt="very complex hibiscus, with its ruffled petals of varied widths">
		    <h6 class="gallery-caption text-center mt-2">Salmon Ruffled Hibiscus</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2009-Vanda-closeup.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="VANDA CLOSEUP (2009) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 8&rdquo;x4.75&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2009-Vanda-closeup-thumbnail.jpg" class="img-fluid" alt="Simple, round petals, with fun details in the lip.">
		    <h6 class="gallery-caption text-center mt-2">Vanda Closeup</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2008-cattleya-orchids-1.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CATTLEYA ORCHIDS (2008) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 8&rdquo;x7.5&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2008-cattleya-orchids-1-thumbnail.jpg" class="img-fluid" alt="Cattleya orchids have ruffled petals and lots of folds and ridges.">
		    <h6 class="gallery-caption text-center mt-2">Cattleya Orchids</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2007-orange-orchids.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ORANGE ORCHIDS (2007) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 8.25&rdquo;x5.25&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2007-orange-orchids-thumbnail.jpg" class="img-fluid" alt="set of 3 orchids">
		    <h6 class="gallery-caption text-center mt-2">Orange Orchids</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2006-cannalily.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CANNALILY (2006) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 5&rdquo;x6&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2006-cannalily-thumbnail.jpg" class="img-fluid" alt="Stunning Cannalily with bright orange petals growing in the lily pond.">
		    <h6 class="gallery-caption text-center mt-2">Cannalily</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2005-tall-iris-at-the-pond.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="TALL IRIS AT THE POND (2005) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 7&rdquo;x11.25&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2005-tall-iris-at-the-pond-thumbnail.jpg" class="img-fluid" alt="A lovely Iris on the edge of a lily pond.">
		    <h6 class="gallery-caption text-center mt-2">Tall Iris at the Pond</h6>
	      </a>
      </div>

<!-- end of row -->

     <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2004-shelter.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SHELTER (2004) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 8.25&rdquo;x4.75&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2004-shelter-thumbnail.jpg" class="img-fluid" alt="imagined that I was a gecko in a lily pond">
		    <h6 class="gallery-caption text-center mt-2">Shelter</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2003-orchid-saturation.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ORCHID SATURATION (2003) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 8.25&rdquo;x7.75&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2003-orchid-saturation-thumbnail.jpg" class="img-fluid" alt="learning how to get deeply saturated colors">
		    <h6 class="gallery-caption text-center mt-2">Orchid Saturation</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2002-orchid-valentine.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ORCHID VALENTINE (2002) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 11&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2002-orchid-valentine-thumbnail.jpg" class="img-fluid" alt="final painting for my Nature Journaling class at Naples Botanical Garden">
		    <h6 class="gallery-caption text-center mt-2">Orchid Valentine</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants watercolor">
  	    <a href="../gallery/images/portart/portil2001-orchids-for-peggy.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ORCHIDS FOR PEGGY (2001) Watercolor <br>
		Naples, FL<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil2001-orchids-for-peggy-thumbnail.jpg" class="img-fluid" alt="birthday card orchids for Peggy">
		    <h6 class="gallery-caption text-center mt-2">Orchids for Peggy</h6>
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

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants landscapes pastel">
  	    <a href="../gallery/images/portart/portil1912-palm-and-orchids.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PALM AND ORCHID (1912) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat &amp; Frame: 11&rdquo;x14&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil1912-palm-and-orchids-thumbnail.jpg" class="img-fluid" alt="This palm tree is my companion.">
		    <h6 class="gallery-caption text-center mt-2">Orchids on a Palm Tree</h6>
	      </a>
      </div>


</div><!-- END OF row mb-4-->

<div class="row mb-4">

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
  	    <a href="../gallery/images/portart/portil1905-scarlet-passionflower.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SCARLET PASSIONFLOWER (1905) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 9&rdquo;x6&rdquo;; with Mat &amp; Frame: 12&rdquo;x9&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1905-scarlet-passionflower-thumbnail.jpg" class="img-fluid" alt="energetic-looking Passion Flower in a shady spot next to the waterfall">
		    <h6 class="gallery-caption text-center mt-2">Scarlet Passionflower</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1903-calusa-clouds.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CALUSA CLOUDS (1903) Pastel <br>
		Naples, FL<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil1903-calusa-clouds-thumbnail.jpg" class="img-fluid" alt="Wonderful morning at the botanical garden.">
		    <h6 class="gallery-caption text-center mt-2">Calusa Clouds</h6>
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

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1711-contemplative.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CONTEMPLATIVE (1711) Pastel <br>
		Walden Pond, Lincoln, MA<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1711-contemplative-thumbnail.jpg" class="img-fluid" alt="A contemplative spot at Walden Pond">
		    <h6 class="gallery-caption text-center mt-2">Contemplative</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1702-narcissus-hello.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="NARCISSUS HELLO (1702) Pastel <br>
		&bull; Original Art: 8&rdquo;x10&rdquo;; with Mat &amp; Frame: 11&rdquo;x14&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1702-narcissus-hello-thumbnail.jpg" class="img-fluid" alt="sweet, delicate narcissus">
		    <h6 class="gallery-caption text-center mt-2">Narcissus Hello</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pen">
  	    <a href="../gallery/images/portart/portil1616-lebata-rest-camp.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LEBATA REST CAMP (1616) Pen & Ink <br>
		&bull; Original Art: 9&rdquo;x5.75&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1616-lebata-rest-camp-thumbnail.jpg" class="img-fluid" alt="study: Lebata Rest Camp">
		    <h6 class="gallery-caption text-center mt-2">Lebata Rest Camp</h6>
	      </a>
      </div>

<!-- end of row -->

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
  	    <a href="../gallery/images/portart/portil1611-no-wonder-he-lived-here.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="NO WONDER HE LIVED HERE (1611) Pastel <br>
		Frederic Church's home in Olana, Hudson, NY<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil1611-no-wonder-he-lived-here-thumbnail.jpg" class="img-fluid" alt="Frederic Church studio view of Hudson River Valley">
		    <h6 class="gallery-caption text-center mt-2">No Wonder He Lived Here</h6>
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
  	    <a href="../gallery/images/portart/portil1604-fireworks.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FIREWORKS (1604) Pastel <br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1604-fireworks-thumbnail.jpg" class="img-fluid" alt="Fireworks">
		    <h6 class="gallery-caption text-center mt-2">Fireworks</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1518-blueridgemist1.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BLUE RIDGES MIST 1 (1518) Pastel <br>
		Asheville, North Carolina<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 11&rdquo;x14&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1518-blueridgemist1-thumbnail.jpg" class="img-fluid" alt="morning mist floating in the peaks in the Blue Ridge Mountains">
		    <h6 class="gallery-caption text-center mt-2">Blue Ridges Mist 1</h6>
	      </a>
      </div>

<!-- end of row -->

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

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1503-azaleas-in-pink.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AZALEAS IN PINK (1503) Pastel<br>
		&bull; Original Art: 5&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1503-azaleas-in-pink-thumbnail.jpg" class="img-fluid" alt="Peggy's garden: Azaleas in Pink">
		    <h6 class="gallery-caption text-center mt-2">Azaleas in Pink</h6>
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
		&bull; Original Art: 12&rdquo;x9&rdquo;, nfs.">
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

      <div class="col-sm-4 mb-4 gallery-item people mixed">
  	    <a href="../gallery/images/portart/portil1409-louise-boston1944.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LOUISE: BOSTON 1944 (1409) Mixed Media<br>
		Created in memory of my mother. One of my fave photos of my mother. I surrounded that picture with things that my mother loved: the beach, butterflies, flowers, and the color purple..<br>
		&bull; Original Art: 10&rdquo;x15.5&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil1409-louise-boston1944-thumbnail.jpg" class="img-fluid" alt="Created in memory of my mother. ">
		    <h6 class="gallery-caption text-center mt-2">Louise: Boston 1944</h6>
	      </a>
      </div>

<!-- end of row -->

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
		&bull; Original Art: 5&rdquo;x5&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1201-hydrangea-thumbnail.jpg" class="img-fluid" alt="Peggy's Garden: Hydrangea">
		    <h6 class="gallery-caption text-center mt-2">Hydrangea</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1119-DelicateArch.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DELICATE ARCH (1119) Pastel &amp; gouache<br>
		A hike in Arches National Park, Utah.<br>
		&bull; Original Art: 15&rdquo;x6&rdquo;; with Mat &amp; Frame: 18&rdquo;x9&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil1119-DelicateArch-thumbnail.jpg" class="img-fluid" alt="A hike in Arches National Park, Utah">
		    <h6 class="gallery-caption text-center mt-2">Delicate Arch</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1118-Garden-in-the-Woods.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GARDEN IN THE WOOODS (1118) Pastel<br>
		Framingham, MA.<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1118-Garden-in-the-Woods-thumbnail.jpg" class="img-fluid" alt="Garden in the Woods">
		    <h6 class="gallery-caption text-center mt-2">Garden in the Woods</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1117-Cosmos.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="COSMOS (1117) Pastel<br>
		&bull; Original Art: 8.5&rdquo;x6.5&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1117-Cosmos-thumbnail.jpg" class="img-fluid" alt="Peggy's Garden: Cosmos">
		    <h6 class="gallery-caption text-center mt-2">Cosmos</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1116-BostonPublicGarden.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BOSTON PUBLIC GARDEN (1116) Pastel &amp; watercolor<br>
		&bull; Original Art: 12&rdquo;x6.25&rdquo;; with Mat: 16&rdquo;x10&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1116-BostonPublicGarden-thumbnail.jpg" class="img-fluid" alt="Boston Public Garden">
		    <h6 class="gallery-caption text-center mt-2">Boston Public Garden</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1114-Eggplants.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="EGGPLANTS: HUTCHINS FARM (1114) Pastel<br>
		Belmont Farmer's Market, MA.<br>
		&bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1114-Eggplants-thumbnail.jpg" class="img-fluid" alt="Hutchins Farm: Eggplants">
		    <h6 class="gallery-caption text-center mt-2">Eggplants: Hutchins Farm</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1113-Stargazers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="STARGAZERS (1113) Pastel<br>
		&bull; Original Art: 8&rdquo;x10&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1113-Stargazers-thumbnail.jpg" class="img-fluid" alt="Star-gazers">
		    <h6 class="gallery-caption text-center mt-2">Star-gazers</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pencil">
  	    <a href="../gallery/images/portart/portil1112-QuietFallDay.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUIET FALL DAY (1112) Colored Pencil<br>
		&bull; Original Art: 5.5&rdquo;x3.5&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1112-QuietFallDay-thumbnail.jpg" class="img-fluid" alt="Card: Quiet Fall Day">
		    <h6 class="gallery-caption text-center mt-2">Quiet Fall Day</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1111-PtownSettingSun.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PROVINCETOWN SUN SETTING (1111) Pastel<br>
		&bull; Original Art:7&rdquo;x5&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil1111-PtownSettingSun-thumbnail.jpg" class="img-fluid" alt="Card: P-Town Sun Setting">
		    <h6 class="gallery-caption text-center mt-2">P-Town Sun Setting</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1110-PtownDunes.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DUNES (1110) Pastel<br>
		Provincetown, MA.<br>
		&bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1110-PtownDunes-thumbnail.jpg" class="img-fluid" alt="PTown Dunes">
		    <h6 class="gallery-caption text-center mt-2">Dunes</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1109-MtAuburn.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MT. AUBURN (Bike 'n Paint) (1109) Pastel<br>
		Mt. Auburn Cemetery, Cambridge, MA.<br>
		&bull; Original Art: 9&rdquo;x4.5&rdquo;; with Mat: 12&rdquo;x9&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1109-MtAuburn-thumbnail.jpg" class="img-fluid" alt="MAC: Sweet Auburn">
		    <h6 class="gallery-caption text-center mt-2">Sweet Auburn</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1107-Stella-de-Oro.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="STELLA DE ORO (1107) Pastel<br>
		Belmont, MA.<br>
		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1107-Stella-de-Oro-thumbnail.jpg" class="img-fluid" alt="Stella de Oro flower">
		    <h6 class="gallery-caption text-center mt-2">Stella de Oro</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1105-FreshPond.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FRESH POND (Bike 'n Paint) (1105) Pastel<br>
		Cambridge, MA.<br>
		&bull; Original Art: 10&rdquo;x7&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1105-FreshPond-thumbnail.jpg" class="img-fluid" alt="Bike 'n Paint: Fresh Pond">
		    <h6 class="gallery-caption text-center mt-2">Fresh Pond</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1104-CharlesRiver.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CHARLES RIVER (Bike 'n Paint) (1104) Pastel <br>
		Watertown, MA.<br>
		&bull; Original Art: 9&rdquo;x6&rdquo;; with Mat: 12&rdquo;x9&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1104-CharlesRiver-thumbnail.jpg" class="img-fluid" alt="Bike 'n Paint: Charles River">
		    <h6 class="gallery-caption text-center mt-2">Charles River</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes mixed">
  	    <a href="../gallery/images/portart/portil1103-PolihaleBeach.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="POLIHALE BEACH, KAUAI (1103) Mixed Media<br>
		&bull; Original Art:11&rdquo;x6-3/4&rdquo;; with Mat: 14&rdquo;x11&rdquo;,  SOLD.">
		    <img src="../gallery/images/portart/portil1103-PolihaleBeach-thumbnail.jpg" class="img-fluid" alt="Polihale Beach in Kauai">
		    <h6 class="gallery-caption text-center mt-2">Polihale Beach, Kauai</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil1102-DogSmiling.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DOG SMILING (1102) Pastel<br>
		&bull; Original Art: 6&rdquo;x9&rdquo;; with Mat: 9&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1102-DogSmiling-thumbnail.jpg" class="img-fluid" alt="Smiling Dog">
		    <h6 class="gallery-caption text-center mt-2">Dog Smiling</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1101-Columbine.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="COLUMBINE (1101) Pastel<br>
		&bull; Original Art: 7&rdquo;x5&rdquo;; with Mat &amp; Frame: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1101-Columbine-thumbnail.jpg" class="img-fluid" alt="Columbine in Peggy's garden">
		    <h6 class="gallery-caption text-center mt-2">Columbine</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1015-UndermountainAutumn.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="UNDERMOUNTAIN AUTUMN (1015) Pastel<br>
		Lenox, MA.<br>
		&bull; Original Art: 16&rdquo;x12&rdquo;; with Mat &amp; Frame: 20&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1015-UndermountainAutumn-thumbnail.jpg" class="img-fluid" alt="Autumn at Undermountain Farm">
		    <h6 class="gallery-caption text-center mt-2">Undermountain Autumn</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1014-OmegaMeditation.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OMEGA MEDITATION (1014) Pastel<br>
		The Sanctuary at Omega Institute, Rhinebeck, NY.<br>
		&bull; Original Art: 10&rdquo;x6&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1014-OmegaMeditation-thumbnail.jpg" class="img-fluid" alt="The Sanctuary at Omega">
		    <h6 class="gallery-caption text-center mt-2">Omega Meditation</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1013-MarysFarm.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MARY'S FARM (1013) Pastel<br>
		Rhinebeck, NY.<br>
		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1013-MarysFarm-thumbnail.jpg" class="img-fluid" alt="Mary's Farm near Omega">
		    <h6 class="gallery-caption text-center mt-2">Mary's Farm</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1011-BlanketFlowersandCosmos.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BLANKET FLOWERS AND COSMOS (1011) Pastel<br>
		    &bull; Original Art: 8&rdquo;x10&rdquo;; with Mat: 11&rdquo;x14&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1011-BlanketFlowersandCosmos-thumbnail.jpg" class="img-fluid" alt="A mix of Blanket Flowers and Cosmos">
		    <h6 class="gallery-caption text-center mt-2">Blanket Flowers and Cosmos</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1010-HotHotPeppers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HOT, HOT PEPPERS (1010) Pastel<br>
		    Belmont Farmer's Market, Belmont, MA.<br>
		    &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1010-HotHotPeppers-thumbnail.jpg" class="img-fluid" alt="Hot peppers">
		    <h6 class="gallery-caption text-center mt-2">Hot, Hot Peppers</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1009-PeacefulBeginnings.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PEACEFUL BEGINNINGS (1009) Pastel<br>
		    Long Pond Lake, Omega Institute, Rhinebeck, NY.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1009-PeacefulBeginnings-thumbnail.jpg" class="img-fluid" alt="Early morning peace">
		    <h6 class="gallery-caption text-center mt-2">Peaceful Beginnings</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1008-PtownLitehouse.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PROVINCETOWN LIGHTHOUSE (1008) Pastel<br>
		    Provincetown, MA.<br>
		    &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1008-PtownLitehouse-thumbnail.jpg" class="img-fluid" alt="Lighthouse at tip of Provincetown">
		    <h6 class="gallery-caption text-center mt-2">Provincetown Lighthouse</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1007-RestfulRidetoPTown.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="RESTFUL RIDE TO PROVINCETOWN (1007) Pastel<br>
		    Cape Cod, MA.<br>
		    &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1007-RestfulRidetoPTown-thumbnail.jpg" class="img-fluid" alt="view of ocean on the way to PTown">
		    <h6 class="gallery-caption text-center mt-2">Restful Ride to Provincetown</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1006-StonyBrookAudubon.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="STONYBROOK AUDUBON (1006) Pastel<br>
		    Norfolk, MA.<br>
		    &bull; Original Art: 10&rdquo;x31/2&rdquo;; with Mat: 14&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1006-StonyBrookAudubon-thumbnail.jpg" class="img-fluid" alt="Audubon Sanctuary at Stonybrook">
		    <h6 class="gallery-caption text-center mt-2">Stonybrook Audubon</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil1005-CosmicConeflowers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="COSMIC CONEFLOWERS (1005) Pastel<br>
		    &bull; Original Art: 8&rdquo;x10&rdquo;; with Mat &amp; Frame: 11&rdquo;x14&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1005-CosmicConeflowers-thumbnail.jpg" class="img-fluid" alt="Large coneflowers">
		    <h6 class="gallery-caption text-center mt-2">Cosmic Coneflowers</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1004-BetweenRainstorms.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BETWEEN RAINSTORMS (1004) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1004-BetweenRainstorms-thumbnail.jpg" class="img-fluid" alt="Paint outside between rainstorms">
		    <h6 class="gallery-caption text-center mt-2">Between Rainstorms</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1003-quiet-on-the-charles.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUIET ON THE CHARLES (1003) Pastel<br>
		    Watertown, MA.<br>
		    &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1003-quiet-on-the-charles-thumbnail.jpg" class="img-fluid" alt="Enjoying a quiet day on the Charles">
		    <h6 class="gallery-caption text-center mt-2">Quiet on the Charles</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1002-MemoriesAfterRain.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MEMORIES OF AFTER THE RAIN (1002) Pastel<br>
		    Kripalu Center, Lenox, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1002-MemoriesAfterRain-thumbnail.jpg" class="img-fluid" alt="Remembering an earlier painting outing">
		    <h6 class="gallery-caption text-center mt-2">Memories of After the Rain</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil1001-HutchinsFarminFall.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HUTCHINS FARM IN FALL (1001) Pastel &amp; Watercolor<br>
		    Concord, MA. &bull; Original Art: 12&rdquo;x6.25&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil1001-HutchinsFarminFall-thumbnail.jpg" class="img-fluid" alt="A fall visit to Hutchins Farm">
		    <h6 class="gallery-caption text-center mt-2">Hutchins Farm in Fall</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0920-crispkripalumorning-c2010.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CRISP KRIPALU MORNING (0920) Pastel<br>
		    Kripalu Center, Lenox, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0920-crispkripalumorning-c2010-thumbnail.jpg" class="img-fluid" alt="Crisp Morning at Kripalu">
		    <h6 class="gallery-caption text-center mt-2">Crisp Kripalu Morning</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0919-thoreauscove.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="THOREAU'S COVE (0919) Pastel<br>
		    Walden Pond, Concord, MA.<br>
		    &bull; Original Art: 11&rdquo;x6&rdquo;; with Mat: 14&rdquo;x9&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0919-thoreauscove-thumbnail.jpg" class="img-fluid" alt="Cove near Thoreau's home">
		    <h6 class="gallery-caption text-center mt-2">Thoreau's Cove</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0918-mexicansunflowers-cleome.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MEXICAN SUNFLOWERS AND CLEOME (0918) Pastel<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0918-mexicansunflowers-cleome-thumbnail.jpg" class="img-fluid" alt="Cleome and Mexican Sunflowers">
		    <h6 class="gallery-caption text-center mt-2">Mexican Sunflowers and Cleome</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0917-sergisflowers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SERGI'S SUNFLOWERS (0917) Pastel<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0917-sergisflowers-thumbnail.jpg" class="img-fluid" alt="Sunflowers at Sergi's farm">
		    <h6 class="gallery-caption text-center mt-2">Sergi's Sunflowers</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0916-thoreausview.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="THOREAU'S VIEW (0916) Pastel<br>
		    View of Walden Pond in front of Thoreau's home, Concord, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0916-thoreausview-thumbnail.jpg" class="img-fluid" alt="Thoreau's view of Walden Pond">
		    <h6 class="gallery-caption text-center mt-2">Thoreau's View</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0915-hydrangeasatwillowpond.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HYDRANGEA AT WILLOW POND (0915) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0915-hydrangeasatwillowpond-thumbnail.jpg" class="img-fluid" alt="White Hydrangea">
		    <h6 class="gallery-caption text-center mt-2">Hydrangea at Willow Pond</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0913-heirloomtomatoes.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HEIRLOOM TOMATOES (0913) Pastel<br>
		    Belmont Farmer's Market in MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0913-heirloomtomatoes-thumbnail.jpg" class="img-fluid" alt="Heirloom Tomatoes at farmer's market">
		    <h6 class="gallery-caption text-center mt-2">Heirloom Tomatoes</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0911-rainbowchard.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="RAINBOW CHARD (0911) Pastel<br>
		    Belmont Farmer's Market, Belmont, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0911-rainbowchard-thumbnail.jpg" class="img-fluid" alt="Rainbow Chard at farmer's market">
		    <h6 class="gallery-caption text-center mt-2">Ranbow Chard</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0910-orangelilies.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ORANGE LILIES (0910) Pastel<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0910-orangelilies-thumbnail.jpg" class="img-fluid" alt="Orange Lilies next door">
		    <h6 class="gallery-caption text-center mt-2">Orange Lilies</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0909-goodneighbors.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GOOD NEIGHBORS (0909) Pastel<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo,; SOLD.">
		    <img src="../gallery/images/portart/portil0909-goodneighbors-thumbnail.jpg" class="img-fluid" alt="thanks to our good neighbors">
		    <h6 class="gallery-caption text-center mt-2">Good Neighbors</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0908-echinacea.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ECHINACEA (0908) Pastel<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0908-echinacea-thumbnail.jpg" class="img-fluid" alt="Echinacea in our garden">
		    <h6 class="gallery-caption text-center mt-2">Echinacea</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0907-beebalmquad.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BEE BALM QUAD (0907) Pastel<br>
		    &bull; Original Art: 6&rdquo;x9&rdquo;; with Mat: 9&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0907-beebalmquad-thumbnail.jpg" class="img-fluid" alt="4 Bee Balm">
		    <h6 class="gallery-caption text-center mt-2">Bee Balm Quad</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0906-beebalmsparklers.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BEE BALM SPARKLERS (0906) Pastel<br>
		    &bull; Original Art: 6&rdquo;x9&rdquo;; with Mat: 9&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0906-beebalmsparklers-thumbnail.jpg" class="img-fluid" alt="Bee Balm resembling sparklers">
		    <h6 class="gallery-caption text-center mt-2">Bee Balm Sparklers</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0905-julypetunias.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="JULY PETUNIAS (0905) Pastel<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0905-julypetunias-thumbnail.jpg" class="img-fluid" alt="Peggy's July Petunias">
		    <h6 class="gallery-caption text-center mt-2">July Petunias</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0904-charlesriverspring.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CHARLES RIVER, SPRING (0904) Pastel<br>
		    &bull; Original Art: 12&rdquo;x3.25&rdquo;; with Mat &amp; Frame: 16&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0904-charlesriverspring-thumbnail.jpg" class="img-fluid" alt="view of Charles River in spring">
		    <h6 class="gallery-caption text-center mt-2">Charles River</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0823-shimmering.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SHIMMERING (0823) Pastel<br>
		    Bimini, Bahamas.<br>
        &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0823-shimmering-thumbnail.jpg" class="img-fluid" alt="Shimmering ocean">
		    <h6 class="gallery-caption text-center mt-2">Shimmering</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0820-pathtoautumntrees.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PATH TO AUTUMN TREES (0820) Pastel<br>
        &bull; Original Art: 10&rdquo;x3.5&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0820-pathtoautumntrees-thumbnail.jpg" class="img-fluid" alt="Path leading to trees in autumn">
		    <h6 class="gallery-caption text-center mt-2">Path to Autumn Trees</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscape pastel">
  	    <a href="../gallery/images/portart/portil0819-fallcomfort.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FALL COMFORT (0819) Pastel<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0819-fallcomfort-thumbnail.jpg" class="img-fluid" alt="Fall comfort colors">
		    <h6 class="gallery-caption text-center mt-2">Fall Comfort</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0817-loon.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LOON (0817) Pastel<br>
		    Squam Lake, New Hampshire.<br>
		    &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0817-loon-thumbnail.jpg" class="img-fluid" alt="Loon at Squam Lake">
		    <h6 class="gallery-caption text-center mt-2">Loon</h6>
	      </a>
      </div>

<!-- end of row -->

       <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0816-woodlandpond.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WOODLAND POND (0816) Pastel<br>
        &bull; Original Art: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0816-woodlandpond-thumbnail.jpg" class="img-fluid" alt="Pond in a woodsy area">
		    <h6 class="gallery-caption text-center mt-2">Woodland Pond</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil0814-tophatzinnias.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="TOP HAT ZINNIAS (0814) Colored Pencil<br>
        &bull; Original Art: 3.5&rdquo;x5.25&rdquo;; with Mat: 8&rdquo;x10&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0814-tophatzinnias-thumbnail.jpg" class="img-fluid" alt="Tophat zinnias">
		    <h6 class="gallery-caption text-center mt-2">Top Hat Zinnias</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0813-quintethotzinnias.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUINTET: HOT ZINNIAS (0813) Pastel<br>
        &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 12&rdquo;x10&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0813-quintethotzinnias-thumbnail.jpg" class="img-fluid" alt="Series of 5 paintings: hot zinnias">
		    <h6 class="gallery-caption text-center mt-2">Quintet: Hot Zinnias</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0812-quintetcosmos.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUINTET: COSMOS (0812) Pastel<br>
        &bull; Original Art: 8&rdquo;x5.5&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0812-quintetcosmos-thumbnail.jpg" class="img-fluid" alt="Series of 5 paintings: cosmos">
		    <h6 class="gallery-caption text-center mt-2">Quintet: Cosmos</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0811-quintetmarigolds.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUINTET: MARIGOLDS (0811) Pastel<br>
        &bull; Original Art: 5.5&rdquo;x8&rdquo;; with Mat: 10”x12”, SOLD.">
		    <img src="../gallery/images/portart/portil0811-quintetmarigolds-thumbnail.jpg" class="img-fluid" alt="Series of 5 paintings: marigolds">
		    <h6 class="gallery-caption text-center mt-2">Quintet: Marigolds</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0810-quintetpetunias.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUINTET: PETUNIAS (0810) Pastel<br>
		    &bull; Original Art: 5.5&rdquo;x8&rdquo, SOLD.">
		    <img src="../gallery/images/portart/portil0810-quintetpetunias-thumbnail.jpg" class="img-fluid" alt="Series of 5 paintings: petunias">
		    <h6 class="gallery-caption text-center mt-2">Quintet: Petunias</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0809-quintetzinnias.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="QUINTET: ZINNIAS (0809) Pastel<br>
        &bull; Original Art: 7&rdquo;x5&rdquo;; with Mat: 12&rdquo;x10&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0809-quintetzinnias-thumbnail.jpg" class="img-fluid" alt="Series of 5 paintings: zinnias">
		    <h6 class="gallery-caption text-center mt-2">Quintet: Zinnias</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil0808-rainydaybouquet.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="RAINY DAY BOUQUET (0808) Colored Pencil<br>
		    &bull; Original Art: 5&rdquo;x5&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0808-rainydaybouquet-thumbnail.jpg" class="img-fluid" alt="Bouquet art on a rainy day">
		    <h6 class="gallery-caption text-center mt-2">Rain Day Bouquet</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0807-reflections.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="REFLECTIONS (0807) Pastel<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0807-reflections-thumbnail.jpg" class="img-fluid" alt="Reflections at Willow Pond">
		    <h6 class="gallery-caption text-center mt-2">Reflections</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0806-waldenpond.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WALDEN POND (0806) Pastel<br>
		    Concord, MA.<br>
        &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0806-waldenpond-thumbnail.jpg" class="img-fluid" alt="Relaxing at Walden Pond">
		    <h6 class="gallery-caption text-center mt-2">Walden Pond</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0805-jardindejuillet.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="JARDIN DE JUILLET (0805) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0805-jardindejuillet-thumbnail.jpg" class="img-fluid" alt="A garden visit in hot July">
		    <h6 class="gallery-caption text-center mt-2">Jardin de Juillet</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0804-ptowndeparture.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PROVINCETOWN DEPARTURE (0804) Pastel<br>
		    &bull; Original Art: 10&rdquo;x3.75&rdquo;; with Mat &amp; Frame: 14&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0804-ptowndeparture-thumbnail.jpg" class="img-fluid" alt="Leaving Provincetown">
		    <h6 class="gallery-caption text-center mt-2">Provincetown Departure</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0803-ptownarrival.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PROVINCETOWN ARRIVAL (0803) Pastel<br>
		    &bull; Original Art: 10&rdquo;x3.75&rdquo;; with Mat &amp; Frame: 14&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0803-ptownarrival-thumbnail.jpg" class="img-fluid" alt="Arriving at Provincetown">
		    <h6 class="gallery-caption text-center mt-2">Provincetown Arrival</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0802-springvalentine-thumbnail.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SPRING VALENTINE (0802) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0802-springvalentine-thumbnail.jpg" class="img-fluid" alt="Bushes in shape of valentine">
		    <h6 class="gallery-caption text-center mt-2">Spring Valentine</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0801-azaleasonslope.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AZALEAS ON THE SLOPE (0801) Pastel<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0801-azaleasonslope-thumbnail.jpg" class="img-fluid" alt="Cluster of Azaleas on a hill">
		    <h6 class="gallery-caption text-center mt-2">Azaleas on the Slope</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil0722-altermyria.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ALTERMYRIA (0722) Colored Pencil<br>
        &bull; Original Art: 7&rdquo;x5&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0722-altermyria-thumbnail.jpg" class="img-fluid" alt="Altermyria bouquet">
		    <h6 class="gallery-caption text-center mt-2">Altermyria</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0721-islandtime.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ISLAND TIME (0721) Pastel<br>
		    Bimini, Bahamas.<br>
        &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0721-islandtime-thumbnail.jpg" class="img-fluid" alt="Island corner">
		    <h6 class="gallery-caption text-center mt-2">Island Time</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0719-lenoxfarmhouse-c2018.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="LENOX FARMHOUSE (0719) Pastel<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0719-lenoxfarmhouse-c2018-thumbnail.jpg" class="img-fluid" alt="Farmhouse with garden">
		    <h6 class="gallery-caption text-center mt-2">Lenox Farmhouse</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0716-return.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="RETURN (0716) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0716-return-thumbnail.jpg" class="img-fluid" alt="Fond Return to Lenox">
		    <h6 class="gallery-caption text-center mt-2">Return</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0715-audubonoverlook.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AUDUBON OVERLOOK (0715) Pastel<br>
        &bull; Original Art: 7&rdquo;x5&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0715-audubonoverlook-thumbnail.jpg" class="img-fluid" alt="Overlook at Drumlin Farm">
		    <h6 class="gallery-caption text-center mt-2">Audubon Overlook</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0714-dunesatdawn.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="DUNES AT DAWN (0714) Pastel<br>
		    Provincetown, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0714-dunesatdawn-thumbnail.jpg" class="img-fluid" alt="Provincetown Dunes at Dawn">
		    <h6 class="gallery-caption text-center mt-2">Dunes at Dawn</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0713-wellfleetwetlands.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WELLFLEET WETLANDS (0713) Pastel<br>
		    &bull; Original Art: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0713-wellfleetwetlands-thumbnail.jpg" class="img-fluid" alt="Wetlands in Wellfleet">
		    <h6 class="gallery-caption text-center mt-2">Wellfleet Wetlands</h6>
	      </a>
      </div>

<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0710-biminisunrise.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BIMINI SUNRISE (0710) Pastel<br>
		    &bull; Original Art: 10&rdquo;x3.5&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0710-biminisunrise-thumbnail.jpg" class="img-fluid" alt="Sunrise in Bimini">
		    <h6 class="gallery-caption text-center mt-2">Bimini Sunrise</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0708-mistedmtns.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="MISTED MOUNTAINS (0708) Pastel<br>
		    &bull; Original Art: 12.5&rdquo;x5&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0708-mistedmtns-thumbnail.jpg" class="img-fluid" alt="Misted Mountains at Kripalu">
		    <h6 class="gallery-caption text-center mt-2">Misted Mountains</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0707-azaleasinmay.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AZALEAS IN MAY (0707) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0707-azaleasinmay-thumbnail.jpg" class="img-fluid" alt="May Azaleas">
		    <h6 class="gallery-caption text-center mt-2">Azaleas in May</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0706-heartofspring.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HEART OF SPRING (0706) Pastel<br>
		    Mt. Auburn Cemetery, Cambridge, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0706-heartofspring-thumbnail.jpg" class="img-fluid" alt="Spring Hearts shapes in bushes">
		    <h6 class="gallery-caption text-center mt-2">Heart of Spring</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil0705-orchid.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ORCHID (0705) Colored Pencil<br>
		    &bull; Original Art: 4&rdquo;x5.5&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0705-orchid-thumbnail.jpg" class="img-fluid" alt="Orchid">
		    <h6 class="gallery-caption text-center mt-2">Orchid</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0622-evergreen.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="EVER GREEN (0622) Pastel &amp; Gouache <br>
		    Lenox, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0622-evergreen-thumbnail.jpg" class="img-fluid" alt="Evergreens at Kripalu">
		    <h6 class="gallery-caption text-center mt-2">Evergreen</h6>
	      </a>
      </div>

<!-- end of row -->
      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0620-flowersymphony-c2018.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FLOWER SYMPHONY (0620) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Licensed for Book Cover <br>
		    &bull; Original Art: 14&rdquo;x18&rdquo;; with Mat &amp; Frame: 18&rdquo;x22&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0620-flowersymphony-c2018-thumbnail.jpg" class="img-fluid" alt="Flower Symphony in Lenox">
		    <h6 class="gallery-caption text-center mt-2">Flower Symphony</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0619-fairfaxredwoods.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FAIRFAX REDWOODS (0619) Pastel<br>
		    &bull; Original Art: 7&rdquo;x5&rdquo; SOLD.">
		    <img src="../gallery/images/portart/portil0619-fairfaxredwoods-thumbnail.jpg" class="img-fluid" alt="Park in Fairfax, CA">
		    <h6 class="gallery-caption text-center mt-2">Fairfax Redwoods</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0618-onemesa.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ONE MESA (0618) Pastel<br>
		    Pt. Reyes, CA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0618-onemesa-thumbnail.jpg" class="img-fluid" alt="B&B at Pt. Reyes">
		    <h6 class="gallery-caption text-center mt-2">One Mesa</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0617-ptreyesbeach.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PT. REYES BEACH (0617) Pastel<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 11&rdquo;x14&rdquo; SOLD.">
		    <img src="../gallery/images/portart/portil0617-ptreyesbeach-thumbnail.jpg" class="img-fluid" alt="beach at Pt. Reyes">
		    <h6 class="gallery-caption text-center mt-2">Pt. Reyes Beach</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0616-oceandaybreak.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OCEAN DAYBREAK (0616) Pastel<br>
		    Provincetown, MA.<br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;, with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0616-oceandaybreak-thumbnail.jpg" class="img-fluid" alt="oceandaybreak at Ptown">
		    <h6 class="gallery-caption text-center mt-2">Ocean Daybreak</h6>
	      </a>
      </div>


<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0615-heronshome.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HERONS' HOME (0615) Pastel<br>
		    Wellfleet, MA.<br>
		    &bull; Original Art: 16&rdquo;x12&rdquo;; with Mat &amp; Frame: 20&rdquo;x16&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0615-heronshome-thumbnail.jpg" class="img-fluid" alt="Heron's Home in Wellfleet">
		    <h6 class="gallery-caption text-center mt-2">Heron's Home</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0614-iris4iris.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="IRIS FOR IRIS (0614) Pastel<br>
		    &bull; Original Art: 8&rdquo;x10&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0614-iris4iris-thumbnail.jpg" class="img-fluid" alt="Iris art for friend">
		    <h6 class="gallery-caption text-center mt-2">Iris for Iris</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0613-beautifultree.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BEAUTIFUL TREE (0613) Pastel<br>
		    Rhinebeck, NY.<br>
    		&bull; Original Art: 9&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0613-beautifultree-thumbnail.jpg" class="img-fluid" alt="beautiful tree at Omega">
		    <h6 class="gallery-caption text-center mt-2">Beautiful Tree</h6>
	      </a>
      </div>


<!-- end of row -->

       <div class="col-sm-4 mb-4 gallery-item flowersplants pencil">
  	    <a href="../gallery/images/portart/portil0611-iris.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="IRIS (0611) Colored Pencil<br>
    		&bull; Original Art: 3.5&rdquo;x5.5&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0611-iris-thumbnail.jpg" class="img-fluid" alt="iris artwork">
		    <h6 class="gallery-caption text-center mt-2">Iris</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0610-omegaafternoon.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OMEGA AFTERNOON (0610) Pastel<br>
		    Rhinebeck, NY.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0610-omegaafternoon-thumbnail.jpg" class="img-fluid" alt="afternoon at Omega">
		    <h6 class="gallery-caption text-center mt-2">Omega Afternoon</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0609-omegamorning.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="OMEGA MORNING (0609) Pastel<br>
		    Rhinebeck, NY.<br>
    		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0609-omegamorning-thumbnail.jpg" class="img-fluid" alt="morning at Omega">
		    <h6 class="gallery-caption text-center mt-2">Omega Morning</h6>
	      </a>
      </div>


<!-- end of row -->
       
      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0608-beardediris.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BEARDED IRIS (0608) Pastel<br>
		    Cambridge, MA.<br>
    		&bull; Original Art: 5&rdquo;x7&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0608-beardediris-thumbnail.jpg" class="img-fluid" alt="beardediris">
		    <h6 class="gallery-caption text-center mt-2">Bearded Iris</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0607-celebration.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="CELEBRATION (0607) Pastel<br>
		    Lenox, MA.<br>
		    &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0607-celebration-thumbnail.jpg" class="img-fluid" alt="celebration artwork">
		    <h6 class="gallery-caption text-center mt-2">Celebration</h6>
	      </a>
      </div>

<!-- end of row -->
       

       <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0605-bflygarden.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="BUTTERFLY GARDEN (0605) Pastel<br>
		    Cambridge, MA.<br>
    		&bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0605-bflygarden-thumbnail.jpg" class="img-fluid" alt="butterflygarden">
		    <h6 class="gallery-caption text-center mt-2">Butterfly Garden</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0604-1stlight.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="FIRST LIGHT (0604) Pastel<br>
        Wellfleet, MA.<br>
        &bull; Original Art: 17.75&rdquo;x12.75&rdquo;; with Mat &amp; Frame: 20&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0604-1stlight-thumbnail.jpg" class="img-fluid" alt="FirstLight">
		    <h6 class="gallery-caption text-center mt-2">First Light</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pencil">
  	    <a href="../gallery/images/portart/portil0601-healinglight.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="HEALING LIGHT (0601) Colored Pencil<br>
        &bull; Original Art: 5&rdquo;x4.75&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0601-healinglight-thumbnail.jpg" class="img-fluid" alt="healinglight">
		    <h6 class="gallery-caption text-center mt-2">Healing Light</h6>
	      </a>
      </div>


<!-- end of row -->
      

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0522-kripaluautumn.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="KRIPALU AUTUMN (0522) Pastel<br>
        Lenox, MA.<br>
        &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0522-kripaluautumn-thumbnail.jpg" class="img-fluid" alt="Kripalu autumn colors">
		    <h6 class="gallery-caption text-center mt-2">Kripalu Autumn</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0521-solitude.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SOLITUDE (0521) Pastel<br>
        Lenox, MA.<br>
        &bull; Original Art: 16&rdquo;x12&rdquo;; with Mat &amp; Frame: 20&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0521-solitude-thumbnail.jpg" class="img-fluid" alt="Solitary tree">
		    <h6 class="gallery-caption text-center mt-2">Solitude</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0520-sanctuary.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SANCTUARY (0520) Pastel<br>
        Lenox, MA <br>
        &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0520-sanctuary-thumbnail.jpg" class="img-fluid" alt="purplestrife">
		    <h6 class="gallery-caption text-center mt-2">Sanctuary</h6>
	      </a>
      </div>


<!-- end of row -->


      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0517-spiritmtn.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SPIRIT MOUNTAIN (0517) Pastel<br>
        Lenox, MA.<br>
        &bull; Original Art: 10&rdquo;x10&rdquo;; with Mat: 12&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0517-spiritmtn-thumbnail.jpg" class="img-fluid" alt="spiritmtn">
		    <h6 class="gallery-caption text-center mt-2">Spirit Mountain</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0513-wellfleetwaves.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WELLFLEET WAVES (0513) Pastel<br>
        &bull; Original Art: 12.75&rdquo;x10&rdquo;; with Mat: 16&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0513-wellfleetwaves-thumbnail.jpg" class="img-fluid" alt="WellfleetWaves">
		    <h6 class="gallery-caption text-center mt-2">Wellfleet Waves</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0512-purplestrife.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PURPLE STRIFE (0512) Pastel<br>
        Wellesley, MA <br>
        &bull; Original Art: 10&rdquo;x8&rdquo;; with Mat &amp; Frame: 14&rdquo;x11&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0512-purplestrife-thumbnail.jpg" class="img-fluid" alt="purplestrife">
		    <h6 class="gallery-caption text-center mt-2">Purple Strife</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0511-yellowliles.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="YELLOW LILIES (0511) Pastel<br>
        Mt. Auburn Cemetery, Cambridge, MA.<br>
        &bull; Original Art: 18&rdquo;x12.5&rdquo;; with Mat: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0511-yellowliles-thumbnail.jpg" class="img-fluid" alt="yellowlilies">
		    <h6 class="gallery-caption text-center mt-2">Yellow Lilies</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0510-willowpondpath.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WILLOW POND PATH (0510) Pastel<br>
        Mt. Auburn Cemetery, Cambridge, MA.<br>
        &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0510-willowpondpath-thumbnail.jpg" class="img-fluid" alt="willowpondpath">
		    <h6 class="gallery-caption text-center mt-2">Willow Pond Path</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0509-path1atmac.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="PATH 1 AT MOUNT AUBURN (0509) Pastel<br>
        &bull; Original Art: 18&rdquo;x12.5&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0509-path1atmac-thumbnail.jpg" class="img-fluid" alt="path at mac">
		    <h6 class="gallery-caption text-center mt-2">Path 1 at Mount Auburn</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item flowersplants pastel">
  	    <a href="../gallery/images/portart/portil0508-sundance.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="SUN DANCE (0508) Pastel<br>
        Mt. Auburn Cemetery, Cambridge, MA.<br>
        &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0508-sundance-thumbnail.jpg" class="img-fluid" alt="Sundance">
		    <h6 class="gallery-caption text-center mt-2">Sun Dance</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0506-epiphany.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="KRIPALU EPIPHANY (0506) Pastel<br>
        Lenox, MA.<br>
        &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0506-epiphany-thumbnail.jpg" class="img-fluid" alt="Epiphany artwork">
		    <h6 class="gallery-caption text-center mt-2">Kripalu Epiphany</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0505-aftertherain.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="AFTER THE RAIN (0505) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 19.5&rdquo;x12.5&rdquo;; with Mat  &amp; Frame: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0505-aftertherain-thumbnail.jpg" class="img-fluid" alt="After the Rain at Kripalu">
		    <h6 class="gallery-caption text-center mt-2">After the Rain</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0502-antelopecanyon4.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTELOPE CANYON 4 &#8212; FOR GLORIA (0502) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0502-antelopecanyon4-thumbnail.jpg" class="img-fluid" alt="Antelope Canyon4 art series">
		    <h6 class="gallery-caption text-center mt-2">Antelope Canyon #4 For Gloria</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0501-antelopecanyon3.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTELOPE CANYON 3 (0501) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat: 12&rdquo;x16&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0501-antelopecanyon3-thumbnail.jpg" class="img-fluid" alt="Antelope Canyon3 - art series">
		    <h6 class="gallery-caption text-center mt-2">Antelope Canyon #3</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item landscapes pastel">
  	    <a href="../gallery/images/portart/portil0406-antelopecanyon.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="ANTELOPE CANYON 1 (0406) Pastel<br>
		    Navajo Nation, Arizona.<br>
		    &bull; Original Art: 9&rdquo;x12&rdquo;; with Mat &amp; Frame: 12&rdquo;x16&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0406-antelopecanyon-thumbnail.jpg" class="img-fluid" alt="Antelope Canyon1 - art series">
		    <h6 class="gallery-caption text-center mt-2">Antelope Canyon #1</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pencil">
  	    <a href="../gallery/images/portart/portil0404-greetings-colpencil.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="GREETINGS (0404) Colored Pencil<br>
    		&bull; Original Art: 5&rdquo;x8&rdquo;; with Mat &amp; Frame: 8&rdquo;x10&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0404-greetings-colpencil-thumbnail.jpg" class="img-fluid" alt="3 Dolphins greeting">
		    <h6 class="gallery-caption text-center mt-2">Greetings</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item animals flowersplants pencil">
  	    <a href="../gallery/images/portart/portil0401-weareallconnected.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="WE ARE ALL CONNECTED (0401) Colored Pencil <br>
    		&bull; Original Art: 9&rdquo;x9&rdquo;; with Mat &amp; Frame: 12&rdquo;x12&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0401-weareallconnected-thumbnail.jpg" class="img-fluid" alt="Connected project">
		    <h6 class="gallery-caption text-center mt-2">We Are All Connected</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0320-infinity5.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 5 / FOREVER PEACE (0320) Pastel <br>
    		&bull; Original Art: 12&rdquo;x9&rdquo;; with Mat: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0320-infinity5-thumbnail.jpg" class="img-fluid" alt="Infinity2 art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #5</h6>
	      </a>
      </div>

<!-- end of row -->

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0318-infinity3.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY 3 (0318) Pastel<br>
    		&bull; Original Art: 18&rdquo;x12&rdquo;; with Mat &amp; Frame: 24&rdquo;x18&rdquo;, SOLD.">
		    <img src="../gallery/images/portart/portil0318-infinity3-thumbnail.jpg" class="img-fluid" alt="Infinity art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity #3</h6>
	      </a>
      </div>

      <div class="col-sm-4 mb-4 gallery-item animals pastel">
  	    <a href="../gallery/images/portart/portil0316-infinity.jpg" class="" data-toggle="lightbox" data-gallery="art"  data-size="xl" data-caption="INFINITY (0316) Pastel<br>
		    &bull; Licensed for book cover <br>
		    &bull; Original Art: 12&rdquo;x9&rdquo;; with Mat &amp; Frame: 16&rdquo;x12&rdquo;, nfs.">
		    <img src="../gallery/images/portart/portil0316-infinity-thumbnail.jpg" class="img-fluid" alt="Infinity art series">
		    <h6 class="gallery-caption text-center mt-2">Infinity</h6>
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
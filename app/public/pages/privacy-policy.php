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
     

    <title>ASK Design | Privacy Policy</title>
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

        <li class="nav-item dropdown"><a class="nav-link active dropdown-toggle" href="contact.php" data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="contact.php">Contact Me</a></li>
                  <li><a class="dropdown-item" href="cookie-policy.php">Cookie Policy</a></li>
                  <li><a class="dropdown-item active" aria-current="page" href="privacy-policy.php">Privacy Policy</a></li>
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
      <h2 class="page-title">Privacy Policy</h2>

    </section><!-- end of page title lead area -->

    <section class="content"><!-- columns -->
			<div class="row">
				<div class="col-lg-12">

<!-- Start CookieYes privacy policy -->
<style>
  .policy-content h1 {
    font-size: 48px;
    font-weight: 700;
    line-height: 56px
  }

  .policy-content h2 {
    font-size: 36px;
    font-weight: 700;
    line-height: 44px
  }

  .policy-content h3 {
    font-size: 28px;
    font-weight: 700;
    line-height: 36px
  }

  .policy-content h4 {
    font-size: 24px;
    font-weight: 700;
    line-height: 32px
  }

  .policy-content p {
    display: block;
    margin-block-start: 1em !important;
    margin-block-end: 1em !important;
    margin-inline-start: 0 !important;
    margin-inline-end: 0 !important
  }
</style>

<div class="policy-content">
  <div class="ppg-document-header">
    <p class="ppg-effective-date">
      Effective Date: July 08, 2026
    </p>
  </div>

  <div class="ppg-section ppg-intro">
    <p>This privacy policy for Anne S. Katzeff (<strong>"We"</strong>, <strong>"Us"</strong> or <strong>"Our"</strong>) tells you how we may collect, use and share your information when you visit our website <a href="https://www.askdesign.biz" target="_blank" rel="noopener noreferrer">https://www.askdesign.biz</a>.</p>
    <p>We appreciate your decision to use our website <a href="https://www.askdesign.biz" target="_blank" rel="noopener noreferrer">https://www.askdesign.biz</a> and to trust us with your valuable personal information. In this document, we seek to explain in the clearest terms possible our privacy practices. We strongly encourage you to read this document (and any other related documents) carefully before using the website. If there are any terms or conditions in this document that you do not agree with, please do not use the website, or in case you are already using it, please discontinue the use immediately. By using the website, you are accepting and consenting to the practices described in this Privacy Policy.</p>
  </div>

  <div class="ppg-section">
    <h2>What information do we collect about you?</h2>
    <p>When we collect information, we do so to ensure that you get to experience our service seamlessly. For that, we collect the following information. Some are your personal information and some are your sensitive personal information.</p>

    <p>The personal information that we collect about you are the following:</p>
    <div class="ppg-list">
      <ul>

        <li>Name</li>

        <li>Email address</li>

        <li>Location data</li>

      </ul>
    </div>

  </div>

  <div class="ppg-section">
    <h2>How do we collect such information?</h2>
    <p>We may use any of the following three ways to get information about you.</p>
    <ol type="a">
      <li>The information that you give us</li>
      <li>The information that we automatically collect from you</li>
      <li>Information that we collect from third parties</li>
    </ol>
    <p>Before going into the reasons why we collect the information that we do, we want you to understand what the above three terms mean.</p>

    <p><em>a. The information that you give us</em></p>
    <p>When you sign up for an account to use our service/product we will ask you certain questions like your name or email address. These are the information that you give us. This may not be limited to what we have mentioned and can change according to the nature of the service/product that we provide.</p>

    <p><em>b. The information that we automatically collect from you</em></p>
    <p>When you access our service from a device, we may automatically collect information from your device, such as through the use of cookies. You will know more about automatic collection of personal information in the next section.</p>

    <p><em>c. Information that we collect from third parties</em></p>
    <p>These third parties can be data aggregators, online directories, data marketplaces or exchanges, etc from where we may collect information about you.</p>
  </div>

  <div class="ppg-section">
    <h2>Cookies and similar technologies</h2>
    <p>Cookies are small packets of information that are placed on your device, so that we can retrieve the information about you, such as your login information, your choices on our websites and other information.</p>

    <p>For more information about cookies and similar technologies, please visit our <a class="custom-input-from-user" href="cookie-policy.php" target="_blank">cookie policy</a>.</p>

  </div>

  <div class="ppg-section">
    <h2>Do not track requests</h2>
    <p>We respond to &#34;do not track&#34; requests in the following manner:</p>
    <p><span class="custom-input-from-user">Comply with requests.</span></p>
  </div>

  <div class="ppg-section">
    <h2>Why do we collect information about you?</h2>
    <p>We collect information about you for a variety of reasons. It helps us, among other things, to serve you better. The following are the ways in which we use the information that we collect about you.</p>
    <div class="ppg-list">
      <ul>

        <li>To provide and maintain service</li>

        <li>To send marketing and promotional communications</li>

        <li>targeted advertising</li>

        <li>To evaluate and improve our products/services</li>

        <li>To contact the user</li>

      </ul>
    </div>
  </div>

  <div class="ppg-section">
    <h2>How long do we retain your information?</h2>

    <p>We will only keep your personal information for as long as it is necessary, unless a longer retention period is required or permitted by law (such as tax, accounting, or other legal requirements). No purpose in this notice requires us to retain your personal information for longer than the period during which users have an account with us.</p>

    <p>When we have no ongoing legitimate business need to process your personal information, we will either delete or anonymise such information, or, if this is not possible (for example, because your personal information has been stored in backup archives), then we will securely store your personal information and isolate it from any further processing until deletion is possible.</p>
  </div>

  <div class="ppg-section">
    <h2>Do we share your information?</h2>
    <p>We may share your information with third parties in the following ways:</p>
    <div class="ppg-list">
      <ol type="a">
        <li><strong>Sharing with your consent:</strong> When you give consent, we may share your information with third parties for the purposes that are mentioned in the consent notification.</li>
        <li><strong>Legal Obligations:</strong> We may disclose information where we are legally required to do so in order to comply with applicable law, governmental requests, a judicial proceeding, court order, or legal process, such as in response to a court order or a subpoena (including in response to public authorities to meet national security or law enforcement requirements).</li>
        <li><strong>For business transfers:</strong> We may share your personal information in connection with, or during the course of negotiations regarding merger, sale of business assets, financing or acquisition of all or a part of our business by another entity.</li>
      </ol>
    </div>
  </div>

  <div class="ppg-section">
    <h2>Sale/sharing of information</h2>
    <p>We do not sell or share the information we collect from our users.</p>
  </div>

  <div class="ppg-section ppg-gdpr">
    <h2>GDPR Disclosures</h2>

    <h3>Automatic processing of data</h3>
    <p>We do not use any automated processing of the personal information we collect.</p>

    <h3>Legal basis for the collection</h3>
    <p>The General Data Protection Regulation requires us to identify and set out the legal basis, or in other words, the legal justification, for processing your personal information. The following are the legal bases on which we process your personal data.</p>

    <p><strong>Consent:</strong> We may process your personal information for the purposes described in this Privacy Policy with your consent.</p>

    <h3>Your rights</h3>
    <p>In accordance with Articles 12 to 23 of the General Data Protection Regulation, the data subject, that is you, has the following rights.</p>
    <div class="ppg-list">
      <ol>
        <li>Right to object to the processing of personal data in certain circumstances. See <a href="https://gdpr-info.eu/art-21-gdpr/" target="_blank" rel="noopener noreferrer">here</a> for details.</li>
        <li>Right to request access to the data we have collected about you and to receive a copy of it in an accessible format.</li>
        <li>Right to restrict the processing of your personal data for a limited period, under certain circumstances. See <a href="https://gdpr-info.eu/art-18-gdpr/" target="_blank" rel="noopener noreferrer">here</a> for details.</li>
        <li>Right to rectify or modify personal information that you consider obsolete, incomplete, or inaccurate.</li>
        <li>Right to opt out of automated processing of your personal data.</li>
        <li>Right to erasure of your personal information, also known as the right to be forgotten.</li>
      </ol>
    </div>
    <p>To exercise any of the rights mentioned above, you may use the contact details provided in this Privacy Policy.</p>
  </div>

  <div class="ppg-section">
    <h2>Consequences of non-consent</h2>
    <p>We require your consent to collect information in order to provide our services to you seamlessly. However, you may refuse consent. Please note that refusing consent may have consequences, including limited access to our services and reduced features on the website.</p>
  </div>

  <div class="ppg-section ppg-children">
    <h2>Privacy of children</h2>

    <p>We do not knowingly provide our services to children. If you are a parent or legal guardian and believe that your child has provided us with information without your consent, please contact us. Upon verification that we have collected such information without parental consent, we will remove the information from our database.</p>

  </div>

  <div class="ppg-section">
    <h2>Security of your personal information</h2>
    <p>We take reasonable measures to ensure that the information we collect from you is stored securely and protected to the best extent possible. However, no method of internet transmission or digital storage is completely secure, and we cannot guarantee absolute security. While we use commercially reasonable and appropriate security measures to protect your information, we cannot promise that it will be 100% secure.</p>
  </div>

  <div class="ppg-section">
    <h2>Links to other websites or apps</h2>
    <p>On our website, we may provide links to external websites, apps, or services. These are not operated by us and therefore are not governed by our Privacy Policy or practices. We strongly recommend that you review the privacy policies of such websites or services before engaging with them to ensure that you do not provide personal information that you do not wish to share.</p>
  </div>

  <div class="ppg-section">
    <h2>Changes to this privacy policy</h2>
    <p>We may update this Privacy Policy from time to time to reflect changes in the law or our privacy practices. We recommend that you review this privacy policy periodically to ensure it remains in line with your expectations.</p>
    <p>The privacy policy will be effective from the date it is posted on this page.</p>
  </div>

  <div class="ppg-section ppg-contact">
    <h2>Contact us</h2>
    <p>For any questions or concerns regarding your privacy, or to exercise any of your rights, you may contact us using the following details:</p>

    <p><strong>Address:</strong> <span>ASK Design
        Braintree, MA 02184</span></p>

    <p><strong>Email address:</strong> <a href="mailto:anne@askdesign.biz">anne@askdesign.biz</a></p>

  </div>

  &nbsp;
  <p class="ppg-footer">
    Privacy Policy generated by
    <a target="_blank" rel="noopener" href="https://www.freeprivacypolicy.ai?utm_source=PPG&utm_medium=footer&utm_campaign=UW">CookieYes - Privacy Policy Generator</a>
  </p>
</div>

<!-- End CookieYes privacy policy -->


				</div><!-- end column -->


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

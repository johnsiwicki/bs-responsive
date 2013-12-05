<!doctype html>
<html lang="en"> 
<head>
<meta charset="utf-8">
<title>[[title]]</title>
<meta name="description" content="[[description]]" />
<meta name="keywords" content="[[keywords]]" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" type="text/css" href="/core/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="/core/v2/jquery-ui-default.css" /> 
    <link rel="stylesheet" type="text/css" href="/inc/foundation.css" />
    <link rel="stylesheet" type="text/css" href="/core/v2/toolbox.css" />
    <link rel="stylesheet" type="text/css" href="/core/v2/inline-widgets.css" />
    <link rel="stylesheet" type="text/css" href="/core/v2/modules.css" />
    <link rel="stylesheet" type="text/css" href="/core/v2/style-guide-default.css" /> 
    <link rel="stylesheet" type="text/css" href="/core/v2/sidebar-widgets.css" />
    <link rel="stylesheet" type="text/css" href="/core/v2/color/blue-dark-colorscheme.css" />
    <!--<link rel="stylesheet" type="text/css" href="/core/v2/color/buttons/blue-bright/button-green.css" />-->
    <link rel="stylesheet" type="text/css" href="/inc/template.css" />
    <link rel="stylesheet" type="text/css" href="/inc/mobile.css" />
      <link rel="stylesheet" type="text/css" href="/inc/screen.css" />

      <!-- FOR IE 8 to read media queries -->
    <script src="/core/js/responsive/respond.min.js"></script>
    <script src="/inc/modernizr.js"></script>
    
</head>


  <body>


 
 <div class="fixed">
 
<nav class="top-bar show-for-small-only" data-topbar>
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name"></li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
  </ul>
<section class="top-bar-section">
    <ul class="left">
     
      <li class="divider"></li>
    </ul>
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="divider"></li>
      <li><a href="/">Home</a></li>
       <li class="divider"></li>
      <li><a href="/basement-waterproofing.html">Basement Waterproofing</a></li>
       <li class="divider"></li>
      <li><a href="/basement-finishing.html">Basement Finishing</a></li>
       <li class="divider"></li>
      <li><a href="/crawl-space-repair.html">Crawl Space Repair</a></li>
       <li class="divider"></li>
      <li><a href="/foundation-repair.html">Foundation Repair</a></li>
            <li class="divider"></li>
      <li><a href="/concrete-lifting.html">Concrete lifting</a></li>
            <li class="divider"></li>
      <li><a href="/concrete-lifting.html">About Us</a></li>
                 <li class="divider"></li>
      <li><a href="/concrete-lifting.html">Service Area</a></li>
      <li><a href="http://foundation.zurb.com/docs" class="button">Get A Free Quote</a></li>
    </ul>
  </section>
</nav>
</div>
 
 
 
 <div class="wrapper">
 <!-- Header Bar -->
 
  <div class="row">
 
      <div class="large-6 medium-6 columns show-for-medium-up">
            <div class="logo-desktop">
              <a href="/"><img src="http://www.thrasherbasement.com/images/layout/thrasher-logo.png" style="padding:15px;"></a>
            </div>
         </div>

     <div class="large-6 medium-6 columns columns show-for-medium-up">     
      
      <?php 
      $times = get_open_time();
      if($times or isset($_GET['open']))
      { 
        ?>
        <div class="opensign">
          <div class="tagline">Free Estimates - <a href="/free-estimate.html">Click</a> or Call Now</div>
          <div class="phonehead">[phone]</div>
        </div>

            <?php 
            } 
            else 
            { 
              ?>
     <div class="top-contact">
          <div class="tagline">Free Estimates - <a href="/free-estimate.html">Click</a> or Call Now</div>
          <div class="phonehead">[phone]</div>
        </div>
              <?php 
            } 
              ?>

        
      </div>

      <div class="small-12 small-centered columns show-for-small-only">
            <div class="logo-mobile">
              <a href="/"> <img src="http://www.thrasherbasement.com/images/layout/thrasher-logo.png"></a>
            </div>
         </div>
 
       <div class="small-12 small-centered columns show-for-small-only" style="text-align:center;">
          <div class="phone-contact">
          <a href="/free-estimate.html" class="button">Contact Us Today For A FREE Estimate</a>
          <p>Or Give Us A Call</p>
          <div class="phone-mobile-number"><a href="tel:[phone]">[phone]</a></div>
        </div>
      </div>

     

           <hr />

  </div>
 
  <!-- End Header -->
 

   <!-- Homepage Image -->
 
  <!-- Main Page Content and Sidebar -->
 
<div class="row">
<!-- Main Content -->
 <div class="large-9 medium-9 columns" id="content-wrap" role="content">
  
    <?php
    if($thePage == 'index') //if homepage show main splash
    {
      ?>

      <div class="row">
<div class="large-12 columns" >
<img src="http://placehold.it/700x180" class="main-splash">
</div>
</div>

<div class="row">
  <div class="small-12 small-centered columns">
<ul class="small-block-grid-3 large-block-grid-3" style="padding-left:0;">
  <li><img src="http://placehold.it/225x125"></li>
  <li><img src="http://placehold.it/225x125"></li>
  <li><img src="http://placehold.it/225x125"></li>
</ul>
 </div>
</div>



      <?php
    }
    else  if(substr($thePage, 0, 5) == 'about')
      {
        ?>

  <div class="headers">
          <div class="image"><img src="/core/images/headers/123/silo-generic.jpg" alt="About [company]" title="About [company]" width="700"></div>
        </div>


          <?php
      }
      elseif(substr($thePage, 0, 22) == 'basement-waterproofing')
      {
        ?>
        <div class="headers">
          <div class="image"><img src="/core/images/headers/123/silo-waterproofing.jpg" alt="Basement Waterproofing in [state abbr], including [city 3], [city 4] &amp; [city 1]." title="Basement Waterproofing in [state abbr], including [city 3], [city 4] &amp; [city 1]." width="700" /></div>
        </div>
        <?php
      }
      elseif(substr($thePage, 0, 5) == 'crawl')
      {
        ?>
        <div class="headers">
          <div class="image"><img src="/core/images/headers/123/silo-crawlspace.jpg" alt="Crawl Space Repair in [state abbr], including [city 4], [city 3] &amp; [city 1]." title="Crawl Space Repair in [state abbr], including [city 4], [city 3] &amp; [city 1]." width="700" /></div>
        </div>
        <?php
      }
      elseif(substr($thePage, 0, 9) == 'sump-pump')
      {
        ?>
        <div class="headers">
          <div class="image"><img src="/core/images/headers/123/silo-sump-pumps.jpg" alt="Sump Pump Installation in [state abbr], including [city 1], [city 3] &amp; [city 2]." title="Sump Pump Installation in [state abbr], including [city 1], [city 3] &amp; [city 2]." width="700" /></div>
        </div>
        <?php
      }
      elseif(substr($thePage, 0, 32) == 'commercial-foundation-contractor')
      {
        ?>
        <div class="headers">
          <div class="image"><img src="/core/images/headers/123/silo-commercial.jpg" alt="Commercial Foundation Repair in [state abbr], including [city 1], [city 2] &amp; [city 3]." title="Commercial Foundation Repair in [state abbr], including [city 1], [city 2] &amp; [city 3]."  width="700" /></div>
        </div>
        <?php
      }
      elseif(substr($thePage, 0, 10) == 'foundation')
      {
        ?>
        <div class="headers">
          <div class="image"><img src="/core/images/headers/123/silo-foundation.jpg" alt="Foundation Repair in [state abbr], including [city 1], [city 2] &amp; [city 3]." title="Foundation Repair in [state abbr], including [city 1], [city 2] &amp; [city 3]." width="700" /></div>
        </div>
        <?php
      }
      elseif(substr($thePage, 0, 18) == 'basement-finishing')
      {
        ?>
        <div class="headers">
          <div class="image"><img src="/core/images/headers/123/silo-finishing.jpg" alt="Basement Finishing in [state abbr], including [city 4], [city 3] &amp; [city 1]." title="Basement Finishing in [state abbr], including [city 4], [city 3] &amp; [city 1]." width="700" /></div>
        </div>
        <?php
      }
      elseif(substr($thePage, 0, 4) == 'pest')
      {
        ?>
        <div class="headers">
          <div class="image"><img src="/core/images/headers/123/silo-pest.jpg" alt="Pest Control in [state abbr], including [city 2], [city 1] &amp; [city 4]." title="Pest Control in [state abbr] including [city 2], [city 1] &amp; [city 4]." width="700" /></div>
        </div>
        <?php
      }
      elseif(substr($thePage, 0, 20) == 'disaster-restoration')
      {
        ?>
        <div class="headers">
          <div class="image"><img src="/core/images/headers/123/silo-disaster.jpg" alt="Disaster Restoration in [state abbr], including [city 4], [city 3] &amp; [city 1]." title="Disaster Restoration in [state abbr], including [city 4], [city 3] &amp; [city 1]." width="700" /></div>
        </div>
        <?php
      }
      elseif(substr($thePage, 0, 9) == 'home-mold')
      {
        ?>
        <div class="headers">
          <div class="image"><img src="/core/images/headers/123/silo-mold.jpg" alt="Home Mold in [state abbr], including [city 2], [city 1] &amp; [city 4]." title="Home Mold in [state abbr] including [city 2], [city 1] &amp; [city 4]." width="700" /></div>
        </div>
        <?php
      }
      elseif(substr($thePage, 0, 5) == 'radon')
      {
        ?>
        <div class="headers">
          <div class="image"><img src="/core/images/headers/123/silo-radon.jpg" alt="Radon Mitigation in [state abbr], including [city 2], [city 4] &amp; [city 1]." title="Sump Pump Installation in [state abbr], including [city 2], [city 4] &amp; [city 1]."  width="700" /></div>
        </div>
        <?php
      }
      else //default header to show on all other pages
      {
        ?>
        <div class="headers">
          <div class="image"><img src="/core/images/headers/123/silo-generic.jpg" alt="[company] serves <?=$city?>, <?=$state?>" title="About [company] in <?=$city?>, <?=$state?>" width="700" /></div>
        </div>
        <?php
      }
 
    ?>

    <?php
    if($thePage != 'index') //if homepage show main splash
    {
      ?>
    [[breadcrumbs]]
      <?php
      }
 
    ?>

   
      [[content]]
    </div>
 
    <!-- End Main Content -->

        
     <!-- Sidebar -->
    <div class="large-3 medium-3 columns">
      [[sidebar]]
    </div>  <!-- End Sidebar -->

  </div>
 
  <!-- End Main Content and Sidebar -->
 
  <!-- Footer -->
 
  <div class="row footer">
  <div class="large-12 columns center">
      [[footer]]
     <div class="small">
      &copy; <?php echo(date('Y')); ?> [[company]] | [[microdata_address]] | [[phone]]
    </div>
  </div>
  </div>
</div>
    

 


  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.3/jquery.colorbox-min.js"></script> 
   <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.3/example1/colorbox.min.css" /> 
   
<script src="/inc/main.js"></script>


<!-- JS Fun -->
<script src="/core/js/jquery.thScrollable.js" type="text/javascript"></script>

<script src="/inc/foundation.min.js"></script>
<script src="/inc/foundation.topbar.js"></script>
    <script>
      $(document).foundation();
    </script>

  

  </body>
</html>

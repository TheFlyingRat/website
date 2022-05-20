<!DOCTYPE html>
<html lang="en">
  <!-- /*! 403.php 1.2.0 | MIT -->
  <head>
    <title>User, we have a problem! - TheFlyingRat</title>
  
    <!-- Content type declaration -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  
    <!-- Meta tags -->
    <meta name="name" content="403 - Oops">
    <meta name="description" content="Hey I'm Joey! I'm a competent software developer with hopes to change the world one day. Welcome to my website.">
    <meta name="keywords" content="TheFlyingRat, Joey M, Software Developer, Web Development, Scripting languages, The, Flying, Rat">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="application-name" content="403 - Oops">
    <meta name="author" content="/humans.txt">    
    
    <!-- Open Graph meta tags -->
    <meta property="og:title" content="403 - Oops">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://theflyingrat.com">
    <meta property="og:image" content="/logo512x512.png">
  
    <!-- Link tags-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins&family=Raleway:wght@300;400;600&family=Roboto:wght@300&display=swap" rel="stylesheet">    
    <link rel="manifest" href="/site.webmanifest">
    <link rel="author" href="/humans.txt">
    <link rel="apple-touch-icon" href="/logo512x512.png">
    <link rel="icon" type="image/png" href="/logo128x128.png">
  
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assets/css/normalize.min.css">
    <link rel="stylesheet" href="/assets/css/skeleton.min.css">

    <link rel="stylesheet" href="/assets/css/main.min.css">
    <link rel="stylesheet" href="/assets/css/error.min.css">

    <!-- PHP goes here -->
    <?php
      $motdname = $_SERVER["DOCUMENT_ROOT"] . "/motd.txt";
      $motd = fopen($motdname, "r") or die("Unable to open file!");

      $siterevname = $_SERVER["DOCUMENT_ROOT"] . "/revision.txt";
      $siterev = fopen($siterevname, "r") or die("Unable to open file!");

      $errCode = basename(__FILE__, '.php');
      $errLineOne = 
      "
      It appears that you don't have permission to view this page. 
      \n If you believe this is an error, please contact me.
      ";
      $errLineTwo = "The best I can do is redirect you back <a href='/'>home</a>.";
      
    ?>
  
  </head>
  
  <body onload="loadOverlayOff(); init();" id="body" class="bodyDark"> <!-- Default to dark theme <3 -->
    <div id="loadOverlay"></div>
    <!-- Primary Page Layout
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div id="dropShadow" style="height:100vh" class="dropShadowDark">
      <div class="container">
        <div class="row">
          <div class="two-thirds column" style="margin-top: 5%">
            <p id="recieving" class="recievingLight noselect">Recieving bits...</p>
            <h1 id="errorCode" class="errorCodeLight noselect"><?php echo(strval($errCode)); ?></h1>
            <h4 class="noselect">User, we have a problem!</h4>
            <p class="noselect"><?php echo($errLineOne); ?></p>
            <p class="noselect"><?php echo($errLineTwo); ?></p>
          </div>
        </div>
      </div>
    </div>



    <footer id="footer" class="footerDark" style="bottom:0;position:absolute; width:100%;">
      <!-- Contact info + footer
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
      <div id="footerContainer" class="footerContainer footerTextLight">
        <p class="footerText noselect" style="padding-top: 1rem">© TheFlyingRat 2016-<?php echo(Date("Y")); ?></p>
        <p class="footerText noselect">Sidewide message: <?php echo fgets($motd); fclose($motd); ?></p>
        <p class="footerText noselect" style="padding-bottom: 2rem">Site revision <?php echo fgets($siterev); fclose($siterev); ?></p>
      </div>
    </footer>

    <!--
    <script src="/assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="/assets/js/plugins.min.js"></script>
    <script src="/assets/js/main.min.js"></script>
    <script src="/assets/js/error.min.js"></script>
    <script src="/assets/js/functions.min.js"></script>
    -->
    <script src="/assets/js/error/errorPageLiterallyEverything.min.js"></script>
    <script>
      // Initiate the smooth scrolling
      // See also: smoothScroll.js (/assets/js/non-minified)
      function init(){
        new smoothScroll(document,50,20)
      }

      // Refresh the page on resize to fix a bug with rezising the window not actually doing anything
      window.onresize = function(){ location.reload(); }
    </script>

  </body>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</html>

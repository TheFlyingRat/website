<!DOCTYPE html>
<html lang="en-US">
  <!-- index.php (submit form) version 1.20220409.1 -->
  <!-- THIS IS OUTDATED. MAIN PAGE HAS UPDATED A LOT SINCE THIS WAS LAST WORKED ON!!!! -->
  <!-- This page still uses PHP. I am trying to migrate everything to JS. I will put the form validation on api.theflyingrat.com -->
  <head>
    <title>Submitting form</title>
    <link rel="preconnect" href="https://cdn.theflyingrat.com">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="content-language" content="en-US">
    <style type="text/css">
      body {
        background-color: #333;
        opacity: 0
      }

      body::-webkit-scrollbar {
        display: none !important
      }

      body {
        -ms-overflow-style: none;
        scrollbar-width: none
      }
    </style> 
    <meta name="name" content="Submitting form - TheFlyingRat">
    <meta name="description" content="Hey I'm Joey! I'm a competent software developer with hopes to change the world one day. Welcome to my website.">
    <meta name="keywords" content="TheFlyingRat, Joey M, Software Developer, Web Development, Scripting languages, The, Flying, Rat">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="application-name" content="Home - TheFlyingRat">
    <meta name="theme-color" content="#1e1e1e">
    <meta name="author" content="/humans.txt">
    <meta property="og:title" content="Submitting form - TheFlyingRat">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://theflyingrat.com">
    <meta property="og:image" content="/logo512x512.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="author" href="/humans.txt">
    <link rel="canonical" href="https://theflyingrat.com">
    <link rel="icon" type="image/png" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" href="/favicon-16x16.png">
    <link rel="preload" as="script" href="https://cdn.theflyingrat.com/assets/js/main.min.js">
    <link rel="preload" as="script" href="https://cdn.theflyingrat.com/assets/js/functions.min.js">
    <link rel="preload" as="script" href="https://cdn.theflyingrat.com/assets/js/plugins.min.js">
    <link rel="preload" as="script" href="https://cdn.theflyingrat.com/assets/js/smoothScroll.min.js">
    <link rel="preload" as="script" href="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js" crossorigin="anonymous">
    <link rel="preload" as="script" href="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" crossorigin="anonymous">
    <link rel="preload" as="style" href="https://cdn.theflyingrat.com/assets/css/skeleton.min.css">
    <link rel="preload" as="style" href="https://cdn.theflyingrat.com/assets/css/main.min.css">
    <link rel="preload" as="style" href="https://cdn.theflyingrat.com/assets/css/normalize.min.css">
    <link rel="preload" as="font" href="/assets/font/raleway.woff2" crossorigin="anonymous" type="font/woff2">
    <link rel="preload" as="font" href="/assets/font/poppins.woff2" crossorigin="anonymous" type="font/woff2">
    <link rel="preload" as="font" href="/assets/font/open-sans.woff2" crossorigin="anonymous" type="font/woff2">
    <link rel="preload" as="fetch" href="/revision.txt" crossorigin="anonymous" type="text/plain">
    <link rel="preload" as="fetch" href="/motd.txt" crossorigin="anonymous" type="text/plain">
  </head>
  <body onload="init()" id="body" class="bodyDark">
    <?php
    // define variables and set to empty values
    $name = $email = $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["Name"])) {
            $name = "Name is required";
        } else {
            $name = $_POST["Name"];
        }
        if (empty($_POST["Email"])) {
            $email = "Email is required";
        } else {
            $email = $_POST["Email"];
        }
        if (empty($_POST["Message"])) {
            $message = "Message is required";
        } else {
            $message = $_POST["Message"];
        }
    }
    ?>


    <?php echo($name . " " . $email . " " . $message); ?>
    <footer id="footer" class="footerDark noselect" style="position:absolute;width:100%">
      <div id="footerContainer" class="footerContainer footerTextLight">
        <p class="footerText" style="padding-top:1rem">© TheFlyingRat 2016-<span id="year">awaiting year...</span></p>
        <p class="footerText">Sidewide message: <span id="motd">awaiting motd...</span></p>
        <p class="footerText" style="padding-bottom:2rem">Site revision <span id="revision">awaiting revision...</span> </p>
      </div>
    </footer>
    <script src="https://cdn.theflyingrat.com/assets/js/main.min.js" async></script>
    <script src="https://cdn.theflyingrat.com/assets/js/smoothScroll.min.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" defer="defer" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js" defer="defer" crossorigin="anonymous"></script>
    <script src="https://cdn.theflyingrat.com/assets/js/functions.min.js" defer="defer"></script>
    <script src="https://cdn.theflyingrat.com/assets/js/plugins.min.js" defer="defer"></script>
    <script src="https://cdn.theflyingrat.com/assets/js/home.min.js" defer="defer"></script>
    <script>
        function init() {
            new smoothScroll(document, 50, 20)
        };
        const d = new Date;
        let year = d.getFullYear();
        async function getText(e, r) {
            const t = await fetch(e),
                o = await t.text();
            document.getElementById(r).innerHTML = o
        }
        document.getElementById("year").innerHTML = year, getText("/motd.txt", "motd"), getText("/revision.txt", "revision");
    </script>
    <link rel="stylesheet" type="text/css" href="https://cdn.theflyingrat.com/assets/css/skeleton.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.theflyingrat.com/assets/css/home.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.theflyingrat.com/assets/css/main.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.theflyingrat.com/assets/css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendor/fonts.min.css">
  </body>
</html>


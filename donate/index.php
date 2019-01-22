<!doctype html>
<html class="no-js" lang="">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- Favicon and Title -->
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/inc/title.php";
   include_once($path);
?>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/inc/favicon.php";
   include_once($path);
?>
<meta name="description" content="PhosphorJS">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Lato:400italic,300,300italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Nunito:300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/normalize.min.css">
        <link rel="stylesheet" href="/css/main.css">


        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
 <?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/inc/header.php";
   include_once($path);
?>
        <div class="main-container">
            <div class="main wrapper clearfix">
                
<br>
<br>
<!-- Start Donation Page -->
<h1>Donate</h1>
<h3>With Credit/Debit Card</h3>
<br>
<script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe src="https://donorbox.org/embed/github-nate-duhamell" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" name="donorbox" frameborder="0" scrolling="no" allowpaymentrequest></iframe>
<br>
<br>
<h3>With Bitcoins</h3>
<p>Send Coins to: 1A9iwnVQxC2ECesyFJZ8zkCTXH92kgiLrR</p>
<br>
<br>


            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/inc/footer.php";
   include_once($path);
?>          </footer>
        </div>
        <script src="js/main.js"></script>
    </body>
</html>

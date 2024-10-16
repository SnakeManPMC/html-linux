<!DOCTYPE html>
<html lang="en">
<head>
<title>Linux PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Linux PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Linux PMC Tactical</h1>

<p>
Welcome to Linux PMC Tactical. This website is under development in oct 2024 and most likely will be for months to come as I slowly migrate all my Linux notes from private localhost to here where everyone can read them.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Welcome To My Linux World</h2>

<p><a href="about.php">About</a> quick description what this website is all about.</p>
<p><a href="apache-disable-website.php">Apache Disable Website</a> when you need to let her go.</p>
<p><a href="apache-prevent-hotlinking.php">Apache Prevent Hotlinking</a> get rid of those scumsuckers who use your website as image host/mirror.</p>
<p><a href="apache-virtual-host.php">Apache Virtual Host</a> mywebsite.example.com style domain thingy.</p>
<p><a href="apache.php">Apache</a> web server.</p>
<p><a href="letsencrypt.php">Letsencrypt</a> SSL certificates for website domains, ie HTTPS instead of unprotected HTTP link.</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="links.php">Links</a>, back to <a href="index.php">Linux PMC Tactical root page</a></p>
<p><i>PMC Linux PMC Tactical 1992 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>

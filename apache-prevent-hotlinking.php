<!DOCTYPE html>
<html lang="en">
<head>
<title>Apache Prevent Hotlinking Linux PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Apache Prevent Hotlinking Linux PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Apache Prevent Hotlinking Linux PMC Tactical</h1>
<p>Welcome to Apache Prevent Hotlinking Linux PMC Tactical.</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Apache Prevent Hotlinking</h2>

<p>
Apache Prevent / Block Image / File Hotlinking
</p>

<p>
Create a <b>.htaccess</b> file under the document root of your website. Then add the following rules to the created .htaccess file. This will block all domains except example.com to hotlink images from your site.
</p>

<pre>
RewriteEngine on
RewriteCond %{HTTP_REFERER} !^$
RewriteCond %{HTTP_REFERER} !^https?://(.+\.)?example.com [NC]
RewriteRule \.(jpg|png)$ - [NC,F,L]
</pre>

<p>
You can also show a blocked banner in place of the hot-linked image. To show the banner use below rules in your .htaccess file.
</p>

<pre>
RewriteEngine on
RewriteCond %{HTTP_REFERER} !^$
RewriteCond %{HTTP_REFERER} !^https?://(.+\.)?example.com [NC]
RewriteRule \.(jpg|png) http://example.com/blocked.png [R,L]
</pre>

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

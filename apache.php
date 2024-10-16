<!DOCTYPE html>
<html lang="en">
<head>
<title>Apache Web Server Linux PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Apache Web Server Linux PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Apache Web Server Linux PMC Tactical</h1>
<p>Welcome to Apache Web Server Linux PMC Tactical.</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Apache Web Server</h2>

<p>
Apache is a very well known common web server software for Linux and other operating systems. See <a href="https://httpd.apache.org/" target="_blank">httpd.apache.org</a> website for details.
</p>

Apache enable rewrite mod:
<pre class="bash">
sudo a2enmod rewrite
</pre>

Apache enable ssl mod:
<pre class="bash">
a2enmod ssl
</pre>

Web site enabling:
<pre class="bash">
sudo a2ensite your_domain_1.conf
sudo a2ensite your_domain_2.conf
</pre>
If you need to disable site, use ''a2dissite'' command.

Apache config file syntax test:
<pre class="bash">
sudo apache2ctl configtest
</pre>

Apache status:
<pre class="bash">
sudo systemctl status apache2
</pre>

Apache restart:
<pre class="bash">
sudo systemctl restart apache2
</pre>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="links.php">Links</a>, back to <a href="index.php">Linux PMC Tactical root page</a></p>
<br><br>
<p><i>PMC Linux PMC Tactical 1992 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>

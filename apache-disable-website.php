<!DOCTYPE html>
<html lang="en">
<head>
<title>Apache Disable Website Linux PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Apache Disable Website Linux PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Apache Disable Website Linux PMC Tactical</h1>
<p>Welcome to Apache Disable Website Linux PMC Tactical.</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Apache Disable Website</h2>

<p>
Linux Apache disable website. This takes the website domain offline, Apache server will not serve any https requests to that address anymore. No actual physical files are removed from your web root though.
</p>

<pre class="bash">
sudo a2dissite example.com
sudo a2dissite example.com-le-ssl
sudo systemctl restart apache2
</pre>

<p>
I did that when one of my domains was let to expire so it was not working anymore, Letsencrypt somehow did not work on it and it caused all kinds of issues like Apache getting error on its config, no idea how but hey who cares. I used that a2dissite &lt;DOMAINNAME&gt; and then restart for Apache itself, problem solved.
</p>

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

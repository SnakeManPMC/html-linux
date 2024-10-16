<!DOCTYPE html>
<html lang="en">
<head>
<title>Letsencrypt Linux PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Letsencrypt Linux PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Letsencrypt Linux PMC Tactical</h1>
<p>Welcome to Letsencrypt Linux PMC Tactical.</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Letsencrypt</h2>

<p>
Add letsencrypt repository:
</p>

<pre class="bash">
sudo apt-get install software-properties-common
sudo add-apt-repository ppa:certbot/certbot
</pre>
<p>
Hit enter. Please note that to my recollection I didn't need to add this repository on Debian 12.7 system, hmm hmm!?
</p>

<pre class="bash">
sudo apt-get update
sudo apt-get install python-certbot-apache
</pre>
<p>
The certbot Let's Encrypt client is now ready to use.
</p>

<p>
SSL certificate. The first domain name in the list of parameters will be the base domain used by Let's Encrypt to create the certificate, and for that reason we recommend that you pass the bare top-level domain name as first in the list, followed by any additional subdomains or aliases:
</p>

<pre class="bash">
sudo certbot --apache -d example.com -d www.example.com
</pre>
<p>
This is per domain (unless I'm mistaken heh), so do it like:
</p>

<pre class="bash">
certbot --apache -d example.com -d www.example.com
certbot --apache -d mydomain.com -d www.mydomain.com
certbot --apache -d coolsite.com -d www.coolsite.com
</pre>
<p>
etc
</p>

<p>
Check if ssl https is working:
</p>
<pre>
https://www.ssllabs.com/ssltest/analyze.html?d=example.com&latest
</pre>

<p>
Certbot renewal, dry run, a test:
</p>

<pre class="bash">
certbot renew --dry-run
</pre>

<p>
Auto renewal in crontab:
</p>

<pre class="bash">
15 3 * * * /usr/bin/certbot renew --quiet
</pre>

<p>
Also in Debian 12.7 system this crontab was added automatically upon installing Letsencrypt, so hmm.
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

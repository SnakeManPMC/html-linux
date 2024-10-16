<!DOCTYPE html>
<html lang="en">
<head>
<title>Apache Virtual Host Linux PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Apache Virtual Host Linux PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Apache Virtual Host Linux PMC Tactical</h1>
<p>Welcome to Apache Virtual Host Linux PMC Tactical.</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<?php include("/var/www/include/support.php"); ?>
	<h2>Apache Virtual Host</h2>

<p>
Apache website config files are located in <b>/etc/apache2/sites-available/</b> directory.
</p>

<p>
In this case I'm using fictional <b>example.com</b> website domain name.
</p>

<p>
Browse to that dir, then you could copy 000-default.conf file to <b>example.com.conf</b> or simply create brand new one and then copy-paste the following config/code block there:
</p>

<pre>
&lt;VirtualHost *:80&gt;
DocumentRoot "/var/www/example.com"
ServerName example.com
ServerAlias www.example.com
&lt;Directory "/var/www/example.com"&gt;
allow from all
Require all granted
&lt;/Directory&gt;
RewriteEngine on
RewriteCond %{SERVER_NAME} =example.com [OR]
RewriteCond %{SERVER_NAME} =www.example.com
RewriteRule ^ https://%{SERVER_NAME}%{REQUEST_URI} [END,NE,R=permanent]
&lt;/VirtualHost&gt;
</pre>

<p>
When you create Letsencrypt SSL https domain config for your website domain, it will most likely complain about that RewriteCond/RewriteRule that its disabled because it might lead into never ending loop. I have no idea about that, I need to figure it out later :) PMCTODO
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

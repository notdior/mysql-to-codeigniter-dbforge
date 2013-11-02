<!doctype html>

<!--[if lt IE 7]>
	<html class="nojs ms lt_ie7" lang="en">
<![endif]-->

<!--[if IE 7]>
	<html class="nojs ms ie7" lang="en">
<![endif]-->

<!--[if IE 8]>
	<html class="nojs ms ie8" lang="en">
<![endif]-->

<!--[if gt IE 8]>
	<html class="nojs ms" lang="en">
<![endif]-->

<html lang="en">

<head>
<?php include_once("header.php"); ?>
</head>

<body class="blueish">

<div id="main" style="margin-right:15%;margin-left:15%;">
	<div class="one_full" align="center" >
		<h1>SQL Schema to CodeIgniter DBForge Method</h1>
	</div>

	<div class="one_half">
		<form action="migrate.php" method="POST">
			<textarea name="sql" rows="30" cols="80"></textarea><br/>
			<input type="submit" value="Forge my DB!" name="migrate" />
		</form>
	</div>

	<div class="one_third">
		<strong>3/5/2013</strong>
		<p><strong>ALPHA!</strong></p>
		<p>This interface allows you to upload your phpMyAdmin create statement (export out of phpMyAdmin) and it will create your CodeIgniter DBForge Methods (used for migrations!).  It can only take <em>one</em> create statement at a time currently.  </p>
		<p>Want to test it out? Copy and paste the code below in the window to the left:</p>

		<pre>
CREATE TABLE IF NOT EXISTS `agents` (
`id` varchar(10) collate utf8_unicode_ci NOT NULL default '',
`officeid` int(10) unsigned NOT NULL default '0',
`firstname` varchar(100) collate utf8_unicode_ci NOT NULL default '',
`lastname` varchar(100) collate utf8_unicode_ci NOT NULL default '',
`agenttitle` varchar(100) collate utf8_unicode_ci default NULL,
`phone1` varchar(20) collate utf8_unicode_ci default NULL,
`phone2` varchar(20) collate utf8_unicode_ci default NULL,
`mobile` varchar(20) collate utf8_unicode_ci default NULL,
`fax` varchar(20) collate utf8_unicode_ci default NULL,
`email` varchar(100) collate utf8_unicode_ci default NULL,
`url` varchar(100) collate utf8_unicode_ci default NULL,
`location` varchar(100) collate utf8_unicode_ci default NULL,
`information` text collate utf8_unicode_ci,
`testimonials` text collate utf8_unicode_ci,
`dirname` varchar(50) collate utf8_unicode_ci default NULL,
`idx` text collate utf8_unicode_ci,
`active` char(1) character set utf8 NOT NULL default 'y',
PRIMARY KEY  (`id`),
KEY `officeid` (`officeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
		</pre>
	</div>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35857245-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>

</html>

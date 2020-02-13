<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : FruityBlue 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120307

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Nicolas DUGUE - LIUM, Équipe LST - Complex networks, text mining, clustering</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="wrapper2">
		<div id="header" class="container">
			<div id="logo">
				<center><img src="images/dot-graph.jpg" width="39.2%"></center>
			</div>
			<div id="menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li <?php if (isset($_GET['research'])) { ?> class="current_page_item" <?php } ?> ><a href="index.php?research">Recherche</a></li>
					<li <?php if (isset($_GET['publi'])) { ?> class="current_page_item" <?php } ?> ><a href="index.php?publi">Publis</a></li>
					<li <?php if (isset($_GET['dev'])) { ?> class="current_page_item" <?php } ?> ><a href="index.php?dev">Dev</a></li>
					<li <?php if (isset($_GET['teaching'])) { ?> class="current_page_item" <?php } ?> ><a href="index.php?teaching">Enseignements</a></li>
					<li <?php if (isset($_GET['misc'])) { ?> class="current_page_item" <?php } ?> ><a href="index.php?misc">Musique</a></li>
				<!--	<li <?php if (isset($_GET['edt'])) { ?> class="current_page_item" <?php } ?> ><a href="index.php?edt">EDT</a></li> --->
					
				</ul>
			</div>
		</div>

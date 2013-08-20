<?php
$uri = $this->uri->segment(2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hadits 9 Imam</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Haidar Mar'ie">

<!-- Le styles -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/droidarabicnaskh.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/keyboard-arabic.css" rel="stylesheet">
<style type="text/css">
/* @import url(http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css); */
body {
	padding-top: 60px;
	padding-bottom: 40px;
}

.sidebar-nav {
	padding: 9px 0;
}

@media ( max-width : 980px) {
	/* Enable use of floated navbar text */
	.navbar-text.pull-right {
		float: none;
		padding-left: 5px;
		padding-right: 5px;
	}
}

.highlight {
	font-weight: bold;
	color: #000;
	background-color: #999999;
}

.hero-unit hr {
	border-bottom: 1px solid #666;
}

.arabic {
	font-family: 'Droid Arabic Naskh', serif;
	font-size: 20px;
	font-weight: bold;
}

.label-kitab {
	max-width: 300px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}
.label-bab {
	max-width: 300px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}
.perawi-color {
	color: #448bf4;
}
</style>

<script type="text/javascript">
</script>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
<![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
	href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon"
	href="<?php echo base_url(); ?>assets/ico/favicon.png">
</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid" style="width: auto">
				<button type="button" class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="brand" href="#">Hadits 9 Imam</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="active"><a href="<?php echo site_url()?>search"><i class="icon-home icon-white"></i> Home</a>
						</li>
						<li><a href="<?php echo site_url()?>search"><i class="icon-search icon-white"></i> Advanced Search</a></li>
						<li><a href="<?php echo site_url()?>list_notes"><i class="icon-bookmark icon-white"></i> Bookmarks</a></li>
						<li><a href="#contact"><i class="icon-envelope icon-white"></i> Contact</a></li>
					</ul>
					<p class="navbar-text pull-right">
						<i class="icon-user icon-white"></i> Logged in as <a href="#" class="navbar-link">Username</a>
					</p>
					<form class="navbar-form pull-left" action="<?php echo site_url();?>search/result/" method="POST">
						  <input type="text" name="search_bool" class="search-query span2" placeholder="Search">
					</form>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
				<div class="well sidebar-nav">
					<ul class="nav nav-list">
						<li>Qur'an</li>
  						<li class="divider"></li>
						<li class="nav-header"><i class="icon-book"></i> Hadits</li>
						<li <?php echo $uri =='bukhari'?'class="active"':''; ?>><a
							href="<?php echo site_url();?>kitab/bukhari">Shahih
								Bukhari</a></li>
						<li <?php echo $uri =='muslim'?'class="active"':''; ?>><a href="<?php echo site_url();?>kitab/muslim">Shahih
								Muslim</a></li>
						<li <?php echo $uri =='abudaud'?'class="active"':''; ?>><a href="<?php echo site_url();?>kitab/abudaud">Sunan
								Abu Daud</a></li>
						<li <?php echo $uri =='tirmidzi'?'class="active"':''; ?>><a href="<?php echo site_url();?>kitab/tirmidzi">Sunan
								Tirmidzi</a></li>
						<li <?php echo $uri =='nasai'?'class="active"':''; ?>><a href="<?php echo site_url();?>kitab/nasai">Sunan
								Nasa'i</a></li>
						<li <?php echo $uri =='ibnumajah'?'class="active"':''; ?>><a href="<?php echo site_url();?>kitab/ibnumajah">Sunan
								Ibnu Majah</a></li>
						<li <?php echo $uri =='ahmad'?'class="active"':''; ?>><a href="<?php echo site_url();?>kitab/ahmad">Musnad
								Ahmad</a></li>
						<li <?php echo $uri =='malik'?'class="active"':''; ?>><a href="<?php echo site_url();?>kitab/malik">Muwatha'
								Malik</a></li>
						<li <?php echo $uri =='darimi'?'class="active"':''; ?>><a href="<?php echo site_url();?>kitab/darimi">Sunan
								Darimi</a></li>
					</ul>
				</div>
				<!--/.well -->
			</div>
			<!--/span-->
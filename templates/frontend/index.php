<?php
/**
 * @author	Stephan Klimek
 * @package	Joomla!
 * @subpackage	Webseite Schlank Plus
 * @link	http://webscrap.de
 * @email	webmaster@webscrap.de
 * @copyright	webscrap
 * 
 * Webseite Schlank Plus
 * Copyright (c) 2016 schlankplus
 **/
defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;
$templateparams	= $app->getTemplate(true)->params;

// generator tag
$this->setGenerator(null);

// force latest IE & chrome frame
$doc->setMetadata('x-ua-compatible','IE=edge,chrome=1');

// js
JHtml::_('jquery.framework');
$doc->addScript($tpath.'/js/bootstrap.min.js');

// css
$doc->addStyleSheet($tpath.'/css/style.css');
$doc->addStyleSheet($tpath.'/css/bootstrap.min.css');
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
    <head>
		<jdoc:include type="head" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/sp-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo $tpath; ?>/images/sp-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo $tpath; ?>/images/sp-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $tpath; ?>/images/sp-icon-152x152.png" />
		<link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php echo $tpath; ?>/images/sp-icon-180x180.png" />
		<link rel="icon" sizes="128x128" href="<?php echo $tpath; ?>/images/sp-icon-128x128.png" />
		<link rel="icon" sizes="192x192" href="<?php echo $tpath; ?>/images/sp-icon-192x192.png" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $tpath; ?>/favicon.ico" />
		<link rel="stylesheet" href="<?php echo $tpath; ?>/css/font-awesome.min.css">
		
		<!-- Le HTML5 shim and media query for IE8 support -->
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script type="text/javascript" src="<?php echo $tpath; ?>/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')) . ' ' . $active->alias . ' ' . $pageclass; ?>" role="document">
		
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="20">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-modules">
						<span class="sr-only">Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" style="padding: 5px;" href="<?php echo $this->baseurl; ?> /">
						<img src="<?php echo $tpath; ?>/images/logo.png" />
					</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-modules">
					<jdoc:include type="modules" name="top-navigation" />
				</div>
			</div>
		</nav>

		<!-- HEADER -->
		<header class="container" style="padding: 0;">
			<jdoc:include type="modules" name="header-slider" />
		</header>

		<!-- CONTENT -->
		<div class="container maincontainer">
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
		
		<!-- FOOTER -->
		<footer>
			<div class="container">
				<ul class="list-inline text-center">
					<li>
						<a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/schlankplus">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li>
						<a class="btn btn-social-icon btn-envelope" href="mailto:kontakt@schlankplus.de">
							<i class="fa fa-envelope"></i>
						</a>
					</li>
					<jdoc:include type="modules" name="footermenu" />
				</ul>
				<p>Copyright &copy; <?php echo date('Y'); ?> - <?php echo $app->getCfg('sitename'); ?></p>
			</div>
		</footer>
		
		<jdoc:include type="modules" name="debug" />
	</body>
</html>
<?php
	
	/*------------------------------------------------------------------------
	# Bootla from Aixeena!
	# ------------------------------------------------------------------------
	# version		4.0.0
	# author    	Ciro Artigot for Aixeena.org
	# copyright 	Copyright (c) 2018 CiroArtigot. All rights reserved.
	# @license 		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
	# Websites 		http://aixeena.org/
	-------------------------------------------------------------------------
	*/
	
	// no direct access
	defined('_JEXEC') or die;
	
	include_once('functions.php');
	include_once('variables.php');
	
	echo '<!DOCTYPE html>';
	echo '<html '.$cache.$lang.'>';
	echo '<head>';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0" />';
	if($this->countModules('head1') && $p->get('head1', 'null')) echo mod('null','head1');
	echo '<jdoc:include type="head" />';
	if($this->countModules('head2') && $p->get('head2', 'null')) echo mod('null','head2');
	include_once('styles.php');
	echo '</head>';
	echo '<body class="bootla '.$maincss.' home-'.$home.' random-'.$random.'">';

	if($this->countModules('topbar') && $p->get('topbar', 'null')) echo mod($p->get('topbar', 'null'),'topbar');  
	
	if($this->countModules('upmenu') && $p->get('upmenu', 'basic')) echo mod($p->get('upmenu', 'basic'),'upmenu', 'nav');
	
	if($this->countModules('header') && $p->get('header', 'basic')) echo mod($p->get('header', 'basic'),'header', 'header');
	
	if($this->countModules('header1') && $p->get('header1', 'basic')) echo mod($p->get('header1', 'basic'),'header1', 'header');
	
	if($this->countModules('header2') && $p->get('header2', 'basic')) echo mod($p->get('header2', 'basic'),'header2', 'header');
	
	if($this->countModules('header3') && $p->get('header3', 'basic')) echo mod($p->get('header3', 'basic'),'header3', 'header');
	
	if($this->countModules('header3') && $p->get('header3', 'basic')) echo mod($p->get('header3', 'basic'),'header3', 'header');
	
	if($this->countModules('slide') && $p->get('slide', 'basic')) echo mod($p->get('slide', 'basic'),'slide');
	
	if($home && $this->countModules('slidehome') && $p->get('slidehome', 'basic')) echo mod($p->get('slidehome', 'basic'),'slidehome');
	
	if($this->countModules('position1') && $p->get('position1', 'basic')) echo mod($p->get('position1', 'basic'),'position1');
		
	if($this->countModules('position2') && $p->get('position2', 'basic')) echo mod($p->get('position2', 'basic'),'position2');
		
	if($this->countModules('position3') && $p->get('position3', 'basic')) echo mod($p->get('position3', 'basic'),'position3');
	
	if($this->countModules('menu') && $p->get('menu', 'basic')) echo mod($p->get('menu', 'basic'),'menu', 'nav');

	echo '
	<section class="content">
	<div class="precontainer p-content">
	<div class="container c-content">
	<div class="row r-content">';
	
		if($this->countModules('breadcrumb') && !$home  && $p->get('breadcrumb', 'bootla')) echo mod($p->get('breadcrumb', 'bootla'),'breadcrumb', 'breadcrumb');
	
		if($this->countModules('center-home') && $home && $p->get('center-home', 'bootla')) echo mod($p->get('center-home', 'bootla'),'center-home');
	
		if($this->countModules('center-top') && $p->get('center-top', 'bootla')) echo mod($p->get('center-top', 'bootla'),'center-top');
	
		if($this->countModules('left') && $p->get('left', 'content')) echo '
		<div class="left .pull-left col-'.$leftspan.'">'.mod($p->get('left', 'content'),'left').'</div>';
		
		if($this->countModules('right') && $p->get('right', 'content')) echo '
		<div class="right .pull-right col-'.$rightspan.'">'.mod($p->get('right', 'content'),'right').'</div>';
	
		echo '<div class="core-content '.$componentspan.'">';
	
		if($this->countModules('content-top') && $p->get('content-top', 'content')) echo mod($p->get('content-top', 'content'),'content-top');
		
		echo '<section class="component"><jdoc:include type="component" /></section>';
	
		if($this->countModules('content-bottom') && $p->get('content-bottom', 'content')) echo mod($p->get('content-bottom', 'content'),'content-bottom');
		
		if($article && $this->countModules('content-bottom-article') && $p->get('content-bottom-article', 'content')) echo mod($p->get('content-bottom-article', 'content'),'content-bottom-article');
		
		echo '<div class="clearfix"></div></div>';
	
		if($this->countModules('center-bottom')) echo mod($p->get('center-bottom', 'bootla'),'center-bottom');
	
	
	echo '<div class="clearfix"></div></div></div></div></section>';
	
	if($this->countModules('menu-bottom') && $p->get('menu-bottom', 'basic')) echo mod($p->get('menu-bottom', 'basic'),'menu-bottom', 'nav');
	
	if($this->countModules('position4') && $p->get('position4', 'basic')) echo mod($p->get('position4', 'basic'),'position3');
	if($this->countModules('position5') && $p->get('position5', 'basic')) echo mod($p->get('position5', 'basic'),'position3');
	if($this->countModules('position6') && $p->get('position6', 'basic')) echo mod($p->get('position6', 'basic'),'position3');
	if($this->countModules('position7') && $p->get('position7', 'basic')) echo mod($p->get('position7', 'basic'),'position3');
	if($this->countModules('position8') && $p->get('position8', 'basic')) echo mod($p->get('position8', 'basic'),'position3');
	if($this->countModules('position9') && $p->get('position9', 'basic')) echo mod($p->get('position9', 'basic'),'position3');
	
	if($this->countModules('footer') && $p->get('footer', 'basic')) echo mod($p->get('footer', 'basic'),'footer','footer');
	if($this->countModules('footer1') && $p->get('footer1', 'basic')) echo mod($p->get('footer1', 'basic'),'footer1','footer');
	if($this->countModules('footer2') && $p->get('footer2m', 'basic')) echo mod($p->get('footer2m', 'basic'),'footer2','footer');
	if($this->countModules('footer3') && $p->get('footer3', 'basic')) echo mod($p->get('footer3', 'basic'),'footer3','footer');
	
	if($this->countModules('menu-footer') && $p->get('menu-footer', 'basic')) echo mod($p->get('menu-footer', 'basic'),'menu-footer', 'nav');
	if($this->countModules('credits') && $p->get('credits', 'basic')) echo mod($p->get('credits', 'basic'),'credits');
	if($this->countModules('last') && $p->get('last', 'basic')) echo mod($p->get('last', 'basic'),'last');
	if($this->countModules('lastscript') && $p->get('lastscript', 'null')) echo mod($p->get('script', 'null'),'script');
	
	include_once('scripts.php');
	
	echo '<a href="#0" class="cd-top">Top</a>';
	echo '</body></html>';
?>
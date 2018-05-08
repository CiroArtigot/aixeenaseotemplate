<?php

	/*------------------------------------------------------------------------
	# Bootla from Aixeena!
	# ------------------------------------------------------------------------
	# version		3.0.0
	# author    	Ciro Artigot for Aixeena.org
	# copyright 	Copyright (c) 2012 CiroArtigot. All rights reserved.
	# @license 		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
	# Websites 		http://aixeena.org/
	-------------------------------------------------------------------------
	*/
	
	// no direct access
	defined('_JEXEC') or die('Restricted access');
	
	$app = JFactory::getApplication();
	$document = JFactory::getDocument();
	
	
	
	$charset = $this->_charset;
	$lang = ' lang="'.$this->language.'"';
	$option   = strip_tags($app->input->getCmd('option', ''));
	$view     = strip_tags($app->input->getCmd('view', ''));
	$layout   = strip_tags($app->input->getCmd('layout', ''));
	$task     = strip_tags($app->input->getCmd('task', ''));
	$itemid   = (int) $app->input->getCmd('Itemid', '');
	$p = $this->params;
	$rand  = (int) $this->params->get('rand',10);
	$random = rand(0,$rand);
	$isuser = '';
	$user = JFactory::getUser();
	if (!$user->guest) $isuser = ' isuser';
	
	$article = 0;
	if($view=='article'&&$option=='com_content') $article = 1;
	
	$maincss = 'option-'.$option. ' view-'.$view.' itemid-'.$itemid . $isuser;

	//home
	$home = 0; 
	$menu = $app->getMenu();
	$menuactive = $menu->getActive();
	if(isset($menuactive)&&$menuactive->home) $home = 1; 

	// cache html5
	$cache = ''; 
	if($this->params->get('cache',0)) $cache = ' manifest="demo.appcache"';	

	// header sizes
	$rightspan = (int) $this->params->get('right-span',4);
	$leftspan = (int) $this->params->get('left-span',3);
	$componentspan = 12;
	if($this->countModules('right')) $componentspan = $componentspan - $rightspan;
	if($this->countModules('left')) $componentspan = $componentspan - $leftspan;
	if($componentspan<12) $componentspan = ' pull-left col-'.$componentspan;
	if($componentspan == 12) $componentspan = ' w-100';

?>
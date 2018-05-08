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
			
	defined('_JEXEC') or die;
	
	if($this->params->get('bootstrapcss','bootstrap.min.css') != '-1') $document->addStyleSheet(JUri::base() .'media/bootla/bootstrap4/css/'.$this->params->get('bootstrapcss','bootstrap.min.css'));

	if($this->params->get('css','template.css') != '-1') $document->addStyleSheet(JUri::base() .'media/bootla/bootla/css/'. $this->params->get('css','template.css'));
	
	if($this->params->get('gwf1','')) $document->addStyleSheet("https://fonts.googleapis.com/css?family=".$this->params->get('gwf1',''));
	
	if($this->params->get('gwf2','')) $document->addStyleSheet("https://fonts.googleapis.com/css?family=".$this->params->get('gwf2',''));

	if($this->params->get('customcss','')) $document->addStyleDeclaration($this->params->get('customcss',''));
	
	if($this->params->get('customcode','')) echo $this->params->get('customcode','');
	
?>
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

	if($this->params->get('jquery','-1') != '-1') $document->addScript(JUri::base() .'media/bootla/jquery/'.$this->params->get('jquery','-1'));
	else JHtml::_('jquery.framework'); 

	if($this->params->get('bootstrapjs','bootstrap.min.js') != '-1') $document->addScript(JUri::base() .'media/bootla/bootstrap4/js/'.$this->params->get('bootstrapjs','bootstrap.min.js'));
	
	if($this->params->get('js','template.js') != '-1') $document->addScript(JUri::base() .'media/bootla/bootla/js/'.$this->params->get('js','template.js'));

	if($this->params->get('customhtml','')) echo $this->params->get('customhtml','');
	
	if($this->params->get('customjs','')) echo '<script>'.$this->params->get('customjs','').'</script>';
	
?>
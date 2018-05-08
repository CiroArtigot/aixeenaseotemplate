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
	defined('_JEXEC') or die('Restricted access');
	
	function mod($style, $name, $tag = 'div') {
		$themodule = '';
		if($style == 'bootla' || $style == 'basic') $themodule .= '<'.$tag.' id="'.$name.'"><div class="precontainer p-'.$name.'">';
		if($style == 'bootla') $themodule .= '<div class="container c-'.$name.'"><div class="'.$name.' row">';
		$themodule .= '<jdoc:include type="modules" name="'.$name.'" style="'.$style.'" />';
		if($style == 'bootla') $themodule .= '<div class="clearfix"></div></div><div class="clearfix"></div></div>';
		if($style == 'bootla' || $style == 'basic') $themodule .= '</div></'.$tag.'>';
		return $themodule;
	}


?>
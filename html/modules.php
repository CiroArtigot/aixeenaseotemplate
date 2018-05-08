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

	
	function modChrome_null($module, &$params, &$attribs) {
		if ($module->content) echo $module->content;	
	}
	
	function modChrome_bootla($module, &$params, &$attribs)  {
		
		$moduleTag      = $params->get('module_tag', 'div');
		$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
		
		$moduleClass = '';
	
		if($params->get('moduleclass_sfx','')) $moduleClass = ' '.htmlspecialchars($params->get('moduleclass_sfx'));
		$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
		if($bootstrapSize) $moduleClass .=  ' col-' . $bootstrapSize.$moduleClass;
		if(!$bootstrapSize) $moduleClass = ' w-100'. $moduleClass;

		if(!empty ($module->content)) {
			
			echo  '<'.$moduleTag.' class="module'.$moduleClass.'">';
			if ((bool) $module->showtitle) echo '<'.$headerTag.' class="'.$params->get('header_class').'">'.$module->title.'</'.$headerTag.'>';
			echo $module->content;
			echo  '</'.$moduleTag.'>';
		}
	}
	
	
	function modChrome_basic($module, &$params, &$attribs)  {
		
		$moduleTag      = $params->get('module_tag', 'div');
		$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
		
		$moduleClass = '';
	
		if($params->get('moduleclass_sfx','')) $moduleClass = ' '.htmlspecialchars($params->get('moduleclass_sfx'));
		$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
		if($bootstrapSize) $moduleClass .=  ' col-' . $bootstrapSize.$moduleClass;
		if(!$bootstrapSize) $moduleClass = ' w-100'. $moduleClass;

		if(!empty ($module->content)) {
			
			echo  '<'.$moduleTag.' class="module'.$moduleClass.'">';
			if ((bool) $module->showtitle) echo '<'.$headerTag.' class="'.$params->get('header_class').'">'.$module->title.'</'.$headerTag.'>';
			echo $module->content;
			echo  '</'.$moduleTag.'>';
		}
	}
	
	function modChrome_content($module, &$params, &$attribs)  {
		
		$moduleTag      = $params->get('module_tag', 'div');
		$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
		
		$moduleClass = '';
	
		if($params->get('moduleclass_sfx','')) $moduleClass = ' '.htmlspecialchars($params->get('moduleclass_sfx'));
		$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
		if($bootstrapSize) $moduleClass .=  ' col-' . $bootstrapSize.$moduleClass;
		if(!$bootstrapSize) $moduleClass = ' w-100'. $moduleClass;

		if(!empty ($module->content)) {
			
			echo  '<'.$moduleTag.' class="module'.$moduleClass.'">';
			if ((bool) $module->showtitle) echo '<'.$headerTag.' class="'.$params->get('header_class').'">'.$module->title.'</'.$headerTag.'>';
			echo $module->content;
			echo  '</'.$moduleTag.'>';
		}
	}
	
	
?>
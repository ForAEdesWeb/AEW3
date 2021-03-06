<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_remoteimage
 *
 * @copyright   Copyright (C) 2012 Asikart. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Generated by AKHelper - http://asikart.com
 */

// no direct access
defined('_JEXEC') or die;

$doc 	= JFactory::getDocument();
$app 	= JFactory::getApplication();
$lang 	= JFactory::getLanguage();



// Include Helpers
// ========================================================================

// Core init, it can use by module, plugin or other component.
include_once JPath::clean( JPATH_ADMINISTRATOR . "/components/com_remoteimage/includes/core.php" ) ;

// Set default option to path helper, then AKHelperPath will helpe us get admin path.
AKHelper::_('path.setOption', 'com_remoteimage') ;

// Some useful settings
if( $app->isSite() ){
	
	// Include Admin language as global language.
	$lang->load('', JPATH_ADMINISTRATOR);
	$lang->load('com_remoteimage', JPATH_COMPONENT_ADMINISTRATOR );
	RemoteimageHelper::_('lang.loadAll', $lang->getTag());
	
	
	// Include Joomla! admin css
	RemoteimageHelper::_('include.sortedStyle', 'includes/css');
	
	
	// set Base to fix toolbar anchor bug
	$doc->setBase( JFactory::getURI()->toString() );
	
}else{
	RemoteimageHelper::_('lang.loadAll', $lang->getTag());
	RemoteimageHelper::_('include.sortedStyle', 'includes/css');
}


// Detect version
RemoteimageHelper::_('plugin.attachPlugins');

// Debug
define('AKDEBUG', RemoteimageHelper::_('system.getConfig', 'system.debug')) ;


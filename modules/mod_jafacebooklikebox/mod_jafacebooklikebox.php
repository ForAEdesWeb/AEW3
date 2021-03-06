<?php
/**
 * ------------------------------------------------------------------------
 * JA Facebook Like Box Module for J25 & J30
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites: http://www.joomlart.com - http://www.joomlancers.com
 * ------------------------------------------------------------------------
 */

// no direct access
defined('_JEXEC') or die('Restricted accessd');

//global $mainframe;


//123144964369587 is Joomlart's Page ID
$aParams['id'] = $params->get('jafacebookid', '123144964369587');
$aParams['width'] = $params->get('width', 300);
$aParams['height'] = $params->get('height', 400);
$aParams['connections'] = $params->get('connections', '10');
$aParams['stream'] = ($params->get('stream', 1)) ? 'true' : 'false';
$aParams['header'] = ($params->get('header', 1)) ? 'true' : 'false';
$aParams['colorscheme'] = ($params->get('colorscheme', 1)) ? 'light' : 'dark';
//$aParams['border_color'] = $params->get('border_color', 'white');

$sFacebookQuery = '';
foreach ($aParams as $key => $value) {
    $sFacebookQuery .= "{$key}={$value}&amp;";
}

require JModuleHelper::getLayoutPath($module->module, $params->get('layout', 'default'));
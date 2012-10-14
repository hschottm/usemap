<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Usemap
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Usemap',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Usemap\ContentImage' => 'system/modules/usemap/classes/ContentImageUsemap.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_image_usemap' => 'system/modules/usemap/templates',
));

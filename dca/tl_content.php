<?php 

/**
 * @copyright  © 2010-2013 Helmut Schottmüller 
 * @author     Helmut Schottmüller <https://github.com/hschottm>
 * @package    usemap 
 * @license    LGPL 
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['image'] = str_replace(';{protected_legend', ',usemap;{protected_legend', $GLOBALS['TL_DCA']['tl_content']['palettes']['image']);

$GLOBALS['TL_DCA']['tl_content']['fields']['usemap'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['usemap'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);



<?php

namespace Usemap;

/**
 * Class ContentImage
 *
 * Front end content element "image".
 * @copyright  © 2010-2013 Helmut Schottmüller 
 * @author     Helmut Schottmüller <https://github.com/hschottm>
 * @package    Controller
 */
class ContentImage extends \Contao\ContentImage
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_image_usemap';


	/**
	 * Add an image to a template
	 * @param object
	 * @param array
	 * @param integer
	 * @param string
	 */
	protected function compile()
	{
		$this->addImageToTemplate($this->Template, $this->arrData);
		if (strlen($this->usemap))
		{
			$this->Template->usemap = html_entity_decode($this->usemap, ENT_QUOTES, $GLOBALS['TL_CONFIG']['characterSet']);
		}
	}
}


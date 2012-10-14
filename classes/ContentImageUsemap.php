<?php

namespace Usemap;

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2010
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Frontend
 * @license    LGPL
 * @filesource
 */


/**
 * Class ContentImage
 *
 * Front end content element "image".
 * @copyright  Leo Feyer 2005-2010
 * @author     Leo Feyer <http://www.contao.org>
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

?>
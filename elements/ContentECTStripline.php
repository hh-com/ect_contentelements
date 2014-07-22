<?php

/**
 * 
 * @package ect_contentelements
 * Copyright (C) 2014 Harald Huber
 * http://www.harald-huber.com
 *
*/

namespace Contao;

class ContentECTStripline extends \ContentElement
{
	protected $strTemplate = 'ce_stripeline';

	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new \BackendTemplate('be_wildcard');

			$objTemplate->wildcard = $GLOBALS['TL_LANG']['CTE']['ECTStripline'][1];
			$objTemplate->title = $GLOBALS['TL_LANG']['CTE']['ECTStripline'][0];

			return $objTemplate->parse();
		}
		return parent::generate();
	}
	
	protected function compile()
	{
	
	}
}


?>
<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package ect_contentelements
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'Contao\ContentIconHeadlineText' => 'system/modules/ect_contentelements/elements/ContentIconHeadlineText.php',
	'Contao\ContentSchemaOrg'        => 'system/modules/ect_contentelements/elements/ContentSchemaOrg.php',
	'Contao\ContentECTStripline'     => 'system/modules/ect_contentelements/elements/ContentECTStripline.php',

	// Widgets
	'Contao\IconSelect'              => 'system/modules/ect_contentelements/widgets/IconSelect.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_schemaorg'        => 'system/modules/ect_contentelements/templates',
	'ce_stripeline'       => 'system/modules/ect_contentelements/templates',
	'be_iconselect'       => 'system/modules/ect_contentelements/templates',
	'ce_iconheadlinetext' => 'system/modules/ect_contentelements/templates',
));

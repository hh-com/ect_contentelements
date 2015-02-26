<?php

/**
 * 
 * @package ect_contentelements
 * Copyright (C) 2015 Harald Huber
 * http://www.harald-huber.com
 *
*/

# Include font-awesome.css in Frontend and Backend -> 
$GLOBALS['TL_CSS'][] = 'system/modules/ect_contentelements/assets/fontawesome/css/font-awesome.min.css||static';
$GLOBALS['TL_CSS'][] = 'system/modules/ect_contentelements/assets/fontawesome/css/font-awesome-social.min.css||static';
                
# Widget
$GLOBALS['BE_FFL']['iconSelect'] = 'IconSelect';

# Content Elements 	
$GLOBALS['TL_CTE']['contentElements']['IconHeadlineText'] = 'ContentIconHeadlineText';
$GLOBALS['TL_CTE']['contentElements']['SchemaOrg'] = 'ContentSchemaOrg';
$GLOBALS['TL_CTE']['contentElements']['ECTStripline'] = 'ContentECTStripline';

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['ect']['ectheader'] = 'ModuleECTHeader';


# Add FontAwesome to CE List
$GLOBALS['TL_HOOKS']['getContentElement'][] = array('XtndElements', 'addClass2List');

?>
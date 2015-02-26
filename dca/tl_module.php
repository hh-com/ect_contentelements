<?php

/**
 * 
 * @package ect_contentelements
 * Copyright (C) 2015 Harald Huber
 * http://www.harald-huber.com
 *
*/

/* Social Media Buttons */
$socialButtons = array('ectsocials_facebook', 'ectsocials_twitter', 'ectsocials_google', 'ectsocials_pinterest', 
    'ectsocials_linkedin', 'ectsocials_foursquare', 'ectsocials_instagram','ectsocials_mail' );

 /* Header - Configuration in CTE */
$GLOBALS['TL_DCA']['tl_module']['palettes']['ectheader'] = 
    '{title_legend},name,headline,type;'
        . '{ect_logo_legend},singleSRC,ect_hlogo_text;'
        . '{ect_hphone_legend},ect_hphone_text,ect_hphone_link;'
        . '{ect_haddress_legend},ect_haddress_text,ect_haddress_link;'
        . '{ect_hsearch_legend},form;'
        . '{ect_social_legend},ectsocials_show,'.implode(',',$socialButtons).',ectsocials_print;'
        . '{ect_hhtml_legend:hide},ectsocials_html;'
        . '{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['singleSRC'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['ect_hlogo_src'],
    'exclude'                 => true,
    'inputType'               => 'fileTree',
    'eval'                    => array('fieldType'=>'radio', 'filesOnly'=>true, 'mandatory'=>true, 'tl_class'=>'clr w50'),
    'sql'                     => "binary(16) NULL"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['ect_hlogo_text'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['ect_hlogo_text'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'default'                 => '00416661234567890',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50 m12'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['ect_hphone_link'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['ect_hphone_link'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'default'                 => '00416661234567890',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['ect_hphone_text'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['ect_hphone_text'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['ect_haddress_link'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['ect_haddress_link'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50 wizard'),
    'wizard' => array
    (
            array('tl_module_ect', 'pagePicker')
    ),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['ect_haddress_text'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['ect_haddress_text'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

/* include blank option in form selection */
$GLOBALS['TL_DCA']['tl_module']['fields']['form']['load_callback'][] = array('tl_module_ect', 'changeEval');

$GLOBALS['TL_DCA']['tl_module']['fields']['ectsocials_show'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['ectsocials_show'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'default'                 => true,
	'eval'                    => array('tl_class' => 'long'),
	'sql'                     => "char(1) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_module']['fields']['ectsocials_html'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['ectsocials_html'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'textarea',
    'eval'                    => array('allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html', 'helpwizard'=>true),
    'explanation'             => 'insertTags',
    'sql'                     => "text NULL"

);

/* Create fields for social buttons*/
foreach ($socialButtons as $social){

    $GLOBALS['TL_DCA']['tl_module']['fields'][$social] = array
    (
        'label'                   => &$GLOBALS['TL_LANG']['tl_module'][$social],
        'exclude'                 => true,
        'search'                  => true,
        'inputType'               => 'text',
        'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
        'sql'                     => "varchar(255) NOT NULL default ''"
    );
}
$GLOBALS['TL_DCA']['tl_module']['fields']['ectsocials_print'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['ectsocials_print'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'default'                 => true,
	'eval'                    => array('tl_class' => 'w50'),
	'sql'                     => "char(1) NOT NULL default ''",
);


class tl_module_ect extends Backend
{
    public function pagePicker(DataContainer $dc)
    {
            return ' <a href="contao/page.php?do=' . Input::get('do') . '&amp;table=' . $dc->table . '&amp;field=' . $dc->field . '&amp;value=' . str_replace(array('{{link_url::', '}}'), '', $dc->value) . '" title="' . specialchars($GLOBALS['TL_LANG']['MSC']['pagepicker']) . '" onclick="Backend.getScrollOffset();Backend.openModalSelector({\'width\':768,\'title\':\'' . specialchars(str_replace("'", "\\'", $GLOBALS['TL_LANG']['MOD']['page'][0])) . '\',\'url\':this.href,\'id\':\'' . $dc->field . '\',\'tag\':\'ctrl_'. $dc->field . ((Input::get('act') == 'editAll') ? '_' . $dc->id : '') . '\',\'self\':this});return false">' . Image::getHtml('pickpage.gif', $GLOBALS['TL_LANG']['MSC']['pagepicker'], 'style="vertical-align:top;cursor:pointer"') . '</a>';
    }
    
    public function changeEval($varValue, DataContainer $dc)
    {

        if($dc->activeRecord->type == "ectheader")
        {
            $GLOBALS['TL_DCA']['tl_module']['fields']['form']['eval']['blankOptionLabel'] = $GLOBALS['TL_LANG']['tl_module']['ect_hsearch_blankOptionLabel'] ;
            $GLOBALS['TL_DCA']['tl_module']['fields']['form']['eval']['includeBlankOption'] = true;
            $GLOBALS['TL_DCA']['tl_module']['fields']['form']['label'][1] = $GLOBALS['TL_LANG']['tl_module']['ect_hsearch_form'];

        }
        return $varValue;
    }
}
?>
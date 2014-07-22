<?php

/**
 * 
 * @package ect_contentelements
 * Copyright (C) 2014 Harald Huber
 * http://www.harald-huber.com
 *
*/

/*Create CE for Schema.org Data (ALPHA)*/
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = "schemaOrgType";

$GLOBALS['TL_DCA']['tl_content']['palettes']['SchemaOrg'] = '{type_legend},type,headline;{schema_legend},schemaOrgType;{reference_legend:hide},schemaOrgItemRef;{protected_legend:hide},protected;{expert_legend:hide},guests,invisible,cssID,space';

$GLOBALS['TL_DCA']['tl_content']['subpalettes']['schemaOrgType_person'] =
('schemaOrg_name,schemaOrg_email,schemaOrg_url,schemaOrg_birthDate,schemaOrg_description,schemaOrg_address_postOfficeBoxNumber,schemaOrg_address_streetAddress,schemaOrg_address_postalCode,schemaOrg_address_addressLocality,schemaOrg_address_addressRegion,schemaOrg_address_addressCountry,schemaOrg_telephone,schemaOrg_faxNumber;{schemaImage_legend:hide},schemaOrg_image,size;schemaOrg_htmlContainer;'
);
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['schemaOrgType_organization'] =
(	'schemaOrgTypeOfOrganisation,schemaOrgTypeOfOrganisationTxt,schemaOrg_name,schemaOrg_founder,schemaOrg_email,schemaOrg_url,schemaOrg_description,schemaOrg_address_postOfficeBoxNumber,schemaOrg_address_streetAddress,schemaOrg_address_postalCode,schemaOrg_address_addressLocality,schemaOrg_address_addressRegion,schemaOrg_address_addressCountry,schemaOrg_telephone,schemaOrg_faxNumber,schemaOrg_taxID,schemaOrg_fbgericht,schemaOrg_vatID;{schemaImage_legend:hide},schemaOrg_image,size;schemaOrg_htmlContainer;'
);
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['schemaOrgType_single'] =
(	'schemaOrg_name,schemaOrg_birthDate,schemaOrg_founder,schemaOrg_email,schemaOrg_url,schemaOrg_description,schemaOrg_address_postOfficeBoxNumber,schemaOrg_address_streetAddress,schemaOrg_address_postalCode,schemaOrg_address_addressLocality,schemaOrg_address_addressRegion,schemaOrg_address_addressCountry,schemaOrg_telephone,schemaOrg_faxNumber,schemaOrg_taxID,schemaOrg_fbgericht,schemaOrg_vatID;{schemaImage_legend:hide},schemaOrg_image, size;schemaOrg_htmlContainer;'
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrgType'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrgType'],
	'exclude'                 => true,
	'default'                 => 'person',
	'inputType'               => 'select',
	'options'                 => array('person', 'organization', 'single'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['schemaOrgTypeOption'],
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "varchar(32) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_htmlContainer'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_htmlContainer'],
		'exclude'                 => true,
		'search'                  => true,
		'inputType'               => 'textarea',
		'eval'                    => array('mandatory'=>false, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace|html', 'helpwizard'=>true),
		'explanation'             => 'insertTags',
		'sql'                     => "mediumtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrgTypeOfOrganisation'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrgTypeOfOrganisation'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('Organization', 'LocalBusiness', 'NGO', 'Corporation', 'GovernmentOrganization', 'EducationalOrganization', 'SportsTeam', 'PerformingGroup'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['schemaOrgTypeOfOrganisationOption'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrgTypeOfOrganisationTxt'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrgTypeOfOrganisationTxt'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_name'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_name'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_founder'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_founder'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_url'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_url'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50', 'decodeEntities'=>true,'multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_description'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_description'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'textarea',
	'eval'                    => array('mandatory'=>false, 'helpwizard'=>false, 'style'=>'height:66px', 'tl_class'=>'clr'),
	'sql'                     => "mediumtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_birthDate'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_birthDate'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'date', 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
	'sql'                     => "varchar(10) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_address_postOfficeBoxNumber'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_postOfficeBoxNumber'],
	'exclude'                 => true,
	'search'                  => true,
	'default'                  => array('PO Box','1234'),
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_address_streetAddress'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_streetAddress'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_address_postalCode'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_postalCode'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'w50', 'nospace'=>false,'multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_address_addressLocality'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_addressLocality'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_address_addressRegion'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_addressRegion'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_address_addressCountry'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_addressCountry'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_email'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_email'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_telephone'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_telephone'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_faxNumber'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_faxNumber'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_taxID'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_taxID'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_fbgericht'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_fbgericht'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_vatID'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_vatID'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50','multiple'=>true, 'size'=>2),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
if(version_compare(VERSION, '3.2', '<'))
{
	$sql = "varchar(255) NOT NULL default ''";
}
else
{
	$sql = "binary(16) NULL";
}

$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrg_image'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrg_image'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'mandatory'=>false, 'tl_class'=>'clr w50'),
	'sql'                     => $sql,
	'save_callback' => array
	(
		array('tl_content', 'storeFileMetaInformation')
	)
);
$GLOBALS['TL_DCA']['tl_content']['fields']['schemaOrgItemRef'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['schemaOrgItemRef'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50 m12'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

 /* Icon Headline */
$GLOBALS['TL_DCA']['tl_content']['palettes']['IconHeadlineText'] = '{type_legend},type,headline;{icon_legend},iconSelect,floating,centerIcon,iconSize,iconRotate;{link_legend},url,target;{text_legend},text;{protected_legend:hide},protected;{expert_legend:hide},guests,invisible,cssID,space';

# Include font-awesome.css in Frontend and Backend
$GLOBALS['TL_CSS'][] = 'system/modules/ect_contentelements/assets/fontawesome/css/font-awesome.min.css||static';
$GLOBALS['TL_CSS'][] = 'system/modules/ect_contentelements/assets/fontawesome/css/font-awesome-social.min.css||static';

$GLOBALS['TL_DCA']['tl_content']['fields']['iconSelect'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['iconSelect'],
	'exclude'                 => true,
	'inputType'               => 'iconSelect',
	'sql'                     => "varchar(56) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['centerIcon'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['centerIcon'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['iconSize'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['iconSize'],
	'default'                 => 100,
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array(200,150,100,80,60),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['iconSizeOption'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "int(10) unsigned NOT NULL default '100'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['iconRotate'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['iconRotate'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

 /* Separator / Stripline */
$GLOBALS['TL_DCA']['tl_content']['palettes']['ECTStripline'] = '{type_legend},type;{expert_legend:hide},guests,invisible,cssID,space';

$GLOBALS['TL_DCA']['tl_content']['fields']['floating']['load_callback'][] = array('tl_content_ect_ext', 'changeLangText');
$GLOBALS['TL_DCA']['tl_content']['fields']['text']['load_callback'][] = array('tl_content_ect_ext', 'removeTextMandatory');
$GLOBALS['TL_DCA']['tl_content']['fields']['url']['load_callback'][] = array('tl_content_ect_ext', 'removeTextMandatory');

class tl_content_ect_ext extends Backend
{	
	public function changeLangText4Schema($varValue, DataContainer $dc)
	{
		return $varValue;
	}
	public function changeLangText($varValue, DataContainer $dc)
	{
		if($dc->activeRecord->type == "IconHeadlineText")
		{
			$GLOBALS['TL_DCA']['tl_content']['fields']['floating']['label'] = $GLOBALS['TL_LANG']['tl_content']['iconFloating'];
		}
		return $varValue;
	}
	public function removeTextMandatory($varValue, DataContainer $dc)
	{
		if($dc->activeRecord->type == "IconHeadlineText")
		{
			$GLOBALS['TL_DCA']['tl_content']['fields']['url']['eval']['mandatory'] = false;
			$GLOBALS['TL_DCA']['tl_content']['fields']['text']['eval']['mandatory'] = false;
		}
		return $varValue;
	}
}
?>
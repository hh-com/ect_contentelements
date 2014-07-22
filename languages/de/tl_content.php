<?php

/**
 * 
 * @package ect_contentelements
 * Copyright (C) 2014 Harald Huber
 * http://www.harald-huber.com
 *
*/

	$GLOBALS['TL_LANG']['CTE']['contentElements']  = 'Easy Contao Themes - Elements';
	$GLOBALS['TL_LANG']['CTE']['IconHeadlineText']   = array('Icons (Headline/Text)', 'Fügt ein Icon mit Headline und Text ein.');
	$GLOBALS['TL_LANG']['CTE']['SchemaOrg']   = array('Schema.org Item', 'Fügt Informationen mit Schema.org Auszeichnung hinzu.');
	$GLOBALS['TL_LANG']['CTE']['ECTStripline']  = array('Trennlinie', "F&uuml;gt eine Trennlinie (100%) ein.");
	
	$GLOBALS['TL_LANG']['tl_content']['icon_legend'] = "Icons";
	$GLOBALS['TL_LANG']['tl_content']['icon_legend'] = "Icons";
	$GLOBALS['TL_LANG']['tl_content']['schema_legend'] = "Schema.org";
	$GLOBALS['TL_LANG']['tl_content']['reference_legend'] = "Schema.org Referenz (itemref)";
	$GLOBALS['TL_LANG']['tl_content']['schemaImage_legend'] = "Schema.org Image/Logo (Person/Organisation)";
	$GLOBALS['TL_LANG']['tl_content']['iconSelect'] = array("Icon-Auswahl","W&auml;hlen Sie hier das gew&uuml;nschte Icon aus.");
	$GLOBALS['TL_LANG']['tl_content']['centerIcon'] = array("Zentrieren","Den Inhalt zentriert ausgeben.");
	$GLOBALS['TL_LANG']['tl_content']['iconFloating'] = array("Icon-Ausrichtung zur Headline","Bitte legen Sie fest, wie das Icon ausgerichtet werden soll.");
	$GLOBALS['TL_LANG']['tl_content']['iconRotate'] = array("Icon Rotation","Das Icon rotiert um die eigene Achse.");
	$GLOBALS['TL_LANG']['tl_content']['currentIcon'] = "Aktuelle Auswahl: ";
	$GLOBALS['TL_LANG']['tl_content']['iconSize'] = array("Icon-Gr&ouml;&szlig;e in %","W&auml;hlen Sie die Gr&ouml;&szlig;e des Icons (Angabe in Prozent). ");

	$GLOBALS['TL_LANG']['tl_content']['iconSizeOption'][200] = "200%";
	$GLOBALS['TL_LANG']['tl_content']['iconSizeOption'][150] = "150%";
	$GLOBALS['TL_LANG']['tl_content']['iconSizeOption'][100] = "100%";
	$GLOBALS['TL_LANG']['tl_content']['iconSizeOption'][80] = "80%";
	$GLOBALS['TL_LANG']['tl_content']['iconSizeOption'][60] = "60%";
	
	$GLOBALS['TL_LANG']['tl_content']['schemaOrgType'] = array('Schema Auswahl','Bitte wählen Sie das gewünschten Schema aus.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrgTypeOption']['person'] = "Person";
	$GLOBALS['TL_LANG']['tl_content']['schemaOrgTypeOption']['organization'] = "Organisation";
	$GLOBALS['TL_LANG']['tl_content']['schemaOrgTypeOption']['single'] = "Einzelelement";
	
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_name'] = array('Name (Beschreibung/Name)','Tragen Sie den Namen ein.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrgTypeOfOrganisation'] = array('Organisations Typ','Bitte wählen Sie den gewünschten Type aus.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrgTypeOfOrganisationOption'] = array (
		'Organization' => "Generell",
		'LocalBusiness' => "Lokales Gewerbe",
		'NGO' => "NGO",
		'Corporation' => "Gesellschaft",
		'GovernmentOrganization' => "Staatlich",
		'EducationalOrganization' => "Schule",
		'SportsTeam' => "Sport Team",
		'PerformingGroup' => "Performing Group"
	);
	$GLOBALS['TL_LANG']['tl_content']['schemaOrgTypeOfOrganisationTxt'] = array('Organisations Typ (manuell)','Tragen Sie hier einen Organisations Typ ein, wenn der gewünschte nicht in der Auswahl zu finden ist. Die komplette Liste finden Sie auf http://schema.org/docs/full.html');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrgOrganisationName'] = array('Name der Organisation','Tragen Sie hier den Namen der Organisation ein.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_founder'] = array('Gr&uuml;nder/Inhaber  (Beschreibung/Inhaber)','Name des Gr&uuml;nders der Organisation.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_url'] = array('Website-URL','Tragen Sie hier die Url ein (http://www.google.com).');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_birthDate'] = array('Geburtsdatum','Tragen Sie hier das Geburtsdatum ein.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_bithday'] = 'Geburtsdatum';
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_description'] = array('Beschreibung','Tragen Sie hier eine Beschreibung ein.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_postOfficeBoxNumber'] = array('Postfach','Tragen Sie hier das Postfach ein. Im linken Feld können Sie einen Text vor dem Postfach eintragen.'); 
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_streetAddress'] = array('Adresse','Tragen Sie hier die Adresse ein.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_postalCode'] = array('Postleitzahl','Tragen Sie hier die Postleitzahl ein.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_addressLocality'] = array('Stadt','Tragen Sie hier die Stadt(Ort) ein.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_addressRegion'] = array('Region','Tragen Sie hier die Region ein.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_address_addressCountry'] = array('Land','Tragen Sie hier das Land ein.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_email'] = array('E-Mail','Tragen Sie hier die E-Mailadresse ein.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_telephone'] = array('Telefon (Format: 0041 666 123456789)','Tragen Sie hier die Telefonnummer ein.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrgItemRef'] = array('Referenz ID\'s','Tragen Sie hier Referenz-ID\'s zu Items au&szlig;erhalb des Schemas ein. Vermeiden Sie doppelte Elemente auf einer Seite! Die ID des gewünschten Elements finden Sie im Quellcode.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_faxNumber'] = array('Faxnummer','Tragen Sie hier die Faxnummer ein.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_taxID'] = array('Firmenbuchnummer','Tragen Sie hier die Firmenbuchnummer  ein.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_fbgericht'] = array('Firmenbuchgericht','Tragen Sie hier das Firmenbuchgericht ein. (Kein Schema!)');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_vatID'] = array('Umsatzsteuer-Identifikationsnummer','Tragen Sie hier die Umsatzsteuer-Identifikationsnummer ein.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_image'] = array('Image/Logo','W&auml;hlen Sie ein Image/Logo im endg&uuml;ltigen Format aus.');
	$GLOBALS['TL_LANG']['tl_content']['schemaOrg_htmlContainer'] = array('Individueller HTML-Code','Fügen Sie Ihren individuellen HTML-Code ein. Achten Sie auf "Erlaubte HTML-Tags" und erweitern Sie bei Bedarf die Einstellungen. Generatoren: http://www.microdatagenerator.com oder http://microdatagenerator.org');
	
?>
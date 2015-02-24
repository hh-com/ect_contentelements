<?php

/**
 * 
 * @package ect_contentelements
 * Copyright (C) 2014 Harald Huber
 * http://www.harald-huber.com
 *
*/

namespace Contao;

class ContentSchemaOrg extends \ContentElement
{
	protected $strTemplate = 'ce_schemaorg';
	
	protected function compile()
	{ 
		# This Schema.org Module should be very EASY TO USE! So there are just PERSON and ORGANISATION ATM
		$itemtype = false;
		$this->Template->itemtypeAddress = false;
		$this->Template->imageProp = "image";	
		$this->Template->htmlContainer = (TL_MODE == 'FE') ? $this->htmlContainer : htmlspecialchars($this->htmlContainer);
		
		if ($this->schemaOrgType  == "person")
		{
			$itemtype = $this->schemaOrgType;
			$this->Template->data = $this->generateItemProp($GLOBALS['TL_DCA']['tl_content']['subpalettes']['schemaOrgType_person'], $single=false);
		}
		elseif ($this->schemaOrgType  == "organization")
		{
			if($this->schemaOrgTypeOfOrganisationTxt)
				$itemtype = $this->schemaOrgTypeOfOrganisationTxt;
			else
				$itemtype = $this->schemaOrgTypeOfOrganisation;
			$this->Template->imageProp = "logo";			
			$this->Template->data = $this->generateItemProp($GLOBALS['TL_DCA']['tl_content']['subpalettes']['schemaOrgType_organization'], $single=false);
		}
		elseif ($this->schemaOrgType  == "single")
		{
			$this->Template->data = $this->generateItemProp($GLOBALS['TL_DCA']['tl_content']['subpalettes']['schemaOrgType_single'], $single=true);
			$itemtype = false;
		}
		else
		{
			$itemtype = false;
		}
		$this->Template->itemtype = $itemtype;
	}
	
	protected function generateItemProp($schema, $single)
	{
		$itemArr = array();
		foreach ($this->arrData As $key => $value)
		{
			if (strpos($key, 'schemaOrg_') !== false && $this->valueSet($key) != false && in_array($key, $this->multiexplode( array(',',';'), $schema )) )
			{
				$data = ($this->valueSet($key));
				$itemprop = substr(strrchr($key,'_'),1); #itemprop Value
				
				# Add span tag to Label
				if($data[0] != "")
					$preData = "<span class='schema_pre pre_".$key."'>".$data[0]."</span>";
				else
					$preData = false;
				
				# Add Reference ID for Single Elements
				if ($single)
					$refId  = "id='".$key."_".$this->id."'";
				else
					$refId = false;
				
				if(strpos($key,'url') !== false) 
				{
					if(strpos($data[1],'http://') !== false)
					{
						$name = (substr ($data[1], 7));
						#$externalLink = 'onclick="window.open(this.href); return false;"';
					}
				}
				else
					$name = false;
				
				$itemArr[$itemprop] = array
				(
					'pre' => $preData,
					'value' => $data[1],
					'referid' => $refId,
					'size' => $data[3],
					'name' => $name
				);
				if(strpos($key,'address') !== false) 
					$this->Template->itemtypeAddress = true;
			}
		}
		return $itemArr;	
	}
		
	protected function valueSet($item)
	{
		$dataArr = array();
		$data = unserialize($this->$item);
	
		if (is_array($data)) # if serialized
		{
			if ($data[0] == "" && $data[1] == "")
			{
				$dataArr = false;
			}
			else
			{
				$dataArr[0] = $data[0];
				$dataArr[1] = $data[1];
			}
		}
		elseif ($this->$item != "")
		{

			$dataArr[0] = false;
			$dataArr[1] = $this->$item;
			
		}
		else
		{
			$dataArr = false;
		}
		#Check Images & generate Image-Link
		if ($item == "schemaOrg_image") 
		{
			if($this->getImageLink($this->$item) != NULL)
			{
				$imageData = $this->getImageLink($this->$item);
				$dataArr[1] = $imageData[0];
				if ( $imageData[1] )
					$dataArr[3] = "style='width:$imageData[1]px; '";
				else	
					$dataArr[3] = false;
			}
			else
			{
				$dataArr = false;
			}
		}
		return $dataArr;
	}

	private function multiexplode ($delimiters,$string)
	{
    
		$ready = str_replace($delimiters, $delimiters[0], $string);
		$launch = explode($delimiters[0], $ready);
		return  $launch;
	}
	
	private function getImageLink($schemaOrg_image)
	{
		$imageData = array();
		$imgSize = false;
		if ($this->size != '')
		{
			$size = deserialize($this->size);
			if ($size[0] > 0 || $size[1] > 0)
			{
				$imgSize = $size;
			}
		}
		
		
		if ($schemaOrg_image != '')
		{	
			# Contao Version < 3.2		
			if(version_compare(VERSION, '3.2', '<'))
			{
				if (!is_numeric($this->schemaOrg_image))
				{
					$this->Template->text = '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
				}
				else
				{
					$objModel = \FilesModel::findByPk($schemaOrg_image);
					
					if ($objModel !== null && is_file(TL_ROOT . '/' . $objModel->path))
					{ 
						if ($imgSize)
						{	
							$imageData [0] = \Image::get($objModel->path, $imgSize[0], $imgSize[1], $imgSize[2]);
							$imageData [1] = $imgSize[0];
							$imageData [2] = $imgSize[1];
							return $imageData;
						}
						else
						{
							$imageData [0] = $objModel->path;
							return 	$imageData;
						}
					}
					return "";
				}
			}
			else
			{
				$objFile = \FilesModel::findByUuid($schemaOrg_image);

				if ($objFile === null)
				{
					if (!\Validator::isUuid($schemaOrg_image))
					{
						return '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
					}

					return '';
				}

				if (!is_file(TL_ROOT . '/' . $objFile->path))
				{
					return '';
				}
				
				if ($imgSize)
				{	
					$imageData [0] = \Image::get($objFile->path, $imgSize[0], $imgSize[1], $imgSize[2]);
					$imageData [1] = $imgSize[0];
					$imageData [2] = $imgSize[1];
					return $imageData;
				}
				else
				{
					$imageData [0] = $objFile->path;
					return 	$imageData;
				}
			}
		}
		if ($schemaOrg_image == '')
		{
			return '';
		}
	}
}
?>
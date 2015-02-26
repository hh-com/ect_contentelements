<?php
/**
 * 
 * @package ect_contentelements
 * Copyright (C) 2015 Harald Huber
 * http://www.harald-huber.com
 *
*/

class ModuleECTHeader extends \Module
{

    /**
    * Template
    * @var string
    */
    protected $strTemplate = 'mod_ectheader';
    
    protected function compile()
    {  
       
        /*
         *  Prepare Logo
         */
        $objFile = \FilesModel::findByUuid($this->singleSRC);
        if ($objFile != NULL)
        {
            #$imgSize = getimagesize($objFile->path);
            #$strReturn = $this->generateImage($this->getImage($objFile->path, $imgSize[0], $imgSize[1], 'proportional'), $this->ect_hlogo_text);
            #$this->Template->hlogo =  $strReturn;
            $this->Template->hlogo =  $objFile;
            
        }
        
         /*
         *  Todo: Sticky  Header
         */
        
    }
    
}
?>
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
    
    public function fvffgenerate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate = new BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### PAGE IMAGE ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'typolight/main.php?do=modules&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

        $strBuffer = parent::generate();

        if ($this->Template->src == '') {
            return '';
        }

        return $strBuffer;
    }
    
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
        

         #var_dump($objFile);
        
    }
    
}
?>
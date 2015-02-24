<?php

/**
 * 
 * @package ect_contentelements
 * Copyright (C) 2014 Harald Huber
 * http://www.harald-huber.com
 *
*/

class XtndElements extends Frontend
{
    public function addClass2List(ContentModel $objModel, $strBuffer, $objElement)
    {
        
        if ($objModel->type == "alias")
            $objModel = $this->checkRecursive($objModel->cteAlias, $objModel->id);

        if ($objModel->type == "list")
        {
            if($objModel->iconShow == 1)
            {
                foreach ($objElement->Template->items AS $key => $listItem)
                {
                    $temp[$key] = $listItem;
                    $temp[$key]['class'] = $temp[$key]['class']." fIcon fas_".$objModel->id;
                }
                
                /* Include Icon CSS */
                $iconCss = 
		'
		<style>
		li.fas_'.$objModel->id.':before {
                    content: "\\'.$objModel->iconSelect.'";
                    padding-right: 7px;
		}
		</style>
		';
                
                $GLOBALS['TL_CSS'][] = 'system/modules/ect_contentelements/assets/css/fontIcon.css||static';
                
                if(TL_MODE == 'BE')
			$GLOBALS['TL_MOOTOOLS'][] = $iconCss;
		else
			$GLOBALS['TL_HEAD'][] = $iconCss;  
                
                $objElement->Template->items = $temp;
                $objElement->Template->class = $objElement->Template->class." ficon_list";
                
                $strBuffer = $objElement->Template->parse();
            }
        }
       
       
       
     return $strBuffer."hf hlkj hlkjh flkjh afslkjh ldfsakh lkaj hjk";
    }
    
    private function checkRecursive($cteAlias, $cteId)
    {
        $cteId;
        $objRow = \ContentModel::findByPk($cteAlias);
        if ($objRow->type != "alias")
           return $objRow;
        
        $cteId = $objRow->cteAlias;
        $this->checkRecursive($objRow->type, $objRow->cteAlias, $objRow->id);

        return \ContentModel::findByPk($cteId);  
    }
    
    public function addClass2Listxxx($strContent, $strTemplate)
    {
        
            
            
        if ($strTemplate == 'ce_list')
        {
            echo $strContent;
           
            // Ausgabe modifizieren
        }

        return $strContent;
    }
    
    
}
?>
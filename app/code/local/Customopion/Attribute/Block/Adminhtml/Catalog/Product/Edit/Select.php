<?php
class Customopion_Attribute_Block_Adminhtml_Catalog_Product_Edit_Select extends Mage_Adminhtml_Block_Catalog_Product_Edit_Tab_Options_Type_Select
{   

	public function __construct()
    {
        parent::__construct();
        $this->setTemplate('custom/select.phtml'); 
        $this->setCanEditPrice(true);
        $this->setCanReadPrice(true);
    }
	
}

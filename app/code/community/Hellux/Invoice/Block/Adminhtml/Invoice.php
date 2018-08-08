<?php

class Hellux_Invoice_Block_Adminhtml_Invoice extends Mage_Adminhtml_Block_Template
{

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('hellux/invoice/invoice.phtml');
    }
	
	protected function _prepareLayout()
    {
	
    }
	
	protected function getOrder()
	{
		 return Mage::registry('sales_order');
	}
		
	
}
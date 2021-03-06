<?php
class Devinc_Dailydeal_Block_Adminhtml_Dailydeal extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_dailydeal';
    $this->_blockGroup = 'dailydeal';
    $this->_headerText = Mage::helper('dailydeal')->__('Deal Manager');
    $this->_addButtonLabel = Mage::helper('dailydeal')->__('Add Deal');	
	if (Mage::getStoreConfig('dailydeal/configuration/refresh_rate')!=0) {
    	Mage::getModel('dailydeal/dailydeal')->refreshDeals(); 	
    }
    
	parent::__construct();	
  }
}
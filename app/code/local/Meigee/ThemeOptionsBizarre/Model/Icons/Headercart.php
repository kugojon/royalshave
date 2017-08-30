<?php
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsBizarre_Model_Icons_Headercart
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'fa-shopping-cart', 'label'=>Mage::helper('ThemeOptionsBizarre')->__('fa-shopping-cart')),
            array('value'=>'fa-download', 'label'=>Mage::helper('ThemeOptionsBizarre')->__('fa-download')),
            array('value'=>'fa-truck', 'label'=>Mage::helper('ThemeOptionsBizarre')->__('fa-truck')),
            array('value'=>'fa-barcode', 'label'=>Mage::helper('ThemeOptionsBizarre')->__('fa-barcode')),
            array('value'=>'fa-archive', 'label'=>Mage::helper('ThemeOptionsBizarre')->__('fa-archive')),
            array('value'=>'fa-suitcase', 'label'=>Mage::helper('ThemeOptionsBizarre')->__('fa-suitcase'))
        );
    }

}
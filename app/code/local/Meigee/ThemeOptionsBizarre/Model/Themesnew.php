<?php 
/**
 * Magento
 *
 * @author    Meigeeteam http://www.meaigeeteam.com <nick@meaigeeteam.com>
 * @copyright Copyright (C) 2010 - 2012 Meigeeteam
 *
 */
class Meigee_ThemeOptionsBizarre_Model_Themesnew
{
    public function toOptionArray()
    {
        return Mage::getModel('core/design_source_design')->getAllOptions();
    }

}
<?php
/**
 * aheadWorks Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://ecommerce.aheadworks.com/AW-LICENSE.txt
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This software is designed to work with Magento community edition and
 * its use on an edition other than specified is prohibited. aheadWorks does not
 * provide extension support in case of incorrect edition use.
 * =================================================================
 *
 * @category   AW
 * @package    AW_Sarp2
 * @version    2.1.1
 * @copyright  Copyright (c) 2010-2012 aheadWorks Co. (http://www.aheadworks.com)
 * @license    http://ecommerce.aheadworks.com/AW-LICENSE.txt
 */

/**
 * Express Checkout Controller
 */
class AW_Sarp2_ExpressController extends Mage_Paypal_Controller_Express_Abstract
{
    protected $_configType = 'paypal/config';

    protected $_configMethod = Mage_Paypal_Model_Config::METHOD_WPP_EXPRESS;

    protected $_checkoutType = 'aw_sarp2/engine_paypal_payment_express_checkout';

    public function loadLayout($handles = null, $generateBlocks = true, $generateXml = true)
    {
        $result = parent::loadLayout($handles, $generateBlocks, $generateXml);
        $reviewBlock = $this->getLayout()->getBlock('paypal.express.review');
        if ($reviewBlock instanceof Mage_Paypal_Block_Express_Review) {
            $reviewBlock->setPaypalActionPrefix('aw_recurring');
        }
        return $result;
    }
}

<?php

/*
 * @copyright  Copyright (c) 2015 by  ESS-UA.
 */

class Ess_M2ePro_Model_Play_Listing_Product_Action_Type_List_Validator_Sku_General
    extends Ess_M2ePro_Model_Play_Listing_Product_Action_Type_Validator
{
    const SKU_MAX_LENGTH = 26;

    // ########################################

    public function validate()
    {
        $sku = $this->getSku();

        if (empty($sku)) {

            // M2ePro_TRANSLATIONS
            // SKU is not provided. Please, check Listing Settings.
            $this->addMessage('SKU is not provided. Please, check Listing Settings.');

            return false;
        }

        if (strlen($sku) > self::SKU_MAX_LENGTH) {

            // M2ePro_TRANSLATIONS
            // The length of sku must be less than 40 characters.
            $this->addMessage('The length of sku must be less than 30 characters.');

            return false;
        }

        $this->data['sku'] = $sku;

        return true;
    }

    // ########################################

    private function getSku()
    {
        if (isset($this->data['sku'])) {
            return $this->data['sku'];
        }

        $sku = $this->getPlayListingProduct()->getSku();
        if (!empty($sku)) {
            return $sku;
        }

        if ($this->getVariationManager()->isVariationProduct() &&
            $this->getVariationManager()->isVariationProductMatched()
        ) {
            $variations = $this->getListingProduct()->getVariations(true);
            /* @var $variation Ess_M2ePro_Model_Listing_Product_Variation */
            $variation = reset($variations);
            return $variation->getChildObject()->getSku();
        }

        return $this->getPlayListingProduct()->getListingSource()->getSku();
    }

    // ########################################
}
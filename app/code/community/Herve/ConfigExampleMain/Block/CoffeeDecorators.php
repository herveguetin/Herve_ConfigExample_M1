<?php
/**
 * This file is part of Herve_ConfigExampleMain for Magento.
 *
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author Herve Guetin <herve.guetin@agence-soon.fr> <@herveguetin>
 * @category Herve
 * @package Herve_ConfigExampleMain
 */

/**
 * CoffeeDecorators Block
 * @package Herve_ConfigExampleMain
 */
class Herve_ConfigExampleMain_Block_CoffeeDecorators extends Mage_Core_Block_Template
{
    /**
     * @var Herve_ConfigExampleMain_Model_Coffee
     */
    private $coffeeModel;

    protected function _construct()
    {
        parent::_construct();
        $this->coffeeModel = Mage::getModel('herve_configexamplemain/coffee');
    }

    /**
     * @return Varien_Data_Collection
     */
    public function getCoffeePriceLineCollection()
    {
        return $this->coffeeModel->getPriceLineCollection();
    }

    public function getFormattedFinalPrice()
    {
        return Mage::helper('core')->formatPrice($this->coffeeModel->getFinalPrice());
    }
}
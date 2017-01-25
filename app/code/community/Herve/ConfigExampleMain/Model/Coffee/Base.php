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
 * Coffee_Base Model
 * @package Herve_ConfigExampleMain
 */
class Herve_ConfigExampleMain_Model_Coffee_Base extends Herve_ConfigExampleMain_Model_Coffee_CoffeeLineAbstract implements Herve_ConfigExampleMain_Model_Coffee_CoffeeLineInterface
{
    /**
     * @return string
     */
    public function getFormattedPrice()
    {
        return Mage::helper('core')->formatPrice(10);
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return Mage::helper('herve_configexamplemain')->__('Flat White');
    }

    public function updateFinalCoffeePrice()
    {
        $this->getCoffee()->updateFinalPrice(+10);
    }
}
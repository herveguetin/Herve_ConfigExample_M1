<?php
/**
 * This file is part of Herve_ConfigExampleCoffeeLines for Magento.
 *
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author Herve Guetin <herve.guetin@agence-soon.fr> <@herveguetin>
 * @category Herve
 * @package Herve_ConfigExampleCoffeeLines
 */

/**
 * CoffeeLines_ExtraCream Model
 * @package Herve_ConfigExampleCoffeeLines
 */
class Herve_ConfigExampleCoffeeLines_Model_CoffeeLines_ExtraCream extends Herve_ConfigExampleMain_Model_Coffee_CoffeeLineAbstract implements Herve_ConfigExampleMain_Model_Coffee_CoffeeLineInterface
{
    /**
     * @return string
     */
    public function getFormattedPrice()
    {
        return Mage::helper('core')->formatPrice(3);
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return Mage::helper('herve_configexamplecoffeelines')
            ->__('Extra Cream (with %s discount taken into account in total but not on displayed price)', Mage::helper('core')->formatPrice(2));
    }

    public function updateFinalCoffeePrice()
    {
        $this->getCoffee()->updateFinalPrice(+1);
    }
}
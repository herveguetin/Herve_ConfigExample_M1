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
 * Coffee_CoffeeLineAbstract Model
 * @package Herve_ConfigExampleMain
 */
abstract class Herve_ConfigExampleMain_Model_Coffee_CoffeeLineAbstract extends Varien_Object
{
    /**
     * @var Herve_ConfigExampleMain_Model_Coffee
     */
    private $coffee;

    /**
     * @param Herve_ConfigExampleMain_Model_Coffee $coffee
     */
    public function setCoffee(Herve_ConfigExampleMain_Model_Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    /**
     * @return Herve_ConfigExampleMain_Model_Coffee
     */
    protected function getCoffee()
    {
        return $this->coffee;
    }
}
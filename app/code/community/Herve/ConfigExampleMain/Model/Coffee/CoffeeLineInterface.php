<?php
/**
 * This file is part of Herve_ConfigExampleMain for Magento.
 *
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author Herve Guetin <herve.guetin@agence-soon.fr> <@herveguetin>
 * @category Herve
 * @package Herve_ConfigExampleMain
 */

interface Herve_ConfigExampleMain_Model_Coffee_CoffeeLineInterface
{
    /**
     * @return string
     */
    public function getFormattedPrice();

    /**
     * @return string
     */
    public function getLabel();

    /**
     * @param Herve_ConfigExampleMain_Model_Coffee $coffee
     * @return mixed
     */
    public function setCoffee(Herve_ConfigExampleMain_Model_Coffee $coffee);

    public function updateFinalCoffeePrice();
}
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
 * Coffee Model
 * @package Herve_ConfigExampleMain
 */
class Herve_ConfigExampleMain_Model_Coffee extends Mage_Core_Model_Abstract
{
    const COFFEE_XML_CONFIG_FILE = 'herve_configexample_coffee.xml';
    const COFFEE_DECORATORS_CONFIG_NODE = 'herve_configexample/coffee/decorators';

    /**
     * @var Varien_Data_Collection
     */
    private $priceLineCollection;
    /**
     * @var Mage_Core_Model_Config
     */
    private $config;
    /**
     * @var Herve_ConfigExampleMain_Model_Coffee_CoffeeLineInterface[]
     */
    private $coffeeDecoratorModels;
    /**
     * @var float
     */
    private $finalPrice = 0.00;

    protected function _construct()
    {
        parent::_construct();
        $this->config = Mage::getConfig();

        $this->enrichConfig();
        $this->populatePriceLineCollectionFromDecorators();
    }

    private function enrichConfig()
    {
        $this->config->loadModulesConfiguration(self::COFFEE_XML_CONFIG_FILE, $this->config);
        $this->coffeeDecoratorModels = $this->config->getNode(self::COFFEE_DECORATORS_CONFIG_NODE)->asArray();
    }

    private function populatePriceLineCollectionFromDecorators()
    {
        $collection = new Varien_Data_Collection();
        array_map(function ($decoratorModel) use (&$collection) {
            /** @var Herve_ConfigExampleMain_Model_Coffee_CoffeeLineInterface|Varien_Object $priceLineInstance */
            $priceLineInstance = Mage::getModel($decoratorModel);
            $priceLineInstance->setCoffee($this);
            $collection->addItem($priceLineInstance);
        }, $this->coffeeDecoratorModels);

        $this->priceLineCollection = $collection;
    }

    /**
     * @return Varien_Data_Collection
     */
    public function getPriceLineCollection()
    {
        return $this->priceLineCollection;
    }

    /**
     * @return string
     */
    public function getFinalPrice()
    {
        array_map(function($priceLine) {
            /** @var Herve_ConfigExampleMain_Model_Coffee_CoffeeLineInterface $priceLine */
            $priceLine->updateFinalCoffeePrice();
        }, $this->priceLineCollection->getItems());

        return $this->finalPrice;
    }

    public function updateFinalPrice($price)
    {
        $this->finalPrice += $price;
    }
}
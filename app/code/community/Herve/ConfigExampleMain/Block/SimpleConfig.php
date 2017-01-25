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
 * SimpleConfig Block
 * @package Herve_ConfigExampleMain
 */
class Herve_ConfigExampleMain_Block_SimpleConfig extends Mage_Core_Block_Template
{
    /**
     * @var Mage_Core_Model_Config
     */
    protected $config;

    protected function _construct()
    {
        parent::_construct();
        $this->config = Mage::getConfig();
    }

    /**
     * @return string
     */
    public function getSimpleConfigNodeValue()
    {
        return $this->config->getNode('herve_configexample/simple_config/value');
    }
}
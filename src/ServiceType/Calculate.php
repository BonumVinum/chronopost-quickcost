<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Calculate ServiceType
 * @subpackage Services
 */
class Calculate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named calculateProducts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CalculateProducts $parameters
     * @return \StructType\CalculateProductsResponse|bool
     */
    public function calculateProducts(\StructType\CalculateProducts $parameters)
    {
        try {
            $this->setResult($resultCalculateProducts = $this->getSoapClient()->__soapCall('calculateProducts', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculateProducts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named calculateDeliveryTime
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CalculateDeliveryTime $parameters
     * @return \StructType\CalculateDeliveryTimeResponse|bool
     */
    public function calculateDeliveryTime(\StructType\CalculateDeliveryTime $parameters)
    {
        try {
            $this->setResult($resultCalculateDeliveryTime = $this->getSoapClient()->__soapCall('calculateDeliveryTime', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculateDeliveryTime;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\CalculateDeliveryTimeResponse|\StructType\CalculateProductsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

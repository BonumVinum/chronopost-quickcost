<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for calculateDeliveryTimeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:calculateDeliveryTimeResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateDeliveryTimeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultCalculateDeliveryTime|null
     */
    protected ?\StructType\ResultCalculateDeliveryTime $return = null;
    /**
     * Constructor method for calculateDeliveryTimeResponse
     * @uses CalculateDeliveryTimeResponse::setReturn()
     * @param \StructType\ResultCalculateDeliveryTime $return
     */
    public function __construct(?\StructType\ResultCalculateDeliveryTime $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultCalculateDeliveryTime|null
     */
    public function getReturn(): ?\StructType\ResultCalculateDeliveryTime
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultCalculateDeliveryTime $return
     * @return \StructType\CalculateDeliveryTimeResponse
     */
    public function setReturn(?\StructType\ResultCalculateDeliveryTime $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for calculateProductsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:calculateProductsResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateProductsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultCalculateProducts|null
     */
    protected ?\StructType\ResultCalculateProducts $return = null;
    /**
     * Constructor method for calculateProductsResponse
     * @uses CalculateProductsResponse::setReturn()
     * @param \StructType\ResultCalculateProducts $return
     */
    public function __construct(?\StructType\ResultCalculateProducts $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultCalculateProducts|null
     */
    public function getReturn(): ?\StructType\ResultCalculateProducts
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultCalculateProducts $return
     * @return \StructType\CalculateProductsResponse
     */
    public function setReturn(?\StructType\ResultCalculateProducts $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProductsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getProductsResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetProductsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultGetProducts|null
     */
    protected ?\StructType\ResultGetProducts $return = null;
    /**
     * Constructor method for getProductsResponse
     * @uses GetProductsResponse::setReturn()
     * @param \StructType\ResultGetProducts $return
     */
    public function __construct(?\StructType\ResultGetProducts $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultGetProducts|null
     */
    public function getReturn(): ?\StructType\ResultGetProducts
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultGetProducts $return
     * @return \StructType\GetProductsResponse
     */
    public function setReturn(?\StructType\ResultGetProducts $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for quickCostResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:quickCostResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class QuickCostResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultQuickCostV2|null
     */
    protected ?\StructType\ResultQuickCostV2 $return = null;
    /**
     * Constructor method for quickCostResponse
     * @uses QuickCostResponse::setReturn()
     * @param \StructType\ResultQuickCostV2 $return
     */
    public function __construct(?\StructType\ResultQuickCostV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultQuickCostV2|null
     */
    public function getReturn(): ?\StructType\ResultQuickCostV2
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultQuickCostV2 $return
     * @return \StructType\QuickCostResponse
     */
    public function setReturn(?\StructType\ResultQuickCostV2 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}

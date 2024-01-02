<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for quickCostV3Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:quickCostV3Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class QuickCostV3Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultQuickCostV3|null
     */
    protected ?\StructType\ResultQuickCostV3 $return = null;
    /**
     * Constructor method for quickCostV3Response
     * @uses QuickCostV3Response::setReturn()
     * @param \StructType\ResultQuickCostV3 $return
     */
    public function __construct(?\StructType\ResultQuickCostV3 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultQuickCostV3|null
     */
    public function getReturn(): ?\StructType\ResultQuickCostV3
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultQuickCostV3 $return
     * @return \StructType\QuickCostV3Response
     */
    public function setReturn(?\StructType\ResultQuickCostV3 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}

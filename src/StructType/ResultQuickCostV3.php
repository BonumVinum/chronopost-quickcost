<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultQuickCostV3 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultQuickCostV3 extends ResultQuickCostV2
{
    /**
     * The cap
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Cap|null
     */
    protected ?\StructType\Cap $cap = null;
    /**
     * Constructor method for resultQuickCostV3
     * @uses ResultQuickCostV3::setCap()
     * @param \StructType\Cap $cap
     */
    public function __construct(?\StructType\Cap $cap = null)
    {
        $this
            ->setCap($cap);
    }
    /**
     * Get cap value
     * @return \StructType\Cap|null
     */
    public function getCap(): ?\StructType\Cap
    {
        return $this->cap;
    }
    /**
     * Set cap value
     * @param \StructType\Cap $cap
     * @return \StructType\ResultQuickCostV3
     */
    public function setCap(?\StructType\Cap $cap = null): self
    {
        $this->cap = $cap;
        
        return $this;
    }
}

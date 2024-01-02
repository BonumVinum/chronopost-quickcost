<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultQuickCostV2 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultQuickCostV2 extends ResultQuickCost
{
    /**
     * The assurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Assurance|null
     */
    protected ?\StructType\Assurance $assurance = null;
    /**
     * Constructor method for resultQuickCostV2
     * @uses ResultQuickCostV2::setAssurance()
     * @param \StructType\Assurance $assurance
     */
    public function __construct(?\StructType\Assurance $assurance = null)
    {
        $this
            ->setAssurance($assurance);
    }
    /**
     * Get assurance value
     * @return \StructType\Assurance|null
     */
    public function getAssurance(): ?\StructType\Assurance
    {
        return $this->assurance;
    }
    /**
     * Set assurance value
     * @param \StructType\Assurance $assurance
     * @return \StructType\ResultQuickCostV2
     */
    public function setAssurance(?\StructType\Assurance $assurance = null): self
    {
        $this->assurance = $assurance;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cap StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Cap extends AbstractStructBase
{
    /**
     * The capAvion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $capAvion = null;
    /**
     * The capRoute
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $capRoute = null;
    /**
     * Constructor method for cap
     * @uses Cap::setCapAvion()
     * @uses Cap::setCapRoute()
     * @param float $capAvion
     * @param float $capRoute
     */
    public function __construct(?float $capAvion = null, ?float $capRoute = null)
    {
        $this
            ->setCapAvion($capAvion)
            ->setCapRoute($capRoute);
    }
    /**
     * Get capAvion value
     * @return float|null
     */
    public function getCapAvion(): ?float
    {
        return $this->capAvion;
    }
    /**
     * Set capAvion value
     * @param float $capAvion
     * @return \StructType\Cap
     */
    public function setCapAvion(?float $capAvion = null): self
    {
        // validation for constraint: float
        if (!is_null($capAvion) && !(is_float($capAvion) || is_numeric($capAvion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($capAvion, true), gettype($capAvion)), __LINE__);
        }
        $this->capAvion = $capAvion;
        
        return $this;
    }
    /**
     * Get capRoute value
     * @return float|null
     */
    public function getCapRoute(): ?float
    {
        return $this->capRoute;
    }
    /**
     * Set capRoute value
     * @param float $capRoute
     * @return \StructType\Cap
     */
    public function setCapRoute(?float $capRoute = null): self
    {
        // validation for constraint: float
        if (!is_null($capRoute) && !(is_float($capRoute) || is_numeric($capRoute))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($capRoute, true), gettype($capRoute)), __LINE__);
        }
        $this->capRoute = $capRoute;
        
        return $this;
    }
}

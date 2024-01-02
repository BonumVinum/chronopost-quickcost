<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for product StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Product extends ProductDesc
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The amountTTC
     * @var float|null
     */
    protected ?float $amountTTC = null;
    /**
     * The amountTVA
     * @var float|null
     */
    protected ?float $amountTVA = null;
    /**
     * Constructor method for product
     * @uses Product::setAmount()
     * @uses Product::setAmountTTC()
     * @uses Product::setAmountTVA()
     * @param float $amount
     * @param float $amountTTC
     * @param float $amountTVA
     */
    public function __construct(?float $amount = null, ?float $amountTTC = null, ?float $amountTVA = null)
    {
        $this
            ->setAmount($amount)
            ->setAmountTTC($amountTTC)
            ->setAmountTVA($amountTVA);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \StructType\Product
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get amountTTC value
     * @return float|null
     */
    public function getAmountTTC(): ?float
    {
        return $this->amountTTC;
    }
    /**
     * Set amountTTC value
     * @param float $amountTTC
     * @return \StructType\Product
     */
    public function setAmountTTC(?float $amountTTC = null): self
    {
        // validation for constraint: float
        if (!is_null($amountTTC) && !(is_float($amountTTC) || is_numeric($amountTTC))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountTTC, true), gettype($amountTTC)), __LINE__);
        }
        $this->amountTTC = $amountTTC;
        
        return $this;
    }
    /**
     * Get amountTVA value
     * @return float|null
     */
    public function getAmountTVA(): ?float
    {
        return $this->amountTVA;
    }
    /**
     * Set amountTVA value
     * @param float $amountTVA
     * @return \StructType\Product
     */
    public function setAmountTVA(?float $amountTVA = null): self
    {
        // validation for constraint: float
        if (!is_null($amountTVA) && !(is_float($amountTVA) || is_numeric($amountTVA))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountTVA, true), gettype($amountTVA)), __LINE__);
        }
        $this->amountTVA = $amountTVA;
        
        return $this;
    }
}

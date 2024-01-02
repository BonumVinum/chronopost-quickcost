<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for quickCostV3 StructType
 * Meta information extracted from the WSDL
 * - type: tns:quickCostV3
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class QuickCostV3 extends AbstractStructBase
{
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountNumber = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The depCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $depCode = null;
    /**
     * The arrCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrCode = null;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $weight = null;
    /**
     * The productCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $productCode = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for quickCostV3
     * @uses QuickCostV3::setAccountNumber()
     * @uses QuickCostV3::setPassword()
     * @uses QuickCostV3::setDepCode()
     * @uses QuickCostV3::setArrCode()
     * @uses QuickCostV3::setWeight()
     * @uses QuickCostV3::setProductCode()
     * @uses QuickCostV3::setType()
     * @param string $accountNumber
     * @param string $password
     * @param string $depCode
     * @param string $arrCode
     * @param string $weight
     * @param string $productCode
     * @param string $type
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $depCode = null, ?string $arrCode = null, ?string $weight = null, ?string $productCode = null, ?string $type = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setDepCode($depCode)
            ->setArrCode($arrCode)
            ->setWeight($weight)
            ->setProductCode($productCode)
            ->setType($type);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \StructType\QuickCostV3
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \StructType\QuickCostV3
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get depCode value
     * @return string|null
     */
    public function getDepCode(): ?string
    {
        return $this->depCode;
    }
    /**
     * Set depCode value
     * @param string $depCode
     * @return \StructType\QuickCostV3
     */
    public function setDepCode(?string $depCode = null): self
    {
        // validation for constraint: string
        if (!is_null($depCode) && !is_string($depCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depCode, true), gettype($depCode)), __LINE__);
        }
        $this->depCode = $depCode;
        
        return $this;
    }
    /**
     * Get arrCode value
     * @return string|null
     */
    public function getArrCode(): ?string
    {
        return $this->arrCode;
    }
    /**
     * Set arrCode value
     * @param string $arrCode
     * @return \StructType\QuickCostV3
     */
    public function setArrCode(?string $arrCode = null): self
    {
        // validation for constraint: string
        if (!is_null($arrCode) && !is_string($arrCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrCode, true), gettype($arrCode)), __LINE__);
        }
        $this->arrCode = $arrCode;
        
        return $this;
    }
    /**
     * Get weight value
     * @return string|null
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param string $weight
     * @return \StructType\QuickCostV3
     */
    public function setWeight(?string $weight = null): self
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        
        return $this;
    }
    /**
     * Get productCode value
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }
    /**
     * Set productCode value
     * @param string $productCode
     * @return \StructType\QuickCostV3
     */
    public function setProductCode(?string $productCode = null): self
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \StructType\QuickCostV3
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}

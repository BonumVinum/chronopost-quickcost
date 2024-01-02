<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for calculateProducts StructType
 * Meta information extracted from the WSDL
 * - type: tns:calculateProducts
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateProducts extends AbstractStructBase
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
     * The depCountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $depCountryCode = null;
    /**
     * The depZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $depZipCode = null;
    /**
     * The arrCountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrCountryCode = null;
    /**
     * The arrZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrZipCode = null;
    /**
     * The arrCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrCity = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $weight = null;
    /**
     * The height
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $height = null;
    /**
     * The length
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $length = null;
    /**
     * The width
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $width = null;
    /**
     * The shippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shippingDate = null;
    /**
     * Constructor method for calculateProducts
     * @uses CalculateProducts::setAccountNumber()
     * @uses CalculateProducts::setPassword()
     * @uses CalculateProducts::setDepCountryCode()
     * @uses CalculateProducts::setDepZipCode()
     * @uses CalculateProducts::setArrCountryCode()
     * @uses CalculateProducts::setArrZipCode()
     * @uses CalculateProducts::setArrCity()
     * @uses CalculateProducts::setType()
     * @uses CalculateProducts::setWeight()
     * @uses CalculateProducts::setHeight()
     * @uses CalculateProducts::setLength()
     * @uses CalculateProducts::setWidth()
     * @uses CalculateProducts::setShippingDate()
     * @param string $accountNumber
     * @param string $password
     * @param string $depCountryCode
     * @param string $depZipCode
     * @param string $arrCountryCode
     * @param string $arrZipCode
     * @param string $arrCity
     * @param string $type
     * @param string $weight
     * @param string $height
     * @param string $length
     * @param string $width
     * @param string $shippingDate
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $depCountryCode = null, ?string $depZipCode = null, ?string $arrCountryCode = null, ?string $arrZipCode = null, ?string $arrCity = null, ?string $type = null, ?string $weight = null, ?string $height = null, ?string $length = null, ?string $width = null, ?string $shippingDate = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setDepCountryCode($depCountryCode)
            ->setDepZipCode($depZipCode)
            ->setArrCountryCode($arrCountryCode)
            ->setArrZipCode($arrZipCode)
            ->setArrCity($arrCity)
            ->setType($type)
            ->setWeight($weight)
            ->setHeight($height)
            ->setLength($length)
            ->setWidth($width)
            ->setShippingDate($shippingDate);
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
     * @return \StructType\CalculateProducts
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
     * @return \StructType\CalculateProducts
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
     * Get depCountryCode value
     * @return string|null
     */
    public function getDepCountryCode(): ?string
    {
        return $this->depCountryCode;
    }
    /**
     * Set depCountryCode value
     * @param string $depCountryCode
     * @return \StructType\CalculateProducts
     */
    public function setDepCountryCode(?string $depCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($depCountryCode) && !is_string($depCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depCountryCode, true), gettype($depCountryCode)), __LINE__);
        }
        $this->depCountryCode = $depCountryCode;
        
        return $this;
    }
    /**
     * Get depZipCode value
     * @return string|null
     */
    public function getDepZipCode(): ?string
    {
        return $this->depZipCode;
    }
    /**
     * Set depZipCode value
     * @param string $depZipCode
     * @return \StructType\CalculateProducts
     */
    public function setDepZipCode(?string $depZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($depZipCode) && !is_string($depZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depZipCode, true), gettype($depZipCode)), __LINE__);
        }
        $this->depZipCode = $depZipCode;
        
        return $this;
    }
    /**
     * Get arrCountryCode value
     * @return string|null
     */
    public function getArrCountryCode(): ?string
    {
        return $this->arrCountryCode;
    }
    /**
     * Set arrCountryCode value
     * @param string $arrCountryCode
     * @return \StructType\CalculateProducts
     */
    public function setArrCountryCode(?string $arrCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($arrCountryCode) && !is_string($arrCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrCountryCode, true), gettype($arrCountryCode)), __LINE__);
        }
        $this->arrCountryCode = $arrCountryCode;
        
        return $this;
    }
    /**
     * Get arrZipCode value
     * @return string|null
     */
    public function getArrZipCode(): ?string
    {
        return $this->arrZipCode;
    }
    /**
     * Set arrZipCode value
     * @param string $arrZipCode
     * @return \StructType\CalculateProducts
     */
    public function setArrZipCode(?string $arrZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($arrZipCode) && !is_string($arrZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrZipCode, true), gettype($arrZipCode)), __LINE__);
        }
        $this->arrZipCode = $arrZipCode;
        
        return $this;
    }
    /**
     * Get arrCity value
     * @return string|null
     */
    public function getArrCity(): ?string
    {
        return $this->arrCity;
    }
    /**
     * Set arrCity value
     * @param string $arrCity
     * @return \StructType\CalculateProducts
     */
    public function setArrCity(?string $arrCity = null): self
    {
        // validation for constraint: string
        if (!is_null($arrCity) && !is_string($arrCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrCity, true), gettype($arrCity)), __LINE__);
        }
        $this->arrCity = $arrCity;
        
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
     * @return \StructType\CalculateProducts
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
     * @return \StructType\CalculateProducts
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
     * Get height value
     * @return string|null
     */
    public function getHeight(): ?string
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param string $height
     * @return \StructType\CalculateProducts
     */
    public function setHeight(?string $height = null): self
    {
        // validation for constraint: string
        if (!is_null($height) && !is_string($height)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;
        
        return $this;
    }
    /**
     * Get length value
     * @return string|null
     */
    public function getLength(): ?string
    {
        return $this->length;
    }
    /**
     * Set length value
     * @param string $length
     * @return \StructType\CalculateProducts
     */
    public function setLength(?string $length = null): self
    {
        // validation for constraint: string
        if (!is_null($length) && !is_string($length)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->length = $length;
        
        return $this;
    }
    /**
     * Get width value
     * @return string|null
     */
    public function getWidth(): ?string
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param string $width
     * @return \StructType\CalculateProducts
     */
    public function setWidth(?string $width = null): self
    {
        // validation for constraint: string
        if (!is_null($width) && !is_string($width)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->width = $width;
        
        return $this;
    }
    /**
     * Get shippingDate value
     * @return string|null
     */
    public function getShippingDate(): ?string
    {
        return $this->shippingDate;
    }
    /**
     * Set shippingDate value
     * @param string $shippingDate
     * @return \StructType\CalculateProducts
     */
    public function setShippingDate(?string $shippingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), gettype($shippingDate)), __LINE__);
        }
        $this->shippingDate = $shippingDate;
        
        return $this;
    }
}

<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/quickcost-cxf/QuickcostServiceWS?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/quickcost-cxf/QuickcostServiceWS?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for Calculate ServiceType
 */
$calculate = new \ServiceType\Calculate($options);
/**
 * Sample call for calculateProducts operation/method
 */
if ($calculate->calculateProducts(new \StructType\CalculateProducts()) !== false) {
    print_r($calculate->getResult());
} else {
    print_r($calculate->getLastError());
}
/**
 * Sample call for calculateDeliveryTime operation/method
 */
if ($calculate->calculateDeliveryTime(new \StructType\CalculateDeliveryTime()) !== false) {
    print_r($calculate->getResult());
} else {
    print_r($calculate->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for getProducts operation/method
 */
if ($get->getProducts(new \StructType\GetProducts()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Quick ServiceType
 */
$quick = new \ServiceType\Quick($options);
/**
 * Sample call for quickCostV3 operation/method
 */
if ($quick->quickCostV3(new \StructType\QuickCostV3()) !== false) {
    print_r($quick->getResult());
} else {
    print_r($quick->getLastError());
}
/**
 * Sample call for quickCost operation/method
 */
if ($quick->quickCost(new \StructType\QuickCost()) !== false) {
    print_r($quick->getResult());
} else {
    print_r($quick->getLastError());
}

<?php

declare(strict_types=1);
/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'calculateProducts' => '\\StructType\\CalculateProducts',
            'calculateProductsResponse' => '\\StructType\\CalculateProductsResponse',
            'resultCalculateProducts' => '\\StructType\\ResultCalculateProducts',
            'resultResponse' => '\\StructType\\ResultResponse',
            'product' => '\\StructType\\Product',
            'productDesc' => '\\StructType\\ProductDesc',
            'getProducts' => '\\StructType\\GetProducts',
            'getProductsResponse' => '\\StructType\\GetProductsResponse',
            'resultGetProducts' => '\\StructType\\ResultGetProducts',
            'quickCostV3' => '\\StructType\\QuickCostV3',
            'quickCostV3Response' => '\\StructType\\QuickCostV3Response',
            'resultQuickCostV3' => '\\StructType\\ResultQuickCostV3',
            'resultQuickCostV2' => '\\StructType\\ResultQuickCostV2',
            'resultQuickCost' => '\\StructType\\ResultQuickCost',
            'cap' => '\\StructType\\Cap',
            'assurance' => '\\StructType\\Assurance',
            'service' => '\\StructType\\Service',
            'quickCost' => '\\StructType\\QuickCost',
            'quickCostResponse' => '\\StructType\\QuickCostResponse',
            'calculateDeliveryTime' => '\\StructType\\CalculateDeliveryTime',
            'calculateDeliveryTimeResponse' => '\\StructType\\CalculateDeliveryTimeResponse',
            'resultCalculateDeliveryTime' => '\\StructType\\ResultCalculateDeliveryTime',
        ];
    }
}

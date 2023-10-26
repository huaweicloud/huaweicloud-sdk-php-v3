<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductOrderInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductOrderInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tenantId  租户ID
    * periodType  订购周期类型
    * periodNum  订购周期数量
    * resourceId  资源ID
    * productInfo  productInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tenantId' => 'string',
            'periodType' => 'string',
            'periodNum' => 'int',
            'resourceId' => 'string',
            'productInfo' => '\HuaweiCloud\SDK\Dsc\V1\Model\ProductInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tenantId  租户ID
    * periodType  订购周期类型
    * periodNum  订购周期数量
    * resourceId  资源ID
    * productInfo  productInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tenantId' => null,
        'periodType' => null,
        'periodNum' => 'int32',
        'resourceId' => null,
        'productInfo' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * tenantId  租户ID
    * periodType  订购周期类型
    * periodNum  订购周期数量
    * resourceId  资源ID
    * productInfo  productInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tenantId' => 'tenantId',
            'periodType' => 'periodType',
            'periodNum' => 'periodNum',
            'resourceId' => 'resourceId',
            'productInfo' => 'productInfo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tenantId  租户ID
    * periodType  订购周期类型
    * periodNum  订购周期数量
    * resourceId  资源ID
    * productInfo  productInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'tenantId' => 'setTenantId',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'resourceId' => 'setResourceId',
            'productInfo' => 'setProductInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tenantId  租户ID
    * periodType  订购周期类型
    * periodNum  订购周期数量
    * resourceId  资源ID
    * productInfo  productInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'tenantId' => 'getTenantId',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'resourceId' => 'getResourceId',
            'productInfo' => 'getProductInfo'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['productInfo'] = isset($data['productInfo']) ? $data['productInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets tenantId
    *  租户ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets periodType
    *  订购周期类型
    *
    * @return string|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string|null $periodType 订购周期类型
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  订购周期数量
    *
    * @return int|null
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int|null $periodNum 订购周期数量
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets productInfo
    *  productInfo
    *
    * @return \HuaweiCloud\SDK\Dsc\V1\Model\ProductInfo|null
    */
    public function getProductInfo()
    {
        return $this->container['productInfo'];
    }

    /**
    * Sets productInfo
    *
    * @param \HuaweiCloud\SDK\Dsc\V1\Model\ProductInfo|null $productInfo productInfo
    *
    * @return $this
    */
    public function setProductInfo($productInfo)
    {
        $this->container['productInfo'] = $productInfo;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


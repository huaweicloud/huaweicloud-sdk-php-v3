<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FreeResourceRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FreeResourceRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deductTime  资源抵扣时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如\"2021-10-13T10:01:49Z\"。
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    * resourceId  资源ID。
    * resourceTypeCode  资源类型编码。例如ECS的VM为“hws.resource.type.vm”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * resourceTag  资源标签。
    * productId  产品ID，即资源包ID。
    * productName  产品名称，即资源包名称。
    * usageTypeCode  使用量类型。
    * availableAmount  资源抵扣前余量。
    * remainingAmount  资源抵扣后余量。
    * usedAmount  抵扣量。
    * measureId  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
    * effectiveTime  资源使用的开始时间，UTC时间。
    * expireTime  资源使用的结束时间，UTC时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deductTime' => 'string',
            'freeResourceId' => 'string',
            'resourceId' => 'string',
            'resourceTypeCode' => 'string',
            'resourceTypeName' => 'string',
            'resourceTag' => 'string',
            'productId' => 'string',
            'productName' => 'string',
            'usageTypeCode' => 'string',
            'availableAmount' => 'string',
            'remainingAmount' => 'string',
            'usedAmount' => 'string',
            'measureId' => 'int',
            'effectiveTime' => 'string',
            'expireTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deductTime  资源抵扣时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如\"2021-10-13T10:01:49Z\"。
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    * resourceId  资源ID。
    * resourceTypeCode  资源类型编码。例如ECS的VM为“hws.resource.type.vm”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * resourceTag  资源标签。
    * productId  产品ID，即资源包ID。
    * productName  产品名称，即资源包名称。
    * usageTypeCode  使用量类型。
    * availableAmount  资源抵扣前余量。
    * remainingAmount  资源抵扣后余量。
    * usedAmount  抵扣量。
    * measureId  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
    * effectiveTime  资源使用的开始时间，UTC时间。
    * expireTime  资源使用的结束时间，UTC时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deductTime' => null,
        'freeResourceId' => null,
        'resourceId' => null,
        'resourceTypeCode' => null,
        'resourceTypeName' => null,
        'resourceTag' => null,
        'productId' => null,
        'productName' => null,
        'usageTypeCode' => null,
        'availableAmount' => null,
        'remainingAmount' => null,
        'usedAmount' => null,
        'measureId' => 'int32',
        'effectiveTime' => null,
        'expireTime' => null
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
    * deductTime  资源抵扣时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如\"2021-10-13T10:01:49Z\"。
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    * resourceId  资源ID。
    * resourceTypeCode  资源类型编码。例如ECS的VM为“hws.resource.type.vm”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * resourceTag  资源标签。
    * productId  产品ID，即资源包ID。
    * productName  产品名称，即资源包名称。
    * usageTypeCode  使用量类型。
    * availableAmount  资源抵扣前余量。
    * remainingAmount  资源抵扣后余量。
    * usedAmount  抵扣量。
    * measureId  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
    * effectiveTime  资源使用的开始时间，UTC时间。
    * expireTime  资源使用的结束时间，UTC时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deductTime' => 'deduct_time',
            'freeResourceId' => 'free_resource_id',
            'resourceId' => 'resource_id',
            'resourceTypeCode' => 'resource_type_code',
            'resourceTypeName' => 'resource_type_name',
            'resourceTag' => 'resource_tag',
            'productId' => 'product_id',
            'productName' => 'product_name',
            'usageTypeCode' => 'usage_type_code',
            'availableAmount' => 'available_amount',
            'remainingAmount' => 'remaining_amount',
            'usedAmount' => 'used_amount',
            'measureId' => 'measure_id',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deductTime  资源抵扣时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如\"2021-10-13T10:01:49Z\"。
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    * resourceId  资源ID。
    * resourceTypeCode  资源类型编码。例如ECS的VM为“hws.resource.type.vm”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * resourceTag  资源标签。
    * productId  产品ID，即资源包ID。
    * productName  产品名称，即资源包名称。
    * usageTypeCode  使用量类型。
    * availableAmount  资源抵扣前余量。
    * remainingAmount  资源抵扣后余量。
    * usedAmount  抵扣量。
    * measureId  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
    * effectiveTime  资源使用的开始时间，UTC时间。
    * expireTime  资源使用的结束时间，UTC时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'deductTime' => 'setDeductTime',
            'freeResourceId' => 'setFreeResourceId',
            'resourceId' => 'setResourceId',
            'resourceTypeCode' => 'setResourceTypeCode',
            'resourceTypeName' => 'setResourceTypeName',
            'resourceTag' => 'setResourceTag',
            'productId' => 'setProductId',
            'productName' => 'setProductName',
            'usageTypeCode' => 'setUsageTypeCode',
            'availableAmount' => 'setAvailableAmount',
            'remainingAmount' => 'setRemainingAmount',
            'usedAmount' => 'setUsedAmount',
            'measureId' => 'setMeasureId',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deductTime  资源抵扣时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如\"2021-10-13T10:01:49Z\"。
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    * resourceId  资源ID。
    * resourceTypeCode  资源类型编码。例如ECS的VM为“hws.resource.type.vm”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * resourceTag  资源标签。
    * productId  产品ID，即资源包ID。
    * productName  产品名称，即资源包名称。
    * usageTypeCode  使用量类型。
    * availableAmount  资源抵扣前余量。
    * remainingAmount  资源抵扣后余量。
    * usedAmount  抵扣量。
    * measureId  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
    * effectiveTime  资源使用的开始时间，UTC时间。
    * expireTime  资源使用的结束时间，UTC时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'deductTime' => 'getDeductTime',
            'freeResourceId' => 'getFreeResourceId',
            'resourceId' => 'getResourceId',
            'resourceTypeCode' => 'getResourceTypeCode',
            'resourceTypeName' => 'getResourceTypeName',
            'resourceTag' => 'getResourceTag',
            'productId' => 'getProductId',
            'productName' => 'getProductName',
            'usageTypeCode' => 'getUsageTypeCode',
            'availableAmount' => 'getAvailableAmount',
            'remainingAmount' => 'getRemainingAmount',
            'usedAmount' => 'getUsedAmount',
            'measureId' => 'getMeasureId',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime'
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
        $this->container['deductTime'] = isset($data['deductTime']) ? $data['deductTime'] : null;
        $this->container['freeResourceId'] = isset($data['freeResourceId']) ? $data['freeResourceId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
        $this->container['resourceTag'] = isset($data['resourceTag']) ? $data['resourceTag'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['usageTypeCode'] = isset($data['usageTypeCode']) ? $data['usageTypeCode'] : null;
        $this->container['availableAmount'] = isset($data['availableAmount']) ? $data['availableAmount'] : null;
        $this->container['remainingAmount'] = isset($data['remainingAmount']) ? $data['remainingAmount'] : null;
        $this->container['usedAmount'] = isset($data['usedAmount']) ? $data['usedAmount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
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
    * Gets deductTime
    *  资源抵扣时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如\"2021-10-13T10:01:49Z\"。
    *
    * @return string|null
    */
    public function getDeductTime()
    {
        return $this->container['deductTime'];
    }

    /**
    * Sets deductTime
    *
    * @param string|null $deductTime 资源抵扣时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如\"2021-10-13T10:01:49Z\"。
    *
    * @return $this
    */
    public function setDeductTime($deductTime)
    {
        $this->container['deductTime'] = $deductTime;
        return $this;
    }

    /**
    * Gets freeResourceId
    *  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    *
    * @return string|null
    */
    public function getFreeResourceId()
    {
        return $this->container['freeResourceId'];
    }

    /**
    * Sets freeResourceId
    *
    * @param string|null $freeResourceId 资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    *
    * @return $this
    */
    public function setFreeResourceId($freeResourceId)
    {
        $this->container['freeResourceId'] = $freeResourceId;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID。
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
    * @param string|null $resourceId 资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceTypeCode
    *  资源类型编码。例如ECS的VM为“hws.resource.type.vm”。
    *
    * @return string|null
    */
    public function getResourceTypeCode()
    {
        return $this->container['resourceTypeCode'];
    }

    /**
    * Sets resourceTypeCode
    *
    * @param string|null $resourceTypeCode 资源类型编码。例如ECS的VM为“hws.resource.type.vm”。
    *
    * @return $this
    */
    public function setResourceTypeCode($resourceTypeCode)
    {
        $this->container['resourceTypeCode'] = $resourceTypeCode;
        return $this;
    }

    /**
    * Gets resourceTypeName
    *  资源类型名称。例如ECS的资源类型名称为“云主机”。
    *
    * @return string|null
    */
    public function getResourceTypeName()
    {
        return $this->container['resourceTypeName'];
    }

    /**
    * Sets resourceTypeName
    *
    * @param string|null $resourceTypeName 资源类型名称。例如ECS的资源类型名称为“云主机”。
    *
    * @return $this
    */
    public function setResourceTypeName($resourceTypeName)
    {
        $this->container['resourceTypeName'] = $resourceTypeName;
        return $this;
    }

    /**
    * Gets resourceTag
    *  资源标签。
    *
    * @return string|null
    */
    public function getResourceTag()
    {
        return $this->container['resourceTag'];
    }

    /**
    * Sets resourceTag
    *
    * @param string|null $resourceTag 资源标签。
    *
    * @return $this
    */
    public function setResourceTag($resourceTag)
    {
        $this->container['resourceTag'] = $resourceTag;
        return $this;
    }

    /**
    * Gets productId
    *  产品ID，即资源包ID。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 产品ID，即资源包ID。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets productName
    *  产品名称，即资源包名称。
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName 产品名称，即资源包名称。
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets usageTypeCode
    *  使用量类型。
    *
    * @return string|null
    */
    public function getUsageTypeCode()
    {
        return $this->container['usageTypeCode'];
    }

    /**
    * Sets usageTypeCode
    *
    * @param string|null $usageTypeCode 使用量类型。
    *
    * @return $this
    */
    public function setUsageTypeCode($usageTypeCode)
    {
        $this->container['usageTypeCode'] = $usageTypeCode;
        return $this;
    }

    /**
    * Gets availableAmount
    *  资源抵扣前余量。
    *
    * @return string|null
    */
    public function getAvailableAmount()
    {
        return $this->container['availableAmount'];
    }

    /**
    * Sets availableAmount
    *
    * @param string|null $availableAmount 资源抵扣前余量。
    *
    * @return $this
    */
    public function setAvailableAmount($availableAmount)
    {
        $this->container['availableAmount'] = $availableAmount;
        return $this;
    }

    /**
    * Gets remainingAmount
    *  资源抵扣后余量。
    *
    * @return string|null
    */
    public function getRemainingAmount()
    {
        return $this->container['remainingAmount'];
    }

    /**
    * Sets remainingAmount
    *
    * @param string|null $remainingAmount 资源抵扣后余量。
    *
    * @return $this
    */
    public function setRemainingAmount($remainingAmount)
    {
        $this->container['remainingAmount'] = $remainingAmount;
        return $this;
    }

    /**
    * Gets usedAmount
    *  抵扣量。
    *
    * @return string|null
    */
    public function getUsedAmount()
    {
        return $this->container['usedAmount'];
    }

    /**
    * Sets usedAmount
    *
    * @param string|null $usedAmount 抵扣量。
    *
    * @return $this
    */
    public function setUsedAmount($usedAmount)
    {
        $this->container['usedAmount'] = $usedAmount;
        return $this;
    }

    /**
    * Gets measureId
    *  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
    *
    * @return int|null
    */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
    * Sets measureId
    *
    * @param int|null $measureId 度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  资源使用的开始时间，UTC时间。
    *
    * @return string|null
    */
    public function getEffectiveTime()
    {
        return $this->container['effectiveTime'];
    }

    /**
    * Sets effectiveTime
    *
    * @param string|null $effectiveTime 资源使用的开始时间，UTC时间。
    *
    * @return $this
    */
    public function setEffectiveTime($effectiveTime)
    {
        $this->container['effectiveTime'] = $effectiveTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  资源使用的结束时间，UTC时间。
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime 资源使用的结束时间，UTC时间。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
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


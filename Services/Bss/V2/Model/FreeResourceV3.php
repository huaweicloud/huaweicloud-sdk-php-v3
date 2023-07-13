<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FreeResourceV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FreeResourceV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    * usageTypeName  使用量类型名称。
    * amount  资源剩余额度，针对可重置资源包，是指当前重置周期内的剩余量。
    * originalAmount  资源原始额度，针对可重置资源包，是指每个重置周期内的总量。
    * measureId  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'freeResourceId' => 'string',
            'usageTypeName' => 'string',
            'amount' => 'string',
            'originalAmount' => 'string',
            'measureId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    * usageTypeName  使用量类型名称。
    * amount  资源剩余额度，针对可重置资源包，是指当前重置周期内的剩余量。
    * originalAmount  资源原始额度，针对可重置资源包，是指每个重置周期内的总量。
    * measureId  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'freeResourceId' => null,
        'usageTypeName' => null,
        'amount' => null,
        'originalAmount' => null,
        'measureId' => 'int32'
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
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    * usageTypeName  使用量类型名称。
    * amount  资源剩余额度，针对可重置资源包，是指当前重置周期内的剩余量。
    * originalAmount  资源原始额度，针对可重置资源包，是指每个重置周期内的总量。
    * measureId  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'freeResourceId' => 'free_resource_id',
            'usageTypeName' => 'usage_type_name',
            'amount' => 'amount',
            'originalAmount' => 'original_amount',
            'measureId' => 'measure_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    * usageTypeName  使用量类型名称。
    * amount  资源剩余额度，针对可重置资源包，是指当前重置周期内的剩余量。
    * originalAmount  资源原始额度，针对可重置资源包，是指每个重置周期内的总量。
    * measureId  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'freeResourceId' => 'setFreeResourceId',
            'usageTypeName' => 'setUsageTypeName',
            'amount' => 'setAmount',
            'originalAmount' => 'setOriginalAmount',
            'measureId' => 'setMeasureId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    * usageTypeName  使用量类型名称。
    * amount  资源剩余额度，针对可重置资源包，是指当前重置周期内的剩余量。
    * originalAmount  资源原始额度，针对可重置资源包，是指每个重置周期内的总量。
    * measureId  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'freeResourceId' => 'getFreeResourceId',
            'usageTypeName' => 'getUsageTypeName',
            'amount' => 'getAmount',
            'originalAmount' => 'getOriginalAmount',
            'measureId' => 'getMeasureId'
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
        $this->container['freeResourceId'] = isset($data['freeResourceId']) ? $data['freeResourceId'] : null;
        $this->container['usageTypeName'] = isset($data['usageTypeName']) ? $data['usageTypeName'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['originalAmount'] = isset($data['originalAmount']) ? $data['originalAmount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
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
    * Gets usageTypeName
    *  使用量类型名称。
    *
    * @return string|null
    */
    public function getUsageTypeName()
    {
        return $this->container['usageTypeName'];
    }

    /**
    * Sets usageTypeName
    *
    * @param string|null $usageTypeName 使用量类型名称。
    *
    * @return $this
    */
    public function setUsageTypeName($usageTypeName)
    {
        $this->container['usageTypeName'] = $usageTypeName;
        return $this;
    }

    /**
    * Gets amount
    *  资源剩余额度，针对可重置资源包，是指当前重置周期内的剩余量。
    *
    * @return string|null
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param string|null $amount 资源剩余额度，针对可重置资源包，是指当前重置周期内的剩余量。
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets originalAmount
    *  资源原始额度，针对可重置资源包，是指每个重置周期内的总量。
    *
    * @return string|null
    */
    public function getOriginalAmount()
    {
        return $this->container['originalAmount'];
    }

    /**
    * Sets originalAmount
    *
    * @param string|null $originalAmount 资源原始额度，针对可重置资源包，是指每个重置周期内的总量。
    *
    * @return $this
    */
    public function setOriginalAmount($originalAmount)
    {
        $this->container['originalAmount'] = $originalAmount;
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


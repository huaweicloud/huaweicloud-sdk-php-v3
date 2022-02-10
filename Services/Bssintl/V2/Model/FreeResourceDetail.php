<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FreeResourceDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FreeResourceDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * freeResourceId  |参数名称：套餐包ID| |参数约束及描述：套餐包ID|
    * freeResourceTypeName  |参数名称：免费资源类型名称| |参数约束及描述：免费资源类型名称|
    * quotaReuseCycle  |参数名称：重用周期| |参数的约束及描述：重用周期|
    * quotaReuseCycleType  |参数名称：重置周期类别| |参数的约束及描述：重置周期类别|
    * usageTypeName  |参数名称：使用量类型名称| |参数约束及描述：使用量类型名称|
    * startTime  |参数名称：开始时间| |参数约束及描述：开始时间|
    * endTime  |参数名称：结束时间| |参数约束及描述：结束时间|
    * amount  |参数名称：免费资源剩余额度| |参数的约束及描述：免费资源剩余额度|
    * originalAmount  |参数名称：免费资源原始额度| |参数的约束及描述：免费资源原始额度|
    * measureId  |参数名称：度量单位| |参数的约束及描述：度量单位|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'freeResourceId' => 'string',
            'freeResourceTypeName' => 'string',
            'quotaReuseCycle' => 'int',
            'quotaReuseCycleType' => 'int',
            'usageTypeName' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'amount' => 'float',
            'originalAmount' => 'float',
            'measureId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * freeResourceId  |参数名称：套餐包ID| |参数约束及描述：套餐包ID|
    * freeResourceTypeName  |参数名称：免费资源类型名称| |参数约束及描述：免费资源类型名称|
    * quotaReuseCycle  |参数名称：重用周期| |参数的约束及描述：重用周期|
    * quotaReuseCycleType  |参数名称：重置周期类别| |参数的约束及描述：重置周期类别|
    * usageTypeName  |参数名称：使用量类型名称| |参数约束及描述：使用量类型名称|
    * startTime  |参数名称：开始时间| |参数约束及描述：开始时间|
    * endTime  |参数名称：结束时间| |参数约束及描述：结束时间|
    * amount  |参数名称：免费资源剩余额度| |参数的约束及描述：免费资源剩余额度|
    * originalAmount  |参数名称：免费资源原始额度| |参数的约束及描述：免费资源原始额度|
    * measureId  |参数名称：度量单位| |参数的约束及描述：度量单位|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'freeResourceId' => null,
        'freeResourceTypeName' => null,
        'quotaReuseCycle' => 'int32',
        'quotaReuseCycleType' => 'int32',
        'usageTypeName' => null,
        'startTime' => null,
        'endTime' => null,
        'amount' => 'bigdecimal',
        'originalAmount' => 'bigdecimal',
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
    * freeResourceId  |参数名称：套餐包ID| |参数约束及描述：套餐包ID|
    * freeResourceTypeName  |参数名称：免费资源类型名称| |参数约束及描述：免费资源类型名称|
    * quotaReuseCycle  |参数名称：重用周期| |参数的约束及描述：重用周期|
    * quotaReuseCycleType  |参数名称：重置周期类别| |参数的约束及描述：重置周期类别|
    * usageTypeName  |参数名称：使用量类型名称| |参数约束及描述：使用量类型名称|
    * startTime  |参数名称：开始时间| |参数约束及描述：开始时间|
    * endTime  |参数名称：结束时间| |参数约束及描述：结束时间|
    * amount  |参数名称：免费资源剩余额度| |参数的约束及描述：免费资源剩余额度|
    * originalAmount  |参数名称：免费资源原始额度| |参数的约束及描述：免费资源原始额度|
    * measureId  |参数名称：度量单位| |参数的约束及描述：度量单位|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'freeResourceId' => 'free_resource_id',
            'freeResourceTypeName' => 'free_resource_type_name',
            'quotaReuseCycle' => 'quota_reuse_cycle',
            'quotaReuseCycleType' => 'quota_reuse_cycle_type',
            'usageTypeName' => 'usage_type_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'amount' => 'amount',
            'originalAmount' => 'original_amount',
            'measureId' => 'measure_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * freeResourceId  |参数名称：套餐包ID| |参数约束及描述：套餐包ID|
    * freeResourceTypeName  |参数名称：免费资源类型名称| |参数约束及描述：免费资源类型名称|
    * quotaReuseCycle  |参数名称：重用周期| |参数的约束及描述：重用周期|
    * quotaReuseCycleType  |参数名称：重置周期类别| |参数的约束及描述：重置周期类别|
    * usageTypeName  |参数名称：使用量类型名称| |参数约束及描述：使用量类型名称|
    * startTime  |参数名称：开始时间| |参数约束及描述：开始时间|
    * endTime  |参数名称：结束时间| |参数约束及描述：结束时间|
    * amount  |参数名称：免费资源剩余额度| |参数的约束及描述：免费资源剩余额度|
    * originalAmount  |参数名称：免费资源原始额度| |参数的约束及描述：免费资源原始额度|
    * measureId  |参数名称：度量单位| |参数的约束及描述：度量单位|
    *
    * @var string[]
    */
    protected static $setters = [
            'freeResourceId' => 'setFreeResourceId',
            'freeResourceTypeName' => 'setFreeResourceTypeName',
            'quotaReuseCycle' => 'setQuotaReuseCycle',
            'quotaReuseCycleType' => 'setQuotaReuseCycleType',
            'usageTypeName' => 'setUsageTypeName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'amount' => 'setAmount',
            'originalAmount' => 'setOriginalAmount',
            'measureId' => 'setMeasureId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * freeResourceId  |参数名称：套餐包ID| |参数约束及描述：套餐包ID|
    * freeResourceTypeName  |参数名称：免费资源类型名称| |参数约束及描述：免费资源类型名称|
    * quotaReuseCycle  |参数名称：重用周期| |参数的约束及描述：重用周期|
    * quotaReuseCycleType  |参数名称：重置周期类别| |参数的约束及描述：重置周期类别|
    * usageTypeName  |参数名称：使用量类型名称| |参数约束及描述：使用量类型名称|
    * startTime  |参数名称：开始时间| |参数约束及描述：开始时间|
    * endTime  |参数名称：结束时间| |参数约束及描述：结束时间|
    * amount  |参数名称：免费资源剩余额度| |参数的约束及描述：免费资源剩余额度|
    * originalAmount  |参数名称：免费资源原始额度| |参数的约束及描述：免费资源原始额度|
    * measureId  |参数名称：度量单位| |参数的约束及描述：度量单位|
    *
    * @var string[]
    */
    protected static $getters = [
            'freeResourceId' => 'getFreeResourceId',
            'freeResourceTypeName' => 'getFreeResourceTypeName',
            'quotaReuseCycle' => 'getQuotaReuseCycle',
            'quotaReuseCycleType' => 'getQuotaReuseCycleType',
            'usageTypeName' => 'getUsageTypeName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
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
        $this->container['freeResourceTypeName'] = isset($data['freeResourceTypeName']) ? $data['freeResourceTypeName'] : null;
        $this->container['quotaReuseCycle'] = isset($data['quotaReuseCycle']) ? $data['quotaReuseCycle'] : null;
        $this->container['quotaReuseCycleType'] = isset($data['quotaReuseCycleType']) ? $data['quotaReuseCycleType'] : null;
        $this->container['usageTypeName'] = isset($data['usageTypeName']) ? $data['usageTypeName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
    *  |参数名称：套餐包ID| |参数约束及描述：套餐包ID|
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
    * @param string|null $freeResourceId |参数名称：套餐包ID| |参数约束及描述：套餐包ID|
    *
    * @return $this
    */
    public function setFreeResourceId($freeResourceId)
    {
        $this->container['freeResourceId'] = $freeResourceId;
        return $this;
    }

    /**
    * Gets freeResourceTypeName
    *  |参数名称：免费资源类型名称| |参数约束及描述：免费资源类型名称|
    *
    * @return string|null
    */
    public function getFreeResourceTypeName()
    {
        return $this->container['freeResourceTypeName'];
    }

    /**
    * Sets freeResourceTypeName
    *
    * @param string|null $freeResourceTypeName |参数名称：免费资源类型名称| |参数约束及描述：免费资源类型名称|
    *
    * @return $this
    */
    public function setFreeResourceTypeName($freeResourceTypeName)
    {
        $this->container['freeResourceTypeName'] = $freeResourceTypeName;
        return $this;
    }

    /**
    * Gets quotaReuseCycle
    *  |参数名称：重用周期| |参数的约束及描述：重用周期|
    *
    * @return int|null
    */
    public function getQuotaReuseCycle()
    {
        return $this->container['quotaReuseCycle'];
    }

    /**
    * Sets quotaReuseCycle
    *
    * @param int|null $quotaReuseCycle |参数名称：重用周期| |参数的约束及描述：重用周期|
    *
    * @return $this
    */
    public function setQuotaReuseCycle($quotaReuseCycle)
    {
        $this->container['quotaReuseCycle'] = $quotaReuseCycle;
        return $this;
    }

    /**
    * Gets quotaReuseCycleType
    *  |参数名称：重置周期类别| |参数的约束及描述：重置周期类别|
    *
    * @return int|null
    */
    public function getQuotaReuseCycleType()
    {
        return $this->container['quotaReuseCycleType'];
    }

    /**
    * Sets quotaReuseCycleType
    *
    * @param int|null $quotaReuseCycleType |参数名称：重置周期类别| |参数的约束及描述：重置周期类别|
    *
    * @return $this
    */
    public function setQuotaReuseCycleType($quotaReuseCycleType)
    {
        $this->container['quotaReuseCycleType'] = $quotaReuseCycleType;
        return $this;
    }

    /**
    * Gets usageTypeName
    *  |参数名称：使用量类型名称| |参数约束及描述：使用量类型名称|
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
    * @param string|null $usageTypeName |参数名称：使用量类型名称| |参数约束及描述：使用量类型名称|
    *
    * @return $this
    */
    public function setUsageTypeName($usageTypeName)
    {
        $this->container['usageTypeName'] = $usageTypeName;
        return $this;
    }

    /**
    * Gets startTime
    *  |参数名称：开始时间| |参数约束及描述：开始时间|
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime |参数名称：开始时间| |参数约束及描述：开始时间|
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  |参数名称：结束时间| |参数约束及描述：结束时间|
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime |参数名称：结束时间| |参数约束及描述：结束时间|
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets amount
    *  |参数名称：免费资源剩余额度| |参数的约束及描述：免费资源剩余额度|
    *
    * @return float|null
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param float|null $amount |参数名称：免费资源剩余额度| |参数的约束及描述：免费资源剩余额度|
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
    *  |参数名称：免费资源原始额度| |参数的约束及描述：免费资源原始额度|
    *
    * @return float|null
    */
    public function getOriginalAmount()
    {
        return $this->container['originalAmount'];
    }

    /**
    * Sets originalAmount
    *
    * @param float|null $originalAmount |参数名称：免费资源原始额度| |参数的约束及描述：免费资源原始额度|
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
    *  |参数名称：度量单位| |参数的约束及描述：度量单位|
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
    * @param int|null $measureId |参数名称：度量单位| |参数的约束及描述：度量单位|
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


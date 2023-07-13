<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

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
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    * freeResourceTypeName  资源项类型名称。
    * quotaReuseCycle  重置周期，只有quota_reuse_mode为可重置，该字段才有意义。 1：小时2：天3：周4：月5：年
    * quotaReuseCycleType  重置周期类别，只有quota_reuse_mode为可重置，该字段才有意义。 1：按自然周期重置是指重置周期是按照自然月/年来重置，例如如果周期是月，按自然周期重置，表示每个月的1号重置。 2：按订购周期重置。是指重置周期是按照订购时间来重置，例如如果周期是月，按订购周期重置，15号订购了该套餐，表示每个月的15号重置。
    * usageTypeName  使用量类型名称。
    * startTime  开始时间，格式UTC。 如果quota_reuse_mode为可重置，则此时间为当前时间所在的重置周期的开始时间。如果quota_reuse_mode为不可重置，则此时间为订购实例的生效时间。
    * endTime  结束时间，格式UTC。 如果quota_reuse_mode为可重置，则此时间为当前时间所在的重置周期的结束时间。如果quota_reuse_mode为不可重置，则此时间为订购实例的失效时间。
    * amount  资源剩余额度，针对可重置资源包，是指当前重置周期内的剩余量。
    * originalAmount  资源原始额度，针对可重置资源包，是指每个重置周期内的总量。
    * measureId  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
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
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    * freeResourceTypeName  资源项类型名称。
    * quotaReuseCycle  重置周期，只有quota_reuse_mode为可重置，该字段才有意义。 1：小时2：天3：周4：月5：年
    * quotaReuseCycleType  重置周期类别，只有quota_reuse_mode为可重置，该字段才有意义。 1：按自然周期重置是指重置周期是按照自然月/年来重置，例如如果周期是月，按自然周期重置，表示每个月的1号重置。 2：按订购周期重置。是指重置周期是按照订购时间来重置，例如如果周期是月，按订购周期重置，15号订购了该套餐，表示每个月的15号重置。
    * usageTypeName  使用量类型名称。
    * startTime  开始时间，格式UTC。 如果quota_reuse_mode为可重置，则此时间为当前时间所在的重置周期的开始时间。如果quota_reuse_mode为不可重置，则此时间为订购实例的生效时间。
    * endTime  结束时间，格式UTC。 如果quota_reuse_mode为可重置，则此时间为当前时间所在的重置周期的结束时间。如果quota_reuse_mode为不可重置，则此时间为订购实例的失效时间。
    * amount  资源剩余额度，针对可重置资源包，是指当前重置周期内的剩余量。
    * originalAmount  资源原始额度，针对可重置资源包，是指每个重置周期内的总量。
    * measureId  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
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
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    * freeResourceTypeName  资源项类型名称。
    * quotaReuseCycle  重置周期，只有quota_reuse_mode为可重置，该字段才有意义。 1：小时2：天3：周4：月5：年
    * quotaReuseCycleType  重置周期类别，只有quota_reuse_mode为可重置，该字段才有意义。 1：按自然周期重置是指重置周期是按照自然月/年来重置，例如如果周期是月，按自然周期重置，表示每个月的1号重置。 2：按订购周期重置。是指重置周期是按照订购时间来重置，例如如果周期是月，按订购周期重置，15号订购了该套餐，表示每个月的15号重置。
    * usageTypeName  使用量类型名称。
    * startTime  开始时间，格式UTC。 如果quota_reuse_mode为可重置，则此时间为当前时间所在的重置周期的开始时间。如果quota_reuse_mode为不可重置，则此时间为订购实例的生效时间。
    * endTime  结束时间，格式UTC。 如果quota_reuse_mode为可重置，则此时间为当前时间所在的重置周期的结束时间。如果quota_reuse_mode为不可重置，则此时间为订购实例的失效时间。
    * amount  资源剩余额度，针对可重置资源包，是指当前重置周期内的剩余量。
    * originalAmount  资源原始额度，针对可重置资源包，是指每个重置周期内的总量。
    * measureId  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
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
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    * freeResourceTypeName  资源项类型名称。
    * quotaReuseCycle  重置周期，只有quota_reuse_mode为可重置，该字段才有意义。 1：小时2：天3：周4：月5：年
    * quotaReuseCycleType  重置周期类别，只有quota_reuse_mode为可重置，该字段才有意义。 1：按自然周期重置是指重置周期是按照自然月/年来重置，例如如果周期是月，按自然周期重置，表示每个月的1号重置。 2：按订购周期重置。是指重置周期是按照订购时间来重置，例如如果周期是月，按订购周期重置，15号订购了该套餐，表示每个月的15号重置。
    * usageTypeName  使用量类型名称。
    * startTime  开始时间，格式UTC。 如果quota_reuse_mode为可重置，则此时间为当前时间所在的重置周期的开始时间。如果quota_reuse_mode为不可重置，则此时间为订购实例的生效时间。
    * endTime  结束时间，格式UTC。 如果quota_reuse_mode为可重置，则此时间为当前时间所在的重置周期的结束时间。如果quota_reuse_mode为不可重置，则此时间为订购实例的失效时间。
    * amount  资源剩余额度，针对可重置资源包，是指当前重置周期内的剩余量。
    * originalAmount  资源原始额度，针对可重置资源包，是指每个重置周期内的总量。
    * measureId  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
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
    * freeResourceId  资源项ID，一个资源包中会含有多个资源项，一个使用量类型对应一个资源项。
    * freeResourceTypeName  资源项类型名称。
    * quotaReuseCycle  重置周期，只有quota_reuse_mode为可重置，该字段才有意义。 1：小时2：天3：周4：月5：年
    * quotaReuseCycleType  重置周期类别，只有quota_reuse_mode为可重置，该字段才有意义。 1：按自然周期重置是指重置周期是按照自然月/年来重置，例如如果周期是月，按自然周期重置，表示每个月的1号重置。 2：按订购周期重置。是指重置周期是按照订购时间来重置，例如如果周期是月，按订购周期重置，15号订购了该套餐，表示每个月的15号重置。
    * usageTypeName  使用量类型名称。
    * startTime  开始时间，格式UTC。 如果quota_reuse_mode为可重置，则此时间为当前时间所在的重置周期的开始时间。如果quota_reuse_mode为不可重置，则此时间为订购实例的生效时间。
    * endTime  结束时间，格式UTC。 如果quota_reuse_mode为可重置，则此时间为当前时间所在的重置周期的结束时间。如果quota_reuse_mode为不可重置，则此时间为订购实例的失效时间。
    * amount  资源剩余额度，针对可重置资源包，是指当前重置周期内的剩余量。
    * originalAmount  资源原始额度，针对可重置资源包，是指每个重置周期内的总量。
    * measureId  度量单位，免费资源套餐额度度量单位。您可以调用查询度量单位列表接口获取。
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
    * Gets freeResourceTypeName
    *  资源项类型名称。
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
    * @param string|null $freeResourceTypeName 资源项类型名称。
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
    *  重置周期，只有quota_reuse_mode为可重置，该字段才有意义。 1：小时2：天3：周4：月5：年
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
    * @param int|null $quotaReuseCycle 重置周期，只有quota_reuse_mode为可重置，该字段才有意义。 1：小时2：天3：周4：月5：年
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
    *  重置周期类别，只有quota_reuse_mode为可重置，该字段才有意义。 1：按自然周期重置是指重置周期是按照自然月/年来重置，例如如果周期是月，按自然周期重置，表示每个月的1号重置。 2：按订购周期重置。是指重置周期是按照订购时间来重置，例如如果周期是月，按订购周期重置，15号订购了该套餐，表示每个月的15号重置。
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
    * @param int|null $quotaReuseCycleType 重置周期类别，只有quota_reuse_mode为可重置，该字段才有意义。 1：按自然周期重置是指重置周期是按照自然月/年来重置，例如如果周期是月，按自然周期重置，表示每个月的1号重置。 2：按订购周期重置。是指重置周期是按照订购时间来重置，例如如果周期是月，按订购周期重置，15号订购了该套餐，表示每个月的15号重置。
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
    * Gets startTime
    *  开始时间，格式UTC。 如果quota_reuse_mode为可重置，则此时间为当前时间所在的重置周期的开始时间。如果quota_reuse_mode为不可重置，则此时间为订购实例的生效时间。
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
    * @param string|null $startTime 开始时间，格式UTC。 如果quota_reuse_mode为可重置，则此时间为当前时间所在的重置周期的开始时间。如果quota_reuse_mode为不可重置，则此时间为订购实例的生效时间。
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
    *  结束时间，格式UTC。 如果quota_reuse_mode为可重置，则此时间为当前时间所在的重置周期的结束时间。如果quota_reuse_mode为不可重置，则此时间为订购实例的失效时间。
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
    * @param string|null $endTime 结束时间，格式UTC。 如果quota_reuse_mode为可重置，则此时间为当前时间所在的重置周期的结束时间。如果quota_reuse_mode为不可重置，则此时间为订购实例的失效时间。
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
    *  资源剩余额度，针对可重置资源包，是指当前重置周期内的剩余量。
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
    * @param float|null $amount 资源剩余额度，针对可重置资源包，是指当前重置周期内的剩余量。
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
    * @return float|null
    */
    public function getOriginalAmount()
    {
        return $this->container['originalAmount'];
    }

    /**
    * Sets originalAmount
    *
    * @param float|null $originalAmount 资源原始额度，针对可重置资源包，是指每个重置周期内的总量。
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


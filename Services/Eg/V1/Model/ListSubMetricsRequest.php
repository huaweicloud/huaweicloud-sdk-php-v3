<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubMetricsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubMetricsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filter  指标数据统计方式
    * period  指标数据统计周期，单位minute。
    * startTime  获取指标数据起始时间
    * endTime  获取指标数据结束时间
    * subscriptionId  事件订阅id
    * providerType  事件目标类型/事件通道类型
    * targetId  事件目标id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filter' => 'string',
            'period' => 'int',
            'startTime' => 'int',
            'endTime' => 'int',
            'subscriptionId' => 'string',
            'providerType' => 'string',
            'targetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filter  指标数据统计方式
    * period  指标数据统计周期，单位minute。
    * startTime  获取指标数据起始时间
    * endTime  获取指标数据结束时间
    * subscriptionId  事件订阅id
    * providerType  事件目标类型/事件通道类型
    * targetId  事件目标id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filter' => null,
        'period' => 'int32',
        'startTime' => 'int64',
        'endTime' => 'int64',
        'subscriptionId' => null,
        'providerType' => null,
        'targetId' => null
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
    * filter  指标数据统计方式
    * period  指标数据统计周期，单位minute。
    * startTime  获取指标数据起始时间
    * endTime  获取指标数据结束时间
    * subscriptionId  事件订阅id
    * providerType  事件目标类型/事件通道类型
    * targetId  事件目标id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filter' => 'filter',
            'period' => 'period',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'subscriptionId' => 'subscription_id',
            'providerType' => 'provider_type',
            'targetId' => 'target_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filter  指标数据统计方式
    * period  指标数据统计周期，单位minute。
    * startTime  获取指标数据起始时间
    * endTime  获取指标数据结束时间
    * subscriptionId  事件订阅id
    * providerType  事件目标类型/事件通道类型
    * targetId  事件目标id
    *
    * @var string[]
    */
    protected static $setters = [
            'filter' => 'setFilter',
            'period' => 'setPeriod',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'subscriptionId' => 'setSubscriptionId',
            'providerType' => 'setProviderType',
            'targetId' => 'setTargetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filter  指标数据统计方式
    * period  指标数据统计周期，单位minute。
    * startTime  获取指标数据起始时间
    * endTime  获取指标数据结束时间
    * subscriptionId  事件订阅id
    * providerType  事件目标类型/事件通道类型
    * targetId  事件目标id
    *
    * @var string[]
    */
    protected static $getters = [
            'filter' => 'getFilter',
            'period' => 'getPeriod',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'subscriptionId' => 'getSubscriptionId',
            'providerType' => 'getProviderType',
            'targetId' => 'getTargetId'
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
    const FILTER_AVG = 'AVG';
    const FILTER_MIN = 'MIN';
    const FILTER_MAX = 'MAX';
    const PROVIDER_TYPE_OFFICIAL = 'OFFICIAL';
    const PROVIDER_TYPE_CUSTOM = 'CUSTOM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFilterAllowableValues()
    {
        return [
            self::FILTER_AVG,
            self::FILTER_MIN,
            self::FILTER_MAX,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProviderTypeAllowableValues()
    {
        return [
            self::PROVIDER_TYPE_OFFICIAL,
            self::PROVIDER_TYPE_CUSTOM,
        ];
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
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['providerType'] = isset($data['providerType']) ? $data['providerType'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFilterAllowableValues();
                if (!is_null($this->container['filter']) && !in_array($this->container['filter'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'filter', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['subscriptionId'] === null) {
            $invalidProperties[] = "'subscriptionId' can't be null";
        }
            $allowedValues = $this->getProviderTypeAllowableValues();
                if (!is_null($this->container['providerType']) && !in_array($this->container['providerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'providerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    * Gets filter
    *  指标数据统计方式
    *
    * @return string|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string|null $filter 指标数据统计方式
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets period
    *  指标数据统计周期，单位minute。
    *
    * @return int|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param int|null $period 指标数据统计周期，单位minute。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets startTime
    *  获取指标数据起始时间
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 获取指标数据起始时间
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
    *  获取指标数据结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 获取指标数据结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets subscriptionId
    *  事件订阅id
    *
    * @return string
    */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
    * Sets subscriptionId
    *
    * @param string $subscriptionId 事件订阅id
    *
    * @return $this
    */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;
        return $this;
    }

    /**
    * Gets providerType
    *  事件目标类型/事件通道类型
    *
    * @return string|null
    */
    public function getProviderType()
    {
        return $this->container['providerType'];
    }

    /**
    * Sets providerType
    *
    * @param string|null $providerType 事件目标类型/事件通道类型
    *
    * @return $this
    */
    public function setProviderType($providerType)
    {
        $this->container['providerType'] = $providerType;
        return $this;
    }

    /**
    * Gets targetId
    *  事件目标id
    *
    * @return string|null
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string|null $targetId 事件目标id
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
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


<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowComparePolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowComparePolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * period  对比时间。
    * status  对比策略状态。 - OPEN：开启 - CLOSED：关闭 - NO_SUPPORT：不支持
    * beginTime  对比开始时间。
    * endTime  对比结束时间。
    * compareType  对比类型。 - object：对象对比 - lines：行对比 - contents：内容对比 - account：用户对比
    * nextCompareTime  下次对比时间，UTC时间，例如：2023-06-12T08:00:00Z
    * comparePolicy  对比策略。 - normal：普通对比 - manyToOne：多对一对比
    * intervalHour  间隔时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'period' => 'string',
            'status' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'compareType' => 'string[]',
            'nextCompareTime' => 'string',
            'comparePolicy' => 'string',
            'intervalHour' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * period  对比时间。
    * status  对比策略状态。 - OPEN：开启 - CLOSED：关闭 - NO_SUPPORT：不支持
    * beginTime  对比开始时间。
    * endTime  对比结束时间。
    * compareType  对比类型。 - object：对象对比 - lines：行对比 - contents：内容对比 - account：用户对比
    * nextCompareTime  下次对比时间，UTC时间，例如：2023-06-12T08:00:00Z
    * comparePolicy  对比策略。 - normal：普通对比 - manyToOne：多对一对比
    * intervalHour  间隔时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'period' => null,
        'status' => null,
        'beginTime' => null,
        'endTime' => null,
        'compareType' => null,
        'nextCompareTime' => null,
        'comparePolicy' => null,
        'intervalHour' => 'int32'
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
    * period  对比时间。
    * status  对比策略状态。 - OPEN：开启 - CLOSED：关闭 - NO_SUPPORT：不支持
    * beginTime  对比开始时间。
    * endTime  对比结束时间。
    * compareType  对比类型。 - object：对象对比 - lines：行对比 - contents：内容对比 - account：用户对比
    * nextCompareTime  下次对比时间，UTC时间，例如：2023-06-12T08:00:00Z
    * comparePolicy  对比策略。 - normal：普通对比 - manyToOne：多对一对比
    * intervalHour  间隔时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'period' => 'period',
            'status' => 'status',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'compareType' => 'compare_type',
            'nextCompareTime' => 'next_compare_time',
            'comparePolicy' => 'compare_policy',
            'intervalHour' => 'interval_hour'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * period  对比时间。
    * status  对比策略状态。 - OPEN：开启 - CLOSED：关闭 - NO_SUPPORT：不支持
    * beginTime  对比开始时间。
    * endTime  对比结束时间。
    * compareType  对比类型。 - object：对象对比 - lines：行对比 - contents：内容对比 - account：用户对比
    * nextCompareTime  下次对比时间，UTC时间，例如：2023-06-12T08:00:00Z
    * comparePolicy  对比策略。 - normal：普通对比 - manyToOne：多对一对比
    * intervalHour  间隔时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'period' => 'setPeriod',
            'status' => 'setStatus',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'compareType' => 'setCompareType',
            'nextCompareTime' => 'setNextCompareTime',
            'comparePolicy' => 'setComparePolicy',
            'intervalHour' => 'setIntervalHour'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * period  对比时间。
    * status  对比策略状态。 - OPEN：开启 - CLOSED：关闭 - NO_SUPPORT：不支持
    * beginTime  对比开始时间。
    * endTime  对比结束时间。
    * compareType  对比类型。 - object：对象对比 - lines：行对比 - contents：内容对比 - account：用户对比
    * nextCompareTime  下次对比时间，UTC时间，例如：2023-06-12T08:00:00Z
    * comparePolicy  对比策略。 - normal：普通对比 - manyToOne：多对一对比
    * intervalHour  间隔时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'period' => 'getPeriod',
            'status' => 'getStatus',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'compareType' => 'getCompareType',
            'nextCompareTime' => 'getNextCompareTime',
            'comparePolicy' => 'getComparePolicy',
            'intervalHour' => 'getIntervalHour'
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
    const STATUS_OPEN = 'OPEN';
    const STATUS_CLOSED = 'CLOSED';
    const STATUS_NO_SUPPORT = 'NO_SUPPORT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_CLOSED,
            self::STATUS_NO_SUPPORT,
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
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['compareType'] = isset($data['compareType']) ? $data['compareType'] : null;
        $this->container['nextCompareTime'] = isset($data['nextCompareTime']) ? $data['nextCompareTime'] : null;
        $this->container['comparePolicy'] = isset($data['comparePolicy']) ? $data['comparePolicy'] : null;
        $this->container['intervalHour'] = isset($data['intervalHour']) ? $data['intervalHour'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets period
    *  对比时间。
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 对比时间。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets status
    *  对比策略状态。 - OPEN：开启 - CLOSED：关闭 - NO_SUPPORT：不支持
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 对比策略状态。 - OPEN：开启 - CLOSED：关闭 - NO_SUPPORT：不支持
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets beginTime
    *  对比开始时间。
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 对比开始时间。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  对比结束时间。
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
    * @param string|null $endTime 对比结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets compareType
    *  对比类型。 - object：对象对比 - lines：行对比 - contents：内容对比 - account：用户对比
    *
    * @return string[]|null
    */
    public function getCompareType()
    {
        return $this->container['compareType'];
    }

    /**
    * Sets compareType
    *
    * @param string[]|null $compareType 对比类型。 - object：对象对比 - lines：行对比 - contents：内容对比 - account：用户对比
    *
    * @return $this
    */
    public function setCompareType($compareType)
    {
        $this->container['compareType'] = $compareType;
        return $this;
    }

    /**
    * Gets nextCompareTime
    *  下次对比时间，UTC时间，例如：2023-06-12T08:00:00Z
    *
    * @return string|null
    */
    public function getNextCompareTime()
    {
        return $this->container['nextCompareTime'];
    }

    /**
    * Sets nextCompareTime
    *
    * @param string|null $nextCompareTime 下次对比时间，UTC时间，例如：2023-06-12T08:00:00Z
    *
    * @return $this
    */
    public function setNextCompareTime($nextCompareTime)
    {
        $this->container['nextCompareTime'] = $nextCompareTime;
        return $this;
    }

    /**
    * Gets comparePolicy
    *  对比策略。 - normal：普通对比 - manyToOne：多对一对比
    *
    * @return string|null
    */
    public function getComparePolicy()
    {
        return $this->container['comparePolicy'];
    }

    /**
    * Sets comparePolicy
    *
    * @param string|null $comparePolicy 对比策略。 - normal：普通对比 - manyToOne：多对一对比
    *
    * @return $this
    */
    public function setComparePolicy($comparePolicy)
    {
        $this->container['comparePolicy'] = $comparePolicy;
        return $this;
    }

    /**
    * Gets intervalHour
    *  间隔时间。
    *
    * @return int|null
    */
    public function getIntervalHour()
    {
        return $this->container['intervalHour'];
    }

    /**
    * Sets intervalHour
    *
    * @param int|null $intervalHour 间隔时间。
    *
    * @return $this
    */
    public function setIntervalHour($intervalHour)
    {
        $this->container['intervalHour'] = $intervalHour;
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


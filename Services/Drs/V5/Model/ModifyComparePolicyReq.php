<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyComparePolicyReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyComparePolicyReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  对比策略开关-open|close。
    * period  对比策略周期。 - 每周对比：格式示例：“* * 1,3,5” ，其中“1,3,5”对应星期一、星期三、星期五，根据实际填写。 - 每天对比：固定填写“* * 1,2,3,4,5,6,7”。 - 按小时对比：固定填写“* * 1,2,3,4,5,6,7”。
    * beginTime  对比策略生效开始时间，UTC时间，24小时制，时间格式HH:mm:ss，例如：00:00:00，表示UTC时间的00:00:00，北京时间（UTC+08:00）的08:00:00。
    * endTime  对比策略生效结束时间，UTC时间，24小时制，时间格式HH:mm:ss，例如：04:00:00，表示UTC时间的04:00:00，北京时间（UTC+08:00）的12:00:00。
    * compareType  对比类型列表： - object_comparison：对象对比。 - lines：行对比。 - account：用户对比。
    * comparePolicy  对比策略： - normal：普通对比。 - manyToOne：多对一对比。
    * intervalHour  间隔时间，按小时对比时填写，表示每隔多久执行一次对比，单位是小时。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'period' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'compareType' => 'string[]',
            'comparePolicy' => 'string',
            'intervalHour' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  对比策略开关-open|close。
    * period  对比策略周期。 - 每周对比：格式示例：“* * 1,3,5” ，其中“1,3,5”对应星期一、星期三、星期五，根据实际填写。 - 每天对比：固定填写“* * 1,2,3,4,5,6,7”。 - 按小时对比：固定填写“* * 1,2,3,4,5,6,7”。
    * beginTime  对比策略生效开始时间，UTC时间，24小时制，时间格式HH:mm:ss，例如：00:00:00，表示UTC时间的00:00:00，北京时间（UTC+08:00）的08:00:00。
    * endTime  对比策略生效结束时间，UTC时间，24小时制，时间格式HH:mm:ss，例如：04:00:00，表示UTC时间的04:00:00，北京时间（UTC+08:00）的12:00:00。
    * compareType  对比类型列表： - object_comparison：对象对比。 - lines：行对比。 - account：用户对比。
    * comparePolicy  对比策略： - normal：普通对比。 - manyToOne：多对一对比。
    * intervalHour  间隔时间，按小时对比时填写，表示每隔多久执行一次对比，单位是小时。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'period' => null,
        'beginTime' => null,
        'endTime' => null,
        'compareType' => null,
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
    * action  对比策略开关-open|close。
    * period  对比策略周期。 - 每周对比：格式示例：“* * 1,3,5” ，其中“1,3,5”对应星期一、星期三、星期五，根据实际填写。 - 每天对比：固定填写“* * 1,2,3,4,5,6,7”。 - 按小时对比：固定填写“* * 1,2,3,4,5,6,7”。
    * beginTime  对比策略生效开始时间，UTC时间，24小时制，时间格式HH:mm:ss，例如：00:00:00，表示UTC时间的00:00:00，北京时间（UTC+08:00）的08:00:00。
    * endTime  对比策略生效结束时间，UTC时间，24小时制，时间格式HH:mm:ss，例如：04:00:00，表示UTC时间的04:00:00，北京时间（UTC+08:00）的12:00:00。
    * compareType  对比类型列表： - object_comparison：对象对比。 - lines：行对比。 - account：用户对比。
    * comparePolicy  对比策略： - normal：普通对比。 - manyToOne：多对一对比。
    * intervalHour  间隔时间，按小时对比时填写，表示每隔多久执行一次对比，单位是小时。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'period' => 'period',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'compareType' => 'compare_type',
            'comparePolicy' => 'compare_policy',
            'intervalHour' => 'interval_hour'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  对比策略开关-open|close。
    * period  对比策略周期。 - 每周对比：格式示例：“* * 1,3,5” ，其中“1,3,5”对应星期一、星期三、星期五，根据实际填写。 - 每天对比：固定填写“* * 1,2,3,4,5,6,7”。 - 按小时对比：固定填写“* * 1,2,3,4,5,6,7”。
    * beginTime  对比策略生效开始时间，UTC时间，24小时制，时间格式HH:mm:ss，例如：00:00:00，表示UTC时间的00:00:00，北京时间（UTC+08:00）的08:00:00。
    * endTime  对比策略生效结束时间，UTC时间，24小时制，时间格式HH:mm:ss，例如：04:00:00，表示UTC时间的04:00:00，北京时间（UTC+08:00）的12:00:00。
    * compareType  对比类型列表： - object_comparison：对象对比。 - lines：行对比。 - account：用户对比。
    * comparePolicy  对比策略： - normal：普通对比。 - manyToOne：多对一对比。
    * intervalHour  间隔时间，按小时对比时填写，表示每隔多久执行一次对比，单位是小时。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'period' => 'setPeriod',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'compareType' => 'setCompareType',
            'comparePolicy' => 'setComparePolicy',
            'intervalHour' => 'setIntervalHour'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  对比策略开关-open|close。
    * period  对比策略周期。 - 每周对比：格式示例：“* * 1,3,5” ，其中“1,3,5”对应星期一、星期三、星期五，根据实际填写。 - 每天对比：固定填写“* * 1,2,3,4,5,6,7”。 - 按小时对比：固定填写“* * 1,2,3,4,5,6,7”。
    * beginTime  对比策略生效开始时间，UTC时间，24小时制，时间格式HH:mm:ss，例如：00:00:00，表示UTC时间的00:00:00，北京时间（UTC+08:00）的08:00:00。
    * endTime  对比策略生效结束时间，UTC时间，24小时制，时间格式HH:mm:ss，例如：04:00:00，表示UTC时间的04:00:00，北京时间（UTC+08:00）的12:00:00。
    * compareType  对比类型列表： - object_comparison：对象对比。 - lines：行对比。 - account：用户对比。
    * comparePolicy  对比策略： - normal：普通对比。 - manyToOne：多对一对比。
    * intervalHour  间隔时间，按小时对比时填写，表示每隔多久执行一次对比，单位是小时。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'period' => 'getPeriod',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'compareType' => 'getCompareType',
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['compareType'] = isset($data['compareType']) ? $data['compareType'] : null;
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
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
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
    * Gets action
    *  对比策略开关-open|close。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 对比策略开关-open|close。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets period
    *  对比策略周期。 - 每周对比：格式示例：“* * 1,3,5” ，其中“1,3,5”对应星期一、星期三、星期五，根据实际填写。 - 每天对比：固定填写“* * 1,2,3,4,5,6,7”。 - 按小时对比：固定填写“* * 1,2,3,4,5,6,7”。
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
    * @param string|null $period 对比策略周期。 - 每周对比：格式示例：“* * 1,3,5” ，其中“1,3,5”对应星期一、星期三、星期五，根据实际填写。 - 每天对比：固定填写“* * 1,2,3,4,5,6,7”。 - 按小时对比：固定填写“* * 1,2,3,4,5,6,7”。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets beginTime
    *  对比策略生效开始时间，UTC时间，24小时制，时间格式HH:mm:ss，例如：00:00:00，表示UTC时间的00:00:00，北京时间（UTC+08:00）的08:00:00。
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
    * @param string|null $beginTime 对比策略生效开始时间，UTC时间，24小时制，时间格式HH:mm:ss，例如：00:00:00，表示UTC时间的00:00:00，北京时间（UTC+08:00）的08:00:00。
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
    *  对比策略生效结束时间，UTC时间，24小时制，时间格式HH:mm:ss，例如：04:00:00，表示UTC时间的04:00:00，北京时间（UTC+08:00）的12:00:00。
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
    * @param string|null $endTime 对比策略生效结束时间，UTC时间，24小时制，时间格式HH:mm:ss，例如：04:00:00，表示UTC时间的04:00:00，北京时间（UTC+08:00）的12:00:00。
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
    *  对比类型列表： - object_comparison：对象对比。 - lines：行对比。 - account：用户对比。
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
    * @param string[]|null $compareType 对比类型列表： - object_comparison：对象对比。 - lines：行对比。 - account：用户对比。
    *
    * @return $this
    */
    public function setCompareType($compareType)
    {
        $this->container['compareType'] = $compareType;
        return $this;
    }

    /**
    * Gets comparePolicy
    *  对比策略： - normal：普通对比。 - manyToOne：多对一对比。
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
    * @param string|null $comparePolicy 对比策略： - normal：普通对比。 - manyToOne：多对一对比。
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
    *  间隔时间，按小时对比时填写，表示每隔多久执行一次对比，单位是小时。
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
    * @param int|null $intervalHour 间隔时间，按小时对比时填写，表示每隔多久执行一次对比，单位是小时。
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


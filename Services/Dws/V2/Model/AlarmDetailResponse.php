<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmDetailResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmId  告警定义ID
    * alarmName  告警名称
    * alarmLevel  告警级别
    * alarmSource  告警服务
    * alarmMessage  告警消息
    * alarmLocation  告警定位信息
    * resourceId  告警源ID
    * resourceIdName  告警源名称
    * alarmGenerateDate  告警日期
    * alarmStatus  告警状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmId' => 'string',
            'alarmName' => 'string',
            'alarmLevel' => 'string',
            'alarmSource' => 'string',
            'alarmMessage' => 'string',
            'alarmLocation' => 'string',
            'resourceId' => 'string',
            'resourceIdName' => 'string',
            'alarmGenerateDate' => 'string',
            'alarmStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmId  告警定义ID
    * alarmName  告警名称
    * alarmLevel  告警级别
    * alarmSource  告警服务
    * alarmMessage  告警消息
    * alarmLocation  告警定位信息
    * resourceId  告警源ID
    * resourceIdName  告警源名称
    * alarmGenerateDate  告警日期
    * alarmStatus  告警状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmId' => null,
        'alarmName' => null,
        'alarmLevel' => null,
        'alarmSource' => null,
        'alarmMessage' => null,
        'alarmLocation' => null,
        'resourceId' => null,
        'resourceIdName' => null,
        'alarmGenerateDate' => null,
        'alarmStatus' => null
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
    * alarmId  告警定义ID
    * alarmName  告警名称
    * alarmLevel  告警级别
    * alarmSource  告警服务
    * alarmMessage  告警消息
    * alarmLocation  告警定位信息
    * resourceId  告警源ID
    * resourceIdName  告警源名称
    * alarmGenerateDate  告警日期
    * alarmStatus  告警状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmId' => 'alarm_id',
            'alarmName' => 'alarm_name',
            'alarmLevel' => 'alarm_level',
            'alarmSource' => 'alarm_source',
            'alarmMessage' => 'alarm_message',
            'alarmLocation' => 'alarm_location',
            'resourceId' => 'resource_id',
            'resourceIdName' => 'resource_id_name',
            'alarmGenerateDate' => 'alarm_generate_date',
            'alarmStatus' => 'alarm_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmId  告警定义ID
    * alarmName  告警名称
    * alarmLevel  告警级别
    * alarmSource  告警服务
    * alarmMessage  告警消息
    * alarmLocation  告警定位信息
    * resourceId  告警源ID
    * resourceIdName  告警源名称
    * alarmGenerateDate  告警日期
    * alarmStatus  告警状态
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmId' => 'setAlarmId',
            'alarmName' => 'setAlarmName',
            'alarmLevel' => 'setAlarmLevel',
            'alarmSource' => 'setAlarmSource',
            'alarmMessage' => 'setAlarmMessage',
            'alarmLocation' => 'setAlarmLocation',
            'resourceId' => 'setResourceId',
            'resourceIdName' => 'setResourceIdName',
            'alarmGenerateDate' => 'setAlarmGenerateDate',
            'alarmStatus' => 'setAlarmStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmId  告警定义ID
    * alarmName  告警名称
    * alarmLevel  告警级别
    * alarmSource  告警服务
    * alarmMessage  告警消息
    * alarmLocation  告警定位信息
    * resourceId  告警源ID
    * resourceIdName  告警源名称
    * alarmGenerateDate  告警日期
    * alarmStatus  告警状态
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmId' => 'getAlarmId',
            'alarmName' => 'getAlarmName',
            'alarmLevel' => 'getAlarmLevel',
            'alarmSource' => 'getAlarmSource',
            'alarmMessage' => 'getAlarmMessage',
            'alarmLocation' => 'getAlarmLocation',
            'resourceId' => 'getResourceId',
            'resourceIdName' => 'getResourceIdName',
            'alarmGenerateDate' => 'getAlarmGenerateDate',
            'alarmStatus' => 'getAlarmStatus'
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
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['alarmName'] = isset($data['alarmName']) ? $data['alarmName'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['alarmSource'] = isset($data['alarmSource']) ? $data['alarmSource'] : null;
        $this->container['alarmMessage'] = isset($data['alarmMessage']) ? $data['alarmMessage'] : null;
        $this->container['alarmLocation'] = isset($data['alarmLocation']) ? $data['alarmLocation'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceIdName'] = isset($data['resourceIdName']) ? $data['resourceIdName'] : null;
        $this->container['alarmGenerateDate'] = isset($data['alarmGenerateDate']) ? $data['alarmGenerateDate'] : null;
        $this->container['alarmStatus'] = isset($data['alarmStatus']) ? $data['alarmStatus'] : null;
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
    * Gets alarmId
    *  告警定义ID
    *
    * @return string|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string|null $alarmId 告警定义ID
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets alarmName
    *  告警名称
    *
    * @return string|null
    */
    public function getAlarmName()
    {
        return $this->container['alarmName'];
    }

    /**
    * Sets alarmName
    *
    * @param string|null $alarmName 告警名称
    *
    * @return $this
    */
    public function setAlarmName($alarmName)
    {
        $this->container['alarmName'] = $alarmName;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  告警级别
    *
    * @return string|null
    */
    public function getAlarmLevel()
    {
        return $this->container['alarmLevel'];
    }

    /**
    * Sets alarmLevel
    *
    * @param string|null $alarmLevel 告警级别
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
        return $this;
    }

    /**
    * Gets alarmSource
    *  告警服务
    *
    * @return string|null
    */
    public function getAlarmSource()
    {
        return $this->container['alarmSource'];
    }

    /**
    * Sets alarmSource
    *
    * @param string|null $alarmSource 告警服务
    *
    * @return $this
    */
    public function setAlarmSource($alarmSource)
    {
        $this->container['alarmSource'] = $alarmSource;
        return $this;
    }

    /**
    * Gets alarmMessage
    *  告警消息
    *
    * @return string|null
    */
    public function getAlarmMessage()
    {
        return $this->container['alarmMessage'];
    }

    /**
    * Sets alarmMessage
    *
    * @param string|null $alarmMessage 告警消息
    *
    * @return $this
    */
    public function setAlarmMessage($alarmMessage)
    {
        $this->container['alarmMessage'] = $alarmMessage;
        return $this;
    }

    /**
    * Gets alarmLocation
    *  告警定位信息
    *
    * @return string|null
    */
    public function getAlarmLocation()
    {
        return $this->container['alarmLocation'];
    }

    /**
    * Sets alarmLocation
    *
    * @param string|null $alarmLocation 告警定位信息
    *
    * @return $this
    */
    public function setAlarmLocation($alarmLocation)
    {
        $this->container['alarmLocation'] = $alarmLocation;
        return $this;
    }

    /**
    * Gets resourceId
    *  告警源ID
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
    * @param string|null $resourceId 告警源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceIdName
    *  告警源名称
    *
    * @return string|null
    */
    public function getResourceIdName()
    {
        return $this->container['resourceIdName'];
    }

    /**
    * Sets resourceIdName
    *
    * @param string|null $resourceIdName 告警源名称
    *
    * @return $this
    */
    public function setResourceIdName($resourceIdName)
    {
        $this->container['resourceIdName'] = $resourceIdName;
        return $this;
    }

    /**
    * Gets alarmGenerateDate
    *  告警日期
    *
    * @return string|null
    */
    public function getAlarmGenerateDate()
    {
        return $this->container['alarmGenerateDate'];
    }

    /**
    * Sets alarmGenerateDate
    *
    * @param string|null $alarmGenerateDate 告警日期
    *
    * @return $this
    */
    public function setAlarmGenerateDate($alarmGenerateDate)
    {
        $this->container['alarmGenerateDate'] = $alarmGenerateDate;
        return $this;
    }

    /**
    * Gets alarmStatus
    *  告警状态
    *
    * @return string|null
    */
    public function getAlarmStatus()
    {
        return $this->container['alarmStatus'];
    }

    /**
    * Sets alarmStatus
    *
    * @param string|null $alarmStatus 告警状态
    *
    * @return $this
    */
    public function setAlarmStatus($alarmStatus)
    {
        $this->container['alarmStatus'] = $alarmStatus;
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


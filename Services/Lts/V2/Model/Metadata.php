<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Metadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Metadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventType  告警类型
    * eventId  告警id
    * eventSeverity  告警级别
    * eventName  告警名称
    * resourceType  资源类型
    * resourceId  日志组/流名称
    * resourceProvider  告警源
    * ltsAlarmType  告警规则类型(SQL/关键词)
    * logGroupName  日志组原始名称
    * logStreamName  日志流原始名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventType' => 'string',
            'eventId' => 'string',
            'eventSeverity' => 'string',
            'eventName' => 'string',
            'resourceType' => 'string',
            'resourceId' => 'string',
            'resourceProvider' => 'string',
            'ltsAlarmType' => 'string',
            'logGroupName' => 'string',
            'logStreamName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventType  告警类型
    * eventId  告警id
    * eventSeverity  告警级别
    * eventName  告警名称
    * resourceType  资源类型
    * resourceId  日志组/流名称
    * resourceProvider  告警源
    * ltsAlarmType  告警规则类型(SQL/关键词)
    * logGroupName  日志组原始名称
    * logStreamName  日志流原始名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventType' => null,
        'eventId' => null,
        'eventSeverity' => null,
        'eventName' => null,
        'resourceType' => null,
        'resourceId' => null,
        'resourceProvider' => null,
        'ltsAlarmType' => null,
        'logGroupName' => null,
        'logStreamName' => null
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
    * eventType  告警类型
    * eventId  告警id
    * eventSeverity  告警级别
    * eventName  告警名称
    * resourceType  资源类型
    * resourceId  日志组/流名称
    * resourceProvider  告警源
    * ltsAlarmType  告警规则类型(SQL/关键词)
    * logGroupName  日志组原始名称
    * logStreamName  日志流原始名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventType' => 'event_type',
            'eventId' => 'event_id',
            'eventSeverity' => 'event_severity',
            'eventName' => 'event_name',
            'resourceType' => 'resource_type',
            'resourceId' => 'resource_id',
            'resourceProvider' => 'resource_provider',
            'ltsAlarmType' => 'lts_alarm_type',
            'logGroupName' => 'log_group_name',
            'logStreamName' => 'log_stream_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventType  告警类型
    * eventId  告警id
    * eventSeverity  告警级别
    * eventName  告警名称
    * resourceType  资源类型
    * resourceId  日志组/流名称
    * resourceProvider  告警源
    * ltsAlarmType  告警规则类型(SQL/关键词)
    * logGroupName  日志组原始名称
    * logStreamName  日志流原始名称
    *
    * @var string[]
    */
    protected static $setters = [
            'eventType' => 'setEventType',
            'eventId' => 'setEventId',
            'eventSeverity' => 'setEventSeverity',
            'eventName' => 'setEventName',
            'resourceType' => 'setResourceType',
            'resourceId' => 'setResourceId',
            'resourceProvider' => 'setResourceProvider',
            'ltsAlarmType' => 'setLtsAlarmType',
            'logGroupName' => 'setLogGroupName',
            'logStreamName' => 'setLogStreamName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventType  告警类型
    * eventId  告警id
    * eventSeverity  告警级别
    * eventName  告警名称
    * resourceType  资源类型
    * resourceId  日志组/流名称
    * resourceProvider  告警源
    * ltsAlarmType  告警规则类型(SQL/关键词)
    * logGroupName  日志组原始名称
    * logStreamName  日志流原始名称
    *
    * @var string[]
    */
    protected static $getters = [
            'eventType' => 'getEventType',
            'eventId' => 'getEventId',
            'eventSeverity' => 'getEventSeverity',
            'eventName' => 'getEventName',
            'resourceType' => 'getResourceType',
            'resourceId' => 'getResourceId',
            'resourceProvider' => 'getResourceProvider',
            'ltsAlarmType' => 'getLtsAlarmType',
            'logGroupName' => 'getLogGroupName',
            'logStreamName' => 'getLogStreamName'
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
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['eventSeverity'] = isset($data['eventSeverity']) ? $data['eventSeverity'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceProvider'] = isset($data['resourceProvider']) ? $data['resourceProvider'] : null;
        $this->container['ltsAlarmType'] = isset($data['ltsAlarmType']) ? $data['ltsAlarmType'] : null;
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['eventType'] === null) {
            $invalidProperties[] = "'eventType' can't be null";
        }
            if ((mb_strlen($this->container['eventType']) > 1024)) {
                $invalidProperties[] = "invalid value for 'eventType', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['eventType']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['eventId'] === null) {
            $invalidProperties[] = "'eventId' can't be null";
        }
            if ((mb_strlen($this->container['eventId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['eventId']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['eventSeverity'] === null) {
            $invalidProperties[] = "'eventSeverity' can't be null";
        }
            if ((mb_strlen($this->container['eventSeverity']) > 1024)) {
                $invalidProperties[] = "invalid value for 'eventSeverity', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['eventSeverity']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventSeverity', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['eventName'] === null) {
            $invalidProperties[] = "'eventName' can't be null";
        }
            if ((mb_strlen($this->container['eventName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['eventName']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            if ((mb_strlen($this->container['resourceType']) > 1024)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['resourceProvider'] === null) {
            $invalidProperties[] = "'resourceProvider' can't be null";
        }
            if ((mb_strlen($this->container['resourceProvider']) > 1024)) {
                $invalidProperties[] = "invalid value for 'resourceProvider', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['resourceProvider']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceProvider', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['ltsAlarmType'] === null) {
            $invalidProperties[] = "'ltsAlarmType' can't be null";
        }
            if ((mb_strlen($this->container['ltsAlarmType']) > 100)) {
                $invalidProperties[] = "invalid value for 'ltsAlarmType', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['ltsAlarmType']) < 1)) {
                $invalidProperties[] = "invalid value for 'ltsAlarmType', the character length must be bigger than or equal to 1.";
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
    * Gets eventType
    *  告警类型
    *
    * @return string
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string $eventType 告警类型
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets eventId
    *  告警id
    *
    * @return string
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param string $eventId 告警id
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets eventSeverity
    *  告警级别
    *
    * @return string
    */
    public function getEventSeverity()
    {
        return $this->container['eventSeverity'];
    }

    /**
    * Sets eventSeverity
    *
    * @param string $eventSeverity 告警级别
    *
    * @return $this
    */
    public function setEventSeverity($eventSeverity)
    {
        $this->container['eventSeverity'] = $eventSeverity;
        return $this;
    }

    /**
    * Gets eventName
    *  告警名称
    *
    * @return string
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string $eventName 告警名称
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceId
    *  日志组/流名称
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 日志组/流名称
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceProvider
    *  告警源
    *
    * @return string
    */
    public function getResourceProvider()
    {
        return $this->container['resourceProvider'];
    }

    /**
    * Sets resourceProvider
    *
    * @param string $resourceProvider 告警源
    *
    * @return $this
    */
    public function setResourceProvider($resourceProvider)
    {
        $this->container['resourceProvider'] = $resourceProvider;
        return $this;
    }

    /**
    * Gets ltsAlarmType
    *  告警规则类型(SQL/关键词)
    *
    * @return string
    */
    public function getLtsAlarmType()
    {
        return $this->container['ltsAlarmType'];
    }

    /**
    * Sets ltsAlarmType
    *
    * @param string $ltsAlarmType 告警规则类型(SQL/关键词)
    *
    * @return $this
    */
    public function setLtsAlarmType($ltsAlarmType)
    {
        $this->container['ltsAlarmType'] = $ltsAlarmType;
        return $this;
    }

    /**
    * Gets logGroupName
    *  日志组原始名称
    *
    * @return string|null
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string|null $logGroupName 日志组原始名称
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets logStreamName
    *  日志流原始名称
    *
    * @return string|null
    */
    public function getLogStreamName()
    {
        return $this->container['logStreamName'];
    }

    /**
    * Sets logStreamName
    *
    * @param string|null $logStreamName 日志流原始名称
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
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


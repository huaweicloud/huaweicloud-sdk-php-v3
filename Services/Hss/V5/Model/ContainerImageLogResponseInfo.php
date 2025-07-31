<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContainerImageLogResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContainerImageLogResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceName  资源名称
    * resourceType  资源类型
    * eventName  事件名称
    * eventId  事件id
    * eventType  事件类型
    * sourceIp  触发事件的源ip
    * userName  触发事件的用户
    * time  日志产生的时间
    * content  日志内容
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceName' => 'string',
            'resourceType' => 'string',
            'eventName' => 'string',
            'eventId' => 'string',
            'eventType' => 'string',
            'sourceIp' => 'string',
            'userName' => 'string',
            'time' => 'int',
            'content' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceName  资源名称
    * resourceType  资源类型
    * eventName  事件名称
    * eventId  事件id
    * eventType  事件类型
    * sourceIp  触发事件的源ip
    * userName  触发事件的用户
    * time  日志产生的时间
    * content  日志内容
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceName' => null,
        'resourceType' => null,
        'eventName' => null,
        'eventId' => null,
        'eventType' => null,
        'sourceIp' => null,
        'userName' => null,
        'time' => 'int64',
        'content' => null
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
    * resourceName  资源名称
    * resourceType  资源类型
    * eventName  事件名称
    * eventId  事件id
    * eventType  事件类型
    * sourceIp  触发事件的源ip
    * userName  触发事件的用户
    * time  日志产生的时间
    * content  日志内容
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceName' => 'resource_name',
            'resourceType' => 'resource_type',
            'eventName' => 'event_name',
            'eventId' => 'event_id',
            'eventType' => 'event_type',
            'sourceIp' => 'source_ip',
            'userName' => 'user_name',
            'time' => 'time',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceName  资源名称
    * resourceType  资源类型
    * eventName  事件名称
    * eventId  事件id
    * eventType  事件类型
    * sourceIp  触发事件的源ip
    * userName  触发事件的用户
    * time  日志产生的时间
    * content  日志内容
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceName' => 'setResourceName',
            'resourceType' => 'setResourceType',
            'eventName' => 'setEventName',
            'eventId' => 'setEventId',
            'eventType' => 'setEventType',
            'sourceIp' => 'setSourceIp',
            'userName' => 'setUserName',
            'time' => 'setTime',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceName  资源名称
    * resourceType  资源类型
    * eventName  事件名称
    * eventId  事件id
    * eventType  事件类型
    * sourceIp  触发事件的源ip
    * userName  触发事件的用户
    * time  日志产生的时间
    * content  日志内容
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceName' => 'getResourceName',
            'resourceType' => 'getResourceType',
            'eventName' => 'getEventName',
            'eventId' => 'getEventId',
            'eventType' => 'getEventType',
            'sourceIp' => 'getSourceIp',
            'userName' => 'getUserName',
            'time' => 'getTime',
            'content' => 'getContent'
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
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['sourceIp'] = isset($data['sourceIp']) ? $data['sourceIp'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) > 256)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['eventId']) && (mb_strlen($this->container['eventId']) > 64)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['eventId']) && (mb_strlen($this->container['eventId']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['eventType']) && (mb_strlen($this->container['eventType']) > 64)) {
                $invalidProperties[] = "invalid value for 'eventType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['eventType']) && (mb_strlen($this->container['eventType']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceIp']) && (mb_strlen($this->container['sourceIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'sourceIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourceIp']) && (mb_strlen($this->container['sourceIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 256)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['time']) && ($this->container['time'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'time', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['time']) && ($this->container['time'] < 0)) {
                $invalidProperties[] = "invalid value for 'time', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 256)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) < 1)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
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
    * Gets resourceName
    *  资源名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets eventName
    *  事件名称
    *
    * @return string|null
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string|null $eventName 事件名称
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets eventId
    *  事件id
    *
    * @return string|null
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param string|null $eventId 事件id
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets eventType
    *  事件类型
    *
    * @return string|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string|null $eventType 事件类型
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets sourceIp
    *  触发事件的源ip
    *
    * @return string|null
    */
    public function getSourceIp()
    {
        return $this->container['sourceIp'];
    }

    /**
    * Sets sourceIp
    *
    * @param string|null $sourceIp 触发事件的源ip
    *
    * @return $this
    */
    public function setSourceIp($sourceIp)
    {
        $this->container['sourceIp'] = $sourceIp;
        return $this;
    }

    /**
    * Gets userName
    *  触发事件的用户
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 触发事件的用户
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets time
    *  日志产生的时间
    *
    * @return int|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int|null $time 日志产生的时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets content
    *  日志内容
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 日志内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
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


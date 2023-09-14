<?php

namespace HuaweiCloud\SDK\Csms\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Event implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Event';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  事件通知名称。
    * eventId  事件通知的资源标识符。
    * eventTypes  设置事件的基础事件类型列表,。  约束：数组大小：最小1，最大12。
    * state  事件通知状态，取值如下。  ENABLED：表示启用状态 DISABLED：表示禁用状态
    * createTime  事件通知创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * updateTime  事件通知上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * notification  notification
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'eventId' => 'string',
            'eventTypes' => 'string[]',
            'state' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'notification' => '\HuaweiCloud\SDK\Csms\v1\Model\Notification'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  事件通知名称。
    * eventId  事件通知的资源标识符。
    * eventTypes  设置事件的基础事件类型列表,。  约束：数组大小：最小1，最大12。
    * state  事件通知状态，取值如下。  ENABLED：表示启用状态 DISABLED：表示禁用状态
    * createTime  事件通知创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * updateTime  事件通知上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * notification  notification
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'eventId' => null,
        'eventTypes' => null,
        'state' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'notification' => null
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
    * name  事件通知名称。
    * eventId  事件通知的资源标识符。
    * eventTypes  设置事件的基础事件类型列表,。  约束：数组大小：最小1，最大12。
    * state  事件通知状态，取值如下。  ENABLED：表示启用状态 DISABLED：表示禁用状态
    * createTime  事件通知创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * updateTime  事件通知上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * notification  notification
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'eventId' => 'event_id',
            'eventTypes' => 'event_types',
            'state' => 'state',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'notification' => 'notification'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  事件通知名称。
    * eventId  事件通知的资源标识符。
    * eventTypes  设置事件的基础事件类型列表,。  约束：数组大小：最小1，最大12。
    * state  事件通知状态，取值如下。  ENABLED：表示启用状态 DISABLED：表示禁用状态
    * createTime  事件通知创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * updateTime  事件通知上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * notification  notification
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'eventId' => 'setEventId',
            'eventTypes' => 'setEventTypes',
            'state' => 'setState',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'notification' => 'setNotification'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  事件通知名称。
    * eventId  事件通知的资源标识符。
    * eventTypes  设置事件的基础事件类型列表,。  约束：数组大小：最小1，最大12。
    * state  事件通知状态，取值如下。  ENABLED：表示启用状态 DISABLED：表示禁用状态
    * createTime  事件通知创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * updateTime  事件通知上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * notification  notification
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'eventId' => 'getEventId',
            'eventTypes' => 'getEventTypes',
            'state' => 'getState',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'notification' => 'getNotification'
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
    const EVENT_TYPES_SECRET_VERSION_CREATED = 'SECRET_VERSION_CREATED';
    const EVENT_TYPES_SECRET_VERSION_EXPIRED = 'SECRET_VERSION_EXPIRED';
    const EVENT_TYPES_SECRET_ROTATED = 'SECRET_ROTATED';
    const EVENT_TYPES_SECRET_DELETED = 'SECRET_DELETED';
    const STATE_ENABLED = 'ENABLED';
    const STATE_DISABLED = 'DISABLED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventTypesAllowableValues()
    {
        return [
            self::EVENT_TYPES_SECRET_VERSION_CREATED,
            self::EVENT_TYPES_SECRET_VERSION_EXPIRED,
            self::EVENT_TYPES_SECRET_ROTATED,
            self::EVENT_TYPES_SECRET_DELETED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ENABLED,
            self::STATE_DISABLED,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['eventTypes'] = isset($data['eventTypes']) ? $data['eventTypes'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['notification'] = isset($data['notification']) ? $data['notification'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && !preg_match("/^[a-zA-Z0-9_-]{1,64}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_-]{1,64}$/.";
            }
            if (!is_null($this->container['eventId']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['eventId'])) {
                $invalidProperties[] = "invalid value for 'eventId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 13)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 13)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
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
    * Gets name
    *  事件通知名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 事件通知名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets eventId
    *  事件通知的资源标识符。
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
    * @param string|null $eventId 事件通知的资源标识符。
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets eventTypes
    *  设置事件的基础事件类型列表,。  约束：数组大小：最小1，最大12。
    *
    * @return string[]|null
    */
    public function getEventTypes()
    {
        return $this->container['eventTypes'];
    }

    /**
    * Sets eventTypes
    *
    * @param string[]|null $eventTypes 设置事件的基础事件类型列表,。  约束：数组大小：最小1，最大12。
    *
    * @return $this
    */
    public function setEventTypes($eventTypes)
    {
        $this->container['eventTypes'] = $eventTypes;
        return $this;
    }

    /**
    * Gets state
    *  事件通知状态，取值如下。  ENABLED：表示启用状态 DISABLED：表示禁用状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 事件通知状态，取值如下。  ENABLED：表示启用状态 DISABLED：表示禁用状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets createTime
    *  事件通知创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 事件通知创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  事件通知上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 事件通知上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets notification
    *  notification
    *
    * @return \HuaweiCloud\SDK\Csms\v1\Model\Notification|null
    */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
    * Sets notification
    *
    * @param \HuaweiCloud\SDK\Csms\v1\Model\Notification|null $notification notification
    *
    * @return $this
    */
    public function setNotification($notification)
    {
        $this->container['notification'] = $notification;
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


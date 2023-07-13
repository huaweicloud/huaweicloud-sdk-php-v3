<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Notification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Notification';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventName  消息事件的名称.
    * status  事件通知模板选中状态
    * topic  事件通知主题的URN.
    * msgType  订阅消息类型.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventName' => 'string',
            'status' => 'string',
            'topic' => 'string',
            'msgType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventName  消息事件的名称.
    * status  事件通知模板选中状态
    * topic  事件通知主题的URN.
    * msgType  订阅消息类型.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventName' => null,
        'status' => null,
        'topic' => null,
        'msgType' => null
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
    * eventName  消息事件的名称.
    * status  事件通知模板选中状态
    * topic  事件通知主题的URN.
    * msgType  订阅消息类型.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventName' => 'event_name',
            'status' => 'status',
            'topic' => 'topic',
            'msgType' => 'msg_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventName  消息事件的名称.
    * status  事件通知模板选中状态
    * topic  事件通知主题的URN.
    * msgType  订阅消息类型.
    *
    * @var string[]
    */
    protected static $setters = [
            'eventName' => 'setEventName',
            'status' => 'setStatus',
            'topic' => 'setTopic',
            'msgType' => 'setMsgType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventName  消息事件的名称.
    * status  事件通知模板选中状态
    * topic  事件通知主题的URN.
    * msgType  订阅消息类型.
    *
    * @var string[]
    */
    protected static $getters = [
            'eventName' => 'getEventName',
            'status' => 'getStatus',
            'topic' => 'getTopic',
            'msgType' => 'getMsgType'
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
    const STATUS_ON = 'on';
    const STATUS_OFF = 'off';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ON,
            self::STATUS_OFF,
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
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['msgType'] = isset($data['msgType']) ? $data['msgType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) > 256)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) < 0)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 16)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['topic']) && (mb_strlen($this->container['topic']) > 1024)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['topic']) && (mb_strlen($this->container['topic']) < 1)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['msgType']) && ($this->container['msgType'] > 4)) {
                $invalidProperties[] = "invalid value for 'msgType', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['msgType']) && ($this->container['msgType'] < 0)) {
                $invalidProperties[] = "invalid value for 'msgType', must be bigger than or equal to 0.";
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
    * Gets eventName
    *  消息事件的名称.
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
    * @param string|null $eventName 消息事件的名称.
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets status
    *  事件通知模板选中状态
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
    * @param string|null $status 事件通知模板选中状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets topic
    *  事件通知主题的URN.
    *
    * @return string|null
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string|null $topic 事件通知主题的URN.
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets msgType
    *  订阅消息类型.
    *
    * @return int|null
    */
    public function getMsgType()
    {
        return $this->container['msgType'];
    }

    /**
    * Sets msgType
    *
    * @param int|null $msgType 订阅消息类型.
    *
    * @return $this
    */
    public function setMsgType($msgType)
    {
        $this->container['msgType'] = $msgType;
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


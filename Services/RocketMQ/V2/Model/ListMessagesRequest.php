<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMessagesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMessagesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engine  消息引擎。
    * instanceId  实例ID。
    * topic  主题名称。
    * limit  查询数量。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0。
    * startTime  开始时间（不通过msg_id精确查询消息时，此参数必填）。
    * endTime  结束时间（不通过msg_id精确查询消息时，此参数必填）。
    * msgId  消息ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engine' => 'string',
            'instanceId' => 'string',
            'topic' => 'string',
            'limit' => 'string',
            'offset' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'msgId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engine  消息引擎。
    * instanceId  实例ID。
    * topic  主题名称。
    * limit  查询数量。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0。
    * startTime  开始时间（不通过msg_id精确查询消息时，此参数必填）。
    * endTime  结束时间（不通过msg_id精确查询消息时，此参数必填）。
    * msgId  消息ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engine' => null,
        'instanceId' => null,
        'topic' => null,
        'limit' => null,
        'offset' => null,
        'startTime' => null,
        'endTime' => null,
        'msgId' => null
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
    * engine  消息引擎。
    * instanceId  实例ID。
    * topic  主题名称。
    * limit  查询数量。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0。
    * startTime  开始时间（不通过msg_id精确查询消息时，此参数必填）。
    * endTime  结束时间（不通过msg_id精确查询消息时，此参数必填）。
    * msgId  消息ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engine' => 'engine',
            'instanceId' => 'instance_id',
            'topic' => 'topic',
            'limit' => 'limit',
            'offset' => 'offset',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'msgId' => 'msg_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engine  消息引擎。
    * instanceId  实例ID。
    * topic  主题名称。
    * limit  查询数量。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0。
    * startTime  开始时间（不通过msg_id精确查询消息时，此参数必填）。
    * endTime  结束时间（不通过msg_id精确查询消息时，此参数必填）。
    * msgId  消息ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'engine' => 'setEngine',
            'instanceId' => 'setInstanceId',
            'topic' => 'setTopic',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'msgId' => 'setMsgId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engine  消息引擎。
    * instanceId  实例ID。
    * topic  主题名称。
    * limit  查询数量。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0。
    * startTime  开始时间（不通过msg_id精确查询消息时，此参数必填）。
    * endTime  结束时间（不通过msg_id精确查询消息时，此参数必填）。
    * msgId  消息ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'engine' => 'getEngine',
            'instanceId' => 'getInstanceId',
            'topic' => 'getTopic',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'msgId' => 'getMsgId'
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
    const ENGINE_RELIABILITY = 'reliability';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineAllowableValues()
    {
        return [
            self::ENGINE_RELIABILITY,
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
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : 'reliability';
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['msgId'] = isset($data['msgId']) ? $data['msgId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['engine'] === null) {
            $invalidProperties[] = "'engine' can't be null";
        }
            $allowedValues = $this->getEngineAllowableValues();
                if (!is_null($this->container['engine']) && !in_array($this->container['engine'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engine', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
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
    * Gets engine
    *  消息引擎。
    *
    * @return string
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string $engine 消息引擎。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets topic
    *  主题名称。
    *
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic 主题名称。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets limit
    *  查询数量。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 查询数量。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询， offset大于等于0。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 偏移量，表示从此偏移量开始查询， offset大于等于0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间（不通过msg_id精确查询消息时，此参数必填）。
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
    * @param string|null $startTime 开始时间（不通过msg_id精确查询消息时，此参数必填）。
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
    *  结束时间（不通过msg_id精确查询消息时，此参数必填）。
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
    * @param string|null $endTime 结束时间（不通过msg_id精确查询消息时，此参数必填）。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets msgId
    *  消息ID。
    *
    * @return string|null
    */
    public function getMsgId()
    {
        return $this->container['msgId'];
    }

    /**
    * Sets msgId
    *
    * @param string|null $msgId 消息ID。
    *
    * @return $this
    */
    public function setMsgId($msgId)
    {
        $this->container['msgId'] = $msgId;
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


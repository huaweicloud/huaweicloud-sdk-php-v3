<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateLogStreamResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateLogStreamResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * creationTime  创建该日志流的时间
    * logTopicName  日志流的名称。
    * logTopicId  日志流ID。
    * ttlInDays  日志存储时间（天）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'creationTime' => 'int',
            'logTopicName' => 'string',
            'logTopicId' => 'string',
            'ttlInDays' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * creationTime  创建该日志流的时间
    * logTopicName  日志流的名称。
    * logTopicId  日志流ID。
    * ttlInDays  日志存储时间（天）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'creationTime' => 'int64',
        'logTopicName' => null,
        'logTopicId' => null,
        'ttlInDays' => 'int32'
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
    * creationTime  创建该日志流的时间
    * logTopicName  日志流的名称。
    * logTopicId  日志流ID。
    * ttlInDays  日志存储时间（天）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'creationTime' => 'creation_time',
            'logTopicName' => 'log_topic_name',
            'logTopicId' => 'log_topic_id',
            'ttlInDays' => 'ttl_in_days'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * creationTime  创建该日志流的时间
    * logTopicName  日志流的名称。
    * logTopicId  日志流ID。
    * ttlInDays  日志存储时间（天）。
    *
    * @var string[]
    */
    protected static $setters = [
            'creationTime' => 'setCreationTime',
            'logTopicName' => 'setLogTopicName',
            'logTopicId' => 'setLogTopicId',
            'ttlInDays' => 'setTtlInDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * creationTime  创建该日志流的时间
    * logTopicName  日志流的名称。
    * logTopicId  日志流ID。
    * ttlInDays  日志存储时间（天）。
    *
    * @var string[]
    */
    protected static $getters = [
            'creationTime' => 'getCreationTime',
            'logTopicName' => 'getLogTopicName',
            'logTopicId' => 'getLogTopicId',
            'ttlInDays' => 'getTtlInDays'
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
    const TTL_IN_DAYS_7 = 7;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTtlInDaysAllowableValues()
    {
        return [
            self::TTL_IN_DAYS_7,
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
        $this->container['creationTime'] = isset($data['creationTime']) ? $data['creationTime'] : null;
        $this->container['logTopicName'] = isset($data['logTopicName']) ? $data['logTopicName'] : null;
        $this->container['logTopicId'] = isset($data['logTopicId']) ? $data['logTopicId'] : null;
        $this->container['ttlInDays'] = isset($data['ttlInDays']) ? $data['ttlInDays'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['logTopicName']) && (mb_strlen($this->container['logTopicName']) > 64)) {
                $invalidProperties[] = "invalid value for 'logTopicName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['logTopicName']) && (mb_strlen($this->container['logTopicName']) < 1)) {
                $invalidProperties[] = "invalid value for 'logTopicName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['logTopicId']) && (mb_strlen($this->container['logTopicId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logTopicId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['logTopicId']) && (mb_strlen($this->container['logTopicId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logTopicId', the character length must be bigger than or equal to 36.";
            }
            $allowedValues = $this->getTtlInDaysAllowableValues();
                if (!is_null($this->container['ttlInDays']) && !in_array($this->container['ttlInDays'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ttlInDays', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['ttlInDays']) && ($this->container['ttlInDays'] > 365)) {
                $invalidProperties[] = "invalid value for 'ttlInDays', must be smaller than or equal to 365.";
            }
            if (!is_null($this->container['ttlInDays']) && ($this->container['ttlInDays'] < 1)) {
                $invalidProperties[] = "invalid value for 'ttlInDays', must be bigger than or equal to 1.";
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
    * Gets creationTime
    *  创建该日志流的时间
    *
    * @return int|null
    */
    public function getCreationTime()
    {
        return $this->container['creationTime'];
    }

    /**
    * Sets creationTime
    *
    * @param int|null $creationTime 创建该日志流的时间
    *
    * @return $this
    */
    public function setCreationTime($creationTime)
    {
        $this->container['creationTime'] = $creationTime;
        return $this;
    }

    /**
    * Gets logTopicName
    *  日志流的名称。
    *
    * @return string|null
    */
    public function getLogTopicName()
    {
        return $this->container['logTopicName'];
    }

    /**
    * Sets logTopicName
    *
    * @param string|null $logTopicName 日志流的名称。
    *
    * @return $this
    */
    public function setLogTopicName($logTopicName)
    {
        $this->container['logTopicName'] = $logTopicName;
        return $this;
    }

    /**
    * Gets logTopicId
    *  日志流ID。
    *
    * @return string|null
    */
    public function getLogTopicId()
    {
        return $this->container['logTopicId'];
    }

    /**
    * Sets logTopicId
    *
    * @param string|null $logTopicId 日志流ID。
    *
    * @return $this
    */
    public function setLogTopicId($logTopicId)
    {
        $this->container['logTopicId'] = $logTopicId;
        return $this;
    }

    /**
    * Gets ttlInDays
    *  日志存储时间（天）。
    *
    * @return int|null
    */
    public function getTtlInDays()
    {
        return $this->container['ttlInDays'];
    }

    /**
    * Sets ttlInDays
    *
    * @param int|null $ttlInDays 日志存储时间（天）。
    *
    * @return $this
    */
    public function setTtlInDays($ttlInDays)
    {
        $this->container['ttlInDays'] = $ttlInDays;
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


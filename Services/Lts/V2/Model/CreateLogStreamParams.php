<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLogStreamParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLogStreamParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logStreamName  需要创建的日志流名称。
    * ttlInDays  日志存储时间 说明： 该参数仅对华东-上海一、华北-北京四、华南-广州用户开放。
    * tags  标签字段信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logStreamName' => 'string',
            'ttlInDays' => 'int',
            'tags' => '\HuaweiCloud\SDK\Lts\V2\Model\TagsBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logStreamName  需要创建的日志流名称。
    * ttlInDays  日志存储时间 说明： 该参数仅对华东-上海一、华北-北京四、华南-广州用户开放。
    * tags  标签字段信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logStreamName' => null,
        'ttlInDays' => null,
        'tags' => null
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
    * logStreamName  需要创建的日志流名称。
    * ttlInDays  日志存储时间 说明： 该参数仅对华东-上海一、华北-北京四、华南-广州用户开放。
    * tags  标签字段信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logStreamName' => 'log_stream_name',
            'ttlInDays' => 'ttl_in_days',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logStreamName  需要创建的日志流名称。
    * ttlInDays  日志存储时间 说明： 该参数仅对华东-上海一、华北-北京四、华南-广州用户开放。
    * tags  标签字段信息
    *
    * @var string[]
    */
    protected static $setters = [
            'logStreamName' => 'setLogStreamName',
            'ttlInDays' => 'setTtlInDays',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logStreamName  需要创建的日志流名称。
    * ttlInDays  日志存储时间 说明： 该参数仅对华东-上海一、华北-北京四、华南-广州用户开放。
    * tags  标签字段信息
    *
    * @var string[]
    */
    protected static $getters = [
            'logStreamName' => 'getLogStreamName',
            'ttlInDays' => 'getTtlInDays',
            'tags' => 'getTags'
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
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
        $this->container['ttlInDays'] = isset($data['ttlInDays']) ? $data['ttlInDays'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['logStreamName'] === null) {
            $invalidProperties[] = "'logStreamName' can't be null";
        }
            if ((mb_strlen($this->container['logStreamName']) > 64)) {
                $invalidProperties[] = "invalid value for 'logStreamName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['logStreamName']) < 1)) {
                $invalidProperties[] = "invalid value for 'logStreamName', the character length must be bigger than or equal to 1.";
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
    * Gets logStreamName
    *  需要创建的日志流名称。
    *
    * @return string
    */
    public function getLogStreamName()
    {
        return $this->container['logStreamName'];
    }

    /**
    * Sets logStreamName
    *
    * @param string $logStreamName 需要创建的日志流名称。
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
        return $this;
    }

    /**
    * Gets ttlInDays
    *  日志存储时间 说明： 该参数仅对华东-上海一、华北-北京四、华南-广州用户开放。
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
    * @param int|null $ttlInDays 日志存储时间 说明： 该参数仅对华东-上海一、华北-北京四、华南-广州用户开放。
    *
    * @return $this
    */
    public function setTtlInDays($ttlInDays)
    {
        $this->container['ttlInDays'] = $ttlInDays;
        return $this;
    }

    /**
    * Gets tags
    *  标签字段信息
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\TagsBody[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\TagsBody[]|null $tags 标签字段信息
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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


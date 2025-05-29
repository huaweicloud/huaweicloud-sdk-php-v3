<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateLogStreamParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateLogStreamParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ttlInDays  日志存储时间（天）。
    * tags  标签字段信息
    * whetherLogStorage  日志是否存储
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ttlInDays' => 'int',
            'tags' => '\HuaweiCloud\SDK\Lts\V2\Model\TagsBody[]',
            'whetherLogStorage' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ttlInDays  日志存储时间（天）。
    * tags  标签字段信息
    * whetherLogStorage  日志是否存储
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ttlInDays' => 'int32',
        'tags' => null,
        'whetherLogStorage' => null
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
    * ttlInDays  日志存储时间（天）。
    * tags  标签字段信息
    * whetherLogStorage  日志是否存储
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ttlInDays' => 'ttl_in_days',
            'tags' => 'tags',
            'whetherLogStorage' => 'whether_log_storage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ttlInDays  日志存储时间（天）。
    * tags  标签字段信息
    * whetherLogStorage  日志是否存储
    *
    * @var string[]
    */
    protected static $setters = [
            'ttlInDays' => 'setTtlInDays',
            'tags' => 'setTags',
            'whetherLogStorage' => 'setWhetherLogStorage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ttlInDays  日志存储时间（天）。
    * tags  标签字段信息
    * whetherLogStorage  日志是否存储
    *
    * @var string[]
    */
    protected static $getters = [
            'ttlInDays' => 'getTtlInDays',
            'tags' => 'getTags',
            'whetherLogStorage' => 'getWhetherLogStorage'
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
        $this->container['ttlInDays'] = isset($data['ttlInDays']) ? $data['ttlInDays'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['whetherLogStorage'] = isset($data['whetherLogStorage']) ? $data['whetherLogStorage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ttlInDays'] === null) {
            $invalidProperties[] = "'ttlInDays' can't be null";
        }
            if (($this->container['ttlInDays'] > 365)) {
                $invalidProperties[] = "invalid value for 'ttlInDays', must be smaller than or equal to 365.";
            }
            if (($this->container['ttlInDays'] < 1)) {
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
    * Gets ttlInDays
    *  日志存储时间（天）。
    *
    * @return int
    */
    public function getTtlInDays()
    {
        return $this->container['ttlInDays'];
    }

    /**
    * Sets ttlInDays
    *
    * @param int $ttlInDays 日志存储时间（天）。
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
    * Gets whetherLogStorage
    *  日志是否存储
    *
    * @return bool|null
    */
    public function getWhetherLogStorage()
    {
        return $this->container['whetherLogStorage'];
    }

    /**
    * Sets whetherLogStorage
    *
    * @param bool|null $whetherLogStorage 日志是否存储
    *
    * @return $this
    */
    public function setWhetherLogStorage($whetherLogStorage)
    {
        $this->container['whetherLogStorage'] = $whetherLogStorage;
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


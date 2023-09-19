<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveEvent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timestamp  事件戳。从1970-01-01 00:00:00:000开始的毫秒数
    * type  事件类型。
    * content  事件内容。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timestamp' => 'int',
            'type' => 'int',
            'content' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timestamp  事件戳。从1970-01-01 00:00:00:000开始的毫秒数
    * type  事件类型。
    * content  事件内容。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timestamp' => 'int64',
        'type' => 'int32',
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
    * timestamp  事件戳。从1970-01-01 00:00:00:000开始的毫秒数
    * type  事件类型。
    * content  事件内容。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timestamp' => 'timestamp',
            'type' => 'type',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timestamp  事件戳。从1970-01-01 00:00:00:000开始的毫秒数
    * type  事件类型。
    * content  事件内容。
    *
    * @var string[]
    */
    protected static $setters = [
            'timestamp' => 'setTimestamp',
            'type' => 'setType',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timestamp  事件戳。从1970-01-01 00:00:00:000开始的毫秒数
    * type  事件类型。
    * content  事件内容。
    *
    * @var string[]
    */
    protected static $getters = [
            'timestamp' => 'getTimestamp',
            'type' => 'getType',
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
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
            if (($this->container['timestamp'] > 4102415999000)) {
                $invalidProperties[] = "invalid value for 'timestamp', must be smaller than or equal to 4102415999000.";
            }
            if (($this->container['timestamp'] < 0)) {
                $invalidProperties[] = "invalid value for 'timestamp', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] > 100)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] < 0)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 4096)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) < 0)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 0.";
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
    * Gets timestamp
    *  事件戳。从1970-01-01 00:00:00:000开始的毫秒数
    *
    * @return int
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int $timestamp 事件戳。从1970-01-01 00:00:00:000开始的毫秒数
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets type
    *  事件类型。
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 事件类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets content
    *  事件内容。
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
    * @param string|null $content 事件内容。
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


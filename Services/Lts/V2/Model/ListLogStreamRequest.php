<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLogStreamRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLogStreamRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logGroupId  租户想查询的日志流所在的日志组的groupid，一般为36位字符串。
    * tag  按条件搜索，内容设置为日志流的tag键值对，比如k1=v1；
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logGroupId' => 'string',
            'tag' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logGroupId  租户想查询的日志流所在的日志组的groupid，一般为36位字符串。
    * tag  按条件搜索，内容设置为日志流的tag键值对，比如k1=v1；
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logGroupId' => null,
        'tag' => null
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
    * logGroupId  租户想查询的日志流所在的日志组的groupid，一般为36位字符串。
    * tag  按条件搜索，内容设置为日志流的tag键值对，比如k1=v1；
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logGroupId' => 'log_group_id',
            'tag' => 'tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logGroupId  租户想查询的日志流所在的日志组的groupid，一般为36位字符串。
    * tag  按条件搜索，内容设置为日志流的tag键值对，比如k1=v1；
    *
    * @var string[]
    */
    protected static $setters = [
            'logGroupId' => 'setLogGroupId',
            'tag' => 'setTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logGroupId  租户想查询的日志流所在的日志组的groupid，一般为36位字符串。
    * tag  按条件搜索，内容设置为日志流的tag键值对，比如k1=v1；
    *
    * @var string[]
    */
    protected static $getters = [
            'logGroupId' => 'getLogGroupId',
            'tag' => 'getTag'
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
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['logGroupId'] === null) {
            $invalidProperties[] = "'logGroupId' can't be null";
        }
            if ((mb_strlen($this->container['logGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['logGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 1024)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 1)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 1.";
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
    * Gets logGroupId
    *  租户想查询的日志流所在的日志组的groupid，一般为36位字符串。
    *
    * @return string
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string $logGroupId 租户想查询的日志流所在的日志组的groupid，一般为36位字符串。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets tag
    *  按条件搜索，内容设置为日志流的tag键值对，比如k1=v1；
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 按条件搜索，内容设置为日志流的tag键值对，比如k1=v1；
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
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


<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubscriptionTagInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubscriptionTagInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  键。 最大长度36个字符。 字符集：A-Z，a-z ， 0-9，‘-’，‘_’，UNICODE字符（\\u4E00-\\u9FFF）
    * value  值。 最大长度43个字符，可以为空字符串。 字符集：A-Z，a-z ， 0-9，‘.’，‘-’，‘_’，UNICODE字符（\\u4E00-\\u9FFF）
    * createTime  创建时间戳
    * updateTime  更新时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'value' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  键。 最大长度36个字符。 字符集：A-Z，a-z ， 0-9，‘-’，‘_’，UNICODE字符（\\u4E00-\\u9FFF）
    * value  值。 最大长度43个字符，可以为空字符串。 字符集：A-Z，a-z ， 0-9，‘.’，‘-’，‘_’，UNICODE字符（\\u4E00-\\u9FFF）
    * createTime  创建时间戳
    * updateTime  更新时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'value' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64'
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
    * key  键。 最大长度36个字符。 字符集：A-Z，a-z ， 0-9，‘-’，‘_’，UNICODE字符（\\u4E00-\\u9FFF）
    * value  值。 最大长度43个字符，可以为空字符串。 字符集：A-Z，a-z ， 0-9，‘.’，‘-’，‘_’，UNICODE字符（\\u4E00-\\u9FFF）
    * createTime  创建时间戳
    * updateTime  更新时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'value' => 'value',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  键。 最大长度36个字符。 字符集：A-Z，a-z ， 0-9，‘-’，‘_’，UNICODE字符（\\u4E00-\\u9FFF）
    * value  值。 最大长度43个字符，可以为空字符串。 字符集：A-Z，a-z ， 0-9，‘.’，‘-’，‘_’，UNICODE字符（\\u4E00-\\u9FFF）
    * createTime  创建时间戳
    * updateTime  更新时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'value' => 'setValue',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  键。 最大长度36个字符。 字符集：A-Z，a-z ， 0-9，‘-’，‘_’，UNICODE字符（\\u4E00-\\u9FFF）
    * value  值。 最大长度43个字符，可以为空字符串。 字符集：A-Z，a-z ， 0-9，‘.’，‘-’，‘_’，UNICODE字符（\\u4E00-\\u9FFF）
    * createTime  创建时间戳
    * updateTime  更新时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'value' => 'getValue',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 36)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 43)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 43.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 0)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 3000000000000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 3000000000000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 1672502400000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 1672502400000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 3000000000000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 3000000000000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 1672502400000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 1672502400000.";
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
    * Gets key
    *  键。 最大长度36个字符。 字符集：A-Z，a-z ， 0-9，‘-’，‘_’，UNICODE字符（\\u4E00-\\u9FFF）
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 键。 最大长度36个字符。 字符集：A-Z，a-z ， 0-9，‘-’，‘_’，UNICODE字符（\\u4E00-\\u9FFF）
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  值。 最大长度43个字符，可以为空字符串。 字符集：A-Z，a-z ， 0-9，‘.’，‘-’，‘_’，UNICODE字符（\\u4E00-\\u9FFF）
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 值。 最大长度43个字符，可以为空字符串。 字符集：A-Z，a-z ， 0-9，‘.’，‘-’，‘_’，UNICODE字符（\\u4E00-\\u9FFF）
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间戳
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
    * @param int|null $createTime 创建时间戳
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
    *  更新时间戳
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
    * @param int|null $updateTime 更新时间戳
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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


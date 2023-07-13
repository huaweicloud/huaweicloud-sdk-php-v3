<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TagsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TagsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  键。  最大长度127个unicode字符。  不允许为空字符串。  前后的空格会被丢弃。
    * values  值列表。  values中最多包含10个value。  每个value最大长度255个unicode字符。前后的空格会被丢弃。  values中value不允许重复。  values中多个value之间是\"或\"的关系。  values允许为空列表，value允许为空字符串。  values如果为空列表，表示任意值。  \\*为系统保留字符，如果value是以\\*开头表示按照\\*后面的值全模糊匹配，不能只传入“\\*”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'values' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  键。  最大长度127个unicode字符。  不允许为空字符串。  前后的空格会被丢弃。
    * values  值列表。  values中最多包含10个value。  每个value最大长度255个unicode字符。前后的空格会被丢弃。  values中value不允许重复。  values中多个value之间是\"或\"的关系。  values允许为空列表，value允许为空字符串。  values如果为空列表，表示任意值。  \\*为系统保留字符，如果value是以\\*开头表示按照\\*后面的值全模糊匹配，不能只传入“\\*”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'values' => null
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
    * key  键。  最大长度127个unicode字符。  不允许为空字符串。  前后的空格会被丢弃。
    * values  值列表。  values中最多包含10个value。  每个value最大长度255个unicode字符。前后的空格会被丢弃。  values中value不允许重复。  values中多个value之间是\"或\"的关系。  values允许为空列表，value允许为空字符串。  values如果为空列表，表示任意值。  \\*为系统保留字符，如果value是以\\*开头表示按照\\*后面的值全模糊匹配，不能只传入“\\*”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  键。  最大长度127个unicode字符。  不允许为空字符串。  前后的空格会被丢弃。
    * values  值列表。  values中最多包含10个value。  每个value最大长度255个unicode字符。前后的空格会被丢弃。  values中value不允许重复。  values中多个value之间是\"或\"的关系。  values允许为空列表，value允许为空字符串。  values如果为空列表，表示任意值。  \\*为系统保留字符，如果value是以\\*开头表示按照\\*后面的值全模糊匹配，不能只传入“\\*”。
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  键。  最大长度127个unicode字符。  不允许为空字符串。  前后的空格会被丢弃。
    * values  值列表。  values中最多包含10个value。  每个value最大长度255个unicode字符。前后的空格会被丢弃。  values中value不允许重复。  values中多个value之间是\"或\"的关系。  values允许为空列表，value允许为空字符串。  values如果为空列表，表示任意值。  \\*为系统保留字符，如果value是以\\*开头表示按照\\*后面的值全模糊匹配，不能只传入“\\*”。
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'values' => 'getValues'
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
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
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
    *  键。  最大长度127个unicode字符。  不允许为空字符串。  前后的空格会被丢弃。
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 键。  最大长度127个unicode字符。  不允许为空字符串。  前后的空格会被丢弃。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets values
    *  值列表。  values中最多包含10个value。  每个value最大长度255个unicode字符。前后的空格会被丢弃。  values中value不允许重复。  values中多个value之间是\"或\"的关系。  values允许为空列表，value允许为空字符串。  values如果为空列表，表示任意值。  \\*为系统保留字符，如果value是以\\*开头表示按照\\*后面的值全模糊匹配，不能只传入“\\*”。
    *
    * @return string[]
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param string[] $values 值列表。  values中最多包含10个value。  每个value最大长度255个unicode字符。前后的空格会被丢弃。  values中value不允许重复。  values中多个value之间是\"或\"的关系。  values允许为空列表，value允许为空字符串。  values如果为空列表，表示任意值。  \\*为系统保留字符，如果value是以\\*开头表示按照\\*后面的值全模糊匹配，不能只传入“\\*”。
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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


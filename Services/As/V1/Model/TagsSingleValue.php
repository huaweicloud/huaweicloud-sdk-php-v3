<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TagsSingleValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TagsSingleValue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  资源标签键。最大长度36个unicode字符。key不能为空。（搜索时不对此参数做校验）。最多为10个，不能为空或者空字符串。且不能重复。
    * value  资源标签值列表，每个值最大长度43个unicode字符，每个key下最多为10个，同一个key中values不能重复。  “*”为系统保留字符，如果value是以“*”开头表示按照“*”后面的值全模糊匹配。不能只传入“*”。 如果values为空列表但不可缺省，则表示any_value（查询任意value）。value之间为或的关系。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  资源标签键。最大长度36个unicode字符。key不能为空。（搜索时不对此参数做校验）。最多为10个，不能为空或者空字符串。且不能重复。
    * value  资源标签值列表，每个值最大长度43个unicode字符，每个key下最多为10个，同一个key中values不能重复。  “*”为系统保留字符，如果value是以“*”开头表示按照“*”后面的值全模糊匹配。不能只传入“*”。 如果values为空列表但不可缺省，则表示any_value（查询任意value）。value之间为或的关系。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'value' => null
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
    * key  资源标签键。最大长度36个unicode字符。key不能为空。（搜索时不对此参数做校验）。最多为10个，不能为空或者空字符串。且不能重复。
    * value  资源标签值列表，每个值最大长度43个unicode字符，每个key下最多为10个，同一个key中values不能重复。  “*”为系统保留字符，如果value是以“*”开头表示按照“*”后面的值全模糊匹配。不能只传入“*”。 如果values为空列表但不可缺省，则表示any_value（查询任意value）。value之间为或的关系。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  资源标签键。最大长度36个unicode字符。key不能为空。（搜索时不对此参数做校验）。最多为10个，不能为空或者空字符串。且不能重复。
    * value  资源标签值列表，每个值最大长度43个unicode字符，每个key下最多为10个，同一个key中values不能重复。  “*”为系统保留字符，如果value是以“*”开头表示按照“*”后面的值全模糊匹配。不能只传入“*”。 如果values为空列表但不可缺省，则表示any_value（查询任意value）。value之间为或的关系。
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  资源标签键。最大长度36个unicode字符。key不能为空。（搜索时不对此参数做校验）。最多为10个，不能为空或者空字符串。且不能重复。
    * value  资源标签值列表，每个值最大长度43个unicode字符，每个key下最多为10个，同一个key中values不能重复。  “*”为系统保留字符，如果value是以“*”开头表示按照“*”后面的值全模糊匹配。不能只传入“*”。 如果values为空列表但不可缺省，则表示any_value（查询任意value）。value之间为或的关系。
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'value' => 'getValue'
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
    *  资源标签键。最大长度36个unicode字符。key不能为空。（搜索时不对此参数做校验）。最多为10个，不能为空或者空字符串。且不能重复。
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
    * @param string $key 资源标签键。最大长度36个unicode字符。key不能为空。（搜索时不对此参数做校验）。最多为10个，不能为空或者空字符串。且不能重复。
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
    *  资源标签值列表，每个值最大长度43个unicode字符，每个key下最多为10个，同一个key中values不能重复。  “*”为系统保留字符，如果value是以“*”开头表示按照“*”后面的值全模糊匹配。不能只传入“*”。 如果values为空列表但不可缺省，则表示any_value（查询任意value）。value之间为或的关系。
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
    * @param string|null $value 资源标签值列表，每个值最大长度43个unicode字符，每个key下最多为10个，同一个key中values不能重复。  “*”为系统保留字符，如果value是以“*”开头表示按照“*”后面的值全模糊匹配。不能只传入“*”。 如果values为空列表但不可缺省，则表示any_value（查询任意value）。value之间为或的关系。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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


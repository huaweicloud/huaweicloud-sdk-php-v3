<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Packet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Packet';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hexIndex  十六进制码
    * utf8String  utf8字符串
    * hexs  十六进制单个字节码数组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hexIndex' => 'string',
            'utf8String' => 'string',
            'hexs' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hexIndex  十六进制码
    * utf8String  utf8字符串
    * hexs  十六进制单个字节码数组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hexIndex' => null,
        'utf8String' => null,
        'hexs' => null
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
    * hexIndex  十六进制码
    * utf8String  utf8字符串
    * hexs  十六进制单个字节码数组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hexIndex' => 'hex_index',
            'utf8String' => 'utf8_string',
            'hexs' => 'hexs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hexIndex  十六进制码
    * utf8String  utf8字符串
    * hexs  十六进制单个字节码数组
    *
    * @var string[]
    */
    protected static $setters = [
            'hexIndex' => 'setHexIndex',
            'utf8String' => 'setUtf8String',
            'hexs' => 'setHexs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hexIndex  十六进制码
    * utf8String  utf8字符串
    * hexs  十六进制单个字节码数组
    *
    * @var string[]
    */
    protected static $getters = [
            'hexIndex' => 'getHexIndex',
            'utf8String' => 'getUtf8String',
            'hexs' => 'getHexs'
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
        $this->container['hexIndex'] = isset($data['hexIndex']) ? $data['hexIndex'] : null;
        $this->container['utf8String'] = isset($data['utf8String']) ? $data['utf8String'] : null;
        $this->container['hexs'] = isset($data['hexs']) ? $data['hexs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets hexIndex
    *  十六进制码
    *
    * @return string|null
    */
    public function getHexIndex()
    {
        return $this->container['hexIndex'];
    }

    /**
    * Sets hexIndex
    *
    * @param string|null $hexIndex 十六进制码
    *
    * @return $this
    */
    public function setHexIndex($hexIndex)
    {
        $this->container['hexIndex'] = $hexIndex;
        return $this;
    }

    /**
    * Gets utf8String
    *  utf8字符串
    *
    * @return string|null
    */
    public function getUtf8String()
    {
        return $this->container['utf8String'];
    }

    /**
    * Sets utf8String
    *
    * @param string|null $utf8String utf8字符串
    *
    * @return $this
    */
    public function setUtf8String($utf8String)
    {
        $this->container['utf8String'] = $utf8String;
        return $this;
    }

    /**
    * Gets hexs
    *  十六进制单个字节码数组
    *
    * @return string[]|null
    */
    public function getHexs()
    {
        return $this->container['hexs'];
    }

    /**
    * Sets hexs
    *
    * @param string[]|null $hexs 十六进制单个字节码数组
    *
    * @return $this
    */
    public function setHexs($hexs)
    {
        $this->container['hexs'] = $hexs;
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


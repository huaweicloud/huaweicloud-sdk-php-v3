<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DecryptDatakeyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DecryptDatakeyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataKey  DEK明文的16进制字符串。
    * datakeyLength  DEK明文字节长度。
    * datakeyDgst  DEK明文的SHA256值对应的16进制字符串。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataKey' => 'string',
            'datakeyLength' => 'string',
            'datakeyDgst' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataKey  DEK明文的16进制字符串。
    * datakeyLength  DEK明文字节长度。
    * datakeyDgst  DEK明文的SHA256值对应的16进制字符串。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataKey' => null,
        'datakeyLength' => null,
        'datakeyDgst' => null
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
    * dataKey  DEK明文的16进制字符串。
    * datakeyLength  DEK明文字节长度。
    * datakeyDgst  DEK明文的SHA256值对应的16进制字符串。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataKey' => 'data_key',
            'datakeyLength' => 'datakey_length',
            'datakeyDgst' => 'datakey_dgst'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataKey  DEK明文的16进制字符串。
    * datakeyLength  DEK明文字节长度。
    * datakeyDgst  DEK明文的SHA256值对应的16进制字符串。
    *
    * @var string[]
    */
    protected static $setters = [
            'dataKey' => 'setDataKey',
            'datakeyLength' => 'setDatakeyLength',
            'datakeyDgst' => 'setDatakeyDgst'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataKey  DEK明文的16进制字符串。
    * datakeyLength  DEK明文字节长度。
    * datakeyDgst  DEK明文的SHA256值对应的16进制字符串。
    *
    * @var string[]
    */
    protected static $getters = [
            'dataKey' => 'getDataKey',
            'datakeyLength' => 'getDatakeyLength',
            'datakeyDgst' => 'getDatakeyDgst'
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
        $this->container['dataKey'] = isset($data['dataKey']) ? $data['dataKey'] : null;
        $this->container['datakeyLength'] = isset($data['datakeyLength']) ? $data['datakeyLength'] : null;
        $this->container['datakeyDgst'] = isset($data['datakeyDgst']) ? $data['datakeyDgst'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dataKey']) && (mb_strlen($this->container['dataKey']) > 8192)) {
                $invalidProperties[] = "invalid value for 'dataKey', the character length must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['dataKey']) && (mb_strlen($this->container['dataKey']) < 8)) {
                $invalidProperties[] = "invalid value for 'dataKey', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['datakeyLength']) && (mb_strlen($this->container['datakeyLength']) > 10)) {
                $invalidProperties[] = "invalid value for 'datakeyLength', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['datakeyLength']) && (mb_strlen($this->container['datakeyLength']) < 0)) {
                $invalidProperties[] = "invalid value for 'datakeyLength', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['datakeyDgst']) && (mb_strlen($this->container['datakeyDgst']) > 8192)) {
                $invalidProperties[] = "invalid value for 'datakeyDgst', the character length must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['datakeyDgst']) && (mb_strlen($this->container['datakeyDgst']) < 8)) {
                $invalidProperties[] = "invalid value for 'datakeyDgst', the character length must be bigger than or equal to 8.";
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
    * Gets dataKey
    *  DEK明文的16进制字符串。
    *
    * @return string|null
    */
    public function getDataKey()
    {
        return $this->container['dataKey'];
    }

    /**
    * Sets dataKey
    *
    * @param string|null $dataKey DEK明文的16进制字符串。
    *
    * @return $this
    */
    public function setDataKey($dataKey)
    {
        $this->container['dataKey'] = $dataKey;
        return $this;
    }

    /**
    * Gets datakeyLength
    *  DEK明文字节长度。
    *
    * @return string|null
    */
    public function getDatakeyLength()
    {
        return $this->container['datakeyLength'];
    }

    /**
    * Sets datakeyLength
    *
    * @param string|null $datakeyLength DEK明文字节长度。
    *
    * @return $this
    */
    public function setDatakeyLength($datakeyLength)
    {
        $this->container['datakeyLength'] = $datakeyLength;
        return $this;
    }

    /**
    * Gets datakeyDgst
    *  DEK明文的SHA256值对应的16进制字符串。
    *
    * @return string|null
    */
    public function getDatakeyDgst()
    {
        return $this->container['datakeyDgst'];
    }

    /**
    * Sets datakeyDgst
    *
    * @param string|null $datakeyDgst DEK明文的SHA256值对应的16进制字符串。
    *
    * @return $this
    */
    public function setDatakeyDgst($datakeyDgst)
    {
        $this->container['datakeyDgst'] = $datakeyDgst;
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


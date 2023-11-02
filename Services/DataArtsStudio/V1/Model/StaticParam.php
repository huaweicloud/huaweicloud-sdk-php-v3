<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StaticParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StaticParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paraName  静态参数名
    * paraValue  静态参数值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paraName' => 'string',
            'paraValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paraName  静态参数名
    * paraValue  静态参数值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paraName' => null,
        'paraValue' => null
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
    * paraName  静态参数名
    * paraValue  静态参数值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paraName' => 'para_name',
            'paraValue' => 'para_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paraName  静态参数名
    * paraValue  静态参数值
    *
    * @var string[]
    */
    protected static $setters = [
            'paraName' => 'setParaName',
            'paraValue' => 'setParaValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paraName  静态参数名
    * paraValue  静态参数值
    *
    * @var string[]
    */
    protected static $getters = [
            'paraName' => 'getParaName',
            'paraValue' => 'getParaValue'
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
        $this->container['paraName'] = isset($data['paraName']) ? $data['paraName'] : null;
        $this->container['paraValue'] = isset($data['paraValue']) ? $data['paraValue'] : null;
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
    * Gets paraName
    *  静态参数名
    *
    * @return string|null
    */
    public function getParaName()
    {
        return $this->container['paraName'];
    }

    /**
    * Sets paraName
    *
    * @param string|null $paraName 静态参数名
    *
    * @return $this
    */
    public function setParaName($paraName)
    {
        $this->container['paraName'] = $paraName;
        return $this;
    }

    /**
    * Gets paraValue
    *  静态参数值
    *
    * @return string|null
    */
    public function getParaValue()
    {
        return $this->container['paraValue'];
    }

    /**
    * Sets paraValue
    *
    * @param string|null $paraValue 静态参数值
    *
    * @return $this
    */
    public function setParaValue($paraValue)
    {
        $this->container['paraValue'] = $paraValue;
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


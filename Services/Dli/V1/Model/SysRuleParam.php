<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SysRuleParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SysRuleParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * max  阀值上限
    * min  阀值下限
    * defaultValue  阀值默认值
    * desc  描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'max' => 'int',
            'min' => 'int',
            'defaultValue' => 'int',
            'desc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * max  阀值上限
    * min  阀值下限
    * defaultValue  阀值默认值
    * desc  描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'max' => 'int64',
        'min' => 'int64',
        'defaultValue' => 'int64',
        'desc' => null
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
    * max  阀值上限
    * min  阀值下限
    * defaultValue  阀值默认值
    * desc  描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'max' => 'max',
            'min' => 'min',
            'defaultValue' => 'defaultValue',
            'desc' => 'desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * max  阀值上限
    * min  阀值下限
    * defaultValue  阀值默认值
    * desc  描述
    *
    * @var string[]
    */
    protected static $setters = [
            'max' => 'setMax',
            'min' => 'setMin',
            'defaultValue' => 'setDefaultValue',
            'desc' => 'setDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * max  阀值上限
    * min  阀值下限
    * defaultValue  阀值默认值
    * desc  描述
    *
    * @var string[]
    */
    protected static $getters = [
            'max' => 'getMax',
            'min' => 'getMin',
            'defaultValue' => 'getDefaultValue',
            'desc' => 'getDesc'
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
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 2000)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 2000.";
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
    * Gets max
    *  阀值上限
    *
    * @return int|null
    */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
    * Sets max
    *
    * @param int|null $max 阀值上限
    *
    * @return $this
    */
    public function setMax($max)
    {
        $this->container['max'] = $max;
        return $this;
    }

    /**
    * Gets min
    *  阀值下限
    *
    * @return int|null
    */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
    * Sets min
    *
    * @param int|null $min 阀值下限
    *
    * @return $this
    */
    public function setMin($min)
    {
        $this->container['min'] = $min;
        return $this;
    }

    /**
    * Gets defaultValue
    *  阀值默认值
    *
    * @return int|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param int|null $defaultValue 阀值默认值
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets desc
    *  描述
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 描述
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
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


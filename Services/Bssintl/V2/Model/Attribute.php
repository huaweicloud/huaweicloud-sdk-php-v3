<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Attribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Attribute';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  属性编码
    * name  属性名称
    * value  属性取值
    * unit  属性单位
    * linearRange  linearRange
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'name' => 'string',
            'value' => 'string',
            'unit' => 'string',
            'linearRange' => '\HuaweiCloud\SDK\Bssintl\V2\Model\LinearRange'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  属性编码
    * name  属性名称
    * value  属性取值
    * unit  属性单位
    * linearRange  linearRange
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'name' => null,
        'value' => null,
        'unit' => null,
        'linearRange' => null
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
    * code  属性编码
    * name  属性名称
    * value  属性取值
    * unit  属性单位
    * linearRange  linearRange
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'name' => 'name',
            'value' => 'value',
            'unit' => 'unit',
            'linearRange' => 'linear_range'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  属性编码
    * name  属性名称
    * value  属性取值
    * unit  属性单位
    * linearRange  linearRange
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'name' => 'setName',
            'value' => 'setValue',
            'unit' => 'setUnit',
            'linearRange' => 'setLinearRange'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  属性编码
    * name  属性名称
    * value  属性取值
    * unit  属性单位
    * linearRange  linearRange
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'name' => 'getName',
            'value' => 'getValue',
            'unit' => 'getUnit',
            'linearRange' => 'getLinearRange'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['linearRange'] = isset($data['linearRange']) ? $data['linearRange'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 64)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 1)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 1024)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 0)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) > 64)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) < 0)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be bigger than or equal to 0.";
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
    * Gets code
    *  属性编码
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 属性编码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets name
    *  属性名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 属性名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets value
    *  属性取值
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
    * @param string|null $value 属性取值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets unit
    *  属性单位
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 属性单位
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets linearRange
    *  linearRange
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\LinearRange|null
    */
    public function getLinearRange()
    {
        return $this->container['linearRange'];
    }

    /**
    * Sets linearRange
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\LinearRange|null $linearRange linearRange
    *
    * @return $this
    */
    public function setLinearRange($linearRange)
    {
        $this->container['linearRange'] = $linearRange;
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


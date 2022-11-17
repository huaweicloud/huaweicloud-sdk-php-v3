<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Resources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Resources';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unit  资源的计数单位。 - 当type为instance时，无单位。 - 当type为ram时，单位为GB。
    * min  - 当type为instance时，表示可申请实例配额的最小值。 - 当type为ram时，表示可申请内存配额的最小值。
    * max  - 当type为instance时，表示可申请实例配额的最大值。 - 当type为ram时，表示可申请内存配额的最大值。
    * quota  可以创建的实例最大数和总内存的配额限制。
    * used  已创建的实例个数和已使用的内存配额。
    * type  支持instance、ram两种。 - instance表示实例配额。 - ram表示内存配额。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unit' => 'string',
            'min' => 'int',
            'max' => 'int',
            'quota' => 'int',
            'used' => 'int',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unit  资源的计数单位。 - 当type为instance时，无单位。 - 当type为ram时，单位为GB。
    * min  - 当type为instance时，表示可申请实例配额的最小值。 - 当type为ram时，表示可申请内存配额的最小值。
    * max  - 当type为instance时，表示可申请实例配额的最大值。 - 当type为ram时，表示可申请内存配额的最大值。
    * quota  可以创建的实例最大数和总内存的配额限制。
    * used  已创建的实例个数和已使用的内存配额。
    * type  支持instance、ram两种。 - instance表示实例配额。 - ram表示内存配额。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unit' => null,
        'min' => null,
        'max' => null,
        'quota' => null,
        'used' => null,
        'type' => null
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
    * unit  资源的计数单位。 - 当type为instance时，无单位。 - 当type为ram时，单位为GB。
    * min  - 当type为instance时，表示可申请实例配额的最小值。 - 当type为ram时，表示可申请内存配额的最小值。
    * max  - 当type为instance时，表示可申请实例配额的最大值。 - 当type为ram时，表示可申请内存配额的最大值。
    * quota  可以创建的实例最大数和总内存的配额限制。
    * used  已创建的实例个数和已使用的内存配额。
    * type  支持instance、ram两种。 - instance表示实例配额。 - ram表示内存配额。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unit' => 'unit',
            'min' => 'min',
            'max' => 'max',
            'quota' => 'quota',
            'used' => 'used',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unit  资源的计数单位。 - 当type为instance时，无单位。 - 当type为ram时，单位为GB。
    * min  - 当type为instance时，表示可申请实例配额的最小值。 - 当type为ram时，表示可申请内存配额的最小值。
    * max  - 当type为instance时，表示可申请实例配额的最大值。 - 当type为ram时，表示可申请内存配额的最大值。
    * quota  可以创建的实例最大数和总内存的配额限制。
    * used  已创建的实例个数和已使用的内存配额。
    * type  支持instance、ram两种。 - instance表示实例配额。 - ram表示内存配额。
    *
    * @var string[]
    */
    protected static $setters = [
            'unit' => 'setUnit',
            'min' => 'setMin',
            'max' => 'setMax',
            'quota' => 'setQuota',
            'used' => 'setUsed',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unit  资源的计数单位。 - 当type为instance时，无单位。 - 当type为ram时，单位为GB。
    * min  - 当type为instance时，表示可申请实例配额的最小值。 - 当type为ram时，表示可申请内存配额的最小值。
    * max  - 当type为instance时，表示可申请实例配额的最大值。 - 当type为ram时，表示可申请内存配额的最大值。
    * quota  可以创建的实例最大数和总内存的配额限制。
    * used  已创建的实例个数和已使用的内存配额。
    * type  支持instance、ram两种。 - instance表示实例配额。 - ram表示内存配额。
    *
    * @var string[]
    */
    protected static $getters = [
            'unit' => 'getUnit',
            'min' => 'getMin',
            'max' => 'getMax',
            'quota' => 'getQuota',
            'used' => 'getUsed',
            'type' => 'getType'
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
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets unit
    *  资源的计数单位。 - 当type为instance时，无单位。 - 当type为ram时，单位为GB。
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
    * @param string|null $unit 资源的计数单位。 - 当type为instance时，无单位。 - 当type为ram时，单位为GB。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets min
    *  - 当type为instance时，表示可申请实例配额的最小值。 - 当type为ram时，表示可申请内存配额的最小值。
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
    * @param int|null $min - 当type为instance时，表示可申请实例配额的最小值。 - 当type为ram时，表示可申请内存配额的最小值。
    *
    * @return $this
    */
    public function setMin($min)
    {
        $this->container['min'] = $min;
        return $this;
    }

    /**
    * Gets max
    *  - 当type为instance时，表示可申请实例配额的最大值。 - 当type为ram时，表示可申请内存配额的最大值。
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
    * @param int|null $max - 当type为instance时，表示可申请实例配额的最大值。 - 当type为ram时，表示可申请内存配额的最大值。
    *
    * @return $this
    */
    public function setMax($max)
    {
        $this->container['max'] = $max;
        return $this;
    }

    /**
    * Gets quota
    *  可以创建的实例最大数和总内存的配额限制。
    *
    * @return int|null
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int|null $quota 可以创建的实例最大数和总内存的配额限制。
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets used
    *  已创建的实例个数和已使用的内存配额。
    *
    * @return int|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int|null $used 已创建的实例个数和已使用的内存配额。
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets type
    *  支持instance、ram两种。 - instance表示实例配额。 - ram表示内存配额。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 支持instance、ram两种。 - instance表示实例配额。 - ram表示内存配额。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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


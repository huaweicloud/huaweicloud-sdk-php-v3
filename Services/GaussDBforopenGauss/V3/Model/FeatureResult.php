<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FeatureResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FeatureResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  特性名称。
    * status  特性是否开启。
    * description  特性中文描述。
    * type  特性值类型。
    * value  特性值。
    * range  特性值范围。
    * rangeDescription  特性范围描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'status' => 'string',
            'description' => 'string',
            'type' => 'string',
            'value' => 'string',
            'range' => 'string',
            'rangeDescription' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  特性名称。
    * status  特性是否开启。
    * description  特性中文描述。
    * type  特性值类型。
    * value  特性值。
    * range  特性值范围。
    * rangeDescription  特性范围描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'status' => null,
        'description' => null,
        'type' => null,
        'value' => null,
        'range' => null,
        'rangeDescription' => null
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
    * name  特性名称。
    * status  特性是否开启。
    * description  特性中文描述。
    * type  特性值类型。
    * value  特性值。
    * range  特性值范围。
    * rangeDescription  特性范围描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'status' => 'status',
            'description' => 'description',
            'type' => 'type',
            'value' => 'value',
            'range' => 'range',
            'rangeDescription' => 'range_description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  特性名称。
    * status  特性是否开启。
    * description  特性中文描述。
    * type  特性值类型。
    * value  特性值。
    * range  特性值范围。
    * rangeDescription  特性范围描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'type' => 'setType',
            'value' => 'setValue',
            'range' => 'setRange',
            'rangeDescription' => 'setRangeDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  特性名称。
    * status  特性是否开启。
    * description  特性中文描述。
    * type  特性值类型。
    * value  特性值。
    * range  特性值范围。
    * rangeDescription  特性范围描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'type' => 'getType',
            'value' => 'getValue',
            'range' => 'getRange',
            'rangeDescription' => 'getRangeDescription'
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
    const TYPE_INTEGER = 'integer';
    const TYPE_STRING = 'string';
    const TYPE_BOOLEAN = 'boolean';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INTEGER,
            self::TYPE_STRING,
            self::TYPE_BOOLEAN,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
        $this->container['rangeDescription'] = isset($data['rangeDescription']) ? $data['rangeDescription'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  特性名称。
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
    * @param string|null $name 特性名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  特性是否开启。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 特性是否开启。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  特性中文描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 特性中文描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  特性值类型。
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
    * @param string|null $type 特性值类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  特性值。
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
    * @param string|null $value 特性值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets range
    *  特性值范围。
    *
    * @return string|null
    */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
    * Sets range
    *
    * @param string|null $range 特性值范围。
    *
    * @return $this
    */
    public function setRange($range)
    {
        $this->container['range'] = $range;
        return $this;
    }

    /**
    * Gets rangeDescription
    *  特性范围描述。
    *
    * @return string|null
    */
    public function getRangeDescription()
    {
        return $this->container['rangeDescription'];
    }

    /**
    * Sets rangeDescription
    *
    * @param string|null $rangeDescription 特性范围描述。
    *
    * @return $this
    */
    public function setRangeDescription($rangeDescription)
    {
        $this->container['rangeDescription'] = $rangeDescription;
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


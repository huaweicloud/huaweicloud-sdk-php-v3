<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParaGroupParameterResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParaGroupParameterResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  特定参数名称。
    * value  特定参数值。
    * needRestart  参数是否需要重启。 - 取值为\"true\"，需要重启。 - 取值为\"false\"，不需要重启。
    * readonly  该参数是否只读(true：只读；false：可编辑)。
    * valueRange  参数取值范围。
    * dataType  参数类型，取值为“string”、“integer”、“boolean”、“list”、\"all\"或“float”之一。
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'value' => 'string',
            'needRestart' => 'bool',
            'readonly' => 'bool',
            'valueRange' => 'string',
            'dataType' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  特定参数名称。
    * value  特定参数值。
    * needRestart  参数是否需要重启。 - 取值为\"true\"，需要重启。 - 取值为\"false\"，不需要重启。
    * readonly  该参数是否只读(true：只读；false：可编辑)。
    * valueRange  参数取值范围。
    * dataType  参数类型，取值为“string”、“integer”、“boolean”、“list”、\"all\"或“float”之一。
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'value' => null,
        'needRestart' => null,
        'readonly' => null,
        'valueRange' => null,
        'dataType' => null,
        'description' => null
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
    * name  特定参数名称。
    * value  特定参数值。
    * needRestart  参数是否需要重启。 - 取值为\"true\"，需要重启。 - 取值为\"false\"，不需要重启。
    * readonly  该参数是否只读(true：只读；false：可编辑)。
    * valueRange  参数取值范围。
    * dataType  参数类型，取值为“string”、“integer”、“boolean”、“list”、\"all\"或“float”之一。
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'value' => 'value',
            'needRestart' => 'need_restart',
            'readonly' => 'readonly',
            'valueRange' => 'value_range',
            'dataType' => 'data_type',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  特定参数名称。
    * value  特定参数值。
    * needRestart  参数是否需要重启。 - 取值为\"true\"，需要重启。 - 取值为\"false\"，不需要重启。
    * readonly  该参数是否只读(true：只读；false：可编辑)。
    * valueRange  参数取值范围。
    * dataType  参数类型，取值为“string”、“integer”、“boolean”、“list”、\"all\"或“float”之一。
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'value' => 'setValue',
            'needRestart' => 'setNeedRestart',
            'readonly' => 'setReadonly',
            'valueRange' => 'setValueRange',
            'dataType' => 'setDataType',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  特定参数名称。
    * value  特定参数值。
    * needRestart  参数是否需要重启。 - 取值为\"true\"，需要重启。 - 取值为\"false\"，不需要重启。
    * readonly  该参数是否只读(true：只读；false：可编辑)。
    * valueRange  参数取值范围。
    * dataType  参数类型，取值为“string”、“integer”、“boolean”、“list”、\"all\"或“float”之一。
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'value' => 'getValue',
            'needRestart' => 'getNeedRestart',
            'readonly' => 'getReadonly',
            'valueRange' => 'getValueRange',
            'dataType' => 'getDataType',
            'description' => 'getDescription'
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
    const DATA_TYPE_STRING = 'string';
    const DATA_TYPE_INTEGER = 'integer';
    const DATA_TYPE_BOOLEAN = 'boolean';
    const DATA_TYPE__LIST = 'list';
    const DATA_TYPE_FLOAT = 'float';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDataTypeAllowableValues()
    {
        return [
            self::DATA_TYPE_STRING,
            self::DATA_TYPE_INTEGER,
            self::DATA_TYPE_BOOLEAN,
            self::DATA_TYPE__LIST,
            self::DATA_TYPE_FLOAT,
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['needRestart'] = isset($data['needRestart']) ? $data['needRestart'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
        $this->container['valueRange'] = isset($data['valueRange']) ? $data['valueRange'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['needRestart'] === null) {
            $invalidProperties[] = "'needRestart' can't be null";
        }
        if ($this->container['readonly'] === null) {
            $invalidProperties[] = "'readonly' can't be null";
        }
        if ($this->container['valueRange'] === null) {
            $invalidProperties[] = "'valueRange' can't be null";
        }
        if ($this->container['dataType'] === null) {
            $invalidProperties[] = "'dataType' can't be null";
        }
            $allowedValues = $this->getDataTypeAllowableValues();
                if (!is_null($this->container['dataType']) && !in_array($this->container['dataType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dataType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
    *  特定参数名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 特定参数名称。
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
    *  特定参数值。
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value 特定参数值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets needRestart
    *  参数是否需要重启。 - 取值为\"true\"，需要重启。 - 取值为\"false\"，不需要重启。
    *
    * @return bool
    */
    public function getNeedRestart()
    {
        return $this->container['needRestart'];
    }

    /**
    * Sets needRestart
    *
    * @param bool $needRestart 参数是否需要重启。 - 取值为\"true\"，需要重启。 - 取值为\"false\"，不需要重启。
    *
    * @return $this
    */
    public function setNeedRestart($needRestart)
    {
        $this->container['needRestart'] = $needRestart;
        return $this;
    }

    /**
    * Gets readonly
    *  该参数是否只读(true：只读；false：可编辑)。
    *
    * @return bool
    */
    public function getReadonly()
    {
        return $this->container['readonly'];
    }

    /**
    * Sets readonly
    *
    * @param bool $readonly 该参数是否只读(true：只读；false：可编辑)。
    *
    * @return $this
    */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;
        return $this;
    }

    /**
    * Gets valueRange
    *  参数取值范围。
    *
    * @return string
    */
    public function getValueRange()
    {
        return $this->container['valueRange'];
    }

    /**
    * Sets valueRange
    *
    * @param string $valueRange 参数取值范围。
    *
    * @return $this
    */
    public function setValueRange($valueRange)
    {
        $this->container['valueRange'] = $valueRange;
        return $this;
    }

    /**
    * Gets dataType
    *  参数类型，取值为“string”、“integer”、“boolean”、“list”、\"all\"或“float”之一。
    *
    * @return string
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string $dataType 参数类型，取值为“string”、“integer”、“boolean”、“list”、\"all\"或“float”之一。
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets description
    *  参数描述。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 参数描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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


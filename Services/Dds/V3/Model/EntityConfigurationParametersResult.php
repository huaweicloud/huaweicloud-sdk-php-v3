<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EntityConfigurationParametersResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EntityConfigurationParametersResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  参数名称。
    * value  参数值。
    * valueRange  参数值范围。示例：Integer类型取值范围为0~1、Boolean类型取值为“true”或“false”。
    * restartRequired  参数是否需要重启。 - 取值为“true”，需要重启。 - 取值为“false”，不需要重启。
    * readonly  是否只读。 - 取值为“false”，非只读参数。 - 取值为“true”，只读参数。
    * type  参数类型，取值为“integer”，“string”，“boolean”，“float”或“list”。
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'value' => 'string',
            'valueRange' => 'string',
            'restartRequired' => 'bool',
            'readonly' => 'bool',
            'type' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数名称。
    * value  参数值。
    * valueRange  参数值范围。示例：Integer类型取值范围为0~1、Boolean类型取值为“true”或“false”。
    * restartRequired  参数是否需要重启。 - 取值为“true”，需要重启。 - 取值为“false”，不需要重启。
    * readonly  是否只读。 - 取值为“false”，非只读参数。 - 取值为“true”，只读参数。
    * type  参数类型，取值为“integer”，“string”，“boolean”，“float”或“list”。
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'value' => null,
        'valueRange' => null,
        'restartRequired' => null,
        'readonly' => null,
        'type' => null,
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
    * name  参数名称。
    * value  参数值。
    * valueRange  参数值范围。示例：Integer类型取值范围为0~1、Boolean类型取值为“true”或“false”。
    * restartRequired  参数是否需要重启。 - 取值为“true”，需要重启。 - 取值为“false”，不需要重启。
    * readonly  是否只读。 - 取值为“false”，非只读参数。 - 取值为“true”，只读参数。
    * type  参数类型，取值为“integer”，“string”，“boolean”，“float”或“list”。
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'value' => 'value',
            'valueRange' => 'value_range',
            'restartRequired' => 'restart_required',
            'readonly' => 'readonly',
            'type' => 'type',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数名称。
    * value  参数值。
    * valueRange  参数值范围。示例：Integer类型取值范围为0~1、Boolean类型取值为“true”或“false”。
    * restartRequired  参数是否需要重启。 - 取值为“true”，需要重启。 - 取值为“false”，不需要重启。
    * readonly  是否只读。 - 取值为“false”，非只读参数。 - 取值为“true”，只读参数。
    * type  参数类型，取值为“integer”，“string”，“boolean”，“float”或“list”。
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'value' => 'setValue',
            'valueRange' => 'setValueRange',
            'restartRequired' => 'setRestartRequired',
            'readonly' => 'setReadonly',
            'type' => 'setType',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数名称。
    * value  参数值。
    * valueRange  参数值范围。示例：Integer类型取值范围为0~1、Boolean类型取值为“true”或“false”。
    * restartRequired  参数是否需要重启。 - 取值为“true”，需要重启。 - 取值为“false”，不需要重启。
    * readonly  是否只读。 - 取值为“false”，非只读参数。 - 取值为“true”，只读参数。
    * type  参数类型，取值为“integer”，“string”，“boolean”，“float”或“list”。
    * description  参数描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'value' => 'getValue',
            'valueRange' => 'getValueRange',
            'restartRequired' => 'getRestartRequired',
            'readonly' => 'getReadonly',
            'type' => 'getType',
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
        $this->container['valueRange'] = isset($data['valueRange']) ? $data['valueRange'] : null;
        $this->container['restartRequired'] = isset($data['restartRequired']) ? $data['restartRequired'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
        if ($this->container['valueRange'] === null) {
            $invalidProperties[] = "'valueRange' can't be null";
        }
        if ($this->container['restartRequired'] === null) {
            $invalidProperties[] = "'restartRequired' can't be null";
        }
        if ($this->container['readonly'] === null) {
            $invalidProperties[] = "'readonly' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    *  参数名称。
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
    * @param string $name 参数名称。
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
    *  参数值。
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
    * @param string $value 参数值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets valueRange
    *  参数值范围。示例：Integer类型取值范围为0~1、Boolean类型取值为“true”或“false”。
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
    * @param string $valueRange 参数值范围。示例：Integer类型取值范围为0~1、Boolean类型取值为“true”或“false”。
    *
    * @return $this
    */
    public function setValueRange($valueRange)
    {
        $this->container['valueRange'] = $valueRange;
        return $this;
    }

    /**
    * Gets restartRequired
    *  参数是否需要重启。 - 取值为“true”，需要重启。 - 取值为“false”，不需要重启。
    *
    * @return bool
    */
    public function getRestartRequired()
    {
        return $this->container['restartRequired'];
    }

    /**
    * Sets restartRequired
    *
    * @param bool $restartRequired 参数是否需要重启。 - 取值为“true”，需要重启。 - 取值为“false”，不需要重启。
    *
    * @return $this
    */
    public function setRestartRequired($restartRequired)
    {
        $this->container['restartRequired'] = $restartRequired;
        return $this;
    }

    /**
    * Gets readonly
    *  是否只读。 - 取值为“false”，非只读参数。 - 取值为“true”，只读参数。
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
    * @param bool $readonly 是否只读。 - 取值为“false”，非只读参数。 - 取值为“true”，只读参数。
    *
    * @return $this
    */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;
        return $this;
    }

    /**
    * Gets type
    *  参数类型，取值为“integer”，“string”，“boolean”，“float”或“list”。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 参数类型，取值为“integer”，“string”，“boolean”，“float”或“list”。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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


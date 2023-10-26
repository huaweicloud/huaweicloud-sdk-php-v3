<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paramName  参数名称。
    * paramType  参数类型。
    * paramGroup  参数分组。
    * defaultValue  参数初始值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paramName' => 'string',
            'paramType' => 'string',
            'paramGroup' => 'string',
            'defaultValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paramName  参数名称。
    * paramType  参数类型。
    * paramGroup  参数分组。
    * defaultValue  参数初始值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paramName' => null,
        'paramType' => null,
        'paramGroup' => null,
        'defaultValue' => null
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
    * paramName  参数名称。
    * paramType  参数类型。
    * paramGroup  参数分组。
    * defaultValue  参数初始值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paramName' => 'param_name',
            'paramType' => 'param_type',
            'paramGroup' => 'param_group',
            'defaultValue' => 'default_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paramName  参数名称。
    * paramType  参数类型。
    * paramGroup  参数分组。
    * defaultValue  参数初始值。
    *
    * @var string[]
    */
    protected static $setters = [
            'paramName' => 'setParamName',
            'paramType' => 'setParamType',
            'paramGroup' => 'setParamGroup',
            'defaultValue' => 'setDefaultValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paramName  参数名称。
    * paramType  参数类型。
    * paramGroup  参数分组。
    * defaultValue  参数初始值。
    *
    * @var string[]
    */
    protected static $getters = [
            'paramName' => 'getParamName',
            'paramType' => 'getParamType',
            'paramGroup' => 'getParamGroup',
            'defaultValue' => 'getDefaultValue'
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
        $this->container['paramName'] = isset($data['paramName']) ? $data['paramName'] : null;
        $this->container['paramType'] = isset($data['paramType']) ? $data['paramType'] : null;
        $this->container['paramGroup'] = isset($data['paramGroup']) ? $data['paramGroup'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['paramName'] === null) {
            $invalidProperties[] = "'paramName' can't be null";
        }
            if (!preg_match("/[^\\>+<;#\";&?%=']{1,64}/", $this->container['paramName'])) {
                $invalidProperties[] = "invalid value for 'paramName', must be conform to the pattern /[^\\>+<;#\";&?%=']{1,64}/.";
            }
            if (!is_null($this->container['paramType']) && (mb_strlen($this->container['paramType']) > 16)) {
                $invalidProperties[] = "invalid value for 'paramType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['paramType']) && (mb_strlen($this->container['paramType']) < 1)) {
                $invalidProperties[] = "invalid value for 'paramType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['paramGroup']) && (mb_strlen($this->container['paramGroup']) > 32)) {
                $invalidProperties[] = "invalid value for 'paramGroup', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['paramGroup']) && (mb_strlen($this->container['paramGroup']) < 1)) {
                $invalidProperties[] = "invalid value for 'paramGroup', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) > 40960)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be smaller than or equal to 40960.";
            }
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be bigger than or equal to 1.";
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
    * Gets paramName
    *  参数名称。
    *
    * @return string
    */
    public function getParamName()
    {
        return $this->container['paramName'];
    }

    /**
    * Sets paramName
    *
    * @param string $paramName 参数名称。
    *
    * @return $this
    */
    public function setParamName($paramName)
    {
        $this->container['paramName'] = $paramName;
        return $this;
    }

    /**
    * Gets paramType
    *  参数类型。
    *
    * @return string|null
    */
    public function getParamType()
    {
        return $this->container['paramType'];
    }

    /**
    * Sets paramType
    *
    * @param string|null $paramType 参数类型。
    *
    * @return $this
    */
    public function setParamType($paramType)
    {
        $this->container['paramType'] = $paramType;
        return $this;
    }

    /**
    * Gets paramGroup
    *  参数分组。
    *
    * @return string|null
    */
    public function getParamGroup()
    {
        return $this->container['paramGroup'];
    }

    /**
    * Sets paramGroup
    *
    * @param string|null $paramGroup 参数分组。
    *
    * @return $this
    */
    public function setParamGroup($paramGroup)
    {
        $this->container['paramGroup'] = $paramGroup;
        return $this;
    }

    /**
    * Gets defaultValue
    *  参数初始值。
    *
    * @return string|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param string|null $defaultValue 参数初始值。
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
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


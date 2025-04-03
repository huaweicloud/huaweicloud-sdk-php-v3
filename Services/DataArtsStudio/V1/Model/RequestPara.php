<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RequestPara implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RequestPara';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  参数名
    * position  参数的位置
    * type  参数的类型
    * description  参数的描述
    * necessary  参数是否必填
    * exampleValue  实例值
    * defaultValue  默认值
    * supportNull  支持NULL值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'position' => 'string',
            'type' => 'string',
            'description' => 'string',
            'necessary' => 'bool',
            'exampleValue' => 'string',
            'defaultValue' => 'string',
            'supportNull' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数名
    * position  参数的位置
    * type  参数的类型
    * description  参数的描述
    * necessary  参数是否必填
    * exampleValue  实例值
    * defaultValue  默认值
    * supportNull  支持NULL值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'position' => null,
        'type' => null,
        'description' => null,
        'necessary' => null,
        'exampleValue' => null,
        'defaultValue' => null,
        'supportNull' => null
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
    * name  参数名
    * position  参数的位置
    * type  参数的类型
    * description  参数的描述
    * necessary  参数是否必填
    * exampleValue  实例值
    * defaultValue  默认值
    * supportNull  支持NULL值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'position' => 'position',
            'type' => 'type',
            'description' => 'description',
            'necessary' => 'necessary',
            'exampleValue' => 'example_value',
            'defaultValue' => 'default_value',
            'supportNull' => 'support_null'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数名
    * position  参数的位置
    * type  参数的类型
    * description  参数的描述
    * necessary  参数是否必填
    * exampleValue  实例值
    * defaultValue  默认值
    * supportNull  支持NULL值。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'position' => 'setPosition',
            'type' => 'setType',
            'description' => 'setDescription',
            'necessary' => 'setNecessary',
            'exampleValue' => 'setExampleValue',
            'defaultValue' => 'setDefaultValue',
            'supportNull' => 'setSupportNull'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数名
    * position  参数的位置
    * type  参数的类型
    * description  参数的描述
    * necessary  参数是否必填
    * exampleValue  实例值
    * defaultValue  默认值
    * supportNull  支持NULL值。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'position' => 'getPosition',
            'type' => 'getType',
            'description' => 'getDescription',
            'necessary' => 'getNecessary',
            'exampleValue' => 'getExampleValue',
            'defaultValue' => 'getDefaultValue',
            'supportNull' => 'getSupportNull'
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
    const POSITION_REQUEST_PARAMETER_POSITION_PATH = 'REQUEST_PARAMETER_POSITION_PATH';
    const POSITION_REQUEST_PARAMETER_POSITION_HEADER = 'REQUEST_PARAMETER_POSITION_HEADER';
    const POSITION_REQUEST_PARAMETER_POSITION_QUERY = 'REQUEST_PARAMETER_POSITION_QUERY';
    const TYPE_REQUEST_PARAMETER_TYPE_NUMBER = 'REQUEST_PARAMETER_TYPE_NUMBER';
    const TYPE_REQUEST_PARAMETER_TYPE_STRING = 'REQUEST_PARAMETER_TYPE_STRING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPositionAllowableValues()
    {
        return [
            self::POSITION_REQUEST_PARAMETER_POSITION_PATH,
            self::POSITION_REQUEST_PARAMETER_POSITION_HEADER,
            self::POSITION_REQUEST_PARAMETER_POSITION_QUERY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_REQUEST_PARAMETER_TYPE_NUMBER,
            self::TYPE_REQUEST_PARAMETER_TYPE_STRING,
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
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['necessary'] = isset($data['necessary']) ? $data['necessary'] : null;
        $this->container['exampleValue'] = isset($data['exampleValue']) ? $data['exampleValue'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['supportNull'] = isset($data['supportNull']) ? $data['supportNull'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPositionAllowableValues();
                if (!is_null($this->container['position']) && !in_array($this->container['position'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'position', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    *  参数名
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
    * @param string|null $name 参数名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets position
    *  参数的位置
    *
    * @return string|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param string|null $position 参数的位置
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets type
    *  参数的类型
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
    * @param string|null $type 参数的类型
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
    *  参数的描述
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
    * @param string|null $description 参数的描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets necessary
    *  参数是否必填
    *
    * @return bool|null
    */
    public function getNecessary()
    {
        return $this->container['necessary'];
    }

    /**
    * Sets necessary
    *
    * @param bool|null $necessary 参数是否必填
    *
    * @return $this
    */
    public function setNecessary($necessary)
    {
        $this->container['necessary'] = $necessary;
        return $this;
    }

    /**
    * Gets exampleValue
    *  实例值
    *
    * @return string|null
    */
    public function getExampleValue()
    {
        return $this->container['exampleValue'];
    }

    /**
    * Sets exampleValue
    *
    * @param string|null $exampleValue 实例值
    *
    * @return $this
    */
    public function setExampleValue($exampleValue)
    {
        $this->container['exampleValue'] = $exampleValue;
        return $this;
    }

    /**
    * Gets defaultValue
    *  默认值
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
    * @param string|null $defaultValue 默认值
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets supportNull
    *  支持NULL值。
    *
    * @return bool|null
    */
    public function getSupportNull()
    {
        return $this->container['supportNull'];
    }

    /**
    * Sets supportNull
    *
    * @param bool|null $supportNull 支持NULL值。
    *
    * @return $this
    */
    public function setSupportNull($supportNull)
    {
        $this->container['supportNull'] = $supportNull;
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


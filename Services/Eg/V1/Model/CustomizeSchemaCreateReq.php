<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomizeSchemaCreateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomizeSchemaCreateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  事件模型名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    * description  事件模型描述
    * compatibility  事件模型兼容性
    * format  schema内容格式
    * definition  事件模型内容定义
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'compatibility' => 'string',
            'format' => 'string',
            'definition' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  事件模型名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    * description  事件模型描述
    * compatibility  事件模型兼容性
    * format  schema内容格式
    * definition  事件模型内容定义
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'compatibility' => null,
        'format' => null,
        'definition' => null
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
    * name  事件模型名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    * description  事件模型描述
    * compatibility  事件模型兼容性
    * format  schema内容格式
    * definition  事件模型内容定义
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'compatibility' => 'compatibility',
            'format' => 'format',
            'definition' => 'definition'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  事件模型名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    * description  事件模型描述
    * compatibility  事件模型兼容性
    * format  schema内容格式
    * definition  事件模型内容定义
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'compatibility' => 'setCompatibility',
            'format' => 'setFormat',
            'definition' => 'setDefinition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  事件模型名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    * description  事件模型描述
    * compatibility  事件模型兼容性
    * format  schema内容格式
    * definition  事件模型内容定义
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'compatibility' => 'getCompatibility',
            'format' => 'getFormat',
            'definition' => 'getDefinition'
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
    const COMPATIBILITY_NONE = 'NONE';
    const FORMAT_OPENAPI_3_0 = 'OPENAPI_3_0';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCompatibilityAllowableValues()
    {
        return [
            self::COMPATIBILITY_NONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_OPENAPI_3_0,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['compatibility'] = isset($data['compatibility']) ? $data['compatibility'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
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
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
        if ($this->container['compatibility'] === null) {
            $invalidProperties[] = "'compatibility' can't be null";
        }
            $allowedValues = $this->getCompatibilityAllowableValues();
                if (!is_null($this->container['compatibility']) && !in_array($this->container['compatibility'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'compatibility', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getFormatAllowableValues();
                if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['definition'] === null) {
            $invalidProperties[] = "'definition' can't be null";
        }
            if ((mb_strlen($this->container['definition']) > 2048)) {
                $invalidProperties[] = "invalid value for 'definition', the character length must be smaller than or equal to 2048.";
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
    *  事件模型名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
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
    * @param string $name 事件模型名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  事件模型描述
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
    * @param string|null $description 事件模型描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets compatibility
    *  事件模型兼容性
    *
    * @return string
    */
    public function getCompatibility()
    {
        return $this->container['compatibility'];
    }

    /**
    * Sets compatibility
    *
    * @param string $compatibility 事件模型兼容性
    *
    * @return $this
    */
    public function setCompatibility($compatibility)
    {
        $this->container['compatibility'] = $compatibility;
        return $this;
    }

    /**
    * Gets format
    *  schema内容格式
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format schema内容格式
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets definition
    *  事件模型内容定义
    *
    * @return string
    */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
    * Sets definition
    *
    * @param string $definition 事件模型内容定义
    *
    * @return $this
    */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;
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


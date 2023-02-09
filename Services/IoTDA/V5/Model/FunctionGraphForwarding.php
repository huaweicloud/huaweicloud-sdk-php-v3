<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FunctionGraphForwarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FunctionGraphForwarding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * funcUrn  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数。
    * funcName  **参数说明**：函数名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'funcUrn' => 'string',
            'funcName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * funcUrn  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数。
    * funcName  **参数说明**：函数名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'funcUrn' => null,
        'funcName' => null
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
    * funcUrn  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数。
    * funcName  **参数说明**：函数名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'funcUrn' => 'func_urn',
            'funcName' => 'func_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * funcUrn  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数。
    * funcName  **参数说明**：函数名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'funcUrn' => 'setFuncUrn',
            'funcName' => 'setFuncName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * funcUrn  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数。
    * funcName  **参数说明**：函数名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'funcUrn' => 'getFuncUrn',
            'funcName' => 'getFuncName'
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
        $this->container['funcUrn'] = isset($data['funcUrn']) ? $data['funcUrn'] : null;
        $this->container['funcName'] = isset($data['funcName']) ? $data['funcName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['funcUrn'] === null) {
            $invalidProperties[] = "'funcUrn' can't be null";
        }
            if ((mb_strlen($this->container['funcUrn']) > 65535)) {
                $invalidProperties[] = "invalid value for 'funcUrn', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['funcUrn']) < 0)) {
                $invalidProperties[] = "invalid value for 'funcUrn', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['funcName'] === null) {
            $invalidProperties[] = "'funcName' can't be null";
        }
            if ((mb_strlen($this->container['funcName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'funcName', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['funcName']) < 0)) {
                $invalidProperties[] = "invalid value for 'funcName', the character length must be bigger than or equal to 0.";
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
    * Gets funcUrn
    *  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数。
    *
    * @return string
    */
    public function getFuncUrn()
    {
        return $this->container['funcUrn'];
    }

    /**
    * Sets funcUrn
    *
    * @param string $funcUrn **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数。
    *
    * @return $this
    */
    public function setFuncUrn($funcUrn)
    {
        $this->container['funcUrn'] = $funcUrn;
        return $this;
    }

    /**
    * Gets funcName
    *  **参数说明**：函数名称。
    *
    * @return string
    */
    public function getFuncName()
    {
        return $this->container['funcName'];
    }

    /**
    * Sets funcName
    *
    * @param string $funcName **参数说明**：函数名称。
    *
    * @return $this
    */
    public function setFuncName($funcName)
    {
        $this->container['funcName'] = $funcName;
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


<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModuleDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModuleDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * moduleName  模块名称。
    * moduleVersion  模块版本号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'moduleName' => 'string',
            'moduleVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * moduleName  模块名称。
    * moduleVersion  模块版本号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'moduleName' => null,
        'moduleVersion' => null
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
    * moduleName  模块名称。
    * moduleVersion  模块版本号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'moduleName' => 'module_name',
            'moduleVersion' => 'module_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * moduleName  模块名称。
    * moduleVersion  模块版本号。
    *
    * @var string[]
    */
    protected static $setters = [
            'moduleName' => 'setModuleName',
            'moduleVersion' => 'setModuleVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * moduleName  模块名称。
    * moduleVersion  模块版本号。
    *
    * @var string[]
    */
    protected static $getters = [
            'moduleName' => 'getModuleName',
            'moduleVersion' => 'getModuleVersion'
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
        $this->container['moduleName'] = isset($data['moduleName']) ? $data['moduleName'] : null;
        $this->container['moduleVersion'] = isset($data['moduleVersion']) ? $data['moduleVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['moduleName'] === null) {
            $invalidProperties[] = "'moduleName' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9_.\\-]{1,64}$/", $this->container['moduleName'])) {
                $invalidProperties[] = "invalid value for 'moduleName', must be conform to the pattern /^[a-zA-Z0-9_.\\-]{1,64}$/.";
            }
        if ($this->container['moduleVersion'] === null) {
            $invalidProperties[] = "'moduleVersion' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9_.\\-]{1,256}$/", $this->container['moduleVersion'])) {
                $invalidProperties[] = "invalid value for 'moduleVersion', must be conform to the pattern /^[a-zA-Z0-9_.\\-]{1,256}$/.";
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
    * Gets moduleName
    *  模块名称。
    *
    * @return string
    */
    public function getModuleName()
    {
        return $this->container['moduleName'];
    }

    /**
    * Sets moduleName
    *
    * @param string $moduleName 模块名称。
    *
    * @return $this
    */
    public function setModuleName($moduleName)
    {
        $this->container['moduleName'] = $moduleName;
        return $this;
    }

    /**
    * Gets moduleVersion
    *  模块版本号。
    *
    * @return string
    */
    public function getModuleVersion()
    {
        return $this->container['moduleVersion'];
    }

    /**
    * Sets moduleVersion
    *
    * @param string $moduleVersion 模块版本号。
    *
    * @return $this
    */
    public function setModuleVersion($moduleVersion)
    {
        $this->container['moduleVersion'] = $moduleVersion;
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


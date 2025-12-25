<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstallationScript implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstallationScript';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commands  方法
    * osType  操作系统类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commands' => 'string',
            'osType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commands  方法
    * osType  操作系统类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commands' => null,
        'osType' => null
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
    * commands  方法
    * osType  操作系统类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commands' => 'commands',
            'osType' => 'os_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commands  方法
    * osType  操作系统类型
    *
    * @var string[]
    */
    protected static $setters = [
            'commands' => 'setCommands',
            'osType' => 'setOsType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commands  方法
    * osType  操作系统类型
    *
    * @var string[]
    */
    protected static $getters = [
            'commands' => 'getCommands',
            'osType' => 'getOsType'
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
        $this->container['commands'] = isset($data['commands']) ? $data['commands'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['commands']) && (mb_strlen($this->container['commands']) > 63)) {
                $invalidProperties[] = "invalid value for 'commands', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['commands']) && (mb_strlen($this->container['commands']) < 5)) {
                $invalidProperties[] = "invalid value for 'commands', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 63)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 5)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 5.";
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
    * Gets commands
    *  方法
    *
    * @return string|null
    */
    public function getCommands()
    {
        return $this->container['commands'];
    }

    /**
    * Sets commands
    *
    * @param string|null $commands 方法
    *
    * @return $this
    */
    public function setCommands($commands)
    {
        $this->container['commands'] = $commands;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统类型
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 操作系统类型
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
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


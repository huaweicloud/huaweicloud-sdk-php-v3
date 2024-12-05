<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RedisDisabledCommandsDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RedisDisabledCommandsDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbId  key所在的DB。
    * key  key名。
    * commands  命令列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbId' => 'string',
            'key' => 'string',
            'commands' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbId  key所在的DB。
    * key  key名。
    * commands  命令列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbId' => null,
        'key' => null,
        'commands' => null
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
    * dbId  key所在的DB。
    * key  key名。
    * commands  命令列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbId' => 'db_id',
            'key' => 'key',
            'commands' => 'commands'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbId  key所在的DB。
    * key  key名。
    * commands  命令列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbId' => 'setDbId',
            'key' => 'setKey',
            'commands' => 'setCommands'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbId  key所在的DB。
    * key  key名。
    * commands  命令列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbId' => 'getDbId',
            'key' => 'getKey',
            'commands' => 'getCommands'
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
        $this->container['dbId'] = isset($data['dbId']) ? $data['dbId'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['commands'] = isset($data['commands']) ? $data['commands'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbId'] === null) {
            $invalidProperties[] = "'dbId' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        if ($this->container['commands'] === null) {
            $invalidProperties[] = "'commands' can't be null";
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
    * Gets dbId
    *  key所在的DB。
    *
    * @return string
    */
    public function getDbId()
    {
        return $this->container['dbId'];
    }

    /**
    * Sets dbId
    *
    * @param string $dbId key所在的DB。
    *
    * @return $this
    */
    public function setDbId($dbId)
    {
        $this->container['dbId'] = $dbId;
        return $this;
    }

    /**
    * Gets key
    *  key名。
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key key名。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets commands
    *  命令列表。
    *
    * @return string[]
    */
    public function getCommands()
    {
        return $this->container['commands'];
    }

    /**
    * Sets commands
    *
    * @param string[] $commands 命令列表。
    *
    * @return $this
    */
    public function setCommands($commands)
    {
        $this->container['commands'] = $commands;
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


<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Datastore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Datastore';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  数据库版本类型。取值“DDS-Community”。
    * version  数据库版本。支持3.4、3.2和4.0版本。取值为“3.4”、“3.2”或“4.0”。
    * storageEngine  存储引擎。支持WiredTiger存储引擎。取值为“wiredTiger”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'version' => 'string',
            'storageEngine' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  数据库版本类型。取值“DDS-Community”。
    * version  数据库版本。支持3.4、3.2和4.0版本。取值为“3.4”、“3.2”或“4.0”。
    * storageEngine  存储引擎。支持WiredTiger存储引擎。取值为“wiredTiger”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'version' => null,
        'storageEngine' => null
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
    * type  数据库版本类型。取值“DDS-Community”。
    * version  数据库版本。支持3.4、3.2和4.0版本。取值为“3.4”、“3.2”或“4.0”。
    * storageEngine  存储引擎。支持WiredTiger存储引擎。取值为“wiredTiger”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'version' => 'version',
            'storageEngine' => 'storage_engine'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  数据库版本类型。取值“DDS-Community”。
    * version  数据库版本。支持3.4、3.2和4.0版本。取值为“3.4”、“3.2”或“4.0”。
    * storageEngine  存储引擎。支持WiredTiger存储引擎。取值为“wiredTiger”。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'version' => 'setVersion',
            'storageEngine' => 'setStorageEngine'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  数据库版本类型。取值“DDS-Community”。
    * version  数据库版本。支持3.4、3.2和4.0版本。取值为“3.4”、“3.2”或“4.0”。
    * storageEngine  存储引擎。支持WiredTiger存储引擎。取值为“wiredTiger”。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'version' => 'getVersion',
            'storageEngine' => 'getStorageEngine'
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
    const TYPE_DDS_COMMUNITY = 'DDS-Community';
    const STORAGE_ENGINE_WIRED_TIGER = 'wiredTiger';
    const STORAGE_ENGINE_ROCKS_DB = 'rocksDB';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DDS_COMMUNITY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStorageEngineAllowableValues()
    {
        return [
            self::STORAGE_ENGINE_WIRED_TIGER,
            self::STORAGE_ENGINE_ROCKS_DB,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['storageEngine'] = isset($data['storageEngine']) ? $data['storageEngine'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['storageEngine'] === null) {
            $invalidProperties[] = "'storageEngine' can't be null";
        }
            $allowedValues = $this->getStorageEngineAllowableValues();
                if (!is_null($this->container['storageEngine']) && !in_array($this->container['storageEngine'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'storageEngine', must be one of '%s'",
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
    * Gets type
    *  数据库版本类型。取值“DDS-Community”。
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
    * @param string $type 数据库版本类型。取值“DDS-Community”。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets version
    *  数据库版本。支持3.4、3.2和4.0版本。取值为“3.4”、“3.2”或“4.0”。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 数据库版本。支持3.4、3.2和4.0版本。取值为“3.4”、“3.2”或“4.0”。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets storageEngine
    *  存储引擎。支持WiredTiger存储引擎。取值为“wiredTiger”。
    *
    * @return string
    */
    public function getStorageEngine()
    {
        return $this->container['storageEngine'];
    }

    /**
    * Sets storageEngine
    *
    * @param string $storageEngine 存储引擎。支持WiredTiger存储引擎。取值为“wiredTiger”。
    *
    * @return $this
    */
    public function setStorageEngine($storageEngine)
    {
        $this->container['storageEngine'] = $storageEngine;
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


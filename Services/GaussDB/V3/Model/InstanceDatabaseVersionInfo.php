<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceDatabaseVersionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceDatabaseVersionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currentVersion  当前数据库版本。
    * currentKernelVersion  当前数据库内核版本。
    * latestVersion  最新数据库版本。
    * latestKernelVersion  最新数据库内核版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentVersion' => 'string',
            'currentKernelVersion' => 'string',
            'latestVersion' => 'string',
            'latestKernelVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentVersion  当前数据库版本。
    * currentKernelVersion  当前数据库内核版本。
    * latestVersion  最新数据库版本。
    * latestKernelVersion  最新数据库内核版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentVersion' => null,
        'currentKernelVersion' => null,
        'latestVersion' => null,
        'latestKernelVersion' => null
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
    * currentVersion  当前数据库版本。
    * currentKernelVersion  当前数据库内核版本。
    * latestVersion  最新数据库版本。
    * latestKernelVersion  最新数据库内核版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentVersion' => 'current_version',
            'currentKernelVersion' => 'current_kernel_version',
            'latestVersion' => 'latest_version',
            'latestKernelVersion' => 'latest_kernel_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentVersion  当前数据库版本。
    * currentKernelVersion  当前数据库内核版本。
    * latestVersion  最新数据库版本。
    * latestKernelVersion  最新数据库内核版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'currentVersion' => 'setCurrentVersion',
            'currentKernelVersion' => 'setCurrentKernelVersion',
            'latestVersion' => 'setLatestVersion',
            'latestKernelVersion' => 'setLatestKernelVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentVersion  当前数据库版本。
    * currentKernelVersion  当前数据库内核版本。
    * latestVersion  最新数据库版本。
    * latestKernelVersion  最新数据库内核版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'currentVersion' => 'getCurrentVersion',
            'currentKernelVersion' => 'getCurrentKernelVersion',
            'latestVersion' => 'getLatestVersion',
            'latestKernelVersion' => 'getLatestKernelVersion'
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
        $this->container['currentVersion'] = isset($data['currentVersion']) ? $data['currentVersion'] : null;
        $this->container['currentKernelVersion'] = isset($data['currentKernelVersion']) ? $data['currentKernelVersion'] : null;
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
        $this->container['latestKernelVersion'] = isset($data['latestKernelVersion']) ? $data['latestKernelVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets currentVersion
    *  当前数据库版本。
    *
    * @return string|null
    */
    public function getCurrentVersion()
    {
        return $this->container['currentVersion'];
    }

    /**
    * Sets currentVersion
    *
    * @param string|null $currentVersion 当前数据库版本。
    *
    * @return $this
    */
    public function setCurrentVersion($currentVersion)
    {
        $this->container['currentVersion'] = $currentVersion;
        return $this;
    }

    /**
    * Gets currentKernelVersion
    *  当前数据库内核版本。
    *
    * @return string|null
    */
    public function getCurrentKernelVersion()
    {
        return $this->container['currentKernelVersion'];
    }

    /**
    * Sets currentKernelVersion
    *
    * @param string|null $currentKernelVersion 当前数据库内核版本。
    *
    * @return $this
    */
    public function setCurrentKernelVersion($currentKernelVersion)
    {
        $this->container['currentKernelVersion'] = $currentKernelVersion;
        return $this;
    }

    /**
    * Gets latestVersion
    *  最新数据库版本。
    *
    * @return string|null
    */
    public function getLatestVersion()
    {
        return $this->container['latestVersion'];
    }

    /**
    * Sets latestVersion
    *
    * @param string|null $latestVersion 最新数据库版本。
    *
    * @return $this
    */
    public function setLatestVersion($latestVersion)
    {
        $this->container['latestVersion'] = $latestVersion;
        return $this;
    }

    /**
    * Gets latestKernelVersion
    *  最新数据库内核版本。
    *
    * @return string|null
    */
    public function getLatestKernelVersion()
    {
        return $this->container['latestKernelVersion'];
    }

    /**
    * Sets latestKernelVersion
    *
    * @param string|null $latestKernelVersion 最新数据库内核版本。
    *
    * @return $this
    */
    public function setLatestKernelVersion($latestKernelVersion)
    {
        $this->container['latestKernelVersion'] = $latestKernelVersion;
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


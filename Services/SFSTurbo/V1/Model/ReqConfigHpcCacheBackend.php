<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReqConfigHpcCacheBackend implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReqConfigHpcCacheBackend';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * updateHpcCache  updateHpcCache
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'updateHpcCache' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ReqUpdateHpcCacheInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * updateHpcCache  updateHpcCache
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'updateHpcCache' => null
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
    * updateHpcCache  updateHpcCache
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'updateHpcCache' => 'update_hpc_cache'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * updateHpcCache  updateHpcCache
    *
    * @var string[]
    */
    protected static $setters = [
            'updateHpcCache' => 'setUpdateHpcCache'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * updateHpcCache  updateHpcCache
    *
    * @var string[]
    */
    protected static $getters = [
            'updateHpcCache' => 'getUpdateHpcCache'
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
        $this->container['updateHpcCache'] = isset($data['updateHpcCache']) ? $data['updateHpcCache'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['updateHpcCache'] === null) {
            $invalidProperties[] = "'updateHpcCache' can't be null";
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
    * Gets updateHpcCache
    *  updateHpcCache
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ReqUpdateHpcCacheInfo
    */
    public function getUpdateHpcCache()
    {
        return $this->container['updateHpcCache'];
    }

    /**
    * Sets updateHpcCache
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ReqUpdateHpcCacheInfo $updateHpcCache updateHpcCache
    *
    * @return $this
    */
    public function setUpdateHpcCache($updateHpcCache)
    {
        $this->container['updateHpcCache'] = $updateHpcCache;
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


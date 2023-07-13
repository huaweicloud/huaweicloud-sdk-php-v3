<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStorageUsageResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStorageUsageResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceCount  满足过滤条件的资源总条数
    * storageUsage  
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceCount' => 'int',
            'storageUsage' => '\HuaweiCloud\SDK\Cbr\V1\Model\StorageUsage[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceCount  满足过滤条件的资源总条数
    * storageUsage  
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceCount' => 'int32',
        'storageUsage' => null
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
    * resourceCount  满足过滤条件的资源总条数
    * storageUsage  
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceCount' => 'resource_count',
            'storageUsage' => 'storage_usage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceCount  满足过滤条件的资源总条数
    * storageUsage  
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceCount' => 'setResourceCount',
            'storageUsage' => 'setStorageUsage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceCount  满足过滤条件的资源总条数
    * storageUsage  
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceCount' => 'getResourceCount',
            'storageUsage' => 'getStorageUsage'
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
        $this->container['resourceCount'] = isset($data['resourceCount']) ? $data['resourceCount'] : null;
        $this->container['storageUsage'] = isset($data['storageUsage']) ? $data['storageUsage'] : null;
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
    * Gets resourceCount
    *  满足过滤条件的资源总条数
    *
    * @return int|null
    */
    public function getResourceCount()
    {
        return $this->container['resourceCount'];
    }

    /**
    * Sets resourceCount
    *
    * @param int|null $resourceCount 满足过滤条件的资源总条数
    *
    * @return $this
    */
    public function setResourceCount($resourceCount)
    {
        $this->container['resourceCount'] = $resourceCount;
        return $this;
    }

    /**
    * Gets storageUsage
    *  
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\StorageUsage[]|null
    */
    public function getStorageUsage()
    {
        return $this->container['storageUsage'];
    }

    /**
    * Sets storageUsage
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\StorageUsage[]|null $storageUsage 
    *
    * @return $this
    */
    public function setStorageUsage($storageUsage)
    {
        $this->container['storageUsage'] = $storageUsage;
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


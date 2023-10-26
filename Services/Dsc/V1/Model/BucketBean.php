<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BucketBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BucketBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetName  资产名称
    * location  桶位置
    * bucketName  桶名称
    * bucketPolicy  桶策略
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetName' => 'string',
            'location' => 'string',
            'bucketName' => 'string',
            'bucketPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetName  资产名称
    * location  桶位置
    * bucketName  桶名称
    * bucketPolicy  桶策略
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetName' => null,
        'location' => null,
        'bucketName' => null,
        'bucketPolicy' => null
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
    * assetName  资产名称
    * location  桶位置
    * bucketName  桶名称
    * bucketPolicy  桶策略
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetName' => 'asset_name',
            'location' => 'location',
            'bucketName' => 'bucket_name',
            'bucketPolicy' => 'bucket_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetName  资产名称
    * location  桶位置
    * bucketName  桶名称
    * bucketPolicy  桶策略
    *
    * @var string[]
    */
    protected static $setters = [
            'assetName' => 'setAssetName',
            'location' => 'setLocation',
            'bucketName' => 'setBucketName',
            'bucketPolicy' => 'setBucketPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetName  资产名称
    * location  桶位置
    * bucketName  桶名称
    * bucketPolicy  桶策略
    *
    * @var string[]
    */
    protected static $getters = [
            'assetName' => 'getAssetName',
            'location' => 'getLocation',
            'bucketName' => 'getBucketName',
            'bucketPolicy' => 'getBucketPolicy'
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
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['bucketPolicy'] = isset($data['bucketPolicy']) ? $data['bucketPolicy'] : null;
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
    * Gets assetName
    *  资产名称
    *
    * @return string|null
    */
    public function getAssetName()
    {
        return $this->container['assetName'];
    }

    /**
    * Sets assetName
    *
    * @param string|null $assetName 资产名称
    *
    * @return $this
    */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;
        return $this;
    }

    /**
    * Gets location
    *  桶位置
    *
    * @return string|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string|null $location 桶位置
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets bucketName
    *  桶名称
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName 桶名称
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets bucketPolicy
    *  桶策略
    *
    * @return string|null
    */
    public function getBucketPolicy()
    {
        return $this->container['bucketPolicy'];
    }

    /**
    * Sets bucketPolicy
    *
    * @param string|null $bucketPolicy 桶策略
    *
    * @return $this
    */
    public function setBucketPolicy($bucketPolicy)
    {
        $this->container['bucketPolicy'] = $bucketPolicy;
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


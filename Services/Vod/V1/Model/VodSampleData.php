<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VodSampleData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VodSampleData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * storage  存储空间。  单位：GB。
    * storageWarm  低频存储空间。  单位：GB。
    * storageCold  归档存储空间。  单位：GB。
    * transcode  转码时长。  单位：分钟。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'storage' => 'float',
            'storageWarm' => 'float',
            'storageCold' => 'float',
            'transcode' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * storage  存储空间。  单位：GB。
    * storageWarm  低频存储空间。  单位：GB。
    * storageCold  归档存储空间。  单位：GB。
    * transcode  转码时长。  单位：分钟。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'storage' => 'float',
        'storageWarm' => 'float',
        'storageCold' => 'float',
        'transcode' => 'int64'
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
    * storage  存储空间。  单位：GB。
    * storageWarm  低频存储空间。  单位：GB。
    * storageCold  归档存储空间。  单位：GB。
    * transcode  转码时长。  单位：分钟。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'storage' => 'storage',
            'storageWarm' => 'storage_warm',
            'storageCold' => 'storage_cold',
            'transcode' => 'transcode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * storage  存储空间。  单位：GB。
    * storageWarm  低频存储空间。  单位：GB。
    * storageCold  归档存储空间。  单位：GB。
    * transcode  转码时长。  单位：分钟。
    *
    * @var string[]
    */
    protected static $setters = [
            'storage' => 'setStorage',
            'storageWarm' => 'setStorageWarm',
            'storageCold' => 'setStorageCold',
            'transcode' => 'setTranscode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * storage  存储空间。  单位：GB。
    * storageWarm  低频存储空间。  单位：GB。
    * storageCold  归档存储空间。  单位：GB。
    * transcode  转码时长。  单位：分钟。
    *
    * @var string[]
    */
    protected static $getters = [
            'storage' => 'getStorage',
            'storageWarm' => 'getStorageWarm',
            'storageCold' => 'getStorageCold',
            'transcode' => 'getTranscode'
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
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['storageWarm'] = isset($data['storageWarm']) ? $data['storageWarm'] : null;
        $this->container['storageCold'] = isset($data['storageCold']) ? $data['storageCold'] : null;
        $this->container['transcode'] = isset($data['transcode']) ? $data['transcode'] : null;
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
    * Gets storage
    *  存储空间。  单位：GB。
    *
    * @return float|null
    */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
    * Sets storage
    *
    * @param float|null $storage 存储空间。  单位：GB。
    *
    * @return $this
    */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;
        return $this;
    }

    /**
    * Gets storageWarm
    *  低频存储空间。  单位：GB。
    *
    * @return float|null
    */
    public function getStorageWarm()
    {
        return $this->container['storageWarm'];
    }

    /**
    * Sets storageWarm
    *
    * @param float|null $storageWarm 低频存储空间。  单位：GB。
    *
    * @return $this
    */
    public function setStorageWarm($storageWarm)
    {
        $this->container['storageWarm'] = $storageWarm;
        return $this;
    }

    /**
    * Gets storageCold
    *  归档存储空间。  单位：GB。
    *
    * @return float|null
    */
    public function getStorageCold()
    {
        return $this->container['storageCold'];
    }

    /**
    * Sets storageCold
    *
    * @param float|null $storageCold 归档存储空间。  单位：GB。
    *
    * @return $this
    */
    public function setStorageCold($storageCold)
    {
        $this->container['storageCold'] = $storageCold;
        return $this;
    }

    /**
    * Gets transcode
    *  转码时长。  单位：分钟。
    *
    * @return int|null
    */
    public function getTranscode()
    {
        return $this->container['transcode'];
    }

    /**
    * Sets transcode
    *
    * @param int|null $transcode 转码时长。  单位：分钟。
    *
    * @return $this
    */
    public function setTranscode($transcode)
    {
        $this->container['transcode'] = $transcode;
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


<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopUrl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopUrl';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * value  总播放次数。
    * assetId  媒资ID。
    * title  媒资名称。
    * duration  媒资时长。  单位：秒。
    * durationMs  视频时长，单位毫秒。
    * size  媒资原始大小。  单位：字节。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'value' => 'int',
            'assetId' => 'string',
            'title' => 'string',
            'duration' => 'int',
            'durationMs' => 'int',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * value  总播放次数。
    * assetId  媒资ID。
    * title  媒资名称。
    * duration  媒资时长。  单位：秒。
    * durationMs  视频时长，单位毫秒。
    * size  媒资原始大小。  单位：字节。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'value' => 'int64',
        'assetId' => null,
        'title' => null,
        'duration' => null,
        'durationMs' => 'int64',
        'size' => 'int64'
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
    * value  总播放次数。
    * assetId  媒资ID。
    * title  媒资名称。
    * duration  媒资时长。  单位：秒。
    * durationMs  视频时长，单位毫秒。
    * size  媒资原始大小。  单位：字节。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'value' => 'value',
            'assetId' => 'asset_id',
            'title' => 'title',
            'duration' => 'duration',
            'durationMs' => 'duration_ms',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * value  总播放次数。
    * assetId  媒资ID。
    * title  媒资名称。
    * duration  媒资时长。  单位：秒。
    * durationMs  视频时长，单位毫秒。
    * size  媒资原始大小。  单位：字节。
    *
    * @var string[]
    */
    protected static $setters = [
            'value' => 'setValue',
            'assetId' => 'setAssetId',
            'title' => 'setTitle',
            'duration' => 'setDuration',
            'durationMs' => 'setDurationMs',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * value  总播放次数。
    * assetId  媒资ID。
    * title  媒资名称。
    * duration  媒资时长。  单位：秒。
    * durationMs  视频时长，单位毫秒。
    * size  媒资原始大小。  单位：字节。
    *
    * @var string[]
    */
    protected static $getters = [
            'value' => 'getValue',
            'assetId' => 'getAssetId',
            'title' => 'getTitle',
            'duration' => 'getDuration',
            'durationMs' => 'getDurationMs',
            'size' => 'getSize'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['durationMs'] = isset($data['durationMs']) ? $data['durationMs'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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
    * Gets value
    *  总播放次数。
    *
    * @return int|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param int|null $value 总播放次数。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets assetId
    *  媒资ID。
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 媒资ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets title
    *  媒资名称。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 媒资名称。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets duration
    *  媒资时长。  单位：秒。
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 媒资时长。  单位：秒。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets durationMs
    *  视频时长，单位毫秒。
    *
    * @return int|null
    */
    public function getDurationMs()
    {
        return $this->container['durationMs'];
    }

    /**
    * Sets durationMs
    *
    * @param int|null $durationMs 视频时长，单位毫秒。
    *
    * @return $this
    */
    public function setDurationMs($durationMs)
    {
        $this->container['durationMs'] = $durationMs;
        return $this;
    }

    /**
    * Gets size
    *  媒资原始大小。  单位：字节。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 媒资原始大小。  单位：字节。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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


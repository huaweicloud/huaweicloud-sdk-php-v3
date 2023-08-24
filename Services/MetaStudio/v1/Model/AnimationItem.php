<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AnimationItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AnimationItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * animationAssetId  动作资产ID。
    * timestamp  时间戳，相对时间戳。  单位秒。  保留3位小数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'animationAssetId' => 'string',
            'timestamp' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * animationAssetId  动作资产ID。
    * timestamp  时间戳，相对时间戳。  单位秒。  保留3位小数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'animationAssetId' => null,
        'timestamp' => 'float'
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
    * animationAssetId  动作资产ID。
    * timestamp  时间戳，相对时间戳。  单位秒。  保留3位小数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'animationAssetId' => 'animation_asset_id',
            'timestamp' => 'timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * animationAssetId  动作资产ID。
    * timestamp  时间戳，相对时间戳。  单位秒。  保留3位小数。
    *
    * @var string[]
    */
    protected static $setters = [
            'animationAssetId' => 'setAnimationAssetId',
            'timestamp' => 'setTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * animationAssetId  动作资产ID。
    * timestamp  时间戳，相对时间戳。  单位秒。  保留3位小数。
    *
    * @var string[]
    */
    protected static $getters = [
            'animationAssetId' => 'getAnimationAssetId',
            'timestamp' => 'getTimestamp'
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
        $this->container['animationAssetId'] = isset($data['animationAssetId']) ? $data['animationAssetId'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['animationAssetId']) && (mb_strlen($this->container['animationAssetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'animationAssetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['animationAssetId']) && (mb_strlen($this->container['animationAssetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'animationAssetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['timestamp']) && ($this->container['timestamp'] > 7.2E+3)) {
                $invalidProperties[] = "invalid value for 'timestamp', must be smaller than or equal to 7.2E+3.";
            }
            if (!is_null($this->container['timestamp']) && ($this->container['timestamp'] < 0)) {
                $invalidProperties[] = "invalid value for 'timestamp', must be bigger than or equal to 0.";
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
    * Gets animationAssetId
    *  动作资产ID。
    *
    * @return string|null
    */
    public function getAnimationAssetId()
    {
        return $this->container['animationAssetId'];
    }

    /**
    * Sets animationAssetId
    *
    * @param string|null $animationAssetId 动作资产ID。
    *
    * @return $this
    */
    public function setAnimationAssetId($animationAssetId)
    {
        $this->container['animationAssetId'] = $animationAssetId;
        return $this;
    }

    /**
    * Gets timestamp
    *  时间戳，相对时间戳。  单位秒。  保留3位小数。
    *
    * @return float|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param float|null $timestamp 时间戳，相对时间戳。  单位秒。  保留3位小数。
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
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


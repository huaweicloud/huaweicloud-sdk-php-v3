<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StreamSelectionItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StreamSelectionItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  拉流URL中用于码率过滤的参数
    * maxBandwidth  最大码率，单位：bps  取值范围：0 - 104,857,600（100Mbps）
    * minBandwidth  最小码率，单位：bps  取值范围：0 - 104,857,600（100Mbps）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'maxBandwidth' => 'int',
            'minBandwidth' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  拉流URL中用于码率过滤的参数
    * maxBandwidth  最大码率，单位：bps  取值范围：0 - 104,857,600（100Mbps）
    * minBandwidth  最小码率，单位：bps  取值范围：0 - 104,857,600（100Mbps）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'maxBandwidth' => null,
        'minBandwidth' => 'int32'
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
    * key  拉流URL中用于码率过滤的参数
    * maxBandwidth  最大码率，单位：bps  取值范围：0 - 104,857,600（100Mbps）
    * minBandwidth  最小码率，单位：bps  取值范围：0 - 104,857,600（100Mbps）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'maxBandwidth' => 'max_bandwidth',
            'minBandwidth' => 'min_bandwidth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  拉流URL中用于码率过滤的参数
    * maxBandwidth  最大码率，单位：bps  取值范围：0 - 104,857,600（100Mbps）
    * minBandwidth  最小码率，单位：bps  取值范围：0 - 104,857,600（100Mbps）
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'maxBandwidth' => 'setMaxBandwidth',
            'minBandwidth' => 'setMinBandwidth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  拉流URL中用于码率过滤的参数
    * maxBandwidth  最大码率，单位：bps  取值范围：0 - 104,857,600（100Mbps）
    * minBandwidth  最小码率，单位：bps  取值范围：0 - 104,857,600（100Mbps）
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'maxBandwidth' => 'getMaxBandwidth',
            'minBandwidth' => 'getMinBandwidth'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['maxBandwidth'] = isset($data['maxBandwidth']) ? $data['maxBandwidth'] : null;
        $this->container['minBandwidth'] = isset($data['minBandwidth']) ? $data['minBandwidth'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 1024)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
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
    * Gets key
    *  拉流URL中用于码率过滤的参数
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 拉流URL中用于码率过滤的参数
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets maxBandwidth
    *  最大码率，单位：bps  取值范围：0 - 104,857,600（100Mbps）
    *
    * @return int|null
    */
    public function getMaxBandwidth()
    {
        return $this->container['maxBandwidth'];
    }

    /**
    * Sets maxBandwidth
    *
    * @param int|null $maxBandwidth 最大码率，单位：bps  取值范围：0 - 104,857,600（100Mbps）
    *
    * @return $this
    */
    public function setMaxBandwidth($maxBandwidth)
    {
        $this->container['maxBandwidth'] = $maxBandwidth;
        return $this;
    }

    /**
    * Gets minBandwidth
    *  最小码率，单位：bps  取值范围：0 - 104,857,600（100Mbps）
    *
    * @return int|null
    */
    public function getMinBandwidth()
    {
        return $this->container['minBandwidth'];
    }

    /**
    * Sets minBandwidth
    *
    * @param int|null $minBandwidth 最小码率，单位：bps  取值范围：0 - 104,857,600（100Mbps）
    *
    * @return $this
    */
    public function setMinBandwidth($minBandwidth)
    {
        $this->container['minBandwidth'] = $minBandwidth;
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


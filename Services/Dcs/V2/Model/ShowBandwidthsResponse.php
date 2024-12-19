<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBandwidthsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBandwidthsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bandwidth  实例当前带宽(Mbit/s)。
    * maxBandwidth  实例最大带宽(Mbit/s)。
    * allowModify  是否支持调带宽。
    * groupBandwidths  分片带宽列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bandwidth' => 'int',
            'maxBandwidth' => 'int',
            'allowModify' => 'bool',
            'groupBandwidths' => '\HuaweiCloud\SDK\Dcs\V2\Model\GroupBandwidthInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bandwidth  实例当前带宽(Mbit/s)。
    * maxBandwidth  实例最大带宽(Mbit/s)。
    * allowModify  是否支持调带宽。
    * groupBandwidths  分片带宽列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bandwidth' => 'int32',
        'maxBandwidth' => 'int32',
        'allowModify' => null,
        'groupBandwidths' => null
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
    * bandwidth  实例当前带宽(Mbit/s)。
    * maxBandwidth  实例最大带宽(Mbit/s)。
    * allowModify  是否支持调带宽。
    * groupBandwidths  分片带宽列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bandwidth' => 'bandwidth',
            'maxBandwidth' => 'max_bandwidth',
            'allowModify' => 'allow_modify',
            'groupBandwidths' => 'group_bandwidths'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bandwidth  实例当前带宽(Mbit/s)。
    * maxBandwidth  实例最大带宽(Mbit/s)。
    * allowModify  是否支持调带宽。
    * groupBandwidths  分片带宽列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'bandwidth' => 'setBandwidth',
            'maxBandwidth' => 'setMaxBandwidth',
            'allowModify' => 'setAllowModify',
            'groupBandwidths' => 'setGroupBandwidths'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bandwidth  实例当前带宽(Mbit/s)。
    * maxBandwidth  实例最大带宽(Mbit/s)。
    * allowModify  是否支持调带宽。
    * groupBandwidths  分片带宽列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'bandwidth' => 'getBandwidth',
            'maxBandwidth' => 'getMaxBandwidth',
            'allowModify' => 'getAllowModify',
            'groupBandwidths' => 'getGroupBandwidths'
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
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['maxBandwidth'] = isset($data['maxBandwidth']) ? $data['maxBandwidth'] : null;
        $this->container['allowModify'] = isset($data['allowModify']) ? $data['allowModify'] : null;
        $this->container['groupBandwidths'] = isset($data['groupBandwidths']) ? $data['groupBandwidths'] : null;
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
    * Gets bandwidth
    *  实例当前带宽(Mbit/s)。
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth 实例当前带宽(Mbit/s)。
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets maxBandwidth
    *  实例最大带宽(Mbit/s)。
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
    * @param int|null $maxBandwidth 实例最大带宽(Mbit/s)。
    *
    * @return $this
    */
    public function setMaxBandwidth($maxBandwidth)
    {
        $this->container['maxBandwidth'] = $maxBandwidth;
        return $this;
    }

    /**
    * Gets allowModify
    *  是否支持调带宽。
    *
    * @return bool|null
    */
    public function getAllowModify()
    {
        return $this->container['allowModify'];
    }

    /**
    * Sets allowModify
    *
    * @param bool|null $allowModify 是否支持调带宽。
    *
    * @return $this
    */
    public function setAllowModify($allowModify)
    {
        $this->container['allowModify'] = $allowModify;
        return $this;
    }

    /**
    * Gets groupBandwidths
    *  分片带宽列表。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\GroupBandwidthInfo[]|null
    */
    public function getGroupBandwidths()
    {
        return $this->container['groupBandwidths'];
    }

    /**
    * Sets groupBandwidths
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\GroupBandwidthInfo[]|null $groupBandwidths 分片带宽列表。
    *
    * @return $this
    */
    public function setGroupBandwidths($groupBandwidths)
    {
        $this->container['groupBandwidths'] = $groupBandwidths;
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


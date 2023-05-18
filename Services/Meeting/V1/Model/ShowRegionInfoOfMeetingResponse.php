<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRegionInfoOfMeetingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRegionInfoOfMeetingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionIp  会议所在区域的公网IP地址。
    * regionUrl  会议所在区域的公网域名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionIp' => 'string',
            'regionUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionIp  会议所在区域的公网IP地址。
    * regionUrl  会议所在区域的公网域名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionIp' => null,
        'regionUrl' => null
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
    * regionIp  会议所在区域的公网IP地址。
    * regionUrl  会议所在区域的公网域名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionIp' => 'regionIP',
            'regionUrl' => 'regionUrl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionIp  会议所在区域的公网IP地址。
    * regionUrl  会议所在区域的公网域名。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionIp' => 'setRegionIp',
            'regionUrl' => 'setRegionUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionIp  会议所在区域的公网IP地址。
    * regionUrl  会议所在区域的公网域名。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionIp' => 'getRegionIp',
            'regionUrl' => 'getRegionUrl'
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
        $this->container['regionIp'] = isset($data['regionIp']) ? $data['regionIp'] : null;
        $this->container['regionUrl'] = isset($data['regionUrl']) ? $data['regionUrl'] : null;
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
    * Gets regionIp
    *  会议所在区域的公网IP地址。
    *
    * @return string|null
    */
    public function getRegionIp()
    {
        return $this->container['regionIp'];
    }

    /**
    * Sets regionIp
    *
    * @param string|null $regionIp 会议所在区域的公网IP地址。
    *
    * @return $this
    */
    public function setRegionIp($regionIp)
    {
        $this->container['regionIp'] = $regionIp;
        return $this;
    }

    /**
    * Gets regionUrl
    *  会议所在区域的公网域名。
    *
    * @return string|null
    */
    public function getRegionUrl()
    {
        return $this->container['regionUrl'];
    }

    /**
    * Sets regionUrl
    *
    * @param string|null $regionUrl 会议所在区域的公网域名。
    *
    * @return $this
    */
    public function setRegionUrl($regionUrl)
    {
        $this->container['regionUrl'] = $regionUrl;
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


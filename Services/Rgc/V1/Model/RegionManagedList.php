<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegionManagedList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'regionManagedList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  区域名字。
    * regionStatus  区域的状态，取值为可用或者不可用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'regionStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  区域名字。
    * regionStatus  区域的状态，取值为可用或者不可用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'regionStatus' => null
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
    * region  区域名字。
    * regionStatus  区域的状态，取值为可用或者不可用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'regionStatus' => 'region_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  区域名字。
    * regionStatus  区域的状态，取值为可用或者不可用。
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'regionStatus' => 'setRegionStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  区域名字。
    * regionStatus  区域的状态，取值为可用或者不可用。
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'regionStatus' => 'getRegionStatus'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['regionStatus'] = isset($data['regionStatus']) ? $data['regionStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 36)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regionStatus']) && (mb_strlen($this->container['regionStatus']) > 36)) {
                $invalidProperties[] = "invalid value for 'regionStatus', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['regionStatus']) && (mb_strlen($this->container['regionStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionStatus', the character length must be bigger than or equal to 1.";
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
    * Gets region
    *  区域名字。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域名字。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets regionStatus
    *  区域的状态，取值为可用或者不可用。
    *
    * @return string|null
    */
    public function getRegionStatus()
    {
        return $this->container['regionStatus'];
    }

    /**
    * Sets regionStatus
    *
    * @param string|null $regionStatus 区域的状态，取值为可用或者不可用。
    *
    * @return $this
    */
    public function setRegionStatus($regionStatus)
    {
        $this->container['regionStatus'] = $regionStatus;
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


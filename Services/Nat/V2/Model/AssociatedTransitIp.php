<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociatedTransitIp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociatedTransitIp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * transitIpId  中转IP的ID。
    * transitIpAddress  中转IP地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'transitIpId' => 'string',
            'transitIpAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * transitIpId  中转IP的ID。
    * transitIpAddress  中转IP地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'transitIpId' => null,
        'transitIpAddress' => null
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
    * transitIpId  中转IP的ID。
    * transitIpAddress  中转IP地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'transitIpId' => 'transit_ip_id',
            'transitIpAddress' => 'transit_ip_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * transitIpId  中转IP的ID。
    * transitIpAddress  中转IP地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'transitIpId' => 'setTransitIpId',
            'transitIpAddress' => 'setTransitIpAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * transitIpId  中转IP的ID。
    * transitIpAddress  中转IP地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'transitIpId' => 'getTransitIpId',
            'transitIpAddress' => 'getTransitIpAddress'
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
        $this->container['transitIpId'] = isset($data['transitIpId']) ? $data['transitIpId'] : null;
        $this->container['transitIpAddress'] = isset($data['transitIpAddress']) ? $data['transitIpAddress'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['transitIpId']) && (mb_strlen($this->container['transitIpId']) > 36)) {
                $invalidProperties[] = "invalid value for 'transitIpId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['transitIpId']) && (mb_strlen($this->container['transitIpId']) < 36)) {
                $invalidProperties[] = "invalid value for 'transitIpId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['transitIpAddress']) && (mb_strlen($this->container['transitIpAddress']) > 35)) {
                $invalidProperties[] = "invalid value for 'transitIpAddress', the character length must be smaller than or equal to 35.";
            }
            if (!is_null($this->container['transitIpAddress']) && (mb_strlen($this->container['transitIpAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'transitIpAddress', the character length must be bigger than or equal to 7.";
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
    * Gets transitIpId
    *  中转IP的ID。
    *
    * @return string|null
    */
    public function getTransitIpId()
    {
        return $this->container['transitIpId'];
    }

    /**
    * Sets transitIpId
    *
    * @param string|null $transitIpId 中转IP的ID。
    *
    * @return $this
    */
    public function setTransitIpId($transitIpId)
    {
        $this->container['transitIpId'] = $transitIpId;
        return $this;
    }

    /**
    * Gets transitIpAddress
    *  中转IP地址。
    *
    * @return string|null
    */
    public function getTransitIpAddress()
    {
        return $this->container['transitIpAddress'];
    }

    /**
    * Sets transitIpAddress
    *
    * @param string|null $transitIpAddress 中转IP地址。
    *
    * @return $this
    */
    public function setTransitIpAddress($transitIpAddress)
    {
        $this->container['transitIpAddress'] = $transitIpAddress;
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


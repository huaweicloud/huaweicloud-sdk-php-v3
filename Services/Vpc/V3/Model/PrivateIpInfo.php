<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivateIpInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivateIpInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subnetCidrId  端口所属子网ID
    * ipAddress  端口私有IP地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subnetCidrId' => 'string',
            'ipAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subnetCidrId  端口所属子网ID
    * ipAddress  端口私有IP地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subnetCidrId' => null,
        'ipAddress' => null
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
    * subnetCidrId  端口所属子网ID
    * ipAddress  端口私有IP地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subnetCidrId' => 'subnet_cidr_id',
            'ipAddress' => 'ip_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subnetCidrId  端口所属子网ID
    * ipAddress  端口私有IP地址
    *
    * @var string[]
    */
    protected static $setters = [
            'subnetCidrId' => 'setSubnetCidrId',
            'ipAddress' => 'setIpAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subnetCidrId  端口所属子网ID
    * ipAddress  端口私有IP地址
    *
    * @var string[]
    */
    protected static $getters = [
            'subnetCidrId' => 'getSubnetCidrId',
            'ipAddress' => 'getIpAddress'
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
        $this->container['subnetCidrId'] = isset($data['subnetCidrId']) ? $data['subnetCidrId'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subnetCidrId'] === null) {
            $invalidProperties[] = "'subnetCidrId' can't be null";
        }
        if ($this->container['ipAddress'] === null) {
            $invalidProperties[] = "'ipAddress' can't be null";
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
    * Gets subnetCidrId
    *  端口所属子网ID
    *
    * @return string
    */
    public function getSubnetCidrId()
    {
        return $this->container['subnetCidrId'];
    }

    /**
    * Sets subnetCidrId
    *
    * @param string $subnetCidrId 端口所属子网ID
    *
    * @return $this
    */
    public function setSubnetCidrId($subnetCidrId)
    {
        $this->container['subnetCidrId'] = $subnetCidrId;
        return $this;
    }

    /**
    * Gets ipAddress
    *  端口私有IP地址
    *
    * @return string
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string $ipAddress 端口私有IP地址
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
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


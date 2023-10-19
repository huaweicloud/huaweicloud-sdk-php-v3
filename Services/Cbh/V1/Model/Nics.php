<?php

namespace HuaweiCloud\SDK\Cbh\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Nics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Nics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subnetId  子网ID，字母数字下划线连接符组成。
    * ipAddress  IPV4地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subnetId' => 'string',
            'ipAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subnetId  子网ID，字母数字下划线连接符组成。
    * ipAddress  IPV4地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subnetId' => null,
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
    * subnetId  子网ID，字母数字下划线连接符组成。
    * ipAddress  IPV4地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subnetId' => 'subnet_id',
            'ipAddress' => 'ip_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subnetId  子网ID，字母数字下划线连接符组成。
    * ipAddress  IPV4地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'subnetId' => 'setSubnetId',
            'ipAddress' => 'setIpAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subnetId  子网ID，字母数字下划线连接符组成。
    * ipAddress  IPV4地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'subnetId' => 'getSubnetId',
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
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
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
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
            if ((mb_strlen($this->container['subnetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['subnetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ipAddress']) && (mb_strlen($this->container['ipAddress']) > 36)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['ipAddress']) && (mb_strlen($this->container['ipAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be bigger than or equal to 0.";
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
    * Gets subnetId
    *  子网ID，字母数字下划线连接符组成。
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 子网ID，字母数字下划线连接符组成。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets ipAddress
    *  IPV4地址。
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress IPV4地址。
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


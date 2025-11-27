<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccelerateIp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccelerateIp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipType  IP地址类型。 取值范围：IPV4、IPV6
    * ipAddress  IP地址。
    * area  area
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipType' => 'string',
            'ipAddress' => 'string',
            'area' => '\HuaweiCloud\SDK\Ga\V1\Model\Area'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipType  IP地址类型。 取值范围：IPV4、IPV6
    * ipAddress  IP地址。
    * area  area
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipType' => null,
        'ipAddress' => null,
        'area' => null
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
    * ipType  IP地址类型。 取值范围：IPV4、IPV6
    * ipAddress  IP地址。
    * area  area
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipType' => 'ip_type',
            'ipAddress' => 'ip_address',
            'area' => 'area'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipType  IP地址类型。 取值范围：IPV4、IPV6
    * ipAddress  IP地址。
    * area  area
    *
    * @var string[]
    */
    protected static $setters = [
            'ipType' => 'setIpType',
            'ipAddress' => 'setIpAddress',
            'area' => 'setArea'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipType  IP地址类型。 取值范围：IPV4、IPV6
    * ipAddress  IP地址。
    * area  area
    *
    * @var string[]
    */
    protected static $getters = [
            'ipType' => 'getIpType',
            'ipAddress' => 'getIpAddress',
            'area' => 'getArea'
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
    const IP_TYPE_IPV4 = 'IPV4';
    const IP_TYPE_IPV6 = 'IPV6';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpTypeAllowableValues()
    {
        return [
            self::IP_TYPE_IPV4,
            self::IP_TYPE_IPV6,
        ];
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
        $this->container['ipType'] = isset($data['ipType']) ? $data['ipType'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ipType'] === null) {
            $invalidProperties[] = "'ipType' can't be null";
        }
            $allowedValues = $this->getIpTypeAllowableValues();
                if (!is_null($this->container['ipType']) && !in_array($this->container['ipType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets ipType
    *  IP地址类型。 取值范围：IPV4、IPV6
    *
    * @return string
    */
    public function getIpType()
    {
        return $this->container['ipType'];
    }

    /**
    * Sets ipType
    *
    * @param string $ipType IP地址类型。 取值范围：IPV4、IPV6
    *
    * @return $this
    */
    public function setIpType($ipType)
    {
        $this->container['ipType'] = $ipType;
        return $this;
    }

    /**
    * Gets ipAddress
    *  IP地址。
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
    * @param string|null $ipAddress IP地址。
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets area
    *  area
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\Area|null
    */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
    * Sets area
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\Area|null $area area
    *
    * @return $this
    */
    public function setArea($area)
    {
        $this->container['area'] = $area;
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


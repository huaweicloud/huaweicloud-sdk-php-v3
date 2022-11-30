<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerAddress';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  IP地址版本。  - “4”：代表IPv4。 - “6”：代表IPv6。
    * addr  IP地址。
    * osExtIpStype  IP地址类型。  - fixed：代表私有IP地址。 - floating：代表浮动IP地址。
    * osExtIpsMaCmacAddr  MAC地址。
    * osExtIpSportId  IP地址对应的端口ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'addr' => 'string',
            'osExtIpStype' => 'string',
            'osExtIpsMaCmacAddr' => 'string',
            'osExtIpSportId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  IP地址版本。  - “4”：代表IPv4。 - “6”：代表IPv6。
    * addr  IP地址。
    * osExtIpStype  IP地址类型。  - fixed：代表私有IP地址。 - floating：代表浮动IP地址。
    * osExtIpsMaCmacAddr  MAC地址。
    * osExtIpSportId  IP地址对应的端口ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'addr' => null,
        'osExtIpStype' => null,
        'osExtIpsMaCmacAddr' => null,
        'osExtIpSportId' => null
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
    * version  IP地址版本。  - “4”：代表IPv4。 - “6”：代表IPv6。
    * addr  IP地址。
    * osExtIpStype  IP地址类型。  - fixed：代表私有IP地址。 - floating：代表浮动IP地址。
    * osExtIpsMaCmacAddr  MAC地址。
    * osExtIpSportId  IP地址对应的端口ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'addr' => 'addr',
            'osExtIpStype' => 'OS-EXT-IPS:type',
            'osExtIpsMaCmacAddr' => 'OS-EXT-IPS-MAC:mac_addr',
            'osExtIpSportId' => 'OS-EXT-IPS:port_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  IP地址版本。  - “4”：代表IPv4。 - “6”：代表IPv6。
    * addr  IP地址。
    * osExtIpStype  IP地址类型。  - fixed：代表私有IP地址。 - floating：代表浮动IP地址。
    * osExtIpsMaCmacAddr  MAC地址。
    * osExtIpSportId  IP地址对应的端口ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'addr' => 'setAddr',
            'osExtIpStype' => 'setOsExtIpStype',
            'osExtIpsMaCmacAddr' => 'setOsExtIpsMaCmacAddr',
            'osExtIpSportId' => 'setOsExtIpSportId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  IP地址版本。  - “4”：代表IPv4。 - “6”：代表IPv6。
    * addr  IP地址。
    * osExtIpStype  IP地址类型。  - fixed：代表私有IP地址。 - floating：代表浮动IP地址。
    * osExtIpsMaCmacAddr  MAC地址。
    * osExtIpSportId  IP地址对应的端口ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'addr' => 'getAddr',
            'osExtIpStype' => 'getOsExtIpStype',
            'osExtIpsMaCmacAddr' => 'getOsExtIpsMaCmacAddr',
            'osExtIpSportId' => 'getOsExtIpSportId'
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
    const OS_EXT_IP_STYPE_FIXED = 'fixed';
    const OS_EXT_IP_STYPE_FLOATING = 'floating';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsExtIpStypeAllowableValues()
    {
        return [
            self::OS_EXT_IP_STYPE_FIXED,
            self::OS_EXT_IP_STYPE_FLOATING,
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['addr'] = isset($data['addr']) ? $data['addr'] : null;
        $this->container['osExtIpStype'] = isset($data['osExtIpStype']) ? $data['osExtIpStype'] : null;
        $this->container['osExtIpsMaCmacAddr'] = isset($data['osExtIpsMaCmacAddr']) ? $data['osExtIpsMaCmacAddr'] : null;
        $this->container['osExtIpSportId'] = isset($data['osExtIpSportId']) ? $data['osExtIpSportId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['addr'] === null) {
            $invalidProperties[] = "'addr' can't be null";
        }
            $allowedValues = $this->getOsExtIpStypeAllowableValues();
                if (!is_null($this->container['osExtIpStype']) && !in_array($this->container['osExtIpStype'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osExtIpStype', must be one of '%s'",
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
    * Gets version
    *  IP地址版本。  - “4”：代表IPv4。 - “6”：代表IPv6。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version IP地址版本。  - “4”：代表IPv4。 - “6”：代表IPv6。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets addr
    *  IP地址。
    *
    * @return string
    */
    public function getAddr()
    {
        return $this->container['addr'];
    }

    /**
    * Sets addr
    *
    * @param string $addr IP地址。
    *
    * @return $this
    */
    public function setAddr($addr)
    {
        $this->container['addr'] = $addr;
        return $this;
    }

    /**
    * Gets osExtIpStype
    *  IP地址类型。  - fixed：代表私有IP地址。 - floating：代表浮动IP地址。
    *
    * @return string|null
    */
    public function getOsExtIpStype()
    {
        return $this->container['osExtIpStype'];
    }

    /**
    * Sets osExtIpStype
    *
    * @param string|null $osExtIpStype IP地址类型。  - fixed：代表私有IP地址。 - floating：代表浮动IP地址。
    *
    * @return $this
    */
    public function setOsExtIpStype($osExtIpStype)
    {
        $this->container['osExtIpStype'] = $osExtIpStype;
        return $this;
    }

    /**
    * Gets osExtIpsMaCmacAddr
    *  MAC地址。
    *
    * @return string|null
    */
    public function getOsExtIpsMaCmacAddr()
    {
        return $this->container['osExtIpsMaCmacAddr'];
    }

    /**
    * Sets osExtIpsMaCmacAddr
    *
    * @param string|null $osExtIpsMaCmacAddr MAC地址。
    *
    * @return $this
    */
    public function setOsExtIpsMaCmacAddr($osExtIpsMaCmacAddr)
    {
        $this->container['osExtIpsMaCmacAddr'] = $osExtIpsMaCmacAddr;
        return $this;
    }

    /**
    * Gets osExtIpSportId
    *  IP地址对应的端口ID。
    *
    * @return string|null
    */
    public function getOsExtIpSportId()
    {
        return $this->container['osExtIpSportId'];
    }

    /**
    * Sets osExtIpSportId
    *
    * @param string|null $osExtIpSportId IP地址对应的端口ID。
    *
    * @return $this
    */
    public function setOsExtIpSportId($osExtIpSportId)
    {
        $this->container['osExtIpSportId'] = $osExtIpSportId;
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


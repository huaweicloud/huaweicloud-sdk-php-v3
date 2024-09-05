<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NetworkAddresses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NetworkAddresses';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addr  IP地址。
    * version  IP地址类型，值为4或6。  4：IP地址类型是IPv4 6：IP地址类型是IPv6
    * osExtIpSportId  IP地址对应的端口ID。
    * osExtIpsMaCmacAddr  扩展属性，MAC地址。
    * osExtIpStype  扩展属性，分配IP地址方式。  fixed：代表私有IP地址。 floating：代表浮动IP地址。
    * primary  是否是主网卡。  true：主网卡。 false：辅助网卡。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addr' => 'string',
            'version' => 'int',
            'osExtIpSportId' => 'string',
            'osExtIpsMaCmacAddr' => 'string',
            'osExtIpStype' => 'string',
            'primary' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addr  IP地址。
    * version  IP地址类型，值为4或6。  4：IP地址类型是IPv4 6：IP地址类型是IPv6
    * osExtIpSportId  IP地址对应的端口ID。
    * osExtIpsMaCmacAddr  扩展属性，MAC地址。
    * osExtIpStype  扩展属性，分配IP地址方式。  fixed：代表私有IP地址。 floating：代表浮动IP地址。
    * primary  是否是主网卡。  true：主网卡。 false：辅助网卡。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addr' => null,
        'version' => 'int32',
        'osExtIpSportId' => null,
        'osExtIpsMaCmacAddr' => null,
        'osExtIpStype' => null,
        'primary' => null
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
    * addr  IP地址。
    * version  IP地址类型，值为4或6。  4：IP地址类型是IPv4 6：IP地址类型是IPv6
    * osExtIpSportId  IP地址对应的端口ID。
    * osExtIpsMaCmacAddr  扩展属性，MAC地址。
    * osExtIpStype  扩展属性，分配IP地址方式。  fixed：代表私有IP地址。 floating：代表浮动IP地址。
    * primary  是否是主网卡。  true：主网卡。 false：辅助网卡。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addr' => 'addr',
            'version' => 'version',
            'osExtIpSportId' => 'OS-EXT-IPS:port_id',
            'osExtIpsMaCmacAddr' => 'OS-EXT-IPS-MAC:mac_addr',
            'osExtIpStype' => 'OS-EXT-IPS:type',
            'primary' => 'primary'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addr  IP地址。
    * version  IP地址类型，值为4或6。  4：IP地址类型是IPv4 6：IP地址类型是IPv6
    * osExtIpSportId  IP地址对应的端口ID。
    * osExtIpsMaCmacAddr  扩展属性，MAC地址。
    * osExtIpStype  扩展属性，分配IP地址方式。  fixed：代表私有IP地址。 floating：代表浮动IP地址。
    * primary  是否是主网卡。  true：主网卡。 false：辅助网卡。
    *
    * @var string[]
    */
    protected static $setters = [
            'addr' => 'setAddr',
            'version' => 'setVersion',
            'osExtIpSportId' => 'setOsExtIpSportId',
            'osExtIpsMaCmacAddr' => 'setOsExtIpsMaCmacAddr',
            'osExtIpStype' => 'setOsExtIpStype',
            'primary' => 'setPrimary'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addr  IP地址。
    * version  IP地址类型，值为4或6。  4：IP地址类型是IPv4 6：IP地址类型是IPv6
    * osExtIpSportId  IP地址对应的端口ID。
    * osExtIpsMaCmacAddr  扩展属性，MAC地址。
    * osExtIpStype  扩展属性，分配IP地址方式。  fixed：代表私有IP地址。 floating：代表浮动IP地址。
    * primary  是否是主网卡。  true：主网卡。 false：辅助网卡。
    *
    * @var string[]
    */
    protected static $getters = [
            'addr' => 'getAddr',
            'version' => 'getVersion',
            'osExtIpSportId' => 'getOsExtIpSportId',
            'osExtIpsMaCmacAddr' => 'getOsExtIpsMaCmacAddr',
            'osExtIpStype' => 'getOsExtIpStype',
            'primary' => 'getPrimary'
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
    const VERSION_4 = 4;
    const VERSION_6 = 6;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVersionAllowableValues()
    {
        return [
            self::VERSION_4,
            self::VERSION_6,
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
        $this->container['addr'] = isset($data['addr']) ? $data['addr'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['osExtIpSportId'] = isset($data['osExtIpSportId']) ? $data['osExtIpSportId'] : null;
        $this->container['osExtIpsMaCmacAddr'] = isset($data['osExtIpsMaCmacAddr']) ? $data['osExtIpsMaCmacAddr'] : null;
        $this->container['osExtIpStype'] = isset($data['osExtIpStype']) ? $data['osExtIpStype'] : null;
        $this->container['primary'] = isset($data['primary']) ? $data['primary'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['addr'] === null) {
            $invalidProperties[] = "'addr' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
            $allowedValues = $this->getVersionAllowableValues();
                if (!is_null($this->container['version']) && !in_array($this->container['version'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'version', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['osExtIpSportId'] === null) {
            $invalidProperties[] = "'osExtIpSportId' can't be null";
        }
        if ($this->container['osExtIpsMaCmacAddr'] === null) {
            $invalidProperties[] = "'osExtIpsMaCmacAddr' can't be null";
        }
        if ($this->container['osExtIpStype'] === null) {
            $invalidProperties[] = "'osExtIpStype' can't be null";
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
    * Gets version
    *  IP地址类型，值为4或6。  4：IP地址类型是IPv4 6：IP地址类型是IPv6
    *
    * @return int
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int $version IP地址类型，值为4或6。  4：IP地址类型是IPv4 6：IP地址类型是IPv6
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets osExtIpSportId
    *  IP地址对应的端口ID。
    *
    * @return string
    */
    public function getOsExtIpSportId()
    {
        return $this->container['osExtIpSportId'];
    }

    /**
    * Sets osExtIpSportId
    *
    * @param string $osExtIpSportId IP地址对应的端口ID。
    *
    * @return $this
    */
    public function setOsExtIpSportId($osExtIpSportId)
    {
        $this->container['osExtIpSportId'] = $osExtIpSportId;
        return $this;
    }

    /**
    * Gets osExtIpsMaCmacAddr
    *  扩展属性，MAC地址。
    *
    * @return string
    */
    public function getOsExtIpsMaCmacAddr()
    {
        return $this->container['osExtIpsMaCmacAddr'];
    }

    /**
    * Sets osExtIpsMaCmacAddr
    *
    * @param string $osExtIpsMaCmacAddr 扩展属性，MAC地址。
    *
    * @return $this
    */
    public function setOsExtIpsMaCmacAddr($osExtIpsMaCmacAddr)
    {
        $this->container['osExtIpsMaCmacAddr'] = $osExtIpsMaCmacAddr;
        return $this;
    }

    /**
    * Gets osExtIpStype
    *  扩展属性，分配IP地址方式。  fixed：代表私有IP地址。 floating：代表浮动IP地址。
    *
    * @return string
    */
    public function getOsExtIpStype()
    {
        return $this->container['osExtIpStype'];
    }

    /**
    * Sets osExtIpStype
    *
    * @param string $osExtIpStype 扩展属性，分配IP地址方式。  fixed：代表私有IP地址。 floating：代表浮动IP地址。
    *
    * @return $this
    */
    public function setOsExtIpStype($osExtIpStype)
    {
        $this->container['osExtIpStype'] = $osExtIpStype;
        return $this;
    }

    /**
    * Gets primary
    *  是否是主网卡。  true：主网卡。 false：辅助网卡。
    *
    * @return bool|null
    */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
    * Sets primary
    *
    * @param bool|null $primary 是否是主网卡。  true：主网卡。 false：辅助网卡。
    *
    * @return $this
    */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;
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


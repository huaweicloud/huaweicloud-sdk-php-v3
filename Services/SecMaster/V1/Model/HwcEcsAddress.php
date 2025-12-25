<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HwcEcsAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HwcEcsAddress';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  IP地址版本。 “4”：代表IPv4。 “6”：代表IPv6。
    * addr  IP地址。
    * type  IP地址类型。 fixed：代表私有IP地址。 floating：代表浮动IP地址
    * macAddr  MAC地址。
    * portId  IP地址对应的端口ID。
    * vpcId  所属虚拟私有云的ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'addr' => 'string',
            'type' => 'string',
            'macAddr' => 'string',
            'portId' => 'string',
            'vpcId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  IP地址版本。 “4”：代表IPv4。 “6”：代表IPv6。
    * addr  IP地址。
    * type  IP地址类型。 fixed：代表私有IP地址。 floating：代表浮动IP地址
    * macAddr  MAC地址。
    * portId  IP地址对应的端口ID。
    * vpcId  所属虚拟私有云的ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'addr' => null,
        'type' => null,
        'macAddr' => null,
        'portId' => null,
        'vpcId' => null
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
    * version  IP地址版本。 “4”：代表IPv4。 “6”：代表IPv6。
    * addr  IP地址。
    * type  IP地址类型。 fixed：代表私有IP地址。 floating：代表浮动IP地址
    * macAddr  MAC地址。
    * portId  IP地址对应的端口ID。
    * vpcId  所属虚拟私有云的ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'addr' => 'addr',
            'type' => 'type',
            'macAddr' => 'mac_addr',
            'portId' => 'port_id',
            'vpcId' => 'vpc_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  IP地址版本。 “4”：代表IPv4。 “6”：代表IPv6。
    * addr  IP地址。
    * type  IP地址类型。 fixed：代表私有IP地址。 floating：代表浮动IP地址
    * macAddr  MAC地址。
    * portId  IP地址对应的端口ID。
    * vpcId  所属虚拟私有云的ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'addr' => 'setAddr',
            'type' => 'setType',
            'macAddr' => 'setMacAddr',
            'portId' => 'setPortId',
            'vpcId' => 'setVpcId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  IP地址版本。 “4”：代表IPv4。 “6”：代表IPv6。
    * addr  IP地址。
    * type  IP地址类型。 fixed：代表私有IP地址。 floating：代表浮动IP地址
    * macAddr  MAC地址。
    * portId  IP地址对应的端口ID。
    * vpcId  所属虚拟私有云的ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'addr' => 'getAddr',
            'type' => 'getType',
            'macAddr' => 'getMacAddr',
            'portId' => 'getPortId',
            'vpcId' => 'getVpcId'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['addr'] = isset($data['addr']) ? $data['addr'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['macAddr'] = isset($data['macAddr']) ? $data['macAddr'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
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
            if ((mb_strlen($this->container['version']) > 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 1.";
            }
            if ((mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['addr'] === null) {
            $invalidProperties[] = "'addr' can't be null";
        }
            if ((mb_strlen($this->container['addr']) > 64)) {
                $invalidProperties[] = "invalid value for 'addr', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['addr']) < 0)) {
                $invalidProperties[] = "invalid value for 'addr', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['macAddr'] === null) {
            $invalidProperties[] = "'macAddr' can't be null";
        }
            if ((mb_strlen($this->container['macAddr']) > 64)) {
                $invalidProperties[] = "invalid value for 'macAddr', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['macAddr']) < 0)) {
                $invalidProperties[] = "invalid value for 'macAddr', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['portId'] === null) {
            $invalidProperties[] = "'portId' can't be null";
        }
            if ((mb_strlen($this->container['portId']) > 36)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['portId']) < 32)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if ((mb_strlen($this->container['vpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['vpcId']) < 32)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 32.";
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
    *  IP地址版本。 “4”：代表IPv4。 “6”：代表IPv6。
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
    * @param string $version IP地址版本。 “4”：代表IPv4。 “6”：代表IPv6。
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
    * Gets type
    *  IP地址类型。 fixed：代表私有IP地址。 floating：代表浮动IP地址
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type IP地址类型。 fixed：代表私有IP地址。 floating：代表浮动IP地址
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets macAddr
    *  MAC地址。
    *
    * @return string
    */
    public function getMacAddr()
    {
        return $this->container['macAddr'];
    }

    /**
    * Sets macAddr
    *
    * @param string $macAddr MAC地址。
    *
    * @return $this
    */
    public function setMacAddr($macAddr)
    {
        $this->container['macAddr'] = $macAddr;
        return $this;
    }

    /**
    * Gets portId
    *  IP地址对应的端口ID。
    *
    * @return string
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string $portId IP地址对应的端口ID。
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets vpcId
    *  所属虚拟私有云的ID。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 所属虚拟私有云的ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
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


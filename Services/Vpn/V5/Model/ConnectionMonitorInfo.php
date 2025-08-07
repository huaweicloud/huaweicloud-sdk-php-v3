<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConnectionMonitorInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConnectionMonitorInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  VPN连接监控ID
    * status  VPN连接监控状态
    * vpnConnectionId  VPN连接监控对应的VPN连接ID
    * type  监控类型，取值范围：gateway
    * sourceIp  VPN连接监控的源地址
    * destinationIp  VPN连接监控的目的地址
    * protoType  预留字段，nqa使用的协议类型，目前使用默认值ICMP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'vpnConnectionId' => 'string',
            'type' => 'string',
            'sourceIp' => 'string',
            'destinationIp' => 'string',
            'protoType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  VPN连接监控ID
    * status  VPN连接监控状态
    * vpnConnectionId  VPN连接监控对应的VPN连接ID
    * type  监控类型，取值范围：gateway
    * sourceIp  VPN连接监控的源地址
    * destinationIp  VPN连接监控的目的地址
    * protoType  预留字段，nqa使用的协议类型，目前使用默认值ICMP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'vpnConnectionId' => null,
        'type' => null,
        'sourceIp' => 'ipv4',
        'destinationIp' => 'ipv4',
        'protoType' => null
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
    * id  VPN连接监控ID
    * status  VPN连接监控状态
    * vpnConnectionId  VPN连接监控对应的VPN连接ID
    * type  监控类型，取值范围：gateway
    * sourceIp  VPN连接监控的源地址
    * destinationIp  VPN连接监控的目的地址
    * protoType  预留字段，nqa使用的协议类型，目前使用默认值ICMP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'vpnConnectionId' => 'vpn_connection_id',
            'type' => 'type',
            'sourceIp' => 'source_ip',
            'destinationIp' => 'destination_ip',
            'protoType' => 'proto_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  VPN连接监控ID
    * status  VPN连接监控状态
    * vpnConnectionId  VPN连接监控对应的VPN连接ID
    * type  监控类型，取值范围：gateway
    * sourceIp  VPN连接监控的源地址
    * destinationIp  VPN连接监控的目的地址
    * protoType  预留字段，nqa使用的协议类型，目前使用默认值ICMP
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'vpnConnectionId' => 'setVpnConnectionId',
            'type' => 'setType',
            'sourceIp' => 'setSourceIp',
            'destinationIp' => 'setDestinationIp',
            'protoType' => 'setProtoType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  VPN连接监控ID
    * status  VPN连接监控状态
    * vpnConnectionId  VPN连接监控对应的VPN连接ID
    * type  监控类型，取值范围：gateway
    * sourceIp  VPN连接监控的源地址
    * destinationIp  VPN连接监控的目的地址
    * protoType  预留字段，nqa使用的协议类型，目前使用默认值ICMP
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'vpnConnectionId' => 'getVpnConnectionId',
            'type' => 'getType',
            'sourceIp' => 'getSourceIp',
            'destinationIp' => 'getDestinationIp',
            'protoType' => 'getProtoType'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vpnConnectionId'] = isset($data['vpnConnectionId']) ? $data['vpnConnectionId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sourceIp'] = isset($data['sourceIp']) ? $data['sourceIp'] : null;
        $this->container['destinationIp'] = isset($data['destinationIp']) ? $data['destinationIp'] : null;
        $this->container['protoType'] = isset($data['protoType']) ? $data['protoType'] : null;
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
    * Gets id
    *  VPN连接监控ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id VPN连接监控ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  VPN连接监控状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status VPN连接监控状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets vpnConnectionId
    *  VPN连接监控对应的VPN连接ID
    *
    * @return string|null
    */
    public function getVpnConnectionId()
    {
        return $this->container['vpnConnectionId'];
    }

    /**
    * Sets vpnConnectionId
    *
    * @param string|null $vpnConnectionId VPN连接监控对应的VPN连接ID
    *
    * @return $this
    */
    public function setVpnConnectionId($vpnConnectionId)
    {
        $this->container['vpnConnectionId'] = $vpnConnectionId;
        return $this;
    }

    /**
    * Gets type
    *  监控类型，取值范围：gateway
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 监控类型，取值范围：gateway
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets sourceIp
    *  VPN连接监控的源地址
    *
    * @return string|null
    */
    public function getSourceIp()
    {
        return $this->container['sourceIp'];
    }

    /**
    * Sets sourceIp
    *
    * @param string|null $sourceIp VPN连接监控的源地址
    *
    * @return $this
    */
    public function setSourceIp($sourceIp)
    {
        $this->container['sourceIp'] = $sourceIp;
        return $this;
    }

    /**
    * Gets destinationIp
    *  VPN连接监控的目的地址
    *
    * @return string|null
    */
    public function getDestinationIp()
    {
        return $this->container['destinationIp'];
    }

    /**
    * Sets destinationIp
    *
    * @param string|null $destinationIp VPN连接监控的目的地址
    *
    * @return $this
    */
    public function setDestinationIp($destinationIp)
    {
        $this->container['destinationIp'] = $destinationIp;
        return $this;
    }

    /**
    * Gets protoType
    *  预留字段，nqa使用的协议类型，目前使用默认值ICMP
    *
    * @return string|null
    */
    public function getProtoType()
    {
        return $this->container['protoType'];
    }

    /**
    * Sets protoType
    *
    * @param string|null $protoType 预留字段，nqa使用的协议类型，目前使用默认值ICMP
    *
    * @return $this
    */
    public function setProtoType($protoType)
    {
        $this->container['protoType'] = $protoType;
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


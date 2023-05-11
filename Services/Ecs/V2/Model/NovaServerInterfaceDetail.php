<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaServerInterfaceDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaServerInterfaceDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fixedIps  网卡私网IP信息列表。
    * macAddr  网卡Mac地址信息。
    * netId  网卡端口所属网络ID。
    * portId  网卡端口ID。
    * portState  网卡端口状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fixedIps' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaServerInterfaceFixedIp[]',
            'macAddr' => 'string',
            'netId' => 'string',
            'portId' => 'string',
            'portState' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fixedIps  网卡私网IP信息列表。
    * macAddr  网卡Mac地址信息。
    * netId  网卡端口所属网络ID。
    * portId  网卡端口ID。
    * portState  网卡端口状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fixedIps' => null,
        'macAddr' => null,
        'netId' => null,
        'portId' => null,
        'portState' => null
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
    * fixedIps  网卡私网IP信息列表。
    * macAddr  网卡Mac地址信息。
    * netId  网卡端口所属网络ID。
    * portId  网卡端口ID。
    * portState  网卡端口状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fixedIps' => 'fixed_ips',
            'macAddr' => 'mac_addr',
            'netId' => 'net_id',
            'portId' => 'port_id',
            'portState' => 'port_state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fixedIps  网卡私网IP信息列表。
    * macAddr  网卡Mac地址信息。
    * netId  网卡端口所属网络ID。
    * portId  网卡端口ID。
    * portState  网卡端口状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'fixedIps' => 'setFixedIps',
            'macAddr' => 'setMacAddr',
            'netId' => 'setNetId',
            'portId' => 'setPortId',
            'portState' => 'setPortState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fixedIps  网卡私网IP信息列表。
    * macAddr  网卡Mac地址信息。
    * netId  网卡端口所属网络ID。
    * portId  网卡端口ID。
    * portState  网卡端口状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'fixedIps' => 'getFixedIps',
            'macAddr' => 'getMacAddr',
            'netId' => 'getNetId',
            'portId' => 'getPortId',
            'portState' => 'getPortState'
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
        $this->container['fixedIps'] = isset($data['fixedIps']) ? $data['fixedIps'] : null;
        $this->container['macAddr'] = isset($data['macAddr']) ? $data['macAddr'] : null;
        $this->container['netId'] = isset($data['netId']) ? $data['netId'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['portState'] = isset($data['portState']) ? $data['portState'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fixedIps'] === null) {
            $invalidProperties[] = "'fixedIps' can't be null";
        }
        if ($this->container['macAddr'] === null) {
            $invalidProperties[] = "'macAddr' can't be null";
        }
        if ($this->container['netId'] === null) {
            $invalidProperties[] = "'netId' can't be null";
        }
        if ($this->container['portId'] === null) {
            $invalidProperties[] = "'portId' can't be null";
        }
        if ($this->container['portState'] === null) {
            $invalidProperties[] = "'portState' can't be null";
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
    * Gets fixedIps
    *  网卡私网IP信息列表。
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerInterfaceFixedIp[]
    */
    public function getFixedIps()
    {
        return $this->container['fixedIps'];
    }

    /**
    * Sets fixedIps
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerInterfaceFixedIp[] $fixedIps 网卡私网IP信息列表。
    *
    * @return $this
    */
    public function setFixedIps($fixedIps)
    {
        $this->container['fixedIps'] = $fixedIps;
        return $this;
    }

    /**
    * Gets macAddr
    *  网卡Mac地址信息。
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
    * @param string $macAddr 网卡Mac地址信息。
    *
    * @return $this
    */
    public function setMacAddr($macAddr)
    {
        $this->container['macAddr'] = $macAddr;
        return $this;
    }

    /**
    * Gets netId
    *  网卡端口所属网络ID。
    *
    * @return string
    */
    public function getNetId()
    {
        return $this->container['netId'];
    }

    /**
    * Sets netId
    *
    * @param string $netId 网卡端口所属网络ID。
    *
    * @return $this
    */
    public function setNetId($netId)
    {
        $this->container['netId'] = $netId;
        return $this;
    }

    /**
    * Gets portId
    *  网卡端口ID。
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
    * @param string $portId 网卡端口ID。
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets portState
    *  网卡端口状态。
    *
    * @return string
    */
    public function getPortState()
    {
        return $this->container['portState'];
    }

    /**
    * Sets portState
    *
    * @param string $portState 网卡端口状态。
    *
    * @return $this
    */
    public function setPortState($portState)
    {
        $this->container['portState'] = $portState;
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


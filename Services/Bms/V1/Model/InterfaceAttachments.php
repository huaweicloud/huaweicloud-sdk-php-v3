<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InterfaceAttachments implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InterfaceAttachments';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * portState  网卡端口状态。取值为：ACTIVE、BUILD、DOWN
    * fixedIps  网卡私网IP信息列表，详情请参见表3 fixed_ips字段数据结构说明。
    * netId  网卡端口所属子网的网络ID（network_id）。
    * portId  网卡端口ID。
    * macAddr  网卡Mac地址信息
    * driverMode  从guest os中，网卡的驱动类型
    * pciAddress  弹性网卡在Linux GuestOS里的BDF号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'portState' => 'string',
            'fixedIps' => '\HuaweiCloud\SDK\Bms\V1\Model\FixedIps[]',
            'netId' => 'string',
            'portId' => 'string',
            'macAddr' => 'string',
            'driverMode' => 'string',
            'pciAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * portState  网卡端口状态。取值为：ACTIVE、BUILD、DOWN
    * fixedIps  网卡私网IP信息列表，详情请参见表3 fixed_ips字段数据结构说明。
    * netId  网卡端口所属子网的网络ID（network_id）。
    * portId  网卡端口ID。
    * macAddr  网卡Mac地址信息
    * driverMode  从guest os中，网卡的驱动类型
    * pciAddress  弹性网卡在Linux GuestOS里的BDF号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'portState' => null,
        'fixedIps' => null,
        'netId' => 'uuid',
        'portId' => 'uuid',
        'macAddr' => null,
        'driverMode' => null,
        'pciAddress' => null
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
    * portState  网卡端口状态。取值为：ACTIVE、BUILD、DOWN
    * fixedIps  网卡私网IP信息列表，详情请参见表3 fixed_ips字段数据结构说明。
    * netId  网卡端口所属子网的网络ID（network_id）。
    * portId  网卡端口ID。
    * macAddr  网卡Mac地址信息
    * driverMode  从guest os中，网卡的驱动类型
    * pciAddress  弹性网卡在Linux GuestOS里的BDF号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'portState' => 'port_state',
            'fixedIps' => 'fixed_ips',
            'netId' => 'net_id',
            'portId' => 'port_id',
            'macAddr' => 'mac_addr',
            'driverMode' => 'driver_mode',
            'pciAddress' => 'pci_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * portState  网卡端口状态。取值为：ACTIVE、BUILD、DOWN
    * fixedIps  网卡私网IP信息列表，详情请参见表3 fixed_ips字段数据结构说明。
    * netId  网卡端口所属子网的网络ID（network_id）。
    * portId  网卡端口ID。
    * macAddr  网卡Mac地址信息
    * driverMode  从guest os中，网卡的驱动类型
    * pciAddress  弹性网卡在Linux GuestOS里的BDF号
    *
    * @var string[]
    */
    protected static $setters = [
            'portState' => 'setPortState',
            'fixedIps' => 'setFixedIps',
            'netId' => 'setNetId',
            'portId' => 'setPortId',
            'macAddr' => 'setMacAddr',
            'driverMode' => 'setDriverMode',
            'pciAddress' => 'setPciAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * portState  网卡端口状态。取值为：ACTIVE、BUILD、DOWN
    * fixedIps  网卡私网IP信息列表，详情请参见表3 fixed_ips字段数据结构说明。
    * netId  网卡端口所属子网的网络ID（network_id）。
    * portId  网卡端口ID。
    * macAddr  网卡Mac地址信息
    * driverMode  从guest os中，网卡的驱动类型
    * pciAddress  弹性网卡在Linux GuestOS里的BDF号
    *
    * @var string[]
    */
    protected static $getters = [
            'portState' => 'getPortState',
            'fixedIps' => 'getFixedIps',
            'netId' => 'getNetId',
            'portId' => 'getPortId',
            'macAddr' => 'getMacAddr',
            'driverMode' => 'getDriverMode',
            'pciAddress' => 'getPciAddress'
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
    const PORT_STATE_ACTIVE = 'ACTIVE';
    const PORT_STATE_BUILD = 'BUILD';
    const PORT_STATE_DOWN = 'DOWN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPortStateAllowableValues()
    {
        return [
            self::PORT_STATE_ACTIVE,
            self::PORT_STATE_BUILD,
            self::PORT_STATE_DOWN,
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
        $this->container['portState'] = isset($data['portState']) ? $data['portState'] : null;
        $this->container['fixedIps'] = isset($data['fixedIps']) ? $data['fixedIps'] : null;
        $this->container['netId'] = isset($data['netId']) ? $data['netId'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['macAddr'] = isset($data['macAddr']) ? $data['macAddr'] : null;
        $this->container['driverMode'] = isset($data['driverMode']) ? $data['driverMode'] : null;
        $this->container['pciAddress'] = isset($data['pciAddress']) ? $data['pciAddress'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPortStateAllowableValues();
                if (!is_null($this->container['portState']) && !in_array($this->container['portState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'portState', must be one of '%s'",
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
    * Gets portState
    *  网卡端口状态。取值为：ACTIVE、BUILD、DOWN
    *
    * @return string|null
    */
    public function getPortState()
    {
        return $this->container['portState'];
    }

    /**
    * Sets portState
    *
    * @param string|null $portState 网卡端口状态。取值为：ACTIVE、BUILD、DOWN
    *
    * @return $this
    */
    public function setPortState($portState)
    {
        $this->container['portState'] = $portState;
        return $this;
    }

    /**
    * Gets fixedIps
    *  网卡私网IP信息列表，详情请参见表3 fixed_ips字段数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\FixedIps[]|null
    */
    public function getFixedIps()
    {
        return $this->container['fixedIps'];
    }

    /**
    * Sets fixedIps
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\FixedIps[]|null $fixedIps 网卡私网IP信息列表，详情请参见表3 fixed_ips字段数据结构说明。
    *
    * @return $this
    */
    public function setFixedIps($fixedIps)
    {
        $this->container['fixedIps'] = $fixedIps;
        return $this;
    }

    /**
    * Gets netId
    *  网卡端口所属子网的网络ID（network_id）。
    *
    * @return string|null
    */
    public function getNetId()
    {
        return $this->container['netId'];
    }

    /**
    * Sets netId
    *
    * @param string|null $netId 网卡端口所属子网的网络ID（network_id）。
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
    * @return string|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string|null $portId 网卡端口ID。
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets macAddr
    *  网卡Mac地址信息
    *
    * @return string|null
    */
    public function getMacAddr()
    {
        return $this->container['macAddr'];
    }

    /**
    * Sets macAddr
    *
    * @param string|null $macAddr 网卡Mac地址信息
    *
    * @return $this
    */
    public function setMacAddr($macAddr)
    {
        $this->container['macAddr'] = $macAddr;
        return $this;
    }

    /**
    * Gets driverMode
    *  从guest os中，网卡的驱动类型
    *
    * @return string|null
    */
    public function getDriverMode()
    {
        return $this->container['driverMode'];
    }

    /**
    * Sets driverMode
    *
    * @param string|null $driverMode 从guest os中，网卡的驱动类型
    *
    * @return $this
    */
    public function setDriverMode($driverMode)
    {
        $this->container['driverMode'] = $driverMode;
        return $this;
    }

    /**
    * Gets pciAddress
    *  弹性网卡在Linux GuestOS里的BDF号
    *
    * @return string|null
    */
    public function getPciAddress()
    {
        return $this->container['pciAddress'];
    }

    /**
    * Sets pciAddress
    *
    * @param string|null $pciAddress 弹性网卡在Linux GuestOS里的BDF号
    *
    * @return $this
    */
    public function setPciAddress($pciAddress)
    {
        $this->container['pciAddress'] = $pciAddress;
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


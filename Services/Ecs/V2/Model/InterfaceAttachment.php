<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InterfaceAttachment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InterfaceAttachment';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fixedIps  网卡私网IP信息列表。
    * macAddr  网卡Mac地址信息。
    * netId  网卡端口所属网络ID。
    * portId  网卡端口ID。
    * portState  网卡端口状态。
    * deleteOnTermination  卸载网卡时，是否删除网卡。
    * driverMode  从guest os中，网卡的驱动类型。可选值为virtio和hinic，默认为virtio
    * minRate  网卡带宽下限。
    * multiqueueNum  网卡多队列个数。
    * pciAddress  弹性网卡在Linux GuestOS里的BDF号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fixedIps' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerInterfaceFixedIp[]',
            'macAddr' => 'string',
            'netId' => 'string',
            'portId' => 'string',
            'portState' => 'string',
            'deleteOnTermination' => 'bool',
            'driverMode' => 'string',
            'minRate' => 'int',
            'multiqueueNum' => 'int',
            'pciAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fixedIps  网卡私网IP信息列表。
    * macAddr  网卡Mac地址信息。
    * netId  网卡端口所属网络ID。
    * portId  网卡端口ID。
    * portState  网卡端口状态。
    * deleteOnTermination  卸载网卡时，是否删除网卡。
    * driverMode  从guest os中，网卡的驱动类型。可选值为virtio和hinic，默认为virtio
    * minRate  网卡带宽下限。
    * multiqueueNum  网卡多队列个数。
    * pciAddress  弹性网卡在Linux GuestOS里的BDF号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fixedIps' => null,
        'macAddr' => null,
        'netId' => null,
        'portId' => null,
        'portState' => null,
        'deleteOnTermination' => null,
        'driverMode' => null,
        'minRate' => 'int32',
        'multiqueueNum' => 'int32',
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
    * fixedIps  网卡私网IP信息列表。
    * macAddr  网卡Mac地址信息。
    * netId  网卡端口所属网络ID。
    * portId  网卡端口ID。
    * portState  网卡端口状态。
    * deleteOnTermination  卸载网卡时，是否删除网卡。
    * driverMode  从guest os中，网卡的驱动类型。可选值为virtio和hinic，默认为virtio
    * minRate  网卡带宽下限。
    * multiqueueNum  网卡多队列个数。
    * pciAddress  弹性网卡在Linux GuestOS里的BDF号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fixedIps' => 'fixed_ips',
            'macAddr' => 'mac_addr',
            'netId' => 'net_id',
            'portId' => 'port_id',
            'portState' => 'port_state',
            'deleteOnTermination' => 'delete_on_termination',
            'driverMode' => 'driver_mode',
            'minRate' => 'min_rate',
            'multiqueueNum' => 'multiqueue_num',
            'pciAddress' => 'pci_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fixedIps  网卡私网IP信息列表。
    * macAddr  网卡Mac地址信息。
    * netId  网卡端口所属网络ID。
    * portId  网卡端口ID。
    * portState  网卡端口状态。
    * deleteOnTermination  卸载网卡时，是否删除网卡。
    * driverMode  从guest os中，网卡的驱动类型。可选值为virtio和hinic，默认为virtio
    * minRate  网卡带宽下限。
    * multiqueueNum  网卡多队列个数。
    * pciAddress  弹性网卡在Linux GuestOS里的BDF号
    *
    * @var string[]
    */
    protected static $setters = [
            'fixedIps' => 'setFixedIps',
            'macAddr' => 'setMacAddr',
            'netId' => 'setNetId',
            'portId' => 'setPortId',
            'portState' => 'setPortState',
            'deleteOnTermination' => 'setDeleteOnTermination',
            'driverMode' => 'setDriverMode',
            'minRate' => 'setMinRate',
            'multiqueueNum' => 'setMultiqueueNum',
            'pciAddress' => 'setPciAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fixedIps  网卡私网IP信息列表。
    * macAddr  网卡Mac地址信息。
    * netId  网卡端口所属网络ID。
    * portId  网卡端口ID。
    * portState  网卡端口状态。
    * deleteOnTermination  卸载网卡时，是否删除网卡。
    * driverMode  从guest os中，网卡的驱动类型。可选值为virtio和hinic，默认为virtio
    * minRate  网卡带宽下限。
    * multiqueueNum  网卡多队列个数。
    * pciAddress  弹性网卡在Linux GuestOS里的BDF号
    *
    * @var string[]
    */
    protected static $getters = [
            'fixedIps' => 'getFixedIps',
            'macAddr' => 'getMacAddr',
            'netId' => 'getNetId',
            'portId' => 'getPortId',
            'portState' => 'getPortState',
            'deleteOnTermination' => 'getDeleteOnTermination',
            'driverMode' => 'getDriverMode',
            'minRate' => 'getMinRate',
            'multiqueueNum' => 'getMultiqueueNum',
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
        $this->container['deleteOnTermination'] = isset($data['deleteOnTermination']) ? $data['deleteOnTermination'] : null;
        $this->container['driverMode'] = isset($data['driverMode']) ? $data['driverMode'] : null;
        $this->container['minRate'] = isset($data['minRate']) ? $data['minRate'] : null;
        $this->container['multiqueueNum'] = isset($data['multiqueueNum']) ? $data['multiqueueNum'] : null;
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
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerInterfaceFixedIp[]|null
    */
    public function getFixedIps()
    {
        return $this->container['fixedIps'];
    }

    /**
    * Sets fixedIps
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerInterfaceFixedIp[]|null $fixedIps 网卡私网IP信息列表。
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
    * @return string|null
    */
    public function getMacAddr()
    {
        return $this->container['macAddr'];
    }

    /**
    * Sets macAddr
    *
    * @param string|null $macAddr 网卡Mac地址信息。
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
    * @return string|null
    */
    public function getNetId()
    {
        return $this->container['netId'];
    }

    /**
    * Sets netId
    *
    * @param string|null $netId 网卡端口所属网络ID。
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
    * Gets portState
    *  网卡端口状态。
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
    * @param string|null $portState 网卡端口状态。
    *
    * @return $this
    */
    public function setPortState($portState)
    {
        $this->container['portState'] = $portState;
        return $this;
    }

    /**
    * Gets deleteOnTermination
    *  卸载网卡时，是否删除网卡。
    *
    * @return bool|null
    */
    public function getDeleteOnTermination()
    {
        return $this->container['deleteOnTermination'];
    }

    /**
    * Sets deleteOnTermination
    *
    * @param bool|null $deleteOnTermination 卸载网卡时，是否删除网卡。
    *
    * @return $this
    */
    public function setDeleteOnTermination($deleteOnTermination)
    {
        $this->container['deleteOnTermination'] = $deleteOnTermination;
        return $this;
    }

    /**
    * Gets driverMode
    *  从guest os中，网卡的驱动类型。可选值为virtio和hinic，默认为virtio
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
    * @param string|null $driverMode 从guest os中，网卡的驱动类型。可选值为virtio和hinic，默认为virtio
    *
    * @return $this
    */
    public function setDriverMode($driverMode)
    {
        $this->container['driverMode'] = $driverMode;
        return $this;
    }

    /**
    * Gets minRate
    *  网卡带宽下限。
    *
    * @return int|null
    */
    public function getMinRate()
    {
        return $this->container['minRate'];
    }

    /**
    * Sets minRate
    *
    * @param int|null $minRate 网卡带宽下限。
    *
    * @return $this
    */
    public function setMinRate($minRate)
    {
        $this->container['minRate'] = $minRate;
        return $this;
    }

    /**
    * Gets multiqueueNum
    *  网卡多队列个数。
    *
    * @return int|null
    */
    public function getMultiqueueNum()
    {
        return $this->container['multiqueueNum'];
    }

    /**
    * Sets multiqueueNum
    *
    * @param int|null $multiqueueNum 网卡多队列个数。
    *
    * @return $this
    */
    public function setMultiqueueNum($multiqueueNum)
    {
        $this->container['multiqueueNum'] = $multiqueueNum;
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


<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NetResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NetResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * virtualClusterId  **参数解释**： 虚拟集群ID。 **取值范围**： 不涉及。
    * ctime  **参数解释**： 查询时间。 **取值范围**： 不涉及。
    * hostId  **参数解释**： 主机ID。 **取值范围**： 不涉及。
    * hostName  **参数解释**： 主机名称。 **取值范围**： 不涉及。
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * up  **参数解释**： 网卡状态。 **取值范围**： true：代表up。 false：代表down。
    * speed  **参数解释**： 网卡速度(Mbps)。 **取值范围**： 不涉及。
    * recvPackets  **参数解释**： 接收包数(个)。 **取值范围**： 不涉及。
    * sendPackets  **参数解释**： 发送包数(个)。 **取值范围**： 不涉及。
    * recvDrop  **参数解释**： 接收丢包数(个)。 **取值范围**： 不涉及。
    * recvRate  **参数解释**： 接收速率(KB/s)。 **取值范围**： 不涉及。
    * sendRate  **参数解释**： 发送速率(KB/s)。 **取值范围**： 不涉及。
    * ioRate  **参数解释**： 网络速率(KB/s)。 **取值范围**： 不涉及。
    * interfaceName  **参数解释**： 网卡名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'virtualClusterId' => 'int',
            'ctime' => 'int',
            'hostId' => 'int',
            'hostName' => 'string',
            'instanceName' => 'string',
            'up' => 'bool',
            'speed' => 'int',
            'recvPackets' => 'int',
            'sendPackets' => 'int',
            'recvDrop' => 'int',
            'recvRate' => 'double',
            'sendRate' => 'double',
            'ioRate' => 'double',
            'interfaceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * virtualClusterId  **参数解释**： 虚拟集群ID。 **取值范围**： 不涉及。
    * ctime  **参数解释**： 查询时间。 **取值范围**： 不涉及。
    * hostId  **参数解释**： 主机ID。 **取值范围**： 不涉及。
    * hostName  **参数解释**： 主机名称。 **取值范围**： 不涉及。
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * up  **参数解释**： 网卡状态。 **取值范围**： true：代表up。 false：代表down。
    * speed  **参数解释**： 网卡速度(Mbps)。 **取值范围**： 不涉及。
    * recvPackets  **参数解释**： 接收包数(个)。 **取值范围**： 不涉及。
    * sendPackets  **参数解释**： 发送包数(个)。 **取值范围**： 不涉及。
    * recvDrop  **参数解释**： 接收丢包数(个)。 **取值范围**： 不涉及。
    * recvRate  **参数解释**： 接收速率(KB/s)。 **取值范围**： 不涉及。
    * sendRate  **参数解释**： 发送速率(KB/s)。 **取值范围**： 不涉及。
    * ioRate  **参数解释**： 网络速率(KB/s)。 **取值范围**： 不涉及。
    * interfaceName  **参数解释**： 网卡名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'virtualClusterId' => 'int32',
        'ctime' => 'int64',
        'hostId' => 'int32',
        'hostName' => null,
        'instanceName' => null,
        'up' => null,
        'speed' => 'int64',
        'recvPackets' => 'int64',
        'sendPackets' => 'int64',
        'recvDrop' => 'int64',
        'recvRate' => 'double',
        'sendRate' => 'double',
        'ioRate' => 'double',
        'interfaceName' => null
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
    * virtualClusterId  **参数解释**： 虚拟集群ID。 **取值范围**： 不涉及。
    * ctime  **参数解释**： 查询时间。 **取值范围**： 不涉及。
    * hostId  **参数解释**： 主机ID。 **取值范围**： 不涉及。
    * hostName  **参数解释**： 主机名称。 **取值范围**： 不涉及。
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * up  **参数解释**： 网卡状态。 **取值范围**： true：代表up。 false：代表down。
    * speed  **参数解释**： 网卡速度(Mbps)。 **取值范围**： 不涉及。
    * recvPackets  **参数解释**： 接收包数(个)。 **取值范围**： 不涉及。
    * sendPackets  **参数解释**： 发送包数(个)。 **取值范围**： 不涉及。
    * recvDrop  **参数解释**： 接收丢包数(个)。 **取值范围**： 不涉及。
    * recvRate  **参数解释**： 接收速率(KB/s)。 **取值范围**： 不涉及。
    * sendRate  **参数解释**： 发送速率(KB/s)。 **取值范围**： 不涉及。
    * ioRate  **参数解释**： 网络速率(KB/s)。 **取值范围**： 不涉及。
    * interfaceName  **参数解释**： 网卡名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'virtualClusterId' => 'virtual_cluster_id',
            'ctime' => 'ctime',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'instanceName' => 'instance_name',
            'up' => 'up',
            'speed' => 'speed',
            'recvPackets' => 'recv_packets',
            'sendPackets' => 'send_packets',
            'recvDrop' => 'recv_drop',
            'recvRate' => 'recv_rate',
            'sendRate' => 'send_rate',
            'ioRate' => 'io_rate',
            'interfaceName' => 'interface_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * virtualClusterId  **参数解释**： 虚拟集群ID。 **取值范围**： 不涉及。
    * ctime  **参数解释**： 查询时间。 **取值范围**： 不涉及。
    * hostId  **参数解释**： 主机ID。 **取值范围**： 不涉及。
    * hostName  **参数解释**： 主机名称。 **取值范围**： 不涉及。
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * up  **参数解释**： 网卡状态。 **取值范围**： true：代表up。 false：代表down。
    * speed  **参数解释**： 网卡速度(Mbps)。 **取值范围**： 不涉及。
    * recvPackets  **参数解释**： 接收包数(个)。 **取值范围**： 不涉及。
    * sendPackets  **参数解释**： 发送包数(个)。 **取值范围**： 不涉及。
    * recvDrop  **参数解释**： 接收丢包数(个)。 **取值范围**： 不涉及。
    * recvRate  **参数解释**： 接收速率(KB/s)。 **取值范围**： 不涉及。
    * sendRate  **参数解释**： 发送速率(KB/s)。 **取值范围**： 不涉及。
    * ioRate  **参数解释**： 网络速率(KB/s)。 **取值范围**： 不涉及。
    * interfaceName  **参数解释**： 网卡名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'virtualClusterId' => 'setVirtualClusterId',
            'ctime' => 'setCtime',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'instanceName' => 'setInstanceName',
            'up' => 'setUp',
            'speed' => 'setSpeed',
            'recvPackets' => 'setRecvPackets',
            'sendPackets' => 'setSendPackets',
            'recvDrop' => 'setRecvDrop',
            'recvRate' => 'setRecvRate',
            'sendRate' => 'setSendRate',
            'ioRate' => 'setIoRate',
            'interfaceName' => 'setInterfaceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * virtualClusterId  **参数解释**： 虚拟集群ID。 **取值范围**： 不涉及。
    * ctime  **参数解释**： 查询时间。 **取值范围**： 不涉及。
    * hostId  **参数解释**： 主机ID。 **取值范围**： 不涉及。
    * hostName  **参数解释**： 主机名称。 **取值范围**： 不涉及。
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * up  **参数解释**： 网卡状态。 **取值范围**： true：代表up。 false：代表down。
    * speed  **参数解释**： 网卡速度(Mbps)。 **取值范围**： 不涉及。
    * recvPackets  **参数解释**： 接收包数(个)。 **取值范围**： 不涉及。
    * sendPackets  **参数解释**： 发送包数(个)。 **取值范围**： 不涉及。
    * recvDrop  **参数解释**： 接收丢包数(个)。 **取值范围**： 不涉及。
    * recvRate  **参数解释**： 接收速率(KB/s)。 **取值范围**： 不涉及。
    * sendRate  **参数解释**： 发送速率(KB/s)。 **取值范围**： 不涉及。
    * ioRate  **参数解释**： 网络速率(KB/s)。 **取值范围**： 不涉及。
    * interfaceName  **参数解释**： 网卡名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'virtualClusterId' => 'getVirtualClusterId',
            'ctime' => 'getCtime',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'instanceName' => 'getInstanceName',
            'up' => 'getUp',
            'speed' => 'getSpeed',
            'recvPackets' => 'getRecvPackets',
            'sendPackets' => 'getSendPackets',
            'recvDrop' => 'getRecvDrop',
            'recvRate' => 'getRecvRate',
            'sendRate' => 'getSendRate',
            'ioRate' => 'getIoRate',
            'interfaceName' => 'getInterfaceName'
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
        $this->container['virtualClusterId'] = isset($data['virtualClusterId']) ? $data['virtualClusterId'] : null;
        $this->container['ctime'] = isset($data['ctime']) ? $data['ctime'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['up'] = isset($data['up']) ? $data['up'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
        $this->container['recvPackets'] = isset($data['recvPackets']) ? $data['recvPackets'] : null;
        $this->container['sendPackets'] = isset($data['sendPackets']) ? $data['sendPackets'] : null;
        $this->container['recvDrop'] = isset($data['recvDrop']) ? $data['recvDrop'] : null;
        $this->container['recvRate'] = isset($data['recvRate']) ? $data['recvRate'] : null;
        $this->container['sendRate'] = isset($data['sendRate']) ? $data['sendRate'] : null;
        $this->container['ioRate'] = isset($data['ioRate']) ? $data['ioRate'] : null;
        $this->container['interfaceName'] = isset($data['interfaceName']) ? $data['interfaceName'] : null;
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
    * Gets virtualClusterId
    *  **参数解释**： 虚拟集群ID。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getVirtualClusterId()
    {
        return $this->container['virtualClusterId'];
    }

    /**
    * Sets virtualClusterId
    *
    * @param int|null $virtualClusterId **参数解释**： 虚拟集群ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVirtualClusterId($virtualClusterId)
    {
        $this->container['virtualClusterId'] = $virtualClusterId;
        return $this;
    }

    /**
    * Gets ctime
    *  **参数解释**： 查询时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCtime()
    {
        return $this->container['ctime'];
    }

    /**
    * Sets ctime
    *
    * @param int|null $ctime **参数解释**： 查询时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCtime($ctime)
    {
        $this->container['ctime'] = $ctime;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**： 主机ID。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param int|null $hostId **参数解释**： 主机ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**： 主机名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**： 主机名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets instanceName
    *  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName **参数解释**： 实例名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets up
    *  **参数解释**： 网卡状态。 **取值范围**： true：代表up。 false：代表down。
    *
    * @return bool|null
    */
    public function getUp()
    {
        return $this->container['up'];
    }

    /**
    * Sets up
    *
    * @param bool|null $up **参数解释**： 网卡状态。 **取值范围**： true：代表up。 false：代表down。
    *
    * @return $this
    */
    public function setUp($up)
    {
        $this->container['up'] = $up;
        return $this;
    }

    /**
    * Gets speed
    *  **参数解释**： 网卡速度(Mbps)。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
    * Sets speed
    *
    * @param int|null $speed **参数解释**： 网卡速度(Mbps)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSpeed($speed)
    {
        $this->container['speed'] = $speed;
        return $this;
    }

    /**
    * Gets recvPackets
    *  **参数解释**： 接收包数(个)。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getRecvPackets()
    {
        return $this->container['recvPackets'];
    }

    /**
    * Sets recvPackets
    *
    * @param int|null $recvPackets **参数解释**： 接收包数(个)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRecvPackets($recvPackets)
    {
        $this->container['recvPackets'] = $recvPackets;
        return $this;
    }

    /**
    * Gets sendPackets
    *  **参数解释**： 发送包数(个)。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getSendPackets()
    {
        return $this->container['sendPackets'];
    }

    /**
    * Sets sendPackets
    *
    * @param int|null $sendPackets **参数解释**： 发送包数(个)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSendPackets($sendPackets)
    {
        $this->container['sendPackets'] = $sendPackets;
        return $this;
    }

    /**
    * Gets recvDrop
    *  **参数解释**： 接收丢包数(个)。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getRecvDrop()
    {
        return $this->container['recvDrop'];
    }

    /**
    * Sets recvDrop
    *
    * @param int|null $recvDrop **参数解释**： 接收丢包数(个)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRecvDrop($recvDrop)
    {
        $this->container['recvDrop'] = $recvDrop;
        return $this;
    }

    /**
    * Gets recvRate
    *  **参数解释**： 接收速率(KB/s)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getRecvRate()
    {
        return $this->container['recvRate'];
    }

    /**
    * Sets recvRate
    *
    * @param double|null $recvRate **参数解释**： 接收速率(KB/s)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRecvRate($recvRate)
    {
        $this->container['recvRate'] = $recvRate;
        return $this;
    }

    /**
    * Gets sendRate
    *  **参数解释**： 发送速率(KB/s)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getSendRate()
    {
        return $this->container['sendRate'];
    }

    /**
    * Sets sendRate
    *
    * @param double|null $sendRate **参数解释**： 发送速率(KB/s)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSendRate($sendRate)
    {
        $this->container['sendRate'] = $sendRate;
        return $this;
    }

    /**
    * Gets ioRate
    *  **参数解释**： 网络速率(KB/s)。 **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getIoRate()
    {
        return $this->container['ioRate'];
    }

    /**
    * Sets ioRate
    *
    * @param double|null $ioRate **参数解释**： 网络速率(KB/s)。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIoRate($ioRate)
    {
        $this->container['ioRate'] = $ioRate;
        return $this;
    }

    /**
    * Gets interfaceName
    *  **参数解释**： 网卡名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getInterfaceName()
    {
        return $this->container['interfaceName'];
    }

    /**
    * Sets interfaceName
    *
    * @param string|null $interfaceName **参数解释**： 网卡名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInterfaceName($interfaceName)
    {
        $this->container['interfaceName'] = $interfaceName;
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


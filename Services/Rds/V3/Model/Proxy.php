<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Proxy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Proxy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * poolId  Proxy实例ID。
    * status  Proxy实例开启状态，取值范围如下。 - open：打开。 - closed：关闭。 - frozen：已冻结。 - opening：打开中。 - closing：关闭中。 - freezing：冻结中。 - unfreezing：解冻中。
    * address  Proxy读写分离地址。
    * elbVip  elb模式的虚拟IP信息。
    * eip  弹性公网IP信息。
    * port  Proxy端口信息。
    * poolStatus  Proxy实例状态。 - abnormal：异常。 - normal：正常。 - creating：创建中。 - deleted：已删除。
    * delayThresholdInKilobytes  延时阈值（单位：KB）。
    * cpu  Proxy实例规格的CPU数量。
    * mem  Proxy实例规格的内存数量。
    * nodeNum  Proxy节点个数。
    * nodes  Proxy节点信息。
    * mode  Proxy主备模式，取值范围：Ha。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'poolId' => 'string',
            'status' => 'string',
            'address' => 'string',
            'elbVip' => 'string',
            'eip' => 'string',
            'port' => 'int',
            'poolStatus' => 'string',
            'delayThresholdInKilobytes' => 'int',
            'cpu' => 'string',
            'mem' => 'string',
            'nodeNum' => 'int',
            'nodes' => '\HuaweiCloud\SDK\Rds\V3\Model\ProxyNode[]',
            'mode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * poolId  Proxy实例ID。
    * status  Proxy实例开启状态，取值范围如下。 - open：打开。 - closed：关闭。 - frozen：已冻结。 - opening：打开中。 - closing：关闭中。 - freezing：冻结中。 - unfreezing：解冻中。
    * address  Proxy读写分离地址。
    * elbVip  elb模式的虚拟IP信息。
    * eip  弹性公网IP信息。
    * port  Proxy端口信息。
    * poolStatus  Proxy实例状态。 - abnormal：异常。 - normal：正常。 - creating：创建中。 - deleted：已删除。
    * delayThresholdInKilobytes  延时阈值（单位：KB）。
    * cpu  Proxy实例规格的CPU数量。
    * mem  Proxy实例规格的内存数量。
    * nodeNum  Proxy节点个数。
    * nodes  Proxy节点信息。
    * mode  Proxy主备模式，取值范围：Ha。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'poolId' => null,
        'status' => null,
        'address' => null,
        'elbVip' => null,
        'eip' => null,
        'port' => 'int32',
        'poolStatus' => null,
        'delayThresholdInKilobytes' => 'int32',
        'cpu' => null,
        'mem' => null,
        'nodeNum' => 'int32',
        'nodes' => null,
        'mode' => null
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
    * poolId  Proxy实例ID。
    * status  Proxy实例开启状态，取值范围如下。 - open：打开。 - closed：关闭。 - frozen：已冻结。 - opening：打开中。 - closing：关闭中。 - freezing：冻结中。 - unfreezing：解冻中。
    * address  Proxy读写分离地址。
    * elbVip  elb模式的虚拟IP信息。
    * eip  弹性公网IP信息。
    * port  Proxy端口信息。
    * poolStatus  Proxy实例状态。 - abnormal：异常。 - normal：正常。 - creating：创建中。 - deleted：已删除。
    * delayThresholdInKilobytes  延时阈值（单位：KB）。
    * cpu  Proxy实例规格的CPU数量。
    * mem  Proxy实例规格的内存数量。
    * nodeNum  Proxy节点个数。
    * nodes  Proxy节点信息。
    * mode  Proxy主备模式，取值范围：Ha。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'poolId' => 'pool_id',
            'status' => 'status',
            'address' => 'address',
            'elbVip' => 'elb_vip',
            'eip' => 'eip',
            'port' => 'port',
            'poolStatus' => 'pool_status',
            'delayThresholdInKilobytes' => 'delay_threshold_in_kilobytes',
            'cpu' => 'cpu',
            'mem' => 'mem',
            'nodeNum' => 'node_num',
            'nodes' => 'nodes',
            'mode' => 'mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * poolId  Proxy实例ID。
    * status  Proxy实例开启状态，取值范围如下。 - open：打开。 - closed：关闭。 - frozen：已冻结。 - opening：打开中。 - closing：关闭中。 - freezing：冻结中。 - unfreezing：解冻中。
    * address  Proxy读写分离地址。
    * elbVip  elb模式的虚拟IP信息。
    * eip  弹性公网IP信息。
    * port  Proxy端口信息。
    * poolStatus  Proxy实例状态。 - abnormal：异常。 - normal：正常。 - creating：创建中。 - deleted：已删除。
    * delayThresholdInKilobytes  延时阈值（单位：KB）。
    * cpu  Proxy实例规格的CPU数量。
    * mem  Proxy实例规格的内存数量。
    * nodeNum  Proxy节点个数。
    * nodes  Proxy节点信息。
    * mode  Proxy主备模式，取值范围：Ha。
    *
    * @var string[]
    */
    protected static $setters = [
            'poolId' => 'setPoolId',
            'status' => 'setStatus',
            'address' => 'setAddress',
            'elbVip' => 'setElbVip',
            'eip' => 'setEip',
            'port' => 'setPort',
            'poolStatus' => 'setPoolStatus',
            'delayThresholdInKilobytes' => 'setDelayThresholdInKilobytes',
            'cpu' => 'setCpu',
            'mem' => 'setMem',
            'nodeNum' => 'setNodeNum',
            'nodes' => 'setNodes',
            'mode' => 'setMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * poolId  Proxy实例ID。
    * status  Proxy实例开启状态，取值范围如下。 - open：打开。 - closed：关闭。 - frozen：已冻结。 - opening：打开中。 - closing：关闭中。 - freezing：冻结中。 - unfreezing：解冻中。
    * address  Proxy读写分离地址。
    * elbVip  elb模式的虚拟IP信息。
    * eip  弹性公网IP信息。
    * port  Proxy端口信息。
    * poolStatus  Proxy实例状态。 - abnormal：异常。 - normal：正常。 - creating：创建中。 - deleted：已删除。
    * delayThresholdInKilobytes  延时阈值（单位：KB）。
    * cpu  Proxy实例规格的CPU数量。
    * mem  Proxy实例规格的内存数量。
    * nodeNum  Proxy节点个数。
    * nodes  Proxy节点信息。
    * mode  Proxy主备模式，取值范围：Ha。
    *
    * @var string[]
    */
    protected static $getters = [
            'poolId' => 'getPoolId',
            'status' => 'getStatus',
            'address' => 'getAddress',
            'elbVip' => 'getElbVip',
            'eip' => 'getEip',
            'port' => 'getPort',
            'poolStatus' => 'getPoolStatus',
            'delayThresholdInKilobytes' => 'getDelayThresholdInKilobytes',
            'cpu' => 'getCpu',
            'mem' => 'getMem',
            'nodeNum' => 'getNodeNum',
            'nodes' => 'getNodes',
            'mode' => 'getMode'
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
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['elbVip'] = isset($data['elbVip']) ? $data['elbVip'] : null;
        $this->container['eip'] = isset($data['eip']) ? $data['eip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['poolStatus'] = isset($data['poolStatus']) ? $data['poolStatus'] : null;
        $this->container['delayThresholdInKilobytes'] = isset($data['delayThresholdInKilobytes']) ? $data['delayThresholdInKilobytes'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['mem'] = isset($data['mem']) ? $data['mem'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['poolId'] === null) {
            $invalidProperties[] = "'poolId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['elbVip'] === null) {
            $invalidProperties[] = "'elbVip' can't be null";
        }
        if ($this->container['eip'] === null) {
            $invalidProperties[] = "'eip' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['poolStatus'] === null) {
            $invalidProperties[] = "'poolStatus' can't be null";
        }
        if ($this->container['delayThresholdInKilobytes'] === null) {
            $invalidProperties[] = "'delayThresholdInKilobytes' can't be null";
        }
        if ($this->container['cpu'] === null) {
            $invalidProperties[] = "'cpu' can't be null";
        }
        if ($this->container['mem'] === null) {
            $invalidProperties[] = "'mem' can't be null";
        }
        if ($this->container['nodeNum'] === null) {
            $invalidProperties[] = "'nodeNum' can't be null";
        }
        if ($this->container['nodes'] === null) {
            $invalidProperties[] = "'nodes' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
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
    * Gets poolId
    *  Proxy实例ID。
    *
    * @return string
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string $poolId Proxy实例ID。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets status
    *  Proxy实例开启状态，取值范围如下。 - open：打开。 - closed：关闭。 - frozen：已冻结。 - opening：打开中。 - closing：关闭中。 - freezing：冻结中。 - unfreezing：解冻中。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status Proxy实例开启状态，取值范围如下。 - open：打开。 - closed：关闭。 - frozen：已冻结。 - opening：打开中。 - closing：关闭中。 - freezing：冻结中。 - unfreezing：解冻中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets address
    *  Proxy读写分离地址。
    *
    * @return string
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string $address Proxy读写分离地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets elbVip
    *  elb模式的虚拟IP信息。
    *
    * @return string
    */
    public function getElbVip()
    {
        return $this->container['elbVip'];
    }

    /**
    * Sets elbVip
    *
    * @param string $elbVip elb模式的虚拟IP信息。
    *
    * @return $this
    */
    public function setElbVip($elbVip)
    {
        $this->container['elbVip'] = $elbVip;
        return $this;
    }

    /**
    * Gets eip
    *  弹性公网IP信息。
    *
    * @return string
    */
    public function getEip()
    {
        return $this->container['eip'];
    }

    /**
    * Sets eip
    *
    * @param string $eip 弹性公网IP信息。
    *
    * @return $this
    */
    public function setEip($eip)
    {
        $this->container['eip'] = $eip;
        return $this;
    }

    /**
    * Gets port
    *  Proxy端口信息。
    *
    * @return int
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int $port Proxy端口信息。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets poolStatus
    *  Proxy实例状态。 - abnormal：异常。 - normal：正常。 - creating：创建中。 - deleted：已删除。
    *
    * @return string
    */
    public function getPoolStatus()
    {
        return $this->container['poolStatus'];
    }

    /**
    * Sets poolStatus
    *
    * @param string $poolStatus Proxy实例状态。 - abnormal：异常。 - normal：正常。 - creating：创建中。 - deleted：已删除。
    *
    * @return $this
    */
    public function setPoolStatus($poolStatus)
    {
        $this->container['poolStatus'] = $poolStatus;
        return $this;
    }

    /**
    * Gets delayThresholdInKilobytes
    *  延时阈值（单位：KB）。
    *
    * @return int
    */
    public function getDelayThresholdInKilobytes()
    {
        return $this->container['delayThresholdInKilobytes'];
    }

    /**
    * Sets delayThresholdInKilobytes
    *
    * @param int $delayThresholdInKilobytes 延时阈值（单位：KB）。
    *
    * @return $this
    */
    public function setDelayThresholdInKilobytes($delayThresholdInKilobytes)
    {
        $this->container['delayThresholdInKilobytes'] = $delayThresholdInKilobytes;
        return $this;
    }

    /**
    * Gets cpu
    *  Proxy实例规格的CPU数量。
    *
    * @return string
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param string $cpu Proxy实例规格的CPU数量。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets mem
    *  Proxy实例规格的内存数量。
    *
    * @return string
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param string $mem Proxy实例规格的内存数量。
    *
    * @return $this
    */
    public function setMem($mem)
    {
        $this->container['mem'] = $mem;
        return $this;
    }

    /**
    * Gets nodeNum
    *  Proxy节点个数。
    *
    * @return int
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int $nodeNum Proxy节点个数。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets nodes
    *  Proxy节点信息。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ProxyNode[]
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ProxyNode[] $nodes Proxy节点信息。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets mode
    *  Proxy主备模式，取值范围：Ha。
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode Proxy主备模式，取值范围：Ha。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
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


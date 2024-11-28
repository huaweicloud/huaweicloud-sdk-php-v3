<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterConfigResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterConfigResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群id
    * protectNodeNum  集群开启防护节点数量
    * protectInterruptNodeNum  集群防护中断节点数量
    * unprotectNodeNum  集群防护中断节点数量
    * nodeTotalNum  集群节点总数
    * clusterName  集群名称
    * chargingMode  付费模式 | on_demand 按需 free 免费
    * autoUpgrade  开启agent自动升级
    * preferPacketCycle  优先使用包周期配额；默认0
    * vpcId  vpc id
    * protectType  cce protection type
    * protectStatus  protection status
    * clusterType  cluster type
    * failReason  fail reason
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'protectNodeNum' => 'int',
            'protectInterruptNodeNum' => 'int',
            'unprotectNodeNum' => 'int',
            'nodeTotalNum' => 'int',
            'clusterName' => 'string',
            'chargingMode' => 'string',
            'autoUpgrade' => 'bool',
            'preferPacketCycle' => 'int',
            'vpcId' => 'string',
            'protectType' => 'string',
            'protectStatus' => 'string',
            'clusterType' => 'string',
            'failReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群id
    * protectNodeNum  集群开启防护节点数量
    * protectInterruptNodeNum  集群防护中断节点数量
    * unprotectNodeNum  集群防护中断节点数量
    * nodeTotalNum  集群节点总数
    * clusterName  集群名称
    * chargingMode  付费模式 | on_demand 按需 free 免费
    * autoUpgrade  开启agent自动升级
    * preferPacketCycle  优先使用包周期配额；默认0
    * vpcId  vpc id
    * protectType  cce protection type
    * protectStatus  protection status
    * clusterType  cluster type
    * failReason  fail reason
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'protectNodeNum' => null,
        'protectInterruptNodeNum' => null,
        'unprotectNodeNum' => null,
        'nodeTotalNum' => null,
        'clusterName' => null,
        'chargingMode' => null,
        'autoUpgrade' => null,
        'preferPacketCycle' => null,
        'vpcId' => null,
        'protectType' => null,
        'protectStatus' => null,
        'clusterType' => null,
        'failReason' => null
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
    * clusterId  集群id
    * protectNodeNum  集群开启防护节点数量
    * protectInterruptNodeNum  集群防护中断节点数量
    * unprotectNodeNum  集群防护中断节点数量
    * nodeTotalNum  集群节点总数
    * clusterName  集群名称
    * chargingMode  付费模式 | on_demand 按需 free 免费
    * autoUpgrade  开启agent自动升级
    * preferPacketCycle  优先使用包周期配额；默认0
    * vpcId  vpc id
    * protectType  cce protection type
    * protectStatus  protection status
    * clusterType  cluster type
    * failReason  fail reason
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'protectNodeNum' => 'protect_node_num',
            'protectInterruptNodeNum' => 'protect_interrupt_node_num',
            'unprotectNodeNum' => 'unprotect_node_num',
            'nodeTotalNum' => 'node_total_num',
            'clusterName' => 'cluster_name',
            'chargingMode' => 'charging_mode',
            'autoUpgrade' => 'auto_upgrade',
            'preferPacketCycle' => 'prefer_packet_cycle',
            'vpcId' => 'vpc_id',
            'protectType' => 'protect_type',
            'protectStatus' => 'protect_status',
            'clusterType' => 'cluster_type',
            'failReason' => 'fail_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群id
    * protectNodeNum  集群开启防护节点数量
    * protectInterruptNodeNum  集群防护中断节点数量
    * unprotectNodeNum  集群防护中断节点数量
    * nodeTotalNum  集群节点总数
    * clusterName  集群名称
    * chargingMode  付费模式 | on_demand 按需 free 免费
    * autoUpgrade  开启agent自动升级
    * preferPacketCycle  优先使用包周期配额；默认0
    * vpcId  vpc id
    * protectType  cce protection type
    * protectStatus  protection status
    * clusterType  cluster type
    * failReason  fail reason
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'protectNodeNum' => 'setProtectNodeNum',
            'protectInterruptNodeNum' => 'setProtectInterruptNodeNum',
            'unprotectNodeNum' => 'setUnprotectNodeNum',
            'nodeTotalNum' => 'setNodeTotalNum',
            'clusterName' => 'setClusterName',
            'chargingMode' => 'setChargingMode',
            'autoUpgrade' => 'setAutoUpgrade',
            'preferPacketCycle' => 'setPreferPacketCycle',
            'vpcId' => 'setVpcId',
            'protectType' => 'setProtectType',
            'protectStatus' => 'setProtectStatus',
            'clusterType' => 'setClusterType',
            'failReason' => 'setFailReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群id
    * protectNodeNum  集群开启防护节点数量
    * protectInterruptNodeNum  集群防护中断节点数量
    * unprotectNodeNum  集群防护中断节点数量
    * nodeTotalNum  集群节点总数
    * clusterName  集群名称
    * chargingMode  付费模式 | on_demand 按需 free 免费
    * autoUpgrade  开启agent自动升级
    * preferPacketCycle  优先使用包周期配额；默认0
    * vpcId  vpc id
    * protectType  cce protection type
    * protectStatus  protection status
    * clusterType  cluster type
    * failReason  fail reason
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'protectNodeNum' => 'getProtectNodeNum',
            'protectInterruptNodeNum' => 'getProtectInterruptNodeNum',
            'unprotectNodeNum' => 'getUnprotectNodeNum',
            'nodeTotalNum' => 'getNodeTotalNum',
            'clusterName' => 'getClusterName',
            'chargingMode' => 'getChargingMode',
            'autoUpgrade' => 'getAutoUpgrade',
            'preferPacketCycle' => 'getPreferPacketCycle',
            'vpcId' => 'getVpcId',
            'protectType' => 'getProtectType',
            'protectStatus' => 'getProtectStatus',
            'clusterType' => 'getClusterType',
            'failReason' => 'getFailReason'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['protectNodeNum'] = isset($data['protectNodeNum']) ? $data['protectNodeNum'] : null;
        $this->container['protectInterruptNodeNum'] = isset($data['protectInterruptNodeNum']) ? $data['protectInterruptNodeNum'] : null;
        $this->container['unprotectNodeNum'] = isset($data['unprotectNodeNum']) ? $data['unprotectNodeNum'] : null;
        $this->container['nodeTotalNum'] = isset($data['nodeTotalNum']) ? $data['nodeTotalNum'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['autoUpgrade'] = isset($data['autoUpgrade']) ? $data['autoUpgrade'] : null;
        $this->container['preferPacketCycle'] = isset($data['preferPacketCycle']) ? $data['preferPacketCycle'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['protectType'] = isset($data['protectType']) ? $data['protectType'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clusterId']) && !preg_match("/^.*$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['protectNodeNum']) && ($this->container['protectNodeNum'] > 2000)) {
                $invalidProperties[] = "invalid value for 'protectNodeNum', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['protectNodeNum']) && ($this->container['protectNodeNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectNodeNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectInterruptNodeNum']) && ($this->container['protectInterruptNodeNum'] > 2000)) {
                $invalidProperties[] = "invalid value for 'protectInterruptNodeNum', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['protectInterruptNodeNum']) && ($this->container['protectInterruptNodeNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectInterruptNodeNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unprotectNodeNum']) && ($this->container['unprotectNodeNum'] > 2000)) {
                $invalidProperties[] = "invalid value for 'unprotectNodeNum', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['unprotectNodeNum']) && ($this->container['unprotectNodeNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unprotectNodeNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeTotalNum']) && ($this->container['nodeTotalNum'] > 2000)) {
                $invalidProperties[] = "invalid value for 'nodeTotalNum', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['nodeTotalNum']) && ($this->container['nodeTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'nodeTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && !preg_match("/^.*$/", $this->container['clusterName'])) {
                $invalidProperties[] = "invalid value for 'clusterName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['chargingMode']) && !preg_match("/^.*$/", $this->container['chargingMode'])) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['preferPacketCycle']) && ($this->container['preferPacketCycle'] > 10)) {
                $invalidProperties[] = "invalid value for 'preferPacketCycle', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['preferPacketCycle']) && ($this->container['preferPacketCycle'] < 0)) {
                $invalidProperties[] = "invalid value for 'preferPacketCycle', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vpcId']) && !preg_match("/^.*$/", $this->container['vpcId'])) {
                $invalidProperties[] = "invalid value for 'vpcId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['protectType']) && !preg_match("/^.*$/", $this->container['protectType'])) {
                $invalidProperties[] = "invalid value for 'protectType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['protectStatus']) && !preg_match("/^.*$/", $this->container['protectStatus'])) {
                $invalidProperties[] = "invalid value for 'protectStatus', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['clusterType']) && !preg_match("/^.*$/", $this->container['clusterType'])) {
                $invalidProperties[] = "invalid value for 'clusterType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['failReason']) && !preg_match("/^.*$/", $this->container['failReason'])) {
                $invalidProperties[] = "invalid value for 'failReason', must be conform to the pattern /^.*$/.";
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
    * Gets clusterId
    *  集群id
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets protectNodeNum
    *  集群开启防护节点数量
    *
    * @return int|null
    */
    public function getProtectNodeNum()
    {
        return $this->container['protectNodeNum'];
    }

    /**
    * Sets protectNodeNum
    *
    * @param int|null $protectNodeNum 集群开启防护节点数量
    *
    * @return $this
    */
    public function setProtectNodeNum($protectNodeNum)
    {
        $this->container['protectNodeNum'] = $protectNodeNum;
        return $this;
    }

    /**
    * Gets protectInterruptNodeNum
    *  集群防护中断节点数量
    *
    * @return int|null
    */
    public function getProtectInterruptNodeNum()
    {
        return $this->container['protectInterruptNodeNum'];
    }

    /**
    * Sets protectInterruptNodeNum
    *
    * @param int|null $protectInterruptNodeNum 集群防护中断节点数量
    *
    * @return $this
    */
    public function setProtectInterruptNodeNum($protectInterruptNodeNum)
    {
        $this->container['protectInterruptNodeNum'] = $protectInterruptNodeNum;
        return $this;
    }

    /**
    * Gets unprotectNodeNum
    *  集群防护中断节点数量
    *
    * @return int|null
    */
    public function getUnprotectNodeNum()
    {
        return $this->container['unprotectNodeNum'];
    }

    /**
    * Sets unprotectNodeNum
    *
    * @param int|null $unprotectNodeNum 集群防护中断节点数量
    *
    * @return $this
    */
    public function setUnprotectNodeNum($unprotectNodeNum)
    {
        $this->container['unprotectNodeNum'] = $unprotectNodeNum;
        return $this;
    }

    /**
    * Gets nodeTotalNum
    *  集群节点总数
    *
    * @return int|null
    */
    public function getNodeTotalNum()
    {
        return $this->container['nodeTotalNum'];
    }

    /**
    * Sets nodeTotalNum
    *
    * @param int|null $nodeTotalNum 集群节点总数
    *
    * @return $this
    */
    public function setNodeTotalNum($nodeTotalNum)
    {
        $this->container['nodeTotalNum'] = $nodeTotalNum;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets chargingMode
    *  付费模式 | on_demand 按需 free 免费
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 付费模式 | on_demand 按需 free 免费
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets autoUpgrade
    *  开启agent自动升级
    *
    * @return bool|null
    */
    public function getAutoUpgrade()
    {
        return $this->container['autoUpgrade'];
    }

    /**
    * Sets autoUpgrade
    *
    * @param bool|null $autoUpgrade 开启agent自动升级
    *
    * @return $this
    */
    public function setAutoUpgrade($autoUpgrade)
    {
        $this->container['autoUpgrade'] = $autoUpgrade;
        return $this;
    }

    /**
    * Gets preferPacketCycle
    *  优先使用包周期配额；默认0
    *
    * @return int|null
    */
    public function getPreferPacketCycle()
    {
        return $this->container['preferPacketCycle'];
    }

    /**
    * Sets preferPacketCycle
    *
    * @param int|null $preferPacketCycle 优先使用包周期配额；默认0
    *
    * @return $this
    */
    public function setPreferPacketCycle($preferPacketCycle)
    {
        $this->container['preferPacketCycle'] = $preferPacketCycle;
        return $this;
    }

    /**
    * Gets vpcId
    *  vpc id
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId vpc id
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets protectType
    *  cce protection type
    *
    * @return string|null
    */
    public function getProtectType()
    {
        return $this->container['protectType'];
    }

    /**
    * Sets protectType
    *
    * @param string|null $protectType cce protection type
    *
    * @return $this
    */
    public function setProtectType($protectType)
    {
        $this->container['protectType'] = $protectType;
        return $this;
    }

    /**
    * Gets protectStatus
    *  protection status
    *
    * @return string|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param string|null $protectStatus protection status
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets clusterType
    *  cluster type
    *
    * @return string|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string|null $clusterType cluster type
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets failReason
    *  fail reason
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason fail reason
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
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


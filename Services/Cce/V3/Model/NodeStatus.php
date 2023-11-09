<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  节点状态：节点资源生命周期管理（如安装卸载等）状态和集群内k8s node状态的综合体现，取值如下 - Build：创建中，表示节点正处于创建过程中。 - Installing：纳管中，表示节点正处于纳管过程中。 - Upgrading：升级中，表示节点正处于升级过程中。 - Active：正常，表示节点处于正常状态。 - Abnormal：异常，表示节点处于异常状态。 - Deleting： 删除中，表示节点正处于删除过程中。 - Error：故障，表示节点处于故障状态。
    * lastProbeTime  节点最近一次状态检查时间。集群处于异常、冻结或者中间态（例如创建中）时，节点的状态检查动作可能受影响。检查时间超过5分的节点状态不具有参考意义。
    * jobId  创建或删除时的任务ID。
    * serverId  底层云服务器或裸金属节点ID。
    * privateIp  节点主网卡私有网段IP地址。
    * privateIPv6Ip  节点主网卡私有网段IPv6地址。
    * publicIp  节点弹性公网IP地址。如果ECS的数据没有实时同步，可在界面上通过“同步节点信息”手动进行更新。
    * deleteStatus  deleteStatus
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => 'string',
            'lastProbeTime' => 'string',
            'jobId' => 'string',
            'serverId' => 'string',
            'privateIp' => 'string',
            'privateIPv6Ip' => 'string',
            'publicIp' => 'string',
            'deleteStatus' => '\HuaweiCloud\SDK\Cce\V3\Model\DeleteStatus'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  节点状态：节点资源生命周期管理（如安装卸载等）状态和集群内k8s node状态的综合体现，取值如下 - Build：创建中，表示节点正处于创建过程中。 - Installing：纳管中，表示节点正处于纳管过程中。 - Upgrading：升级中，表示节点正处于升级过程中。 - Active：正常，表示节点处于正常状态。 - Abnormal：异常，表示节点处于异常状态。 - Deleting： 删除中，表示节点正处于删除过程中。 - Error：故障，表示节点处于故障状态。
    * lastProbeTime  节点最近一次状态检查时间。集群处于异常、冻结或者中间态（例如创建中）时，节点的状态检查动作可能受影响。检查时间超过5分的节点状态不具有参考意义。
    * jobId  创建或删除时的任务ID。
    * serverId  底层云服务器或裸金属节点ID。
    * privateIp  节点主网卡私有网段IP地址。
    * privateIPv6Ip  节点主网卡私有网段IPv6地址。
    * publicIp  节点弹性公网IP地址。如果ECS的数据没有实时同步，可在界面上通过“同步节点信息”手动进行更新。
    * deleteStatus  deleteStatus
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null,
        'lastProbeTime' => null,
        'jobId' => null,
        'serverId' => null,
        'privateIp' => null,
        'privateIPv6Ip' => null,
        'publicIp' => null,
        'deleteStatus' => null
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
    * phase  节点状态：节点资源生命周期管理（如安装卸载等）状态和集群内k8s node状态的综合体现，取值如下 - Build：创建中，表示节点正处于创建过程中。 - Installing：纳管中，表示节点正处于纳管过程中。 - Upgrading：升级中，表示节点正处于升级过程中。 - Active：正常，表示节点处于正常状态。 - Abnormal：异常，表示节点处于异常状态。 - Deleting： 删除中，表示节点正处于删除过程中。 - Error：故障，表示节点处于故障状态。
    * lastProbeTime  节点最近一次状态检查时间。集群处于异常、冻结或者中间态（例如创建中）时，节点的状态检查动作可能受影响。检查时间超过5分的节点状态不具有参考意义。
    * jobId  创建或删除时的任务ID。
    * serverId  底层云服务器或裸金属节点ID。
    * privateIp  节点主网卡私有网段IP地址。
    * privateIPv6Ip  节点主网卡私有网段IPv6地址。
    * publicIp  节点弹性公网IP地址。如果ECS的数据没有实时同步，可在界面上通过“同步节点信息”手动进行更新。
    * deleteStatus  deleteStatus
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase',
            'lastProbeTime' => 'lastProbeTime',
            'jobId' => 'jobID',
            'serverId' => 'serverId',
            'privateIp' => 'privateIP',
            'privateIPv6Ip' => 'privateIPv6IP',
            'publicIp' => 'publicIP',
            'deleteStatus' => 'deleteStatus'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  节点状态：节点资源生命周期管理（如安装卸载等）状态和集群内k8s node状态的综合体现，取值如下 - Build：创建中，表示节点正处于创建过程中。 - Installing：纳管中，表示节点正处于纳管过程中。 - Upgrading：升级中，表示节点正处于升级过程中。 - Active：正常，表示节点处于正常状态。 - Abnormal：异常，表示节点处于异常状态。 - Deleting： 删除中，表示节点正处于删除过程中。 - Error：故障，表示节点处于故障状态。
    * lastProbeTime  节点最近一次状态检查时间。集群处于异常、冻结或者中间态（例如创建中）时，节点的状态检查动作可能受影响。检查时间超过5分的节点状态不具有参考意义。
    * jobId  创建或删除时的任务ID。
    * serverId  底层云服务器或裸金属节点ID。
    * privateIp  节点主网卡私有网段IP地址。
    * privateIPv6Ip  节点主网卡私有网段IPv6地址。
    * publicIp  节点弹性公网IP地址。如果ECS的数据没有实时同步，可在界面上通过“同步节点信息”手动进行更新。
    * deleteStatus  deleteStatus
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase',
            'lastProbeTime' => 'setLastProbeTime',
            'jobId' => 'setJobId',
            'serverId' => 'setServerId',
            'privateIp' => 'setPrivateIp',
            'privateIPv6Ip' => 'setPrivateIPv6Ip',
            'publicIp' => 'setPublicIp',
            'deleteStatus' => 'setDeleteStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  节点状态：节点资源生命周期管理（如安装卸载等）状态和集群内k8s node状态的综合体现，取值如下 - Build：创建中，表示节点正处于创建过程中。 - Installing：纳管中，表示节点正处于纳管过程中。 - Upgrading：升级中，表示节点正处于升级过程中。 - Active：正常，表示节点处于正常状态。 - Abnormal：异常，表示节点处于异常状态。 - Deleting： 删除中，表示节点正处于删除过程中。 - Error：故障，表示节点处于故障状态。
    * lastProbeTime  节点最近一次状态检查时间。集群处于异常、冻结或者中间态（例如创建中）时，节点的状态检查动作可能受影响。检查时间超过5分的节点状态不具有参考意义。
    * jobId  创建或删除时的任务ID。
    * serverId  底层云服务器或裸金属节点ID。
    * privateIp  节点主网卡私有网段IP地址。
    * privateIPv6Ip  节点主网卡私有网段IPv6地址。
    * publicIp  节点弹性公网IP地址。如果ECS的数据没有实时同步，可在界面上通过“同步节点信息”手动进行更新。
    * deleteStatus  deleteStatus
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase',
            'lastProbeTime' => 'getLastProbeTime',
            'jobId' => 'getJobId',
            'serverId' => 'getServerId',
            'privateIp' => 'getPrivateIp',
            'privateIPv6Ip' => 'getPrivateIPv6Ip',
            'publicIp' => 'getPublicIp',
            'deleteStatus' => 'getDeleteStatus'
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
    const PHASE_BUILD = 'Build';
    const PHASE_INSTALLING = 'Installing';
    const PHASE_UPGRADING = 'Upgrading';
    const PHASE_ACTIVE = 'Active';
    const PHASE_ABNORMAL = 'Abnormal';
    const PHASE_DELETING = 'Deleting';
    const PHASE_ERROR = 'Error';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPhaseAllowableValues()
    {
        return [
            self::PHASE_BUILD,
            self::PHASE_INSTALLING,
            self::PHASE_UPGRADING,
            self::PHASE_ACTIVE,
            self::PHASE_ABNORMAL,
            self::PHASE_DELETING,
            self::PHASE_ERROR,
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
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['lastProbeTime'] = isset($data['lastProbeTime']) ? $data['lastProbeTime'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['privateIPv6Ip'] = isset($data['privateIPv6Ip']) ? $data['privateIPv6Ip'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['deleteStatus'] = isset($data['deleteStatus']) ? $data['deleteStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPhaseAllowableValues();
                if (!is_null($this->container['phase']) && !in_array($this->container['phase'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'phase', must be one of '%s'",
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
    * Gets phase
    *  节点状态：节点资源生命周期管理（如安装卸载等）状态和集群内k8s node状态的综合体现，取值如下 - Build：创建中，表示节点正处于创建过程中。 - Installing：纳管中，表示节点正处于纳管过程中。 - Upgrading：升级中，表示节点正处于升级过程中。 - Active：正常，表示节点处于正常状态。 - Abnormal：异常，表示节点处于异常状态。 - Deleting： 删除中，表示节点正处于删除过程中。 - Error：故障，表示节点处于故障状态。
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase 节点状态：节点资源生命周期管理（如安装卸载等）状态和集群内k8s node状态的综合体现，取值如下 - Build：创建中，表示节点正处于创建过程中。 - Installing：纳管中，表示节点正处于纳管过程中。 - Upgrading：升级中，表示节点正处于升级过程中。 - Active：正常，表示节点处于正常状态。 - Abnormal：异常，表示节点处于异常状态。 - Deleting： 删除中，表示节点正处于删除过程中。 - Error：故障，表示节点处于故障状态。
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets lastProbeTime
    *  节点最近一次状态检查时间。集群处于异常、冻结或者中间态（例如创建中）时，节点的状态检查动作可能受影响。检查时间超过5分的节点状态不具有参考意义。
    *
    * @return string|null
    */
    public function getLastProbeTime()
    {
        return $this->container['lastProbeTime'];
    }

    /**
    * Sets lastProbeTime
    *
    * @param string|null $lastProbeTime 节点最近一次状态检查时间。集群处于异常、冻结或者中间态（例如创建中）时，节点的状态检查动作可能受影响。检查时间超过5分的节点状态不具有参考意义。
    *
    * @return $this
    */
    public function setLastProbeTime($lastProbeTime)
    {
        $this->container['lastProbeTime'] = $lastProbeTime;
        return $this;
    }

    /**
    * Gets jobId
    *  创建或删除时的任务ID。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 创建或删除时的任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets serverId
    *  底层云服务器或裸金属节点ID。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 底层云服务器或裸金属节点ID。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets privateIp
    *  节点主网卡私有网段IP地址。
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 节点主网卡私有网段IP地址。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets privateIPv6Ip
    *  节点主网卡私有网段IPv6地址。
    *
    * @return string|null
    */
    public function getPrivateIPv6Ip()
    {
        return $this->container['privateIPv6Ip'];
    }

    /**
    * Sets privateIPv6Ip
    *
    * @param string|null $privateIPv6Ip 节点主网卡私有网段IPv6地址。
    *
    * @return $this
    */
    public function setPrivateIPv6Ip($privateIPv6Ip)
    {
        $this->container['privateIPv6Ip'] = $privateIPv6Ip;
        return $this;
    }

    /**
    * Gets publicIp
    *  节点弹性公网IP地址。如果ECS的数据没有实时同步，可在界面上通过“同步节点信息”手动进行更新。
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 节点弹性公网IP地址。如果ECS的数据没有实时同步，可在界面上通过“同步节点信息”手动进行更新。
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets deleteStatus
    *  deleteStatus
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\DeleteStatus|null
    */
    public function getDeleteStatus()
    {
        return $this->container['deleteStatus'];
    }

    /**
    * Sets deleteStatus
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\DeleteStatus|null $deleteStatus deleteStatus
    *
    * @return $this
    */
    public function setDeleteStatus($deleteStatus)
    {
        $this->container['deleteStatus'] = $deleteStatus;
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


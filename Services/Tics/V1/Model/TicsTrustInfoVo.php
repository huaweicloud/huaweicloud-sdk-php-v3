<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicsTrustInfoVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicsTrustInfoVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  创建时间
    * haMode  主备模式，ACTIVE.主，STANDBY.备
    * neDeployType  网元部署类型，CCE.容器集群部署，IEF.边缘部署
    * neNodeType  节点类型,AGENT.计算节点，AGG.聚合节点，AGG_MANAGER.聚合器管理节点,SERVER.控制节点
    * neStatus  网元状态，INIT.初始化,UNKNOWN.未知,OFFLINE.离线,ONLINE.在线,FAULT.故障,TRUSTING.互信中,TRUST.已互信
    * nodeId  节点id
    * nodeName  节点名称
    * partnerAlias  合作方别名
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => '\DateTime',
            'haMode' => 'string',
            'neDeployType' => 'string',
            'neNodeType' => 'string',
            'neStatus' => 'string',
            'nodeId' => 'string',
            'nodeName' => 'string',
            'partnerAlias' => 'string',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  创建时间
    * haMode  主备模式，ACTIVE.主，STANDBY.备
    * neDeployType  网元部署类型，CCE.容器集群部署，IEF.边缘部署
    * neNodeType  节点类型,AGENT.计算节点，AGG.聚合节点，AGG_MANAGER.聚合器管理节点,SERVER.控制节点
    * neStatus  网元状态，INIT.初始化,UNKNOWN.未知,OFFLINE.离线,ONLINE.在线,FAULT.故障,TRUSTING.互信中,TRUST.已互信
    * nodeId  节点id
    * nodeName  节点名称
    * partnerAlias  合作方别名
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => 'date-time',
        'haMode' => null,
        'neDeployType' => null,
        'neNodeType' => null,
        'neStatus' => null,
        'nodeId' => null,
        'nodeName' => null,
        'partnerAlias' => null,
        'updateTime' => 'date-time'
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
    * createTime  创建时间
    * haMode  主备模式，ACTIVE.主，STANDBY.备
    * neDeployType  网元部署类型，CCE.容器集群部署，IEF.边缘部署
    * neNodeType  节点类型,AGENT.计算节点，AGG.聚合节点，AGG_MANAGER.聚合器管理节点,SERVER.控制节点
    * neStatus  网元状态，INIT.初始化,UNKNOWN.未知,OFFLINE.离线,ONLINE.在线,FAULT.故障,TRUSTING.互信中,TRUST.已互信
    * nodeId  节点id
    * nodeName  节点名称
    * partnerAlias  合作方别名
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'haMode' => 'ha_mode',
            'neDeployType' => 'ne_deploy_type',
            'neNodeType' => 'ne_node_type',
            'neStatus' => 'ne_status',
            'nodeId' => 'node_id',
            'nodeName' => 'node_name',
            'partnerAlias' => 'partner_alias',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  创建时间
    * haMode  主备模式，ACTIVE.主，STANDBY.备
    * neDeployType  网元部署类型，CCE.容器集群部署，IEF.边缘部署
    * neNodeType  节点类型,AGENT.计算节点，AGG.聚合节点，AGG_MANAGER.聚合器管理节点,SERVER.控制节点
    * neStatus  网元状态，INIT.初始化,UNKNOWN.未知,OFFLINE.离线,ONLINE.在线,FAULT.故障,TRUSTING.互信中,TRUST.已互信
    * nodeId  节点id
    * nodeName  节点名称
    * partnerAlias  合作方别名
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'haMode' => 'setHaMode',
            'neDeployType' => 'setNeDeployType',
            'neNodeType' => 'setNeNodeType',
            'neStatus' => 'setNeStatus',
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName',
            'partnerAlias' => 'setPartnerAlias',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  创建时间
    * haMode  主备模式，ACTIVE.主，STANDBY.备
    * neDeployType  网元部署类型，CCE.容器集群部署，IEF.边缘部署
    * neNodeType  节点类型,AGENT.计算节点，AGG.聚合节点，AGG_MANAGER.聚合器管理节点,SERVER.控制节点
    * neStatus  网元状态，INIT.初始化,UNKNOWN.未知,OFFLINE.离线,ONLINE.在线,FAULT.故障,TRUSTING.互信中,TRUST.已互信
    * nodeId  节点id
    * nodeName  节点名称
    * partnerAlias  合作方别名
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'haMode' => 'getHaMode',
            'neDeployType' => 'getNeDeployType',
            'neNodeType' => 'getNeNodeType',
            'neStatus' => 'getNeStatus',
            'nodeId' => 'getNodeId',
            'nodeName' => 'getNodeName',
            'partnerAlias' => 'getPartnerAlias',
            'updateTime' => 'getUpdateTime'
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
    const HA_MODE_ACTIVE = 'ACTIVE';
    const HA_MODE_STANDBY = 'STANDBY';
    const NE_DEPLOY_TYPE_CCE = 'CCE';
    const NE_DEPLOY_TYPE_IEF = 'IEF';
    const NE_NODE_TYPE_AGENT = 'AGENT';
    const NE_NODE_TYPE_AGG = 'AGG';
    const NE_NODE_TYPE_AGG_MANAGER = 'AGG_MANAGER';
    const NE_NODE_TYPE_SERVER = 'SERVER';
    const NE_STATUS_FAULT = 'FAULT';
    const NE_STATUS_INIT = 'INIT';
    const NE_STATUS_OFFLINE = 'OFFLINE';
    const NE_STATUS_ONLINE = 'ONLINE';
    const NE_STATUS_TRUST = 'TRUST';
    const NE_STATUS_TRUSTING = 'TRUSTING';
    const NE_STATUS_UNKNOWN = 'UNKNOWN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHaModeAllowableValues()
    {
        return [
            self::HA_MODE_ACTIVE,
            self::HA_MODE_STANDBY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNeDeployTypeAllowableValues()
    {
        return [
            self::NE_DEPLOY_TYPE_CCE,
            self::NE_DEPLOY_TYPE_IEF,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNeNodeTypeAllowableValues()
    {
        return [
            self::NE_NODE_TYPE_AGENT,
            self::NE_NODE_TYPE_AGG,
            self::NE_NODE_TYPE_AGG_MANAGER,
            self::NE_NODE_TYPE_SERVER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNeStatusAllowableValues()
    {
        return [
            self::NE_STATUS_FAULT,
            self::NE_STATUS_INIT,
            self::NE_STATUS_OFFLINE,
            self::NE_STATUS_ONLINE,
            self::NE_STATUS_TRUST,
            self::NE_STATUS_TRUSTING,
            self::NE_STATUS_UNKNOWN,
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['haMode'] = isset($data['haMode']) ? $data['haMode'] : null;
        $this->container['neDeployType'] = isset($data['neDeployType']) ? $data['neDeployType'] : null;
        $this->container['neNodeType'] = isset($data['neNodeType']) ? $data['neNodeType'] : null;
        $this->container['neStatus'] = isset($data['neStatus']) ? $data['neStatus'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['partnerAlias'] = isset($data['partnerAlias']) ? $data['partnerAlias'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getHaModeAllowableValues();
                if (!is_null($this->container['haMode']) && !in_array($this->container['haMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'haMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNeDeployTypeAllowableValues();
                if (!is_null($this->container['neDeployType']) && !in_array($this->container['neDeployType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'neDeployType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNeNodeTypeAllowableValues();
                if (!is_null($this->container['neNodeType']) && !in_array($this->container['neNodeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'neNodeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNeStatusAllowableValues();
                if (!is_null($this->container['neStatus']) && !in_array($this->container['neStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'neStatus', must be one of '%s'",
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
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets haMode
    *  主备模式，ACTIVE.主，STANDBY.备
    *
    * @return string|null
    */
    public function getHaMode()
    {
        return $this->container['haMode'];
    }

    /**
    * Sets haMode
    *
    * @param string|null $haMode 主备模式，ACTIVE.主，STANDBY.备
    *
    * @return $this
    */
    public function setHaMode($haMode)
    {
        $this->container['haMode'] = $haMode;
        return $this;
    }

    /**
    * Gets neDeployType
    *  网元部署类型，CCE.容器集群部署，IEF.边缘部署
    *
    * @return string|null
    */
    public function getNeDeployType()
    {
        return $this->container['neDeployType'];
    }

    /**
    * Sets neDeployType
    *
    * @param string|null $neDeployType 网元部署类型，CCE.容器集群部署，IEF.边缘部署
    *
    * @return $this
    */
    public function setNeDeployType($neDeployType)
    {
        $this->container['neDeployType'] = $neDeployType;
        return $this;
    }

    /**
    * Gets neNodeType
    *  节点类型,AGENT.计算节点，AGG.聚合节点，AGG_MANAGER.聚合器管理节点,SERVER.控制节点
    *
    * @return string|null
    */
    public function getNeNodeType()
    {
        return $this->container['neNodeType'];
    }

    /**
    * Sets neNodeType
    *
    * @param string|null $neNodeType 节点类型,AGENT.计算节点，AGG.聚合节点，AGG_MANAGER.聚合器管理节点,SERVER.控制节点
    *
    * @return $this
    */
    public function setNeNodeType($neNodeType)
    {
        $this->container['neNodeType'] = $neNodeType;
        return $this;
    }

    /**
    * Gets neStatus
    *  网元状态，INIT.初始化,UNKNOWN.未知,OFFLINE.离线,ONLINE.在线,FAULT.故障,TRUSTING.互信中,TRUST.已互信
    *
    * @return string|null
    */
    public function getNeStatus()
    {
        return $this->container['neStatus'];
    }

    /**
    * Sets neStatus
    *
    * @param string|null $neStatus 网元状态，INIT.初始化,UNKNOWN.未知,OFFLINE.离线,ONLINE.在线,FAULT.故障,TRUSTING.互信中,TRUST.已互信
    *
    * @return $this
    */
    public function setNeStatus($neStatus)
    {
        $this->container['neStatus'] = $neStatus;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点id
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点id
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeName
    *  节点名称
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName 节点名称
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets partnerAlias
    *  合作方别名
    *
    * @return string|null
    */
    public function getPartnerAlias()
    {
        return $this->container['partnerAlias'];
    }

    /**
    * Sets partnerAlias
    *
    * @param string|null $partnerAlias 合作方别名
    *
    * @return $this
    */
    public function setPartnerAlias($partnerAlias)
    {
        $this->container['partnerAlias'] = $partnerAlias;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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


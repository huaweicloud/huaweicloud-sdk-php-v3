<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodesInfoResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodesInfoResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logicalNodeId  逻辑节点ID
    * name  节点名称
    * status  节点状态，所有值如下: - Creating：创建中。 - Active：运行中。 - Inactive：故障。 - Deleting：删除中。 - AddSharding：添加分片中。
    * azCode  可用区code
    * nodeRole  节点角色，所有值如下: - redis-server：Redis server节点。 - redis-proxy：proxy节点。
    * nodeType  节点主从角色: - master：主 - slave：从 - proxy: proxy实例节点角色为\"proxy\"
    * nodeIp  节点的IP
    * nodePort  节点的port
    * nodeId  节点ID
    * priorityWeight  节点权重
    * isAccess  节点的IP是否可直接访问
    * groupId  分片ID
    * groupName  分片名称
    * isRemoveIp  是否从只读域名中摘除IP
    * replicationId  副本id
    * dimensions  副本对应的监控指标维度信息。可用于调用云监控服务的查询监控数据指标相关接口 - 副本的监控维度为多维度，返回数组中包含两个维度信息。从云监控查询监控数据时，要按多维度传递指标维度参数，才能查询到监控指标值 - 第一个维度为副本父维度信息 维度名称为dcs_instance_id，维度值对应副本所在的实例ID - 第二个维度，维度名称为dcs_cluster_redis_node,维度值为副本的监控对象ID，与副本ID和节点ID不同。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logicalNodeId' => 'string',
            'name' => 'string',
            'status' => 'string',
            'azCode' => 'string',
            'nodeRole' => 'string',
            'nodeType' => 'string',
            'nodeIp' => 'string',
            'nodePort' => 'string',
            'nodeId' => 'string',
            'priorityWeight' => 'int',
            'isAccess' => 'bool',
            'groupId' => 'string',
            'groupName' => 'string',
            'isRemoveIp' => 'bool',
            'replicationId' => 'string',
            'dimensions' => '\HuaweiCloud\SDK\Dcs\V2\Model\InstanceReplicationDimensionsInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logicalNodeId  逻辑节点ID
    * name  节点名称
    * status  节点状态，所有值如下: - Creating：创建中。 - Active：运行中。 - Inactive：故障。 - Deleting：删除中。 - AddSharding：添加分片中。
    * azCode  可用区code
    * nodeRole  节点角色，所有值如下: - redis-server：Redis server节点。 - redis-proxy：proxy节点。
    * nodeType  节点主从角色: - master：主 - slave：从 - proxy: proxy实例节点角色为\"proxy\"
    * nodeIp  节点的IP
    * nodePort  节点的port
    * nodeId  节点ID
    * priorityWeight  节点权重
    * isAccess  节点的IP是否可直接访问
    * groupId  分片ID
    * groupName  分片名称
    * isRemoveIp  是否从只读域名中摘除IP
    * replicationId  副本id
    * dimensions  副本对应的监控指标维度信息。可用于调用云监控服务的查询监控数据指标相关接口 - 副本的监控维度为多维度，返回数组中包含两个维度信息。从云监控查询监控数据时，要按多维度传递指标维度参数，才能查询到监控指标值 - 第一个维度为副本父维度信息 维度名称为dcs_instance_id，维度值对应副本所在的实例ID - 第二个维度，维度名称为dcs_cluster_redis_node,维度值为副本的监控对象ID，与副本ID和节点ID不同。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logicalNodeId' => null,
        'name' => null,
        'status' => null,
        'azCode' => null,
        'nodeRole' => null,
        'nodeType' => null,
        'nodeIp' => null,
        'nodePort' => null,
        'nodeId' => null,
        'priorityWeight' => 'int32',
        'isAccess' => null,
        'groupId' => null,
        'groupName' => null,
        'isRemoveIp' => null,
        'replicationId' => null,
        'dimensions' => null
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
    * logicalNodeId  逻辑节点ID
    * name  节点名称
    * status  节点状态，所有值如下: - Creating：创建中。 - Active：运行中。 - Inactive：故障。 - Deleting：删除中。 - AddSharding：添加分片中。
    * azCode  可用区code
    * nodeRole  节点角色，所有值如下: - redis-server：Redis server节点。 - redis-proxy：proxy节点。
    * nodeType  节点主从角色: - master：主 - slave：从 - proxy: proxy实例节点角色为\"proxy\"
    * nodeIp  节点的IP
    * nodePort  节点的port
    * nodeId  节点ID
    * priorityWeight  节点权重
    * isAccess  节点的IP是否可直接访问
    * groupId  分片ID
    * groupName  分片名称
    * isRemoveIp  是否从只读域名中摘除IP
    * replicationId  副本id
    * dimensions  副本对应的监控指标维度信息。可用于调用云监控服务的查询监控数据指标相关接口 - 副本的监控维度为多维度，返回数组中包含两个维度信息。从云监控查询监控数据时，要按多维度传递指标维度参数，才能查询到监控指标值 - 第一个维度为副本父维度信息 维度名称为dcs_instance_id，维度值对应副本所在的实例ID - 第二个维度，维度名称为dcs_cluster_redis_node,维度值为副本的监控对象ID，与副本ID和节点ID不同。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logicalNodeId' => 'logical_node_id',
            'name' => 'name',
            'status' => 'status',
            'azCode' => 'az_code',
            'nodeRole' => 'node_role',
            'nodeType' => 'node_type',
            'nodeIp' => 'node_ip',
            'nodePort' => 'node_port',
            'nodeId' => 'node_id',
            'priorityWeight' => 'priority_weight',
            'isAccess' => 'is_access',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'isRemoveIp' => 'is_remove_ip',
            'replicationId' => 'replication_id',
            'dimensions' => 'dimensions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logicalNodeId  逻辑节点ID
    * name  节点名称
    * status  节点状态，所有值如下: - Creating：创建中。 - Active：运行中。 - Inactive：故障。 - Deleting：删除中。 - AddSharding：添加分片中。
    * azCode  可用区code
    * nodeRole  节点角色，所有值如下: - redis-server：Redis server节点。 - redis-proxy：proxy节点。
    * nodeType  节点主从角色: - master：主 - slave：从 - proxy: proxy实例节点角色为\"proxy\"
    * nodeIp  节点的IP
    * nodePort  节点的port
    * nodeId  节点ID
    * priorityWeight  节点权重
    * isAccess  节点的IP是否可直接访问
    * groupId  分片ID
    * groupName  分片名称
    * isRemoveIp  是否从只读域名中摘除IP
    * replicationId  副本id
    * dimensions  副本对应的监控指标维度信息。可用于调用云监控服务的查询监控数据指标相关接口 - 副本的监控维度为多维度，返回数组中包含两个维度信息。从云监控查询监控数据时，要按多维度传递指标维度参数，才能查询到监控指标值 - 第一个维度为副本父维度信息 维度名称为dcs_instance_id，维度值对应副本所在的实例ID - 第二个维度，维度名称为dcs_cluster_redis_node,维度值为副本的监控对象ID，与副本ID和节点ID不同。
    *
    * @var string[]
    */
    protected static $setters = [
            'logicalNodeId' => 'setLogicalNodeId',
            'name' => 'setName',
            'status' => 'setStatus',
            'azCode' => 'setAzCode',
            'nodeRole' => 'setNodeRole',
            'nodeType' => 'setNodeType',
            'nodeIp' => 'setNodeIp',
            'nodePort' => 'setNodePort',
            'nodeId' => 'setNodeId',
            'priorityWeight' => 'setPriorityWeight',
            'isAccess' => 'setIsAccess',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'isRemoveIp' => 'setIsRemoveIp',
            'replicationId' => 'setReplicationId',
            'dimensions' => 'setDimensions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logicalNodeId  逻辑节点ID
    * name  节点名称
    * status  节点状态，所有值如下: - Creating：创建中。 - Active：运行中。 - Inactive：故障。 - Deleting：删除中。 - AddSharding：添加分片中。
    * azCode  可用区code
    * nodeRole  节点角色，所有值如下: - redis-server：Redis server节点。 - redis-proxy：proxy节点。
    * nodeType  节点主从角色: - master：主 - slave：从 - proxy: proxy实例节点角色为\"proxy\"
    * nodeIp  节点的IP
    * nodePort  节点的port
    * nodeId  节点ID
    * priorityWeight  节点权重
    * isAccess  节点的IP是否可直接访问
    * groupId  分片ID
    * groupName  分片名称
    * isRemoveIp  是否从只读域名中摘除IP
    * replicationId  副本id
    * dimensions  副本对应的监控指标维度信息。可用于调用云监控服务的查询监控数据指标相关接口 - 副本的监控维度为多维度，返回数组中包含两个维度信息。从云监控查询监控数据时，要按多维度传递指标维度参数，才能查询到监控指标值 - 第一个维度为副本父维度信息 维度名称为dcs_instance_id，维度值对应副本所在的实例ID - 第二个维度，维度名称为dcs_cluster_redis_node,维度值为副本的监控对象ID，与副本ID和节点ID不同。
    *
    * @var string[]
    */
    protected static $getters = [
            'logicalNodeId' => 'getLogicalNodeId',
            'name' => 'getName',
            'status' => 'getStatus',
            'azCode' => 'getAzCode',
            'nodeRole' => 'getNodeRole',
            'nodeType' => 'getNodeType',
            'nodeIp' => 'getNodeIp',
            'nodePort' => 'getNodePort',
            'nodeId' => 'getNodeId',
            'priorityWeight' => 'getPriorityWeight',
            'isAccess' => 'getIsAccess',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'isRemoveIp' => 'getIsRemoveIp',
            'replicationId' => 'getReplicationId',
            'dimensions' => 'getDimensions'
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
    const STATUS_CREATING = 'Creating';
    const STATUS_ACTIVE = 'Active';
    const STATUS_INACTIVE = 'Inactive';
    const STATUS_DELETING = 'Deleting';
    const STATUS_ADD_SHARDING = 'AddSharding';
    const NODE_ROLE_REDIS_SERVER = 'redis-server';
    const NODE_ROLE_REDIS_PROXY = 'redis-proxy';
    const NODE_TYPE_MASTER = 'master';
    const NODE_TYPE_SLAVE = 'slave';
    const NODE_TYPE_PROXY = 'proxy';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATING,
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
            self::STATUS_DELETING,
            self::STATUS_ADD_SHARDING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNodeRoleAllowableValues()
    {
        return [
            self::NODE_ROLE_REDIS_SERVER,
            self::NODE_ROLE_REDIS_PROXY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNodeTypeAllowableValues()
    {
        return [
            self::NODE_TYPE_MASTER,
            self::NODE_TYPE_SLAVE,
            self::NODE_TYPE_PROXY,
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
        $this->container['logicalNodeId'] = isset($data['logicalNodeId']) ? $data['logicalNodeId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['nodeRole'] = isset($data['nodeRole']) ? $data['nodeRole'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['nodeIp'] = isset($data['nodeIp']) ? $data['nodeIp'] : null;
        $this->container['nodePort'] = isset($data['nodePort']) ? $data['nodePort'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['priorityWeight'] = isset($data['priorityWeight']) ? $data['priorityWeight'] : null;
        $this->container['isAccess'] = isset($data['isAccess']) ? $data['isAccess'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['isRemoveIp'] = isset($data['isRemoveIp']) ? $data['isRemoveIp'] : null;
        $this->container['replicationId'] = isset($data['replicationId']) ? $data['replicationId'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNodeRoleAllowableValues();
                if (!is_null($this->container['nodeRole']) && !in_array($this->container['nodeRole'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'nodeRole', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNodeTypeAllowableValues();
                if (!is_null($this->container['nodeType']) && !in_array($this->container['nodeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'nodeType', must be one of '%s'",
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
    * Gets logicalNodeId
    *  逻辑节点ID
    *
    * @return string|null
    */
    public function getLogicalNodeId()
    {
        return $this->container['logicalNodeId'];
    }

    /**
    * Sets logicalNodeId
    *
    * @param string|null $logicalNodeId 逻辑节点ID
    *
    * @return $this
    */
    public function setLogicalNodeId($logicalNodeId)
    {
        $this->container['logicalNodeId'] = $logicalNodeId;
        return $this;
    }

    /**
    * Gets name
    *  节点名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 节点名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  节点状态，所有值如下: - Creating：创建中。 - Active：运行中。 - Inactive：故障。 - Deleting：删除中。 - AddSharding：添加分片中。
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
    * @param string|null $status 节点状态，所有值如下: - Creating：创建中。 - Active：运行中。 - Inactive：故障。 - Deleting：删除中。 - AddSharding：添加分片中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets azCode
    *  可用区code
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode 可用区code
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets nodeRole
    *  节点角色，所有值如下: - redis-server：Redis server节点。 - redis-proxy：proxy节点。
    *
    * @return string|null
    */
    public function getNodeRole()
    {
        return $this->container['nodeRole'];
    }

    /**
    * Sets nodeRole
    *
    * @param string|null $nodeRole 节点角色，所有值如下: - redis-server：Redis server节点。 - redis-proxy：proxy节点。
    *
    * @return $this
    */
    public function setNodeRole($nodeRole)
    {
        $this->container['nodeRole'] = $nodeRole;
        return $this;
    }

    /**
    * Gets nodeType
    *  节点主从角色: - master：主 - slave：从 - proxy: proxy实例节点角色为\"proxy\"
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType 节点主从角色: - master：主 - slave：从 - proxy: proxy实例节点角色为\"proxy\"
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets nodeIp
    *  节点的IP
    *
    * @return string|null
    */
    public function getNodeIp()
    {
        return $this->container['nodeIp'];
    }

    /**
    * Sets nodeIp
    *
    * @param string|null $nodeIp 节点的IP
    *
    * @return $this
    */
    public function setNodeIp($nodeIp)
    {
        $this->container['nodeIp'] = $nodeIp;
        return $this;
    }

    /**
    * Gets nodePort
    *  节点的port
    *
    * @return string|null
    */
    public function getNodePort()
    {
        return $this->container['nodePort'];
    }

    /**
    * Sets nodePort
    *
    * @param string|null $nodePort 节点的port
    *
    * @return $this
    */
    public function setNodePort($nodePort)
    {
        $this->container['nodePort'] = $nodePort;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID
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
    * @param string|null $nodeId 节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets priorityWeight
    *  节点权重
    *
    * @return int|null
    */
    public function getPriorityWeight()
    {
        return $this->container['priorityWeight'];
    }

    /**
    * Sets priorityWeight
    *
    * @param int|null $priorityWeight 节点权重
    *
    * @return $this
    */
    public function setPriorityWeight($priorityWeight)
    {
        $this->container['priorityWeight'] = $priorityWeight;
        return $this;
    }

    /**
    * Gets isAccess
    *  节点的IP是否可直接访问
    *
    * @return bool|null
    */
    public function getIsAccess()
    {
        return $this->container['isAccess'];
    }

    /**
    * Sets isAccess
    *
    * @param bool|null $isAccess 节点的IP是否可直接访问
    *
    * @return $this
    */
    public function setIsAccess($isAccess)
    {
        $this->container['isAccess'] = $isAccess;
        return $this;
    }

    /**
    * Gets groupId
    *  分片ID
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 分片ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  分片名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 分片名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets isRemoveIp
    *  是否从只读域名中摘除IP
    *
    * @return bool|null
    */
    public function getIsRemoveIp()
    {
        return $this->container['isRemoveIp'];
    }

    /**
    * Sets isRemoveIp
    *
    * @param bool|null $isRemoveIp 是否从只读域名中摘除IP
    *
    * @return $this
    */
    public function setIsRemoveIp($isRemoveIp)
    {
        $this->container['isRemoveIp'] = $isRemoveIp;
        return $this;
    }

    /**
    * Gets replicationId
    *  副本id
    *
    * @return string|null
    */
    public function getReplicationId()
    {
        return $this->container['replicationId'];
    }

    /**
    * Sets replicationId
    *
    * @param string|null $replicationId 副本id
    *
    * @return $this
    */
    public function setReplicationId($replicationId)
    {
        $this->container['replicationId'] = $replicationId;
        return $this;
    }

    /**
    * Gets dimensions
    *  副本对应的监控指标维度信息。可用于调用云监控服务的查询监控数据指标相关接口 - 副本的监控维度为多维度，返回数组中包含两个维度信息。从云监控查询监控数据时，要按多维度传递指标维度参数，才能查询到监控指标值 - 第一个维度为副本父维度信息 维度名称为dcs_instance_id，维度值对应副本所在的实例ID - 第二个维度，维度名称为dcs_cluster_redis_node,维度值为副本的监控对象ID，与副本ID和节点ID不同。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\InstanceReplicationDimensionsInfo[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\InstanceReplicationDimensionsInfo[]|null $dimensions 副本对应的监控指标维度信息。可用于调用云监控服务的查询监控数据指标相关接口 - 副本的监控维度为多维度，返回数组中包含两个维度信息。从云监控查询监控数据时，要按多维度传递指标维度参数，才能查询到监控指标值 - 第一个维度为副本父维度信息 维度名称为dcs_instance_id，维度值对应副本所在的实例ID - 第二个维度，维度名称为dcs_cluster_redis_node,维度值为副本的监控对象ID，与副本ID和节点ID不同。
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
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


<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterDetailInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterDetailInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavor  flavor
    * volume  volume
    * status  节点状态： - 100：创建中。 - 200：正常。 - 300：失败。 - 303：创建失败。 - 400：已删除。 - 800：冻结。
    * actions  节点操作状态列表： - REBOOTING：重启中。 - RESTORING：恢复中。 - REBOOT_FAILURE：重启失败。
    * type  节点类型，只支持一种类型“cdm”。
    * id  节点的虚拟机ID。
    * name  节点的虚拟机名称。
    * isFrozen  节点是否冻结：0：否。1：是。
    * components  组件
    * configStatus  节点配置状态（查询集群列表时为null）： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败。
    * role  实例角色
    * group  分组
    * links  链接信息（查询集群列表时返回值为null）
    * paramsGroupId  组件分组id
    * publicIp  公网ip
    * manageIp  管理ip
    * trafficIp  流量ip
    * shardId  分片id
    * manageFixIp  管理修复ip
    * privateIp  私有ip
    * internalIp  内部ip
    * resource  资源信息（查询集群列表时返回值为null）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavor' => '\HuaweiCloud\SDK\Cdm\V1\Model\ClusterDetailInstanceFlavor',
            'volume' => '\HuaweiCloud\SDK\Cdm\V1\Model\ClusterDetailInstanceVolume',
            'status' => 'string',
            'actions' => 'string[]',
            'type' => 'string',
            'id' => 'string',
            'name' => 'string',
            'isFrozen' => 'string',
            'components' => 'string',
            'configStatus' => 'string',
            'role' => 'string',
            'group' => 'string',
            'links' => '\HuaweiCloud\SDK\Cdm\V1\Model\ClusterLinks[]',
            'paramsGroupId' => 'string',
            'publicIp' => 'string',
            'manageIp' => 'string',
            'trafficIp' => 'string',
            'shardId' => 'string',
            'manageFixIp' => 'string',
            'privateIp' => 'string',
            'internalIp' => 'string',
            'resource' => '\HuaweiCloud\SDK\Cdm\V1\Model\Resource[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavor  flavor
    * volume  volume
    * status  节点状态： - 100：创建中。 - 200：正常。 - 300：失败。 - 303：创建失败。 - 400：已删除。 - 800：冻结。
    * actions  节点操作状态列表： - REBOOTING：重启中。 - RESTORING：恢复中。 - REBOOT_FAILURE：重启失败。
    * type  节点类型，只支持一种类型“cdm”。
    * id  节点的虚拟机ID。
    * name  节点的虚拟机名称。
    * isFrozen  节点是否冻结：0：否。1：是。
    * components  组件
    * configStatus  节点配置状态（查询集群列表时为null）： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败。
    * role  实例角色
    * group  分组
    * links  链接信息（查询集群列表时返回值为null）
    * paramsGroupId  组件分组id
    * publicIp  公网ip
    * manageIp  管理ip
    * trafficIp  流量ip
    * shardId  分片id
    * manageFixIp  管理修复ip
    * privateIp  私有ip
    * internalIp  内部ip
    * resource  资源信息（查询集群列表时返回值为null）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavor' => null,
        'volume' => null,
        'status' => null,
        'actions' => null,
        'type' => null,
        'id' => null,
        'name' => null,
        'isFrozen' => null,
        'components' => null,
        'configStatus' => null,
        'role' => null,
        'group' => null,
        'links' => null,
        'paramsGroupId' => null,
        'publicIp' => null,
        'manageIp' => null,
        'trafficIp' => null,
        'shardId' => null,
        'manageFixIp' => null,
        'privateIp' => null,
        'internalIp' => null,
        'resource' => null
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
    * flavor  flavor
    * volume  volume
    * status  节点状态： - 100：创建中。 - 200：正常。 - 300：失败。 - 303：创建失败。 - 400：已删除。 - 800：冻结。
    * actions  节点操作状态列表： - REBOOTING：重启中。 - RESTORING：恢复中。 - REBOOT_FAILURE：重启失败。
    * type  节点类型，只支持一种类型“cdm”。
    * id  节点的虚拟机ID。
    * name  节点的虚拟机名称。
    * isFrozen  节点是否冻结：0：否。1：是。
    * components  组件
    * configStatus  节点配置状态（查询集群列表时为null）： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败。
    * role  实例角色
    * group  分组
    * links  链接信息（查询集群列表时返回值为null）
    * paramsGroupId  组件分组id
    * publicIp  公网ip
    * manageIp  管理ip
    * trafficIp  流量ip
    * shardId  分片id
    * manageFixIp  管理修复ip
    * privateIp  私有ip
    * internalIp  内部ip
    * resource  资源信息（查询集群列表时返回值为null）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavor' => 'flavor',
            'volume' => 'volume',
            'status' => 'status',
            'actions' => 'actions',
            'type' => 'type',
            'id' => 'id',
            'name' => 'name',
            'isFrozen' => 'isFrozen',
            'components' => 'components',
            'configStatus' => 'config_status',
            'role' => 'role',
            'group' => 'group',
            'links' => 'links',
            'paramsGroupId' => 'paramsGroupId',
            'publicIp' => 'publicIp',
            'manageIp' => 'manageIp',
            'trafficIp' => 'trafficIp',
            'shardId' => 'shard_id',
            'manageFixIp' => 'manage_fix_ip',
            'privateIp' => 'private_ip',
            'internalIp' => 'internal_ip',
            'resource' => 'resource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavor  flavor
    * volume  volume
    * status  节点状态： - 100：创建中。 - 200：正常。 - 300：失败。 - 303：创建失败。 - 400：已删除。 - 800：冻结。
    * actions  节点操作状态列表： - REBOOTING：重启中。 - RESTORING：恢复中。 - REBOOT_FAILURE：重启失败。
    * type  节点类型，只支持一种类型“cdm”。
    * id  节点的虚拟机ID。
    * name  节点的虚拟机名称。
    * isFrozen  节点是否冻结：0：否。1：是。
    * components  组件
    * configStatus  节点配置状态（查询集群列表时为null）： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败。
    * role  实例角色
    * group  分组
    * links  链接信息（查询集群列表时返回值为null）
    * paramsGroupId  组件分组id
    * publicIp  公网ip
    * manageIp  管理ip
    * trafficIp  流量ip
    * shardId  分片id
    * manageFixIp  管理修复ip
    * privateIp  私有ip
    * internalIp  内部ip
    * resource  资源信息（查询集群列表时返回值为null）
    *
    * @var string[]
    */
    protected static $setters = [
            'flavor' => 'setFlavor',
            'volume' => 'setVolume',
            'status' => 'setStatus',
            'actions' => 'setActions',
            'type' => 'setType',
            'id' => 'setId',
            'name' => 'setName',
            'isFrozen' => 'setIsFrozen',
            'components' => 'setComponents',
            'configStatus' => 'setConfigStatus',
            'role' => 'setRole',
            'group' => 'setGroup',
            'links' => 'setLinks',
            'paramsGroupId' => 'setParamsGroupId',
            'publicIp' => 'setPublicIp',
            'manageIp' => 'setManageIp',
            'trafficIp' => 'setTrafficIp',
            'shardId' => 'setShardId',
            'manageFixIp' => 'setManageFixIp',
            'privateIp' => 'setPrivateIp',
            'internalIp' => 'setInternalIp',
            'resource' => 'setResource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavor  flavor
    * volume  volume
    * status  节点状态： - 100：创建中。 - 200：正常。 - 300：失败。 - 303：创建失败。 - 400：已删除。 - 800：冻结。
    * actions  节点操作状态列表： - REBOOTING：重启中。 - RESTORING：恢复中。 - REBOOT_FAILURE：重启失败。
    * type  节点类型，只支持一种类型“cdm”。
    * id  节点的虚拟机ID。
    * name  节点的虚拟机名称。
    * isFrozen  节点是否冻结：0：否。1：是。
    * components  组件
    * configStatus  节点配置状态（查询集群列表时为null）： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败。
    * role  实例角色
    * group  分组
    * links  链接信息（查询集群列表时返回值为null）
    * paramsGroupId  组件分组id
    * publicIp  公网ip
    * manageIp  管理ip
    * trafficIp  流量ip
    * shardId  分片id
    * manageFixIp  管理修复ip
    * privateIp  私有ip
    * internalIp  内部ip
    * resource  资源信息（查询集群列表时返回值为null）
    *
    * @var string[]
    */
    protected static $getters = [
            'flavor' => 'getFlavor',
            'volume' => 'getVolume',
            'status' => 'getStatus',
            'actions' => 'getActions',
            'type' => 'getType',
            'id' => 'getId',
            'name' => 'getName',
            'isFrozen' => 'getIsFrozen',
            'components' => 'getComponents',
            'configStatus' => 'getConfigStatus',
            'role' => 'getRole',
            'group' => 'getGroup',
            'links' => 'getLinks',
            'paramsGroupId' => 'getParamsGroupId',
            'publicIp' => 'getPublicIp',
            'manageIp' => 'getManageIp',
            'trafficIp' => 'getTrafficIp',
            'shardId' => 'getShardId',
            'manageFixIp' => 'getManageFixIp',
            'privateIp' => 'getPrivateIp',
            'internalIp' => 'getInternalIp',
            'resource' => 'getResource'
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
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['isFrozen'] = isset($data['isFrozen']) ? $data['isFrozen'] : null;
        $this->container['components'] = isset($data['components']) ? $data['components'] : null;
        $this->container['configStatus'] = isset($data['configStatus']) ? $data['configStatus'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['paramsGroupId'] = isset($data['paramsGroupId']) ? $data['paramsGroupId'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['manageIp'] = isset($data['manageIp']) ? $data['manageIp'] : null;
        $this->container['trafficIp'] = isset($data['trafficIp']) ? $data['trafficIp'] : null;
        $this->container['shardId'] = isset($data['shardId']) ? $data['shardId'] : null;
        $this->container['manageFixIp'] = isset($data['manageFixIp']) ? $data['manageFixIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['internalIp'] = isset($data['internalIp']) ? $data['internalIp'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['isFrozen'] === null) {
            $invalidProperties[] = "'isFrozen' can't be null";
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
    * Gets flavor
    *  flavor
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\ClusterDetailInstanceFlavor
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ClusterDetailInstanceFlavor $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\ClusterDetailInstanceVolume
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ClusterDetailInstanceVolume $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets status
    *  节点状态： - 100：创建中。 - 200：正常。 - 300：失败。 - 303：创建失败。 - 400：已删除。 - 800：冻结。
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
    * @param string $status 节点状态： - 100：创建中。 - 200：正常。 - 300：失败。 - 303：创建失败。 - 400：已删除。 - 800：冻结。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets actions
    *  节点操作状态列表： - REBOOTING：重启中。 - RESTORING：恢复中。 - REBOOT_FAILURE：重启失败。
    *
    * @return string[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param string[]|null $actions 节点操作状态列表： - REBOOTING：重启中。 - RESTORING：恢复中。 - REBOOT_FAILURE：重启失败。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets type
    *  节点类型，只支持一种类型“cdm”。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 节点类型，只支持一种类型“cdm”。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets id
    *  节点的虚拟机ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 节点的虚拟机ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  节点的虚拟机名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 节点的虚拟机名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets isFrozen
    *  节点是否冻结：0：否。1：是。
    *
    * @return string
    */
    public function getIsFrozen()
    {
        return $this->container['isFrozen'];
    }

    /**
    * Sets isFrozen
    *
    * @param string $isFrozen 节点是否冻结：0：否。1：是。
    *
    * @return $this
    */
    public function setIsFrozen($isFrozen)
    {
        $this->container['isFrozen'] = $isFrozen;
        return $this;
    }

    /**
    * Gets components
    *  组件
    *
    * @return string|null
    */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
    * Sets components
    *
    * @param string|null $components 组件
    *
    * @return $this
    */
    public function setComponents($components)
    {
        $this->container['components'] = $components;
        return $this;
    }

    /**
    * Gets configStatus
    *  节点配置状态（查询集群列表时为null）： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败。
    *
    * @return string|null
    */
    public function getConfigStatus()
    {
        return $this->container['configStatus'];
    }

    /**
    * Sets configStatus
    *
    * @param string|null $configStatus 节点配置状态（查询集群列表时为null）： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败。
    *
    * @return $this
    */
    public function setConfigStatus($configStatus)
    {
        $this->container['configStatus'] = $configStatus;
        return $this;
    }

    /**
    * Gets role
    *  实例角色
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 实例角色
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets group
    *  分组
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group 分组
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets links
    *  链接信息（查询集群列表时返回值为null）
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\ClusterLinks[]|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ClusterLinks[]|null $links 链接信息（查询集群列表时返回值为null）
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets paramsGroupId
    *  组件分组id
    *
    * @return string|null
    */
    public function getParamsGroupId()
    {
        return $this->container['paramsGroupId'];
    }

    /**
    * Sets paramsGroupId
    *
    * @param string|null $paramsGroupId 组件分组id
    *
    * @return $this
    */
    public function setParamsGroupId($paramsGroupId)
    {
        $this->container['paramsGroupId'] = $paramsGroupId;
        return $this;
    }

    /**
    * Gets publicIp
    *  公网ip
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
    * @param string|null $publicIp 公网ip
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets manageIp
    *  管理ip
    *
    * @return string|null
    */
    public function getManageIp()
    {
        return $this->container['manageIp'];
    }

    /**
    * Sets manageIp
    *
    * @param string|null $manageIp 管理ip
    *
    * @return $this
    */
    public function setManageIp($manageIp)
    {
        $this->container['manageIp'] = $manageIp;
        return $this;
    }

    /**
    * Gets trafficIp
    *  流量ip
    *
    * @return string|null
    */
    public function getTrafficIp()
    {
        return $this->container['trafficIp'];
    }

    /**
    * Sets trafficIp
    *
    * @param string|null $trafficIp 流量ip
    *
    * @return $this
    */
    public function setTrafficIp($trafficIp)
    {
        $this->container['trafficIp'] = $trafficIp;
        return $this;
    }

    /**
    * Gets shardId
    *  分片id
    *
    * @return string|null
    */
    public function getShardId()
    {
        return $this->container['shardId'];
    }

    /**
    * Sets shardId
    *
    * @param string|null $shardId 分片id
    *
    * @return $this
    */
    public function setShardId($shardId)
    {
        $this->container['shardId'] = $shardId;
        return $this;
    }

    /**
    * Gets manageFixIp
    *  管理修复ip
    *
    * @return string|null
    */
    public function getManageFixIp()
    {
        return $this->container['manageFixIp'];
    }

    /**
    * Sets manageFixIp
    *
    * @param string|null $manageFixIp 管理修复ip
    *
    * @return $this
    */
    public function setManageFixIp($manageFixIp)
    {
        $this->container['manageFixIp'] = $manageFixIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  私有ip
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
    * @param string|null $privateIp 私有ip
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets internalIp
    *  内部ip
    *
    * @return string|null
    */
    public function getInternalIp()
    {
        return $this->container['internalIp'];
    }

    /**
    * Sets internalIp
    *
    * @param string|null $internalIp 内部ip
    *
    * @return $this
    */
    public function setInternalIp($internalIp)
    {
        $this->container['internalIp'] = $internalIp;
        return $this;
    }

    /**
    * Gets resource
    *  资源信息（查询集群列表时返回值为null）
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\Resource[]|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\Resource[]|null $resource 资源信息（查询集群列表时返回值为null）
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
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


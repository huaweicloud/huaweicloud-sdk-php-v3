<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configurationStatus  配置状态
    * paramsGroupId  参数组ID
    * type  类型
    * subnetId  子网ID
    * role  角色
    * internalSubnetId  内部子网ID
    * group  组
    * secureGroup  安全组
    * vpc  VPC
    * azcode  编码
    * region  区域
    * clusterId  集群ID
    * created  被创建的
    * updated  被更新的
    * status  状态
    * name  名称
    * links  连接
    * id  ID
    * flavor  flavor
    * volume  volume
    * datastore  datastore
    * fault  fault
    * configuration  configuration
    * locality  地点
    * replicas  备份
    * dbUser  数据库用户
    * storageEngine  存储引擎
    * payModel  付款方式
    * publicIp  公网IP
    * trafficIp  流量IP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configurationStatus' => 'string',
            'paramsGroupId' => 'string',
            'type' => 'string',
            'subnetId' => 'string',
            'role' => 'string',
            'internalSubnetId' => 'string',
            'group' => 'string',
            'secureGroup' => 'string',
            'vpc' => 'string',
            'azcode' => 'string',
            'region' => 'string',
            'clusterId' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'status' => 'string',
            'name' => 'string',
            'links' => '\HuaweiCloud\SDK\Dws\V2\Model\LinkResp[]',
            'id' => 'string',
            'flavor' => '\HuaweiCloud\SDK\Dws\V2\Model\ClusterFlavorResp',
            'volume' => '\HuaweiCloud\SDK\Dws\V2\Model\CompatibleInstanceVolumeResp',
            'datastore' => '\HuaweiCloud\SDK\Dws\V2\Model\CompatibleDataStoreResp',
            'fault' => '\HuaweiCloud\SDK\Dws\V2\Model\CompatibleFaultResp',
            'configuration' => '\HuaweiCloud\SDK\Dws\V2\Model\CompatibleConfigurationResp',
            'locality' => 'string',
            'replicas' => '\HuaweiCloud\SDK\Dws\V2\Model\CompatibleReplicasResp[]',
            'dbUser' => 'string',
            'storageEngine' => 'string',
            'payModel' => 'int',
            'publicIp' => 'string',
            'trafficIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configurationStatus  配置状态
    * paramsGroupId  参数组ID
    * type  类型
    * subnetId  子网ID
    * role  角色
    * internalSubnetId  内部子网ID
    * group  组
    * secureGroup  安全组
    * vpc  VPC
    * azcode  编码
    * region  区域
    * clusterId  集群ID
    * created  被创建的
    * updated  被更新的
    * status  状态
    * name  名称
    * links  连接
    * id  ID
    * flavor  flavor
    * volume  volume
    * datastore  datastore
    * fault  fault
    * configuration  configuration
    * locality  地点
    * replicas  备份
    * dbUser  数据库用户
    * storageEngine  存储引擎
    * payModel  付款方式
    * publicIp  公网IP
    * trafficIp  流量IP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configurationStatus' => null,
        'paramsGroupId' => null,
        'type' => null,
        'subnetId' => null,
        'role' => null,
        'internalSubnetId' => null,
        'group' => null,
        'secureGroup' => null,
        'vpc' => null,
        'azcode' => null,
        'region' => null,
        'clusterId' => null,
        'created' => null,
        'updated' => null,
        'status' => null,
        'name' => null,
        'links' => null,
        'id' => null,
        'flavor' => null,
        'volume' => null,
        'datastore' => null,
        'fault' => null,
        'configuration' => null,
        'locality' => null,
        'replicas' => null,
        'dbUser' => null,
        'storageEngine' => null,
        'payModel' => null,
        'publicIp' => null,
        'trafficIp' => null
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
    * configurationStatus  配置状态
    * paramsGroupId  参数组ID
    * type  类型
    * subnetId  子网ID
    * role  角色
    * internalSubnetId  内部子网ID
    * group  组
    * secureGroup  安全组
    * vpc  VPC
    * azcode  编码
    * region  区域
    * clusterId  集群ID
    * created  被创建的
    * updated  被更新的
    * status  状态
    * name  名称
    * links  连接
    * id  ID
    * flavor  flavor
    * volume  volume
    * datastore  datastore
    * fault  fault
    * configuration  configuration
    * locality  地点
    * replicas  备份
    * dbUser  数据库用户
    * storageEngine  存储引擎
    * payModel  付款方式
    * publicIp  公网IP
    * trafficIp  流量IP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configurationStatus' => 'configuration_status',
            'paramsGroupId' => 'params_group_id',
            'type' => 'type',
            'subnetId' => 'subnet_id',
            'role' => 'role',
            'internalSubnetId' => 'internal_subnet_id',
            'group' => 'group',
            'secureGroup' => 'secure_group',
            'vpc' => 'vpc',
            'azcode' => 'azcode',
            'region' => 'region',
            'clusterId' => 'cluster_id',
            'created' => 'created',
            'updated' => 'updated',
            'status' => 'status',
            'name' => 'name',
            'links' => 'links',
            'id' => 'id',
            'flavor' => 'flavor',
            'volume' => 'volume',
            'datastore' => 'datastore',
            'fault' => 'fault',
            'configuration' => 'configuration',
            'locality' => 'locality',
            'replicas' => 'replicas',
            'dbUser' => 'db_user',
            'storageEngine' => 'storage_engine',
            'payModel' => 'pay_model',
            'publicIp' => 'public_ip',
            'trafficIp' => 'traffic_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configurationStatus  配置状态
    * paramsGroupId  参数组ID
    * type  类型
    * subnetId  子网ID
    * role  角色
    * internalSubnetId  内部子网ID
    * group  组
    * secureGroup  安全组
    * vpc  VPC
    * azcode  编码
    * region  区域
    * clusterId  集群ID
    * created  被创建的
    * updated  被更新的
    * status  状态
    * name  名称
    * links  连接
    * id  ID
    * flavor  flavor
    * volume  volume
    * datastore  datastore
    * fault  fault
    * configuration  configuration
    * locality  地点
    * replicas  备份
    * dbUser  数据库用户
    * storageEngine  存储引擎
    * payModel  付款方式
    * publicIp  公网IP
    * trafficIp  流量IP
    *
    * @var string[]
    */
    protected static $setters = [
            'configurationStatus' => 'setConfigurationStatus',
            'paramsGroupId' => 'setParamsGroupId',
            'type' => 'setType',
            'subnetId' => 'setSubnetId',
            'role' => 'setRole',
            'internalSubnetId' => 'setInternalSubnetId',
            'group' => 'setGroup',
            'secureGroup' => 'setSecureGroup',
            'vpc' => 'setVpc',
            'azcode' => 'setAzcode',
            'region' => 'setRegion',
            'clusterId' => 'setClusterId',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'status' => 'setStatus',
            'name' => 'setName',
            'links' => 'setLinks',
            'id' => 'setId',
            'flavor' => 'setFlavor',
            'volume' => 'setVolume',
            'datastore' => 'setDatastore',
            'fault' => 'setFault',
            'configuration' => 'setConfiguration',
            'locality' => 'setLocality',
            'replicas' => 'setReplicas',
            'dbUser' => 'setDbUser',
            'storageEngine' => 'setStorageEngine',
            'payModel' => 'setPayModel',
            'publicIp' => 'setPublicIp',
            'trafficIp' => 'setTrafficIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configurationStatus  配置状态
    * paramsGroupId  参数组ID
    * type  类型
    * subnetId  子网ID
    * role  角色
    * internalSubnetId  内部子网ID
    * group  组
    * secureGroup  安全组
    * vpc  VPC
    * azcode  编码
    * region  区域
    * clusterId  集群ID
    * created  被创建的
    * updated  被更新的
    * status  状态
    * name  名称
    * links  连接
    * id  ID
    * flavor  flavor
    * volume  volume
    * datastore  datastore
    * fault  fault
    * configuration  configuration
    * locality  地点
    * replicas  备份
    * dbUser  数据库用户
    * storageEngine  存储引擎
    * payModel  付款方式
    * publicIp  公网IP
    * trafficIp  流量IP
    *
    * @var string[]
    */
    protected static $getters = [
            'configurationStatus' => 'getConfigurationStatus',
            'paramsGroupId' => 'getParamsGroupId',
            'type' => 'getType',
            'subnetId' => 'getSubnetId',
            'role' => 'getRole',
            'internalSubnetId' => 'getInternalSubnetId',
            'group' => 'getGroup',
            'secureGroup' => 'getSecureGroup',
            'vpc' => 'getVpc',
            'azcode' => 'getAzcode',
            'region' => 'getRegion',
            'clusterId' => 'getClusterId',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'status' => 'getStatus',
            'name' => 'getName',
            'links' => 'getLinks',
            'id' => 'getId',
            'flavor' => 'getFlavor',
            'volume' => 'getVolume',
            'datastore' => 'getDatastore',
            'fault' => 'getFault',
            'configuration' => 'getConfiguration',
            'locality' => 'getLocality',
            'replicas' => 'getReplicas',
            'dbUser' => 'getDbUser',
            'storageEngine' => 'getStorageEngine',
            'payModel' => 'getPayModel',
            'publicIp' => 'getPublicIp',
            'trafficIp' => 'getTrafficIp'
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
        $this->container['configurationStatus'] = isset($data['configurationStatus']) ? $data['configurationStatus'] : null;
        $this->container['paramsGroupId'] = isset($data['paramsGroupId']) ? $data['paramsGroupId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['internalSubnetId'] = isset($data['internalSubnetId']) ? $data['internalSubnetId'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['secureGroup'] = isset($data['secureGroup']) ? $data['secureGroup'] : null;
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['azcode'] = isset($data['azcode']) ? $data['azcode'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['fault'] = isset($data['fault']) ? $data['fault'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['replicas'] = isset($data['replicas']) ? $data['replicas'] : null;
        $this->container['dbUser'] = isset($data['dbUser']) ? $data['dbUser'] : null;
        $this->container['storageEngine'] = isset($data['storageEngine']) ? $data['storageEngine'] : null;
        $this->container['payModel'] = isset($data['payModel']) ? $data['payModel'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['trafficIp'] = isset($data['trafficIp']) ? $data['trafficIp'] : null;
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
    * Gets configurationStatus
    *  配置状态
    *
    * @return string|null
    */
    public function getConfigurationStatus()
    {
        return $this->container['configurationStatus'];
    }

    /**
    * Sets configurationStatus
    *
    * @param string|null $configurationStatus 配置状态
    *
    * @return $this
    */
    public function setConfigurationStatus($configurationStatus)
    {
        $this->container['configurationStatus'] = $configurationStatus;
        return $this;
    }

    /**
    * Gets paramsGroupId
    *  参数组ID
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
    * @param string|null $paramsGroupId 参数组ID
    *
    * @return $this
    */
    public function setParamsGroupId($paramsGroupId)
    {
        $this->container['paramsGroupId'] = $paramsGroupId;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网ID
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 子网ID
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets role
    *  角色
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
    * @param string|null $role 角色
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets internalSubnetId
    *  内部子网ID
    *
    * @return string|null
    */
    public function getInternalSubnetId()
    {
        return $this->container['internalSubnetId'];
    }

    /**
    * Sets internalSubnetId
    *
    * @param string|null $internalSubnetId 内部子网ID
    *
    * @return $this
    */
    public function setInternalSubnetId($internalSubnetId)
    {
        $this->container['internalSubnetId'] = $internalSubnetId;
        return $this;
    }

    /**
    * Gets group
    *  组
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
    * @param string|null $group 组
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets secureGroup
    *  安全组
    *
    * @return string|null
    */
    public function getSecureGroup()
    {
        return $this->container['secureGroup'];
    }

    /**
    * Sets secureGroup
    *
    * @param string|null $secureGroup 安全组
    *
    * @return $this
    */
    public function setSecureGroup($secureGroup)
    {
        $this->container['secureGroup'] = $secureGroup;
        return $this;
    }

    /**
    * Gets vpc
    *  VPC
    *
    * @return string|null
    */
    public function getVpc()
    {
        return $this->container['vpc'];
    }

    /**
    * Sets vpc
    *
    * @param string|null $vpc VPC
    *
    * @return $this
    */
    public function setVpc($vpc)
    {
        $this->container['vpc'] = $vpc;
        return $this;
    }

    /**
    * Gets azcode
    *  编码
    *
    * @return string|null
    */
    public function getAzcode()
    {
        return $this->container['azcode'];
    }

    /**
    * Sets azcode
    *
    * @param string|null $azcode 编码
    *
    * @return $this
    */
    public function setAzcode($azcode)
    {
        $this->container['azcode'] = $azcode;
        return $this;
    }

    /**
    * Gets region
    *  区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID
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
    * @param string|null $clusterId 集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets created
    *  被创建的
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 被创建的
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  被更新的
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 被更新的
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets links
    *  连接
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\LinkResp[]|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\LinkResp[]|null $links 连接
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets id
    *  ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets flavor
    *  flavor
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ClusterFlavorResp|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ClusterFlavorResp|null $flavor flavor
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
    * @return \HuaweiCloud\SDK\Dws\V2\Model\CompatibleInstanceVolumeResp|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\CompatibleInstanceVolumeResp|null $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\CompatibleDataStoreResp|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\CompatibleDataStoreResp|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets fault
    *  fault
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\CompatibleFaultResp|null
    */
    public function getFault()
    {
        return $this->container['fault'];
    }

    /**
    * Sets fault
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\CompatibleFaultResp|null $fault fault
    *
    * @return $this
    */
    public function setFault($fault)
    {
        $this->container['fault'] = $fault;
        return $this;
    }

    /**
    * Gets configuration
    *  configuration
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\CompatibleConfigurationResp|null
    */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
    * Sets configuration
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\CompatibleConfigurationResp|null $configuration configuration
    *
    * @return $this
    */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;
        return $this;
    }

    /**
    * Gets locality
    *  地点
    *
    * @return string|null
    */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
    * Sets locality
    *
    * @param string|null $locality 地点
    *
    * @return $this
    */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;
        return $this;
    }

    /**
    * Gets replicas
    *  备份
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\CompatibleReplicasResp[]|null
    */
    public function getReplicas()
    {
        return $this->container['replicas'];
    }

    /**
    * Sets replicas
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\CompatibleReplicasResp[]|null $replicas 备份
    *
    * @return $this
    */
    public function setReplicas($replicas)
    {
        $this->container['replicas'] = $replicas;
        return $this;
    }

    /**
    * Gets dbUser
    *  数据库用户
    *
    * @return string|null
    */
    public function getDbUser()
    {
        return $this->container['dbUser'];
    }

    /**
    * Sets dbUser
    *
    * @param string|null $dbUser 数据库用户
    *
    * @return $this
    */
    public function setDbUser($dbUser)
    {
        $this->container['dbUser'] = $dbUser;
        return $this;
    }

    /**
    * Gets storageEngine
    *  存储引擎
    *
    * @return string|null
    */
    public function getStorageEngine()
    {
        return $this->container['storageEngine'];
    }

    /**
    * Sets storageEngine
    *
    * @param string|null $storageEngine 存储引擎
    *
    * @return $this
    */
    public function setStorageEngine($storageEngine)
    {
        $this->container['storageEngine'] = $storageEngine;
        return $this;
    }

    /**
    * Gets payModel
    *  付款方式
    *
    * @return int|null
    */
    public function getPayModel()
    {
        return $this->container['payModel'];
    }

    /**
    * Sets payModel
    *
    * @param int|null $payModel 付款方式
    *
    * @return $this
    */
    public function setPayModel($payModel)
    {
        $this->container['payModel'] = $payModel;
        return $this;
    }

    /**
    * Gets publicIp
    *  公网IP
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
    * @param string|null $publicIp 公网IP
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets trafficIp
    *  流量IP
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
    * @param string|null $trafficIp 流量IP
    *
    * @return $this
    */
    public function setTrafficIp($trafficIp)
    {
        $this->container['trafficIp'] = $trafficIp;
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


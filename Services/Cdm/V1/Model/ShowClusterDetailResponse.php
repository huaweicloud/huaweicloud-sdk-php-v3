<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicEndpoint  集群绑定的EIP
    * instances  集群的节点信息，请参见instances参数说明
    * securityGroupId  安全组id
    * subnetId  子网id
    * vpcId  虚拟私有云ID
    * customerConfig  customerConfig
    * datastore  datastore
    * isAutoOff  自动关机
    * publicEndpointDomainName  集群绑定的EIP域名
    * bakExpectedStartTime  开始时间
    * bakKeepDay  保留时间
    * maintainWindow  maintainWindow
    * recentEvent  事件数
    * flavorName  规格名称
    * azName  az名称
    * endpointDomainName  对端域名
    * publicEndpointStatus  publicEndpointStatus
    * isScheduleBootOff  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    * namespace  命名空间
    * eipId  弹性ip id
    * failedReasons  failedReasons
    * dbuser  数据库用户
    * links  links
    * clusterMode  集群模式：sharding(分片集群)
    * task  task
    * created  集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * statusDetail  集群状态描述：Normal（正常）
    * configStatus  集群配置状态： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败
    * actionProgress  actionProgress
    * name  集群名称
    * id  集群ID
    * isFrozen  集群是否冻结：0：否1：是
    * actions  集群配置状态：In-Sync：配置已同步。Applying：配置中。Sync-Failure：配置失败
    * updated  集群更新时间，格式为 ISO8601：YYYY-MM-DDThh:mm:ssZ
    * status  集群状态： - 100：创建中 - 200：正常 - 300：失败 - 303：创建失败 - 800：冻结 - 900：已关机 - 910：正在关机 - 920：正在开机
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicEndpoint' => 'string',
            'instances' => '\HuaweiCloud\SDK\Cdm\V1\Model\ClusterDetailInstance[]',
            'securityGroupId' => 'string',
            'subnetId' => 'string',
            'vpcId' => 'string',
            'customerConfig' => '\HuaweiCloud\SDK\Cdm\V1\Model\CustomerConfig',
            'datastore' => '\HuaweiCloud\SDK\Cdm\V1\Model\Datastore',
            'isAutoOff' => 'bool',
            'publicEndpointDomainName' => 'string',
            'bakExpectedStartTime' => 'string',
            'bakKeepDay' => 'int',
            'maintainWindow' => '\HuaweiCloud\SDK\Cdm\V1\Model\CdmQueryClusterDetailsRepsonseMaintainWindow',
            'recentEvent' => 'int',
            'flavorName' => 'string',
            'azName' => 'string',
            'endpointDomainName' => 'string',
            'publicEndpointStatus' => '\HuaweiCloud\SDK\Cdm\V1\Model\CdmQueryClusterDetailsRepsonsePublicEndpointStatus',
            'isScheduleBootOff' => 'bool',
            'namespace' => 'string',
            'eipId' => 'string',
            'failedReasons' => '\HuaweiCloud\SDK\Cdm\V1\Model\FailedReasons',
            'dbuser' => 'string',
            'links' => '\HuaweiCloud\SDK\Cdm\V1\Model\ClusterLinks[]',
            'clusterMode' => 'string',
            'task' => '\HuaweiCloud\SDK\Cdm\V1\Model\ClusterTask',
            'created' => 'string',
            'statusDetail' => 'string',
            'configStatus' => 'string',
            'actionProgress' => '\HuaweiCloud\SDK\Cdm\V1\Model\ActionProgress',
            'name' => 'string',
            'id' => 'string',
            'isFrozen' => 'string',
            'actions' => 'string[]',
            'updated' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicEndpoint  集群绑定的EIP
    * instances  集群的节点信息，请参见instances参数说明
    * securityGroupId  安全组id
    * subnetId  子网id
    * vpcId  虚拟私有云ID
    * customerConfig  customerConfig
    * datastore  datastore
    * isAutoOff  自动关机
    * publicEndpointDomainName  集群绑定的EIP域名
    * bakExpectedStartTime  开始时间
    * bakKeepDay  保留时间
    * maintainWindow  maintainWindow
    * recentEvent  事件数
    * flavorName  规格名称
    * azName  az名称
    * endpointDomainName  对端域名
    * publicEndpointStatus  publicEndpointStatus
    * isScheduleBootOff  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    * namespace  命名空间
    * eipId  弹性ip id
    * failedReasons  failedReasons
    * dbuser  数据库用户
    * links  links
    * clusterMode  集群模式：sharding(分片集群)
    * task  task
    * created  集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * statusDetail  集群状态描述：Normal（正常）
    * configStatus  集群配置状态： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败
    * actionProgress  actionProgress
    * name  集群名称
    * id  集群ID
    * isFrozen  集群是否冻结：0：否1：是
    * actions  集群配置状态：In-Sync：配置已同步。Applying：配置中。Sync-Failure：配置失败
    * updated  集群更新时间，格式为 ISO8601：YYYY-MM-DDThh:mm:ssZ
    * status  集群状态： - 100：创建中 - 200：正常 - 300：失败 - 303：创建失败 - 800：冻结 - 900：已关机 - 910：正在关机 - 920：正在开机
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicEndpoint' => null,
        'instances' => null,
        'securityGroupId' => null,
        'subnetId' => null,
        'vpcId' => null,
        'customerConfig' => null,
        'datastore' => null,
        'isAutoOff' => null,
        'publicEndpointDomainName' => null,
        'bakExpectedStartTime' => null,
        'bakKeepDay' => 'int32',
        'maintainWindow' => null,
        'recentEvent' => 'int32',
        'flavorName' => null,
        'azName' => null,
        'endpointDomainName' => null,
        'publicEndpointStatus' => null,
        'isScheduleBootOff' => null,
        'namespace' => null,
        'eipId' => null,
        'failedReasons' => null,
        'dbuser' => null,
        'links' => null,
        'clusterMode' => null,
        'task' => null,
        'created' => null,
        'statusDetail' => null,
        'configStatus' => null,
        'actionProgress' => null,
        'name' => null,
        'id' => null,
        'isFrozen' => null,
        'actions' => null,
        'updated' => null,
        'status' => null
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
    * publicEndpoint  集群绑定的EIP
    * instances  集群的节点信息，请参见instances参数说明
    * securityGroupId  安全组id
    * subnetId  子网id
    * vpcId  虚拟私有云ID
    * customerConfig  customerConfig
    * datastore  datastore
    * isAutoOff  自动关机
    * publicEndpointDomainName  集群绑定的EIP域名
    * bakExpectedStartTime  开始时间
    * bakKeepDay  保留时间
    * maintainWindow  maintainWindow
    * recentEvent  事件数
    * flavorName  规格名称
    * azName  az名称
    * endpointDomainName  对端域名
    * publicEndpointStatus  publicEndpointStatus
    * isScheduleBootOff  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    * namespace  命名空间
    * eipId  弹性ip id
    * failedReasons  failedReasons
    * dbuser  数据库用户
    * links  links
    * clusterMode  集群模式：sharding(分片集群)
    * task  task
    * created  集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * statusDetail  集群状态描述：Normal（正常）
    * configStatus  集群配置状态： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败
    * actionProgress  actionProgress
    * name  集群名称
    * id  集群ID
    * isFrozen  集群是否冻结：0：否1：是
    * actions  集群配置状态：In-Sync：配置已同步。Applying：配置中。Sync-Failure：配置失败
    * updated  集群更新时间，格式为 ISO8601：YYYY-MM-DDThh:mm:ssZ
    * status  集群状态： - 100：创建中 - 200：正常 - 300：失败 - 303：创建失败 - 800：冻结 - 900：已关机 - 910：正在关机 - 920：正在开机
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicEndpoint' => 'publicEndpoint',
            'instances' => 'instances',
            'securityGroupId' => 'security_group_id',
            'subnetId' => 'subnet_id',
            'vpcId' => 'vpc_id',
            'customerConfig' => 'customerConfig',
            'datastore' => 'datastore',
            'isAutoOff' => 'isAutoOff',
            'publicEndpointDomainName' => 'publicEndpointDomainName',
            'bakExpectedStartTime' => 'bakExpectedStartTime',
            'bakKeepDay' => 'bakKeepDay',
            'maintainWindow' => 'maintainWindow',
            'recentEvent' => 'recentEvent',
            'flavorName' => 'flavorName',
            'azName' => 'azName',
            'endpointDomainName' => 'endpointDomainName',
            'publicEndpointStatus' => 'publicEndpointStatus',
            'isScheduleBootOff' => 'isScheduleBootOff',
            'namespace' => 'namespace',
            'eipId' => 'eipId',
            'failedReasons' => 'failedReasons',
            'dbuser' => 'dbuser',
            'links' => 'links',
            'clusterMode' => 'clusterMode',
            'task' => 'task',
            'created' => 'created',
            'statusDetail' => 'statusDetail',
            'configStatus' => 'config_status',
            'actionProgress' => 'actionProgress',
            'name' => 'name',
            'id' => 'id',
            'isFrozen' => 'isFrozen',
            'actions' => 'actions',
            'updated' => 'updated',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicEndpoint  集群绑定的EIP
    * instances  集群的节点信息，请参见instances参数说明
    * securityGroupId  安全组id
    * subnetId  子网id
    * vpcId  虚拟私有云ID
    * customerConfig  customerConfig
    * datastore  datastore
    * isAutoOff  自动关机
    * publicEndpointDomainName  集群绑定的EIP域名
    * bakExpectedStartTime  开始时间
    * bakKeepDay  保留时间
    * maintainWindow  maintainWindow
    * recentEvent  事件数
    * flavorName  规格名称
    * azName  az名称
    * endpointDomainName  对端域名
    * publicEndpointStatus  publicEndpointStatus
    * isScheduleBootOff  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    * namespace  命名空间
    * eipId  弹性ip id
    * failedReasons  failedReasons
    * dbuser  数据库用户
    * links  links
    * clusterMode  集群模式：sharding(分片集群)
    * task  task
    * created  集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * statusDetail  集群状态描述：Normal（正常）
    * configStatus  集群配置状态： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败
    * actionProgress  actionProgress
    * name  集群名称
    * id  集群ID
    * isFrozen  集群是否冻结：0：否1：是
    * actions  集群配置状态：In-Sync：配置已同步。Applying：配置中。Sync-Failure：配置失败
    * updated  集群更新时间，格式为 ISO8601：YYYY-MM-DDThh:mm:ssZ
    * status  集群状态： - 100：创建中 - 200：正常 - 300：失败 - 303：创建失败 - 800：冻结 - 900：已关机 - 910：正在关机 - 920：正在开机
    *
    * @var string[]
    */
    protected static $setters = [
            'publicEndpoint' => 'setPublicEndpoint',
            'instances' => 'setInstances',
            'securityGroupId' => 'setSecurityGroupId',
            'subnetId' => 'setSubnetId',
            'vpcId' => 'setVpcId',
            'customerConfig' => 'setCustomerConfig',
            'datastore' => 'setDatastore',
            'isAutoOff' => 'setIsAutoOff',
            'publicEndpointDomainName' => 'setPublicEndpointDomainName',
            'bakExpectedStartTime' => 'setBakExpectedStartTime',
            'bakKeepDay' => 'setBakKeepDay',
            'maintainWindow' => 'setMaintainWindow',
            'recentEvent' => 'setRecentEvent',
            'flavorName' => 'setFlavorName',
            'azName' => 'setAzName',
            'endpointDomainName' => 'setEndpointDomainName',
            'publicEndpointStatus' => 'setPublicEndpointStatus',
            'isScheduleBootOff' => 'setIsScheduleBootOff',
            'namespace' => 'setNamespace',
            'eipId' => 'setEipId',
            'failedReasons' => 'setFailedReasons',
            'dbuser' => 'setDbuser',
            'links' => 'setLinks',
            'clusterMode' => 'setClusterMode',
            'task' => 'setTask',
            'created' => 'setCreated',
            'statusDetail' => 'setStatusDetail',
            'configStatus' => 'setConfigStatus',
            'actionProgress' => 'setActionProgress',
            'name' => 'setName',
            'id' => 'setId',
            'isFrozen' => 'setIsFrozen',
            'actions' => 'setActions',
            'updated' => 'setUpdated',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicEndpoint  集群绑定的EIP
    * instances  集群的节点信息，请参见instances参数说明
    * securityGroupId  安全组id
    * subnetId  子网id
    * vpcId  虚拟私有云ID
    * customerConfig  customerConfig
    * datastore  datastore
    * isAutoOff  自动关机
    * publicEndpointDomainName  集群绑定的EIP域名
    * bakExpectedStartTime  开始时间
    * bakKeepDay  保留时间
    * maintainWindow  maintainWindow
    * recentEvent  事件数
    * flavorName  规格名称
    * azName  az名称
    * endpointDomainName  对端域名
    * publicEndpointStatus  publicEndpointStatus
    * isScheduleBootOff  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    * namespace  命名空间
    * eipId  弹性ip id
    * failedReasons  failedReasons
    * dbuser  数据库用户
    * links  links
    * clusterMode  集群模式：sharding(分片集群)
    * task  task
    * created  集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * statusDetail  集群状态描述：Normal（正常）
    * configStatus  集群配置状态： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败
    * actionProgress  actionProgress
    * name  集群名称
    * id  集群ID
    * isFrozen  集群是否冻结：0：否1：是
    * actions  集群配置状态：In-Sync：配置已同步。Applying：配置中。Sync-Failure：配置失败
    * updated  集群更新时间，格式为 ISO8601：YYYY-MM-DDThh:mm:ssZ
    * status  集群状态： - 100：创建中 - 200：正常 - 300：失败 - 303：创建失败 - 800：冻结 - 900：已关机 - 910：正在关机 - 920：正在开机
    *
    * @var string[]
    */
    protected static $getters = [
            'publicEndpoint' => 'getPublicEndpoint',
            'instances' => 'getInstances',
            'securityGroupId' => 'getSecurityGroupId',
            'subnetId' => 'getSubnetId',
            'vpcId' => 'getVpcId',
            'customerConfig' => 'getCustomerConfig',
            'datastore' => 'getDatastore',
            'isAutoOff' => 'getIsAutoOff',
            'publicEndpointDomainName' => 'getPublicEndpointDomainName',
            'bakExpectedStartTime' => 'getBakExpectedStartTime',
            'bakKeepDay' => 'getBakKeepDay',
            'maintainWindow' => 'getMaintainWindow',
            'recentEvent' => 'getRecentEvent',
            'flavorName' => 'getFlavorName',
            'azName' => 'getAzName',
            'endpointDomainName' => 'getEndpointDomainName',
            'publicEndpointStatus' => 'getPublicEndpointStatus',
            'isScheduleBootOff' => 'getIsScheduleBootOff',
            'namespace' => 'getNamespace',
            'eipId' => 'getEipId',
            'failedReasons' => 'getFailedReasons',
            'dbuser' => 'getDbuser',
            'links' => 'getLinks',
            'clusterMode' => 'getClusterMode',
            'task' => 'getTask',
            'created' => 'getCreated',
            'statusDetail' => 'getStatusDetail',
            'configStatus' => 'getConfigStatus',
            'actionProgress' => 'getActionProgress',
            'name' => 'getName',
            'id' => 'getId',
            'isFrozen' => 'getIsFrozen',
            'actions' => 'getActions',
            'updated' => 'getUpdated',
            'status' => 'getStatus'
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
        $this->container['publicEndpoint'] = isset($data['publicEndpoint']) ? $data['publicEndpoint'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['customerConfig'] = isset($data['customerConfig']) ? $data['customerConfig'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['isAutoOff'] = isset($data['isAutoOff']) ? $data['isAutoOff'] : null;
        $this->container['publicEndpointDomainName'] = isset($data['publicEndpointDomainName']) ? $data['publicEndpointDomainName'] : null;
        $this->container['bakExpectedStartTime'] = isset($data['bakExpectedStartTime']) ? $data['bakExpectedStartTime'] : null;
        $this->container['bakKeepDay'] = isset($data['bakKeepDay']) ? $data['bakKeepDay'] : null;
        $this->container['maintainWindow'] = isset($data['maintainWindow']) ? $data['maintainWindow'] : null;
        $this->container['recentEvent'] = isset($data['recentEvent']) ? $data['recentEvent'] : null;
        $this->container['flavorName'] = isset($data['flavorName']) ? $data['flavorName'] : null;
        $this->container['azName'] = isset($data['azName']) ? $data['azName'] : null;
        $this->container['endpointDomainName'] = isset($data['endpointDomainName']) ? $data['endpointDomainName'] : null;
        $this->container['publicEndpointStatus'] = isset($data['publicEndpointStatus']) ? $data['publicEndpointStatus'] : null;
        $this->container['isScheduleBootOff'] = isset($data['isScheduleBootOff']) ? $data['isScheduleBootOff'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['eipId'] = isset($data['eipId']) ? $data['eipId'] : null;
        $this->container['failedReasons'] = isset($data['failedReasons']) ? $data['failedReasons'] : null;
        $this->container['dbuser'] = isset($data['dbuser']) ? $data['dbuser'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['clusterMode'] = isset($data['clusterMode']) ? $data['clusterMode'] : null;
        $this->container['task'] = isset($data['task']) ? $data['task'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['statusDetail'] = isset($data['statusDetail']) ? $data['statusDetail'] : null;
        $this->container['configStatus'] = isset($data['configStatus']) ? $data['configStatus'] : null;
        $this->container['actionProgress'] = isset($data['actionProgress']) ? $data['actionProgress'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isFrozen'] = isset($data['isFrozen']) ? $data['isFrozen'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets publicEndpoint
    *  集群绑定的EIP
    *
    * @return string|null
    */
    public function getPublicEndpoint()
    {
        return $this->container['publicEndpoint'];
    }

    /**
    * Sets publicEndpoint
    *
    * @param string|null $publicEndpoint 集群绑定的EIP
    *
    * @return $this
    */
    public function setPublicEndpoint($publicEndpoint)
    {
        $this->container['publicEndpoint'] = $publicEndpoint;
        return $this;
    }

    /**
    * Gets instances
    *  集群的节点信息，请参见instances参数说明
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\ClusterDetailInstance[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ClusterDetailInstance[]|null $instances 集群的节点信息，请参见instances参数说明
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组id
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 安全组id
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网id
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
    * @param string|null $subnetId 子网id
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID
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
    * @param string|null $vpcId 虚拟私有云ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets customerConfig
    *  customerConfig
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\CustomerConfig|null
    */
    public function getCustomerConfig()
    {
        return $this->container['customerConfig'];
    }

    /**
    * Sets customerConfig
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\CustomerConfig|null $customerConfig customerConfig
    *
    * @return $this
    */
    public function setCustomerConfig($customerConfig)
    {
        $this->container['customerConfig'] = $customerConfig;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\Datastore|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\Datastore|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets isAutoOff
    *  自动关机
    *
    * @return bool|null
    */
    public function getIsAutoOff()
    {
        return $this->container['isAutoOff'];
    }

    /**
    * Sets isAutoOff
    *
    * @param bool|null $isAutoOff 自动关机
    *
    * @return $this
    */
    public function setIsAutoOff($isAutoOff)
    {
        $this->container['isAutoOff'] = $isAutoOff;
        return $this;
    }

    /**
    * Gets publicEndpointDomainName
    *  集群绑定的EIP域名
    *
    * @return string|null
    */
    public function getPublicEndpointDomainName()
    {
        return $this->container['publicEndpointDomainName'];
    }

    /**
    * Sets publicEndpointDomainName
    *
    * @param string|null $publicEndpointDomainName 集群绑定的EIP域名
    *
    * @return $this
    */
    public function setPublicEndpointDomainName($publicEndpointDomainName)
    {
        $this->container['publicEndpointDomainName'] = $publicEndpointDomainName;
        return $this;
    }

    /**
    * Gets bakExpectedStartTime
    *  开始时间
    *
    * @return string|null
    */
    public function getBakExpectedStartTime()
    {
        return $this->container['bakExpectedStartTime'];
    }

    /**
    * Sets bakExpectedStartTime
    *
    * @param string|null $bakExpectedStartTime 开始时间
    *
    * @return $this
    */
    public function setBakExpectedStartTime($bakExpectedStartTime)
    {
        $this->container['bakExpectedStartTime'] = $bakExpectedStartTime;
        return $this;
    }

    /**
    * Gets bakKeepDay
    *  保留时间
    *
    * @return int|null
    */
    public function getBakKeepDay()
    {
        return $this->container['bakKeepDay'];
    }

    /**
    * Sets bakKeepDay
    *
    * @param int|null $bakKeepDay 保留时间
    *
    * @return $this
    */
    public function setBakKeepDay($bakKeepDay)
    {
        $this->container['bakKeepDay'] = $bakKeepDay;
        return $this;
    }

    /**
    * Gets maintainWindow
    *  maintainWindow
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\CdmQueryClusterDetailsRepsonseMaintainWindow|null
    */
    public function getMaintainWindow()
    {
        return $this->container['maintainWindow'];
    }

    /**
    * Sets maintainWindow
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\CdmQueryClusterDetailsRepsonseMaintainWindow|null $maintainWindow maintainWindow
    *
    * @return $this
    */
    public function setMaintainWindow($maintainWindow)
    {
        $this->container['maintainWindow'] = $maintainWindow;
        return $this;
    }

    /**
    * Gets recentEvent
    *  事件数
    *
    * @return int|null
    */
    public function getRecentEvent()
    {
        return $this->container['recentEvent'];
    }

    /**
    * Sets recentEvent
    *
    * @param int|null $recentEvent 事件数
    *
    * @return $this
    */
    public function setRecentEvent($recentEvent)
    {
        $this->container['recentEvent'] = $recentEvent;
        return $this;
    }

    /**
    * Gets flavorName
    *  规格名称
    *
    * @return string|null
    */
    public function getFlavorName()
    {
        return $this->container['flavorName'];
    }

    /**
    * Sets flavorName
    *
    * @param string|null $flavorName 规格名称
    *
    * @return $this
    */
    public function setFlavorName($flavorName)
    {
        $this->container['flavorName'] = $flavorName;
        return $this;
    }

    /**
    * Gets azName
    *  az名称
    *
    * @return string|null
    */
    public function getAzName()
    {
        return $this->container['azName'];
    }

    /**
    * Sets azName
    *
    * @param string|null $azName az名称
    *
    * @return $this
    */
    public function setAzName($azName)
    {
        $this->container['azName'] = $azName;
        return $this;
    }

    /**
    * Gets endpointDomainName
    *  对端域名
    *
    * @return string|null
    */
    public function getEndpointDomainName()
    {
        return $this->container['endpointDomainName'];
    }

    /**
    * Sets endpointDomainName
    *
    * @param string|null $endpointDomainName 对端域名
    *
    * @return $this
    */
    public function setEndpointDomainName($endpointDomainName)
    {
        $this->container['endpointDomainName'] = $endpointDomainName;
        return $this;
    }

    /**
    * Gets publicEndpointStatus
    *  publicEndpointStatus
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\CdmQueryClusterDetailsRepsonsePublicEndpointStatus|null
    */
    public function getPublicEndpointStatus()
    {
        return $this->container['publicEndpointStatus'];
    }

    /**
    * Sets publicEndpointStatus
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\CdmQueryClusterDetailsRepsonsePublicEndpointStatus|null $publicEndpointStatus publicEndpointStatus
    *
    * @return $this
    */
    public function setPublicEndpointStatus($publicEndpointStatus)
    {
        $this->container['publicEndpointStatus'] = $publicEndpointStatus;
        return $this;
    }

    /**
    * Gets isScheduleBootOff
    *  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    *
    * @return bool|null
    */
    public function getIsScheduleBootOff()
    {
        return $this->container['isScheduleBootOff'];
    }

    /**
    * Sets isScheduleBootOff
    *
    * @param bool|null $isScheduleBootOff 选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    *
    * @return $this
    */
    public function setIsScheduleBootOff($isScheduleBootOff)
    {
        $this->container['isScheduleBootOff'] = $isScheduleBootOff;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets eipId
    *  弹性ip id
    *
    * @return string|null
    */
    public function getEipId()
    {
        return $this->container['eipId'];
    }

    /**
    * Sets eipId
    *
    * @param string|null $eipId 弹性ip id
    *
    * @return $this
    */
    public function setEipId($eipId)
    {
        $this->container['eipId'] = $eipId;
        return $this;
    }

    /**
    * Gets failedReasons
    *  failedReasons
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\FailedReasons|null
    */
    public function getFailedReasons()
    {
        return $this->container['failedReasons'];
    }

    /**
    * Sets failedReasons
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\FailedReasons|null $failedReasons failedReasons
    *
    * @return $this
    */
    public function setFailedReasons($failedReasons)
    {
        $this->container['failedReasons'] = $failedReasons;
        return $this;
    }

    /**
    * Gets dbuser
    *  数据库用户
    *
    * @return string|null
    */
    public function getDbuser()
    {
        return $this->container['dbuser'];
    }

    /**
    * Sets dbuser
    *
    * @param string|null $dbuser 数据库用户
    *
    * @return $this
    */
    public function setDbuser($dbuser)
    {
        $this->container['dbuser'] = $dbuser;
        return $this;
    }

    /**
    * Gets links
    *  links
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
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ClusterLinks[]|null $links links
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets clusterMode
    *  集群模式：sharding(分片集群)
    *
    * @return string|null
    */
    public function getClusterMode()
    {
        return $this->container['clusterMode'];
    }

    /**
    * Sets clusterMode
    *
    * @param string|null $clusterMode 集群模式：sharding(分片集群)
    *
    * @return $this
    */
    public function setClusterMode($clusterMode)
    {
        $this->container['clusterMode'] = $clusterMode;
        return $this;
    }

    /**
    * Gets task
    *  task
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\ClusterTask|null
    */
    public function getTask()
    {
        return $this->container['task'];
    }

    /**
    * Sets task
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ClusterTask|null $task task
    *
    * @return $this
    */
    public function setTask($task)
    {
        $this->container['task'] = $task;
        return $this;
    }

    /**
    * Gets created
    *  集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
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
    * @param string|null $created 集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets statusDetail
    *  集群状态描述：Normal（正常）
    *
    * @return string|null
    */
    public function getStatusDetail()
    {
        return $this->container['statusDetail'];
    }

    /**
    * Sets statusDetail
    *
    * @param string|null $statusDetail 集群状态描述：Normal（正常）
    *
    * @return $this
    */
    public function setStatusDetail($statusDetail)
    {
        $this->container['statusDetail'] = $statusDetail;
        return $this;
    }

    /**
    * Gets configStatus
    *  集群配置状态： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败
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
    * @param string|null $configStatus 集群配置状态： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败
    *
    * @return $this
    */
    public function setConfigStatus($configStatus)
    {
        $this->container['configStatus'] = $configStatus;
        return $this;
    }

    /**
    * Gets actionProgress
    *  actionProgress
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\ActionProgress|null
    */
    public function getActionProgress()
    {
        return $this->container['actionProgress'];
    }

    /**
    * Sets actionProgress
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ActionProgress|null $actionProgress actionProgress
    *
    * @return $this
    */
    public function setActionProgress($actionProgress)
    {
        $this->container['actionProgress'] = $actionProgress;
        return $this;
    }

    /**
    * Gets name
    *  集群名称
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
    * @param string|null $name 集群名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  集群ID
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
    * @param string|null $id 集群ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isFrozen
    *  集群是否冻结：0：否1：是
    *
    * @return string|null
    */
    public function getIsFrozen()
    {
        return $this->container['isFrozen'];
    }

    /**
    * Sets isFrozen
    *
    * @param string|null $isFrozen 集群是否冻结：0：否1：是
    *
    * @return $this
    */
    public function setIsFrozen($isFrozen)
    {
        $this->container['isFrozen'] = $isFrozen;
        return $this;
    }

    /**
    * Gets actions
    *  集群配置状态：In-Sync：配置已同步。Applying：配置中。Sync-Failure：配置失败
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
    * @param string[]|null $actions 集群配置状态：In-Sync：配置已同步。Applying：配置中。Sync-Failure：配置失败
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets updated
    *  集群更新时间，格式为 ISO8601：YYYY-MM-DDThh:mm:ssZ
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
    * @param string|null $updated 集群更新时间，格式为 ISO8601：YYYY-MM-DDThh:mm:ssZ
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
    *  集群状态： - 100：创建中 - 200：正常 - 300：失败 - 303：创建失败 - 800：冻结 - 900：已关机 - 910：正在关机 - 920：正在开机
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
    * @param string|null $status 集群状态： - 100：创建中 - 200：正常 - 300：失败 - 303：创建失败 - 800：冻结 - 900：已关机 - 910：正在关机 - 920：正在开机
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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


<?php

namespace HuaweiCloud\SDK\CloudTable\V2\Model;

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
    * actions  集群当前状态列表： - 创建中 - 扩容中 - 重启中 - 开启opentsdb - 扩容失败 - 重启失败 - 开启opentsdb失败
    * datastore  datastore
    * enableOpenTsdb  是否打开openTSDB特性。 - false：不开启 - true：开启
    * enableLemon  是否打开SQL查询特性。 - false：不开启 - true：开启
    * clusterName  集群名称。
    * cuNum  RegionServer个数。
    * tsdNum  TSD节点个数。
    * lemonNum  Lemon节点个数。
    * storageType  集群底层存储类型： - OBS - HDFS
    * storageQuota  集群存储配额。
    * usedStorageSize  当前使用存储空间。
    * authMode  是否打开IAM认证。 - false：不开启 - true：开启
    * enableDfv  是否打开dfv
    * updated  集群更新时间。
    * created  集群创建时间。
    * clusterId  集群唯一标识，集群ID。
    * status  集群当前状态： - 200：集群正常 - 300：集群异常 - 400：集群已删除 - 303：集群创建失败
    * openTsdbLink  内网OpenTSDB连接访问地址。
    * tsdPublicEndpoint  OpenTSDB公网endpoint地址
    * lemonLink  内网Lemon连接访问地址。
    * zookeeperLink  内网ZooKeeper连接访问地址。
    * hbasePublicEndpoint  公网HBase连接访问地址。
    * isFrozen  集群是否被冻结。 - false：不冻结 - true：冻结
    * vpcId  VPC ID，创建集群节点所在的虚拟私有ID。
    * subNetId  子网ID，创建集群所在子网段。
    * securityGroupId  安全组对应的ID。
    * availabilityZone  集群所属的可用区。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actions' => 'string[]',
            'datastore' => '\HuaweiCloud\SDK\CloudTable\V2\Model\Datastore',
            'enableOpenTsdb' => 'bool',
            'enableLemon' => 'bool',
            'clusterName' => 'string',
            'cuNum' => 'string',
            'tsdNum' => 'string',
            'lemonNum' => 'string',
            'storageType' => 'string',
            'storageQuota' => 'string',
            'usedStorageSize' => 'string',
            'authMode' => 'bool',
            'enableDfv' => 'bool',
            'updated' => 'string',
            'created' => 'string',
            'clusterId' => 'string',
            'status' => 'string',
            'openTsdbLink' => 'string',
            'tsdPublicEndpoint' => 'string',
            'lemonLink' => 'string',
            'zookeeperLink' => 'string',
            'hbasePublicEndpoint' => 'string',
            'isFrozen' => 'string',
            'vpcId' => 'string',
            'subNetId' => 'string',
            'securityGroupId' => 'string',
            'availabilityZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actions  集群当前状态列表： - 创建中 - 扩容中 - 重启中 - 开启opentsdb - 扩容失败 - 重启失败 - 开启opentsdb失败
    * datastore  datastore
    * enableOpenTsdb  是否打开openTSDB特性。 - false：不开启 - true：开启
    * enableLemon  是否打开SQL查询特性。 - false：不开启 - true：开启
    * clusterName  集群名称。
    * cuNum  RegionServer个数。
    * tsdNum  TSD节点个数。
    * lemonNum  Lemon节点个数。
    * storageType  集群底层存储类型： - OBS - HDFS
    * storageQuota  集群存储配额。
    * usedStorageSize  当前使用存储空间。
    * authMode  是否打开IAM认证。 - false：不开启 - true：开启
    * enableDfv  是否打开dfv
    * updated  集群更新时间。
    * created  集群创建时间。
    * clusterId  集群唯一标识，集群ID。
    * status  集群当前状态： - 200：集群正常 - 300：集群异常 - 400：集群已删除 - 303：集群创建失败
    * openTsdbLink  内网OpenTSDB连接访问地址。
    * tsdPublicEndpoint  OpenTSDB公网endpoint地址
    * lemonLink  内网Lemon连接访问地址。
    * zookeeperLink  内网ZooKeeper连接访问地址。
    * hbasePublicEndpoint  公网HBase连接访问地址。
    * isFrozen  集群是否被冻结。 - false：不冻结 - true：冻结
    * vpcId  VPC ID，创建集群节点所在的虚拟私有ID。
    * subNetId  子网ID，创建集群所在子网段。
    * securityGroupId  安全组对应的ID。
    * availabilityZone  集群所属的可用区。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actions' => null,
        'datastore' => null,
        'enableOpenTsdb' => null,
        'enableLemon' => null,
        'clusterName' => null,
        'cuNum' => null,
        'tsdNum' => null,
        'lemonNum' => null,
        'storageType' => null,
        'storageQuota' => null,
        'usedStorageSize' => null,
        'authMode' => null,
        'enableDfv' => null,
        'updated' => null,
        'created' => null,
        'clusterId' => null,
        'status' => null,
        'openTsdbLink' => null,
        'tsdPublicEndpoint' => null,
        'lemonLink' => null,
        'zookeeperLink' => null,
        'hbasePublicEndpoint' => null,
        'isFrozen' => null,
        'vpcId' => null,
        'subNetId' => null,
        'securityGroupId' => null,
        'availabilityZone' => null
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
    * actions  集群当前状态列表： - 创建中 - 扩容中 - 重启中 - 开启opentsdb - 扩容失败 - 重启失败 - 开启opentsdb失败
    * datastore  datastore
    * enableOpenTsdb  是否打开openTSDB特性。 - false：不开启 - true：开启
    * enableLemon  是否打开SQL查询特性。 - false：不开启 - true：开启
    * clusterName  集群名称。
    * cuNum  RegionServer个数。
    * tsdNum  TSD节点个数。
    * lemonNum  Lemon节点个数。
    * storageType  集群底层存储类型： - OBS - HDFS
    * storageQuota  集群存储配额。
    * usedStorageSize  当前使用存储空间。
    * authMode  是否打开IAM认证。 - false：不开启 - true：开启
    * enableDfv  是否打开dfv
    * updated  集群更新时间。
    * created  集群创建时间。
    * clusterId  集群唯一标识，集群ID。
    * status  集群当前状态： - 200：集群正常 - 300：集群异常 - 400：集群已删除 - 303：集群创建失败
    * openTsdbLink  内网OpenTSDB连接访问地址。
    * tsdPublicEndpoint  OpenTSDB公网endpoint地址
    * lemonLink  内网Lemon连接访问地址。
    * zookeeperLink  内网ZooKeeper连接访问地址。
    * hbasePublicEndpoint  公网HBase连接访问地址。
    * isFrozen  集群是否被冻结。 - false：不冻结 - true：冻结
    * vpcId  VPC ID，创建集群节点所在的虚拟私有ID。
    * subNetId  子网ID，创建集群所在子网段。
    * securityGroupId  安全组对应的ID。
    * availabilityZone  集群所属的可用区。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actions' => 'actions',
            'datastore' => 'datastore',
            'enableOpenTsdb' => 'enable_openTSDB',
            'enableLemon' => 'enable_lemon',
            'clusterName' => 'cluster_name',
            'cuNum' => 'cu_num',
            'tsdNum' => 'tsd_num',
            'lemonNum' => 'lemon_num',
            'storageType' => 'storage_type',
            'storageQuota' => 'storage_quota',
            'usedStorageSize' => 'used_storage_size',
            'authMode' => 'auth_mode',
            'enableDfv' => 'enable_dfv',
            'updated' => 'updated',
            'created' => 'created',
            'clusterId' => 'cluster_id',
            'status' => 'status',
            'openTsdbLink' => 'openTSDB_link',
            'tsdPublicEndpoint' => 'tsd_public_endpoint',
            'lemonLink' => 'lemon_link',
            'zookeeperLink' => 'zookeeper_link',
            'hbasePublicEndpoint' => 'hbase_public_endpoint',
            'isFrozen' => 'is_frozen',
            'vpcId' => 'vpc_id',
            'subNetId' => 'sub_net_id',
            'securityGroupId' => 'security_group_id',
            'availabilityZone' => 'availability_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actions  集群当前状态列表： - 创建中 - 扩容中 - 重启中 - 开启opentsdb - 扩容失败 - 重启失败 - 开启opentsdb失败
    * datastore  datastore
    * enableOpenTsdb  是否打开openTSDB特性。 - false：不开启 - true：开启
    * enableLemon  是否打开SQL查询特性。 - false：不开启 - true：开启
    * clusterName  集群名称。
    * cuNum  RegionServer个数。
    * tsdNum  TSD节点个数。
    * lemonNum  Lemon节点个数。
    * storageType  集群底层存储类型： - OBS - HDFS
    * storageQuota  集群存储配额。
    * usedStorageSize  当前使用存储空间。
    * authMode  是否打开IAM认证。 - false：不开启 - true：开启
    * enableDfv  是否打开dfv
    * updated  集群更新时间。
    * created  集群创建时间。
    * clusterId  集群唯一标识，集群ID。
    * status  集群当前状态： - 200：集群正常 - 300：集群异常 - 400：集群已删除 - 303：集群创建失败
    * openTsdbLink  内网OpenTSDB连接访问地址。
    * tsdPublicEndpoint  OpenTSDB公网endpoint地址
    * lemonLink  内网Lemon连接访问地址。
    * zookeeperLink  内网ZooKeeper连接访问地址。
    * hbasePublicEndpoint  公网HBase连接访问地址。
    * isFrozen  集群是否被冻结。 - false：不冻结 - true：冻结
    * vpcId  VPC ID，创建集群节点所在的虚拟私有ID。
    * subNetId  子网ID，创建集群所在子网段。
    * securityGroupId  安全组对应的ID。
    * availabilityZone  集群所属的可用区。
    *
    * @var string[]
    */
    protected static $setters = [
            'actions' => 'setActions',
            'datastore' => 'setDatastore',
            'enableOpenTsdb' => 'setEnableOpenTsdb',
            'enableLemon' => 'setEnableLemon',
            'clusterName' => 'setClusterName',
            'cuNum' => 'setCuNum',
            'tsdNum' => 'setTsdNum',
            'lemonNum' => 'setLemonNum',
            'storageType' => 'setStorageType',
            'storageQuota' => 'setStorageQuota',
            'usedStorageSize' => 'setUsedStorageSize',
            'authMode' => 'setAuthMode',
            'enableDfv' => 'setEnableDfv',
            'updated' => 'setUpdated',
            'created' => 'setCreated',
            'clusterId' => 'setClusterId',
            'status' => 'setStatus',
            'openTsdbLink' => 'setOpenTsdbLink',
            'tsdPublicEndpoint' => 'setTsdPublicEndpoint',
            'lemonLink' => 'setLemonLink',
            'zookeeperLink' => 'setZookeeperLink',
            'hbasePublicEndpoint' => 'setHbasePublicEndpoint',
            'isFrozen' => 'setIsFrozen',
            'vpcId' => 'setVpcId',
            'subNetId' => 'setSubNetId',
            'securityGroupId' => 'setSecurityGroupId',
            'availabilityZone' => 'setAvailabilityZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actions  集群当前状态列表： - 创建中 - 扩容中 - 重启中 - 开启opentsdb - 扩容失败 - 重启失败 - 开启opentsdb失败
    * datastore  datastore
    * enableOpenTsdb  是否打开openTSDB特性。 - false：不开启 - true：开启
    * enableLemon  是否打开SQL查询特性。 - false：不开启 - true：开启
    * clusterName  集群名称。
    * cuNum  RegionServer个数。
    * tsdNum  TSD节点个数。
    * lemonNum  Lemon节点个数。
    * storageType  集群底层存储类型： - OBS - HDFS
    * storageQuota  集群存储配额。
    * usedStorageSize  当前使用存储空间。
    * authMode  是否打开IAM认证。 - false：不开启 - true：开启
    * enableDfv  是否打开dfv
    * updated  集群更新时间。
    * created  集群创建时间。
    * clusterId  集群唯一标识，集群ID。
    * status  集群当前状态： - 200：集群正常 - 300：集群异常 - 400：集群已删除 - 303：集群创建失败
    * openTsdbLink  内网OpenTSDB连接访问地址。
    * tsdPublicEndpoint  OpenTSDB公网endpoint地址
    * lemonLink  内网Lemon连接访问地址。
    * zookeeperLink  内网ZooKeeper连接访问地址。
    * hbasePublicEndpoint  公网HBase连接访问地址。
    * isFrozen  集群是否被冻结。 - false：不冻结 - true：冻结
    * vpcId  VPC ID，创建集群节点所在的虚拟私有ID。
    * subNetId  子网ID，创建集群所在子网段。
    * securityGroupId  安全组对应的ID。
    * availabilityZone  集群所属的可用区。
    *
    * @var string[]
    */
    protected static $getters = [
            'actions' => 'getActions',
            'datastore' => 'getDatastore',
            'enableOpenTsdb' => 'getEnableOpenTsdb',
            'enableLemon' => 'getEnableLemon',
            'clusterName' => 'getClusterName',
            'cuNum' => 'getCuNum',
            'tsdNum' => 'getTsdNum',
            'lemonNum' => 'getLemonNum',
            'storageType' => 'getStorageType',
            'storageQuota' => 'getStorageQuota',
            'usedStorageSize' => 'getUsedStorageSize',
            'authMode' => 'getAuthMode',
            'enableDfv' => 'getEnableDfv',
            'updated' => 'getUpdated',
            'created' => 'getCreated',
            'clusterId' => 'getClusterId',
            'status' => 'getStatus',
            'openTsdbLink' => 'getOpenTsdbLink',
            'tsdPublicEndpoint' => 'getTsdPublicEndpoint',
            'lemonLink' => 'getLemonLink',
            'zookeeperLink' => 'getZookeeperLink',
            'hbasePublicEndpoint' => 'getHbasePublicEndpoint',
            'isFrozen' => 'getIsFrozen',
            'vpcId' => 'getVpcId',
            'subNetId' => 'getSubNetId',
            'securityGroupId' => 'getSecurityGroupId',
            'availabilityZone' => 'getAvailabilityZone'
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
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['enableOpenTsdb'] = isset($data['enableOpenTsdb']) ? $data['enableOpenTsdb'] : null;
        $this->container['enableLemon'] = isset($data['enableLemon']) ? $data['enableLemon'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['cuNum'] = isset($data['cuNum']) ? $data['cuNum'] : null;
        $this->container['tsdNum'] = isset($data['tsdNum']) ? $data['tsdNum'] : null;
        $this->container['lemonNum'] = isset($data['lemonNum']) ? $data['lemonNum'] : null;
        $this->container['storageType'] = isset($data['storageType']) ? $data['storageType'] : null;
        $this->container['storageQuota'] = isset($data['storageQuota']) ? $data['storageQuota'] : null;
        $this->container['usedStorageSize'] = isset($data['usedStorageSize']) ? $data['usedStorageSize'] : null;
        $this->container['authMode'] = isset($data['authMode']) ? $data['authMode'] : null;
        $this->container['enableDfv'] = isset($data['enableDfv']) ? $data['enableDfv'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['openTsdbLink'] = isset($data['openTsdbLink']) ? $data['openTsdbLink'] : null;
        $this->container['tsdPublicEndpoint'] = isset($data['tsdPublicEndpoint']) ? $data['tsdPublicEndpoint'] : null;
        $this->container['lemonLink'] = isset($data['lemonLink']) ? $data['lemonLink'] : null;
        $this->container['zookeeperLink'] = isset($data['zookeeperLink']) ? $data['zookeeperLink'] : null;
        $this->container['hbasePublicEndpoint'] = isset($data['hbasePublicEndpoint']) ? $data['hbasePublicEndpoint'] : null;
        $this->container['isFrozen'] = isset($data['isFrozen']) ? $data['isFrozen'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subNetId'] = isset($data['subNetId']) ? $data['subNetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
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
    * Gets actions
    *  集群当前状态列表： - 创建中 - 扩容中 - 重启中 - 开启opentsdb - 扩容失败 - 重启失败 - 开启opentsdb失败
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
    * @param string[]|null $actions 集群当前状态列表： - 创建中 - 扩容中 - 重启中 - 开启opentsdb - 扩容失败 - 重启失败 - 开启opentsdb失败
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\CloudTable\V2\Model\Datastore|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\CloudTable\V2\Model\Datastore|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets enableOpenTsdb
    *  是否打开openTSDB特性。 - false：不开启 - true：开启
    *
    * @return bool|null
    */
    public function getEnableOpenTsdb()
    {
        return $this->container['enableOpenTsdb'];
    }

    /**
    * Sets enableOpenTsdb
    *
    * @param bool|null $enableOpenTsdb 是否打开openTSDB特性。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setEnableOpenTsdb($enableOpenTsdb)
    {
        $this->container['enableOpenTsdb'] = $enableOpenTsdb;
        return $this;
    }

    /**
    * Gets enableLemon
    *  是否打开SQL查询特性。 - false：不开启 - true：开启
    *
    * @return bool|null
    */
    public function getEnableLemon()
    {
        return $this->container['enableLemon'];
    }

    /**
    * Sets enableLemon
    *
    * @param bool|null $enableLemon 是否打开SQL查询特性。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setEnableLemon($enableLemon)
    {
        $this->container['enableLemon'] = $enableLemon;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称。
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
    * @param string|null $clusterName 集群名称。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets cuNum
    *  RegionServer个数。
    *
    * @return string|null
    */
    public function getCuNum()
    {
        return $this->container['cuNum'];
    }

    /**
    * Sets cuNum
    *
    * @param string|null $cuNum RegionServer个数。
    *
    * @return $this
    */
    public function setCuNum($cuNum)
    {
        $this->container['cuNum'] = $cuNum;
        return $this;
    }

    /**
    * Gets tsdNum
    *  TSD节点个数。
    *
    * @return string|null
    */
    public function getTsdNum()
    {
        return $this->container['tsdNum'];
    }

    /**
    * Sets tsdNum
    *
    * @param string|null $tsdNum TSD节点个数。
    *
    * @return $this
    */
    public function setTsdNum($tsdNum)
    {
        $this->container['tsdNum'] = $tsdNum;
        return $this;
    }

    /**
    * Gets lemonNum
    *  Lemon节点个数。
    *
    * @return string|null
    */
    public function getLemonNum()
    {
        return $this->container['lemonNum'];
    }

    /**
    * Sets lemonNum
    *
    * @param string|null $lemonNum Lemon节点个数。
    *
    * @return $this
    */
    public function setLemonNum($lemonNum)
    {
        $this->container['lemonNum'] = $lemonNum;
        return $this;
    }

    /**
    * Gets storageType
    *  集群底层存储类型： - OBS - HDFS
    *
    * @return string|null
    */
    public function getStorageType()
    {
        return $this->container['storageType'];
    }

    /**
    * Sets storageType
    *
    * @param string|null $storageType 集群底层存储类型： - OBS - HDFS
    *
    * @return $this
    */
    public function setStorageType($storageType)
    {
        $this->container['storageType'] = $storageType;
        return $this;
    }

    /**
    * Gets storageQuota
    *  集群存储配额。
    *
    * @return string|null
    */
    public function getStorageQuota()
    {
        return $this->container['storageQuota'];
    }

    /**
    * Sets storageQuota
    *
    * @param string|null $storageQuota 集群存储配额。
    *
    * @return $this
    */
    public function setStorageQuota($storageQuota)
    {
        $this->container['storageQuota'] = $storageQuota;
        return $this;
    }

    /**
    * Gets usedStorageSize
    *  当前使用存储空间。
    *
    * @return string|null
    */
    public function getUsedStorageSize()
    {
        return $this->container['usedStorageSize'];
    }

    /**
    * Sets usedStorageSize
    *
    * @param string|null $usedStorageSize 当前使用存储空间。
    *
    * @return $this
    */
    public function setUsedStorageSize($usedStorageSize)
    {
        $this->container['usedStorageSize'] = $usedStorageSize;
        return $this;
    }

    /**
    * Gets authMode
    *  是否打开IAM认证。 - false：不开启 - true：开启
    *
    * @return bool|null
    */
    public function getAuthMode()
    {
        return $this->container['authMode'];
    }

    /**
    * Sets authMode
    *
    * @param bool|null $authMode 是否打开IAM认证。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setAuthMode($authMode)
    {
        $this->container['authMode'] = $authMode;
        return $this;
    }

    /**
    * Gets enableDfv
    *  是否打开dfv
    *
    * @return bool|null
    */
    public function getEnableDfv()
    {
        return $this->container['enableDfv'];
    }

    /**
    * Sets enableDfv
    *
    * @param bool|null $enableDfv 是否打开dfv
    *
    * @return $this
    */
    public function setEnableDfv($enableDfv)
    {
        $this->container['enableDfv'] = $enableDfv;
        return $this;
    }

    /**
    * Gets updated
    *  集群更新时间。
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
    * @param string|null $updated 集群更新时间。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets created
    *  集群创建时间。
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
    * @param string|null $created 集群创建时间。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群唯一标识，集群ID。
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
    * @param string|null $clusterId 集群唯一标识，集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets status
    *  集群当前状态： - 200：集群正常 - 300：集群异常 - 400：集群已删除 - 303：集群创建失败
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
    * @param string|null $status 集群当前状态： - 200：集群正常 - 300：集群异常 - 400：集群已删除 - 303：集群创建失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets openTsdbLink
    *  内网OpenTSDB连接访问地址。
    *
    * @return string|null
    */
    public function getOpenTsdbLink()
    {
        return $this->container['openTsdbLink'];
    }

    /**
    * Sets openTsdbLink
    *
    * @param string|null $openTsdbLink 内网OpenTSDB连接访问地址。
    *
    * @return $this
    */
    public function setOpenTsdbLink($openTsdbLink)
    {
        $this->container['openTsdbLink'] = $openTsdbLink;
        return $this;
    }

    /**
    * Gets tsdPublicEndpoint
    *  OpenTSDB公网endpoint地址
    *
    * @return string|null
    */
    public function getTsdPublicEndpoint()
    {
        return $this->container['tsdPublicEndpoint'];
    }

    /**
    * Sets tsdPublicEndpoint
    *
    * @param string|null $tsdPublicEndpoint OpenTSDB公网endpoint地址
    *
    * @return $this
    */
    public function setTsdPublicEndpoint($tsdPublicEndpoint)
    {
        $this->container['tsdPublicEndpoint'] = $tsdPublicEndpoint;
        return $this;
    }

    /**
    * Gets lemonLink
    *  内网Lemon连接访问地址。
    *
    * @return string|null
    */
    public function getLemonLink()
    {
        return $this->container['lemonLink'];
    }

    /**
    * Sets lemonLink
    *
    * @param string|null $lemonLink 内网Lemon连接访问地址。
    *
    * @return $this
    */
    public function setLemonLink($lemonLink)
    {
        $this->container['lemonLink'] = $lemonLink;
        return $this;
    }

    /**
    * Gets zookeeperLink
    *  内网ZooKeeper连接访问地址。
    *
    * @return string|null
    */
    public function getZookeeperLink()
    {
        return $this->container['zookeeperLink'];
    }

    /**
    * Sets zookeeperLink
    *
    * @param string|null $zookeeperLink 内网ZooKeeper连接访问地址。
    *
    * @return $this
    */
    public function setZookeeperLink($zookeeperLink)
    {
        $this->container['zookeeperLink'] = $zookeeperLink;
        return $this;
    }

    /**
    * Gets hbasePublicEndpoint
    *  公网HBase连接访问地址。
    *
    * @return string|null
    */
    public function getHbasePublicEndpoint()
    {
        return $this->container['hbasePublicEndpoint'];
    }

    /**
    * Sets hbasePublicEndpoint
    *
    * @param string|null $hbasePublicEndpoint 公网HBase连接访问地址。
    *
    * @return $this
    */
    public function setHbasePublicEndpoint($hbasePublicEndpoint)
    {
        $this->container['hbasePublicEndpoint'] = $hbasePublicEndpoint;
        return $this;
    }

    /**
    * Gets isFrozen
    *  集群是否被冻结。 - false：不冻结 - true：冻结
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
    * @param string|null $isFrozen 集群是否被冻结。 - false：不冻结 - true：冻结
    *
    * @return $this
    */
    public function setIsFrozen($isFrozen)
    {
        $this->container['isFrozen'] = $isFrozen;
        return $this;
    }

    /**
    * Gets vpcId
    *  VPC ID，创建集群节点所在的虚拟私有ID。
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
    * @param string|null $vpcId VPC ID，创建集群节点所在的虚拟私有ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subNetId
    *  子网ID，创建集群所在子网段。
    *
    * @return string|null
    */
    public function getSubNetId()
    {
        return $this->container['subNetId'];
    }

    /**
    * Sets subNetId
    *
    * @param string|null $subNetId 子网ID，创建集群所在子网段。
    *
    * @return $this
    */
    public function setSubNetId($subNetId)
    {
        $this->container['subNetId'] = $subNetId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组对应的ID。
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
    * @param string|null $securityGroupId 安全组对应的ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  集群所属的可用区。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 集群所属的可用区。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
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


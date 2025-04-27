<?php

namespace HuaweiCloud\SDK\CloudTable\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionProgress  actionProgress
    * actions  集群操作记录
    * localHdfs  是否开启hdfs。 - false：不开启 - true：开启
    * isShow222VersionFeature  是否开222版本特性。 - false：不开启 - true：开启
    * actionsCount  集群操作记录
    * supportAuth  是否支持开启认证。 - false：不支持 - true：支持
    * epsId  eps_id。
    * clusterType  集群类型。
    * orderId  包周期订单号。
    * orderStatus  包周期订单状态。
    * isLocalHdfs  是否开启hdfs。 - false：不开启 - true：开启
    * ckDeployMode  ClickHouse部署模式。
    * flavorTypeEn  节点磁盘类型。
    * enableHotColdFeatureCluster  集群是否支持开启冷热分离。
    * enableHotColdFeature  集群是否开启冷热分离。
    * dataFlavor  数据节点规格。
    * controlFlavor  数据同步节点规格。
    * dataNodeNum  数据节点个数。
    * controlNodeNum  数据同步节点个数。
    * dataNodeTotalStorageSize  数据节点磁盘容量。
    * controlNodeTotalStorageSize  数据同步节点磁盘容量。
    * coldStorageUsedSize  冷存储使用量。
    * dataNodeVolumeType  数据节点磁盘类型。
    * controlNodeVolumeType  数据同步节点磁盘类型。
    * authMode  是否开启IAM权限认证。 - false：不开启 - true：开启
    * azCode  集群所在的可用区（AZ)。
    * clusterId  集群ID，集群唯一标识。
    * clusterName  CloudTable集群名称。
    * created  集群创建时间。
    * enableDfv  是否开启DFV。 - false：不开启 - true：开启
    * enableFree  集群是否免费。 - false：不免费 - true：免费
    * enableLemon  是否开启Lemon。 - false：不开启 - true：开启
    * enableOpenTsdb  是否开启OpenTSDB。 - false：不开启 - true：开启
    * status  集群状态： - 200：集群正常 - 300：集群异常 - 303：集群创建失败 - 400：集群已删除
    * tags  集群标识符。
    * version  集群版本号。
    * zookeeperLink  CloudTable集群ZooKeeper的链接地址。例如：cloudtable-3058-zk3-Dqcwuh6R.mycloudtable.com:2181,cloudtable-3058-zk2-TCwkZEie.mycloudtable.com:2181,cloudtable-3058-zk1-TBELUFOK.mycloudtable.com:2181
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionProgress' => '\HuaweiCloud\SDK\CloudTable\V2\Model\ActionProgress',
            'actions' => 'string[]',
            'localHdfs' => 'bool',
            'isShow222VersionFeature' => 'string',
            'actionsCount' => 'string[]',
            'supportAuth' => 'bool',
            'epsId' => 'string',
            'clusterType' => 'string',
            'orderId' => 'string',
            'orderStatus' => 'string',
            'isLocalHdfs' => 'bool',
            'ckDeployMode' => 'string',
            'flavorTypeEn' => 'string',
            'enableHotColdFeatureCluster' => 'string',
            'enableHotColdFeature' => 'string',
            'dataFlavor' => 'string',
            'controlFlavor' => 'string',
            'dataNodeNum' => 'string',
            'controlNodeNum' => 'string',
            'dataNodeTotalStorageSize' => 'string',
            'controlNodeTotalStorageSize' => 'string',
            'coldStorageUsedSize' => 'string',
            'dataNodeVolumeType' => 'string',
            'controlNodeVolumeType' => 'string',
            'authMode' => 'string',
            'azCode' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'created' => 'string',
            'enableDfv' => 'string',
            'enableFree' => 'string',
            'enableLemon' => 'string',
            'enableOpenTsdb' => 'string',
            'status' => 'string',
            'tags' => 'string',
            'version' => 'string',
            'zookeeperLink' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionProgress  actionProgress
    * actions  集群操作记录
    * localHdfs  是否开启hdfs。 - false：不开启 - true：开启
    * isShow222VersionFeature  是否开222版本特性。 - false：不开启 - true：开启
    * actionsCount  集群操作记录
    * supportAuth  是否支持开启认证。 - false：不支持 - true：支持
    * epsId  eps_id。
    * clusterType  集群类型。
    * orderId  包周期订单号。
    * orderStatus  包周期订单状态。
    * isLocalHdfs  是否开启hdfs。 - false：不开启 - true：开启
    * ckDeployMode  ClickHouse部署模式。
    * flavorTypeEn  节点磁盘类型。
    * enableHotColdFeatureCluster  集群是否支持开启冷热分离。
    * enableHotColdFeature  集群是否开启冷热分离。
    * dataFlavor  数据节点规格。
    * controlFlavor  数据同步节点规格。
    * dataNodeNum  数据节点个数。
    * controlNodeNum  数据同步节点个数。
    * dataNodeTotalStorageSize  数据节点磁盘容量。
    * controlNodeTotalStorageSize  数据同步节点磁盘容量。
    * coldStorageUsedSize  冷存储使用量。
    * dataNodeVolumeType  数据节点磁盘类型。
    * controlNodeVolumeType  数据同步节点磁盘类型。
    * authMode  是否开启IAM权限认证。 - false：不开启 - true：开启
    * azCode  集群所在的可用区（AZ)。
    * clusterId  集群ID，集群唯一标识。
    * clusterName  CloudTable集群名称。
    * created  集群创建时间。
    * enableDfv  是否开启DFV。 - false：不开启 - true：开启
    * enableFree  集群是否免费。 - false：不免费 - true：免费
    * enableLemon  是否开启Lemon。 - false：不开启 - true：开启
    * enableOpenTsdb  是否开启OpenTSDB。 - false：不开启 - true：开启
    * status  集群状态： - 200：集群正常 - 300：集群异常 - 303：集群创建失败 - 400：集群已删除
    * tags  集群标识符。
    * version  集群版本号。
    * zookeeperLink  CloudTable集群ZooKeeper的链接地址。例如：cloudtable-3058-zk3-Dqcwuh6R.mycloudtable.com:2181,cloudtable-3058-zk2-TCwkZEie.mycloudtable.com:2181,cloudtable-3058-zk1-TBELUFOK.mycloudtable.com:2181
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionProgress' => null,
        'actions' => null,
        'localHdfs' => null,
        'isShow222VersionFeature' => null,
        'actionsCount' => null,
        'supportAuth' => null,
        'epsId' => null,
        'clusterType' => null,
        'orderId' => null,
        'orderStatus' => null,
        'isLocalHdfs' => null,
        'ckDeployMode' => null,
        'flavorTypeEn' => null,
        'enableHotColdFeatureCluster' => null,
        'enableHotColdFeature' => null,
        'dataFlavor' => null,
        'controlFlavor' => null,
        'dataNodeNum' => null,
        'controlNodeNum' => null,
        'dataNodeTotalStorageSize' => null,
        'controlNodeTotalStorageSize' => null,
        'coldStorageUsedSize' => null,
        'dataNodeVolumeType' => null,
        'controlNodeVolumeType' => null,
        'authMode' => null,
        'azCode' => null,
        'clusterId' => null,
        'clusterName' => null,
        'created' => null,
        'enableDfv' => null,
        'enableFree' => null,
        'enableLemon' => null,
        'enableOpenTsdb' => null,
        'status' => null,
        'tags' => null,
        'version' => null,
        'zookeeperLink' => null
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
    * actionProgress  actionProgress
    * actions  集群操作记录
    * localHdfs  是否开启hdfs。 - false：不开启 - true：开启
    * isShow222VersionFeature  是否开222版本特性。 - false：不开启 - true：开启
    * actionsCount  集群操作记录
    * supportAuth  是否支持开启认证。 - false：不支持 - true：支持
    * epsId  eps_id。
    * clusterType  集群类型。
    * orderId  包周期订单号。
    * orderStatus  包周期订单状态。
    * isLocalHdfs  是否开启hdfs。 - false：不开启 - true：开启
    * ckDeployMode  ClickHouse部署模式。
    * flavorTypeEn  节点磁盘类型。
    * enableHotColdFeatureCluster  集群是否支持开启冷热分离。
    * enableHotColdFeature  集群是否开启冷热分离。
    * dataFlavor  数据节点规格。
    * controlFlavor  数据同步节点规格。
    * dataNodeNum  数据节点个数。
    * controlNodeNum  数据同步节点个数。
    * dataNodeTotalStorageSize  数据节点磁盘容量。
    * controlNodeTotalStorageSize  数据同步节点磁盘容量。
    * coldStorageUsedSize  冷存储使用量。
    * dataNodeVolumeType  数据节点磁盘类型。
    * controlNodeVolumeType  数据同步节点磁盘类型。
    * authMode  是否开启IAM权限认证。 - false：不开启 - true：开启
    * azCode  集群所在的可用区（AZ)。
    * clusterId  集群ID，集群唯一标识。
    * clusterName  CloudTable集群名称。
    * created  集群创建时间。
    * enableDfv  是否开启DFV。 - false：不开启 - true：开启
    * enableFree  集群是否免费。 - false：不免费 - true：免费
    * enableLemon  是否开启Lemon。 - false：不开启 - true：开启
    * enableOpenTsdb  是否开启OpenTSDB。 - false：不开启 - true：开启
    * status  集群状态： - 200：集群正常 - 300：集群异常 - 303：集群创建失败 - 400：集群已删除
    * tags  集群标识符。
    * version  集群版本号。
    * zookeeperLink  CloudTable集群ZooKeeper的链接地址。例如：cloudtable-3058-zk3-Dqcwuh6R.mycloudtable.com:2181,cloudtable-3058-zk2-TCwkZEie.mycloudtable.com:2181,cloudtable-3058-zk1-TBELUFOK.mycloudtable.com:2181
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionProgress' => 'action_progress',
            'actions' => 'actions',
            'localHdfs' => 'localHdfs',
            'isShow222VersionFeature' => 'is_show_222_version_feature',
            'actionsCount' => 'actionsCount',
            'supportAuth' => 'support_auth',
            'epsId' => 'eps_id',
            'clusterType' => 'cluster_type',
            'orderId' => 'order_id',
            'orderStatus' => 'order_status',
            'isLocalHdfs' => 'is_local_hdfs',
            'ckDeployMode' => 'ck_deploy_mode',
            'flavorTypeEn' => 'flavor_type_en',
            'enableHotColdFeatureCluster' => 'enable_hot_cold_feature_cluster',
            'enableHotColdFeature' => 'enable_hot_cold_feature',
            'dataFlavor' => 'data_flavor',
            'controlFlavor' => 'control_flavor',
            'dataNodeNum' => 'data_node_num',
            'controlNodeNum' => 'control_node_num',
            'dataNodeTotalStorageSize' => 'data_node_total_storage_size',
            'controlNodeTotalStorageSize' => 'control_node_total_storage_size',
            'coldStorageUsedSize' => 'cold_storage_used_size',
            'dataNodeVolumeType' => 'data_node_volume_type',
            'controlNodeVolumeType' => 'control_node_volume_type',
            'authMode' => 'auth_mode',
            'azCode' => 'az_code',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'created' => 'created',
            'enableDfv' => 'enable_dfv',
            'enableFree' => 'enable_free',
            'enableLemon' => 'enable_lemon',
            'enableOpenTsdb' => 'enable_openTSDB',
            'status' => 'status',
            'tags' => 'tags',
            'version' => 'version',
            'zookeeperLink' => 'zookeeper_link'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionProgress  actionProgress
    * actions  集群操作记录
    * localHdfs  是否开启hdfs。 - false：不开启 - true：开启
    * isShow222VersionFeature  是否开222版本特性。 - false：不开启 - true：开启
    * actionsCount  集群操作记录
    * supportAuth  是否支持开启认证。 - false：不支持 - true：支持
    * epsId  eps_id。
    * clusterType  集群类型。
    * orderId  包周期订单号。
    * orderStatus  包周期订单状态。
    * isLocalHdfs  是否开启hdfs。 - false：不开启 - true：开启
    * ckDeployMode  ClickHouse部署模式。
    * flavorTypeEn  节点磁盘类型。
    * enableHotColdFeatureCluster  集群是否支持开启冷热分离。
    * enableHotColdFeature  集群是否开启冷热分离。
    * dataFlavor  数据节点规格。
    * controlFlavor  数据同步节点规格。
    * dataNodeNum  数据节点个数。
    * controlNodeNum  数据同步节点个数。
    * dataNodeTotalStorageSize  数据节点磁盘容量。
    * controlNodeTotalStorageSize  数据同步节点磁盘容量。
    * coldStorageUsedSize  冷存储使用量。
    * dataNodeVolumeType  数据节点磁盘类型。
    * controlNodeVolumeType  数据同步节点磁盘类型。
    * authMode  是否开启IAM权限认证。 - false：不开启 - true：开启
    * azCode  集群所在的可用区（AZ)。
    * clusterId  集群ID，集群唯一标识。
    * clusterName  CloudTable集群名称。
    * created  集群创建时间。
    * enableDfv  是否开启DFV。 - false：不开启 - true：开启
    * enableFree  集群是否免费。 - false：不免费 - true：免费
    * enableLemon  是否开启Lemon。 - false：不开启 - true：开启
    * enableOpenTsdb  是否开启OpenTSDB。 - false：不开启 - true：开启
    * status  集群状态： - 200：集群正常 - 300：集群异常 - 303：集群创建失败 - 400：集群已删除
    * tags  集群标识符。
    * version  集群版本号。
    * zookeeperLink  CloudTable集群ZooKeeper的链接地址。例如：cloudtable-3058-zk3-Dqcwuh6R.mycloudtable.com:2181,cloudtable-3058-zk2-TCwkZEie.mycloudtable.com:2181,cloudtable-3058-zk1-TBELUFOK.mycloudtable.com:2181
    *
    * @var string[]
    */
    protected static $setters = [
            'actionProgress' => 'setActionProgress',
            'actions' => 'setActions',
            'localHdfs' => 'setLocalHdfs',
            'isShow222VersionFeature' => 'setIsShow222VersionFeature',
            'actionsCount' => 'setActionsCount',
            'supportAuth' => 'setSupportAuth',
            'epsId' => 'setEpsId',
            'clusterType' => 'setClusterType',
            'orderId' => 'setOrderId',
            'orderStatus' => 'setOrderStatus',
            'isLocalHdfs' => 'setIsLocalHdfs',
            'ckDeployMode' => 'setCkDeployMode',
            'flavorTypeEn' => 'setFlavorTypeEn',
            'enableHotColdFeatureCluster' => 'setEnableHotColdFeatureCluster',
            'enableHotColdFeature' => 'setEnableHotColdFeature',
            'dataFlavor' => 'setDataFlavor',
            'controlFlavor' => 'setControlFlavor',
            'dataNodeNum' => 'setDataNodeNum',
            'controlNodeNum' => 'setControlNodeNum',
            'dataNodeTotalStorageSize' => 'setDataNodeTotalStorageSize',
            'controlNodeTotalStorageSize' => 'setControlNodeTotalStorageSize',
            'coldStorageUsedSize' => 'setColdStorageUsedSize',
            'dataNodeVolumeType' => 'setDataNodeVolumeType',
            'controlNodeVolumeType' => 'setControlNodeVolumeType',
            'authMode' => 'setAuthMode',
            'azCode' => 'setAzCode',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'created' => 'setCreated',
            'enableDfv' => 'setEnableDfv',
            'enableFree' => 'setEnableFree',
            'enableLemon' => 'setEnableLemon',
            'enableOpenTsdb' => 'setEnableOpenTsdb',
            'status' => 'setStatus',
            'tags' => 'setTags',
            'version' => 'setVersion',
            'zookeeperLink' => 'setZookeeperLink'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionProgress  actionProgress
    * actions  集群操作记录
    * localHdfs  是否开启hdfs。 - false：不开启 - true：开启
    * isShow222VersionFeature  是否开222版本特性。 - false：不开启 - true：开启
    * actionsCount  集群操作记录
    * supportAuth  是否支持开启认证。 - false：不支持 - true：支持
    * epsId  eps_id。
    * clusterType  集群类型。
    * orderId  包周期订单号。
    * orderStatus  包周期订单状态。
    * isLocalHdfs  是否开启hdfs。 - false：不开启 - true：开启
    * ckDeployMode  ClickHouse部署模式。
    * flavorTypeEn  节点磁盘类型。
    * enableHotColdFeatureCluster  集群是否支持开启冷热分离。
    * enableHotColdFeature  集群是否开启冷热分离。
    * dataFlavor  数据节点规格。
    * controlFlavor  数据同步节点规格。
    * dataNodeNum  数据节点个数。
    * controlNodeNum  数据同步节点个数。
    * dataNodeTotalStorageSize  数据节点磁盘容量。
    * controlNodeTotalStorageSize  数据同步节点磁盘容量。
    * coldStorageUsedSize  冷存储使用量。
    * dataNodeVolumeType  数据节点磁盘类型。
    * controlNodeVolumeType  数据同步节点磁盘类型。
    * authMode  是否开启IAM权限认证。 - false：不开启 - true：开启
    * azCode  集群所在的可用区（AZ)。
    * clusterId  集群ID，集群唯一标识。
    * clusterName  CloudTable集群名称。
    * created  集群创建时间。
    * enableDfv  是否开启DFV。 - false：不开启 - true：开启
    * enableFree  集群是否免费。 - false：不免费 - true：免费
    * enableLemon  是否开启Lemon。 - false：不开启 - true：开启
    * enableOpenTsdb  是否开启OpenTSDB。 - false：不开启 - true：开启
    * status  集群状态： - 200：集群正常 - 300：集群异常 - 303：集群创建失败 - 400：集群已删除
    * tags  集群标识符。
    * version  集群版本号。
    * zookeeperLink  CloudTable集群ZooKeeper的链接地址。例如：cloudtable-3058-zk3-Dqcwuh6R.mycloudtable.com:2181,cloudtable-3058-zk2-TCwkZEie.mycloudtable.com:2181,cloudtable-3058-zk1-TBELUFOK.mycloudtable.com:2181
    *
    * @var string[]
    */
    protected static $getters = [
            'actionProgress' => 'getActionProgress',
            'actions' => 'getActions',
            'localHdfs' => 'getLocalHdfs',
            'isShow222VersionFeature' => 'getIsShow222VersionFeature',
            'actionsCount' => 'getActionsCount',
            'supportAuth' => 'getSupportAuth',
            'epsId' => 'getEpsId',
            'clusterType' => 'getClusterType',
            'orderId' => 'getOrderId',
            'orderStatus' => 'getOrderStatus',
            'isLocalHdfs' => 'getIsLocalHdfs',
            'ckDeployMode' => 'getCkDeployMode',
            'flavorTypeEn' => 'getFlavorTypeEn',
            'enableHotColdFeatureCluster' => 'getEnableHotColdFeatureCluster',
            'enableHotColdFeature' => 'getEnableHotColdFeature',
            'dataFlavor' => 'getDataFlavor',
            'controlFlavor' => 'getControlFlavor',
            'dataNodeNum' => 'getDataNodeNum',
            'controlNodeNum' => 'getControlNodeNum',
            'dataNodeTotalStorageSize' => 'getDataNodeTotalStorageSize',
            'controlNodeTotalStorageSize' => 'getControlNodeTotalStorageSize',
            'coldStorageUsedSize' => 'getColdStorageUsedSize',
            'dataNodeVolumeType' => 'getDataNodeVolumeType',
            'controlNodeVolumeType' => 'getControlNodeVolumeType',
            'authMode' => 'getAuthMode',
            'azCode' => 'getAzCode',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'created' => 'getCreated',
            'enableDfv' => 'getEnableDfv',
            'enableFree' => 'getEnableFree',
            'enableLemon' => 'getEnableLemon',
            'enableOpenTsdb' => 'getEnableOpenTsdb',
            'status' => 'getStatus',
            'tags' => 'getTags',
            'version' => 'getVersion',
            'zookeeperLink' => 'getZookeeperLink'
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
        $this->container['actionProgress'] = isset($data['actionProgress']) ? $data['actionProgress'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['localHdfs'] = isset($data['localHdfs']) ? $data['localHdfs'] : null;
        $this->container['isShow222VersionFeature'] = isset($data['isShow222VersionFeature']) ? $data['isShow222VersionFeature'] : null;
        $this->container['actionsCount'] = isset($data['actionsCount']) ? $data['actionsCount'] : null;
        $this->container['supportAuth'] = isset($data['supportAuth']) ? $data['supportAuth'] : null;
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['orderStatus'] = isset($data['orderStatus']) ? $data['orderStatus'] : null;
        $this->container['isLocalHdfs'] = isset($data['isLocalHdfs']) ? $data['isLocalHdfs'] : null;
        $this->container['ckDeployMode'] = isset($data['ckDeployMode']) ? $data['ckDeployMode'] : null;
        $this->container['flavorTypeEn'] = isset($data['flavorTypeEn']) ? $data['flavorTypeEn'] : null;
        $this->container['enableHotColdFeatureCluster'] = isset($data['enableHotColdFeatureCluster']) ? $data['enableHotColdFeatureCluster'] : null;
        $this->container['enableHotColdFeature'] = isset($data['enableHotColdFeature']) ? $data['enableHotColdFeature'] : null;
        $this->container['dataFlavor'] = isset($data['dataFlavor']) ? $data['dataFlavor'] : null;
        $this->container['controlFlavor'] = isset($data['controlFlavor']) ? $data['controlFlavor'] : null;
        $this->container['dataNodeNum'] = isset($data['dataNodeNum']) ? $data['dataNodeNum'] : null;
        $this->container['controlNodeNum'] = isset($data['controlNodeNum']) ? $data['controlNodeNum'] : null;
        $this->container['dataNodeTotalStorageSize'] = isset($data['dataNodeTotalStorageSize']) ? $data['dataNodeTotalStorageSize'] : null;
        $this->container['controlNodeTotalStorageSize'] = isset($data['controlNodeTotalStorageSize']) ? $data['controlNodeTotalStorageSize'] : null;
        $this->container['coldStorageUsedSize'] = isset($data['coldStorageUsedSize']) ? $data['coldStorageUsedSize'] : null;
        $this->container['dataNodeVolumeType'] = isset($data['dataNodeVolumeType']) ? $data['dataNodeVolumeType'] : null;
        $this->container['controlNodeVolumeType'] = isset($data['controlNodeVolumeType']) ? $data['controlNodeVolumeType'] : null;
        $this->container['authMode'] = isset($data['authMode']) ? $data['authMode'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['enableDfv'] = isset($data['enableDfv']) ? $data['enableDfv'] : null;
        $this->container['enableFree'] = isset($data['enableFree']) ? $data['enableFree'] : null;
        $this->container['enableLemon'] = isset($data['enableLemon']) ? $data['enableLemon'] : null;
        $this->container['enableOpenTsdb'] = isset($data['enableOpenTsdb']) ? $data['enableOpenTsdb'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['zookeeperLink'] = isset($data['zookeeperLink']) ? $data['zookeeperLink'] : null;
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
    * Gets actionProgress
    *  actionProgress
    *
    * @return \HuaweiCloud\SDK\CloudTable\V2\Model\ActionProgress|null
    */
    public function getActionProgress()
    {
        return $this->container['actionProgress'];
    }

    /**
    * Sets actionProgress
    *
    * @param \HuaweiCloud\SDK\CloudTable\V2\Model\ActionProgress|null $actionProgress actionProgress
    *
    * @return $this
    */
    public function setActionProgress($actionProgress)
    {
        $this->container['actionProgress'] = $actionProgress;
        return $this;
    }

    /**
    * Gets actions
    *  集群操作记录
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
    * @param string[]|null $actions 集群操作记录
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets localHdfs
    *  是否开启hdfs。 - false：不开启 - true：开启
    *
    * @return bool|null
    */
    public function getLocalHdfs()
    {
        return $this->container['localHdfs'];
    }

    /**
    * Sets localHdfs
    *
    * @param bool|null $localHdfs 是否开启hdfs。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setLocalHdfs($localHdfs)
    {
        $this->container['localHdfs'] = $localHdfs;
        return $this;
    }

    /**
    * Gets isShow222VersionFeature
    *  是否开222版本特性。 - false：不开启 - true：开启
    *
    * @return string|null
    */
    public function getIsShow222VersionFeature()
    {
        return $this->container['isShow222VersionFeature'];
    }

    /**
    * Sets isShow222VersionFeature
    *
    * @param string|null $isShow222VersionFeature 是否开222版本特性。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setIsShow222VersionFeature($isShow222VersionFeature)
    {
        $this->container['isShow222VersionFeature'] = $isShow222VersionFeature;
        return $this;
    }

    /**
    * Gets actionsCount
    *  集群操作记录
    *
    * @return string[]|null
    */
    public function getActionsCount()
    {
        return $this->container['actionsCount'];
    }

    /**
    * Sets actionsCount
    *
    * @param string[]|null $actionsCount 集群操作记录
    *
    * @return $this
    */
    public function setActionsCount($actionsCount)
    {
        $this->container['actionsCount'] = $actionsCount;
        return $this;
    }

    /**
    * Gets supportAuth
    *  是否支持开启认证。 - false：不支持 - true：支持
    *
    * @return bool|null
    */
    public function getSupportAuth()
    {
        return $this->container['supportAuth'];
    }

    /**
    * Sets supportAuth
    *
    * @param bool|null $supportAuth 是否支持开启认证。 - false：不支持 - true：支持
    *
    * @return $this
    */
    public function setSupportAuth($supportAuth)
    {
        $this->container['supportAuth'] = $supportAuth;
        return $this;
    }

    /**
    * Gets epsId
    *  eps_id。
    *
    * @return string|null
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string|null $epsId eps_id。
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
        return $this;
    }

    /**
    * Gets clusterType
    *  集群类型。
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
    * @param string|null $clusterType 集群类型。
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets orderId
    *  包周期订单号。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 包周期订单号。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets orderStatus
    *  包周期订单状态。
    *
    * @return string|null
    */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
    * Sets orderStatus
    *
    * @param string|null $orderStatus 包周期订单状态。
    *
    * @return $this
    */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;
        return $this;
    }

    /**
    * Gets isLocalHdfs
    *  是否开启hdfs。 - false：不开启 - true：开启
    *
    * @return bool|null
    */
    public function getIsLocalHdfs()
    {
        return $this->container['isLocalHdfs'];
    }

    /**
    * Sets isLocalHdfs
    *
    * @param bool|null $isLocalHdfs 是否开启hdfs。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setIsLocalHdfs($isLocalHdfs)
    {
        $this->container['isLocalHdfs'] = $isLocalHdfs;
        return $this;
    }

    /**
    * Gets ckDeployMode
    *  ClickHouse部署模式。
    *
    * @return string|null
    */
    public function getCkDeployMode()
    {
        return $this->container['ckDeployMode'];
    }

    /**
    * Sets ckDeployMode
    *
    * @param string|null $ckDeployMode ClickHouse部署模式。
    *
    * @return $this
    */
    public function setCkDeployMode($ckDeployMode)
    {
        $this->container['ckDeployMode'] = $ckDeployMode;
        return $this;
    }

    /**
    * Gets flavorTypeEn
    *  节点磁盘类型。
    *
    * @return string|null
    */
    public function getFlavorTypeEn()
    {
        return $this->container['flavorTypeEn'];
    }

    /**
    * Sets flavorTypeEn
    *
    * @param string|null $flavorTypeEn 节点磁盘类型。
    *
    * @return $this
    */
    public function setFlavorTypeEn($flavorTypeEn)
    {
        $this->container['flavorTypeEn'] = $flavorTypeEn;
        return $this;
    }

    /**
    * Gets enableHotColdFeatureCluster
    *  集群是否支持开启冷热分离。
    *
    * @return string|null
    */
    public function getEnableHotColdFeatureCluster()
    {
        return $this->container['enableHotColdFeatureCluster'];
    }

    /**
    * Sets enableHotColdFeatureCluster
    *
    * @param string|null $enableHotColdFeatureCluster 集群是否支持开启冷热分离。
    *
    * @return $this
    */
    public function setEnableHotColdFeatureCluster($enableHotColdFeatureCluster)
    {
        $this->container['enableHotColdFeatureCluster'] = $enableHotColdFeatureCluster;
        return $this;
    }

    /**
    * Gets enableHotColdFeature
    *  集群是否开启冷热分离。
    *
    * @return string|null
    */
    public function getEnableHotColdFeature()
    {
        return $this->container['enableHotColdFeature'];
    }

    /**
    * Sets enableHotColdFeature
    *
    * @param string|null $enableHotColdFeature 集群是否开启冷热分离。
    *
    * @return $this
    */
    public function setEnableHotColdFeature($enableHotColdFeature)
    {
        $this->container['enableHotColdFeature'] = $enableHotColdFeature;
        return $this;
    }

    /**
    * Gets dataFlavor
    *  数据节点规格。
    *
    * @return string|null
    */
    public function getDataFlavor()
    {
        return $this->container['dataFlavor'];
    }

    /**
    * Sets dataFlavor
    *
    * @param string|null $dataFlavor 数据节点规格。
    *
    * @return $this
    */
    public function setDataFlavor($dataFlavor)
    {
        $this->container['dataFlavor'] = $dataFlavor;
        return $this;
    }

    /**
    * Gets controlFlavor
    *  数据同步节点规格。
    *
    * @return string|null
    */
    public function getControlFlavor()
    {
        return $this->container['controlFlavor'];
    }

    /**
    * Sets controlFlavor
    *
    * @param string|null $controlFlavor 数据同步节点规格。
    *
    * @return $this
    */
    public function setControlFlavor($controlFlavor)
    {
        $this->container['controlFlavor'] = $controlFlavor;
        return $this;
    }

    /**
    * Gets dataNodeNum
    *  数据节点个数。
    *
    * @return string|null
    */
    public function getDataNodeNum()
    {
        return $this->container['dataNodeNum'];
    }

    /**
    * Sets dataNodeNum
    *
    * @param string|null $dataNodeNum 数据节点个数。
    *
    * @return $this
    */
    public function setDataNodeNum($dataNodeNum)
    {
        $this->container['dataNodeNum'] = $dataNodeNum;
        return $this;
    }

    /**
    * Gets controlNodeNum
    *  数据同步节点个数。
    *
    * @return string|null
    */
    public function getControlNodeNum()
    {
        return $this->container['controlNodeNum'];
    }

    /**
    * Sets controlNodeNum
    *
    * @param string|null $controlNodeNum 数据同步节点个数。
    *
    * @return $this
    */
    public function setControlNodeNum($controlNodeNum)
    {
        $this->container['controlNodeNum'] = $controlNodeNum;
        return $this;
    }

    /**
    * Gets dataNodeTotalStorageSize
    *  数据节点磁盘容量。
    *
    * @return string|null
    */
    public function getDataNodeTotalStorageSize()
    {
        return $this->container['dataNodeTotalStorageSize'];
    }

    /**
    * Sets dataNodeTotalStorageSize
    *
    * @param string|null $dataNodeTotalStorageSize 数据节点磁盘容量。
    *
    * @return $this
    */
    public function setDataNodeTotalStorageSize($dataNodeTotalStorageSize)
    {
        $this->container['dataNodeTotalStorageSize'] = $dataNodeTotalStorageSize;
        return $this;
    }

    /**
    * Gets controlNodeTotalStorageSize
    *  数据同步节点磁盘容量。
    *
    * @return string|null
    */
    public function getControlNodeTotalStorageSize()
    {
        return $this->container['controlNodeTotalStorageSize'];
    }

    /**
    * Sets controlNodeTotalStorageSize
    *
    * @param string|null $controlNodeTotalStorageSize 数据同步节点磁盘容量。
    *
    * @return $this
    */
    public function setControlNodeTotalStorageSize($controlNodeTotalStorageSize)
    {
        $this->container['controlNodeTotalStorageSize'] = $controlNodeTotalStorageSize;
        return $this;
    }

    /**
    * Gets coldStorageUsedSize
    *  冷存储使用量。
    *
    * @return string|null
    */
    public function getColdStorageUsedSize()
    {
        return $this->container['coldStorageUsedSize'];
    }

    /**
    * Sets coldStorageUsedSize
    *
    * @param string|null $coldStorageUsedSize 冷存储使用量。
    *
    * @return $this
    */
    public function setColdStorageUsedSize($coldStorageUsedSize)
    {
        $this->container['coldStorageUsedSize'] = $coldStorageUsedSize;
        return $this;
    }

    /**
    * Gets dataNodeVolumeType
    *  数据节点磁盘类型。
    *
    * @return string|null
    */
    public function getDataNodeVolumeType()
    {
        return $this->container['dataNodeVolumeType'];
    }

    /**
    * Sets dataNodeVolumeType
    *
    * @param string|null $dataNodeVolumeType 数据节点磁盘类型。
    *
    * @return $this
    */
    public function setDataNodeVolumeType($dataNodeVolumeType)
    {
        $this->container['dataNodeVolumeType'] = $dataNodeVolumeType;
        return $this;
    }

    /**
    * Gets controlNodeVolumeType
    *  数据同步节点磁盘类型。
    *
    * @return string|null
    */
    public function getControlNodeVolumeType()
    {
        return $this->container['controlNodeVolumeType'];
    }

    /**
    * Sets controlNodeVolumeType
    *
    * @param string|null $controlNodeVolumeType 数据同步节点磁盘类型。
    *
    * @return $this
    */
    public function setControlNodeVolumeType($controlNodeVolumeType)
    {
        $this->container['controlNodeVolumeType'] = $controlNodeVolumeType;
        return $this;
    }

    /**
    * Gets authMode
    *  是否开启IAM权限认证。 - false：不开启 - true：开启
    *
    * @return string|null
    */
    public function getAuthMode()
    {
        return $this->container['authMode'];
    }

    /**
    * Sets authMode
    *
    * @param string|null $authMode 是否开启IAM权限认证。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setAuthMode($authMode)
    {
        $this->container['authMode'] = $authMode;
        return $this;
    }

    /**
    * Gets azCode
    *  集群所在的可用区（AZ)。
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
    * @param string|null $azCode 集群所在的可用区（AZ)。
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID，集群唯一标识。
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
    * @param string|null $clusterId 集群ID，集群唯一标识。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  CloudTable集群名称。
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
    * @param string|null $clusterName CloudTable集群名称。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
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
    * Gets enableDfv
    *  是否开启DFV。 - false：不开启 - true：开启
    *
    * @return string|null
    */
    public function getEnableDfv()
    {
        return $this->container['enableDfv'];
    }

    /**
    * Sets enableDfv
    *
    * @param string|null $enableDfv 是否开启DFV。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setEnableDfv($enableDfv)
    {
        $this->container['enableDfv'] = $enableDfv;
        return $this;
    }

    /**
    * Gets enableFree
    *  集群是否免费。 - false：不免费 - true：免费
    *
    * @return string|null
    */
    public function getEnableFree()
    {
        return $this->container['enableFree'];
    }

    /**
    * Sets enableFree
    *
    * @param string|null $enableFree 集群是否免费。 - false：不免费 - true：免费
    *
    * @return $this
    */
    public function setEnableFree($enableFree)
    {
        $this->container['enableFree'] = $enableFree;
        return $this;
    }

    /**
    * Gets enableLemon
    *  是否开启Lemon。 - false：不开启 - true：开启
    *
    * @return string|null
    */
    public function getEnableLemon()
    {
        return $this->container['enableLemon'];
    }

    /**
    * Sets enableLemon
    *
    * @param string|null $enableLemon 是否开启Lemon。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setEnableLemon($enableLemon)
    {
        $this->container['enableLemon'] = $enableLemon;
        return $this;
    }

    /**
    * Gets enableOpenTsdb
    *  是否开启OpenTSDB。 - false：不开启 - true：开启
    *
    * @return string|null
    */
    public function getEnableOpenTsdb()
    {
        return $this->container['enableOpenTsdb'];
    }

    /**
    * Sets enableOpenTsdb
    *
    * @param string|null $enableOpenTsdb 是否开启OpenTSDB。 - false：不开启 - true：开启
    *
    * @return $this
    */
    public function setEnableOpenTsdb($enableOpenTsdb)
    {
        $this->container['enableOpenTsdb'] = $enableOpenTsdb;
        return $this;
    }

    /**
    * Gets status
    *  集群状态： - 200：集群正常 - 300：集群异常 - 303：集群创建失败 - 400：集群已删除
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
    * @param string|null $status 集群状态： - 200：集群正常 - 300：集群异常 - 303：集群创建失败 - 400：集群已删除
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tags
    *  集群标识符。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 集群标识符。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets version
    *  集群版本号。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 集群版本号。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets zookeeperLink
    *  CloudTable集群ZooKeeper的链接地址。例如：cloudtable-3058-zk3-Dqcwuh6R.mycloudtable.com:2181,cloudtable-3058-zk2-TCwkZEie.mycloudtable.com:2181,cloudtable-3058-zk1-TBELUFOK.mycloudtable.com:2181
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
    * @param string|null $zookeeperLink CloudTable集群ZooKeeper的链接地址。例如：cloudtable-3058-zk3-Dqcwuh6R.mycloudtable.com:2181,cloudtable-3058-zk2-TCwkZEie.mycloudtable.com:2181,cloudtable-3058-zk1-TBELUFOK.mycloudtable.com:2181
    *
    * @return $this
    */
    public function setZookeeperLink($zookeeperLink)
    {
        $this->container['zookeeperLink'] = $zookeeperLink;
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


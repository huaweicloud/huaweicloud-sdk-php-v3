<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HtapInstanceListInstances implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HtapInstanceList_instances';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  HTAP实例ID，严格匹配UUID规则。
    * name  HTAP实例名。
    * engineName  HTAP数据库引擎名。
    * engineVersion  HTAP数据库引擎版本。
    * projectId  租户在某一region下的project ID
    * instanceState  instanceState
    * createAt  HTAP实例创建时间。
    * isFrozen  HTAP实例是否冻结。
    * haMode  HTAP实例部署模式。
    * payModel  计费模式。当前仅支持按需计费。 0：按需计费 1：包周期
    * orderId  包周期计费订单ID。
    * alterOrderId  包周期计费备用订单ID。
    * dataVip  读写内网地址。
    * readableNodeInfos  可读节点信息
    * proxyIps  代理IP。
    * dataVipV6  读写内网地址IPV6。
    * port  数据库访问端口。
    * availableZones  可用区信息。
    * currentActions  实例动作。
    * volumeType  存储类型。
    * serverType  服务器类型。
    * enterpriseProjectId  企业项目ID。如果帐户开通企业项目服务则该参数必选，未开启该参数不可选。
    * dedicatedResourceId  专属资源池ID，只有开通专属资源池后才支持此参数。
    * network  network
    * chMasterNodeId  ClickHouse主节点ID。
    * nodeNum  节点个数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'engineName' => 'string',
            'engineVersion' => 'string',
            'projectId' => 'string',
            'instanceState' => '\HuaweiCloud\SDK\GaussDB\V3\Model\HtapInstanceListInstanceState',
            'createAt' => 'int',
            'isFrozen' => 'bool',
            'haMode' => 'string',
            'payModel' => 'string',
            'orderId' => 'string',
            'alterOrderId' => 'string',
            'dataVip' => 'string',
            'readableNodeInfos' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ReadableNodeInfos[]',
            'proxyIps' => 'string[]',
            'dataVipV6' => 'string',
            'port' => 'int',
            'availableZones' => '\HuaweiCloud\SDK\GaussDB\V3\Model\HtapInstanceListAvailableZones[]',
            'currentActions' => '\HuaweiCloud\SDK\GaussDB\V3\Model\QueryAction[]',
            'volumeType' => 'string',
            'serverType' => 'string',
            'enterpriseProjectId' => 'string',
            'dedicatedResourceId' => 'string',
            'network' => '\HuaweiCloud\SDK\GaussDB\V3\Model\HtapInstanceListNetwork',
            'chMasterNodeId' => 'string',
            'nodeNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  HTAP实例ID，严格匹配UUID规则。
    * name  HTAP实例名。
    * engineName  HTAP数据库引擎名。
    * engineVersion  HTAP数据库引擎版本。
    * projectId  租户在某一region下的project ID
    * instanceState  instanceState
    * createAt  HTAP实例创建时间。
    * isFrozen  HTAP实例是否冻结。
    * haMode  HTAP实例部署模式。
    * payModel  计费模式。当前仅支持按需计费。 0：按需计费 1：包周期
    * orderId  包周期计费订单ID。
    * alterOrderId  包周期计费备用订单ID。
    * dataVip  读写内网地址。
    * readableNodeInfos  可读节点信息
    * proxyIps  代理IP。
    * dataVipV6  读写内网地址IPV6。
    * port  数据库访问端口。
    * availableZones  可用区信息。
    * currentActions  实例动作。
    * volumeType  存储类型。
    * serverType  服务器类型。
    * enterpriseProjectId  企业项目ID。如果帐户开通企业项目服务则该参数必选，未开启该参数不可选。
    * dedicatedResourceId  专属资源池ID，只有开通专属资源池后才支持此参数。
    * network  network
    * chMasterNodeId  ClickHouse主节点ID。
    * nodeNum  节点个数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'engineName' => null,
        'engineVersion' => null,
        'projectId' => null,
        'instanceState' => null,
        'createAt' => 'int64',
        'isFrozen' => null,
        'haMode' => null,
        'payModel' => null,
        'orderId' => null,
        'alterOrderId' => null,
        'dataVip' => null,
        'readableNodeInfos' => null,
        'proxyIps' => null,
        'dataVipV6' => null,
        'port' => 'int32',
        'availableZones' => null,
        'currentActions' => null,
        'volumeType' => null,
        'serverType' => null,
        'enterpriseProjectId' => null,
        'dedicatedResourceId' => null,
        'network' => null,
        'chMasterNodeId' => null,
        'nodeNum' => 'int32'
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
    * id  HTAP实例ID，严格匹配UUID规则。
    * name  HTAP实例名。
    * engineName  HTAP数据库引擎名。
    * engineVersion  HTAP数据库引擎版本。
    * projectId  租户在某一region下的project ID
    * instanceState  instanceState
    * createAt  HTAP实例创建时间。
    * isFrozen  HTAP实例是否冻结。
    * haMode  HTAP实例部署模式。
    * payModel  计费模式。当前仅支持按需计费。 0：按需计费 1：包周期
    * orderId  包周期计费订单ID。
    * alterOrderId  包周期计费备用订单ID。
    * dataVip  读写内网地址。
    * readableNodeInfos  可读节点信息
    * proxyIps  代理IP。
    * dataVipV6  读写内网地址IPV6。
    * port  数据库访问端口。
    * availableZones  可用区信息。
    * currentActions  实例动作。
    * volumeType  存储类型。
    * serverType  服务器类型。
    * enterpriseProjectId  企业项目ID。如果帐户开通企业项目服务则该参数必选，未开启该参数不可选。
    * dedicatedResourceId  专属资源池ID，只有开通专属资源池后才支持此参数。
    * network  network
    * chMasterNodeId  ClickHouse主节点ID。
    * nodeNum  节点个数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'engineName' => 'engine_name',
            'engineVersion' => 'engine_version',
            'projectId' => 'project_id',
            'instanceState' => 'instance_state',
            'createAt' => 'create_at',
            'isFrozen' => 'is_frozen',
            'haMode' => 'ha_mode',
            'payModel' => 'pay_model',
            'orderId' => 'order_id',
            'alterOrderId' => 'alter_order_id',
            'dataVip' => 'data_vip',
            'readableNodeInfos' => 'readable_node_infos',
            'proxyIps' => 'proxy_ips',
            'dataVipV6' => 'data_vip_v6',
            'port' => 'port',
            'availableZones' => 'available_zones',
            'currentActions' => 'current_actions',
            'volumeType' => 'volume_type',
            'serverType' => 'server_type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'dedicatedResourceId' => 'dedicated_resource_id',
            'network' => 'network',
            'chMasterNodeId' => 'ch_master_node_id',
            'nodeNum' => 'node_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  HTAP实例ID，严格匹配UUID规则。
    * name  HTAP实例名。
    * engineName  HTAP数据库引擎名。
    * engineVersion  HTAP数据库引擎版本。
    * projectId  租户在某一region下的project ID
    * instanceState  instanceState
    * createAt  HTAP实例创建时间。
    * isFrozen  HTAP实例是否冻结。
    * haMode  HTAP实例部署模式。
    * payModel  计费模式。当前仅支持按需计费。 0：按需计费 1：包周期
    * orderId  包周期计费订单ID。
    * alterOrderId  包周期计费备用订单ID。
    * dataVip  读写内网地址。
    * readableNodeInfos  可读节点信息
    * proxyIps  代理IP。
    * dataVipV6  读写内网地址IPV6。
    * port  数据库访问端口。
    * availableZones  可用区信息。
    * currentActions  实例动作。
    * volumeType  存储类型。
    * serverType  服务器类型。
    * enterpriseProjectId  企业项目ID。如果帐户开通企业项目服务则该参数必选，未开启该参数不可选。
    * dedicatedResourceId  专属资源池ID，只有开通专属资源池后才支持此参数。
    * network  network
    * chMasterNodeId  ClickHouse主节点ID。
    * nodeNum  节点个数。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'engineName' => 'setEngineName',
            'engineVersion' => 'setEngineVersion',
            'projectId' => 'setProjectId',
            'instanceState' => 'setInstanceState',
            'createAt' => 'setCreateAt',
            'isFrozen' => 'setIsFrozen',
            'haMode' => 'setHaMode',
            'payModel' => 'setPayModel',
            'orderId' => 'setOrderId',
            'alterOrderId' => 'setAlterOrderId',
            'dataVip' => 'setDataVip',
            'readableNodeInfos' => 'setReadableNodeInfos',
            'proxyIps' => 'setProxyIps',
            'dataVipV6' => 'setDataVipV6',
            'port' => 'setPort',
            'availableZones' => 'setAvailableZones',
            'currentActions' => 'setCurrentActions',
            'volumeType' => 'setVolumeType',
            'serverType' => 'setServerType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'dedicatedResourceId' => 'setDedicatedResourceId',
            'network' => 'setNetwork',
            'chMasterNodeId' => 'setChMasterNodeId',
            'nodeNum' => 'setNodeNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  HTAP实例ID，严格匹配UUID规则。
    * name  HTAP实例名。
    * engineName  HTAP数据库引擎名。
    * engineVersion  HTAP数据库引擎版本。
    * projectId  租户在某一region下的project ID
    * instanceState  instanceState
    * createAt  HTAP实例创建时间。
    * isFrozen  HTAP实例是否冻结。
    * haMode  HTAP实例部署模式。
    * payModel  计费模式。当前仅支持按需计费。 0：按需计费 1：包周期
    * orderId  包周期计费订单ID。
    * alterOrderId  包周期计费备用订单ID。
    * dataVip  读写内网地址。
    * readableNodeInfos  可读节点信息
    * proxyIps  代理IP。
    * dataVipV6  读写内网地址IPV6。
    * port  数据库访问端口。
    * availableZones  可用区信息。
    * currentActions  实例动作。
    * volumeType  存储类型。
    * serverType  服务器类型。
    * enterpriseProjectId  企业项目ID。如果帐户开通企业项目服务则该参数必选，未开启该参数不可选。
    * dedicatedResourceId  专属资源池ID，只有开通专属资源池后才支持此参数。
    * network  network
    * chMasterNodeId  ClickHouse主节点ID。
    * nodeNum  节点个数。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'engineName' => 'getEngineName',
            'engineVersion' => 'getEngineVersion',
            'projectId' => 'getProjectId',
            'instanceState' => 'getInstanceState',
            'createAt' => 'getCreateAt',
            'isFrozen' => 'getIsFrozen',
            'haMode' => 'getHaMode',
            'payModel' => 'getPayModel',
            'orderId' => 'getOrderId',
            'alterOrderId' => 'getAlterOrderId',
            'dataVip' => 'getDataVip',
            'readableNodeInfos' => 'getReadableNodeInfos',
            'proxyIps' => 'getProxyIps',
            'dataVipV6' => 'getDataVipV6',
            'port' => 'getPort',
            'availableZones' => 'getAvailableZones',
            'currentActions' => 'getCurrentActions',
            'volumeType' => 'getVolumeType',
            'serverType' => 'getServerType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'dedicatedResourceId' => 'getDedicatedResourceId',
            'network' => 'getNetwork',
            'chMasterNodeId' => 'getChMasterNodeId',
            'nodeNum' => 'getNodeNum'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['instanceState'] = isset($data['instanceState']) ? $data['instanceState'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['isFrozen'] = isset($data['isFrozen']) ? $data['isFrozen'] : null;
        $this->container['haMode'] = isset($data['haMode']) ? $data['haMode'] : null;
        $this->container['payModel'] = isset($data['payModel']) ? $data['payModel'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['alterOrderId'] = isset($data['alterOrderId']) ? $data['alterOrderId'] : null;
        $this->container['dataVip'] = isset($data['dataVip']) ? $data['dataVip'] : null;
        $this->container['readableNodeInfos'] = isset($data['readableNodeInfos']) ? $data['readableNodeInfos'] : null;
        $this->container['proxyIps'] = isset($data['proxyIps']) ? $data['proxyIps'] : null;
        $this->container['dataVipV6'] = isset($data['dataVipV6']) ? $data['dataVipV6'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['currentActions'] = isset($data['currentActions']) ? $data['currentActions'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['dedicatedResourceId'] = isset($data['dedicatedResourceId']) ? $data['dedicatedResourceId'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['chMasterNodeId'] = isset($data['chMasterNodeId']) ? $data['chMasterNodeId'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
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
    * Gets id
    *  HTAP实例ID，严格匹配UUID规则。
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
    * @param string|null $id HTAP实例ID，严格匹配UUID规则。
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
    *  HTAP实例名。
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
    * @param string|null $name HTAP实例名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets engineName
    *  HTAP数据库引擎名。
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName HTAP数据库引擎名。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets engineVersion
    *  HTAP数据库引擎版本。
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion HTAP数据库引擎版本。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets projectId
    *  租户在某一region下的project ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 租户在某一region下的project ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets instanceState
    *  instanceState
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\HtapInstanceListInstanceState|null
    */
    public function getInstanceState()
    {
        return $this->container['instanceState'];
    }

    /**
    * Sets instanceState
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\HtapInstanceListInstanceState|null $instanceState instanceState
    *
    * @return $this
    */
    public function setInstanceState($instanceState)
    {
        $this->container['instanceState'] = $instanceState;
        return $this;
    }

    /**
    * Gets createAt
    *  HTAP实例创建时间。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt HTAP实例创建时间。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets isFrozen
    *  HTAP实例是否冻结。
    *
    * @return bool|null
    */
    public function getIsFrozen()
    {
        return $this->container['isFrozen'];
    }

    /**
    * Sets isFrozen
    *
    * @param bool|null $isFrozen HTAP实例是否冻结。
    *
    * @return $this
    */
    public function setIsFrozen($isFrozen)
    {
        $this->container['isFrozen'] = $isFrozen;
        return $this;
    }

    /**
    * Gets haMode
    *  HTAP实例部署模式。
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
    * @param string|null $haMode HTAP实例部署模式。
    *
    * @return $this
    */
    public function setHaMode($haMode)
    {
        $this->container['haMode'] = $haMode;
        return $this;
    }

    /**
    * Gets payModel
    *  计费模式。当前仅支持按需计费。 0：按需计费 1：包周期
    *
    * @return string|null
    */
    public function getPayModel()
    {
        return $this->container['payModel'];
    }

    /**
    * Sets payModel
    *
    * @param string|null $payModel 计费模式。当前仅支持按需计费。 0：按需计费 1：包周期
    *
    * @return $this
    */
    public function setPayModel($payModel)
    {
        $this->container['payModel'] = $payModel;
        return $this;
    }

    /**
    * Gets orderId
    *  包周期计费订单ID。
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
    * @param string|null $orderId 包周期计费订单ID。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets alterOrderId
    *  包周期计费备用订单ID。
    *
    * @return string|null
    */
    public function getAlterOrderId()
    {
        return $this->container['alterOrderId'];
    }

    /**
    * Sets alterOrderId
    *
    * @param string|null $alterOrderId 包周期计费备用订单ID。
    *
    * @return $this
    */
    public function setAlterOrderId($alterOrderId)
    {
        $this->container['alterOrderId'] = $alterOrderId;
        return $this;
    }

    /**
    * Gets dataVip
    *  读写内网地址。
    *
    * @return string|null
    */
    public function getDataVip()
    {
        return $this->container['dataVip'];
    }

    /**
    * Sets dataVip
    *
    * @param string|null $dataVip 读写内网地址。
    *
    * @return $this
    */
    public function setDataVip($dataVip)
    {
        $this->container['dataVip'] = $dataVip;
        return $this;
    }

    /**
    * Gets readableNodeInfos
    *  可读节点信息
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ReadableNodeInfos[]|null
    */
    public function getReadableNodeInfos()
    {
        return $this->container['readableNodeInfos'];
    }

    /**
    * Sets readableNodeInfos
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ReadableNodeInfos[]|null $readableNodeInfos 可读节点信息
    *
    * @return $this
    */
    public function setReadableNodeInfos($readableNodeInfos)
    {
        $this->container['readableNodeInfos'] = $readableNodeInfos;
        return $this;
    }

    /**
    * Gets proxyIps
    *  代理IP。
    *
    * @return string[]|null
    */
    public function getProxyIps()
    {
        return $this->container['proxyIps'];
    }

    /**
    * Sets proxyIps
    *
    * @param string[]|null $proxyIps 代理IP。
    *
    * @return $this
    */
    public function setProxyIps($proxyIps)
    {
        $this->container['proxyIps'] = $proxyIps;
        return $this;
    }

    /**
    * Gets dataVipV6
    *  读写内网地址IPV6。
    *
    * @return string|null
    */
    public function getDataVipV6()
    {
        return $this->container['dataVipV6'];
    }

    /**
    * Sets dataVipV6
    *
    * @param string|null $dataVipV6 读写内网地址IPV6。
    *
    * @return $this
    */
    public function setDataVipV6($dataVipV6)
    {
        $this->container['dataVipV6'] = $dataVipV6;
        return $this;
    }

    /**
    * Gets port
    *  数据库访问端口。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 数据库访问端口。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets availableZones
    *  可用区信息。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\HtapInstanceListAvailableZones[]|null
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\HtapInstanceListAvailableZones[]|null $availableZones 可用区信息。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
        return $this;
    }

    /**
    * Gets currentActions
    *  实例动作。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\QueryAction[]|null
    */
    public function getCurrentActions()
    {
        return $this->container['currentActions'];
    }

    /**
    * Sets currentActions
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\QueryAction[]|null $currentActions 实例动作。
    *
    * @return $this
    */
    public function setCurrentActions($currentActions)
    {
        $this->container['currentActions'] = $currentActions;
        return $this;
    }

    /**
    * Gets volumeType
    *  存储类型。
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType 存储类型。
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets serverType
    *  服务器类型。
    *
    * @return string|null
    */
    public function getServerType()
    {
        return $this->container['serverType'];
    }

    /**
    * Sets serverType
    *
    * @param string|null $serverType 服务器类型。
    *
    * @return $this
    */
    public function setServerType($serverType)
    {
        $this->container['serverType'] = $serverType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。如果帐户开通企业项目服务则该参数必选，未开启该参数不可选。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。如果帐户开通企业项目服务则该参数必选，未开启该参数不可选。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets dedicatedResourceId
    *  专属资源池ID，只有开通专属资源池后才支持此参数。
    *
    * @return string|null
    */
    public function getDedicatedResourceId()
    {
        return $this->container['dedicatedResourceId'];
    }

    /**
    * Sets dedicatedResourceId
    *
    * @param string|null $dedicatedResourceId 专属资源池ID，只有开通专属资源池后才支持此参数。
    *
    * @return $this
    */
    public function setDedicatedResourceId($dedicatedResourceId)
    {
        $this->container['dedicatedResourceId'] = $dedicatedResourceId;
        return $this;
    }

    /**
    * Gets network
    *  network
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\HtapInstanceListNetwork|null
    */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
    * Sets network
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\HtapInstanceListNetwork|null $network network
    *
    * @return $this
    */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;
        return $this;
    }

    /**
    * Gets chMasterNodeId
    *  ClickHouse主节点ID。
    *
    * @return string|null
    */
    public function getChMasterNodeId()
    {
        return $this->container['chMasterNodeId'];
    }

    /**
    * Sets chMasterNodeId
    *
    * @param string|null $chMasterNodeId ClickHouse主节点ID。
    *
    * @return $this
    */
    public function setChMasterNodeId($chMasterNodeId)
    {
        $this->container['chMasterNodeId'] = $chMasterNodeId;
        return $this;
    }

    /**
    * Gets nodeNum
    *  节点个数。
    *
    * @return int|null
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int|null $nodeNum 节点个数。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
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


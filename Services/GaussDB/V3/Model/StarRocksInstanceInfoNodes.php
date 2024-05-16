<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StarRocksInstanceInfoNodes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StarRocksInstanceInfo_nodes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例节点ID。
    * name  实例节点名。
    * type  实例节点类型。
    * status  节点状态。  取值：  值为“creating”，表示节点正在创建。  值为“normal”，表示节点正常。  值为“abnormal”，表示节点异常。  值为“createfail”，表示节点创建失败。
    * period  实例节点周期。
    * volume  volume
    * cpu  实例节点cpu数量。
    * mem  实例节点内存大小（GB）。
    * datastore  datastore
    * actions  节点动作。
    * priority  节点优先级。
    * frozenFlag  冻结标志。
    * dbPort  数据库端口号。默认3306。
    * payModel  支付模式。
    * orderId  订单号。
    * trafficIp  数据IP。
    * trafficIpv6  数据IPV6。
    * azCode  可用区代码。
    * azDescription  可用区描述。
    * azType  可用区类型。
    * regionCode  实例所在区域。
    * createAt  节点创建时间。
    * updateAt  节点更新时间。
    * flavorId  节点规格ID。
    * flavorRef  节点规格码。
    * iassFlavorRef  IASS规格码。
    * maxConnections  公网最大连接数。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * needRestart  参数更新是否需要重启。
    * sgId  安全组。
    * paramGroup  参数组信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'status' => 'string',
            'period' => 'string',
            'volume' => '\HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoVolume',
            'cpu' => 'string',
            'mem' => 'string',
            'datastore' => '\HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoDatastore',
            'actions' => '\HuaweiCloud\SDK\GaussDB\V3\Model\QueryAction[]',
            'priority' => 'int',
            'frozenFlag' => 'int',
            'dbPort' => 'int',
            'payModel' => 'string',
            'orderId' => 'string',
            'trafficIp' => 'string',
            'trafficIpv6' => 'string',
            'azCode' => 'string',
            'azDescription' => 'string',
            'azType' => 'string',
            'regionCode' => 'string',
            'createAt' => 'int',
            'updateAt' => 'int',
            'flavorId' => 'string',
            'flavorRef' => 'string',
            'iassFlavorRef' => 'string',
            'maxConnections' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'needRestart' => 'bool',
            'sgId' => 'string',
            'paramGroup' => 'map[string,\HuaweiCloud\SDK\GaussDB\V3\Model\ParamGroup]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例节点ID。
    * name  实例节点名。
    * type  实例节点类型。
    * status  节点状态。  取值：  值为“creating”，表示节点正在创建。  值为“normal”，表示节点正常。  值为“abnormal”，表示节点异常。  值为“createfail”，表示节点创建失败。
    * period  实例节点周期。
    * volume  volume
    * cpu  实例节点cpu数量。
    * mem  实例节点内存大小（GB）。
    * datastore  datastore
    * actions  节点动作。
    * priority  节点优先级。
    * frozenFlag  冻结标志。
    * dbPort  数据库端口号。默认3306。
    * payModel  支付模式。
    * orderId  订单号。
    * trafficIp  数据IP。
    * trafficIpv6  数据IPV6。
    * azCode  可用区代码。
    * azDescription  可用区描述。
    * azType  可用区类型。
    * regionCode  实例所在区域。
    * createAt  节点创建时间。
    * updateAt  节点更新时间。
    * flavorId  节点规格ID。
    * flavorRef  节点规格码。
    * iassFlavorRef  IASS规格码。
    * maxConnections  公网最大连接数。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * needRestart  参数更新是否需要重启。
    * sgId  安全组。
    * paramGroup  参数组信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'status' => null,
        'period' => null,
        'volume' => null,
        'cpu' => null,
        'mem' => null,
        'datastore' => null,
        'actions' => null,
        'priority' => 'int32',
        'frozenFlag' => 'int32',
        'dbPort' => 'int32',
        'payModel' => null,
        'orderId' => null,
        'trafficIp' => null,
        'trafficIpv6' => null,
        'azCode' => null,
        'azDescription' => null,
        'azType' => null,
        'regionCode' => null,
        'createAt' => 'int64',
        'updateAt' => 'int64',
        'flavorId' => null,
        'flavorRef' => null,
        'iassFlavorRef' => null,
        'maxConnections' => null,
        'vpcId' => null,
        'subnetId' => null,
        'needRestart' => null,
        'sgId' => null,
        'paramGroup' => null
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
    * id  实例节点ID。
    * name  实例节点名。
    * type  实例节点类型。
    * status  节点状态。  取值：  值为“creating”，表示节点正在创建。  值为“normal”，表示节点正常。  值为“abnormal”，表示节点异常。  值为“createfail”，表示节点创建失败。
    * period  实例节点周期。
    * volume  volume
    * cpu  实例节点cpu数量。
    * mem  实例节点内存大小（GB）。
    * datastore  datastore
    * actions  节点动作。
    * priority  节点优先级。
    * frozenFlag  冻结标志。
    * dbPort  数据库端口号。默认3306。
    * payModel  支付模式。
    * orderId  订单号。
    * trafficIp  数据IP。
    * trafficIpv6  数据IPV6。
    * azCode  可用区代码。
    * azDescription  可用区描述。
    * azType  可用区类型。
    * regionCode  实例所在区域。
    * createAt  节点创建时间。
    * updateAt  节点更新时间。
    * flavorId  节点规格ID。
    * flavorRef  节点规格码。
    * iassFlavorRef  IASS规格码。
    * maxConnections  公网最大连接数。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * needRestart  参数更新是否需要重启。
    * sgId  安全组。
    * paramGroup  参数组信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'status' => 'status',
            'period' => 'period',
            'volume' => 'volume',
            'cpu' => 'cpu',
            'mem' => 'mem',
            'datastore' => 'datastore',
            'actions' => 'actions',
            'priority' => 'priority',
            'frozenFlag' => 'frozen_flag',
            'dbPort' => 'db_port',
            'payModel' => 'pay_model',
            'orderId' => 'order_id',
            'trafficIp' => 'traffic_ip',
            'trafficIpv6' => 'traffic_ipv6',
            'azCode' => 'az_code',
            'azDescription' => 'az_description',
            'azType' => 'az_type',
            'regionCode' => 'region_code',
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'flavorId' => 'flavor_id',
            'flavorRef' => 'flavor_ref',
            'iassFlavorRef' => 'iass_flavor_ref',
            'maxConnections' => 'max_connections',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'needRestart' => 'need_restart',
            'sgId' => 'sg_id',
            'paramGroup' => 'param_group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例节点ID。
    * name  实例节点名。
    * type  实例节点类型。
    * status  节点状态。  取值：  值为“creating”，表示节点正在创建。  值为“normal”，表示节点正常。  值为“abnormal”，表示节点异常。  值为“createfail”，表示节点创建失败。
    * period  实例节点周期。
    * volume  volume
    * cpu  实例节点cpu数量。
    * mem  实例节点内存大小（GB）。
    * datastore  datastore
    * actions  节点动作。
    * priority  节点优先级。
    * frozenFlag  冻结标志。
    * dbPort  数据库端口号。默认3306。
    * payModel  支付模式。
    * orderId  订单号。
    * trafficIp  数据IP。
    * trafficIpv6  数据IPV6。
    * azCode  可用区代码。
    * azDescription  可用区描述。
    * azType  可用区类型。
    * regionCode  实例所在区域。
    * createAt  节点创建时间。
    * updateAt  节点更新时间。
    * flavorId  节点规格ID。
    * flavorRef  节点规格码。
    * iassFlavorRef  IASS规格码。
    * maxConnections  公网最大连接数。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * needRestart  参数更新是否需要重启。
    * sgId  安全组。
    * paramGroup  参数组信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'status' => 'setStatus',
            'period' => 'setPeriod',
            'volume' => 'setVolume',
            'cpu' => 'setCpu',
            'mem' => 'setMem',
            'datastore' => 'setDatastore',
            'actions' => 'setActions',
            'priority' => 'setPriority',
            'frozenFlag' => 'setFrozenFlag',
            'dbPort' => 'setDbPort',
            'payModel' => 'setPayModel',
            'orderId' => 'setOrderId',
            'trafficIp' => 'setTrafficIp',
            'trafficIpv6' => 'setTrafficIpv6',
            'azCode' => 'setAzCode',
            'azDescription' => 'setAzDescription',
            'azType' => 'setAzType',
            'regionCode' => 'setRegionCode',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'flavorId' => 'setFlavorId',
            'flavorRef' => 'setFlavorRef',
            'iassFlavorRef' => 'setIassFlavorRef',
            'maxConnections' => 'setMaxConnections',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'needRestart' => 'setNeedRestart',
            'sgId' => 'setSgId',
            'paramGroup' => 'setParamGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例节点ID。
    * name  实例节点名。
    * type  实例节点类型。
    * status  节点状态。  取值：  值为“creating”，表示节点正在创建。  值为“normal”，表示节点正常。  值为“abnormal”，表示节点异常。  值为“createfail”，表示节点创建失败。
    * period  实例节点周期。
    * volume  volume
    * cpu  实例节点cpu数量。
    * mem  实例节点内存大小（GB）。
    * datastore  datastore
    * actions  节点动作。
    * priority  节点优先级。
    * frozenFlag  冻结标志。
    * dbPort  数据库端口号。默认3306。
    * payModel  支付模式。
    * orderId  订单号。
    * trafficIp  数据IP。
    * trafficIpv6  数据IPV6。
    * azCode  可用区代码。
    * azDescription  可用区描述。
    * azType  可用区类型。
    * regionCode  实例所在区域。
    * createAt  节点创建时间。
    * updateAt  节点更新时间。
    * flavorId  节点规格ID。
    * flavorRef  节点规格码。
    * iassFlavorRef  IASS规格码。
    * maxConnections  公网最大连接数。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * needRestart  参数更新是否需要重启。
    * sgId  安全组。
    * paramGroup  参数组信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'status' => 'getStatus',
            'period' => 'getPeriod',
            'volume' => 'getVolume',
            'cpu' => 'getCpu',
            'mem' => 'getMem',
            'datastore' => 'getDatastore',
            'actions' => 'getActions',
            'priority' => 'getPriority',
            'frozenFlag' => 'getFrozenFlag',
            'dbPort' => 'getDbPort',
            'payModel' => 'getPayModel',
            'orderId' => 'getOrderId',
            'trafficIp' => 'getTrafficIp',
            'trafficIpv6' => 'getTrafficIpv6',
            'azCode' => 'getAzCode',
            'azDescription' => 'getAzDescription',
            'azType' => 'getAzType',
            'regionCode' => 'getRegionCode',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'flavorId' => 'getFlavorId',
            'flavorRef' => 'getFlavorRef',
            'iassFlavorRef' => 'getIassFlavorRef',
            'maxConnections' => 'getMaxConnections',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'needRestart' => 'getNeedRestart',
            'sgId' => 'getSgId',
            'paramGroup' => 'getParamGroup'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['mem'] = isset($data['mem']) ? $data['mem'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['frozenFlag'] = isset($data['frozenFlag']) ? $data['frozenFlag'] : null;
        $this->container['dbPort'] = isset($data['dbPort']) ? $data['dbPort'] : null;
        $this->container['payModel'] = isset($data['payModel']) ? $data['payModel'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['trafficIp'] = isset($data['trafficIp']) ? $data['trafficIp'] : null;
        $this->container['trafficIpv6'] = isset($data['trafficIpv6']) ? $data['trafficIpv6'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['azDescription'] = isset($data['azDescription']) ? $data['azDescription'] : null;
        $this->container['azType'] = isset($data['azType']) ? $data['azType'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['iassFlavorRef'] = isset($data['iassFlavorRef']) ? $data['iassFlavorRef'] : null;
        $this->container['maxConnections'] = isset($data['maxConnections']) ? $data['maxConnections'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['needRestart'] = isset($data['needRestart']) ? $data['needRestart'] : null;
        $this->container['sgId'] = isset($data['sgId']) ? $data['sgId'] : null;
        $this->container['paramGroup'] = isset($data['paramGroup']) ? $data['paramGroup'] : null;
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
    *  实例节点ID。
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
    * @param string|null $id 实例节点ID。
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
    *  实例节点名。
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
    * @param string|null $name 实例节点名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  实例节点类型。
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
    * @param string|null $type 实例节点类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  节点状态。  取值：  值为“creating”，表示节点正在创建。  值为“normal”，表示节点正常。  值为“abnormal”，表示节点异常。  值为“createfail”，表示节点创建失败。
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
    * @param string|null $status 节点状态。  取值：  值为“creating”，表示节点正在创建。  值为“normal”，表示节点正常。  值为“abnormal”，表示节点异常。  值为“createfail”，表示节点创建失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets period
    *  实例节点周期。
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 实例节点周期。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoVolume|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoVolume|null $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets cpu
    *  实例节点cpu数量。
    *
    * @return string|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param string|null $cpu 实例节点cpu数量。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets mem
    *  实例节点内存大小（GB）。
    *
    * @return string|null
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param string|null $mem 实例节点内存大小（GB）。
    *
    * @return $this
    */
    public function setMem($mem)
    {
        $this->container['mem'] = $mem;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoDatastore|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoDatastore|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets actions
    *  节点动作。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\QueryAction[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\QueryAction[]|null $actions 节点动作。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets priority
    *  节点优先级。
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 节点优先级。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets frozenFlag
    *  冻结标志。
    *
    * @return int|null
    */
    public function getFrozenFlag()
    {
        return $this->container['frozenFlag'];
    }

    /**
    * Sets frozenFlag
    *
    * @param int|null $frozenFlag 冻结标志。
    *
    * @return $this
    */
    public function setFrozenFlag($frozenFlag)
    {
        $this->container['frozenFlag'] = $frozenFlag;
        return $this;
    }

    /**
    * Gets dbPort
    *  数据库端口号。默认3306。
    *
    * @return int|null
    */
    public function getDbPort()
    {
        return $this->container['dbPort'];
    }

    /**
    * Sets dbPort
    *
    * @param int|null $dbPort 数据库端口号。默认3306。
    *
    * @return $this
    */
    public function setDbPort($dbPort)
    {
        $this->container['dbPort'] = $dbPort;
        return $this;
    }

    /**
    * Gets payModel
    *  支付模式。
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
    * @param string|null $payModel 支付模式。
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
    *  订单号。
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
    * @param string|null $orderId 订单号。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets trafficIp
    *  数据IP。
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
    * @param string|null $trafficIp 数据IP。
    *
    * @return $this
    */
    public function setTrafficIp($trafficIp)
    {
        $this->container['trafficIp'] = $trafficIp;
        return $this;
    }

    /**
    * Gets trafficIpv6
    *  数据IPV6。
    *
    * @return string|null
    */
    public function getTrafficIpv6()
    {
        return $this->container['trafficIpv6'];
    }

    /**
    * Sets trafficIpv6
    *
    * @param string|null $trafficIpv6 数据IPV6。
    *
    * @return $this
    */
    public function setTrafficIpv6($trafficIpv6)
    {
        $this->container['trafficIpv6'] = $trafficIpv6;
        return $this;
    }

    /**
    * Gets azCode
    *  可用区代码。
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
    * @param string|null $azCode 可用区代码。
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets azDescription
    *  可用区描述。
    *
    * @return string|null
    */
    public function getAzDescription()
    {
        return $this->container['azDescription'];
    }

    /**
    * Sets azDescription
    *
    * @param string|null $azDescription 可用区描述。
    *
    * @return $this
    */
    public function setAzDescription($azDescription)
    {
        $this->container['azDescription'] = $azDescription;
        return $this;
    }

    /**
    * Gets azType
    *  可用区类型。
    *
    * @return string|null
    */
    public function getAzType()
    {
        return $this->container['azType'];
    }

    /**
    * Sets azType
    *
    * @param string|null $azType 可用区类型。
    *
    * @return $this
    */
    public function setAzType($azType)
    {
        $this->container['azType'] = $azType;
        return $this;
    }

    /**
    * Gets regionCode
    *  实例所在区域。
    *
    * @return string|null
    */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
    * Sets regionCode
    *
    * @param string|null $regionCode 实例所在区域。
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
    * Gets createAt
    *  节点创建时间。
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
    * @param int|null $createAt 节点创建时间。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  节点更新时间。
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt 节点更新时间。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets flavorId
    *  节点规格ID。
    *
    * @return string|null
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string|null $flavorId 节点规格ID。
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets flavorRef
    *  节点规格码。
    *
    * @return string|null
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string|null $flavorRef 节点规格码。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets iassFlavorRef
    *  IASS规格码。
    *
    * @return string|null
    */
    public function getIassFlavorRef()
    {
        return $this->container['iassFlavorRef'];
    }

    /**
    * Sets iassFlavorRef
    *
    * @param string|null $iassFlavorRef IASS规格码。
    *
    * @return $this
    */
    public function setIassFlavorRef($iassFlavorRef)
    {
        $this->container['iassFlavorRef'] = $iassFlavorRef;
        return $this;
    }

    /**
    * Gets maxConnections
    *  公网最大连接数。
    *
    * @return string|null
    */
    public function getMaxConnections()
    {
        return $this->container['maxConnections'];
    }

    /**
    * Sets maxConnections
    *
    * @param string|null $maxConnections 公网最大连接数。
    *
    * @return $this
    */
    public function setMaxConnections($maxConnections)
    {
        $this->container['maxConnections'] = $maxConnections;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID。
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
    * @param string|null $vpcId 虚拟私有云ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网ID。
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
    * @param string|null $subnetId 子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets needRestart
    *  参数更新是否需要重启。
    *
    * @return bool|null
    */
    public function getNeedRestart()
    {
        return $this->container['needRestart'];
    }

    /**
    * Sets needRestart
    *
    * @param bool|null $needRestart 参数更新是否需要重启。
    *
    * @return $this
    */
    public function setNeedRestart($needRestart)
    {
        $this->container['needRestart'] = $needRestart;
        return $this;
    }

    /**
    * Gets sgId
    *  安全组。
    *
    * @return string|null
    */
    public function getSgId()
    {
        return $this->container['sgId'];
    }

    /**
    * Sets sgId
    *
    * @param string|null $sgId 安全组。
    *
    * @return $this
    */
    public function setSgId($sgId)
    {
        $this->container['sgId'] = $sgId;
        return $this;
    }

    /**
    * Gets paramGroup
    *  参数组信息。
    *
    * @return map[string,\HuaweiCloud\SDK\GaussDB\V3\Model\ParamGroup]|null
    */
    public function getParamGroup()
    {
        return $this->container['paramGroup'];
    }

    /**
    * Sets paramGroup
    *
    * @param map[string,\HuaweiCloud\SDK\GaussDB\V3\Model\ParamGroup]|null $paramGroup 参数组信息。
    *
    * @return $this
    */
    public function setParamGroup($paramGroup)
    {
        $this->container['paramGroup'] = $paramGroup;
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


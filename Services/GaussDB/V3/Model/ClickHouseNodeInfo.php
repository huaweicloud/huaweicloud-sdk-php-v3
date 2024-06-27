<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClickHouseNodeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClickHouseNodeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例节点ID。
    * name  实例节点名。
    * type  实例节点类型。 取值范围： - master：主节点 - slave：备节点
    * status  实例节点状态。
    * period  实例节点周期。
    * volume  volume
    * cpu  实例节点cpu数量。
    * mem  实例节点内存大小（GB）。
    * datastore  datastore
    * priority  节点优先级。
    * frozenFlag  冻结标志。 取值范围： - 0：不冻结 - 1：冻结
    * dbPort  数据库端口号。取值范围：0~65535。
    * payModel  支付模式。 取值范围： - 0：按需计费 - 1：包周期
    * orderId  包周期订单ID。
    * trafficIp  节点数据ip。
    * trafficIpv6  节点数据ipv6。
    * trafficVip  节点数据vip。
    * trafficVipv6  节点数据vipV6。
    * azCode  可用区。
    * azDescription  可用区描述。
    * azType  可用区类型。
    * region  节点所在区。
    * createAt  节点创建时间。
    * updateAt  节点更新时间。
    * flavorId  节点规格ID。
    * flavorRef  节点规格码。
    * iassFlavorRef  IASS规格码。
    * maxConnections  公网最大连接数。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * needRestart  参数更新是否需要重启。
    * sgId  安全组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'status' => 'string',
            'period' => 'string',
            'volume' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ClickHouseNodeInfoVolume',
            'cpu' => 'string',
            'mem' => 'string',
            'datastore' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ClickHouseNodeInfoDatastore',
            'priority' => 'int',
            'frozenFlag' => 'int',
            'dbPort' => 'int',
            'payModel' => 'string',
            'orderId' => 'string',
            'trafficIp' => 'string',
            'trafficIpv6' => 'string',
            'trafficVip' => 'string',
            'trafficVipv6' => 'string',
            'azCode' => 'string',
            'azDescription' => 'string',
            'azType' => 'string',
            'region' => 'string',
            'createAt' => 'int',
            'updateAt' => 'int',
            'flavorId' => 'string',
            'flavorRef' => 'string',
            'iassFlavorRef' => 'string',
            'maxConnections' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'needRestart' => 'bool',
            'sgId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例节点ID。
    * name  实例节点名。
    * type  实例节点类型。 取值范围： - master：主节点 - slave：备节点
    * status  实例节点状态。
    * period  实例节点周期。
    * volume  volume
    * cpu  实例节点cpu数量。
    * mem  实例节点内存大小（GB）。
    * datastore  datastore
    * priority  节点优先级。
    * frozenFlag  冻结标志。 取值范围： - 0：不冻结 - 1：冻结
    * dbPort  数据库端口号。取值范围：0~65535。
    * payModel  支付模式。 取值范围： - 0：按需计费 - 1：包周期
    * orderId  包周期订单ID。
    * trafficIp  节点数据ip。
    * trafficIpv6  节点数据ipv6。
    * trafficVip  节点数据vip。
    * trafficVipv6  节点数据vipV6。
    * azCode  可用区。
    * azDescription  可用区描述。
    * azType  可用区类型。
    * region  节点所在区。
    * createAt  节点创建时间。
    * updateAt  节点更新时间。
    * flavorId  节点规格ID。
    * flavorRef  节点规格码。
    * iassFlavorRef  IASS规格码。
    * maxConnections  公网最大连接数。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * needRestart  参数更新是否需要重启。
    * sgId  安全组
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
        'priority' => 'int32',
        'frozenFlag' => 'int32',
        'dbPort' => 'int32',
        'payModel' => null,
        'orderId' => null,
        'trafficIp' => null,
        'trafficIpv6' => null,
        'trafficVip' => null,
        'trafficVipv6' => null,
        'azCode' => null,
        'azDescription' => null,
        'azType' => null,
        'region' => null,
        'createAt' => 'int64',
        'updateAt' => 'int64',
        'flavorId' => null,
        'flavorRef' => null,
        'iassFlavorRef' => null,
        'maxConnections' => null,
        'vpcId' => null,
        'subnetId' => null,
        'needRestart' => null,
        'sgId' => null
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
    * type  实例节点类型。 取值范围： - master：主节点 - slave：备节点
    * status  实例节点状态。
    * period  实例节点周期。
    * volume  volume
    * cpu  实例节点cpu数量。
    * mem  实例节点内存大小（GB）。
    * datastore  datastore
    * priority  节点优先级。
    * frozenFlag  冻结标志。 取值范围： - 0：不冻结 - 1：冻结
    * dbPort  数据库端口号。取值范围：0~65535。
    * payModel  支付模式。 取值范围： - 0：按需计费 - 1：包周期
    * orderId  包周期订单ID。
    * trafficIp  节点数据ip。
    * trafficIpv6  节点数据ipv6。
    * trafficVip  节点数据vip。
    * trafficVipv6  节点数据vipV6。
    * azCode  可用区。
    * azDescription  可用区描述。
    * azType  可用区类型。
    * region  节点所在区。
    * createAt  节点创建时间。
    * updateAt  节点更新时间。
    * flavorId  节点规格ID。
    * flavorRef  节点规格码。
    * iassFlavorRef  IASS规格码。
    * maxConnections  公网最大连接数。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * needRestart  参数更新是否需要重启。
    * sgId  安全组
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
            'priority' => 'priority',
            'frozenFlag' => 'frozen_flag',
            'dbPort' => 'db_port',
            'payModel' => 'pay_model',
            'orderId' => 'order_id',
            'trafficIp' => 'traffic_ip',
            'trafficIpv6' => 'traffic_ipv6',
            'trafficVip' => 'traffic_vip',
            'trafficVipv6' => 'traffic_vipv6',
            'azCode' => 'az_code',
            'azDescription' => 'az_description',
            'azType' => 'az_type',
            'region' => 'region',
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'flavorId' => 'flavor_id',
            'flavorRef' => 'flavor_ref',
            'iassFlavorRef' => 'iass_flavor_ref',
            'maxConnections' => 'max_connections',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'needRestart' => 'need_restart',
            'sgId' => 'sg_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例节点ID。
    * name  实例节点名。
    * type  实例节点类型。 取值范围： - master：主节点 - slave：备节点
    * status  实例节点状态。
    * period  实例节点周期。
    * volume  volume
    * cpu  实例节点cpu数量。
    * mem  实例节点内存大小（GB）。
    * datastore  datastore
    * priority  节点优先级。
    * frozenFlag  冻结标志。 取值范围： - 0：不冻结 - 1：冻结
    * dbPort  数据库端口号。取值范围：0~65535。
    * payModel  支付模式。 取值范围： - 0：按需计费 - 1：包周期
    * orderId  包周期订单ID。
    * trafficIp  节点数据ip。
    * trafficIpv6  节点数据ipv6。
    * trafficVip  节点数据vip。
    * trafficVipv6  节点数据vipV6。
    * azCode  可用区。
    * azDescription  可用区描述。
    * azType  可用区类型。
    * region  节点所在区。
    * createAt  节点创建时间。
    * updateAt  节点更新时间。
    * flavorId  节点规格ID。
    * flavorRef  节点规格码。
    * iassFlavorRef  IASS规格码。
    * maxConnections  公网最大连接数。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * needRestart  参数更新是否需要重启。
    * sgId  安全组
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
            'priority' => 'setPriority',
            'frozenFlag' => 'setFrozenFlag',
            'dbPort' => 'setDbPort',
            'payModel' => 'setPayModel',
            'orderId' => 'setOrderId',
            'trafficIp' => 'setTrafficIp',
            'trafficIpv6' => 'setTrafficIpv6',
            'trafficVip' => 'setTrafficVip',
            'trafficVipv6' => 'setTrafficVipv6',
            'azCode' => 'setAzCode',
            'azDescription' => 'setAzDescription',
            'azType' => 'setAzType',
            'region' => 'setRegion',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'flavorId' => 'setFlavorId',
            'flavorRef' => 'setFlavorRef',
            'iassFlavorRef' => 'setIassFlavorRef',
            'maxConnections' => 'setMaxConnections',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'needRestart' => 'setNeedRestart',
            'sgId' => 'setSgId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例节点ID。
    * name  实例节点名。
    * type  实例节点类型。 取值范围： - master：主节点 - slave：备节点
    * status  实例节点状态。
    * period  实例节点周期。
    * volume  volume
    * cpu  实例节点cpu数量。
    * mem  实例节点内存大小（GB）。
    * datastore  datastore
    * priority  节点优先级。
    * frozenFlag  冻结标志。 取值范围： - 0：不冻结 - 1：冻结
    * dbPort  数据库端口号。取值范围：0~65535。
    * payModel  支付模式。 取值范围： - 0：按需计费 - 1：包周期
    * orderId  包周期订单ID。
    * trafficIp  节点数据ip。
    * trafficIpv6  节点数据ipv6。
    * trafficVip  节点数据vip。
    * trafficVipv6  节点数据vipV6。
    * azCode  可用区。
    * azDescription  可用区描述。
    * azType  可用区类型。
    * region  节点所在区。
    * createAt  节点创建时间。
    * updateAt  节点更新时间。
    * flavorId  节点规格ID。
    * flavorRef  节点规格码。
    * iassFlavorRef  IASS规格码。
    * maxConnections  公网最大连接数。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * needRestart  参数更新是否需要重启。
    * sgId  安全组
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
            'priority' => 'getPriority',
            'frozenFlag' => 'getFrozenFlag',
            'dbPort' => 'getDbPort',
            'payModel' => 'getPayModel',
            'orderId' => 'getOrderId',
            'trafficIp' => 'getTrafficIp',
            'trafficIpv6' => 'getTrafficIpv6',
            'trafficVip' => 'getTrafficVip',
            'trafficVipv6' => 'getTrafficVipv6',
            'azCode' => 'getAzCode',
            'azDescription' => 'getAzDescription',
            'azType' => 'getAzType',
            'region' => 'getRegion',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'flavorId' => 'getFlavorId',
            'flavorRef' => 'getFlavorRef',
            'iassFlavorRef' => 'getIassFlavorRef',
            'maxConnections' => 'getMaxConnections',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'needRestart' => 'getNeedRestart',
            'sgId' => 'getSgId'
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
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['frozenFlag'] = isset($data['frozenFlag']) ? $data['frozenFlag'] : null;
        $this->container['dbPort'] = isset($data['dbPort']) ? $data['dbPort'] : null;
        $this->container['payModel'] = isset($data['payModel']) ? $data['payModel'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['trafficIp'] = isset($data['trafficIp']) ? $data['trafficIp'] : null;
        $this->container['trafficIpv6'] = isset($data['trafficIpv6']) ? $data['trafficIpv6'] : null;
        $this->container['trafficVip'] = isset($data['trafficVip']) ? $data['trafficVip'] : null;
        $this->container['trafficVipv6'] = isset($data['trafficVipv6']) ? $data['trafficVipv6'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['azDescription'] = isset($data['azDescription']) ? $data['azDescription'] : null;
        $this->container['azType'] = isset($data['azType']) ? $data['azType'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
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
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
        if ($this->container['cpu'] === null) {
            $invalidProperties[] = "'cpu' can't be null";
        }
        if ($this->container['mem'] === null) {
            $invalidProperties[] = "'mem' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['frozenFlag'] === null) {
            $invalidProperties[] = "'frozenFlag' can't be null";
        }
        if ($this->container['dbPort'] === null) {
            $invalidProperties[] = "'dbPort' can't be null";
        }
        if ($this->container['payModel'] === null) {
            $invalidProperties[] = "'payModel' can't be null";
        }
        if ($this->container['trafficIp'] === null) {
            $invalidProperties[] = "'trafficIp' can't be null";
        }
        if ($this->container['azCode'] === null) {
            $invalidProperties[] = "'azCode' can't be null";
        }
        if ($this->container['azDescription'] === null) {
            $invalidProperties[] = "'azDescription' can't be null";
        }
        if ($this->container['azType'] === null) {
            $invalidProperties[] = "'azType' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['createAt'] === null) {
            $invalidProperties[] = "'createAt' can't be null";
        }
        if ($this->container['updateAt'] === null) {
            $invalidProperties[] = "'updateAt' can't be null";
        }
        if ($this->container['flavorId'] === null) {
            $invalidProperties[] = "'flavorId' can't be null";
        }
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['iassFlavorRef'] === null) {
            $invalidProperties[] = "'iassFlavorRef' can't be null";
        }
        if ($this->container['maxConnections'] === null) {
            $invalidProperties[] = "'maxConnections' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['needRestart'] === null) {
            $invalidProperties[] = "'needRestart' can't be null";
        }
        if ($this->container['sgId'] === null) {
            $invalidProperties[] = "'sgId' can't be null";
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
    * Gets id
    *  实例节点ID。
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
    * @param string $id 实例节点ID。
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
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 实例节点名。
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
    *  实例节点类型。 取值范围： - master：主节点 - slave：备节点
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
    * @param string $type 实例节点类型。 取值范围： - master：主节点 - slave：备节点
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
    *  实例节点状态。
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
    * @param string $status 实例节点状态。
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
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ClickHouseNodeInfoVolume
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ClickHouseNodeInfoVolume $volume volume
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
    * @return string
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param string $cpu 实例节点cpu数量。
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
    * @return string
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param string $mem 实例节点内存大小（GB）。
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
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ClickHouseNodeInfoDatastore
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ClickHouseNodeInfoDatastore $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets priority
    *  节点优先级。
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority 节点优先级。
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
    *  冻结标志。 取值范围： - 0：不冻结 - 1：冻结
    *
    * @return int
    */
    public function getFrozenFlag()
    {
        return $this->container['frozenFlag'];
    }

    /**
    * Sets frozenFlag
    *
    * @param int $frozenFlag 冻结标志。 取值范围： - 0：不冻结 - 1：冻结
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
    *  数据库端口号。取值范围：0~65535。
    *
    * @return int
    */
    public function getDbPort()
    {
        return $this->container['dbPort'];
    }

    /**
    * Sets dbPort
    *
    * @param int $dbPort 数据库端口号。取值范围：0~65535。
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
    *  支付模式。 取值范围： - 0：按需计费 - 1：包周期
    *
    * @return string
    */
    public function getPayModel()
    {
        return $this->container['payModel'];
    }

    /**
    * Sets payModel
    *
    * @param string $payModel 支付模式。 取值范围： - 0：按需计费 - 1：包周期
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
    *  包周期订单ID。
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
    * @param string|null $orderId 包周期订单ID。
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
    *  节点数据ip。
    *
    * @return string
    */
    public function getTrafficIp()
    {
        return $this->container['trafficIp'];
    }

    /**
    * Sets trafficIp
    *
    * @param string $trafficIp 节点数据ip。
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
    *  节点数据ipv6。
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
    * @param string|null $trafficIpv6 节点数据ipv6。
    *
    * @return $this
    */
    public function setTrafficIpv6($trafficIpv6)
    {
        $this->container['trafficIpv6'] = $trafficIpv6;
        return $this;
    }

    /**
    * Gets trafficVip
    *  节点数据vip。
    *
    * @return string|null
    */
    public function getTrafficVip()
    {
        return $this->container['trafficVip'];
    }

    /**
    * Sets trafficVip
    *
    * @param string|null $trafficVip 节点数据vip。
    *
    * @return $this
    */
    public function setTrafficVip($trafficVip)
    {
        $this->container['trafficVip'] = $trafficVip;
        return $this;
    }

    /**
    * Gets trafficVipv6
    *  节点数据vipV6。
    *
    * @return string|null
    */
    public function getTrafficVipv6()
    {
        return $this->container['trafficVipv6'];
    }

    /**
    * Sets trafficVipv6
    *
    * @param string|null $trafficVipv6 节点数据vipV6。
    *
    * @return $this
    */
    public function setTrafficVipv6($trafficVipv6)
    {
        $this->container['trafficVipv6'] = $trafficVipv6;
        return $this;
    }

    /**
    * Gets azCode
    *  可用区。
    *
    * @return string
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string $azCode 可用区。
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
    * @return string
    */
    public function getAzDescription()
    {
        return $this->container['azDescription'];
    }

    /**
    * Sets azDescription
    *
    * @param string $azDescription 可用区描述。
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
    * @return string
    */
    public function getAzType()
    {
        return $this->container['azType'];
    }

    /**
    * Sets azType
    *
    * @param string $azType 可用区类型。
    *
    * @return $this
    */
    public function setAzType($azType)
    {
        $this->container['azType'] = $azType;
        return $this;
    }

    /**
    * Gets region
    *  节点所在区。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 节点所在区。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets createAt
    *  节点创建时间。
    *
    * @return int
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int $createAt 节点创建时间。
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
    * @return int
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int $updateAt 节点更新时间。
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
    * @return string
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string $flavorId 节点规格ID。
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
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef 节点规格码。
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
    * @return string
    */
    public function getIassFlavorRef()
    {
        return $this->container['iassFlavorRef'];
    }

    /**
    * Sets iassFlavorRef
    *
    * @param string $iassFlavorRef IASS规格码。
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
    * @return string
    */
    public function getMaxConnections()
    {
        return $this->container['maxConnections'];
    }

    /**
    * Sets maxConnections
    *
    * @param string $maxConnections 公网最大连接数。
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
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 虚拟私有云ID。
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
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 子网ID。
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
    * @return bool
    */
    public function getNeedRestart()
    {
        return $this->container['needRestart'];
    }

    /**
    * Sets needRestart
    *
    * @param bool $needRestart 参数更新是否需要重启。
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
    *  安全组
    *
    * @return string
    */
    public function getSgId()
    {
        return $this->container['sgId'];
    }

    /**
    * Sets sgId
    *
    * @param string $sgId 安全组
    *
    * @return $this
    */
    public function setSgId($sgId)
    {
        $this->container['sgId'] = $sgId;
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


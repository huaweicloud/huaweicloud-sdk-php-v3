<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。 如果id以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的id精确匹配查询。
    * name  实例名称。 如果name以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的name精确匹配查询。
    * mode  实例类型。   - 取值为“Cluster”，表示GaussDB(for Cassandra)、GaussDB(for Influx)、GaussDB(for Redis)集群实例类型。   - 取值为“Sharding”，表示GaussDB(for Mongo)集群实例类型。   - 取值为“ReplicaSet”，表示GaussDB(for Mongo)副本集实例类型。   - 取值为“InfluxdbCluster”，表示GaussDB(for Influx)集群实例类型。   - 取值为“InfluxdbSingle”，表示GaussDB(for Influx)单节点实例类型。   - 取值为“RedisReplica”，表示GaussDB(for Redis)性能版实例类型。   - 取值为“Replication”，表示GaussDB(for Redis)主备版实例类型。
    * datastoreType  数据库类型。   - 取值为“cassandra”，表示查询GaussDB(for Cassandra)数据库实例。   - 取值为“mongodb”，表示查询GaussDB(for Mongo)数据库实例。   - 取值为“influxdb”，表示查询GaussDB(for Influx)数据库实例。   - 取值为“redis”，表示查询GaussDB(for Redis)数据库实例。   - 如果不传该参数，表示查询所有数据库实例。
    * vpcId  虚拟私有云ID，获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询VPC列表。
    * subnetId  子网的网络ID，获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询子网列表。
    * offset  索引位置偏移量，表示从指定project ID下最新的实例创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的实例信息。 取值大于或等于0。不传该参数时，查询偏移量默认为0，表示从最新的实例创建时间对应的实例开始查询。
    * limit  查询实例个数上限值。 取值范围：1~100。不传该参数时，默认查询前100条实例信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'mode' => 'string',
            'datastoreType' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。 如果id以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的id精确匹配查询。
    * name  实例名称。 如果name以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的name精确匹配查询。
    * mode  实例类型。   - 取值为“Cluster”，表示GaussDB(for Cassandra)、GaussDB(for Influx)、GaussDB(for Redis)集群实例类型。   - 取值为“Sharding”，表示GaussDB(for Mongo)集群实例类型。   - 取值为“ReplicaSet”，表示GaussDB(for Mongo)副本集实例类型。   - 取值为“InfluxdbCluster”，表示GaussDB(for Influx)集群实例类型。   - 取值为“InfluxdbSingle”，表示GaussDB(for Influx)单节点实例类型。   - 取值为“RedisReplica”，表示GaussDB(for Redis)性能版实例类型。   - 取值为“Replication”，表示GaussDB(for Redis)主备版实例类型。
    * datastoreType  数据库类型。   - 取值为“cassandra”，表示查询GaussDB(for Cassandra)数据库实例。   - 取值为“mongodb”，表示查询GaussDB(for Mongo)数据库实例。   - 取值为“influxdb”，表示查询GaussDB(for Influx)数据库实例。   - 取值为“redis”，表示查询GaussDB(for Redis)数据库实例。   - 如果不传该参数，表示查询所有数据库实例。
    * vpcId  虚拟私有云ID，获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询VPC列表。
    * subnetId  子网的网络ID，获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询子网列表。
    * offset  索引位置偏移量，表示从指定project ID下最新的实例创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的实例信息。 取值大于或等于0。不传该参数时，查询偏移量默认为0，表示从最新的实例创建时间对应的实例开始查询。
    * limit  查询实例个数上限值。 取值范围：1~100。不传该参数时，默认查询前100条实例信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'mode' => null,
        'datastoreType' => null,
        'vpcId' => null,
        'subnetId' => null,
        'offset' => null,
        'limit' => null
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
    * id  实例ID。 如果id以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的id精确匹配查询。
    * name  实例名称。 如果name以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的name精确匹配查询。
    * mode  实例类型。   - 取值为“Cluster”，表示GaussDB(for Cassandra)、GaussDB(for Influx)、GaussDB(for Redis)集群实例类型。   - 取值为“Sharding”，表示GaussDB(for Mongo)集群实例类型。   - 取值为“ReplicaSet”，表示GaussDB(for Mongo)副本集实例类型。   - 取值为“InfluxdbCluster”，表示GaussDB(for Influx)集群实例类型。   - 取值为“InfluxdbSingle”，表示GaussDB(for Influx)单节点实例类型。   - 取值为“RedisReplica”，表示GaussDB(for Redis)性能版实例类型。   - 取值为“Replication”，表示GaussDB(for Redis)主备版实例类型。
    * datastoreType  数据库类型。   - 取值为“cassandra”，表示查询GaussDB(for Cassandra)数据库实例。   - 取值为“mongodb”，表示查询GaussDB(for Mongo)数据库实例。   - 取值为“influxdb”，表示查询GaussDB(for Influx)数据库实例。   - 取值为“redis”，表示查询GaussDB(for Redis)数据库实例。   - 如果不传该参数，表示查询所有数据库实例。
    * vpcId  虚拟私有云ID，获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询VPC列表。
    * subnetId  子网的网络ID，获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询子网列表。
    * offset  索引位置偏移量，表示从指定project ID下最新的实例创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的实例信息。 取值大于或等于0。不传该参数时，查询偏移量默认为0，表示从最新的实例创建时间对应的实例开始查询。
    * limit  查询实例个数上限值。 取值范围：1~100。不传该参数时，默认查询前100条实例信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'mode' => 'mode',
            'datastoreType' => 'datastore_type',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。 如果id以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的id精确匹配查询。
    * name  实例名称。 如果name以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的name精确匹配查询。
    * mode  实例类型。   - 取值为“Cluster”，表示GaussDB(for Cassandra)、GaussDB(for Influx)、GaussDB(for Redis)集群实例类型。   - 取值为“Sharding”，表示GaussDB(for Mongo)集群实例类型。   - 取值为“ReplicaSet”，表示GaussDB(for Mongo)副本集实例类型。   - 取值为“InfluxdbCluster”，表示GaussDB(for Influx)集群实例类型。   - 取值为“InfluxdbSingle”，表示GaussDB(for Influx)单节点实例类型。   - 取值为“RedisReplica”，表示GaussDB(for Redis)性能版实例类型。   - 取值为“Replication”，表示GaussDB(for Redis)主备版实例类型。
    * datastoreType  数据库类型。   - 取值为“cassandra”，表示查询GaussDB(for Cassandra)数据库实例。   - 取值为“mongodb”，表示查询GaussDB(for Mongo)数据库实例。   - 取值为“influxdb”，表示查询GaussDB(for Influx)数据库实例。   - 取值为“redis”，表示查询GaussDB(for Redis)数据库实例。   - 如果不传该参数，表示查询所有数据库实例。
    * vpcId  虚拟私有云ID，获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询VPC列表。
    * subnetId  子网的网络ID，获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询子网列表。
    * offset  索引位置偏移量，表示从指定project ID下最新的实例创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的实例信息。 取值大于或等于0。不传该参数时，查询偏移量默认为0，表示从最新的实例创建时间对应的实例开始查询。
    * limit  查询实例个数上限值。 取值范围：1~100。不传该参数时，默认查询前100条实例信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'mode' => 'setMode',
            'datastoreType' => 'setDatastoreType',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。 如果id以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的id精确匹配查询。
    * name  实例名称。 如果name以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的name精确匹配查询。
    * mode  实例类型。   - 取值为“Cluster”，表示GaussDB(for Cassandra)、GaussDB(for Influx)、GaussDB(for Redis)集群实例类型。   - 取值为“Sharding”，表示GaussDB(for Mongo)集群实例类型。   - 取值为“ReplicaSet”，表示GaussDB(for Mongo)副本集实例类型。   - 取值为“InfluxdbCluster”，表示GaussDB(for Influx)集群实例类型。   - 取值为“InfluxdbSingle”，表示GaussDB(for Influx)单节点实例类型。   - 取值为“RedisReplica”，表示GaussDB(for Redis)性能版实例类型。   - 取值为“Replication”，表示GaussDB(for Redis)主备版实例类型。
    * datastoreType  数据库类型。   - 取值为“cassandra”，表示查询GaussDB(for Cassandra)数据库实例。   - 取值为“mongodb”，表示查询GaussDB(for Mongo)数据库实例。   - 取值为“influxdb”，表示查询GaussDB(for Influx)数据库实例。   - 取值为“redis”，表示查询GaussDB(for Redis)数据库实例。   - 如果不传该参数，表示查询所有数据库实例。
    * vpcId  虚拟私有云ID，获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询VPC列表。
    * subnetId  子网的网络ID，获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询子网列表。
    * offset  索引位置偏移量，表示从指定project ID下最新的实例创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的实例信息。 取值大于或等于0。不传该参数时，查询偏移量默认为0，表示从最新的实例创建时间对应的实例开始查询。
    * limit  查询实例个数上限值。 取值范围：1~100。不传该参数时，默认查询前100条实例信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'mode' => 'getMode',
            'datastoreType' => 'getDatastoreType',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
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
    *  实例ID。 如果id以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的id精确匹配查询。
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
    * @param string|null $id 实例ID。 如果id以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的id精确匹配查询。
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
    *  实例名称。 如果name以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的name精确匹配查询。
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
    * @param string|null $name 实例名称。 如果name以“*”起始，表示按照“*”后面的值模糊匹配，否则，按照实际填写的name精确匹配查询。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets mode
    *  实例类型。   - 取值为“Cluster”，表示GaussDB(for Cassandra)、GaussDB(for Influx)、GaussDB(for Redis)集群实例类型。   - 取值为“Sharding”，表示GaussDB(for Mongo)集群实例类型。   - 取值为“ReplicaSet”，表示GaussDB(for Mongo)副本集实例类型。   - 取值为“InfluxdbCluster”，表示GaussDB(for Influx)集群实例类型。   - 取值为“InfluxdbSingle”，表示GaussDB(for Influx)单节点实例类型。   - 取值为“RedisReplica”，表示GaussDB(for Redis)性能版实例类型。   - 取值为“Replication”，表示GaussDB(for Redis)主备版实例类型。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 实例类型。   - 取值为“Cluster”，表示GaussDB(for Cassandra)、GaussDB(for Influx)、GaussDB(for Redis)集群实例类型。   - 取值为“Sharding”，表示GaussDB(for Mongo)集群实例类型。   - 取值为“ReplicaSet”，表示GaussDB(for Mongo)副本集实例类型。   - 取值为“InfluxdbCluster”，表示GaussDB(for Influx)集群实例类型。   - 取值为“InfluxdbSingle”，表示GaussDB(for Influx)单节点实例类型。   - 取值为“RedisReplica”，表示GaussDB(for Redis)性能版实例类型。   - 取值为“Replication”，表示GaussDB(for Redis)主备版实例类型。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets datastoreType
    *  数据库类型。   - 取值为“cassandra”，表示查询GaussDB(for Cassandra)数据库实例。   - 取值为“mongodb”，表示查询GaussDB(for Mongo)数据库实例。   - 取值为“influxdb”，表示查询GaussDB(for Influx)数据库实例。   - 取值为“redis”，表示查询GaussDB(for Redis)数据库实例。   - 如果不传该参数，表示查询所有数据库实例。
    *
    * @return string|null
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string|null $datastoreType 数据库类型。   - 取值为“cassandra”，表示查询GaussDB(for Cassandra)数据库实例。   - 取值为“mongodb”，表示查询GaussDB(for Mongo)数据库实例。   - 取值为“influxdb”，表示查询GaussDB(for Influx)数据库实例。   - 取值为“redis”，表示查询GaussDB(for Redis)数据库实例。   - 如果不传该参数，表示查询所有数据库实例。
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID，获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询VPC列表。
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
    * @param string|null $vpcId 虚拟私有云ID，获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询VPC列表。
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
    *  子网的网络ID，获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询子网列表。
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
    * @param string|null $subnetId 子网的网络ID，获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询子网列表。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置偏移量，表示从指定project ID下最新的实例创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的实例信息。 取值大于或等于0。不传该参数时，查询偏移量默认为0，表示从最新的实例创建时间对应的实例开始查询。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 索引位置偏移量，表示从指定project ID下最新的实例创建时间开始，按时间的先后顺序偏移offset条数据后查询对应的实例信息。 取值大于或等于0。不传该参数时，查询偏移量默认为0，表示从最新的实例创建时间对应的实例开始查询。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询实例个数上限值。 取值范围：1~100。不传该参数时，默认查询前100条实例信息。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询实例个数上限值。 取值范围：1~100。不传该参数时，默认查询前100条实例信息。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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


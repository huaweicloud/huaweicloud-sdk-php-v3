<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecycleInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecycleInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * mode  **参数解释：** 实例类型。 **取值范围：** - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。 - 取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。 - 取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。 - 取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。 - 取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。 - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。
    * productType  **参数解释：** 产品类型。 **取值范围：** GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    * dataStore  dataStore
    * chargeType  **参数解释：** 计费方式。 **取值范围：** - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费。
    * enterpriseProjectId  **参数解释：** 企业项目ID，取值为“0”，表示为default企业项目 **取值范围：** 不涉及。
    * backupId  **参数解释：** 备份ID。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 实例创建时间。 **取值范围：** 不涉及。
    * deletedAt  **参数解释：** 实例删除时间。 **取值范围：** 不涉及。
    * retainedUntil  **参数解释：** 回收备份保留截止时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'mode' => 'string',
            'productType' => 'string',
            'dataStore' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\RecycleDatastore',
            'chargeType' => 'string',
            'enterpriseProjectId' => 'string',
            'backupId' => 'string',
            'createdAt' => 'string',
            'deletedAt' => 'string',
            'retainedUntil' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * mode  **参数解释：** 实例类型。 **取值范围：** - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。 - 取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。 - 取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。 - 取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。 - 取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。 - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。
    * productType  **参数解释：** 产品类型。 **取值范围：** GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    * dataStore  dataStore
    * chargeType  **参数解释：** 计费方式。 **取值范围：** - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费。
    * enterpriseProjectId  **参数解释：** 企业项目ID，取值为“0”，表示为default企业项目 **取值范围：** 不涉及。
    * backupId  **参数解释：** 备份ID。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 实例创建时间。 **取值范围：** 不涉及。
    * deletedAt  **参数解释：** 实例删除时间。 **取值范围：** 不涉及。
    * retainedUntil  **参数解释：** 回收备份保留截止时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'mode' => null,
        'productType' => null,
        'dataStore' => null,
        'chargeType' => null,
        'enterpriseProjectId' => null,
        'backupId' => null,
        'createdAt' => null,
        'deletedAt' => null,
        'retainedUntil' => null
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
    * id  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * mode  **参数解释：** 实例类型。 **取值范围：** - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。 - 取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。 - 取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。 - 取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。 - 取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。 - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。
    * productType  **参数解释：** 产品类型。 **取值范围：** GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    * dataStore  dataStore
    * chargeType  **参数解释：** 计费方式。 **取值范围：** - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费。
    * enterpriseProjectId  **参数解释：** 企业项目ID，取值为“0”，表示为default企业项目 **取值范围：** 不涉及。
    * backupId  **参数解释：** 备份ID。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 实例创建时间。 **取值范围：** 不涉及。
    * deletedAt  **参数解释：** 实例删除时间。 **取值范围：** 不涉及。
    * retainedUntil  **参数解释：** 回收备份保留截止时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'mode' => 'mode',
            'productType' => 'product_type',
            'dataStore' => 'data_store',
            'chargeType' => 'charge_type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'backupId' => 'backup_id',
            'createdAt' => 'created_at',
            'deletedAt' => 'deleted_at',
            'retainedUntil' => 'retained_until'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * mode  **参数解释：** 实例类型。 **取值范围：** - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。 - 取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。 - 取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。 - 取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。 - 取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。 - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。
    * productType  **参数解释：** 产品类型。 **取值范围：** GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    * dataStore  dataStore
    * chargeType  **参数解释：** 计费方式。 **取值范围：** - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费。
    * enterpriseProjectId  **参数解释：** 企业项目ID，取值为“0”，表示为default企业项目 **取值范围：** 不涉及。
    * backupId  **参数解释：** 备份ID。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 实例创建时间。 **取值范围：** 不涉及。
    * deletedAt  **参数解释：** 实例删除时间。 **取值范围：** 不涉及。
    * retainedUntil  **参数解释：** 回收备份保留截止时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'mode' => 'setMode',
            'productType' => 'setProductType',
            'dataStore' => 'setDataStore',
            'chargeType' => 'setChargeType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'backupId' => 'setBackupId',
            'createdAt' => 'setCreatedAt',
            'deletedAt' => 'setDeletedAt',
            'retainedUntil' => 'setRetainedUntil'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * mode  **参数解释：** 实例类型。 **取值范围：** - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。 - 取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。 - 取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。 - 取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。 - 取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。 - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。
    * productType  **参数解释：** 产品类型。 **取值范围：** GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    * dataStore  dataStore
    * chargeType  **参数解释：** 计费方式。 **取值范围：** - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费。
    * enterpriseProjectId  **参数解释：** 企业项目ID，取值为“0”，表示为default企业项目 **取值范围：** 不涉及。
    * backupId  **参数解释：** 备份ID。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 实例创建时间。 **取值范围：** 不涉及。
    * deletedAt  **参数解释：** 实例删除时间。 **取值范围：** 不涉及。
    * retainedUntil  **参数解释：** 回收备份保留截止时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'mode' => 'getMode',
            'productType' => 'getProductType',
            'dataStore' => 'getDataStore',
            'chargeType' => 'getChargeType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'backupId' => 'getBackupId',
            'createdAt' => 'getCreatedAt',
            'deletedAt' => 'getDeletedAt',
            'retainedUntil' => 'getRetainedUntil'
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
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['dataStore'] = isset($data['dataStore']) ? $data['dataStore'] : null;
        $this->container['chargeType'] = isset($data['chargeType']) ? $data['chargeType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['deletedAt'] = isset($data['deletedAt']) ? $data['deletedAt'] : null;
        $this->container['retainedUntil'] = isset($data['retainedUntil']) ? $data['retainedUntil'] : null;
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
    *  **参数解释：** 实例ID。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** 实例ID。 **取值范围：** 不涉及。
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
    *  **参数解释：** 实例名称。 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 实例名称。 **取值范围：** 不涉及。
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
    *  **参数解释：** 实例类型。 **取值范围：** - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。 - 取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。 - 取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。 - 取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。 - 取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。 - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。
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
    * @param string|null $mode **参数解释：** 实例类型。 **取值范围：** - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。 - 取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。 - 取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。 - 取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。 - 取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。 - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets productType
    *  **参数解释：** 产品类型。 **取值范围：** GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    *
    * @return string|null
    */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
    * Sets productType
    *
    * @param string|null $productType **参数解释：** 产品类型。 **取值范围：** GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    *
    * @return $this
    */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;
        return $this;
    }

    /**
    * Gets dataStore
    *  dataStore
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\RecycleDatastore|null
    */
    public function getDataStore()
    {
        return $this->container['dataStore'];
    }

    /**
    * Sets dataStore
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\RecycleDatastore|null $dataStore dataStore
    *
    * @return $this
    */
    public function setDataStore($dataStore)
    {
        $this->container['dataStore'] = $dataStore;
        return $this;
    }

    /**
    * Gets chargeType
    *  **参数解释：** 计费方式。 **取值范围：** - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费。
    *
    * @return string|null
    */
    public function getChargeType()
    {
        return $this->container['chargeType'];
    }

    /**
    * Sets chargeType
    *
    * @param string|null $chargeType **参数解释：** 计费方式。 **取值范围：** - prePaid：预付费，即包年/包月。 - postPaid：后付费，即按需付费。
    *
    * @return $this
    */
    public function setChargeType($chargeType)
    {
        $this->container['chargeType'] = $chargeType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释：** 企业项目ID，取值为“0”，表示为default企业项目 **取值范围：** 不涉及。
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
    * @param string|null $enterpriseProjectId **参数解释：** 企业项目ID，取值为“0”，表示为default企业项目 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets backupId
    *  **参数解释：** 备份ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string|null $backupId **参数解释：** 备份ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 实例创建时间。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 实例创建时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets deletedAt
    *  **参数解释：** 实例删除时间。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDeletedAt()
    {
        return $this->container['deletedAt'];
    }

    /**
    * Sets deletedAt
    *
    * @param string|null $deletedAt **参数解释：** 实例删除时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDeletedAt($deletedAt)
    {
        $this->container['deletedAt'] = $deletedAt;
        return $this;
    }

    /**
    * Gets retainedUntil
    *  **参数解释：** 回收备份保留截止时间。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRetainedUntil()
    {
        return $this->container['retainedUntil'];
    }

    /**
    * Sets retainedUntil
    *
    * @param string|null $retainedUntil **参数解释：** 回收备份保留截止时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRetainedUntil($retainedUntil)
    {
        $this->container['retainedUntil'] = $retainedUntil;
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


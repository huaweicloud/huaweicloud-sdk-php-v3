<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowQuotasRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowQuotasRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datastoreType  数据库类型。 取值为“cassandra”，表示查询GeminiDB Cassandra数据库实例配额。 取值为“mongodb”，表示GeminiDB Mongo查询数据库实例配额。 取值为“influxdb”，表示查询GeminiDB Influx数据库实例配额。 取值为“redis”，表示查询GeminiDB Redis数据库实例配额。 如果不传该参数，表示查询所有数据库实例配额。
    * mode  实例类型。   - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。   - 取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。   - 取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。   - 取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。   - 取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。   - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。   - 如果不传datastore_type参数，自动忽略该参数设置。
    * productType  产品类型。   -  Capacity 容量型   -  Standard 标准型 当查询GeminiDB redis云原生部署模式集群类型配额必传此参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datastoreType' => 'string',
            'mode' => 'string',
            'productType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datastoreType  数据库类型。 取值为“cassandra”，表示查询GeminiDB Cassandra数据库实例配额。 取值为“mongodb”，表示GeminiDB Mongo查询数据库实例配额。 取值为“influxdb”，表示查询GeminiDB Influx数据库实例配额。 取值为“redis”，表示查询GeminiDB Redis数据库实例配额。 如果不传该参数，表示查询所有数据库实例配额。
    * mode  实例类型。   - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。   - 取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。   - 取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。   - 取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。   - 取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。   - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。   - 如果不传datastore_type参数，自动忽略该参数设置。
    * productType  产品类型。   -  Capacity 容量型   -  Standard 标准型 当查询GeminiDB redis云原生部署模式集群类型配额必传此参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datastoreType' => null,
        'mode' => null,
        'productType' => null
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
    * datastoreType  数据库类型。 取值为“cassandra”，表示查询GeminiDB Cassandra数据库实例配额。 取值为“mongodb”，表示GeminiDB Mongo查询数据库实例配额。 取值为“influxdb”，表示查询GeminiDB Influx数据库实例配额。 取值为“redis”，表示查询GeminiDB Redis数据库实例配额。 如果不传该参数，表示查询所有数据库实例配额。
    * mode  实例类型。   - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。   - 取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。   - 取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。   - 取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。   - 取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。   - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。   - 如果不传datastore_type参数，自动忽略该参数设置。
    * productType  产品类型。   -  Capacity 容量型   -  Standard 标准型 当查询GeminiDB redis云原生部署模式集群类型配额必传此参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datastoreType' => 'datastore_type',
            'mode' => 'mode',
            'productType' => 'product_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datastoreType  数据库类型。 取值为“cassandra”，表示查询GeminiDB Cassandra数据库实例配额。 取值为“mongodb”，表示GeminiDB Mongo查询数据库实例配额。 取值为“influxdb”，表示查询GeminiDB Influx数据库实例配额。 取值为“redis”，表示查询GeminiDB Redis数据库实例配额。 如果不传该参数，表示查询所有数据库实例配额。
    * mode  实例类型。   - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。   - 取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。   - 取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。   - 取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。   - 取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。   - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。   - 如果不传datastore_type参数，自动忽略该参数设置。
    * productType  产品类型。   -  Capacity 容量型   -  Standard 标准型 当查询GeminiDB redis云原生部署模式集群类型配额必传此参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'datastoreType' => 'setDatastoreType',
            'mode' => 'setMode',
            'productType' => 'setProductType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datastoreType  数据库类型。 取值为“cassandra”，表示查询GeminiDB Cassandra数据库实例配额。 取值为“mongodb”，表示GeminiDB Mongo查询数据库实例配额。 取值为“influxdb”，表示查询GeminiDB Influx数据库实例配额。 取值为“redis”，表示查询GeminiDB Redis数据库实例配额。 如果不传该参数，表示查询所有数据库实例配额。
    * mode  实例类型。   - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。   - 取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。   - 取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。   - 取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。   - 取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。   - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。   - 如果不传datastore_type参数，自动忽略该参数设置。
    * productType  产品类型。   -  Capacity 容量型   -  Standard 标准型 当查询GeminiDB redis云原生部署模式集群类型配额必传此参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'datastoreType' => 'getDatastoreType',
            'mode' => 'getMode',
            'productType' => 'getProductType'
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
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
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
    * Gets datastoreType
    *  数据库类型。 取值为“cassandra”，表示查询GeminiDB Cassandra数据库实例配额。 取值为“mongodb”，表示GeminiDB Mongo查询数据库实例配额。 取值为“influxdb”，表示查询GeminiDB Influx数据库实例配额。 取值为“redis”，表示查询GeminiDB Redis数据库实例配额。 如果不传该参数，表示查询所有数据库实例配额。
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
    * @param string|null $datastoreType 数据库类型。 取值为“cassandra”，表示查询GeminiDB Cassandra数据库实例配额。 取值为“mongodb”，表示GeminiDB Mongo查询数据库实例配额。 取值为“influxdb”，表示查询GeminiDB Influx数据库实例配额。 取值为“redis”，表示查询GeminiDB Redis数据库实例配额。 如果不传该参数，表示查询所有数据库实例配额。
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets mode
    *  实例类型。   - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。   - 取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。   - 取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。   - 取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。   - 取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。   - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。   - 如果不传datastore_type参数，自动忽略该参数设置。
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
    * @param string|null $mode 实例类型。   - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。   - 取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。   - 取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。   - 取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。   - 取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。   - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。   - 如果不传datastore_type参数，自动忽略该参数设置。
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
    *  产品类型。   -  Capacity 容量型   -  Standard 标准型 当查询GeminiDB redis云原生部署模式集群类型配额必传此参数。
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
    * @param string|null $productType 产品类型。   -  Capacity 容量型   -  Standard 标准型 当查询GeminiDB redis云原生部署模式集群类型配额必传此参数。
    *
    * @return $this
    */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;
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


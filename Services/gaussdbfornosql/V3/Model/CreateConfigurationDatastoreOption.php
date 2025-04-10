<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateConfigurationDatastoreOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateConfigurationDatastoreOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  数据库类型。 - GeminiDB Cassandra实例取值为“cassandra”。 - GeminiDB Mongo实例取值为\"mongodb\"。 - GeminiDB Influx实例取值为\"influxdb\"。 - GeminiDB Redis实例取值为\"redis\"。 - GeminiDB DynamoDB实例取值为\"dynamodb\"。 - GeminiDB HBase实例取值为\"hbase\"。
    * version  数据库版本。 - GeminiDB Cassandra实例支持3.11版本，取值为“3.11”。 - GeminiDB Mongo实例支持4.0版本，取值为\"4.0\"。 - GeminiDB Influx实例支持1.8版本，取值\"1.8\"。 - GeminiDB Redis实例支持5.0版本，取值\"5.0\"。
    * mode  数据库实例类型当创建支持GeminiDB Mongo、GeminiDB Cassandra云原生部署模式实例的参数模板， 该参数必选。 取值范围: *  GeminiDB Mongo 副本集实例取值为\"ReplicaSet\"。 *  GeminiDB Influx 单节点实例取值为\"InfluxdbSingle\"。 *  GeminiDB Cassandra云原生部署模式实例取值为\"CloudNativeCluster\"。 不传该参数，对GeminiDB Cassandra实例默认创建支持经典部署模式集群实例的参数模板。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'version' => 'string',
            'mode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  数据库类型。 - GeminiDB Cassandra实例取值为“cassandra”。 - GeminiDB Mongo实例取值为\"mongodb\"。 - GeminiDB Influx实例取值为\"influxdb\"。 - GeminiDB Redis实例取值为\"redis\"。 - GeminiDB DynamoDB实例取值为\"dynamodb\"。 - GeminiDB HBase实例取值为\"hbase\"。
    * version  数据库版本。 - GeminiDB Cassandra实例支持3.11版本，取值为“3.11”。 - GeminiDB Mongo实例支持4.0版本，取值为\"4.0\"。 - GeminiDB Influx实例支持1.8版本，取值\"1.8\"。 - GeminiDB Redis实例支持5.0版本，取值\"5.0\"。
    * mode  数据库实例类型当创建支持GeminiDB Mongo、GeminiDB Cassandra云原生部署模式实例的参数模板， 该参数必选。 取值范围: *  GeminiDB Mongo 副本集实例取值为\"ReplicaSet\"。 *  GeminiDB Influx 单节点实例取值为\"InfluxdbSingle\"。 *  GeminiDB Cassandra云原生部署模式实例取值为\"CloudNativeCluster\"。 不传该参数，对GeminiDB Cassandra实例默认创建支持经典部署模式集群实例的参数模板。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'version' => null,
        'mode' => null
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
    * type  数据库类型。 - GeminiDB Cassandra实例取值为“cassandra”。 - GeminiDB Mongo实例取值为\"mongodb\"。 - GeminiDB Influx实例取值为\"influxdb\"。 - GeminiDB Redis实例取值为\"redis\"。 - GeminiDB DynamoDB实例取值为\"dynamodb\"。 - GeminiDB HBase实例取值为\"hbase\"。
    * version  数据库版本。 - GeminiDB Cassandra实例支持3.11版本，取值为“3.11”。 - GeminiDB Mongo实例支持4.0版本，取值为\"4.0\"。 - GeminiDB Influx实例支持1.8版本，取值\"1.8\"。 - GeminiDB Redis实例支持5.0版本，取值\"5.0\"。
    * mode  数据库实例类型当创建支持GeminiDB Mongo、GeminiDB Cassandra云原生部署模式实例的参数模板， 该参数必选。 取值范围: *  GeminiDB Mongo 副本集实例取值为\"ReplicaSet\"。 *  GeminiDB Influx 单节点实例取值为\"InfluxdbSingle\"。 *  GeminiDB Cassandra云原生部署模式实例取值为\"CloudNativeCluster\"。 不传该参数，对GeminiDB Cassandra实例默认创建支持经典部署模式集群实例的参数模板。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'version' => 'version',
            'mode' => 'mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  数据库类型。 - GeminiDB Cassandra实例取值为“cassandra”。 - GeminiDB Mongo实例取值为\"mongodb\"。 - GeminiDB Influx实例取值为\"influxdb\"。 - GeminiDB Redis实例取值为\"redis\"。 - GeminiDB DynamoDB实例取值为\"dynamodb\"。 - GeminiDB HBase实例取值为\"hbase\"。
    * version  数据库版本。 - GeminiDB Cassandra实例支持3.11版本，取值为“3.11”。 - GeminiDB Mongo实例支持4.0版本，取值为\"4.0\"。 - GeminiDB Influx实例支持1.8版本，取值\"1.8\"。 - GeminiDB Redis实例支持5.0版本，取值\"5.0\"。
    * mode  数据库实例类型当创建支持GeminiDB Mongo、GeminiDB Cassandra云原生部署模式实例的参数模板， 该参数必选。 取值范围: *  GeminiDB Mongo 副本集实例取值为\"ReplicaSet\"。 *  GeminiDB Influx 单节点实例取值为\"InfluxdbSingle\"。 *  GeminiDB Cassandra云原生部署模式实例取值为\"CloudNativeCluster\"。 不传该参数，对GeminiDB Cassandra实例默认创建支持经典部署模式集群实例的参数模板。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'version' => 'setVersion',
            'mode' => 'setMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  数据库类型。 - GeminiDB Cassandra实例取值为“cassandra”。 - GeminiDB Mongo实例取值为\"mongodb\"。 - GeminiDB Influx实例取值为\"influxdb\"。 - GeminiDB Redis实例取值为\"redis\"。 - GeminiDB DynamoDB实例取值为\"dynamodb\"。 - GeminiDB HBase实例取值为\"hbase\"。
    * version  数据库版本。 - GeminiDB Cassandra实例支持3.11版本，取值为“3.11”。 - GeminiDB Mongo实例支持4.0版本，取值为\"4.0\"。 - GeminiDB Influx实例支持1.8版本，取值\"1.8\"。 - GeminiDB Redis实例支持5.0版本，取值\"5.0\"。
    * mode  数据库实例类型当创建支持GeminiDB Mongo、GeminiDB Cassandra云原生部署模式实例的参数模板， 该参数必选。 取值范围: *  GeminiDB Mongo 副本集实例取值为\"ReplicaSet\"。 *  GeminiDB Influx 单节点实例取值为\"InfluxdbSingle\"。 *  GeminiDB Cassandra云原生部署模式实例取值为\"CloudNativeCluster\"。 不传该参数，对GeminiDB Cassandra实例默认创建支持经典部署模式集群实例的参数模板。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'version' => 'getVersion',
            'mode' => 'getMode'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
    * Gets type
    *  数据库类型。 - GeminiDB Cassandra实例取值为“cassandra”。 - GeminiDB Mongo实例取值为\"mongodb\"。 - GeminiDB Influx实例取值为\"influxdb\"。 - GeminiDB Redis实例取值为\"redis\"。 - GeminiDB DynamoDB实例取值为\"dynamodb\"。 - GeminiDB HBase实例取值为\"hbase\"。
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
    * @param string $type 数据库类型。 - GeminiDB Cassandra实例取值为“cassandra”。 - GeminiDB Mongo实例取值为\"mongodb\"。 - GeminiDB Influx实例取值为\"influxdb\"。 - GeminiDB Redis实例取值为\"redis\"。 - GeminiDB DynamoDB实例取值为\"dynamodb\"。 - GeminiDB HBase实例取值为\"hbase\"。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets version
    *  数据库版本。 - GeminiDB Cassandra实例支持3.11版本，取值为“3.11”。 - GeminiDB Mongo实例支持4.0版本，取值为\"4.0\"。 - GeminiDB Influx实例支持1.8版本，取值\"1.8\"。 - GeminiDB Redis实例支持5.0版本，取值\"5.0\"。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 数据库版本。 - GeminiDB Cassandra实例支持3.11版本，取值为“3.11”。 - GeminiDB Mongo实例支持4.0版本，取值为\"4.0\"。 - GeminiDB Influx实例支持1.8版本，取值\"1.8\"。 - GeminiDB Redis实例支持5.0版本，取值\"5.0\"。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets mode
    *  数据库实例类型当创建支持GeminiDB Mongo、GeminiDB Cassandra云原生部署模式实例的参数模板， 该参数必选。 取值范围: *  GeminiDB Mongo 副本集实例取值为\"ReplicaSet\"。 *  GeminiDB Influx 单节点实例取值为\"InfluxdbSingle\"。 *  GeminiDB Cassandra云原生部署模式实例取值为\"CloudNativeCluster\"。 不传该参数，对GeminiDB Cassandra实例默认创建支持经典部署模式集群实例的参数模板。
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
    * @param string|null $mode 数据库实例类型当创建支持GeminiDB Mongo、GeminiDB Cassandra云原生部署模式实例的参数模板， 该参数必选。 取值范围: *  GeminiDB Mongo 副本集实例取值为\"ReplicaSet\"。 *  GeminiDB Influx 单节点实例取值为\"InfluxdbSingle\"。 *  GeminiDB Cassandra云原生部署模式实例取值为\"CloudNativeCluster\"。 不传该参数，对GeminiDB Cassandra实例默认创建支持经典部署模式集群实例的参数模板。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
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


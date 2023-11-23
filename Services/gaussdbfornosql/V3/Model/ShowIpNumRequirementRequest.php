<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIpNumRequirementRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIpNumRequirementRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeNum  创建实例或扩容节点的个数。最大支持输入200。
    * engineName  数据库引擎名称。没有传入实例ID的时候该字段为必传。 - 取值为“cassandra”，表示GeminiDB Cassandra数据库引擎。 - 取值为“mongodb”，表示GeminiDB Mongo数据库引擎。 - 取值为“influxdb”，表示GeminiDB Influx数据库引擎。 - 取值为“redis”，表示GeminiDB Redis数据库引擎。
    * instanceMode  实例类型。没有传入实例ID的时候该字段为必传。 - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis集群实例类型。 - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。
    * instanceId  实例Id，可以调用5.3.3 查询实例列表和详情接口获取。如果未申请实例，可以调用5.3.1 创建实例接口创建。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeNum' => 'int',
            'engineName' => 'string',
            'instanceMode' => 'string',
            'instanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeNum  创建实例或扩容节点的个数。最大支持输入200。
    * engineName  数据库引擎名称。没有传入实例ID的时候该字段为必传。 - 取值为“cassandra”，表示GeminiDB Cassandra数据库引擎。 - 取值为“mongodb”，表示GeminiDB Mongo数据库引擎。 - 取值为“influxdb”，表示GeminiDB Influx数据库引擎。 - 取值为“redis”，表示GeminiDB Redis数据库引擎。
    * instanceMode  实例类型。没有传入实例ID的时候该字段为必传。 - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis集群实例类型。 - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。
    * instanceId  实例Id，可以调用5.3.3 查询实例列表和详情接口获取。如果未申请实例，可以调用5.3.1 创建实例接口创建。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeNum' => 'int32',
        'engineName' => null,
        'instanceMode' => null,
        'instanceId' => null
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
    * nodeNum  创建实例或扩容节点的个数。最大支持输入200。
    * engineName  数据库引擎名称。没有传入实例ID的时候该字段为必传。 - 取值为“cassandra”，表示GeminiDB Cassandra数据库引擎。 - 取值为“mongodb”，表示GeminiDB Mongo数据库引擎。 - 取值为“influxdb”，表示GeminiDB Influx数据库引擎。 - 取值为“redis”，表示GeminiDB Redis数据库引擎。
    * instanceMode  实例类型。没有传入实例ID的时候该字段为必传。 - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis集群实例类型。 - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。
    * instanceId  实例Id，可以调用5.3.3 查询实例列表和详情接口获取。如果未申请实例，可以调用5.3.1 创建实例接口创建。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeNum' => 'node_num',
            'engineName' => 'engine_name',
            'instanceMode' => 'instance_mode',
            'instanceId' => 'instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeNum  创建实例或扩容节点的个数。最大支持输入200。
    * engineName  数据库引擎名称。没有传入实例ID的时候该字段为必传。 - 取值为“cassandra”，表示GeminiDB Cassandra数据库引擎。 - 取值为“mongodb”，表示GeminiDB Mongo数据库引擎。 - 取值为“influxdb”，表示GeminiDB Influx数据库引擎。 - 取值为“redis”，表示GeminiDB Redis数据库引擎。
    * instanceMode  实例类型。没有传入实例ID的时候该字段为必传。 - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis集群实例类型。 - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。
    * instanceId  实例Id，可以调用5.3.3 查询实例列表和详情接口获取。如果未申请实例，可以调用5.3.1 创建实例接口创建。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeNum' => 'setNodeNum',
            'engineName' => 'setEngineName',
            'instanceMode' => 'setInstanceMode',
            'instanceId' => 'setInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeNum  创建实例或扩容节点的个数。最大支持输入200。
    * engineName  数据库引擎名称。没有传入实例ID的时候该字段为必传。 - 取值为“cassandra”，表示GeminiDB Cassandra数据库引擎。 - 取值为“mongodb”，表示GeminiDB Mongo数据库引擎。 - 取值为“influxdb”，表示GeminiDB Influx数据库引擎。 - 取值为“redis”，表示GeminiDB Redis数据库引擎。
    * instanceMode  实例类型。没有传入实例ID的时候该字段为必传。 - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis集群实例类型。 - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。
    * instanceId  实例Id，可以调用5.3.3 查询实例列表和详情接口获取。如果未申请实例，可以调用5.3.1 创建实例接口创建。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeNum' => 'getNodeNum',
            'engineName' => 'getEngineName',
            'instanceMode' => 'getInstanceMode',
            'instanceId' => 'getInstanceId'
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
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['instanceMode'] = isset($data['instanceMode']) ? $data['instanceMode'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeNum'] === null) {
            $invalidProperties[] = "'nodeNum' can't be null";
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
    * Gets nodeNum
    *  创建实例或扩容节点的个数。最大支持输入200。
    *
    * @return int
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int $nodeNum 创建实例或扩容节点的个数。最大支持输入200。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets engineName
    *  数据库引擎名称。没有传入实例ID的时候该字段为必传。 - 取值为“cassandra”，表示GeminiDB Cassandra数据库引擎。 - 取值为“mongodb”，表示GeminiDB Mongo数据库引擎。 - 取值为“influxdb”，表示GeminiDB Influx数据库引擎。 - 取值为“redis”，表示GeminiDB Redis数据库引擎。
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
    * @param string|null $engineName 数据库引擎名称。没有传入实例ID的时候该字段为必传。 - 取值为“cassandra”，表示GeminiDB Cassandra数据库引擎。 - 取值为“mongodb”，表示GeminiDB Mongo数据库引擎。 - 取值为“influxdb”，表示GeminiDB Influx数据库引擎。 - 取值为“redis”，表示GeminiDB Redis数据库引擎。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets instanceMode
    *  实例类型。没有传入实例ID的时候该字段为必传。 - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis集群实例类型。 - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。
    *
    * @return string|null
    */
    public function getInstanceMode()
    {
        return $this->container['instanceMode'];
    }

    /**
    * Sets instanceMode
    *
    * @param string|null $instanceMode 实例类型。没有传入实例ID的时候该字段为必传。 - 取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis集群实例类型。 - 取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。
    *
    * @return $this
    */
    public function setInstanceMode($instanceMode)
    {
        $this->container['instanceMode'] = $instanceMode;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例Id，可以调用5.3.3 查询实例列表和详情接口获取。如果未申请实例，可以调用5.3.1 创建实例接口创建。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例Id，可以调用5.3.3 查询实例列表和详情接口获取。如果未申请实例，可以调用5.3.1 创建实例接口创建。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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


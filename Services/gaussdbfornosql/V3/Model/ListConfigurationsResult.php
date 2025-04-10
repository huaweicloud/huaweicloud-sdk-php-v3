<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConfigurationsResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConfigurationsResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  参数模板ID。
    * name  参数模板名称。
    * description  参数模板描述。
    * datastoreVersionName  数据库版本名称。
    * datastoreName  数据库名称。 【取值范围】 cassandra：表示支持GeminiDB Cassandra实例。 redis：表示支持GeminiDB Redis实例。 influxdb：表示支持GeminiDB Influx实例。 mongodb： 表示支持GeminiDB Mongo实例。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * mode  数据库实例类型。 GeminiDB Cassandra经典部署模式集群类型为\"Cluster\"。 GeminiDB Cassandra云原生部署模式集群类型为\"CloudNativeCluster\"。 GeminiDB Mongo副本集类型为\"ReplicaSet\"。 GeminiDB Mongo集群类型为\"Sharding\"。 GeminiDB Influx经典部署模式集群类型为\"Cluster\"。 GeminiDB Influx经典部署模式单节点类型为\"InfluxdbSingle\"。 GeminiDB Redis经典部署模式集群类型为“Cluster”。
    * userDefined  是否是用户自定义参数模板： - false，表示为系统默认参数模板。 - true，表示为用户自定义参数模板。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'datastoreVersionName' => 'string',
            'datastoreName' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'mode' => 'string',
            'userDefined' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  参数模板ID。
    * name  参数模板名称。
    * description  参数模板描述。
    * datastoreVersionName  数据库版本名称。
    * datastoreName  数据库名称。 【取值范围】 cassandra：表示支持GeminiDB Cassandra实例。 redis：表示支持GeminiDB Redis实例。 influxdb：表示支持GeminiDB Influx实例。 mongodb： 表示支持GeminiDB Mongo实例。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * mode  数据库实例类型。 GeminiDB Cassandra经典部署模式集群类型为\"Cluster\"。 GeminiDB Cassandra云原生部署模式集群类型为\"CloudNativeCluster\"。 GeminiDB Mongo副本集类型为\"ReplicaSet\"。 GeminiDB Mongo集群类型为\"Sharding\"。 GeminiDB Influx经典部署模式集群类型为\"Cluster\"。 GeminiDB Influx经典部署模式单节点类型为\"InfluxdbSingle\"。 GeminiDB Redis经典部署模式集群类型为“Cluster”。
    * userDefined  是否是用户自定义参数模板： - false，表示为系统默认参数模板。 - true，表示为用户自定义参数模板。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'datastoreVersionName' => null,
        'datastoreName' => null,
        'created' => null,
        'updated' => null,
        'mode' => null,
        'userDefined' => null
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
    * id  参数模板ID。
    * name  参数模板名称。
    * description  参数模板描述。
    * datastoreVersionName  数据库版本名称。
    * datastoreName  数据库名称。 【取值范围】 cassandra：表示支持GeminiDB Cassandra实例。 redis：表示支持GeminiDB Redis实例。 influxdb：表示支持GeminiDB Influx实例。 mongodb： 表示支持GeminiDB Mongo实例。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * mode  数据库实例类型。 GeminiDB Cassandra经典部署模式集群类型为\"Cluster\"。 GeminiDB Cassandra云原生部署模式集群类型为\"CloudNativeCluster\"。 GeminiDB Mongo副本集类型为\"ReplicaSet\"。 GeminiDB Mongo集群类型为\"Sharding\"。 GeminiDB Influx经典部署模式集群类型为\"Cluster\"。 GeminiDB Influx经典部署模式单节点类型为\"InfluxdbSingle\"。 GeminiDB Redis经典部署模式集群类型为“Cluster”。
    * userDefined  是否是用户自定义参数模板： - false，表示为系统默认参数模板。 - true，表示为用户自定义参数模板。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'datastoreVersionName' => 'datastore_version_name',
            'datastoreName' => 'datastore_name',
            'created' => 'created',
            'updated' => 'updated',
            'mode' => 'mode',
            'userDefined' => 'user_defined'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  参数模板ID。
    * name  参数模板名称。
    * description  参数模板描述。
    * datastoreVersionName  数据库版本名称。
    * datastoreName  数据库名称。 【取值范围】 cassandra：表示支持GeminiDB Cassandra实例。 redis：表示支持GeminiDB Redis实例。 influxdb：表示支持GeminiDB Influx实例。 mongodb： 表示支持GeminiDB Mongo实例。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * mode  数据库实例类型。 GeminiDB Cassandra经典部署模式集群类型为\"Cluster\"。 GeminiDB Cassandra云原生部署模式集群类型为\"CloudNativeCluster\"。 GeminiDB Mongo副本集类型为\"ReplicaSet\"。 GeminiDB Mongo集群类型为\"Sharding\"。 GeminiDB Influx经典部署模式集群类型为\"Cluster\"。 GeminiDB Influx经典部署模式单节点类型为\"InfluxdbSingle\"。 GeminiDB Redis经典部署模式集群类型为“Cluster”。
    * userDefined  是否是用户自定义参数模板： - false，表示为系统默认参数模板。 - true，表示为用户自定义参数模板。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'datastoreVersionName' => 'setDatastoreVersionName',
            'datastoreName' => 'setDatastoreName',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'mode' => 'setMode',
            'userDefined' => 'setUserDefined'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  参数模板ID。
    * name  参数模板名称。
    * description  参数模板描述。
    * datastoreVersionName  数据库版本名称。
    * datastoreName  数据库名称。 【取值范围】 cassandra：表示支持GeminiDB Cassandra实例。 redis：表示支持GeminiDB Redis实例。 influxdb：表示支持GeminiDB Influx实例。 mongodb： 表示支持GeminiDB Mongo实例。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * mode  数据库实例类型。 GeminiDB Cassandra经典部署模式集群类型为\"Cluster\"。 GeminiDB Cassandra云原生部署模式集群类型为\"CloudNativeCluster\"。 GeminiDB Mongo副本集类型为\"ReplicaSet\"。 GeminiDB Mongo集群类型为\"Sharding\"。 GeminiDB Influx经典部署模式集群类型为\"Cluster\"。 GeminiDB Influx经典部署模式单节点类型为\"InfluxdbSingle\"。 GeminiDB Redis经典部署模式集群类型为“Cluster”。
    * userDefined  是否是用户自定义参数模板： - false，表示为系统默认参数模板。 - true，表示为用户自定义参数模板。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'datastoreVersionName' => 'getDatastoreVersionName',
            'datastoreName' => 'getDatastoreName',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'mode' => 'getMode',
            'userDefined' => 'getUserDefined'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['datastoreVersionName'] = isset($data['datastoreVersionName']) ? $data['datastoreVersionName'] : null;
        $this->container['datastoreName'] = isset($data['datastoreName']) ? $data['datastoreName'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['userDefined'] = isset($data['userDefined']) ? $data['userDefined'] : null;
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
        if ($this->container['datastoreVersionName'] === null) {
            $invalidProperties[] = "'datastoreVersionName' can't be null";
        }
        if ($this->container['datastoreName'] === null) {
            $invalidProperties[] = "'datastoreName' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['userDefined'] === null) {
            $invalidProperties[] = "'userDefined' can't be null";
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
    *  参数模板ID。
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
    * @param string $id 参数模板ID。
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
    *  参数模板名称。
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
    * @param string $name 参数模板名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  参数模板描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 参数模板描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets datastoreVersionName
    *  数据库版本名称。
    *
    * @return string
    */
    public function getDatastoreVersionName()
    {
        return $this->container['datastoreVersionName'];
    }

    /**
    * Sets datastoreVersionName
    *
    * @param string $datastoreVersionName 数据库版本名称。
    *
    * @return $this
    */
    public function setDatastoreVersionName($datastoreVersionName)
    {
        $this->container['datastoreVersionName'] = $datastoreVersionName;
        return $this;
    }

    /**
    * Gets datastoreName
    *  数据库名称。 【取值范围】 cassandra：表示支持GeminiDB Cassandra实例。 redis：表示支持GeminiDB Redis实例。 influxdb：表示支持GeminiDB Influx实例。 mongodb： 表示支持GeminiDB Mongo实例。
    *
    * @return string
    */
    public function getDatastoreName()
    {
        return $this->container['datastoreName'];
    }

    /**
    * Sets datastoreName
    *
    * @param string $datastoreName 数据库名称。 【取值范围】 cassandra：表示支持GeminiDB Cassandra实例。 redis：表示支持GeminiDB Redis实例。 influxdb：表示支持GeminiDB Influx实例。 mongodb： 表示支持GeminiDB Mongo实例。
    *
    * @return $this
    */
    public function setDatastoreName($datastoreName)
    {
        $this->container['datastoreName'] = $datastoreName;
        return $this;
    }

    /**
    * Gets created
    *  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800
    *
    * @return string
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string $created 创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string $updated 更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets mode
    *  数据库实例类型。 GeminiDB Cassandra经典部署模式集群类型为\"Cluster\"。 GeminiDB Cassandra云原生部署模式集群类型为\"CloudNativeCluster\"。 GeminiDB Mongo副本集类型为\"ReplicaSet\"。 GeminiDB Mongo集群类型为\"Sharding\"。 GeminiDB Influx经典部署模式集群类型为\"Cluster\"。 GeminiDB Influx经典部署模式单节点类型为\"InfluxdbSingle\"。 GeminiDB Redis经典部署模式集群类型为“Cluster”。
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode 数据库实例类型。 GeminiDB Cassandra经典部署模式集群类型为\"Cluster\"。 GeminiDB Cassandra云原生部署模式集群类型为\"CloudNativeCluster\"。 GeminiDB Mongo副本集类型为\"ReplicaSet\"。 GeminiDB Mongo集群类型为\"Sharding\"。 GeminiDB Influx经典部署模式集群类型为\"Cluster\"。 GeminiDB Influx经典部署模式单节点类型为\"InfluxdbSingle\"。 GeminiDB Redis经典部署模式集群类型为“Cluster”。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets userDefined
    *  是否是用户自定义参数模板： - false，表示为系统默认参数模板。 - true，表示为用户自定义参数模板。
    *
    * @return bool
    */
    public function getUserDefined()
    {
        return $this->container['userDefined'];
    }

    /**
    * Sets userDefined
    *
    * @param bool $userDefined 是否是用户自定义参数模板： - false，表示为系统默认参数模板。 - true，表示为用户自定义参数模板。
    *
    * @return $this
    */
    public function setUserDefined($userDefined)
    {
        $this->container['userDefined'] = $userDefined;
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


<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceConfigurationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceConfigurationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datastoreVersionName  数据库版本名称。
    * datastoreName  数据库名称。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * id  参数模板ID。
    * mode  数据库实例类型。 GaussDB(for Cassandra)集群类型为\"Cluster\"。 GaussDB(for Mongo)副本集类型为\"ReplicaSet\"。 GaussDB(for Mongo)集群类型为\"Sharding\"。 GaussDB(for Influx)集群类型为\"Cluster\"。 GaussDB(for Influx)单节点类型为\"InfluxdbSingle\"。
    * configurationParameters  参数对象，用户基于默认参数模板自定义的参数配置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datastoreVersionName' => 'string',
            'datastoreName' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'id' => 'string',
            'mode' => 'string',
            'configurationParameters' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ConfigurationParameterResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datastoreVersionName  数据库版本名称。
    * datastoreName  数据库名称。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * id  参数模板ID。
    * mode  数据库实例类型。 GaussDB(for Cassandra)集群类型为\"Cluster\"。 GaussDB(for Mongo)副本集类型为\"ReplicaSet\"。 GaussDB(for Mongo)集群类型为\"Sharding\"。 GaussDB(for Influx)集群类型为\"Cluster\"。 GaussDB(for Influx)单节点类型为\"InfluxdbSingle\"。
    * configurationParameters  参数对象，用户基于默认参数模板自定义的参数配置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datastoreVersionName' => null,
        'datastoreName' => null,
        'created' => null,
        'updated' => null,
        'id' => null,
        'mode' => null,
        'configurationParameters' => null
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
    * datastoreVersionName  数据库版本名称。
    * datastoreName  数据库名称。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * id  参数模板ID。
    * mode  数据库实例类型。 GaussDB(for Cassandra)集群类型为\"Cluster\"。 GaussDB(for Mongo)副本集类型为\"ReplicaSet\"。 GaussDB(for Mongo)集群类型为\"Sharding\"。 GaussDB(for Influx)集群类型为\"Cluster\"。 GaussDB(for Influx)单节点类型为\"InfluxdbSingle\"。
    * configurationParameters  参数对象，用户基于默认参数模板自定义的参数配置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datastoreVersionName' => 'datastore_version_name',
            'datastoreName' => 'datastore_name',
            'created' => 'created',
            'updated' => 'updated',
            'id' => 'id',
            'mode' => 'mode',
            'configurationParameters' => 'configuration_parameters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datastoreVersionName  数据库版本名称。
    * datastoreName  数据库名称。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * id  参数模板ID。
    * mode  数据库实例类型。 GaussDB(for Cassandra)集群类型为\"Cluster\"。 GaussDB(for Mongo)副本集类型为\"ReplicaSet\"。 GaussDB(for Mongo)集群类型为\"Sharding\"。 GaussDB(for Influx)集群类型为\"Cluster\"。 GaussDB(for Influx)单节点类型为\"InfluxdbSingle\"。
    * configurationParameters  参数对象，用户基于默认参数模板自定义的参数配置。
    *
    * @var string[]
    */
    protected static $setters = [
            'datastoreVersionName' => 'setDatastoreVersionName',
            'datastoreName' => 'setDatastoreName',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'id' => 'setId',
            'mode' => 'setMode',
            'configurationParameters' => 'setConfigurationParameters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datastoreVersionName  数据库版本名称。
    * datastoreName  数据库名称。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * id  参数模板ID。
    * mode  数据库实例类型。 GaussDB(for Cassandra)集群类型为\"Cluster\"。 GaussDB(for Mongo)副本集类型为\"ReplicaSet\"。 GaussDB(for Mongo)集群类型为\"Sharding\"。 GaussDB(for Influx)集群类型为\"Cluster\"。 GaussDB(for Influx)单节点类型为\"InfluxdbSingle\"。
    * configurationParameters  参数对象，用户基于默认参数模板自定义的参数配置。
    *
    * @var string[]
    */
    protected static $getters = [
            'datastoreVersionName' => 'getDatastoreVersionName',
            'datastoreName' => 'getDatastoreName',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'id' => 'getId',
            'mode' => 'getMode',
            'configurationParameters' => 'getConfigurationParameters'
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
        $this->container['datastoreVersionName'] = isset($data['datastoreVersionName']) ? $data['datastoreVersionName'] : null;
        $this->container['datastoreName'] = isset($data['datastoreName']) ? $data['datastoreName'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['configurationParameters'] = isset($data['configurationParameters']) ? $data['configurationParameters'] : null;
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
    * Gets datastoreVersionName
    *  数据库版本名称。
    *
    * @return string|null
    */
    public function getDatastoreVersionName()
    {
        return $this->container['datastoreVersionName'];
    }

    /**
    * Sets datastoreVersionName
    *
    * @param string|null $datastoreVersionName 数据库版本名称。
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
    *  数据库名称。
    *
    * @return string|null
    */
    public function getDatastoreName()
    {
        return $this->container['datastoreName'];
    }

    /**
    * Sets datastoreName
    *
    * @param string|null $datastoreName 数据库名称。
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
    *  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
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
    * @param string|null $created 创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
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
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets id
    *  参数模板ID。
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
    * @param string|null $id 参数模板ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets mode
    *  数据库实例类型。 GaussDB(for Cassandra)集群类型为\"Cluster\"。 GaussDB(for Mongo)副本集类型为\"ReplicaSet\"。 GaussDB(for Mongo)集群类型为\"Sharding\"。 GaussDB(for Influx)集群类型为\"Cluster\"。 GaussDB(for Influx)单节点类型为\"InfluxdbSingle\"。
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
    * @param string|null $mode 数据库实例类型。 GaussDB(for Cassandra)集群类型为\"Cluster\"。 GaussDB(for Mongo)副本集类型为\"ReplicaSet\"。 GaussDB(for Mongo)集群类型为\"Sharding\"。 GaussDB(for Influx)集群类型为\"Cluster\"。 GaussDB(for Influx)单节点类型为\"InfluxdbSingle\"。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets configurationParameters
    *  参数对象，用户基于默认参数模板自定义的参数配置。
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ConfigurationParameterResult[]|null
    */
    public function getConfigurationParameters()
    {
        return $this->container['configurationParameters'];
    }

    /**
    * Sets configurationParameters
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ConfigurationParameterResult[]|null $configurationParameters 参数对象，用户基于默认参数模板自定义的参数配置。
    *
    * @return $this
    */
    public function setConfigurationParameters($configurationParameters)
    {
        $this->container['configurationParameters'] = $configurationParameters;
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


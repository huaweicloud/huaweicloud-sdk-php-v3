<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateConfigurationResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateConfigurationResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  参数模板ID。
    * name  参数模板名称。
    * description  参数模板描述。
    * datastoreVersionName  数据库版本名称。
    * datastoreName  数据库名称。
    * mode  【参数解释】 数据库实例类型。 【取值范围】 - GeminiDB Mongo 副本集实例取值为\"ReplicaSet\"。 - GeminiDB Influx 单节点实例取值为\"InfluxdbSingle\"。 - GeminiDB Cassandra云原生部署模式实例取值为\"CloudNativeCluster\"。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'datastoreVersionName' => 'string',
            'datastoreName' => 'string',
            'mode' => 'string',
            'created' => 'string',
            'updated' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  参数模板ID。
    * name  参数模板名称。
    * description  参数模板描述。
    * datastoreVersionName  数据库版本名称。
    * datastoreName  数据库名称。
    * mode  【参数解释】 数据库实例类型。 【取值范围】 - GeminiDB Mongo 副本集实例取值为\"ReplicaSet\"。 - GeminiDB Influx 单节点实例取值为\"InfluxdbSingle\"。 - GeminiDB Cassandra云原生部署模式实例取值为\"CloudNativeCluster\"。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'datastoreVersionName' => null,
        'datastoreName' => null,
        'mode' => null,
        'created' => null,
        'updated' => null
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
    * datastoreName  数据库名称。
    * mode  【参数解释】 数据库实例类型。 【取值范围】 - GeminiDB Mongo 副本集实例取值为\"ReplicaSet\"。 - GeminiDB Influx 单节点实例取值为\"InfluxdbSingle\"。 - GeminiDB Cassandra云原生部署模式实例取值为\"CloudNativeCluster\"。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'datastoreVersionName' => 'datastore_version_name',
            'datastoreName' => 'datastore_name',
            'mode' => 'mode',
            'created' => 'created',
            'updated' => 'updated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  参数模板ID。
    * name  参数模板名称。
    * description  参数模板描述。
    * datastoreVersionName  数据库版本名称。
    * datastoreName  数据库名称。
    * mode  【参数解释】 数据库实例类型。 【取值范围】 - GeminiDB Mongo 副本集实例取值为\"ReplicaSet\"。 - GeminiDB Influx 单节点实例取值为\"InfluxdbSingle\"。 - GeminiDB Cassandra云原生部署模式实例取值为\"CloudNativeCluster\"。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'datastoreVersionName' => 'setDatastoreVersionName',
            'datastoreName' => 'setDatastoreName',
            'mode' => 'setMode',
            'created' => 'setCreated',
            'updated' => 'setUpdated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  参数模板ID。
    * name  参数模板名称。
    * description  参数模板描述。
    * datastoreVersionName  数据库版本名称。
    * datastoreName  数据库名称。
    * mode  【参数解释】 数据库实例类型。 【取值范围】 - GeminiDB Mongo 副本集实例取值为\"ReplicaSet\"。 - GeminiDB Influx 单节点实例取值为\"InfluxdbSingle\"。 - GeminiDB Cassandra云原生部署模式实例取值为\"CloudNativeCluster\"。
    * created  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * updated  更新时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'datastoreVersionName' => 'getDatastoreVersionName',
            'datastoreName' => 'getDatastoreName',
            'mode' => 'getMode',
            'created' => 'getCreated',
            'updated' => 'getUpdated'
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
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
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
    *  数据库名称。
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
    * @param string $datastoreName 数据库名称。
    *
    * @return $this
    */
    public function setDatastoreName($datastoreName)
    {
        $this->container['datastoreName'] = $datastoreName;
        return $this;
    }

    /**
    * Gets mode
    *  【参数解释】 数据库实例类型。 【取值范围】 - GeminiDB Mongo 副本集实例取值为\"ReplicaSet\"。 - GeminiDB Influx 单节点实例取值为\"InfluxdbSingle\"。 - GeminiDB Cassandra云原生部署模式实例取值为\"CloudNativeCluster\"。
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
    * @param string|null $mode 【参数解释】 数据库实例类型。 【取值范围】 - GeminiDB Mongo 副本集实例取值为\"ReplicaSet\"。 - GeminiDB Influx 单节点实例取值为\"InfluxdbSingle\"。 - GeminiDB Cassandra云原生部署模式实例取值为\"CloudNativeCluster\"。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets created
    *  创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
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
    * @param string $created 创建时间，格式为\"yyyy-MM-ddTHH:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
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


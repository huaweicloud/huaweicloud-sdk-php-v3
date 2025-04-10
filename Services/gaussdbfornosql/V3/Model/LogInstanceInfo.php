<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogInstanceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogInstanceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。
    * status  实例状态。 取值： - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点失败。
    * mode  实例类型。   -  取值为“Cluster”，表示GeminiDB Redis经典部署模式集群实例类型。   -  取值为“CloudNativeCluster”，表示GeminiDB Redis云原生部署模式集群实例类型。
    * datastore  datastore
    * actions  实例正在执行的动作。
    * enterpriseProjectId  企业项目ID。
    * supportedLogTypes  日志类型。slow_log表示慢日志，audit_log表示审计日志。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'mode' => 'string',
            'datastore' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\InstancesDatastoreResult',
            'actions' => 'string[]',
            'enterpriseProjectId' => 'string',
            'supportedLogTypes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。
    * status  实例状态。 取值： - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点失败。
    * mode  实例类型。   -  取值为“Cluster”，表示GeminiDB Redis经典部署模式集群实例类型。   -  取值为“CloudNativeCluster”，表示GeminiDB Redis云原生部署模式集群实例类型。
    * datastore  datastore
    * actions  实例正在执行的动作。
    * enterpriseProjectId  企业项目ID。
    * supportedLogTypes  日志类型。slow_log表示慢日志，audit_log表示审计日志。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'mode' => null,
        'datastore' => null,
        'actions' => null,
        'enterpriseProjectId' => null,
        'supportedLogTypes' => null
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
    * id  实例ID。
    * name  实例名称。
    * status  实例状态。 取值： - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点失败。
    * mode  实例类型。   -  取值为“Cluster”，表示GeminiDB Redis经典部署模式集群实例类型。   -  取值为“CloudNativeCluster”，表示GeminiDB Redis云原生部署模式集群实例类型。
    * datastore  datastore
    * actions  实例正在执行的动作。
    * enterpriseProjectId  企业项目ID。
    * supportedLogTypes  日志类型。slow_log表示慢日志，audit_log表示审计日志。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'mode' => 'mode',
            'datastore' => 'datastore',
            'actions' => 'actions',
            'enterpriseProjectId' => 'enterprise_project_id',
            'supportedLogTypes' => 'supported_log_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * name  实例名称。
    * status  实例状态。 取值： - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点失败。
    * mode  实例类型。   -  取值为“Cluster”，表示GeminiDB Redis经典部署模式集群实例类型。   -  取值为“CloudNativeCluster”，表示GeminiDB Redis云原生部署模式集群实例类型。
    * datastore  datastore
    * actions  实例正在执行的动作。
    * enterpriseProjectId  企业项目ID。
    * supportedLogTypes  日志类型。slow_log表示慢日志，audit_log表示审计日志。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'mode' => 'setMode',
            'datastore' => 'setDatastore',
            'actions' => 'setActions',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'supportedLogTypes' => 'setSupportedLogTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * name  实例名称。
    * status  实例状态。 取值： - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点失败。
    * mode  实例类型。   -  取值为“Cluster”，表示GeminiDB Redis经典部署模式集群实例类型。   -  取值为“CloudNativeCluster”，表示GeminiDB Redis云原生部署模式集群实例类型。
    * datastore  datastore
    * actions  实例正在执行的动作。
    * enterpriseProjectId  企业项目ID。
    * supportedLogTypes  日志类型。slow_log表示慢日志，audit_log表示审计日志。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'mode' => 'getMode',
            'datastore' => 'getDatastore',
            'actions' => 'getActions',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'supportedLogTypes' => 'getSupportedLogTypes'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['supportedLogTypes'] = isset($data['supportedLogTypes']) ? $data['supportedLogTypes'] : null;
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
    *  实例ID。
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
    * @param string|null $id 实例ID。
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
    *  实例名称。
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
    * @param string|null $name 实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  实例状态。 取值： - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点失败。
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
    * @param string|null $status 实例状态。 取值： - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets mode
    *  实例类型。   -  取值为“Cluster”，表示GeminiDB Redis经典部署模式集群实例类型。   -  取值为“CloudNativeCluster”，表示GeminiDB Redis云原生部署模式集群实例类型。
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
    * @param string|null $mode 实例类型。   -  取值为“Cluster”，表示GeminiDB Redis经典部署模式集群实例类型。   -  取值为“CloudNativeCluster”，表示GeminiDB Redis云原生部署模式集群实例类型。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\InstancesDatastoreResult|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\InstancesDatastoreResult|null $datastore datastore
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
    *  实例正在执行的动作。
    *
    * @return string[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param string[]|null $actions 实例正在执行的动作。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets supportedLogTypes
    *  日志类型。slow_log表示慢日志，audit_log表示审计日志。
    *
    * @return string[]|null
    */
    public function getSupportedLogTypes()
    {
        return $this->container['supportedLogTypes'];
    }

    /**
    * Sets supportedLogTypes
    *
    * @param string[]|null $supportedLogTypes 日志类型。slow_log表示慢日志，audit_log表示审计日志。
    *
    * @return $this
    */
    public function setSupportedLogTypes($supportedLogTypes)
    {
        $this->container['supportedLogTypes'] = $supportedLogTypes;
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


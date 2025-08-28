<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportInstanceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportInstanceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tenantId  账号ID。
    * projectId  项目ID。
    * instanceId  实例ID。
    * masterNodeId  主节点ID。
    * instanceName  实例名称。
    * cpu  实例cpu核数。
    * mem  实例内存大小。
    * diskSize  磁盘大小。
    * diskType  磁盘类型。
    * engine  实例引擎类型。
    * engineVersion  引擎内核版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tenantId' => 'string',
            'projectId' => 'string',
            'instanceId' => 'string',
            'masterNodeId' => 'string',
            'instanceName' => 'string',
            'cpu' => 'int',
            'mem' => 'int',
            'diskSize' => 'int',
            'diskType' => 'string',
            'engine' => 'string',
            'engineVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tenantId  账号ID。
    * projectId  项目ID。
    * instanceId  实例ID。
    * masterNodeId  主节点ID。
    * instanceName  实例名称。
    * cpu  实例cpu核数。
    * mem  实例内存大小。
    * diskSize  磁盘大小。
    * diskType  磁盘类型。
    * engine  实例引擎类型。
    * engineVersion  引擎内核版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tenantId' => null,
        'projectId' => null,
        'instanceId' => null,
        'masterNodeId' => null,
        'instanceName' => null,
        'cpu' => 'int32',
        'mem' => 'int32',
        'diskSize' => 'int32',
        'diskType' => null,
        'engine' => null,
        'engineVersion' => null
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
    * tenantId  账号ID。
    * projectId  项目ID。
    * instanceId  实例ID。
    * masterNodeId  主节点ID。
    * instanceName  实例名称。
    * cpu  实例cpu核数。
    * mem  实例内存大小。
    * diskSize  磁盘大小。
    * diskType  磁盘类型。
    * engine  实例引擎类型。
    * engineVersion  引擎内核版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tenantId' => 'tenant_id',
            'projectId' => 'project_id',
            'instanceId' => 'instance_id',
            'masterNodeId' => 'master_node_id',
            'instanceName' => 'instance_name',
            'cpu' => 'cpu',
            'mem' => 'mem',
            'diskSize' => 'disk_size',
            'diskType' => 'disk_type',
            'engine' => 'engine',
            'engineVersion' => 'engine_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tenantId  账号ID。
    * projectId  项目ID。
    * instanceId  实例ID。
    * masterNodeId  主节点ID。
    * instanceName  实例名称。
    * cpu  实例cpu核数。
    * mem  实例内存大小。
    * diskSize  磁盘大小。
    * diskType  磁盘类型。
    * engine  实例引擎类型。
    * engineVersion  引擎内核版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'tenantId' => 'setTenantId',
            'projectId' => 'setProjectId',
            'instanceId' => 'setInstanceId',
            'masterNodeId' => 'setMasterNodeId',
            'instanceName' => 'setInstanceName',
            'cpu' => 'setCpu',
            'mem' => 'setMem',
            'diskSize' => 'setDiskSize',
            'diskType' => 'setDiskType',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tenantId  账号ID。
    * projectId  项目ID。
    * instanceId  实例ID。
    * masterNodeId  主节点ID。
    * instanceName  实例名称。
    * cpu  实例cpu核数。
    * mem  实例内存大小。
    * diskSize  磁盘大小。
    * diskType  磁盘类型。
    * engine  实例引擎类型。
    * engineVersion  引擎内核版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'tenantId' => 'getTenantId',
            'projectId' => 'getProjectId',
            'instanceId' => 'getInstanceId',
            'masterNodeId' => 'getMasterNodeId',
            'instanceName' => 'getInstanceName',
            'cpu' => 'getCpu',
            'mem' => 'getMem',
            'diskSize' => 'getDiskSize',
            'diskType' => 'getDiskType',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion'
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['masterNodeId'] = isset($data['masterNodeId']) ? $data['masterNodeId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['mem'] = isset($data['mem']) ? $data['mem'] : null;
        $this->container['diskSize'] = isset($data['diskSize']) ? $data['diskSize'] : null;
        $this->container['diskType'] = isset($data['diskType']) ? $data['diskType'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['masterNodeId'] === null) {
            $invalidProperties[] = "'masterNodeId' can't be null";
        }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
        if ($this->container['cpu'] === null) {
            $invalidProperties[] = "'cpu' can't be null";
        }
        if ($this->container['mem'] === null) {
            $invalidProperties[] = "'mem' can't be null";
        }
        if ($this->container['diskSize'] === null) {
            $invalidProperties[] = "'diskSize' can't be null";
        }
        if ($this->container['diskType'] === null) {
            $invalidProperties[] = "'diskType' can't be null";
        }
        if ($this->container['engine'] === null) {
            $invalidProperties[] = "'engine' can't be null";
        }
        if ($this->container['engineVersion'] === null) {
            $invalidProperties[] = "'engineVersion' can't be null";
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
    * Gets tenantId
    *  账号ID。
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 账号ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets masterNodeId
    *  主节点ID。
    *
    * @return string
    */
    public function getMasterNodeId()
    {
        return $this->container['masterNodeId'];
    }

    /**
    * Sets masterNodeId
    *
    * @param string $masterNodeId 主节点ID。
    *
    * @return $this
    */
    public function setMasterNodeId($masterNodeId)
    {
        $this->container['masterNodeId'] = $masterNodeId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称。
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName 实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets cpu
    *  实例cpu核数。
    *
    * @return int
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int $cpu 实例cpu核数。
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
    *  实例内存大小。
    *
    * @return int
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param int $mem 实例内存大小。
    *
    * @return $this
    */
    public function setMem($mem)
    {
        $this->container['mem'] = $mem;
        return $this;
    }

    /**
    * Gets diskSize
    *  磁盘大小。
    *
    * @return int
    */
    public function getDiskSize()
    {
        return $this->container['diskSize'];
    }

    /**
    * Sets diskSize
    *
    * @param int $diskSize 磁盘大小。
    *
    * @return $this
    */
    public function setDiskSize($diskSize)
    {
        $this->container['diskSize'] = $diskSize;
        return $this;
    }

    /**
    * Gets diskType
    *  磁盘类型。
    *
    * @return string
    */
    public function getDiskType()
    {
        return $this->container['diskType'];
    }

    /**
    * Sets diskType
    *
    * @param string $diskType 磁盘类型。
    *
    * @return $this
    */
    public function setDiskType($diskType)
    {
        $this->container['diskType'] = $diskType;
        return $this;
    }

    /**
    * Gets engine
    *  实例引擎类型。
    *
    * @return string
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string $engine 实例引擎类型。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets engineVersion
    *  引擎内核版本。
    *
    * @return string
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string $engineVersion 引擎内核版本。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
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


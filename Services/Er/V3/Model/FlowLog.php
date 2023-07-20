<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowLog';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  流日志ID
    * name  流日志名称
    * description  流日志描述
    * projectId  流日志任务创建者项目ID
    * resourceType  采集的资源类型:attachment
    * resourceId  采集的资源ID
    * logGroupId  日志组ID
    * logStreamId  日志流ID
    * logStoreType  流日志存储类型
    * logAggregationInterval  日志聚合时间，单位s，取值范围：60-600
    * createdAt  创建时间
    * updatedAt  更新时间
    * state  日志资源状态:pending|available|modifying|deleting|deleted|failed
    * enabled  日志开关:true|false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'projectId' => 'string',
            'resourceType' => 'string',
            'resourceId' => 'string',
            'logGroupId' => 'string',
            'logStreamId' => 'string',
            'logStoreType' => 'string',
            'logAggregationInterval' => 'int',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'state' => 'string',
            'enabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  流日志ID
    * name  流日志名称
    * description  流日志描述
    * projectId  流日志任务创建者项目ID
    * resourceType  采集的资源类型:attachment
    * resourceId  采集的资源ID
    * logGroupId  日志组ID
    * logStreamId  日志流ID
    * logStoreType  流日志存储类型
    * logAggregationInterval  日志聚合时间，单位s，取值范围：60-600
    * createdAt  创建时间
    * updatedAt  更新时间
    * state  日志资源状态:pending|available|modifying|deleting|deleted|failed
    * enabled  日志开关:true|false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'projectId' => null,
        'resourceType' => null,
        'resourceId' => null,
        'logGroupId' => null,
        'logStreamId' => null,
        'logStoreType' => null,
        'logAggregationInterval' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'state' => null,
        'enabled' => null
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
    * id  流日志ID
    * name  流日志名称
    * description  流日志描述
    * projectId  流日志任务创建者项目ID
    * resourceType  采集的资源类型:attachment
    * resourceId  采集的资源ID
    * logGroupId  日志组ID
    * logStreamId  日志流ID
    * logStoreType  流日志存储类型
    * logAggregationInterval  日志聚合时间，单位s，取值范围：60-600
    * createdAt  创建时间
    * updatedAt  更新时间
    * state  日志资源状态:pending|available|modifying|deleting|deleted|failed
    * enabled  日志开关:true|false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'projectId' => 'project_id',
            'resourceType' => 'resource_type',
            'resourceId' => 'resource_id',
            'logGroupId' => 'log_group_id',
            'logStreamId' => 'log_stream_id',
            'logStoreType' => 'log_store_type',
            'logAggregationInterval' => 'log_aggregation_interval',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'state' => 'state',
            'enabled' => 'enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  流日志ID
    * name  流日志名称
    * description  流日志描述
    * projectId  流日志任务创建者项目ID
    * resourceType  采集的资源类型:attachment
    * resourceId  采集的资源ID
    * logGroupId  日志组ID
    * logStreamId  日志流ID
    * logStoreType  流日志存储类型
    * logAggregationInterval  日志聚合时间，单位s，取值范围：60-600
    * createdAt  创建时间
    * updatedAt  更新时间
    * state  日志资源状态:pending|available|modifying|deleting|deleted|failed
    * enabled  日志开关:true|false
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'projectId' => 'setProjectId',
            'resourceType' => 'setResourceType',
            'resourceId' => 'setResourceId',
            'logGroupId' => 'setLogGroupId',
            'logStreamId' => 'setLogStreamId',
            'logStoreType' => 'setLogStoreType',
            'logAggregationInterval' => 'setLogAggregationInterval',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'state' => 'setState',
            'enabled' => 'setEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  流日志ID
    * name  流日志名称
    * description  流日志描述
    * projectId  流日志任务创建者项目ID
    * resourceType  采集的资源类型:attachment
    * resourceId  采集的资源ID
    * logGroupId  日志组ID
    * logStreamId  日志流ID
    * logStoreType  流日志存储类型
    * logAggregationInterval  日志聚合时间，单位s，取值范围：60-600
    * createdAt  创建时间
    * updatedAt  更新时间
    * state  日志资源状态:pending|available|modifying|deleting|deleted|failed
    * enabled  日志开关:true|false
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'projectId' => 'getProjectId',
            'resourceType' => 'getResourceType',
            'resourceId' => 'getResourceId',
            'logGroupId' => 'getLogGroupId',
            'logStreamId' => 'getLogStreamId',
            'logStoreType' => 'getLogStoreType',
            'logAggregationInterval' => 'getLogAggregationInterval',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'state' => 'getState',
            'enabled' => 'getEnabled'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logStoreType'] = isset($data['logStoreType']) ? $data['logStoreType'] : null;
        $this->container['logAggregationInterval'] = isset($data['logAggregationInterval']) ? $data['logAggregationInterval'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
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
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
        if ($this->container['logGroupId'] === null) {
            $invalidProperties[] = "'logGroupId' can't be null";
        }
        if ($this->container['logStreamId'] === null) {
            $invalidProperties[] = "'logStreamId' can't be null";
        }
        if ($this->container['logStoreType'] === null) {
            $invalidProperties[] = "'logStoreType' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
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
    *  流日志ID
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
    * @param string $id 流日志ID
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
    *  流日志名称
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
    * @param string $name 流日志名称
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
    *  流日志描述
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
    * @param string|null $description 流日志描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets projectId
    *  流日志任务创建者项目ID
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
    * @param string $projectId 流日志任务创建者项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets resourceType
    *  采集的资源类型:attachment
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 采集的资源类型:attachment
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceId
    *  采集的资源ID
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 采集的资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组ID
    *
    * @return string
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string $logGroupId 日志组ID
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logStreamId
    *  日志流ID
    *
    * @return string
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string $logStreamId 日志流ID
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets logStoreType
    *  流日志存储类型
    *
    * @return string
    */
    public function getLogStoreType()
    {
        return $this->container['logStoreType'];
    }

    /**
    * Sets logStoreType
    *
    * @param string $logStoreType 流日志存储类型
    *
    * @return $this
    */
    public function setLogStoreType($logStoreType)
    {
        $this->container['logStoreType'] = $logStoreType;
        return $this;
    }

    /**
    * Gets logAggregationInterval
    *  日志聚合时间，单位s，取值范围：60-600
    *
    * @return int|null
    */
    public function getLogAggregationInterval()
    {
        return $this->container['logAggregationInterval'];
    }

    /**
    * Sets logAggregationInterval
    *
    * @param int|null $logAggregationInterval 日志聚合时间，单位s，取值范围：60-600
    *
    * @return $this
    */
    public function setLogAggregationInterval($logAggregationInterval)
    {
        $this->container['logAggregationInterval'] = $logAggregationInterval;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets state
    *  日志资源状态:pending|available|modifying|deleting|deleted|failed
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state 日志资源状态:pending|available|modifying|deleting|deleted|failed
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets enabled
    *  日志开关:true|false
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 日志开关:true|false
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
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


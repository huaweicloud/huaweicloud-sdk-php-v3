<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogtankDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogtankDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  云日志ID。
    * domainId  租户ID。
    * projectId  项目ID。
    * resourceType  resourceType
    * resourceId  开启云日志的资源ID。
    * logGroupId  云日志组ID。
    * logStreamId  云日志流ID。
    * status  status
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'domainId' => 'string',
            'projectId' => 'string',
            'resourceType' => '\HuaweiCloud\SDK\Ga\V1\Model\LogtankResourceType',
            'resourceId' => 'string',
            'logGroupId' => 'string',
            'logStreamId' => 'string',
            'status' => '\HuaweiCloud\SDK\Ga\V1\Model\ConfigStatus',
            'createdAt' => '\DateTime',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  云日志ID。
    * domainId  租户ID。
    * projectId  项目ID。
    * resourceType  resourceType
    * resourceId  开启云日志的资源ID。
    * logGroupId  云日志组ID。
    * logStreamId  云日志流ID。
    * status  status
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'domainId' => null,
        'projectId' => null,
        'resourceType' => null,
        'resourceId' => null,
        'logGroupId' => null,
        'logStreamId' => null,
        'status' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time。'
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
    * id  云日志ID。
    * domainId  租户ID。
    * projectId  项目ID。
    * resourceType  resourceType
    * resourceId  开启云日志的资源ID。
    * logGroupId  云日志组ID。
    * logStreamId  云日志流ID。
    * status  status
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'resourceType' => 'resource_type',
            'resourceId' => 'resource_id',
            'logGroupId' => 'log_group_id',
            'logStreamId' => 'log_stream_id',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  云日志ID。
    * domainId  租户ID。
    * projectId  项目ID。
    * resourceType  resourceType
    * resourceId  开启云日志的资源ID。
    * logGroupId  云日志组ID。
    * logStreamId  云日志流ID。
    * status  status
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'resourceType' => 'setResourceType',
            'resourceId' => 'setResourceId',
            'logGroupId' => 'setLogGroupId',
            'logStreamId' => 'setLogStreamId',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  云日志ID。
    * domainId  租户ID。
    * projectId  项目ID。
    * resourceType  resourceType
    * resourceId  开启云日志的资源ID。
    * logGroupId  云日志组ID。
    * logStreamId  云日志流ID。
    * status  status
    * createdAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'resourceType' => 'getResourceType',
            'resourceId' => 'getResourceId',
            'logGroupId' => 'getLogGroupId',
            'logStreamId' => 'getLogStreamId',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    *  云日志ID。
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
    * @param string|null $id 云日志ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID。
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
    *  resourceType
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\LogtankResourceType|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\LogtankResourceType|null $resourceType resourceType
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
    *  开启云日志的资源ID。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 开启云日志的资源ID。
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
    *  云日志组ID。
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId 云日志组ID。
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
    *  云日志流ID。
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId 云日志流ID。
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\ConfigStatus|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\ConfigStatus|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建时间。
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
    *  更新时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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


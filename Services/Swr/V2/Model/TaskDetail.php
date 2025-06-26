<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * executionId  执行任务的ID
    * resourceType  资源类型
    * srcResource  源资源
    * dstResource  目标资源
    * operation  操作类型
    * jobId  harbor任务ID
    * status  状态
    * statusRevision  状态修订
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'executionId' => 'int',
            'resourceType' => 'string',
            'srcResource' => 'string',
            'dstResource' => 'string',
            'operation' => 'string',
            'jobId' => 'string',
            'status' => 'string',
            'statusRevision' => 'int',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * executionId  执行任务的ID
    * resourceType  资源类型
    * srcResource  源资源
    * dstResource  目标资源
    * operation  操作类型
    * jobId  harbor任务ID
    * status  状态
    * statusRevision  状态修订
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'executionId' => null,
        'resourceType' => null,
        'srcResource' => null,
        'dstResource' => null,
        'operation' => null,
        'jobId' => null,
        'status' => null,
        'statusRevision' => null,
        'startTime' => null,
        'endTime' => null
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
    * id  任务ID
    * executionId  执行任务的ID
    * resourceType  资源类型
    * srcResource  源资源
    * dstResource  目标资源
    * operation  操作类型
    * jobId  harbor任务ID
    * status  状态
    * statusRevision  状态修订
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'executionId' => 'execution_id',
            'resourceType' => 'resource_type',
            'srcResource' => 'src_resource',
            'dstResource' => 'dst_resource',
            'operation' => 'operation',
            'jobId' => 'job_id',
            'status' => 'status',
            'statusRevision' => 'StatusRevision',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * executionId  执行任务的ID
    * resourceType  资源类型
    * srcResource  源资源
    * dstResource  目标资源
    * operation  操作类型
    * jobId  harbor任务ID
    * status  状态
    * statusRevision  状态修订
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'executionId' => 'setExecutionId',
            'resourceType' => 'setResourceType',
            'srcResource' => 'setSrcResource',
            'dstResource' => 'setDstResource',
            'operation' => 'setOperation',
            'jobId' => 'setJobId',
            'status' => 'setStatus',
            'statusRevision' => 'setStatusRevision',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * executionId  执行任务的ID
    * resourceType  资源类型
    * srcResource  源资源
    * dstResource  目标资源
    * operation  操作类型
    * jobId  harbor任务ID
    * status  状态
    * statusRevision  状态修订
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'executionId' => 'getExecutionId',
            'resourceType' => 'getResourceType',
            'srcResource' => 'getSrcResource',
            'dstResource' => 'getDstResource',
            'operation' => 'getOperation',
            'jobId' => 'getJobId',
            'status' => 'getStatus',
            'statusRevision' => 'getStatusRevision',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['srcResource'] = isset($data['srcResource']) ? $data['srcResource'] : null;
        $this->container['dstResource'] = isset($data['dstResource']) ? $data['dstResource'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusRevision'] = isset($data['statusRevision']) ? $data['statusRevision'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
        if ($this->container['executionId'] === null) {
            $invalidProperties[] = "'executionId' can't be null";
        }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
        if ($this->container['srcResource'] === null) {
            $invalidProperties[] = "'srcResource' can't be null";
        }
        if ($this->container['dstResource'] === null) {
            $invalidProperties[] = "'dstResource' can't be null";
        }
        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
        }
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['statusRevision'] === null) {
            $invalidProperties[] = "'statusRevision' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    *  任务ID
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id 任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets executionId
    *  执行任务的ID
    *
    * @return int
    */
    public function getExecutionId()
    {
        return $this->container['executionId'];
    }

    /**
    * Sets executionId
    *
    * @param int $executionId 执行任务的ID
    *
    * @return $this
    */
    public function setExecutionId($executionId)
    {
        $this->container['executionId'] = $executionId;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
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
    * @param string $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets srcResource
    *  源资源
    *
    * @return string
    */
    public function getSrcResource()
    {
        return $this->container['srcResource'];
    }

    /**
    * Sets srcResource
    *
    * @param string $srcResource 源资源
    *
    * @return $this
    */
    public function setSrcResource($srcResource)
    {
        $this->container['srcResource'] = $srcResource;
        return $this;
    }

    /**
    * Gets dstResource
    *  目标资源
    *
    * @return string
    */
    public function getDstResource()
    {
        return $this->container['dstResource'];
    }

    /**
    * Sets dstResource
    *
    * @param string $dstResource 目标资源
    *
    * @return $this
    */
    public function setDstResource($dstResource)
    {
        $this->container['dstResource'] = $dstResource;
        return $this;
    }

    /**
    * Gets operation
    *  操作类型
    *
    * @return string
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string $operation 操作类型
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets jobId
    *  harbor任务ID
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId harbor任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusRevision
    *  状态修订
    *
    * @return int
    */
    public function getStatusRevision()
    {
        return $this->container['statusRevision'];
    }

    /**
    * Sets statusRevision
    *
    * @param int $statusRevision 状态修订
    *
    * @return $this
    */
    public function setStatusRevision($statusRevision)
    {
        $this->container['statusRevision'] = $statusRevision;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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


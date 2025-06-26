<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Task implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Task';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  老化策略执行记录任务ID
    * executionId  老化策略执行记录ID
    * repository  制品仓库名称
    * jobId  任务名称
    * status  执行状态
    * statusCode  状态码
    * statusRevision  状态修订
    * startTime  开始时间
    * endTime  结束时间
    * total  版本总数
    * retained  保留版本总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'executionId' => 'int',
            'repository' => 'string',
            'jobId' => 'string',
            'status' => 'string',
            'statusCode' => 'int',
            'statusRevision' => 'int',
            'startTime' => 'string',
            'endTime' => 'string',
            'total' => 'int',
            'retained' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  老化策略执行记录任务ID
    * executionId  老化策略执行记录ID
    * repository  制品仓库名称
    * jobId  任务名称
    * status  执行状态
    * statusCode  状态码
    * statusRevision  状态修订
    * startTime  开始时间
    * endTime  结束时间
    * total  版本总数
    * retained  保留版本总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'executionId' => null,
        'repository' => null,
        'jobId' => null,
        'status' => null,
        'statusCode' => null,
        'statusRevision' => null,
        'startTime' => null,
        'endTime' => null,
        'total' => null,
        'retained' => null
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
    * id  老化策略执行记录任务ID
    * executionId  老化策略执行记录ID
    * repository  制品仓库名称
    * jobId  任务名称
    * status  执行状态
    * statusCode  状态码
    * statusRevision  状态修订
    * startTime  开始时间
    * endTime  结束时间
    * total  版本总数
    * retained  保留版本总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'executionId' => 'execution_id',
            'repository' => 'repository',
            'jobId' => 'job_id',
            'status' => 'status',
            'statusCode' => 'status_code',
            'statusRevision' => 'status_revision',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'total' => 'total',
            'retained' => 'retained'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  老化策略执行记录任务ID
    * executionId  老化策略执行记录ID
    * repository  制品仓库名称
    * jobId  任务名称
    * status  执行状态
    * statusCode  状态码
    * statusRevision  状态修订
    * startTime  开始时间
    * endTime  结束时间
    * total  版本总数
    * retained  保留版本总数
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'executionId' => 'setExecutionId',
            'repository' => 'setRepository',
            'jobId' => 'setJobId',
            'status' => 'setStatus',
            'statusCode' => 'setStatusCode',
            'statusRevision' => 'setStatusRevision',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'total' => 'setTotal',
            'retained' => 'setRetained'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  老化策略执行记录任务ID
    * executionId  老化策略执行记录ID
    * repository  制品仓库名称
    * jobId  任务名称
    * status  执行状态
    * statusCode  状态码
    * statusRevision  状态修订
    * startTime  开始时间
    * endTime  结束时间
    * total  版本总数
    * retained  保留版本总数
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'executionId' => 'getExecutionId',
            'repository' => 'getRepository',
            'jobId' => 'getJobId',
            'status' => 'getStatus',
            'statusCode' => 'getStatusCode',
            'statusRevision' => 'getStatusRevision',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'total' => 'getTotal',
            'retained' => 'getRetained'
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
        $this->container['repository'] = isset($data['repository']) ? $data['repository'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['statusRevision'] = isset($data['statusRevision']) ? $data['statusRevision'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['retained'] = isset($data['retained']) ? $data['retained'] : null;
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
        if ($this->container['repository'] === null) {
            $invalidProperties[] = "'repository' can't be null";
        }
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['statusCode'] === null) {
            $invalidProperties[] = "'statusCode' can't be null";
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
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['retained'] === null) {
            $invalidProperties[] = "'retained' can't be null";
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
    *  老化策略执行记录任务ID
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
    * @param int $id 老化策略执行记录任务ID
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
    *  老化策略执行记录ID
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
    * @param int $executionId 老化策略执行记录ID
    *
    * @return $this
    */
    public function setExecutionId($executionId)
    {
        $this->container['executionId'] = $executionId;
        return $this;
    }

    /**
    * Gets repository
    *  制品仓库名称
    *
    * @return string
    */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
    * Sets repository
    *
    * @param string $repository 制品仓库名称
    *
    * @return $this
    */
    public function setRepository($repository)
    {
        $this->container['repository'] = $repository;
        return $this;
    }

    /**
    * Gets jobId
    *  任务名称
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
    * @param string $jobId 任务名称
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
    *  执行状态
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
    * @param string $status 执行状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusCode
    *  状态码
    *
    * @return int
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param int $statusCode 状态码
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
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
    * Gets total
    *  版本总数
    *
    * @return int
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int $total 版本总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets retained
    *  保留版本总数
    *
    * @return int
    */
    public function getRetained()
    {
        return $this->container['retained'];
    }

    /**
    * Sets retained
    *
    * @param int $retained 保留版本总数
    *
    * @return $this
    */
    public function setRetained($retained)
    {
        $this->container['retained'] = $retained;
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


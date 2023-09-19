<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterLogRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'clusterLogRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  日志任务ID，通过系统UUID生成。
    * clusterId  集群ID。
    * createAt  创建时间。格式：Unix时间戳格式。
    * logPath  日志在OBS桶中的备份路径。
    * status  任务状态。 - RUNNING: 备份行中。 - SUCCESS: 备份成功。 - FAIL: 备份失败。
    * finishedAt  结束时间，当创建未结束时结束时间为null。格式：Unix时间戳格式。
    * jobTypes  任务类型。 - Manual: 手动备份。 - Auto： 自动备份。
    * failedMsg  错误信息。当任务状态没有处于失败状态时该字段为null。
    * jobId  任务ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'clusterId' => 'string',
            'createAt' => 'string',
            'logPath' => 'string',
            'status' => 'string',
            'finishedAt' => 'int',
            'jobTypes' => 'string',
            'failedMsg' => 'string',
            'jobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  日志任务ID，通过系统UUID生成。
    * clusterId  集群ID。
    * createAt  创建时间。格式：Unix时间戳格式。
    * logPath  日志在OBS桶中的备份路径。
    * status  任务状态。 - RUNNING: 备份行中。 - SUCCESS: 备份成功。 - FAIL: 备份失败。
    * finishedAt  结束时间，当创建未结束时结束时间为null。格式：Unix时间戳格式。
    * jobTypes  任务类型。 - Manual: 手动备份。 - Auto： 自动备份。
    * failedMsg  错误信息。当任务状态没有处于失败状态时该字段为null。
    * jobId  任务ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'clusterId' => null,
        'createAt' => null,
        'logPath' => null,
        'status' => null,
        'finishedAt' => 'int64',
        'jobTypes' => null,
        'failedMsg' => null,
        'jobId' => null
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
    * id  日志任务ID，通过系统UUID生成。
    * clusterId  集群ID。
    * createAt  创建时间。格式：Unix时间戳格式。
    * logPath  日志在OBS桶中的备份路径。
    * status  任务状态。 - RUNNING: 备份行中。 - SUCCESS: 备份成功。 - FAIL: 备份失败。
    * finishedAt  结束时间，当创建未结束时结束时间为null。格式：Unix时间戳格式。
    * jobTypes  任务类型。 - Manual: 手动备份。 - Auto： 自动备份。
    * failedMsg  错误信息。当任务状态没有处于失败状态时该字段为null。
    * jobId  任务ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'clusterId' => 'clusterId',
            'createAt' => 'createAt',
            'logPath' => 'logPath',
            'status' => 'status',
            'finishedAt' => 'finishedAt',
            'jobTypes' => 'jobTypes',
            'failedMsg' => 'failedMsg',
            'jobId' => 'jobId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  日志任务ID，通过系统UUID生成。
    * clusterId  集群ID。
    * createAt  创建时间。格式：Unix时间戳格式。
    * logPath  日志在OBS桶中的备份路径。
    * status  任务状态。 - RUNNING: 备份行中。 - SUCCESS: 备份成功。 - FAIL: 备份失败。
    * finishedAt  结束时间，当创建未结束时结束时间为null。格式：Unix时间戳格式。
    * jobTypes  任务类型。 - Manual: 手动备份。 - Auto： 自动备份。
    * failedMsg  错误信息。当任务状态没有处于失败状态时该字段为null。
    * jobId  任务ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'clusterId' => 'setClusterId',
            'createAt' => 'setCreateAt',
            'logPath' => 'setLogPath',
            'status' => 'setStatus',
            'finishedAt' => 'setFinishedAt',
            'jobTypes' => 'setJobTypes',
            'failedMsg' => 'setFailedMsg',
            'jobId' => 'setJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  日志任务ID，通过系统UUID生成。
    * clusterId  集群ID。
    * createAt  创建时间。格式：Unix时间戳格式。
    * logPath  日志在OBS桶中的备份路径。
    * status  任务状态。 - RUNNING: 备份行中。 - SUCCESS: 备份成功。 - FAIL: 备份失败。
    * finishedAt  结束时间，当创建未结束时结束时间为null。格式：Unix时间戳格式。
    * jobTypes  任务类型。 - Manual: 手动备份。 - Auto： 自动备份。
    * failedMsg  错误信息。当任务状态没有处于失败状态时该字段为null。
    * jobId  任务ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'clusterId' => 'getClusterId',
            'createAt' => 'getCreateAt',
            'logPath' => 'getLogPath',
            'status' => 'getStatus',
            'finishedAt' => 'getFinishedAt',
            'jobTypes' => 'getJobTypes',
            'failedMsg' => 'getFailedMsg',
            'jobId' => 'getJobId'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['logPath'] = isset($data['logPath']) ? $data['logPath'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['finishedAt'] = isset($data['finishedAt']) ? $data['finishedAt'] : null;
        $this->container['jobTypes'] = isset($data['jobTypes']) ? $data['jobTypes'] : null;
        $this->container['failedMsg'] = isset($data['failedMsg']) ? $data['failedMsg'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
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
    *  日志任务ID，通过系统UUID生成。
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
    * @param string|null $id 日志任务ID，通过系统UUID生成。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间。格式：Unix时间戳格式。
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt 创建时间。格式：Unix时间戳格式。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets logPath
    *  日志在OBS桶中的备份路径。
    *
    * @return string|null
    */
    public function getLogPath()
    {
        return $this->container['logPath'];
    }

    /**
    * Sets logPath
    *
    * @param string|null $logPath 日志在OBS桶中的备份路径。
    *
    * @return $this
    */
    public function setLogPath($logPath)
    {
        $this->container['logPath'] = $logPath;
        return $this;
    }

    /**
    * Gets status
    *  任务状态。 - RUNNING: 备份行中。 - SUCCESS: 备份成功。 - FAIL: 备份失败。
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
    * @param string|null $status 任务状态。 - RUNNING: 备份行中。 - SUCCESS: 备份成功。 - FAIL: 备份失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets finishedAt
    *  结束时间，当创建未结束时结束时间为null。格式：Unix时间戳格式。
    *
    * @return int|null
    */
    public function getFinishedAt()
    {
        return $this->container['finishedAt'];
    }

    /**
    * Sets finishedAt
    *
    * @param int|null $finishedAt 结束时间，当创建未结束时结束时间为null。格式：Unix时间戳格式。
    *
    * @return $this
    */
    public function setFinishedAt($finishedAt)
    {
        $this->container['finishedAt'] = $finishedAt;
        return $this;
    }

    /**
    * Gets jobTypes
    *  任务类型。 - Manual: 手动备份。 - Auto： 自动备份。
    *
    * @return string|null
    */
    public function getJobTypes()
    {
        return $this->container['jobTypes'];
    }

    /**
    * Sets jobTypes
    *
    * @param string|null $jobTypes 任务类型。 - Manual: 手动备份。 - Auto： 自动备份。
    *
    * @return $this
    */
    public function setJobTypes($jobTypes)
    {
        $this->container['jobTypes'] = $jobTypes;
        return $this;
    }

    /**
    * Gets failedMsg
    *  错误信息。当任务状态没有处于失败状态时该字段为null。
    *
    * @return string|null
    */
    public function getFailedMsg()
    {
        return $this->container['failedMsg'];
    }

    /**
    * Sets failedMsg
    *
    * @param string|null $failedMsg 错误信息。当任务状态没有处于失败状态时该字段为null。
    *
    * @return $this
    */
    public function setFailedMsg($failedMsg)
    {
        $this->container['failedMsg'] = $failedMsg;
        return $this;
    }

    /**
    * Gets jobId
    *  任务ID。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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


<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTaskDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTaskDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID。
    * instanceName  实例名。
    * jobId  工作流ID。
    * jobName  工作流名称。
    * createdAt  工作流创建时间。
    * updateAt  工作流更新时间。
    * process  工作流进度。
    * status  工作流状态。
    * subTaskList  子任务进度信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'jobId' => 'string',
            'jobName' => 'string',
            'createdAt' => 'string',
            'updateAt' => 'string',
            'process' => 'string',
            'status' => 'string',
            'subTaskList' => '\HuaweiCloud\SDK\Rds\V3\Model\SubTaskInfo[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID。
    * instanceName  实例名。
    * jobId  工作流ID。
    * jobName  工作流名称。
    * createdAt  工作流创建时间。
    * updateAt  工作流更新时间。
    * process  工作流进度。
    * status  工作流状态。
    * subTaskList  子任务进度信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'jobId' => null,
        'jobName' => null,
        'createdAt' => null,
        'updateAt' => null,
        'process' => null,
        'status' => null,
        'subTaskList' => null,
        'xRequestId' => null
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
    * instanceId  实例ID。
    * instanceName  实例名。
    * jobId  工作流ID。
    * jobName  工作流名称。
    * createdAt  工作流创建时间。
    * updateAt  工作流更新时间。
    * process  工作流进度。
    * status  工作流状态。
    * subTaskList  子任务进度信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'createdAt' => 'created_at',
            'updateAt' => 'update_at',
            'process' => 'process',
            'status' => 'status',
            'subTaskList' => 'sub_task_list',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID。
    * instanceName  实例名。
    * jobId  工作流ID。
    * jobName  工作流名称。
    * createdAt  工作流创建时间。
    * updateAt  工作流更新时间。
    * process  工作流进度。
    * status  工作流状态。
    * subTaskList  子任务进度信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'createdAt' => 'setCreatedAt',
            'updateAt' => 'setUpdateAt',
            'process' => 'setProcess',
            'status' => 'setStatus',
            'subTaskList' => 'setSubTaskList',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID。
    * instanceName  实例名。
    * jobId  工作流ID。
    * jobName  工作流名称。
    * createdAt  工作流创建时间。
    * updateAt  工作流更新时间。
    * process  工作流进度。
    * status  工作流状态。
    * subTaskList  子任务进度信息
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'createdAt' => 'getCreatedAt',
            'updateAt' => 'getUpdateAt',
            'process' => 'getProcess',
            'status' => 'getStatus',
            'subTaskList' => 'getSubTaskList',
            'xRequestId' => 'getXRequestId'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['process'] = isset($data['process']) ? $data['process'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subTaskList'] = isset($data['subTaskList']) ? $data['subTaskList'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 4096)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 4096)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 4096)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) > 4096)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 4096)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateAt']) && (mb_strlen($this->container['updateAt']) > 4096)) {
                $invalidProperties[] = "invalid value for 'updateAt', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['updateAt']) && (mb_strlen($this->container['updateAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['process']) && (mb_strlen($this->container['process']) > 4096)) {
                $invalidProperties[] = "invalid value for 'process', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['process']) && (mb_strlen($this->container['process']) < 1)) {
                $invalidProperties[] = "invalid value for 'process', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 4096)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
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
    * Gets instanceId
    *  实例ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets jobId
    *  工作流ID。
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
    * @param string|null $jobId 工作流ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobName
    *  工作流名称。
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 工作流名称。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets createdAt
    *  工作流创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 工作流创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  工作流更新时间。
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt 工作流更新时间。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets process
    *  工作流进度。
    *
    * @return string|null
    */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
    * Sets process
    *
    * @param string|null $process 工作流进度。
    *
    * @return $this
    */
    public function setProcess($process)
    {
        $this->container['process'] = $process;
        return $this;
    }

    /**
    * Gets status
    *  工作流状态。
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
    * @param string|null $status 工作流状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets subTaskList
    *  子任务进度信息
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SubTaskInfo[]|null
    */
    public function getSubTaskList()
    {
        return $this->container['subTaskList'];
    }

    /**
    * Sets subTaskList
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SubTaskInfo[]|null $subTaskList 子任务进度信息
    *
    * @return $this
    */
    public function setSubTaskList($subTaskList)
    {
        $this->container['subTaskList'] = $subTaskList;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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


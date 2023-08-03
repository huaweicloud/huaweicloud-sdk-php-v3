<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

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
    * jobId  子任务所属任务ID
    * id  子任务ID，使用uuid
    * type  子任务的类型
    * assigned  子任务的执行者
    * taskName  子任务名称
    * engineName  子任务所属引擎名称
    * taskOrder  子任务执行的顺序, 从小到大
    * status  子任务状态
    * startTime  子任务开始时间
    * endTime  子任务结束时间
    * createTime  子任务创建时间
    * updateTime  子任务更新时间
    * timeout  子任务是否超时
    * log  子任务详细信息，执行过程中产生的辅助信息
    * output  子任务输出信息
    * taskExecutorBrief  taskExecutorBrief
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'int',
            'id' => 'int',
            'type' => 'string',
            'assigned' => 'string',
            'taskName' => 'string',
            'engineName' => 'string',
            'taskOrder' => 'int',
            'status' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'createTime' => 'int',
            'updateTime' => 'int',
            'timeout' => 'int',
            'log' => 'string',
            'output' => 'string',
            'taskExecutorBrief' => '\HuaweiCloud\SDK\Cse\V1\Model\TaskExecutorBrief'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  子任务所属任务ID
    * id  子任务ID，使用uuid
    * type  子任务的类型
    * assigned  子任务的执行者
    * taskName  子任务名称
    * engineName  子任务所属引擎名称
    * taskOrder  子任务执行的顺序, 从小到大
    * status  子任务状态
    * startTime  子任务开始时间
    * endTime  子任务结束时间
    * createTime  子任务创建时间
    * updateTime  子任务更新时间
    * timeout  子任务是否超时
    * log  子任务详细信息，执行过程中产生的辅助信息
    * output  子任务输出信息
    * taskExecutorBrief  taskExecutorBrief
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => 'int32',
        'id' => 'int64',
        'type' => null,
        'assigned' => null,
        'taskName' => null,
        'engineName' => null,
        'taskOrder' => 'int32',
        'status' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'timeout' => 'int32',
        'log' => null,
        'output' => null,
        'taskExecutorBrief' => null
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
    * jobId  子任务所属任务ID
    * id  子任务ID，使用uuid
    * type  子任务的类型
    * assigned  子任务的执行者
    * taskName  子任务名称
    * engineName  子任务所属引擎名称
    * taskOrder  子任务执行的顺序, 从小到大
    * status  子任务状态
    * startTime  子任务开始时间
    * endTime  子任务结束时间
    * createTime  子任务创建时间
    * updateTime  子任务更新时间
    * timeout  子任务是否超时
    * log  子任务详细信息，执行过程中产生的辅助信息
    * output  子任务输出信息
    * taskExecutorBrief  taskExecutorBrief
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'id' => 'id',
            'type' => 'type',
            'assigned' => 'assigned',
            'taskName' => 'task_name',
            'engineName' => 'engine_name',
            'taskOrder' => 'task_order',
            'status' => 'status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'timeout' => 'timeout',
            'log' => 'log',
            'output' => 'output',
            'taskExecutorBrief' => 'task_executor_brief'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  子任务所属任务ID
    * id  子任务ID，使用uuid
    * type  子任务的类型
    * assigned  子任务的执行者
    * taskName  子任务名称
    * engineName  子任务所属引擎名称
    * taskOrder  子任务执行的顺序, 从小到大
    * status  子任务状态
    * startTime  子任务开始时间
    * endTime  子任务结束时间
    * createTime  子任务创建时间
    * updateTime  子任务更新时间
    * timeout  子任务是否超时
    * log  子任务详细信息，执行过程中产生的辅助信息
    * output  子任务输出信息
    * taskExecutorBrief  taskExecutorBrief
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'id' => 'setId',
            'type' => 'setType',
            'assigned' => 'setAssigned',
            'taskName' => 'setTaskName',
            'engineName' => 'setEngineName',
            'taskOrder' => 'setTaskOrder',
            'status' => 'setStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'timeout' => 'setTimeout',
            'log' => 'setLog',
            'output' => 'setOutput',
            'taskExecutorBrief' => 'setTaskExecutorBrief'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  子任务所属任务ID
    * id  子任务ID，使用uuid
    * type  子任务的类型
    * assigned  子任务的执行者
    * taskName  子任务名称
    * engineName  子任务所属引擎名称
    * taskOrder  子任务执行的顺序, 从小到大
    * status  子任务状态
    * startTime  子任务开始时间
    * endTime  子任务结束时间
    * createTime  子任务创建时间
    * updateTime  子任务更新时间
    * timeout  子任务是否超时
    * log  子任务详细信息，执行过程中产生的辅助信息
    * output  子任务输出信息
    * taskExecutorBrief  taskExecutorBrief
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'id' => 'getId',
            'type' => 'getType',
            'assigned' => 'getAssigned',
            'taskName' => 'getTaskName',
            'engineName' => 'getEngineName',
            'taskOrder' => 'getTaskOrder',
            'status' => 'getStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'timeout' => 'getTimeout',
            'log' => 'getLog',
            'output' => 'getOutput',
            'taskExecutorBrief' => 'getTaskExecutorBrief'
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
    const TYPE_CREATE = 'Create';
    const TYPE_DELETE = 'Delete';
    const TYPE_UPGRADE = 'Upgrade';
    const TYPE_MODIFY = 'Modify';
    const STATUS_INIT = 'Init';
    const STATUS_EXECUTING = 'Executing';
    const STATUS_ERROR = 'Error';
    const STATUS_TIMEOUT = 'Timeout';
    const STATUS_FINISHED = 'Finished';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CREATE,
            self::TYPE_DELETE,
            self::TYPE_UPGRADE,
            self::TYPE_MODIFY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_INIT,
            self::STATUS_EXECUTING,
            self::STATUS_ERROR,
            self::STATUS_TIMEOUT,
            self::STATUS_FINISHED,
        ];
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['assigned'] = isset($data['assigned']) ? $data['assigned'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['taskOrder'] = isset($data['taskOrder']) ? $data['taskOrder'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['log'] = isset($data['log']) ? $data['log'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['taskExecutorBrief'] = isset($data['taskExecutorBrief']) ? $data['taskExecutorBrief'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets jobId
    *  子任务所属任务ID
    *
    * @return int|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param int|null $jobId 子任务所属任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets id
    *  子任务ID，使用uuid
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 子任务ID，使用uuid
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  子任务的类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 子任务的类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets assigned
    *  子任务的执行者
    *
    * @return string|null
    */
    public function getAssigned()
    {
        return $this->container['assigned'];
    }

    /**
    * Sets assigned
    *
    * @param string|null $assigned 子任务的执行者
    *
    * @return $this
    */
    public function setAssigned($assigned)
    {
        $this->container['assigned'] = $assigned;
        return $this;
    }

    /**
    * Gets taskName
    *  子任务名称
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 子任务名称
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets engineName
    *  子任务所属引擎名称
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName 子任务所属引擎名称
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets taskOrder
    *  子任务执行的顺序, 从小到大
    *
    * @return int|null
    */
    public function getTaskOrder()
    {
        return $this->container['taskOrder'];
    }

    /**
    * Sets taskOrder
    *
    * @param int|null $taskOrder 子任务执行的顺序, 从小到大
    *
    * @return $this
    */
    public function setTaskOrder($taskOrder)
    {
        $this->container['taskOrder'] = $taskOrder;
        return $this;
    }

    /**
    * Gets status
    *  子任务状态
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
    * @param string|null $status 子任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTime
    *  子任务开始时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 子任务开始时间
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
    *  子任务结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 子任务结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets createTime
    *  子任务创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 子任务创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  子任务更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 子任务更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets timeout
    *  子任务是否超时
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout 子任务是否超时
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets log
    *  子任务详细信息，执行过程中产生的辅助信息
    *
    * @return string|null
    */
    public function getLog()
    {
        return $this->container['log'];
    }

    /**
    * Sets log
    *
    * @param string|null $log 子任务详细信息，执行过程中产生的辅助信息
    *
    * @return $this
    */
    public function setLog($log)
    {
        $this->container['log'] = $log;
        return $this;
    }

    /**
    * Gets output
    *  子任务输出信息
    *
    * @return string|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param string|null $output 子任务输出信息
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets taskExecutorBrief
    *  taskExecutorBrief
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\TaskExecutorBrief|null
    */
    public function getTaskExecutorBrief()
    {
        return $this->container['taskExecutorBrief'];
    }

    /**
    * Sets taskExecutorBrief
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\TaskExecutorBrief|null $taskExecutorBrief taskExecutorBrief
    *
    * @return $this
    */
    public function setTaskExecutorBrief($taskExecutorBrief)
    {
        $this->container['taskExecutorBrief'] = $taskExecutorBrief;
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


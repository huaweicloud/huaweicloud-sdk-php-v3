<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlinkJobDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlinkJobDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  作业ID。
    * name  作业名称。长度限制：0-57个字符。
    * desc  作业描述。长度限制：0-2048个字符。
    * jobType  作业类型。
    * status  作业状态。
    * statusDesc  作业状态描述。
    * createTime  作业创建时间。
    * startTime  作业开始时间。
    * userId  作业所属用户标识。
    * queueName  队列名称。长度限制：1-128个字符。
    * projectId  作业所属项目标识。
    * sqlBody  Stream SQL语句。
    * runMode  作业运行模式： shared_cluster：共享。 exclusive_cluster：独享。 edge_node：边缘节点。
    * jobConfig  jobConfig
    * mainClass  jar包主类。
    * entrypointArgs  jar包作业运行参数，多个参数之间空格分隔。
    * executionGraph  作业执行计划。
    * updateTime  作业更新时间。
    * savepointPath  手动产生的Checkpoint的保存路径。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'int',
            'name' => 'string',
            'desc' => 'string',
            'jobType' => 'string',
            'status' => 'string',
            'statusDesc' => 'string',
            'createTime' => 'int',
            'startTime' => 'int',
            'userId' => 'string',
            'queueName' => 'string',
            'projectId' => 'string',
            'sqlBody' => 'string',
            'runMode' => 'string',
            'jobConfig' => '\HuaweiCloud\SDK\Dli\V1\Model\FlinkJobConfigDetail',
            'mainClass' => 'string',
            'entrypointArgs' => 'string',
            'executionGraph' => 'string',
            'updateTime' => 'int',
            'savepointPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  作业ID。
    * name  作业名称。长度限制：0-57个字符。
    * desc  作业描述。长度限制：0-2048个字符。
    * jobType  作业类型。
    * status  作业状态。
    * statusDesc  作业状态描述。
    * createTime  作业创建时间。
    * startTime  作业开始时间。
    * userId  作业所属用户标识。
    * queueName  队列名称。长度限制：1-128个字符。
    * projectId  作业所属项目标识。
    * sqlBody  Stream SQL语句。
    * runMode  作业运行模式： shared_cluster：共享。 exclusive_cluster：独享。 edge_node：边缘节点。
    * jobConfig  jobConfig
    * mainClass  jar包主类。
    * entrypointArgs  jar包作业运行参数，多个参数之间空格分隔。
    * executionGraph  作业执行计划。
    * updateTime  作业更新时间。
    * savepointPath  手动产生的Checkpoint的保存路径。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => 'int64',
        'name' => null,
        'desc' => null,
        'jobType' => null,
        'status' => null,
        'statusDesc' => null,
        'createTime' => 'int64',
        'startTime' => 'int64',
        'userId' => null,
        'queueName' => null,
        'projectId' => null,
        'sqlBody' => null,
        'runMode' => null,
        'jobConfig' => null,
        'mainClass' => null,
        'entrypointArgs' => null,
        'executionGraph' => null,
        'updateTime' => 'int64',
        'savepointPath' => null
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
    * jobId  作业ID。
    * name  作业名称。长度限制：0-57个字符。
    * desc  作业描述。长度限制：0-2048个字符。
    * jobType  作业类型。
    * status  作业状态。
    * statusDesc  作业状态描述。
    * createTime  作业创建时间。
    * startTime  作业开始时间。
    * userId  作业所属用户标识。
    * queueName  队列名称。长度限制：1-128个字符。
    * projectId  作业所属项目标识。
    * sqlBody  Stream SQL语句。
    * runMode  作业运行模式： shared_cluster：共享。 exclusive_cluster：独享。 edge_node：边缘节点。
    * jobConfig  jobConfig
    * mainClass  jar包主类。
    * entrypointArgs  jar包作业运行参数，多个参数之间空格分隔。
    * executionGraph  作业执行计划。
    * updateTime  作业更新时间。
    * savepointPath  手动产生的Checkpoint的保存路径。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'name' => 'name',
            'desc' => 'desc',
            'jobType' => 'job_type',
            'status' => 'status',
            'statusDesc' => 'status_desc',
            'createTime' => 'create_time',
            'startTime' => 'start_time',
            'userId' => 'user_id',
            'queueName' => 'queue_name',
            'projectId' => 'project_id',
            'sqlBody' => 'sql_body',
            'runMode' => 'run_mode',
            'jobConfig' => 'job_config',
            'mainClass' => 'main_class',
            'entrypointArgs' => 'entrypoint_args',
            'executionGraph' => 'execution_graph',
            'updateTime' => 'update_time',
            'savepointPath' => 'savepoint_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  作业ID。
    * name  作业名称。长度限制：0-57个字符。
    * desc  作业描述。长度限制：0-2048个字符。
    * jobType  作业类型。
    * status  作业状态。
    * statusDesc  作业状态描述。
    * createTime  作业创建时间。
    * startTime  作业开始时间。
    * userId  作业所属用户标识。
    * queueName  队列名称。长度限制：1-128个字符。
    * projectId  作业所属项目标识。
    * sqlBody  Stream SQL语句。
    * runMode  作业运行模式： shared_cluster：共享。 exclusive_cluster：独享。 edge_node：边缘节点。
    * jobConfig  jobConfig
    * mainClass  jar包主类。
    * entrypointArgs  jar包作业运行参数，多个参数之间空格分隔。
    * executionGraph  作业执行计划。
    * updateTime  作业更新时间。
    * savepointPath  手动产生的Checkpoint的保存路径。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'name' => 'setName',
            'desc' => 'setDesc',
            'jobType' => 'setJobType',
            'status' => 'setStatus',
            'statusDesc' => 'setStatusDesc',
            'createTime' => 'setCreateTime',
            'startTime' => 'setStartTime',
            'userId' => 'setUserId',
            'queueName' => 'setQueueName',
            'projectId' => 'setProjectId',
            'sqlBody' => 'setSqlBody',
            'runMode' => 'setRunMode',
            'jobConfig' => 'setJobConfig',
            'mainClass' => 'setMainClass',
            'entrypointArgs' => 'setEntrypointArgs',
            'executionGraph' => 'setExecutionGraph',
            'updateTime' => 'setUpdateTime',
            'savepointPath' => 'setSavepointPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  作业ID。
    * name  作业名称。长度限制：0-57个字符。
    * desc  作业描述。长度限制：0-2048个字符。
    * jobType  作业类型。
    * status  作业状态。
    * statusDesc  作业状态描述。
    * createTime  作业创建时间。
    * startTime  作业开始时间。
    * userId  作业所属用户标识。
    * queueName  队列名称。长度限制：1-128个字符。
    * projectId  作业所属项目标识。
    * sqlBody  Stream SQL语句。
    * runMode  作业运行模式： shared_cluster：共享。 exclusive_cluster：独享。 edge_node：边缘节点。
    * jobConfig  jobConfig
    * mainClass  jar包主类。
    * entrypointArgs  jar包作业运行参数，多个参数之间空格分隔。
    * executionGraph  作业执行计划。
    * updateTime  作业更新时间。
    * savepointPath  手动产生的Checkpoint的保存路径。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'name' => 'getName',
            'desc' => 'getDesc',
            'jobType' => 'getJobType',
            'status' => 'getStatus',
            'statusDesc' => 'getStatusDesc',
            'createTime' => 'getCreateTime',
            'startTime' => 'getStartTime',
            'userId' => 'getUserId',
            'queueName' => 'getQueueName',
            'projectId' => 'getProjectId',
            'sqlBody' => 'getSqlBody',
            'runMode' => 'getRunMode',
            'jobConfig' => 'getJobConfig',
            'mainClass' => 'getMainClass',
            'entrypointArgs' => 'getEntrypointArgs',
            'executionGraph' => 'getExecutionGraph',
            'updateTime' => 'getUpdateTime',
            'savepointPath' => 'getSavepointPath'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusDesc'] = isset($data['statusDesc']) ? $data['statusDesc'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['sqlBody'] = isset($data['sqlBody']) ? $data['sqlBody'] : null;
        $this->container['runMode'] = isset($data['runMode']) ? $data['runMode'] : null;
        $this->container['jobConfig'] = isset($data['jobConfig']) ? $data['jobConfig'] : null;
        $this->container['mainClass'] = isset($data['mainClass']) ? $data['mainClass'] : null;
        $this->container['entrypointArgs'] = isset($data['entrypointArgs']) ? $data['entrypointArgs'] : null;
        $this->container['executionGraph'] = isset($data['executionGraph']) ? $data['executionGraph'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['savepointPath'] = isset($data['savepointPath']) ? $data['savepointPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 57)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 57.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 2048)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 0)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
            if (!is_null($this->container['queueName']) && (mb_strlen($this->container['queueName']) > 128)) {
                $invalidProperties[] = "invalid value for 'queueName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['queueName']) && (mb_strlen($this->container['queueName']) < 1)) {
                $invalidProperties[] = "invalid value for 'queueName', the character length must be bigger than or equal to 1.";
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
    *  作业ID。
    *
    * @return int
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param int $jobId 作业ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets name
    *  作业名称。长度限制：0-57个字符。
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
    * @param string|null $name 作业名称。长度限制：0-57个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets desc
    *  作业描述。长度限制：0-2048个字符。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 作业描述。长度限制：0-2048个字符。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets jobType
    *  作业类型。
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 作业类型。
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets status
    *  作业状态。
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
    * @param string|null $status 作业状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusDesc
    *  作业状态描述。
    *
    * @return string|null
    */
    public function getStatusDesc()
    {
        return $this->container['statusDesc'];
    }

    /**
    * Sets statusDesc
    *
    * @param string|null $statusDesc 作业状态描述。
    *
    * @return $this
    */
    public function setStatusDesc($statusDesc)
    {
        $this->container['statusDesc'] = $statusDesc;
        return $this;
    }

    /**
    * Gets createTime
    *  作业创建时间。
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 作业创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets startTime
    *  作业开始时间。
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
    * @param int|null $startTime 作业开始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets userId
    *  作业所属用户标识。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 作业所属用户标识。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets queueName
    *  队列名称。长度限制：1-128个字符。
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName 队列名称。长度限制：1-128个字符。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets projectId
    *  作业所属项目标识。
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
    * @param string|null $projectId 作业所属项目标识。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets sqlBody
    *  Stream SQL语句。
    *
    * @return string|null
    */
    public function getSqlBody()
    {
        return $this->container['sqlBody'];
    }

    /**
    * Sets sqlBody
    *
    * @param string|null $sqlBody Stream SQL语句。
    *
    * @return $this
    */
    public function setSqlBody($sqlBody)
    {
        $this->container['sqlBody'] = $sqlBody;
        return $this;
    }

    /**
    * Gets runMode
    *  作业运行模式： shared_cluster：共享。 exclusive_cluster：独享。 edge_node：边缘节点。
    *
    * @return string|null
    */
    public function getRunMode()
    {
        return $this->container['runMode'];
    }

    /**
    * Sets runMode
    *
    * @param string|null $runMode 作业运行模式： shared_cluster：共享。 exclusive_cluster：独享。 edge_node：边缘节点。
    *
    * @return $this
    */
    public function setRunMode($runMode)
    {
        $this->container['runMode'] = $runMode;
        return $this;
    }

    /**
    * Gets jobConfig
    *  jobConfig
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\FlinkJobConfigDetail|null
    */
    public function getJobConfig()
    {
        return $this->container['jobConfig'];
    }

    /**
    * Sets jobConfig
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\FlinkJobConfigDetail|null $jobConfig jobConfig
    *
    * @return $this
    */
    public function setJobConfig($jobConfig)
    {
        $this->container['jobConfig'] = $jobConfig;
        return $this;
    }

    /**
    * Gets mainClass
    *  jar包主类。
    *
    * @return string|null
    */
    public function getMainClass()
    {
        return $this->container['mainClass'];
    }

    /**
    * Sets mainClass
    *
    * @param string|null $mainClass jar包主类。
    *
    * @return $this
    */
    public function setMainClass($mainClass)
    {
        $this->container['mainClass'] = $mainClass;
        return $this;
    }

    /**
    * Gets entrypointArgs
    *  jar包作业运行参数，多个参数之间空格分隔。
    *
    * @return string|null
    */
    public function getEntrypointArgs()
    {
        return $this->container['entrypointArgs'];
    }

    /**
    * Sets entrypointArgs
    *
    * @param string|null $entrypointArgs jar包作业运行参数，多个参数之间空格分隔。
    *
    * @return $this
    */
    public function setEntrypointArgs($entrypointArgs)
    {
        $this->container['entrypointArgs'] = $entrypointArgs;
        return $this;
    }

    /**
    * Gets executionGraph
    *  作业执行计划。
    *
    * @return string|null
    */
    public function getExecutionGraph()
    {
        return $this->container['executionGraph'];
    }

    /**
    * Sets executionGraph
    *
    * @param string|null $executionGraph 作业执行计划。
    *
    * @return $this
    */
    public function setExecutionGraph($executionGraph)
    {
        $this->container['executionGraph'] = $executionGraph;
        return $this;
    }

    /**
    * Gets updateTime
    *  作业更新时间。
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
    * @param int|null $updateTime 作业更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets savepointPath
    *  手动产生的Checkpoint的保存路径。
    *
    * @return string|null
    */
    public function getSavepointPath()
    {
        return $this->container['savepointPath'];
    }

    /**
    * Sets savepointPath
    *
    * @param string|null $savepointPath 手动产生的Checkpoint的保存路径。
    *
    * @return $this
    */
    public function setSavepointPath($savepointPath)
    {
        $this->container['savepointPath'] = $savepointPath;
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


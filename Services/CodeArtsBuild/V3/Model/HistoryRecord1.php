<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HistoryRecord1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HistoryRecord_1';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recordId  构建记录id--唯一key
    * jobId  任务id
    * buildNumber  构建编号
    * startTime  构建开始时间
    * endTime  构建结束时间
    * result  构建结果
    * branch  代码分支
    * commitId  代码提交的commit id
    * commitMessage  代码提交时用户输入的提交信息，只有使用codehub仓库时有值
    * executor  执行构建任务的用户的用户名
    * triggerType  触发方式，可选值：手工触发，定时触发，代码更新触发，流水线触发
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recordId' => 'string',
            'jobId' => 'string',
            'buildNumber' => 'int',
            'startTime' => 'string',
            'endTime' => 'string',
            'result' => 'string',
            'branch' => 'string',
            'commitId' => 'string',
            'commitMessage' => 'string',
            'executor' => 'string',
            'triggerType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recordId  构建记录id--唯一key
    * jobId  任务id
    * buildNumber  构建编号
    * startTime  构建开始时间
    * endTime  构建结束时间
    * result  构建结果
    * branch  代码分支
    * commitId  代码提交的commit id
    * commitMessage  代码提交时用户输入的提交信息，只有使用codehub仓库时有值
    * executor  执行构建任务的用户的用户名
    * triggerType  触发方式，可选值：手工触发，定时触发，代码更新触发，流水线触发
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recordId' => null,
        'jobId' => null,
        'buildNumber' => 'int32',
        'startTime' => null,
        'endTime' => null,
        'result' => null,
        'branch' => null,
        'commitId' => null,
        'commitMessage' => null,
        'executor' => null,
        'triggerType' => null
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
    * recordId  构建记录id--唯一key
    * jobId  任务id
    * buildNumber  构建编号
    * startTime  构建开始时间
    * endTime  构建结束时间
    * result  构建结果
    * branch  代码分支
    * commitId  代码提交的commit id
    * commitMessage  代码提交时用户输入的提交信息，只有使用codehub仓库时有值
    * executor  执行构建任务的用户的用户名
    * triggerType  触发方式，可选值：手工触发，定时触发，代码更新触发，流水线触发
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recordId' => 'record_id',
            'jobId' => 'job_id',
            'buildNumber' => 'build_number',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'result' => 'result',
            'branch' => 'branch',
            'commitId' => 'commit_id',
            'commitMessage' => 'commit_message',
            'executor' => 'executor',
            'triggerType' => 'trigger_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recordId  构建记录id--唯一key
    * jobId  任务id
    * buildNumber  构建编号
    * startTime  构建开始时间
    * endTime  构建结束时间
    * result  构建结果
    * branch  代码分支
    * commitId  代码提交的commit id
    * commitMessage  代码提交时用户输入的提交信息，只有使用codehub仓库时有值
    * executor  执行构建任务的用户的用户名
    * triggerType  触发方式，可选值：手工触发，定时触发，代码更新触发，流水线触发
    *
    * @var string[]
    */
    protected static $setters = [
            'recordId' => 'setRecordId',
            'jobId' => 'setJobId',
            'buildNumber' => 'setBuildNumber',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'result' => 'setResult',
            'branch' => 'setBranch',
            'commitId' => 'setCommitId',
            'commitMessage' => 'setCommitMessage',
            'executor' => 'setExecutor',
            'triggerType' => 'setTriggerType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recordId  构建记录id--唯一key
    * jobId  任务id
    * buildNumber  构建编号
    * startTime  构建开始时间
    * endTime  构建结束时间
    * result  构建结果
    * branch  代码分支
    * commitId  代码提交的commit id
    * commitMessage  代码提交时用户输入的提交信息，只有使用codehub仓库时有值
    * executor  执行构建任务的用户的用户名
    * triggerType  触发方式，可选值：手工触发，定时触发，代码更新触发，流水线触发
    *
    * @var string[]
    */
    protected static $getters = [
            'recordId' => 'getRecordId',
            'jobId' => 'getJobId',
            'buildNumber' => 'getBuildNumber',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'result' => 'getResult',
            'branch' => 'getBranch',
            'commitId' => 'getCommitId',
            'commitMessage' => 'getCommitMessage',
            'executor' => 'getExecutor',
            'triggerType' => 'getTriggerType'
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
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['buildNumber'] = isset($data['buildNumber']) ? $data['buildNumber'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
        $this->container['commitMessage'] = isset($data['commitMessage']) ? $data['commitMessage'] : null;
        $this->container['executor'] = isset($data['executor']) ? $data['executor'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
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
    * Gets recordId
    *  构建记录id--唯一key
    *
    * @return string|null
    */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
    * Sets recordId
    *
    * @param string|null $recordId 构建记录id--唯一key
    *
    * @return $this
    */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;
        return $this;
    }

    /**
    * Gets jobId
    *  任务id
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
    * @param string|null $jobId 任务id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets buildNumber
    *  构建编号
    *
    * @return int|null
    */
    public function getBuildNumber()
    {
        return $this->container['buildNumber'];
    }

    /**
    * Sets buildNumber
    *
    * @param int|null $buildNumber 构建编号
    *
    * @return $this
    */
    public function setBuildNumber($buildNumber)
    {
        $this->container['buildNumber'] = $buildNumber;
        return $this;
    }

    /**
    * Gets startTime
    *  构建开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 构建开始时间
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
    *  构建结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 构建结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets result
    *  构建结果
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 构建结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets branch
    *  代码分支
    *
    * @return string|null
    */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
    * Sets branch
    *
    * @param string|null $branch 代码分支
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets commitId
    *  代码提交的commit id
    *
    * @return string|null
    */
    public function getCommitId()
    {
        return $this->container['commitId'];
    }

    /**
    * Sets commitId
    *
    * @param string|null $commitId 代码提交的commit id
    *
    * @return $this
    */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;
        return $this;
    }

    /**
    * Gets commitMessage
    *  代码提交时用户输入的提交信息，只有使用codehub仓库时有值
    *
    * @return string|null
    */
    public function getCommitMessage()
    {
        return $this->container['commitMessage'];
    }

    /**
    * Sets commitMessage
    *
    * @param string|null $commitMessage 代码提交时用户输入的提交信息，只有使用codehub仓库时有值
    *
    * @return $this
    */
    public function setCommitMessage($commitMessage)
    {
        $this->container['commitMessage'] = $commitMessage;
        return $this;
    }

    /**
    * Gets executor
    *  执行构建任务的用户的用户名
    *
    * @return string|null
    */
    public function getExecutor()
    {
        return $this->container['executor'];
    }

    /**
    * Sets executor
    *
    * @param string|null $executor 执行构建任务的用户的用户名
    *
    * @return $this
    */
    public function setExecutor($executor)
    {
        $this->container['executor'] = $executor;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发方式，可选值：手工触发，定时触发，代码更新触发，流水线触发
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 触发方式，可选值：手工触发，定时触发，代码更新触发，流水线触发
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
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


<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDbAgentJobsResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDbAgentJobsResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  作业id。
    * jobName  作业名。
    * isEnabled  是否可用。  true：可用。 false：不可用。
    * runTime  最新执行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * runStatus  作业执行状态。取值如下:  failed:失败。 succeeded:成功。 retrying:重试中。 canceled:已取消。 in_progress:正在运行。
    * lastFailureTime  最近失败时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * failureCount  历史失败次数。
    * agentType  作业代理的类型。  snapshot：快照代理 log_reader：日志读取器代理 distribution：分发代理 merge:合并代理 queue_reader：队列读取器代理。
    * profileId  配置文件id。作业类型为replication时特有。
    * profileName  配置文件名。作业类型为replication时特有。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'jobName' => 'string',
            'isEnabled' => 'bool',
            'runTime' => 'string',
            'runStatus' => 'string',
            'lastFailureTime' => 'string',
            'failureCount' => 'int',
            'agentType' => 'string',
            'profileId' => 'string',
            'profileName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  作业id。
    * jobName  作业名。
    * isEnabled  是否可用。  true：可用。 false：不可用。
    * runTime  最新执行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * runStatus  作业执行状态。取值如下:  failed:失败。 succeeded:成功。 retrying:重试中。 canceled:已取消。 in_progress:正在运行。
    * lastFailureTime  最近失败时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * failureCount  历史失败次数。
    * agentType  作业代理的类型。  snapshot：快照代理 log_reader：日志读取器代理 distribution：分发代理 merge:合并代理 queue_reader：队列读取器代理。
    * profileId  配置文件id。作业类型为replication时特有。
    * profileName  配置文件名。作业类型为replication时特有。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'jobName' => null,
        'isEnabled' => null,
        'runTime' => null,
        'runStatus' => null,
        'lastFailureTime' => null,
        'failureCount' => null,
        'agentType' => null,
        'profileId' => null,
        'profileName' => null
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
    * jobId  作业id。
    * jobName  作业名。
    * isEnabled  是否可用。  true：可用。 false：不可用。
    * runTime  最新执行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * runStatus  作业执行状态。取值如下:  failed:失败。 succeeded:成功。 retrying:重试中。 canceled:已取消。 in_progress:正在运行。
    * lastFailureTime  最近失败时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * failureCount  历史失败次数。
    * agentType  作业代理的类型。  snapshot：快照代理 log_reader：日志读取器代理 distribution：分发代理 merge:合并代理 queue_reader：队列读取器代理。
    * profileId  配置文件id。作业类型为replication时特有。
    * profileName  配置文件名。作业类型为replication时特有。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'isEnabled' => 'is_enabled',
            'runTime' => 'run_time',
            'runStatus' => 'run_status',
            'lastFailureTime' => 'last_failure_time',
            'failureCount' => 'failure_count',
            'agentType' => 'agent_type',
            'profileId' => 'profile_id',
            'profileName' => 'profile_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  作业id。
    * jobName  作业名。
    * isEnabled  是否可用。  true：可用。 false：不可用。
    * runTime  最新执行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * runStatus  作业执行状态。取值如下:  failed:失败。 succeeded:成功。 retrying:重试中。 canceled:已取消。 in_progress:正在运行。
    * lastFailureTime  最近失败时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * failureCount  历史失败次数。
    * agentType  作业代理的类型。  snapshot：快照代理 log_reader：日志读取器代理 distribution：分发代理 merge:合并代理 queue_reader：队列读取器代理。
    * profileId  配置文件id。作业类型为replication时特有。
    * profileName  配置文件名。作业类型为replication时特有。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'isEnabled' => 'setIsEnabled',
            'runTime' => 'setRunTime',
            'runStatus' => 'setRunStatus',
            'lastFailureTime' => 'setLastFailureTime',
            'failureCount' => 'setFailureCount',
            'agentType' => 'setAgentType',
            'profileId' => 'setProfileId',
            'profileName' => 'setProfileName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  作业id。
    * jobName  作业名。
    * isEnabled  是否可用。  true：可用。 false：不可用。
    * runTime  最新执行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * runStatus  作业执行状态。取值如下:  failed:失败。 succeeded:成功。 retrying:重试中。 canceled:已取消。 in_progress:正在运行。
    * lastFailureTime  最近失败时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * failureCount  历史失败次数。
    * agentType  作业代理的类型。  snapshot：快照代理 log_reader：日志读取器代理 distribution：分发代理 merge:合并代理 queue_reader：队列读取器代理。
    * profileId  配置文件id。作业类型为replication时特有。
    * profileName  配置文件名。作业类型为replication时特有。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'isEnabled' => 'getIsEnabled',
            'runTime' => 'getRunTime',
            'runStatus' => 'getRunStatus',
            'lastFailureTime' => 'getLastFailureTime',
            'failureCount' => 'getFailureCount',
            'agentType' => 'getAgentType',
            'profileId' => 'getProfileId',
            'profileName' => 'getProfileName'
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
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['isEnabled'] = isset($data['isEnabled']) ? $data['isEnabled'] : null;
        $this->container['runTime'] = isset($data['runTime']) ? $data['runTime'] : null;
        $this->container['runStatus'] = isset($data['runStatus']) ? $data['runStatus'] : null;
        $this->container['lastFailureTime'] = isset($data['lastFailureTime']) ? $data['lastFailureTime'] : null;
        $this->container['failureCount'] = isset($data['failureCount']) ? $data['failureCount'] : null;
        $this->container['agentType'] = isset($data['agentType']) ? $data['agentType'] : null;
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['profileName'] = isset($data['profileName']) ? $data['profileName'] : null;
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
    * Gets jobId
    *  作业id。
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
    * @param string|null $jobId 作业id。
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
    *  作业名。
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
    * @param string|null $jobName 作业名。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets isEnabled
    *  是否可用。  true：可用。 false：不可用。
    *
    * @return bool|null
    */
    public function getIsEnabled()
    {
        return $this->container['isEnabled'];
    }

    /**
    * Sets isEnabled
    *
    * @param bool|null $isEnabled 是否可用。  true：可用。 false：不可用。
    *
    * @return $this
    */
    public function setIsEnabled($isEnabled)
    {
        $this->container['isEnabled'] = $isEnabled;
        return $this;
    }

    /**
    * Gets runTime
    *  最新执行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string|null
    */
    public function getRunTime()
    {
        return $this->container['runTime'];
    }

    /**
    * Sets runTime
    *
    * @param string|null $runTime 最新执行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setRunTime($runTime)
    {
        $this->container['runTime'] = $runTime;
        return $this;
    }

    /**
    * Gets runStatus
    *  作业执行状态。取值如下:  failed:失败。 succeeded:成功。 retrying:重试中。 canceled:已取消。 in_progress:正在运行。
    *
    * @return string|null
    */
    public function getRunStatus()
    {
        return $this->container['runStatus'];
    }

    /**
    * Sets runStatus
    *
    * @param string|null $runStatus 作业执行状态。取值如下:  failed:失败。 succeeded:成功。 retrying:重试中。 canceled:已取消。 in_progress:正在运行。
    *
    * @return $this
    */
    public function setRunStatus($runStatus)
    {
        $this->container['runStatus'] = $runStatus;
        return $this;
    }

    /**
    * Gets lastFailureTime
    *  最近失败时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string|null
    */
    public function getLastFailureTime()
    {
        return $this->container['lastFailureTime'];
    }

    /**
    * Sets lastFailureTime
    *
    * @param string|null $lastFailureTime 最近失败时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setLastFailureTime($lastFailureTime)
    {
        $this->container['lastFailureTime'] = $lastFailureTime;
        return $this;
    }

    /**
    * Gets failureCount
    *  历史失败次数。
    *
    * @return int|null
    */
    public function getFailureCount()
    {
        return $this->container['failureCount'];
    }

    /**
    * Sets failureCount
    *
    * @param int|null $failureCount 历史失败次数。
    *
    * @return $this
    */
    public function setFailureCount($failureCount)
    {
        $this->container['failureCount'] = $failureCount;
        return $this;
    }

    /**
    * Gets agentType
    *  作业代理的类型。  snapshot：快照代理 log_reader：日志读取器代理 distribution：分发代理 merge:合并代理 queue_reader：队列读取器代理。
    *
    * @return string|null
    */
    public function getAgentType()
    {
        return $this->container['agentType'];
    }

    /**
    * Sets agentType
    *
    * @param string|null $agentType 作业代理的类型。  snapshot：快照代理 log_reader：日志读取器代理 distribution：分发代理 merge:合并代理 queue_reader：队列读取器代理。
    *
    * @return $this
    */
    public function setAgentType($agentType)
    {
        $this->container['agentType'] = $agentType;
        return $this;
    }

    /**
    * Gets profileId
    *  配置文件id。作业类型为replication时特有。
    *
    * @return string|null
    */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
    * Sets profileId
    *
    * @param string|null $profileId 配置文件id。作业类型为replication时特有。
    *
    * @return $this
    */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;
        return $this;
    }

    /**
    * Gets profileName
    *  配置文件名。作业类型为replication时特有。
    *
    * @return string|null
    */
    public function getProfileName()
    {
        return $this->container['profileName'];
    }

    /**
    * Sets profileName
    *
    * @param string|null $profileName 配置文件名。作业类型为replication时特有。
    *
    * @return $this
    */
    public function setProfileName($profileName)
    {
        $this->container['profileName'] = $profileName;
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


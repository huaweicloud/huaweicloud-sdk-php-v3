<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTaskCmetricsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTaskCmetricsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务id
    * taskName  任务名字
    * creatorId  创建者id
    * gitUrl  代码仓地址
    * gitBranch  代码仓分支
    * lastCheckTime  上一次检查时间
    * lastExecTime  上次执行时间
    * checkType  检查类型
    * createdAt  创建时间
    * metricInfo  metricInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskName' => 'string',
            'creatorId' => 'string',
            'gitUrl' => 'string',
            'gitBranch' => 'string',
            'lastCheckTime' => 'string',
            'lastExecTime' => 'string',
            'checkType' => 'string',
            'createdAt' => 'string',
            'metricInfo' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\MetricInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务id
    * taskName  任务名字
    * creatorId  创建者id
    * gitUrl  代码仓地址
    * gitBranch  代码仓分支
    * lastCheckTime  上一次检查时间
    * lastExecTime  上次执行时间
    * checkType  检查类型
    * createdAt  创建时间
    * metricInfo  metricInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskName' => null,
        'creatorId' => null,
        'gitUrl' => null,
        'gitBranch' => null,
        'lastCheckTime' => null,
        'lastExecTime' => null,
        'checkType' => null,
        'createdAt' => null,
        'metricInfo' => null
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
    * taskId  任务id
    * taskName  任务名字
    * creatorId  创建者id
    * gitUrl  代码仓地址
    * gitBranch  代码仓分支
    * lastCheckTime  上一次检查时间
    * lastExecTime  上次执行时间
    * checkType  检查类型
    * createdAt  创建时间
    * metricInfo  metricInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'creatorId' => 'creator_id',
            'gitUrl' => 'git_url',
            'gitBranch' => 'git_branch',
            'lastCheckTime' => 'last_check_time',
            'lastExecTime' => 'last_exec_time',
            'checkType' => 'check_type',
            'createdAt' => 'created_at',
            'metricInfo' => 'metric_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务id
    * taskName  任务名字
    * creatorId  创建者id
    * gitUrl  代码仓地址
    * gitBranch  代码仓分支
    * lastCheckTime  上一次检查时间
    * lastExecTime  上次执行时间
    * checkType  检查类型
    * createdAt  创建时间
    * metricInfo  metricInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'creatorId' => 'setCreatorId',
            'gitUrl' => 'setGitUrl',
            'gitBranch' => 'setGitBranch',
            'lastCheckTime' => 'setLastCheckTime',
            'lastExecTime' => 'setLastExecTime',
            'checkType' => 'setCheckType',
            'createdAt' => 'setCreatedAt',
            'metricInfo' => 'setMetricInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务id
    * taskName  任务名字
    * creatorId  创建者id
    * gitUrl  代码仓地址
    * gitBranch  代码仓分支
    * lastCheckTime  上一次检查时间
    * lastExecTime  上次执行时间
    * checkType  检查类型
    * createdAt  创建时间
    * metricInfo  metricInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'creatorId' => 'getCreatorId',
            'gitUrl' => 'getGitUrl',
            'gitBranch' => 'getGitBranch',
            'lastCheckTime' => 'getLastCheckTime',
            'lastExecTime' => 'getLastExecTime',
            'checkType' => 'getCheckType',
            'createdAt' => 'getCreatedAt',
            'metricInfo' => 'getMetricInfo'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['gitUrl'] = isset($data['gitUrl']) ? $data['gitUrl'] : null;
        $this->container['gitBranch'] = isset($data['gitBranch']) ? $data['gitBranch'] : null;
        $this->container['lastCheckTime'] = isset($data['lastCheckTime']) ? $data['lastCheckTime'] : null;
        $this->container['lastExecTime'] = isset($data['lastExecTime']) ? $data['lastExecTime'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['metricInfo'] = isset($data['metricInfo']) ? $data['metricInfo'] : null;
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
    * Gets taskId
    *  任务id
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  任务名字
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
    * @param string|null $taskName 任务名字
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建者id
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId 创建者id
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets gitUrl
    *  代码仓地址
    *
    * @return string|null
    */
    public function getGitUrl()
    {
        return $this->container['gitUrl'];
    }

    /**
    * Sets gitUrl
    *
    * @param string|null $gitUrl 代码仓地址
    *
    * @return $this
    */
    public function setGitUrl($gitUrl)
    {
        $this->container['gitUrl'] = $gitUrl;
        return $this;
    }

    /**
    * Gets gitBranch
    *  代码仓分支
    *
    * @return string|null
    */
    public function getGitBranch()
    {
        return $this->container['gitBranch'];
    }

    /**
    * Sets gitBranch
    *
    * @param string|null $gitBranch 代码仓分支
    *
    * @return $this
    */
    public function setGitBranch($gitBranch)
    {
        $this->container['gitBranch'] = $gitBranch;
        return $this;
    }

    /**
    * Gets lastCheckTime
    *  上一次检查时间
    *
    * @return string|null
    */
    public function getLastCheckTime()
    {
        return $this->container['lastCheckTime'];
    }

    /**
    * Sets lastCheckTime
    *
    * @param string|null $lastCheckTime 上一次检查时间
    *
    * @return $this
    */
    public function setLastCheckTime($lastCheckTime)
    {
        $this->container['lastCheckTime'] = $lastCheckTime;
        return $this;
    }

    /**
    * Gets lastExecTime
    *  上次执行时间
    *
    * @return string|null
    */
    public function getLastExecTime()
    {
        return $this->container['lastExecTime'];
    }

    /**
    * Sets lastExecTime
    *
    * @param string|null $lastExecTime 上次执行时间
    *
    * @return $this
    */
    public function setLastExecTime($lastExecTime)
    {
        $this->container['lastExecTime'] = $lastExecTime;
        return $this;
    }

    /**
    * Gets checkType
    *  检查类型
    *
    * @return string|null
    */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
    * Sets checkType
    *
    * @param string|null $checkType 检查类型
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
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
    * @param string|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets metricInfo
    *  metricInfo
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\MetricInfo|null
    */
    public function getMetricInfo()
    {
        return $this->container['metricInfo'];
    }

    /**
    * Sets metricInfo
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\MetricInfo|null $metricInfo metricInfo
    *
    * @return $this
    */
    public function setMetricInfo($metricInfo)
    {
        $this->container['metricInfo'] = $metricInfo;
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


<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFactoryJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFactoryJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * limit  分页参数：每页限定数量
    * offset  分页参数：页数
    * jobType  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    * jobName  作业名称
    * jobId  作业ID，支持多个ID逗号分隔查询，最多50个ID，总长度不超过1000字符。 每个ID必须为纯数字。
    * status  作业状态，支持多个状态逗号分隔查询。 批处理作业状态：  - SCHEDULING: 调度中  - STOPPED: 停止  - PAUSED: 暂停 实时作业状态：  - STARTING: 启动中  - NORMAL: 正常  - EXCEPTION: 异常  - STOPPING: 停止中  - STOPPED: 停止  - PAUSE: 暂停  - ABNORMAL: 异常
    * needAlarms  是否返回作业告警信息，默认为false。
    * tags  作业标签，多个标签逗号分隔。
    * matchAllTags  标签匹配模式：  - false: 任一标签匹配即返回（OR模式）  - true: 所有标签都匹配才返回（AND模式）
    * connectionName  数据连接名称，按数据连接筛选作业。
    * sourceType  源端数据连接类型，按源端数据类型筛选作业。
    * sourceName  源端数据连接名称，按源端数据名称筛选作业。
    * sinkType  目的端数据连接类型，按目的端数据类型筛选作业。
    * sinkName  目的端数据连接名称，按目的端数据名称筛选作业。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'jobType' => 'string',
            'jobName' => 'string',
            'jobId' => 'string',
            'status' => 'string',
            'needAlarms' => 'bool',
            'tags' => 'string',
            'matchAllTags' => 'bool',
            'connectionName' => 'string',
            'sourceType' => 'string',
            'sourceName' => 'string',
            'sinkType' => 'string',
            'sinkName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * limit  分页参数：每页限定数量
    * offset  分页参数：页数
    * jobType  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    * jobName  作业名称
    * jobId  作业ID，支持多个ID逗号分隔查询，最多50个ID，总长度不超过1000字符。 每个ID必须为纯数字。
    * status  作业状态，支持多个状态逗号分隔查询。 批处理作业状态：  - SCHEDULING: 调度中  - STOPPED: 停止  - PAUSED: 暂停 实时作业状态：  - STARTING: 启动中  - NORMAL: 正常  - EXCEPTION: 异常  - STOPPING: 停止中  - STOPPED: 停止  - PAUSE: 暂停  - ABNORMAL: 异常
    * needAlarms  是否返回作业告警信息，默认为false。
    * tags  作业标签，多个标签逗号分隔。
    * matchAllTags  标签匹配模式：  - false: 任一标签匹配即返回（OR模式）  - true: 所有标签都匹配才返回（AND模式）
    * connectionName  数据连接名称，按数据连接筛选作业。
    * sourceType  源端数据连接类型，按源端数据类型筛选作业。
    * sourceName  源端数据连接名称，按源端数据名称筛选作业。
    * sinkType  目的端数据连接类型，按目的端数据类型筛选作业。
    * sinkName  目的端数据连接名称，按目的端数据名称筛选作业。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'jobType' => null,
        'jobName' => null,
        'jobId' => null,
        'status' => null,
        'needAlarms' => null,
        'tags' => null,
        'matchAllTags' => null,
        'connectionName' => null,
        'sourceType' => null,
        'sourceName' => null,
        'sinkType' => null,
        'sinkName' => null
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
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * limit  分页参数：每页限定数量
    * offset  分页参数：页数
    * jobType  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    * jobName  作业名称
    * jobId  作业ID，支持多个ID逗号分隔查询，最多50个ID，总长度不超过1000字符。 每个ID必须为纯数字。
    * status  作业状态，支持多个状态逗号分隔查询。 批处理作业状态：  - SCHEDULING: 调度中  - STOPPED: 停止  - PAUSED: 暂停 实时作业状态：  - STARTING: 启动中  - NORMAL: 正常  - EXCEPTION: 异常  - STOPPING: 停止中  - STOPPED: 停止  - PAUSE: 暂停  - ABNORMAL: 异常
    * needAlarms  是否返回作业告警信息，默认为false。
    * tags  作业标签，多个标签逗号分隔。
    * matchAllTags  标签匹配模式：  - false: 任一标签匹配即返回（OR模式）  - true: 所有标签都匹配才返回（AND模式）
    * connectionName  数据连接名称，按数据连接筛选作业。
    * sourceType  源端数据连接类型，按源端数据类型筛选作业。
    * sourceName  源端数据连接名称，按源端数据名称筛选作业。
    * sinkType  目的端数据连接类型，按目的端数据类型筛选作业。
    * sinkName  目的端数据连接名称，按目的端数据名称筛选作业。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'limit' => 'limit',
            'offset' => 'offset',
            'jobType' => 'job_type',
            'jobName' => 'job_name',
            'jobId' => 'job_id',
            'status' => 'status',
            'needAlarms' => 'need_alarms',
            'tags' => 'tags',
            'matchAllTags' => 'match_all_tags',
            'connectionName' => 'connection_name',
            'sourceType' => 'source_type',
            'sourceName' => 'source_name',
            'sinkType' => 'sink_type',
            'sinkName' => 'sink_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * limit  分页参数：每页限定数量
    * offset  分页参数：页数
    * jobType  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    * jobName  作业名称
    * jobId  作业ID，支持多个ID逗号分隔查询，最多50个ID，总长度不超过1000字符。 每个ID必须为纯数字。
    * status  作业状态，支持多个状态逗号分隔查询。 批处理作业状态：  - SCHEDULING: 调度中  - STOPPED: 停止  - PAUSED: 暂停 实时作业状态：  - STARTING: 启动中  - NORMAL: 正常  - EXCEPTION: 异常  - STOPPING: 停止中  - STOPPED: 停止  - PAUSE: 暂停  - ABNORMAL: 异常
    * needAlarms  是否返回作业告警信息，默认为false。
    * tags  作业标签，多个标签逗号分隔。
    * matchAllTags  标签匹配模式：  - false: 任一标签匹配即返回（OR模式）  - true: 所有标签都匹配才返回（AND模式）
    * connectionName  数据连接名称，按数据连接筛选作业。
    * sourceType  源端数据连接类型，按源端数据类型筛选作业。
    * sourceName  源端数据连接名称，按源端数据名称筛选作业。
    * sinkType  目的端数据连接类型，按目的端数据类型筛选作业。
    * sinkName  目的端数据连接名称，按目的端数据名称筛选作业。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'jobType' => 'setJobType',
            'jobName' => 'setJobName',
            'jobId' => 'setJobId',
            'status' => 'setStatus',
            'needAlarms' => 'setNeedAlarms',
            'tags' => 'setTags',
            'matchAllTags' => 'setMatchAllTags',
            'connectionName' => 'setConnectionName',
            'sourceType' => 'setSourceType',
            'sourceName' => 'setSourceName',
            'sinkType' => 'setSinkType',
            'sinkName' => 'setSinkName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * limit  分页参数：每页限定数量
    * offset  分页参数：页数
    * jobType  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    * jobName  作业名称
    * jobId  作业ID，支持多个ID逗号分隔查询，最多50个ID，总长度不超过1000字符。 每个ID必须为纯数字。
    * status  作业状态，支持多个状态逗号分隔查询。 批处理作业状态：  - SCHEDULING: 调度中  - STOPPED: 停止  - PAUSED: 暂停 实时作业状态：  - STARTING: 启动中  - NORMAL: 正常  - EXCEPTION: 异常  - STOPPING: 停止中  - STOPPED: 停止  - PAUSE: 暂停  - ABNORMAL: 异常
    * needAlarms  是否返回作业告警信息，默认为false。
    * tags  作业标签，多个标签逗号分隔。
    * matchAllTags  标签匹配模式：  - false: 任一标签匹配即返回（OR模式）  - true: 所有标签都匹配才返回（AND模式）
    * connectionName  数据连接名称，按数据连接筛选作业。
    * sourceType  源端数据连接类型，按源端数据类型筛选作业。
    * sourceName  源端数据连接名称，按源端数据名称筛选作业。
    * sinkType  目的端数据连接类型，按目的端数据类型筛选作业。
    * sinkName  目的端数据连接名称，按目的端数据名称筛选作业。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'jobType' => 'getJobType',
            'jobName' => 'getJobName',
            'jobId' => 'getJobId',
            'status' => 'getStatus',
            'needAlarms' => 'getNeedAlarms',
            'tags' => 'getTags',
            'matchAllTags' => 'getMatchAllTags',
            'connectionName' => 'getConnectionName',
            'sourceType' => 'getSourceType',
            'sourceName' => 'getSourceName',
            'sinkType' => 'getSinkType',
            'sinkName' => 'getSinkName'
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
    const JOB_TYPE_REAL_TIME = 'REAL_TIME';
    const JOB_TYPE_BATCH = 'BATCH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_REAL_TIME,
            self::JOB_TYPE_BATCH,
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['needAlarms'] = isset($data['needAlarms']) ? $data['needAlarms'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['matchAllTags'] = isset($data['matchAllTags']) ? $data['matchAllTags'] : null;
        $this->container['connectionName'] = isset($data['connectionName']) ? $data['connectionName'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['sourceName'] = isset($data['sourceName']) ? $data['sourceName'] : null;
        $this->container['sinkType'] = isset($data['sinkType']) ? $data['sinkType'] : null;
        $this->container['sinkName'] = isset($data['sinkName']) ? $data['sinkName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workspace']) < 3)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 3.";
            }
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 1000.";
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
    * Gets workspace
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets limit
    *  分页参数：每页限定数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页参数：每页限定数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  分页参数：页数
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页参数：页数
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets jobType
    *  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
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
    * @param string|null $jobType 作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名称
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
    * @param string|null $jobName 作业名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobId
    *  作业ID，支持多个ID逗号分隔查询，最多50个ID，总长度不超过1000字符。 每个ID必须为纯数字。
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
    * @param string|null $jobId 作业ID，支持多个ID逗号分隔查询，最多50个ID，总长度不超过1000字符。 每个ID必须为纯数字。
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
    *  作业状态，支持多个状态逗号分隔查询。 批处理作业状态：  - SCHEDULING: 调度中  - STOPPED: 停止  - PAUSED: 暂停 实时作业状态：  - STARTING: 启动中  - NORMAL: 正常  - EXCEPTION: 异常  - STOPPING: 停止中  - STOPPED: 停止  - PAUSE: 暂停  - ABNORMAL: 异常
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
    * @param string|null $status 作业状态，支持多个状态逗号分隔查询。 批处理作业状态：  - SCHEDULING: 调度中  - STOPPED: 停止  - PAUSED: 暂停 实时作业状态：  - STARTING: 启动中  - NORMAL: 正常  - EXCEPTION: 异常  - STOPPING: 停止中  - STOPPED: 停止  - PAUSE: 暂停  - ABNORMAL: 异常
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets needAlarms
    *  是否返回作业告警信息，默认为false。
    *
    * @return bool|null
    */
    public function getNeedAlarms()
    {
        return $this->container['needAlarms'];
    }

    /**
    * Sets needAlarms
    *
    * @param bool|null $needAlarms 是否返回作业告警信息，默认为false。
    *
    * @return $this
    */
    public function setNeedAlarms($needAlarms)
    {
        $this->container['needAlarms'] = $needAlarms;
        return $this;
    }

    /**
    * Gets tags
    *  作业标签，多个标签逗号分隔。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 作业标签，多个标签逗号分隔。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets matchAllTags
    *  标签匹配模式：  - false: 任一标签匹配即返回（OR模式）  - true: 所有标签都匹配才返回（AND模式）
    *
    * @return bool|null
    */
    public function getMatchAllTags()
    {
        return $this->container['matchAllTags'];
    }

    /**
    * Sets matchAllTags
    *
    * @param bool|null $matchAllTags 标签匹配模式：  - false: 任一标签匹配即返回（OR模式）  - true: 所有标签都匹配才返回（AND模式）
    *
    * @return $this
    */
    public function setMatchAllTags($matchAllTags)
    {
        $this->container['matchAllTags'] = $matchAllTags;
        return $this;
    }

    /**
    * Gets connectionName
    *  数据连接名称，按数据连接筛选作业。
    *
    * @return string|null
    */
    public function getConnectionName()
    {
        return $this->container['connectionName'];
    }

    /**
    * Sets connectionName
    *
    * @param string|null $connectionName 数据连接名称，按数据连接筛选作业。
    *
    * @return $this
    */
    public function setConnectionName($connectionName)
    {
        $this->container['connectionName'] = $connectionName;
        return $this;
    }

    /**
    * Gets sourceType
    *  源端数据连接类型，按源端数据类型筛选作业。
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 源端数据连接类型，按源端数据类型筛选作业。
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets sourceName
    *  源端数据连接名称，按源端数据名称筛选作业。
    *
    * @return string|null
    */
    public function getSourceName()
    {
        return $this->container['sourceName'];
    }

    /**
    * Sets sourceName
    *
    * @param string|null $sourceName 源端数据连接名称，按源端数据名称筛选作业。
    *
    * @return $this
    */
    public function setSourceName($sourceName)
    {
        $this->container['sourceName'] = $sourceName;
        return $this;
    }

    /**
    * Gets sinkType
    *  目的端数据连接类型，按目的端数据类型筛选作业。
    *
    * @return string|null
    */
    public function getSinkType()
    {
        return $this->container['sinkType'];
    }

    /**
    * Sets sinkType
    *
    * @param string|null $sinkType 目的端数据连接类型，按目的端数据类型筛选作业。
    *
    * @return $this
    */
    public function setSinkType($sinkType)
    {
        $this->container['sinkType'] = $sinkType;
        return $this;
    }

    /**
    * Gets sinkName
    *  目的端数据连接名称，按目的端数据名称筛选作业。
    *
    * @return string|null
    */
    public function getSinkName()
    {
        return $this->container['sinkName'];
    }

    /**
    * Sets sinkName
    *
    * @param string|null $sinkName 目的端数据连接名称，按目的端数据名称筛选作业。
    *
    * @return $this
    */
    public function setSinkName($sinkName)
    {
        $this->container['sinkName'] = $sinkName;
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


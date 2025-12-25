<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertRuleTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlertRuleTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accumulatedTimes  累计次数
    * alertDescription  告警描述
    * alertName  告警名称
    * alertRemediation  告警修复
    * alertType  Map<String,String>
    * createBy  Iam用户ID
    * createTime  毫秒时间戳
    * customProperties  Map<String,String>
    * description  告警规则模板描述
    * eventGrouping  告警组
    * jobMode  jobMode
    * processStatus  processStatus
    * query  查询语句
    * queryType  queryType
    * schedule  schedule
    * severity  severity
    * simulation  是否仿真
    * status  status
    * suppresion  告警抑制
    * tableName  表名称
    * templateId  UUID
    * templateName  模板名称
    * triggers  触发器数组
    * updateBy  Iam用户ID
    * updateTime  毫秒时间戳
    * updateTimeByUser  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accumulatedTimes' => 'int',
            'alertDescription' => 'string',
            'alertName' => 'string',
            'alertRemediation' => 'string',
            'alertType' => 'map[string,string]',
            'createBy' => 'string',
            'createTime' => 'int',
            'customProperties' => 'map[string,string]',
            'description' => 'string',
            'eventGrouping' => 'bool',
            'jobMode' => '\HuaweiCloud\SDK\SecMaster\V2\Model\JobMode',
            'processStatus' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ProcessStatus',
            'query' => 'string',
            'queryType' => '\HuaweiCloud\SDK\SecMaster\V2\Model\QueryType',
            'schedule' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleSchedule',
            'severity' => '\HuaweiCloud\SDK\SecMaster\V2\Model\Serverity',
            'simulation' => 'bool',
            'status' => '\HuaweiCloud\SDK\SecMaster\V2\Model\Status',
            'suppresion' => 'bool',
            'tableName' => 'string',
            'templateId' => 'string',
            'templateName' => 'string',
            'triggers' => '\HuaweiCloud\SDK\SecMaster\V2\Model\Trigger[]',
            'updateBy' => 'string',
            'updateTime' => 'int',
            'updateTimeByUser' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accumulatedTimes  累计次数
    * alertDescription  告警描述
    * alertName  告警名称
    * alertRemediation  告警修复
    * alertType  Map<String,String>
    * createBy  Iam用户ID
    * createTime  毫秒时间戳
    * customProperties  Map<String,String>
    * description  告警规则模板描述
    * eventGrouping  告警组
    * jobMode  jobMode
    * processStatus  processStatus
    * query  查询语句
    * queryType  queryType
    * schedule  schedule
    * severity  severity
    * simulation  是否仿真
    * status  status
    * suppresion  告警抑制
    * tableName  表名称
    * templateId  UUID
    * templateName  模板名称
    * triggers  触发器数组
    * updateBy  Iam用户ID
    * updateTime  毫秒时间戳
    * updateTimeByUser  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accumulatedTimes' => 'int32',
        'alertDescription' => null,
        'alertName' => null,
        'alertRemediation' => null,
        'alertType' => null,
        'createBy' => null,
        'createTime' => 'int64',
        'customProperties' => null,
        'description' => null,
        'eventGrouping' => null,
        'jobMode' => null,
        'processStatus' => null,
        'query' => null,
        'queryType' => null,
        'schedule' => null,
        'severity' => null,
        'simulation' => null,
        'status' => null,
        'suppresion' => null,
        'tableName' => null,
        'templateId' => null,
        'templateName' => null,
        'triggers' => null,
        'updateBy' => null,
        'updateTime' => 'int64',
        'updateTimeByUser' => 'int64'
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
    * accumulatedTimes  累计次数
    * alertDescription  告警描述
    * alertName  告警名称
    * alertRemediation  告警修复
    * alertType  Map<String,String>
    * createBy  Iam用户ID
    * createTime  毫秒时间戳
    * customProperties  Map<String,String>
    * description  告警规则模板描述
    * eventGrouping  告警组
    * jobMode  jobMode
    * processStatus  processStatus
    * query  查询语句
    * queryType  queryType
    * schedule  schedule
    * severity  severity
    * simulation  是否仿真
    * status  status
    * suppresion  告警抑制
    * tableName  表名称
    * templateId  UUID
    * templateName  模板名称
    * triggers  触发器数组
    * updateBy  Iam用户ID
    * updateTime  毫秒时间戳
    * updateTimeByUser  毫秒时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accumulatedTimes' => 'accumulated_times',
            'alertDescription' => 'alert_description',
            'alertName' => 'alert_name',
            'alertRemediation' => 'alert_remediation',
            'alertType' => 'alert_type',
            'createBy' => 'create_by',
            'createTime' => 'create_time',
            'customProperties' => 'custom_properties',
            'description' => 'description',
            'eventGrouping' => 'event_grouping',
            'jobMode' => 'job_mode',
            'processStatus' => 'process_status',
            'query' => 'query',
            'queryType' => 'query_type',
            'schedule' => 'schedule',
            'severity' => 'severity',
            'simulation' => 'simulation',
            'status' => 'status',
            'suppresion' => 'suppresion',
            'tableName' => 'table_name',
            'templateId' => 'template_id',
            'templateName' => 'template_name',
            'triggers' => 'triggers',
            'updateBy' => 'update_by',
            'updateTime' => 'update_time',
            'updateTimeByUser' => 'update_time_by_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accumulatedTimes  累计次数
    * alertDescription  告警描述
    * alertName  告警名称
    * alertRemediation  告警修复
    * alertType  Map<String,String>
    * createBy  Iam用户ID
    * createTime  毫秒时间戳
    * customProperties  Map<String,String>
    * description  告警规则模板描述
    * eventGrouping  告警组
    * jobMode  jobMode
    * processStatus  processStatus
    * query  查询语句
    * queryType  queryType
    * schedule  schedule
    * severity  severity
    * simulation  是否仿真
    * status  status
    * suppresion  告警抑制
    * tableName  表名称
    * templateId  UUID
    * templateName  模板名称
    * triggers  触发器数组
    * updateBy  Iam用户ID
    * updateTime  毫秒时间戳
    * updateTimeByUser  毫秒时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'accumulatedTimes' => 'setAccumulatedTimes',
            'alertDescription' => 'setAlertDescription',
            'alertName' => 'setAlertName',
            'alertRemediation' => 'setAlertRemediation',
            'alertType' => 'setAlertType',
            'createBy' => 'setCreateBy',
            'createTime' => 'setCreateTime',
            'customProperties' => 'setCustomProperties',
            'description' => 'setDescription',
            'eventGrouping' => 'setEventGrouping',
            'jobMode' => 'setJobMode',
            'processStatus' => 'setProcessStatus',
            'query' => 'setQuery',
            'queryType' => 'setQueryType',
            'schedule' => 'setSchedule',
            'severity' => 'setSeverity',
            'simulation' => 'setSimulation',
            'status' => 'setStatus',
            'suppresion' => 'setSuppresion',
            'tableName' => 'setTableName',
            'templateId' => 'setTemplateId',
            'templateName' => 'setTemplateName',
            'triggers' => 'setTriggers',
            'updateBy' => 'setUpdateBy',
            'updateTime' => 'setUpdateTime',
            'updateTimeByUser' => 'setUpdateTimeByUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accumulatedTimes  累计次数
    * alertDescription  告警描述
    * alertName  告警名称
    * alertRemediation  告警修复
    * alertType  Map<String,String>
    * createBy  Iam用户ID
    * createTime  毫秒时间戳
    * customProperties  Map<String,String>
    * description  告警规则模板描述
    * eventGrouping  告警组
    * jobMode  jobMode
    * processStatus  processStatus
    * query  查询语句
    * queryType  queryType
    * schedule  schedule
    * severity  severity
    * simulation  是否仿真
    * status  status
    * suppresion  告警抑制
    * tableName  表名称
    * templateId  UUID
    * templateName  模板名称
    * triggers  触发器数组
    * updateBy  Iam用户ID
    * updateTime  毫秒时间戳
    * updateTimeByUser  毫秒时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'accumulatedTimes' => 'getAccumulatedTimes',
            'alertDescription' => 'getAlertDescription',
            'alertName' => 'getAlertName',
            'alertRemediation' => 'getAlertRemediation',
            'alertType' => 'getAlertType',
            'createBy' => 'getCreateBy',
            'createTime' => 'getCreateTime',
            'customProperties' => 'getCustomProperties',
            'description' => 'getDescription',
            'eventGrouping' => 'getEventGrouping',
            'jobMode' => 'getJobMode',
            'processStatus' => 'getProcessStatus',
            'query' => 'getQuery',
            'queryType' => 'getQueryType',
            'schedule' => 'getSchedule',
            'severity' => 'getSeverity',
            'simulation' => 'getSimulation',
            'status' => 'getStatus',
            'suppresion' => 'getSuppresion',
            'tableName' => 'getTableName',
            'templateId' => 'getTemplateId',
            'templateName' => 'getTemplateName',
            'triggers' => 'getTriggers',
            'updateBy' => 'getUpdateBy',
            'updateTime' => 'getUpdateTime',
            'updateTimeByUser' => 'getUpdateTimeByUser'
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
        $this->container['accumulatedTimes'] = isset($data['accumulatedTimes']) ? $data['accumulatedTimes'] : null;
        $this->container['alertDescription'] = isset($data['alertDescription']) ? $data['alertDescription'] : null;
        $this->container['alertName'] = isset($data['alertName']) ? $data['alertName'] : null;
        $this->container['alertRemediation'] = isset($data['alertRemediation']) ? $data['alertRemediation'] : null;
        $this->container['alertType'] = isset($data['alertType']) ? $data['alertType'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['customProperties'] = isset($data['customProperties']) ? $data['customProperties'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['eventGrouping'] = isset($data['eventGrouping']) ? $data['eventGrouping'] : null;
        $this->container['jobMode'] = isset($data['jobMode']) ? $data['jobMode'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['simulation'] = isset($data['simulation']) ? $data['simulation'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['suppresion'] = isset($data['suppresion']) ? $data['suppresion'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['triggers'] = isset($data['triggers']) ? $data['triggers'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateTimeByUser'] = isset($data['updateTimeByUser']) ? $data['updateTimeByUser'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accumulatedTimes']) && ($this->container['accumulatedTimes'] > 500)) {
                $invalidProperties[] = "invalid value for 'accumulatedTimes', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['accumulatedTimes']) && ($this->container['accumulatedTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'accumulatedTimes', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alertDescription']) && (mb_strlen($this->container['alertDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'alertDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['alertDescription']) && (mb_strlen($this->container['alertDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'alertDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alertName']) && (mb_strlen($this->container['alertName']) > 256)) {
                $invalidProperties[] = "invalid value for 'alertName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['alertName']) && (mb_strlen($this->container['alertName']) < 0)) {
                $invalidProperties[] = "invalid value for 'alertName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alertRemediation']) && (mb_strlen($this->container['alertRemediation']) > 1024)) {
                $invalidProperties[] = "invalid value for 'alertRemediation', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['alertRemediation']) && (mb_strlen($this->container['alertRemediation']) < 0)) {
                $invalidProperties[] = "invalid value for 'alertRemediation', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['query']) && (mb_strlen($this->container['query']) > 65535)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['query']) && (mb_strlen($this->container['query']) < 1)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 64)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableName']) && !preg_match("/^(?!_)[a-zA-Z][a-zA-Z0-9_]*(?<!_)$/", $this->container['tableName'])) {
                $invalidProperties[] = "invalid value for 'tableName', must be conform to the pattern /^(?!_)[a-zA-Z][a-zA-Z0-9_]*(?<!_)$/.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) > 36)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) < 36)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) > 256)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTimeByUser']) && ($this->container['updateTimeByUser'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'updateTimeByUser', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['updateTimeByUser']) && ($this->container['updateTimeByUser'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTimeByUser', must be bigger than or equal to 0.";
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
    * Gets accumulatedTimes
    *  累计次数
    *
    * @return int|null
    */
    public function getAccumulatedTimes()
    {
        return $this->container['accumulatedTimes'];
    }

    /**
    * Sets accumulatedTimes
    *
    * @param int|null $accumulatedTimes 累计次数
    *
    * @return $this
    */
    public function setAccumulatedTimes($accumulatedTimes)
    {
        $this->container['accumulatedTimes'] = $accumulatedTimes;
        return $this;
    }

    /**
    * Gets alertDescription
    *  告警描述
    *
    * @return string|null
    */
    public function getAlertDescription()
    {
        return $this->container['alertDescription'];
    }

    /**
    * Sets alertDescription
    *
    * @param string|null $alertDescription 告警描述
    *
    * @return $this
    */
    public function setAlertDescription($alertDescription)
    {
        $this->container['alertDescription'] = $alertDescription;
        return $this;
    }

    /**
    * Gets alertName
    *  告警名称
    *
    * @return string|null
    */
    public function getAlertName()
    {
        return $this->container['alertName'];
    }

    /**
    * Sets alertName
    *
    * @param string|null $alertName 告警名称
    *
    * @return $this
    */
    public function setAlertName($alertName)
    {
        $this->container['alertName'] = $alertName;
        return $this;
    }

    /**
    * Gets alertRemediation
    *  告警修复
    *
    * @return string|null
    */
    public function getAlertRemediation()
    {
        return $this->container['alertRemediation'];
    }

    /**
    * Sets alertRemediation
    *
    * @param string|null $alertRemediation 告警修复
    *
    * @return $this
    */
    public function setAlertRemediation($alertRemediation)
    {
        $this->container['alertRemediation'] = $alertRemediation;
        return $this;
    }

    /**
    * Gets alertType
    *  Map<String,String>
    *
    * @return map[string,string]|null
    */
    public function getAlertType()
    {
        return $this->container['alertType'];
    }

    /**
    * Sets alertType
    *
    * @param map[string,string]|null $alertType Map<String,String>
    *
    * @return $this
    */
    public function setAlertType($alertType)
    {
        $this->container['alertType'] = $alertType;
        return $this;
    }

    /**
    * Gets createBy
    *  Iam用户ID
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy Iam用户ID
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets createTime
    *  毫秒时间戳
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
    * @param int|null $createTime 毫秒时间戳
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets customProperties
    *  Map<String,String>
    *
    * @return map[string,string]|null
    */
    public function getCustomProperties()
    {
        return $this->container['customProperties'];
    }

    /**
    * Sets customProperties
    *
    * @param map[string,string]|null $customProperties Map<String,String>
    *
    * @return $this
    */
    public function setCustomProperties($customProperties)
    {
        $this->container['customProperties'] = $customProperties;
        return $this;
    }

    /**
    * Gets description
    *  告警规则模板描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 告警规则模板描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets eventGrouping
    *  告警组
    *
    * @return bool|null
    */
    public function getEventGrouping()
    {
        return $this->container['eventGrouping'];
    }

    /**
    * Sets eventGrouping
    *
    * @param bool|null $eventGrouping 告警组
    *
    * @return $this
    */
    public function setEventGrouping($eventGrouping)
    {
        $this->container['eventGrouping'] = $eventGrouping;
        return $this;
    }

    /**
    * Gets jobMode
    *  jobMode
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\JobMode|null
    */
    public function getJobMode()
    {
        return $this->container['jobMode'];
    }

    /**
    * Sets jobMode
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\JobMode|null $jobMode jobMode
    *
    * @return $this
    */
    public function setJobMode($jobMode)
    {
        $this->container['jobMode'] = $jobMode;
        return $this;
    }

    /**
    * Gets processStatus
    *  processStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ProcessStatus|null
    */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
    * Sets processStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ProcessStatus|null $processStatus processStatus
    *
    * @return $this
    */
    public function setProcessStatus($processStatus)
    {
        $this->container['processStatus'] = $processStatus;
        return $this;
    }

    /**
    * Gets query
    *  查询语句
    *
    * @return string|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string|null $query 查询语句
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets queryType
    *  queryType
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\QueryType|null
    */
    public function getQueryType()
    {
        return $this->container['queryType'];
    }

    /**
    * Sets queryType
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\QueryType|null $queryType queryType
    *
    * @return $this
    */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;
        return $this;
    }

    /**
    * Gets schedule
    *  schedule
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleSchedule|null
    */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
    * Sets schedule
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleSchedule|null $schedule schedule
    *
    * @return $this
    */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;
        return $this;
    }

    /**
    * Gets severity
    *  severity
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\Serverity|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\Serverity|null $severity severity
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets simulation
    *  是否仿真
    *
    * @return bool|null
    */
    public function getSimulation()
    {
        return $this->container['simulation'];
    }

    /**
    * Sets simulation
    *
    * @param bool|null $simulation 是否仿真
    *
    * @return $this
    */
    public function setSimulation($simulation)
    {
        $this->container['simulation'] = $simulation;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\Status|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\Status|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets suppresion
    *  告警抑制
    *
    * @return bool|null
    */
    public function getSuppresion()
    {
        return $this->container['suppresion'];
    }

    /**
    * Sets suppresion
    *
    * @param bool|null $suppresion 告警抑制
    *
    * @return $this
    */
    public function setSuppresion($suppresion)
    {
        $this->container['suppresion'] = $suppresion;
        return $this;
    }

    /**
    * Gets tableName
    *  表名称
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 表名称
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets templateId
    *  UUID
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId UUID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets templateName
    *  模板名称
    *
    * @return string|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string|null $templateName 模板名称
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets triggers
    *  触发器数组
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\Trigger[]|null
    */
    public function getTriggers()
    {
        return $this->container['triggers'];
    }

    /**
    * Sets triggers
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\Trigger[]|null $triggers 触发器数组
    *
    * @return $this
    */
    public function setTriggers($triggers)
    {
        $this->container['triggers'] = $triggers;
        return $this;
    }

    /**
    * Gets updateBy
    *  Iam用户ID
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy Iam用户ID
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets updateTime
    *  毫秒时间戳
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
    * @param int|null $updateTime 毫秒时间戳
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateTimeByUser
    *  毫秒时间戳
    *
    * @return int|null
    */
    public function getUpdateTimeByUser()
    {
        return $this->container['updateTimeByUser'];
    }

    /**
    * Sets updateTimeByUser
    *
    * @param int|null $updateTimeByUser 毫秒时间戳
    *
    * @return $this
    */
    public function setUpdateTimeByUser($updateTimeByUser)
    {
        $this->container['updateTimeByUser'] = $updateTimeByUser;
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


<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAlertRuleTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAlertRuleTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accumulatedTimes  累计次数
    * createBy  UUID
    * createTime  毫秒时间戳
    * cuQuotaAmount  数量
    * description  告警规则模板描述
    * environment  environment
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * jobOutputSetting  jobOutputSetting
    * processError  processError
    * processStatus  processStatus
    * queryType  queryType
    * script  Script 脚本
    * status  status
    * tableName  表名称
    * templateId  UUID
    * templateName  模板名称
    * triggers  触发器数组
    * updateBy  UUID
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accumulatedTimes' => 'int',
            'createBy' => 'string',
            'createTime' => 'int',
            'cuQuotaAmount' => 'float',
            'description' => 'string',
            'environment' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleEnvironment',
            'jobMode' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobMode',
            'jobModeSetting' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobModeSettingVo',
            'jobOutputSetting' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobOutputSetting',
            'processError' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ProcessError',
            'processStatus' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ProcessStatus',
            'queryType' => '\HuaweiCloud\SDK\SecMaster\V2\Model\QueryType',
            'script' => 'string',
            'status' => '\HuaweiCloud\SDK\SecMaster\V2\Model\Status',
            'tableName' => 'string',
            'templateId' => 'string',
            'templateName' => 'string',
            'triggers' => '\HuaweiCloud\SDK\SecMaster\V2\Model\Trigger[]',
            'updateBy' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accumulatedTimes  累计次数
    * createBy  UUID
    * createTime  毫秒时间戳
    * cuQuotaAmount  数量
    * description  告警规则模板描述
    * environment  environment
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * jobOutputSetting  jobOutputSetting
    * processError  processError
    * processStatus  processStatus
    * queryType  queryType
    * script  Script 脚本
    * status  status
    * tableName  表名称
    * templateId  UUID
    * templateName  模板名称
    * triggers  触发器数组
    * updateBy  UUID
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accumulatedTimes' => 'int32',
        'createBy' => null,
        'createTime' => 'int64',
        'cuQuotaAmount' => null,
        'description' => null,
        'environment' => null,
        'jobMode' => null,
        'jobModeSetting' => null,
        'jobOutputSetting' => null,
        'processError' => null,
        'processStatus' => null,
        'queryType' => null,
        'script' => null,
        'status' => null,
        'tableName' => null,
        'templateId' => null,
        'templateName' => null,
        'triggers' => null,
        'updateBy' => null,
        'updateTime' => 'int64'
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
    * createBy  UUID
    * createTime  毫秒时间戳
    * cuQuotaAmount  数量
    * description  告警规则模板描述
    * environment  environment
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * jobOutputSetting  jobOutputSetting
    * processError  processError
    * processStatus  processStatus
    * queryType  queryType
    * script  Script 脚本
    * status  status
    * tableName  表名称
    * templateId  UUID
    * templateName  模板名称
    * triggers  触发器数组
    * updateBy  UUID
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accumulatedTimes' => 'accumulated_times',
            'createBy' => 'create_by',
            'createTime' => 'create_time',
            'cuQuotaAmount' => 'cu_quota_amount',
            'description' => 'description',
            'environment' => 'environment',
            'jobMode' => 'job_mode',
            'jobModeSetting' => 'job_mode_setting',
            'jobOutputSetting' => 'job_output_setting',
            'processError' => 'process_error',
            'processStatus' => 'process_status',
            'queryType' => 'query_type',
            'script' => 'script',
            'status' => 'status',
            'tableName' => 'table_name',
            'templateId' => 'template_id',
            'templateName' => 'template_name',
            'triggers' => 'triggers',
            'updateBy' => 'update_by',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accumulatedTimes  累计次数
    * createBy  UUID
    * createTime  毫秒时间戳
    * cuQuotaAmount  数量
    * description  告警规则模板描述
    * environment  environment
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * jobOutputSetting  jobOutputSetting
    * processError  processError
    * processStatus  processStatus
    * queryType  queryType
    * script  Script 脚本
    * status  status
    * tableName  表名称
    * templateId  UUID
    * templateName  模板名称
    * triggers  触发器数组
    * updateBy  UUID
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'accumulatedTimes' => 'setAccumulatedTimes',
            'createBy' => 'setCreateBy',
            'createTime' => 'setCreateTime',
            'cuQuotaAmount' => 'setCuQuotaAmount',
            'description' => 'setDescription',
            'environment' => 'setEnvironment',
            'jobMode' => 'setJobMode',
            'jobModeSetting' => 'setJobModeSetting',
            'jobOutputSetting' => 'setJobOutputSetting',
            'processError' => 'setProcessError',
            'processStatus' => 'setProcessStatus',
            'queryType' => 'setQueryType',
            'script' => 'setScript',
            'status' => 'setStatus',
            'tableName' => 'setTableName',
            'templateId' => 'setTemplateId',
            'templateName' => 'setTemplateName',
            'triggers' => 'setTriggers',
            'updateBy' => 'setUpdateBy',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accumulatedTimes  累计次数
    * createBy  UUID
    * createTime  毫秒时间戳
    * cuQuotaAmount  数量
    * description  告警规则模板描述
    * environment  environment
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * jobOutputSetting  jobOutputSetting
    * processError  processError
    * processStatus  processStatus
    * queryType  queryType
    * script  Script 脚本
    * status  status
    * tableName  表名称
    * templateId  UUID
    * templateName  模板名称
    * triggers  触发器数组
    * updateBy  UUID
    * updateTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'accumulatedTimes' => 'getAccumulatedTimes',
            'createBy' => 'getCreateBy',
            'createTime' => 'getCreateTime',
            'cuQuotaAmount' => 'getCuQuotaAmount',
            'description' => 'getDescription',
            'environment' => 'getEnvironment',
            'jobMode' => 'getJobMode',
            'jobModeSetting' => 'getJobModeSetting',
            'jobOutputSetting' => 'getJobOutputSetting',
            'processError' => 'getProcessError',
            'processStatus' => 'getProcessStatus',
            'queryType' => 'getQueryType',
            'script' => 'getScript',
            'status' => 'getStatus',
            'tableName' => 'getTableName',
            'templateId' => 'getTemplateId',
            'templateName' => 'getTemplateName',
            'triggers' => 'getTriggers',
            'updateBy' => 'getUpdateBy',
            'updateTime' => 'getUpdateTime'
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
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['cuQuotaAmount'] = isset($data['cuQuotaAmount']) ? $data['cuQuotaAmount'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['jobMode'] = isset($data['jobMode']) ? $data['jobMode'] : null;
        $this->container['jobModeSetting'] = isset($data['jobModeSetting']) ? $data['jobModeSetting'] : null;
        $this->container['jobOutputSetting'] = isset($data['jobOutputSetting']) ? $data['jobOutputSetting'] : null;
        $this->container['processError'] = isset($data['processError']) ? $data['processError'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['script'] = isset($data['script']) ? $data['script'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['triggers'] = isset($data['triggers']) ? $data['triggers'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 36)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 36)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cuQuotaAmount']) && ($this->container['cuQuotaAmount'] > 5E+2)) {
                $invalidProperties[] = "invalid value for 'cuQuotaAmount', must be smaller than or equal to 5E+2.";
            }
            if (!is_null($this->container['cuQuotaAmount']) && ($this->container['cuQuotaAmount'] < 0.1)) {
                $invalidProperties[] = "invalid value for 'cuQuotaAmount', must be bigger than or equal to 0.1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['script']) && (mb_strlen($this->container['script']) > 10240)) {
                $invalidProperties[] = "invalid value for 'script', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['script']) && (mb_strlen($this->container['script']) < 1)) {
                $invalidProperties[] = "invalid value for 'script', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) > 36)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) < 36)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
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
    * Gets createBy
    *  UUID
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
    * @param string|null $createBy UUID
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
    * Gets cuQuotaAmount
    *  数量
    *
    * @return float|null
    */
    public function getCuQuotaAmount()
    {
        return $this->container['cuQuotaAmount'];
    }

    /**
    * Sets cuQuotaAmount
    *
    * @param float|null $cuQuotaAmount 数量
    *
    * @return $this
    */
    public function setCuQuotaAmount($cuQuotaAmount)
    {
        $this->container['cuQuotaAmount'] = $cuQuotaAmount;
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
    * Gets environment
    *  environment
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleEnvironment|null
    */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
    * Sets environment
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleEnvironment|null $environment environment
    *
    * @return $this
    */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;
        return $this;
    }

    /**
    * Gets jobMode
    *  jobMode
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobMode|null
    */
    public function getJobMode()
    {
        return $this->container['jobMode'];
    }

    /**
    * Sets jobMode
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobMode|null $jobMode jobMode
    *
    * @return $this
    */
    public function setJobMode($jobMode)
    {
        $this->container['jobMode'] = $jobMode;
        return $this;
    }

    /**
    * Gets jobModeSetting
    *  jobModeSetting
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobModeSettingVo|null
    */
    public function getJobModeSetting()
    {
        return $this->container['jobModeSetting'];
    }

    /**
    * Sets jobModeSetting
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobModeSettingVo|null $jobModeSetting jobModeSetting
    *
    * @return $this
    */
    public function setJobModeSetting($jobModeSetting)
    {
        $this->container['jobModeSetting'] = $jobModeSetting;
        return $this;
    }

    /**
    * Gets jobOutputSetting
    *  jobOutputSetting
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobOutputSetting|null
    */
    public function getJobOutputSetting()
    {
        return $this->container['jobOutputSetting'];
    }

    /**
    * Sets jobOutputSetting
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobOutputSetting|null $jobOutputSetting jobOutputSetting
    *
    * @return $this
    */
    public function setJobOutputSetting($jobOutputSetting)
    {
        $this->container['jobOutputSetting'] = $jobOutputSetting;
        return $this;
    }

    /**
    * Gets processError
    *  processError
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ProcessError|null
    */
    public function getProcessError()
    {
        return $this->container['processError'];
    }

    /**
    * Sets processError
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ProcessError|null $processError processError
    *
    * @return $this
    */
    public function setProcessError($processError)
    {
        $this->container['processError'] = $processError;
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
    * Gets script
    *  Script 脚本
    *
    * @return string|null
    */
    public function getScript()
    {
        return $this->container['script'];
    }

    /**
    * Sets script
    *
    * @param string|null $script Script 脚本
    *
    * @return $this
    */
    public function setScript($script)
    {
        $this->container['script'] = $script;
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
    *  UUID
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
    * @param string|null $updateBy UUID
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


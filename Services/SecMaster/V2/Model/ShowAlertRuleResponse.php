<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAlertRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAlertRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alertRuleId  UUID
    * alertRuleName  Alert rule name 告警规则名称
    * script  Job Script 作业脚本
    * status  status
    * directory  directory 目录分组
    * description  Alert rule description 告警规则描述
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * jobOutputSetting  jobOutputSetting
    * processStatus  processStatus
    * processError  processError
    * environment  environment
    * outputTableId  UUID
    * outputTableName  表名称
    * outputTableIds  输出表ID列表
    * outputTableNames  输出表名称列表
    * createBy  创建者
    * createTime  毫秒时间戳
    * updateBy  更新者
    * updateTime  毫秒时间戳
    * deleteTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alertRuleId' => 'string',
            'alertRuleName' => 'string',
            'script' => 'string',
            'status' => '\HuaweiCloud\SDK\SecMaster\V2\Model\JobStatus',
            'directory' => 'string',
            'description' => 'string',
            'jobMode' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobMode',
            'jobModeSetting' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobModeSettingVo',
            'jobOutputSetting' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleJobSetting',
            'processStatus' => '\HuaweiCloud\SDK\SecMaster\V2\Model\JobProcessStatus',
            'processError' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleProcessError',
            'environment' => '\HuaweiCloud\SDK\SecMaster\V2\Model\JobEnvironment',
            'outputTableId' => 'string',
            'outputTableName' => 'string',
            'outputTableIds' => 'string[]',
            'outputTableNames' => 'string[]',
            'createBy' => 'string',
            'createTime' => 'int',
            'updateBy' => 'string',
            'updateTime' => 'int',
            'deleteTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alertRuleId  UUID
    * alertRuleName  Alert rule name 告警规则名称
    * script  Job Script 作业脚本
    * status  status
    * directory  directory 目录分组
    * description  Alert rule description 告警规则描述
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * jobOutputSetting  jobOutputSetting
    * processStatus  processStatus
    * processError  processError
    * environment  environment
    * outputTableId  UUID
    * outputTableName  表名称
    * outputTableIds  输出表ID列表
    * outputTableNames  输出表名称列表
    * createBy  创建者
    * createTime  毫秒时间戳
    * updateBy  更新者
    * updateTime  毫秒时间戳
    * deleteTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alertRuleId' => null,
        'alertRuleName' => null,
        'script' => null,
        'status' => null,
        'directory' => null,
        'description' => null,
        'jobMode' => null,
        'jobModeSetting' => null,
        'jobOutputSetting' => null,
        'processStatus' => null,
        'processError' => null,
        'environment' => null,
        'outputTableId' => null,
        'outputTableName' => null,
        'outputTableIds' => null,
        'outputTableNames' => null,
        'createBy' => null,
        'createTime' => 'int64',
        'updateBy' => null,
        'updateTime' => 'int64',
        'deleteTime' => 'int64'
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
    * alertRuleId  UUID
    * alertRuleName  Alert rule name 告警规则名称
    * script  Job Script 作业脚本
    * status  status
    * directory  directory 目录分组
    * description  Alert rule description 告警规则描述
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * jobOutputSetting  jobOutputSetting
    * processStatus  processStatus
    * processError  processError
    * environment  environment
    * outputTableId  UUID
    * outputTableName  表名称
    * outputTableIds  输出表ID列表
    * outputTableNames  输出表名称列表
    * createBy  创建者
    * createTime  毫秒时间戳
    * updateBy  更新者
    * updateTime  毫秒时间戳
    * deleteTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alertRuleId' => 'alert_rule_id',
            'alertRuleName' => 'alert_rule_name',
            'script' => 'script',
            'status' => 'status',
            'directory' => 'directory',
            'description' => 'description',
            'jobMode' => 'job_mode',
            'jobModeSetting' => 'job_mode_setting',
            'jobOutputSetting' => 'job_output_setting',
            'processStatus' => 'process_status',
            'processError' => 'process_error',
            'environment' => 'environment',
            'outputTableId' => 'output_table_id',
            'outputTableName' => 'output_table_name',
            'outputTableIds' => 'output_table_ids',
            'outputTableNames' => 'output_table_names',
            'createBy' => 'create_by',
            'createTime' => 'create_time',
            'updateBy' => 'update_by',
            'updateTime' => 'update_time',
            'deleteTime' => 'delete_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alertRuleId  UUID
    * alertRuleName  Alert rule name 告警规则名称
    * script  Job Script 作业脚本
    * status  status
    * directory  directory 目录分组
    * description  Alert rule description 告警规则描述
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * jobOutputSetting  jobOutputSetting
    * processStatus  processStatus
    * processError  processError
    * environment  environment
    * outputTableId  UUID
    * outputTableName  表名称
    * outputTableIds  输出表ID列表
    * outputTableNames  输出表名称列表
    * createBy  创建者
    * createTime  毫秒时间戳
    * updateBy  更新者
    * updateTime  毫秒时间戳
    * deleteTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'alertRuleId' => 'setAlertRuleId',
            'alertRuleName' => 'setAlertRuleName',
            'script' => 'setScript',
            'status' => 'setStatus',
            'directory' => 'setDirectory',
            'description' => 'setDescription',
            'jobMode' => 'setJobMode',
            'jobModeSetting' => 'setJobModeSetting',
            'jobOutputSetting' => 'setJobOutputSetting',
            'processStatus' => 'setProcessStatus',
            'processError' => 'setProcessError',
            'environment' => 'setEnvironment',
            'outputTableId' => 'setOutputTableId',
            'outputTableName' => 'setOutputTableName',
            'outputTableIds' => 'setOutputTableIds',
            'outputTableNames' => 'setOutputTableNames',
            'createBy' => 'setCreateBy',
            'createTime' => 'setCreateTime',
            'updateBy' => 'setUpdateBy',
            'updateTime' => 'setUpdateTime',
            'deleteTime' => 'setDeleteTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alertRuleId  UUID
    * alertRuleName  Alert rule name 告警规则名称
    * script  Job Script 作业脚本
    * status  status
    * directory  directory 目录分组
    * description  Alert rule description 告警规则描述
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * jobOutputSetting  jobOutputSetting
    * processStatus  processStatus
    * processError  processError
    * environment  environment
    * outputTableId  UUID
    * outputTableName  表名称
    * outputTableIds  输出表ID列表
    * outputTableNames  输出表名称列表
    * createBy  创建者
    * createTime  毫秒时间戳
    * updateBy  更新者
    * updateTime  毫秒时间戳
    * deleteTime  毫秒时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'alertRuleId' => 'getAlertRuleId',
            'alertRuleName' => 'getAlertRuleName',
            'script' => 'getScript',
            'status' => 'getStatus',
            'directory' => 'getDirectory',
            'description' => 'getDescription',
            'jobMode' => 'getJobMode',
            'jobModeSetting' => 'getJobModeSetting',
            'jobOutputSetting' => 'getJobOutputSetting',
            'processStatus' => 'getProcessStatus',
            'processError' => 'getProcessError',
            'environment' => 'getEnvironment',
            'outputTableId' => 'getOutputTableId',
            'outputTableName' => 'getOutputTableName',
            'outputTableIds' => 'getOutputTableIds',
            'outputTableNames' => 'getOutputTableNames',
            'createBy' => 'getCreateBy',
            'createTime' => 'getCreateTime',
            'updateBy' => 'getUpdateBy',
            'updateTime' => 'getUpdateTime',
            'deleteTime' => 'getDeleteTime'
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
        $this->container['alertRuleId'] = isset($data['alertRuleId']) ? $data['alertRuleId'] : null;
        $this->container['alertRuleName'] = isset($data['alertRuleName']) ? $data['alertRuleName'] : null;
        $this->container['script'] = isset($data['script']) ? $data['script'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['jobMode'] = isset($data['jobMode']) ? $data['jobMode'] : null;
        $this->container['jobModeSetting'] = isset($data['jobModeSetting']) ? $data['jobModeSetting'] : null;
        $this->container['jobOutputSetting'] = isset($data['jobOutputSetting']) ? $data['jobOutputSetting'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
        $this->container['processError'] = isset($data['processError']) ? $data['processError'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['outputTableId'] = isset($data['outputTableId']) ? $data['outputTableId'] : null;
        $this->container['outputTableName'] = isset($data['outputTableName']) ? $data['outputTableName'] : null;
        $this->container['outputTableIds'] = isset($data['outputTableIds']) ? $data['outputTableIds'] : null;
        $this->container['outputTableNames'] = isset($data['outputTableNames']) ? $data['outputTableNames'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['deleteTime'] = isset($data['deleteTime']) ? $data['deleteTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['alertRuleId']) && (mb_strlen($this->container['alertRuleId']) > 36)) {
                $invalidProperties[] = "invalid value for 'alertRuleId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['alertRuleId']) && (mb_strlen($this->container['alertRuleId']) < 36)) {
                $invalidProperties[] = "invalid value for 'alertRuleId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['alertRuleName']) && (mb_strlen($this->container['alertRuleName']) > 256)) {
                $invalidProperties[] = "invalid value for 'alertRuleName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['alertRuleName']) && (mb_strlen($this->container['alertRuleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'alertRuleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['script']) && (mb_strlen($this->container['script']) > 10240)) {
                $invalidProperties[] = "invalid value for 'script', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['script']) && (mb_strlen($this->container['script']) < 1)) {
                $invalidProperties[] = "invalid value for 'script', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) > 256)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) < 1)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['outputTableId']) && (mb_strlen($this->container['outputTableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'outputTableId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['outputTableId']) && (mb_strlen($this->container['outputTableId']) < 36)) {
                $invalidProperties[] = "invalid value for 'outputTableId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['outputTableName']) && (mb_strlen($this->container['outputTableName']) > 64)) {
                $invalidProperties[] = "invalid value for 'outputTableName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['outputTableName']) && (mb_strlen($this->container['outputTableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'outputTableName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['outputTableName']) && !preg_match("/^(?!_)[a-zA-Z][a-zA-Z0-9_]*(?<!_)$/", $this->container['outputTableName'])) {
                $invalidProperties[] = "invalid value for 'outputTableName', must be conform to the pattern /^(?!_)[a-zA-Z][a-zA-Z0-9_]*(?<!_)$/.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 256)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) > 256)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deleteTime']) && ($this->container['deleteTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'deleteTime', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['deleteTime']) && ($this->container['deleteTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'deleteTime', must be bigger than or equal to 0.";
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
    * Gets alertRuleId
    *  UUID
    *
    * @return string|null
    */
    public function getAlertRuleId()
    {
        return $this->container['alertRuleId'];
    }

    /**
    * Sets alertRuleId
    *
    * @param string|null $alertRuleId UUID
    *
    * @return $this
    */
    public function setAlertRuleId($alertRuleId)
    {
        $this->container['alertRuleId'] = $alertRuleId;
        return $this;
    }

    /**
    * Gets alertRuleName
    *  Alert rule name 告警规则名称
    *
    * @return string|null
    */
    public function getAlertRuleName()
    {
        return $this->container['alertRuleName'];
    }

    /**
    * Sets alertRuleName
    *
    * @param string|null $alertRuleName Alert rule name 告警规则名称
    *
    * @return $this
    */
    public function setAlertRuleName($alertRuleName)
    {
        $this->container['alertRuleName'] = $alertRuleName;
        return $this;
    }

    /**
    * Gets script
    *  Job Script 作业脚本
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
    * @param string|null $script Job Script 作业脚本
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
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\JobStatus|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\JobStatus|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets directory
    *  directory 目录分组
    *
    * @return string|null
    */
    public function getDirectory()
    {
        return $this->container['directory'];
    }

    /**
    * Sets directory
    *
    * @param string|null $directory directory 目录分组
    *
    * @return $this
    */
    public function setDirectory($directory)
    {
        $this->container['directory'] = $directory;
        return $this;
    }

    /**
    * Gets description
    *  Alert rule description 告警规则描述
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
    * @param string|null $description Alert rule description 告警规则描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleJobSetting|null
    */
    public function getJobOutputSetting()
    {
        return $this->container['jobOutputSetting'];
    }

    /**
    * Sets jobOutputSetting
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleJobSetting|null $jobOutputSetting jobOutputSetting
    *
    * @return $this
    */
    public function setJobOutputSetting($jobOutputSetting)
    {
        $this->container['jobOutputSetting'] = $jobOutputSetting;
        return $this;
    }

    /**
    * Gets processStatus
    *  processStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\JobProcessStatus|null
    */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
    * Sets processStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\JobProcessStatus|null $processStatus processStatus
    *
    * @return $this
    */
    public function setProcessStatus($processStatus)
    {
        $this->container['processStatus'] = $processStatus;
        return $this;
    }

    /**
    * Gets processError
    *  processError
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleProcessError|null
    */
    public function getProcessError()
    {
        return $this->container['processError'];
    }

    /**
    * Sets processError
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleProcessError|null $processError processError
    *
    * @return $this
    */
    public function setProcessError($processError)
    {
        $this->container['processError'] = $processError;
        return $this;
    }

    /**
    * Gets environment
    *  environment
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\JobEnvironment|null
    */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
    * Sets environment
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\JobEnvironment|null $environment environment
    *
    * @return $this
    */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;
        return $this;
    }

    /**
    * Gets outputTableId
    *  UUID
    *
    * @return string|null
    */
    public function getOutputTableId()
    {
        return $this->container['outputTableId'];
    }

    /**
    * Sets outputTableId
    *
    * @param string|null $outputTableId UUID
    *
    * @return $this
    */
    public function setOutputTableId($outputTableId)
    {
        $this->container['outputTableId'] = $outputTableId;
        return $this;
    }

    /**
    * Gets outputTableName
    *  表名称
    *
    * @return string|null
    */
    public function getOutputTableName()
    {
        return $this->container['outputTableName'];
    }

    /**
    * Sets outputTableName
    *
    * @param string|null $outputTableName 表名称
    *
    * @return $this
    */
    public function setOutputTableName($outputTableName)
    {
        $this->container['outputTableName'] = $outputTableName;
        return $this;
    }

    /**
    * Gets outputTableIds
    *  输出表ID列表
    *
    * @return string[]|null
    */
    public function getOutputTableIds()
    {
        return $this->container['outputTableIds'];
    }

    /**
    * Sets outputTableIds
    *
    * @param string[]|null $outputTableIds 输出表ID列表
    *
    * @return $this
    */
    public function setOutputTableIds($outputTableIds)
    {
        $this->container['outputTableIds'] = $outputTableIds;
        return $this;
    }

    /**
    * Gets outputTableNames
    *  输出表名称列表
    *
    * @return string[]|null
    */
    public function getOutputTableNames()
    {
        return $this->container['outputTableNames'];
    }

    /**
    * Sets outputTableNames
    *
    * @param string[]|null $outputTableNames 输出表名称列表
    *
    * @return $this
    */
    public function setOutputTableNames($outputTableNames)
    {
        $this->container['outputTableNames'] = $outputTableNames;
        return $this;
    }

    /**
    * Gets createBy
    *  创建者
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
    * @param string|null $createBy 创建者
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
    * Gets updateBy
    *  更新者
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
    * @param string|null $updateBy 更新者
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
    * Gets deleteTime
    *  毫秒时间戳
    *
    * @return int|null
    */
    public function getDeleteTime()
    {
        return $this->container['deleteTime'];
    }

    /**
    * Sets deleteTime
    *
    * @param int|null $deleteTime 毫秒时间戳
    *
    * @return $this
    */
    public function setDeleteTime($deleteTime)
    {
        $this->container['deleteTime'] = $deleteTime;
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


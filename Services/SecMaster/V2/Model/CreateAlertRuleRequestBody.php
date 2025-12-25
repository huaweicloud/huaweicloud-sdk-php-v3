<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAlertRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAlertRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alertRuleName  Alert rule name 告警规则名称
    * description  Alert rule description 告警规则描述
    * directory  directory 目录分组
    * script  Job Script 作业脚本
    * status  status
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * environment  environment
    * jobOutputSetting  jobOutputSetting
    * outputTableId  UUID
    * outputTableName  表名
    * cuQuotaAmount  数量
    * outputTableIds  输出表id列表
    * outputTableNames  输出表名称列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alertRuleName' => 'string',
            'description' => 'string',
            'directory' => 'string',
            'script' => 'string',
            'status' => '\HuaweiCloud\SDK\SecMaster\V2\Model\JobStatus',
            'jobMode' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobMode',
            'jobModeSetting' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobModeSettingDto',
            'environment' => '\HuaweiCloud\SDK\SecMaster\V2\Model\JobEnvironment',
            'jobOutputSetting' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobOutputSetting',
            'outputTableId' => 'string',
            'outputTableName' => 'string',
            'cuQuotaAmount' => 'float',
            'outputTableIds' => 'string[]',
            'outputTableNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alertRuleName  Alert rule name 告警规则名称
    * description  Alert rule description 告警规则描述
    * directory  directory 目录分组
    * script  Job Script 作业脚本
    * status  status
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * environment  environment
    * jobOutputSetting  jobOutputSetting
    * outputTableId  UUID
    * outputTableName  表名
    * cuQuotaAmount  数量
    * outputTableIds  输出表id列表
    * outputTableNames  输出表名称列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alertRuleName' => null,
        'description' => null,
        'directory' => null,
        'script' => null,
        'status' => null,
        'jobMode' => null,
        'jobModeSetting' => null,
        'environment' => null,
        'jobOutputSetting' => null,
        'outputTableId' => null,
        'outputTableName' => null,
        'cuQuotaAmount' => 'float',
        'outputTableIds' => null,
        'outputTableNames' => null
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
    * alertRuleName  Alert rule name 告警规则名称
    * description  Alert rule description 告警规则描述
    * directory  directory 目录分组
    * script  Job Script 作业脚本
    * status  status
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * environment  environment
    * jobOutputSetting  jobOutputSetting
    * outputTableId  UUID
    * outputTableName  表名
    * cuQuotaAmount  数量
    * outputTableIds  输出表id列表
    * outputTableNames  输出表名称列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alertRuleName' => 'alert_rule_name',
            'description' => 'description',
            'directory' => 'directory',
            'script' => 'script',
            'status' => 'status',
            'jobMode' => 'job_mode',
            'jobModeSetting' => 'job_mode_setting',
            'environment' => 'environment',
            'jobOutputSetting' => 'job_output_setting',
            'outputTableId' => 'output_table_id',
            'outputTableName' => 'output_table_name',
            'cuQuotaAmount' => 'cu_quota_amount',
            'outputTableIds' => 'output_table_ids',
            'outputTableNames' => 'output_table_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alertRuleName  Alert rule name 告警规则名称
    * description  Alert rule description 告警规则描述
    * directory  directory 目录分组
    * script  Job Script 作业脚本
    * status  status
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * environment  environment
    * jobOutputSetting  jobOutputSetting
    * outputTableId  UUID
    * outputTableName  表名
    * cuQuotaAmount  数量
    * outputTableIds  输出表id列表
    * outputTableNames  输出表名称列表
    *
    * @var string[]
    */
    protected static $setters = [
            'alertRuleName' => 'setAlertRuleName',
            'description' => 'setDescription',
            'directory' => 'setDirectory',
            'script' => 'setScript',
            'status' => 'setStatus',
            'jobMode' => 'setJobMode',
            'jobModeSetting' => 'setJobModeSetting',
            'environment' => 'setEnvironment',
            'jobOutputSetting' => 'setJobOutputSetting',
            'outputTableId' => 'setOutputTableId',
            'outputTableName' => 'setOutputTableName',
            'cuQuotaAmount' => 'setCuQuotaAmount',
            'outputTableIds' => 'setOutputTableIds',
            'outputTableNames' => 'setOutputTableNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alertRuleName  Alert rule name 告警规则名称
    * description  Alert rule description 告警规则描述
    * directory  directory 目录分组
    * script  Job Script 作业脚本
    * status  status
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * environment  environment
    * jobOutputSetting  jobOutputSetting
    * outputTableId  UUID
    * outputTableName  表名
    * cuQuotaAmount  数量
    * outputTableIds  输出表id列表
    * outputTableNames  输出表名称列表
    *
    * @var string[]
    */
    protected static $getters = [
            'alertRuleName' => 'getAlertRuleName',
            'description' => 'getDescription',
            'directory' => 'getDirectory',
            'script' => 'getScript',
            'status' => 'getStatus',
            'jobMode' => 'getJobMode',
            'jobModeSetting' => 'getJobModeSetting',
            'environment' => 'getEnvironment',
            'jobOutputSetting' => 'getJobOutputSetting',
            'outputTableId' => 'getOutputTableId',
            'outputTableName' => 'getOutputTableName',
            'cuQuotaAmount' => 'getCuQuotaAmount',
            'outputTableIds' => 'getOutputTableIds',
            'outputTableNames' => 'getOutputTableNames'
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
        $this->container['alertRuleName'] = isset($data['alertRuleName']) ? $data['alertRuleName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['script'] = isset($data['script']) ? $data['script'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['jobMode'] = isset($data['jobMode']) ? $data['jobMode'] : null;
        $this->container['jobModeSetting'] = isset($data['jobModeSetting']) ? $data['jobModeSetting'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['jobOutputSetting'] = isset($data['jobOutputSetting']) ? $data['jobOutputSetting'] : null;
        $this->container['outputTableId'] = isset($data['outputTableId']) ? $data['outputTableId'] : null;
        $this->container['outputTableName'] = isset($data['outputTableName']) ? $data['outputTableName'] : null;
        $this->container['cuQuotaAmount'] = isset($data['cuQuotaAmount']) ? $data['cuQuotaAmount'] : null;
        $this->container['outputTableIds'] = isset($data['outputTableIds']) ? $data['outputTableIds'] : null;
        $this->container['outputTableNames'] = isset($data['outputTableNames']) ? $data['outputTableNames'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alertRuleName'] === null) {
            $invalidProperties[] = "'alertRuleName' can't be null";
        }
            if ((mb_strlen($this->container['alertRuleName']) > 256)) {
                $invalidProperties[] = "invalid value for 'alertRuleName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['alertRuleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'alertRuleName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) > 256)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) < 1)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['script']) && (mb_strlen($this->container['script']) > 10240)) {
                $invalidProperties[] = "invalid value for 'script', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['script']) && (mb_strlen($this->container['script']) < 1)) {
                $invalidProperties[] = "invalid value for 'script', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['jobMode'] === null) {
            $invalidProperties[] = "'jobMode' can't be null";
        }
        if ($this->container['environment'] === null) {
            $invalidProperties[] = "'environment' can't be null";
        }
        if ($this->container['outputTableId'] === null) {
            $invalidProperties[] = "'outputTableId' can't be null";
        }
            if ((mb_strlen($this->container['outputTableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'outputTableId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['outputTableId']) < 36)) {
                $invalidProperties[] = "invalid value for 'outputTableId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['outputTableName']) && (mb_strlen($this->container['outputTableName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'outputTableName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['outputTableName']) && (mb_strlen($this->container['outputTableName']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputTableName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['cuQuotaAmount'] === null) {
            $invalidProperties[] = "'cuQuotaAmount' can't be null";
        }
            if (($this->container['cuQuotaAmount'] > 999999999999)) {
                $invalidProperties[] = "invalid value for 'cuQuotaAmount', must be smaller than or equal to 999999999999.";
            }
            if (($this->container['cuQuotaAmount'] < 0)) {
                $invalidProperties[] = "invalid value for 'cuQuotaAmount', must be bigger than or equal to 0.";
            }
        if ($this->container['outputTableIds'] === null) {
            $invalidProperties[] = "'outputTableIds' can't be null";
        }
        if ($this->container['outputTableNames'] === null) {
            $invalidProperties[] = "'outputTableNames' can't be null";
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
    * Gets alertRuleName
    *  Alert rule name 告警规则名称
    *
    * @return string
    */
    public function getAlertRuleName()
    {
        return $this->container['alertRuleName'];
    }

    /**
    * Sets alertRuleName
    *
    * @param string $alertRuleName Alert rule name 告警规则名称
    *
    * @return $this
    */
    public function setAlertRuleName($alertRuleName)
    {
        $this->container['alertRuleName'] = $alertRuleName;
        return $this;
    }

    /**
    * Gets description
    *  Alert rule description 告警规则描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description Alert rule description 告警规则描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\JobStatus
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\JobStatus $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets jobMode
    *  jobMode
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobMode
    */
    public function getJobMode()
    {
        return $this->container['jobMode'];
    }

    /**
    * Sets jobMode
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobMode $jobMode jobMode
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
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobModeSettingDto|null
    */
    public function getJobModeSetting()
    {
        return $this->container['jobModeSetting'];
    }

    /**
    * Sets jobModeSetting
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobModeSettingDto|null $jobModeSetting jobModeSetting
    *
    * @return $this
    */
    public function setJobModeSetting($jobModeSetting)
    {
        $this->container['jobModeSetting'] = $jobModeSetting;
        return $this;
    }

    /**
    * Gets environment
    *  environment
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\JobEnvironment
    */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
    * Sets environment
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\JobEnvironment $environment environment
    *
    * @return $this
    */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;
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
    * Gets outputTableId
    *  UUID
    *
    * @return string
    */
    public function getOutputTableId()
    {
        return $this->container['outputTableId'];
    }

    /**
    * Sets outputTableId
    *
    * @param string $outputTableId UUID
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
    *  表名
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
    * @param string|null $outputTableName 表名
    *
    * @return $this
    */
    public function setOutputTableName($outputTableName)
    {
        $this->container['outputTableName'] = $outputTableName;
        return $this;
    }

    /**
    * Gets cuQuotaAmount
    *  数量
    *
    * @return float
    */
    public function getCuQuotaAmount()
    {
        return $this->container['cuQuotaAmount'];
    }

    /**
    * Sets cuQuotaAmount
    *
    * @param float $cuQuotaAmount 数量
    *
    * @return $this
    */
    public function setCuQuotaAmount($cuQuotaAmount)
    {
        $this->container['cuQuotaAmount'] = $cuQuotaAmount;
        return $this;
    }

    /**
    * Gets outputTableIds
    *  输出表id列表
    *
    * @return string[]
    */
    public function getOutputTableIds()
    {
        return $this->container['outputTableIds'];
    }

    /**
    * Sets outputTableIds
    *
    * @param string[] $outputTableIds 输出表id列表
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
    * @return string[]
    */
    public function getOutputTableNames()
    {
        return $this->container['outputTableNames'];
    }

    /**
    * Sets outputTableNames
    *
    * @param string[] $outputTableNames 输出表名称列表
    *
    * @return $this
    */
    public function setOutputTableNames($outputTableNames)
    {
        $this->container['outputTableNames'] = $outputTableNames;
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


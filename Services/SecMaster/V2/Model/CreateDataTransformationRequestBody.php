<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDataTransformationRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDataTransformationRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataTransformationName  数据转换名称
    * description  数据转换描述
    * directory  directory 目录分组
    * script  Job Script 作业脚本
    * status  status
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * environment  environment
    * outputTableId  UUID
    * belong  归属
    * cuQuotaAmount  数量
    * inputTableId  输入表ID
    * inputTableNames  输入表名称列表
    * outputTableIds  输出表ID列表
    * outputTableNames  输出表名称列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataTransformationName' => 'string',
            'description' => 'string',
            'directory' => 'string',
            'script' => 'string',
            'status' => '\HuaweiCloud\SDK\SecMaster\V2\Model\JobStatus',
            'jobMode' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobMode',
            'jobModeSetting' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobModeSettingDto',
            'environment' => '\HuaweiCloud\SDK\SecMaster\V2\Model\JobEnvironment',
            'outputTableId' => 'string',
            'belong' => 'string',
            'cuQuotaAmount' => 'float',
            'inputTableId' => 'string[]',
            'inputTableNames' => 'string[]',
            'outputTableIds' => 'string[]',
            'outputTableNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataTransformationName  数据转换名称
    * description  数据转换描述
    * directory  directory 目录分组
    * script  Job Script 作业脚本
    * status  status
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * environment  environment
    * outputTableId  UUID
    * belong  归属
    * cuQuotaAmount  数量
    * inputTableId  输入表ID
    * inputTableNames  输入表名称列表
    * outputTableIds  输出表ID列表
    * outputTableNames  输出表名称列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataTransformationName' => null,
        'description' => null,
        'directory' => null,
        'script' => null,
        'status' => null,
        'jobMode' => null,
        'jobModeSetting' => null,
        'environment' => null,
        'outputTableId' => null,
        'belong' => null,
        'cuQuotaAmount' => 'float',
        'inputTableId' => null,
        'inputTableNames' => null,
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
    * dataTransformationName  数据转换名称
    * description  数据转换描述
    * directory  directory 目录分组
    * script  Job Script 作业脚本
    * status  status
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * environment  environment
    * outputTableId  UUID
    * belong  归属
    * cuQuotaAmount  数量
    * inputTableId  输入表ID
    * inputTableNames  输入表名称列表
    * outputTableIds  输出表ID列表
    * outputTableNames  输出表名称列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataTransformationName' => 'data_transformation_name',
            'description' => 'description',
            'directory' => 'directory',
            'script' => 'script',
            'status' => 'status',
            'jobMode' => 'job_mode',
            'jobModeSetting' => 'job_mode_setting',
            'environment' => 'environment',
            'outputTableId' => 'output_table_id',
            'belong' => 'belong',
            'cuQuotaAmount' => 'cu_quota_amount',
            'inputTableId' => 'input_table_id',
            'inputTableNames' => 'input_table_names',
            'outputTableIds' => 'output_table_ids',
            'outputTableNames' => 'output_table_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataTransformationName  数据转换名称
    * description  数据转换描述
    * directory  directory 目录分组
    * script  Job Script 作业脚本
    * status  status
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * environment  environment
    * outputTableId  UUID
    * belong  归属
    * cuQuotaAmount  数量
    * inputTableId  输入表ID
    * inputTableNames  输入表名称列表
    * outputTableIds  输出表ID列表
    * outputTableNames  输出表名称列表
    *
    * @var string[]
    */
    protected static $setters = [
            'dataTransformationName' => 'setDataTransformationName',
            'description' => 'setDescription',
            'directory' => 'setDirectory',
            'script' => 'setScript',
            'status' => 'setStatus',
            'jobMode' => 'setJobMode',
            'jobModeSetting' => 'setJobModeSetting',
            'environment' => 'setEnvironment',
            'outputTableId' => 'setOutputTableId',
            'belong' => 'setBelong',
            'cuQuotaAmount' => 'setCuQuotaAmount',
            'inputTableId' => 'setInputTableId',
            'inputTableNames' => 'setInputTableNames',
            'outputTableIds' => 'setOutputTableIds',
            'outputTableNames' => 'setOutputTableNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataTransformationName  数据转换名称
    * description  数据转换描述
    * directory  directory 目录分组
    * script  Job Script 作业脚本
    * status  status
    * jobMode  jobMode
    * jobModeSetting  jobModeSetting
    * environment  environment
    * outputTableId  UUID
    * belong  归属
    * cuQuotaAmount  数量
    * inputTableId  输入表ID
    * inputTableNames  输入表名称列表
    * outputTableIds  输出表ID列表
    * outputTableNames  输出表名称列表
    *
    * @var string[]
    */
    protected static $getters = [
            'dataTransformationName' => 'getDataTransformationName',
            'description' => 'getDescription',
            'directory' => 'getDirectory',
            'script' => 'getScript',
            'status' => 'getStatus',
            'jobMode' => 'getJobMode',
            'jobModeSetting' => 'getJobModeSetting',
            'environment' => 'getEnvironment',
            'outputTableId' => 'getOutputTableId',
            'belong' => 'getBelong',
            'cuQuotaAmount' => 'getCuQuotaAmount',
            'inputTableId' => 'getInputTableId',
            'inputTableNames' => 'getInputTableNames',
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
        $this->container['dataTransformationName'] = isset($data['dataTransformationName']) ? $data['dataTransformationName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['script'] = isset($data['script']) ? $data['script'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['jobMode'] = isset($data['jobMode']) ? $data['jobMode'] : null;
        $this->container['jobModeSetting'] = isset($data['jobModeSetting']) ? $data['jobModeSetting'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['outputTableId'] = isset($data['outputTableId']) ? $data['outputTableId'] : null;
        $this->container['belong'] = isset($data['belong']) ? $data['belong'] : null;
        $this->container['cuQuotaAmount'] = isset($data['cuQuotaAmount']) ? $data['cuQuotaAmount'] : null;
        $this->container['inputTableId'] = isset($data['inputTableId']) ? $data['inputTableId'] : null;
        $this->container['inputTableNames'] = isset($data['inputTableNames']) ? $data['inputTableNames'] : null;
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
        if ($this->container['dataTransformationName'] === null) {
            $invalidProperties[] = "'dataTransformationName' can't be null";
        }
            if ((mb_strlen($this->container['dataTransformationName']) > 256)) {
                $invalidProperties[] = "invalid value for 'dataTransformationName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['dataTransformationName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataTransformationName', the character length must be bigger than or equal to 1.";
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
        if ($this->container['script'] === null) {
            $invalidProperties[] = "'script' can't be null";
        }
            if ((mb_strlen($this->container['script']) > 10240)) {
                $invalidProperties[] = "invalid value for 'script', the character length must be smaller than or equal to 10240.";
            }
            if ((mb_strlen($this->container['script']) < 1)) {
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
            if (!is_null($this->container['outputTableId']) && (mb_strlen($this->container['outputTableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'outputTableId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['outputTableId']) && (mb_strlen($this->container['outputTableId']) < 36)) {
                $invalidProperties[] = "invalid value for 'outputTableId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['belong']) && (mb_strlen($this->container['belong']) > 256)) {
                $invalidProperties[] = "invalid value for 'belong', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['belong']) && (mb_strlen($this->container['belong']) < 1)) {
                $invalidProperties[] = "invalid value for 'belong', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['cuQuotaAmount'] === null) {
            $invalidProperties[] = "'cuQuotaAmount' can't be null";
        }
            if (($this->container['cuQuotaAmount'] > 99999)) {
                $invalidProperties[] = "invalid value for 'cuQuotaAmount', must be smaller than or equal to 99999.";
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
    * Gets dataTransformationName
    *  数据转换名称
    *
    * @return string
    */
    public function getDataTransformationName()
    {
        return $this->container['dataTransformationName'];
    }

    /**
    * Sets dataTransformationName
    *
    * @param string $dataTransformationName 数据转换名称
    *
    * @return $this
    */
    public function setDataTransformationName($dataTransformationName)
    {
        $this->container['dataTransformationName'] = $dataTransformationName;
        return $this;
    }

    /**
    * Gets description
    *  数据转换描述
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
    * @param string $description 数据转换描述
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
    * @return string
    */
    public function getScript()
    {
        return $this->container['script'];
    }

    /**
    * Sets script
    *
    * @param string $script Job Script 作业脚本
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
    * Gets belong
    *  归属
    *
    * @return string|null
    */
    public function getBelong()
    {
        return $this->container['belong'];
    }

    /**
    * Sets belong
    *
    * @param string|null $belong 归属
    *
    * @return $this
    */
    public function setBelong($belong)
    {
        $this->container['belong'] = $belong;
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
    * Gets inputTableId
    *  输入表ID
    *
    * @return string[]|null
    */
    public function getInputTableId()
    {
        return $this->container['inputTableId'];
    }

    /**
    * Sets inputTableId
    *
    * @param string[]|null $inputTableId 输入表ID
    *
    * @return $this
    */
    public function setInputTableId($inputTableId)
    {
        $this->container['inputTableId'] = $inputTableId;
        return $this;
    }

    /**
    * Gets inputTableNames
    *  输入表名称列表
    *
    * @return string[]|null
    */
    public function getInputTableNames()
    {
        return $this->container['inputTableNames'];
    }

    /**
    * Sets inputTableNames
    *
    * @param string[]|null $inputTableNames 输入表名称列表
    *
    * @return $this
    */
    public function setInputTableNames($inputTableNames)
    {
        $this->container['inputTableNames'] = $inputTableNames;
        return $this;
    }

    /**
    * Gets outputTableIds
    *  输出表ID列表
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
    * @param string[] $outputTableIds 输出表ID列表
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


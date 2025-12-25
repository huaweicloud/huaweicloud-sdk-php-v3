<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataTransformationItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataTransformationItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataTransformationId  UUID
    * dataTransformationName  数据转换名称
    * script  Job Script 作业脚本
    * status  status
    * directory  directory 目录分组
    * description  数据转换描述
    * jobMode  jobMode
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
            'dataTransformationId' => 'string',
            'dataTransformationName' => 'string',
            'script' => 'string',
            'status' => '\HuaweiCloud\SDK\SecMaster\V2\Model\JobStatus',
            'directory' => 'string',
            'description' => 'string',
            'jobMode' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobMode',
            'processStatus' => '\HuaweiCloud\SDK\SecMaster\V2\Model\JobProcessStatus',
            'processError' => '\HuaweiCloud\SDK\SecMaster\V2\Model\DataTransformationProcessError',
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
    * dataTransformationId  UUID
    * dataTransformationName  数据转换名称
    * script  Job Script 作业脚本
    * status  status
    * directory  directory 目录分组
    * description  数据转换描述
    * jobMode  jobMode
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
        'dataTransformationId' => null,
        'dataTransformationName' => null,
        'script' => null,
        'status' => null,
        'directory' => null,
        'description' => null,
        'jobMode' => null,
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
    * dataTransformationId  UUID
    * dataTransformationName  数据转换名称
    * script  Job Script 作业脚本
    * status  status
    * directory  directory 目录分组
    * description  数据转换描述
    * jobMode  jobMode
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
            'dataTransformationId' => 'data_transformation_id',
            'dataTransformationName' => 'data_transformation_name',
            'script' => 'script',
            'status' => 'status',
            'directory' => 'directory',
            'description' => 'description',
            'jobMode' => 'job_mode',
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
    * dataTransformationId  UUID
    * dataTransformationName  数据转换名称
    * script  Job Script 作业脚本
    * status  status
    * directory  directory 目录分组
    * description  数据转换描述
    * jobMode  jobMode
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
            'dataTransformationId' => 'setDataTransformationId',
            'dataTransformationName' => 'setDataTransformationName',
            'script' => 'setScript',
            'status' => 'setStatus',
            'directory' => 'setDirectory',
            'description' => 'setDescription',
            'jobMode' => 'setJobMode',
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
    * dataTransformationId  UUID
    * dataTransformationName  数据转换名称
    * script  Job Script 作业脚本
    * status  status
    * directory  directory 目录分组
    * description  数据转换描述
    * jobMode  jobMode
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
            'dataTransformationId' => 'getDataTransformationId',
            'dataTransformationName' => 'getDataTransformationName',
            'script' => 'getScript',
            'status' => 'getStatus',
            'directory' => 'getDirectory',
            'description' => 'getDescription',
            'jobMode' => 'getJobMode',
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
        $this->container['dataTransformationId'] = isset($data['dataTransformationId']) ? $data['dataTransformationId'] : null;
        $this->container['dataTransformationName'] = isset($data['dataTransformationName']) ? $data['dataTransformationName'] : null;
        $this->container['script'] = isset($data['script']) ? $data['script'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['jobMode'] = isset($data['jobMode']) ? $data['jobMode'] : null;
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
        if ($this->container['dataTransformationId'] === null) {
            $invalidProperties[] = "'dataTransformationId' can't be null";
        }
            if ((mb_strlen($this->container['dataTransformationId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataTransformationId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['dataTransformationId']) < 36)) {
                $invalidProperties[] = "invalid value for 'dataTransformationId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['dataTransformationName'] === null) {
            $invalidProperties[] = "'dataTransformationName' can't be null";
        }
            if ((mb_strlen($this->container['dataTransformationName']) > 256)) {
                $invalidProperties[] = "invalid value for 'dataTransformationName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['dataTransformationName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataTransformationName', the character length must be bigger than or equal to 1.";
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
        if ($this->container['jobMode'] === null) {
            $invalidProperties[] = "'jobMode' can't be null";
        }
        if ($this->container['processStatus'] === null) {
            $invalidProperties[] = "'processStatus' can't be null";
        }
        if ($this->container['processError'] === null) {
            $invalidProperties[] = "'processError' can't be null";
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
        if ($this->container['outputTableName'] === null) {
            $invalidProperties[] = "'outputTableName' can't be null";
        }
            if ((mb_strlen($this->container['outputTableName']) > 64)) {
                $invalidProperties[] = "invalid value for 'outputTableName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['outputTableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'outputTableName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^(?!_)[a-zA-Z][a-zA-Z0-9_]*(?<!_)$/", $this->container['outputTableName'])) {
                $invalidProperties[] = "invalid value for 'outputTableName', must be conform to the pattern /^(?!_)[a-zA-Z][a-zA-Z0-9_]*(?<!_)$/.";
            }
        if ($this->container['outputTableIds'] === null) {
            $invalidProperties[] = "'outputTableIds' can't be null";
        }
        if ($this->container['outputTableNames'] === null) {
            $invalidProperties[] = "'outputTableNames' can't be null";
        }
        if ($this->container['createBy'] === null) {
            $invalidProperties[] = "'createBy' can't be null";
        }
            if ((mb_strlen($this->container['createBy']) > 256)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['createBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
            if (($this->container['createTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 2366841600000.";
            }
            if (($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
        if ($this->container['updateBy'] === null) {
            $invalidProperties[] = "'updateBy' can't be null";
        }
            if ((mb_strlen($this->container['updateBy']) > 256)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['updateBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
            if (($this->container['updateTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 2366841600000.";
            }
            if (($this->container['updateTime'] < 0)) {
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
    * Gets dataTransformationId
    *  UUID
    *
    * @return string
    */
    public function getDataTransformationId()
    {
        return $this->container['dataTransformationId'];
    }

    /**
    * Sets dataTransformationId
    *
    * @param string $dataTransformationId UUID
    *
    * @return $this
    */
    public function setDataTransformationId($dataTransformationId)
    {
        $this->container['dataTransformationId'] = $dataTransformationId;
        return $this;
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
    *  数据转换描述
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
    * @param string|null $description 数据转换描述
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
    * Gets processStatus
    *  processStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\JobProcessStatus
    */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
    * Sets processStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\JobProcessStatus $processStatus processStatus
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
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\DataTransformationProcessError
    */
    public function getProcessError()
    {
        return $this->container['processError'];
    }

    /**
    * Sets processError
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\DataTransformationProcessError $processError processError
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
    *  表名称
    *
    * @return string
    */
    public function getOutputTableName()
    {
        return $this->container['outputTableName'];
    }

    /**
    * Sets outputTableName
    *
    * @param string $outputTableName 表名称
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
    * Gets createBy
    *  创建者
    *
    * @return string
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string $createBy 创建者
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
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 毫秒时间戳
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
    * @return string
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string $updateBy 更新者
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
    * @return int
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int $updateTime 毫秒时间戳
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


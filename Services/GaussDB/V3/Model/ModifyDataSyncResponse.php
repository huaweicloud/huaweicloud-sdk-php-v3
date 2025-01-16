<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyDataSyncResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyDataSyncResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceDatabaseName  **参数解释**：  TaurusDB数据库名。  **取值范围**：  长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。
    * targetDatabaseName  **参数解释**：  目标数据库名。  **取值范围**：  长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。
    * sourceDbConfigCheckResults  **参数解释**：  TaurusDB数据库配置检查结果。  **取值范围**：  不涉及。
    * tblConfigCheckResults  **参数解释**：  表配置检查结果。  **取值范围**：  不涉及。
    * taskName  **参数解释**：  同步任务名称。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。
    * jobId  **参数解释**：  修改同步配置工作流ID。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceDatabaseName' => 'string',
            'targetDatabaseName' => 'string',
            'sourceDbConfigCheckResults' => '\HuaweiCloud\SDK\GaussDB\V3\Model\DbConfigCheckResult[]',
            'tblConfigCheckResults' => '\HuaweiCloud\SDK\GaussDB\V3\Model\TableConfigCheckResult[]',
            'taskName' => 'string',
            'jobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceDatabaseName  **参数解释**：  TaurusDB数据库名。  **取值范围**：  长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。
    * targetDatabaseName  **参数解释**：  目标数据库名。  **取值范围**：  长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。
    * sourceDbConfigCheckResults  **参数解释**：  TaurusDB数据库配置检查结果。  **取值范围**：  不涉及。
    * tblConfigCheckResults  **参数解释**：  表配置检查结果。  **取值范围**：  不涉及。
    * taskName  **参数解释**：  同步任务名称。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。
    * jobId  **参数解释**：  修改同步配置工作流ID。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceDatabaseName' => null,
        'targetDatabaseName' => null,
        'sourceDbConfigCheckResults' => null,
        'tblConfigCheckResults' => null,
        'taskName' => null,
        'jobId' => null
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
    * sourceDatabaseName  **参数解释**：  TaurusDB数据库名。  **取值范围**：  长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。
    * targetDatabaseName  **参数解释**：  目标数据库名。  **取值范围**：  长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。
    * sourceDbConfigCheckResults  **参数解释**：  TaurusDB数据库配置检查结果。  **取值范围**：  不涉及。
    * tblConfigCheckResults  **参数解释**：  表配置检查结果。  **取值范围**：  不涉及。
    * taskName  **参数解释**：  同步任务名称。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。
    * jobId  **参数解释**：  修改同步配置工作流ID。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceDatabaseName' => 'source_database_name',
            'targetDatabaseName' => 'target_database_name',
            'sourceDbConfigCheckResults' => 'source_db_config_check_results',
            'tblConfigCheckResults' => 'tbl_config_check_results',
            'taskName' => 'task_name',
            'jobId' => 'job_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceDatabaseName  **参数解释**：  TaurusDB数据库名。  **取值范围**：  长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。
    * targetDatabaseName  **参数解释**：  目标数据库名。  **取值范围**：  长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。
    * sourceDbConfigCheckResults  **参数解释**：  TaurusDB数据库配置检查结果。  **取值范围**：  不涉及。
    * tblConfigCheckResults  **参数解释**：  表配置检查结果。  **取值范围**：  不涉及。
    * taskName  **参数解释**：  同步任务名称。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。
    * jobId  **参数解释**：  修改同步配置工作流ID。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceDatabaseName' => 'setSourceDatabaseName',
            'targetDatabaseName' => 'setTargetDatabaseName',
            'sourceDbConfigCheckResults' => 'setSourceDbConfigCheckResults',
            'tblConfigCheckResults' => 'setTblConfigCheckResults',
            'taskName' => 'setTaskName',
            'jobId' => 'setJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceDatabaseName  **参数解释**：  TaurusDB数据库名。  **取值范围**：  长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。
    * targetDatabaseName  **参数解释**：  目标数据库名。  **取值范围**：  长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。
    * sourceDbConfigCheckResults  **参数解释**：  TaurusDB数据库配置检查结果。  **取值范围**：  不涉及。
    * tblConfigCheckResults  **参数解释**：  表配置检查结果。  **取值范围**：  不涉及。
    * taskName  **参数解释**：  同步任务名称。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。
    * jobId  **参数解释**：  修改同步配置工作流ID。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceDatabaseName' => 'getSourceDatabaseName',
            'targetDatabaseName' => 'getTargetDatabaseName',
            'sourceDbConfigCheckResults' => 'getSourceDbConfigCheckResults',
            'tblConfigCheckResults' => 'getTblConfigCheckResults',
            'taskName' => 'getTaskName',
            'jobId' => 'getJobId'
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
        $this->container['sourceDatabaseName'] = isset($data['sourceDatabaseName']) ? $data['sourceDatabaseName'] : null;
        $this->container['targetDatabaseName'] = isset($data['targetDatabaseName']) ? $data['targetDatabaseName'] : null;
        $this->container['sourceDbConfigCheckResults'] = isset($data['sourceDbConfigCheckResults']) ? $data['sourceDbConfigCheckResults'] : null;
        $this->container['tblConfigCheckResults'] = isset($data['tblConfigCheckResults']) ? $data['tblConfigCheckResults'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
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
    * Gets sourceDatabaseName
    *  **参数解释**：  TaurusDB数据库名。  **取值范围**：  长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。
    *
    * @return string|null
    */
    public function getSourceDatabaseName()
    {
        return $this->container['sourceDatabaseName'];
    }

    /**
    * Sets sourceDatabaseName
    *
    * @param string|null $sourceDatabaseName **参数解释**：  TaurusDB数据库名。  **取值范围**：  长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。
    *
    * @return $this
    */
    public function setSourceDatabaseName($sourceDatabaseName)
    {
        $this->container['sourceDatabaseName'] = $sourceDatabaseName;
        return $this;
    }

    /**
    * Gets targetDatabaseName
    *  **参数解释**：  目标数据库名。  **取值范围**：  长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。
    *
    * @return string|null
    */
    public function getTargetDatabaseName()
    {
        return $this->container['targetDatabaseName'];
    }

    /**
    * Sets targetDatabaseName
    *
    * @param string|null $targetDatabaseName **参数解释**：  目标数据库名。  **取值范围**：  长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。
    *
    * @return $this
    */
    public function setTargetDatabaseName($targetDatabaseName)
    {
        $this->container['targetDatabaseName'] = $targetDatabaseName;
        return $this;
    }

    /**
    * Gets sourceDbConfigCheckResults
    *  **参数解释**：  TaurusDB数据库配置检查结果。  **取值范围**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\DbConfigCheckResult[]|null
    */
    public function getSourceDbConfigCheckResults()
    {
        return $this->container['sourceDbConfigCheckResults'];
    }

    /**
    * Sets sourceDbConfigCheckResults
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\DbConfigCheckResult[]|null $sourceDbConfigCheckResults **参数解释**：  TaurusDB数据库配置检查结果。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setSourceDbConfigCheckResults($sourceDbConfigCheckResults)
    {
        $this->container['sourceDbConfigCheckResults'] = $sourceDbConfigCheckResults;
        return $this;
    }

    /**
    * Gets tblConfigCheckResults
    *  **参数解释**：  表配置检查结果。  **取值范围**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\TableConfigCheckResult[]|null
    */
    public function getTblConfigCheckResults()
    {
        return $this->container['tblConfigCheckResults'];
    }

    /**
    * Sets tblConfigCheckResults
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\TableConfigCheckResult[]|null $tblConfigCheckResults **参数解释**：  表配置检查结果。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setTblConfigCheckResults($tblConfigCheckResults)
    {
        $this->container['tblConfigCheckResults'] = $tblConfigCheckResults;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数解释**：  同步任务名称。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。
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
    * @param string|null $taskName **参数解释**：  同步任务名称。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets jobId
    *  **参数解释**：  修改同步配置工作流ID。  **取值范围**：  不涉及。
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
    * @param string|null $jobId **参数解释**：  修改同步配置工作流ID。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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


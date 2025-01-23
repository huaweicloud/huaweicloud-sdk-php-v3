<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckDataBaseConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckDataBaseConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceDatabaseName  TaurusDB数据库名称。
    * sourceDbConfigCheckResults  TaurusDB数据库配置检查结果。
    * targetDatabaseName  目标数据库名称。
    * targetDbConfigCheckResults  目标数据库配置检查结果。
    * taskName  同步任务名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceDatabaseName' => 'string',
            'sourceDbConfigCheckResults' => '\HuaweiCloud\SDK\GaussDB\V3\Model\DbConfigCheckResult[]',
            'targetDatabaseName' => 'string',
            'targetDbConfigCheckResults' => '\HuaweiCloud\SDK\GaussDB\V3\Model\DbConfigCheckResult[]',
            'taskName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceDatabaseName  TaurusDB数据库名称。
    * sourceDbConfigCheckResults  TaurusDB数据库配置检查结果。
    * targetDatabaseName  目标数据库名称。
    * targetDbConfigCheckResults  目标数据库配置检查结果。
    * taskName  同步任务名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceDatabaseName' => null,
        'sourceDbConfigCheckResults' => null,
        'targetDatabaseName' => null,
        'targetDbConfigCheckResults' => null,
        'taskName' => null
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
    * sourceDatabaseName  TaurusDB数据库名称。
    * sourceDbConfigCheckResults  TaurusDB数据库配置检查结果。
    * targetDatabaseName  目标数据库名称。
    * targetDbConfigCheckResults  目标数据库配置检查结果。
    * taskName  同步任务名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceDatabaseName' => 'source_database_name',
            'sourceDbConfigCheckResults' => 'source_db_config_check_results',
            'targetDatabaseName' => 'target_database_name',
            'targetDbConfigCheckResults' => 'target_db_config_check_results',
            'taskName' => 'task_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceDatabaseName  TaurusDB数据库名称。
    * sourceDbConfigCheckResults  TaurusDB数据库配置检查结果。
    * targetDatabaseName  目标数据库名称。
    * targetDbConfigCheckResults  目标数据库配置检查结果。
    * taskName  同步任务名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceDatabaseName' => 'setSourceDatabaseName',
            'sourceDbConfigCheckResults' => 'setSourceDbConfigCheckResults',
            'targetDatabaseName' => 'setTargetDatabaseName',
            'targetDbConfigCheckResults' => 'setTargetDbConfigCheckResults',
            'taskName' => 'setTaskName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceDatabaseName  TaurusDB数据库名称。
    * sourceDbConfigCheckResults  TaurusDB数据库配置检查结果。
    * targetDatabaseName  目标数据库名称。
    * targetDbConfigCheckResults  目标数据库配置检查结果。
    * taskName  同步任务名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceDatabaseName' => 'getSourceDatabaseName',
            'sourceDbConfigCheckResults' => 'getSourceDbConfigCheckResults',
            'targetDatabaseName' => 'getTargetDatabaseName',
            'targetDbConfigCheckResults' => 'getTargetDbConfigCheckResults',
            'taskName' => 'getTaskName'
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
        $this->container['sourceDbConfigCheckResults'] = isset($data['sourceDbConfigCheckResults']) ? $data['sourceDbConfigCheckResults'] : null;
        $this->container['targetDatabaseName'] = isset($data['targetDatabaseName']) ? $data['targetDatabaseName'] : null;
        $this->container['targetDbConfigCheckResults'] = isset($data['targetDbConfigCheckResults']) ? $data['targetDbConfigCheckResults'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sourceDatabaseName']) && (mb_strlen($this->container['sourceDatabaseName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sourceDatabaseName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sourceDatabaseName']) && (mb_strlen($this->container['sourceDatabaseName']) < 2)) {
                $invalidProperties[] = "invalid value for 'sourceDatabaseName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['targetDatabaseName']) && (mb_strlen($this->container['targetDatabaseName']) > 128)) {
                $invalidProperties[] = "invalid value for 'targetDatabaseName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['targetDatabaseName']) && (mb_strlen($this->container['targetDatabaseName']) < 3)) {
                $invalidProperties[] = "invalid value for 'targetDatabaseName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 3)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 3.";
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
    * Gets sourceDatabaseName
    *  TaurusDB数据库名称。
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
    * @param string|null $sourceDatabaseName TaurusDB数据库名称。
    *
    * @return $this
    */
    public function setSourceDatabaseName($sourceDatabaseName)
    {
        $this->container['sourceDatabaseName'] = $sourceDatabaseName;
        return $this;
    }

    /**
    * Gets sourceDbConfigCheckResults
    *  TaurusDB数据库配置检查结果。
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
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\DbConfigCheckResult[]|null $sourceDbConfigCheckResults TaurusDB数据库配置检查结果。
    *
    * @return $this
    */
    public function setSourceDbConfigCheckResults($sourceDbConfigCheckResults)
    {
        $this->container['sourceDbConfigCheckResults'] = $sourceDbConfigCheckResults;
        return $this;
    }

    /**
    * Gets targetDatabaseName
    *  目标数据库名称。
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
    * @param string|null $targetDatabaseName 目标数据库名称。
    *
    * @return $this
    */
    public function setTargetDatabaseName($targetDatabaseName)
    {
        $this->container['targetDatabaseName'] = $targetDatabaseName;
        return $this;
    }

    /**
    * Gets targetDbConfigCheckResults
    *  目标数据库配置检查结果。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\DbConfigCheckResult[]|null
    */
    public function getTargetDbConfigCheckResults()
    {
        return $this->container['targetDbConfigCheckResults'];
    }

    /**
    * Sets targetDbConfigCheckResults
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\DbConfigCheckResult[]|null $targetDbConfigCheckResults 目标数据库配置检查结果。
    *
    * @return $this
    */
    public function setTargetDbConfigCheckResults($targetDbConfigCheckResults)
    {
        $this->container['targetDbConfigCheckResults'] = $targetDbConfigCheckResults;
        return $this;
    }

    /**
    * Gets taskName
    *  同步任务名称。
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
    * @param string|null $taskName 同步任务名称。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
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


<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SensitiveDataDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SensitiveDataDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  唯一标识，自动生成的ID。
    * clusterName  集群名称。
    * databaseName  数据库名。
    * schemaName  模式名。
    * tableName  表名称。
    * columnName  字段名称。
    * ruleId  规则id。
    * activeFlag  是否有效。1:有效 2:无效 3:待确认。
    * classificationId  数据密级id。
    * categoryId  分类ID。
    * syncTime  同步时间。
    * findTime  最后发现时间。
    * taskId  任务id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'clusterName' => 'string',
            'databaseName' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string',
            'columnName' => 'string',
            'ruleId' => 'string',
            'activeFlag' => 'int',
            'classificationId' => 'string',
            'categoryId' => 'string',
            'syncTime' => 'int',
            'findTime' => 'int',
            'taskId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  唯一标识，自动生成的ID。
    * clusterName  集群名称。
    * databaseName  数据库名。
    * schemaName  模式名。
    * tableName  表名称。
    * columnName  字段名称。
    * ruleId  规则id。
    * activeFlag  是否有效。1:有效 2:无效 3:待确认。
    * classificationId  数据密级id。
    * categoryId  分类ID。
    * syncTime  同步时间。
    * findTime  最后发现时间。
    * taskId  任务id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'clusterName' => null,
        'databaseName' => null,
        'schemaName' => null,
        'tableName' => null,
        'columnName' => null,
        'ruleId' => null,
        'activeFlag' => 'int32',
        'classificationId' => null,
        'categoryId' => null,
        'syncTime' => 'int64',
        'findTime' => 'int64',
        'taskId' => null
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
    * id  唯一标识，自动生成的ID。
    * clusterName  集群名称。
    * databaseName  数据库名。
    * schemaName  模式名。
    * tableName  表名称。
    * columnName  字段名称。
    * ruleId  规则id。
    * activeFlag  是否有效。1:有效 2:无效 3:待确认。
    * classificationId  数据密级id。
    * categoryId  分类ID。
    * syncTime  同步时间。
    * findTime  最后发现时间。
    * taskId  任务id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'clusterName' => 'cluster_name',
            'databaseName' => 'database_name',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name',
            'columnName' => 'column_name',
            'ruleId' => 'rule_id',
            'activeFlag' => 'active_flag',
            'classificationId' => 'classification_id',
            'categoryId' => 'category_id',
            'syncTime' => 'sync_time',
            'findTime' => 'find_time',
            'taskId' => 'task_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  唯一标识，自动生成的ID。
    * clusterName  集群名称。
    * databaseName  数据库名。
    * schemaName  模式名。
    * tableName  表名称。
    * columnName  字段名称。
    * ruleId  规则id。
    * activeFlag  是否有效。1:有效 2:无效 3:待确认。
    * classificationId  数据密级id。
    * categoryId  分类ID。
    * syncTime  同步时间。
    * findTime  最后发现时间。
    * taskId  任务id。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'clusterName' => 'setClusterName',
            'databaseName' => 'setDatabaseName',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName',
            'columnName' => 'setColumnName',
            'ruleId' => 'setRuleId',
            'activeFlag' => 'setActiveFlag',
            'classificationId' => 'setClassificationId',
            'categoryId' => 'setCategoryId',
            'syncTime' => 'setSyncTime',
            'findTime' => 'setFindTime',
            'taskId' => 'setTaskId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  唯一标识，自动生成的ID。
    * clusterName  集群名称。
    * databaseName  数据库名。
    * schemaName  模式名。
    * tableName  表名称。
    * columnName  字段名称。
    * ruleId  规则id。
    * activeFlag  是否有效。1:有效 2:无效 3:待确认。
    * classificationId  数据密级id。
    * categoryId  分类ID。
    * syncTime  同步时间。
    * findTime  最后发现时间。
    * taskId  任务id。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'clusterName' => 'getClusterName',
            'databaseName' => 'getDatabaseName',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName',
            'columnName' => 'getColumnName',
            'ruleId' => 'getRuleId',
            'activeFlag' => 'getActiveFlag',
            'classificationId' => 'getClassificationId',
            'categoryId' => 'getCategoryId',
            'syncTime' => 'getSyncTime',
            'findTime' => 'getFindTime',
            'taskId' => 'getTaskId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['activeFlag'] = isset($data['activeFlag']) ? $data['activeFlag'] : null;
        $this->container['classificationId'] = isset($data['classificationId']) ? $data['classificationId'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['syncTime'] = isset($data['syncTime']) ? $data['syncTime'] : null;
        $this->container['findTime'] = isset($data['findTime']) ? $data['findTime'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) > 128)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) < 0)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) > 128)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) < 0)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 0)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) > 128)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) < 0)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) > 128)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['activeFlag']) && ($this->container['activeFlag'] > 3)) {
                $invalidProperties[] = "invalid value for 'activeFlag', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['activeFlag']) && ($this->container['activeFlag'] < 1)) {
                $invalidProperties[] = "invalid value for 'activeFlag', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['classificationId']) && (mb_strlen($this->container['classificationId']) > 128)) {
                $invalidProperties[] = "invalid value for 'classificationId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['classificationId']) && (mb_strlen($this->container['classificationId']) < 0)) {
                $invalidProperties[] = "invalid value for 'classificationId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['categoryId']) && (mb_strlen($this->container['categoryId']) > 128)) {
                $invalidProperties[] = "invalid value for 'categoryId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['categoryId']) && (mb_strlen($this->container['categoryId']) < 0)) {
                $invalidProperties[] = "invalid value for 'categoryId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['syncTime']) && ($this->container['syncTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'syncTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['syncTime']) && ($this->container['syncTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'syncTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['findTime']) && ($this->container['findTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'findTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['findTime']) && ($this->container['findTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'findTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 255)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  唯一标识，自动生成的ID。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 唯一标识，自动生成的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称。
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名。
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName 数据库名。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets schemaName
    *  模式名。
    *
    * @return string|null
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string|null $schemaName 模式名。
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets tableName
    *  表名称。
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
    * @param string|null $tableName 表名称。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets columnName
    *  字段名称。
    *
    * @return string|null
    */
    public function getColumnName()
    {
        return $this->container['columnName'];
    }

    /**
    * Sets columnName
    *
    * @param string|null $columnName 字段名称。
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets ruleId
    *  规则id。
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 规则id。
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets activeFlag
    *  是否有效。1:有效 2:无效 3:待确认。
    *
    * @return int|null
    */
    public function getActiveFlag()
    {
        return $this->container['activeFlag'];
    }

    /**
    * Sets activeFlag
    *
    * @param int|null $activeFlag 是否有效。1:有效 2:无效 3:待确认。
    *
    * @return $this
    */
    public function setActiveFlag($activeFlag)
    {
        $this->container['activeFlag'] = $activeFlag;
        return $this;
    }

    /**
    * Gets classificationId
    *  数据密级id。
    *
    * @return string|null
    */
    public function getClassificationId()
    {
        return $this->container['classificationId'];
    }

    /**
    * Sets classificationId
    *
    * @param string|null $classificationId 数据密级id。
    *
    * @return $this
    */
    public function setClassificationId($classificationId)
    {
        $this->container['classificationId'] = $classificationId;
        return $this;
    }

    /**
    * Gets categoryId
    *  分类ID。
    *
    * @return string|null
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param string|null $categoryId 分类ID。
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets syncTime
    *  同步时间。
    *
    * @return int|null
    */
    public function getSyncTime()
    {
        return $this->container['syncTime'];
    }

    /**
    * Sets syncTime
    *
    * @param int|null $syncTime 同步时间。
    *
    * @return $this
    */
    public function setSyncTime($syncTime)
    {
        $this->container['syncTime'] = $syncTime;
        return $this;
    }

    /**
    * Gets findTime
    *  最后发现时间。
    *
    * @return int|null
    */
    public function getFindTime()
    {
        return $this->container['findTime'];
    }

    /**
    * Sets findTime
    *
    * @param int|null $findTime 最后发现时间。
    *
    * @return $this
    */
    public function setFindTime($findTime)
    {
        $this->container['findTime'] = $findTime;
        return $this;
    }

    /**
    * Gets taskId
    *  任务id。
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
    * @param string|null $taskId 任务id。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
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


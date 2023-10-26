<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DbScanResultInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DbScanResultInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID
    * dbName  数据库名称
    * tableId  表ID
    * tableName  表名称
    * riskLevel  风险等级
    * sensitiveDataType  匹配到的规则
    * matchInfo  表中各列匹配到的规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'dbName' => 'string',
            'tableId' => 'string',
            'tableName' => 'string',
            'riskLevel' => 'int',
            'sensitiveDataType' => 'string[]',
            'matchInfo' => '\HuaweiCloud\SDK\Dsc\V1\Model\DbMatchInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID
    * dbName  数据库名称
    * tableId  表ID
    * tableName  表名称
    * riskLevel  风险等级
    * sensitiveDataType  匹配到的规则
    * matchInfo  表中各列匹配到的规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'dbName' => null,
        'tableId' => null,
        'tableName' => null,
        'riskLevel' => 'int32',
        'sensitiveDataType' => null,
        'matchInfo' => null
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
    * taskId  任务ID
    * dbName  数据库名称
    * tableId  表ID
    * tableName  表名称
    * riskLevel  风险等级
    * sensitiveDataType  匹配到的规则
    * matchInfo  表中各列匹配到的规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'dbName' => 'db_name',
            'tableId' => 'table_id',
            'tableName' => 'table_name',
            'riskLevel' => 'risk_level',
            'sensitiveDataType' => 'sensitive_data_type',
            'matchInfo' => 'match_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID
    * dbName  数据库名称
    * tableId  表ID
    * tableName  表名称
    * riskLevel  风险等级
    * sensitiveDataType  匹配到的规则
    * matchInfo  表中各列匹配到的规则
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'dbName' => 'setDbName',
            'tableId' => 'setTableId',
            'tableName' => 'setTableName',
            'riskLevel' => 'setRiskLevel',
            'sensitiveDataType' => 'setSensitiveDataType',
            'matchInfo' => 'setMatchInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID
    * dbName  数据库名称
    * tableId  表ID
    * tableName  表名称
    * riskLevel  风险等级
    * sensitiveDataType  匹配到的规则
    * matchInfo  表中各列匹配到的规则
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'dbName' => 'getDbName',
            'tableId' => 'getTableId',
            'tableName' => 'getTableName',
            'riskLevel' => 'getRiskLevel',
            'sensitiveDataType' => 'getSensitiveDataType',
            'matchInfo' => 'getMatchInfo'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['sensitiveDataType'] = isset($data['sensitiveDataType']) ? $data['sensitiveDataType'] : null;
        $this->container['matchInfo'] = isset($data['matchInfo']) ? $data['matchInfo'] : null;
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
    * Gets taskId
    *  任务ID
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
    * @param string|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库名称
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets tableId
    *  表ID
    *
    * @return string|null
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string|null $tableId 表ID
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
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
    * Gets riskLevel
    *  风险等级
    *
    * @return int|null
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param int|null $riskLevel 风险等级
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets sensitiveDataType
    *  匹配到的规则
    *
    * @return string[]|null
    */
    public function getSensitiveDataType()
    {
        return $this->container['sensitiveDataType'];
    }

    /**
    * Sets sensitiveDataType
    *
    * @param string[]|null $sensitiveDataType 匹配到的规则
    *
    * @return $this
    */
    public function setSensitiveDataType($sensitiveDataType)
    {
        $this->container['sensitiveDataType'] = $sensitiveDataType;
        return $this;
    }

    /**
    * Gets matchInfo
    *  表中各列匹配到的规则
    *
    * @return \HuaweiCloud\SDK\Dsc\V1\Model\DbMatchInfo[]|null
    */
    public function getMatchInfo()
    {
        return $this->container['matchInfo'];
    }

    /**
    * Sets matchInfo
    *
    * @param \HuaweiCloud\SDK\Dsc\V1\Model\DbMatchInfo[]|null $matchInfo 表中各列匹配到的规则
    *
    * @return $this
    */
    public function setMatchInfo($matchInfo)
    {
        $this->container['matchInfo'] = $matchInfo;
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


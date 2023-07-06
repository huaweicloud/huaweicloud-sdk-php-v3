<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObjectCompareResultOverview implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObjectCompareResultOverview';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectType  对象类型。 - DB-数据库 - TABLE-表 - VIEW-视图 - EVENT-事件 - ROUTINE-存储过程和函数 - INDEX-索引,TRIGGER-触发器 - SYNONYM-同义词 - FUNCTION-函数 - PROCEDURE-存储过程 - TYPE-自定义类型 - RULE-规则 - DEFAULT_TYPE-缺省值 - PLAN_GUIDE-执行计划 - CONSTRAINT-约束 - FILE_GROUP-文件组 - PARTITION_FUNCTION-分区函数 - PARTITION_SCHEME-分区方案 - TABLE_COLLATION-表的排序规则
    * objectCompareResult  对比结果。 - CONSISTENT-一致 - INCONSISTENT-不一致 - COMPARING-正在对比 - WAITING_FOR_COMPARISON-等待对比 - FAILED_TO_COMPARE-对比失败 - TARGET_DB_NOT_EXIT-目标库不存在 - CAN_NOT_COMPARE-无法对比
    * targetCount  该类型的对象在目标库的个数。
    * sourceCount  该类型的对象在源库的个数。
    * diffCount  源库和目标库的差异数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectType' => 'string',
            'objectCompareResult' => 'string',
            'targetCount' => 'int',
            'sourceCount' => 'int',
            'diffCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectType  对象类型。 - DB-数据库 - TABLE-表 - VIEW-视图 - EVENT-事件 - ROUTINE-存储过程和函数 - INDEX-索引,TRIGGER-触发器 - SYNONYM-同义词 - FUNCTION-函数 - PROCEDURE-存储过程 - TYPE-自定义类型 - RULE-规则 - DEFAULT_TYPE-缺省值 - PLAN_GUIDE-执行计划 - CONSTRAINT-约束 - FILE_GROUP-文件组 - PARTITION_FUNCTION-分区函数 - PARTITION_SCHEME-分区方案 - TABLE_COLLATION-表的排序规则
    * objectCompareResult  对比结果。 - CONSISTENT-一致 - INCONSISTENT-不一致 - COMPARING-正在对比 - WAITING_FOR_COMPARISON-等待对比 - FAILED_TO_COMPARE-对比失败 - TARGET_DB_NOT_EXIT-目标库不存在 - CAN_NOT_COMPARE-无法对比
    * targetCount  该类型的对象在目标库的个数。
    * sourceCount  该类型的对象在源库的个数。
    * diffCount  源库和目标库的差异数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectType' => null,
        'objectCompareResult' => null,
        'targetCount' => 'int32',
        'sourceCount' => 'int32',
        'diffCount' => 'int32'
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
    * objectType  对象类型。 - DB-数据库 - TABLE-表 - VIEW-视图 - EVENT-事件 - ROUTINE-存储过程和函数 - INDEX-索引,TRIGGER-触发器 - SYNONYM-同义词 - FUNCTION-函数 - PROCEDURE-存储过程 - TYPE-自定义类型 - RULE-规则 - DEFAULT_TYPE-缺省值 - PLAN_GUIDE-执行计划 - CONSTRAINT-约束 - FILE_GROUP-文件组 - PARTITION_FUNCTION-分区函数 - PARTITION_SCHEME-分区方案 - TABLE_COLLATION-表的排序规则
    * objectCompareResult  对比结果。 - CONSISTENT-一致 - INCONSISTENT-不一致 - COMPARING-正在对比 - WAITING_FOR_COMPARISON-等待对比 - FAILED_TO_COMPARE-对比失败 - TARGET_DB_NOT_EXIT-目标库不存在 - CAN_NOT_COMPARE-无法对比
    * targetCount  该类型的对象在目标库的个数。
    * sourceCount  该类型的对象在源库的个数。
    * diffCount  源库和目标库的差异数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectType' => 'object_type',
            'objectCompareResult' => 'object_compare_result',
            'targetCount' => 'target_count',
            'sourceCount' => 'source_count',
            'diffCount' => 'diff_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectType  对象类型。 - DB-数据库 - TABLE-表 - VIEW-视图 - EVENT-事件 - ROUTINE-存储过程和函数 - INDEX-索引,TRIGGER-触发器 - SYNONYM-同义词 - FUNCTION-函数 - PROCEDURE-存储过程 - TYPE-自定义类型 - RULE-规则 - DEFAULT_TYPE-缺省值 - PLAN_GUIDE-执行计划 - CONSTRAINT-约束 - FILE_GROUP-文件组 - PARTITION_FUNCTION-分区函数 - PARTITION_SCHEME-分区方案 - TABLE_COLLATION-表的排序规则
    * objectCompareResult  对比结果。 - CONSISTENT-一致 - INCONSISTENT-不一致 - COMPARING-正在对比 - WAITING_FOR_COMPARISON-等待对比 - FAILED_TO_COMPARE-对比失败 - TARGET_DB_NOT_EXIT-目标库不存在 - CAN_NOT_COMPARE-无法对比
    * targetCount  该类型的对象在目标库的个数。
    * sourceCount  该类型的对象在源库的个数。
    * diffCount  源库和目标库的差异数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'objectType' => 'setObjectType',
            'objectCompareResult' => 'setObjectCompareResult',
            'targetCount' => 'setTargetCount',
            'sourceCount' => 'setSourceCount',
            'diffCount' => 'setDiffCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectType  对象类型。 - DB-数据库 - TABLE-表 - VIEW-视图 - EVENT-事件 - ROUTINE-存储过程和函数 - INDEX-索引,TRIGGER-触发器 - SYNONYM-同义词 - FUNCTION-函数 - PROCEDURE-存储过程 - TYPE-自定义类型 - RULE-规则 - DEFAULT_TYPE-缺省值 - PLAN_GUIDE-执行计划 - CONSTRAINT-约束 - FILE_GROUP-文件组 - PARTITION_FUNCTION-分区函数 - PARTITION_SCHEME-分区方案 - TABLE_COLLATION-表的排序规则
    * objectCompareResult  对比结果。 - CONSISTENT-一致 - INCONSISTENT-不一致 - COMPARING-正在对比 - WAITING_FOR_COMPARISON-等待对比 - FAILED_TO_COMPARE-对比失败 - TARGET_DB_NOT_EXIT-目标库不存在 - CAN_NOT_COMPARE-无法对比
    * targetCount  该类型的对象在目标库的个数。
    * sourceCount  该类型的对象在源库的个数。
    * diffCount  源库和目标库的差异数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'objectType' => 'getObjectType',
            'objectCompareResult' => 'getObjectCompareResult',
            'targetCount' => 'getTargetCount',
            'sourceCount' => 'getSourceCount',
            'diffCount' => 'getDiffCount'
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
    const OBJECT_TYPE_DB = 'DB';
    const OBJECT_TYPE_TABLE = 'TABLE';
    const OBJECT_TYPE_VIEW = 'VIEW';
    const OBJECT_TYPE_EVENT = 'EVENT';
    const OBJECT_TYPE_ROUTINE = 'ROUTINE';
    const OBJECT_TYPE_INDEX = 'INDEX';
    const OBJECT_TYPE_TRIGGER = 'TRIGGER';
    const OBJECT_TYPE_SYNONYM = 'SYNONYM';
    const OBJECT_TYPE__FUNCTION = 'FUNCTION';
    const OBJECT_TYPE_PROCEDURE = 'PROCEDURE';
    const OBJECT_TYPE_TYPE = 'TYPE';
    const OBJECT_TYPE_RULE = 'RULE';
    const OBJECT_TYPE_DEFAULT_TYPE = 'DEFAULT_TYPE';
    const OBJECT_TYPE_PLAN_GUIDE = 'PLAN_GUIDE';
    const OBJECT_TYPE_CONSTRAINT = 'CONSTRAINT';
    const OBJECT_TYPE_FILE_GROUP = 'FILE_GROUP';
    const OBJECT_TYPE_PARTITION_FUNCTION = 'PARTITION_FUNCTION';
    const OBJECT_TYPE_PARTITION_SCHEME = 'PARTITION_SCHEME';
    const OBJECT_TYPE_TABLE_COLLATION = 'TABLE_COLLATION';
    const OBJECT_COMPARE_RESULT_CONSISTENT = 'CONSISTENT';
    const OBJECT_COMPARE_RESULT_INCONSISTENT = 'INCONSISTENT';
    const OBJECT_COMPARE_RESULT_COMPARING = 'COMPARING';
    const OBJECT_COMPARE_RESULT_WAITING_FOR_COMPARISON = 'WAITING_FOR_COMPARISON';
    const OBJECT_COMPARE_RESULT_FAILED_TO_COMPARE = 'FAILED_TO_COMPARE';
    const OBJECT_COMPARE_RESULT_TARGET_DB_NOT_EXIT = 'TARGET_DB_NOT_EXIT';
    const OBJECT_COMPARE_RESULT_CAN_NOT_COMPARE = 'CAN_NOT_COMPARE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getObjectTypeAllowableValues()
    {
        return [
            self::OBJECT_TYPE_DB,
            self::OBJECT_TYPE_TABLE,
            self::OBJECT_TYPE_VIEW,
            self::OBJECT_TYPE_EVENT,
            self::OBJECT_TYPE_ROUTINE,
            self::OBJECT_TYPE_INDEX,
            self::OBJECT_TYPE_TRIGGER,
            self::OBJECT_TYPE_SYNONYM,
            self::OBJECT_TYPE__FUNCTION,
            self::OBJECT_TYPE_PROCEDURE,
            self::OBJECT_TYPE_TYPE,
            self::OBJECT_TYPE_RULE,
            self::OBJECT_TYPE_DEFAULT_TYPE,
            self::OBJECT_TYPE_PLAN_GUIDE,
            self::OBJECT_TYPE_CONSTRAINT,
            self::OBJECT_TYPE_FILE_GROUP,
            self::OBJECT_TYPE_PARTITION_FUNCTION,
            self::OBJECT_TYPE_PARTITION_SCHEME,
            self::OBJECT_TYPE_TABLE_COLLATION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getObjectCompareResultAllowableValues()
    {
        return [
            self::OBJECT_COMPARE_RESULT_CONSISTENT,
            self::OBJECT_COMPARE_RESULT_INCONSISTENT,
            self::OBJECT_COMPARE_RESULT_COMPARING,
            self::OBJECT_COMPARE_RESULT_WAITING_FOR_COMPARISON,
            self::OBJECT_COMPARE_RESULT_FAILED_TO_COMPARE,
            self::OBJECT_COMPARE_RESULT_TARGET_DB_NOT_EXIT,
            self::OBJECT_COMPARE_RESULT_CAN_NOT_COMPARE,
        ];
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
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['objectCompareResult'] = isset($data['objectCompareResult']) ? $data['objectCompareResult'] : null;
        $this->container['targetCount'] = isset($data['targetCount']) ? $data['targetCount'] : null;
        $this->container['sourceCount'] = isset($data['sourceCount']) ? $data['sourceCount'] : null;
        $this->container['diffCount'] = isset($data['diffCount']) ? $data['diffCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['objectType'] === null) {
            $invalidProperties[] = "'objectType' can't be null";
        }
            $allowedValues = $this->getObjectTypeAllowableValues();
                if (!is_null($this->container['objectType']) && !in_array($this->container['objectType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'objectType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['objectCompareResult'] === null) {
            $invalidProperties[] = "'objectCompareResult' can't be null";
        }
            $allowedValues = $this->getObjectCompareResultAllowableValues();
                if (!is_null($this->container['objectCompareResult']) && !in_array($this->container['objectCompareResult'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'objectCompareResult', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['targetCount'] === null) {
            $invalidProperties[] = "'targetCount' can't be null";
        }
        if ($this->container['sourceCount'] === null) {
            $invalidProperties[] = "'sourceCount' can't be null";
        }
        if ($this->container['diffCount'] === null) {
            $invalidProperties[] = "'diffCount' can't be null";
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
    * Gets objectType
    *  对象类型。 - DB-数据库 - TABLE-表 - VIEW-视图 - EVENT-事件 - ROUTINE-存储过程和函数 - INDEX-索引,TRIGGER-触发器 - SYNONYM-同义词 - FUNCTION-函数 - PROCEDURE-存储过程 - TYPE-自定义类型 - RULE-规则 - DEFAULT_TYPE-缺省值 - PLAN_GUIDE-执行计划 - CONSTRAINT-约束 - FILE_GROUP-文件组 - PARTITION_FUNCTION-分区函数 - PARTITION_SCHEME-分区方案 - TABLE_COLLATION-表的排序规则
    *
    * @return string
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string $objectType 对象类型。 - DB-数据库 - TABLE-表 - VIEW-视图 - EVENT-事件 - ROUTINE-存储过程和函数 - INDEX-索引,TRIGGER-触发器 - SYNONYM-同义词 - FUNCTION-函数 - PROCEDURE-存储过程 - TYPE-自定义类型 - RULE-规则 - DEFAULT_TYPE-缺省值 - PLAN_GUIDE-执行计划 - CONSTRAINT-约束 - FILE_GROUP-文件组 - PARTITION_FUNCTION-分区函数 - PARTITION_SCHEME-分区方案 - TABLE_COLLATION-表的排序规则
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets objectCompareResult
    *  对比结果。 - CONSISTENT-一致 - INCONSISTENT-不一致 - COMPARING-正在对比 - WAITING_FOR_COMPARISON-等待对比 - FAILED_TO_COMPARE-对比失败 - TARGET_DB_NOT_EXIT-目标库不存在 - CAN_NOT_COMPARE-无法对比
    *
    * @return string
    */
    public function getObjectCompareResult()
    {
        return $this->container['objectCompareResult'];
    }

    /**
    * Sets objectCompareResult
    *
    * @param string $objectCompareResult 对比结果。 - CONSISTENT-一致 - INCONSISTENT-不一致 - COMPARING-正在对比 - WAITING_FOR_COMPARISON-等待对比 - FAILED_TO_COMPARE-对比失败 - TARGET_DB_NOT_EXIT-目标库不存在 - CAN_NOT_COMPARE-无法对比
    *
    * @return $this
    */
    public function setObjectCompareResult($objectCompareResult)
    {
        $this->container['objectCompareResult'] = $objectCompareResult;
        return $this;
    }

    /**
    * Gets targetCount
    *  该类型的对象在目标库的个数。
    *
    * @return int
    */
    public function getTargetCount()
    {
        return $this->container['targetCount'];
    }

    /**
    * Sets targetCount
    *
    * @param int $targetCount 该类型的对象在目标库的个数。
    *
    * @return $this
    */
    public function setTargetCount($targetCount)
    {
        $this->container['targetCount'] = $targetCount;
        return $this;
    }

    /**
    * Gets sourceCount
    *  该类型的对象在源库的个数。
    *
    * @return int
    */
    public function getSourceCount()
    {
        return $this->container['sourceCount'];
    }

    /**
    * Sets sourceCount
    *
    * @param int $sourceCount 该类型的对象在源库的个数。
    *
    * @return $this
    */
    public function setSourceCount($sourceCount)
    {
        $this->container['sourceCount'] = $sourceCount;
        return $this;
    }

    /**
    * Gets diffCount
    *  源库和目标库的差异数量。
    *
    * @return int
    */
    public function getDiffCount()
    {
        return $this->container['diffCount'];
    }

    /**
    * Sets diffCount
    *
    * @param int $diffCount 源库和目标库的差异数量。
    *
    * @return $this
    */
    public function setDiffCount($diffCount)
    {
        $this->container['diffCount'] = $diffCount;
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


<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConsistencyRuleDetailForOpenApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConsistencyRuleDetailForOpenApi';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  子规则ID
    * subRuleName  子规则名称
    * type  SingleDatabase:库级规则，SingleTable:表级规则,SingleColumn:字段级规则,CrossColumn:跨字段规则,Customize:自定义规则
    * templateId  规则模板ID
    * connection  数据连接ID
    * connectionType  数据连接类型
    * databases  数据库名，当存在多个值时以逗号分隔
    * sql  自定义规则中的SQL脚本
    * tables  表名，当存在多个值时以逗号分隔
    * referenceTables  对照表名，当存在多个值时以逗号分隔
    * columns  字段名，当存在多个值时以逗号分隔
    * referenceColumns  对照列名，当存在多个值时以逗号分隔
    * dimension  维度
    * queue  DLI队列
    * regularExpression  当规则模板为正则表达式校验时的正则表达式
    * templateArguments  模板参数
    * weight  规则权重
    * calculationRange  计算范围
    * calculationRangeSql  计算范围SQL
    * alarmCondition  告警表达式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'subRuleName' => 'string',
            'type' => 'string',
            'templateId' => 'int',
            'connection' => 'string',
            'connectionType' => 'string',
            'databases' => 'string',
            'sql' => 'string',
            'tables' => 'string',
            'referenceTables' => 'string',
            'columns' => 'string',
            'referenceColumns' => 'string',
            'dimension' => 'string',
            'queue' => 'string',
            'regularExpression' => 'string',
            'templateArguments' => 'string',
            'weight' => 'int',
            'calculationRange' => 'string',
            'calculationRangeSql' => 'string',
            'alarmCondition' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  子规则ID
    * subRuleName  子规则名称
    * type  SingleDatabase:库级规则，SingleTable:表级规则,SingleColumn:字段级规则,CrossColumn:跨字段规则,Customize:自定义规则
    * templateId  规则模板ID
    * connection  数据连接ID
    * connectionType  数据连接类型
    * databases  数据库名，当存在多个值时以逗号分隔
    * sql  自定义规则中的SQL脚本
    * tables  表名，当存在多个值时以逗号分隔
    * referenceTables  对照表名，当存在多个值时以逗号分隔
    * columns  字段名，当存在多个值时以逗号分隔
    * referenceColumns  对照列名，当存在多个值时以逗号分隔
    * dimension  维度
    * queue  DLI队列
    * regularExpression  当规则模板为正则表达式校验时的正则表达式
    * templateArguments  模板参数
    * weight  规则权重
    * calculationRange  计算范围
    * calculationRangeSql  计算范围SQL
    * alarmCondition  告警表达式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'subRuleName' => null,
        'type' => null,
        'templateId' => 'int64',
        'connection' => null,
        'connectionType' => null,
        'databases' => null,
        'sql' => null,
        'tables' => null,
        'referenceTables' => null,
        'columns' => null,
        'referenceColumns' => null,
        'dimension' => null,
        'queue' => null,
        'regularExpression' => null,
        'templateArguments' => null,
        'weight' => null,
        'calculationRange' => null,
        'calculationRangeSql' => null,
        'alarmCondition' => null
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
    * id  子规则ID
    * subRuleName  子规则名称
    * type  SingleDatabase:库级规则，SingleTable:表级规则,SingleColumn:字段级规则,CrossColumn:跨字段规则,Customize:自定义规则
    * templateId  规则模板ID
    * connection  数据连接ID
    * connectionType  数据连接类型
    * databases  数据库名，当存在多个值时以逗号分隔
    * sql  自定义规则中的SQL脚本
    * tables  表名，当存在多个值时以逗号分隔
    * referenceTables  对照表名，当存在多个值时以逗号分隔
    * columns  字段名，当存在多个值时以逗号分隔
    * referenceColumns  对照列名，当存在多个值时以逗号分隔
    * dimension  维度
    * queue  DLI队列
    * regularExpression  当规则模板为正则表达式校验时的正则表达式
    * templateArguments  模板参数
    * weight  规则权重
    * calculationRange  计算范围
    * calculationRangeSql  计算范围SQL
    * alarmCondition  告警表达式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'subRuleName' => 'sub_rule_name',
            'type' => 'type',
            'templateId' => 'template_id',
            'connection' => 'connection',
            'connectionType' => 'connection_type',
            'databases' => 'databases',
            'sql' => 'sql',
            'tables' => 'tables',
            'referenceTables' => 'reference_tables',
            'columns' => 'columns',
            'referenceColumns' => 'reference_columns',
            'dimension' => 'dimension',
            'queue' => 'queue',
            'regularExpression' => 'regular_expression',
            'templateArguments' => 'template_arguments',
            'weight' => 'weight',
            'calculationRange' => 'calculation_range',
            'calculationRangeSql' => 'calculation_range_sql',
            'alarmCondition' => 'alarm_condition'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  子规则ID
    * subRuleName  子规则名称
    * type  SingleDatabase:库级规则，SingleTable:表级规则,SingleColumn:字段级规则,CrossColumn:跨字段规则,Customize:自定义规则
    * templateId  规则模板ID
    * connection  数据连接ID
    * connectionType  数据连接类型
    * databases  数据库名，当存在多个值时以逗号分隔
    * sql  自定义规则中的SQL脚本
    * tables  表名，当存在多个值时以逗号分隔
    * referenceTables  对照表名，当存在多个值时以逗号分隔
    * columns  字段名，当存在多个值时以逗号分隔
    * referenceColumns  对照列名，当存在多个值时以逗号分隔
    * dimension  维度
    * queue  DLI队列
    * regularExpression  当规则模板为正则表达式校验时的正则表达式
    * templateArguments  模板参数
    * weight  规则权重
    * calculationRange  计算范围
    * calculationRangeSql  计算范围SQL
    * alarmCondition  告警表达式
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'subRuleName' => 'setSubRuleName',
            'type' => 'setType',
            'templateId' => 'setTemplateId',
            'connection' => 'setConnection',
            'connectionType' => 'setConnectionType',
            'databases' => 'setDatabases',
            'sql' => 'setSql',
            'tables' => 'setTables',
            'referenceTables' => 'setReferenceTables',
            'columns' => 'setColumns',
            'referenceColumns' => 'setReferenceColumns',
            'dimension' => 'setDimension',
            'queue' => 'setQueue',
            'regularExpression' => 'setRegularExpression',
            'templateArguments' => 'setTemplateArguments',
            'weight' => 'setWeight',
            'calculationRange' => 'setCalculationRange',
            'calculationRangeSql' => 'setCalculationRangeSql',
            'alarmCondition' => 'setAlarmCondition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  子规则ID
    * subRuleName  子规则名称
    * type  SingleDatabase:库级规则，SingleTable:表级规则,SingleColumn:字段级规则,CrossColumn:跨字段规则,Customize:自定义规则
    * templateId  规则模板ID
    * connection  数据连接ID
    * connectionType  数据连接类型
    * databases  数据库名，当存在多个值时以逗号分隔
    * sql  自定义规则中的SQL脚本
    * tables  表名，当存在多个值时以逗号分隔
    * referenceTables  对照表名，当存在多个值时以逗号分隔
    * columns  字段名，当存在多个值时以逗号分隔
    * referenceColumns  对照列名，当存在多个值时以逗号分隔
    * dimension  维度
    * queue  DLI队列
    * regularExpression  当规则模板为正则表达式校验时的正则表达式
    * templateArguments  模板参数
    * weight  规则权重
    * calculationRange  计算范围
    * calculationRangeSql  计算范围SQL
    * alarmCondition  告警表达式
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'subRuleName' => 'getSubRuleName',
            'type' => 'getType',
            'templateId' => 'getTemplateId',
            'connection' => 'getConnection',
            'connectionType' => 'getConnectionType',
            'databases' => 'getDatabases',
            'sql' => 'getSql',
            'tables' => 'getTables',
            'referenceTables' => 'getReferenceTables',
            'columns' => 'getColumns',
            'referenceColumns' => 'getReferenceColumns',
            'dimension' => 'getDimension',
            'queue' => 'getQueue',
            'regularExpression' => 'getRegularExpression',
            'templateArguments' => 'getTemplateArguments',
            'weight' => 'getWeight',
            'calculationRange' => 'getCalculationRange',
            'calculationRangeSql' => 'getCalculationRangeSql',
            'alarmCondition' => 'getAlarmCondition'
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
        $this->container['subRuleName'] = isset($data['subRuleName']) ? $data['subRuleName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['connection'] = isset($data['connection']) ? $data['connection'] : null;
        $this->container['connectionType'] = isset($data['connectionType']) ? $data['connectionType'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['tables'] = isset($data['tables']) ? $data['tables'] : null;
        $this->container['referenceTables'] = isset($data['referenceTables']) ? $data['referenceTables'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['referenceColumns'] = isset($data['referenceColumns']) ? $data['referenceColumns'] : null;
        $this->container['dimension'] = isset($data['dimension']) ? $data['dimension'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['regularExpression'] = isset($data['regularExpression']) ? $data['regularExpression'] : null;
        $this->container['templateArguments'] = isset($data['templateArguments']) ? $data['templateArguments'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['calculationRange'] = isset($data['calculationRange']) ? $data['calculationRange'] : null;
        $this->container['calculationRangeSql'] = isset($data['calculationRangeSql']) ? $data['calculationRangeSql'] : null;
        $this->container['alarmCondition'] = isset($data['alarmCondition']) ? $data['alarmCondition'] : null;
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
    * Gets id
    *  子规则ID
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
    * @param int|null $id 子规则ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets subRuleName
    *  子规则名称
    *
    * @return string|null
    */
    public function getSubRuleName()
    {
        return $this->container['subRuleName'];
    }

    /**
    * Sets subRuleName
    *
    * @param string|null $subRuleName 子规则名称
    *
    * @return $this
    */
    public function setSubRuleName($subRuleName)
    {
        $this->container['subRuleName'] = $subRuleName;
        return $this;
    }

    /**
    * Gets type
    *  SingleDatabase:库级规则，SingleTable:表级规则,SingleColumn:字段级规则,CrossColumn:跨字段规则,Customize:自定义规则
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type SingleDatabase:库级规则，SingleTable:表级规则,SingleColumn:字段级规则,CrossColumn:跨字段规则,Customize:自定义规则
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets templateId
    *  规则模板ID
    *
    * @return int|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param int|null $templateId 规则模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets connection
    *  数据连接ID
    *
    * @return string|null
    */
    public function getConnection()
    {
        return $this->container['connection'];
    }

    /**
    * Sets connection
    *
    * @param string|null $connection 数据连接ID
    *
    * @return $this
    */
    public function setConnection($connection)
    {
        $this->container['connection'] = $connection;
        return $this;
    }

    /**
    * Gets connectionType
    *  数据连接类型
    *
    * @return string|null
    */
    public function getConnectionType()
    {
        return $this->container['connectionType'];
    }

    /**
    * Sets connectionType
    *
    * @param string|null $connectionType 数据连接类型
    *
    * @return $this
    */
    public function setConnectionType($connectionType)
    {
        $this->container['connectionType'] = $connectionType;
        return $this;
    }

    /**
    * Gets databases
    *  数据库名，当存在多个值时以逗号分隔
    *
    * @return string|null
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param string|null $databases 数据库名，当存在多个值时以逗号分隔
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
        return $this;
    }

    /**
    * Gets sql
    *  自定义规则中的SQL脚本
    *
    * @return string|null
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string|null $sql 自定义规则中的SQL脚本
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets tables
    *  表名，当存在多个值时以逗号分隔
    *
    * @return string|null
    */
    public function getTables()
    {
        return $this->container['tables'];
    }

    /**
    * Sets tables
    *
    * @param string|null $tables 表名，当存在多个值时以逗号分隔
    *
    * @return $this
    */
    public function setTables($tables)
    {
        $this->container['tables'] = $tables;
        return $this;
    }

    /**
    * Gets referenceTables
    *  对照表名，当存在多个值时以逗号分隔
    *
    * @return string|null
    */
    public function getReferenceTables()
    {
        return $this->container['referenceTables'];
    }

    /**
    * Sets referenceTables
    *
    * @param string|null $referenceTables 对照表名，当存在多个值时以逗号分隔
    *
    * @return $this
    */
    public function setReferenceTables($referenceTables)
    {
        $this->container['referenceTables'] = $referenceTables;
        return $this;
    }

    /**
    * Gets columns
    *  字段名，当存在多个值时以逗号分隔
    *
    * @return string|null
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param string|null $columns 字段名，当存在多个值时以逗号分隔
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
        return $this;
    }

    /**
    * Gets referenceColumns
    *  对照列名，当存在多个值时以逗号分隔
    *
    * @return string|null
    */
    public function getReferenceColumns()
    {
        return $this->container['referenceColumns'];
    }

    /**
    * Sets referenceColumns
    *
    * @param string|null $referenceColumns 对照列名，当存在多个值时以逗号分隔
    *
    * @return $this
    */
    public function setReferenceColumns($referenceColumns)
    {
        $this->container['referenceColumns'] = $referenceColumns;
        return $this;
    }

    /**
    * Gets dimension
    *  维度
    *
    * @return string|null
    */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
    * Sets dimension
    *
    * @param string|null $dimension 维度
    *
    * @return $this
    */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;
        return $this;
    }

    /**
    * Gets queue
    *  DLI队列
    *
    * @return string|null
    */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
    * Sets queue
    *
    * @param string|null $queue DLI队列
    *
    * @return $this
    */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;
        return $this;
    }

    /**
    * Gets regularExpression
    *  当规则模板为正则表达式校验时的正则表达式
    *
    * @return string|null
    */
    public function getRegularExpression()
    {
        return $this->container['regularExpression'];
    }

    /**
    * Sets regularExpression
    *
    * @param string|null $regularExpression 当规则模板为正则表达式校验时的正则表达式
    *
    * @return $this
    */
    public function setRegularExpression($regularExpression)
    {
        $this->container['regularExpression'] = $regularExpression;
        return $this;
    }

    /**
    * Gets templateArguments
    *  模板参数
    *
    * @return string|null
    */
    public function getTemplateArguments()
    {
        return $this->container['templateArguments'];
    }

    /**
    * Sets templateArguments
    *
    * @param string|null $templateArguments 模板参数
    *
    * @return $this
    */
    public function setTemplateArguments($templateArguments)
    {
        $this->container['templateArguments'] = $templateArguments;
        return $this;
    }

    /**
    * Gets weight
    *  规则权重
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight 规则权重
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets calculationRange
    *  计算范围
    *
    * @return string|null
    */
    public function getCalculationRange()
    {
        return $this->container['calculationRange'];
    }

    /**
    * Sets calculationRange
    *
    * @param string|null $calculationRange 计算范围
    *
    * @return $this
    */
    public function setCalculationRange($calculationRange)
    {
        $this->container['calculationRange'] = $calculationRange;
        return $this;
    }

    /**
    * Gets calculationRangeSql
    *  计算范围SQL
    *
    * @return string|null
    */
    public function getCalculationRangeSql()
    {
        return $this->container['calculationRangeSql'];
    }

    /**
    * Sets calculationRangeSql
    *
    * @param string|null $calculationRangeSql 计算范围SQL
    *
    * @return $this
    */
    public function setCalculationRangeSql($calculationRangeSql)
    {
        $this->container['calculationRangeSql'] = $calculationRangeSql;
        return $this;
    }

    /**
    * Gets alarmCondition
    *  告警表达式
    *
    * @return string|null
    */
    public function getAlarmCondition()
    {
        return $this->container['alarmCondition'];
    }

    /**
    * Sets alarmCondition
    *
    * @param string|null $alarmCondition 告警表达式
    *
    * @return $this
    */
    public function setAlarmCondition($alarmCondition)
    {
        $this->container['alarmCondition'] = $alarmCondition;
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


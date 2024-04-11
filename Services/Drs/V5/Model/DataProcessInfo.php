<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataProcessInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataProcessInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filterConditions  指定任务数据加工规则请求体
    * isBatchProcess  库级、批量表级处理为true，单表操作为false
    * addColumns  附加列 当选择附加列时必须填写 约束：使用多对一操作时，需要使用数据加工的附加列操作来避免数据冲突。
    * ddlOperation  支持DDL的语法 选择增量迁移或同步的DDL操作。取值及意思如下： \"table\": \"CREATE TABLE, ALTER TABLE,DROP TABLE,RENAME TABLE\" 如该值为空，不迁移或同步DDL操作
    * dmlOperation  支持DML的语法 选择DML操作时，取值如下： i：INSERT。 u：UPDATE。 d：DELETE。 如该值为空，不增量迁移或同步DML操作。
    * dbObjectColumnInfo  dbObjectColumnInfo
    * dbOrTableRenameRule  dbOrTableRenameRule
    * dbObject  dbObject
    * isSynchronized  表示该规则是否已同步至目标库
    * source  对比的来源 - job 表示数据同步时的过滤 - compare 表示数据对比的过滤
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filterConditions' => '\HuaweiCloud\SDK\Drs\V5\Model\DataFilteringCondition[]',
            'isBatchProcess' => 'bool',
            'addColumns' => '\HuaweiCloud\SDK\Drs\V5\Model\AddColumnInfo[]',
            'ddlOperation' => 'map[string,string]',
            'dmlOperation' => 'string',
            'dbObjectColumnInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\DbObjectColumnInfo',
            'dbOrTableRenameRule' => '\HuaweiCloud\SDK\Drs\V5\Model\DbOrTableRenameRule',
            'dbObject' => '\HuaweiCloud\SDK\Drs\V5\Model\DbObject',
            'isSynchronized' => 'bool',
            'source' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filterConditions  指定任务数据加工规则请求体
    * isBatchProcess  库级、批量表级处理为true，单表操作为false
    * addColumns  附加列 当选择附加列时必须填写 约束：使用多对一操作时，需要使用数据加工的附加列操作来避免数据冲突。
    * ddlOperation  支持DDL的语法 选择增量迁移或同步的DDL操作。取值及意思如下： \"table\": \"CREATE TABLE, ALTER TABLE,DROP TABLE,RENAME TABLE\" 如该值为空，不迁移或同步DDL操作
    * dmlOperation  支持DML的语法 选择DML操作时，取值如下： i：INSERT。 u：UPDATE。 d：DELETE。 如该值为空，不增量迁移或同步DML操作。
    * dbObjectColumnInfo  dbObjectColumnInfo
    * dbOrTableRenameRule  dbOrTableRenameRule
    * dbObject  dbObject
    * isSynchronized  表示该规则是否已同步至目标库
    * source  对比的来源 - job 表示数据同步时的过滤 - compare 表示数据对比的过滤
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filterConditions' => null,
        'isBatchProcess' => null,
        'addColumns' => null,
        'ddlOperation' => null,
        'dmlOperation' => null,
        'dbObjectColumnInfo' => null,
        'dbOrTableRenameRule' => null,
        'dbObject' => null,
        'isSynchronized' => null,
        'source' => null
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
    * filterConditions  指定任务数据加工规则请求体
    * isBatchProcess  库级、批量表级处理为true，单表操作为false
    * addColumns  附加列 当选择附加列时必须填写 约束：使用多对一操作时，需要使用数据加工的附加列操作来避免数据冲突。
    * ddlOperation  支持DDL的语法 选择增量迁移或同步的DDL操作。取值及意思如下： \"table\": \"CREATE TABLE, ALTER TABLE,DROP TABLE,RENAME TABLE\" 如该值为空，不迁移或同步DDL操作
    * dmlOperation  支持DML的语法 选择DML操作时，取值如下： i：INSERT。 u：UPDATE。 d：DELETE。 如该值为空，不增量迁移或同步DML操作。
    * dbObjectColumnInfo  dbObjectColumnInfo
    * dbOrTableRenameRule  dbOrTableRenameRule
    * dbObject  dbObject
    * isSynchronized  表示该规则是否已同步至目标库
    * source  对比的来源 - job 表示数据同步时的过滤 - compare 表示数据对比的过滤
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filterConditions' => 'filter_conditions',
            'isBatchProcess' => 'is_batch_process',
            'addColumns' => 'add_columns',
            'ddlOperation' => 'ddl_operation',
            'dmlOperation' => 'dml_operation',
            'dbObjectColumnInfo' => 'db_object_column_info',
            'dbOrTableRenameRule' => 'db_or_table_rename_rule',
            'dbObject' => 'db_object',
            'isSynchronized' => 'is_synchronized',
            'source' => 'source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filterConditions  指定任务数据加工规则请求体
    * isBatchProcess  库级、批量表级处理为true，单表操作为false
    * addColumns  附加列 当选择附加列时必须填写 约束：使用多对一操作时，需要使用数据加工的附加列操作来避免数据冲突。
    * ddlOperation  支持DDL的语法 选择增量迁移或同步的DDL操作。取值及意思如下： \"table\": \"CREATE TABLE, ALTER TABLE,DROP TABLE,RENAME TABLE\" 如该值为空，不迁移或同步DDL操作
    * dmlOperation  支持DML的语法 选择DML操作时，取值如下： i：INSERT。 u：UPDATE。 d：DELETE。 如该值为空，不增量迁移或同步DML操作。
    * dbObjectColumnInfo  dbObjectColumnInfo
    * dbOrTableRenameRule  dbOrTableRenameRule
    * dbObject  dbObject
    * isSynchronized  表示该规则是否已同步至目标库
    * source  对比的来源 - job 表示数据同步时的过滤 - compare 表示数据对比的过滤
    *
    * @var string[]
    */
    protected static $setters = [
            'filterConditions' => 'setFilterConditions',
            'isBatchProcess' => 'setIsBatchProcess',
            'addColumns' => 'setAddColumns',
            'ddlOperation' => 'setDdlOperation',
            'dmlOperation' => 'setDmlOperation',
            'dbObjectColumnInfo' => 'setDbObjectColumnInfo',
            'dbOrTableRenameRule' => 'setDbOrTableRenameRule',
            'dbObject' => 'setDbObject',
            'isSynchronized' => 'setIsSynchronized',
            'source' => 'setSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filterConditions  指定任务数据加工规则请求体
    * isBatchProcess  库级、批量表级处理为true，单表操作为false
    * addColumns  附加列 当选择附加列时必须填写 约束：使用多对一操作时，需要使用数据加工的附加列操作来避免数据冲突。
    * ddlOperation  支持DDL的语法 选择增量迁移或同步的DDL操作。取值及意思如下： \"table\": \"CREATE TABLE, ALTER TABLE,DROP TABLE,RENAME TABLE\" 如该值为空，不迁移或同步DDL操作
    * dmlOperation  支持DML的语法 选择DML操作时，取值如下： i：INSERT。 u：UPDATE。 d：DELETE。 如该值为空，不增量迁移或同步DML操作。
    * dbObjectColumnInfo  dbObjectColumnInfo
    * dbOrTableRenameRule  dbOrTableRenameRule
    * dbObject  dbObject
    * isSynchronized  表示该规则是否已同步至目标库
    * source  对比的来源 - job 表示数据同步时的过滤 - compare 表示数据对比的过滤
    *
    * @var string[]
    */
    protected static $getters = [
            'filterConditions' => 'getFilterConditions',
            'isBatchProcess' => 'getIsBatchProcess',
            'addColumns' => 'getAddColumns',
            'ddlOperation' => 'getDdlOperation',
            'dmlOperation' => 'getDmlOperation',
            'dbObjectColumnInfo' => 'getDbObjectColumnInfo',
            'dbOrTableRenameRule' => 'getDbOrTableRenameRule',
            'dbObject' => 'getDbObject',
            'isSynchronized' => 'getIsSynchronized',
            'source' => 'getSource'
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
    const SOURCE_JOB = 'job';
    const SOURCE_COMPARE = 'compare';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_JOB,
            self::SOURCE_COMPARE,
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
        $this->container['filterConditions'] = isset($data['filterConditions']) ? $data['filterConditions'] : null;
        $this->container['isBatchProcess'] = isset($data['isBatchProcess']) ? $data['isBatchProcess'] : null;
        $this->container['addColumns'] = isset($data['addColumns']) ? $data['addColumns'] : null;
        $this->container['ddlOperation'] = isset($data['ddlOperation']) ? $data['ddlOperation'] : null;
        $this->container['dmlOperation'] = isset($data['dmlOperation']) ? $data['dmlOperation'] : null;
        $this->container['dbObjectColumnInfo'] = isset($data['dbObjectColumnInfo']) ? $data['dbObjectColumnInfo'] : null;
        $this->container['dbOrTableRenameRule'] = isset($data['dbOrTableRenameRule']) ? $data['dbOrTableRenameRule'] : null;
        $this->container['dbObject'] = isset($data['dbObject']) ? $data['dbObject'] : null;
        $this->container['isSynchronized'] = isset($data['isSynchronized']) ? $data['isSynchronized'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSourceAllowableValues();
                if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets filterConditions
    *  指定任务数据加工规则请求体
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DataFilteringCondition[]|null
    */
    public function getFilterConditions()
    {
        return $this->container['filterConditions'];
    }

    /**
    * Sets filterConditions
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DataFilteringCondition[]|null $filterConditions 指定任务数据加工规则请求体
    *
    * @return $this
    */
    public function setFilterConditions($filterConditions)
    {
        $this->container['filterConditions'] = $filterConditions;
        return $this;
    }

    /**
    * Gets isBatchProcess
    *  库级、批量表级处理为true，单表操作为false
    *
    * @return bool|null
    */
    public function getIsBatchProcess()
    {
        return $this->container['isBatchProcess'];
    }

    /**
    * Sets isBatchProcess
    *
    * @param bool|null $isBatchProcess 库级、批量表级处理为true，单表操作为false
    *
    * @return $this
    */
    public function setIsBatchProcess($isBatchProcess)
    {
        $this->container['isBatchProcess'] = $isBatchProcess;
        return $this;
    }

    /**
    * Gets addColumns
    *  附加列 当选择附加列时必须填写 约束：使用多对一操作时，需要使用数据加工的附加列操作来避免数据冲突。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\AddColumnInfo[]|null
    */
    public function getAddColumns()
    {
        return $this->container['addColumns'];
    }

    /**
    * Sets addColumns
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\AddColumnInfo[]|null $addColumns 附加列 当选择附加列时必须填写 约束：使用多对一操作时，需要使用数据加工的附加列操作来避免数据冲突。
    *
    * @return $this
    */
    public function setAddColumns($addColumns)
    {
        $this->container['addColumns'] = $addColumns;
        return $this;
    }

    /**
    * Gets ddlOperation
    *  支持DDL的语法 选择增量迁移或同步的DDL操作。取值及意思如下： \"table\": \"CREATE TABLE, ALTER TABLE,DROP TABLE,RENAME TABLE\" 如该值为空，不迁移或同步DDL操作
    *
    * @return map[string,string]|null
    */
    public function getDdlOperation()
    {
        return $this->container['ddlOperation'];
    }

    /**
    * Sets ddlOperation
    *
    * @param map[string,string]|null $ddlOperation 支持DDL的语法 选择增量迁移或同步的DDL操作。取值及意思如下： \"table\": \"CREATE TABLE, ALTER TABLE,DROP TABLE,RENAME TABLE\" 如该值为空，不迁移或同步DDL操作
    *
    * @return $this
    */
    public function setDdlOperation($ddlOperation)
    {
        $this->container['ddlOperation'] = $ddlOperation;
        return $this;
    }

    /**
    * Gets dmlOperation
    *  支持DML的语法 选择DML操作时，取值如下： i：INSERT。 u：UPDATE。 d：DELETE。 如该值为空，不增量迁移或同步DML操作。
    *
    * @return string|null
    */
    public function getDmlOperation()
    {
        return $this->container['dmlOperation'];
    }

    /**
    * Sets dmlOperation
    *
    * @param string|null $dmlOperation 支持DML的语法 选择DML操作时，取值如下： i：INSERT。 u：UPDATE。 d：DELETE。 如该值为空，不增量迁移或同步DML操作。
    *
    * @return $this
    */
    public function setDmlOperation($dmlOperation)
    {
        $this->container['dmlOperation'] = $dmlOperation;
        return $this;
    }

    /**
    * Gets dbObjectColumnInfo
    *  dbObjectColumnInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DbObjectColumnInfo|null
    */
    public function getDbObjectColumnInfo()
    {
        return $this->container['dbObjectColumnInfo'];
    }

    /**
    * Sets dbObjectColumnInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DbObjectColumnInfo|null $dbObjectColumnInfo dbObjectColumnInfo
    *
    * @return $this
    */
    public function setDbObjectColumnInfo($dbObjectColumnInfo)
    {
        $this->container['dbObjectColumnInfo'] = $dbObjectColumnInfo;
        return $this;
    }

    /**
    * Gets dbOrTableRenameRule
    *  dbOrTableRenameRule
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DbOrTableRenameRule|null
    */
    public function getDbOrTableRenameRule()
    {
        return $this->container['dbOrTableRenameRule'];
    }

    /**
    * Sets dbOrTableRenameRule
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DbOrTableRenameRule|null $dbOrTableRenameRule dbOrTableRenameRule
    *
    * @return $this
    */
    public function setDbOrTableRenameRule($dbOrTableRenameRule)
    {
        $this->container['dbOrTableRenameRule'] = $dbOrTableRenameRule;
        return $this;
    }

    /**
    * Gets dbObject
    *  dbObject
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DbObject|null
    */
    public function getDbObject()
    {
        return $this->container['dbObject'];
    }

    /**
    * Sets dbObject
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DbObject|null $dbObject dbObject
    *
    * @return $this
    */
    public function setDbObject($dbObject)
    {
        $this->container['dbObject'] = $dbObject;
        return $this;
    }

    /**
    * Gets isSynchronized
    *  表示该规则是否已同步至目标库
    *
    * @return bool|null
    */
    public function getIsSynchronized()
    {
        return $this->container['isSynchronized'];
    }

    /**
    * Sets isSynchronized
    *
    * @param bool|null $isSynchronized 表示该规则是否已同步至目标库
    *
    * @return $this
    */
    public function setIsSynchronized($isSynchronized)
    {
        $this->container['isSynchronized'] = $isSynchronized;
        return $this;
    }

    /**
    * Gets source
    *  对比的来源 - job 表示数据同步时的过滤 - compare 表示数据对比的过滤
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 对比的来源 - job 表示数据同步时的过滤 - compare 表示数据对比的过滤
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
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


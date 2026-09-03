<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowExecuteResultWithoutKeyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowExecuteResultWithoutKeyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnValues  字段值
    * metadata  字段属性，字段名等
    * resultType  结果集类型
    * rows  行数
    * timeDelay  执行耗时
    * canEdit  结果集是否可编辑
    * canExport  结果集是否可导出
    * editDbName  编辑库名
    * editTable  编辑表名
    * editPrimaryKeys  主键信息
    * cannotEditReason  不能编辑的原因
    * extendDatas  额外信息
    * dataSum  数据总量
    * bigTable  是否为大表
    * warning  执行命令告警信息
    * sql  要执行的SQL语句
    * explainSql  是否为执行计划语句
    * pageState  页面状态
    * exceedData  查询结果是否超过规定大小
    * executeStatus  执行状态（finished：执行完毕，pending：执行中）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnValues' => 'object[]',
            'metadata' => '\HuaweiCloud\SDK\Das\V3\Model\Column[]',
            'resultType' => 'string',
            'rows' => 'int',
            'timeDelay' => 'int',
            'canEdit' => 'bool',
            'canExport' => 'bool',
            'editDbName' => 'string',
            'editTable' => 'string',
            'editPrimaryKeys' => 'string[]',
            'cannotEditReason' => 'int',
            'extendDatas' => 'object[]',
            'dataSum' => 'int',
            'bigTable' => 'bool',
            'warning' => 'string[]',
            'sql' => 'string',
            'explainSql' => 'bool',
            'pageState' => 'string',
            'exceedData' => 'bool',
            'executeStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnValues  字段值
    * metadata  字段属性，字段名等
    * resultType  结果集类型
    * rows  行数
    * timeDelay  执行耗时
    * canEdit  结果集是否可编辑
    * canExport  结果集是否可导出
    * editDbName  编辑库名
    * editTable  编辑表名
    * editPrimaryKeys  主键信息
    * cannotEditReason  不能编辑的原因
    * extendDatas  额外信息
    * dataSum  数据总量
    * bigTable  是否为大表
    * warning  执行命令告警信息
    * sql  要执行的SQL语句
    * explainSql  是否为执行计划语句
    * pageState  页面状态
    * exceedData  查询结果是否超过规定大小
    * executeStatus  执行状态（finished：执行完毕，pending：执行中）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnValues' => null,
        'metadata' => null,
        'resultType' => null,
        'rows' => 'int32',
        'timeDelay' => 'int64',
        'canEdit' => null,
        'canExport' => null,
        'editDbName' => null,
        'editTable' => null,
        'editPrimaryKeys' => null,
        'cannotEditReason' => 'int32',
        'extendDatas' => null,
        'dataSum' => 'int32',
        'bigTable' => null,
        'warning' => null,
        'sql' => null,
        'explainSql' => null,
        'pageState' => null,
        'exceedData' => null,
        'executeStatus' => null
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
    * columnValues  字段值
    * metadata  字段属性，字段名等
    * resultType  结果集类型
    * rows  行数
    * timeDelay  执行耗时
    * canEdit  结果集是否可编辑
    * canExport  结果集是否可导出
    * editDbName  编辑库名
    * editTable  编辑表名
    * editPrimaryKeys  主键信息
    * cannotEditReason  不能编辑的原因
    * extendDatas  额外信息
    * dataSum  数据总量
    * bigTable  是否为大表
    * warning  执行命令告警信息
    * sql  要执行的SQL语句
    * explainSql  是否为执行计划语句
    * pageState  页面状态
    * exceedData  查询结果是否超过规定大小
    * executeStatus  执行状态（finished：执行完毕，pending：执行中）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnValues' => 'column_values',
            'metadata' => 'metadata',
            'resultType' => 'result_type',
            'rows' => 'rows',
            'timeDelay' => 'time_delay',
            'canEdit' => 'can_edit',
            'canExport' => 'can_export',
            'editDbName' => 'edit_db_name',
            'editTable' => 'edit_table',
            'editPrimaryKeys' => 'edit_primary_keys',
            'cannotEditReason' => 'cannot_edit_reason',
            'extendDatas' => 'extend_datas',
            'dataSum' => 'data_sum',
            'bigTable' => 'big_table',
            'warning' => 'warning',
            'sql' => 'sql',
            'explainSql' => 'explain_sql',
            'pageState' => 'page_state',
            'exceedData' => 'exceed_data',
            'executeStatus' => 'execute_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnValues  字段值
    * metadata  字段属性，字段名等
    * resultType  结果集类型
    * rows  行数
    * timeDelay  执行耗时
    * canEdit  结果集是否可编辑
    * canExport  结果集是否可导出
    * editDbName  编辑库名
    * editTable  编辑表名
    * editPrimaryKeys  主键信息
    * cannotEditReason  不能编辑的原因
    * extendDatas  额外信息
    * dataSum  数据总量
    * bigTable  是否为大表
    * warning  执行命令告警信息
    * sql  要执行的SQL语句
    * explainSql  是否为执行计划语句
    * pageState  页面状态
    * exceedData  查询结果是否超过规定大小
    * executeStatus  执行状态（finished：执行完毕，pending：执行中）
    *
    * @var string[]
    */
    protected static $setters = [
            'columnValues' => 'setColumnValues',
            'metadata' => 'setMetadata',
            'resultType' => 'setResultType',
            'rows' => 'setRows',
            'timeDelay' => 'setTimeDelay',
            'canEdit' => 'setCanEdit',
            'canExport' => 'setCanExport',
            'editDbName' => 'setEditDbName',
            'editTable' => 'setEditTable',
            'editPrimaryKeys' => 'setEditPrimaryKeys',
            'cannotEditReason' => 'setCannotEditReason',
            'extendDatas' => 'setExtendDatas',
            'dataSum' => 'setDataSum',
            'bigTable' => 'setBigTable',
            'warning' => 'setWarning',
            'sql' => 'setSql',
            'explainSql' => 'setExplainSql',
            'pageState' => 'setPageState',
            'exceedData' => 'setExceedData',
            'executeStatus' => 'setExecuteStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnValues  字段值
    * metadata  字段属性，字段名等
    * resultType  结果集类型
    * rows  行数
    * timeDelay  执行耗时
    * canEdit  结果集是否可编辑
    * canExport  结果集是否可导出
    * editDbName  编辑库名
    * editTable  编辑表名
    * editPrimaryKeys  主键信息
    * cannotEditReason  不能编辑的原因
    * extendDatas  额外信息
    * dataSum  数据总量
    * bigTable  是否为大表
    * warning  执行命令告警信息
    * sql  要执行的SQL语句
    * explainSql  是否为执行计划语句
    * pageState  页面状态
    * exceedData  查询结果是否超过规定大小
    * executeStatus  执行状态（finished：执行完毕，pending：执行中）
    *
    * @var string[]
    */
    protected static $getters = [
            'columnValues' => 'getColumnValues',
            'metadata' => 'getMetadata',
            'resultType' => 'getResultType',
            'rows' => 'getRows',
            'timeDelay' => 'getTimeDelay',
            'canEdit' => 'getCanEdit',
            'canExport' => 'getCanExport',
            'editDbName' => 'getEditDbName',
            'editTable' => 'getEditTable',
            'editPrimaryKeys' => 'getEditPrimaryKeys',
            'cannotEditReason' => 'getCannotEditReason',
            'extendDatas' => 'getExtendDatas',
            'dataSum' => 'getDataSum',
            'bigTable' => 'getBigTable',
            'warning' => 'getWarning',
            'sql' => 'getSql',
            'explainSql' => 'getExplainSql',
            'pageState' => 'getPageState',
            'exceedData' => 'getExceedData',
            'executeStatus' => 'getExecuteStatus'
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
        $this->container['columnValues'] = isset($data['columnValues']) ? $data['columnValues'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['resultType'] = isset($data['resultType']) ? $data['resultType'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['timeDelay'] = isset($data['timeDelay']) ? $data['timeDelay'] : null;
        $this->container['canEdit'] = isset($data['canEdit']) ? $data['canEdit'] : null;
        $this->container['canExport'] = isset($data['canExport']) ? $data['canExport'] : null;
        $this->container['editDbName'] = isset($data['editDbName']) ? $data['editDbName'] : null;
        $this->container['editTable'] = isset($data['editTable']) ? $data['editTable'] : null;
        $this->container['editPrimaryKeys'] = isset($data['editPrimaryKeys']) ? $data['editPrimaryKeys'] : null;
        $this->container['cannotEditReason'] = isset($data['cannotEditReason']) ? $data['cannotEditReason'] : null;
        $this->container['extendDatas'] = isset($data['extendDatas']) ? $data['extendDatas'] : null;
        $this->container['dataSum'] = isset($data['dataSum']) ? $data['dataSum'] : null;
        $this->container['bigTable'] = isset($data['bigTable']) ? $data['bigTable'] : null;
        $this->container['warning'] = isset($data['warning']) ? $data['warning'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['explainSql'] = isset($data['explainSql']) ? $data['explainSql'] : null;
        $this->container['pageState'] = isset($data['pageState']) ? $data['pageState'] : null;
        $this->container['exceedData'] = isset($data['exceedData']) ? $data['exceedData'] : null;
        $this->container['executeStatus'] = isset($data['executeStatus']) ? $data['executeStatus'] : null;
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
    * Gets columnValues
    *  字段值
    *
    * @return object[]|null
    */
    public function getColumnValues()
    {
        return $this->container['columnValues'];
    }

    /**
    * Sets columnValues
    *
    * @param object[]|null $columnValues 字段值
    *
    * @return $this
    */
    public function setColumnValues($columnValues)
    {
        $this->container['columnValues'] = $columnValues;
        return $this;
    }

    /**
    * Gets metadata
    *  字段属性，字段名等
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\Column[]|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\Column[]|null $metadata 字段属性，字段名等
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets resultType
    *  结果集类型
    *
    * @return string|null
    */
    public function getResultType()
    {
        return $this->container['resultType'];
    }

    /**
    * Sets resultType
    *
    * @param string|null $resultType 结果集类型
    *
    * @return $this
    */
    public function setResultType($resultType)
    {
        $this->container['resultType'] = $resultType;
        return $this;
    }

    /**
    * Gets rows
    *  行数
    *
    * @return int|null
    */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
    * Sets rows
    *
    * @param int|null $rows 行数
    *
    * @return $this
    */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;
        return $this;
    }

    /**
    * Gets timeDelay
    *  执行耗时
    *
    * @return int|null
    */
    public function getTimeDelay()
    {
        return $this->container['timeDelay'];
    }

    /**
    * Sets timeDelay
    *
    * @param int|null $timeDelay 执行耗时
    *
    * @return $this
    */
    public function setTimeDelay($timeDelay)
    {
        $this->container['timeDelay'] = $timeDelay;
        return $this;
    }

    /**
    * Gets canEdit
    *  结果集是否可编辑
    *
    * @return bool|null
    */
    public function getCanEdit()
    {
        return $this->container['canEdit'];
    }

    /**
    * Sets canEdit
    *
    * @param bool|null $canEdit 结果集是否可编辑
    *
    * @return $this
    */
    public function setCanEdit($canEdit)
    {
        $this->container['canEdit'] = $canEdit;
        return $this;
    }

    /**
    * Gets canExport
    *  结果集是否可导出
    *
    * @return bool|null
    */
    public function getCanExport()
    {
        return $this->container['canExport'];
    }

    /**
    * Sets canExport
    *
    * @param bool|null $canExport 结果集是否可导出
    *
    * @return $this
    */
    public function setCanExport($canExport)
    {
        $this->container['canExport'] = $canExport;
        return $this;
    }

    /**
    * Gets editDbName
    *  编辑库名
    *
    * @return string|null
    */
    public function getEditDbName()
    {
        return $this->container['editDbName'];
    }

    /**
    * Sets editDbName
    *
    * @param string|null $editDbName 编辑库名
    *
    * @return $this
    */
    public function setEditDbName($editDbName)
    {
        $this->container['editDbName'] = $editDbName;
        return $this;
    }

    /**
    * Gets editTable
    *  编辑表名
    *
    * @return string|null
    */
    public function getEditTable()
    {
        return $this->container['editTable'];
    }

    /**
    * Sets editTable
    *
    * @param string|null $editTable 编辑表名
    *
    * @return $this
    */
    public function setEditTable($editTable)
    {
        $this->container['editTable'] = $editTable;
        return $this;
    }

    /**
    * Gets editPrimaryKeys
    *  主键信息
    *
    * @return string[]|null
    */
    public function getEditPrimaryKeys()
    {
        return $this->container['editPrimaryKeys'];
    }

    /**
    * Sets editPrimaryKeys
    *
    * @param string[]|null $editPrimaryKeys 主键信息
    *
    * @return $this
    */
    public function setEditPrimaryKeys($editPrimaryKeys)
    {
        $this->container['editPrimaryKeys'] = $editPrimaryKeys;
        return $this;
    }

    /**
    * Gets cannotEditReason
    *  不能编辑的原因
    *
    * @return int|null
    */
    public function getCannotEditReason()
    {
        return $this->container['cannotEditReason'];
    }

    /**
    * Sets cannotEditReason
    *
    * @param int|null $cannotEditReason 不能编辑的原因
    *
    * @return $this
    */
    public function setCannotEditReason($cannotEditReason)
    {
        $this->container['cannotEditReason'] = $cannotEditReason;
        return $this;
    }

    /**
    * Gets extendDatas
    *  额外信息
    *
    * @return object[]|null
    */
    public function getExtendDatas()
    {
        return $this->container['extendDatas'];
    }

    /**
    * Sets extendDatas
    *
    * @param object[]|null $extendDatas 额外信息
    *
    * @return $this
    */
    public function setExtendDatas($extendDatas)
    {
        $this->container['extendDatas'] = $extendDatas;
        return $this;
    }

    /**
    * Gets dataSum
    *  数据总量
    *
    * @return int|null
    */
    public function getDataSum()
    {
        return $this->container['dataSum'];
    }

    /**
    * Sets dataSum
    *
    * @param int|null $dataSum 数据总量
    *
    * @return $this
    */
    public function setDataSum($dataSum)
    {
        $this->container['dataSum'] = $dataSum;
        return $this;
    }

    /**
    * Gets bigTable
    *  是否为大表
    *
    * @return bool|null
    */
    public function getBigTable()
    {
        return $this->container['bigTable'];
    }

    /**
    * Sets bigTable
    *
    * @param bool|null $bigTable 是否为大表
    *
    * @return $this
    */
    public function setBigTable($bigTable)
    {
        $this->container['bigTable'] = $bigTable;
        return $this;
    }

    /**
    * Gets warning
    *  执行命令告警信息
    *
    * @return string[]|null
    */
    public function getWarning()
    {
        return $this->container['warning'];
    }

    /**
    * Sets warning
    *
    * @param string[]|null $warning 执行命令告警信息
    *
    * @return $this
    */
    public function setWarning($warning)
    {
        $this->container['warning'] = $warning;
        return $this;
    }

    /**
    * Gets sql
    *  要执行的SQL语句
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
    * @param string|null $sql 要执行的SQL语句
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets explainSql
    *  是否为执行计划语句
    *
    * @return bool|null
    */
    public function getExplainSql()
    {
        return $this->container['explainSql'];
    }

    /**
    * Sets explainSql
    *
    * @param bool|null $explainSql 是否为执行计划语句
    *
    * @return $this
    */
    public function setExplainSql($explainSql)
    {
        $this->container['explainSql'] = $explainSql;
        return $this;
    }

    /**
    * Gets pageState
    *  页面状态
    *
    * @return string|null
    */
    public function getPageState()
    {
        return $this->container['pageState'];
    }

    /**
    * Sets pageState
    *
    * @param string|null $pageState 页面状态
    *
    * @return $this
    */
    public function setPageState($pageState)
    {
        $this->container['pageState'] = $pageState;
        return $this;
    }

    /**
    * Gets exceedData
    *  查询结果是否超过规定大小
    *
    * @return bool|null
    */
    public function getExceedData()
    {
        return $this->container['exceedData'];
    }

    /**
    * Sets exceedData
    *
    * @param bool|null $exceedData 查询结果是否超过规定大小
    *
    * @return $this
    */
    public function setExceedData($exceedData)
    {
        $this->container['exceedData'] = $exceedData;
        return $this;
    }

    /**
    * Gets executeStatus
    *  执行状态（finished：执行完毕，pending：执行中）
    *
    * @return string|null
    */
    public function getExecuteStatus()
    {
        return $this->container['executeStatus'];
    }

    /**
    * Sets executeStatus
    *
    * @param string|null $executeStatus 执行状态（finished：执行完毕，pending：执行中）
    *
    * @return $this
    */
    public function setExecuteStatus($executeStatus)
    {
        $this->container['executeStatus'] = $executeStatus;
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


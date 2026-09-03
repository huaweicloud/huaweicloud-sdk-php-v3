<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchBinlogParseRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchBinlogParseRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  解析任务ID
    * startTime  开始时间（Unix timestamp），单位：毫秒
    * endTime  结束时间（Unix timestamp），单位：毫秒
    * dbName  数据库名称
    * tableName  表名称
    * typeList  SQL类型列表。取值范围：insert、update、delete、ddl
    * curPage  页码
    * perPage  每页记录数
    * columnList  筛选条件列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'int',
            'startTime' => 'int',
            'endTime' => 'int',
            'dbName' => 'string',
            'tableName' => 'string',
            'typeList' => 'string[]',
            'curPage' => 'int',
            'perPage' => 'int',
            'columnList' => '\HuaweiCloud\SDK\Das\V3\Model\FilterColumn[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  解析任务ID
    * startTime  开始时间（Unix timestamp），单位：毫秒
    * endTime  结束时间（Unix timestamp），单位：毫秒
    * dbName  数据库名称
    * tableName  表名称
    * typeList  SQL类型列表。取值范围：insert、update、delete、ddl
    * curPage  页码
    * perPage  每页记录数
    * columnList  筛选条件列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => 'int64',
        'startTime' => 'int64',
        'endTime' => 'int64',
        'dbName' => null,
        'tableName' => null,
        'typeList' => null,
        'curPage' => 'int32',
        'perPage' => 'int32',
        'columnList' => null
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
    * taskId  解析任务ID
    * startTime  开始时间（Unix timestamp），单位：毫秒
    * endTime  结束时间（Unix timestamp），单位：毫秒
    * dbName  数据库名称
    * tableName  表名称
    * typeList  SQL类型列表。取值范围：insert、update、delete、ddl
    * curPage  页码
    * perPage  每页记录数
    * columnList  筛选条件列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'dbName' => 'db_name',
            'tableName' => 'table_name',
            'typeList' => 'type_list',
            'curPage' => 'cur_page',
            'perPage' => 'per_page',
            'columnList' => 'column_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  解析任务ID
    * startTime  开始时间（Unix timestamp），单位：毫秒
    * endTime  结束时间（Unix timestamp），单位：毫秒
    * dbName  数据库名称
    * tableName  表名称
    * typeList  SQL类型列表。取值范围：insert、update、delete、ddl
    * curPage  页码
    * perPage  每页记录数
    * columnList  筛选条件列表
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'dbName' => 'setDbName',
            'tableName' => 'setTableName',
            'typeList' => 'setTypeList',
            'curPage' => 'setCurPage',
            'perPage' => 'setPerPage',
            'columnList' => 'setColumnList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  解析任务ID
    * startTime  开始时间（Unix timestamp），单位：毫秒
    * endTime  结束时间（Unix timestamp），单位：毫秒
    * dbName  数据库名称
    * tableName  表名称
    * typeList  SQL类型列表。取值范围：insert、update、delete、ddl
    * curPage  页码
    * perPage  每页记录数
    * columnList  筛选条件列表
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'dbName' => 'getDbName',
            'tableName' => 'getTableName',
            'typeList' => 'getTypeList',
            'curPage' => 'getCurPage',
            'perPage' => 'getPerPage',
            'columnList' => 'getColumnList'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['typeList'] = isset($data['typeList']) ? $data['typeList'] : null;
        $this->container['curPage'] = isset($data['curPage']) ? $data['curPage'] : null;
        $this->container['perPage'] = isset($data['perPage']) ? $data['perPage'] : null;
        $this->container['columnList'] = isset($data['columnList']) ? $data['columnList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
        if ($this->container['curPage'] === null) {
            $invalidProperties[] = "'curPage' can't be null";
        }
        if ($this->container['perPage'] === null) {
            $invalidProperties[] = "'perPage' can't be null";
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
    * Gets taskId
    *  解析任务ID
    *
    * @return int
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param int $taskId 解析任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 开始时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 结束时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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
    * Gets typeList
    *  SQL类型列表。取值范围：insert、update、delete、ddl
    *
    * @return string[]|null
    */
    public function getTypeList()
    {
        return $this->container['typeList'];
    }

    /**
    * Sets typeList
    *
    * @param string[]|null $typeList SQL类型列表。取值范围：insert、update、delete、ddl
    *
    * @return $this
    */
    public function setTypeList($typeList)
    {
        $this->container['typeList'] = $typeList;
        return $this;
    }

    /**
    * Gets curPage
    *  页码
    *
    * @return int
    */
    public function getCurPage()
    {
        return $this->container['curPage'];
    }

    /**
    * Sets curPage
    *
    * @param int $curPage 页码
    *
    * @return $this
    */
    public function setCurPage($curPage)
    {
        $this->container['curPage'] = $curPage;
        return $this;
    }

    /**
    * Gets perPage
    *  每页记录数
    *
    * @return int
    */
    public function getPerPage()
    {
        return $this->container['perPage'];
    }

    /**
    * Sets perPage
    *
    * @param int $perPage 每页记录数
    *
    * @return $this
    */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;
        return $this;
    }

    /**
    * Gets columnList
    *  筛选条件列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\FilterColumn[]|null
    */
    public function getColumnList()
    {
        return $this->container['columnList'];
    }

    /**
    * Sets columnList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\FilterColumn[]|null $columnList 筛选条件列表
    *
    * @return $this
    */
    public function setColumnList($columnList)
    {
        $this->container['columnList'] = $columnList;
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


<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobDetailRespRepairProgressInfoRepairProgressDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobDetailResp_repair_progress_info_repair_progress_details';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queryId  对比任务ID。
    * dbName  库名。
    * schemaName  schema名。
    * tableName  表名。
    * totalRowCount  总行数。
    * completeRowCount  完成行数。
    * filterRowCount  过滤行数。
    * repairedRowCount  已修复行数。
    * failedRowCount  失败行数。
    * repairStatus  修复状态。
    * startTime  开始时间。
    * updateTime  更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queryId' => 'string',
            'dbName' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string',
            'totalRowCount' => 'int',
            'completeRowCount' => 'int',
            'filterRowCount' => 'int',
            'repairedRowCount' => 'int',
            'failedRowCount' => 'int',
            'repairStatus' => 'int',
            'startTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queryId  对比任务ID。
    * dbName  库名。
    * schemaName  schema名。
    * tableName  表名。
    * totalRowCount  总行数。
    * completeRowCount  完成行数。
    * filterRowCount  过滤行数。
    * repairedRowCount  已修复行数。
    * failedRowCount  失败行数。
    * repairStatus  修复状态。
    * startTime  开始时间。
    * updateTime  更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queryId' => null,
        'dbName' => null,
        'schemaName' => null,
        'tableName' => null,
        'totalRowCount' => 'int32',
        'completeRowCount' => 'int32',
        'filterRowCount' => 'int32',
        'repairedRowCount' => 'int32',
        'failedRowCount' => 'int32',
        'repairStatus' => 'int32',
        'startTime' => null,
        'updateTime' => null
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
    * queryId  对比任务ID。
    * dbName  库名。
    * schemaName  schema名。
    * tableName  表名。
    * totalRowCount  总行数。
    * completeRowCount  完成行数。
    * filterRowCount  过滤行数。
    * repairedRowCount  已修复行数。
    * failedRowCount  失败行数。
    * repairStatus  修复状态。
    * startTime  开始时间。
    * updateTime  更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queryId' => 'query_id',
            'dbName' => 'db_name',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name',
            'totalRowCount' => 'total_row_count',
            'completeRowCount' => 'complete_row_count',
            'filterRowCount' => 'filter_row_count',
            'repairedRowCount' => 'repaired_row_count',
            'failedRowCount' => 'failed_row_count',
            'repairStatus' => 'repair_status',
            'startTime' => 'start_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queryId  对比任务ID。
    * dbName  库名。
    * schemaName  schema名。
    * tableName  表名。
    * totalRowCount  总行数。
    * completeRowCount  完成行数。
    * filterRowCount  过滤行数。
    * repairedRowCount  已修复行数。
    * failedRowCount  失败行数。
    * repairStatus  修复状态。
    * startTime  开始时间。
    * updateTime  更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'queryId' => 'setQueryId',
            'dbName' => 'setDbName',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName',
            'totalRowCount' => 'setTotalRowCount',
            'completeRowCount' => 'setCompleteRowCount',
            'filterRowCount' => 'setFilterRowCount',
            'repairedRowCount' => 'setRepairedRowCount',
            'failedRowCount' => 'setFailedRowCount',
            'repairStatus' => 'setRepairStatus',
            'startTime' => 'setStartTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queryId  对比任务ID。
    * dbName  库名。
    * schemaName  schema名。
    * tableName  表名。
    * totalRowCount  总行数。
    * completeRowCount  完成行数。
    * filterRowCount  过滤行数。
    * repairedRowCount  已修复行数。
    * failedRowCount  失败行数。
    * repairStatus  修复状态。
    * startTime  开始时间。
    * updateTime  更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'queryId' => 'getQueryId',
            'dbName' => 'getDbName',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName',
            'totalRowCount' => 'getTotalRowCount',
            'completeRowCount' => 'getCompleteRowCount',
            'filterRowCount' => 'getFilterRowCount',
            'repairedRowCount' => 'getRepairedRowCount',
            'failedRowCount' => 'getFailedRowCount',
            'repairStatus' => 'getRepairStatus',
            'startTime' => 'getStartTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['queryId'] = isset($data['queryId']) ? $data['queryId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['totalRowCount'] = isset($data['totalRowCount']) ? $data['totalRowCount'] : null;
        $this->container['completeRowCount'] = isset($data['completeRowCount']) ? $data['completeRowCount'] : null;
        $this->container['filterRowCount'] = isset($data['filterRowCount']) ? $data['filterRowCount'] : null;
        $this->container['repairedRowCount'] = isset($data['repairedRowCount']) ? $data['repairedRowCount'] : null;
        $this->container['failedRowCount'] = isset($data['failedRowCount']) ? $data['failedRowCount'] : null;
        $this->container['repairStatus'] = isset($data['repairStatus']) ? $data['repairStatus'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    * Gets queryId
    *  对比任务ID。
    *
    * @return string|null
    */
    public function getQueryId()
    {
        return $this->container['queryId'];
    }

    /**
    * Sets queryId
    *
    * @param string|null $queryId 对比任务ID。
    *
    * @return $this
    */
    public function setQueryId($queryId)
    {
        $this->container['queryId'] = $queryId;
        return $this;
    }

    /**
    * Gets dbName
    *  库名。
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
    * @param string|null $dbName 库名。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets schemaName
    *  schema名。
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
    * @param string|null $schemaName schema名。
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
    *  表名。
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
    * @param string|null $tableName 表名。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets totalRowCount
    *  总行数。
    *
    * @return int|null
    */
    public function getTotalRowCount()
    {
        return $this->container['totalRowCount'];
    }

    /**
    * Sets totalRowCount
    *
    * @param int|null $totalRowCount 总行数。
    *
    * @return $this
    */
    public function setTotalRowCount($totalRowCount)
    {
        $this->container['totalRowCount'] = $totalRowCount;
        return $this;
    }

    /**
    * Gets completeRowCount
    *  完成行数。
    *
    * @return int|null
    */
    public function getCompleteRowCount()
    {
        return $this->container['completeRowCount'];
    }

    /**
    * Sets completeRowCount
    *
    * @param int|null $completeRowCount 完成行数。
    *
    * @return $this
    */
    public function setCompleteRowCount($completeRowCount)
    {
        $this->container['completeRowCount'] = $completeRowCount;
        return $this;
    }

    /**
    * Gets filterRowCount
    *  过滤行数。
    *
    * @return int|null
    */
    public function getFilterRowCount()
    {
        return $this->container['filterRowCount'];
    }

    /**
    * Sets filterRowCount
    *
    * @param int|null $filterRowCount 过滤行数。
    *
    * @return $this
    */
    public function setFilterRowCount($filterRowCount)
    {
        $this->container['filterRowCount'] = $filterRowCount;
        return $this;
    }

    /**
    * Gets repairedRowCount
    *  已修复行数。
    *
    * @return int|null
    */
    public function getRepairedRowCount()
    {
        return $this->container['repairedRowCount'];
    }

    /**
    * Sets repairedRowCount
    *
    * @param int|null $repairedRowCount 已修复行数。
    *
    * @return $this
    */
    public function setRepairedRowCount($repairedRowCount)
    {
        $this->container['repairedRowCount'] = $repairedRowCount;
        return $this;
    }

    /**
    * Gets failedRowCount
    *  失败行数。
    *
    * @return int|null
    */
    public function getFailedRowCount()
    {
        return $this->container['failedRowCount'];
    }

    /**
    * Sets failedRowCount
    *
    * @param int|null $failedRowCount 失败行数。
    *
    * @return $this
    */
    public function setFailedRowCount($failedRowCount)
    {
        $this->container['failedRowCount'] = $failedRowCount;
        return $this;
    }

    /**
    * Gets repairStatus
    *  修复状态。
    *
    * @return int|null
    */
    public function getRepairStatus()
    {
        return $this->container['repairStatus'];
    }

    /**
    * Sets repairStatus
    *
    * @param int|null $repairStatus 修复状态。
    *
    * @return $this
    */
    public function setRepairStatus($repairStatus)
    {
        $this->container['repairStatus'] = $repairStatus;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 开始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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


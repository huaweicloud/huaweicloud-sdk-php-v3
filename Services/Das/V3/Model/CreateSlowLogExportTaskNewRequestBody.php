<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSlowLogExportTaskNewRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSlowLogExportTaskNewRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  开始时间（Unix timestamp），单位：毫秒
    * endTime  结束时间（Unix timestamp），单位：毫秒
    * bucketName  OBS桶名
    * filePath  文件目录
    * exportType  导出类型
    * sortField  排序字段
    * sortAsc  排序顺序（true：正序，false：逆序）
    * client  客户端
    * user  用户
    * killed  执行状态
    * executeTimeMin  最小执行时间（Unix timestamp），单位：毫秒
    * executeTimeMax  最大执行时间（Unix timestamp），单位：毫秒
    * minAvgExecuteTime  最小平均执行时间
    * maxAvgExecuteTime  最大平均执行时间
    * rowsMaxExamined  最大扫描行数
    * rowsMinExamined  最小扫描行数
    * fuzzySql  模糊SQL
    * operation  操作（可组合，用逗号分隔）
    * timeZone  时区
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'int',
            'endTime' => 'int',
            'bucketName' => 'string',
            'filePath' => 'string',
            'exportType' => 'string',
            'sortField' => 'string',
            'sortAsc' => 'bool',
            'client' => 'string',
            'user' => 'string',
            'killed' => 'string',
            'executeTimeMin' => 'int',
            'executeTimeMax' => 'int',
            'minAvgExecuteTime' => 'double',
            'maxAvgExecuteTime' => 'double',
            'rowsMaxExamined' => 'int',
            'rowsMinExamined' => 'int',
            'fuzzySql' => 'string',
            'operation' => 'string',
            'timeZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  开始时间（Unix timestamp），单位：毫秒
    * endTime  结束时间（Unix timestamp），单位：毫秒
    * bucketName  OBS桶名
    * filePath  文件目录
    * exportType  导出类型
    * sortField  排序字段
    * sortAsc  排序顺序（true：正序，false：逆序）
    * client  客户端
    * user  用户
    * killed  执行状态
    * executeTimeMin  最小执行时间（Unix timestamp），单位：毫秒
    * executeTimeMax  最大执行时间（Unix timestamp），单位：毫秒
    * minAvgExecuteTime  最小平均执行时间
    * maxAvgExecuteTime  最大平均执行时间
    * rowsMaxExamined  最大扫描行数
    * rowsMinExamined  最小扫描行数
    * fuzzySql  模糊SQL
    * operation  操作（可组合，用逗号分隔）
    * timeZone  时区
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'int64',
        'endTime' => 'int64',
        'bucketName' => null,
        'filePath' => null,
        'exportType' => null,
        'sortField' => null,
        'sortAsc' => null,
        'client' => null,
        'user' => null,
        'killed' => null,
        'executeTimeMin' => 'int64',
        'executeTimeMax' => 'int64',
        'minAvgExecuteTime' => 'double',
        'maxAvgExecuteTime' => 'double',
        'rowsMaxExamined' => 'int64',
        'rowsMinExamined' => 'int64',
        'fuzzySql' => null,
        'operation' => null,
        'timeZone' => null
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
    * startTime  开始时间（Unix timestamp），单位：毫秒
    * endTime  结束时间（Unix timestamp），单位：毫秒
    * bucketName  OBS桶名
    * filePath  文件目录
    * exportType  导出类型
    * sortField  排序字段
    * sortAsc  排序顺序（true：正序，false：逆序）
    * client  客户端
    * user  用户
    * killed  执行状态
    * executeTimeMin  最小执行时间（Unix timestamp），单位：毫秒
    * executeTimeMax  最大执行时间（Unix timestamp），单位：毫秒
    * minAvgExecuteTime  最小平均执行时间
    * maxAvgExecuteTime  最大平均执行时间
    * rowsMaxExamined  最大扫描行数
    * rowsMinExamined  最小扫描行数
    * fuzzySql  模糊SQL
    * operation  操作（可组合，用逗号分隔）
    * timeZone  时区
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'bucketName' => 'bucket_name',
            'filePath' => 'file_path',
            'exportType' => 'export_type',
            'sortField' => 'sort_field',
            'sortAsc' => 'sort_asc',
            'client' => 'client',
            'user' => 'user',
            'killed' => 'killed',
            'executeTimeMin' => 'execute_time_min',
            'executeTimeMax' => 'execute_time_max',
            'minAvgExecuteTime' => 'min_avg_execute_time',
            'maxAvgExecuteTime' => 'max_avg_execute_time',
            'rowsMaxExamined' => 'rows_max_examined',
            'rowsMinExamined' => 'rows_min_examined',
            'fuzzySql' => 'fuzzy_sql',
            'operation' => 'operation',
            'timeZone' => 'time_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  开始时间（Unix timestamp），单位：毫秒
    * endTime  结束时间（Unix timestamp），单位：毫秒
    * bucketName  OBS桶名
    * filePath  文件目录
    * exportType  导出类型
    * sortField  排序字段
    * sortAsc  排序顺序（true：正序，false：逆序）
    * client  客户端
    * user  用户
    * killed  执行状态
    * executeTimeMin  最小执行时间（Unix timestamp），单位：毫秒
    * executeTimeMax  最大执行时间（Unix timestamp），单位：毫秒
    * minAvgExecuteTime  最小平均执行时间
    * maxAvgExecuteTime  最大平均执行时间
    * rowsMaxExamined  最大扫描行数
    * rowsMinExamined  最小扫描行数
    * fuzzySql  模糊SQL
    * operation  操作（可组合，用逗号分隔）
    * timeZone  时区
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'bucketName' => 'setBucketName',
            'filePath' => 'setFilePath',
            'exportType' => 'setExportType',
            'sortField' => 'setSortField',
            'sortAsc' => 'setSortAsc',
            'client' => 'setClient',
            'user' => 'setUser',
            'killed' => 'setKilled',
            'executeTimeMin' => 'setExecuteTimeMin',
            'executeTimeMax' => 'setExecuteTimeMax',
            'minAvgExecuteTime' => 'setMinAvgExecuteTime',
            'maxAvgExecuteTime' => 'setMaxAvgExecuteTime',
            'rowsMaxExamined' => 'setRowsMaxExamined',
            'rowsMinExamined' => 'setRowsMinExamined',
            'fuzzySql' => 'setFuzzySql',
            'operation' => 'setOperation',
            'timeZone' => 'setTimeZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  开始时间（Unix timestamp），单位：毫秒
    * endTime  结束时间（Unix timestamp），单位：毫秒
    * bucketName  OBS桶名
    * filePath  文件目录
    * exportType  导出类型
    * sortField  排序字段
    * sortAsc  排序顺序（true：正序，false：逆序）
    * client  客户端
    * user  用户
    * killed  执行状态
    * executeTimeMin  最小执行时间（Unix timestamp），单位：毫秒
    * executeTimeMax  最大执行时间（Unix timestamp），单位：毫秒
    * minAvgExecuteTime  最小平均执行时间
    * maxAvgExecuteTime  最大平均执行时间
    * rowsMaxExamined  最大扫描行数
    * rowsMinExamined  最小扫描行数
    * fuzzySql  模糊SQL
    * operation  操作（可组合，用逗号分隔）
    * timeZone  时区
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'bucketName' => 'getBucketName',
            'filePath' => 'getFilePath',
            'exportType' => 'getExportType',
            'sortField' => 'getSortField',
            'sortAsc' => 'getSortAsc',
            'client' => 'getClient',
            'user' => 'getUser',
            'killed' => 'getKilled',
            'executeTimeMin' => 'getExecuteTimeMin',
            'executeTimeMax' => 'getExecuteTimeMax',
            'minAvgExecuteTime' => 'getMinAvgExecuteTime',
            'maxAvgExecuteTime' => 'getMaxAvgExecuteTime',
            'rowsMaxExamined' => 'getRowsMaxExamined',
            'rowsMinExamined' => 'getRowsMinExamined',
            'fuzzySql' => 'getFuzzySql',
            'operation' => 'getOperation',
            'timeZone' => 'getTimeZone'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['exportType'] = isset($data['exportType']) ? $data['exportType'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortAsc'] = isset($data['sortAsc']) ? $data['sortAsc'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['killed'] = isset($data['killed']) ? $data['killed'] : null;
        $this->container['executeTimeMin'] = isset($data['executeTimeMin']) ? $data['executeTimeMin'] : null;
        $this->container['executeTimeMax'] = isset($data['executeTimeMax']) ? $data['executeTimeMax'] : null;
        $this->container['minAvgExecuteTime'] = isset($data['minAvgExecuteTime']) ? $data['minAvgExecuteTime'] : null;
        $this->container['maxAvgExecuteTime'] = isset($data['maxAvgExecuteTime']) ? $data['maxAvgExecuteTime'] : null;
        $this->container['rowsMaxExamined'] = isset($data['rowsMaxExamined']) ? $data['rowsMaxExamined'] : null;
        $this->container['rowsMinExamined'] = isset($data['rowsMinExamined']) ? $data['rowsMinExamined'] : null;
        $this->container['fuzzySql'] = isset($data['fuzzySql']) ? $data['fuzzySql'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['bucketName'] === null) {
            $invalidProperties[] = "'bucketName' can't be null";
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
    * Gets startTime
    *  开始时间（Unix timestamp），单位：毫秒
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 开始时间（Unix timestamp），单位：毫秒
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
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 结束时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets bucketName
    *  OBS桶名
    *
    * @return string
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string $bucketName OBS桶名
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets filePath
    *  文件目录
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath 文件目录
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets exportType
    *  导出类型
    *
    * @return string|null
    */
    public function getExportType()
    {
        return $this->container['exportType'];
    }

    /**
    * Sets exportType
    *
    * @param string|null $exportType 导出类型
    *
    * @return $this
    */
    public function setExportType($exportType)
    {
        $this->container['exportType'] = $exportType;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField 排序字段
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets sortAsc
    *  排序顺序（true：正序，false：逆序）
    *
    * @return bool|null
    */
    public function getSortAsc()
    {
        return $this->container['sortAsc'];
    }

    /**
    * Sets sortAsc
    *
    * @param bool|null $sortAsc 排序顺序（true：正序，false：逆序）
    *
    * @return $this
    */
    public function setSortAsc($sortAsc)
    {
        $this->container['sortAsc'] = $sortAsc;
        return $this;
    }

    /**
    * Gets client
    *  客户端
    *
    * @return string|null
    */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
    * Sets client
    *
    * @param string|null $client 客户端
    *
    * @return $this
    */
    public function setClient($client)
    {
        $this->container['client'] = $client;
        return $this;
    }

    /**
    * Gets user
    *  用户
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 用户
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets killed
    *  执行状态
    *
    * @return string|null
    */
    public function getKilled()
    {
        return $this->container['killed'];
    }

    /**
    * Sets killed
    *
    * @param string|null $killed 执行状态
    *
    * @return $this
    */
    public function setKilled($killed)
    {
        $this->container['killed'] = $killed;
        return $this;
    }

    /**
    * Gets executeTimeMin
    *  最小执行时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getExecuteTimeMin()
    {
        return $this->container['executeTimeMin'];
    }

    /**
    * Sets executeTimeMin
    *
    * @param int|null $executeTimeMin 最小执行时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setExecuteTimeMin($executeTimeMin)
    {
        $this->container['executeTimeMin'] = $executeTimeMin;
        return $this;
    }

    /**
    * Gets executeTimeMax
    *  最大执行时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getExecuteTimeMax()
    {
        return $this->container['executeTimeMax'];
    }

    /**
    * Sets executeTimeMax
    *
    * @param int|null $executeTimeMax 最大执行时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setExecuteTimeMax($executeTimeMax)
    {
        $this->container['executeTimeMax'] = $executeTimeMax;
        return $this;
    }

    /**
    * Gets minAvgExecuteTime
    *  最小平均执行时间
    *
    * @return double|null
    */
    public function getMinAvgExecuteTime()
    {
        return $this->container['minAvgExecuteTime'];
    }

    /**
    * Sets minAvgExecuteTime
    *
    * @param double|null $minAvgExecuteTime 最小平均执行时间
    *
    * @return $this
    */
    public function setMinAvgExecuteTime($minAvgExecuteTime)
    {
        $this->container['minAvgExecuteTime'] = $minAvgExecuteTime;
        return $this;
    }

    /**
    * Gets maxAvgExecuteTime
    *  最大平均执行时间
    *
    * @return double|null
    */
    public function getMaxAvgExecuteTime()
    {
        return $this->container['maxAvgExecuteTime'];
    }

    /**
    * Sets maxAvgExecuteTime
    *
    * @param double|null $maxAvgExecuteTime 最大平均执行时间
    *
    * @return $this
    */
    public function setMaxAvgExecuteTime($maxAvgExecuteTime)
    {
        $this->container['maxAvgExecuteTime'] = $maxAvgExecuteTime;
        return $this;
    }

    /**
    * Gets rowsMaxExamined
    *  最大扫描行数
    *
    * @return int|null
    */
    public function getRowsMaxExamined()
    {
        return $this->container['rowsMaxExamined'];
    }

    /**
    * Sets rowsMaxExamined
    *
    * @param int|null $rowsMaxExamined 最大扫描行数
    *
    * @return $this
    */
    public function setRowsMaxExamined($rowsMaxExamined)
    {
        $this->container['rowsMaxExamined'] = $rowsMaxExamined;
        return $this;
    }

    /**
    * Gets rowsMinExamined
    *  最小扫描行数
    *
    * @return int|null
    */
    public function getRowsMinExamined()
    {
        return $this->container['rowsMinExamined'];
    }

    /**
    * Sets rowsMinExamined
    *
    * @param int|null $rowsMinExamined 最小扫描行数
    *
    * @return $this
    */
    public function setRowsMinExamined($rowsMinExamined)
    {
        $this->container['rowsMinExamined'] = $rowsMinExamined;
        return $this;
    }

    /**
    * Gets fuzzySql
    *  模糊SQL
    *
    * @return string|null
    */
    public function getFuzzySql()
    {
        return $this->container['fuzzySql'];
    }

    /**
    * Sets fuzzySql
    *
    * @param string|null $fuzzySql 模糊SQL
    *
    * @return $this
    */
    public function setFuzzySql($fuzzySql)
    {
        $this->container['fuzzySql'] = $fuzzySql;
        return $this;
    }

    /**
    * Gets operation
    *  操作（可组合，用逗号分隔）
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation 操作（可组合，用逗号分隔）
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
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


<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryTopSqlsResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryTopSqlsResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  对查询计算的二进制哈希值，用于标识具有类似逻辑的查询。
    * statement  当前执行的SQL语句。
    * query  SQL全文。
    * dbName  数据库名称。
    * executionCount  执行总次数。
    * executionCountPercent  执行总次数百分比，范围0.0000-1.0000。
    * totalCpuTime  总CPU耗时，单位ms。
    * totalCpuTimePercent  总CPU耗时百分比，范围0.0000-1.0000。
    * avgCpuTime  平均CPU耗时，单位ms。
    * avgCpuTimePercent  平均CPU耗时百分比，范围0.0000-1.0000。
    * totalDurationTime  总执行耗时。
    * totalDurationTimePercent  总执行耗时百分比，范围0.0000-1.0000。
    * avgDurationTime  平均执行耗时。
    * avgDurationTimePercent  平均执行耗时百分比，范围0.0000-1.0000。
    * totalRows  总返回行。
    * totalRowsPercent  总返回行百分比，范围0.0000-1.0000。
    * avgRows  平均返回行。
    * avgRowsPercent  平均返回行百分比，范围0.0000-1.0000。
    * totalLogicalReads  总逻辑读消耗。
    * totalLogicalReadsPercent  总逻辑读百分比，范围0.0000-1.0000。
    * avgLogicalReads  平均逻辑读消耗。
    * avgLogicalReadsPercent  平均逻辑读百分比，范围0.0000-1.0000。
    * avgLogicalWrite  平均逻辑写消耗。
    * avgLogicalWritePercent  平均逻辑写百分比，范围0.0000-1.0000。
    * totalLogicalWrite  总逻辑写消耗。
    * totalLogicalWritePercent  总逻辑写百分比，范围0.0000-1.0000。
    * avgPhysicalReads  平均物理读消耗。
    * avgPhysicalReadsPercent  平均物理读百分比，范围0.0000-1.0000。
    * totalPhysicalReads  总物理读消耗。
    * totalPhysicalReadsPercent  总物理读百分比，范围0.0000-1.0000。
    * lastExecutionTime  上次执行时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'statement' => 'string',
            'query' => 'string',
            'dbName' => 'string',
            'executionCount' => 'string',
            'executionCountPercent' => 'string',
            'totalCpuTime' => 'string',
            'totalCpuTimePercent' => 'string',
            'avgCpuTime' => 'string',
            'avgCpuTimePercent' => 'string',
            'totalDurationTime' => 'string',
            'totalDurationTimePercent' => 'string',
            'avgDurationTime' => 'string',
            'avgDurationTimePercent' => 'string',
            'totalRows' => 'string',
            'totalRowsPercent' => 'string',
            'avgRows' => 'string',
            'avgRowsPercent' => 'string',
            'totalLogicalReads' => 'string',
            'totalLogicalReadsPercent' => 'string',
            'avgLogicalReads' => 'string',
            'avgLogicalReadsPercent' => 'string',
            'avgLogicalWrite' => 'string',
            'avgLogicalWritePercent' => 'string',
            'totalLogicalWrite' => 'string',
            'totalLogicalWritePercent' => 'string',
            'avgPhysicalReads' => 'string',
            'avgPhysicalReadsPercent' => 'string',
            'totalPhysicalReads' => 'string',
            'totalPhysicalReadsPercent' => 'string',
            'lastExecutionTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  对查询计算的二进制哈希值，用于标识具有类似逻辑的查询。
    * statement  当前执行的SQL语句。
    * query  SQL全文。
    * dbName  数据库名称。
    * executionCount  执行总次数。
    * executionCountPercent  执行总次数百分比，范围0.0000-1.0000。
    * totalCpuTime  总CPU耗时，单位ms。
    * totalCpuTimePercent  总CPU耗时百分比，范围0.0000-1.0000。
    * avgCpuTime  平均CPU耗时，单位ms。
    * avgCpuTimePercent  平均CPU耗时百分比，范围0.0000-1.0000。
    * totalDurationTime  总执行耗时。
    * totalDurationTimePercent  总执行耗时百分比，范围0.0000-1.0000。
    * avgDurationTime  平均执行耗时。
    * avgDurationTimePercent  平均执行耗时百分比，范围0.0000-1.0000。
    * totalRows  总返回行。
    * totalRowsPercent  总返回行百分比，范围0.0000-1.0000。
    * avgRows  平均返回行。
    * avgRowsPercent  平均返回行百分比，范围0.0000-1.0000。
    * totalLogicalReads  总逻辑读消耗。
    * totalLogicalReadsPercent  总逻辑读百分比，范围0.0000-1.0000。
    * avgLogicalReads  平均逻辑读消耗。
    * avgLogicalReadsPercent  平均逻辑读百分比，范围0.0000-1.0000。
    * avgLogicalWrite  平均逻辑写消耗。
    * avgLogicalWritePercent  平均逻辑写百分比，范围0.0000-1.0000。
    * totalLogicalWrite  总逻辑写消耗。
    * totalLogicalWritePercent  总逻辑写百分比，范围0.0000-1.0000。
    * avgPhysicalReads  平均物理读消耗。
    * avgPhysicalReadsPercent  平均物理读百分比，范围0.0000-1.0000。
    * totalPhysicalReads  总物理读消耗。
    * totalPhysicalReadsPercent  总物理读百分比，范围0.0000-1.0000。
    * lastExecutionTime  上次执行时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'statement' => null,
        'query' => null,
        'dbName' => null,
        'executionCount' => null,
        'executionCountPercent' => null,
        'totalCpuTime' => null,
        'totalCpuTimePercent' => null,
        'avgCpuTime' => null,
        'avgCpuTimePercent' => null,
        'totalDurationTime' => null,
        'totalDurationTimePercent' => null,
        'avgDurationTime' => null,
        'avgDurationTimePercent' => null,
        'totalRows' => null,
        'totalRowsPercent' => null,
        'avgRows' => null,
        'avgRowsPercent' => null,
        'totalLogicalReads' => null,
        'totalLogicalReadsPercent' => null,
        'avgLogicalReads' => null,
        'avgLogicalReadsPercent' => null,
        'avgLogicalWrite' => null,
        'avgLogicalWritePercent' => null,
        'totalLogicalWrite' => null,
        'totalLogicalWritePercent' => null,
        'avgPhysicalReads' => null,
        'avgPhysicalReadsPercent' => null,
        'totalPhysicalReads' => null,
        'totalPhysicalReadsPercent' => null,
        'lastExecutionTime' => null
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
    * id  对查询计算的二进制哈希值，用于标识具有类似逻辑的查询。
    * statement  当前执行的SQL语句。
    * query  SQL全文。
    * dbName  数据库名称。
    * executionCount  执行总次数。
    * executionCountPercent  执行总次数百分比，范围0.0000-1.0000。
    * totalCpuTime  总CPU耗时，单位ms。
    * totalCpuTimePercent  总CPU耗时百分比，范围0.0000-1.0000。
    * avgCpuTime  平均CPU耗时，单位ms。
    * avgCpuTimePercent  平均CPU耗时百分比，范围0.0000-1.0000。
    * totalDurationTime  总执行耗时。
    * totalDurationTimePercent  总执行耗时百分比，范围0.0000-1.0000。
    * avgDurationTime  平均执行耗时。
    * avgDurationTimePercent  平均执行耗时百分比，范围0.0000-1.0000。
    * totalRows  总返回行。
    * totalRowsPercent  总返回行百分比，范围0.0000-1.0000。
    * avgRows  平均返回行。
    * avgRowsPercent  平均返回行百分比，范围0.0000-1.0000。
    * totalLogicalReads  总逻辑读消耗。
    * totalLogicalReadsPercent  总逻辑读百分比，范围0.0000-1.0000。
    * avgLogicalReads  平均逻辑读消耗。
    * avgLogicalReadsPercent  平均逻辑读百分比，范围0.0000-1.0000。
    * avgLogicalWrite  平均逻辑写消耗。
    * avgLogicalWritePercent  平均逻辑写百分比，范围0.0000-1.0000。
    * totalLogicalWrite  总逻辑写消耗。
    * totalLogicalWritePercent  总逻辑写百分比，范围0.0000-1.0000。
    * avgPhysicalReads  平均物理读消耗。
    * avgPhysicalReadsPercent  平均物理读百分比，范围0.0000-1.0000。
    * totalPhysicalReads  总物理读消耗。
    * totalPhysicalReadsPercent  总物理读百分比，范围0.0000-1.0000。
    * lastExecutionTime  上次执行时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'statement' => 'statement',
            'query' => 'query',
            'dbName' => 'db_name',
            'executionCount' => 'execution_count',
            'executionCountPercent' => 'execution_count_percent',
            'totalCpuTime' => 'total_cpu_time',
            'totalCpuTimePercent' => 'total_cpu_time_percent',
            'avgCpuTime' => 'avg_cpu_time',
            'avgCpuTimePercent' => 'avg_cpu_time_percent',
            'totalDurationTime' => 'total_duration_time',
            'totalDurationTimePercent' => 'total_duration_time_percent',
            'avgDurationTime' => 'avg_duration_time',
            'avgDurationTimePercent' => 'avg_duration_time_percent',
            'totalRows' => 'total_rows',
            'totalRowsPercent' => 'total_rows_percent',
            'avgRows' => 'avg_rows',
            'avgRowsPercent' => 'avg_rows_percent',
            'totalLogicalReads' => 'total_logical_reads',
            'totalLogicalReadsPercent' => 'total_logical_reads_percent',
            'avgLogicalReads' => 'avg_logical_reads',
            'avgLogicalReadsPercent' => 'avg_logical_reads_percent',
            'avgLogicalWrite' => 'avg_logical_write',
            'avgLogicalWritePercent' => 'avg_logical_write_percent',
            'totalLogicalWrite' => 'total_logical_write',
            'totalLogicalWritePercent' => 'total_logical_write_percent',
            'avgPhysicalReads' => 'avg_physical_reads',
            'avgPhysicalReadsPercent' => 'avg_physical_reads_percent',
            'totalPhysicalReads' => 'total_physical_reads',
            'totalPhysicalReadsPercent' => 'total_physical_reads_percent',
            'lastExecutionTime' => 'last_execution_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  对查询计算的二进制哈希值，用于标识具有类似逻辑的查询。
    * statement  当前执行的SQL语句。
    * query  SQL全文。
    * dbName  数据库名称。
    * executionCount  执行总次数。
    * executionCountPercent  执行总次数百分比，范围0.0000-1.0000。
    * totalCpuTime  总CPU耗时，单位ms。
    * totalCpuTimePercent  总CPU耗时百分比，范围0.0000-1.0000。
    * avgCpuTime  平均CPU耗时，单位ms。
    * avgCpuTimePercent  平均CPU耗时百分比，范围0.0000-1.0000。
    * totalDurationTime  总执行耗时。
    * totalDurationTimePercent  总执行耗时百分比，范围0.0000-1.0000。
    * avgDurationTime  平均执行耗时。
    * avgDurationTimePercent  平均执行耗时百分比，范围0.0000-1.0000。
    * totalRows  总返回行。
    * totalRowsPercent  总返回行百分比，范围0.0000-1.0000。
    * avgRows  平均返回行。
    * avgRowsPercent  平均返回行百分比，范围0.0000-1.0000。
    * totalLogicalReads  总逻辑读消耗。
    * totalLogicalReadsPercent  总逻辑读百分比，范围0.0000-1.0000。
    * avgLogicalReads  平均逻辑读消耗。
    * avgLogicalReadsPercent  平均逻辑读百分比，范围0.0000-1.0000。
    * avgLogicalWrite  平均逻辑写消耗。
    * avgLogicalWritePercent  平均逻辑写百分比，范围0.0000-1.0000。
    * totalLogicalWrite  总逻辑写消耗。
    * totalLogicalWritePercent  总逻辑写百分比，范围0.0000-1.0000。
    * avgPhysicalReads  平均物理读消耗。
    * avgPhysicalReadsPercent  平均物理读百分比，范围0.0000-1.0000。
    * totalPhysicalReads  总物理读消耗。
    * totalPhysicalReadsPercent  总物理读百分比，范围0.0000-1.0000。
    * lastExecutionTime  上次执行时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'statement' => 'setStatement',
            'query' => 'setQuery',
            'dbName' => 'setDbName',
            'executionCount' => 'setExecutionCount',
            'executionCountPercent' => 'setExecutionCountPercent',
            'totalCpuTime' => 'setTotalCpuTime',
            'totalCpuTimePercent' => 'setTotalCpuTimePercent',
            'avgCpuTime' => 'setAvgCpuTime',
            'avgCpuTimePercent' => 'setAvgCpuTimePercent',
            'totalDurationTime' => 'setTotalDurationTime',
            'totalDurationTimePercent' => 'setTotalDurationTimePercent',
            'avgDurationTime' => 'setAvgDurationTime',
            'avgDurationTimePercent' => 'setAvgDurationTimePercent',
            'totalRows' => 'setTotalRows',
            'totalRowsPercent' => 'setTotalRowsPercent',
            'avgRows' => 'setAvgRows',
            'avgRowsPercent' => 'setAvgRowsPercent',
            'totalLogicalReads' => 'setTotalLogicalReads',
            'totalLogicalReadsPercent' => 'setTotalLogicalReadsPercent',
            'avgLogicalReads' => 'setAvgLogicalReads',
            'avgLogicalReadsPercent' => 'setAvgLogicalReadsPercent',
            'avgLogicalWrite' => 'setAvgLogicalWrite',
            'avgLogicalWritePercent' => 'setAvgLogicalWritePercent',
            'totalLogicalWrite' => 'setTotalLogicalWrite',
            'totalLogicalWritePercent' => 'setTotalLogicalWritePercent',
            'avgPhysicalReads' => 'setAvgPhysicalReads',
            'avgPhysicalReadsPercent' => 'setAvgPhysicalReadsPercent',
            'totalPhysicalReads' => 'setTotalPhysicalReads',
            'totalPhysicalReadsPercent' => 'setTotalPhysicalReadsPercent',
            'lastExecutionTime' => 'setLastExecutionTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  对查询计算的二进制哈希值，用于标识具有类似逻辑的查询。
    * statement  当前执行的SQL语句。
    * query  SQL全文。
    * dbName  数据库名称。
    * executionCount  执行总次数。
    * executionCountPercent  执行总次数百分比，范围0.0000-1.0000。
    * totalCpuTime  总CPU耗时，单位ms。
    * totalCpuTimePercent  总CPU耗时百分比，范围0.0000-1.0000。
    * avgCpuTime  平均CPU耗时，单位ms。
    * avgCpuTimePercent  平均CPU耗时百分比，范围0.0000-1.0000。
    * totalDurationTime  总执行耗时。
    * totalDurationTimePercent  总执行耗时百分比，范围0.0000-1.0000。
    * avgDurationTime  平均执行耗时。
    * avgDurationTimePercent  平均执行耗时百分比，范围0.0000-1.0000。
    * totalRows  总返回行。
    * totalRowsPercent  总返回行百分比，范围0.0000-1.0000。
    * avgRows  平均返回行。
    * avgRowsPercent  平均返回行百分比，范围0.0000-1.0000。
    * totalLogicalReads  总逻辑读消耗。
    * totalLogicalReadsPercent  总逻辑读百分比，范围0.0000-1.0000。
    * avgLogicalReads  平均逻辑读消耗。
    * avgLogicalReadsPercent  平均逻辑读百分比，范围0.0000-1.0000。
    * avgLogicalWrite  平均逻辑写消耗。
    * avgLogicalWritePercent  平均逻辑写百分比，范围0.0000-1.0000。
    * totalLogicalWrite  总逻辑写消耗。
    * totalLogicalWritePercent  总逻辑写百分比，范围0.0000-1.0000。
    * avgPhysicalReads  平均物理读消耗。
    * avgPhysicalReadsPercent  平均物理读百分比，范围0.0000-1.0000。
    * totalPhysicalReads  总物理读消耗。
    * totalPhysicalReadsPercent  总物理读百分比，范围0.0000-1.0000。
    * lastExecutionTime  上次执行时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'statement' => 'getStatement',
            'query' => 'getQuery',
            'dbName' => 'getDbName',
            'executionCount' => 'getExecutionCount',
            'executionCountPercent' => 'getExecutionCountPercent',
            'totalCpuTime' => 'getTotalCpuTime',
            'totalCpuTimePercent' => 'getTotalCpuTimePercent',
            'avgCpuTime' => 'getAvgCpuTime',
            'avgCpuTimePercent' => 'getAvgCpuTimePercent',
            'totalDurationTime' => 'getTotalDurationTime',
            'totalDurationTimePercent' => 'getTotalDurationTimePercent',
            'avgDurationTime' => 'getAvgDurationTime',
            'avgDurationTimePercent' => 'getAvgDurationTimePercent',
            'totalRows' => 'getTotalRows',
            'totalRowsPercent' => 'getTotalRowsPercent',
            'avgRows' => 'getAvgRows',
            'avgRowsPercent' => 'getAvgRowsPercent',
            'totalLogicalReads' => 'getTotalLogicalReads',
            'totalLogicalReadsPercent' => 'getTotalLogicalReadsPercent',
            'avgLogicalReads' => 'getAvgLogicalReads',
            'avgLogicalReadsPercent' => 'getAvgLogicalReadsPercent',
            'avgLogicalWrite' => 'getAvgLogicalWrite',
            'avgLogicalWritePercent' => 'getAvgLogicalWritePercent',
            'totalLogicalWrite' => 'getTotalLogicalWrite',
            'totalLogicalWritePercent' => 'getTotalLogicalWritePercent',
            'avgPhysicalReads' => 'getAvgPhysicalReads',
            'avgPhysicalReadsPercent' => 'getAvgPhysicalReadsPercent',
            'totalPhysicalReads' => 'getTotalPhysicalReads',
            'totalPhysicalReadsPercent' => 'getTotalPhysicalReadsPercent',
            'lastExecutionTime' => 'getLastExecutionTime'
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
        $this->container['statement'] = isset($data['statement']) ? $data['statement'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['executionCount'] = isset($data['executionCount']) ? $data['executionCount'] : null;
        $this->container['executionCountPercent'] = isset($data['executionCountPercent']) ? $data['executionCountPercent'] : null;
        $this->container['totalCpuTime'] = isset($data['totalCpuTime']) ? $data['totalCpuTime'] : null;
        $this->container['totalCpuTimePercent'] = isset($data['totalCpuTimePercent']) ? $data['totalCpuTimePercent'] : null;
        $this->container['avgCpuTime'] = isset($data['avgCpuTime']) ? $data['avgCpuTime'] : null;
        $this->container['avgCpuTimePercent'] = isset($data['avgCpuTimePercent']) ? $data['avgCpuTimePercent'] : null;
        $this->container['totalDurationTime'] = isset($data['totalDurationTime']) ? $data['totalDurationTime'] : null;
        $this->container['totalDurationTimePercent'] = isset($data['totalDurationTimePercent']) ? $data['totalDurationTimePercent'] : null;
        $this->container['avgDurationTime'] = isset($data['avgDurationTime']) ? $data['avgDurationTime'] : null;
        $this->container['avgDurationTimePercent'] = isset($data['avgDurationTimePercent']) ? $data['avgDurationTimePercent'] : null;
        $this->container['totalRows'] = isset($data['totalRows']) ? $data['totalRows'] : null;
        $this->container['totalRowsPercent'] = isset($data['totalRowsPercent']) ? $data['totalRowsPercent'] : null;
        $this->container['avgRows'] = isset($data['avgRows']) ? $data['avgRows'] : null;
        $this->container['avgRowsPercent'] = isset($data['avgRowsPercent']) ? $data['avgRowsPercent'] : null;
        $this->container['totalLogicalReads'] = isset($data['totalLogicalReads']) ? $data['totalLogicalReads'] : null;
        $this->container['totalLogicalReadsPercent'] = isset($data['totalLogicalReadsPercent']) ? $data['totalLogicalReadsPercent'] : null;
        $this->container['avgLogicalReads'] = isset($data['avgLogicalReads']) ? $data['avgLogicalReads'] : null;
        $this->container['avgLogicalReadsPercent'] = isset($data['avgLogicalReadsPercent']) ? $data['avgLogicalReadsPercent'] : null;
        $this->container['avgLogicalWrite'] = isset($data['avgLogicalWrite']) ? $data['avgLogicalWrite'] : null;
        $this->container['avgLogicalWritePercent'] = isset($data['avgLogicalWritePercent']) ? $data['avgLogicalWritePercent'] : null;
        $this->container['totalLogicalWrite'] = isset($data['totalLogicalWrite']) ? $data['totalLogicalWrite'] : null;
        $this->container['totalLogicalWritePercent'] = isset($data['totalLogicalWritePercent']) ? $data['totalLogicalWritePercent'] : null;
        $this->container['avgPhysicalReads'] = isset($data['avgPhysicalReads']) ? $data['avgPhysicalReads'] : null;
        $this->container['avgPhysicalReadsPercent'] = isset($data['avgPhysicalReadsPercent']) ? $data['avgPhysicalReadsPercent'] : null;
        $this->container['totalPhysicalReads'] = isset($data['totalPhysicalReads']) ? $data['totalPhysicalReads'] : null;
        $this->container['totalPhysicalReadsPercent'] = isset($data['totalPhysicalReadsPercent']) ? $data['totalPhysicalReadsPercent'] : null;
        $this->container['lastExecutionTime'] = isset($data['lastExecutionTime']) ? $data['lastExecutionTime'] : null;
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
    *  对查询计算的二进制哈希值，用于标识具有类似逻辑的查询。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 对查询计算的二进制哈希值，用于标识具有类似逻辑的查询。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets statement
    *  当前执行的SQL语句。
    *
    * @return string|null
    */
    public function getStatement()
    {
        return $this->container['statement'];
    }

    /**
    * Sets statement
    *
    * @param string|null $statement 当前执行的SQL语句。
    *
    * @return $this
    */
    public function setStatement($statement)
    {
        $this->container['statement'] = $statement;
        return $this;
    }

    /**
    * Gets query
    *  SQL全文。
    *
    * @return string|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string|null $query SQL全文。
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称。
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
    * @param string|null $dbName 数据库名称。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets executionCount
    *  执行总次数。
    *
    * @return string|null
    */
    public function getExecutionCount()
    {
        return $this->container['executionCount'];
    }

    /**
    * Sets executionCount
    *
    * @param string|null $executionCount 执行总次数。
    *
    * @return $this
    */
    public function setExecutionCount($executionCount)
    {
        $this->container['executionCount'] = $executionCount;
        return $this;
    }

    /**
    * Gets executionCountPercent
    *  执行总次数百分比，范围0.0000-1.0000。
    *
    * @return string|null
    */
    public function getExecutionCountPercent()
    {
        return $this->container['executionCountPercent'];
    }

    /**
    * Sets executionCountPercent
    *
    * @param string|null $executionCountPercent 执行总次数百分比，范围0.0000-1.0000。
    *
    * @return $this
    */
    public function setExecutionCountPercent($executionCountPercent)
    {
        $this->container['executionCountPercent'] = $executionCountPercent;
        return $this;
    }

    /**
    * Gets totalCpuTime
    *  总CPU耗时，单位ms。
    *
    * @return string|null
    */
    public function getTotalCpuTime()
    {
        return $this->container['totalCpuTime'];
    }

    /**
    * Sets totalCpuTime
    *
    * @param string|null $totalCpuTime 总CPU耗时，单位ms。
    *
    * @return $this
    */
    public function setTotalCpuTime($totalCpuTime)
    {
        $this->container['totalCpuTime'] = $totalCpuTime;
        return $this;
    }

    /**
    * Gets totalCpuTimePercent
    *  总CPU耗时百分比，范围0.0000-1.0000。
    *
    * @return string|null
    */
    public function getTotalCpuTimePercent()
    {
        return $this->container['totalCpuTimePercent'];
    }

    /**
    * Sets totalCpuTimePercent
    *
    * @param string|null $totalCpuTimePercent 总CPU耗时百分比，范围0.0000-1.0000。
    *
    * @return $this
    */
    public function setTotalCpuTimePercent($totalCpuTimePercent)
    {
        $this->container['totalCpuTimePercent'] = $totalCpuTimePercent;
        return $this;
    }

    /**
    * Gets avgCpuTime
    *  平均CPU耗时，单位ms。
    *
    * @return string|null
    */
    public function getAvgCpuTime()
    {
        return $this->container['avgCpuTime'];
    }

    /**
    * Sets avgCpuTime
    *
    * @param string|null $avgCpuTime 平均CPU耗时，单位ms。
    *
    * @return $this
    */
    public function setAvgCpuTime($avgCpuTime)
    {
        $this->container['avgCpuTime'] = $avgCpuTime;
        return $this;
    }

    /**
    * Gets avgCpuTimePercent
    *  平均CPU耗时百分比，范围0.0000-1.0000。
    *
    * @return string|null
    */
    public function getAvgCpuTimePercent()
    {
        return $this->container['avgCpuTimePercent'];
    }

    /**
    * Sets avgCpuTimePercent
    *
    * @param string|null $avgCpuTimePercent 平均CPU耗时百分比，范围0.0000-1.0000。
    *
    * @return $this
    */
    public function setAvgCpuTimePercent($avgCpuTimePercent)
    {
        $this->container['avgCpuTimePercent'] = $avgCpuTimePercent;
        return $this;
    }

    /**
    * Gets totalDurationTime
    *  总执行耗时。
    *
    * @return string|null
    */
    public function getTotalDurationTime()
    {
        return $this->container['totalDurationTime'];
    }

    /**
    * Sets totalDurationTime
    *
    * @param string|null $totalDurationTime 总执行耗时。
    *
    * @return $this
    */
    public function setTotalDurationTime($totalDurationTime)
    {
        $this->container['totalDurationTime'] = $totalDurationTime;
        return $this;
    }

    /**
    * Gets totalDurationTimePercent
    *  总执行耗时百分比，范围0.0000-1.0000。
    *
    * @return string|null
    */
    public function getTotalDurationTimePercent()
    {
        return $this->container['totalDurationTimePercent'];
    }

    /**
    * Sets totalDurationTimePercent
    *
    * @param string|null $totalDurationTimePercent 总执行耗时百分比，范围0.0000-1.0000。
    *
    * @return $this
    */
    public function setTotalDurationTimePercent($totalDurationTimePercent)
    {
        $this->container['totalDurationTimePercent'] = $totalDurationTimePercent;
        return $this;
    }

    /**
    * Gets avgDurationTime
    *  平均执行耗时。
    *
    * @return string|null
    */
    public function getAvgDurationTime()
    {
        return $this->container['avgDurationTime'];
    }

    /**
    * Sets avgDurationTime
    *
    * @param string|null $avgDurationTime 平均执行耗时。
    *
    * @return $this
    */
    public function setAvgDurationTime($avgDurationTime)
    {
        $this->container['avgDurationTime'] = $avgDurationTime;
        return $this;
    }

    /**
    * Gets avgDurationTimePercent
    *  平均执行耗时百分比，范围0.0000-1.0000。
    *
    * @return string|null
    */
    public function getAvgDurationTimePercent()
    {
        return $this->container['avgDurationTimePercent'];
    }

    /**
    * Sets avgDurationTimePercent
    *
    * @param string|null $avgDurationTimePercent 平均执行耗时百分比，范围0.0000-1.0000。
    *
    * @return $this
    */
    public function setAvgDurationTimePercent($avgDurationTimePercent)
    {
        $this->container['avgDurationTimePercent'] = $avgDurationTimePercent;
        return $this;
    }

    /**
    * Gets totalRows
    *  总返回行。
    *
    * @return string|null
    */
    public function getTotalRows()
    {
        return $this->container['totalRows'];
    }

    /**
    * Sets totalRows
    *
    * @param string|null $totalRows 总返回行。
    *
    * @return $this
    */
    public function setTotalRows($totalRows)
    {
        $this->container['totalRows'] = $totalRows;
        return $this;
    }

    /**
    * Gets totalRowsPercent
    *  总返回行百分比，范围0.0000-1.0000。
    *
    * @return string|null
    */
    public function getTotalRowsPercent()
    {
        return $this->container['totalRowsPercent'];
    }

    /**
    * Sets totalRowsPercent
    *
    * @param string|null $totalRowsPercent 总返回行百分比，范围0.0000-1.0000。
    *
    * @return $this
    */
    public function setTotalRowsPercent($totalRowsPercent)
    {
        $this->container['totalRowsPercent'] = $totalRowsPercent;
        return $this;
    }

    /**
    * Gets avgRows
    *  平均返回行。
    *
    * @return string|null
    */
    public function getAvgRows()
    {
        return $this->container['avgRows'];
    }

    /**
    * Sets avgRows
    *
    * @param string|null $avgRows 平均返回行。
    *
    * @return $this
    */
    public function setAvgRows($avgRows)
    {
        $this->container['avgRows'] = $avgRows;
        return $this;
    }

    /**
    * Gets avgRowsPercent
    *  平均返回行百分比，范围0.0000-1.0000。
    *
    * @return string|null
    */
    public function getAvgRowsPercent()
    {
        return $this->container['avgRowsPercent'];
    }

    /**
    * Sets avgRowsPercent
    *
    * @param string|null $avgRowsPercent 平均返回行百分比，范围0.0000-1.0000。
    *
    * @return $this
    */
    public function setAvgRowsPercent($avgRowsPercent)
    {
        $this->container['avgRowsPercent'] = $avgRowsPercent;
        return $this;
    }

    /**
    * Gets totalLogicalReads
    *  总逻辑读消耗。
    *
    * @return string|null
    */
    public function getTotalLogicalReads()
    {
        return $this->container['totalLogicalReads'];
    }

    /**
    * Sets totalLogicalReads
    *
    * @param string|null $totalLogicalReads 总逻辑读消耗。
    *
    * @return $this
    */
    public function setTotalLogicalReads($totalLogicalReads)
    {
        $this->container['totalLogicalReads'] = $totalLogicalReads;
        return $this;
    }

    /**
    * Gets totalLogicalReadsPercent
    *  总逻辑读百分比，范围0.0000-1.0000。
    *
    * @return string|null
    */
    public function getTotalLogicalReadsPercent()
    {
        return $this->container['totalLogicalReadsPercent'];
    }

    /**
    * Sets totalLogicalReadsPercent
    *
    * @param string|null $totalLogicalReadsPercent 总逻辑读百分比，范围0.0000-1.0000。
    *
    * @return $this
    */
    public function setTotalLogicalReadsPercent($totalLogicalReadsPercent)
    {
        $this->container['totalLogicalReadsPercent'] = $totalLogicalReadsPercent;
        return $this;
    }

    /**
    * Gets avgLogicalReads
    *  平均逻辑读消耗。
    *
    * @return string|null
    */
    public function getAvgLogicalReads()
    {
        return $this->container['avgLogicalReads'];
    }

    /**
    * Sets avgLogicalReads
    *
    * @param string|null $avgLogicalReads 平均逻辑读消耗。
    *
    * @return $this
    */
    public function setAvgLogicalReads($avgLogicalReads)
    {
        $this->container['avgLogicalReads'] = $avgLogicalReads;
        return $this;
    }

    /**
    * Gets avgLogicalReadsPercent
    *  平均逻辑读百分比，范围0.0000-1.0000。
    *
    * @return string|null
    */
    public function getAvgLogicalReadsPercent()
    {
        return $this->container['avgLogicalReadsPercent'];
    }

    /**
    * Sets avgLogicalReadsPercent
    *
    * @param string|null $avgLogicalReadsPercent 平均逻辑读百分比，范围0.0000-1.0000。
    *
    * @return $this
    */
    public function setAvgLogicalReadsPercent($avgLogicalReadsPercent)
    {
        $this->container['avgLogicalReadsPercent'] = $avgLogicalReadsPercent;
        return $this;
    }

    /**
    * Gets avgLogicalWrite
    *  平均逻辑写消耗。
    *
    * @return string|null
    */
    public function getAvgLogicalWrite()
    {
        return $this->container['avgLogicalWrite'];
    }

    /**
    * Sets avgLogicalWrite
    *
    * @param string|null $avgLogicalWrite 平均逻辑写消耗。
    *
    * @return $this
    */
    public function setAvgLogicalWrite($avgLogicalWrite)
    {
        $this->container['avgLogicalWrite'] = $avgLogicalWrite;
        return $this;
    }

    /**
    * Gets avgLogicalWritePercent
    *  平均逻辑写百分比，范围0.0000-1.0000。
    *
    * @return string|null
    */
    public function getAvgLogicalWritePercent()
    {
        return $this->container['avgLogicalWritePercent'];
    }

    /**
    * Sets avgLogicalWritePercent
    *
    * @param string|null $avgLogicalWritePercent 平均逻辑写百分比，范围0.0000-1.0000。
    *
    * @return $this
    */
    public function setAvgLogicalWritePercent($avgLogicalWritePercent)
    {
        $this->container['avgLogicalWritePercent'] = $avgLogicalWritePercent;
        return $this;
    }

    /**
    * Gets totalLogicalWrite
    *  总逻辑写消耗。
    *
    * @return string|null
    */
    public function getTotalLogicalWrite()
    {
        return $this->container['totalLogicalWrite'];
    }

    /**
    * Sets totalLogicalWrite
    *
    * @param string|null $totalLogicalWrite 总逻辑写消耗。
    *
    * @return $this
    */
    public function setTotalLogicalWrite($totalLogicalWrite)
    {
        $this->container['totalLogicalWrite'] = $totalLogicalWrite;
        return $this;
    }

    /**
    * Gets totalLogicalWritePercent
    *  总逻辑写百分比，范围0.0000-1.0000。
    *
    * @return string|null
    */
    public function getTotalLogicalWritePercent()
    {
        return $this->container['totalLogicalWritePercent'];
    }

    /**
    * Sets totalLogicalWritePercent
    *
    * @param string|null $totalLogicalWritePercent 总逻辑写百分比，范围0.0000-1.0000。
    *
    * @return $this
    */
    public function setTotalLogicalWritePercent($totalLogicalWritePercent)
    {
        $this->container['totalLogicalWritePercent'] = $totalLogicalWritePercent;
        return $this;
    }

    /**
    * Gets avgPhysicalReads
    *  平均物理读消耗。
    *
    * @return string|null
    */
    public function getAvgPhysicalReads()
    {
        return $this->container['avgPhysicalReads'];
    }

    /**
    * Sets avgPhysicalReads
    *
    * @param string|null $avgPhysicalReads 平均物理读消耗。
    *
    * @return $this
    */
    public function setAvgPhysicalReads($avgPhysicalReads)
    {
        $this->container['avgPhysicalReads'] = $avgPhysicalReads;
        return $this;
    }

    /**
    * Gets avgPhysicalReadsPercent
    *  平均物理读百分比，范围0.0000-1.0000。
    *
    * @return string|null
    */
    public function getAvgPhysicalReadsPercent()
    {
        return $this->container['avgPhysicalReadsPercent'];
    }

    /**
    * Sets avgPhysicalReadsPercent
    *
    * @param string|null $avgPhysicalReadsPercent 平均物理读百分比，范围0.0000-1.0000。
    *
    * @return $this
    */
    public function setAvgPhysicalReadsPercent($avgPhysicalReadsPercent)
    {
        $this->container['avgPhysicalReadsPercent'] = $avgPhysicalReadsPercent;
        return $this;
    }

    /**
    * Gets totalPhysicalReads
    *  总物理读消耗。
    *
    * @return string|null
    */
    public function getTotalPhysicalReads()
    {
        return $this->container['totalPhysicalReads'];
    }

    /**
    * Sets totalPhysicalReads
    *
    * @param string|null $totalPhysicalReads 总物理读消耗。
    *
    * @return $this
    */
    public function setTotalPhysicalReads($totalPhysicalReads)
    {
        $this->container['totalPhysicalReads'] = $totalPhysicalReads;
        return $this;
    }

    /**
    * Gets totalPhysicalReadsPercent
    *  总物理读百分比，范围0.0000-1.0000。
    *
    * @return string|null
    */
    public function getTotalPhysicalReadsPercent()
    {
        return $this->container['totalPhysicalReadsPercent'];
    }

    /**
    * Sets totalPhysicalReadsPercent
    *
    * @param string|null $totalPhysicalReadsPercent 总物理读百分比，范围0.0000-1.0000。
    *
    * @return $this
    */
    public function setTotalPhysicalReadsPercent($totalPhysicalReadsPercent)
    {
        $this->container['totalPhysicalReadsPercent'] = $totalPhysicalReadsPercent;
        return $this;
    }

    /**
    * Gets lastExecutionTime
    *  上次执行时间。
    *
    * @return string|null
    */
    public function getLastExecutionTime()
    {
        return $this->container['lastExecutionTime'];
    }

    /**
    * Sets lastExecutionTime
    *
    * @param string|null $lastExecutionTime 上次执行时间。
    *
    * @return $this
    */
    public function setLastExecutionTime($lastExecutionTime)
    {
        $this->container['lastExecutionTime'] = $lastExecutionTime;
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


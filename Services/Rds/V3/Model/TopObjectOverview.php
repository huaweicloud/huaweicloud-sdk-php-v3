<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopObjectOverview implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopObjectOverview';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * avgCpuTime  平均cpu耗时(单位为毫秒)
    * avgCpuTimePercentage  平均cpu耗时百分比
    * avgExecutionTime  平均执行耗时(单位为毫秒)
    * avgExecutionTimePercentage  平均执行耗时百分比
    * avgLogicalIo  平均逻辑io
    * avgLogicalIoPercentage  平均逻辑io百分比
    * avgLogicalReads  平均逻辑读
    * avgLogicalReadsPercentage  平均逻辑读百分比
    * avgLogicalWrites  平均逻辑写
    * avgLogicalWritesPercentage  平均逻辑写百分比
    * avgPhysicalReads  平均物理读
    * avgPhysicalReadsPercentage  平均物理读百分比
    * avgRows  平均返回行
    * avgRowsPercentage  平均返回行百分比
    * databaseName  数据库名
    * objectId  对象id
    * objectName  对象名称
    * rowId  id
    * objectType  对象类型
    * schemaName  模式
    * totalCpuTime  总cpu耗时(单位为毫秒)
    * totalCpuTimePercentage  总cpu耗时百分比
    * totalExecutionTime  总执行耗时(单位为毫秒)
    * totalExecutionTimePercentage  总执行耗时百分比
    * totalExecutionCount  总执行次数
    * totalLogicalIo  总逻辑io
    * totalLogicalIoPercentage  总逻辑io百分比
    * totalLogicalReads  总逻辑读
    * totalLogicalReadsPercentage  总逻辑读百分比
    * totalLogicalWrites  总逻辑写
    * totalLogicalWritesPercentage  总逻辑写百分比
    * totalPhysicalReads  总物理读
    * totalPhysicalReadsPercentage  总物理读百分比
    * totalRows  总返回行
    * totalRowsPercentage  总返回行百分比
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'avgCpuTime' => 'double',
            'avgCpuTimePercentage' => 'double',
            'avgExecutionTime' => 'double',
            'avgExecutionTimePercentage' => 'double',
            'avgLogicalIo' => 'double',
            'avgLogicalIoPercentage' => 'double',
            'avgLogicalReads' => 'double',
            'avgLogicalReadsPercentage' => 'double',
            'avgLogicalWrites' => 'double',
            'avgLogicalWritesPercentage' => 'double',
            'avgPhysicalReads' => 'double',
            'avgPhysicalReadsPercentage' => 'double',
            'avgRows' => 'double',
            'avgRowsPercentage' => 'double',
            'databaseName' => 'string',
            'objectId' => 'string',
            'objectName' => 'string',
            'rowId' => 'string',
            'objectType' => 'string',
            'schemaName' => 'string',
            'totalCpuTime' => 'double',
            'totalCpuTimePercentage' => 'double',
            'totalExecutionTime' => 'double',
            'totalExecutionTimePercentage' => 'double',
            'totalExecutionCount' => 'double',
            'totalLogicalIo' => 'double',
            'totalLogicalIoPercentage' => 'double',
            'totalLogicalReads' => 'double',
            'totalLogicalReadsPercentage' => 'double',
            'totalLogicalWrites' => 'double',
            'totalLogicalWritesPercentage' => 'double',
            'totalPhysicalReads' => 'double',
            'totalPhysicalReadsPercentage' => 'double',
            'totalRows' => 'double',
            'totalRowsPercentage' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * avgCpuTime  平均cpu耗时(单位为毫秒)
    * avgCpuTimePercentage  平均cpu耗时百分比
    * avgExecutionTime  平均执行耗时(单位为毫秒)
    * avgExecutionTimePercentage  平均执行耗时百分比
    * avgLogicalIo  平均逻辑io
    * avgLogicalIoPercentage  平均逻辑io百分比
    * avgLogicalReads  平均逻辑读
    * avgLogicalReadsPercentage  平均逻辑读百分比
    * avgLogicalWrites  平均逻辑写
    * avgLogicalWritesPercentage  平均逻辑写百分比
    * avgPhysicalReads  平均物理读
    * avgPhysicalReadsPercentage  平均物理读百分比
    * avgRows  平均返回行
    * avgRowsPercentage  平均返回行百分比
    * databaseName  数据库名
    * objectId  对象id
    * objectName  对象名称
    * rowId  id
    * objectType  对象类型
    * schemaName  模式
    * totalCpuTime  总cpu耗时(单位为毫秒)
    * totalCpuTimePercentage  总cpu耗时百分比
    * totalExecutionTime  总执行耗时(单位为毫秒)
    * totalExecutionTimePercentage  总执行耗时百分比
    * totalExecutionCount  总执行次数
    * totalLogicalIo  总逻辑io
    * totalLogicalIoPercentage  总逻辑io百分比
    * totalLogicalReads  总逻辑读
    * totalLogicalReadsPercentage  总逻辑读百分比
    * totalLogicalWrites  总逻辑写
    * totalLogicalWritesPercentage  总逻辑写百分比
    * totalPhysicalReads  总物理读
    * totalPhysicalReadsPercentage  总物理读百分比
    * totalRows  总返回行
    * totalRowsPercentage  总返回行百分比
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'avgCpuTime' => 'double',
        'avgCpuTimePercentage' => 'double',
        'avgExecutionTime' => 'double',
        'avgExecutionTimePercentage' => 'double',
        'avgLogicalIo' => 'double',
        'avgLogicalIoPercentage' => 'double',
        'avgLogicalReads' => 'double',
        'avgLogicalReadsPercentage' => 'double',
        'avgLogicalWrites' => 'double',
        'avgLogicalWritesPercentage' => 'double',
        'avgPhysicalReads' => 'double',
        'avgPhysicalReadsPercentage' => 'double',
        'avgRows' => 'double',
        'avgRowsPercentage' => 'double',
        'databaseName' => null,
        'objectId' => null,
        'objectName' => null,
        'rowId' => null,
        'objectType' => null,
        'schemaName' => null,
        'totalCpuTime' => 'double',
        'totalCpuTimePercentage' => 'double',
        'totalExecutionTime' => 'double',
        'totalExecutionTimePercentage' => 'double',
        'totalExecutionCount' => 'double',
        'totalLogicalIo' => 'double',
        'totalLogicalIoPercentage' => 'double',
        'totalLogicalReads' => 'double',
        'totalLogicalReadsPercentage' => 'double',
        'totalLogicalWrites' => 'double',
        'totalLogicalWritesPercentage' => 'double',
        'totalPhysicalReads' => 'double',
        'totalPhysicalReadsPercentage' => 'double',
        'totalRows' => 'double',
        'totalRowsPercentage' => 'double'
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
    * avgCpuTime  平均cpu耗时(单位为毫秒)
    * avgCpuTimePercentage  平均cpu耗时百分比
    * avgExecutionTime  平均执行耗时(单位为毫秒)
    * avgExecutionTimePercentage  平均执行耗时百分比
    * avgLogicalIo  平均逻辑io
    * avgLogicalIoPercentage  平均逻辑io百分比
    * avgLogicalReads  平均逻辑读
    * avgLogicalReadsPercentage  平均逻辑读百分比
    * avgLogicalWrites  平均逻辑写
    * avgLogicalWritesPercentage  平均逻辑写百分比
    * avgPhysicalReads  平均物理读
    * avgPhysicalReadsPercentage  平均物理读百分比
    * avgRows  平均返回行
    * avgRowsPercentage  平均返回行百分比
    * databaseName  数据库名
    * objectId  对象id
    * objectName  对象名称
    * rowId  id
    * objectType  对象类型
    * schemaName  模式
    * totalCpuTime  总cpu耗时(单位为毫秒)
    * totalCpuTimePercentage  总cpu耗时百分比
    * totalExecutionTime  总执行耗时(单位为毫秒)
    * totalExecutionTimePercentage  总执行耗时百分比
    * totalExecutionCount  总执行次数
    * totalLogicalIo  总逻辑io
    * totalLogicalIoPercentage  总逻辑io百分比
    * totalLogicalReads  总逻辑读
    * totalLogicalReadsPercentage  总逻辑读百分比
    * totalLogicalWrites  总逻辑写
    * totalLogicalWritesPercentage  总逻辑写百分比
    * totalPhysicalReads  总物理读
    * totalPhysicalReadsPercentage  总物理读百分比
    * totalRows  总返回行
    * totalRowsPercentage  总返回行百分比
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'avgCpuTime' => 'avg_cpu_time',
            'avgCpuTimePercentage' => 'avg_cpu_time_percentage',
            'avgExecutionTime' => 'avg_execution_time',
            'avgExecutionTimePercentage' => 'avg_execution_time_percentage',
            'avgLogicalIo' => 'avg_logical_io',
            'avgLogicalIoPercentage' => 'avg_logical_io_percentage',
            'avgLogicalReads' => 'avg_logical_reads',
            'avgLogicalReadsPercentage' => 'avg_logical_reads_percentage',
            'avgLogicalWrites' => 'avg_logical_writes',
            'avgLogicalWritesPercentage' => 'avg_logical_writes_percentage',
            'avgPhysicalReads' => 'avg_physical_reads',
            'avgPhysicalReadsPercentage' => 'avg_physical_reads_percentage',
            'avgRows' => 'avg_rows',
            'avgRowsPercentage' => 'avg_rows_percentage',
            'databaseName' => 'database_name',
            'objectId' => 'object_id',
            'objectName' => 'object_name',
            'rowId' => 'row_id',
            'objectType' => 'object_type',
            'schemaName' => 'schema_name',
            'totalCpuTime' => 'total_cpu_time',
            'totalCpuTimePercentage' => 'total_cpu_time_percentage',
            'totalExecutionTime' => 'total_execution_time',
            'totalExecutionTimePercentage' => 'total_execution_time_percentage',
            'totalExecutionCount' => 'total_execution_count',
            'totalLogicalIo' => 'total_logical_io',
            'totalLogicalIoPercentage' => 'total_logical_io_percentage',
            'totalLogicalReads' => 'total_logical_reads',
            'totalLogicalReadsPercentage' => 'total_logical_reads_percentage',
            'totalLogicalWrites' => 'total_logical_writes',
            'totalLogicalWritesPercentage' => 'total_logical_writes_percentage',
            'totalPhysicalReads' => 'total_physical_reads',
            'totalPhysicalReadsPercentage' => 'total_physical_reads_percentage',
            'totalRows' => 'total_rows',
            'totalRowsPercentage' => 'total_rows_percentage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * avgCpuTime  平均cpu耗时(单位为毫秒)
    * avgCpuTimePercentage  平均cpu耗时百分比
    * avgExecutionTime  平均执行耗时(单位为毫秒)
    * avgExecutionTimePercentage  平均执行耗时百分比
    * avgLogicalIo  平均逻辑io
    * avgLogicalIoPercentage  平均逻辑io百分比
    * avgLogicalReads  平均逻辑读
    * avgLogicalReadsPercentage  平均逻辑读百分比
    * avgLogicalWrites  平均逻辑写
    * avgLogicalWritesPercentage  平均逻辑写百分比
    * avgPhysicalReads  平均物理读
    * avgPhysicalReadsPercentage  平均物理读百分比
    * avgRows  平均返回行
    * avgRowsPercentage  平均返回行百分比
    * databaseName  数据库名
    * objectId  对象id
    * objectName  对象名称
    * rowId  id
    * objectType  对象类型
    * schemaName  模式
    * totalCpuTime  总cpu耗时(单位为毫秒)
    * totalCpuTimePercentage  总cpu耗时百分比
    * totalExecutionTime  总执行耗时(单位为毫秒)
    * totalExecutionTimePercentage  总执行耗时百分比
    * totalExecutionCount  总执行次数
    * totalLogicalIo  总逻辑io
    * totalLogicalIoPercentage  总逻辑io百分比
    * totalLogicalReads  总逻辑读
    * totalLogicalReadsPercentage  总逻辑读百分比
    * totalLogicalWrites  总逻辑写
    * totalLogicalWritesPercentage  总逻辑写百分比
    * totalPhysicalReads  总物理读
    * totalPhysicalReadsPercentage  总物理读百分比
    * totalRows  总返回行
    * totalRowsPercentage  总返回行百分比
    *
    * @var string[]
    */
    protected static $setters = [
            'avgCpuTime' => 'setAvgCpuTime',
            'avgCpuTimePercentage' => 'setAvgCpuTimePercentage',
            'avgExecutionTime' => 'setAvgExecutionTime',
            'avgExecutionTimePercentage' => 'setAvgExecutionTimePercentage',
            'avgLogicalIo' => 'setAvgLogicalIo',
            'avgLogicalIoPercentage' => 'setAvgLogicalIoPercentage',
            'avgLogicalReads' => 'setAvgLogicalReads',
            'avgLogicalReadsPercentage' => 'setAvgLogicalReadsPercentage',
            'avgLogicalWrites' => 'setAvgLogicalWrites',
            'avgLogicalWritesPercentage' => 'setAvgLogicalWritesPercentage',
            'avgPhysicalReads' => 'setAvgPhysicalReads',
            'avgPhysicalReadsPercentage' => 'setAvgPhysicalReadsPercentage',
            'avgRows' => 'setAvgRows',
            'avgRowsPercentage' => 'setAvgRowsPercentage',
            'databaseName' => 'setDatabaseName',
            'objectId' => 'setObjectId',
            'objectName' => 'setObjectName',
            'rowId' => 'setRowId',
            'objectType' => 'setObjectType',
            'schemaName' => 'setSchemaName',
            'totalCpuTime' => 'setTotalCpuTime',
            'totalCpuTimePercentage' => 'setTotalCpuTimePercentage',
            'totalExecutionTime' => 'setTotalExecutionTime',
            'totalExecutionTimePercentage' => 'setTotalExecutionTimePercentage',
            'totalExecutionCount' => 'setTotalExecutionCount',
            'totalLogicalIo' => 'setTotalLogicalIo',
            'totalLogicalIoPercentage' => 'setTotalLogicalIoPercentage',
            'totalLogicalReads' => 'setTotalLogicalReads',
            'totalLogicalReadsPercentage' => 'setTotalLogicalReadsPercentage',
            'totalLogicalWrites' => 'setTotalLogicalWrites',
            'totalLogicalWritesPercentage' => 'setTotalLogicalWritesPercentage',
            'totalPhysicalReads' => 'setTotalPhysicalReads',
            'totalPhysicalReadsPercentage' => 'setTotalPhysicalReadsPercentage',
            'totalRows' => 'setTotalRows',
            'totalRowsPercentage' => 'setTotalRowsPercentage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * avgCpuTime  平均cpu耗时(单位为毫秒)
    * avgCpuTimePercentage  平均cpu耗时百分比
    * avgExecutionTime  平均执行耗时(单位为毫秒)
    * avgExecutionTimePercentage  平均执行耗时百分比
    * avgLogicalIo  平均逻辑io
    * avgLogicalIoPercentage  平均逻辑io百分比
    * avgLogicalReads  平均逻辑读
    * avgLogicalReadsPercentage  平均逻辑读百分比
    * avgLogicalWrites  平均逻辑写
    * avgLogicalWritesPercentage  平均逻辑写百分比
    * avgPhysicalReads  平均物理读
    * avgPhysicalReadsPercentage  平均物理读百分比
    * avgRows  平均返回行
    * avgRowsPercentage  平均返回行百分比
    * databaseName  数据库名
    * objectId  对象id
    * objectName  对象名称
    * rowId  id
    * objectType  对象类型
    * schemaName  模式
    * totalCpuTime  总cpu耗时(单位为毫秒)
    * totalCpuTimePercentage  总cpu耗时百分比
    * totalExecutionTime  总执行耗时(单位为毫秒)
    * totalExecutionTimePercentage  总执行耗时百分比
    * totalExecutionCount  总执行次数
    * totalLogicalIo  总逻辑io
    * totalLogicalIoPercentage  总逻辑io百分比
    * totalLogicalReads  总逻辑读
    * totalLogicalReadsPercentage  总逻辑读百分比
    * totalLogicalWrites  总逻辑写
    * totalLogicalWritesPercentage  总逻辑写百分比
    * totalPhysicalReads  总物理读
    * totalPhysicalReadsPercentage  总物理读百分比
    * totalRows  总返回行
    * totalRowsPercentage  总返回行百分比
    *
    * @var string[]
    */
    protected static $getters = [
            'avgCpuTime' => 'getAvgCpuTime',
            'avgCpuTimePercentage' => 'getAvgCpuTimePercentage',
            'avgExecutionTime' => 'getAvgExecutionTime',
            'avgExecutionTimePercentage' => 'getAvgExecutionTimePercentage',
            'avgLogicalIo' => 'getAvgLogicalIo',
            'avgLogicalIoPercentage' => 'getAvgLogicalIoPercentage',
            'avgLogicalReads' => 'getAvgLogicalReads',
            'avgLogicalReadsPercentage' => 'getAvgLogicalReadsPercentage',
            'avgLogicalWrites' => 'getAvgLogicalWrites',
            'avgLogicalWritesPercentage' => 'getAvgLogicalWritesPercentage',
            'avgPhysicalReads' => 'getAvgPhysicalReads',
            'avgPhysicalReadsPercentage' => 'getAvgPhysicalReadsPercentage',
            'avgRows' => 'getAvgRows',
            'avgRowsPercentage' => 'getAvgRowsPercentage',
            'databaseName' => 'getDatabaseName',
            'objectId' => 'getObjectId',
            'objectName' => 'getObjectName',
            'rowId' => 'getRowId',
            'objectType' => 'getObjectType',
            'schemaName' => 'getSchemaName',
            'totalCpuTime' => 'getTotalCpuTime',
            'totalCpuTimePercentage' => 'getTotalCpuTimePercentage',
            'totalExecutionTime' => 'getTotalExecutionTime',
            'totalExecutionTimePercentage' => 'getTotalExecutionTimePercentage',
            'totalExecutionCount' => 'getTotalExecutionCount',
            'totalLogicalIo' => 'getTotalLogicalIo',
            'totalLogicalIoPercentage' => 'getTotalLogicalIoPercentage',
            'totalLogicalReads' => 'getTotalLogicalReads',
            'totalLogicalReadsPercentage' => 'getTotalLogicalReadsPercentage',
            'totalLogicalWrites' => 'getTotalLogicalWrites',
            'totalLogicalWritesPercentage' => 'getTotalLogicalWritesPercentage',
            'totalPhysicalReads' => 'getTotalPhysicalReads',
            'totalPhysicalReadsPercentage' => 'getTotalPhysicalReadsPercentage',
            'totalRows' => 'getTotalRows',
            'totalRowsPercentage' => 'getTotalRowsPercentage'
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
        $this->container['avgCpuTime'] = isset($data['avgCpuTime']) ? $data['avgCpuTime'] : null;
        $this->container['avgCpuTimePercentage'] = isset($data['avgCpuTimePercentage']) ? $data['avgCpuTimePercentage'] : null;
        $this->container['avgExecutionTime'] = isset($data['avgExecutionTime']) ? $data['avgExecutionTime'] : null;
        $this->container['avgExecutionTimePercentage'] = isset($data['avgExecutionTimePercentage']) ? $data['avgExecutionTimePercentage'] : null;
        $this->container['avgLogicalIo'] = isset($data['avgLogicalIo']) ? $data['avgLogicalIo'] : null;
        $this->container['avgLogicalIoPercentage'] = isset($data['avgLogicalIoPercentage']) ? $data['avgLogicalIoPercentage'] : null;
        $this->container['avgLogicalReads'] = isset($data['avgLogicalReads']) ? $data['avgLogicalReads'] : null;
        $this->container['avgLogicalReadsPercentage'] = isset($data['avgLogicalReadsPercentage']) ? $data['avgLogicalReadsPercentage'] : null;
        $this->container['avgLogicalWrites'] = isset($data['avgLogicalWrites']) ? $data['avgLogicalWrites'] : null;
        $this->container['avgLogicalWritesPercentage'] = isset($data['avgLogicalWritesPercentage']) ? $data['avgLogicalWritesPercentage'] : null;
        $this->container['avgPhysicalReads'] = isset($data['avgPhysicalReads']) ? $data['avgPhysicalReads'] : null;
        $this->container['avgPhysicalReadsPercentage'] = isset($data['avgPhysicalReadsPercentage']) ? $data['avgPhysicalReadsPercentage'] : null;
        $this->container['avgRows'] = isset($data['avgRows']) ? $data['avgRows'] : null;
        $this->container['avgRowsPercentage'] = isset($data['avgRowsPercentage']) ? $data['avgRowsPercentage'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['objectName'] = isset($data['objectName']) ? $data['objectName'] : null;
        $this->container['rowId'] = isset($data['rowId']) ? $data['rowId'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['totalCpuTime'] = isset($data['totalCpuTime']) ? $data['totalCpuTime'] : null;
        $this->container['totalCpuTimePercentage'] = isset($data['totalCpuTimePercentage']) ? $data['totalCpuTimePercentage'] : null;
        $this->container['totalExecutionTime'] = isset($data['totalExecutionTime']) ? $data['totalExecutionTime'] : null;
        $this->container['totalExecutionTimePercentage'] = isset($data['totalExecutionTimePercentage']) ? $data['totalExecutionTimePercentage'] : null;
        $this->container['totalExecutionCount'] = isset($data['totalExecutionCount']) ? $data['totalExecutionCount'] : null;
        $this->container['totalLogicalIo'] = isset($data['totalLogicalIo']) ? $data['totalLogicalIo'] : null;
        $this->container['totalLogicalIoPercentage'] = isset($data['totalLogicalIoPercentage']) ? $data['totalLogicalIoPercentage'] : null;
        $this->container['totalLogicalReads'] = isset($data['totalLogicalReads']) ? $data['totalLogicalReads'] : null;
        $this->container['totalLogicalReadsPercentage'] = isset($data['totalLogicalReadsPercentage']) ? $data['totalLogicalReadsPercentage'] : null;
        $this->container['totalLogicalWrites'] = isset($data['totalLogicalWrites']) ? $data['totalLogicalWrites'] : null;
        $this->container['totalLogicalWritesPercentage'] = isset($data['totalLogicalWritesPercentage']) ? $data['totalLogicalWritesPercentage'] : null;
        $this->container['totalPhysicalReads'] = isset($data['totalPhysicalReads']) ? $data['totalPhysicalReads'] : null;
        $this->container['totalPhysicalReadsPercentage'] = isset($data['totalPhysicalReadsPercentage']) ? $data['totalPhysicalReadsPercentage'] : null;
        $this->container['totalRows'] = isset($data['totalRows']) ? $data['totalRows'] : null;
        $this->container['totalRowsPercentage'] = isset($data['totalRowsPercentage']) ? $data['totalRowsPercentage'] : null;
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
    * Gets avgCpuTime
    *  平均cpu耗时(单位为毫秒)
    *
    * @return double|null
    */
    public function getAvgCpuTime()
    {
        return $this->container['avgCpuTime'];
    }

    /**
    * Sets avgCpuTime
    *
    * @param double|null $avgCpuTime 平均cpu耗时(单位为毫秒)
    *
    * @return $this
    */
    public function setAvgCpuTime($avgCpuTime)
    {
        $this->container['avgCpuTime'] = $avgCpuTime;
        return $this;
    }

    /**
    * Gets avgCpuTimePercentage
    *  平均cpu耗时百分比
    *
    * @return double|null
    */
    public function getAvgCpuTimePercentage()
    {
        return $this->container['avgCpuTimePercentage'];
    }

    /**
    * Sets avgCpuTimePercentage
    *
    * @param double|null $avgCpuTimePercentage 平均cpu耗时百分比
    *
    * @return $this
    */
    public function setAvgCpuTimePercentage($avgCpuTimePercentage)
    {
        $this->container['avgCpuTimePercentage'] = $avgCpuTimePercentage;
        return $this;
    }

    /**
    * Gets avgExecutionTime
    *  平均执行耗时(单位为毫秒)
    *
    * @return double|null
    */
    public function getAvgExecutionTime()
    {
        return $this->container['avgExecutionTime'];
    }

    /**
    * Sets avgExecutionTime
    *
    * @param double|null $avgExecutionTime 平均执行耗时(单位为毫秒)
    *
    * @return $this
    */
    public function setAvgExecutionTime($avgExecutionTime)
    {
        $this->container['avgExecutionTime'] = $avgExecutionTime;
        return $this;
    }

    /**
    * Gets avgExecutionTimePercentage
    *  平均执行耗时百分比
    *
    * @return double|null
    */
    public function getAvgExecutionTimePercentage()
    {
        return $this->container['avgExecutionTimePercentage'];
    }

    /**
    * Sets avgExecutionTimePercentage
    *
    * @param double|null $avgExecutionTimePercentage 平均执行耗时百分比
    *
    * @return $this
    */
    public function setAvgExecutionTimePercentage($avgExecutionTimePercentage)
    {
        $this->container['avgExecutionTimePercentage'] = $avgExecutionTimePercentage;
        return $this;
    }

    /**
    * Gets avgLogicalIo
    *  平均逻辑io
    *
    * @return double|null
    */
    public function getAvgLogicalIo()
    {
        return $this->container['avgLogicalIo'];
    }

    /**
    * Sets avgLogicalIo
    *
    * @param double|null $avgLogicalIo 平均逻辑io
    *
    * @return $this
    */
    public function setAvgLogicalIo($avgLogicalIo)
    {
        $this->container['avgLogicalIo'] = $avgLogicalIo;
        return $this;
    }

    /**
    * Gets avgLogicalIoPercentage
    *  平均逻辑io百分比
    *
    * @return double|null
    */
    public function getAvgLogicalIoPercentage()
    {
        return $this->container['avgLogicalIoPercentage'];
    }

    /**
    * Sets avgLogicalIoPercentage
    *
    * @param double|null $avgLogicalIoPercentage 平均逻辑io百分比
    *
    * @return $this
    */
    public function setAvgLogicalIoPercentage($avgLogicalIoPercentage)
    {
        $this->container['avgLogicalIoPercentage'] = $avgLogicalIoPercentage;
        return $this;
    }

    /**
    * Gets avgLogicalReads
    *  平均逻辑读
    *
    * @return double|null
    */
    public function getAvgLogicalReads()
    {
        return $this->container['avgLogicalReads'];
    }

    /**
    * Sets avgLogicalReads
    *
    * @param double|null $avgLogicalReads 平均逻辑读
    *
    * @return $this
    */
    public function setAvgLogicalReads($avgLogicalReads)
    {
        $this->container['avgLogicalReads'] = $avgLogicalReads;
        return $this;
    }

    /**
    * Gets avgLogicalReadsPercentage
    *  平均逻辑读百分比
    *
    * @return double|null
    */
    public function getAvgLogicalReadsPercentage()
    {
        return $this->container['avgLogicalReadsPercentage'];
    }

    /**
    * Sets avgLogicalReadsPercentage
    *
    * @param double|null $avgLogicalReadsPercentage 平均逻辑读百分比
    *
    * @return $this
    */
    public function setAvgLogicalReadsPercentage($avgLogicalReadsPercentage)
    {
        $this->container['avgLogicalReadsPercentage'] = $avgLogicalReadsPercentage;
        return $this;
    }

    /**
    * Gets avgLogicalWrites
    *  平均逻辑写
    *
    * @return double|null
    */
    public function getAvgLogicalWrites()
    {
        return $this->container['avgLogicalWrites'];
    }

    /**
    * Sets avgLogicalWrites
    *
    * @param double|null $avgLogicalWrites 平均逻辑写
    *
    * @return $this
    */
    public function setAvgLogicalWrites($avgLogicalWrites)
    {
        $this->container['avgLogicalWrites'] = $avgLogicalWrites;
        return $this;
    }

    /**
    * Gets avgLogicalWritesPercentage
    *  平均逻辑写百分比
    *
    * @return double|null
    */
    public function getAvgLogicalWritesPercentage()
    {
        return $this->container['avgLogicalWritesPercentage'];
    }

    /**
    * Sets avgLogicalWritesPercentage
    *
    * @param double|null $avgLogicalWritesPercentage 平均逻辑写百分比
    *
    * @return $this
    */
    public function setAvgLogicalWritesPercentage($avgLogicalWritesPercentage)
    {
        $this->container['avgLogicalWritesPercentage'] = $avgLogicalWritesPercentage;
        return $this;
    }

    /**
    * Gets avgPhysicalReads
    *  平均物理读
    *
    * @return double|null
    */
    public function getAvgPhysicalReads()
    {
        return $this->container['avgPhysicalReads'];
    }

    /**
    * Sets avgPhysicalReads
    *
    * @param double|null $avgPhysicalReads 平均物理读
    *
    * @return $this
    */
    public function setAvgPhysicalReads($avgPhysicalReads)
    {
        $this->container['avgPhysicalReads'] = $avgPhysicalReads;
        return $this;
    }

    /**
    * Gets avgPhysicalReadsPercentage
    *  平均物理读百分比
    *
    * @return double|null
    */
    public function getAvgPhysicalReadsPercentage()
    {
        return $this->container['avgPhysicalReadsPercentage'];
    }

    /**
    * Sets avgPhysicalReadsPercentage
    *
    * @param double|null $avgPhysicalReadsPercentage 平均物理读百分比
    *
    * @return $this
    */
    public function setAvgPhysicalReadsPercentage($avgPhysicalReadsPercentage)
    {
        $this->container['avgPhysicalReadsPercentage'] = $avgPhysicalReadsPercentage;
        return $this;
    }

    /**
    * Gets avgRows
    *  平均返回行
    *
    * @return double|null
    */
    public function getAvgRows()
    {
        return $this->container['avgRows'];
    }

    /**
    * Sets avgRows
    *
    * @param double|null $avgRows 平均返回行
    *
    * @return $this
    */
    public function setAvgRows($avgRows)
    {
        $this->container['avgRows'] = $avgRows;
        return $this;
    }

    /**
    * Gets avgRowsPercentage
    *  平均返回行百分比
    *
    * @return double|null
    */
    public function getAvgRowsPercentage()
    {
        return $this->container['avgRowsPercentage'];
    }

    /**
    * Sets avgRowsPercentage
    *
    * @param double|null $avgRowsPercentage 平均返回行百分比
    *
    * @return $this
    */
    public function setAvgRowsPercentage($avgRowsPercentage)
    {
        $this->container['avgRowsPercentage'] = $avgRowsPercentage;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名
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
    * @param string|null $databaseName 数据库名
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets objectId
    *  对象id
    *
    * @return string|null
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string|null $objectId 对象id
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets objectName
    *  对象名称
    *
    * @return string|null
    */
    public function getObjectName()
    {
        return $this->container['objectName'];
    }

    /**
    * Sets objectName
    *
    * @param string|null $objectName 对象名称
    *
    * @return $this
    */
    public function setObjectName($objectName)
    {
        $this->container['objectName'] = $objectName;
        return $this;
    }

    /**
    * Gets rowId
    *  id
    *
    * @return string|null
    */
    public function getRowId()
    {
        return $this->container['rowId'];
    }

    /**
    * Sets rowId
    *
    * @param string|null $rowId id
    *
    * @return $this
    */
    public function setRowId($rowId)
    {
        $this->container['rowId'] = $rowId;
        return $this;
    }

    /**
    * Gets objectType
    *  对象类型
    *
    * @return string|null
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string|null $objectType 对象类型
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets schemaName
    *  模式
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
    * @param string|null $schemaName 模式
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets totalCpuTime
    *  总cpu耗时(单位为毫秒)
    *
    * @return double|null
    */
    public function getTotalCpuTime()
    {
        return $this->container['totalCpuTime'];
    }

    /**
    * Sets totalCpuTime
    *
    * @param double|null $totalCpuTime 总cpu耗时(单位为毫秒)
    *
    * @return $this
    */
    public function setTotalCpuTime($totalCpuTime)
    {
        $this->container['totalCpuTime'] = $totalCpuTime;
        return $this;
    }

    /**
    * Gets totalCpuTimePercentage
    *  总cpu耗时百分比
    *
    * @return double|null
    */
    public function getTotalCpuTimePercentage()
    {
        return $this->container['totalCpuTimePercentage'];
    }

    /**
    * Sets totalCpuTimePercentage
    *
    * @param double|null $totalCpuTimePercentage 总cpu耗时百分比
    *
    * @return $this
    */
    public function setTotalCpuTimePercentage($totalCpuTimePercentage)
    {
        $this->container['totalCpuTimePercentage'] = $totalCpuTimePercentage;
        return $this;
    }

    /**
    * Gets totalExecutionTime
    *  总执行耗时(单位为毫秒)
    *
    * @return double|null
    */
    public function getTotalExecutionTime()
    {
        return $this->container['totalExecutionTime'];
    }

    /**
    * Sets totalExecutionTime
    *
    * @param double|null $totalExecutionTime 总执行耗时(单位为毫秒)
    *
    * @return $this
    */
    public function setTotalExecutionTime($totalExecutionTime)
    {
        $this->container['totalExecutionTime'] = $totalExecutionTime;
        return $this;
    }

    /**
    * Gets totalExecutionTimePercentage
    *  总执行耗时百分比
    *
    * @return double|null
    */
    public function getTotalExecutionTimePercentage()
    {
        return $this->container['totalExecutionTimePercentage'];
    }

    /**
    * Sets totalExecutionTimePercentage
    *
    * @param double|null $totalExecutionTimePercentage 总执行耗时百分比
    *
    * @return $this
    */
    public function setTotalExecutionTimePercentage($totalExecutionTimePercentage)
    {
        $this->container['totalExecutionTimePercentage'] = $totalExecutionTimePercentage;
        return $this;
    }

    /**
    * Gets totalExecutionCount
    *  总执行次数
    *
    * @return double|null
    */
    public function getTotalExecutionCount()
    {
        return $this->container['totalExecutionCount'];
    }

    /**
    * Sets totalExecutionCount
    *
    * @param double|null $totalExecutionCount 总执行次数
    *
    * @return $this
    */
    public function setTotalExecutionCount($totalExecutionCount)
    {
        $this->container['totalExecutionCount'] = $totalExecutionCount;
        return $this;
    }

    /**
    * Gets totalLogicalIo
    *  总逻辑io
    *
    * @return double|null
    */
    public function getTotalLogicalIo()
    {
        return $this->container['totalLogicalIo'];
    }

    /**
    * Sets totalLogicalIo
    *
    * @param double|null $totalLogicalIo 总逻辑io
    *
    * @return $this
    */
    public function setTotalLogicalIo($totalLogicalIo)
    {
        $this->container['totalLogicalIo'] = $totalLogicalIo;
        return $this;
    }

    /**
    * Gets totalLogicalIoPercentage
    *  总逻辑io百分比
    *
    * @return double|null
    */
    public function getTotalLogicalIoPercentage()
    {
        return $this->container['totalLogicalIoPercentage'];
    }

    /**
    * Sets totalLogicalIoPercentage
    *
    * @param double|null $totalLogicalIoPercentage 总逻辑io百分比
    *
    * @return $this
    */
    public function setTotalLogicalIoPercentage($totalLogicalIoPercentage)
    {
        $this->container['totalLogicalIoPercentage'] = $totalLogicalIoPercentage;
        return $this;
    }

    /**
    * Gets totalLogicalReads
    *  总逻辑读
    *
    * @return double|null
    */
    public function getTotalLogicalReads()
    {
        return $this->container['totalLogicalReads'];
    }

    /**
    * Sets totalLogicalReads
    *
    * @param double|null $totalLogicalReads 总逻辑读
    *
    * @return $this
    */
    public function setTotalLogicalReads($totalLogicalReads)
    {
        $this->container['totalLogicalReads'] = $totalLogicalReads;
        return $this;
    }

    /**
    * Gets totalLogicalReadsPercentage
    *  总逻辑读百分比
    *
    * @return double|null
    */
    public function getTotalLogicalReadsPercentage()
    {
        return $this->container['totalLogicalReadsPercentage'];
    }

    /**
    * Sets totalLogicalReadsPercentage
    *
    * @param double|null $totalLogicalReadsPercentage 总逻辑读百分比
    *
    * @return $this
    */
    public function setTotalLogicalReadsPercentage($totalLogicalReadsPercentage)
    {
        $this->container['totalLogicalReadsPercentage'] = $totalLogicalReadsPercentage;
        return $this;
    }

    /**
    * Gets totalLogicalWrites
    *  总逻辑写
    *
    * @return double|null
    */
    public function getTotalLogicalWrites()
    {
        return $this->container['totalLogicalWrites'];
    }

    /**
    * Sets totalLogicalWrites
    *
    * @param double|null $totalLogicalWrites 总逻辑写
    *
    * @return $this
    */
    public function setTotalLogicalWrites($totalLogicalWrites)
    {
        $this->container['totalLogicalWrites'] = $totalLogicalWrites;
        return $this;
    }

    /**
    * Gets totalLogicalWritesPercentage
    *  总逻辑写百分比
    *
    * @return double|null
    */
    public function getTotalLogicalWritesPercentage()
    {
        return $this->container['totalLogicalWritesPercentage'];
    }

    /**
    * Sets totalLogicalWritesPercentage
    *
    * @param double|null $totalLogicalWritesPercentage 总逻辑写百分比
    *
    * @return $this
    */
    public function setTotalLogicalWritesPercentage($totalLogicalWritesPercentage)
    {
        $this->container['totalLogicalWritesPercentage'] = $totalLogicalWritesPercentage;
        return $this;
    }

    /**
    * Gets totalPhysicalReads
    *  总物理读
    *
    * @return double|null
    */
    public function getTotalPhysicalReads()
    {
        return $this->container['totalPhysicalReads'];
    }

    /**
    * Sets totalPhysicalReads
    *
    * @param double|null $totalPhysicalReads 总物理读
    *
    * @return $this
    */
    public function setTotalPhysicalReads($totalPhysicalReads)
    {
        $this->container['totalPhysicalReads'] = $totalPhysicalReads;
        return $this;
    }

    /**
    * Gets totalPhysicalReadsPercentage
    *  总物理读百分比
    *
    * @return double|null
    */
    public function getTotalPhysicalReadsPercentage()
    {
        return $this->container['totalPhysicalReadsPercentage'];
    }

    /**
    * Sets totalPhysicalReadsPercentage
    *
    * @param double|null $totalPhysicalReadsPercentage 总物理读百分比
    *
    * @return $this
    */
    public function setTotalPhysicalReadsPercentage($totalPhysicalReadsPercentage)
    {
        $this->container['totalPhysicalReadsPercentage'] = $totalPhysicalReadsPercentage;
        return $this;
    }

    /**
    * Gets totalRows
    *  总返回行
    *
    * @return double|null
    */
    public function getTotalRows()
    {
        return $this->container['totalRows'];
    }

    /**
    * Sets totalRows
    *
    * @param double|null $totalRows 总返回行
    *
    * @return $this
    */
    public function setTotalRows($totalRows)
    {
        $this->container['totalRows'] = $totalRows;
        return $this;
    }

    /**
    * Gets totalRowsPercentage
    *  总返回行百分比
    *
    * @return double|null
    */
    public function getTotalRowsPercentage()
    {
        return $this->container['totalRowsPercentage'];
    }

    /**
    * Sets totalRowsPercentage
    *
    * @param double|null $totalRowsPercentage 总返回行百分比
    *
    * @return $this
    */
    public function setTotalRowsPercentage($totalRowsPercentage)
    {
        $this->container['totalRowsPercentage'] = $totalRowsPercentage;
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


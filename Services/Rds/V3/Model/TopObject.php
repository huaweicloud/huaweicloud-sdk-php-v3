<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rowId  id
    * databaseName  数据库名
    * schemaName  模式
    * objectName  对象名
    * objectId  对象id
    * objectType  对象类型
    * sqlStatement  sql文本
    * executionCount  执行次数
    * planGenerationNum  获取执行计划次数
    * lastExecutionTime  最近执行时间
    * avgWorkerTime  平均cpu耗时(单位为毫秒)
    * totalWorkerTime  总cpu耗时(单位为毫秒)
    * lastWorkerTime  最近cpu耗时(单位为毫秒)
    * minWorkerTime  最小cpu耗时(单位为毫秒)
    * maxWorkerTime  最大cpu耗时(单位为毫秒)
    * avgLogicalReads  平均逻辑读
    * totalLogicalReads  总共逻辑读
    * lastLogicalReads  最近逻辑读
    * minLogicalReads  最小逻辑读
    * maxLogicalReads  最大逻辑读
    * avgLogicalWrites  平均逻辑写
    * totalLogicalWrites  总共逻辑写
    * lastLogicalWrites  最近逻辑写
    * minLogicalWrites  最小逻辑写
    * maxLogicalWrites  最大逻辑写
    * avgLogicalIo  平均逻辑io
    * totalLogicalIo  总共逻辑io
    * lastLogicalIo  最近逻辑io
    * minLogicalIo  最小逻辑io
    * maxLogicalIo  最大逻辑io
    * avgPhysicalReads  平均物理读
    * totalPhysicalReads  总共物理读
    * lastPhysicalReads  最近物理读
    * minPhysicalReads  最小物理读
    * maxPhysicalReads  最大物理读
    * avgElapsedTime  平均执行耗时
    * totalElapsedTime  总共执行耗时
    * lastElapsedTime  最近执行耗时
    * minElapsedTime  最小执行耗时
    * maxElapsedTime  最大执行耗时
    * avgRows  平均返回行
    * totalRows  总返回行
    * lastRows  最近返回行
    * minRows  最小返回行
    * maxRows  最大返回行
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rowId' => 'string',
            'databaseName' => 'string',
            'schemaName' => 'string',
            'objectName' => 'string',
            'objectId' => 'string',
            'objectType' => 'string',
            'sqlStatement' => 'string',
            'executionCount' => 'string',
            'planGenerationNum' => 'string',
            'lastExecutionTime' => 'string',
            'avgWorkerTime' => 'string',
            'totalWorkerTime' => 'string',
            'lastWorkerTime' => 'string',
            'minWorkerTime' => 'string',
            'maxWorkerTime' => 'string',
            'avgLogicalReads' => 'string',
            'totalLogicalReads' => 'string',
            'lastLogicalReads' => 'string',
            'minLogicalReads' => 'string',
            'maxLogicalReads' => 'string',
            'avgLogicalWrites' => 'string',
            'totalLogicalWrites' => 'string',
            'lastLogicalWrites' => 'string',
            'minLogicalWrites' => 'string',
            'maxLogicalWrites' => 'string',
            'avgLogicalIo' => 'string',
            'totalLogicalIo' => 'string',
            'lastLogicalIo' => 'string',
            'minLogicalIo' => 'string',
            'maxLogicalIo' => 'string',
            'avgPhysicalReads' => 'string',
            'totalPhysicalReads' => 'string',
            'lastPhysicalReads' => 'string',
            'minPhysicalReads' => 'string',
            'maxPhysicalReads' => 'string',
            'avgElapsedTime' => 'string',
            'totalElapsedTime' => 'string',
            'lastElapsedTime' => 'string',
            'minElapsedTime' => 'string',
            'maxElapsedTime' => 'string',
            'avgRows' => 'string',
            'totalRows' => 'string',
            'lastRows' => 'string',
            'minRows' => 'string',
            'maxRows' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rowId  id
    * databaseName  数据库名
    * schemaName  模式
    * objectName  对象名
    * objectId  对象id
    * objectType  对象类型
    * sqlStatement  sql文本
    * executionCount  执行次数
    * planGenerationNum  获取执行计划次数
    * lastExecutionTime  最近执行时间
    * avgWorkerTime  平均cpu耗时(单位为毫秒)
    * totalWorkerTime  总cpu耗时(单位为毫秒)
    * lastWorkerTime  最近cpu耗时(单位为毫秒)
    * minWorkerTime  最小cpu耗时(单位为毫秒)
    * maxWorkerTime  最大cpu耗时(单位为毫秒)
    * avgLogicalReads  平均逻辑读
    * totalLogicalReads  总共逻辑读
    * lastLogicalReads  最近逻辑读
    * minLogicalReads  最小逻辑读
    * maxLogicalReads  最大逻辑读
    * avgLogicalWrites  平均逻辑写
    * totalLogicalWrites  总共逻辑写
    * lastLogicalWrites  最近逻辑写
    * minLogicalWrites  最小逻辑写
    * maxLogicalWrites  最大逻辑写
    * avgLogicalIo  平均逻辑io
    * totalLogicalIo  总共逻辑io
    * lastLogicalIo  最近逻辑io
    * minLogicalIo  最小逻辑io
    * maxLogicalIo  最大逻辑io
    * avgPhysicalReads  平均物理读
    * totalPhysicalReads  总共物理读
    * lastPhysicalReads  最近物理读
    * minPhysicalReads  最小物理读
    * maxPhysicalReads  最大物理读
    * avgElapsedTime  平均执行耗时
    * totalElapsedTime  总共执行耗时
    * lastElapsedTime  最近执行耗时
    * minElapsedTime  最小执行耗时
    * maxElapsedTime  最大执行耗时
    * avgRows  平均返回行
    * totalRows  总返回行
    * lastRows  最近返回行
    * minRows  最小返回行
    * maxRows  最大返回行
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rowId' => null,
        'databaseName' => null,
        'schemaName' => null,
        'objectName' => null,
        'objectId' => null,
        'objectType' => null,
        'sqlStatement' => null,
        'executionCount' => null,
        'planGenerationNum' => null,
        'lastExecutionTime' => null,
        'avgWorkerTime' => null,
        'totalWorkerTime' => null,
        'lastWorkerTime' => null,
        'minWorkerTime' => null,
        'maxWorkerTime' => null,
        'avgLogicalReads' => null,
        'totalLogicalReads' => null,
        'lastLogicalReads' => null,
        'minLogicalReads' => null,
        'maxLogicalReads' => null,
        'avgLogicalWrites' => null,
        'totalLogicalWrites' => null,
        'lastLogicalWrites' => null,
        'minLogicalWrites' => null,
        'maxLogicalWrites' => null,
        'avgLogicalIo' => null,
        'totalLogicalIo' => null,
        'lastLogicalIo' => null,
        'minLogicalIo' => null,
        'maxLogicalIo' => null,
        'avgPhysicalReads' => null,
        'totalPhysicalReads' => null,
        'lastPhysicalReads' => null,
        'minPhysicalReads' => null,
        'maxPhysicalReads' => null,
        'avgElapsedTime' => null,
        'totalElapsedTime' => null,
        'lastElapsedTime' => null,
        'minElapsedTime' => null,
        'maxElapsedTime' => null,
        'avgRows' => null,
        'totalRows' => null,
        'lastRows' => null,
        'minRows' => null,
        'maxRows' => null
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
    * rowId  id
    * databaseName  数据库名
    * schemaName  模式
    * objectName  对象名
    * objectId  对象id
    * objectType  对象类型
    * sqlStatement  sql文本
    * executionCount  执行次数
    * planGenerationNum  获取执行计划次数
    * lastExecutionTime  最近执行时间
    * avgWorkerTime  平均cpu耗时(单位为毫秒)
    * totalWorkerTime  总cpu耗时(单位为毫秒)
    * lastWorkerTime  最近cpu耗时(单位为毫秒)
    * minWorkerTime  最小cpu耗时(单位为毫秒)
    * maxWorkerTime  最大cpu耗时(单位为毫秒)
    * avgLogicalReads  平均逻辑读
    * totalLogicalReads  总共逻辑读
    * lastLogicalReads  最近逻辑读
    * minLogicalReads  最小逻辑读
    * maxLogicalReads  最大逻辑读
    * avgLogicalWrites  平均逻辑写
    * totalLogicalWrites  总共逻辑写
    * lastLogicalWrites  最近逻辑写
    * minLogicalWrites  最小逻辑写
    * maxLogicalWrites  最大逻辑写
    * avgLogicalIo  平均逻辑io
    * totalLogicalIo  总共逻辑io
    * lastLogicalIo  最近逻辑io
    * minLogicalIo  最小逻辑io
    * maxLogicalIo  最大逻辑io
    * avgPhysicalReads  平均物理读
    * totalPhysicalReads  总共物理读
    * lastPhysicalReads  最近物理读
    * minPhysicalReads  最小物理读
    * maxPhysicalReads  最大物理读
    * avgElapsedTime  平均执行耗时
    * totalElapsedTime  总共执行耗时
    * lastElapsedTime  最近执行耗时
    * minElapsedTime  最小执行耗时
    * maxElapsedTime  最大执行耗时
    * avgRows  平均返回行
    * totalRows  总返回行
    * lastRows  最近返回行
    * minRows  最小返回行
    * maxRows  最大返回行
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rowId' => 'row_id',
            'databaseName' => 'database_name',
            'schemaName' => 'schema_name',
            'objectName' => 'object_name',
            'objectId' => 'object_id',
            'objectType' => 'object_type',
            'sqlStatement' => 'sql_statement',
            'executionCount' => 'execution_count',
            'planGenerationNum' => 'plan_generation_num',
            'lastExecutionTime' => 'last_execution_time',
            'avgWorkerTime' => 'avg_worker_time',
            'totalWorkerTime' => 'total_worker_time',
            'lastWorkerTime' => 'last_worker_time',
            'minWorkerTime' => 'min_worker_time',
            'maxWorkerTime' => 'max_worker_time',
            'avgLogicalReads' => 'avg_logical_reads',
            'totalLogicalReads' => 'total_logical_reads',
            'lastLogicalReads' => 'last_logical_reads',
            'minLogicalReads' => 'min_logical_reads',
            'maxLogicalReads' => 'max_logical_reads',
            'avgLogicalWrites' => 'avg_logical_writes',
            'totalLogicalWrites' => 'total_logical_writes',
            'lastLogicalWrites' => 'last_logical_writes',
            'minLogicalWrites' => 'min_logical_writes',
            'maxLogicalWrites' => 'max_logical_writes',
            'avgLogicalIo' => 'avg_logical_io',
            'totalLogicalIo' => 'total_logical_io',
            'lastLogicalIo' => 'last_logical_io',
            'minLogicalIo' => 'min_logical_io',
            'maxLogicalIo' => 'max_logical_io',
            'avgPhysicalReads' => 'avg_physical_reads',
            'totalPhysicalReads' => 'total_physical_reads',
            'lastPhysicalReads' => 'last_physical_reads',
            'minPhysicalReads' => 'min_physical_reads',
            'maxPhysicalReads' => 'max_physical_reads',
            'avgElapsedTime' => 'avg_elapsed_time',
            'totalElapsedTime' => 'total_elapsed_time',
            'lastElapsedTime' => 'last_elapsed_time',
            'minElapsedTime' => 'min_elapsed_time',
            'maxElapsedTime' => 'max_elapsed_time',
            'avgRows' => 'avg_rows',
            'totalRows' => 'total_rows',
            'lastRows' => 'last_rows',
            'minRows' => 'min_rows',
            'maxRows' => 'max_rows'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rowId  id
    * databaseName  数据库名
    * schemaName  模式
    * objectName  对象名
    * objectId  对象id
    * objectType  对象类型
    * sqlStatement  sql文本
    * executionCount  执行次数
    * planGenerationNum  获取执行计划次数
    * lastExecutionTime  最近执行时间
    * avgWorkerTime  平均cpu耗时(单位为毫秒)
    * totalWorkerTime  总cpu耗时(单位为毫秒)
    * lastWorkerTime  最近cpu耗时(单位为毫秒)
    * minWorkerTime  最小cpu耗时(单位为毫秒)
    * maxWorkerTime  最大cpu耗时(单位为毫秒)
    * avgLogicalReads  平均逻辑读
    * totalLogicalReads  总共逻辑读
    * lastLogicalReads  最近逻辑读
    * minLogicalReads  最小逻辑读
    * maxLogicalReads  最大逻辑读
    * avgLogicalWrites  平均逻辑写
    * totalLogicalWrites  总共逻辑写
    * lastLogicalWrites  最近逻辑写
    * minLogicalWrites  最小逻辑写
    * maxLogicalWrites  最大逻辑写
    * avgLogicalIo  平均逻辑io
    * totalLogicalIo  总共逻辑io
    * lastLogicalIo  最近逻辑io
    * minLogicalIo  最小逻辑io
    * maxLogicalIo  最大逻辑io
    * avgPhysicalReads  平均物理读
    * totalPhysicalReads  总共物理读
    * lastPhysicalReads  最近物理读
    * minPhysicalReads  最小物理读
    * maxPhysicalReads  最大物理读
    * avgElapsedTime  平均执行耗时
    * totalElapsedTime  总共执行耗时
    * lastElapsedTime  最近执行耗时
    * minElapsedTime  最小执行耗时
    * maxElapsedTime  最大执行耗时
    * avgRows  平均返回行
    * totalRows  总返回行
    * lastRows  最近返回行
    * minRows  最小返回行
    * maxRows  最大返回行
    *
    * @var string[]
    */
    protected static $setters = [
            'rowId' => 'setRowId',
            'databaseName' => 'setDatabaseName',
            'schemaName' => 'setSchemaName',
            'objectName' => 'setObjectName',
            'objectId' => 'setObjectId',
            'objectType' => 'setObjectType',
            'sqlStatement' => 'setSqlStatement',
            'executionCount' => 'setExecutionCount',
            'planGenerationNum' => 'setPlanGenerationNum',
            'lastExecutionTime' => 'setLastExecutionTime',
            'avgWorkerTime' => 'setAvgWorkerTime',
            'totalWorkerTime' => 'setTotalWorkerTime',
            'lastWorkerTime' => 'setLastWorkerTime',
            'minWorkerTime' => 'setMinWorkerTime',
            'maxWorkerTime' => 'setMaxWorkerTime',
            'avgLogicalReads' => 'setAvgLogicalReads',
            'totalLogicalReads' => 'setTotalLogicalReads',
            'lastLogicalReads' => 'setLastLogicalReads',
            'minLogicalReads' => 'setMinLogicalReads',
            'maxLogicalReads' => 'setMaxLogicalReads',
            'avgLogicalWrites' => 'setAvgLogicalWrites',
            'totalLogicalWrites' => 'setTotalLogicalWrites',
            'lastLogicalWrites' => 'setLastLogicalWrites',
            'minLogicalWrites' => 'setMinLogicalWrites',
            'maxLogicalWrites' => 'setMaxLogicalWrites',
            'avgLogicalIo' => 'setAvgLogicalIo',
            'totalLogicalIo' => 'setTotalLogicalIo',
            'lastLogicalIo' => 'setLastLogicalIo',
            'minLogicalIo' => 'setMinLogicalIo',
            'maxLogicalIo' => 'setMaxLogicalIo',
            'avgPhysicalReads' => 'setAvgPhysicalReads',
            'totalPhysicalReads' => 'setTotalPhysicalReads',
            'lastPhysicalReads' => 'setLastPhysicalReads',
            'minPhysicalReads' => 'setMinPhysicalReads',
            'maxPhysicalReads' => 'setMaxPhysicalReads',
            'avgElapsedTime' => 'setAvgElapsedTime',
            'totalElapsedTime' => 'setTotalElapsedTime',
            'lastElapsedTime' => 'setLastElapsedTime',
            'minElapsedTime' => 'setMinElapsedTime',
            'maxElapsedTime' => 'setMaxElapsedTime',
            'avgRows' => 'setAvgRows',
            'totalRows' => 'setTotalRows',
            'lastRows' => 'setLastRows',
            'minRows' => 'setMinRows',
            'maxRows' => 'setMaxRows'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rowId  id
    * databaseName  数据库名
    * schemaName  模式
    * objectName  对象名
    * objectId  对象id
    * objectType  对象类型
    * sqlStatement  sql文本
    * executionCount  执行次数
    * planGenerationNum  获取执行计划次数
    * lastExecutionTime  最近执行时间
    * avgWorkerTime  平均cpu耗时(单位为毫秒)
    * totalWorkerTime  总cpu耗时(单位为毫秒)
    * lastWorkerTime  最近cpu耗时(单位为毫秒)
    * minWorkerTime  最小cpu耗时(单位为毫秒)
    * maxWorkerTime  最大cpu耗时(单位为毫秒)
    * avgLogicalReads  平均逻辑读
    * totalLogicalReads  总共逻辑读
    * lastLogicalReads  最近逻辑读
    * minLogicalReads  最小逻辑读
    * maxLogicalReads  最大逻辑读
    * avgLogicalWrites  平均逻辑写
    * totalLogicalWrites  总共逻辑写
    * lastLogicalWrites  最近逻辑写
    * minLogicalWrites  最小逻辑写
    * maxLogicalWrites  最大逻辑写
    * avgLogicalIo  平均逻辑io
    * totalLogicalIo  总共逻辑io
    * lastLogicalIo  最近逻辑io
    * minLogicalIo  最小逻辑io
    * maxLogicalIo  最大逻辑io
    * avgPhysicalReads  平均物理读
    * totalPhysicalReads  总共物理读
    * lastPhysicalReads  最近物理读
    * minPhysicalReads  最小物理读
    * maxPhysicalReads  最大物理读
    * avgElapsedTime  平均执行耗时
    * totalElapsedTime  总共执行耗时
    * lastElapsedTime  最近执行耗时
    * minElapsedTime  最小执行耗时
    * maxElapsedTime  最大执行耗时
    * avgRows  平均返回行
    * totalRows  总返回行
    * lastRows  最近返回行
    * minRows  最小返回行
    * maxRows  最大返回行
    *
    * @var string[]
    */
    protected static $getters = [
            'rowId' => 'getRowId',
            'databaseName' => 'getDatabaseName',
            'schemaName' => 'getSchemaName',
            'objectName' => 'getObjectName',
            'objectId' => 'getObjectId',
            'objectType' => 'getObjectType',
            'sqlStatement' => 'getSqlStatement',
            'executionCount' => 'getExecutionCount',
            'planGenerationNum' => 'getPlanGenerationNum',
            'lastExecutionTime' => 'getLastExecutionTime',
            'avgWorkerTime' => 'getAvgWorkerTime',
            'totalWorkerTime' => 'getTotalWorkerTime',
            'lastWorkerTime' => 'getLastWorkerTime',
            'minWorkerTime' => 'getMinWorkerTime',
            'maxWorkerTime' => 'getMaxWorkerTime',
            'avgLogicalReads' => 'getAvgLogicalReads',
            'totalLogicalReads' => 'getTotalLogicalReads',
            'lastLogicalReads' => 'getLastLogicalReads',
            'minLogicalReads' => 'getMinLogicalReads',
            'maxLogicalReads' => 'getMaxLogicalReads',
            'avgLogicalWrites' => 'getAvgLogicalWrites',
            'totalLogicalWrites' => 'getTotalLogicalWrites',
            'lastLogicalWrites' => 'getLastLogicalWrites',
            'minLogicalWrites' => 'getMinLogicalWrites',
            'maxLogicalWrites' => 'getMaxLogicalWrites',
            'avgLogicalIo' => 'getAvgLogicalIo',
            'totalLogicalIo' => 'getTotalLogicalIo',
            'lastLogicalIo' => 'getLastLogicalIo',
            'minLogicalIo' => 'getMinLogicalIo',
            'maxLogicalIo' => 'getMaxLogicalIo',
            'avgPhysicalReads' => 'getAvgPhysicalReads',
            'totalPhysicalReads' => 'getTotalPhysicalReads',
            'lastPhysicalReads' => 'getLastPhysicalReads',
            'minPhysicalReads' => 'getMinPhysicalReads',
            'maxPhysicalReads' => 'getMaxPhysicalReads',
            'avgElapsedTime' => 'getAvgElapsedTime',
            'totalElapsedTime' => 'getTotalElapsedTime',
            'lastElapsedTime' => 'getLastElapsedTime',
            'minElapsedTime' => 'getMinElapsedTime',
            'maxElapsedTime' => 'getMaxElapsedTime',
            'avgRows' => 'getAvgRows',
            'totalRows' => 'getTotalRows',
            'lastRows' => 'getLastRows',
            'minRows' => 'getMinRows',
            'maxRows' => 'getMaxRows'
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
        $this->container['rowId'] = isset($data['rowId']) ? $data['rowId'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['objectName'] = isset($data['objectName']) ? $data['objectName'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['sqlStatement'] = isset($data['sqlStatement']) ? $data['sqlStatement'] : null;
        $this->container['executionCount'] = isset($data['executionCount']) ? $data['executionCount'] : null;
        $this->container['planGenerationNum'] = isset($data['planGenerationNum']) ? $data['planGenerationNum'] : null;
        $this->container['lastExecutionTime'] = isset($data['lastExecutionTime']) ? $data['lastExecutionTime'] : null;
        $this->container['avgWorkerTime'] = isset($data['avgWorkerTime']) ? $data['avgWorkerTime'] : null;
        $this->container['totalWorkerTime'] = isset($data['totalWorkerTime']) ? $data['totalWorkerTime'] : null;
        $this->container['lastWorkerTime'] = isset($data['lastWorkerTime']) ? $data['lastWorkerTime'] : null;
        $this->container['minWorkerTime'] = isset($data['minWorkerTime']) ? $data['minWorkerTime'] : null;
        $this->container['maxWorkerTime'] = isset($data['maxWorkerTime']) ? $data['maxWorkerTime'] : null;
        $this->container['avgLogicalReads'] = isset($data['avgLogicalReads']) ? $data['avgLogicalReads'] : null;
        $this->container['totalLogicalReads'] = isset($data['totalLogicalReads']) ? $data['totalLogicalReads'] : null;
        $this->container['lastLogicalReads'] = isset($data['lastLogicalReads']) ? $data['lastLogicalReads'] : null;
        $this->container['minLogicalReads'] = isset($data['minLogicalReads']) ? $data['minLogicalReads'] : null;
        $this->container['maxLogicalReads'] = isset($data['maxLogicalReads']) ? $data['maxLogicalReads'] : null;
        $this->container['avgLogicalWrites'] = isset($data['avgLogicalWrites']) ? $data['avgLogicalWrites'] : null;
        $this->container['totalLogicalWrites'] = isset($data['totalLogicalWrites']) ? $data['totalLogicalWrites'] : null;
        $this->container['lastLogicalWrites'] = isset($data['lastLogicalWrites']) ? $data['lastLogicalWrites'] : null;
        $this->container['minLogicalWrites'] = isset($data['minLogicalWrites']) ? $data['minLogicalWrites'] : null;
        $this->container['maxLogicalWrites'] = isset($data['maxLogicalWrites']) ? $data['maxLogicalWrites'] : null;
        $this->container['avgLogicalIo'] = isset($data['avgLogicalIo']) ? $data['avgLogicalIo'] : null;
        $this->container['totalLogicalIo'] = isset($data['totalLogicalIo']) ? $data['totalLogicalIo'] : null;
        $this->container['lastLogicalIo'] = isset($data['lastLogicalIo']) ? $data['lastLogicalIo'] : null;
        $this->container['minLogicalIo'] = isset($data['minLogicalIo']) ? $data['minLogicalIo'] : null;
        $this->container['maxLogicalIo'] = isset($data['maxLogicalIo']) ? $data['maxLogicalIo'] : null;
        $this->container['avgPhysicalReads'] = isset($data['avgPhysicalReads']) ? $data['avgPhysicalReads'] : null;
        $this->container['totalPhysicalReads'] = isset($data['totalPhysicalReads']) ? $data['totalPhysicalReads'] : null;
        $this->container['lastPhysicalReads'] = isset($data['lastPhysicalReads']) ? $data['lastPhysicalReads'] : null;
        $this->container['minPhysicalReads'] = isset($data['minPhysicalReads']) ? $data['minPhysicalReads'] : null;
        $this->container['maxPhysicalReads'] = isset($data['maxPhysicalReads']) ? $data['maxPhysicalReads'] : null;
        $this->container['avgElapsedTime'] = isset($data['avgElapsedTime']) ? $data['avgElapsedTime'] : null;
        $this->container['totalElapsedTime'] = isset($data['totalElapsedTime']) ? $data['totalElapsedTime'] : null;
        $this->container['lastElapsedTime'] = isset($data['lastElapsedTime']) ? $data['lastElapsedTime'] : null;
        $this->container['minElapsedTime'] = isset($data['minElapsedTime']) ? $data['minElapsedTime'] : null;
        $this->container['maxElapsedTime'] = isset($data['maxElapsedTime']) ? $data['maxElapsedTime'] : null;
        $this->container['avgRows'] = isset($data['avgRows']) ? $data['avgRows'] : null;
        $this->container['totalRows'] = isset($data['totalRows']) ? $data['totalRows'] : null;
        $this->container['lastRows'] = isset($data['lastRows']) ? $data['lastRows'] : null;
        $this->container['minRows'] = isset($data['minRows']) ? $data['minRows'] : null;
        $this->container['maxRows'] = isset($data['maxRows']) ? $data['maxRows'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['rowId'] === null) {
            $invalidProperties[] = "'rowId' can't be null";
        }
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
        }
        if ($this->container['schemaName'] === null) {
            $invalidProperties[] = "'schemaName' can't be null";
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
    * Gets rowId
    *  id
    *
    * @return string
    */
    public function getRowId()
    {
        return $this->container['rowId'];
    }

    /**
    * Sets rowId
    *
    * @param string $rowId id
    *
    * @return $this
    */
    public function setRowId($rowId)
    {
        $this->container['rowId'] = $rowId;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名
    *
    * @return string
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string $databaseName 数据库名
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets schemaName
    *  模式
    *
    * @return string
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string $schemaName 模式
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets objectName
    *  对象名
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
    * @param string|null $objectName 对象名
    *
    * @return $this
    */
    public function setObjectName($objectName)
    {
        $this->container['objectName'] = $objectName;
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
    * Gets sqlStatement
    *  sql文本
    *
    * @return string|null
    */
    public function getSqlStatement()
    {
        return $this->container['sqlStatement'];
    }

    /**
    * Sets sqlStatement
    *
    * @param string|null $sqlStatement sql文本
    *
    * @return $this
    */
    public function setSqlStatement($sqlStatement)
    {
        $this->container['sqlStatement'] = $sqlStatement;
        return $this;
    }

    /**
    * Gets executionCount
    *  执行次数
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
    * @param string|null $executionCount 执行次数
    *
    * @return $this
    */
    public function setExecutionCount($executionCount)
    {
        $this->container['executionCount'] = $executionCount;
        return $this;
    }

    /**
    * Gets planGenerationNum
    *  获取执行计划次数
    *
    * @return string|null
    */
    public function getPlanGenerationNum()
    {
        return $this->container['planGenerationNum'];
    }

    /**
    * Sets planGenerationNum
    *
    * @param string|null $planGenerationNum 获取执行计划次数
    *
    * @return $this
    */
    public function setPlanGenerationNum($planGenerationNum)
    {
        $this->container['planGenerationNum'] = $planGenerationNum;
        return $this;
    }

    /**
    * Gets lastExecutionTime
    *  最近执行时间
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
    * @param string|null $lastExecutionTime 最近执行时间
    *
    * @return $this
    */
    public function setLastExecutionTime($lastExecutionTime)
    {
        $this->container['lastExecutionTime'] = $lastExecutionTime;
        return $this;
    }

    /**
    * Gets avgWorkerTime
    *  平均cpu耗时(单位为毫秒)
    *
    * @return string|null
    */
    public function getAvgWorkerTime()
    {
        return $this->container['avgWorkerTime'];
    }

    /**
    * Sets avgWorkerTime
    *
    * @param string|null $avgWorkerTime 平均cpu耗时(单位为毫秒)
    *
    * @return $this
    */
    public function setAvgWorkerTime($avgWorkerTime)
    {
        $this->container['avgWorkerTime'] = $avgWorkerTime;
        return $this;
    }

    /**
    * Gets totalWorkerTime
    *  总cpu耗时(单位为毫秒)
    *
    * @return string|null
    */
    public function getTotalWorkerTime()
    {
        return $this->container['totalWorkerTime'];
    }

    /**
    * Sets totalWorkerTime
    *
    * @param string|null $totalWorkerTime 总cpu耗时(单位为毫秒)
    *
    * @return $this
    */
    public function setTotalWorkerTime($totalWorkerTime)
    {
        $this->container['totalWorkerTime'] = $totalWorkerTime;
        return $this;
    }

    /**
    * Gets lastWorkerTime
    *  最近cpu耗时(单位为毫秒)
    *
    * @return string|null
    */
    public function getLastWorkerTime()
    {
        return $this->container['lastWorkerTime'];
    }

    /**
    * Sets lastWorkerTime
    *
    * @param string|null $lastWorkerTime 最近cpu耗时(单位为毫秒)
    *
    * @return $this
    */
    public function setLastWorkerTime($lastWorkerTime)
    {
        $this->container['lastWorkerTime'] = $lastWorkerTime;
        return $this;
    }

    /**
    * Gets minWorkerTime
    *  最小cpu耗时(单位为毫秒)
    *
    * @return string|null
    */
    public function getMinWorkerTime()
    {
        return $this->container['minWorkerTime'];
    }

    /**
    * Sets minWorkerTime
    *
    * @param string|null $minWorkerTime 最小cpu耗时(单位为毫秒)
    *
    * @return $this
    */
    public function setMinWorkerTime($minWorkerTime)
    {
        $this->container['minWorkerTime'] = $minWorkerTime;
        return $this;
    }

    /**
    * Gets maxWorkerTime
    *  最大cpu耗时(单位为毫秒)
    *
    * @return string|null
    */
    public function getMaxWorkerTime()
    {
        return $this->container['maxWorkerTime'];
    }

    /**
    * Sets maxWorkerTime
    *
    * @param string|null $maxWorkerTime 最大cpu耗时(单位为毫秒)
    *
    * @return $this
    */
    public function setMaxWorkerTime($maxWorkerTime)
    {
        $this->container['maxWorkerTime'] = $maxWorkerTime;
        return $this;
    }

    /**
    * Gets avgLogicalReads
    *  平均逻辑读
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
    * @param string|null $avgLogicalReads 平均逻辑读
    *
    * @return $this
    */
    public function setAvgLogicalReads($avgLogicalReads)
    {
        $this->container['avgLogicalReads'] = $avgLogicalReads;
        return $this;
    }

    /**
    * Gets totalLogicalReads
    *  总共逻辑读
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
    * @param string|null $totalLogicalReads 总共逻辑读
    *
    * @return $this
    */
    public function setTotalLogicalReads($totalLogicalReads)
    {
        $this->container['totalLogicalReads'] = $totalLogicalReads;
        return $this;
    }

    /**
    * Gets lastLogicalReads
    *  最近逻辑读
    *
    * @return string|null
    */
    public function getLastLogicalReads()
    {
        return $this->container['lastLogicalReads'];
    }

    /**
    * Sets lastLogicalReads
    *
    * @param string|null $lastLogicalReads 最近逻辑读
    *
    * @return $this
    */
    public function setLastLogicalReads($lastLogicalReads)
    {
        $this->container['lastLogicalReads'] = $lastLogicalReads;
        return $this;
    }

    /**
    * Gets minLogicalReads
    *  最小逻辑读
    *
    * @return string|null
    */
    public function getMinLogicalReads()
    {
        return $this->container['minLogicalReads'];
    }

    /**
    * Sets minLogicalReads
    *
    * @param string|null $minLogicalReads 最小逻辑读
    *
    * @return $this
    */
    public function setMinLogicalReads($minLogicalReads)
    {
        $this->container['minLogicalReads'] = $minLogicalReads;
        return $this;
    }

    /**
    * Gets maxLogicalReads
    *  最大逻辑读
    *
    * @return string|null
    */
    public function getMaxLogicalReads()
    {
        return $this->container['maxLogicalReads'];
    }

    /**
    * Sets maxLogicalReads
    *
    * @param string|null $maxLogicalReads 最大逻辑读
    *
    * @return $this
    */
    public function setMaxLogicalReads($maxLogicalReads)
    {
        $this->container['maxLogicalReads'] = $maxLogicalReads;
        return $this;
    }

    /**
    * Gets avgLogicalWrites
    *  平均逻辑写
    *
    * @return string|null
    */
    public function getAvgLogicalWrites()
    {
        return $this->container['avgLogicalWrites'];
    }

    /**
    * Sets avgLogicalWrites
    *
    * @param string|null $avgLogicalWrites 平均逻辑写
    *
    * @return $this
    */
    public function setAvgLogicalWrites($avgLogicalWrites)
    {
        $this->container['avgLogicalWrites'] = $avgLogicalWrites;
        return $this;
    }

    /**
    * Gets totalLogicalWrites
    *  总共逻辑写
    *
    * @return string|null
    */
    public function getTotalLogicalWrites()
    {
        return $this->container['totalLogicalWrites'];
    }

    /**
    * Sets totalLogicalWrites
    *
    * @param string|null $totalLogicalWrites 总共逻辑写
    *
    * @return $this
    */
    public function setTotalLogicalWrites($totalLogicalWrites)
    {
        $this->container['totalLogicalWrites'] = $totalLogicalWrites;
        return $this;
    }

    /**
    * Gets lastLogicalWrites
    *  最近逻辑写
    *
    * @return string|null
    */
    public function getLastLogicalWrites()
    {
        return $this->container['lastLogicalWrites'];
    }

    /**
    * Sets lastLogicalWrites
    *
    * @param string|null $lastLogicalWrites 最近逻辑写
    *
    * @return $this
    */
    public function setLastLogicalWrites($lastLogicalWrites)
    {
        $this->container['lastLogicalWrites'] = $lastLogicalWrites;
        return $this;
    }

    /**
    * Gets minLogicalWrites
    *  最小逻辑写
    *
    * @return string|null
    */
    public function getMinLogicalWrites()
    {
        return $this->container['minLogicalWrites'];
    }

    /**
    * Sets minLogicalWrites
    *
    * @param string|null $minLogicalWrites 最小逻辑写
    *
    * @return $this
    */
    public function setMinLogicalWrites($minLogicalWrites)
    {
        $this->container['minLogicalWrites'] = $minLogicalWrites;
        return $this;
    }

    /**
    * Gets maxLogicalWrites
    *  最大逻辑写
    *
    * @return string|null
    */
    public function getMaxLogicalWrites()
    {
        return $this->container['maxLogicalWrites'];
    }

    /**
    * Sets maxLogicalWrites
    *
    * @param string|null $maxLogicalWrites 最大逻辑写
    *
    * @return $this
    */
    public function setMaxLogicalWrites($maxLogicalWrites)
    {
        $this->container['maxLogicalWrites'] = $maxLogicalWrites;
        return $this;
    }

    /**
    * Gets avgLogicalIo
    *  平均逻辑io
    *
    * @return string|null
    */
    public function getAvgLogicalIo()
    {
        return $this->container['avgLogicalIo'];
    }

    /**
    * Sets avgLogicalIo
    *
    * @param string|null $avgLogicalIo 平均逻辑io
    *
    * @return $this
    */
    public function setAvgLogicalIo($avgLogicalIo)
    {
        $this->container['avgLogicalIo'] = $avgLogicalIo;
        return $this;
    }

    /**
    * Gets totalLogicalIo
    *  总共逻辑io
    *
    * @return string|null
    */
    public function getTotalLogicalIo()
    {
        return $this->container['totalLogicalIo'];
    }

    /**
    * Sets totalLogicalIo
    *
    * @param string|null $totalLogicalIo 总共逻辑io
    *
    * @return $this
    */
    public function setTotalLogicalIo($totalLogicalIo)
    {
        $this->container['totalLogicalIo'] = $totalLogicalIo;
        return $this;
    }

    /**
    * Gets lastLogicalIo
    *  最近逻辑io
    *
    * @return string|null
    */
    public function getLastLogicalIo()
    {
        return $this->container['lastLogicalIo'];
    }

    /**
    * Sets lastLogicalIo
    *
    * @param string|null $lastLogicalIo 最近逻辑io
    *
    * @return $this
    */
    public function setLastLogicalIo($lastLogicalIo)
    {
        $this->container['lastLogicalIo'] = $lastLogicalIo;
        return $this;
    }

    /**
    * Gets minLogicalIo
    *  最小逻辑io
    *
    * @return string|null
    */
    public function getMinLogicalIo()
    {
        return $this->container['minLogicalIo'];
    }

    /**
    * Sets minLogicalIo
    *
    * @param string|null $minLogicalIo 最小逻辑io
    *
    * @return $this
    */
    public function setMinLogicalIo($minLogicalIo)
    {
        $this->container['minLogicalIo'] = $minLogicalIo;
        return $this;
    }

    /**
    * Gets maxLogicalIo
    *  最大逻辑io
    *
    * @return string|null
    */
    public function getMaxLogicalIo()
    {
        return $this->container['maxLogicalIo'];
    }

    /**
    * Sets maxLogicalIo
    *
    * @param string|null $maxLogicalIo 最大逻辑io
    *
    * @return $this
    */
    public function setMaxLogicalIo($maxLogicalIo)
    {
        $this->container['maxLogicalIo'] = $maxLogicalIo;
        return $this;
    }

    /**
    * Gets avgPhysicalReads
    *  平均物理读
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
    * @param string|null $avgPhysicalReads 平均物理读
    *
    * @return $this
    */
    public function setAvgPhysicalReads($avgPhysicalReads)
    {
        $this->container['avgPhysicalReads'] = $avgPhysicalReads;
        return $this;
    }

    /**
    * Gets totalPhysicalReads
    *  总共物理读
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
    * @param string|null $totalPhysicalReads 总共物理读
    *
    * @return $this
    */
    public function setTotalPhysicalReads($totalPhysicalReads)
    {
        $this->container['totalPhysicalReads'] = $totalPhysicalReads;
        return $this;
    }

    /**
    * Gets lastPhysicalReads
    *  最近物理读
    *
    * @return string|null
    */
    public function getLastPhysicalReads()
    {
        return $this->container['lastPhysicalReads'];
    }

    /**
    * Sets lastPhysicalReads
    *
    * @param string|null $lastPhysicalReads 最近物理读
    *
    * @return $this
    */
    public function setLastPhysicalReads($lastPhysicalReads)
    {
        $this->container['lastPhysicalReads'] = $lastPhysicalReads;
        return $this;
    }

    /**
    * Gets minPhysicalReads
    *  最小物理读
    *
    * @return string|null
    */
    public function getMinPhysicalReads()
    {
        return $this->container['minPhysicalReads'];
    }

    /**
    * Sets minPhysicalReads
    *
    * @param string|null $minPhysicalReads 最小物理读
    *
    * @return $this
    */
    public function setMinPhysicalReads($minPhysicalReads)
    {
        $this->container['minPhysicalReads'] = $minPhysicalReads;
        return $this;
    }

    /**
    * Gets maxPhysicalReads
    *  最大物理读
    *
    * @return string|null
    */
    public function getMaxPhysicalReads()
    {
        return $this->container['maxPhysicalReads'];
    }

    /**
    * Sets maxPhysicalReads
    *
    * @param string|null $maxPhysicalReads 最大物理读
    *
    * @return $this
    */
    public function setMaxPhysicalReads($maxPhysicalReads)
    {
        $this->container['maxPhysicalReads'] = $maxPhysicalReads;
        return $this;
    }

    /**
    * Gets avgElapsedTime
    *  平均执行耗时
    *
    * @return string|null
    */
    public function getAvgElapsedTime()
    {
        return $this->container['avgElapsedTime'];
    }

    /**
    * Sets avgElapsedTime
    *
    * @param string|null $avgElapsedTime 平均执行耗时
    *
    * @return $this
    */
    public function setAvgElapsedTime($avgElapsedTime)
    {
        $this->container['avgElapsedTime'] = $avgElapsedTime;
        return $this;
    }

    /**
    * Gets totalElapsedTime
    *  总共执行耗时
    *
    * @return string|null
    */
    public function getTotalElapsedTime()
    {
        return $this->container['totalElapsedTime'];
    }

    /**
    * Sets totalElapsedTime
    *
    * @param string|null $totalElapsedTime 总共执行耗时
    *
    * @return $this
    */
    public function setTotalElapsedTime($totalElapsedTime)
    {
        $this->container['totalElapsedTime'] = $totalElapsedTime;
        return $this;
    }

    /**
    * Gets lastElapsedTime
    *  最近执行耗时
    *
    * @return string|null
    */
    public function getLastElapsedTime()
    {
        return $this->container['lastElapsedTime'];
    }

    /**
    * Sets lastElapsedTime
    *
    * @param string|null $lastElapsedTime 最近执行耗时
    *
    * @return $this
    */
    public function setLastElapsedTime($lastElapsedTime)
    {
        $this->container['lastElapsedTime'] = $lastElapsedTime;
        return $this;
    }

    /**
    * Gets minElapsedTime
    *  最小执行耗时
    *
    * @return string|null
    */
    public function getMinElapsedTime()
    {
        return $this->container['minElapsedTime'];
    }

    /**
    * Sets minElapsedTime
    *
    * @param string|null $minElapsedTime 最小执行耗时
    *
    * @return $this
    */
    public function setMinElapsedTime($minElapsedTime)
    {
        $this->container['minElapsedTime'] = $minElapsedTime;
        return $this;
    }

    /**
    * Gets maxElapsedTime
    *  最大执行耗时
    *
    * @return string|null
    */
    public function getMaxElapsedTime()
    {
        return $this->container['maxElapsedTime'];
    }

    /**
    * Sets maxElapsedTime
    *
    * @param string|null $maxElapsedTime 最大执行耗时
    *
    * @return $this
    */
    public function setMaxElapsedTime($maxElapsedTime)
    {
        $this->container['maxElapsedTime'] = $maxElapsedTime;
        return $this;
    }

    /**
    * Gets avgRows
    *  平均返回行
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
    * @param string|null $avgRows 平均返回行
    *
    * @return $this
    */
    public function setAvgRows($avgRows)
    {
        $this->container['avgRows'] = $avgRows;
        return $this;
    }

    /**
    * Gets totalRows
    *  总返回行
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
    * @param string|null $totalRows 总返回行
    *
    * @return $this
    */
    public function setTotalRows($totalRows)
    {
        $this->container['totalRows'] = $totalRows;
        return $this;
    }

    /**
    * Gets lastRows
    *  最近返回行
    *
    * @return string|null
    */
    public function getLastRows()
    {
        return $this->container['lastRows'];
    }

    /**
    * Sets lastRows
    *
    * @param string|null $lastRows 最近返回行
    *
    * @return $this
    */
    public function setLastRows($lastRows)
    {
        $this->container['lastRows'] = $lastRows;
        return $this;
    }

    /**
    * Gets minRows
    *  最小返回行
    *
    * @return string|null
    */
    public function getMinRows()
    {
        return $this->container['minRows'];
    }

    /**
    * Sets minRows
    *
    * @param string|null $minRows 最小返回行
    *
    * @return $this
    */
    public function setMinRows($minRows)
    {
        $this->container['minRows'] = $minRows;
        return $this;
    }

    /**
    * Gets maxRows
    *  最大返回行
    *
    * @return string|null
    */
    public function getMaxRows()
    {
        return $this->container['maxRows'];
    }

    /**
    * Sets maxRows
    *
    * @param string|null $maxRows 最大返回行
    *
    * @return $this
    */
    public function setMaxRows($maxRows)
    {
        $this->container['maxRows'] = $maxRows;
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


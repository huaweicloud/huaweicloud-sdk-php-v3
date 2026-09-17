<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLatestSpaceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLatestSpaceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * updateTime  更新时间
    * buyStorageBytes  MySQL购买空间
    * usedStorageBytes  MySQL已使用空间
    * lastStorageBytes  MySQL剩余空间
    * buyStoragePercent  MySQL使用空间占比
    * dataUsageBytes  数据空间
    * dataUsagePercent  数据空间占比
    * binlogUsageBytes  binlog空间
    * binlogUsagePercent  binlog空间占比
    * relayLogUsageBytes  relayLog空间
    * relayLogUsagePercent  relayLog空间占比
    * auditLogUsageBytes  auditLog空间
    * auditLogUsagePercent  auditLog空间占比
    * slowLogUsageBytes  slowLog空间
    * slowLogUsagePercent  slowLog空间占比
    * tempUsageBytes  临时空间
    * tempUsagePercent  临时空间占比
    * undoLogUsageBytes  undoLog空间
    * undoLogUsagePercent  undoLog空间占比
    * otherUsageBytes  其他空间
    * otherUsagePercent  其他空间占比
    * tooManyFiles  是否文件过多
    * pageUsageBytes  TaurusDB数据空间
    * totalSpace  SQLServer总空间
    * totalUsage  SQLServer已使用空间
    * availSize  SQLServer可用空间
    * data  SQLServer数据空间
    * log  SQLServer log空间
    * runtime  SQLServer runtime
    * slowLog  SQLServer slow_log空间
    * auditLog  SQLServer audit_log空间
    * tempdb  SQLServer tempdb空间
    * msdb  SQLServer msdb空间
    * usedSizeBytes  DDS磁盘使用量
    * totalSizeBytes  DDS磁盘总量
    * avgDailyGrowthBytes  DDS近一周日均增长
    * estimatedAvailableDays  DDS预计可用天数
    * dataSizeBytes  DDS数据空间
    * oplogSizeBytes  DDS oplog空间
    * otherSizeBytes  DDS其他空间
    * walSize  PostgreSQL wallog空间
    * dataSize  PostgreSQL数据空间
    * pgauditLogSize  PostgreSQL auditlog空间
    * pgsqlTmpSize  PostgreSQL临时空间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'updateTime' => 'int',
            'buyStorageBytes' => 'int',
            'usedStorageBytes' => 'int',
            'lastStorageBytes' => 'int',
            'buyStoragePercent' => 'double',
            'dataUsageBytes' => 'int',
            'dataUsagePercent' => 'double',
            'binlogUsageBytes' => 'int',
            'binlogUsagePercent' => 'double',
            'relayLogUsageBytes' => 'int',
            'relayLogUsagePercent' => 'double',
            'auditLogUsageBytes' => 'int',
            'auditLogUsagePercent' => 'double',
            'slowLogUsageBytes' => 'int',
            'slowLogUsagePercent' => 'double',
            'tempUsageBytes' => 'int',
            'tempUsagePercent' => 'double',
            'undoLogUsageBytes' => 'int',
            'undoLogUsagePercent' => 'double',
            'otherUsageBytes' => 'int',
            'otherUsagePercent' => 'double',
            'tooManyFiles' => 'bool',
            'pageUsageBytes' => 'double',
            'totalSpace' => 'int',
            'totalUsage' => 'int',
            'availSize' => 'int',
            'data' => 'double',
            'log' => 'double',
            'runtime' => 'double',
            'slowLog' => 'double',
            'auditLog' => 'double',
            'tempdb' => 'double',
            'msdb' => 'double',
            'usedSizeBytes' => 'int',
            'totalSizeBytes' => 'int',
            'avgDailyGrowthBytes' => 'double',
            'estimatedAvailableDays' => 'int',
            'dataSizeBytes' => 'int',
            'oplogSizeBytes' => 'int',
            'otherSizeBytes' => 'int',
            'walSize' => 'double',
            'dataSize' => 'double',
            'pgauditLogSize' => 'double',
            'pgsqlTmpSize' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * updateTime  更新时间
    * buyStorageBytes  MySQL购买空间
    * usedStorageBytes  MySQL已使用空间
    * lastStorageBytes  MySQL剩余空间
    * buyStoragePercent  MySQL使用空间占比
    * dataUsageBytes  数据空间
    * dataUsagePercent  数据空间占比
    * binlogUsageBytes  binlog空间
    * binlogUsagePercent  binlog空间占比
    * relayLogUsageBytes  relayLog空间
    * relayLogUsagePercent  relayLog空间占比
    * auditLogUsageBytes  auditLog空间
    * auditLogUsagePercent  auditLog空间占比
    * slowLogUsageBytes  slowLog空间
    * slowLogUsagePercent  slowLog空间占比
    * tempUsageBytes  临时空间
    * tempUsagePercent  临时空间占比
    * undoLogUsageBytes  undoLog空间
    * undoLogUsagePercent  undoLog空间占比
    * otherUsageBytes  其他空间
    * otherUsagePercent  其他空间占比
    * tooManyFiles  是否文件过多
    * pageUsageBytes  TaurusDB数据空间
    * totalSpace  SQLServer总空间
    * totalUsage  SQLServer已使用空间
    * availSize  SQLServer可用空间
    * data  SQLServer数据空间
    * log  SQLServer log空间
    * runtime  SQLServer runtime
    * slowLog  SQLServer slow_log空间
    * auditLog  SQLServer audit_log空间
    * tempdb  SQLServer tempdb空间
    * msdb  SQLServer msdb空间
    * usedSizeBytes  DDS磁盘使用量
    * totalSizeBytes  DDS磁盘总量
    * avgDailyGrowthBytes  DDS近一周日均增长
    * estimatedAvailableDays  DDS预计可用天数
    * dataSizeBytes  DDS数据空间
    * oplogSizeBytes  DDS oplog空间
    * otherSizeBytes  DDS其他空间
    * walSize  PostgreSQL wallog空间
    * dataSize  PostgreSQL数据空间
    * pgauditLogSize  PostgreSQL auditlog空间
    * pgsqlTmpSize  PostgreSQL临时空间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'updateTime' => 'int64',
        'buyStorageBytes' => 'int64',
        'usedStorageBytes' => 'int64',
        'lastStorageBytes' => 'int64',
        'buyStoragePercent' => 'double',
        'dataUsageBytes' => 'int64',
        'dataUsagePercent' => 'double',
        'binlogUsageBytes' => 'int64',
        'binlogUsagePercent' => 'double',
        'relayLogUsageBytes' => 'int64',
        'relayLogUsagePercent' => 'double',
        'auditLogUsageBytes' => 'int64',
        'auditLogUsagePercent' => 'double',
        'slowLogUsageBytes' => 'int64',
        'slowLogUsagePercent' => 'double',
        'tempUsageBytes' => 'int64',
        'tempUsagePercent' => 'double',
        'undoLogUsageBytes' => 'int64',
        'undoLogUsagePercent' => 'double',
        'otherUsageBytes' => 'int64',
        'otherUsagePercent' => 'double',
        'tooManyFiles' => null,
        'pageUsageBytes' => 'double',
        'totalSpace' => 'int64',
        'totalUsage' => 'int64',
        'availSize' => 'int64',
        'data' => 'double',
        'log' => 'double',
        'runtime' => 'double',
        'slowLog' => 'double',
        'auditLog' => 'double',
        'tempdb' => 'double',
        'msdb' => 'double',
        'usedSizeBytes' => 'int64',
        'totalSizeBytes' => 'int64',
        'avgDailyGrowthBytes' => 'double',
        'estimatedAvailableDays' => 'int64',
        'dataSizeBytes' => 'int64',
        'oplogSizeBytes' => 'int64',
        'otherSizeBytes' => 'int64',
        'walSize' => 'double',
        'dataSize' => 'double',
        'pgauditLogSize' => 'double',
        'pgsqlTmpSize' => 'double'
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
    * updateTime  更新时间
    * buyStorageBytes  MySQL购买空间
    * usedStorageBytes  MySQL已使用空间
    * lastStorageBytes  MySQL剩余空间
    * buyStoragePercent  MySQL使用空间占比
    * dataUsageBytes  数据空间
    * dataUsagePercent  数据空间占比
    * binlogUsageBytes  binlog空间
    * binlogUsagePercent  binlog空间占比
    * relayLogUsageBytes  relayLog空间
    * relayLogUsagePercent  relayLog空间占比
    * auditLogUsageBytes  auditLog空间
    * auditLogUsagePercent  auditLog空间占比
    * slowLogUsageBytes  slowLog空间
    * slowLogUsagePercent  slowLog空间占比
    * tempUsageBytes  临时空间
    * tempUsagePercent  临时空间占比
    * undoLogUsageBytes  undoLog空间
    * undoLogUsagePercent  undoLog空间占比
    * otherUsageBytes  其他空间
    * otherUsagePercent  其他空间占比
    * tooManyFiles  是否文件过多
    * pageUsageBytes  TaurusDB数据空间
    * totalSpace  SQLServer总空间
    * totalUsage  SQLServer已使用空间
    * availSize  SQLServer可用空间
    * data  SQLServer数据空间
    * log  SQLServer log空间
    * runtime  SQLServer runtime
    * slowLog  SQLServer slow_log空间
    * auditLog  SQLServer audit_log空间
    * tempdb  SQLServer tempdb空间
    * msdb  SQLServer msdb空间
    * usedSizeBytes  DDS磁盘使用量
    * totalSizeBytes  DDS磁盘总量
    * avgDailyGrowthBytes  DDS近一周日均增长
    * estimatedAvailableDays  DDS预计可用天数
    * dataSizeBytes  DDS数据空间
    * oplogSizeBytes  DDS oplog空间
    * otherSizeBytes  DDS其他空间
    * walSize  PostgreSQL wallog空间
    * dataSize  PostgreSQL数据空间
    * pgauditLogSize  PostgreSQL auditlog空间
    * pgsqlTmpSize  PostgreSQL临时空间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'updateTime' => 'update_time',
            'buyStorageBytes' => 'buy_storage_bytes',
            'usedStorageBytes' => 'used_storage_bytes',
            'lastStorageBytes' => 'last_storage_bytes',
            'buyStoragePercent' => 'buy_storage_percent',
            'dataUsageBytes' => 'data_usage_bytes',
            'dataUsagePercent' => 'data_usage_percent',
            'binlogUsageBytes' => 'binlog_usage_bytes',
            'binlogUsagePercent' => 'binlog_usage_percent',
            'relayLogUsageBytes' => 'relay_log_usage_bytes',
            'relayLogUsagePercent' => 'relay_log_usage_percent',
            'auditLogUsageBytes' => 'audit_log_usage_bytes',
            'auditLogUsagePercent' => 'audit_log_usage_percent',
            'slowLogUsageBytes' => 'slow_log_usage_bytes',
            'slowLogUsagePercent' => 'slow_log_usage_percent',
            'tempUsageBytes' => 'temp_usage_bytes',
            'tempUsagePercent' => 'temp_usage_percent',
            'undoLogUsageBytes' => 'undo_log_usage_bytes',
            'undoLogUsagePercent' => 'undo_log_usage_percent',
            'otherUsageBytes' => 'other_usage_bytes',
            'otherUsagePercent' => 'other_usage_percent',
            'tooManyFiles' => 'too_many_files',
            'pageUsageBytes' => 'page_usage_bytes',
            'totalSpace' => 'total_space',
            'totalUsage' => 'total_usage',
            'availSize' => 'avail_size',
            'data' => 'data',
            'log' => 'log',
            'runtime' => 'runtime',
            'slowLog' => 'slow_log',
            'auditLog' => 'audit_log',
            'tempdb' => 'tempdb',
            'msdb' => 'msdb',
            'usedSizeBytes' => 'used_size_bytes',
            'totalSizeBytes' => 'total_size_bytes',
            'avgDailyGrowthBytes' => 'avg_daily_growth_bytes',
            'estimatedAvailableDays' => 'estimated_available_days',
            'dataSizeBytes' => 'data_size_bytes',
            'oplogSizeBytes' => 'oplog_size_bytes',
            'otherSizeBytes' => 'other_size_bytes',
            'walSize' => 'wal_size',
            'dataSize' => 'data_size',
            'pgauditLogSize' => 'pgaudit_log_size',
            'pgsqlTmpSize' => 'pgsql_tmp_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * updateTime  更新时间
    * buyStorageBytes  MySQL购买空间
    * usedStorageBytes  MySQL已使用空间
    * lastStorageBytes  MySQL剩余空间
    * buyStoragePercent  MySQL使用空间占比
    * dataUsageBytes  数据空间
    * dataUsagePercent  数据空间占比
    * binlogUsageBytes  binlog空间
    * binlogUsagePercent  binlog空间占比
    * relayLogUsageBytes  relayLog空间
    * relayLogUsagePercent  relayLog空间占比
    * auditLogUsageBytes  auditLog空间
    * auditLogUsagePercent  auditLog空间占比
    * slowLogUsageBytes  slowLog空间
    * slowLogUsagePercent  slowLog空间占比
    * tempUsageBytes  临时空间
    * tempUsagePercent  临时空间占比
    * undoLogUsageBytes  undoLog空间
    * undoLogUsagePercent  undoLog空间占比
    * otherUsageBytes  其他空间
    * otherUsagePercent  其他空间占比
    * tooManyFiles  是否文件过多
    * pageUsageBytes  TaurusDB数据空间
    * totalSpace  SQLServer总空间
    * totalUsage  SQLServer已使用空间
    * availSize  SQLServer可用空间
    * data  SQLServer数据空间
    * log  SQLServer log空间
    * runtime  SQLServer runtime
    * slowLog  SQLServer slow_log空间
    * auditLog  SQLServer audit_log空间
    * tempdb  SQLServer tempdb空间
    * msdb  SQLServer msdb空间
    * usedSizeBytes  DDS磁盘使用量
    * totalSizeBytes  DDS磁盘总量
    * avgDailyGrowthBytes  DDS近一周日均增长
    * estimatedAvailableDays  DDS预计可用天数
    * dataSizeBytes  DDS数据空间
    * oplogSizeBytes  DDS oplog空间
    * otherSizeBytes  DDS其他空间
    * walSize  PostgreSQL wallog空间
    * dataSize  PostgreSQL数据空间
    * pgauditLogSize  PostgreSQL auditlog空间
    * pgsqlTmpSize  PostgreSQL临时空间
    *
    * @var string[]
    */
    protected static $setters = [
            'updateTime' => 'setUpdateTime',
            'buyStorageBytes' => 'setBuyStorageBytes',
            'usedStorageBytes' => 'setUsedStorageBytes',
            'lastStorageBytes' => 'setLastStorageBytes',
            'buyStoragePercent' => 'setBuyStoragePercent',
            'dataUsageBytes' => 'setDataUsageBytes',
            'dataUsagePercent' => 'setDataUsagePercent',
            'binlogUsageBytes' => 'setBinlogUsageBytes',
            'binlogUsagePercent' => 'setBinlogUsagePercent',
            'relayLogUsageBytes' => 'setRelayLogUsageBytes',
            'relayLogUsagePercent' => 'setRelayLogUsagePercent',
            'auditLogUsageBytes' => 'setAuditLogUsageBytes',
            'auditLogUsagePercent' => 'setAuditLogUsagePercent',
            'slowLogUsageBytes' => 'setSlowLogUsageBytes',
            'slowLogUsagePercent' => 'setSlowLogUsagePercent',
            'tempUsageBytes' => 'setTempUsageBytes',
            'tempUsagePercent' => 'setTempUsagePercent',
            'undoLogUsageBytes' => 'setUndoLogUsageBytes',
            'undoLogUsagePercent' => 'setUndoLogUsagePercent',
            'otherUsageBytes' => 'setOtherUsageBytes',
            'otherUsagePercent' => 'setOtherUsagePercent',
            'tooManyFiles' => 'setTooManyFiles',
            'pageUsageBytes' => 'setPageUsageBytes',
            'totalSpace' => 'setTotalSpace',
            'totalUsage' => 'setTotalUsage',
            'availSize' => 'setAvailSize',
            'data' => 'setData',
            'log' => 'setLog',
            'runtime' => 'setRuntime',
            'slowLog' => 'setSlowLog',
            'auditLog' => 'setAuditLog',
            'tempdb' => 'setTempdb',
            'msdb' => 'setMsdb',
            'usedSizeBytes' => 'setUsedSizeBytes',
            'totalSizeBytes' => 'setTotalSizeBytes',
            'avgDailyGrowthBytes' => 'setAvgDailyGrowthBytes',
            'estimatedAvailableDays' => 'setEstimatedAvailableDays',
            'dataSizeBytes' => 'setDataSizeBytes',
            'oplogSizeBytes' => 'setOplogSizeBytes',
            'otherSizeBytes' => 'setOtherSizeBytes',
            'walSize' => 'setWalSize',
            'dataSize' => 'setDataSize',
            'pgauditLogSize' => 'setPgauditLogSize',
            'pgsqlTmpSize' => 'setPgsqlTmpSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * updateTime  更新时间
    * buyStorageBytes  MySQL购买空间
    * usedStorageBytes  MySQL已使用空间
    * lastStorageBytes  MySQL剩余空间
    * buyStoragePercent  MySQL使用空间占比
    * dataUsageBytes  数据空间
    * dataUsagePercent  数据空间占比
    * binlogUsageBytes  binlog空间
    * binlogUsagePercent  binlog空间占比
    * relayLogUsageBytes  relayLog空间
    * relayLogUsagePercent  relayLog空间占比
    * auditLogUsageBytes  auditLog空间
    * auditLogUsagePercent  auditLog空间占比
    * slowLogUsageBytes  slowLog空间
    * slowLogUsagePercent  slowLog空间占比
    * tempUsageBytes  临时空间
    * tempUsagePercent  临时空间占比
    * undoLogUsageBytes  undoLog空间
    * undoLogUsagePercent  undoLog空间占比
    * otherUsageBytes  其他空间
    * otherUsagePercent  其他空间占比
    * tooManyFiles  是否文件过多
    * pageUsageBytes  TaurusDB数据空间
    * totalSpace  SQLServer总空间
    * totalUsage  SQLServer已使用空间
    * availSize  SQLServer可用空间
    * data  SQLServer数据空间
    * log  SQLServer log空间
    * runtime  SQLServer runtime
    * slowLog  SQLServer slow_log空间
    * auditLog  SQLServer audit_log空间
    * tempdb  SQLServer tempdb空间
    * msdb  SQLServer msdb空间
    * usedSizeBytes  DDS磁盘使用量
    * totalSizeBytes  DDS磁盘总量
    * avgDailyGrowthBytes  DDS近一周日均增长
    * estimatedAvailableDays  DDS预计可用天数
    * dataSizeBytes  DDS数据空间
    * oplogSizeBytes  DDS oplog空间
    * otherSizeBytes  DDS其他空间
    * walSize  PostgreSQL wallog空间
    * dataSize  PostgreSQL数据空间
    * pgauditLogSize  PostgreSQL auditlog空间
    * pgsqlTmpSize  PostgreSQL临时空间
    *
    * @var string[]
    */
    protected static $getters = [
            'updateTime' => 'getUpdateTime',
            'buyStorageBytes' => 'getBuyStorageBytes',
            'usedStorageBytes' => 'getUsedStorageBytes',
            'lastStorageBytes' => 'getLastStorageBytes',
            'buyStoragePercent' => 'getBuyStoragePercent',
            'dataUsageBytes' => 'getDataUsageBytes',
            'dataUsagePercent' => 'getDataUsagePercent',
            'binlogUsageBytes' => 'getBinlogUsageBytes',
            'binlogUsagePercent' => 'getBinlogUsagePercent',
            'relayLogUsageBytes' => 'getRelayLogUsageBytes',
            'relayLogUsagePercent' => 'getRelayLogUsagePercent',
            'auditLogUsageBytes' => 'getAuditLogUsageBytes',
            'auditLogUsagePercent' => 'getAuditLogUsagePercent',
            'slowLogUsageBytes' => 'getSlowLogUsageBytes',
            'slowLogUsagePercent' => 'getSlowLogUsagePercent',
            'tempUsageBytes' => 'getTempUsageBytes',
            'tempUsagePercent' => 'getTempUsagePercent',
            'undoLogUsageBytes' => 'getUndoLogUsageBytes',
            'undoLogUsagePercent' => 'getUndoLogUsagePercent',
            'otherUsageBytes' => 'getOtherUsageBytes',
            'otherUsagePercent' => 'getOtherUsagePercent',
            'tooManyFiles' => 'getTooManyFiles',
            'pageUsageBytes' => 'getPageUsageBytes',
            'totalSpace' => 'getTotalSpace',
            'totalUsage' => 'getTotalUsage',
            'availSize' => 'getAvailSize',
            'data' => 'getData',
            'log' => 'getLog',
            'runtime' => 'getRuntime',
            'slowLog' => 'getSlowLog',
            'auditLog' => 'getAuditLog',
            'tempdb' => 'getTempdb',
            'msdb' => 'getMsdb',
            'usedSizeBytes' => 'getUsedSizeBytes',
            'totalSizeBytes' => 'getTotalSizeBytes',
            'avgDailyGrowthBytes' => 'getAvgDailyGrowthBytes',
            'estimatedAvailableDays' => 'getEstimatedAvailableDays',
            'dataSizeBytes' => 'getDataSizeBytes',
            'oplogSizeBytes' => 'getOplogSizeBytes',
            'otherSizeBytes' => 'getOtherSizeBytes',
            'walSize' => 'getWalSize',
            'dataSize' => 'getDataSize',
            'pgauditLogSize' => 'getPgauditLogSize',
            'pgsqlTmpSize' => 'getPgsqlTmpSize'
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
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['buyStorageBytes'] = isset($data['buyStorageBytes']) ? $data['buyStorageBytes'] : null;
        $this->container['usedStorageBytes'] = isset($data['usedStorageBytes']) ? $data['usedStorageBytes'] : null;
        $this->container['lastStorageBytes'] = isset($data['lastStorageBytes']) ? $data['lastStorageBytes'] : null;
        $this->container['buyStoragePercent'] = isset($data['buyStoragePercent']) ? $data['buyStoragePercent'] : null;
        $this->container['dataUsageBytes'] = isset($data['dataUsageBytes']) ? $data['dataUsageBytes'] : null;
        $this->container['dataUsagePercent'] = isset($data['dataUsagePercent']) ? $data['dataUsagePercent'] : null;
        $this->container['binlogUsageBytes'] = isset($data['binlogUsageBytes']) ? $data['binlogUsageBytes'] : null;
        $this->container['binlogUsagePercent'] = isset($data['binlogUsagePercent']) ? $data['binlogUsagePercent'] : null;
        $this->container['relayLogUsageBytes'] = isset($data['relayLogUsageBytes']) ? $data['relayLogUsageBytes'] : null;
        $this->container['relayLogUsagePercent'] = isset($data['relayLogUsagePercent']) ? $data['relayLogUsagePercent'] : null;
        $this->container['auditLogUsageBytes'] = isset($data['auditLogUsageBytes']) ? $data['auditLogUsageBytes'] : null;
        $this->container['auditLogUsagePercent'] = isset($data['auditLogUsagePercent']) ? $data['auditLogUsagePercent'] : null;
        $this->container['slowLogUsageBytes'] = isset($data['slowLogUsageBytes']) ? $data['slowLogUsageBytes'] : null;
        $this->container['slowLogUsagePercent'] = isset($data['slowLogUsagePercent']) ? $data['slowLogUsagePercent'] : null;
        $this->container['tempUsageBytes'] = isset($data['tempUsageBytes']) ? $data['tempUsageBytes'] : null;
        $this->container['tempUsagePercent'] = isset($data['tempUsagePercent']) ? $data['tempUsagePercent'] : null;
        $this->container['undoLogUsageBytes'] = isset($data['undoLogUsageBytes']) ? $data['undoLogUsageBytes'] : null;
        $this->container['undoLogUsagePercent'] = isset($data['undoLogUsagePercent']) ? $data['undoLogUsagePercent'] : null;
        $this->container['otherUsageBytes'] = isset($data['otherUsageBytes']) ? $data['otherUsageBytes'] : null;
        $this->container['otherUsagePercent'] = isset($data['otherUsagePercent']) ? $data['otherUsagePercent'] : null;
        $this->container['tooManyFiles'] = isset($data['tooManyFiles']) ? $data['tooManyFiles'] : null;
        $this->container['pageUsageBytes'] = isset($data['pageUsageBytes']) ? $data['pageUsageBytes'] : null;
        $this->container['totalSpace'] = isset($data['totalSpace']) ? $data['totalSpace'] : null;
        $this->container['totalUsage'] = isset($data['totalUsage']) ? $data['totalUsage'] : null;
        $this->container['availSize'] = isset($data['availSize']) ? $data['availSize'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['log'] = isset($data['log']) ? $data['log'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['slowLog'] = isset($data['slowLog']) ? $data['slowLog'] : null;
        $this->container['auditLog'] = isset($data['auditLog']) ? $data['auditLog'] : null;
        $this->container['tempdb'] = isset($data['tempdb']) ? $data['tempdb'] : null;
        $this->container['msdb'] = isset($data['msdb']) ? $data['msdb'] : null;
        $this->container['usedSizeBytes'] = isset($data['usedSizeBytes']) ? $data['usedSizeBytes'] : null;
        $this->container['totalSizeBytes'] = isset($data['totalSizeBytes']) ? $data['totalSizeBytes'] : null;
        $this->container['avgDailyGrowthBytes'] = isset($data['avgDailyGrowthBytes']) ? $data['avgDailyGrowthBytes'] : null;
        $this->container['estimatedAvailableDays'] = isset($data['estimatedAvailableDays']) ? $data['estimatedAvailableDays'] : null;
        $this->container['dataSizeBytes'] = isset($data['dataSizeBytes']) ? $data['dataSizeBytes'] : null;
        $this->container['oplogSizeBytes'] = isset($data['oplogSizeBytes']) ? $data['oplogSizeBytes'] : null;
        $this->container['otherSizeBytes'] = isset($data['otherSizeBytes']) ? $data['otherSizeBytes'] : null;
        $this->container['walSize'] = isset($data['walSize']) ? $data['walSize'] : null;
        $this->container['dataSize'] = isset($data['dataSize']) ? $data['dataSize'] : null;
        $this->container['pgauditLogSize'] = isset($data['pgauditLogSize']) ? $data['pgauditLogSize'] : null;
        $this->container['pgsqlTmpSize'] = isset($data['pgsqlTmpSize']) ? $data['pgsqlTmpSize'] : null;
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
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets buyStorageBytes
    *  MySQL购买空间
    *
    * @return int|null
    */
    public function getBuyStorageBytes()
    {
        return $this->container['buyStorageBytes'];
    }

    /**
    * Sets buyStorageBytes
    *
    * @param int|null $buyStorageBytes MySQL购买空间
    *
    * @return $this
    */
    public function setBuyStorageBytes($buyStorageBytes)
    {
        $this->container['buyStorageBytes'] = $buyStorageBytes;
        return $this;
    }

    /**
    * Gets usedStorageBytes
    *  MySQL已使用空间
    *
    * @return int|null
    */
    public function getUsedStorageBytes()
    {
        return $this->container['usedStorageBytes'];
    }

    /**
    * Sets usedStorageBytes
    *
    * @param int|null $usedStorageBytes MySQL已使用空间
    *
    * @return $this
    */
    public function setUsedStorageBytes($usedStorageBytes)
    {
        $this->container['usedStorageBytes'] = $usedStorageBytes;
        return $this;
    }

    /**
    * Gets lastStorageBytes
    *  MySQL剩余空间
    *
    * @return int|null
    */
    public function getLastStorageBytes()
    {
        return $this->container['lastStorageBytes'];
    }

    /**
    * Sets lastStorageBytes
    *
    * @param int|null $lastStorageBytes MySQL剩余空间
    *
    * @return $this
    */
    public function setLastStorageBytes($lastStorageBytes)
    {
        $this->container['lastStorageBytes'] = $lastStorageBytes;
        return $this;
    }

    /**
    * Gets buyStoragePercent
    *  MySQL使用空间占比
    *
    * @return double|null
    */
    public function getBuyStoragePercent()
    {
        return $this->container['buyStoragePercent'];
    }

    /**
    * Sets buyStoragePercent
    *
    * @param double|null $buyStoragePercent MySQL使用空间占比
    *
    * @return $this
    */
    public function setBuyStoragePercent($buyStoragePercent)
    {
        $this->container['buyStoragePercent'] = $buyStoragePercent;
        return $this;
    }

    /**
    * Gets dataUsageBytes
    *  数据空间
    *
    * @return int|null
    */
    public function getDataUsageBytes()
    {
        return $this->container['dataUsageBytes'];
    }

    /**
    * Sets dataUsageBytes
    *
    * @param int|null $dataUsageBytes 数据空间
    *
    * @return $this
    */
    public function setDataUsageBytes($dataUsageBytes)
    {
        $this->container['dataUsageBytes'] = $dataUsageBytes;
        return $this;
    }

    /**
    * Gets dataUsagePercent
    *  数据空间占比
    *
    * @return double|null
    */
    public function getDataUsagePercent()
    {
        return $this->container['dataUsagePercent'];
    }

    /**
    * Sets dataUsagePercent
    *
    * @param double|null $dataUsagePercent 数据空间占比
    *
    * @return $this
    */
    public function setDataUsagePercent($dataUsagePercent)
    {
        $this->container['dataUsagePercent'] = $dataUsagePercent;
        return $this;
    }

    /**
    * Gets binlogUsageBytes
    *  binlog空间
    *
    * @return int|null
    */
    public function getBinlogUsageBytes()
    {
        return $this->container['binlogUsageBytes'];
    }

    /**
    * Sets binlogUsageBytes
    *
    * @param int|null $binlogUsageBytes binlog空间
    *
    * @return $this
    */
    public function setBinlogUsageBytes($binlogUsageBytes)
    {
        $this->container['binlogUsageBytes'] = $binlogUsageBytes;
        return $this;
    }

    /**
    * Gets binlogUsagePercent
    *  binlog空间占比
    *
    * @return double|null
    */
    public function getBinlogUsagePercent()
    {
        return $this->container['binlogUsagePercent'];
    }

    /**
    * Sets binlogUsagePercent
    *
    * @param double|null $binlogUsagePercent binlog空间占比
    *
    * @return $this
    */
    public function setBinlogUsagePercent($binlogUsagePercent)
    {
        $this->container['binlogUsagePercent'] = $binlogUsagePercent;
        return $this;
    }

    /**
    * Gets relayLogUsageBytes
    *  relayLog空间
    *
    * @return int|null
    */
    public function getRelayLogUsageBytes()
    {
        return $this->container['relayLogUsageBytes'];
    }

    /**
    * Sets relayLogUsageBytes
    *
    * @param int|null $relayLogUsageBytes relayLog空间
    *
    * @return $this
    */
    public function setRelayLogUsageBytes($relayLogUsageBytes)
    {
        $this->container['relayLogUsageBytes'] = $relayLogUsageBytes;
        return $this;
    }

    /**
    * Gets relayLogUsagePercent
    *  relayLog空间占比
    *
    * @return double|null
    */
    public function getRelayLogUsagePercent()
    {
        return $this->container['relayLogUsagePercent'];
    }

    /**
    * Sets relayLogUsagePercent
    *
    * @param double|null $relayLogUsagePercent relayLog空间占比
    *
    * @return $this
    */
    public function setRelayLogUsagePercent($relayLogUsagePercent)
    {
        $this->container['relayLogUsagePercent'] = $relayLogUsagePercent;
        return $this;
    }

    /**
    * Gets auditLogUsageBytes
    *  auditLog空间
    *
    * @return int|null
    */
    public function getAuditLogUsageBytes()
    {
        return $this->container['auditLogUsageBytes'];
    }

    /**
    * Sets auditLogUsageBytes
    *
    * @param int|null $auditLogUsageBytes auditLog空间
    *
    * @return $this
    */
    public function setAuditLogUsageBytes($auditLogUsageBytes)
    {
        $this->container['auditLogUsageBytes'] = $auditLogUsageBytes;
        return $this;
    }

    /**
    * Gets auditLogUsagePercent
    *  auditLog空间占比
    *
    * @return double|null
    */
    public function getAuditLogUsagePercent()
    {
        return $this->container['auditLogUsagePercent'];
    }

    /**
    * Sets auditLogUsagePercent
    *
    * @param double|null $auditLogUsagePercent auditLog空间占比
    *
    * @return $this
    */
    public function setAuditLogUsagePercent($auditLogUsagePercent)
    {
        $this->container['auditLogUsagePercent'] = $auditLogUsagePercent;
        return $this;
    }

    /**
    * Gets slowLogUsageBytes
    *  slowLog空间
    *
    * @return int|null
    */
    public function getSlowLogUsageBytes()
    {
        return $this->container['slowLogUsageBytes'];
    }

    /**
    * Sets slowLogUsageBytes
    *
    * @param int|null $slowLogUsageBytes slowLog空间
    *
    * @return $this
    */
    public function setSlowLogUsageBytes($slowLogUsageBytes)
    {
        $this->container['slowLogUsageBytes'] = $slowLogUsageBytes;
        return $this;
    }

    /**
    * Gets slowLogUsagePercent
    *  slowLog空间占比
    *
    * @return double|null
    */
    public function getSlowLogUsagePercent()
    {
        return $this->container['slowLogUsagePercent'];
    }

    /**
    * Sets slowLogUsagePercent
    *
    * @param double|null $slowLogUsagePercent slowLog空间占比
    *
    * @return $this
    */
    public function setSlowLogUsagePercent($slowLogUsagePercent)
    {
        $this->container['slowLogUsagePercent'] = $slowLogUsagePercent;
        return $this;
    }

    /**
    * Gets tempUsageBytes
    *  临时空间
    *
    * @return int|null
    */
    public function getTempUsageBytes()
    {
        return $this->container['tempUsageBytes'];
    }

    /**
    * Sets tempUsageBytes
    *
    * @param int|null $tempUsageBytes 临时空间
    *
    * @return $this
    */
    public function setTempUsageBytes($tempUsageBytes)
    {
        $this->container['tempUsageBytes'] = $tempUsageBytes;
        return $this;
    }

    /**
    * Gets tempUsagePercent
    *  临时空间占比
    *
    * @return double|null
    */
    public function getTempUsagePercent()
    {
        return $this->container['tempUsagePercent'];
    }

    /**
    * Sets tempUsagePercent
    *
    * @param double|null $tempUsagePercent 临时空间占比
    *
    * @return $this
    */
    public function setTempUsagePercent($tempUsagePercent)
    {
        $this->container['tempUsagePercent'] = $tempUsagePercent;
        return $this;
    }

    /**
    * Gets undoLogUsageBytes
    *  undoLog空间
    *
    * @return int|null
    */
    public function getUndoLogUsageBytes()
    {
        return $this->container['undoLogUsageBytes'];
    }

    /**
    * Sets undoLogUsageBytes
    *
    * @param int|null $undoLogUsageBytes undoLog空间
    *
    * @return $this
    */
    public function setUndoLogUsageBytes($undoLogUsageBytes)
    {
        $this->container['undoLogUsageBytes'] = $undoLogUsageBytes;
        return $this;
    }

    /**
    * Gets undoLogUsagePercent
    *  undoLog空间占比
    *
    * @return double|null
    */
    public function getUndoLogUsagePercent()
    {
        return $this->container['undoLogUsagePercent'];
    }

    /**
    * Sets undoLogUsagePercent
    *
    * @param double|null $undoLogUsagePercent undoLog空间占比
    *
    * @return $this
    */
    public function setUndoLogUsagePercent($undoLogUsagePercent)
    {
        $this->container['undoLogUsagePercent'] = $undoLogUsagePercent;
        return $this;
    }

    /**
    * Gets otherUsageBytes
    *  其他空间
    *
    * @return int|null
    */
    public function getOtherUsageBytes()
    {
        return $this->container['otherUsageBytes'];
    }

    /**
    * Sets otherUsageBytes
    *
    * @param int|null $otherUsageBytes 其他空间
    *
    * @return $this
    */
    public function setOtherUsageBytes($otherUsageBytes)
    {
        $this->container['otherUsageBytes'] = $otherUsageBytes;
        return $this;
    }

    /**
    * Gets otherUsagePercent
    *  其他空间占比
    *
    * @return double|null
    */
    public function getOtherUsagePercent()
    {
        return $this->container['otherUsagePercent'];
    }

    /**
    * Sets otherUsagePercent
    *
    * @param double|null $otherUsagePercent 其他空间占比
    *
    * @return $this
    */
    public function setOtherUsagePercent($otherUsagePercent)
    {
        $this->container['otherUsagePercent'] = $otherUsagePercent;
        return $this;
    }

    /**
    * Gets tooManyFiles
    *  是否文件过多
    *
    * @return bool|null
    */
    public function getTooManyFiles()
    {
        return $this->container['tooManyFiles'];
    }

    /**
    * Sets tooManyFiles
    *
    * @param bool|null $tooManyFiles 是否文件过多
    *
    * @return $this
    */
    public function setTooManyFiles($tooManyFiles)
    {
        $this->container['tooManyFiles'] = $tooManyFiles;
        return $this;
    }

    /**
    * Gets pageUsageBytes
    *  TaurusDB数据空间
    *
    * @return double|null
    */
    public function getPageUsageBytes()
    {
        return $this->container['pageUsageBytes'];
    }

    /**
    * Sets pageUsageBytes
    *
    * @param double|null $pageUsageBytes TaurusDB数据空间
    *
    * @return $this
    */
    public function setPageUsageBytes($pageUsageBytes)
    {
        $this->container['pageUsageBytes'] = $pageUsageBytes;
        return $this;
    }

    /**
    * Gets totalSpace
    *  SQLServer总空间
    *
    * @return int|null
    */
    public function getTotalSpace()
    {
        return $this->container['totalSpace'];
    }

    /**
    * Sets totalSpace
    *
    * @param int|null $totalSpace SQLServer总空间
    *
    * @return $this
    */
    public function setTotalSpace($totalSpace)
    {
        $this->container['totalSpace'] = $totalSpace;
        return $this;
    }

    /**
    * Gets totalUsage
    *  SQLServer已使用空间
    *
    * @return int|null
    */
    public function getTotalUsage()
    {
        return $this->container['totalUsage'];
    }

    /**
    * Sets totalUsage
    *
    * @param int|null $totalUsage SQLServer已使用空间
    *
    * @return $this
    */
    public function setTotalUsage($totalUsage)
    {
        $this->container['totalUsage'] = $totalUsage;
        return $this;
    }

    /**
    * Gets availSize
    *  SQLServer可用空间
    *
    * @return int|null
    */
    public function getAvailSize()
    {
        return $this->container['availSize'];
    }

    /**
    * Sets availSize
    *
    * @param int|null $availSize SQLServer可用空间
    *
    * @return $this
    */
    public function setAvailSize($availSize)
    {
        $this->container['availSize'] = $availSize;
        return $this;
    }

    /**
    * Gets data
    *  SQLServer数据空间
    *
    * @return double|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param double|null $data SQLServer数据空间
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets log
    *  SQLServer log空间
    *
    * @return double|null
    */
    public function getLog()
    {
        return $this->container['log'];
    }

    /**
    * Sets log
    *
    * @param double|null $log SQLServer log空间
    *
    * @return $this
    */
    public function setLog($log)
    {
        $this->container['log'] = $log;
        return $this;
    }

    /**
    * Gets runtime
    *  SQLServer runtime
    *
    * @return double|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param double|null $runtime SQLServer runtime
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
        return $this;
    }

    /**
    * Gets slowLog
    *  SQLServer slow_log空间
    *
    * @return double|null
    */
    public function getSlowLog()
    {
        return $this->container['slowLog'];
    }

    /**
    * Sets slowLog
    *
    * @param double|null $slowLog SQLServer slow_log空间
    *
    * @return $this
    */
    public function setSlowLog($slowLog)
    {
        $this->container['slowLog'] = $slowLog;
        return $this;
    }

    /**
    * Gets auditLog
    *  SQLServer audit_log空间
    *
    * @return double|null
    */
    public function getAuditLog()
    {
        return $this->container['auditLog'];
    }

    /**
    * Sets auditLog
    *
    * @param double|null $auditLog SQLServer audit_log空间
    *
    * @return $this
    */
    public function setAuditLog($auditLog)
    {
        $this->container['auditLog'] = $auditLog;
        return $this;
    }

    /**
    * Gets tempdb
    *  SQLServer tempdb空间
    *
    * @return double|null
    */
    public function getTempdb()
    {
        return $this->container['tempdb'];
    }

    /**
    * Sets tempdb
    *
    * @param double|null $tempdb SQLServer tempdb空间
    *
    * @return $this
    */
    public function setTempdb($tempdb)
    {
        $this->container['tempdb'] = $tempdb;
        return $this;
    }

    /**
    * Gets msdb
    *  SQLServer msdb空间
    *
    * @return double|null
    */
    public function getMsdb()
    {
        return $this->container['msdb'];
    }

    /**
    * Sets msdb
    *
    * @param double|null $msdb SQLServer msdb空间
    *
    * @return $this
    */
    public function setMsdb($msdb)
    {
        $this->container['msdb'] = $msdb;
        return $this;
    }

    /**
    * Gets usedSizeBytes
    *  DDS磁盘使用量
    *
    * @return int|null
    */
    public function getUsedSizeBytes()
    {
        return $this->container['usedSizeBytes'];
    }

    /**
    * Sets usedSizeBytes
    *
    * @param int|null $usedSizeBytes DDS磁盘使用量
    *
    * @return $this
    */
    public function setUsedSizeBytes($usedSizeBytes)
    {
        $this->container['usedSizeBytes'] = $usedSizeBytes;
        return $this;
    }

    /**
    * Gets totalSizeBytes
    *  DDS磁盘总量
    *
    * @return int|null
    */
    public function getTotalSizeBytes()
    {
        return $this->container['totalSizeBytes'];
    }

    /**
    * Sets totalSizeBytes
    *
    * @param int|null $totalSizeBytes DDS磁盘总量
    *
    * @return $this
    */
    public function setTotalSizeBytes($totalSizeBytes)
    {
        $this->container['totalSizeBytes'] = $totalSizeBytes;
        return $this;
    }

    /**
    * Gets avgDailyGrowthBytes
    *  DDS近一周日均增长
    *
    * @return double|null
    */
    public function getAvgDailyGrowthBytes()
    {
        return $this->container['avgDailyGrowthBytes'];
    }

    /**
    * Sets avgDailyGrowthBytes
    *
    * @param double|null $avgDailyGrowthBytes DDS近一周日均增长
    *
    * @return $this
    */
    public function setAvgDailyGrowthBytes($avgDailyGrowthBytes)
    {
        $this->container['avgDailyGrowthBytes'] = $avgDailyGrowthBytes;
        return $this;
    }

    /**
    * Gets estimatedAvailableDays
    *  DDS预计可用天数
    *
    * @return int|null
    */
    public function getEstimatedAvailableDays()
    {
        return $this->container['estimatedAvailableDays'];
    }

    /**
    * Sets estimatedAvailableDays
    *
    * @param int|null $estimatedAvailableDays DDS预计可用天数
    *
    * @return $this
    */
    public function setEstimatedAvailableDays($estimatedAvailableDays)
    {
        $this->container['estimatedAvailableDays'] = $estimatedAvailableDays;
        return $this;
    }

    /**
    * Gets dataSizeBytes
    *  DDS数据空间
    *
    * @return int|null
    */
    public function getDataSizeBytes()
    {
        return $this->container['dataSizeBytes'];
    }

    /**
    * Sets dataSizeBytes
    *
    * @param int|null $dataSizeBytes DDS数据空间
    *
    * @return $this
    */
    public function setDataSizeBytes($dataSizeBytes)
    {
        $this->container['dataSizeBytes'] = $dataSizeBytes;
        return $this;
    }

    /**
    * Gets oplogSizeBytes
    *  DDS oplog空间
    *
    * @return int|null
    */
    public function getOplogSizeBytes()
    {
        return $this->container['oplogSizeBytes'];
    }

    /**
    * Sets oplogSizeBytes
    *
    * @param int|null $oplogSizeBytes DDS oplog空间
    *
    * @return $this
    */
    public function setOplogSizeBytes($oplogSizeBytes)
    {
        $this->container['oplogSizeBytes'] = $oplogSizeBytes;
        return $this;
    }

    /**
    * Gets otherSizeBytes
    *  DDS其他空间
    *
    * @return int|null
    */
    public function getOtherSizeBytes()
    {
        return $this->container['otherSizeBytes'];
    }

    /**
    * Sets otherSizeBytes
    *
    * @param int|null $otherSizeBytes DDS其他空间
    *
    * @return $this
    */
    public function setOtherSizeBytes($otherSizeBytes)
    {
        $this->container['otherSizeBytes'] = $otherSizeBytes;
        return $this;
    }

    /**
    * Gets walSize
    *  PostgreSQL wallog空间
    *
    * @return double|null
    */
    public function getWalSize()
    {
        return $this->container['walSize'];
    }

    /**
    * Sets walSize
    *
    * @param double|null $walSize PostgreSQL wallog空间
    *
    * @return $this
    */
    public function setWalSize($walSize)
    {
        $this->container['walSize'] = $walSize;
        return $this;
    }

    /**
    * Gets dataSize
    *  PostgreSQL数据空间
    *
    * @return double|null
    */
    public function getDataSize()
    {
        return $this->container['dataSize'];
    }

    /**
    * Sets dataSize
    *
    * @param double|null $dataSize PostgreSQL数据空间
    *
    * @return $this
    */
    public function setDataSize($dataSize)
    {
        $this->container['dataSize'] = $dataSize;
        return $this;
    }

    /**
    * Gets pgauditLogSize
    *  PostgreSQL auditlog空间
    *
    * @return double|null
    */
    public function getPgauditLogSize()
    {
        return $this->container['pgauditLogSize'];
    }

    /**
    * Sets pgauditLogSize
    *
    * @param double|null $pgauditLogSize PostgreSQL auditlog空间
    *
    * @return $this
    */
    public function setPgauditLogSize($pgauditLogSize)
    {
        $this->container['pgauditLogSize'] = $pgauditLogSize;
        return $this;
    }

    /**
    * Gets pgsqlTmpSize
    *  PostgreSQL临时空间
    *
    * @return double|null
    */
    public function getPgsqlTmpSize()
    {
        return $this->container['pgsqlTmpSize'];
    }

    /**
    * Sets pgsqlTmpSize
    *
    * @param double|null $pgsqlTmpSize PostgreSQL临时空间
    *
    * @return $this
    */
    public function setPgsqlTmpSize($pgsqlTmpSize)
    {
        $this->container['pgsqlTmpSize'] = $pgsqlTmpSize;
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


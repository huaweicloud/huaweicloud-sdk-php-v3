<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataProfileRO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataProfileRO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dwId  连接id
    * dbType  数据源类型
    * databaseName  数据库名称
    * tableName  表名称
    * tableId  表ID
    * columnNames  待更新概要字段列表
    * fieldsName  字段名称列表
    * queue  执行更新语句队列
    * unique  是否采集唯一值
    * timeProfile  时间档案
    * sample  数据采样方式
    * jobId  作业id
    * cancel  是否取消
    * autoStop  是否自动停止
    * obsconfig  obsconfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dwId' => 'string',
            'dbType' => 'string',
            'databaseName' => 'string',
            'tableName' => 'string',
            'tableId' => 'string',
            'columnNames' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableColumnDTO[]',
            'fieldsName' => 'string[]',
            'queue' => 'string',
            'unique' => 'bool',
            'timeProfile' => 'bool',
            'sample' => 'string',
            'jobId' => 'string',
            'cancel' => 'bool',
            'autoStop' => 'bool',
            'obsconfig' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\OBSCommonConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dwId  连接id
    * dbType  数据源类型
    * databaseName  数据库名称
    * tableName  表名称
    * tableId  表ID
    * columnNames  待更新概要字段列表
    * fieldsName  字段名称列表
    * queue  执行更新语句队列
    * unique  是否采集唯一值
    * timeProfile  时间档案
    * sample  数据采样方式
    * jobId  作业id
    * cancel  是否取消
    * autoStop  是否自动停止
    * obsconfig  obsconfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dwId' => null,
        'dbType' => null,
        'databaseName' => null,
        'tableName' => null,
        'tableId' => null,
        'columnNames' => null,
        'fieldsName' => null,
        'queue' => null,
        'unique' => null,
        'timeProfile' => null,
        'sample' => null,
        'jobId' => null,
        'cancel' => null,
        'autoStop' => null,
        'obsconfig' => null
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
    * dwId  连接id
    * dbType  数据源类型
    * databaseName  数据库名称
    * tableName  表名称
    * tableId  表ID
    * columnNames  待更新概要字段列表
    * fieldsName  字段名称列表
    * queue  执行更新语句队列
    * unique  是否采集唯一值
    * timeProfile  时间档案
    * sample  数据采样方式
    * jobId  作业id
    * cancel  是否取消
    * autoStop  是否自动停止
    * obsconfig  obsconfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dwId' => 'dw_id',
            'dbType' => 'db_type',
            'databaseName' => 'database_name',
            'tableName' => 'table_name',
            'tableId' => 'table_id',
            'columnNames' => 'column_names',
            'fieldsName' => 'fields_name',
            'queue' => 'queue',
            'unique' => 'unique',
            'timeProfile' => 'time_profile',
            'sample' => 'sample',
            'jobId' => 'job_id',
            'cancel' => 'cancel',
            'autoStop' => 'auto_stop',
            'obsconfig' => 'obsconfig'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dwId  连接id
    * dbType  数据源类型
    * databaseName  数据库名称
    * tableName  表名称
    * tableId  表ID
    * columnNames  待更新概要字段列表
    * fieldsName  字段名称列表
    * queue  执行更新语句队列
    * unique  是否采集唯一值
    * timeProfile  时间档案
    * sample  数据采样方式
    * jobId  作业id
    * cancel  是否取消
    * autoStop  是否自动停止
    * obsconfig  obsconfig
    *
    * @var string[]
    */
    protected static $setters = [
            'dwId' => 'setDwId',
            'dbType' => 'setDbType',
            'databaseName' => 'setDatabaseName',
            'tableName' => 'setTableName',
            'tableId' => 'setTableId',
            'columnNames' => 'setColumnNames',
            'fieldsName' => 'setFieldsName',
            'queue' => 'setQueue',
            'unique' => 'setUnique',
            'timeProfile' => 'setTimeProfile',
            'sample' => 'setSample',
            'jobId' => 'setJobId',
            'cancel' => 'setCancel',
            'autoStop' => 'setAutoStop',
            'obsconfig' => 'setObsconfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dwId  连接id
    * dbType  数据源类型
    * databaseName  数据库名称
    * tableName  表名称
    * tableId  表ID
    * columnNames  待更新概要字段列表
    * fieldsName  字段名称列表
    * queue  执行更新语句队列
    * unique  是否采集唯一值
    * timeProfile  时间档案
    * sample  数据采样方式
    * jobId  作业id
    * cancel  是否取消
    * autoStop  是否自动停止
    * obsconfig  obsconfig
    *
    * @var string[]
    */
    protected static $getters = [
            'dwId' => 'getDwId',
            'dbType' => 'getDbType',
            'databaseName' => 'getDatabaseName',
            'tableName' => 'getTableName',
            'tableId' => 'getTableId',
            'columnNames' => 'getColumnNames',
            'fieldsName' => 'getFieldsName',
            'queue' => 'getQueue',
            'unique' => 'getUnique',
            'timeProfile' => 'getTimeProfile',
            'sample' => 'getSample',
            'jobId' => 'getJobId',
            'cancel' => 'getCancel',
            'autoStop' => 'getAutoStop',
            'obsconfig' => 'getObsconfig'
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
    const DB_TYPE_DWS = 'DWS';
    const DB_TYPE_DLI = 'DLI';
    const SAMPLE_N0UNDEFINED = '基于采样数据，采样数量为N条：非0整数，默认值undefined';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDbTypeAllowableValues()
    {
        return [
            self::DB_TYPE_DWS,
            self::DB_TYPE_DLI,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSampleAllowableValues()
    {
        return [
            self::SAMPLE_N0UNDEFINED,
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
        $this->container['dwId'] = isset($data['dwId']) ? $data['dwId'] : null;
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['columnNames'] = isset($data['columnNames']) ? $data['columnNames'] : null;
        $this->container['fieldsName'] = isset($data['fieldsName']) ? $data['fieldsName'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['unique'] = isset($data['unique']) ? $data['unique'] : null;
        $this->container['timeProfile'] = isset($data['timeProfile']) ? $data['timeProfile'] : null;
        $this->container['sample'] = isset($data['sample']) ? $data['sample'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['cancel'] = isset($data['cancel']) ? $data['cancel'] : null;
        $this->container['autoStop'] = isset($data['autoStop']) ? $data['autoStop'] : null;
        $this->container['obsconfig'] = isset($data['obsconfig']) ? $data['obsconfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDbTypeAllowableValues();
                if (!is_null($this->container['dbType']) && !in_array($this->container['dbType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dbType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSampleAllowableValues();
                if (!is_null($this->container['sample']) && !in_array($this->container['sample'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sample', must be one of '%s'",
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
    * Gets dwId
    *  连接id
    *
    * @return string|null
    */
    public function getDwId()
    {
        return $this->container['dwId'];
    }

    /**
    * Sets dwId
    *
    * @param string|null $dwId 连接id
    *
    * @return $this
    */
    public function setDwId($dwId)
    {
        $this->container['dwId'] = $dwId;
        return $this;
    }

    /**
    * Gets dbType
    *  数据源类型
    *
    * @return string|null
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string|null $dbType 数据源类型
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名称
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
    * @param string|null $databaseName 数据库名称
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
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
    * Gets tableId
    *  表ID
    *
    * @return string|null
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string|null $tableId 表ID
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
        return $this;
    }

    /**
    * Gets columnNames
    *  待更新概要字段列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableColumnDTO[]|null
    */
    public function getColumnNames()
    {
        return $this->container['columnNames'];
    }

    /**
    * Sets columnNames
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableColumnDTO[]|null $columnNames 待更新概要字段列表
    *
    * @return $this
    */
    public function setColumnNames($columnNames)
    {
        $this->container['columnNames'] = $columnNames;
        return $this;
    }

    /**
    * Gets fieldsName
    *  字段名称列表
    *
    * @return string[]|null
    */
    public function getFieldsName()
    {
        return $this->container['fieldsName'];
    }

    /**
    * Sets fieldsName
    *
    * @param string[]|null $fieldsName 字段名称列表
    *
    * @return $this
    */
    public function setFieldsName($fieldsName)
    {
        $this->container['fieldsName'] = $fieldsName;
        return $this;
    }

    /**
    * Gets queue
    *  执行更新语句队列
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
    * @param string|null $queue 执行更新语句队列
    *
    * @return $this
    */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;
        return $this;
    }

    /**
    * Gets unique
    *  是否采集唯一值
    *
    * @return bool|null
    */
    public function getUnique()
    {
        return $this->container['unique'];
    }

    /**
    * Sets unique
    *
    * @param bool|null $unique 是否采集唯一值
    *
    * @return $this
    */
    public function setUnique($unique)
    {
        $this->container['unique'] = $unique;
        return $this;
    }

    /**
    * Gets timeProfile
    *  时间档案
    *
    * @return bool|null
    */
    public function getTimeProfile()
    {
        return $this->container['timeProfile'];
    }

    /**
    * Sets timeProfile
    *
    * @param bool|null $timeProfile 时间档案
    *
    * @return $this
    */
    public function setTimeProfile($timeProfile)
    {
        $this->container['timeProfile'] = $timeProfile;
        return $this;
    }

    /**
    * Gets sample
    *  数据采样方式
    *
    * @return string|null
    */
    public function getSample()
    {
        return $this->container['sample'];
    }

    /**
    * Sets sample
    *
    * @param string|null $sample 数据采样方式
    *
    * @return $this
    */
    public function setSample($sample)
    {
        $this->container['sample'] = $sample;
        return $this;
    }

    /**
    * Gets jobId
    *  作业id
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 作业id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets cancel
    *  是否取消
    *
    * @return bool|null
    */
    public function getCancel()
    {
        return $this->container['cancel'];
    }

    /**
    * Sets cancel
    *
    * @param bool|null $cancel 是否取消
    *
    * @return $this
    */
    public function setCancel($cancel)
    {
        $this->container['cancel'] = $cancel;
        return $this;
    }

    /**
    * Gets autoStop
    *  是否自动停止
    *
    * @return bool|null
    */
    public function getAutoStop()
    {
        return $this->container['autoStop'];
    }

    /**
    * Sets autoStop
    *
    * @param bool|null $autoStop 是否自动停止
    *
    * @return $this
    */
    public function setAutoStop($autoStop)
    {
        $this->container['autoStop'] = $autoStop;
        return $this;
    }

    /**
    * Gets obsconfig
    *  obsconfig
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\OBSCommonConfig|null
    */
    public function getObsconfig()
    {
        return $this->container['obsconfig'];
    }

    /**
    * Sets obsconfig
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\OBSCommonConfig|null $obsconfig obsconfig
    *
    * @return $this
    */
    public function setObsconfig($obsconfig)
    {
        $this->container['obsconfig'] = $obsconfig;
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


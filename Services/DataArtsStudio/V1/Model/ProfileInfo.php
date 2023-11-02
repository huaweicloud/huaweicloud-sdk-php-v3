<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProfileInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProfileInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbType  数据库类型
    * cancel  是否取消
    * tableSize  表大小
    * databaseName  数据库名
    * obsCommonConfig  obs公共配置
    * totalRowCount  总行数
    * fieldsName  文件列表
    * tableName  表名
    * sample  样本
    * updateDate  修改时间
    * rowCount  采样行数
    * columnCount  列数
    * unique  是否唯一
    * autoStop  自动停止
    * timeProfile  时间档案
    * queue  duilie
    * dwId  连接id
    * colunmsMetric  列概要信息
    * columnsList  列信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbType' => 'string',
            'cancel' => 'bool',
            'tableSize' => 'float',
            'databaseName' => 'string',
            'obsCommonConfig' => 'string',
            'totalRowCount' => 'string',
            'fieldsName' => 'string[]',
            'tableName' => 'string',
            'sample' => 'string',
            'updateDate' => 'string',
            'rowCount' => 'float',
            'columnCount' => 'float',
            'unique' => 'bool',
            'autoStop' => 'bool',
            'timeProfile' => 'bool',
            'queue' => 'string',
            'dwId' => 'string',
            'colunmsMetric' => 'object',
            'columnsList' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbType  数据库类型
    * cancel  是否取消
    * tableSize  表大小
    * databaseName  数据库名
    * obsCommonConfig  obs公共配置
    * totalRowCount  总行数
    * fieldsName  文件列表
    * tableName  表名
    * sample  样本
    * updateDate  修改时间
    * rowCount  采样行数
    * columnCount  列数
    * unique  是否唯一
    * autoStop  自动停止
    * timeProfile  时间档案
    * queue  duilie
    * dwId  连接id
    * colunmsMetric  列概要信息
    * columnsList  列信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbType' => null,
        'cancel' => null,
        'tableSize' => null,
        'databaseName' => null,
        'obsCommonConfig' => null,
        'totalRowCount' => null,
        'fieldsName' => null,
        'tableName' => null,
        'sample' => null,
        'updateDate' => null,
        'rowCount' => null,
        'columnCount' => null,
        'unique' => null,
        'autoStop' => null,
        'timeProfile' => null,
        'queue' => null,
        'dwId' => null,
        'colunmsMetric' => null,
        'columnsList' => null
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
    * dbType  数据库类型
    * cancel  是否取消
    * tableSize  表大小
    * databaseName  数据库名
    * obsCommonConfig  obs公共配置
    * totalRowCount  总行数
    * fieldsName  文件列表
    * tableName  表名
    * sample  样本
    * updateDate  修改时间
    * rowCount  采样行数
    * columnCount  列数
    * unique  是否唯一
    * autoStop  自动停止
    * timeProfile  时间档案
    * queue  duilie
    * dwId  连接id
    * colunmsMetric  列概要信息
    * columnsList  列信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbType' => 'db_type',
            'cancel' => 'cancel',
            'tableSize' => 'table_size',
            'databaseName' => 'database_name',
            'obsCommonConfig' => 'obs_common_config',
            'totalRowCount' => 'total_row_count',
            'fieldsName' => 'fields_name',
            'tableName' => 'table_name',
            'sample' => 'sample',
            'updateDate' => 'update_date',
            'rowCount' => 'row_count',
            'columnCount' => 'column_count',
            'unique' => 'unique',
            'autoStop' => 'auto_stop',
            'timeProfile' => 'time_profile',
            'queue' => 'queue',
            'dwId' => 'dw_id',
            'colunmsMetric' => 'colunms_metric',
            'columnsList' => 'columns_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbType  数据库类型
    * cancel  是否取消
    * tableSize  表大小
    * databaseName  数据库名
    * obsCommonConfig  obs公共配置
    * totalRowCount  总行数
    * fieldsName  文件列表
    * tableName  表名
    * sample  样本
    * updateDate  修改时间
    * rowCount  采样行数
    * columnCount  列数
    * unique  是否唯一
    * autoStop  自动停止
    * timeProfile  时间档案
    * queue  duilie
    * dwId  连接id
    * colunmsMetric  列概要信息
    * columnsList  列信息
    *
    * @var string[]
    */
    protected static $setters = [
            'dbType' => 'setDbType',
            'cancel' => 'setCancel',
            'tableSize' => 'setTableSize',
            'databaseName' => 'setDatabaseName',
            'obsCommonConfig' => 'setObsCommonConfig',
            'totalRowCount' => 'setTotalRowCount',
            'fieldsName' => 'setFieldsName',
            'tableName' => 'setTableName',
            'sample' => 'setSample',
            'updateDate' => 'setUpdateDate',
            'rowCount' => 'setRowCount',
            'columnCount' => 'setColumnCount',
            'unique' => 'setUnique',
            'autoStop' => 'setAutoStop',
            'timeProfile' => 'setTimeProfile',
            'queue' => 'setQueue',
            'dwId' => 'setDwId',
            'colunmsMetric' => 'setColunmsMetric',
            'columnsList' => 'setColumnsList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbType  数据库类型
    * cancel  是否取消
    * tableSize  表大小
    * databaseName  数据库名
    * obsCommonConfig  obs公共配置
    * totalRowCount  总行数
    * fieldsName  文件列表
    * tableName  表名
    * sample  样本
    * updateDate  修改时间
    * rowCount  采样行数
    * columnCount  列数
    * unique  是否唯一
    * autoStop  自动停止
    * timeProfile  时间档案
    * queue  duilie
    * dwId  连接id
    * colunmsMetric  列概要信息
    * columnsList  列信息
    *
    * @var string[]
    */
    protected static $getters = [
            'dbType' => 'getDbType',
            'cancel' => 'getCancel',
            'tableSize' => 'getTableSize',
            'databaseName' => 'getDatabaseName',
            'obsCommonConfig' => 'getObsCommonConfig',
            'totalRowCount' => 'getTotalRowCount',
            'fieldsName' => 'getFieldsName',
            'tableName' => 'getTableName',
            'sample' => 'getSample',
            'updateDate' => 'getUpdateDate',
            'rowCount' => 'getRowCount',
            'columnCount' => 'getColumnCount',
            'unique' => 'getUnique',
            'autoStop' => 'getAutoStop',
            'timeProfile' => 'getTimeProfile',
            'queue' => 'getQueue',
            'dwId' => 'getDwId',
            'colunmsMetric' => 'getColunmsMetric',
            'columnsList' => 'getColumnsList'
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
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['cancel'] = isset($data['cancel']) ? $data['cancel'] : null;
        $this->container['tableSize'] = isset($data['tableSize']) ? $data['tableSize'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['obsCommonConfig'] = isset($data['obsCommonConfig']) ? $data['obsCommonConfig'] : null;
        $this->container['totalRowCount'] = isset($data['totalRowCount']) ? $data['totalRowCount'] : null;
        $this->container['fieldsName'] = isset($data['fieldsName']) ? $data['fieldsName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['sample'] = isset($data['sample']) ? $data['sample'] : null;
        $this->container['updateDate'] = isset($data['updateDate']) ? $data['updateDate'] : null;
        $this->container['rowCount'] = isset($data['rowCount']) ? $data['rowCount'] : null;
        $this->container['columnCount'] = isset($data['columnCount']) ? $data['columnCount'] : null;
        $this->container['unique'] = isset($data['unique']) ? $data['unique'] : null;
        $this->container['autoStop'] = isset($data['autoStop']) ? $data['autoStop'] : null;
        $this->container['timeProfile'] = isset($data['timeProfile']) ? $data['timeProfile'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['dwId'] = isset($data['dwId']) ? $data['dwId'] : null;
        $this->container['colunmsMetric'] = isset($data['colunmsMetric']) ? $data['colunmsMetric'] : null;
        $this->container['columnsList'] = isset($data['columnsList']) ? $data['columnsList'] : null;
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
    * Gets dbType
    *  数据库类型
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
    * @param string|null $dbType 数据库类型
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
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
    * Gets tableSize
    *  表大小
    *
    * @return float|null
    */
    public function getTableSize()
    {
        return $this->container['tableSize'];
    }

    /**
    * Sets tableSize
    *
    * @param float|null $tableSize 表大小
    *
    * @return $this
    */
    public function setTableSize($tableSize)
    {
        $this->container['tableSize'] = $tableSize;
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
    * Gets obsCommonConfig
    *  obs公共配置
    *
    * @return string|null
    */
    public function getObsCommonConfig()
    {
        return $this->container['obsCommonConfig'];
    }

    /**
    * Sets obsCommonConfig
    *
    * @param string|null $obsCommonConfig obs公共配置
    *
    * @return $this
    */
    public function setObsCommonConfig($obsCommonConfig)
    {
        $this->container['obsCommonConfig'] = $obsCommonConfig;
        return $this;
    }

    /**
    * Gets totalRowCount
    *  总行数
    *
    * @return string|null
    */
    public function getTotalRowCount()
    {
        return $this->container['totalRowCount'];
    }

    /**
    * Sets totalRowCount
    *
    * @param string|null $totalRowCount 总行数
    *
    * @return $this
    */
    public function setTotalRowCount($totalRowCount)
    {
        $this->container['totalRowCount'] = $totalRowCount;
        return $this;
    }

    /**
    * Gets fieldsName
    *  文件列表
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
    * @param string[]|null $fieldsName 文件列表
    *
    * @return $this
    */
    public function setFieldsName($fieldsName)
    {
        $this->container['fieldsName'] = $fieldsName;
        return $this;
    }

    /**
    * Gets tableName
    *  表名
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
    * @param string|null $tableName 表名
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets sample
    *  样本
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
    * @param string|null $sample 样本
    *
    * @return $this
    */
    public function setSample($sample)
    {
        $this->container['sample'] = $sample;
        return $this;
    }

    /**
    * Gets updateDate
    *  修改时间
    *
    * @return string|null
    */
    public function getUpdateDate()
    {
        return $this->container['updateDate'];
    }

    /**
    * Sets updateDate
    *
    * @param string|null $updateDate 修改时间
    *
    * @return $this
    */
    public function setUpdateDate($updateDate)
    {
        $this->container['updateDate'] = $updateDate;
        return $this;
    }

    /**
    * Gets rowCount
    *  采样行数
    *
    * @return float|null
    */
    public function getRowCount()
    {
        return $this->container['rowCount'];
    }

    /**
    * Sets rowCount
    *
    * @param float|null $rowCount 采样行数
    *
    * @return $this
    */
    public function setRowCount($rowCount)
    {
        $this->container['rowCount'] = $rowCount;
        return $this;
    }

    /**
    * Gets columnCount
    *  列数
    *
    * @return float|null
    */
    public function getColumnCount()
    {
        return $this->container['columnCount'];
    }

    /**
    * Sets columnCount
    *
    * @param float|null $columnCount 列数
    *
    * @return $this
    */
    public function setColumnCount($columnCount)
    {
        $this->container['columnCount'] = $columnCount;
        return $this;
    }

    /**
    * Gets unique
    *  是否唯一
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
    * @param bool|null $unique 是否唯一
    *
    * @return $this
    */
    public function setUnique($unique)
    {
        $this->container['unique'] = $unique;
        return $this;
    }

    /**
    * Gets autoStop
    *  自动停止
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
    * @param bool|null $autoStop 自动停止
    *
    * @return $this
    */
    public function setAutoStop($autoStop)
    {
        $this->container['autoStop'] = $autoStop;
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
    * Gets queue
    *  duilie
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
    * @param string|null $queue duilie
    *
    * @return $this
    */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;
        return $this;
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
    * Gets colunmsMetric
    *  列概要信息
    *
    * @return object|null
    */
    public function getColunmsMetric()
    {
        return $this->container['colunmsMetric'];
    }

    /**
    * Sets colunmsMetric
    *
    * @param object|null $colunmsMetric 列概要信息
    *
    * @return $this
    */
    public function setColunmsMetric($colunmsMetric)
    {
        $this->container['colunmsMetric'] = $colunmsMetric;
        return $this;
    }

    /**
    * Gets columnsList
    *  列信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnInfo[]|null
    */
    public function getColumnsList()
    {
        return $this->container['columnsList'];
    }

    /**
    * Sets columnsList
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnInfo[]|null $columnsList 列信息
    *
    * @return $this
    */
    public function setColumnsList($columnsList)
    {
        $this->container['columnsList'] = $columnsList;
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


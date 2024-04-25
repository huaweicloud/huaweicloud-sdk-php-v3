<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Table implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Table';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  表创建时间。是单位为“毫秒”的时间戳。
    * dataType  所列OBS表数据的类型，目前支持：parquet、ORC、CSV、JSON、Carbon、Avro格式。只有OBS表有该参数，其他表没有该参数。
    * dataLocation  数据存储位置，分为MANAGED，EXTERNAL和VIEW，其中EXTERNAL包括OBS表、CLoudTable表。
    * lastAccessTime  最近更新时间。是单位为“毫秒”的时间戳。
    * location  OBS表上的存储路径。
    * owner  表创建者。
    * tableName  表名称。
    * tableSize  DLI表的大小。非DLI表该参数值为0。
    * tableType  表类型： OBS表为EXTERNAL DLI表为MANAGED View为VIEW
    * partitionColumns  分区字段。只有OBS分区表有该参数，其他表没有该参数。
    * pageSize  分页大小，最小为1，最大为100。
    * currentPage  当前页码，最小为1。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'int',
            'dataType' => 'string',
            'dataLocation' => 'string',
            'lastAccessTime' => 'int',
            'location' => 'string',
            'owner' => 'string',
            'tableName' => 'string',
            'tableSize' => 'int',
            'tableType' => 'string',
            'partitionColumns' => 'string[]',
            'pageSize' => 'int',
            'currentPage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  表创建时间。是单位为“毫秒”的时间戳。
    * dataType  所列OBS表数据的类型，目前支持：parquet、ORC、CSV、JSON、Carbon、Avro格式。只有OBS表有该参数，其他表没有该参数。
    * dataLocation  数据存储位置，分为MANAGED，EXTERNAL和VIEW，其中EXTERNAL包括OBS表、CLoudTable表。
    * lastAccessTime  最近更新时间。是单位为“毫秒”的时间戳。
    * location  OBS表上的存储路径。
    * owner  表创建者。
    * tableName  表名称。
    * tableSize  DLI表的大小。非DLI表该参数值为0。
    * tableType  表类型： OBS表为EXTERNAL DLI表为MANAGED View为VIEW
    * partitionColumns  分区字段。只有OBS分区表有该参数，其他表没有该参数。
    * pageSize  分页大小，最小为1，最大为100。
    * currentPage  当前页码，最小为1。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => 'int64',
        'dataType' => null,
        'dataLocation' => null,
        'lastAccessTime' => 'int64',
        'location' => null,
        'owner' => null,
        'tableName' => null,
        'tableSize' => 'int64',
        'tableType' => null,
        'partitionColumns' => null,
        'pageSize' => 'int32',
        'currentPage' => 'int32'
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
    * createTime  表创建时间。是单位为“毫秒”的时间戳。
    * dataType  所列OBS表数据的类型，目前支持：parquet、ORC、CSV、JSON、Carbon、Avro格式。只有OBS表有该参数，其他表没有该参数。
    * dataLocation  数据存储位置，分为MANAGED，EXTERNAL和VIEW，其中EXTERNAL包括OBS表、CLoudTable表。
    * lastAccessTime  最近更新时间。是单位为“毫秒”的时间戳。
    * location  OBS表上的存储路径。
    * owner  表创建者。
    * tableName  表名称。
    * tableSize  DLI表的大小。非DLI表该参数值为0。
    * tableType  表类型： OBS表为EXTERNAL DLI表为MANAGED View为VIEW
    * partitionColumns  分区字段。只有OBS分区表有该参数，其他表没有该参数。
    * pageSize  分页大小，最小为1，最大为100。
    * currentPage  当前页码，最小为1。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'dataType' => 'data_type',
            'dataLocation' => 'data_location',
            'lastAccessTime' => 'last_access_time',
            'location' => 'location',
            'owner' => 'owner',
            'tableName' => 'table_name',
            'tableSize' => 'table_size',
            'tableType' => 'table_type',
            'partitionColumns' => 'partition_columns',
            'pageSize' => 'page-size',
            'currentPage' => 'current-page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  表创建时间。是单位为“毫秒”的时间戳。
    * dataType  所列OBS表数据的类型，目前支持：parquet、ORC、CSV、JSON、Carbon、Avro格式。只有OBS表有该参数，其他表没有该参数。
    * dataLocation  数据存储位置，分为MANAGED，EXTERNAL和VIEW，其中EXTERNAL包括OBS表、CLoudTable表。
    * lastAccessTime  最近更新时间。是单位为“毫秒”的时间戳。
    * location  OBS表上的存储路径。
    * owner  表创建者。
    * tableName  表名称。
    * tableSize  DLI表的大小。非DLI表该参数值为0。
    * tableType  表类型： OBS表为EXTERNAL DLI表为MANAGED View为VIEW
    * partitionColumns  分区字段。只有OBS分区表有该参数，其他表没有该参数。
    * pageSize  分页大小，最小为1，最大为100。
    * currentPage  当前页码，最小为1。
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'dataType' => 'setDataType',
            'dataLocation' => 'setDataLocation',
            'lastAccessTime' => 'setLastAccessTime',
            'location' => 'setLocation',
            'owner' => 'setOwner',
            'tableName' => 'setTableName',
            'tableSize' => 'setTableSize',
            'tableType' => 'setTableType',
            'partitionColumns' => 'setPartitionColumns',
            'pageSize' => 'setPageSize',
            'currentPage' => 'setCurrentPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  表创建时间。是单位为“毫秒”的时间戳。
    * dataType  所列OBS表数据的类型，目前支持：parquet、ORC、CSV、JSON、Carbon、Avro格式。只有OBS表有该参数，其他表没有该参数。
    * dataLocation  数据存储位置，分为MANAGED，EXTERNAL和VIEW，其中EXTERNAL包括OBS表、CLoudTable表。
    * lastAccessTime  最近更新时间。是单位为“毫秒”的时间戳。
    * location  OBS表上的存储路径。
    * owner  表创建者。
    * tableName  表名称。
    * tableSize  DLI表的大小。非DLI表该参数值为0。
    * tableType  表类型： OBS表为EXTERNAL DLI表为MANAGED View为VIEW
    * partitionColumns  分区字段。只有OBS分区表有该参数，其他表没有该参数。
    * pageSize  分页大小，最小为1，最大为100。
    * currentPage  当前页码，最小为1。
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'dataType' => 'getDataType',
            'dataLocation' => 'getDataLocation',
            'lastAccessTime' => 'getLastAccessTime',
            'location' => 'getLocation',
            'owner' => 'getOwner',
            'tableName' => 'getTableName',
            'tableSize' => 'getTableSize',
            'tableType' => 'getTableType',
            'partitionColumns' => 'getPartitionColumns',
            'pageSize' => 'getPageSize',
            'currentPage' => 'getCurrentPage'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['dataLocation'] = isset($data['dataLocation']) ? $data['dataLocation'] : null;
        $this->container['lastAccessTime'] = isset($data['lastAccessTime']) ? $data['lastAccessTime'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['tableSize'] = isset($data['tableSize']) ? $data['tableSize'] : null;
        $this->container['tableType'] = isset($data['tableType']) ? $data['tableType'] : null;
        $this->container['partitionColumns'] = isset($data['partitionColumns']) ? $data['partitionColumns'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['currentPage'] = isset($data['currentPage']) ? $data['currentPage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['dataLocation'] === null) {
            $invalidProperties[] = "'dataLocation' can't be null";
        }
        if ($this->container['lastAccessTime'] === null) {
            $invalidProperties[] = "'lastAccessTime' can't be null";
        }
        if ($this->container['owner'] === null) {
            $invalidProperties[] = "'owner' can't be null";
        }
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
        }
        if ($this->container['tableSize'] === null) {
            $invalidProperties[] = "'tableSize' can't be null";
        }
        if ($this->container['tableType'] === null) {
            $invalidProperties[] = "'tableType' can't be null";
        }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 100)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['currentPage']) && ($this->container['currentPage'] < 1)) {
                $invalidProperties[] = "invalid value for 'currentPage', must be bigger than or equal to 1.";
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
    * Gets createTime
    *  表创建时间。是单位为“毫秒”的时间戳。
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 表创建时间。是单位为“毫秒”的时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets dataType
    *  所列OBS表数据的类型，目前支持：parquet、ORC、CSV、JSON、Carbon、Avro格式。只有OBS表有该参数，其他表没有该参数。
    *
    * @return string|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string|null $dataType 所列OBS表数据的类型，目前支持：parquet、ORC、CSV、JSON、Carbon、Avro格式。只有OBS表有该参数，其他表没有该参数。
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets dataLocation
    *  数据存储位置，分为MANAGED，EXTERNAL和VIEW，其中EXTERNAL包括OBS表、CLoudTable表。
    *
    * @return string
    */
    public function getDataLocation()
    {
        return $this->container['dataLocation'];
    }

    /**
    * Sets dataLocation
    *
    * @param string $dataLocation 数据存储位置，分为MANAGED，EXTERNAL和VIEW，其中EXTERNAL包括OBS表、CLoudTable表。
    *
    * @return $this
    */
    public function setDataLocation($dataLocation)
    {
        $this->container['dataLocation'] = $dataLocation;
        return $this;
    }

    /**
    * Gets lastAccessTime
    *  最近更新时间。是单位为“毫秒”的时间戳。
    *
    * @return int
    */
    public function getLastAccessTime()
    {
        return $this->container['lastAccessTime'];
    }

    /**
    * Sets lastAccessTime
    *
    * @param int $lastAccessTime 最近更新时间。是单位为“毫秒”的时间戳。
    *
    * @return $this
    */
    public function setLastAccessTime($lastAccessTime)
    {
        $this->container['lastAccessTime'] = $lastAccessTime;
        return $this;
    }

    /**
    * Gets location
    *  OBS表上的存储路径。
    *
    * @return string|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string|null $location OBS表上的存储路径。
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets owner
    *  表创建者。
    *
    * @return string
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string $owner 表创建者。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets tableName
    *  表名称。
    *
    * @return string
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string $tableName 表名称。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets tableSize
    *  DLI表的大小。非DLI表该参数值为0。
    *
    * @return int
    */
    public function getTableSize()
    {
        return $this->container['tableSize'];
    }

    /**
    * Sets tableSize
    *
    * @param int $tableSize DLI表的大小。非DLI表该参数值为0。
    *
    * @return $this
    */
    public function setTableSize($tableSize)
    {
        $this->container['tableSize'] = $tableSize;
        return $this;
    }

    /**
    * Gets tableType
    *  表类型： OBS表为EXTERNAL DLI表为MANAGED View为VIEW
    *
    * @return string
    */
    public function getTableType()
    {
        return $this->container['tableType'];
    }

    /**
    * Sets tableType
    *
    * @param string $tableType 表类型： OBS表为EXTERNAL DLI表为MANAGED View为VIEW
    *
    * @return $this
    */
    public function setTableType($tableType)
    {
        $this->container['tableType'] = $tableType;
        return $this;
    }

    /**
    * Gets partitionColumns
    *  分区字段。只有OBS分区表有该参数，其他表没有该参数。
    *
    * @return string[]|null
    */
    public function getPartitionColumns()
    {
        return $this->container['partitionColumns'];
    }

    /**
    * Sets partitionColumns
    *
    * @param string[]|null $partitionColumns 分区字段。只有OBS分区表有该参数，其他表没有该参数。
    *
    * @return $this
    */
    public function setPartitionColumns($partitionColumns)
    {
        $this->container['partitionColumns'] = $partitionColumns;
        return $this;
    }

    /**
    * Gets pageSize
    *  分页大小，最小为1，最大为100。
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 分页大小，最小为1，最大为100。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets currentPage
    *  当前页码，最小为1。
    *
    * @return int|null
    */
    public function getCurrentPage()
    {
        return $this->container['currentPage'];
    }

    /**
    * Sets currentPage
    *
    * @param int|null $currentPage 当前页码，最小为1。
    *
    * @return $this
    */
    public function setCurrentPage($currentPage)
    {
        $this->container['currentPage'] = $currentPage;
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


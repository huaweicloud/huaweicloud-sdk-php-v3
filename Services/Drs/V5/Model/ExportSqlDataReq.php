<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportSqlDataReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportSqlDataReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileType  导出的sql文件类型。取值范围： - abnormal_sql ：异常sql列表 - abnormal_sql_detail ：异常sql详情 - slow_sql ：慢sql列表 - slow_sql_detail ： 慢sql详情
    * fieldNames  导出的字段名。file_type为时为error_sql_detail、slow_sql_detail必填。取值范围： -id ：自增ID -gmtCreate ：创建时间 -gmtModified ：修改时间 -shardId ：分片ID -startTimestamp ：源库SQL开始执行时间戳 -executeTimePartition ：回放时间分区 -schemaName ：库名 -queryType ：SQL类型 -sqlStatement ：SQL内容 -sqlTemplate ：SQL模板 -errorInfo ：异常信息 -targetType ：目标库类型
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileType' => 'string',
            'fieldNames' => 'string[]',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileType  导出的sql文件类型。取值范围： - abnormal_sql ：异常sql列表 - abnormal_sql_detail ：异常sql详情 - slow_sql ：慢sql列表 - slow_sql_detail ： 慢sql详情
    * fieldNames  导出的字段名。file_type为时为error_sql_detail、slow_sql_detail必填。取值范围： -id ：自增ID -gmtCreate ：创建时间 -gmtModified ：修改时间 -shardId ：分片ID -startTimestamp ：源库SQL开始执行时间戳 -executeTimePartition ：回放时间分区 -schemaName ：库名 -queryType ：SQL类型 -sqlStatement ：SQL内容 -sqlTemplate ：SQL模板 -errorInfo ：异常信息 -targetType ：目标库类型
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileType' => null,
        'fieldNames' => null,
        'startTime' => null,
        'endTime' => null
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
    * fileType  导出的sql文件类型。取值范围： - abnormal_sql ：异常sql列表 - abnormal_sql_detail ：异常sql详情 - slow_sql ：慢sql列表 - slow_sql_detail ： 慢sql详情
    * fieldNames  导出的字段名。file_type为时为error_sql_detail、slow_sql_detail必填。取值范围： -id ：自增ID -gmtCreate ：创建时间 -gmtModified ：修改时间 -shardId ：分片ID -startTimestamp ：源库SQL开始执行时间戳 -executeTimePartition ：回放时间分区 -schemaName ：库名 -queryType ：SQL类型 -sqlStatement ：SQL内容 -sqlTemplate ：SQL模板 -errorInfo ：异常信息 -targetType ：目标库类型
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileType' => 'file_type',
            'fieldNames' => 'field_names',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileType  导出的sql文件类型。取值范围： - abnormal_sql ：异常sql列表 - abnormal_sql_detail ：异常sql详情 - slow_sql ：慢sql列表 - slow_sql_detail ： 慢sql详情
    * fieldNames  导出的字段名。file_type为时为error_sql_detail、slow_sql_detail必填。取值范围： -id ：自增ID -gmtCreate ：创建时间 -gmtModified ：修改时间 -shardId ：分片ID -startTimestamp ：源库SQL开始执行时间戳 -executeTimePartition ：回放时间分区 -schemaName ：库名 -queryType ：SQL类型 -sqlStatement ：SQL内容 -sqlTemplate ：SQL模板 -errorInfo ：异常信息 -targetType ：目标库类型
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'fileType' => 'setFileType',
            'fieldNames' => 'setFieldNames',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileType  导出的sql文件类型。取值范围： - abnormal_sql ：异常sql列表 - abnormal_sql_detail ：异常sql详情 - slow_sql ：慢sql列表 - slow_sql_detail ： 慢sql详情
    * fieldNames  导出的字段名。file_type为时为error_sql_detail、slow_sql_detail必填。取值范围： -id ：自增ID -gmtCreate ：创建时间 -gmtModified ：修改时间 -shardId ：分片ID -startTimestamp ：源库SQL开始执行时间戳 -executeTimePartition ：回放时间分区 -schemaName ：库名 -queryType ：SQL类型 -sqlStatement ：SQL内容 -sqlTemplate ：SQL模板 -errorInfo ：异常信息 -targetType ：目标库类型
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'fileType' => 'getFileType',
            'fieldNames' => 'getFieldNames',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['fieldNames'] = isset($data['fieldNames']) ? $data['fieldNames'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fileType'] === null) {
            $invalidProperties[] = "'fileType' can't be null";
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
    * Gets fileType
    *  导出的sql文件类型。取值范围： - abnormal_sql ：异常sql列表 - abnormal_sql_detail ：异常sql详情 - slow_sql ：慢sql列表 - slow_sql_detail ： 慢sql详情
    *
    * @return string
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string $fileType 导出的sql文件类型。取值范围： - abnormal_sql ：异常sql列表 - abnormal_sql_detail ：异常sql详情 - slow_sql ：慢sql列表 - slow_sql_detail ： 慢sql详情
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets fieldNames
    *  导出的字段名。file_type为时为error_sql_detail、slow_sql_detail必填。取值范围： -id ：自增ID -gmtCreate ：创建时间 -gmtModified ：修改时间 -shardId ：分片ID -startTimestamp ：源库SQL开始执行时间戳 -executeTimePartition ：回放时间分区 -schemaName ：库名 -queryType ：SQL类型 -sqlStatement ：SQL内容 -sqlTemplate ：SQL模板 -errorInfo ：异常信息 -targetType ：目标库类型
    *
    * @return string[]|null
    */
    public function getFieldNames()
    {
        return $this->container['fieldNames'];
    }

    /**
    * Sets fieldNames
    *
    * @param string[]|null $fieldNames 导出的字段名。file_type为时为error_sql_detail、slow_sql_detail必填。取值范围： -id ：自增ID -gmtCreate ：创建时间 -gmtModified ：修改时间 -shardId ：分片ID -startTimestamp ：源库SQL开始执行时间戳 -executeTimePartition ：回放时间分区 -schemaName ：库名 -queryType ：SQL类型 -sqlStatement ：SQL内容 -sqlTemplate ：SQL模板 -errorInfo ：异常信息 -targetType ：目标库类型
    *
    * @return $this
    */
    public function setFieldNames($fieldNames)
    {
        $this->container['fieldNames'] = $fieldNames;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
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
    * @param string|null $startTime 开始时间
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
    *  结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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


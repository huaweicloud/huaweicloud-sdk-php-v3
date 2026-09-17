<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportFilterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportFilterInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbNames  数据库名称列表
    * tbNames  表名称列表
    * fileNames  文件名称列表
    * startTime  开始时间
    * endTime  结束时间
    * typeList  SQL类型列表（insert、update、delete、ddl）
    * columnList  列列表
    * parseDoubleInsert  是否将UPDATE语句导出为两条INSERT语句
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbNames' => 'string[]',
            'tbNames' => 'string[]',
            'fileNames' => 'string[]',
            'startTime' => 'int',
            'endTime' => 'int',
            'typeList' => 'string[]',
            'columnList' => '\HuaweiCloud\SDK\Das\V3\Model\ExportColumnInfo[]',
            'parseDoubleInsert' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbNames  数据库名称列表
    * tbNames  表名称列表
    * fileNames  文件名称列表
    * startTime  开始时间
    * endTime  结束时间
    * typeList  SQL类型列表（insert、update、delete、ddl）
    * columnList  列列表
    * parseDoubleInsert  是否将UPDATE语句导出为两条INSERT语句
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbNames' => null,
        'tbNames' => null,
        'fileNames' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'typeList' => null,
        'columnList' => null,
        'parseDoubleInsert' => null
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
    * dbNames  数据库名称列表
    * tbNames  表名称列表
    * fileNames  文件名称列表
    * startTime  开始时间
    * endTime  结束时间
    * typeList  SQL类型列表（insert、update、delete、ddl）
    * columnList  列列表
    * parseDoubleInsert  是否将UPDATE语句导出为两条INSERT语句
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbNames' => 'db_names',
            'tbNames' => 'tb_names',
            'fileNames' => 'file_names',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'typeList' => 'type_list',
            'columnList' => 'column_list',
            'parseDoubleInsert' => 'parse_double_insert'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbNames  数据库名称列表
    * tbNames  表名称列表
    * fileNames  文件名称列表
    * startTime  开始时间
    * endTime  结束时间
    * typeList  SQL类型列表（insert、update、delete、ddl）
    * columnList  列列表
    * parseDoubleInsert  是否将UPDATE语句导出为两条INSERT语句
    *
    * @var string[]
    */
    protected static $setters = [
            'dbNames' => 'setDbNames',
            'tbNames' => 'setTbNames',
            'fileNames' => 'setFileNames',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'typeList' => 'setTypeList',
            'columnList' => 'setColumnList',
            'parseDoubleInsert' => 'setParseDoubleInsert'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbNames  数据库名称列表
    * tbNames  表名称列表
    * fileNames  文件名称列表
    * startTime  开始时间
    * endTime  结束时间
    * typeList  SQL类型列表（insert、update、delete、ddl）
    * columnList  列列表
    * parseDoubleInsert  是否将UPDATE语句导出为两条INSERT语句
    *
    * @var string[]
    */
    protected static $getters = [
            'dbNames' => 'getDbNames',
            'tbNames' => 'getTbNames',
            'fileNames' => 'getFileNames',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'typeList' => 'getTypeList',
            'columnList' => 'getColumnList',
            'parseDoubleInsert' => 'getParseDoubleInsert'
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
        $this->container['dbNames'] = isset($data['dbNames']) ? $data['dbNames'] : null;
        $this->container['tbNames'] = isset($data['tbNames']) ? $data['tbNames'] : null;
        $this->container['fileNames'] = isset($data['fileNames']) ? $data['fileNames'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['typeList'] = isset($data['typeList']) ? $data['typeList'] : null;
        $this->container['columnList'] = isset($data['columnList']) ? $data['columnList'] : null;
        $this->container['parseDoubleInsert'] = isset($data['parseDoubleInsert']) ? $data['parseDoubleInsert'] : null;
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
    * Gets dbNames
    *  数据库名称列表
    *
    * @return string[]|null
    */
    public function getDbNames()
    {
        return $this->container['dbNames'];
    }

    /**
    * Sets dbNames
    *
    * @param string[]|null $dbNames 数据库名称列表
    *
    * @return $this
    */
    public function setDbNames($dbNames)
    {
        $this->container['dbNames'] = $dbNames;
        return $this;
    }

    /**
    * Gets tbNames
    *  表名称列表
    *
    * @return string[]|null
    */
    public function getTbNames()
    {
        return $this->container['tbNames'];
    }

    /**
    * Sets tbNames
    *
    * @param string[]|null $tbNames 表名称列表
    *
    * @return $this
    */
    public function setTbNames($tbNames)
    {
        $this->container['tbNames'] = $tbNames;
        return $this;
    }

    /**
    * Gets fileNames
    *  文件名称列表
    *
    * @return string[]|null
    */
    public function getFileNames()
    {
        return $this->container['fileNames'];
    }

    /**
    * Sets fileNames
    *
    * @param string[]|null $fileNames 文件名称列表
    *
    * @return $this
    */
    public function setFileNames($fileNames)
    {
        $this->container['fileNames'] = $fileNames;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 开始时间
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
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets typeList
    *  SQL类型列表（insert、update、delete、ddl）
    *
    * @return string[]|null
    */
    public function getTypeList()
    {
        return $this->container['typeList'];
    }

    /**
    * Sets typeList
    *
    * @param string[]|null $typeList SQL类型列表（insert、update、delete、ddl）
    *
    * @return $this
    */
    public function setTypeList($typeList)
    {
        $this->container['typeList'] = $typeList;
        return $this;
    }

    /**
    * Gets columnList
    *  列列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ExportColumnInfo[]|null
    */
    public function getColumnList()
    {
        return $this->container['columnList'];
    }

    /**
    * Sets columnList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ExportColumnInfo[]|null $columnList 列列表
    *
    * @return $this
    */
    public function setColumnList($columnList)
    {
        $this->container['columnList'] = $columnList;
        return $this;
    }

    /**
    * Gets parseDoubleInsert
    *  是否将UPDATE语句导出为两条INSERT语句
    *
    * @return bool|null
    */
    public function getParseDoubleInsert()
    {
        return $this->container['parseDoubleInsert'];
    }

    /**
    * Sets parseDoubleInsert
    *
    * @param bool|null $parseDoubleInsert 是否将UPDATE语句导出为两条INSERT语句
    *
    * @return $this
    */
    public function setParseDoubleInsert($parseDoubleInsert)
    {
        $this->container['parseDoubleInsert'] = $parseDoubleInsert;
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


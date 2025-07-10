<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EtlRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EtlRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  分页偏移量
    * limit  分页大小，最大值1000
    * tableName  需要同步的表名称
    * isBak  是否是bak表数据
    * startTime  查询时间段起始时间
    * endTime  查询时间段截止时间
    * filterTimeField  用于时间段过滤的字段
    * sortField  用于时间排序的字段，不传默认按照更新时间排序
    * schemaNo  分库编号（数字类型）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'tableName' => 'string',
            'isBak' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'filterTimeField' => 'string',
            'sortField' => 'string',
            'schemaNo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  分页偏移量
    * limit  分页大小，最大值1000
    * tableName  需要同步的表名称
    * isBak  是否是bak表数据
    * startTime  查询时间段起始时间
    * endTime  查询时间段截止时间
    * filterTimeField  用于时间段过滤的字段
    * sortField  用于时间排序的字段，不传默认按照更新时间排序
    * schemaNo  分库编号（数字类型）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'tableName' => null,
        'isBak' => null,
        'startTime' => null,
        'endTime' => null,
        'filterTimeField' => null,
        'sortField' => null,
        'schemaNo' => null
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
    * offset  分页偏移量
    * limit  分页大小，最大值1000
    * tableName  需要同步的表名称
    * isBak  是否是bak表数据
    * startTime  查询时间段起始时间
    * endTime  查询时间段截止时间
    * filterTimeField  用于时间段过滤的字段
    * sortField  用于时间排序的字段，不传默认按照更新时间排序
    * schemaNo  分库编号（数字类型）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'tableName' => 'table_name',
            'isBak' => 'is_bak',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'filterTimeField' => 'filter_time_field',
            'sortField' => 'sort_field',
            'schemaNo' => 'schema_no'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  分页偏移量
    * limit  分页大小，最大值1000
    * tableName  需要同步的表名称
    * isBak  是否是bak表数据
    * startTime  查询时间段起始时间
    * endTime  查询时间段截止时间
    * filterTimeField  用于时间段过滤的字段
    * sortField  用于时间排序的字段，不传默认按照更新时间排序
    * schemaNo  分库编号（数字类型）
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'tableName' => 'setTableName',
            'isBak' => 'setIsBak',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'filterTimeField' => 'setFilterTimeField',
            'sortField' => 'setSortField',
            'schemaNo' => 'setSchemaNo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  分页偏移量
    * limit  分页大小，最大值1000
    * tableName  需要同步的表名称
    * isBak  是否是bak表数据
    * startTime  查询时间段起始时间
    * endTime  查询时间段截止时间
    * filterTimeField  用于时间段过滤的字段
    * sortField  用于时间排序的字段，不传默认按照更新时间排序
    * schemaNo  分库编号（数字类型）
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'tableName' => 'getTableName',
            'isBak' => 'getIsBak',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'filterTimeField' => 'getFilterTimeField',
            'sortField' => 'getSortField',
            'schemaNo' => 'getSchemaNo'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['isBak'] = isset($data['isBak']) ? $data['isBak'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['filterTimeField'] = isset($data['filterTimeField']) ? $data['filterTimeField'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['schemaNo'] = isset($data['schemaNo']) ? $data['schemaNo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
        }
        if ($this->container['schemaNo'] === null) {
            $invalidProperties[] = "'schemaNo' can't be null";
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
    * Gets offset
    *  分页偏移量
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 分页偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  分页大小，最大值1000
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 分页大小，最大值1000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets tableName
    *  需要同步的表名称
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
    * @param string $tableName 需要同步的表名称
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets isBak
    *  是否是bak表数据
    *
    * @return string|null
    */
    public function getIsBak()
    {
        return $this->container['isBak'];
    }

    /**
    * Sets isBak
    *
    * @param string|null $isBak 是否是bak表数据
    *
    * @return $this
    */
    public function setIsBak($isBak)
    {
        $this->container['isBak'] = $isBak;
        return $this;
    }

    /**
    * Gets startTime
    *  查询时间段起始时间
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
    * @param string|null $startTime 查询时间段起始时间
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
    *  查询时间段截止时间
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
    * @param string|null $endTime 查询时间段截止时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets filterTimeField
    *  用于时间段过滤的字段
    *
    * @return string|null
    */
    public function getFilterTimeField()
    {
        return $this->container['filterTimeField'];
    }

    /**
    * Sets filterTimeField
    *
    * @param string|null $filterTimeField 用于时间段过滤的字段
    *
    * @return $this
    */
    public function setFilterTimeField($filterTimeField)
    {
        $this->container['filterTimeField'] = $filterTimeField;
        return $this;
    }

    /**
    * Gets sortField
    *  用于时间排序的字段，不传默认按照更新时间排序
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
    * @param string|null $sortField 用于时间排序的字段，不传默认按照更新时间排序
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets schemaNo
    *  分库编号（数字类型）
    *
    * @return string
    */
    public function getSchemaNo()
    {
        return $this->container['schemaNo'];
    }

    /**
    * Sets schemaNo
    *
    * @param string $schemaNo 分库编号（数字类型）
    *
    * @return $this
    */
    public function setSchemaNo($schemaNo)
    {
        $this->container['schemaNo'] = $schemaNo;
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


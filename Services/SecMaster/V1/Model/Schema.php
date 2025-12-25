<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Schema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Schema';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columns  列
    * partition  分区
    * primaryKey  主键
    * timeFilter  时间过滤列
    * watermarkColumn  水印列
    * watermarkInterval  水印间隔
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columns' => '\HuaweiCloud\SDK\SecMaster\V1\Model\SchemaColumns[]',
            'partition' => 'string[]',
            'primaryKey' => 'string[]',
            'timeFilter' => 'string',
            'watermarkColumn' => 'string',
            'watermarkInterval' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columns  列
    * partition  分区
    * primaryKey  主键
    * timeFilter  时间过滤列
    * watermarkColumn  水印列
    * watermarkInterval  水印间隔
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columns' => null,
        'partition' => null,
        'primaryKey' => null,
        'timeFilter' => null,
        'watermarkColumn' => null,
        'watermarkInterval' => null
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
    * columns  列
    * partition  分区
    * primaryKey  主键
    * timeFilter  时间过滤列
    * watermarkColumn  水印列
    * watermarkInterval  水印间隔
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columns' => 'columns',
            'partition' => 'partition',
            'primaryKey' => 'primary_key',
            'timeFilter' => 'time_filter',
            'watermarkColumn' => 'watermark_column',
            'watermarkInterval' => 'watermark_interval'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columns  列
    * partition  分区
    * primaryKey  主键
    * timeFilter  时间过滤列
    * watermarkColumn  水印列
    * watermarkInterval  水印间隔
    *
    * @var string[]
    */
    protected static $setters = [
            'columns' => 'setColumns',
            'partition' => 'setPartition',
            'primaryKey' => 'setPrimaryKey',
            'timeFilter' => 'setTimeFilter',
            'watermarkColumn' => 'setWatermarkColumn',
            'watermarkInterval' => 'setWatermarkInterval'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columns  列
    * partition  分区
    * primaryKey  主键
    * timeFilter  时间过滤列
    * watermarkColumn  水印列
    * watermarkInterval  水印间隔
    *
    * @var string[]
    */
    protected static $getters = [
            'columns' => 'getColumns',
            'partition' => 'getPartition',
            'primaryKey' => 'getPrimaryKey',
            'timeFilter' => 'getTimeFilter',
            'watermarkColumn' => 'getWatermarkColumn',
            'watermarkInterval' => 'getWatermarkInterval'
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
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['partition'] = isset($data['partition']) ? $data['partition'] : null;
        $this->container['primaryKey'] = isset($data['primaryKey']) ? $data['primaryKey'] : null;
        $this->container['timeFilter'] = isset($data['timeFilter']) ? $data['timeFilter'] : null;
        $this->container['watermarkColumn'] = isset($data['watermarkColumn']) ? $data['watermarkColumn'] : null;
        $this->container['watermarkInterval'] = isset($data['watermarkInterval']) ? $data['watermarkInterval'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['timeFilter']) && (mb_strlen($this->container['timeFilter']) > 128)) {
                $invalidProperties[] = "invalid value for 'timeFilter', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['timeFilter']) && (mb_strlen($this->container['timeFilter']) < 1)) {
                $invalidProperties[] = "invalid value for 'timeFilter', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['watermarkColumn']) && (mb_strlen($this->container['watermarkColumn']) > 128)) {
                $invalidProperties[] = "invalid value for 'watermarkColumn', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['watermarkColumn']) && (mb_strlen($this->container['watermarkColumn']) < 1)) {
                $invalidProperties[] = "invalid value for 'watermarkColumn', the character length must be bigger than or equal to 1.";
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
    * Gets columns
    *  列
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\SchemaColumns[]|null
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\SchemaColumns[]|null $columns 列
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
        return $this;
    }

    /**
    * Gets partition
    *  分区
    *
    * @return string[]|null
    */
    public function getPartition()
    {
        return $this->container['partition'];
    }

    /**
    * Sets partition
    *
    * @param string[]|null $partition 分区
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
        return $this;
    }

    /**
    * Gets primaryKey
    *  主键
    *
    * @return string[]|null
    */
    public function getPrimaryKey()
    {
        return $this->container['primaryKey'];
    }

    /**
    * Sets primaryKey
    *
    * @param string[]|null $primaryKey 主键
    *
    * @return $this
    */
    public function setPrimaryKey($primaryKey)
    {
        $this->container['primaryKey'] = $primaryKey;
        return $this;
    }

    /**
    * Gets timeFilter
    *  时间过滤列
    *
    * @return string|null
    */
    public function getTimeFilter()
    {
        return $this->container['timeFilter'];
    }

    /**
    * Sets timeFilter
    *
    * @param string|null $timeFilter 时间过滤列
    *
    * @return $this
    */
    public function setTimeFilter($timeFilter)
    {
        $this->container['timeFilter'] = $timeFilter;
        return $this;
    }

    /**
    * Gets watermarkColumn
    *  水印列
    *
    * @return string|null
    */
    public function getWatermarkColumn()
    {
        return $this->container['watermarkColumn'];
    }

    /**
    * Sets watermarkColumn
    *
    * @param string|null $watermarkColumn 水印列
    *
    * @return $this
    */
    public function setWatermarkColumn($watermarkColumn)
    {
        $this->container['watermarkColumn'] = $watermarkColumn;
        return $this;
    }

    /**
    * Gets watermarkInterval
    *  水印间隔
    *
    * @return float|null
    */
    public function getWatermarkInterval()
    {
        return $this->container['watermarkInterval'];
    }

    /**
    * Sets watermarkInterval
    *
    * @param float|null $watermarkInterval 水印间隔
    *
    * @return $this
    */
    public function setWatermarkInterval($watermarkInterval)
    {
        $this->container['watermarkInterval'] = $watermarkInterval;
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


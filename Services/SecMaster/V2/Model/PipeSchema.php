<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipeSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipeSchema';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columns  管道列
    * watermarkColumn  管道水线列
    * watermarkInterval  管道水线间隔时长
    * timeFilter  管道过滤列
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columns' => '\HuaweiCloud\SDK\SecMaster\V2\Model\TableColumnForIsapPipe[]',
            'watermarkColumn' => 'string',
            'watermarkInterval' => 'float',
            'timeFilter' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columns  管道列
    * watermarkColumn  管道水线列
    * watermarkInterval  管道水线间隔时长
    * timeFilter  管道过滤列
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columns' => null,
        'watermarkColumn' => null,
        'watermarkInterval' => 'float',
        'timeFilter' => null
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
    * columns  管道列
    * watermarkColumn  管道水线列
    * watermarkInterval  管道水线间隔时长
    * timeFilter  管道过滤列
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columns' => 'columns',
            'watermarkColumn' => 'watermark_column',
            'watermarkInterval' => 'watermark_interval',
            'timeFilter' => 'time_filter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columns  管道列
    * watermarkColumn  管道水线列
    * watermarkInterval  管道水线间隔时长
    * timeFilter  管道过滤列
    *
    * @var string[]
    */
    protected static $setters = [
            'columns' => 'setColumns',
            'watermarkColumn' => 'setWatermarkColumn',
            'watermarkInterval' => 'setWatermarkInterval',
            'timeFilter' => 'setTimeFilter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columns  管道列
    * watermarkColumn  管道水线列
    * watermarkInterval  管道水线间隔时长
    * timeFilter  管道过滤列
    *
    * @var string[]
    */
    protected static $getters = [
            'columns' => 'getColumns',
            'watermarkColumn' => 'getWatermarkColumn',
            'watermarkInterval' => 'getWatermarkInterval',
            'timeFilter' => 'getTimeFilter'
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
        $this->container['watermarkColumn'] = isset($data['watermarkColumn']) ? $data['watermarkColumn'] : null;
        $this->container['watermarkInterval'] = isset($data['watermarkInterval']) ? $data['watermarkInterval'] : null;
        $this->container['timeFilter'] = isset($data['timeFilter']) ? $data['timeFilter'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['columns'] === null) {
            $invalidProperties[] = "'columns' can't be null";
        }
            if (!is_null($this->container['watermarkColumn']) && (mb_strlen($this->container['watermarkColumn']) > 256)) {
                $invalidProperties[] = "invalid value for 'watermarkColumn', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['watermarkColumn']) && (mb_strlen($this->container['watermarkColumn']) < 1)) {
                $invalidProperties[] = "invalid value for 'watermarkColumn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['watermarkInterval']) && ($this->container['watermarkInterval'] > 6E+1)) {
                $invalidProperties[] = "invalid value for 'watermarkInterval', must be smaller than or equal to 6E+1.";
            }
            if (!is_null($this->container['watermarkInterval']) && ($this->container['watermarkInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'watermarkInterval', must be bigger than or equal to 0.";
            }
        if ($this->container['timeFilter'] === null) {
            $invalidProperties[] = "'timeFilter' can't be null";
        }
            if ((mb_strlen($this->container['timeFilter']) > 256)) {
                $invalidProperties[] = "invalid value for 'timeFilter', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['timeFilter']) < 1)) {
                $invalidProperties[] = "invalid value for 'timeFilter', the character length must be bigger than or equal to 1.";
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
    *  管道列
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\TableColumnForIsapPipe[]
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\TableColumnForIsapPipe[] $columns 管道列
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
        return $this;
    }

    /**
    * Gets watermarkColumn
    *  管道水线列
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
    * @param string|null $watermarkColumn 管道水线列
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
    *  管道水线间隔时长
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
    * @param float|null $watermarkInterval 管道水线间隔时长
    *
    * @return $this
    */
    public function setWatermarkInterval($watermarkInterval)
    {
        $this->container['watermarkInterval'] = $watermarkInterval;
        return $this;
    }

    /**
    * Gets timeFilter
    *  管道过滤列
    *
    * @return string
    */
    public function getTimeFilter()
    {
        return $this->container['timeFilter'];
    }

    /**
    * Sets timeFilter
    *
    * @param string $timeFilter 管道过滤列
    *
    * @return $this
    */
    public function setTimeFilter($timeFilter)
    {
        $this->container['timeFilter'] = $timeFilter;
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


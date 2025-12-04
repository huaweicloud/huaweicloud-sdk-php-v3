<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BandwidthPolicyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BandwidthPolicyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * end  流量控制结束时间，格式为“hh:mm”。例如“12:03”表示12时03分。
    * maxBandwidth  时段内允许的最大流量带宽，单位Byte/s，取值范围为>= 1048576Byte/s（相当于1MB/s）且<=209715200Byte/s（相当于200MB/s）。
    * start  流量控制开始时间，格式为“hh:mm”。例如“12:03”表示12时03分。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'end' => 'string',
            'maxBandwidth' => 'int',
            'start' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * end  流量控制结束时间，格式为“hh:mm”。例如“12:03”表示12时03分。
    * maxBandwidth  时段内允许的最大流量带宽，单位Byte/s，取值范围为>= 1048576Byte/s（相当于1MB/s）且<=209715200Byte/s（相当于200MB/s）。
    * start  流量控制开始时间，格式为“hh:mm”。例如“12:03”表示12时03分。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'end' => null,
        'maxBandwidth' => 'int64',
        'start' => null
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
    * end  流量控制结束时间，格式为“hh:mm”。例如“12:03”表示12时03分。
    * maxBandwidth  时段内允许的最大流量带宽，单位Byte/s，取值范围为>= 1048576Byte/s（相当于1MB/s）且<=209715200Byte/s（相当于200MB/s）。
    * start  流量控制开始时间，格式为“hh:mm”。例如“12:03”表示12时03分。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'end' => 'end',
            'maxBandwidth' => 'max_bandwidth',
            'start' => 'start'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * end  流量控制结束时间，格式为“hh:mm”。例如“12:03”表示12时03分。
    * maxBandwidth  时段内允许的最大流量带宽，单位Byte/s，取值范围为>= 1048576Byte/s（相当于1MB/s）且<=209715200Byte/s（相当于200MB/s）。
    * start  流量控制开始时间，格式为“hh:mm”。例如“12:03”表示12时03分。
    *
    * @var string[]
    */
    protected static $setters = [
            'end' => 'setEnd',
            'maxBandwidth' => 'setMaxBandwidth',
            'start' => 'setStart'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * end  流量控制结束时间，格式为“hh:mm”。例如“12:03”表示12时03分。
    * maxBandwidth  时段内允许的最大流量带宽，单位Byte/s，取值范围为>= 1048576Byte/s（相当于1MB/s）且<=209715200Byte/s（相当于200MB/s）。
    * start  流量控制开始时间，格式为“hh:mm”。例如“12:03”表示12时03分。
    *
    * @var string[]
    */
    protected static $getters = [
            'end' => 'getEnd',
            'maxBandwidth' => 'getMaxBandwidth',
            'start' => 'getStart'
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
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['maxBandwidth'] = isset($data['maxBandwidth']) ? $data['maxBandwidth'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['end'] === null) {
            $invalidProperties[] = "'end' can't be null";
        }
            if (!preg_match("/^(20|21|22|23|[0-1]\\d):[0-5]\\d/", $this->container['end'])) {
                $invalidProperties[] = "invalid value for 'end', must be conform to the pattern /^(20|21|22|23|[0-1]\\d):[0-5]\\d/.";
            }
        if ($this->container['maxBandwidth'] === null) {
            $invalidProperties[] = "'maxBandwidth' can't be null";
        }
            if (($this->container['maxBandwidth'] > 209715200)) {
                $invalidProperties[] = "invalid value for 'maxBandwidth', must be smaller than or equal to 209715200.";
            }
            if (($this->container['maxBandwidth'] < 1048576)) {
                $invalidProperties[] = "invalid value for 'maxBandwidth', must be bigger than or equal to 1048576.";
            }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
            if (!preg_match("/^(20|21|22|23|[0-1]\\d):[0-5]\\d/", $this->container['start'])) {
                $invalidProperties[] = "invalid value for 'start', must be conform to the pattern /^(20|21|22|23|[0-1]\\d):[0-5]\\d/.";
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
    * Gets end
    *  流量控制结束时间，格式为“hh:mm”。例如“12:03”表示12时03分。
    *
    * @return string
    */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
    * Sets end
    *
    * @param string $end 流量控制结束时间，格式为“hh:mm”。例如“12:03”表示12时03分。
    *
    * @return $this
    */
    public function setEnd($end)
    {
        $this->container['end'] = $end;
        return $this;
    }

    /**
    * Gets maxBandwidth
    *  时段内允许的最大流量带宽，单位Byte/s，取值范围为>= 1048576Byte/s（相当于1MB/s）且<=209715200Byte/s（相当于200MB/s）。
    *
    * @return int
    */
    public function getMaxBandwidth()
    {
        return $this->container['maxBandwidth'];
    }

    /**
    * Sets maxBandwidth
    *
    * @param int $maxBandwidth 时段内允许的最大流量带宽，单位Byte/s，取值范围为>= 1048576Byte/s（相当于1MB/s）且<=209715200Byte/s（相当于200MB/s）。
    *
    * @return $this
    */
    public function setMaxBandwidth($maxBandwidth)
    {
        $this->container['maxBandwidth'] = $maxBandwidth;
        return $this;
    }

    /**
    * Gets start
    *  流量控制开始时间，格式为“hh:mm”。例如“12:03”表示12时03分。
    *
    * @return string
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param string $start 流量控制开始时间，格式为“hh:mm”。例如“12:03”表示12时03分。
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
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


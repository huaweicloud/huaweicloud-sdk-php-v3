<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlertRuleTemplateMetricsResponseBodySeverityMetric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlertRuleTemplateMetricsResponseBody_severity_metric';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * high  HIGH等级数量
    * tips  TIPS等级数量
    * fatal  FATAL等级数量
    * low  LOW等级数量
    * medium  MEDIUM等级数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'high' => 'int',
            'tips' => 'int',
            'fatal' => 'int',
            'low' => 'int',
            'medium' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * high  HIGH等级数量
    * tips  TIPS等级数量
    * fatal  FATAL等级数量
    * low  LOW等级数量
    * medium  MEDIUM等级数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'high' => 'int32',
        'tips' => 'int32',
        'fatal' => 'int32',
        'low' => 'int32',
        'medium' => 'int32'
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
    * high  HIGH等级数量
    * tips  TIPS等级数量
    * fatal  FATAL等级数量
    * low  LOW等级数量
    * medium  MEDIUM等级数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'high' => 'HIGH',
            'tips' => 'TIPS',
            'fatal' => 'FATAL',
            'low' => 'LOW',
            'medium' => 'MEDIUM'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * high  HIGH等级数量
    * tips  TIPS等级数量
    * fatal  FATAL等级数量
    * low  LOW等级数量
    * medium  MEDIUM等级数量
    *
    * @var string[]
    */
    protected static $setters = [
            'high' => 'setHigh',
            'tips' => 'setTips',
            'fatal' => 'setFatal',
            'low' => 'setLow',
            'medium' => 'setMedium'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * high  HIGH等级数量
    * tips  TIPS等级数量
    * fatal  FATAL等级数量
    * low  LOW等级数量
    * medium  MEDIUM等级数量
    *
    * @var string[]
    */
    protected static $getters = [
            'high' => 'getHigh',
            'tips' => 'getTips',
            'fatal' => 'getFatal',
            'low' => 'getLow',
            'medium' => 'getMedium'
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
        $this->container['high'] = isset($data['high']) ? $data['high'] : null;
        $this->container['tips'] = isset($data['tips']) ? $data['tips'] : null;
        $this->container['fatal'] = isset($data['fatal']) ? $data['fatal'] : null;
        $this->container['low'] = isset($data['low']) ? $data['low'] : null;
        $this->container['medium'] = isset($data['medium']) ? $data['medium'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['high']) && ($this->container['high'] > 10000)) {
                $invalidProperties[] = "invalid value for 'high', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['high']) && ($this->container['high'] < 0)) {
                $invalidProperties[] = "invalid value for 'high', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tips']) && ($this->container['tips'] > 10000)) {
                $invalidProperties[] = "invalid value for 'tips', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['tips']) && ($this->container['tips'] < 0)) {
                $invalidProperties[] = "invalid value for 'tips', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fatal']) && ($this->container['fatal'] > 10000)) {
                $invalidProperties[] = "invalid value for 'fatal', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['fatal']) && ($this->container['fatal'] < 0)) {
                $invalidProperties[] = "invalid value for 'fatal', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['low']) && ($this->container['low'] > 10000)) {
                $invalidProperties[] = "invalid value for 'low', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['low']) && ($this->container['low'] < 0)) {
                $invalidProperties[] = "invalid value for 'low', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['medium']) && ($this->container['medium'] > 10000)) {
                $invalidProperties[] = "invalid value for 'medium', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['medium']) && ($this->container['medium'] < 0)) {
                $invalidProperties[] = "invalid value for 'medium', must be bigger than or equal to 0.";
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
    * Gets high
    *  HIGH等级数量
    *
    * @return int|null
    */
    public function getHigh()
    {
        return $this->container['high'];
    }

    /**
    * Sets high
    *
    * @param int|null $high HIGH等级数量
    *
    * @return $this
    */
    public function setHigh($high)
    {
        $this->container['high'] = $high;
        return $this;
    }

    /**
    * Gets tips
    *  TIPS等级数量
    *
    * @return int|null
    */
    public function getTips()
    {
        return $this->container['tips'];
    }

    /**
    * Sets tips
    *
    * @param int|null $tips TIPS等级数量
    *
    * @return $this
    */
    public function setTips($tips)
    {
        $this->container['tips'] = $tips;
        return $this;
    }

    /**
    * Gets fatal
    *  FATAL等级数量
    *
    * @return int|null
    */
    public function getFatal()
    {
        return $this->container['fatal'];
    }

    /**
    * Sets fatal
    *
    * @param int|null $fatal FATAL等级数量
    *
    * @return $this
    */
    public function setFatal($fatal)
    {
        $this->container['fatal'] = $fatal;
        return $this;
    }

    /**
    * Gets low
    *  LOW等级数量
    *
    * @return int|null
    */
    public function getLow()
    {
        return $this->container['low'];
    }

    /**
    * Sets low
    *
    * @param int|null $low LOW等级数量
    *
    * @return $this
    */
    public function setLow($low)
    {
        $this->container['low'] = $low;
        return $this;
    }

    /**
    * Gets medium
    *  MEDIUM等级数量
    *
    * @return int|null
    */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
    * Sets medium
    *
    * @param int|null $medium MEDIUM等级数量
    *
    * @return $this
    */
    public function setMedium($medium)
    {
        $this->container['medium'] = $medium;
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


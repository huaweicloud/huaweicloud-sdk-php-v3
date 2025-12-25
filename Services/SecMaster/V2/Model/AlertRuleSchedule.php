<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertRuleSchedule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlertRuleSchedule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * delayInterval  整型时长
    * frequencyInterval  整型时长
    * frequencyUnit  frequencyUnit
    * overtimeInterval  整型时长
    * periodInterval  整型时长
    * periodUnit  periodUnit
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'delayInterval' => 'int',
            'frequencyInterval' => 'int',
            'frequencyUnit' => '\HuaweiCloud\SDK\SecMaster\V2\Model\FrequencyUnit',
            'overtimeInterval' => 'int',
            'periodInterval' => 'int',
            'periodUnit' => '\HuaweiCloud\SDK\SecMaster\V2\Model\FrequencyUnit'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * delayInterval  整型时长
    * frequencyInterval  整型时长
    * frequencyUnit  frequencyUnit
    * overtimeInterval  整型时长
    * periodInterval  整型时长
    * periodUnit  periodUnit
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'delayInterval' => 'int32',
        'frequencyInterval' => 'int32',
        'frequencyUnit' => null,
        'overtimeInterval' => 'int32',
        'periodInterval' => 'int32',
        'periodUnit' => null
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
    * delayInterval  整型时长
    * frequencyInterval  整型时长
    * frequencyUnit  frequencyUnit
    * overtimeInterval  整型时长
    * periodInterval  整型时长
    * periodUnit  periodUnit
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'delayInterval' => 'delay_interval',
            'frequencyInterval' => 'frequency_interval',
            'frequencyUnit' => 'frequency_unit',
            'overtimeInterval' => 'overtime_interval',
            'periodInterval' => 'period_interval',
            'periodUnit' => 'period_unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * delayInterval  整型时长
    * frequencyInterval  整型时长
    * frequencyUnit  frequencyUnit
    * overtimeInterval  整型时长
    * periodInterval  整型时长
    * periodUnit  periodUnit
    *
    * @var string[]
    */
    protected static $setters = [
            'delayInterval' => 'setDelayInterval',
            'frequencyInterval' => 'setFrequencyInterval',
            'frequencyUnit' => 'setFrequencyUnit',
            'overtimeInterval' => 'setOvertimeInterval',
            'periodInterval' => 'setPeriodInterval',
            'periodUnit' => 'setPeriodUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * delayInterval  整型时长
    * frequencyInterval  整型时长
    * frequencyUnit  frequencyUnit
    * overtimeInterval  整型时长
    * periodInterval  整型时长
    * periodUnit  periodUnit
    *
    * @var string[]
    */
    protected static $getters = [
            'delayInterval' => 'getDelayInterval',
            'frequencyInterval' => 'getFrequencyInterval',
            'frequencyUnit' => 'getFrequencyUnit',
            'overtimeInterval' => 'getOvertimeInterval',
            'periodInterval' => 'getPeriodInterval',
            'periodUnit' => 'getPeriodUnit'
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
        $this->container['delayInterval'] = isset($data['delayInterval']) ? $data['delayInterval'] : null;
        $this->container['frequencyInterval'] = isset($data['frequencyInterval']) ? $data['frequencyInterval'] : null;
        $this->container['frequencyUnit'] = isset($data['frequencyUnit']) ? $data['frequencyUnit'] : null;
        $this->container['overtimeInterval'] = isset($data['overtimeInterval']) ? $data['overtimeInterval'] : null;
        $this->container['periodInterval'] = isset($data['periodInterval']) ? $data['periodInterval'] : null;
        $this->container['periodUnit'] = isset($data['periodUnit']) ? $data['periodUnit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['delayInterval']) && ($this->container['delayInterval'] > 2147483640)) {
                $invalidProperties[] = "invalid value for 'delayInterval', must be smaller than or equal to 2147483640.";
            }
            if (!is_null($this->container['delayInterval']) && ($this->container['delayInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'delayInterval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['frequencyInterval']) && ($this->container['frequencyInterval'] > 2147483640)) {
                $invalidProperties[] = "invalid value for 'frequencyInterval', must be smaller than or equal to 2147483640.";
            }
            if (!is_null($this->container['frequencyInterval']) && ($this->container['frequencyInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'frequencyInterval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['overtimeInterval']) && ($this->container['overtimeInterval'] > 2147483640)) {
                $invalidProperties[] = "invalid value for 'overtimeInterval', must be smaller than or equal to 2147483640.";
            }
            if (!is_null($this->container['overtimeInterval']) && ($this->container['overtimeInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'overtimeInterval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['periodInterval']) && ($this->container['periodInterval'] > 2147483640)) {
                $invalidProperties[] = "invalid value for 'periodInterval', must be smaller than or equal to 2147483640.";
            }
            if (!is_null($this->container['periodInterval']) && ($this->container['periodInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'periodInterval', must be bigger than or equal to 0.";
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
    * Gets delayInterval
    *  整型时长
    *
    * @return int|null
    */
    public function getDelayInterval()
    {
        return $this->container['delayInterval'];
    }

    /**
    * Sets delayInterval
    *
    * @param int|null $delayInterval 整型时长
    *
    * @return $this
    */
    public function setDelayInterval($delayInterval)
    {
        $this->container['delayInterval'] = $delayInterval;
        return $this;
    }

    /**
    * Gets frequencyInterval
    *  整型时长
    *
    * @return int|null
    */
    public function getFrequencyInterval()
    {
        return $this->container['frequencyInterval'];
    }

    /**
    * Sets frequencyInterval
    *
    * @param int|null $frequencyInterval 整型时长
    *
    * @return $this
    */
    public function setFrequencyInterval($frequencyInterval)
    {
        $this->container['frequencyInterval'] = $frequencyInterval;
        return $this;
    }

    /**
    * Gets frequencyUnit
    *  frequencyUnit
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\FrequencyUnit|null
    */
    public function getFrequencyUnit()
    {
        return $this->container['frequencyUnit'];
    }

    /**
    * Sets frequencyUnit
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\FrequencyUnit|null $frequencyUnit frequencyUnit
    *
    * @return $this
    */
    public function setFrequencyUnit($frequencyUnit)
    {
        $this->container['frequencyUnit'] = $frequencyUnit;
        return $this;
    }

    /**
    * Gets overtimeInterval
    *  整型时长
    *
    * @return int|null
    */
    public function getOvertimeInterval()
    {
        return $this->container['overtimeInterval'];
    }

    /**
    * Sets overtimeInterval
    *
    * @param int|null $overtimeInterval 整型时长
    *
    * @return $this
    */
    public function setOvertimeInterval($overtimeInterval)
    {
        $this->container['overtimeInterval'] = $overtimeInterval;
        return $this;
    }

    /**
    * Gets periodInterval
    *  整型时长
    *
    * @return int|null
    */
    public function getPeriodInterval()
    {
        return $this->container['periodInterval'];
    }

    /**
    * Sets periodInterval
    *
    * @param int|null $periodInterval 整型时长
    *
    * @return $this
    */
    public function setPeriodInterval($periodInterval)
    {
        $this->container['periodInterval'] = $periodInterval;
        return $this;
    }

    /**
    * Gets periodUnit
    *  periodUnit
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\FrequencyUnit|null
    */
    public function getPeriodUnit()
    {
        return $this->container['periodUnit'];
    }

    /**
    * Sets periodUnit
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\FrequencyUnit|null $periodUnit periodUnit
    *
    * @return $this
    */
    public function setPeriodUnit($periodUnit)
    {
        $this->container['periodUnit'] = $periodUnit;
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


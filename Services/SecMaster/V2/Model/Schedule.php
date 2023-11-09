<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Schedule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Schedule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * frequencyInterval  调度间隔。Frequency interval.
    * frequencyUnit  调度间隔单位，分钟、小时、天。Frequency unit. MINUTE, HOUR, DAY.
    * periodInterval  时间窗口间隔。Period interval.
    * periodUnit  时间窗口单位，分钟、小时、天。Period unit. MINUTE, HOUR, DAY.
    * delayInterval  延迟间隔。Delay interval
    * overtimeInterval  超时间隔。Overtime interval
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'frequencyInterval' => 'int',
            'frequencyUnit' => 'string',
            'periodInterval' => 'int',
            'periodUnit' => 'string',
            'delayInterval' => 'int',
            'overtimeInterval' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * frequencyInterval  调度间隔。Frequency interval.
    * frequencyUnit  调度间隔单位，分钟、小时、天。Frequency unit. MINUTE, HOUR, DAY.
    * periodInterval  时间窗口间隔。Period interval.
    * periodUnit  时间窗口单位，分钟、小时、天。Period unit. MINUTE, HOUR, DAY.
    * delayInterval  延迟间隔。Delay interval
    * overtimeInterval  超时间隔。Overtime interval
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'frequencyInterval' => null,
        'frequencyUnit' => null,
        'periodInterval' => null,
        'periodUnit' => null,
        'delayInterval' => null,
        'overtimeInterval' => null
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
    * frequencyInterval  调度间隔。Frequency interval.
    * frequencyUnit  调度间隔单位，分钟、小时、天。Frequency unit. MINUTE, HOUR, DAY.
    * periodInterval  时间窗口间隔。Period interval.
    * periodUnit  时间窗口单位，分钟、小时、天。Period unit. MINUTE, HOUR, DAY.
    * delayInterval  延迟间隔。Delay interval
    * overtimeInterval  超时间隔。Overtime interval
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'frequencyInterval' => 'frequency_interval',
            'frequencyUnit' => 'frequency_unit',
            'periodInterval' => 'period_interval',
            'periodUnit' => 'period_unit',
            'delayInterval' => 'delay_interval',
            'overtimeInterval' => 'overtime_interval'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * frequencyInterval  调度间隔。Frequency interval.
    * frequencyUnit  调度间隔单位，分钟、小时、天。Frequency unit. MINUTE, HOUR, DAY.
    * periodInterval  时间窗口间隔。Period interval.
    * periodUnit  时间窗口单位，分钟、小时、天。Period unit. MINUTE, HOUR, DAY.
    * delayInterval  延迟间隔。Delay interval
    * overtimeInterval  超时间隔。Overtime interval
    *
    * @var string[]
    */
    protected static $setters = [
            'frequencyInterval' => 'setFrequencyInterval',
            'frequencyUnit' => 'setFrequencyUnit',
            'periodInterval' => 'setPeriodInterval',
            'periodUnit' => 'setPeriodUnit',
            'delayInterval' => 'setDelayInterval',
            'overtimeInterval' => 'setOvertimeInterval'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * frequencyInterval  调度间隔。Frequency interval.
    * frequencyUnit  调度间隔单位，分钟、小时、天。Frequency unit. MINUTE, HOUR, DAY.
    * periodInterval  时间窗口间隔。Period interval.
    * periodUnit  时间窗口单位，分钟、小时、天。Period unit. MINUTE, HOUR, DAY.
    * delayInterval  延迟间隔。Delay interval
    * overtimeInterval  超时间隔。Overtime interval
    *
    * @var string[]
    */
    protected static $getters = [
            'frequencyInterval' => 'getFrequencyInterval',
            'frequencyUnit' => 'getFrequencyUnit',
            'periodInterval' => 'getPeriodInterval',
            'periodUnit' => 'getPeriodUnit',
            'delayInterval' => 'getDelayInterval',
            'overtimeInterval' => 'getOvertimeInterval'
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
    const FREQUENCY_UNIT_MINUTE = 'MINUTE';
    const FREQUENCY_UNIT_HOUR = 'HOUR';
    const FREQUENCY_UNIT_DAY = 'DAY';
    const PERIOD_UNIT_MINUTE = 'MINUTE';
    const PERIOD_UNIT_HOUR = 'HOUR';
    const PERIOD_UNIT_DAY = 'DAY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFrequencyUnitAllowableValues()
    {
        return [
            self::FREQUENCY_UNIT_MINUTE,
            self::FREQUENCY_UNIT_HOUR,
            self::FREQUENCY_UNIT_DAY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodUnitAllowableValues()
    {
        return [
            self::PERIOD_UNIT_MINUTE,
            self::PERIOD_UNIT_HOUR,
            self::PERIOD_UNIT_DAY,
        ];
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
        $this->container['frequencyInterval'] = isset($data['frequencyInterval']) ? $data['frequencyInterval'] : null;
        $this->container['frequencyUnit'] = isset($data['frequencyUnit']) ? $data['frequencyUnit'] : null;
        $this->container['periodInterval'] = isset($data['periodInterval']) ? $data['periodInterval'] : null;
        $this->container['periodUnit'] = isset($data['periodUnit']) ? $data['periodUnit'] : null;
        $this->container['delayInterval'] = isset($data['delayInterval']) ? $data['delayInterval'] : null;
        $this->container['overtimeInterval'] = isset($data['overtimeInterval']) ? $data['overtimeInterval'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['frequencyInterval'] === null) {
            $invalidProperties[] = "'frequencyInterval' can't be null";
        }
            if (($this->container['frequencyInterval'] > 60)) {
                $invalidProperties[] = "invalid value for 'frequencyInterval', must be smaller than or equal to 60.";
            }
            if (($this->container['frequencyInterval'] < 1)) {
                $invalidProperties[] = "invalid value for 'frequencyInterval', must be bigger than or equal to 1.";
            }
        if ($this->container['frequencyUnit'] === null) {
            $invalidProperties[] = "'frequencyUnit' can't be null";
        }
            $allowedValues = $this->getFrequencyUnitAllowableValues();
                if (!is_null($this->container['frequencyUnit']) && !in_array($this->container['frequencyUnit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'frequencyUnit', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['frequencyUnit']) > 255)) {
                $invalidProperties[] = "invalid value for 'frequencyUnit', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['frequencyUnit']) < 1)) {
                $invalidProperties[] = "invalid value for 'frequencyUnit', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['periodInterval'] === null) {
            $invalidProperties[] = "'periodInterval' can't be null";
        }
            if (($this->container['periodInterval'] > 60)) {
                $invalidProperties[] = "invalid value for 'periodInterval', must be smaller than or equal to 60.";
            }
            if (($this->container['periodInterval'] < 1)) {
                $invalidProperties[] = "invalid value for 'periodInterval', must be bigger than or equal to 1.";
            }
        if ($this->container['periodUnit'] === null) {
            $invalidProperties[] = "'periodUnit' can't be null";
        }
            $allowedValues = $this->getPeriodUnitAllowableValues();
                if (!is_null($this->container['periodUnit']) && !in_array($this->container['periodUnit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'periodUnit', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['periodUnit']) > 255)) {
                $invalidProperties[] = "invalid value for 'periodUnit', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['periodUnit']) < 1)) {
                $invalidProperties[] = "invalid value for 'periodUnit', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['delayInterval']) && ($this->container['delayInterval'] > 10)) {
                $invalidProperties[] = "invalid value for 'delayInterval', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['delayInterval']) && ($this->container['delayInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'delayInterval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['overtimeInterval']) && ($this->container['overtimeInterval'] > 10)) {
                $invalidProperties[] = "invalid value for 'overtimeInterval', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['overtimeInterval']) && ($this->container['overtimeInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'overtimeInterval', must be bigger than or equal to 0.";
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
    * Gets frequencyInterval
    *  调度间隔。Frequency interval.
    *
    * @return int
    */
    public function getFrequencyInterval()
    {
        return $this->container['frequencyInterval'];
    }

    /**
    * Sets frequencyInterval
    *
    * @param int $frequencyInterval 调度间隔。Frequency interval.
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
    *  调度间隔单位，分钟、小时、天。Frequency unit. MINUTE, HOUR, DAY.
    *
    * @return string
    */
    public function getFrequencyUnit()
    {
        return $this->container['frequencyUnit'];
    }

    /**
    * Sets frequencyUnit
    *
    * @param string $frequencyUnit 调度间隔单位，分钟、小时、天。Frequency unit. MINUTE, HOUR, DAY.
    *
    * @return $this
    */
    public function setFrequencyUnit($frequencyUnit)
    {
        $this->container['frequencyUnit'] = $frequencyUnit;
        return $this;
    }

    /**
    * Gets periodInterval
    *  时间窗口间隔。Period interval.
    *
    * @return int
    */
    public function getPeriodInterval()
    {
        return $this->container['periodInterval'];
    }

    /**
    * Sets periodInterval
    *
    * @param int $periodInterval 时间窗口间隔。Period interval.
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
    *  时间窗口单位，分钟、小时、天。Period unit. MINUTE, HOUR, DAY.
    *
    * @return string
    */
    public function getPeriodUnit()
    {
        return $this->container['periodUnit'];
    }

    /**
    * Sets periodUnit
    *
    * @param string $periodUnit 时间窗口单位，分钟、小时、天。Period unit. MINUTE, HOUR, DAY.
    *
    * @return $this
    */
    public function setPeriodUnit($periodUnit)
    {
        $this->container['periodUnit'] = $periodUnit;
        return $this;
    }

    /**
    * Gets delayInterval
    *  延迟间隔。Delay interval
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
    * @param int|null $delayInterval 延迟间隔。Delay interval
    *
    * @return $this
    */
    public function setDelayInterval($delayInterval)
    {
        $this->container['delayInterval'] = $delayInterval;
        return $this;
    }

    /**
    * Gets overtimeInterval
    *  超时间隔。Overtime interval
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
    * @param int|null $overtimeInterval 超时间隔。Overtime interval
    *
    * @return $this
    */
    public function setOvertimeInterval($overtimeInterval)
    {
        $this->container['overtimeInterval'] = $overtimeInterval;
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


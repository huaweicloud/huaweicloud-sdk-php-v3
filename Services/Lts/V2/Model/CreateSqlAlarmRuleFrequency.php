<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSqlAlarmRuleFrequency implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSqlAlarmRuleFrequency';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  时间类型。
    * cronExpr  当字段type为\"CRON\"时取该字段。
    * hourOfDay  当字段type为\"DAILY\"或者\"WEEKLY\"时取该字段。  DAILY：最小值：0，最大值：23 WEEKLY：最小值：0，最大值：23
    * dayOfWeek  当字段type为\"WEEKLY\"时取该字段（周日~周六）。
    * fixedRate  当字段type为\"FIXED_RATE\"时取该字段（当fixed_rate_unit单位为minute，最大值60；当fixed_rate_unit单位为hour，最大值24）。
    * fixedRateUnit  时间单位。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'cronExpr' => 'string',
            'hourOfDay' => 'int',
            'dayOfWeek' => 'int',
            'fixedRate' => 'int',
            'fixedRateUnit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  时间类型。
    * cronExpr  当字段type为\"CRON\"时取该字段。
    * hourOfDay  当字段type为\"DAILY\"或者\"WEEKLY\"时取该字段。  DAILY：最小值：0，最大值：23 WEEKLY：最小值：0，最大值：23
    * dayOfWeek  当字段type为\"WEEKLY\"时取该字段（周日~周六）。
    * fixedRate  当字段type为\"FIXED_RATE\"时取该字段（当fixed_rate_unit单位为minute，最大值60；当fixed_rate_unit单位为hour，最大值24）。
    * fixedRateUnit  时间单位。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'cronExpr' => null,
        'hourOfDay' => 'int32',
        'dayOfWeek' => 'int32',
        'fixedRate' => 'int32',
        'fixedRateUnit' => null
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
    * type  时间类型。
    * cronExpr  当字段type为\"CRON\"时取该字段。
    * hourOfDay  当字段type为\"DAILY\"或者\"WEEKLY\"时取该字段。  DAILY：最小值：0，最大值：23 WEEKLY：最小值：0，最大值：23
    * dayOfWeek  当字段type为\"WEEKLY\"时取该字段（周日~周六）。
    * fixedRate  当字段type为\"FIXED_RATE\"时取该字段（当fixed_rate_unit单位为minute，最大值60；当fixed_rate_unit单位为hour，最大值24）。
    * fixedRateUnit  时间单位。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'cronExpr' => 'cron_expr',
            'hourOfDay' => 'hour_of_day',
            'dayOfWeek' => 'day_of_week',
            'fixedRate' => 'fixed_rate',
            'fixedRateUnit' => 'fixed_rate_unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  时间类型。
    * cronExpr  当字段type为\"CRON\"时取该字段。
    * hourOfDay  当字段type为\"DAILY\"或者\"WEEKLY\"时取该字段。  DAILY：最小值：0，最大值：23 WEEKLY：最小值：0，最大值：23
    * dayOfWeek  当字段type为\"WEEKLY\"时取该字段（周日~周六）。
    * fixedRate  当字段type为\"FIXED_RATE\"时取该字段（当fixed_rate_unit单位为minute，最大值60；当fixed_rate_unit单位为hour，最大值24）。
    * fixedRateUnit  时间单位。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'cronExpr' => 'setCronExpr',
            'hourOfDay' => 'setHourOfDay',
            'dayOfWeek' => 'setDayOfWeek',
            'fixedRate' => 'setFixedRate',
            'fixedRateUnit' => 'setFixedRateUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  时间类型。
    * cronExpr  当字段type为\"CRON\"时取该字段。
    * hourOfDay  当字段type为\"DAILY\"或者\"WEEKLY\"时取该字段。  DAILY：最小值：0，最大值：23 WEEKLY：最小值：0，最大值：23
    * dayOfWeek  当字段type为\"WEEKLY\"时取该字段（周日~周六）。
    * fixedRate  当字段type为\"FIXED_RATE\"时取该字段（当fixed_rate_unit单位为minute，最大值60；当fixed_rate_unit单位为hour，最大值24）。
    * fixedRateUnit  时间单位。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'cronExpr' => 'getCronExpr',
            'hourOfDay' => 'getHourOfDay',
            'dayOfWeek' => 'getDayOfWeek',
            'fixedRate' => 'getFixedRate',
            'fixedRateUnit' => 'getFixedRateUnit'
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
    const TYPE_CRON = 'CRON';
    const TYPE_HOURLY = 'HOURLY';
    const TYPE_DAILY = 'DAILY';
    const TYPE_WEEKLY = 'WEEKLY';
    const TYPE_FIXED_RATE = 'FIXED_RATE';
    const FIXED_RATE_UNIT_MINUTE = 'minute';
    const FIXED_RATE_UNIT_HOUR = 'hour';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CRON,
            self::TYPE_HOURLY,
            self::TYPE_DAILY,
            self::TYPE_WEEKLY,
            self::TYPE_FIXED_RATE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFixedRateUnitAllowableValues()
    {
        return [
            self::FIXED_RATE_UNIT_MINUTE,
            self::FIXED_RATE_UNIT_HOUR,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cronExpr'] = isset($data['cronExpr']) ? $data['cronExpr'] : null;
        $this->container['hourOfDay'] = isset($data['hourOfDay']) ? $data['hourOfDay'] : null;
        $this->container['dayOfWeek'] = isset($data['dayOfWeek']) ? $data['dayOfWeek'] : null;
        $this->container['fixedRate'] = isset($data['fixedRate']) ? $data['fixedRate'] : null;
        $this->container['fixedRateUnit'] = isset($data['fixedRateUnit']) ? $data['fixedRateUnit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['cronExpr']) && (mb_strlen($this->container['cronExpr']) > 1024)) {
                $invalidProperties[] = "invalid value for 'cronExpr', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['cronExpr']) && (mb_strlen($this->container['cronExpr']) < 1)) {
                $invalidProperties[] = "invalid value for 'cronExpr', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fixedRate']) && ($this->container['fixedRate'] > 60)) {
                $invalidProperties[] = "invalid value for 'fixedRate', must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['fixedRate']) && ($this->container['fixedRate'] < 1)) {
                $invalidProperties[] = "invalid value for 'fixedRate', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getFixedRateUnitAllowableValues();
                if (!is_null($this->container['fixedRateUnit']) && !in_array($this->container['fixedRateUnit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'fixedRateUnit', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets type
    *  时间类型。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 时间类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets cronExpr
    *  当字段type为\"CRON\"时取该字段。
    *
    * @return string|null
    */
    public function getCronExpr()
    {
        return $this->container['cronExpr'];
    }

    /**
    * Sets cronExpr
    *
    * @param string|null $cronExpr 当字段type为\"CRON\"时取该字段。
    *
    * @return $this
    */
    public function setCronExpr($cronExpr)
    {
        $this->container['cronExpr'] = $cronExpr;
        return $this;
    }

    /**
    * Gets hourOfDay
    *  当字段type为\"DAILY\"或者\"WEEKLY\"时取该字段。  DAILY：最小值：0，最大值：23 WEEKLY：最小值：0，最大值：23
    *
    * @return int|null
    */
    public function getHourOfDay()
    {
        return $this->container['hourOfDay'];
    }

    /**
    * Sets hourOfDay
    *
    * @param int|null $hourOfDay 当字段type为\"DAILY\"或者\"WEEKLY\"时取该字段。  DAILY：最小值：0，最大值：23 WEEKLY：最小值：0，最大值：23
    *
    * @return $this
    */
    public function setHourOfDay($hourOfDay)
    {
        $this->container['hourOfDay'] = $hourOfDay;
        return $this;
    }

    /**
    * Gets dayOfWeek
    *  当字段type为\"WEEKLY\"时取该字段（周日~周六）。
    *
    * @return int|null
    */
    public function getDayOfWeek()
    {
        return $this->container['dayOfWeek'];
    }

    /**
    * Sets dayOfWeek
    *
    * @param int|null $dayOfWeek 当字段type为\"WEEKLY\"时取该字段（周日~周六）。
    *
    * @return $this
    */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->container['dayOfWeek'] = $dayOfWeek;
        return $this;
    }

    /**
    * Gets fixedRate
    *  当字段type为\"FIXED_RATE\"时取该字段（当fixed_rate_unit单位为minute，最大值60；当fixed_rate_unit单位为hour，最大值24）。
    *
    * @return int|null
    */
    public function getFixedRate()
    {
        return $this->container['fixedRate'];
    }

    /**
    * Sets fixedRate
    *
    * @param int|null $fixedRate 当字段type为\"FIXED_RATE\"时取该字段（当fixed_rate_unit单位为minute，最大值60；当fixed_rate_unit单位为hour，最大值24）。
    *
    * @return $this
    */
    public function setFixedRate($fixedRate)
    {
        $this->container['fixedRate'] = $fixedRate;
        return $this;
    }

    /**
    * Gets fixedRateUnit
    *  时间单位。
    *
    * @return string|null
    */
    public function getFixedRateUnit()
    {
        return $this->container['fixedRateUnit'];
    }

    /**
    * Sets fixedRateUnit
    *
    * @param string|null $fixedRateUnit 时间单位。
    *
    * @return $this
    */
    public function setFixedRateUnit($fixedRateUnit)
    {
        $this->container['fixedRateUnit'] = $fixedRateUnit;
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


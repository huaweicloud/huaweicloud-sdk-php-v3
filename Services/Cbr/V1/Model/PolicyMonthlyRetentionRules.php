<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyMonthlyRetentionRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyMonthlyRetentionRules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * retentionType  月备规则的类型
    * retentionWeeks  将每月第几个星期的备份设置为月备备份，当retention_type为Weekly时才能设置，设置时需要与days_of_week共同设置
    * daysOfWeek  设置选中的星期中的指定天的备份为月备备份，当retention_type为Weekly时才能设置，设置时需要与retention_weeks共同设置
    * daysOfMonth  表示将每个月中的指定天设置为月备备份，当retention_type为Monthly时才能设置，取值范围为1-28和-1，-1代表每个月的最后一天
    * retentionDurationPeriods  月备备份的保留时间，取值范围为1-1200，以及-1，单位为月，-1代表月备策略不启用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'retentionType' => 'string',
            'retentionWeeks' => 'string[]',
            'daysOfWeek' => 'string[]',
            'daysOfMonth' => 'int[]',
            'retentionDurationPeriods' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * retentionType  月备规则的类型
    * retentionWeeks  将每月第几个星期的备份设置为月备备份，当retention_type为Weekly时才能设置，设置时需要与days_of_week共同设置
    * daysOfWeek  设置选中的星期中的指定天的备份为月备备份，当retention_type为Weekly时才能设置，设置时需要与retention_weeks共同设置
    * daysOfMonth  表示将每个月中的指定天设置为月备备份，当retention_type为Monthly时才能设置，取值范围为1-28和-1，-1代表每个月的最后一天
    * retentionDurationPeriods  月备备份的保留时间，取值范围为1-1200，以及-1，单位为月，-1代表月备策略不启用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'retentionType' => null,
        'retentionWeeks' => null,
        'daysOfWeek' => null,
        'daysOfMonth' => 'int32',
        'retentionDurationPeriods' => 'int32'
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
    * retentionType  月备规则的类型
    * retentionWeeks  将每月第几个星期的备份设置为月备备份，当retention_type为Weekly时才能设置，设置时需要与days_of_week共同设置
    * daysOfWeek  设置选中的星期中的指定天的备份为月备备份，当retention_type为Weekly时才能设置，设置时需要与retention_weeks共同设置
    * daysOfMonth  表示将每个月中的指定天设置为月备备份，当retention_type为Monthly时才能设置，取值范围为1-28和-1，-1代表每个月的最后一天
    * retentionDurationPeriods  月备备份的保留时间，取值范围为1-1200，以及-1，单位为月，-1代表月备策略不启用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'retentionType' => 'retention_type',
            'retentionWeeks' => 'retention_weeks',
            'daysOfWeek' => 'days_of_week',
            'daysOfMonth' => 'days_of_month',
            'retentionDurationPeriods' => 'retention_duration_periods'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * retentionType  月备规则的类型
    * retentionWeeks  将每月第几个星期的备份设置为月备备份，当retention_type为Weekly时才能设置，设置时需要与days_of_week共同设置
    * daysOfWeek  设置选中的星期中的指定天的备份为月备备份，当retention_type为Weekly时才能设置，设置时需要与retention_weeks共同设置
    * daysOfMonth  表示将每个月中的指定天设置为月备备份，当retention_type为Monthly时才能设置，取值范围为1-28和-1，-1代表每个月的最后一天
    * retentionDurationPeriods  月备备份的保留时间，取值范围为1-1200，以及-1，单位为月，-1代表月备策略不启用
    *
    * @var string[]
    */
    protected static $setters = [
            'retentionType' => 'setRetentionType',
            'retentionWeeks' => 'setRetentionWeeks',
            'daysOfWeek' => 'setDaysOfWeek',
            'daysOfMonth' => 'setDaysOfMonth',
            'retentionDurationPeriods' => 'setRetentionDurationPeriods'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * retentionType  月备规则的类型
    * retentionWeeks  将每月第几个星期的备份设置为月备备份，当retention_type为Weekly时才能设置，设置时需要与days_of_week共同设置
    * daysOfWeek  设置选中的星期中的指定天的备份为月备备份，当retention_type为Weekly时才能设置，设置时需要与retention_weeks共同设置
    * daysOfMonth  表示将每个月中的指定天设置为月备备份，当retention_type为Monthly时才能设置，取值范围为1-28和-1，-1代表每个月的最后一天
    * retentionDurationPeriods  月备备份的保留时间，取值范围为1-1200，以及-1，单位为月，-1代表月备策略不启用
    *
    * @var string[]
    */
    protected static $getters = [
            'retentionType' => 'getRetentionType',
            'retentionWeeks' => 'getRetentionWeeks',
            'daysOfWeek' => 'getDaysOfWeek',
            'daysOfMonth' => 'getDaysOfMonth',
            'retentionDurationPeriods' => 'getRetentionDurationPeriods'
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
    const RETENTION_TYPE_WEEKLY = 'WEEKLY';
    const RETENTION_TYPE_MONTHLY = 'MONTHLY';
    const RETENTION_WEEKS_FIRST = 'FIRST';
    const RETENTION_WEEKS_SECOND = 'SECOND';
    const RETENTION_WEEKS_THIRD = 'THIRD';
    const RETENTION_WEEKS_FOURTH = 'FOURTH';
    const RETENTION_WEEKS_LAST = 'LAST';
    const DAYS_OF_WEEK_MO = 'MO';
    const DAYS_OF_WEEK_TU = 'TU';
    const DAYS_OF_WEEK_WE = 'WE';
    const DAYS_OF_WEEK_TH = 'TH';
    const DAYS_OF_WEEK_FR = 'FR';
    const DAYS_OF_WEEK_SA = 'SA';
    const DAYS_OF_WEEK_SU = 'SU';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRetentionTypeAllowableValues()
    {
        return [
            self::RETENTION_TYPE_WEEKLY,
            self::RETENTION_TYPE_MONTHLY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRetentionWeeksAllowableValues()
    {
        return [
            self::RETENTION_WEEKS_FIRST,
            self::RETENTION_WEEKS_SECOND,
            self::RETENTION_WEEKS_THIRD,
            self::RETENTION_WEEKS_FOURTH,
            self::RETENTION_WEEKS_LAST,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDaysOfWeekAllowableValues()
    {
        return [
            self::DAYS_OF_WEEK_MO,
            self::DAYS_OF_WEEK_TU,
            self::DAYS_OF_WEEK_WE,
            self::DAYS_OF_WEEK_TH,
            self::DAYS_OF_WEEK_FR,
            self::DAYS_OF_WEEK_SA,
            self::DAYS_OF_WEEK_SU,
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
        $this->container['retentionType'] = isset($data['retentionType']) ? $data['retentionType'] : null;
        $this->container['retentionWeeks'] = isset($data['retentionWeeks']) ? $data['retentionWeeks'] : null;
        $this->container['daysOfWeek'] = isset($data['daysOfWeek']) ? $data['daysOfWeek'] : null;
        $this->container['daysOfMonth'] = isset($data['daysOfMonth']) ? $data['daysOfMonth'] : null;
        $this->container['retentionDurationPeriods'] = isset($data['retentionDurationPeriods']) ? $data['retentionDurationPeriods'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRetentionTypeAllowableValues();
                if (!is_null($this->container['retentionType']) && !in_array($this->container['retentionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'retentionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['retentionDurationPeriods']) && ($this->container['retentionDurationPeriods'] > 1200)) {
                $invalidProperties[] = "invalid value for 'retentionDurationPeriods', must be smaller than or equal to 1200.";
            }
            if (!is_null($this->container['retentionDurationPeriods']) && ($this->container['retentionDurationPeriods'] < -1)) {
                $invalidProperties[] = "invalid value for 'retentionDurationPeriods', must be bigger than or equal to -1.";
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
    * Gets retentionType
    *  月备规则的类型
    *
    * @return string|null
    */
    public function getRetentionType()
    {
        return $this->container['retentionType'];
    }

    /**
    * Sets retentionType
    *
    * @param string|null $retentionType 月备规则的类型
    *
    * @return $this
    */
    public function setRetentionType($retentionType)
    {
        $this->container['retentionType'] = $retentionType;
        return $this;
    }

    /**
    * Gets retentionWeeks
    *  将每月第几个星期的备份设置为月备备份，当retention_type为Weekly时才能设置，设置时需要与days_of_week共同设置
    *
    * @return string[]|null
    */
    public function getRetentionWeeks()
    {
        return $this->container['retentionWeeks'];
    }

    /**
    * Sets retentionWeeks
    *
    * @param string[]|null $retentionWeeks 将每月第几个星期的备份设置为月备备份，当retention_type为Weekly时才能设置，设置时需要与days_of_week共同设置
    *
    * @return $this
    */
    public function setRetentionWeeks($retentionWeeks)
    {
        $this->container['retentionWeeks'] = $retentionWeeks;
        return $this;
    }

    /**
    * Gets daysOfWeek
    *  设置选中的星期中的指定天的备份为月备备份，当retention_type为Weekly时才能设置，设置时需要与retention_weeks共同设置
    *
    * @return string[]|null
    */
    public function getDaysOfWeek()
    {
        return $this->container['daysOfWeek'];
    }

    /**
    * Sets daysOfWeek
    *
    * @param string[]|null $daysOfWeek 设置选中的星期中的指定天的备份为月备备份，当retention_type为Weekly时才能设置，设置时需要与retention_weeks共同设置
    *
    * @return $this
    */
    public function setDaysOfWeek($daysOfWeek)
    {
        $this->container['daysOfWeek'] = $daysOfWeek;
        return $this;
    }

    /**
    * Gets daysOfMonth
    *  表示将每个月中的指定天设置为月备备份，当retention_type为Monthly时才能设置，取值范围为1-28和-1，-1代表每个月的最后一天
    *
    * @return int[]|null
    */
    public function getDaysOfMonth()
    {
        return $this->container['daysOfMonth'];
    }

    /**
    * Sets daysOfMonth
    *
    * @param int[]|null $daysOfMonth 表示将每个月中的指定天设置为月备备份，当retention_type为Monthly时才能设置，取值范围为1-28和-1，-1代表每个月的最后一天
    *
    * @return $this
    */
    public function setDaysOfMonth($daysOfMonth)
    {
        $this->container['daysOfMonth'] = $daysOfMonth;
        return $this;
    }

    /**
    * Gets retentionDurationPeriods
    *  月备备份的保留时间，取值范围为1-1200，以及-1，单位为月，-1代表月备策略不启用
    *
    * @return int|null
    */
    public function getRetentionDurationPeriods()
    {
        return $this->container['retentionDurationPeriods'];
    }

    /**
    * Sets retentionDurationPeriods
    *
    * @param int|null $retentionDurationPeriods 月备备份的保留时间，取值范围为1-1200，以及-1，单位为月，-1代表月备策略不启用
    *
    * @return $this
    */
    public function setRetentionDurationPeriods($retentionDurationPeriods)
    {
        $this->container['retentionDurationPeriods'] = $retentionDurationPeriods;
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


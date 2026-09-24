<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyWeeklyRetentionRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyWeeklyRetentionRules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * daysOfWeek  设置每个星期中的指定天为周备备份
    * retentionDurationPeriods  周备的保留时间，取值范围为1-5200，以及-1，单位为周，-1代表周备策略不启用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'daysOfWeek' => 'string[]',
            'retentionDurationPeriods' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * daysOfWeek  设置每个星期中的指定天为周备备份
    * retentionDurationPeriods  周备的保留时间，取值范围为1-5200，以及-1，单位为周，-1代表周备策略不启用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'daysOfWeek' => null,
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
    * daysOfWeek  设置每个星期中的指定天为周备备份
    * retentionDurationPeriods  周备的保留时间，取值范围为1-5200，以及-1，单位为周，-1代表周备策略不启用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'daysOfWeek' => 'days_of_week',
            'retentionDurationPeriods' => 'retention_duration_periods'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * daysOfWeek  设置每个星期中的指定天为周备备份
    * retentionDurationPeriods  周备的保留时间，取值范围为1-5200，以及-1，单位为周，-1代表周备策略不启用
    *
    * @var string[]
    */
    protected static $setters = [
            'daysOfWeek' => 'setDaysOfWeek',
            'retentionDurationPeriods' => 'setRetentionDurationPeriods'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * daysOfWeek  设置每个星期中的指定天为周备备份
    * retentionDurationPeriods  周备的保留时间，取值范围为1-5200，以及-1，单位为周，-1代表周备策略不启用
    *
    * @var string[]
    */
    protected static $getters = [
            'daysOfWeek' => 'getDaysOfWeek',
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
        $this->container['daysOfWeek'] = isset($data['daysOfWeek']) ? $data['daysOfWeek'] : null;
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
            if (!is_null($this->container['retentionDurationPeriods']) && ($this->container['retentionDurationPeriods'] > 5200)) {
                $invalidProperties[] = "invalid value for 'retentionDurationPeriods', must be smaller than or equal to 5200.";
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
    * Gets daysOfWeek
    *  设置每个星期中的指定天为周备备份
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
    * @param string[]|null $daysOfWeek 设置每个星期中的指定天为周备备份
    *
    * @return $this
    */
    public function setDaysOfWeek($daysOfWeek)
    {
        $this->container['daysOfWeek'] = $daysOfWeek;
        return $this;
    }

    /**
    * Gets retentionDurationPeriods
    *  周备的保留时间，取值范围为1-5200，以及-1，单位为周，-1代表周备策略不启用
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
    * @param int|null $retentionDurationPeriods 周备的保留时间，取值范围为1-5200，以及-1，单位为周，-1代表周备策略不启用
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


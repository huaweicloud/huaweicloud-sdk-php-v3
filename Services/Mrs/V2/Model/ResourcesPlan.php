<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourcesPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourcesPlan';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * periodType  资源计划的周期类型，当前只允许以下类型：  daily
    * startTime  资源计划的起始时间，格式为“hour:minute”，表示时间在0:00-23:59之间。
    * endTime  资源计划的结束时间，格式与“start_time”相同，不早于start_time表示的时间，且与start_time间隔不小于30min。
    * minCapacity  资源计划内该节点组的最小保留节点数。 取值范围：[0～500]
    * maxCapacity  资源计划内该节点组的最大保留节点数。 取值范围：[0～500]
    * effectiveDays  资源计划的生效日期，为空时代表每日，另外也可为以下返回值：  MONDAY（周一）、TUESDAY（周二）、WEDNESDAY（周三）、THURSDAY（周四）、FRIDAY（周五）、SATURDAY（周六）、SUNDAY（周日）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'periodType' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'minCapacity' => 'int',
            'maxCapacity' => 'int',
            'effectiveDays' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * periodType  资源计划的周期类型，当前只允许以下类型：  daily
    * startTime  资源计划的起始时间，格式为“hour:minute”，表示时间在0:00-23:59之间。
    * endTime  资源计划的结束时间，格式与“start_time”相同，不早于start_time表示的时间，且与start_time间隔不小于30min。
    * minCapacity  资源计划内该节点组的最小保留节点数。 取值范围：[0～500]
    * maxCapacity  资源计划内该节点组的最大保留节点数。 取值范围：[0～500]
    * effectiveDays  资源计划的生效日期，为空时代表每日，另外也可为以下返回值：  MONDAY（周一）、TUESDAY（周二）、WEDNESDAY（周三）、THURSDAY（周四）、FRIDAY（周五）、SATURDAY（周六）、SUNDAY（周日）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'periodType' => null,
        'startTime' => null,
        'endTime' => null,
        'minCapacity' => 'int32',
        'maxCapacity' => 'int32',
        'effectiveDays' => null
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
    * periodType  资源计划的周期类型，当前只允许以下类型：  daily
    * startTime  资源计划的起始时间，格式为“hour:minute”，表示时间在0:00-23:59之间。
    * endTime  资源计划的结束时间，格式与“start_time”相同，不早于start_time表示的时间，且与start_time间隔不小于30min。
    * minCapacity  资源计划内该节点组的最小保留节点数。 取值范围：[0～500]
    * maxCapacity  资源计划内该节点组的最大保留节点数。 取值范围：[0～500]
    * effectiveDays  资源计划的生效日期，为空时代表每日，另外也可为以下返回值：  MONDAY（周一）、TUESDAY（周二）、WEDNESDAY（周三）、THURSDAY（周四）、FRIDAY（周五）、SATURDAY（周六）、SUNDAY（周日）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'periodType' => 'period_type',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'minCapacity' => 'min_capacity',
            'maxCapacity' => 'max_capacity',
            'effectiveDays' => 'effective_days'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * periodType  资源计划的周期类型，当前只允许以下类型：  daily
    * startTime  资源计划的起始时间，格式为“hour:minute”，表示时间在0:00-23:59之间。
    * endTime  资源计划的结束时间，格式与“start_time”相同，不早于start_time表示的时间，且与start_time间隔不小于30min。
    * minCapacity  资源计划内该节点组的最小保留节点数。 取值范围：[0～500]
    * maxCapacity  资源计划内该节点组的最大保留节点数。 取值范围：[0～500]
    * effectiveDays  资源计划的生效日期，为空时代表每日，另外也可为以下返回值：  MONDAY（周一）、TUESDAY（周二）、WEDNESDAY（周三）、THURSDAY（周四）、FRIDAY（周五）、SATURDAY（周六）、SUNDAY（周日）
    *
    * @var string[]
    */
    protected static $setters = [
            'periodType' => 'setPeriodType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'minCapacity' => 'setMinCapacity',
            'maxCapacity' => 'setMaxCapacity',
            'effectiveDays' => 'setEffectiveDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * periodType  资源计划的周期类型，当前只允许以下类型：  daily
    * startTime  资源计划的起始时间，格式为“hour:minute”，表示时间在0:00-23:59之间。
    * endTime  资源计划的结束时间，格式与“start_time”相同，不早于start_time表示的时间，且与start_time间隔不小于30min。
    * minCapacity  资源计划内该节点组的最小保留节点数。 取值范围：[0～500]
    * maxCapacity  资源计划内该节点组的最大保留节点数。 取值范围：[0～500]
    * effectiveDays  资源计划的生效日期，为空时代表每日，另外也可为以下返回值：  MONDAY（周一）、TUESDAY（周二）、WEDNESDAY（周三）、THURSDAY（周四）、FRIDAY（周五）、SATURDAY（周六）、SUNDAY（周日）
    *
    * @var string[]
    */
    protected static $getters = [
            'periodType' => 'getPeriodType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'minCapacity' => 'getMinCapacity',
            'maxCapacity' => 'getMaxCapacity',
            'effectiveDays' => 'getEffectiveDays'
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
    const EFFECTIVE_DAYS_MONDAY = 'MONDAY';
    const EFFECTIVE_DAYS_TUESDAY = 'TUESDAY';
    const EFFECTIVE_DAYS_WEDNESDAY = 'WEDNESDAY';
    const EFFECTIVE_DAYS_THURSDAY = 'THURSDAY';
    const EFFECTIVE_DAYS_FRIDAY = 'FRIDAY';
    const EFFECTIVE_DAYS_SATURDAY = 'SATURDAY';
    const EFFECTIVE_DAYS_SUNDAY = 'SUNDAY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEffectiveDaysAllowableValues()
    {
        return [
            self::EFFECTIVE_DAYS_MONDAY,
            self::EFFECTIVE_DAYS_TUESDAY,
            self::EFFECTIVE_DAYS_WEDNESDAY,
            self::EFFECTIVE_DAYS_THURSDAY,
            self::EFFECTIVE_DAYS_FRIDAY,
            self::EFFECTIVE_DAYS_SATURDAY,
            self::EFFECTIVE_DAYS_SUNDAY,
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
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['minCapacity'] = isset($data['minCapacity']) ? $data['minCapacity'] : null;
        $this->container['maxCapacity'] = isset($data['maxCapacity']) ? $data['maxCapacity'] : null;
        $this->container['effectiveDays'] = isset($data['effectiveDays']) ? $data['effectiveDays'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['minCapacity'] === null) {
            $invalidProperties[] = "'minCapacity' can't be null";
        }
            if (($this->container['minCapacity'] > 500)) {
                $invalidProperties[] = "invalid value for 'minCapacity', must be smaller than or equal to 500.";
            }
            if (($this->container['minCapacity'] < 0)) {
                $invalidProperties[] = "invalid value for 'minCapacity', must be bigger than or equal to 0.";
            }
        if ($this->container['maxCapacity'] === null) {
            $invalidProperties[] = "'maxCapacity' can't be null";
        }
            if (($this->container['maxCapacity'] > 500)) {
                $invalidProperties[] = "invalid value for 'maxCapacity', must be smaller than or equal to 500.";
            }
            if (($this->container['maxCapacity'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxCapacity', must be bigger than or equal to 0.";
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
    * Gets periodType
    *  资源计划的周期类型，当前只允许以下类型：  daily
    *
    * @return string
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string $periodType 资源计划的周期类型，当前只允许以下类型：  daily
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets startTime
    *  资源计划的起始时间，格式为“hour:minute”，表示时间在0:00-23:59之间。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 资源计划的起始时间，格式为“hour:minute”，表示时间在0:00-23:59之间。
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
    *  资源计划的结束时间，格式与“start_time”相同，不早于start_time表示的时间，且与start_time间隔不小于30min。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 资源计划的结束时间，格式与“start_time”相同，不早于start_time表示的时间，且与start_time间隔不小于30min。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets minCapacity
    *  资源计划内该节点组的最小保留节点数。 取值范围：[0～500]
    *
    * @return int
    */
    public function getMinCapacity()
    {
        return $this->container['minCapacity'];
    }

    /**
    * Sets minCapacity
    *
    * @param int $minCapacity 资源计划内该节点组的最小保留节点数。 取值范围：[0～500]
    *
    * @return $this
    */
    public function setMinCapacity($minCapacity)
    {
        $this->container['minCapacity'] = $minCapacity;
        return $this;
    }

    /**
    * Gets maxCapacity
    *  资源计划内该节点组的最大保留节点数。 取值范围：[0～500]
    *
    * @return int
    */
    public function getMaxCapacity()
    {
        return $this->container['maxCapacity'];
    }

    /**
    * Sets maxCapacity
    *
    * @param int $maxCapacity 资源计划内该节点组的最大保留节点数。 取值范围：[0～500]
    *
    * @return $this
    */
    public function setMaxCapacity($maxCapacity)
    {
        $this->container['maxCapacity'] = $maxCapacity;
        return $this;
    }

    /**
    * Gets effectiveDays
    *  资源计划的生效日期，为空时代表每日，另外也可为以下返回值：  MONDAY（周一）、TUESDAY（周二）、WEDNESDAY（周三）、THURSDAY（周四）、FRIDAY（周五）、SATURDAY（周六）、SUNDAY（周日）
    *
    * @return string[]|null
    */
    public function getEffectiveDays()
    {
        return $this->container['effectiveDays'];
    }

    /**
    * Sets effectiveDays
    *
    * @param string[]|null $effectiveDays 资源计划的生效日期，为空时代表每日，另外也可为以下返回值：  MONDAY（周一）、TUESDAY（周二）、WEDNESDAY（周三）、THURSDAY（周四）、FRIDAY（周五）、SATURDAY（周六）、SUNDAY（周日）
    *
    * @return $this
    */
    public function setEffectiveDays($effectiveDays)
    {
        $this->container['effectiveDays'] = $effectiveDays;
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


<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduledPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduledPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * launchTime  触发时间，遵循UTC时间。如果scaling_policy_type为SCHEDULED，则格式为：YYYY-MM-DDThh:mmZ。如果scaling_policy_type为RECURRENCE，则格式为：hh:mm。
    * recurrenceType  周期触发类型，scaling_policy_type为RECURRENCE时该项必选。Daily：每天执行一次。Weekly：每周指定天执行一次。Monthly：每月指定天执行一次。
    * recurrenceValue  周期触发任务数值，scaling_policy_type为RECURRENCE时该项必选。类型为Daily时，该字段为null，表示每天执行类型为Weekly时，该字段取值范围为1-7，1表示星期日，以此类推，以”,”分割，例如：1,3,5。类型为Monthly时，该字段取值范围为1-31，分别表示每月的日期，以“,”分割，例如：1,10,13,28。 说明： - 当recurrence_type类型为Daily时，recurrence_value参数不生效。
    * startTime  周期策略重复执行开始时间，遵循UTC时间。默认为当前时间，格式为：YYYY-MM-DDThh：mZ
    * endTime  周期策略重复执行结束时间，遵循UTC时间，scaling_policy_type为RECURRENCE时该项必选。当为周期类型策略时，不得早于当前时间和开始时间。格式为：YYYY-MM-DDThh：mmZ
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'launchTime' => 'string',
            'recurrenceType' => 'string',
            'recurrenceValue' => 'string',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * launchTime  触发时间，遵循UTC时间。如果scaling_policy_type为SCHEDULED，则格式为：YYYY-MM-DDThh:mmZ。如果scaling_policy_type为RECURRENCE，则格式为：hh:mm。
    * recurrenceType  周期触发类型，scaling_policy_type为RECURRENCE时该项必选。Daily：每天执行一次。Weekly：每周指定天执行一次。Monthly：每月指定天执行一次。
    * recurrenceValue  周期触发任务数值，scaling_policy_type为RECURRENCE时该项必选。类型为Daily时，该字段为null，表示每天执行类型为Weekly时，该字段取值范围为1-7，1表示星期日，以此类推，以”,”分割，例如：1,3,5。类型为Monthly时，该字段取值范围为1-31，分别表示每月的日期，以“,”分割，例如：1,10,13,28。 说明： - 当recurrence_type类型为Daily时，recurrence_value参数不生效。
    * startTime  周期策略重复执行开始时间，遵循UTC时间。默认为当前时间，格式为：YYYY-MM-DDThh：mZ
    * endTime  周期策略重复执行结束时间，遵循UTC时间，scaling_policy_type为RECURRENCE时该项必选。当为周期类型策略时，不得早于当前时间和开始时间。格式为：YYYY-MM-DDThh：mmZ
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'launchTime' => null,
        'recurrenceType' => null,
        'recurrenceValue' => null,
        'startTime' => null,
        'endTime' => null
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
    * launchTime  触发时间，遵循UTC时间。如果scaling_policy_type为SCHEDULED，则格式为：YYYY-MM-DDThh:mmZ。如果scaling_policy_type为RECURRENCE，则格式为：hh:mm。
    * recurrenceType  周期触发类型，scaling_policy_type为RECURRENCE时该项必选。Daily：每天执行一次。Weekly：每周指定天执行一次。Monthly：每月指定天执行一次。
    * recurrenceValue  周期触发任务数值，scaling_policy_type为RECURRENCE时该项必选。类型为Daily时，该字段为null，表示每天执行类型为Weekly时，该字段取值范围为1-7，1表示星期日，以此类推，以”,”分割，例如：1,3,5。类型为Monthly时，该字段取值范围为1-31，分别表示每月的日期，以“,”分割，例如：1,10,13,28。 说明： - 当recurrence_type类型为Daily时，recurrence_value参数不生效。
    * startTime  周期策略重复执行开始时间，遵循UTC时间。默认为当前时间，格式为：YYYY-MM-DDThh：mZ
    * endTime  周期策略重复执行结束时间，遵循UTC时间，scaling_policy_type为RECURRENCE时该项必选。当为周期类型策略时，不得早于当前时间和开始时间。格式为：YYYY-MM-DDThh：mmZ
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'launchTime' => 'launch_time',
            'recurrenceType' => 'recurrence_type',
            'recurrenceValue' => 'recurrence_value',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * launchTime  触发时间，遵循UTC时间。如果scaling_policy_type为SCHEDULED，则格式为：YYYY-MM-DDThh:mmZ。如果scaling_policy_type为RECURRENCE，则格式为：hh:mm。
    * recurrenceType  周期触发类型，scaling_policy_type为RECURRENCE时该项必选。Daily：每天执行一次。Weekly：每周指定天执行一次。Monthly：每月指定天执行一次。
    * recurrenceValue  周期触发任务数值，scaling_policy_type为RECURRENCE时该项必选。类型为Daily时，该字段为null，表示每天执行类型为Weekly时，该字段取值范围为1-7，1表示星期日，以此类推，以”,”分割，例如：1,3,5。类型为Monthly时，该字段取值范围为1-31，分别表示每月的日期，以“,”分割，例如：1,10,13,28。 说明： - 当recurrence_type类型为Daily时，recurrence_value参数不生效。
    * startTime  周期策略重复执行开始时间，遵循UTC时间。默认为当前时间，格式为：YYYY-MM-DDThh：mZ
    * endTime  周期策略重复执行结束时间，遵循UTC时间，scaling_policy_type为RECURRENCE时该项必选。当为周期类型策略时，不得早于当前时间和开始时间。格式为：YYYY-MM-DDThh：mmZ
    *
    * @var string[]
    */
    protected static $setters = [
            'launchTime' => 'setLaunchTime',
            'recurrenceType' => 'setRecurrenceType',
            'recurrenceValue' => 'setRecurrenceValue',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * launchTime  触发时间，遵循UTC时间。如果scaling_policy_type为SCHEDULED，则格式为：YYYY-MM-DDThh:mmZ。如果scaling_policy_type为RECURRENCE，则格式为：hh:mm。
    * recurrenceType  周期触发类型，scaling_policy_type为RECURRENCE时该项必选。Daily：每天执行一次。Weekly：每周指定天执行一次。Monthly：每月指定天执行一次。
    * recurrenceValue  周期触发任务数值，scaling_policy_type为RECURRENCE时该项必选。类型为Daily时，该字段为null，表示每天执行类型为Weekly时，该字段取值范围为1-7，1表示星期日，以此类推，以”,”分割，例如：1,3,5。类型为Monthly时，该字段取值范围为1-31，分别表示每月的日期，以“,”分割，例如：1,10,13,28。 说明： - 当recurrence_type类型为Daily时，recurrence_value参数不生效。
    * startTime  周期策略重复执行开始时间，遵循UTC时间。默认为当前时间，格式为：YYYY-MM-DDThh：mZ
    * endTime  周期策略重复执行结束时间，遵循UTC时间，scaling_policy_type为RECURRENCE时该项必选。当为周期类型策略时，不得早于当前时间和开始时间。格式为：YYYY-MM-DDThh：mmZ
    *
    * @var string[]
    */
    protected static $getters = [
            'launchTime' => 'getLaunchTime',
            'recurrenceType' => 'getRecurrenceType',
            'recurrenceValue' => 'getRecurrenceValue',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
    const RECURRENCE_TYPE_DAILY = 'Daily';
    const RECURRENCE_TYPE_WEEKLY = 'Weekly';
    const RECURRENCE_TYPE_MONTHLY = 'Monthly';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRecurrenceTypeAllowableValues()
    {
        return [
            self::RECURRENCE_TYPE_DAILY,
            self::RECURRENCE_TYPE_WEEKLY,
            self::RECURRENCE_TYPE_MONTHLY,
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
        $this->container['launchTime'] = isset($data['launchTime']) ? $data['launchTime'] : null;
        $this->container['recurrenceType'] = isset($data['recurrenceType']) ? $data['recurrenceType'] : null;
        $this->container['recurrenceValue'] = isset($data['recurrenceValue']) ? $data['recurrenceValue'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['launchTime'] === null) {
            $invalidProperties[] = "'launchTime' can't be null";
        }
            $allowedValues = $this->getRecurrenceTypeAllowableValues();
                if (!is_null($this->container['recurrenceType']) && !in_array($this->container['recurrenceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'recurrenceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['recurrenceValue']) && (mb_strlen($this->container['recurrenceValue']) > 64)) {
                $invalidProperties[] = "invalid value for 'recurrenceValue', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['recurrenceValue']) && (mb_strlen($this->container['recurrenceValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'recurrenceValue', the character length must be bigger than or equal to 1.";
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
    * Gets launchTime
    *  触发时间，遵循UTC时间。如果scaling_policy_type为SCHEDULED，则格式为：YYYY-MM-DDThh:mmZ。如果scaling_policy_type为RECURRENCE，则格式为：hh:mm。
    *
    * @return string
    */
    public function getLaunchTime()
    {
        return $this->container['launchTime'];
    }

    /**
    * Sets launchTime
    *
    * @param string $launchTime 触发时间，遵循UTC时间。如果scaling_policy_type为SCHEDULED，则格式为：YYYY-MM-DDThh:mmZ。如果scaling_policy_type为RECURRENCE，则格式为：hh:mm。
    *
    * @return $this
    */
    public function setLaunchTime($launchTime)
    {
        $this->container['launchTime'] = $launchTime;
        return $this;
    }

    /**
    * Gets recurrenceType
    *  周期触发类型，scaling_policy_type为RECURRENCE时该项必选。Daily：每天执行一次。Weekly：每周指定天执行一次。Monthly：每月指定天执行一次。
    *
    * @return string|null
    */
    public function getRecurrenceType()
    {
        return $this->container['recurrenceType'];
    }

    /**
    * Sets recurrenceType
    *
    * @param string|null $recurrenceType 周期触发类型，scaling_policy_type为RECURRENCE时该项必选。Daily：每天执行一次。Weekly：每周指定天执行一次。Monthly：每月指定天执行一次。
    *
    * @return $this
    */
    public function setRecurrenceType($recurrenceType)
    {
        $this->container['recurrenceType'] = $recurrenceType;
        return $this;
    }

    /**
    * Gets recurrenceValue
    *  周期触发任务数值，scaling_policy_type为RECURRENCE时该项必选。类型为Daily时，该字段为null，表示每天执行类型为Weekly时，该字段取值范围为1-7，1表示星期日，以此类推，以”,”分割，例如：1,3,5。类型为Monthly时，该字段取值范围为1-31，分别表示每月的日期，以“,”分割，例如：1,10,13,28。 说明： - 当recurrence_type类型为Daily时，recurrence_value参数不生效。
    *
    * @return string|null
    */
    public function getRecurrenceValue()
    {
        return $this->container['recurrenceValue'];
    }

    /**
    * Sets recurrenceValue
    *
    * @param string|null $recurrenceValue 周期触发任务数值，scaling_policy_type为RECURRENCE时该项必选。类型为Daily时，该字段为null，表示每天执行类型为Weekly时，该字段取值范围为1-7，1表示星期日，以此类推，以”,”分割，例如：1,3,5。类型为Monthly时，该字段取值范围为1-31，分别表示每月的日期，以“,”分割，例如：1,10,13,28。 说明： - 当recurrence_type类型为Daily时，recurrence_value参数不生效。
    *
    * @return $this
    */
    public function setRecurrenceValue($recurrenceValue)
    {
        $this->container['recurrenceValue'] = $recurrenceValue;
        return $this;
    }

    /**
    * Gets startTime
    *  周期策略重复执行开始时间，遵循UTC时间。默认为当前时间，格式为：YYYY-MM-DDThh：mZ
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 周期策略重复执行开始时间，遵循UTC时间。默认为当前时间，格式为：YYYY-MM-DDThh：mZ
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
    *  周期策略重复执行结束时间，遵循UTC时间，scaling_policy_type为RECURRENCE时该项必选。当为周期类型策略时，不得早于当前时间和开始时间。格式为：YYYY-MM-DDThh：mmZ
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 周期策略重复执行结束时间，遵循UTC时间，scaling_policy_type为RECURRENCE时该项必选。当为周期类型策略时，不得早于当前时间和开始时间。格式为：YYYY-MM-DDThh：mmZ
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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


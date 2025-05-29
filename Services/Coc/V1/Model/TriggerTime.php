<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TriggerTime implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TriggerTime';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timeZone  时区
    * policy  策略
    * singleScheduledTime  单次执行的执行时间戳
    * periodicScheduledTime  周期执行的执行当天的时间 \"00:00:00\"
    * period  周期执行时的具体星期列表按逗号分割, 如星期日为\"1\",星期一为\"2\"
    * cron  cron表达式
    * scheduledCloseTime  定时任务规则截止日期时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timeZone' => 'string',
            'policy' => 'string',
            'singleScheduledTime' => 'int',
            'periodicScheduledTime' => 'string',
            'period' => 'string',
            'cron' => 'string',
            'scheduledCloseTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timeZone  时区
    * policy  策略
    * singleScheduledTime  单次执行的执行时间戳
    * periodicScheduledTime  周期执行的执行当天的时间 \"00:00:00\"
    * period  周期执行时的具体星期列表按逗号分割, 如星期日为\"1\",星期一为\"2\"
    * cron  cron表达式
    * scheduledCloseTime  定时任务规则截止日期时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timeZone' => null,
        'policy' => null,
        'singleScheduledTime' => 'int64',
        'periodicScheduledTime' => null,
        'period' => null,
        'cron' => null,
        'scheduledCloseTime' => 'int64'
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
    * timeZone  时区
    * policy  策略
    * singleScheduledTime  单次执行的执行时间戳
    * periodicScheduledTime  周期执行的执行当天的时间 \"00:00:00\"
    * period  周期执行时的具体星期列表按逗号分割, 如星期日为\"1\",星期一为\"2\"
    * cron  cron表达式
    * scheduledCloseTime  定时任务规则截止日期时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timeZone' => 'time_zone',
            'policy' => 'policy',
            'singleScheduledTime' => 'single_scheduled_time',
            'periodicScheduledTime' => 'periodic_scheduled_time',
            'period' => 'period',
            'cron' => 'cron',
            'scheduledCloseTime' => 'scheduled_close_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timeZone  时区
    * policy  策略
    * singleScheduledTime  单次执行的执行时间戳
    * periodicScheduledTime  周期执行的执行当天的时间 \"00:00:00\"
    * period  周期执行时的具体星期列表按逗号分割, 如星期日为\"1\",星期一为\"2\"
    * cron  cron表达式
    * scheduledCloseTime  定时任务规则截止日期时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'timeZone' => 'setTimeZone',
            'policy' => 'setPolicy',
            'singleScheduledTime' => 'setSingleScheduledTime',
            'periodicScheduledTime' => 'setPeriodicScheduledTime',
            'period' => 'setPeriod',
            'cron' => 'setCron',
            'scheduledCloseTime' => 'setScheduledCloseTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timeZone  时区
    * policy  策略
    * singleScheduledTime  单次执行的执行时间戳
    * periodicScheduledTime  周期执行的执行当天的时间 \"00:00:00\"
    * period  周期执行时的具体星期列表按逗号分割, 如星期日为\"1\",星期一为\"2\"
    * cron  cron表达式
    * scheduledCloseTime  定时任务规则截止日期时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'timeZone' => 'getTimeZone',
            'policy' => 'getPolicy',
            'singleScheduledTime' => 'getSingleScheduledTime',
            'periodicScheduledTime' => 'getPeriodicScheduledTime',
            'period' => 'getPeriod',
            'cron' => 'getCron',
            'scheduledCloseTime' => 'getScheduledCloseTime'
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
    const POLICY_PERIODIC = 'PERIODIC';
    const POLICY_ONCE = 'ONCE';
    const POLICY_CRON = 'CRON';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPolicyAllowableValues()
    {
        return [
            self::POLICY_PERIODIC,
            self::POLICY_ONCE,
            self::POLICY_CRON,
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
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['singleScheduledTime'] = isset($data['singleScheduledTime']) ? $data['singleScheduledTime'] : null;
        $this->container['periodicScheduledTime'] = isset($data['periodicScheduledTime']) ? $data['periodicScheduledTime'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['cron'] = isset($data['cron']) ? $data['cron'] : null;
        $this->container['scheduledCloseTime'] = isset($data['scheduledCloseTime']) ? $data['scheduledCloseTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['timeZone'] === null) {
            $invalidProperties[] = "'timeZone' can't be null";
        }
            if ((mb_strlen($this->container['timeZone']) > 128)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['timeZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['policy'] === null) {
            $invalidProperties[] = "'policy' can't be null";
        }
            $allowedValues = $this->getPolicyAllowableValues();
                if (!is_null($this->container['policy']) && !in_array($this->container['policy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'policy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['policy']) > 32)) {
                $invalidProperties[] = "invalid value for 'policy', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['policy']) < 1)) {
                $invalidProperties[] = "invalid value for 'policy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['singleScheduledTime']) && ($this->container['singleScheduledTime'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'singleScheduledTime', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['singleScheduledTime']) && ($this->container['singleScheduledTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'singleScheduledTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['periodicScheduledTime']) && (mb_strlen($this->container['periodicScheduledTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'periodicScheduledTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['periodicScheduledTime']) && (mb_strlen($this->container['periodicScheduledTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'periodicScheduledTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['period']) && (mb_strlen($this->container['period']) > 256)) {
                $invalidProperties[] = "invalid value for 'period', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['period']) && (mb_strlen($this->container['period']) < 0)) {
                $invalidProperties[] = "invalid value for 'period', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cron']) && (mb_strlen($this->container['cron']) > 256)) {
                $invalidProperties[] = "invalid value for 'cron', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['cron']) && (mb_strlen($this->container['cron']) < 0)) {
                $invalidProperties[] = "invalid value for 'cron', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scheduledCloseTime']) && ($this->container['scheduledCloseTime'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'scheduledCloseTime', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['scheduledCloseTime']) && ($this->container['scheduledCloseTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scheduledCloseTime', must be bigger than or equal to 0.";
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
    * Gets timeZone
    *  时区
    *
    * @return string
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string $timeZone 时区
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets policy
    *  策略
    *
    * @return string
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param string $policy 策略
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets singleScheduledTime
    *  单次执行的执行时间戳
    *
    * @return int|null
    */
    public function getSingleScheduledTime()
    {
        return $this->container['singleScheduledTime'];
    }

    /**
    * Sets singleScheduledTime
    *
    * @param int|null $singleScheduledTime 单次执行的执行时间戳
    *
    * @return $this
    */
    public function setSingleScheduledTime($singleScheduledTime)
    {
        $this->container['singleScheduledTime'] = $singleScheduledTime;
        return $this;
    }

    /**
    * Gets periodicScheduledTime
    *  周期执行的执行当天的时间 \"00:00:00\"
    *
    * @return string|null
    */
    public function getPeriodicScheduledTime()
    {
        return $this->container['periodicScheduledTime'];
    }

    /**
    * Sets periodicScheduledTime
    *
    * @param string|null $periodicScheduledTime 周期执行的执行当天的时间 \"00:00:00\"
    *
    * @return $this
    */
    public function setPeriodicScheduledTime($periodicScheduledTime)
    {
        $this->container['periodicScheduledTime'] = $periodicScheduledTime;
        return $this;
    }

    /**
    * Gets period
    *  周期执行时的具体星期列表按逗号分割, 如星期日为\"1\",星期一为\"2\"
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 周期执行时的具体星期列表按逗号分割, 如星期日为\"1\",星期一为\"2\"
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets cron
    *  cron表达式
    *
    * @return string|null
    */
    public function getCron()
    {
        return $this->container['cron'];
    }

    /**
    * Sets cron
    *
    * @param string|null $cron cron表达式
    *
    * @return $this
    */
    public function setCron($cron)
    {
        $this->container['cron'] = $cron;
        return $this;
    }

    /**
    * Gets scheduledCloseTime
    *  定时任务规则截止日期时间戳
    *
    * @return int|null
    */
    public function getScheduledCloseTime()
    {
        return $this->container['scheduledCloseTime'];
    }

    /**
    * Sets scheduledCloseTime
    *
    * @param int|null $scheduledCloseTime 定时任务规则截止日期时间戳
    *
    * @return $this
    */
    public function setScheduledCloseTime($scheduledCloseTime)
    {
        $this->container['scheduledCloseTime'] = $scheduledCloseTime;
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


<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueuePlanRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueuePlanRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * planName  队列扩缩容计划名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。
    * targetCu  队列扩缩容计划CU的目标值
    * startHour  队列扩缩容计划起始小时时间
    * startMinute  队列扩缩容计划的起始分钟时间
    * repeatDay  定时扩缩容计划的重复周期规律，可以选择周一到周日的某一天、某几天、或者不选择。如果不选择，则会在当前时间后的start_hour：start_minute时间点执行扩缩容计划。如：\"repeat_day\": [\"MONDAY\", \"TUESDAY\", \"WEDNESDAY\",\"SUNDAY\"]
    * validDateBegin  有效期开始时间（13位时间戳）
    * validDateEnd  有效期结束时间（13位时间戳）
    * activate  当前设置的扩缩容计划是否激活，默认为激活
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'planName' => 'string',
            'targetCu' => 'int',
            'startHour' => 'int',
            'startMinute' => 'int',
            'repeatDay' => 'string[]',
            'validDateBegin' => 'int',
            'validDateEnd' => 'int',
            'activate' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * planName  队列扩缩容计划名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。
    * targetCu  队列扩缩容计划CU的目标值
    * startHour  队列扩缩容计划起始小时时间
    * startMinute  队列扩缩容计划的起始分钟时间
    * repeatDay  定时扩缩容计划的重复周期规律，可以选择周一到周日的某一天、某几天、或者不选择。如果不选择，则会在当前时间后的start_hour：start_minute时间点执行扩缩容计划。如：\"repeat_day\": [\"MONDAY\", \"TUESDAY\", \"WEDNESDAY\",\"SUNDAY\"]
    * validDateBegin  有效期开始时间（13位时间戳）
    * validDateEnd  有效期结束时间（13位时间戳）
    * activate  当前设置的扩缩容计划是否激活，默认为激活
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'planName' => null,
        'targetCu' => 'int32',
        'startHour' => 'int32',
        'startMinute' => 'int32',
        'repeatDay' => null,
        'validDateBegin' => 'int64',
        'validDateEnd' => 'int64',
        'activate' => null
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
    * planName  队列扩缩容计划名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。
    * targetCu  队列扩缩容计划CU的目标值
    * startHour  队列扩缩容计划起始小时时间
    * startMinute  队列扩缩容计划的起始分钟时间
    * repeatDay  定时扩缩容计划的重复周期规律，可以选择周一到周日的某一天、某几天、或者不选择。如果不选择，则会在当前时间后的start_hour：start_minute时间点执行扩缩容计划。如：\"repeat_day\": [\"MONDAY\", \"TUESDAY\", \"WEDNESDAY\",\"SUNDAY\"]
    * validDateBegin  有效期开始时间（13位时间戳）
    * validDateEnd  有效期结束时间（13位时间戳）
    * activate  当前设置的扩缩容计划是否激活，默认为激活
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'planName' => 'plan_name',
            'targetCu' => 'target_cu',
            'startHour' => 'start_hour',
            'startMinute' => 'start_minute',
            'repeatDay' => 'repeat_day',
            'validDateBegin' => 'valid_date_begin',
            'validDateEnd' => 'valid_date_end',
            'activate' => 'activate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * planName  队列扩缩容计划名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。
    * targetCu  队列扩缩容计划CU的目标值
    * startHour  队列扩缩容计划起始小时时间
    * startMinute  队列扩缩容计划的起始分钟时间
    * repeatDay  定时扩缩容计划的重复周期规律，可以选择周一到周日的某一天、某几天、或者不选择。如果不选择，则会在当前时间后的start_hour：start_minute时间点执行扩缩容计划。如：\"repeat_day\": [\"MONDAY\", \"TUESDAY\", \"WEDNESDAY\",\"SUNDAY\"]
    * validDateBegin  有效期开始时间（13位时间戳）
    * validDateEnd  有效期结束时间（13位时间戳）
    * activate  当前设置的扩缩容计划是否激活，默认为激活
    *
    * @var string[]
    */
    protected static $setters = [
            'planName' => 'setPlanName',
            'targetCu' => 'setTargetCu',
            'startHour' => 'setStartHour',
            'startMinute' => 'setStartMinute',
            'repeatDay' => 'setRepeatDay',
            'validDateBegin' => 'setValidDateBegin',
            'validDateEnd' => 'setValidDateEnd',
            'activate' => 'setActivate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * planName  队列扩缩容计划名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。
    * targetCu  队列扩缩容计划CU的目标值
    * startHour  队列扩缩容计划起始小时时间
    * startMinute  队列扩缩容计划的起始分钟时间
    * repeatDay  定时扩缩容计划的重复周期规律，可以选择周一到周日的某一天、某几天、或者不选择。如果不选择，则会在当前时间后的start_hour：start_minute时间点执行扩缩容计划。如：\"repeat_day\": [\"MONDAY\", \"TUESDAY\", \"WEDNESDAY\",\"SUNDAY\"]
    * validDateBegin  有效期开始时间（13位时间戳）
    * validDateEnd  有效期结束时间（13位时间戳）
    * activate  当前设置的扩缩容计划是否激活，默认为激活
    *
    * @var string[]
    */
    protected static $getters = [
            'planName' => 'getPlanName',
            'targetCu' => 'getTargetCu',
            'startHour' => 'getStartHour',
            'startMinute' => 'getStartMinute',
            'repeatDay' => 'getRepeatDay',
            'validDateBegin' => 'getValidDateBegin',
            'validDateEnd' => 'getValidDateEnd',
            'activate' => 'getActivate'
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
    const REPEAT_DAY_SUNDAY = 'SUNDAY';
    const REPEAT_DAY_MONDAY = 'MONDAY';
    const REPEAT_DAY_TUESDAY = 'TUESDAY';
    const REPEAT_DAY_WEDNESDAY = 'WEDNESDAY';
    const REPEAT_DAY_THURSDAY = 'THURSDAY';
    const REPEAT_DAY_FRIDAY = 'FRIDAY';
    const REPEAT_DAY_SATURDAY = 'SATURDAY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRepeatDayAllowableValues()
    {
        return [
            self::REPEAT_DAY_SUNDAY,
            self::REPEAT_DAY_MONDAY,
            self::REPEAT_DAY_TUESDAY,
            self::REPEAT_DAY_WEDNESDAY,
            self::REPEAT_DAY_THURSDAY,
            self::REPEAT_DAY_FRIDAY,
            self::REPEAT_DAY_SATURDAY,
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
        $this->container['planName'] = isset($data['planName']) ? $data['planName'] : null;
        $this->container['targetCu'] = isset($data['targetCu']) ? $data['targetCu'] : null;
        $this->container['startHour'] = isset($data['startHour']) ? $data['startHour'] : null;
        $this->container['startMinute'] = isset($data['startMinute']) ? $data['startMinute'] : null;
        $this->container['repeatDay'] = isset($data['repeatDay']) ? $data['repeatDay'] : null;
        $this->container['validDateBegin'] = isset($data['validDateBegin']) ? $data['validDateBegin'] : null;
        $this->container['validDateEnd'] = isset($data['validDateEnd']) ? $data['validDateEnd'] : null;
        $this->container['activate'] = isset($data['activate']) ? $data['activate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['planName'] === null) {
            $invalidProperties[] = "'planName' can't be null";
        }
            if ((mb_strlen($this->container['planName']) > 128)) {
                $invalidProperties[] = "invalid value for 'planName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['planName']) < 1)) {
                $invalidProperties[] = "invalid value for 'planName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$/", $this->container['planName'])) {
                $invalidProperties[] = "invalid value for 'planName', must be conform to the pattern /^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$/.";
            }
        if ($this->container['targetCu'] === null) {
            $invalidProperties[] = "'targetCu' can't be null";
        }
            if (($this->container['targetCu'] < 16)) {
                $invalidProperties[] = "invalid value for 'targetCu', must be bigger than or equal to 16.";
            }
        if ($this->container['startHour'] === null) {
            $invalidProperties[] = "'startHour' can't be null";
        }
            if (($this->container['startHour'] > 23)) {
                $invalidProperties[] = "invalid value for 'startHour', must be smaller than or equal to 23.";
            }
            if (($this->container['startHour'] < 0)) {
                $invalidProperties[] = "invalid value for 'startHour', must be bigger than or equal to 0.";
            }
        if ($this->container['startMinute'] === null) {
            $invalidProperties[] = "'startMinute' can't be null";
        }
            if (($this->container['startMinute'] > 59)) {
                $invalidProperties[] = "invalid value for 'startMinute', must be smaller than or equal to 59.";
            }
            if (($this->container['startMinute'] < 0)) {
                $invalidProperties[] = "invalid value for 'startMinute', must be bigger than or equal to 0.";
            }
        if ($this->container['repeatDay'] === null) {
            $invalidProperties[] = "'repeatDay' can't be null";
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
    * Gets planName
    *  队列扩缩容计划名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。
    *
    * @return string
    */
    public function getPlanName()
    {
        return $this->container['planName'];
    }

    /**
    * Sets planName
    *
    * @param string $planName 队列扩缩容计划名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。
    *
    * @return $this
    */
    public function setPlanName($planName)
    {
        $this->container['planName'] = $planName;
        return $this;
    }

    /**
    * Gets targetCu
    *  队列扩缩容计划CU的目标值
    *
    * @return int
    */
    public function getTargetCu()
    {
        return $this->container['targetCu'];
    }

    /**
    * Sets targetCu
    *
    * @param int $targetCu 队列扩缩容计划CU的目标值
    *
    * @return $this
    */
    public function setTargetCu($targetCu)
    {
        $this->container['targetCu'] = $targetCu;
        return $this;
    }

    /**
    * Gets startHour
    *  队列扩缩容计划起始小时时间
    *
    * @return int
    */
    public function getStartHour()
    {
        return $this->container['startHour'];
    }

    /**
    * Sets startHour
    *
    * @param int $startHour 队列扩缩容计划起始小时时间
    *
    * @return $this
    */
    public function setStartHour($startHour)
    {
        $this->container['startHour'] = $startHour;
        return $this;
    }

    /**
    * Gets startMinute
    *  队列扩缩容计划的起始分钟时间
    *
    * @return int
    */
    public function getStartMinute()
    {
        return $this->container['startMinute'];
    }

    /**
    * Sets startMinute
    *
    * @param int $startMinute 队列扩缩容计划的起始分钟时间
    *
    * @return $this
    */
    public function setStartMinute($startMinute)
    {
        $this->container['startMinute'] = $startMinute;
        return $this;
    }

    /**
    * Gets repeatDay
    *  定时扩缩容计划的重复周期规律，可以选择周一到周日的某一天、某几天、或者不选择。如果不选择，则会在当前时间后的start_hour：start_minute时间点执行扩缩容计划。如：\"repeat_day\": [\"MONDAY\", \"TUESDAY\", \"WEDNESDAY\",\"SUNDAY\"]
    *
    * @return string[]
    */
    public function getRepeatDay()
    {
        return $this->container['repeatDay'];
    }

    /**
    * Sets repeatDay
    *
    * @param string[] $repeatDay 定时扩缩容计划的重复周期规律，可以选择周一到周日的某一天、某几天、或者不选择。如果不选择，则会在当前时间后的start_hour：start_minute时间点执行扩缩容计划。如：\"repeat_day\": [\"MONDAY\", \"TUESDAY\", \"WEDNESDAY\",\"SUNDAY\"]
    *
    * @return $this
    */
    public function setRepeatDay($repeatDay)
    {
        $this->container['repeatDay'] = $repeatDay;
        return $this;
    }

    /**
    * Gets validDateBegin
    *  有效期开始时间（13位时间戳）
    *
    * @return int|null
    */
    public function getValidDateBegin()
    {
        return $this->container['validDateBegin'];
    }

    /**
    * Sets validDateBegin
    *
    * @param int|null $validDateBegin 有效期开始时间（13位时间戳）
    *
    * @return $this
    */
    public function setValidDateBegin($validDateBegin)
    {
        $this->container['validDateBegin'] = $validDateBegin;
        return $this;
    }

    /**
    * Gets validDateEnd
    *  有效期结束时间（13位时间戳）
    *
    * @return int|null
    */
    public function getValidDateEnd()
    {
        return $this->container['validDateEnd'];
    }

    /**
    * Sets validDateEnd
    *
    * @param int|null $validDateEnd 有效期结束时间（13位时间戳）
    *
    * @return $this
    */
    public function setValidDateEnd($validDateEnd)
    {
        $this->container['validDateEnd'] = $validDateEnd;
        return $this;
    }

    /**
    * Gets activate
    *  当前设置的扩缩容计划是否激活，默认为激活
    *
    * @return bool|null
    */
    public function getActivate()
    {
        return $this->container['activate'];
    }

    /**
    * Sets activate
    *
    * @param bool|null $activate 当前设置的扩缩容计划是否激活，默认为激活
    *
    * @return $this
    */
    public function setActivate($activate)
    {
        $this->container['activate'] = $activate;
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


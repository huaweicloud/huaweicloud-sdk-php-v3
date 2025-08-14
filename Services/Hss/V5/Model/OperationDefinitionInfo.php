<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperationDefinitionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperationDefinitionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dayBackups  **参数解释**: 保留日备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选 **取值范围**: 取值为0到100。
    * maxBackups  **参数解释**: 单个备份对象自动备份的最大备份数。-1代表不按备份数清理。若该字段和retention_duration_days字段同时为空，备份会永久保留。 **取值范围**: 取值为-1或1-99999
    * monthBackups  **参数解释**: 保留月备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: 取值为0到100。
    * retentionDurationDays  **参数解释**: 备份保留时长，单位天。最长支持99999天。-1代表不按时间清理。若该字段和max_backups参数同时为空，备份会永久保留。 **取值范围**: 最小值：-1，最大值：99999
    * timezone  **参数解释**: 用户所在时区，格式形如UTC+08:00 **约束限制**: 若没有选择年备，月备，周备，日备中任一参数，则不能选择该参数。 **取值范围**: 字符长度1-256 **默认取值**: 不涉及
    * weekBackups  **参数解释**: 保留周备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: - UTC+05:00 - UTC+06:00 - UTC+07:00 ...
    * yearBackups  **参数解释**: 保留年备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: 取值为0到100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dayBackups' => 'int',
            'maxBackups' => 'int',
            'monthBackups' => 'int',
            'retentionDurationDays' => 'int',
            'timezone' => 'string',
            'weekBackups' => 'int',
            'yearBackups' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dayBackups  **参数解释**: 保留日备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选 **取值范围**: 取值为0到100。
    * maxBackups  **参数解释**: 单个备份对象自动备份的最大备份数。-1代表不按备份数清理。若该字段和retention_duration_days字段同时为空，备份会永久保留。 **取值范围**: 取值为-1或1-99999
    * monthBackups  **参数解释**: 保留月备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: 取值为0到100。
    * retentionDurationDays  **参数解释**: 备份保留时长，单位天。最长支持99999天。-1代表不按时间清理。若该字段和max_backups参数同时为空，备份会永久保留。 **取值范围**: 最小值：-1，最大值：99999
    * timezone  **参数解释**: 用户所在时区，格式形如UTC+08:00 **约束限制**: 若没有选择年备，月备，周备，日备中任一参数，则不能选择该参数。 **取值范围**: 字符长度1-256 **默认取值**: 不涉及
    * weekBackups  **参数解释**: 保留周备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: - UTC+05:00 - UTC+06:00 - UTC+07:00 ...
    * yearBackups  **参数解释**: 保留年备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: 取值为0到100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dayBackups' => 'int32',
        'maxBackups' => 'int32',
        'monthBackups' => 'int32',
        'retentionDurationDays' => 'int32',
        'timezone' => null,
        'weekBackups' => 'int32',
        'yearBackups' => 'int32'
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
    * dayBackups  **参数解释**: 保留日备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选 **取值范围**: 取值为0到100。
    * maxBackups  **参数解释**: 单个备份对象自动备份的最大备份数。-1代表不按备份数清理。若该字段和retention_duration_days字段同时为空，备份会永久保留。 **取值范围**: 取值为-1或1-99999
    * monthBackups  **参数解释**: 保留月备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: 取值为0到100。
    * retentionDurationDays  **参数解释**: 备份保留时长，单位天。最长支持99999天。-1代表不按时间清理。若该字段和max_backups参数同时为空，备份会永久保留。 **取值范围**: 最小值：-1，最大值：99999
    * timezone  **参数解释**: 用户所在时区，格式形如UTC+08:00 **约束限制**: 若没有选择年备，月备，周备，日备中任一参数，则不能选择该参数。 **取值范围**: 字符长度1-256 **默认取值**: 不涉及
    * weekBackups  **参数解释**: 保留周备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: - UTC+05:00 - UTC+06:00 - UTC+07:00 ...
    * yearBackups  **参数解释**: 保留年备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: 取值为0到100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dayBackups' => 'day_backups',
            'maxBackups' => 'max_backups',
            'monthBackups' => 'month_backups',
            'retentionDurationDays' => 'retention_duration_days',
            'timezone' => 'timezone',
            'weekBackups' => 'week_backups',
            'yearBackups' => 'year_backups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dayBackups  **参数解释**: 保留日备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选 **取值范围**: 取值为0到100。
    * maxBackups  **参数解释**: 单个备份对象自动备份的最大备份数。-1代表不按备份数清理。若该字段和retention_duration_days字段同时为空，备份会永久保留。 **取值范围**: 取值为-1或1-99999
    * monthBackups  **参数解释**: 保留月备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: 取值为0到100。
    * retentionDurationDays  **参数解释**: 备份保留时长，单位天。最长支持99999天。-1代表不按时间清理。若该字段和max_backups参数同时为空，备份会永久保留。 **取值范围**: 最小值：-1，最大值：99999
    * timezone  **参数解释**: 用户所在时区，格式形如UTC+08:00 **约束限制**: 若没有选择年备，月备，周备，日备中任一参数，则不能选择该参数。 **取值范围**: 字符长度1-256 **默认取值**: 不涉及
    * weekBackups  **参数解释**: 保留周备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: - UTC+05:00 - UTC+06:00 - UTC+07:00 ...
    * yearBackups  **参数解释**: 保留年备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: 取值为0到100。
    *
    * @var string[]
    */
    protected static $setters = [
            'dayBackups' => 'setDayBackups',
            'maxBackups' => 'setMaxBackups',
            'monthBackups' => 'setMonthBackups',
            'retentionDurationDays' => 'setRetentionDurationDays',
            'timezone' => 'setTimezone',
            'weekBackups' => 'setWeekBackups',
            'yearBackups' => 'setYearBackups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dayBackups  **参数解释**: 保留日备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选 **取值范围**: 取值为0到100。
    * maxBackups  **参数解释**: 单个备份对象自动备份的最大备份数。-1代表不按备份数清理。若该字段和retention_duration_days字段同时为空，备份会永久保留。 **取值范围**: 取值为-1或1-99999
    * monthBackups  **参数解释**: 保留月备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: 取值为0到100。
    * retentionDurationDays  **参数解释**: 备份保留时长，单位天。最长支持99999天。-1代表不按时间清理。若该字段和max_backups参数同时为空，备份会永久保留。 **取值范围**: 最小值：-1，最大值：99999
    * timezone  **参数解释**: 用户所在时区，格式形如UTC+08:00 **约束限制**: 若没有选择年备，月备，周备，日备中任一参数，则不能选择该参数。 **取值范围**: 字符长度1-256 **默认取值**: 不涉及
    * weekBackups  **参数解释**: 保留周备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: - UTC+05:00 - UTC+06:00 - UTC+07:00 ...
    * yearBackups  **参数解释**: 保留年备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: 取值为0到100。
    *
    * @var string[]
    */
    protected static $getters = [
            'dayBackups' => 'getDayBackups',
            'maxBackups' => 'getMaxBackups',
            'monthBackups' => 'getMonthBackups',
            'retentionDurationDays' => 'getRetentionDurationDays',
            'timezone' => 'getTimezone',
            'weekBackups' => 'getWeekBackups',
            'yearBackups' => 'getYearBackups'
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
        $this->container['dayBackups'] = isset($data['dayBackups']) ? $data['dayBackups'] : null;
        $this->container['maxBackups'] = isset($data['maxBackups']) ? $data['maxBackups'] : null;
        $this->container['monthBackups'] = isset($data['monthBackups']) ? $data['monthBackups'] : null;
        $this->container['retentionDurationDays'] = isset($data['retentionDurationDays']) ? $data['retentionDurationDays'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['weekBackups'] = isset($data['weekBackups']) ? $data['weekBackups'] : null;
        $this->container['yearBackups'] = isset($data['yearBackups']) ? $data['yearBackups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dayBackups']) && ($this->container['dayBackups'] > 100)) {
                $invalidProperties[] = "invalid value for 'dayBackups', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['dayBackups']) && ($this->container['dayBackups'] < 0)) {
                $invalidProperties[] = "invalid value for 'dayBackups', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxBackups']) && ($this->container['maxBackups'] > 99999)) {
                $invalidProperties[] = "invalid value for 'maxBackups', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['maxBackups']) && ($this->container['maxBackups'] < -1)) {
                $invalidProperties[] = "invalid value for 'maxBackups', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['monthBackups']) && ($this->container['monthBackups'] > 100)) {
                $invalidProperties[] = "invalid value for 'monthBackups', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['monthBackups']) && ($this->container['monthBackups'] < 0)) {
                $invalidProperties[] = "invalid value for 'monthBackups', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['retentionDurationDays']) && ($this->container['retentionDurationDays'] > 99999)) {
                $invalidProperties[] = "invalid value for 'retentionDurationDays', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['retentionDurationDays']) && ($this->container['retentionDurationDays'] < -1)) {
                $invalidProperties[] = "invalid value for 'retentionDurationDays', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['timezone']) && (mb_strlen($this->container['timezone']) > 256)) {
                $invalidProperties[] = "invalid value for 'timezone', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['timezone']) && (mb_strlen($this->container['timezone']) < 0)) {
                $invalidProperties[] = "invalid value for 'timezone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['weekBackups']) && ($this->container['weekBackups'] > 100)) {
                $invalidProperties[] = "invalid value for 'weekBackups', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['weekBackups']) && ($this->container['weekBackups'] < 0)) {
                $invalidProperties[] = "invalid value for 'weekBackups', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['yearBackups']) && ($this->container['yearBackups'] > 100)) {
                $invalidProperties[] = "invalid value for 'yearBackups', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['yearBackups']) && ($this->container['yearBackups'] < 0)) {
                $invalidProperties[] = "invalid value for 'yearBackups', must be bigger than or equal to 0.";
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
    * Gets dayBackups
    *  **参数解释**: 保留日备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选 **取值范围**: 取值为0到100。
    *
    * @return int|null
    */
    public function getDayBackups()
    {
        return $this->container['dayBackups'];
    }

    /**
    * Sets dayBackups
    *
    * @param int|null $dayBackups **参数解释**: 保留日备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选 **取值范围**: 取值为0到100。
    *
    * @return $this
    */
    public function setDayBackups($dayBackups)
    {
        $this->container['dayBackups'] = $dayBackups;
        return $this;
    }

    /**
    * Gets maxBackups
    *  **参数解释**: 单个备份对象自动备份的最大备份数。-1代表不按备份数清理。若该字段和retention_duration_days字段同时为空，备份会永久保留。 **取值范围**: 取值为-1或1-99999
    *
    * @return int|null
    */
    public function getMaxBackups()
    {
        return $this->container['maxBackups'];
    }

    /**
    * Sets maxBackups
    *
    * @param int|null $maxBackups **参数解释**: 单个备份对象自动备份的最大备份数。-1代表不按备份数清理。若该字段和retention_duration_days字段同时为空，备份会永久保留。 **取值范围**: 取值为-1或1-99999
    *
    * @return $this
    */
    public function setMaxBackups($maxBackups)
    {
        $this->container['maxBackups'] = $maxBackups;
        return $this;
    }

    /**
    * Gets monthBackups
    *  **参数解释**: 保留月备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: 取值为0到100。
    *
    * @return int|null
    */
    public function getMonthBackups()
    {
        return $this->container['monthBackups'];
    }

    /**
    * Sets monthBackups
    *
    * @param int|null $monthBackups **参数解释**: 保留月备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: 取值为0到100。
    *
    * @return $this
    */
    public function setMonthBackups($monthBackups)
    {
        $this->container['monthBackups'] = $monthBackups;
        return $this;
    }

    /**
    * Gets retentionDurationDays
    *  **参数解释**: 备份保留时长，单位天。最长支持99999天。-1代表不按时间清理。若该字段和max_backups参数同时为空，备份会永久保留。 **取值范围**: 最小值：-1，最大值：99999
    *
    * @return int|null
    */
    public function getRetentionDurationDays()
    {
        return $this->container['retentionDurationDays'];
    }

    /**
    * Sets retentionDurationDays
    *
    * @param int|null $retentionDurationDays **参数解释**: 备份保留时长，单位天。最长支持99999天。-1代表不按时间清理。若该字段和max_backups参数同时为空，备份会永久保留。 **取值范围**: 最小值：-1，最大值：99999
    *
    * @return $this
    */
    public function setRetentionDurationDays($retentionDurationDays)
    {
        $this->container['retentionDurationDays'] = $retentionDurationDays;
        return $this;
    }

    /**
    * Gets timezone
    *  **参数解释**: 用户所在时区，格式形如UTC+08:00 **约束限制**: 若没有选择年备，月备，周备，日备中任一参数，则不能选择该参数。 **取值范围**: 字符长度1-256 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
    * Sets timezone
    *
    * @param string|null $timezone **参数解释**: 用户所在时区，格式形如UTC+08:00 **约束限制**: 若没有选择年备，月备，周备，日备中任一参数，则不能选择该参数。 **取值范围**: 字符长度1-256 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;
        return $this;
    }

    /**
    * Gets weekBackups
    *  **参数解释**: 保留周备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: - UTC+05:00 - UTC+06:00 - UTC+07:00 ...
    *
    * @return int|null
    */
    public function getWeekBackups()
    {
        return $this->container['weekBackups'];
    }

    /**
    * Sets weekBackups
    *
    * @param int|null $weekBackups **参数解释**: 保留周备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: - UTC+05:00 - UTC+06:00 - UTC+07:00 ...
    *
    * @return $this
    */
    public function setWeekBackups($weekBackups)
    {
        $this->container['weekBackups'] = $weekBackups;
        return $this;
    }

    /**
    * Gets yearBackups
    *  **参数解释**: 保留年备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: 取值为0到100。
    *
    * @return int|null
    */
    public function getYearBackups()
    {
        return $this->container['yearBackups'];
    }

    /**
    * Sets yearBackups
    *
    * @param int|null $yearBackups **参数解释**: 保留年备个数，该备份不受保留最大备份数限制。若选择该参数，则timezone也必选。 **取值范围**: 取值为0到100。
    *
    * @return $this
    */
    public function setYearBackups($yearBackups)
    {
        $this->container['yearBackups'] = $yearBackups;
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


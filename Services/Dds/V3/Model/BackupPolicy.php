<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keepDays  指定已生成的备份文件可以保存的天数。 取值范围：0～732。取0值，表示关闭自动备份策略。
    * startTime  备份时间段。自动备份将在该时间段内触发。开启自动备份策略时，该参数必选；关闭自动备份策略时，不传该参数。 取值范围：格式必须为hh:mm-HH:MM，且有效，当前时间指UTC时间。 - HH取值必须比hh大1。 - mm和MM取值必须相同，且取值必须为00、15、30或45。 取值示例： - 08:15-09:15 - 23:00-00:00
    * period  备份周期配置。自动备份将在每星期指定的天进行。取值范围：格式为半角逗号隔开的数字，数字代表星期。保留天数取值不同，备份周期约束如下： - 0天，不传该参数。 - 1～6天，备份周期全选，取值为：1,2,3,4,5,6,7。 - 7～732天，备份周期至少选择一周中的一天。示例：1,2,3,4。
    * enableIncrementalBackup  增量备份开关。不传这个参数则不对增备状态进行改动。开启增量备份后，系统会自动进行增量备份。增量备份开关的取值和约束如下： - false，代表关闭增量备份，关闭会将之前做的增量备份清理。 - true，代表开启增量备份，开启增量备份会触发一次全量备份。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keepDays' => 'string',
            'startTime' => 'string',
            'period' => 'string',
            'enableIncrementalBackup' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keepDays  指定已生成的备份文件可以保存的天数。 取值范围：0～732。取0值，表示关闭自动备份策略。
    * startTime  备份时间段。自动备份将在该时间段内触发。开启自动备份策略时，该参数必选；关闭自动备份策略时，不传该参数。 取值范围：格式必须为hh:mm-HH:MM，且有效，当前时间指UTC时间。 - HH取值必须比hh大1。 - mm和MM取值必须相同，且取值必须为00、15、30或45。 取值示例： - 08:15-09:15 - 23:00-00:00
    * period  备份周期配置。自动备份将在每星期指定的天进行。取值范围：格式为半角逗号隔开的数字，数字代表星期。保留天数取值不同，备份周期约束如下： - 0天，不传该参数。 - 1～6天，备份周期全选，取值为：1,2,3,4,5,6,7。 - 7～732天，备份周期至少选择一周中的一天。示例：1,2,3,4。
    * enableIncrementalBackup  增量备份开关。不传这个参数则不对增备状态进行改动。开启增量备份后，系统会自动进行增量备份。增量备份开关的取值和约束如下： - false，代表关闭增量备份，关闭会将之前做的增量备份清理。 - true，代表开启增量备份，开启增量备份会触发一次全量备份。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keepDays' => null,
        'startTime' => null,
        'period' => null,
        'enableIncrementalBackup' => null
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
    * keepDays  指定已生成的备份文件可以保存的天数。 取值范围：0～732。取0值，表示关闭自动备份策略。
    * startTime  备份时间段。自动备份将在该时间段内触发。开启自动备份策略时，该参数必选；关闭自动备份策略时，不传该参数。 取值范围：格式必须为hh:mm-HH:MM，且有效，当前时间指UTC时间。 - HH取值必须比hh大1。 - mm和MM取值必须相同，且取值必须为00、15、30或45。 取值示例： - 08:15-09:15 - 23:00-00:00
    * period  备份周期配置。自动备份将在每星期指定的天进行。取值范围：格式为半角逗号隔开的数字，数字代表星期。保留天数取值不同，备份周期约束如下： - 0天，不传该参数。 - 1～6天，备份周期全选，取值为：1,2,3,4,5,6,7。 - 7～732天，备份周期至少选择一周中的一天。示例：1,2,3,4。
    * enableIncrementalBackup  增量备份开关。不传这个参数则不对增备状态进行改动。开启增量备份后，系统会自动进行增量备份。增量备份开关的取值和约束如下： - false，代表关闭增量备份，关闭会将之前做的增量备份清理。 - true，代表开启增量备份，开启增量备份会触发一次全量备份。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keepDays' => 'keep_days',
            'startTime' => 'start_time',
            'period' => 'period',
            'enableIncrementalBackup' => 'enable_incremental_backup'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keepDays  指定已生成的备份文件可以保存的天数。 取值范围：0～732。取0值，表示关闭自动备份策略。
    * startTime  备份时间段。自动备份将在该时间段内触发。开启自动备份策略时，该参数必选；关闭自动备份策略时，不传该参数。 取值范围：格式必须为hh:mm-HH:MM，且有效，当前时间指UTC时间。 - HH取值必须比hh大1。 - mm和MM取值必须相同，且取值必须为00、15、30或45。 取值示例： - 08:15-09:15 - 23:00-00:00
    * period  备份周期配置。自动备份将在每星期指定的天进行。取值范围：格式为半角逗号隔开的数字，数字代表星期。保留天数取值不同，备份周期约束如下： - 0天，不传该参数。 - 1～6天，备份周期全选，取值为：1,2,3,4,5,6,7。 - 7～732天，备份周期至少选择一周中的一天。示例：1,2,3,4。
    * enableIncrementalBackup  增量备份开关。不传这个参数则不对增备状态进行改动。开启增量备份后，系统会自动进行增量备份。增量备份开关的取值和约束如下： - false，代表关闭增量备份，关闭会将之前做的增量备份清理。 - true，代表开启增量备份，开启增量备份会触发一次全量备份。
    *
    * @var string[]
    */
    protected static $setters = [
            'keepDays' => 'setKeepDays',
            'startTime' => 'setStartTime',
            'period' => 'setPeriod',
            'enableIncrementalBackup' => 'setEnableIncrementalBackup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keepDays  指定已生成的备份文件可以保存的天数。 取值范围：0～732。取0值，表示关闭自动备份策略。
    * startTime  备份时间段。自动备份将在该时间段内触发。开启自动备份策略时，该参数必选；关闭自动备份策略时，不传该参数。 取值范围：格式必须为hh:mm-HH:MM，且有效，当前时间指UTC时间。 - HH取值必须比hh大1。 - mm和MM取值必须相同，且取值必须为00、15、30或45。 取值示例： - 08:15-09:15 - 23:00-00:00
    * period  备份周期配置。自动备份将在每星期指定的天进行。取值范围：格式为半角逗号隔开的数字，数字代表星期。保留天数取值不同，备份周期约束如下： - 0天，不传该参数。 - 1～6天，备份周期全选，取值为：1,2,3,4,5,6,7。 - 7～732天，备份周期至少选择一周中的一天。示例：1,2,3,4。
    * enableIncrementalBackup  增量备份开关。不传这个参数则不对增备状态进行改动。开启增量备份后，系统会自动进行增量备份。增量备份开关的取值和约束如下： - false，代表关闭增量备份，关闭会将之前做的增量备份清理。 - true，代表开启增量备份，开启增量备份会触发一次全量备份。
    *
    * @var string[]
    */
    protected static $getters = [
            'keepDays' => 'getKeepDays',
            'startTime' => 'getStartTime',
            'period' => 'getPeriod',
            'enableIncrementalBackup' => 'getEnableIncrementalBackup'
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
        $this->container['keepDays'] = isset($data['keepDays']) ? $data['keepDays'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['enableIncrementalBackup'] = isset($data['enableIncrementalBackup']) ? $data['enableIncrementalBackup'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets keepDays
    *  指定已生成的备份文件可以保存的天数。 取值范围：0～732。取0值，表示关闭自动备份策略。
    *
    * @return string|null
    */
    public function getKeepDays()
    {
        return $this->container['keepDays'];
    }

    /**
    * Sets keepDays
    *
    * @param string|null $keepDays 指定已生成的备份文件可以保存的天数。 取值范围：0～732。取0值，表示关闭自动备份策略。
    *
    * @return $this
    */
    public function setKeepDays($keepDays)
    {
        $this->container['keepDays'] = $keepDays;
        return $this;
    }

    /**
    * Gets startTime
    *  备份时间段。自动备份将在该时间段内触发。开启自动备份策略时，该参数必选；关闭自动备份策略时，不传该参数。 取值范围：格式必须为hh:mm-HH:MM，且有效，当前时间指UTC时间。 - HH取值必须比hh大1。 - mm和MM取值必须相同，且取值必须为00、15、30或45。 取值示例： - 08:15-09:15 - 23:00-00:00
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
    * @param string|null $startTime 备份时间段。自动备份将在该时间段内触发。开启自动备份策略时，该参数必选；关闭自动备份策略时，不传该参数。 取值范围：格式必须为hh:mm-HH:MM，且有效，当前时间指UTC时间。 - HH取值必须比hh大1。 - mm和MM取值必须相同，且取值必须为00、15、30或45。 取值示例： - 08:15-09:15 - 23:00-00:00
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets period
    *  备份周期配置。自动备份将在每星期指定的天进行。取值范围：格式为半角逗号隔开的数字，数字代表星期。保留天数取值不同，备份周期约束如下： - 0天，不传该参数。 - 1～6天，备份周期全选，取值为：1,2,3,4,5,6,7。 - 7～732天，备份周期至少选择一周中的一天。示例：1,2,3,4。
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
    * @param string|null $period 备份周期配置。自动备份将在每星期指定的天进行。取值范围：格式为半角逗号隔开的数字，数字代表星期。保留天数取值不同，备份周期约束如下： - 0天，不传该参数。 - 1～6天，备份周期全选，取值为：1,2,3,4,5,6,7。 - 7～732天，备份周期至少选择一周中的一天。示例：1,2,3,4。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets enableIncrementalBackup
    *  增量备份开关。不传这个参数则不对增备状态进行改动。开启增量备份后，系统会自动进行增量备份。增量备份开关的取值和约束如下： - false，代表关闭增量备份，关闭会将之前做的增量备份清理。 - true，代表开启增量备份，开启增量备份会触发一次全量备份。
    *
    * @return bool|null
    */
    public function getEnableIncrementalBackup()
    {
        return $this->container['enableIncrementalBackup'];
    }

    /**
    * Sets enableIncrementalBackup
    *
    * @param bool|null $enableIncrementalBackup 增量备份开关。不传这个参数则不对增备状态进行改动。开启增量备份后，系统会自动进行增量备份。增量备份开关的取值和约束如下： - false，代表关闭增量备份，关闭会将之前做的增量备份清理。 - true，代表开启增量备份，开启增量备份会触发一次全量备份。
    *
    * @return $this
    */
    public function setEnableIncrementalBackup($enableIncrementalBackup)
    {
        $this->container['enableIncrementalBackup'] = $enableIncrementalBackup;
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


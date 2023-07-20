<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MysqlBackupPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MysqlBackupPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  备份时间段。自动备份将在该时间段内触发。  取值范围：非空，格式必须为hh:mm-HH:MM且有效，当前时间指UTC时间。HH取值必须比hh大1。mm和MM取值必须相同，且取值必须为00。  取值示例：21:00-22:00
    * keepDays  备份文件的保留天数。
    * period  备份周期配置。自动备份将在每星期指定的天进行。  取值范围：格式为逗号隔开的数字，数字代表星期。  取值示例：1,2,3,4则表示备份周期配置为星期一、星期二、星期三和星期四。
    * retentionNumBackupLevel1  一级备份保留数量，默认值为0。当一级备份开关开启时，该参数值有效。取值：0或1
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'keepDays' => 'int',
            'period' => 'string',
            'retentionNumBackupLevel1' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  备份时间段。自动备份将在该时间段内触发。  取值范围：非空，格式必须为hh:mm-HH:MM且有效，当前时间指UTC时间。HH取值必须比hh大1。mm和MM取值必须相同，且取值必须为00。  取值示例：21:00-22:00
    * keepDays  备份文件的保留天数。
    * period  备份周期配置。自动备份将在每星期指定的天进行。  取值范围：格式为逗号隔开的数字，数字代表星期。  取值示例：1,2,3,4则表示备份周期配置为星期一、星期二、星期三和星期四。
    * retentionNumBackupLevel1  一级备份保留数量，默认值为0。当一级备份开关开启时，该参数值有效。取值：0或1
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'keepDays' => 'int32',
        'period' => null,
        'retentionNumBackupLevel1' => 'int32'
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
    * startTime  备份时间段。自动备份将在该时间段内触发。  取值范围：非空，格式必须为hh:mm-HH:MM且有效，当前时间指UTC时间。HH取值必须比hh大1。mm和MM取值必须相同，且取值必须为00。  取值示例：21:00-22:00
    * keepDays  备份文件的保留天数。
    * period  备份周期配置。自动备份将在每星期指定的天进行。  取值范围：格式为逗号隔开的数字，数字代表星期。  取值示例：1,2,3,4则表示备份周期配置为星期一、星期二、星期三和星期四。
    * retentionNumBackupLevel1  一级备份保留数量，默认值为0。当一级备份开关开启时，该参数值有效。取值：0或1
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'keepDays' => 'keep_days',
            'period' => 'period',
            'retentionNumBackupLevel1' => 'retention_num_backup_level1'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  备份时间段。自动备份将在该时间段内触发。  取值范围：非空，格式必须为hh:mm-HH:MM且有效，当前时间指UTC时间。HH取值必须比hh大1。mm和MM取值必须相同，且取值必须为00。  取值示例：21:00-22:00
    * keepDays  备份文件的保留天数。
    * period  备份周期配置。自动备份将在每星期指定的天进行。  取值范围：格式为逗号隔开的数字，数字代表星期。  取值示例：1,2,3,4则表示备份周期配置为星期一、星期二、星期三和星期四。
    * retentionNumBackupLevel1  一级备份保留数量，默认值为0。当一级备份开关开启时，该参数值有效。取值：0或1
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'keepDays' => 'setKeepDays',
            'period' => 'setPeriod',
            'retentionNumBackupLevel1' => 'setRetentionNumBackupLevel1'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  备份时间段。自动备份将在该时间段内触发。  取值范围：非空，格式必须为hh:mm-HH:MM且有效，当前时间指UTC时间。HH取值必须比hh大1。mm和MM取值必须相同，且取值必须为00。  取值示例：21:00-22:00
    * keepDays  备份文件的保留天数。
    * period  备份周期配置。自动备份将在每星期指定的天进行。  取值范围：格式为逗号隔开的数字，数字代表星期。  取值示例：1,2,3,4则表示备份周期配置为星期一、星期二、星期三和星期四。
    * retentionNumBackupLevel1  一级备份保留数量，默认值为0。当一级备份开关开启时，该参数值有效。取值：0或1
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'keepDays' => 'getKeepDays',
            'period' => 'getPeriod',
            'retentionNumBackupLevel1' => 'getRetentionNumBackupLevel1'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['keepDays'] = isset($data['keepDays']) ? $data['keepDays'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['retentionNumBackupLevel1'] = isset($data['retentionNumBackupLevel1']) ? $data['retentionNumBackupLevel1'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['keepDays'] === null) {
            $invalidProperties[] = "'keepDays' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
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
    * Gets startTime
    *  备份时间段。自动备份将在该时间段内触发。  取值范围：非空，格式必须为hh:mm-HH:MM且有效，当前时间指UTC时间。HH取值必须比hh大1。mm和MM取值必须相同，且取值必须为00。  取值示例：21:00-22:00
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
    * @param string $startTime 备份时间段。自动备份将在该时间段内触发。  取值范围：非空，格式必须为hh:mm-HH:MM且有效，当前时间指UTC时间。HH取值必须比hh大1。mm和MM取值必须相同，且取值必须为00。  取值示例：21:00-22:00
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets keepDays
    *  备份文件的保留天数。
    *
    * @return int
    */
    public function getKeepDays()
    {
        return $this->container['keepDays'];
    }

    /**
    * Sets keepDays
    *
    * @param int $keepDays 备份文件的保留天数。
    *
    * @return $this
    */
    public function setKeepDays($keepDays)
    {
        $this->container['keepDays'] = $keepDays;
        return $this;
    }

    /**
    * Gets period
    *  备份周期配置。自动备份将在每星期指定的天进行。  取值范围：格式为逗号隔开的数字，数字代表星期。  取值示例：1,2,3,4则表示备份周期配置为星期一、星期二、星期三和星期四。
    *
    * @return string
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string $period 备份周期配置。自动备份将在每星期指定的天进行。  取值范围：格式为逗号隔开的数字，数字代表星期。  取值示例：1,2,3,4则表示备份周期配置为星期一、星期二、星期三和星期四。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets retentionNumBackupLevel1
    *  一级备份保留数量，默认值为0。当一级备份开关开启时，该参数值有效。取值：0或1
    *
    * @return int|null
    */
    public function getRetentionNumBackupLevel1()
    {
        return $this->container['retentionNumBackupLevel1'];
    }

    /**
    * Sets retentionNumBackupLevel1
    *
    * @param int|null $retentionNumBackupLevel1 一级备份保留数量，默认值为0。当一级备份开关开启时，该参数值有效。取值：0或1
    *
    * @return $this
    */
    public function setRetentionNumBackupLevel1($retentionNumBackupLevel1)
    {
        $this->container['retentionNumBackupLevel1'] = $retentionNumBackupLevel1;
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


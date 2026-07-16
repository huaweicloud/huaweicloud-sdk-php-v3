<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SparseBackupPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SparseBackupPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  参数解释：  备份策略ID。  取值范围：  不涉及。
    * period  参数解释：  备份周期配置。  取值范围：  格式为“日期 月份 星期”形式的Cron表达式，时区为UTC时区。 日期支持范围为1~31、特殊字符*（表示任意值）、特殊字符L（表示最后一天）。填写1~31或L时支持填写多个，以逗号隔开。 月份支持范围为1~12、特殊字符*（表示任意值）。 星期支持范围为1~7（1表示星期一，2表示星期二，依次类推）、特殊字符*（表示任意值）。填写1~7数字时支持填写多个，以逗号隔开。
    * keepDays  参数解释：  备份文件可以保存的天数。  取值范围：  1~3660。
    * startTime  参数解释：  全量备份时间段。自动备份将在该时间段内触发。  取值范围：  格式为hh:mm-HH:MM，为UTC时间。 HH的值比hh大1。 mm和MM的值相同，且取值必须为00。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'period' => 'string',
            'keepDays' => 'int',
            'startTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  参数解释：  备份策略ID。  取值范围：  不涉及。
    * period  参数解释：  备份周期配置。  取值范围：  格式为“日期 月份 星期”形式的Cron表达式，时区为UTC时区。 日期支持范围为1~31、特殊字符*（表示任意值）、特殊字符L（表示最后一天）。填写1~31或L时支持填写多个，以逗号隔开。 月份支持范围为1~12、特殊字符*（表示任意值）。 星期支持范围为1~7（1表示星期一，2表示星期二，依次类推）、特殊字符*（表示任意值）。填写1~7数字时支持填写多个，以逗号隔开。
    * keepDays  参数解释：  备份文件可以保存的天数。  取值范围：  1~3660。
    * startTime  参数解释：  全量备份时间段。自动备份将在该时间段内触发。  取值范围：  格式为hh:mm-HH:MM，为UTC时间。 HH的值比hh大1。 mm和MM的值相同，且取值必须为00。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'period' => null,
        'keepDays' => null,
        'startTime' => null
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
    * id  参数解释：  备份策略ID。  取值范围：  不涉及。
    * period  参数解释：  备份周期配置。  取值范围：  格式为“日期 月份 星期”形式的Cron表达式，时区为UTC时区。 日期支持范围为1~31、特殊字符*（表示任意值）、特殊字符L（表示最后一天）。填写1~31或L时支持填写多个，以逗号隔开。 月份支持范围为1~12、特殊字符*（表示任意值）。 星期支持范围为1~7（1表示星期一，2表示星期二，依次类推）、特殊字符*（表示任意值）。填写1~7数字时支持填写多个，以逗号隔开。
    * keepDays  参数解释：  备份文件可以保存的天数。  取值范围：  1~3660。
    * startTime  参数解释：  全量备份时间段。自动备份将在该时间段内触发。  取值范围：  格式为hh:mm-HH:MM，为UTC时间。 HH的值比hh大1。 mm和MM的值相同，且取值必须为00。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'period' => 'period',
            'keepDays' => 'keep_days',
            'startTime' => 'start_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  参数解释：  备份策略ID。  取值范围：  不涉及。
    * period  参数解释：  备份周期配置。  取值范围：  格式为“日期 月份 星期”形式的Cron表达式，时区为UTC时区。 日期支持范围为1~31、特殊字符*（表示任意值）、特殊字符L（表示最后一天）。填写1~31或L时支持填写多个，以逗号隔开。 月份支持范围为1~12、特殊字符*（表示任意值）。 星期支持范围为1~7（1表示星期一，2表示星期二，依次类推）、特殊字符*（表示任意值）。填写1~7数字时支持填写多个，以逗号隔开。
    * keepDays  参数解释：  备份文件可以保存的天数。  取值范围：  1~3660。
    * startTime  参数解释：  全量备份时间段。自动备份将在该时间段内触发。  取值范围：  格式为hh:mm-HH:MM，为UTC时间。 HH的值比hh大1。 mm和MM的值相同，且取值必须为00。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'period' => 'setPeriod',
            'keepDays' => 'setKeepDays',
            'startTime' => 'setStartTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  参数解释：  备份策略ID。  取值范围：  不涉及。
    * period  参数解释：  备份周期配置。  取值范围：  格式为“日期 月份 星期”形式的Cron表达式，时区为UTC时区。 日期支持范围为1~31、特殊字符*（表示任意值）、特殊字符L（表示最后一天）。填写1~31或L时支持填写多个，以逗号隔开。 月份支持范围为1~12、特殊字符*（表示任意值）。 星期支持范围为1~7（1表示星期一，2表示星期二，依次类推）、特殊字符*（表示任意值）。填写1~7数字时支持填写多个，以逗号隔开。
    * keepDays  参数解释：  备份文件可以保存的天数。  取值范围：  1~3660。
    * startTime  参数解释：  全量备份时间段。自动备份将在该时间段内触发。  取值范围：  格式为hh:mm-HH:MM，为UTC时间。 HH的值比hh大1。 mm和MM的值相同，且取值必须为00。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'period' => 'getPeriod',
            'keepDays' => 'getKeepDays',
            'startTime' => 'getStartTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['keepDays'] = isset($data['keepDays']) ? $data['keepDays'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
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
    * Gets id
    *  参数解释：  备份策略ID。  取值范围：  不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 参数解释：  备份策略ID。  取值范围：  不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets period
    *  参数解释：  备份周期配置。  取值范围：  格式为“日期 月份 星期”形式的Cron表达式，时区为UTC时区。 日期支持范围为1~31、特殊字符*（表示任意值）、特殊字符L（表示最后一天）。填写1~31或L时支持填写多个，以逗号隔开。 月份支持范围为1~12、特殊字符*（表示任意值）。 星期支持范围为1~7（1表示星期一，2表示星期二，依次类推）、特殊字符*（表示任意值）。填写1~7数字时支持填写多个，以逗号隔开。
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
    * @param string|null $period 参数解释：  备份周期配置。  取值范围：  格式为“日期 月份 星期”形式的Cron表达式，时区为UTC时区。 日期支持范围为1~31、特殊字符*（表示任意值）、特殊字符L（表示最后一天）。填写1~31或L时支持填写多个，以逗号隔开。 月份支持范围为1~12、特殊字符*（表示任意值）。 星期支持范围为1~7（1表示星期一，2表示星期二，依次类推）、特殊字符*（表示任意值）。填写1~7数字时支持填写多个，以逗号隔开。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets keepDays
    *  参数解释：  备份文件可以保存的天数。  取值范围：  1~3660。
    *
    * @return int|null
    */
    public function getKeepDays()
    {
        return $this->container['keepDays'];
    }

    /**
    * Sets keepDays
    *
    * @param int|null $keepDays 参数解释：  备份文件可以保存的天数。  取值范围：  1~3660。
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
    *  参数解释：  全量备份时间段。自动备份将在该时间段内触发。  取值范围：  格式为hh:mm-HH:MM，为UTC时间。 HH的值比hh大1。 mm和MM的值相同，且取值必须为00。
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
    * @param string|null $startTime 参数解释：  全量备份时间段。自动备份将在该时间段内触发。  取值范围：  格式为hh:mm-HH:MM，为UTC时间。 HH的值比hh大1。 mm和MM的值相同，且取值必须为00。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
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


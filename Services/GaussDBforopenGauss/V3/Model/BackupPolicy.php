<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

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
    * keepDays  备份文件可以保存的天数。  取值范围：1-732天。
    * startTime  备份时间段。自动备份将在该时间段内触发。  取值范围：非空，格式必须为hh:mm-HH:MM且有效，当前时间指UTC时间。  HH取值必须比hh大1，mm和MM取值必须相同，且取值必须为00。  取值示例：  21:00-22:00
    * period  全量备份周期配置。自动全量备份将在每星期指定的天进行。取值范围：格式为逗号隔开的数字，数字代表星期。取值示例：1,2,3,4则表示备份周期配置为星期一、星期二、星期三和星期四。
    * differentialPeriod  差异备份间隔时间配置。每次自动差异备份的间隔时间。  取值范围：15、30、60、180、360、720、1440。单位：分钟。  取值示例：30
    * rateLimit  备份限速  取值范围：0 ~ 1024
    * prefetchBlock  控制差量备份时读取磁盘上表文件差量修改页面的预取页面个数。当差量修改页面非常集中时（如数据导入场景），可以适当调大该值；当差量修改页面非常分散时（如随机更新），可以适当调小该值。  取值范围：1 ~ 8192
    * filesplitSize  废弃。
    * fileSplitSize  全量、差量备份时产生的备份文件会根据分片大小进行拆分，可设置范围为0~1024GB，设置需为4的倍数，默认4GB，0GB表示不限制大小。  取值范围：0 ~ 1024
    * enableStandbyBackup  是否启用备机备份。  取值范围：true|false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keepDays' => 'int',
            'startTime' => 'string',
            'period' => 'string',
            'differentialPeriod' => 'string',
            'rateLimit' => 'int',
            'prefetchBlock' => 'int',
            'filesplitSize' => 'int',
            'fileSplitSize' => 'int',
            'enableStandbyBackup' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keepDays  备份文件可以保存的天数。  取值范围：1-732天。
    * startTime  备份时间段。自动备份将在该时间段内触发。  取值范围：非空，格式必须为hh:mm-HH:MM且有效，当前时间指UTC时间。  HH取值必须比hh大1，mm和MM取值必须相同，且取值必须为00。  取值示例：  21:00-22:00
    * period  全量备份周期配置。自动全量备份将在每星期指定的天进行。取值范围：格式为逗号隔开的数字，数字代表星期。取值示例：1,2,3,4则表示备份周期配置为星期一、星期二、星期三和星期四。
    * differentialPeriod  差异备份间隔时间配置。每次自动差异备份的间隔时间。  取值范围：15、30、60、180、360、720、1440。单位：分钟。  取值示例：30
    * rateLimit  备份限速  取值范围：0 ~ 1024
    * prefetchBlock  控制差量备份时读取磁盘上表文件差量修改页面的预取页面个数。当差量修改页面非常集中时（如数据导入场景），可以适当调大该值；当差量修改页面非常分散时（如随机更新），可以适当调小该值。  取值范围：1 ~ 8192
    * filesplitSize  废弃。
    * fileSplitSize  全量、差量备份时产生的备份文件会根据分片大小进行拆分，可设置范围为0~1024GB，设置需为4的倍数，默认4GB，0GB表示不限制大小。  取值范围：0 ~ 1024
    * enableStandbyBackup  是否启用备机备份。  取值范围：true|false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keepDays' => 'int32',
        'startTime' => null,
        'period' => null,
        'differentialPeriod' => null,
        'rateLimit' => null,
        'prefetchBlock' => null,
        'filesplitSize' => null,
        'fileSplitSize' => null,
        'enableStandbyBackup' => null
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
    * keepDays  备份文件可以保存的天数。  取值范围：1-732天。
    * startTime  备份时间段。自动备份将在该时间段内触发。  取值范围：非空，格式必须为hh:mm-HH:MM且有效，当前时间指UTC时间。  HH取值必须比hh大1，mm和MM取值必须相同，且取值必须为00。  取值示例：  21:00-22:00
    * period  全量备份周期配置。自动全量备份将在每星期指定的天进行。取值范围：格式为逗号隔开的数字，数字代表星期。取值示例：1,2,3,4则表示备份周期配置为星期一、星期二、星期三和星期四。
    * differentialPeriod  差异备份间隔时间配置。每次自动差异备份的间隔时间。  取值范围：15、30、60、180、360、720、1440。单位：分钟。  取值示例：30
    * rateLimit  备份限速  取值范围：0 ~ 1024
    * prefetchBlock  控制差量备份时读取磁盘上表文件差量修改页面的预取页面个数。当差量修改页面非常集中时（如数据导入场景），可以适当调大该值；当差量修改页面非常分散时（如随机更新），可以适当调小该值。  取值范围：1 ~ 8192
    * filesplitSize  废弃。
    * fileSplitSize  全量、差量备份时产生的备份文件会根据分片大小进行拆分，可设置范围为0~1024GB，设置需为4的倍数，默认4GB，0GB表示不限制大小。  取值范围：0 ~ 1024
    * enableStandbyBackup  是否启用备机备份。  取值范围：true|false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keepDays' => 'keep_days',
            'startTime' => 'start_time',
            'period' => 'period',
            'differentialPeriod' => 'differential_period',
            'rateLimit' => 'rate_limit',
            'prefetchBlock' => 'prefetch_block',
            'filesplitSize' => 'filesplit_size',
            'fileSplitSize' => 'file_split_size',
            'enableStandbyBackup' => 'enable_standby_backup'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keepDays  备份文件可以保存的天数。  取值范围：1-732天。
    * startTime  备份时间段。自动备份将在该时间段内触发。  取值范围：非空，格式必须为hh:mm-HH:MM且有效，当前时间指UTC时间。  HH取值必须比hh大1，mm和MM取值必须相同，且取值必须为00。  取值示例：  21:00-22:00
    * period  全量备份周期配置。自动全量备份将在每星期指定的天进行。取值范围：格式为逗号隔开的数字，数字代表星期。取值示例：1,2,3,4则表示备份周期配置为星期一、星期二、星期三和星期四。
    * differentialPeriod  差异备份间隔时间配置。每次自动差异备份的间隔时间。  取值范围：15、30、60、180、360、720、1440。单位：分钟。  取值示例：30
    * rateLimit  备份限速  取值范围：0 ~ 1024
    * prefetchBlock  控制差量备份时读取磁盘上表文件差量修改页面的预取页面个数。当差量修改页面非常集中时（如数据导入场景），可以适当调大该值；当差量修改页面非常分散时（如随机更新），可以适当调小该值。  取值范围：1 ~ 8192
    * filesplitSize  废弃。
    * fileSplitSize  全量、差量备份时产生的备份文件会根据分片大小进行拆分，可设置范围为0~1024GB，设置需为4的倍数，默认4GB，0GB表示不限制大小。  取值范围：0 ~ 1024
    * enableStandbyBackup  是否启用备机备份。  取值范围：true|false
    *
    * @var string[]
    */
    protected static $setters = [
            'keepDays' => 'setKeepDays',
            'startTime' => 'setStartTime',
            'period' => 'setPeriod',
            'differentialPeriod' => 'setDifferentialPeriod',
            'rateLimit' => 'setRateLimit',
            'prefetchBlock' => 'setPrefetchBlock',
            'filesplitSize' => 'setFilesplitSize',
            'fileSplitSize' => 'setFileSplitSize',
            'enableStandbyBackup' => 'setEnableStandbyBackup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keepDays  备份文件可以保存的天数。  取值范围：1-732天。
    * startTime  备份时间段。自动备份将在该时间段内触发。  取值范围：非空，格式必须为hh:mm-HH:MM且有效，当前时间指UTC时间。  HH取值必须比hh大1，mm和MM取值必须相同，且取值必须为00。  取值示例：  21:00-22:00
    * period  全量备份周期配置。自动全量备份将在每星期指定的天进行。取值范围：格式为逗号隔开的数字，数字代表星期。取值示例：1,2,3,4则表示备份周期配置为星期一、星期二、星期三和星期四。
    * differentialPeriod  差异备份间隔时间配置。每次自动差异备份的间隔时间。  取值范围：15、30、60、180、360、720、1440。单位：分钟。  取值示例：30
    * rateLimit  备份限速  取值范围：0 ~ 1024
    * prefetchBlock  控制差量备份时读取磁盘上表文件差量修改页面的预取页面个数。当差量修改页面非常集中时（如数据导入场景），可以适当调大该值；当差量修改页面非常分散时（如随机更新），可以适当调小该值。  取值范围：1 ~ 8192
    * filesplitSize  废弃。
    * fileSplitSize  全量、差量备份时产生的备份文件会根据分片大小进行拆分，可设置范围为0~1024GB，设置需为4的倍数，默认4GB，0GB表示不限制大小。  取值范围：0 ~ 1024
    * enableStandbyBackup  是否启用备机备份。  取值范围：true|false
    *
    * @var string[]
    */
    protected static $getters = [
            'keepDays' => 'getKeepDays',
            'startTime' => 'getStartTime',
            'period' => 'getPeriod',
            'differentialPeriod' => 'getDifferentialPeriod',
            'rateLimit' => 'getRateLimit',
            'prefetchBlock' => 'getPrefetchBlock',
            'filesplitSize' => 'getFilesplitSize',
            'fileSplitSize' => 'getFileSplitSize',
            'enableStandbyBackup' => 'getEnableStandbyBackup'
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
        $this->container['differentialPeriod'] = isset($data['differentialPeriod']) ? $data['differentialPeriod'] : null;
        $this->container['rateLimit'] = isset($data['rateLimit']) ? $data['rateLimit'] : null;
        $this->container['prefetchBlock'] = isset($data['prefetchBlock']) ? $data['prefetchBlock'] : null;
        $this->container['filesplitSize'] = isset($data['filesplitSize']) ? $data['filesplitSize'] : null;
        $this->container['fileSplitSize'] = isset($data['fileSplitSize']) ? $data['fileSplitSize'] : null;
        $this->container['enableStandbyBackup'] = isset($data['enableStandbyBackup']) ? $data['enableStandbyBackup'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keepDays'] === null) {
            $invalidProperties[] = "'keepDays' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
        if ($this->container['differentialPeriod'] === null) {
            $invalidProperties[] = "'differentialPeriod' can't be null";
        }
            if (!is_null($this->container['rateLimit']) && ($this->container['rateLimit'] > 1024)) {
                $invalidProperties[] = "invalid value for 'rateLimit', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['rateLimit']) && ($this->container['rateLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'rateLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['prefetchBlock']) && ($this->container['prefetchBlock'] > 8192)) {
                $invalidProperties[] = "invalid value for 'prefetchBlock', must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['prefetchBlock']) && ($this->container['prefetchBlock'] < 1)) {
                $invalidProperties[] = "invalid value for 'prefetchBlock', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['filesplitSize']) && ($this->container['filesplitSize'] > 1024)) {
                $invalidProperties[] = "invalid value for 'filesplitSize', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['filesplitSize']) && ($this->container['filesplitSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'filesplitSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileSplitSize']) && ($this->container['fileSplitSize'] > 1024)) {
                $invalidProperties[] = "invalid value for 'fileSplitSize', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['fileSplitSize']) && ($this->container['fileSplitSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileSplitSize', must be bigger than or equal to 0.";
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
    * Gets keepDays
    *  备份文件可以保存的天数。  取值范围：1-732天。
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
    * @param int $keepDays 备份文件可以保存的天数。  取值范围：1-732天。
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
    *  备份时间段。自动备份将在该时间段内触发。  取值范围：非空，格式必须为hh:mm-HH:MM且有效，当前时间指UTC时间。  HH取值必须比hh大1，mm和MM取值必须相同，且取值必须为00。  取值示例：  21:00-22:00
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
    * @param string $startTime 备份时间段。自动备份将在该时间段内触发。  取值范围：非空，格式必须为hh:mm-HH:MM且有效，当前时间指UTC时间。  HH取值必须比hh大1，mm和MM取值必须相同，且取值必须为00。  取值示例：  21:00-22:00
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
    *  全量备份周期配置。自动全量备份将在每星期指定的天进行。取值范围：格式为逗号隔开的数字，数字代表星期。取值示例：1,2,3,4则表示备份周期配置为星期一、星期二、星期三和星期四。
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
    * @param string $period 全量备份周期配置。自动全量备份将在每星期指定的天进行。取值范围：格式为逗号隔开的数字，数字代表星期。取值示例：1,2,3,4则表示备份周期配置为星期一、星期二、星期三和星期四。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets differentialPeriod
    *  差异备份间隔时间配置。每次自动差异备份的间隔时间。  取值范围：15、30、60、180、360、720、1440。单位：分钟。  取值示例：30
    *
    * @return string
    */
    public function getDifferentialPeriod()
    {
        return $this->container['differentialPeriod'];
    }

    /**
    * Sets differentialPeriod
    *
    * @param string $differentialPeriod 差异备份间隔时间配置。每次自动差异备份的间隔时间。  取值范围：15、30、60、180、360、720、1440。单位：分钟。  取值示例：30
    *
    * @return $this
    */
    public function setDifferentialPeriod($differentialPeriod)
    {
        $this->container['differentialPeriod'] = $differentialPeriod;
        return $this;
    }

    /**
    * Gets rateLimit
    *  备份限速  取值范围：0 ~ 1024
    *
    * @return int|null
    */
    public function getRateLimit()
    {
        return $this->container['rateLimit'];
    }

    /**
    * Sets rateLimit
    *
    * @param int|null $rateLimit 备份限速  取值范围：0 ~ 1024
    *
    * @return $this
    */
    public function setRateLimit($rateLimit)
    {
        $this->container['rateLimit'] = $rateLimit;
        return $this;
    }

    /**
    * Gets prefetchBlock
    *  控制差量备份时读取磁盘上表文件差量修改页面的预取页面个数。当差量修改页面非常集中时（如数据导入场景），可以适当调大该值；当差量修改页面非常分散时（如随机更新），可以适当调小该值。  取值范围：1 ~ 8192
    *
    * @return int|null
    */
    public function getPrefetchBlock()
    {
        return $this->container['prefetchBlock'];
    }

    /**
    * Sets prefetchBlock
    *
    * @param int|null $prefetchBlock 控制差量备份时读取磁盘上表文件差量修改页面的预取页面个数。当差量修改页面非常集中时（如数据导入场景），可以适当调大该值；当差量修改页面非常分散时（如随机更新），可以适当调小该值。  取值范围：1 ~ 8192
    *
    * @return $this
    */
    public function setPrefetchBlock($prefetchBlock)
    {
        $this->container['prefetchBlock'] = $prefetchBlock;
        return $this;
    }

    /**
    * Gets filesplitSize
    *  废弃。
    *
    * @return int|null
    */
    public function getFilesplitSize()
    {
        return $this->container['filesplitSize'];
    }

    /**
    * Sets filesplitSize
    *
    * @param int|null $filesplitSize 废弃。
    *
    * @return $this
    */
    public function setFilesplitSize($filesplitSize)
    {
        $this->container['filesplitSize'] = $filesplitSize;
        return $this;
    }

    /**
    * Gets fileSplitSize
    *  全量、差量备份时产生的备份文件会根据分片大小进行拆分，可设置范围为0~1024GB，设置需为4的倍数，默认4GB，0GB表示不限制大小。  取值范围：0 ~ 1024
    *
    * @return int|null
    */
    public function getFileSplitSize()
    {
        return $this->container['fileSplitSize'];
    }

    /**
    * Sets fileSplitSize
    *
    * @param int|null $fileSplitSize 全量、差量备份时产生的备份文件会根据分片大小进行拆分，可设置范围为0~1024GB，设置需为4的倍数，默认4GB，0GB表示不限制大小。  取值范围：0 ~ 1024
    *
    * @return $this
    */
    public function setFileSplitSize($fileSplitSize)
    {
        $this->container['fileSplitSize'] = $fileSplitSize;
        return $this;
    }

    /**
    * Gets enableStandbyBackup
    *  是否启用备机备份。  取值范围：true|false
    *
    * @return bool|null
    */
    public function getEnableStandbyBackup()
    {
        return $this->container['enableStandbyBackup'];
    }

    /**
    * Sets enableStandbyBackup
    *
    * @param bool|null $enableStandbyBackup 是否启用备机备份。  取值范围：true|false
    *
    * @return $this
    */
    public function setEnableStandbyBackup($enableStandbyBackup)
    {
        $this->container['enableStandbyBackup'] = $enableStandbyBackup;
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


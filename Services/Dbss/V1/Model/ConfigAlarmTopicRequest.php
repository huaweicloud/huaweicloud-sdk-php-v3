<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigAlarmTopicRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigAlarmTopicRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmCpu  CPU告警阈值(%)
    * alarmDisk  磁盘告警阈值(%)
    * alarmMemory  内存告警阈值(%)
    * alarmNum  每天发送告警总条数
    * alarmRisk  告警等级,默认为空。 - high：高  - medium：中  - low：低
    * alarmSwitch  通知开关 - ON：开启  - OFF：关闭
    * alarmTopicUrn  通知消息主题URN,调用SMN服务接口获取。当alarm_switch为ON时必填
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmCpu' => 'int',
            'alarmDisk' => 'int',
            'alarmMemory' => 'int',
            'alarmNum' => 'int',
            'alarmRisk' => 'string[]',
            'alarmSwitch' => 'string',
            'alarmTopicUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmCpu  CPU告警阈值(%)
    * alarmDisk  磁盘告警阈值(%)
    * alarmMemory  内存告警阈值(%)
    * alarmNum  每天发送告警总条数
    * alarmRisk  告警等级,默认为空。 - high：高  - medium：中  - low：低
    * alarmSwitch  通知开关 - ON：开启  - OFF：关闭
    * alarmTopicUrn  通知消息主题URN,调用SMN服务接口获取。当alarm_switch为ON时必填
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmCpu' => 'int32',
        'alarmDisk' => 'int32',
        'alarmMemory' => 'int32',
        'alarmNum' => 'int32',
        'alarmRisk' => null,
        'alarmSwitch' => null,
        'alarmTopicUrn' => null
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
    * alarmCpu  CPU告警阈值(%)
    * alarmDisk  磁盘告警阈值(%)
    * alarmMemory  内存告警阈值(%)
    * alarmNum  每天发送告警总条数
    * alarmRisk  告警等级,默认为空。 - high：高  - medium：中  - low：低
    * alarmSwitch  通知开关 - ON：开启  - OFF：关闭
    * alarmTopicUrn  通知消息主题URN,调用SMN服务接口获取。当alarm_switch为ON时必填
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmCpu' => 'alarm_cpu',
            'alarmDisk' => 'alarm_disk',
            'alarmMemory' => 'alarm_memory',
            'alarmNum' => 'alarm_num',
            'alarmRisk' => 'alarm_risk',
            'alarmSwitch' => 'alarm_switch',
            'alarmTopicUrn' => 'alarm_topic_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmCpu  CPU告警阈值(%)
    * alarmDisk  磁盘告警阈值(%)
    * alarmMemory  内存告警阈值(%)
    * alarmNum  每天发送告警总条数
    * alarmRisk  告警等级,默认为空。 - high：高  - medium：中  - low：低
    * alarmSwitch  通知开关 - ON：开启  - OFF：关闭
    * alarmTopicUrn  通知消息主题URN,调用SMN服务接口获取。当alarm_switch为ON时必填
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmCpu' => 'setAlarmCpu',
            'alarmDisk' => 'setAlarmDisk',
            'alarmMemory' => 'setAlarmMemory',
            'alarmNum' => 'setAlarmNum',
            'alarmRisk' => 'setAlarmRisk',
            'alarmSwitch' => 'setAlarmSwitch',
            'alarmTopicUrn' => 'setAlarmTopicUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmCpu  CPU告警阈值(%)
    * alarmDisk  磁盘告警阈值(%)
    * alarmMemory  内存告警阈值(%)
    * alarmNum  每天发送告警总条数
    * alarmRisk  告警等级,默认为空。 - high：高  - medium：中  - low：低
    * alarmSwitch  通知开关 - ON：开启  - OFF：关闭
    * alarmTopicUrn  通知消息主题URN,调用SMN服务接口获取。当alarm_switch为ON时必填
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmCpu' => 'getAlarmCpu',
            'alarmDisk' => 'getAlarmDisk',
            'alarmMemory' => 'getAlarmMemory',
            'alarmNum' => 'getAlarmNum',
            'alarmRisk' => 'getAlarmRisk',
            'alarmSwitch' => 'getAlarmSwitch',
            'alarmTopicUrn' => 'getAlarmTopicUrn'
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
        $this->container['alarmCpu'] = isset($data['alarmCpu']) ? $data['alarmCpu'] : null;
        $this->container['alarmDisk'] = isset($data['alarmDisk']) ? $data['alarmDisk'] : null;
        $this->container['alarmMemory'] = isset($data['alarmMemory']) ? $data['alarmMemory'] : null;
        $this->container['alarmNum'] = isset($data['alarmNum']) ? $data['alarmNum'] : null;
        $this->container['alarmRisk'] = isset($data['alarmRisk']) ? $data['alarmRisk'] : null;
        $this->container['alarmSwitch'] = isset($data['alarmSwitch']) ? $data['alarmSwitch'] : null;
        $this->container['alarmTopicUrn'] = isset($data['alarmTopicUrn']) ? $data['alarmTopicUrn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmCpu'] === null) {
            $invalidProperties[] = "'alarmCpu' can't be null";
        }
            if (($this->container['alarmCpu'] > 100)) {
                $invalidProperties[] = "invalid value for 'alarmCpu', must be smaller than or equal to 100.";
            }
            if (($this->container['alarmCpu'] < 1)) {
                $invalidProperties[] = "invalid value for 'alarmCpu', must be bigger than or equal to 1.";
            }
        if ($this->container['alarmDisk'] === null) {
            $invalidProperties[] = "'alarmDisk' can't be null";
        }
            if (($this->container['alarmDisk'] > 100)) {
                $invalidProperties[] = "invalid value for 'alarmDisk', must be smaller than or equal to 100.";
            }
            if (($this->container['alarmDisk'] < 1)) {
                $invalidProperties[] = "invalid value for 'alarmDisk', must be bigger than or equal to 1.";
            }
        if ($this->container['alarmMemory'] === null) {
            $invalidProperties[] = "'alarmMemory' can't be null";
        }
            if (($this->container['alarmMemory'] > 100)) {
                $invalidProperties[] = "invalid value for 'alarmMemory', must be smaller than or equal to 100.";
            }
            if (($this->container['alarmMemory'] < 1)) {
                $invalidProperties[] = "invalid value for 'alarmMemory', must be bigger than or equal to 1.";
            }
        if ($this->container['alarmNum'] === null) {
            $invalidProperties[] = "'alarmNum' can't be null";
        }
            if (($this->container['alarmNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'alarmNum', must be smaller than or equal to 65535.";
            }
            if (($this->container['alarmNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'alarmNum', must be bigger than or equal to 1.";
            }
        if ($this->container['alarmSwitch'] === null) {
            $invalidProperties[] = "'alarmSwitch' can't be null";
        }
            if ((mb_strlen($this->container['alarmSwitch']) > 32)) {
                $invalidProperties[] = "invalid value for 'alarmSwitch', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['alarmSwitch']) < 0)) {
                $invalidProperties[] = "invalid value for 'alarmSwitch', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alarmTopicUrn']) && (mb_strlen($this->container['alarmTopicUrn']) > 512)) {
                $invalidProperties[] = "invalid value for 'alarmTopicUrn', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['alarmTopicUrn']) && (mb_strlen($this->container['alarmTopicUrn']) < 0)) {
                $invalidProperties[] = "invalid value for 'alarmTopicUrn', the character length must be bigger than or equal to 0.";
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
    * Gets alarmCpu
    *  CPU告警阈值(%)
    *
    * @return int
    */
    public function getAlarmCpu()
    {
        return $this->container['alarmCpu'];
    }

    /**
    * Sets alarmCpu
    *
    * @param int $alarmCpu CPU告警阈值(%)
    *
    * @return $this
    */
    public function setAlarmCpu($alarmCpu)
    {
        $this->container['alarmCpu'] = $alarmCpu;
        return $this;
    }

    /**
    * Gets alarmDisk
    *  磁盘告警阈值(%)
    *
    * @return int
    */
    public function getAlarmDisk()
    {
        return $this->container['alarmDisk'];
    }

    /**
    * Sets alarmDisk
    *
    * @param int $alarmDisk 磁盘告警阈值(%)
    *
    * @return $this
    */
    public function setAlarmDisk($alarmDisk)
    {
        $this->container['alarmDisk'] = $alarmDisk;
        return $this;
    }

    /**
    * Gets alarmMemory
    *  内存告警阈值(%)
    *
    * @return int
    */
    public function getAlarmMemory()
    {
        return $this->container['alarmMemory'];
    }

    /**
    * Sets alarmMemory
    *
    * @param int $alarmMemory 内存告警阈值(%)
    *
    * @return $this
    */
    public function setAlarmMemory($alarmMemory)
    {
        $this->container['alarmMemory'] = $alarmMemory;
        return $this;
    }

    /**
    * Gets alarmNum
    *  每天发送告警总条数
    *
    * @return int
    */
    public function getAlarmNum()
    {
        return $this->container['alarmNum'];
    }

    /**
    * Sets alarmNum
    *
    * @param int $alarmNum 每天发送告警总条数
    *
    * @return $this
    */
    public function setAlarmNum($alarmNum)
    {
        $this->container['alarmNum'] = $alarmNum;
        return $this;
    }

    /**
    * Gets alarmRisk
    *  告警等级,默认为空。 - high：高  - medium：中  - low：低
    *
    * @return string[]|null
    */
    public function getAlarmRisk()
    {
        return $this->container['alarmRisk'];
    }

    /**
    * Sets alarmRisk
    *
    * @param string[]|null $alarmRisk 告警等级,默认为空。 - high：高  - medium：中  - low：低
    *
    * @return $this
    */
    public function setAlarmRisk($alarmRisk)
    {
        $this->container['alarmRisk'] = $alarmRisk;
        return $this;
    }

    /**
    * Gets alarmSwitch
    *  通知开关 - ON：开启  - OFF：关闭
    *
    * @return string
    */
    public function getAlarmSwitch()
    {
        return $this->container['alarmSwitch'];
    }

    /**
    * Sets alarmSwitch
    *
    * @param string $alarmSwitch 通知开关 - ON：开启  - OFF：关闭
    *
    * @return $this
    */
    public function setAlarmSwitch($alarmSwitch)
    {
        $this->container['alarmSwitch'] = $alarmSwitch;
        return $this;
    }

    /**
    * Gets alarmTopicUrn
    *  通知消息主题URN,调用SMN服务接口获取。当alarm_switch为ON时必填
    *
    * @return string|null
    */
    public function getAlarmTopicUrn()
    {
        return $this->container['alarmTopicUrn'];
    }

    /**
    * Sets alarmTopicUrn
    *
    * @param string|null $alarmTopicUrn 通知消息主题URN,调用SMN服务接口获取。当alarm_switch为ON时必填
    *
    * @return $this
    */
    public function setAlarmTopicUrn($alarmTopicUrn)
    {
        $this->container['alarmTopicUrn'] = $alarmTopicUrn;
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


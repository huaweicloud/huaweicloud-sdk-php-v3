<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduleDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduleDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  计划类型。有效值为'None'（无）和 'Custom'（自定义）。  Custom' 表示按照指定的 cron 计划触发，而 'None' 则表示取消定时计划。
    * cron  cron表达式，一种基于时间的任务调度器，type设置为Custom时，需要配置此值。
    * nextScheduledTime  下次执行任务的时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'cron' => 'string',
            'nextScheduledTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  计划类型。有效值为'None'（无）和 'Custom'（自定义）。  Custom' 表示按照指定的 cron 计划触发，而 'None' 则表示取消定时计划。
    * cron  cron表达式，一种基于时间的任务调度器，type设置为Custom时，需要配置此值。
    * nextScheduledTime  下次执行任务的时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'cron' => null,
        'nextScheduledTime' => null
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
    * type  计划类型。有效值为'None'（无）和 'Custom'（自定义）。  Custom' 表示按照指定的 cron 计划触发，而 'None' 则表示取消定时计划。
    * cron  cron表达式，一种基于时间的任务调度器，type设置为Custom时，需要配置此值。
    * nextScheduledTime  下次执行任务的时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'cron' => 'cron',
            'nextScheduledTime' => 'next_scheduled_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  计划类型。有效值为'None'（无）和 'Custom'（自定义）。  Custom' 表示按照指定的 cron 计划触发，而 'None' 则表示取消定时计划。
    * cron  cron表达式，一种基于时间的任务调度器，type设置为Custom时，需要配置此值。
    * nextScheduledTime  下次执行任务的时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'cron' => 'setCron',
            'nextScheduledTime' => 'setNextScheduledTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  计划类型。有效值为'None'（无）和 'Custom'（自定义）。  Custom' 表示按照指定的 cron 计划触发，而 'None' 则表示取消定时计划。
    * cron  cron表达式，一种基于时间的任务调度器，type设置为Custom时，需要配置此值。
    * nextScheduledTime  下次执行任务的时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'cron' => 'getCron',
            'nextScheduledTime' => 'getNextScheduledTime'
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
    const TYPE_NONE = 'None';
    const TYPE_CUSTOM = 'Custom';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NONE,
            self::TYPE_CUSTOM,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cron'] = isset($data['cron']) ? $data['cron'] : null;
        $this->container['nextScheduledTime'] = isset($data['nextScheduledTime']) ? $data['nextScheduledTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets type
    *  计划类型。有效值为'None'（无）和 'Custom'（自定义）。  Custom' 表示按照指定的 cron 计划触发，而 'None' 则表示取消定时计划。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 计划类型。有效值为'None'（无）和 'Custom'（自定义）。  Custom' 表示按照指定的 cron 计划触发，而 'None' 则表示取消定时计划。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets cron
    *  cron表达式，一种基于时间的任务调度器，type设置为Custom时，需要配置此值。
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
    * @param string|null $cron cron表达式，一种基于时间的任务调度器，type设置为Custom时，需要配置此值。
    *
    * @return $this
    */
    public function setCron($cron)
    {
        $this->container['cron'] = $cron;
        return $this;
    }

    /**
    * Gets nextScheduledTime
    *  下次执行任务的时间。
    *
    * @return string|null
    */
    public function getNextScheduledTime()
    {
        return $this->container['nextScheduledTime'];
    }

    /**
    * Sets nextScheduledTime
    *
    * @param string|null $nextScheduledTime 下次执行任务的时间。
    *
    * @return $this
    */
    public function setNextScheduledTime($nextScheduledTime)
    {
        $this->container['nextScheduledTime'] = $nextScheduledTime;
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


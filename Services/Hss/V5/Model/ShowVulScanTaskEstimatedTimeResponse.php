<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulScanTaskEstimatedTimeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulScanTaskEstimatedTimeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queueTime  **参数解释**： 执行漏洞扫描需要排队等待的时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    * runTime  **参数解释**: 本次任务执行需要的时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    * totalTime  **参数解释**: 从现在到任务结束需要的总时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queueTime' => 'int',
            'runTime' => 'int',
            'totalTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queueTime  **参数解释**： 执行漏洞扫描需要排队等待的时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    * runTime  **参数解释**: 本次任务执行需要的时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    * totalTime  **参数解释**: 从现在到任务结束需要的总时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queueTime' => 'int64',
        'runTime' => 'int64',
        'totalTime' => null
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
    * queueTime  **参数解释**： 执行漏洞扫描需要排队等待的时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    * runTime  **参数解释**: 本次任务执行需要的时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    * totalTime  **参数解释**: 从现在到任务结束需要的总时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queueTime' => 'queue_time',
            'runTime' => 'run_time',
            'totalTime' => 'total_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queueTime  **参数解释**： 执行漏洞扫描需要排队等待的时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    * runTime  **参数解释**: 本次任务执行需要的时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    * totalTime  **参数解释**: 从现在到任务结束需要的总时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'queueTime' => 'setQueueTime',
            'runTime' => 'setRunTime',
            'totalTime' => 'setTotalTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queueTime  **参数解释**： 执行漏洞扫描需要排队等待的时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    * runTime  **参数解释**: 本次任务执行需要的时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    * totalTime  **参数解释**: 从现在到任务结束需要的总时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'queueTime' => 'getQueueTime',
            'runTime' => 'getRunTime',
            'totalTime' => 'getTotalTime'
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
        $this->container['queueTime'] = isset($data['queueTime']) ? $data['queueTime'] : null;
        $this->container['runTime'] = isset($data['runTime']) ? $data['runTime'] : null;
        $this->container['totalTime'] = isset($data['totalTime']) ? $data['totalTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['queueTime']) && ($this->container['queueTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'queueTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['queueTime']) && ($this->container['queueTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'queueTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['runTime']) && ($this->container['runTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'runTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['runTime']) && ($this->container['runTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'runTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalTime']) && ($this->container['totalTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'totalTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['totalTime']) && ($this->container['totalTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalTime', must be bigger than or equal to 0.";
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
    * Gets queueTime
    *  **参数解释**： 执行漏洞扫描需要排队等待的时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getQueueTime()
    {
        return $this->container['queueTime'];
    }

    /**
    * Sets queueTime
    *
    * @param int|null $queueTime **参数解释**： 执行漏洞扫描需要排队等待的时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setQueueTime($queueTime)
    {
        $this->container['queueTime'] = $queueTime;
        return $this;
    }

    /**
    * Gets runTime
    *  **参数解释**: 本次任务执行需要的时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getRunTime()
    {
        return $this->container['runTime'];
    }

    /**
    * Sets runTime
    *
    * @param int|null $runTime **参数解释**: 本次任务执行需要的时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setRunTime($runTime)
    {
        $this->container['runTime'] = $runTime;
        return $this;
    }

    /**
    * Gets totalTime
    *  **参数解释**: 从现在到任务结束需要的总时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getTotalTime()
    {
        return $this->container['totalTime'];
    }

    /**
    * Sets totalTime
    *
    * @param int|null $totalTime **参数解释**: 从现在到任务结束需要的总时间，单位为分钟 **约束限制**： 不涉及 **取值范围**： 字符长度1-9223372036854775807 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTotalTime($totalTime)
    {
        $this->container['totalTime'] = $totalTime;
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


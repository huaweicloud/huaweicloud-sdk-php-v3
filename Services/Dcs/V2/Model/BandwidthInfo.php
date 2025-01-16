<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BandwidthInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BandwidthInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * beginTime  临时扩容开始时间
    * endTime  临时扩容结束时间
    * currentTime  当前时间
    * bandwidth  当前带宽，单位为GB
    * nextExpandTime  下一个扩容时间
    * expandCount  扩容数量
    * expandEffectTime  临时扩容时间间隔
    * expandIntervalTime  下一次可以扩容间隔时间
    * maxExpandCount  最大扩容数量
    * taskRunning  任务是否运行
    * assuredBandwidth  **参数解释**： 实例基准带宽。 **取值范围**： 不涉及。
    * maxBandwidthForNode  **参数解释**： 节点最大带宽。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'beginTime' => 'int',
            'endTime' => 'int',
            'currentTime' => 'int',
            'bandwidth' => 'int',
            'nextExpandTime' => 'int',
            'expandCount' => 'int',
            'expandEffectTime' => 'int',
            'expandIntervalTime' => 'int',
            'maxExpandCount' => 'int',
            'taskRunning' => 'bool',
            'assuredBandwidth' => 'int',
            'maxBandwidthForNode' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * beginTime  临时扩容开始时间
    * endTime  临时扩容结束时间
    * currentTime  当前时间
    * bandwidth  当前带宽，单位为GB
    * nextExpandTime  下一个扩容时间
    * expandCount  扩容数量
    * expandEffectTime  临时扩容时间间隔
    * expandIntervalTime  下一次可以扩容间隔时间
    * maxExpandCount  最大扩容数量
    * taskRunning  任务是否运行
    * assuredBandwidth  **参数解释**： 实例基准带宽。 **取值范围**： 不涉及。
    * maxBandwidthForNode  **参数解释**： 节点最大带宽。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'beginTime' => 'int64',
        'endTime' => 'int64',
        'currentTime' => 'int64',
        'bandwidth' => 'int32',
        'nextExpandTime' => 'int64',
        'expandCount' => 'int32',
        'expandEffectTime' => 'int64',
        'expandIntervalTime' => 'int64',
        'maxExpandCount' => 'int32',
        'taskRunning' => null,
        'assuredBandwidth' => null,
        'maxBandwidthForNode' => 'int32'
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
    * beginTime  临时扩容开始时间
    * endTime  临时扩容结束时间
    * currentTime  当前时间
    * bandwidth  当前带宽，单位为GB
    * nextExpandTime  下一个扩容时间
    * expandCount  扩容数量
    * expandEffectTime  临时扩容时间间隔
    * expandIntervalTime  下一次可以扩容间隔时间
    * maxExpandCount  最大扩容数量
    * taskRunning  任务是否运行
    * assuredBandwidth  **参数解释**： 实例基准带宽。 **取值范围**： 不涉及。
    * maxBandwidthForNode  **参数解释**： 节点最大带宽。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'currentTime' => 'current_time',
            'bandwidth' => 'bandwidth',
            'nextExpandTime' => 'next_expand_time',
            'expandCount' => 'expand_count',
            'expandEffectTime' => 'expand_effect_time',
            'expandIntervalTime' => 'expand_interval_time',
            'maxExpandCount' => 'max_expand_count',
            'taskRunning' => 'task_running',
            'assuredBandwidth' => 'assured_bandwidth',
            'maxBandwidthForNode' => 'max_bandwidth_for_node'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * beginTime  临时扩容开始时间
    * endTime  临时扩容结束时间
    * currentTime  当前时间
    * bandwidth  当前带宽，单位为GB
    * nextExpandTime  下一个扩容时间
    * expandCount  扩容数量
    * expandEffectTime  临时扩容时间间隔
    * expandIntervalTime  下一次可以扩容间隔时间
    * maxExpandCount  最大扩容数量
    * taskRunning  任务是否运行
    * assuredBandwidth  **参数解释**： 实例基准带宽。 **取值范围**： 不涉及。
    * maxBandwidthForNode  **参数解释**： 节点最大带宽。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'currentTime' => 'setCurrentTime',
            'bandwidth' => 'setBandwidth',
            'nextExpandTime' => 'setNextExpandTime',
            'expandCount' => 'setExpandCount',
            'expandEffectTime' => 'setExpandEffectTime',
            'expandIntervalTime' => 'setExpandIntervalTime',
            'maxExpandCount' => 'setMaxExpandCount',
            'taskRunning' => 'setTaskRunning',
            'assuredBandwidth' => 'setAssuredBandwidth',
            'maxBandwidthForNode' => 'setMaxBandwidthForNode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * beginTime  临时扩容开始时间
    * endTime  临时扩容结束时间
    * currentTime  当前时间
    * bandwidth  当前带宽，单位为GB
    * nextExpandTime  下一个扩容时间
    * expandCount  扩容数量
    * expandEffectTime  临时扩容时间间隔
    * expandIntervalTime  下一次可以扩容间隔时间
    * maxExpandCount  最大扩容数量
    * taskRunning  任务是否运行
    * assuredBandwidth  **参数解释**： 实例基准带宽。 **取值范围**： 不涉及。
    * maxBandwidthForNode  **参数解释**： 节点最大带宽。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'currentTime' => 'getCurrentTime',
            'bandwidth' => 'getBandwidth',
            'nextExpandTime' => 'getNextExpandTime',
            'expandCount' => 'getExpandCount',
            'expandEffectTime' => 'getExpandEffectTime',
            'expandIntervalTime' => 'getExpandIntervalTime',
            'maxExpandCount' => 'getMaxExpandCount',
            'taskRunning' => 'getTaskRunning',
            'assuredBandwidth' => 'getAssuredBandwidth',
            'maxBandwidthForNode' => 'getMaxBandwidthForNode'
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
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['currentTime'] = isset($data['currentTime']) ? $data['currentTime'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['nextExpandTime'] = isset($data['nextExpandTime']) ? $data['nextExpandTime'] : null;
        $this->container['expandCount'] = isset($data['expandCount']) ? $data['expandCount'] : null;
        $this->container['expandEffectTime'] = isset($data['expandEffectTime']) ? $data['expandEffectTime'] : null;
        $this->container['expandIntervalTime'] = isset($data['expandIntervalTime']) ? $data['expandIntervalTime'] : null;
        $this->container['maxExpandCount'] = isset($data['maxExpandCount']) ? $data['maxExpandCount'] : null;
        $this->container['taskRunning'] = isset($data['taskRunning']) ? $data['taskRunning'] : null;
        $this->container['assuredBandwidth'] = isset($data['assuredBandwidth']) ? $data['assuredBandwidth'] : null;
        $this->container['maxBandwidthForNode'] = isset($data['maxBandwidthForNode']) ? $data['maxBandwidthForNode'] : null;
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
    * Gets beginTime
    *  临时扩容开始时间
    *
    * @return int|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int|null $beginTime 临时扩容开始时间
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  临时扩容结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 临时扩容结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets currentTime
    *  当前时间
    *
    * @return int|null
    */
    public function getCurrentTime()
    {
        return $this->container['currentTime'];
    }

    /**
    * Sets currentTime
    *
    * @param int|null $currentTime 当前时间
    *
    * @return $this
    */
    public function setCurrentTime($currentTime)
    {
        $this->container['currentTime'] = $currentTime;
        return $this;
    }

    /**
    * Gets bandwidth
    *  当前带宽，单位为GB
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth 当前带宽，单位为GB
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets nextExpandTime
    *  下一个扩容时间
    *
    * @return int|null
    */
    public function getNextExpandTime()
    {
        return $this->container['nextExpandTime'];
    }

    /**
    * Sets nextExpandTime
    *
    * @param int|null $nextExpandTime 下一个扩容时间
    *
    * @return $this
    */
    public function setNextExpandTime($nextExpandTime)
    {
        $this->container['nextExpandTime'] = $nextExpandTime;
        return $this;
    }

    /**
    * Gets expandCount
    *  扩容数量
    *
    * @return int|null
    */
    public function getExpandCount()
    {
        return $this->container['expandCount'];
    }

    /**
    * Sets expandCount
    *
    * @param int|null $expandCount 扩容数量
    *
    * @return $this
    */
    public function setExpandCount($expandCount)
    {
        $this->container['expandCount'] = $expandCount;
        return $this;
    }

    /**
    * Gets expandEffectTime
    *  临时扩容时间间隔
    *
    * @return int|null
    */
    public function getExpandEffectTime()
    {
        return $this->container['expandEffectTime'];
    }

    /**
    * Sets expandEffectTime
    *
    * @param int|null $expandEffectTime 临时扩容时间间隔
    *
    * @return $this
    */
    public function setExpandEffectTime($expandEffectTime)
    {
        $this->container['expandEffectTime'] = $expandEffectTime;
        return $this;
    }

    /**
    * Gets expandIntervalTime
    *  下一次可以扩容间隔时间
    *
    * @return int|null
    */
    public function getExpandIntervalTime()
    {
        return $this->container['expandIntervalTime'];
    }

    /**
    * Sets expandIntervalTime
    *
    * @param int|null $expandIntervalTime 下一次可以扩容间隔时间
    *
    * @return $this
    */
    public function setExpandIntervalTime($expandIntervalTime)
    {
        $this->container['expandIntervalTime'] = $expandIntervalTime;
        return $this;
    }

    /**
    * Gets maxExpandCount
    *  最大扩容数量
    *
    * @return int|null
    */
    public function getMaxExpandCount()
    {
        return $this->container['maxExpandCount'];
    }

    /**
    * Sets maxExpandCount
    *
    * @param int|null $maxExpandCount 最大扩容数量
    *
    * @return $this
    */
    public function setMaxExpandCount($maxExpandCount)
    {
        $this->container['maxExpandCount'] = $maxExpandCount;
        return $this;
    }

    /**
    * Gets taskRunning
    *  任务是否运行
    *
    * @return bool|null
    */
    public function getTaskRunning()
    {
        return $this->container['taskRunning'];
    }

    /**
    * Sets taskRunning
    *
    * @param bool|null $taskRunning 任务是否运行
    *
    * @return $this
    */
    public function setTaskRunning($taskRunning)
    {
        $this->container['taskRunning'] = $taskRunning;
        return $this;
    }

    /**
    * Gets assuredBandwidth
    *  **参数解释**： 实例基准带宽。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getAssuredBandwidth()
    {
        return $this->container['assuredBandwidth'];
    }

    /**
    * Sets assuredBandwidth
    *
    * @param int|null $assuredBandwidth **参数解释**： 实例基准带宽。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAssuredBandwidth($assuredBandwidth)
    {
        $this->container['assuredBandwidth'] = $assuredBandwidth;
        return $this;
    }

    /**
    * Gets maxBandwidthForNode
    *  **参数解释**： 节点最大带宽。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMaxBandwidthForNode()
    {
        return $this->container['maxBandwidthForNode'];
    }

    /**
    * Sets maxBandwidthForNode
    *
    * @param int|null $maxBandwidthForNode **参数解释**： 节点最大带宽。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaxBandwidthForNode($maxBandwidthForNode)
    {
        $this->container['maxBandwidthForNode'] = $maxBandwidthForNode;
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


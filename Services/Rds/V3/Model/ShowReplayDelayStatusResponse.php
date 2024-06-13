<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowReplayDelayStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowReplayDelayStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * curDelayTimeMills  当前配置的延迟时间，单位ms
    * delayTimeValueRange  延迟时间参数取值范围
    * realDelayTimeMills  真实延迟时间，单位ms
    * curLogReplayPaused  当前日志回放状态。true表示回放暂停，false表示回放正常
    * latestReceiveLog  最新接收的日志
    * latestReplayLog  最新回放的日志位点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'curDelayTimeMills' => 'int',
            'delayTimeValueRange' => 'string',
            'realDelayTimeMills' => 'int',
            'curLogReplayPaused' => 'bool',
            'latestReceiveLog' => 'string',
            'latestReplayLog' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * curDelayTimeMills  当前配置的延迟时间，单位ms
    * delayTimeValueRange  延迟时间参数取值范围
    * realDelayTimeMills  真实延迟时间，单位ms
    * curLogReplayPaused  当前日志回放状态。true表示回放暂停，false表示回放正常
    * latestReceiveLog  最新接收的日志
    * latestReplayLog  最新回放的日志位点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'curDelayTimeMills' => 'int32',
        'delayTimeValueRange' => null,
        'realDelayTimeMills' => 'int32',
        'curLogReplayPaused' => null,
        'latestReceiveLog' => null,
        'latestReplayLog' => null
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
    * curDelayTimeMills  当前配置的延迟时间，单位ms
    * delayTimeValueRange  延迟时间参数取值范围
    * realDelayTimeMills  真实延迟时间，单位ms
    * curLogReplayPaused  当前日志回放状态。true表示回放暂停，false表示回放正常
    * latestReceiveLog  最新接收的日志
    * latestReplayLog  最新回放的日志位点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'curDelayTimeMills' => 'cur_delay_time_mills',
            'delayTimeValueRange' => 'delay_time_value_range',
            'realDelayTimeMills' => 'real_delay_time_mills',
            'curLogReplayPaused' => 'cur_log_replay_paused',
            'latestReceiveLog' => 'latest_receive_log',
            'latestReplayLog' => 'latest_replay_log'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * curDelayTimeMills  当前配置的延迟时间，单位ms
    * delayTimeValueRange  延迟时间参数取值范围
    * realDelayTimeMills  真实延迟时间，单位ms
    * curLogReplayPaused  当前日志回放状态。true表示回放暂停，false表示回放正常
    * latestReceiveLog  最新接收的日志
    * latestReplayLog  最新回放的日志位点
    *
    * @var string[]
    */
    protected static $setters = [
            'curDelayTimeMills' => 'setCurDelayTimeMills',
            'delayTimeValueRange' => 'setDelayTimeValueRange',
            'realDelayTimeMills' => 'setRealDelayTimeMills',
            'curLogReplayPaused' => 'setCurLogReplayPaused',
            'latestReceiveLog' => 'setLatestReceiveLog',
            'latestReplayLog' => 'setLatestReplayLog'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * curDelayTimeMills  当前配置的延迟时间，单位ms
    * delayTimeValueRange  延迟时间参数取值范围
    * realDelayTimeMills  真实延迟时间，单位ms
    * curLogReplayPaused  当前日志回放状态。true表示回放暂停，false表示回放正常
    * latestReceiveLog  最新接收的日志
    * latestReplayLog  最新回放的日志位点
    *
    * @var string[]
    */
    protected static $getters = [
            'curDelayTimeMills' => 'getCurDelayTimeMills',
            'delayTimeValueRange' => 'getDelayTimeValueRange',
            'realDelayTimeMills' => 'getRealDelayTimeMills',
            'curLogReplayPaused' => 'getCurLogReplayPaused',
            'latestReceiveLog' => 'getLatestReceiveLog',
            'latestReplayLog' => 'getLatestReplayLog'
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
        $this->container['curDelayTimeMills'] = isset($data['curDelayTimeMills']) ? $data['curDelayTimeMills'] : null;
        $this->container['delayTimeValueRange'] = isset($data['delayTimeValueRange']) ? $data['delayTimeValueRange'] : null;
        $this->container['realDelayTimeMills'] = isset($data['realDelayTimeMills']) ? $data['realDelayTimeMills'] : null;
        $this->container['curLogReplayPaused'] = isset($data['curLogReplayPaused']) ? $data['curLogReplayPaused'] : null;
        $this->container['latestReceiveLog'] = isset($data['latestReceiveLog']) ? $data['latestReceiveLog'] : null;
        $this->container['latestReplayLog'] = isset($data['latestReplayLog']) ? $data['latestReplayLog'] : null;
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
    * Gets curDelayTimeMills
    *  当前配置的延迟时间，单位ms
    *
    * @return int|null
    */
    public function getCurDelayTimeMills()
    {
        return $this->container['curDelayTimeMills'];
    }

    /**
    * Sets curDelayTimeMills
    *
    * @param int|null $curDelayTimeMills 当前配置的延迟时间，单位ms
    *
    * @return $this
    */
    public function setCurDelayTimeMills($curDelayTimeMills)
    {
        $this->container['curDelayTimeMills'] = $curDelayTimeMills;
        return $this;
    }

    /**
    * Gets delayTimeValueRange
    *  延迟时间参数取值范围
    *
    * @return string|null
    */
    public function getDelayTimeValueRange()
    {
        return $this->container['delayTimeValueRange'];
    }

    /**
    * Sets delayTimeValueRange
    *
    * @param string|null $delayTimeValueRange 延迟时间参数取值范围
    *
    * @return $this
    */
    public function setDelayTimeValueRange($delayTimeValueRange)
    {
        $this->container['delayTimeValueRange'] = $delayTimeValueRange;
        return $this;
    }

    /**
    * Gets realDelayTimeMills
    *  真实延迟时间，单位ms
    *
    * @return int|null
    */
    public function getRealDelayTimeMills()
    {
        return $this->container['realDelayTimeMills'];
    }

    /**
    * Sets realDelayTimeMills
    *
    * @param int|null $realDelayTimeMills 真实延迟时间，单位ms
    *
    * @return $this
    */
    public function setRealDelayTimeMills($realDelayTimeMills)
    {
        $this->container['realDelayTimeMills'] = $realDelayTimeMills;
        return $this;
    }

    /**
    * Gets curLogReplayPaused
    *  当前日志回放状态。true表示回放暂停，false表示回放正常
    *
    * @return bool|null
    */
    public function getCurLogReplayPaused()
    {
        return $this->container['curLogReplayPaused'];
    }

    /**
    * Sets curLogReplayPaused
    *
    * @param bool|null $curLogReplayPaused 当前日志回放状态。true表示回放暂停，false表示回放正常
    *
    * @return $this
    */
    public function setCurLogReplayPaused($curLogReplayPaused)
    {
        $this->container['curLogReplayPaused'] = $curLogReplayPaused;
        return $this;
    }

    /**
    * Gets latestReceiveLog
    *  最新接收的日志
    *
    * @return string|null
    */
    public function getLatestReceiveLog()
    {
        return $this->container['latestReceiveLog'];
    }

    /**
    * Sets latestReceiveLog
    *
    * @param string|null $latestReceiveLog 最新接收的日志
    *
    * @return $this
    */
    public function setLatestReceiveLog($latestReceiveLog)
    {
        $this->container['latestReceiveLog'] = $latestReceiveLog;
        return $this;
    }

    /**
    * Gets latestReplayLog
    *  最新回放的日志位点
    *
    * @return string|null
    */
    public function getLatestReplayLog()
    {
        return $this->container['latestReplayLog'];
    }

    /**
    * Sets latestReplayLog
    *
    * @param string|null $latestReplayLog 最新回放的日志位点
    *
    * @return $this
    */
    public function setLatestReplayLog($latestReplayLog)
    {
        $this->container['latestReplayLog'] = $latestReplayLog;
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


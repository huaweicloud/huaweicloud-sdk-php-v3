<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReadWrite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReadWrite';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * acceptCount  数值
    * acceptRate  数值
    * channelId  UUID
    * channelInstanceCount  采集通道实例的数量
    * heartBeat  heartBeat
    * heartBeatTime  最后一次接收到心跳信号的时间
    * latestTransmissionTime  最后一次传输的时间
    * minionId  UUID
    * sendCount  数值
    * sendRate  数值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'acceptCount' => 'int',
            'acceptRate' => 'int',
            'channelId' => 'string',
            'channelInstanceCount' => 'int',
            'heartBeat' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HeartBeat',
            'heartBeatTime' => 'int',
            'latestTransmissionTime' => '\DateTime',
            'minionId' => 'string',
            'sendCount' => 'int',
            'sendRate' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * acceptCount  数值
    * acceptRate  数值
    * channelId  UUID
    * channelInstanceCount  采集通道实例的数量
    * heartBeat  heartBeat
    * heartBeatTime  最后一次接收到心跳信号的时间
    * latestTransmissionTime  最后一次传输的时间
    * minionId  UUID
    * sendCount  数值
    * sendRate  数值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'acceptCount' => 'int64',
        'acceptRate' => 'int64',
        'channelId' => null,
        'channelInstanceCount' => 'int32',
        'heartBeat' => null,
        'heartBeatTime' => 'int64',
        'latestTransmissionTime' => 'date-time',
        'minionId' => null,
        'sendCount' => 'int64',
        'sendRate' => 'int64'
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
    * acceptCount  数值
    * acceptRate  数值
    * channelId  UUID
    * channelInstanceCount  采集通道实例的数量
    * heartBeat  heartBeat
    * heartBeatTime  最后一次接收到心跳信号的时间
    * latestTransmissionTime  最后一次传输的时间
    * minionId  UUID
    * sendCount  数值
    * sendRate  数值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'acceptCount' => 'accept_count',
            'acceptRate' => 'accept_rate',
            'channelId' => 'channel_id',
            'channelInstanceCount' => 'channel_instance_count',
            'heartBeat' => 'heart_beat',
            'heartBeatTime' => 'heart_beat_time',
            'latestTransmissionTime' => 'latest_transmission_time',
            'minionId' => 'minion_id',
            'sendCount' => 'send_count',
            'sendRate' => 'send_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * acceptCount  数值
    * acceptRate  数值
    * channelId  UUID
    * channelInstanceCount  采集通道实例的数量
    * heartBeat  heartBeat
    * heartBeatTime  最后一次接收到心跳信号的时间
    * latestTransmissionTime  最后一次传输的时间
    * minionId  UUID
    * sendCount  数值
    * sendRate  数值
    *
    * @var string[]
    */
    protected static $setters = [
            'acceptCount' => 'setAcceptCount',
            'acceptRate' => 'setAcceptRate',
            'channelId' => 'setChannelId',
            'channelInstanceCount' => 'setChannelInstanceCount',
            'heartBeat' => 'setHeartBeat',
            'heartBeatTime' => 'setHeartBeatTime',
            'latestTransmissionTime' => 'setLatestTransmissionTime',
            'minionId' => 'setMinionId',
            'sendCount' => 'setSendCount',
            'sendRate' => 'setSendRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * acceptCount  数值
    * acceptRate  数值
    * channelId  UUID
    * channelInstanceCount  采集通道实例的数量
    * heartBeat  heartBeat
    * heartBeatTime  最后一次接收到心跳信号的时间
    * latestTransmissionTime  最后一次传输的时间
    * minionId  UUID
    * sendCount  数值
    * sendRate  数值
    *
    * @var string[]
    */
    protected static $getters = [
            'acceptCount' => 'getAcceptCount',
            'acceptRate' => 'getAcceptRate',
            'channelId' => 'getChannelId',
            'channelInstanceCount' => 'getChannelInstanceCount',
            'heartBeat' => 'getHeartBeat',
            'heartBeatTime' => 'getHeartBeatTime',
            'latestTransmissionTime' => 'getLatestTransmissionTime',
            'minionId' => 'getMinionId',
            'sendCount' => 'getSendCount',
            'sendRate' => 'getSendRate'
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
        $this->container['acceptCount'] = isset($data['acceptCount']) ? $data['acceptCount'] : null;
        $this->container['acceptRate'] = isset($data['acceptRate']) ? $data['acceptRate'] : null;
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['channelInstanceCount'] = isset($data['channelInstanceCount']) ? $data['channelInstanceCount'] : null;
        $this->container['heartBeat'] = isset($data['heartBeat']) ? $data['heartBeat'] : null;
        $this->container['heartBeatTime'] = isset($data['heartBeatTime']) ? $data['heartBeatTime'] : null;
        $this->container['latestTransmissionTime'] = isset($data['latestTransmissionTime']) ? $data['latestTransmissionTime'] : null;
        $this->container['minionId'] = isset($data['minionId']) ? $data['minionId'] : null;
        $this->container['sendCount'] = isset($data['sendCount']) ? $data['sendCount'] : null;
        $this->container['sendRate'] = isset($data['sendRate']) ? $data['sendRate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['acceptCount']) && ($this->container['acceptCount'] > 1024)) {
                $invalidProperties[] = "invalid value for 'acceptCount', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['acceptCount']) && ($this->container['acceptCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'acceptCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['acceptRate']) && ($this->container['acceptRate'] > 1024)) {
                $invalidProperties[] = "invalid value for 'acceptRate', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['acceptRate']) && ($this->container['acceptRate'] < 1)) {
                $invalidProperties[] = "invalid value for 'acceptRate', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['channelId']) && (mb_strlen($this->container['channelId']) > 36)) {
                $invalidProperties[] = "invalid value for 'channelId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['channelId']) && (mb_strlen($this->container['channelId']) < 36)) {
                $invalidProperties[] = "invalid value for 'channelId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['channelInstanceCount']) && ($this->container['channelInstanceCount'] > 1024)) {
                $invalidProperties[] = "invalid value for 'channelInstanceCount', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['channelInstanceCount']) && ($this->container['channelInstanceCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'channelInstanceCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['heartBeatTime']) && ($this->container['heartBeatTime'] > 9223372036854775800)) {
                $invalidProperties[] = "invalid value for 'heartBeatTime', must be smaller than or equal to 9223372036854775800.";
            }
            if (!is_null($this->container['heartBeatTime']) && ($this->container['heartBeatTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'heartBeatTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['minionId']) && (mb_strlen($this->container['minionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'minionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['minionId']) && (mb_strlen($this->container['minionId']) < 36)) {
                $invalidProperties[] = "invalid value for 'minionId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['sendCount']) && ($this->container['sendCount'] > 1024)) {
                $invalidProperties[] = "invalid value for 'sendCount', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sendCount']) && ($this->container['sendCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'sendCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sendRate']) && ($this->container['sendRate'] > 1024)) {
                $invalidProperties[] = "invalid value for 'sendRate', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sendRate']) && ($this->container['sendRate'] < 1)) {
                $invalidProperties[] = "invalid value for 'sendRate', must be bigger than or equal to 1.";
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
    * Gets acceptCount
    *  数值
    *
    * @return int|null
    */
    public function getAcceptCount()
    {
        return $this->container['acceptCount'];
    }

    /**
    * Sets acceptCount
    *
    * @param int|null $acceptCount 数值
    *
    * @return $this
    */
    public function setAcceptCount($acceptCount)
    {
        $this->container['acceptCount'] = $acceptCount;
        return $this;
    }

    /**
    * Gets acceptRate
    *  数值
    *
    * @return int|null
    */
    public function getAcceptRate()
    {
        return $this->container['acceptRate'];
    }

    /**
    * Sets acceptRate
    *
    * @param int|null $acceptRate 数值
    *
    * @return $this
    */
    public function setAcceptRate($acceptRate)
    {
        $this->container['acceptRate'] = $acceptRate;
        return $this;
    }

    /**
    * Gets channelId
    *  UUID
    *
    * @return string|null
    */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
    * Sets channelId
    *
    * @param string|null $channelId UUID
    *
    * @return $this
    */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;
        return $this;
    }

    /**
    * Gets channelInstanceCount
    *  采集通道实例的数量
    *
    * @return int|null
    */
    public function getChannelInstanceCount()
    {
        return $this->container['channelInstanceCount'];
    }

    /**
    * Sets channelInstanceCount
    *
    * @param int|null $channelInstanceCount 采集通道实例的数量
    *
    * @return $this
    */
    public function setChannelInstanceCount($channelInstanceCount)
    {
        $this->container['channelInstanceCount'] = $channelInstanceCount;
        return $this;
    }

    /**
    * Gets heartBeat
    *  heartBeat
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HeartBeat|null
    */
    public function getHeartBeat()
    {
        return $this->container['heartBeat'];
    }

    /**
    * Sets heartBeat
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HeartBeat|null $heartBeat heartBeat
    *
    * @return $this
    */
    public function setHeartBeat($heartBeat)
    {
        $this->container['heartBeat'] = $heartBeat;
        return $this;
    }

    /**
    * Gets heartBeatTime
    *  最后一次接收到心跳信号的时间
    *
    * @return int|null
    */
    public function getHeartBeatTime()
    {
        return $this->container['heartBeatTime'];
    }

    /**
    * Sets heartBeatTime
    *
    * @param int|null $heartBeatTime 最后一次接收到心跳信号的时间
    *
    * @return $this
    */
    public function setHeartBeatTime($heartBeatTime)
    {
        $this->container['heartBeatTime'] = $heartBeatTime;
        return $this;
    }

    /**
    * Gets latestTransmissionTime
    *  最后一次传输的时间
    *
    * @return \DateTime|null
    */
    public function getLatestTransmissionTime()
    {
        return $this->container['latestTransmissionTime'];
    }

    /**
    * Sets latestTransmissionTime
    *
    * @param \DateTime|null $latestTransmissionTime 最后一次传输的时间
    *
    * @return $this
    */
    public function setLatestTransmissionTime($latestTransmissionTime)
    {
        $this->container['latestTransmissionTime'] = $latestTransmissionTime;
        return $this;
    }

    /**
    * Gets minionId
    *  UUID
    *
    * @return string|null
    */
    public function getMinionId()
    {
        return $this->container['minionId'];
    }

    /**
    * Sets minionId
    *
    * @param string|null $minionId UUID
    *
    * @return $this
    */
    public function setMinionId($minionId)
    {
        $this->container['minionId'] = $minionId;
        return $this;
    }

    /**
    * Gets sendCount
    *  数值
    *
    * @return int|null
    */
    public function getSendCount()
    {
        return $this->container['sendCount'];
    }

    /**
    * Sets sendCount
    *
    * @param int|null $sendCount 数值
    *
    * @return $this
    */
    public function setSendCount($sendCount)
    {
        $this->container['sendCount'] = $sendCount;
        return $this;
    }

    /**
    * Gets sendRate
    *  数值
    *
    * @return int|null
    */
    public function getSendRate()
    {
        return $this->container['sendRate'];
    }

    /**
    * Sets sendRate
    *
    * @param int|null $sendRate 数值
    *
    * @return $this
    */
    public function setSendRate($sendRate)
    {
        $this->container['sendRate'] = $sendRate;
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


<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QosSendReceiveInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QosSendReceiveInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bitrate  码率, 单位kbps，不含阈值告警。当qosType = audio/video/screen 时有效。
    * latency  时延，单位毫秒, 含阈值告警。当qosType = audio/video/screen 时有效。
    * jitter  抖动, 单位毫秒，含阈值告警。当qosType = audio/video/screen 时有效。
    * packetLossMax  最大丢包率, 单位百分比 含阈值告警。当qosType = audio/video/screen 时有效。
    * resolution  分辨率, 不含阈值告警。当qosType = video/screen 时有效。
    * frame  帧率, 单位fps，不含阈值告警。当qosType = video/screen 时有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bitrate' => '\HuaweiCloud\SDK\Meeting\V1\Model\QosDataNoThrElement[]',
            'latency' => '\HuaweiCloud\SDK\Meeting\V1\Model\QosDataElement[]',
            'jitter' => '\HuaweiCloud\SDK\Meeting\V1\Model\QosDataElement[]',
            'packetLossMax' => '\HuaweiCloud\SDK\Meeting\V1\Model\QosDataElement[]',
            'resolution' => '\HuaweiCloud\SDK\Meeting\V1\Model\QosDataNoThrElement[]',
            'frame' => '\HuaweiCloud\SDK\Meeting\V1\Model\QosDataNoThrElement[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bitrate  码率, 单位kbps，不含阈值告警。当qosType = audio/video/screen 时有效。
    * latency  时延，单位毫秒, 含阈值告警。当qosType = audio/video/screen 时有效。
    * jitter  抖动, 单位毫秒，含阈值告警。当qosType = audio/video/screen 时有效。
    * packetLossMax  最大丢包率, 单位百分比 含阈值告警。当qosType = audio/video/screen 时有效。
    * resolution  分辨率, 不含阈值告警。当qosType = video/screen 时有效。
    * frame  帧率, 单位fps，不含阈值告警。当qosType = video/screen 时有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bitrate' => null,
        'latency' => null,
        'jitter' => null,
        'packetLossMax' => null,
        'resolution' => null,
        'frame' => null
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
    * bitrate  码率, 单位kbps，不含阈值告警。当qosType = audio/video/screen 时有效。
    * latency  时延，单位毫秒, 含阈值告警。当qosType = audio/video/screen 时有效。
    * jitter  抖动, 单位毫秒，含阈值告警。当qosType = audio/video/screen 时有效。
    * packetLossMax  最大丢包率, 单位百分比 含阈值告警。当qosType = audio/video/screen 时有效。
    * resolution  分辨率, 不含阈值告警。当qosType = video/screen 时有效。
    * frame  帧率, 单位fps，不含阈值告警。当qosType = video/screen 时有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bitrate' => 'bitrate',
            'latency' => 'latency',
            'jitter' => 'jitter',
            'packetLossMax' => 'packet_loss_max',
            'resolution' => 'resolution',
            'frame' => 'frame'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bitrate  码率, 单位kbps，不含阈值告警。当qosType = audio/video/screen 时有效。
    * latency  时延，单位毫秒, 含阈值告警。当qosType = audio/video/screen 时有效。
    * jitter  抖动, 单位毫秒，含阈值告警。当qosType = audio/video/screen 时有效。
    * packetLossMax  最大丢包率, 单位百分比 含阈值告警。当qosType = audio/video/screen 时有效。
    * resolution  分辨率, 不含阈值告警。当qosType = video/screen 时有效。
    * frame  帧率, 单位fps，不含阈值告警。当qosType = video/screen 时有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'bitrate' => 'setBitrate',
            'latency' => 'setLatency',
            'jitter' => 'setJitter',
            'packetLossMax' => 'setPacketLossMax',
            'resolution' => 'setResolution',
            'frame' => 'setFrame'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bitrate  码率, 单位kbps，不含阈值告警。当qosType = audio/video/screen 时有效。
    * latency  时延，单位毫秒, 含阈值告警。当qosType = audio/video/screen 时有效。
    * jitter  抖动, 单位毫秒，含阈值告警。当qosType = audio/video/screen 时有效。
    * packetLossMax  最大丢包率, 单位百分比 含阈值告警。当qosType = audio/video/screen 时有效。
    * resolution  分辨率, 不含阈值告警。当qosType = video/screen 时有效。
    * frame  帧率, 单位fps，不含阈值告警。当qosType = video/screen 时有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'bitrate' => 'getBitrate',
            'latency' => 'getLatency',
            'jitter' => 'getJitter',
            'packetLossMax' => 'getPacketLossMax',
            'resolution' => 'getResolution',
            'frame' => 'getFrame'
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
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['latency'] = isset($data['latency']) ? $data['latency'] : null;
        $this->container['jitter'] = isset($data['jitter']) ? $data['jitter'] : null;
        $this->container['packetLossMax'] = isset($data['packetLossMax']) ? $data['packetLossMax'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['frame'] = isset($data['frame']) ? $data['frame'] : null;
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
    * Gets bitrate
    *  码率, 单位kbps，不含阈值告警。当qosType = audio/video/screen 时有效。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QosDataNoThrElement[]|null
    */
    public function getBitrate()
    {
        return $this->container['bitrate'];
    }

    /**
    * Sets bitrate
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QosDataNoThrElement[]|null $bitrate 码率, 单位kbps，不含阈值告警。当qosType = audio/video/screen 时有效。
    *
    * @return $this
    */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;
        return $this;
    }

    /**
    * Gets latency
    *  时延，单位毫秒, 含阈值告警。当qosType = audio/video/screen 时有效。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QosDataElement[]|null
    */
    public function getLatency()
    {
        return $this->container['latency'];
    }

    /**
    * Sets latency
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QosDataElement[]|null $latency 时延，单位毫秒, 含阈值告警。当qosType = audio/video/screen 时有效。
    *
    * @return $this
    */
    public function setLatency($latency)
    {
        $this->container['latency'] = $latency;
        return $this;
    }

    /**
    * Gets jitter
    *  抖动, 单位毫秒，含阈值告警。当qosType = audio/video/screen 时有效。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QosDataElement[]|null
    */
    public function getJitter()
    {
        return $this->container['jitter'];
    }

    /**
    * Sets jitter
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QosDataElement[]|null $jitter 抖动, 单位毫秒，含阈值告警。当qosType = audio/video/screen 时有效。
    *
    * @return $this
    */
    public function setJitter($jitter)
    {
        $this->container['jitter'] = $jitter;
        return $this;
    }

    /**
    * Gets packetLossMax
    *  最大丢包率, 单位百分比 含阈值告警。当qosType = audio/video/screen 时有效。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QosDataElement[]|null
    */
    public function getPacketLossMax()
    {
        return $this->container['packetLossMax'];
    }

    /**
    * Sets packetLossMax
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QosDataElement[]|null $packetLossMax 最大丢包率, 单位百分比 含阈值告警。当qosType = audio/video/screen 时有效。
    *
    * @return $this
    */
    public function setPacketLossMax($packetLossMax)
    {
        $this->container['packetLossMax'] = $packetLossMax;
        return $this;
    }

    /**
    * Gets resolution
    *  分辨率, 不含阈值告警。当qosType = video/screen 时有效。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QosDataNoThrElement[]|null
    */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
    * Sets resolution
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QosDataNoThrElement[]|null $resolution 分辨率, 不含阈值告警。当qosType = video/screen 时有效。
    *
    * @return $this
    */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;
        return $this;
    }

    /**
    * Gets frame
    *  帧率, 单位fps，不含阈值告警。当qosType = video/screen 时有效。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\QosDataNoThrElement[]|null
    */
    public function getFrame()
    {
        return $this->container['frame'];
    }

    /**
    * Sets frame
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\QosDataNoThrElement[]|null $frame 帧率, 单位fps，不含阈值告警。当qosType = video/screen 时有效。
    *
    * @return $this
    */
    public function setFrame($frame)
    {
        $this->container['frame'] = $frame;
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


<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserQos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserQos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * participantId  会场ID
    * netRate  网络质量评级
    * bandWidthUp  上行总带宽(kbit/s)
    * bandWidthDown  下行总带宽(kbit/s)
    * lostPacketRateUp  上行丢包率（千分数）
    * lostPacketRateDown  下行丢包率（千分数）
    * delay  时延(ms)
    * videoQos  videoQos
    * audioQos  audioQos
    * auxQos  auxQos
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'participantId' => 'string',
            'netRate' => 'string',
            'bandWidthUp' => 'int',
            'bandWidthDown' => 'int',
            'lostPacketRateUp' => 'int',
            'lostPacketRateDown' => 'int',
            'delay' => 'int',
            'videoQos' => '\HuaweiCloud\SDK\Meeting\V1\Model\MediaQos',
            'audioQos' => '\HuaweiCloud\SDK\Meeting\V1\Model\MediaQos',
            'auxQos' => '\HuaweiCloud\SDK\Meeting\V1\Model\MediaQos'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * participantId  会场ID
    * netRate  网络质量评级
    * bandWidthUp  上行总带宽(kbit/s)
    * bandWidthDown  下行总带宽(kbit/s)
    * lostPacketRateUp  上行丢包率（千分数）
    * lostPacketRateDown  下行丢包率（千分数）
    * delay  时延(ms)
    * videoQos  videoQos
    * audioQos  audioQos
    * auxQos  auxQos
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'participantId' => null,
        'netRate' => null,
        'bandWidthUp' => 'int32',
        'bandWidthDown' => 'int32',
        'lostPacketRateUp' => 'int32',
        'lostPacketRateDown' => 'int32',
        'delay' => 'int32',
        'videoQos' => null,
        'audioQos' => null,
        'auxQos' => null
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
    * participantId  会场ID
    * netRate  网络质量评级
    * bandWidthUp  上行总带宽(kbit/s)
    * bandWidthDown  下行总带宽(kbit/s)
    * lostPacketRateUp  上行丢包率（千分数）
    * lostPacketRateDown  下行丢包率（千分数）
    * delay  时延(ms)
    * videoQos  videoQos
    * audioQos  audioQos
    * auxQos  auxQos
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'participantId' => 'participantID',
            'netRate' => 'netRate',
            'bandWidthUp' => 'bandWidthUp',
            'bandWidthDown' => 'bandWidthDown',
            'lostPacketRateUp' => 'lostPacketRateUp',
            'lostPacketRateDown' => 'lostPacketRateDown',
            'delay' => 'delay',
            'videoQos' => 'videoQos',
            'audioQos' => 'audioQos',
            'auxQos' => 'auxQos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * participantId  会场ID
    * netRate  网络质量评级
    * bandWidthUp  上行总带宽(kbit/s)
    * bandWidthDown  下行总带宽(kbit/s)
    * lostPacketRateUp  上行丢包率（千分数）
    * lostPacketRateDown  下行丢包率（千分数）
    * delay  时延(ms)
    * videoQos  videoQos
    * audioQos  audioQos
    * auxQos  auxQos
    *
    * @var string[]
    */
    protected static $setters = [
            'participantId' => 'setParticipantId',
            'netRate' => 'setNetRate',
            'bandWidthUp' => 'setBandWidthUp',
            'bandWidthDown' => 'setBandWidthDown',
            'lostPacketRateUp' => 'setLostPacketRateUp',
            'lostPacketRateDown' => 'setLostPacketRateDown',
            'delay' => 'setDelay',
            'videoQos' => 'setVideoQos',
            'audioQos' => 'setAudioQos',
            'auxQos' => 'setAuxQos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * participantId  会场ID
    * netRate  网络质量评级
    * bandWidthUp  上行总带宽(kbit/s)
    * bandWidthDown  下行总带宽(kbit/s)
    * lostPacketRateUp  上行丢包率（千分数）
    * lostPacketRateDown  下行丢包率（千分数）
    * delay  时延(ms)
    * videoQos  videoQos
    * audioQos  audioQos
    * auxQos  auxQos
    *
    * @var string[]
    */
    protected static $getters = [
            'participantId' => 'getParticipantId',
            'netRate' => 'getNetRate',
            'bandWidthUp' => 'getBandWidthUp',
            'bandWidthDown' => 'getBandWidthDown',
            'lostPacketRateUp' => 'getLostPacketRateUp',
            'lostPacketRateDown' => 'getLostPacketRateDown',
            'delay' => 'getDelay',
            'videoQos' => 'getVideoQos',
            'audioQos' => 'getAudioQos',
            'auxQos' => 'getAuxQos'
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
        $this->container['participantId'] = isset($data['participantId']) ? $data['participantId'] : null;
        $this->container['netRate'] = isset($data['netRate']) ? $data['netRate'] : null;
        $this->container['bandWidthUp'] = isset($data['bandWidthUp']) ? $data['bandWidthUp'] : null;
        $this->container['bandWidthDown'] = isset($data['bandWidthDown']) ? $data['bandWidthDown'] : null;
        $this->container['lostPacketRateUp'] = isset($data['lostPacketRateUp']) ? $data['lostPacketRateUp'] : null;
        $this->container['lostPacketRateDown'] = isset($data['lostPacketRateDown']) ? $data['lostPacketRateDown'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['videoQos'] = isset($data['videoQos']) ? $data['videoQos'] : null;
        $this->container['audioQos'] = isset($data['audioQos']) ? $data['audioQos'] : null;
        $this->container['auxQos'] = isset($data['auxQos']) ? $data['auxQos'] : null;
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
    * Gets participantId
    *  会场ID
    *
    * @return string|null
    */
    public function getParticipantId()
    {
        return $this->container['participantId'];
    }

    /**
    * Sets participantId
    *
    * @param string|null $participantId 会场ID
    *
    * @return $this
    */
    public function setParticipantId($participantId)
    {
        $this->container['participantId'] = $participantId;
        return $this;
    }

    /**
    * Gets netRate
    *  网络质量评级
    *
    * @return string|null
    */
    public function getNetRate()
    {
        return $this->container['netRate'];
    }

    /**
    * Sets netRate
    *
    * @param string|null $netRate 网络质量评级
    *
    * @return $this
    */
    public function setNetRate($netRate)
    {
        $this->container['netRate'] = $netRate;
        return $this;
    }

    /**
    * Gets bandWidthUp
    *  上行总带宽(kbit/s)
    *
    * @return int|null
    */
    public function getBandWidthUp()
    {
        return $this->container['bandWidthUp'];
    }

    /**
    * Sets bandWidthUp
    *
    * @param int|null $bandWidthUp 上行总带宽(kbit/s)
    *
    * @return $this
    */
    public function setBandWidthUp($bandWidthUp)
    {
        $this->container['bandWidthUp'] = $bandWidthUp;
        return $this;
    }

    /**
    * Gets bandWidthDown
    *  下行总带宽(kbit/s)
    *
    * @return int|null
    */
    public function getBandWidthDown()
    {
        return $this->container['bandWidthDown'];
    }

    /**
    * Sets bandWidthDown
    *
    * @param int|null $bandWidthDown 下行总带宽(kbit/s)
    *
    * @return $this
    */
    public function setBandWidthDown($bandWidthDown)
    {
        $this->container['bandWidthDown'] = $bandWidthDown;
        return $this;
    }

    /**
    * Gets lostPacketRateUp
    *  上行丢包率（千分数）
    *
    * @return int|null
    */
    public function getLostPacketRateUp()
    {
        return $this->container['lostPacketRateUp'];
    }

    /**
    * Sets lostPacketRateUp
    *
    * @param int|null $lostPacketRateUp 上行丢包率（千分数）
    *
    * @return $this
    */
    public function setLostPacketRateUp($lostPacketRateUp)
    {
        $this->container['lostPacketRateUp'] = $lostPacketRateUp;
        return $this;
    }

    /**
    * Gets lostPacketRateDown
    *  下行丢包率（千分数）
    *
    * @return int|null
    */
    public function getLostPacketRateDown()
    {
        return $this->container['lostPacketRateDown'];
    }

    /**
    * Sets lostPacketRateDown
    *
    * @param int|null $lostPacketRateDown 下行丢包率（千分数）
    *
    * @return $this
    */
    public function setLostPacketRateDown($lostPacketRateDown)
    {
        $this->container['lostPacketRateDown'] = $lostPacketRateDown;
        return $this;
    }

    /**
    * Gets delay
    *  时延(ms)
    *
    * @return int|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param int|null $delay 时延(ms)
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
        return $this;
    }

    /**
    * Gets videoQos
    *  videoQos
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\MediaQos|null
    */
    public function getVideoQos()
    {
        return $this->container['videoQos'];
    }

    /**
    * Sets videoQos
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\MediaQos|null $videoQos videoQos
    *
    * @return $this
    */
    public function setVideoQos($videoQos)
    {
        $this->container['videoQos'] = $videoQos;
        return $this;
    }

    /**
    * Gets audioQos
    *  audioQos
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\MediaQos|null
    */
    public function getAudioQos()
    {
        return $this->container['audioQos'];
    }

    /**
    * Sets audioQos
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\MediaQos|null $audioQos audioQos
    *
    * @return $this
    */
    public function setAudioQos($audioQos)
    {
        $this->container['audioQos'] = $audioQos;
        return $this;
    }

    /**
    * Gets auxQos
    *  auxQos
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\MediaQos|null
    */
    public function getAuxQos()
    {
        return $this->container['auxQos'];
    }

    /**
    * Sets auxQos
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\MediaQos|null $auxQos auxQos
    *
    * @return $this
    */
    public function setAuxQos($auxQos)
    {
        $this->container['auxQos'] = $auxQos;
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


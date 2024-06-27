<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Qos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Qos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * networkQuality  网络质量评级
    * codecType  编解码类型
    * bandWidth  带宽(kbit/s)
    * lostPacketRate  丢包率（千分数）
    * delay  时延(ms)
    * jitter  抖动(ms)
    * resolutionHeight  分辨率:高
    * resolutionWidth  分辨率：宽
    * frameRate  帧率
    * codecUserId  该媒体流编码会场ID，仅服务器向端侧发送方向涉及(视频)，如路径A-->服务器-->B，即B观看A，该媒体流的codec_user_id为A
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'networkQuality' => 'string',
            'codecType' => 'string',
            'bandWidth' => 'int',
            'lostPacketRate' => 'int',
            'delay' => 'int',
            'jitter' => 'int',
            'resolutionHeight' => 'int',
            'resolutionWidth' => 'int',
            'frameRate' => 'int',
            'codecUserId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * networkQuality  网络质量评级
    * codecType  编解码类型
    * bandWidth  带宽(kbit/s)
    * lostPacketRate  丢包率（千分数）
    * delay  时延(ms)
    * jitter  抖动(ms)
    * resolutionHeight  分辨率:高
    * resolutionWidth  分辨率：宽
    * frameRate  帧率
    * codecUserId  该媒体流编码会场ID，仅服务器向端侧发送方向涉及(视频)，如路径A-->服务器-->B，即B观看A，该媒体流的codec_user_id为A
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'networkQuality' => null,
        'codecType' => null,
        'bandWidth' => 'int32',
        'lostPacketRate' => 'int32',
        'delay' => 'int32',
        'jitter' => 'int32',
        'resolutionHeight' => 'int32',
        'resolutionWidth' => 'int32',
        'frameRate' => 'int32',
        'codecUserId' => null
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
    * networkQuality  网络质量评级
    * codecType  编解码类型
    * bandWidth  带宽(kbit/s)
    * lostPacketRate  丢包率（千分数）
    * delay  时延(ms)
    * jitter  抖动(ms)
    * resolutionHeight  分辨率:高
    * resolutionWidth  分辨率：宽
    * frameRate  帧率
    * codecUserId  该媒体流编码会场ID，仅服务器向端侧发送方向涉及(视频)，如路径A-->服务器-->B，即B观看A，该媒体流的codec_user_id为A
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'networkQuality' => 'networkQuality',
            'codecType' => 'codecType',
            'bandWidth' => 'bandWidth',
            'lostPacketRate' => 'lostPacketRate',
            'delay' => 'delay',
            'jitter' => 'jitter',
            'resolutionHeight' => 'resolutionHeight',
            'resolutionWidth' => 'resolutionWidth',
            'frameRate' => 'frameRate',
            'codecUserId' => 'codecUserId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * networkQuality  网络质量评级
    * codecType  编解码类型
    * bandWidth  带宽(kbit/s)
    * lostPacketRate  丢包率（千分数）
    * delay  时延(ms)
    * jitter  抖动(ms)
    * resolutionHeight  分辨率:高
    * resolutionWidth  分辨率：宽
    * frameRate  帧率
    * codecUserId  该媒体流编码会场ID，仅服务器向端侧发送方向涉及(视频)，如路径A-->服务器-->B，即B观看A，该媒体流的codec_user_id为A
    *
    * @var string[]
    */
    protected static $setters = [
            'networkQuality' => 'setNetworkQuality',
            'codecType' => 'setCodecType',
            'bandWidth' => 'setBandWidth',
            'lostPacketRate' => 'setLostPacketRate',
            'delay' => 'setDelay',
            'jitter' => 'setJitter',
            'resolutionHeight' => 'setResolutionHeight',
            'resolutionWidth' => 'setResolutionWidth',
            'frameRate' => 'setFrameRate',
            'codecUserId' => 'setCodecUserId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * networkQuality  网络质量评级
    * codecType  编解码类型
    * bandWidth  带宽(kbit/s)
    * lostPacketRate  丢包率（千分数）
    * delay  时延(ms)
    * jitter  抖动(ms)
    * resolutionHeight  分辨率:高
    * resolutionWidth  分辨率：宽
    * frameRate  帧率
    * codecUserId  该媒体流编码会场ID，仅服务器向端侧发送方向涉及(视频)，如路径A-->服务器-->B，即B观看A，该媒体流的codec_user_id为A
    *
    * @var string[]
    */
    protected static $getters = [
            'networkQuality' => 'getNetworkQuality',
            'codecType' => 'getCodecType',
            'bandWidth' => 'getBandWidth',
            'lostPacketRate' => 'getLostPacketRate',
            'delay' => 'getDelay',
            'jitter' => 'getJitter',
            'resolutionHeight' => 'getResolutionHeight',
            'resolutionWidth' => 'getResolutionWidth',
            'frameRate' => 'getFrameRate',
            'codecUserId' => 'getCodecUserId'
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
        $this->container['networkQuality'] = isset($data['networkQuality']) ? $data['networkQuality'] : null;
        $this->container['codecType'] = isset($data['codecType']) ? $data['codecType'] : null;
        $this->container['bandWidth'] = isset($data['bandWidth']) ? $data['bandWidth'] : null;
        $this->container['lostPacketRate'] = isset($data['lostPacketRate']) ? $data['lostPacketRate'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['jitter'] = isset($data['jitter']) ? $data['jitter'] : null;
        $this->container['resolutionHeight'] = isset($data['resolutionHeight']) ? $data['resolutionHeight'] : null;
        $this->container['resolutionWidth'] = isset($data['resolutionWidth']) ? $data['resolutionWidth'] : null;
        $this->container['frameRate'] = isset($data['frameRate']) ? $data['frameRate'] : null;
        $this->container['codecUserId'] = isset($data['codecUserId']) ? $data['codecUserId'] : null;
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
    * Gets networkQuality
    *  网络质量评级
    *
    * @return string|null
    */
    public function getNetworkQuality()
    {
        return $this->container['networkQuality'];
    }

    /**
    * Sets networkQuality
    *
    * @param string|null $networkQuality 网络质量评级
    *
    * @return $this
    */
    public function setNetworkQuality($networkQuality)
    {
        $this->container['networkQuality'] = $networkQuality;
        return $this;
    }

    /**
    * Gets codecType
    *  编解码类型
    *
    * @return string|null
    */
    public function getCodecType()
    {
        return $this->container['codecType'];
    }

    /**
    * Sets codecType
    *
    * @param string|null $codecType 编解码类型
    *
    * @return $this
    */
    public function setCodecType($codecType)
    {
        $this->container['codecType'] = $codecType;
        return $this;
    }

    /**
    * Gets bandWidth
    *  带宽(kbit/s)
    *
    * @return int|null
    */
    public function getBandWidth()
    {
        return $this->container['bandWidth'];
    }

    /**
    * Sets bandWidth
    *
    * @param int|null $bandWidth 带宽(kbit/s)
    *
    * @return $this
    */
    public function setBandWidth($bandWidth)
    {
        $this->container['bandWidth'] = $bandWidth;
        return $this;
    }

    /**
    * Gets lostPacketRate
    *  丢包率（千分数）
    *
    * @return int|null
    */
    public function getLostPacketRate()
    {
        return $this->container['lostPacketRate'];
    }

    /**
    * Sets lostPacketRate
    *
    * @param int|null $lostPacketRate 丢包率（千分数）
    *
    * @return $this
    */
    public function setLostPacketRate($lostPacketRate)
    {
        $this->container['lostPacketRate'] = $lostPacketRate;
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
    * Gets jitter
    *  抖动(ms)
    *
    * @return int|null
    */
    public function getJitter()
    {
        return $this->container['jitter'];
    }

    /**
    * Sets jitter
    *
    * @param int|null $jitter 抖动(ms)
    *
    * @return $this
    */
    public function setJitter($jitter)
    {
        $this->container['jitter'] = $jitter;
        return $this;
    }

    /**
    * Gets resolutionHeight
    *  分辨率:高
    *
    * @return int|null
    */
    public function getResolutionHeight()
    {
        return $this->container['resolutionHeight'];
    }

    /**
    * Sets resolutionHeight
    *
    * @param int|null $resolutionHeight 分辨率:高
    *
    * @return $this
    */
    public function setResolutionHeight($resolutionHeight)
    {
        $this->container['resolutionHeight'] = $resolutionHeight;
        return $this;
    }

    /**
    * Gets resolutionWidth
    *  分辨率：宽
    *
    * @return int|null
    */
    public function getResolutionWidth()
    {
        return $this->container['resolutionWidth'];
    }

    /**
    * Sets resolutionWidth
    *
    * @param int|null $resolutionWidth 分辨率：宽
    *
    * @return $this
    */
    public function setResolutionWidth($resolutionWidth)
    {
        $this->container['resolutionWidth'] = $resolutionWidth;
        return $this;
    }

    /**
    * Gets frameRate
    *  帧率
    *
    * @return int|null
    */
    public function getFrameRate()
    {
        return $this->container['frameRate'];
    }

    /**
    * Sets frameRate
    *
    * @param int|null $frameRate 帧率
    *
    * @return $this
    */
    public function setFrameRate($frameRate)
    {
        $this->container['frameRate'] = $frameRate;
        return $this;
    }

    /**
    * Gets codecUserId
    *  该媒体流编码会场ID，仅服务器向端侧发送方向涉及(视频)，如路径A-->服务器-->B，即B观看A，该媒体流的codec_user_id为A
    *
    * @return string|null
    */
    public function getCodecUserId()
    {
        return $this->container['codecUserId'];
    }

    /**
    * Sets codecUserId
    *
    * @param string|null $codecUserId 该媒体流编码会场ID，仅服务器向端侧发送方向涉及(视频)，如路径A-->服务器-->B，即B观看A，该媒体流的codec_user_id为A
    *
    * @return $this
    */
    public function setCodecUserId($codecUserId)
    {
        $this->container['codecUserId'] = $codecUserId;
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


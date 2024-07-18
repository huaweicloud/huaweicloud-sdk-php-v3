<?php

namespace HuaweiCloud\SDK\Live\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PlayDomainStreamInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PlayDomainStreamInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * playDomain  播放域名
    * stream  播放流名
    * protocol  播放的协议，支持flv,hls,rtmp。
    * bandwidth  1分钟粒度的带宽值，单位为bps。
    * online  1分钟粒度的在线人数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'playDomain' => 'string',
            'stream' => 'string',
            'protocol' => 'string',
            'bandwidth' => 'int',
            'online' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * playDomain  播放域名
    * stream  播放流名
    * protocol  播放的协议，支持flv,hls,rtmp。
    * bandwidth  1分钟粒度的带宽值，单位为bps。
    * online  1分钟粒度的在线人数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'playDomain' => null,
        'stream' => null,
        'protocol' => null,
        'bandwidth' => 'int64',
        'online' => 'int64'
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
    * playDomain  播放域名
    * stream  播放流名
    * protocol  播放的协议，支持flv,hls,rtmp。
    * bandwidth  1分钟粒度的带宽值，单位为bps。
    * online  1分钟粒度的在线人数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'playDomain' => 'play_domain',
            'stream' => 'stream',
            'protocol' => 'protocol',
            'bandwidth' => 'bandwidth',
            'online' => 'online'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * playDomain  播放域名
    * stream  播放流名
    * protocol  播放的协议，支持flv,hls,rtmp。
    * bandwidth  1分钟粒度的带宽值，单位为bps。
    * online  1分钟粒度的在线人数。
    *
    * @var string[]
    */
    protected static $setters = [
            'playDomain' => 'setPlayDomain',
            'stream' => 'setStream',
            'protocol' => 'setProtocol',
            'bandwidth' => 'setBandwidth',
            'online' => 'setOnline'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * playDomain  播放域名
    * stream  播放流名
    * protocol  播放的协议，支持flv,hls,rtmp。
    * bandwidth  1分钟粒度的带宽值，单位为bps。
    * online  1分钟粒度的在线人数。
    *
    * @var string[]
    */
    protected static $getters = [
            'playDomain' => 'getPlayDomain',
            'stream' => 'getStream',
            'protocol' => 'getProtocol',
            'bandwidth' => 'getBandwidth',
            'online' => 'getOnline'
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
        $this->container['playDomain'] = isset($data['playDomain']) ? $data['playDomain'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['online'] = isset($data['online']) ? $data['online'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['playDomain']) && (mb_strlen($this->container['playDomain']) > 512)) {
                $invalidProperties[] = "invalid value for 'playDomain', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['playDomain']) && (mb_strlen($this->container['playDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'playDomain', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['stream']) && (mb_strlen($this->container['stream']) > 512)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['stream']) && (mb_strlen($this->container['stream']) < 1)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) > 512)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) < 1)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] > 50000000000000000)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be smaller than or equal to 50000000000000000.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] < 0)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['online']) && ($this->container['online'] > 1000000000)) {
                $invalidProperties[] = "invalid value for 'online', must be smaller than or equal to 1000000000.";
            }
            if (!is_null($this->container['online']) && ($this->container['online'] < 0)) {
                $invalidProperties[] = "invalid value for 'online', must be bigger than or equal to 0.";
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
    * Gets playDomain
    *  播放域名
    *
    * @return string|null
    */
    public function getPlayDomain()
    {
        return $this->container['playDomain'];
    }

    /**
    * Sets playDomain
    *
    * @param string|null $playDomain 播放域名
    *
    * @return $this
    */
    public function setPlayDomain($playDomain)
    {
        $this->container['playDomain'] = $playDomain;
        return $this;
    }

    /**
    * Gets stream
    *  播放流名
    *
    * @return string|null
    */
    public function getStream()
    {
        return $this->container['stream'];
    }

    /**
    * Sets stream
    *
    * @param string|null $stream 播放流名
    *
    * @return $this
    */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;
        return $this;
    }

    /**
    * Gets protocol
    *  播放的协议，支持flv,hls,rtmp。
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 播放的协议，支持flv,hls,rtmp。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets bandwidth
    *  1分钟粒度的带宽值，单位为bps。
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
    * @param int|null $bandwidth 1分钟粒度的带宽值，单位为bps。
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets online
    *  1分钟粒度的在线人数。
    *
    * @return int|null
    */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
    * Sets online
    *
    * @param int|null $online 1分钟粒度的在线人数。
    *
    * @return $this
    */
    public function setOnline($online)
    {
        $this->container['online'] = $online;
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


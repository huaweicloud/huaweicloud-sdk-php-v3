<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourcesInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourcesInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  频道源流URL，用于外部拉流
    * bitrate  码率。无需直播转码时，此参数为必填项  单位：bps。取值范围：0 - 104,857,600（100Mbps）
    * width  分辨率对应宽的值，非必填项  取值范围：0 - 4096（4K）
    * height  分辨率对应高的值，非必填项  取值范围：0 - 2160（4K）
    * enableSnapshot  描述是否使用该流做截图
    * bitrateFor3u8  是否使用bitrate来固定码率。默认值：false
    * passphrase  协议为SRT_PUSH时的加密信息
    * backupUrls  备入流地址列表
    * streamId  协议为SRT_PULL时，拉流地址的streamid
    * latency  协议为SRT_PULL时，拉流时延
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'bitrate' => 'int',
            'width' => 'int',
            'height' => 'int',
            'enableSnapshot' => 'bool',
            'bitrateFor3u8' => 'bool',
            'passphrase' => 'string',
            'backupUrls' => 'string[]',
            'streamId' => 'string',
            'latency' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  频道源流URL，用于外部拉流
    * bitrate  码率。无需直播转码时，此参数为必填项  单位：bps。取值范围：0 - 104,857,600（100Mbps）
    * width  分辨率对应宽的值，非必填项  取值范围：0 - 4096（4K）
    * height  分辨率对应高的值，非必填项  取值范围：0 - 2160（4K）
    * enableSnapshot  描述是否使用该流做截图
    * bitrateFor3u8  是否使用bitrate来固定码率。默认值：false
    * passphrase  协议为SRT_PUSH时的加密信息
    * backupUrls  备入流地址列表
    * streamId  协议为SRT_PULL时，拉流地址的streamid
    * latency  协议为SRT_PULL时，拉流时延
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'bitrate' => null,
        'width' => null,
        'height' => null,
        'enableSnapshot' => null,
        'bitrateFor3u8' => null,
        'passphrase' => null,
        'backupUrls' => null,
        'streamId' => null,
        'latency' => 'int32'
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
    * url  频道源流URL，用于外部拉流
    * bitrate  码率。无需直播转码时，此参数为必填项  单位：bps。取值范围：0 - 104,857,600（100Mbps）
    * width  分辨率对应宽的值，非必填项  取值范围：0 - 4096（4K）
    * height  分辨率对应高的值，非必填项  取值范围：0 - 2160（4K）
    * enableSnapshot  描述是否使用该流做截图
    * bitrateFor3u8  是否使用bitrate来固定码率。默认值：false
    * passphrase  协议为SRT_PUSH时的加密信息
    * backupUrls  备入流地址列表
    * streamId  协议为SRT_PULL时，拉流地址的streamid
    * latency  协议为SRT_PULL时，拉流时延
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'bitrate' => 'bitrate',
            'width' => 'width',
            'height' => 'height',
            'enableSnapshot' => 'enable_snapshot',
            'bitrateFor3u8' => 'bitrate_for3u8',
            'passphrase' => 'passphrase',
            'backupUrls' => 'backup_urls',
            'streamId' => 'stream_id',
            'latency' => 'latency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  频道源流URL，用于外部拉流
    * bitrate  码率。无需直播转码时，此参数为必填项  单位：bps。取值范围：0 - 104,857,600（100Mbps）
    * width  分辨率对应宽的值，非必填项  取值范围：0 - 4096（4K）
    * height  分辨率对应高的值，非必填项  取值范围：0 - 2160（4K）
    * enableSnapshot  描述是否使用该流做截图
    * bitrateFor3u8  是否使用bitrate来固定码率。默认值：false
    * passphrase  协议为SRT_PUSH时的加密信息
    * backupUrls  备入流地址列表
    * streamId  协议为SRT_PULL时，拉流地址的streamid
    * latency  协议为SRT_PULL时，拉流时延
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'bitrate' => 'setBitrate',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'enableSnapshot' => 'setEnableSnapshot',
            'bitrateFor3u8' => 'setBitrateFor3u8',
            'passphrase' => 'setPassphrase',
            'backupUrls' => 'setBackupUrls',
            'streamId' => 'setStreamId',
            'latency' => 'setLatency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  频道源流URL，用于外部拉流
    * bitrate  码率。无需直播转码时，此参数为必填项  单位：bps。取值范围：0 - 104,857,600（100Mbps）
    * width  分辨率对应宽的值，非必填项  取值范围：0 - 4096（4K）
    * height  分辨率对应高的值，非必填项  取值范围：0 - 2160（4K）
    * enableSnapshot  描述是否使用该流做截图
    * bitrateFor3u8  是否使用bitrate来固定码率。默认值：false
    * passphrase  协议为SRT_PUSH时的加密信息
    * backupUrls  备入流地址列表
    * streamId  协议为SRT_PULL时，拉流地址的streamid
    * latency  协议为SRT_PULL时，拉流时延
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'bitrate' => 'getBitrate',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'enableSnapshot' => 'getEnableSnapshot',
            'bitrateFor3u8' => 'getBitrateFor3u8',
            'passphrase' => 'getPassphrase',
            'backupUrls' => 'getBackupUrls',
            'streamId' => 'getStreamId',
            'latency' => 'getLatency'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['enableSnapshot'] = isset($data['enableSnapshot']) ? $data['enableSnapshot'] : null;
        $this->container['bitrateFor3u8'] = isset($data['bitrateFor3u8']) ? $data['bitrateFor3u8'] : null;
        $this->container['passphrase'] = isset($data['passphrase']) ? $data['passphrase'] : null;
        $this->container['backupUrls'] = isset($data['backupUrls']) ? $data['backupUrls'] : null;
        $this->container['streamId'] = isset($data['streamId']) ? $data['streamId'] : null;
        $this->container['latency'] = isset($data['latency']) ? $data['latency'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 1024)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] > 104857600)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be smaller than or equal to 104857600.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] < 0)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] > 4096)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] < 0)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] > 2160)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 2160.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] < 0)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['passphrase']) && (mb_strlen($this->container['passphrase']) > 79)) {
                $invalidProperties[] = "invalid value for 'passphrase', the character length must be smaller than or equal to 79.";
            }
            if (!is_null($this->container['passphrase']) && (mb_strlen($this->container['passphrase']) < 10)) {
                $invalidProperties[] = "invalid value for 'passphrase', the character length must be bigger than or equal to 10.";
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
    * Gets url
    *  频道源流URL，用于外部拉流
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 频道源流URL，用于外部拉流
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets bitrate
    *  码率。无需直播转码时，此参数为必填项  单位：bps。取值范围：0 - 104,857,600（100Mbps）
    *
    * @return int|null
    */
    public function getBitrate()
    {
        return $this->container['bitrate'];
    }

    /**
    * Sets bitrate
    *
    * @param int|null $bitrate 码率。无需直播转码时，此参数为必填项  单位：bps。取值范围：0 - 104,857,600（100Mbps）
    *
    * @return $this
    */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;
        return $this;
    }

    /**
    * Gets width
    *  分辨率对应宽的值，非必填项  取值范围：0 - 4096（4K）
    *
    * @return int|null
    */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
    * Sets width
    *
    * @param int|null $width 分辨率对应宽的值，非必填项  取值范围：0 - 4096（4K）
    *
    * @return $this
    */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
        return $this;
    }

    /**
    * Gets height
    *  分辨率对应高的值，非必填项  取值范围：0 - 2160（4K）
    *
    * @return int|null
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param int|null $height 分辨率对应高的值，非必填项  取值范围：0 - 2160（4K）
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets enableSnapshot
    *  描述是否使用该流做截图
    *
    * @return bool|null
    */
    public function getEnableSnapshot()
    {
        return $this->container['enableSnapshot'];
    }

    /**
    * Sets enableSnapshot
    *
    * @param bool|null $enableSnapshot 描述是否使用该流做截图
    *
    * @return $this
    */
    public function setEnableSnapshot($enableSnapshot)
    {
        $this->container['enableSnapshot'] = $enableSnapshot;
        return $this;
    }

    /**
    * Gets bitrateFor3u8
    *  是否使用bitrate来固定码率。默认值：false
    *
    * @return bool|null
    */
    public function getBitrateFor3u8()
    {
        return $this->container['bitrateFor3u8'];
    }

    /**
    * Sets bitrateFor3u8
    *
    * @param bool|null $bitrateFor3u8 是否使用bitrate来固定码率。默认值：false
    *
    * @return $this
    */
    public function setBitrateFor3u8($bitrateFor3u8)
    {
        $this->container['bitrateFor3u8'] = $bitrateFor3u8;
        return $this;
    }

    /**
    * Gets passphrase
    *  协议为SRT_PUSH时的加密信息
    *
    * @return string|null
    */
    public function getPassphrase()
    {
        return $this->container['passphrase'];
    }

    /**
    * Sets passphrase
    *
    * @param string|null $passphrase 协议为SRT_PUSH时的加密信息
    *
    * @return $this
    */
    public function setPassphrase($passphrase)
    {
        $this->container['passphrase'] = $passphrase;
        return $this;
    }

    /**
    * Gets backupUrls
    *  备入流地址列表
    *
    * @return string[]|null
    */
    public function getBackupUrls()
    {
        return $this->container['backupUrls'];
    }

    /**
    * Sets backupUrls
    *
    * @param string[]|null $backupUrls 备入流地址列表
    *
    * @return $this
    */
    public function setBackupUrls($backupUrls)
    {
        $this->container['backupUrls'] = $backupUrls;
        return $this;
    }

    /**
    * Gets streamId
    *  协议为SRT_PULL时，拉流地址的streamid
    *
    * @return string|null
    */
    public function getStreamId()
    {
        return $this->container['streamId'];
    }

    /**
    * Sets streamId
    *
    * @param string|null $streamId 协议为SRT_PULL时，拉流地址的streamid
    *
    * @return $this
    */
    public function setStreamId($streamId)
    {
        $this->container['streamId'] = $streamId;
        return $this;
    }

    /**
    * Gets latency
    *  协议为SRT_PULL时，拉流时延
    *
    * @return int|null
    */
    public function getLatency()
    {
        return $this->container['latency'];
    }

    /**
    * Sets latency
    *
    * @param int|null $latency 协议为SRT_PULL时，拉流时延
    *
    * @return $this
    */
    public function setLatency($latency)
    {
        $this->container['latency'] = $latency;
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


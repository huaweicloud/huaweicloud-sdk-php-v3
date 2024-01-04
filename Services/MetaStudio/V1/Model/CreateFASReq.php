<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFASReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFASReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * audioFileDownloadUrl  语音驱动音频文件下载URL，格式为AAC或者MP3
    * frameRate  期望的输出帧率
    * emotion  情绪： 0：平静（默认） 1：开心 2：哀伤 3：愤怒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'audioFileDownloadUrl' => 'string',
            'frameRate' => 'int',
            'emotion' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * audioFileDownloadUrl  语音驱动音频文件下载URL，格式为AAC或者MP3
    * frameRate  期望的输出帧率
    * emotion  情绪： 0：平静（默认） 1：开心 2：哀伤 3：愤怒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'audioFileDownloadUrl' => null,
        'frameRate' => 'int32',
        'emotion' => 'int32'
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
    * audioFileDownloadUrl  语音驱动音频文件下载URL，格式为AAC或者MP3
    * frameRate  期望的输出帧率
    * emotion  情绪： 0：平静（默认） 1：开心 2：哀伤 3：愤怒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'audioFileDownloadUrl' => 'audio_file_download_url',
            'frameRate' => 'frame_rate',
            'emotion' => 'emotion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * audioFileDownloadUrl  语音驱动音频文件下载URL，格式为AAC或者MP3
    * frameRate  期望的输出帧率
    * emotion  情绪： 0：平静（默认） 1：开心 2：哀伤 3：愤怒
    *
    * @var string[]
    */
    protected static $setters = [
            'audioFileDownloadUrl' => 'setAudioFileDownloadUrl',
            'frameRate' => 'setFrameRate',
            'emotion' => 'setEmotion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * audioFileDownloadUrl  语音驱动音频文件下载URL，格式为AAC或者MP3
    * frameRate  期望的输出帧率
    * emotion  情绪： 0：平静（默认） 1：开心 2：哀伤 3：愤怒
    *
    * @var string[]
    */
    protected static $getters = [
            'audioFileDownloadUrl' => 'getAudioFileDownloadUrl',
            'frameRate' => 'getFrameRate',
            'emotion' => 'getEmotion'
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
        $this->container['audioFileDownloadUrl'] = isset($data['audioFileDownloadUrl']) ? $data['audioFileDownloadUrl'] : null;
        $this->container['frameRate'] = isset($data['frameRate']) ? $data['frameRate'] : null;
        $this->container['emotion'] = isset($data['emotion']) ? $data['emotion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['audioFileDownloadUrl'] === null) {
            $invalidProperties[] = "'audioFileDownloadUrl' can't be null";
        }
            if ((mb_strlen($this->container['audioFileDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'audioFileDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['audioFileDownloadUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioFileDownloadUrl', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['frameRate'] === null) {
            $invalidProperties[] = "'frameRate' can't be null";
        }
            if (($this->container['frameRate'] > 120)) {
                $invalidProperties[] = "invalid value for 'frameRate', must be smaller than or equal to 120.";
            }
            if (($this->container['frameRate'] < 15)) {
                $invalidProperties[] = "invalid value for 'frameRate', must be bigger than or equal to 15.";
            }
            if (!is_null($this->container['emotion']) && ($this->container['emotion'] > 3)) {
                $invalidProperties[] = "invalid value for 'emotion', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['emotion']) && ($this->container['emotion'] < 0)) {
                $invalidProperties[] = "invalid value for 'emotion', must be bigger than or equal to 0.";
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
    * Gets audioFileDownloadUrl
    *  语音驱动音频文件下载URL，格式为AAC或者MP3
    *
    * @return string
    */
    public function getAudioFileDownloadUrl()
    {
        return $this->container['audioFileDownloadUrl'];
    }

    /**
    * Sets audioFileDownloadUrl
    *
    * @param string $audioFileDownloadUrl 语音驱动音频文件下载URL，格式为AAC或者MP3
    *
    * @return $this
    */
    public function setAudioFileDownloadUrl($audioFileDownloadUrl)
    {
        $this->container['audioFileDownloadUrl'] = $audioFileDownloadUrl;
        return $this;
    }

    /**
    * Gets frameRate
    *  期望的输出帧率
    *
    * @return int
    */
    public function getFrameRate()
    {
        return $this->container['frameRate'];
    }

    /**
    * Sets frameRate
    *
    * @param int $frameRate 期望的输出帧率
    *
    * @return $this
    */
    public function setFrameRate($frameRate)
    {
        $this->container['frameRate'] = $frameRate;
        return $this;
    }

    /**
    * Gets emotion
    *  情绪： 0：平静（默认） 1：开心 2：哀伤 3：愤怒
    *
    * @return int|null
    */
    public function getEmotion()
    {
        return $this->container['emotion'];
    }

    /**
    * Sets emotion
    *
    * @param int|null $emotion 情绪： 0：平静（默认） 1：开心 2：哀伤 3：愤怒
    *
    * @return $this
    */
    public function setEmotion($emotion)
    {
        $this->container['emotion'] = $emotion;
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


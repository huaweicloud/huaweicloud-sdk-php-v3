<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShootScriptAudioFileItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShootScriptAudioFileItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sequenceNo  剧本序号。
    * audioFileUploadUrl  语音驱动音频文件上传URL。创建和更新脚本时返回。单个文件最大100M。支持上传MP3/WAV/M4A文件。
    * audioFileDownloadUrl  语音驱动音频文件下载URL。查询脚本详情时返回。
    * audioId  audio id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sequenceNo' => 'int',
            'audioFileUploadUrl' => 'string',
            'audioFileDownloadUrl' => 'string',
            'audioId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sequenceNo  剧本序号。
    * audioFileUploadUrl  语音驱动音频文件上传URL。创建和更新脚本时返回。单个文件最大100M。支持上传MP3/WAV/M4A文件。
    * audioFileDownloadUrl  语音驱动音频文件下载URL。查询脚本详情时返回。
    * audioId  audio id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sequenceNo' => 'int32',
        'audioFileUploadUrl' => null,
        'audioFileDownloadUrl' => null,
        'audioId' => 'int32'
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
    * sequenceNo  剧本序号。
    * audioFileUploadUrl  语音驱动音频文件上传URL。创建和更新脚本时返回。单个文件最大100M。支持上传MP3/WAV/M4A文件。
    * audioFileDownloadUrl  语音驱动音频文件下载URL。查询脚本详情时返回。
    * audioId  audio id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sequenceNo' => 'sequence_no',
            'audioFileUploadUrl' => 'audio_file_upload_url',
            'audioFileDownloadUrl' => 'audio_file_download_url',
            'audioId' => 'audio_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sequenceNo  剧本序号。
    * audioFileUploadUrl  语音驱动音频文件上传URL。创建和更新脚本时返回。单个文件最大100M。支持上传MP3/WAV/M4A文件。
    * audioFileDownloadUrl  语音驱动音频文件下载URL。查询脚本详情时返回。
    * audioId  audio id
    *
    * @var string[]
    */
    protected static $setters = [
            'sequenceNo' => 'setSequenceNo',
            'audioFileUploadUrl' => 'setAudioFileUploadUrl',
            'audioFileDownloadUrl' => 'setAudioFileDownloadUrl',
            'audioId' => 'setAudioId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sequenceNo  剧本序号。
    * audioFileUploadUrl  语音驱动音频文件上传URL。创建和更新脚本时返回。单个文件最大100M。支持上传MP3/WAV/M4A文件。
    * audioFileDownloadUrl  语音驱动音频文件下载URL。查询脚本详情时返回。
    * audioId  audio id
    *
    * @var string[]
    */
    protected static $getters = [
            'sequenceNo' => 'getSequenceNo',
            'audioFileUploadUrl' => 'getAudioFileUploadUrl',
            'audioFileDownloadUrl' => 'getAudioFileDownloadUrl',
            'audioId' => 'getAudioId'
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
        $this->container['sequenceNo'] = isset($data['sequenceNo']) ? $data['sequenceNo'] : null;
        $this->container['audioFileUploadUrl'] = isset($data['audioFileUploadUrl']) ? $data['audioFileUploadUrl'] : null;
        $this->container['audioFileDownloadUrl'] = isset($data['audioFileDownloadUrl']) ? $data['audioFileDownloadUrl'] : null;
        $this->container['audioId'] = isset($data['audioId']) ? $data['audioId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sequenceNo'] === null) {
            $invalidProperties[] = "'sequenceNo' can't be null";
        }
            if (($this->container['sequenceNo'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sequenceNo', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['sequenceNo'] < 0)) {
                $invalidProperties[] = "invalid value for 'sequenceNo', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioFileUploadUrl']) && (mb_strlen($this->container['audioFileUploadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'audioFileUploadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['audioFileUploadUrl']) && (mb_strlen($this->container['audioFileUploadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'audioFileUploadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['audioFileDownloadUrl']) && (mb_strlen($this->container['audioFileDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'audioFileDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['audioFileDownloadUrl']) && (mb_strlen($this->container['audioFileDownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'audioFileDownloadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['audioId']) && ($this->container['audioId'] > 10000)) {
                $invalidProperties[] = "invalid value for 'audioId', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['audioId']) && ($this->container['audioId'] < 0)) {
                $invalidProperties[] = "invalid value for 'audioId', must be bigger than or equal to 0.";
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
    * Gets sequenceNo
    *  剧本序号。
    *
    * @return int
    */
    public function getSequenceNo()
    {
        return $this->container['sequenceNo'];
    }

    /**
    * Sets sequenceNo
    *
    * @param int $sequenceNo 剧本序号。
    *
    * @return $this
    */
    public function setSequenceNo($sequenceNo)
    {
        $this->container['sequenceNo'] = $sequenceNo;
        return $this;
    }

    /**
    * Gets audioFileUploadUrl
    *  语音驱动音频文件上传URL。创建和更新脚本时返回。单个文件最大100M。支持上传MP3/WAV/M4A文件。
    *
    * @return string|null
    */
    public function getAudioFileUploadUrl()
    {
        return $this->container['audioFileUploadUrl'];
    }

    /**
    * Sets audioFileUploadUrl
    *
    * @param string|null $audioFileUploadUrl 语音驱动音频文件上传URL。创建和更新脚本时返回。单个文件最大100M。支持上传MP3/WAV/M4A文件。
    *
    * @return $this
    */
    public function setAudioFileUploadUrl($audioFileUploadUrl)
    {
        $this->container['audioFileUploadUrl'] = $audioFileUploadUrl;
        return $this;
    }

    /**
    * Gets audioFileDownloadUrl
    *  语音驱动音频文件下载URL。查询脚本详情时返回。
    *
    * @return string|null
    */
    public function getAudioFileDownloadUrl()
    {
        return $this->container['audioFileDownloadUrl'];
    }

    /**
    * Sets audioFileDownloadUrl
    *
    * @param string|null $audioFileDownloadUrl 语音驱动音频文件下载URL。查询脚本详情时返回。
    *
    * @return $this
    */
    public function setAudioFileDownloadUrl($audioFileDownloadUrl)
    {
        $this->container['audioFileDownloadUrl'] = $audioFileDownloadUrl;
        return $this;
    }

    /**
    * Gets audioId
    *  audio id
    *
    * @return int|null
    */
    public function getAudioId()
    {
        return $this->container['audioId'];
    }

    /**
    * Sets audioId
    *
    * @param int|null $audioId audio id
    *
    * @return $this
    */
    public function setAudioId($audioId)
    {
        $this->container['audioId'] = $audioId;
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


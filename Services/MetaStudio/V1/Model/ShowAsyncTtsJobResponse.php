<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAsyncTtsJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAsyncTtsJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * state  音频文件是否已生成完成。该标记为PROCESSING时，应该每隔3秒再次调用本接口获取音频文件(WAITING 等待中,PROCESSING 处理中,SUCCEED 成功,FAILED 失败)。当存在该字段时，会返回以下文件的下载链接。
    * audioFileUrl  音频文件下载链接，有效期为1个小时。
    * audioInfoFileUrl  音频信息文件下载链接，有效期为1个小时。
    * audioSrtFileUrl  字幕文件下载链接，有效期为1个小时。
    * audioActionFileUrl  动作信息文件下载链接，有效期为1个小时。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'state' => 'string',
            'audioFileUrl' => 'string',
            'audioInfoFileUrl' => 'string',
            'audioSrtFileUrl' => 'string',
            'audioActionFileUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * state  音频文件是否已生成完成。该标记为PROCESSING时，应该每隔3秒再次调用本接口获取音频文件(WAITING 等待中,PROCESSING 处理中,SUCCEED 成功,FAILED 失败)。当存在该字段时，会返回以下文件的下载链接。
    * audioFileUrl  音频文件下载链接，有效期为1个小时。
    * audioInfoFileUrl  音频信息文件下载链接，有效期为1个小时。
    * audioSrtFileUrl  字幕文件下载链接，有效期为1个小时。
    * audioActionFileUrl  动作信息文件下载链接，有效期为1个小时。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'state' => null,
        'audioFileUrl' => null,
        'audioInfoFileUrl' => null,
        'audioSrtFileUrl' => null,
        'audioActionFileUrl' => null
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
    * state  音频文件是否已生成完成。该标记为PROCESSING时，应该每隔3秒再次调用本接口获取音频文件(WAITING 等待中,PROCESSING 处理中,SUCCEED 成功,FAILED 失败)。当存在该字段时，会返回以下文件的下载链接。
    * audioFileUrl  音频文件下载链接，有效期为1个小时。
    * audioInfoFileUrl  音频信息文件下载链接，有效期为1个小时。
    * audioSrtFileUrl  字幕文件下载链接，有效期为1个小时。
    * audioActionFileUrl  动作信息文件下载链接，有效期为1个小时。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'state' => 'state',
            'audioFileUrl' => 'audio_file_url',
            'audioInfoFileUrl' => 'audio_info_file_url',
            'audioSrtFileUrl' => 'audio_srt_file_url',
            'audioActionFileUrl' => 'audio_action_file_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * state  音频文件是否已生成完成。该标记为PROCESSING时，应该每隔3秒再次调用本接口获取音频文件(WAITING 等待中,PROCESSING 处理中,SUCCEED 成功,FAILED 失败)。当存在该字段时，会返回以下文件的下载链接。
    * audioFileUrl  音频文件下载链接，有效期为1个小时。
    * audioInfoFileUrl  音频信息文件下载链接，有效期为1个小时。
    * audioSrtFileUrl  字幕文件下载链接，有效期为1个小时。
    * audioActionFileUrl  动作信息文件下载链接，有效期为1个小时。
    *
    * @var string[]
    */
    protected static $setters = [
            'state' => 'setState',
            'audioFileUrl' => 'setAudioFileUrl',
            'audioInfoFileUrl' => 'setAudioInfoFileUrl',
            'audioSrtFileUrl' => 'setAudioSrtFileUrl',
            'audioActionFileUrl' => 'setAudioActionFileUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * state  音频文件是否已生成完成。该标记为PROCESSING时，应该每隔3秒再次调用本接口获取音频文件(WAITING 等待中,PROCESSING 处理中,SUCCEED 成功,FAILED 失败)。当存在该字段时，会返回以下文件的下载链接。
    * audioFileUrl  音频文件下载链接，有效期为1个小时。
    * audioInfoFileUrl  音频信息文件下载链接，有效期为1个小时。
    * audioSrtFileUrl  字幕文件下载链接，有效期为1个小时。
    * audioActionFileUrl  动作信息文件下载链接，有效期为1个小时。
    *
    * @var string[]
    */
    protected static $getters = [
            'state' => 'getState',
            'audioFileUrl' => 'getAudioFileUrl',
            'audioInfoFileUrl' => 'getAudioInfoFileUrl',
            'audioSrtFileUrl' => 'getAudioSrtFileUrl',
            'audioActionFileUrl' => 'getAudioActionFileUrl'
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['audioFileUrl'] = isset($data['audioFileUrl']) ? $data['audioFileUrl'] : null;
        $this->container['audioInfoFileUrl'] = isset($data['audioInfoFileUrl']) ? $data['audioInfoFileUrl'] : null;
        $this->container['audioSrtFileUrl'] = isset($data['audioSrtFileUrl']) ? $data['audioSrtFileUrl'] : null;
        $this->container['audioActionFileUrl'] = isset($data['audioActionFileUrl']) ? $data['audioActionFileUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 64)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['audioFileUrl']) && (mb_strlen($this->container['audioFileUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'audioFileUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['audioFileUrl']) && (mb_strlen($this->container['audioFileUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioFileUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioInfoFileUrl']) && (mb_strlen($this->container['audioInfoFileUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'audioInfoFileUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['audioInfoFileUrl']) && (mb_strlen($this->container['audioInfoFileUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioInfoFileUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioSrtFileUrl']) && (mb_strlen($this->container['audioSrtFileUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'audioSrtFileUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['audioSrtFileUrl']) && (mb_strlen($this->container['audioSrtFileUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioSrtFileUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioActionFileUrl']) && (mb_strlen($this->container['audioActionFileUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'audioActionFileUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['audioActionFileUrl']) && (mb_strlen($this->container['audioActionFileUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioActionFileUrl', the character length must be bigger than or equal to 0.";
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
    * Gets state
    *  音频文件是否已生成完成。该标记为PROCESSING时，应该每隔3秒再次调用本接口获取音频文件(WAITING 等待中,PROCESSING 处理中,SUCCEED 成功,FAILED 失败)。当存在该字段时，会返回以下文件的下载链接。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 音频文件是否已生成完成。该标记为PROCESSING时，应该每隔3秒再次调用本接口获取音频文件(WAITING 等待中,PROCESSING 处理中,SUCCEED 成功,FAILED 失败)。当存在该字段时，会返回以下文件的下载链接。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets audioFileUrl
    *  音频文件下载链接，有效期为1个小时。
    *
    * @return string|null
    */
    public function getAudioFileUrl()
    {
        return $this->container['audioFileUrl'];
    }

    /**
    * Sets audioFileUrl
    *
    * @param string|null $audioFileUrl 音频文件下载链接，有效期为1个小时。
    *
    * @return $this
    */
    public function setAudioFileUrl($audioFileUrl)
    {
        $this->container['audioFileUrl'] = $audioFileUrl;
        return $this;
    }

    /**
    * Gets audioInfoFileUrl
    *  音频信息文件下载链接，有效期为1个小时。
    *
    * @return string|null
    */
    public function getAudioInfoFileUrl()
    {
        return $this->container['audioInfoFileUrl'];
    }

    /**
    * Sets audioInfoFileUrl
    *
    * @param string|null $audioInfoFileUrl 音频信息文件下载链接，有效期为1个小时。
    *
    * @return $this
    */
    public function setAudioInfoFileUrl($audioInfoFileUrl)
    {
        $this->container['audioInfoFileUrl'] = $audioInfoFileUrl;
        return $this;
    }

    /**
    * Gets audioSrtFileUrl
    *  字幕文件下载链接，有效期为1个小时。
    *
    * @return string|null
    */
    public function getAudioSrtFileUrl()
    {
        return $this->container['audioSrtFileUrl'];
    }

    /**
    * Sets audioSrtFileUrl
    *
    * @param string|null $audioSrtFileUrl 字幕文件下载链接，有效期为1个小时。
    *
    * @return $this
    */
    public function setAudioSrtFileUrl($audioSrtFileUrl)
    {
        $this->container['audioSrtFileUrl'] = $audioSrtFileUrl;
        return $this;
    }

    /**
    * Gets audioActionFileUrl
    *  动作信息文件下载链接，有效期为1个小时。
    *
    * @return string|null
    */
    public function getAudioActionFileUrl()
    {
        return $this->container['audioActionFileUrl'];
    }

    /**
    * Sets audioActionFileUrl
    *
    * @param string|null $audioActionFileUrl 动作信息文件下载链接，有效期为1个小时。
    *
    * @return $this
    */
    public function setAudioActionFileUrl($audioActionFileUrl)
    {
        $this->container['audioActionFileUrl'] = $audioActionFileUrl;
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


<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TtsJobDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TtsJobDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * websocketJobId  websocket任务ID。
    * assetId  音色ID
    * ttsServiceEnum  声音版本
    * textLength  文本长度
    * createTime  任务创建时间。
    * audioFormat  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。 * PCM：pcm格式。
    * needTimestamp  是否需要时间戳。false为不需要，true为需要返回时间戳信息。默认值为false。
    * genSrt  是否开启字幕
    * jobType  任务类型。 * PRELOAD：预加载任务 * WEBSOCKET：websocket接口任务 * ASYNC_JOB：异步任务 * AUDITION：试听任务
    * jobState  任务状态。 * WAITING：等待中 * PROCESSING：合成中 * FAILED：合成失败 * SUCCEED：合成成功
    * failMsg  任务合成错误信息
    * files  任务合成文件列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'websocketJobId' => 'string',
            'assetId' => 'string',
            'ttsServiceEnum' => 'string',
            'textLength' => 'int',
            'createTime' => 'string',
            'audioFormat' => 'string',
            'needTimestamp' => 'bool',
            'genSrt' => 'bool',
            'jobType' => 'string',
            'jobState' => 'string',
            'failMsg' => 'string',
            'files' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\TtsJobFile[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * websocketJobId  websocket任务ID。
    * assetId  音色ID
    * ttsServiceEnum  声音版本
    * textLength  文本长度
    * createTime  任务创建时间。
    * audioFormat  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。 * PCM：pcm格式。
    * needTimestamp  是否需要时间戳。false为不需要，true为需要返回时间戳信息。默认值为false。
    * genSrt  是否开启字幕
    * jobType  任务类型。 * PRELOAD：预加载任务 * WEBSOCKET：websocket接口任务 * ASYNC_JOB：异步任务 * AUDITION：试听任务
    * jobState  任务状态。 * WAITING：等待中 * PROCESSING：合成中 * FAILED：合成失败 * SUCCEED：合成成功
    * failMsg  任务合成错误信息
    * files  任务合成文件列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'websocketJobId' => null,
        'assetId' => null,
        'ttsServiceEnum' => null,
        'textLength' => null,
        'createTime' => null,
        'audioFormat' => null,
        'needTimestamp' => null,
        'genSrt' => null,
        'jobType' => null,
        'jobState' => null,
        'failMsg' => null,
        'files' => null
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
    * jobId  任务ID。
    * websocketJobId  websocket任务ID。
    * assetId  音色ID
    * ttsServiceEnum  声音版本
    * textLength  文本长度
    * createTime  任务创建时间。
    * audioFormat  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。 * PCM：pcm格式。
    * needTimestamp  是否需要时间戳。false为不需要，true为需要返回时间戳信息。默认值为false。
    * genSrt  是否开启字幕
    * jobType  任务类型。 * PRELOAD：预加载任务 * WEBSOCKET：websocket接口任务 * ASYNC_JOB：异步任务 * AUDITION：试听任务
    * jobState  任务状态。 * WAITING：等待中 * PROCESSING：合成中 * FAILED：合成失败 * SUCCEED：合成成功
    * failMsg  任务合成错误信息
    * files  任务合成文件列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'websocketJobId' => 'websocket_job_id',
            'assetId' => 'asset_id',
            'ttsServiceEnum' => 'tts_service_enum',
            'textLength' => 'text_length',
            'createTime' => 'create_time',
            'audioFormat' => 'audio_format',
            'needTimestamp' => 'need_timestamp',
            'genSrt' => 'gen_srt',
            'jobType' => 'job_type',
            'jobState' => 'job_state',
            'failMsg' => 'fail_msg',
            'files' => 'files'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * websocketJobId  websocket任务ID。
    * assetId  音色ID
    * ttsServiceEnum  声音版本
    * textLength  文本长度
    * createTime  任务创建时间。
    * audioFormat  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。 * PCM：pcm格式。
    * needTimestamp  是否需要时间戳。false为不需要，true为需要返回时间戳信息。默认值为false。
    * genSrt  是否开启字幕
    * jobType  任务类型。 * PRELOAD：预加载任务 * WEBSOCKET：websocket接口任务 * ASYNC_JOB：异步任务 * AUDITION：试听任务
    * jobState  任务状态。 * WAITING：等待中 * PROCESSING：合成中 * FAILED：合成失败 * SUCCEED：合成成功
    * failMsg  任务合成错误信息
    * files  任务合成文件列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'websocketJobId' => 'setWebsocketJobId',
            'assetId' => 'setAssetId',
            'ttsServiceEnum' => 'setTtsServiceEnum',
            'textLength' => 'setTextLength',
            'createTime' => 'setCreateTime',
            'audioFormat' => 'setAudioFormat',
            'needTimestamp' => 'setNeedTimestamp',
            'genSrt' => 'setGenSrt',
            'jobType' => 'setJobType',
            'jobState' => 'setJobState',
            'failMsg' => 'setFailMsg',
            'files' => 'setFiles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * websocketJobId  websocket任务ID。
    * assetId  音色ID
    * ttsServiceEnum  声音版本
    * textLength  文本长度
    * createTime  任务创建时间。
    * audioFormat  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。 * PCM：pcm格式。
    * needTimestamp  是否需要时间戳。false为不需要，true为需要返回时间戳信息。默认值为false。
    * genSrt  是否开启字幕
    * jobType  任务类型。 * PRELOAD：预加载任务 * WEBSOCKET：websocket接口任务 * ASYNC_JOB：异步任务 * AUDITION：试听任务
    * jobState  任务状态。 * WAITING：等待中 * PROCESSING：合成中 * FAILED：合成失败 * SUCCEED：合成成功
    * failMsg  任务合成错误信息
    * files  任务合成文件列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'websocketJobId' => 'getWebsocketJobId',
            'assetId' => 'getAssetId',
            'ttsServiceEnum' => 'getTtsServiceEnum',
            'textLength' => 'getTextLength',
            'createTime' => 'getCreateTime',
            'audioFormat' => 'getAudioFormat',
            'needTimestamp' => 'getNeedTimestamp',
            'genSrt' => 'getGenSrt',
            'jobType' => 'getJobType',
            'jobState' => 'getJobState',
            'failMsg' => 'getFailMsg',
            'files' => 'getFiles'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['websocketJobId'] = isset($data['websocketJobId']) ? $data['websocketJobId'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['ttsServiceEnum'] = isset($data['ttsServiceEnum']) ? $data['ttsServiceEnum'] : null;
        $this->container['textLength'] = isset($data['textLength']) ? $data['textLength'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['audioFormat'] = isset($data['audioFormat']) ? $data['audioFormat'] : null;
        $this->container['needTimestamp'] = isset($data['needTimestamp']) ? $data['needTimestamp'] : null;
        $this->container['genSrt'] = isset($data['genSrt']) ? $data['genSrt'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['jobState'] = isset($data['jobState']) ? $data['jobState'] : null;
        $this->container['failMsg'] = isset($data['failMsg']) ? $data['failMsg'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 128)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['websocketJobId']) && (mb_strlen($this->container['websocketJobId']) > 255)) {
                $invalidProperties[] = "invalid value for 'websocketJobId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['websocketJobId']) && (mb_strlen($this->container['websocketJobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'websocketJobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 48)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 48.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ttsServiceEnum']) && (mb_strlen($this->container['ttsServiceEnum']) > 64)) {
                $invalidProperties[] = "invalid value for 'ttsServiceEnum', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ttsServiceEnum']) && (mb_strlen($this->container['ttsServiceEnum']) < 1)) {
                $invalidProperties[] = "invalid value for 'ttsServiceEnum', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['textLength']) && ($this->container['textLength'] > 10000)) {
                $invalidProperties[] = "invalid value for 'textLength', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['textLength']) && ($this->container['textLength'] < 1)) {
                $invalidProperties[] = "invalid value for 'textLength', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioFormat']) && (mb_strlen($this->container['audioFormat']) > 10)) {
                $invalidProperties[] = "invalid value for 'audioFormat', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['audioFormat']) && (mb_strlen($this->container['audioFormat']) < 1)) {
                $invalidProperties[] = "invalid value for 'audioFormat', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobType']) && (mb_strlen($this->container['jobType']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobType']) && (mb_strlen($this->container['jobType']) < 0)) {
                $invalidProperties[] = "invalid value for 'jobType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['jobState']) && (mb_strlen($this->container['jobState']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobState', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobState']) && (mb_strlen($this->container['jobState']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobState', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['failMsg']) && (mb_strlen($this->container['failMsg']) > 100000)) {
                $invalidProperties[] = "invalid value for 'failMsg', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['failMsg']) && (mb_strlen($this->container['failMsg']) < 1)) {
                $invalidProperties[] = "invalid value for 'failMsg', the character length must be bigger than or equal to 1.";
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
    * Gets jobId
    *  任务ID。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets websocketJobId
    *  websocket任务ID。
    *
    * @return string|null
    */
    public function getWebsocketJobId()
    {
        return $this->container['websocketJobId'];
    }

    /**
    * Sets websocketJobId
    *
    * @param string|null $websocketJobId websocket任务ID。
    *
    * @return $this
    */
    public function setWebsocketJobId($websocketJobId)
    {
        $this->container['websocketJobId'] = $websocketJobId;
        return $this;
    }

    /**
    * Gets assetId
    *  音色ID
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 音色ID
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets ttsServiceEnum
    *  声音版本
    *
    * @return string|null
    */
    public function getTtsServiceEnum()
    {
        return $this->container['ttsServiceEnum'];
    }

    /**
    * Sets ttsServiceEnum
    *
    * @param string|null $ttsServiceEnum 声音版本
    *
    * @return $this
    */
    public function setTtsServiceEnum($ttsServiceEnum)
    {
        $this->container['ttsServiceEnum'] = $ttsServiceEnum;
        return $this;
    }

    /**
    * Gets textLength
    *  文本长度
    *
    * @return int|null
    */
    public function getTextLength()
    {
        return $this->container['textLength'];
    }

    /**
    * Sets textLength
    *
    * @param int|null $textLength 文本长度
    *
    * @return $this
    */
    public function setTextLength($textLength)
    {
        $this->container['textLength'] = $textLength;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 任务创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets audioFormat
    *  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。 * PCM：pcm格式。
    *
    * @return string|null
    */
    public function getAudioFormat()
    {
        return $this->container['audioFormat'];
    }

    /**
    * Sets audioFormat
    *
    * @param string|null $audioFormat 输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。 * PCM：pcm格式。
    *
    * @return $this
    */
    public function setAudioFormat($audioFormat)
    {
        $this->container['audioFormat'] = $audioFormat;
        return $this;
    }

    /**
    * Gets needTimestamp
    *  是否需要时间戳。false为不需要，true为需要返回时间戳信息。默认值为false。
    *
    * @return bool|null
    */
    public function getNeedTimestamp()
    {
        return $this->container['needTimestamp'];
    }

    /**
    * Sets needTimestamp
    *
    * @param bool|null $needTimestamp 是否需要时间戳。false为不需要，true为需要返回时间戳信息。默认值为false。
    *
    * @return $this
    */
    public function setNeedTimestamp($needTimestamp)
    {
        $this->container['needTimestamp'] = $needTimestamp;
        return $this;
    }

    /**
    * Gets genSrt
    *  是否开启字幕
    *
    * @return bool|null
    */
    public function getGenSrt()
    {
        return $this->container['genSrt'];
    }

    /**
    * Sets genSrt
    *
    * @param bool|null $genSrt 是否开启字幕
    *
    * @return $this
    */
    public function setGenSrt($genSrt)
    {
        $this->container['genSrt'] = $genSrt;
        return $this;
    }

    /**
    * Gets jobType
    *  任务类型。 * PRELOAD：预加载任务 * WEBSOCKET：websocket接口任务 * ASYNC_JOB：异步任务 * AUDITION：试听任务
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 任务类型。 * PRELOAD：预加载任务 * WEBSOCKET：websocket接口任务 * ASYNC_JOB：异步任务 * AUDITION：试听任务
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets jobState
    *  任务状态。 * WAITING：等待中 * PROCESSING：合成中 * FAILED：合成失败 * SUCCEED：合成成功
    *
    * @return string|null
    */
    public function getJobState()
    {
        return $this->container['jobState'];
    }

    /**
    * Sets jobState
    *
    * @param string|null $jobState 任务状态。 * WAITING：等待中 * PROCESSING：合成中 * FAILED：合成失败 * SUCCEED：合成成功
    *
    * @return $this
    */
    public function setJobState($jobState)
    {
        $this->container['jobState'] = $jobState;
        return $this;
    }

    /**
    * Gets failMsg
    *  任务合成错误信息
    *
    * @return string|null
    */
    public function getFailMsg()
    {
        return $this->container['failMsg'];
    }

    /**
    * Sets failMsg
    *
    * @param string|null $failMsg 任务合成错误信息
    *
    * @return $this
    */
    public function setFailMsg($failMsg)
    {
        $this->container['failMsg'] = $failMsg;
        return $this;
    }

    /**
    * Gets files
    *  任务合成文件列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\TtsJobFile[]|null
    */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
    * Sets files
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\TtsJobFile[]|null $files 任务合成文件列表。
    *
    * @return $this
    */
    public function setFiles($files)
    {
        $this->container['files'] = $files;
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


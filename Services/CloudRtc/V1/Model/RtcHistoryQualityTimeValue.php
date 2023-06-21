<?php

namespace HuaweiCloud\SDK\CloudRTC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RtcHistoryQualityTimeValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RtcHistoryQualityTimeValue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * date  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    * joinSuccessRate  加入房间成功率参数取值，取值为1代表成功率100%
    * joinSuccessIn5secsRate  5s内加入房间成功率参数取值，取值为1代表成功率100%
    * videoFreezeRate  视频卡顿率参数取值，取值为1代表卡顿率100%
    * audioFreezeRate  音频卡顿率参数取值，取值为1代表卡顿率100%
    * firstVideoRecvTime  首帧视频接收耗时，单位毫秒
    * firstAudioRecvTime  首帧音频接收耗时，单位毫秒
    * pullStreamSuccessRate  拉流成功率参数取值，取值为1代表成功率100%
    * pushStreamSuccessRate  推流成功率参数取值，取值为1代表成功率100%
    * videoUpstreamExcellentTransRate  客户端视频上行优质传输率，取值为1代表传输率100%
    * audioUpstreamExcellentTransRate  客户端音频上行优质传输率，取值为1代表传输率100%
    * videoExcellentTransRate  端到端视频优质传输率，取值为1代表传输率100%
    * audioExcellentTransRate  端到端音频优质传输率，取值为1代表传输率100%
    * videoTransDelay  端到端视频网络时延，单位为毫秒，取当天所有用户网络延迟的中位数。
    * audioTransDelay  端到端音频网络时延，单位为毫秒，取当天所有用户网络延迟的中位数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'date' => 'string',
            'joinSuccessRate' => 'double',
            'joinSuccessIn5secsRate' => 'double',
            'videoFreezeRate' => 'double',
            'audioFreezeRate' => 'double',
            'firstVideoRecvTime' => 'int',
            'firstAudioRecvTime' => 'int',
            'pullStreamSuccessRate' => 'double',
            'pushStreamSuccessRate' => 'double',
            'videoUpstreamExcellentTransRate' => 'double',
            'audioUpstreamExcellentTransRate' => 'double',
            'videoExcellentTransRate' => 'double',
            'audioExcellentTransRate' => 'double',
            'videoTransDelay' => 'double',
            'audioTransDelay' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * date  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    * joinSuccessRate  加入房间成功率参数取值，取值为1代表成功率100%
    * joinSuccessIn5secsRate  5s内加入房间成功率参数取值，取值为1代表成功率100%
    * videoFreezeRate  视频卡顿率参数取值，取值为1代表卡顿率100%
    * audioFreezeRate  音频卡顿率参数取值，取值为1代表卡顿率100%
    * firstVideoRecvTime  首帧视频接收耗时，单位毫秒
    * firstAudioRecvTime  首帧音频接收耗时，单位毫秒
    * pullStreamSuccessRate  拉流成功率参数取值，取值为1代表成功率100%
    * pushStreamSuccessRate  推流成功率参数取值，取值为1代表成功率100%
    * videoUpstreamExcellentTransRate  客户端视频上行优质传输率，取值为1代表传输率100%
    * audioUpstreamExcellentTransRate  客户端音频上行优质传输率，取值为1代表传输率100%
    * videoExcellentTransRate  端到端视频优质传输率，取值为1代表传输率100%
    * audioExcellentTransRate  端到端音频优质传输率，取值为1代表传输率100%
    * videoTransDelay  端到端视频网络时延，单位为毫秒，取当天所有用户网络延迟的中位数。
    * audioTransDelay  端到端音频网络时延，单位为毫秒，取当天所有用户网络延迟的中位数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'date' => null,
        'joinSuccessRate' => 'double',
        'joinSuccessIn5secsRate' => 'double',
        'videoFreezeRate' => 'double',
        'audioFreezeRate' => 'double',
        'firstVideoRecvTime' => 'int64',
        'firstAudioRecvTime' => 'int64',
        'pullStreamSuccessRate' => 'double',
        'pushStreamSuccessRate' => 'double',
        'videoUpstreamExcellentTransRate' => 'double',
        'audioUpstreamExcellentTransRate' => 'double',
        'videoExcellentTransRate' => 'double',
        'audioExcellentTransRate' => 'double',
        'videoTransDelay' => 'double',
        'audioTransDelay' => 'double'
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
    * date  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    * joinSuccessRate  加入房间成功率参数取值，取值为1代表成功率100%
    * joinSuccessIn5secsRate  5s内加入房间成功率参数取值，取值为1代表成功率100%
    * videoFreezeRate  视频卡顿率参数取值，取值为1代表卡顿率100%
    * audioFreezeRate  音频卡顿率参数取值，取值为1代表卡顿率100%
    * firstVideoRecvTime  首帧视频接收耗时，单位毫秒
    * firstAudioRecvTime  首帧音频接收耗时，单位毫秒
    * pullStreamSuccessRate  拉流成功率参数取值，取值为1代表成功率100%
    * pushStreamSuccessRate  推流成功率参数取值，取值为1代表成功率100%
    * videoUpstreamExcellentTransRate  客户端视频上行优质传输率，取值为1代表传输率100%
    * audioUpstreamExcellentTransRate  客户端音频上行优质传输率，取值为1代表传输率100%
    * videoExcellentTransRate  端到端视频优质传输率，取值为1代表传输率100%
    * audioExcellentTransRate  端到端音频优质传输率，取值为1代表传输率100%
    * videoTransDelay  端到端视频网络时延，单位为毫秒，取当天所有用户网络延迟的中位数。
    * audioTransDelay  端到端音频网络时延，单位为毫秒，取当天所有用户网络延迟的中位数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'date' => 'date',
            'joinSuccessRate' => 'join_success_rate',
            'joinSuccessIn5secsRate' => 'join_success_in5secs_rate',
            'videoFreezeRate' => 'video_freeze_rate',
            'audioFreezeRate' => 'audio_freeze_rate',
            'firstVideoRecvTime' => 'first_video_recv_time',
            'firstAudioRecvTime' => 'first_audio_recv_time',
            'pullStreamSuccessRate' => 'pull_stream_success_rate',
            'pushStreamSuccessRate' => 'push_stream_success_rate',
            'videoUpstreamExcellentTransRate' => 'video_upstream_excellent_trans_rate',
            'audioUpstreamExcellentTransRate' => 'audio_upstream_excellent_trans_rate',
            'videoExcellentTransRate' => 'video_excellent_trans_rate',
            'audioExcellentTransRate' => 'audio_excellent_trans_rate',
            'videoTransDelay' => 'video_trans_delay',
            'audioTransDelay' => 'audio_trans_delay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * date  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    * joinSuccessRate  加入房间成功率参数取值，取值为1代表成功率100%
    * joinSuccessIn5secsRate  5s内加入房间成功率参数取值，取值为1代表成功率100%
    * videoFreezeRate  视频卡顿率参数取值，取值为1代表卡顿率100%
    * audioFreezeRate  音频卡顿率参数取值，取值为1代表卡顿率100%
    * firstVideoRecvTime  首帧视频接收耗时，单位毫秒
    * firstAudioRecvTime  首帧音频接收耗时，单位毫秒
    * pullStreamSuccessRate  拉流成功率参数取值，取值为1代表成功率100%
    * pushStreamSuccessRate  推流成功率参数取值，取值为1代表成功率100%
    * videoUpstreamExcellentTransRate  客户端视频上行优质传输率，取值为1代表传输率100%
    * audioUpstreamExcellentTransRate  客户端音频上行优质传输率，取值为1代表传输率100%
    * videoExcellentTransRate  端到端视频优质传输率，取值为1代表传输率100%
    * audioExcellentTransRate  端到端音频优质传输率，取值为1代表传输率100%
    * videoTransDelay  端到端视频网络时延，单位为毫秒，取当天所有用户网络延迟的中位数。
    * audioTransDelay  端到端音频网络时延，单位为毫秒，取当天所有用户网络延迟的中位数。
    *
    * @var string[]
    */
    protected static $setters = [
            'date' => 'setDate',
            'joinSuccessRate' => 'setJoinSuccessRate',
            'joinSuccessIn5secsRate' => 'setJoinSuccessIn5secsRate',
            'videoFreezeRate' => 'setVideoFreezeRate',
            'audioFreezeRate' => 'setAudioFreezeRate',
            'firstVideoRecvTime' => 'setFirstVideoRecvTime',
            'firstAudioRecvTime' => 'setFirstAudioRecvTime',
            'pullStreamSuccessRate' => 'setPullStreamSuccessRate',
            'pushStreamSuccessRate' => 'setPushStreamSuccessRate',
            'videoUpstreamExcellentTransRate' => 'setVideoUpstreamExcellentTransRate',
            'audioUpstreamExcellentTransRate' => 'setAudioUpstreamExcellentTransRate',
            'videoExcellentTransRate' => 'setVideoExcellentTransRate',
            'audioExcellentTransRate' => 'setAudioExcellentTransRate',
            'videoTransDelay' => 'setVideoTransDelay',
            'audioTransDelay' => 'setAudioTransDelay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * date  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    * joinSuccessRate  加入房间成功率参数取值，取值为1代表成功率100%
    * joinSuccessIn5secsRate  5s内加入房间成功率参数取值，取值为1代表成功率100%
    * videoFreezeRate  视频卡顿率参数取值，取值为1代表卡顿率100%
    * audioFreezeRate  音频卡顿率参数取值，取值为1代表卡顿率100%
    * firstVideoRecvTime  首帧视频接收耗时，单位毫秒
    * firstAudioRecvTime  首帧音频接收耗时，单位毫秒
    * pullStreamSuccessRate  拉流成功率参数取值，取值为1代表成功率100%
    * pushStreamSuccessRate  推流成功率参数取值，取值为1代表成功率100%
    * videoUpstreamExcellentTransRate  客户端视频上行优质传输率，取值为1代表传输率100%
    * audioUpstreamExcellentTransRate  客户端音频上行优质传输率，取值为1代表传输率100%
    * videoExcellentTransRate  端到端视频优质传输率，取值为1代表传输率100%
    * audioExcellentTransRate  端到端音频优质传输率，取值为1代表传输率100%
    * videoTransDelay  端到端视频网络时延，单位为毫秒，取当天所有用户网络延迟的中位数。
    * audioTransDelay  端到端音频网络时延，单位为毫秒，取当天所有用户网络延迟的中位数。
    *
    * @var string[]
    */
    protected static $getters = [
            'date' => 'getDate',
            'joinSuccessRate' => 'getJoinSuccessRate',
            'joinSuccessIn5secsRate' => 'getJoinSuccessIn5secsRate',
            'videoFreezeRate' => 'getVideoFreezeRate',
            'audioFreezeRate' => 'getAudioFreezeRate',
            'firstVideoRecvTime' => 'getFirstVideoRecvTime',
            'firstAudioRecvTime' => 'getFirstAudioRecvTime',
            'pullStreamSuccessRate' => 'getPullStreamSuccessRate',
            'pushStreamSuccessRate' => 'getPushStreamSuccessRate',
            'videoUpstreamExcellentTransRate' => 'getVideoUpstreamExcellentTransRate',
            'audioUpstreamExcellentTransRate' => 'getAudioUpstreamExcellentTransRate',
            'videoExcellentTransRate' => 'getVideoExcellentTransRate',
            'audioExcellentTransRate' => 'getAudioExcellentTransRate',
            'videoTransDelay' => 'getVideoTransDelay',
            'audioTransDelay' => 'getAudioTransDelay'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['joinSuccessRate'] = isset($data['joinSuccessRate']) ? $data['joinSuccessRate'] : null;
        $this->container['joinSuccessIn5secsRate'] = isset($data['joinSuccessIn5secsRate']) ? $data['joinSuccessIn5secsRate'] : null;
        $this->container['videoFreezeRate'] = isset($data['videoFreezeRate']) ? $data['videoFreezeRate'] : null;
        $this->container['audioFreezeRate'] = isset($data['audioFreezeRate']) ? $data['audioFreezeRate'] : null;
        $this->container['firstVideoRecvTime'] = isset($data['firstVideoRecvTime']) ? $data['firstVideoRecvTime'] : null;
        $this->container['firstAudioRecvTime'] = isset($data['firstAudioRecvTime']) ? $data['firstAudioRecvTime'] : null;
        $this->container['pullStreamSuccessRate'] = isset($data['pullStreamSuccessRate']) ? $data['pullStreamSuccessRate'] : null;
        $this->container['pushStreamSuccessRate'] = isset($data['pushStreamSuccessRate']) ? $data['pushStreamSuccessRate'] : null;
        $this->container['videoUpstreamExcellentTransRate'] = isset($data['videoUpstreamExcellentTransRate']) ? $data['videoUpstreamExcellentTransRate'] : null;
        $this->container['audioUpstreamExcellentTransRate'] = isset($data['audioUpstreamExcellentTransRate']) ? $data['audioUpstreamExcellentTransRate'] : null;
        $this->container['videoExcellentTransRate'] = isset($data['videoExcellentTransRate']) ? $data['videoExcellentTransRate'] : null;
        $this->container['audioExcellentTransRate'] = isset($data['audioExcellentTransRate']) ? $data['audioExcellentTransRate'] : null;
        $this->container['videoTransDelay'] = isset($data['videoTransDelay']) ? $data['videoTransDelay'] : null;
        $this->container['audioTransDelay'] = isset($data['audioTransDelay']) ? $data['audioTransDelay'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['date']) && (mb_strlen($this->container['date']) > 20)) {
                $invalidProperties[] = "invalid value for 'date', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['date']) && (mb_strlen($this->container['date']) < 20)) {
                $invalidProperties[] = "invalid value for 'date', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['joinSuccessRate']) && ($this->container['joinSuccessRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'joinSuccessRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['joinSuccessRate']) && ($this->container['joinSuccessRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'joinSuccessRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['joinSuccessIn5secsRate']) && ($this->container['joinSuccessIn5secsRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'joinSuccessIn5secsRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['joinSuccessIn5secsRate']) && ($this->container['joinSuccessIn5secsRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'joinSuccessIn5secsRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['videoFreezeRate']) && ($this->container['videoFreezeRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'videoFreezeRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['videoFreezeRate']) && ($this->container['videoFreezeRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'videoFreezeRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioFreezeRate']) && ($this->container['audioFreezeRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'audioFreezeRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['audioFreezeRate']) && ($this->container['audioFreezeRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'audioFreezeRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['firstVideoRecvTime']) && ($this->container['firstVideoRecvTime'] > 1)) {
                $invalidProperties[] = "invalid value for 'firstVideoRecvTime', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['firstVideoRecvTime']) && ($this->container['firstVideoRecvTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'firstVideoRecvTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['firstAudioRecvTime']) && ($this->container['firstAudioRecvTime'] > 1)) {
                $invalidProperties[] = "invalid value for 'firstAudioRecvTime', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['firstAudioRecvTime']) && ($this->container['firstAudioRecvTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'firstAudioRecvTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pullStreamSuccessRate']) && ($this->container['pullStreamSuccessRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'pullStreamSuccessRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['pullStreamSuccessRate']) && ($this->container['pullStreamSuccessRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'pullStreamSuccessRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pushStreamSuccessRate']) && ($this->container['pushStreamSuccessRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'pushStreamSuccessRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['pushStreamSuccessRate']) && ($this->container['pushStreamSuccessRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'pushStreamSuccessRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['videoUpstreamExcellentTransRate']) && ($this->container['videoUpstreamExcellentTransRate'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'videoUpstreamExcellentTransRate', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['videoUpstreamExcellentTransRate']) && ($this->container['videoUpstreamExcellentTransRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'videoUpstreamExcellentTransRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioUpstreamExcellentTransRate']) && ($this->container['audioUpstreamExcellentTransRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'audioUpstreamExcellentTransRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['audioUpstreamExcellentTransRate']) && ($this->container['audioUpstreamExcellentTransRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'audioUpstreamExcellentTransRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['videoExcellentTransRate']) && ($this->container['videoExcellentTransRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'videoExcellentTransRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['videoExcellentTransRate']) && ($this->container['videoExcellentTransRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'videoExcellentTransRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioExcellentTransRate']) && ($this->container['audioExcellentTransRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'audioExcellentTransRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['audioExcellentTransRate']) && ($this->container['audioExcellentTransRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'audioExcellentTransRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['videoTransDelay']) && ($this->container['videoTransDelay'] > 1)) {
                $invalidProperties[] = "invalid value for 'videoTransDelay', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['videoTransDelay']) && ($this->container['videoTransDelay'] < 0)) {
                $invalidProperties[] = "invalid value for 'videoTransDelay', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioTransDelay']) && ($this->container['audioTransDelay'] > 1)) {
                $invalidProperties[] = "invalid value for 'audioTransDelay', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['audioTransDelay']) && ($this->container['audioTransDelay'] < 0)) {
                $invalidProperties[] = "invalid value for 'audioTransDelay', must be bigger than or equal to 0.";
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
    * Gets date
    *  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    *
    * @return string|null
    */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
    * Sets date
    *
    * @param string|null $date 采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    *
    * @return $this
    */
    public function setDate($date)
    {
        $this->container['date'] = $date;
        return $this;
    }

    /**
    * Gets joinSuccessRate
    *  加入房间成功率参数取值，取值为1代表成功率100%
    *
    * @return double|null
    */
    public function getJoinSuccessRate()
    {
        return $this->container['joinSuccessRate'];
    }

    /**
    * Sets joinSuccessRate
    *
    * @param double|null $joinSuccessRate 加入房间成功率参数取值，取值为1代表成功率100%
    *
    * @return $this
    */
    public function setJoinSuccessRate($joinSuccessRate)
    {
        $this->container['joinSuccessRate'] = $joinSuccessRate;
        return $this;
    }

    /**
    * Gets joinSuccessIn5secsRate
    *  5s内加入房间成功率参数取值，取值为1代表成功率100%
    *
    * @return double|null
    */
    public function getJoinSuccessIn5secsRate()
    {
        return $this->container['joinSuccessIn5secsRate'];
    }

    /**
    * Sets joinSuccessIn5secsRate
    *
    * @param double|null $joinSuccessIn5secsRate 5s内加入房间成功率参数取值，取值为1代表成功率100%
    *
    * @return $this
    */
    public function setJoinSuccessIn5secsRate($joinSuccessIn5secsRate)
    {
        $this->container['joinSuccessIn5secsRate'] = $joinSuccessIn5secsRate;
        return $this;
    }

    /**
    * Gets videoFreezeRate
    *  视频卡顿率参数取值，取值为1代表卡顿率100%
    *
    * @return double|null
    */
    public function getVideoFreezeRate()
    {
        return $this->container['videoFreezeRate'];
    }

    /**
    * Sets videoFreezeRate
    *
    * @param double|null $videoFreezeRate 视频卡顿率参数取值，取值为1代表卡顿率100%
    *
    * @return $this
    */
    public function setVideoFreezeRate($videoFreezeRate)
    {
        $this->container['videoFreezeRate'] = $videoFreezeRate;
        return $this;
    }

    /**
    * Gets audioFreezeRate
    *  音频卡顿率参数取值，取值为1代表卡顿率100%
    *
    * @return double|null
    */
    public function getAudioFreezeRate()
    {
        return $this->container['audioFreezeRate'];
    }

    /**
    * Sets audioFreezeRate
    *
    * @param double|null $audioFreezeRate 音频卡顿率参数取值，取值为1代表卡顿率100%
    *
    * @return $this
    */
    public function setAudioFreezeRate($audioFreezeRate)
    {
        $this->container['audioFreezeRate'] = $audioFreezeRate;
        return $this;
    }

    /**
    * Gets firstVideoRecvTime
    *  首帧视频接收耗时，单位毫秒
    *
    * @return int|null
    */
    public function getFirstVideoRecvTime()
    {
        return $this->container['firstVideoRecvTime'];
    }

    /**
    * Sets firstVideoRecvTime
    *
    * @param int|null $firstVideoRecvTime 首帧视频接收耗时，单位毫秒
    *
    * @return $this
    */
    public function setFirstVideoRecvTime($firstVideoRecvTime)
    {
        $this->container['firstVideoRecvTime'] = $firstVideoRecvTime;
        return $this;
    }

    /**
    * Gets firstAudioRecvTime
    *  首帧音频接收耗时，单位毫秒
    *
    * @return int|null
    */
    public function getFirstAudioRecvTime()
    {
        return $this->container['firstAudioRecvTime'];
    }

    /**
    * Sets firstAudioRecvTime
    *
    * @param int|null $firstAudioRecvTime 首帧音频接收耗时，单位毫秒
    *
    * @return $this
    */
    public function setFirstAudioRecvTime($firstAudioRecvTime)
    {
        $this->container['firstAudioRecvTime'] = $firstAudioRecvTime;
        return $this;
    }

    /**
    * Gets pullStreamSuccessRate
    *  拉流成功率参数取值，取值为1代表成功率100%
    *
    * @return double|null
    */
    public function getPullStreamSuccessRate()
    {
        return $this->container['pullStreamSuccessRate'];
    }

    /**
    * Sets pullStreamSuccessRate
    *
    * @param double|null $pullStreamSuccessRate 拉流成功率参数取值，取值为1代表成功率100%
    *
    * @return $this
    */
    public function setPullStreamSuccessRate($pullStreamSuccessRate)
    {
        $this->container['pullStreamSuccessRate'] = $pullStreamSuccessRate;
        return $this;
    }

    /**
    * Gets pushStreamSuccessRate
    *  推流成功率参数取值，取值为1代表成功率100%
    *
    * @return double|null
    */
    public function getPushStreamSuccessRate()
    {
        return $this->container['pushStreamSuccessRate'];
    }

    /**
    * Sets pushStreamSuccessRate
    *
    * @param double|null $pushStreamSuccessRate 推流成功率参数取值，取值为1代表成功率100%
    *
    * @return $this
    */
    public function setPushStreamSuccessRate($pushStreamSuccessRate)
    {
        $this->container['pushStreamSuccessRate'] = $pushStreamSuccessRate;
        return $this;
    }

    /**
    * Gets videoUpstreamExcellentTransRate
    *  客户端视频上行优质传输率，取值为1代表传输率100%
    *
    * @return double|null
    */
    public function getVideoUpstreamExcellentTransRate()
    {
        return $this->container['videoUpstreamExcellentTransRate'];
    }

    /**
    * Sets videoUpstreamExcellentTransRate
    *
    * @param double|null $videoUpstreamExcellentTransRate 客户端视频上行优质传输率，取值为1代表传输率100%
    *
    * @return $this
    */
    public function setVideoUpstreamExcellentTransRate($videoUpstreamExcellentTransRate)
    {
        $this->container['videoUpstreamExcellentTransRate'] = $videoUpstreamExcellentTransRate;
        return $this;
    }

    /**
    * Gets audioUpstreamExcellentTransRate
    *  客户端音频上行优质传输率，取值为1代表传输率100%
    *
    * @return double|null
    */
    public function getAudioUpstreamExcellentTransRate()
    {
        return $this->container['audioUpstreamExcellentTransRate'];
    }

    /**
    * Sets audioUpstreamExcellentTransRate
    *
    * @param double|null $audioUpstreamExcellentTransRate 客户端音频上行优质传输率，取值为1代表传输率100%
    *
    * @return $this
    */
    public function setAudioUpstreamExcellentTransRate($audioUpstreamExcellentTransRate)
    {
        $this->container['audioUpstreamExcellentTransRate'] = $audioUpstreamExcellentTransRate;
        return $this;
    }

    /**
    * Gets videoExcellentTransRate
    *  端到端视频优质传输率，取值为1代表传输率100%
    *
    * @return double|null
    */
    public function getVideoExcellentTransRate()
    {
        return $this->container['videoExcellentTransRate'];
    }

    /**
    * Sets videoExcellentTransRate
    *
    * @param double|null $videoExcellentTransRate 端到端视频优质传输率，取值为1代表传输率100%
    *
    * @return $this
    */
    public function setVideoExcellentTransRate($videoExcellentTransRate)
    {
        $this->container['videoExcellentTransRate'] = $videoExcellentTransRate;
        return $this;
    }

    /**
    * Gets audioExcellentTransRate
    *  端到端音频优质传输率，取值为1代表传输率100%
    *
    * @return double|null
    */
    public function getAudioExcellentTransRate()
    {
        return $this->container['audioExcellentTransRate'];
    }

    /**
    * Sets audioExcellentTransRate
    *
    * @param double|null $audioExcellentTransRate 端到端音频优质传输率，取值为1代表传输率100%
    *
    * @return $this
    */
    public function setAudioExcellentTransRate($audioExcellentTransRate)
    {
        $this->container['audioExcellentTransRate'] = $audioExcellentTransRate;
        return $this;
    }

    /**
    * Gets videoTransDelay
    *  端到端视频网络时延，单位为毫秒，取当天所有用户网络延迟的中位数。
    *
    * @return double|null
    */
    public function getVideoTransDelay()
    {
        return $this->container['videoTransDelay'];
    }

    /**
    * Sets videoTransDelay
    *
    * @param double|null $videoTransDelay 端到端视频网络时延，单位为毫秒，取当天所有用户网络延迟的中位数。
    *
    * @return $this
    */
    public function setVideoTransDelay($videoTransDelay)
    {
        $this->container['videoTransDelay'] = $videoTransDelay;
        return $this;
    }

    /**
    * Gets audioTransDelay
    *  端到端音频网络时延，单位为毫秒，取当天所有用户网络延迟的中位数。
    *
    * @return double|null
    */
    public function getAudioTransDelay()
    {
        return $this->container['audioTransDelay'];
    }

    /**
    * Sets audioTransDelay
    *
    * @param double|null $audioTransDelay 端到端音频网络时延，单位为毫秒，取当天所有用户网络延迟的中位数。
    *
    * @return $this
    */
    public function setAudioTransDelay($audioTransDelay)
    {
        $this->container['audioTransDelay'] = $audioTransDelay;
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


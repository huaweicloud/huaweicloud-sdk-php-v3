<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartSmartLiveReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartSmartLiveReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * videoConfig  videoConfig
    * playPolicy  playPolicy
    * outputUrls  **参数解释**： RTMP视频推流第三方直播平台地址。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * streamKeys  **参数解释**： RTMP视频推流第三方直播平台流密钥，与推流地址对应。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * interactionCallbackUrl  **参数解释**： 互动回调URL，含鉴权信息。 互动规则trigger.reply_mode配置为CALLBACK时填写 **约束限制**： 不涉及 **取值范围**： 字符长度0-2048位 **默认取值**： 不涉及。
    * liveEventCallbackConfig  liveEventCallbackConfig
    * rtcCallbackConfig  rtcCallbackConfig
    * viewMode  **参数解释**： 横竖屏类型。 **约束限制**： 用户无需填写，通过video_config中分辨率判断 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL： 竖屏。
    * coStreamerConfig  coStreamerConfig
    * jobRunConfig  jobRunConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'videoConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VideoConfig',
            'playPolicy' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\PlayPolicy',
            'outputUrls' => 'string[]',
            'streamKeys' => 'string[]',
            'interactionCallbackUrl' => 'string',
            'liveEventCallbackConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventCallBackConfig',
            'rtcCallbackConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RTCLiveEventCallBackConfig',
            'viewMode' => 'string',
            'coStreamerConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\CoStreamerConfig',
            'jobRunConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveJobRunConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * videoConfig  videoConfig
    * playPolicy  playPolicy
    * outputUrls  **参数解释**： RTMP视频推流第三方直播平台地址。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * streamKeys  **参数解释**： RTMP视频推流第三方直播平台流密钥，与推流地址对应。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * interactionCallbackUrl  **参数解释**： 互动回调URL，含鉴权信息。 互动规则trigger.reply_mode配置为CALLBACK时填写 **约束限制**： 不涉及 **取值范围**： 字符长度0-2048位 **默认取值**： 不涉及。
    * liveEventCallbackConfig  liveEventCallbackConfig
    * rtcCallbackConfig  rtcCallbackConfig
    * viewMode  **参数解释**： 横竖屏类型。 **约束限制**： 用户无需填写，通过video_config中分辨率判断 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL： 竖屏。
    * coStreamerConfig  coStreamerConfig
    * jobRunConfig  jobRunConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'videoConfig' => null,
        'playPolicy' => null,
        'outputUrls' => null,
        'streamKeys' => null,
        'interactionCallbackUrl' => null,
        'liveEventCallbackConfig' => null,
        'rtcCallbackConfig' => null,
        'viewMode' => null,
        'coStreamerConfig' => null,
        'jobRunConfig' => null
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
    * videoConfig  videoConfig
    * playPolicy  playPolicy
    * outputUrls  **参数解释**： RTMP视频推流第三方直播平台地址。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * streamKeys  **参数解释**： RTMP视频推流第三方直播平台流密钥，与推流地址对应。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * interactionCallbackUrl  **参数解释**： 互动回调URL，含鉴权信息。 互动规则trigger.reply_mode配置为CALLBACK时填写 **约束限制**： 不涉及 **取值范围**： 字符长度0-2048位 **默认取值**： 不涉及。
    * liveEventCallbackConfig  liveEventCallbackConfig
    * rtcCallbackConfig  rtcCallbackConfig
    * viewMode  **参数解释**： 横竖屏类型。 **约束限制**： 用户无需填写，通过video_config中分辨率判断 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL： 竖屏。
    * coStreamerConfig  coStreamerConfig
    * jobRunConfig  jobRunConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'videoConfig' => 'video_config',
            'playPolicy' => 'play_policy',
            'outputUrls' => 'output_urls',
            'streamKeys' => 'stream_keys',
            'interactionCallbackUrl' => 'interaction_callback_url',
            'liveEventCallbackConfig' => 'live_event_callback_config',
            'rtcCallbackConfig' => 'rtc_callback_config',
            'viewMode' => 'view_mode',
            'coStreamerConfig' => 'co_streamer_config',
            'jobRunConfig' => 'job_run_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * videoConfig  videoConfig
    * playPolicy  playPolicy
    * outputUrls  **参数解释**： RTMP视频推流第三方直播平台地址。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * streamKeys  **参数解释**： RTMP视频推流第三方直播平台流密钥，与推流地址对应。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * interactionCallbackUrl  **参数解释**： 互动回调URL，含鉴权信息。 互动规则trigger.reply_mode配置为CALLBACK时填写 **约束限制**： 不涉及 **取值范围**： 字符长度0-2048位 **默认取值**： 不涉及。
    * liveEventCallbackConfig  liveEventCallbackConfig
    * rtcCallbackConfig  rtcCallbackConfig
    * viewMode  **参数解释**： 横竖屏类型。 **约束限制**： 用户无需填写，通过video_config中分辨率判断 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL： 竖屏。
    * coStreamerConfig  coStreamerConfig
    * jobRunConfig  jobRunConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'videoConfig' => 'setVideoConfig',
            'playPolicy' => 'setPlayPolicy',
            'outputUrls' => 'setOutputUrls',
            'streamKeys' => 'setStreamKeys',
            'interactionCallbackUrl' => 'setInteractionCallbackUrl',
            'liveEventCallbackConfig' => 'setLiveEventCallbackConfig',
            'rtcCallbackConfig' => 'setRtcCallbackConfig',
            'viewMode' => 'setViewMode',
            'coStreamerConfig' => 'setCoStreamerConfig',
            'jobRunConfig' => 'setJobRunConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * videoConfig  videoConfig
    * playPolicy  playPolicy
    * outputUrls  **参数解释**： RTMP视频推流第三方直播平台地址。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * streamKeys  **参数解释**： RTMP视频推流第三方直播平台流密钥，与推流地址对应。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * interactionCallbackUrl  **参数解释**： 互动回调URL，含鉴权信息。 互动规则trigger.reply_mode配置为CALLBACK时填写 **约束限制**： 不涉及 **取值范围**： 字符长度0-2048位 **默认取值**： 不涉及。
    * liveEventCallbackConfig  liveEventCallbackConfig
    * rtcCallbackConfig  rtcCallbackConfig
    * viewMode  **参数解释**： 横竖屏类型。 **约束限制**： 用户无需填写，通过video_config中分辨率判断 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL： 竖屏。
    * coStreamerConfig  coStreamerConfig
    * jobRunConfig  jobRunConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'videoConfig' => 'getVideoConfig',
            'playPolicy' => 'getPlayPolicy',
            'outputUrls' => 'getOutputUrls',
            'streamKeys' => 'getStreamKeys',
            'interactionCallbackUrl' => 'getInteractionCallbackUrl',
            'liveEventCallbackConfig' => 'getLiveEventCallbackConfig',
            'rtcCallbackConfig' => 'getRtcCallbackConfig',
            'viewMode' => 'getViewMode',
            'coStreamerConfig' => 'getCoStreamerConfig',
            'jobRunConfig' => 'getJobRunConfig'
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
    const VIEW_MODE_LANDSCAPE = 'LANDSCAPE';
    const VIEW_MODE_VERTICAL = 'VERTICAL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getViewModeAllowableValues()
    {
        return [
            self::VIEW_MODE_LANDSCAPE,
            self::VIEW_MODE_VERTICAL,
        ];
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
        $this->container['videoConfig'] = isset($data['videoConfig']) ? $data['videoConfig'] : null;
        $this->container['playPolicy'] = isset($data['playPolicy']) ? $data['playPolicy'] : null;
        $this->container['outputUrls'] = isset($data['outputUrls']) ? $data['outputUrls'] : null;
        $this->container['streamKeys'] = isset($data['streamKeys']) ? $data['streamKeys'] : null;
        $this->container['interactionCallbackUrl'] = isset($data['interactionCallbackUrl']) ? $data['interactionCallbackUrl'] : null;
        $this->container['liveEventCallbackConfig'] = isset($data['liveEventCallbackConfig']) ? $data['liveEventCallbackConfig'] : null;
        $this->container['rtcCallbackConfig'] = isset($data['rtcCallbackConfig']) ? $data['rtcCallbackConfig'] : null;
        $this->container['viewMode'] = isset($data['viewMode']) ? $data['viewMode'] : null;
        $this->container['coStreamerConfig'] = isset($data['coStreamerConfig']) ? $data['coStreamerConfig'] : null;
        $this->container['jobRunConfig'] = isset($data['jobRunConfig']) ? $data['jobRunConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['interactionCallbackUrl']) && (mb_strlen($this->container['interactionCallbackUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'interactionCallbackUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['interactionCallbackUrl']) && (mb_strlen($this->container['interactionCallbackUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'interactionCallbackUrl', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getViewModeAllowableValues();
                if (!is_null($this->container['viewMode']) && !in_array($this->container['viewMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'viewMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets videoConfig
    *  videoConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VideoConfig|null
    */
    public function getVideoConfig()
    {
        return $this->container['videoConfig'];
    }

    /**
    * Sets videoConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VideoConfig|null $videoConfig videoConfig
    *
    * @return $this
    */
    public function setVideoConfig($videoConfig)
    {
        $this->container['videoConfig'] = $videoConfig;
        return $this;
    }

    /**
    * Gets playPolicy
    *  playPolicy
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\PlayPolicy|null
    */
    public function getPlayPolicy()
    {
        return $this->container['playPolicy'];
    }

    /**
    * Sets playPolicy
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\PlayPolicy|null $playPolicy playPolicy
    *
    * @return $this
    */
    public function setPlayPolicy($playPolicy)
    {
        $this->container['playPolicy'] = $playPolicy;
        return $this;
    }

    /**
    * Gets outputUrls
    *  **参数解释**： RTMP视频推流第三方直播平台地址。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getOutputUrls()
    {
        return $this->container['outputUrls'];
    }

    /**
    * Sets outputUrls
    *
    * @param string[]|null $outputUrls **参数解释**： RTMP视频推流第三方直播平台地址。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setOutputUrls($outputUrls)
    {
        $this->container['outputUrls'] = $outputUrls;
        return $this;
    }

    /**
    * Gets streamKeys
    *  **参数解释**： RTMP视频推流第三方直播平台流密钥，与推流地址对应。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getStreamKeys()
    {
        return $this->container['streamKeys'];
    }

    /**
    * Sets streamKeys
    *
    * @param string[]|null $streamKeys **参数解释**： RTMP视频推流第三方直播平台流密钥，与推流地址对应。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStreamKeys($streamKeys)
    {
        $this->container['streamKeys'] = $streamKeys;
        return $this;
    }

    /**
    * Gets interactionCallbackUrl
    *  **参数解释**： 互动回调URL，含鉴权信息。 互动规则trigger.reply_mode配置为CALLBACK时填写 **约束限制**： 不涉及 **取值范围**： 字符长度0-2048位 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getInteractionCallbackUrl()
    {
        return $this->container['interactionCallbackUrl'];
    }

    /**
    * Sets interactionCallbackUrl
    *
    * @param string|null $interactionCallbackUrl **参数解释**： 互动回调URL，含鉴权信息。 互动规则trigger.reply_mode配置为CALLBACK时填写 **约束限制**： 不涉及 **取值范围**： 字符长度0-2048位 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setInteractionCallbackUrl($interactionCallbackUrl)
    {
        $this->container['interactionCallbackUrl'] = $interactionCallbackUrl;
        return $this;
    }

    /**
    * Gets liveEventCallbackConfig
    *  liveEventCallbackConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventCallBackConfig|null
    */
    public function getLiveEventCallbackConfig()
    {
        return $this->container['liveEventCallbackConfig'];
    }

    /**
    * Sets liveEventCallbackConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventCallBackConfig|null $liveEventCallbackConfig liveEventCallbackConfig
    *
    * @return $this
    */
    public function setLiveEventCallbackConfig($liveEventCallbackConfig)
    {
        $this->container['liveEventCallbackConfig'] = $liveEventCallbackConfig;
        return $this;
    }

    /**
    * Gets rtcCallbackConfig
    *  rtcCallbackConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\RTCLiveEventCallBackConfig|null
    */
    public function getRtcCallbackConfig()
    {
        return $this->container['rtcCallbackConfig'];
    }

    /**
    * Sets rtcCallbackConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\RTCLiveEventCallBackConfig|null $rtcCallbackConfig rtcCallbackConfig
    *
    * @return $this
    */
    public function setRtcCallbackConfig($rtcCallbackConfig)
    {
        $this->container['rtcCallbackConfig'] = $rtcCallbackConfig;
        return $this;
    }

    /**
    * Gets viewMode
    *  **参数解释**： 横竖屏类型。 **约束限制**： 用户无需填写，通过video_config中分辨率判断 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL： 竖屏。
    *
    * @return string|null
    */
    public function getViewMode()
    {
        return $this->container['viewMode'];
    }

    /**
    * Sets viewMode
    *
    * @param string|null $viewMode **参数解释**： 横竖屏类型。 **约束限制**： 用户无需填写，通过video_config中分辨率判断 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL： 竖屏。
    *
    * @return $this
    */
    public function setViewMode($viewMode)
    {
        $this->container['viewMode'] = $viewMode;
        return $this;
    }

    /**
    * Gets coStreamerConfig
    *  coStreamerConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\CoStreamerConfig|null
    */
    public function getCoStreamerConfig()
    {
        return $this->container['coStreamerConfig'];
    }

    /**
    * Sets coStreamerConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\CoStreamerConfig|null $coStreamerConfig coStreamerConfig
    *
    * @return $this
    */
    public function setCoStreamerConfig($coStreamerConfig)
    {
        $this->container['coStreamerConfig'] = $coStreamerConfig;
        return $this;
    }

    /**
    * Gets jobRunConfig
    *  jobRunConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveJobRunConfig|null
    */
    public function getJobRunConfig()
    {
        return $this->container['jobRunConfig'];
    }

    /**
    * Sets jobRunConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveJobRunConfig|null $jobRunConfig jobRunConfig
    *
    * @return $this
    */
    public function setJobRunConfig($jobRunConfig)
    {
        $this->container['jobRunConfig'] = $jobRunConfig;
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


<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSmartLiveRoomReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSmartLiveRoomReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roomName  **参数解释**： 直播间名称。 **约束限制**： 不涉及。 **取值范围**： 字符长度1-256位。 **默认取值**： 不涉及。
    * roomDescription  **参数解释**： 直播间描述。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-1024位。 **默认取值**： 不涉及。
    * roomType  **参数解释**： 直播间类型。 **约束限制**： 不涉及。 **取值范围**： * NORMAL：普通直播间，直播间一直存在，可以反复开播 * TEMP：临时直播间，直播任务结束后自动清理直播间。 * TEMPLATE：直播间模板。
    * sceneScripts  默认直播剧本列表。
    * interactionConfig  interactionConfig
    * interactionRules  互动规则列表
    * playPolicy  playPolicy
    * videoConfig  videoConfig
    * outputUrls  **参数解释**： RTMP视频推流第三方直播平台地址。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * streamKeys  **参数解释**： RTMP视频推流第三方直播平台流密钥，与推流地址对应。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * backupModelAssetIds  **参数解释**： 主播轮换时备选主播数字人资产ID（仅形象资产，不包含声音）。  **约束限制**： 不涉及 **取值范围**： 当前最大支持5个备选主播。 数字人资产ID，字符长度0-64位。 **默认取值**： 不涉及
    * liveEventCallbackConfig  liveEventCallbackConfig
    * rtcCallbackConfig  rtcCallbackConfig
    * reviewConfig  reviewConfig
    * sharedConfig  sharedConfig
    * viewMode  **参数解释**： 横竖屏类型。 **约束限制**： 用户无需填写，通过video_config中分辨率判断 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL： 竖屏。
    * coStreamerConfig  coStreamerConfig
    * privData  **参数解释**： 匹配值私有数据，用户填写，原样带回。 **约束限制**： 不涉及 **取值范围**： 字符长度0-8192 **默认取值**： 不涉及。
    * relationLivePlatformInfo  relationLivePlatformInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roomName' => 'string',
            'roomDescription' => 'string',
            'roomType' => 'string',
            'sceneScripts' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveVideoScriptInfo[]',
            'interactionConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveRoomInteractionConfig',
            'interactionRules' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveRoomInteractionRuleInfo[]',
            'playPolicy' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\PlayPolicy',
            'videoConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VideoConfig',
            'outputUrls' => 'string[]',
            'streamKeys' => 'string[]',
            'backupModelAssetIds' => 'string[]',
            'liveEventCallbackConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveRoomEventCallBackConfig',
            'rtcCallbackConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RTCLiveEventCallBackConfig',
            'reviewConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig',
            'sharedConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SharedConfig',
            'viewMode' => 'string',
            'coStreamerConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\CoStreamerConfig',
            'privData' => 'string',
            'relationLivePlatformInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\PlatformLiveInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roomName  **参数解释**： 直播间名称。 **约束限制**： 不涉及。 **取值范围**： 字符长度1-256位。 **默认取值**： 不涉及。
    * roomDescription  **参数解释**： 直播间描述。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-1024位。 **默认取值**： 不涉及。
    * roomType  **参数解释**： 直播间类型。 **约束限制**： 不涉及。 **取值范围**： * NORMAL：普通直播间，直播间一直存在，可以反复开播 * TEMP：临时直播间，直播任务结束后自动清理直播间。 * TEMPLATE：直播间模板。
    * sceneScripts  默认直播剧本列表。
    * interactionConfig  interactionConfig
    * interactionRules  互动规则列表
    * playPolicy  playPolicy
    * videoConfig  videoConfig
    * outputUrls  **参数解释**： RTMP视频推流第三方直播平台地址。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * streamKeys  **参数解释**： RTMP视频推流第三方直播平台流密钥，与推流地址对应。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * backupModelAssetIds  **参数解释**： 主播轮换时备选主播数字人资产ID（仅形象资产，不包含声音）。  **约束限制**： 不涉及 **取值范围**： 当前最大支持5个备选主播。 数字人资产ID，字符长度0-64位。 **默认取值**： 不涉及
    * liveEventCallbackConfig  liveEventCallbackConfig
    * rtcCallbackConfig  rtcCallbackConfig
    * reviewConfig  reviewConfig
    * sharedConfig  sharedConfig
    * viewMode  **参数解释**： 横竖屏类型。 **约束限制**： 用户无需填写，通过video_config中分辨率判断 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL： 竖屏。
    * coStreamerConfig  coStreamerConfig
    * privData  **参数解释**： 匹配值私有数据，用户填写，原样带回。 **约束限制**： 不涉及 **取值范围**： 字符长度0-8192 **默认取值**： 不涉及。
    * relationLivePlatformInfo  relationLivePlatformInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roomName' => null,
        'roomDescription' => null,
        'roomType' => null,
        'sceneScripts' => null,
        'interactionConfig' => null,
        'interactionRules' => null,
        'playPolicy' => null,
        'videoConfig' => null,
        'outputUrls' => null,
        'streamKeys' => null,
        'backupModelAssetIds' => null,
        'liveEventCallbackConfig' => null,
        'rtcCallbackConfig' => null,
        'reviewConfig' => null,
        'sharedConfig' => null,
        'viewMode' => null,
        'coStreamerConfig' => null,
        'privData' => null,
        'relationLivePlatformInfo' => null
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
    * roomName  **参数解释**： 直播间名称。 **约束限制**： 不涉及。 **取值范围**： 字符长度1-256位。 **默认取值**： 不涉及。
    * roomDescription  **参数解释**： 直播间描述。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-1024位。 **默认取值**： 不涉及。
    * roomType  **参数解释**： 直播间类型。 **约束限制**： 不涉及。 **取值范围**： * NORMAL：普通直播间，直播间一直存在，可以反复开播 * TEMP：临时直播间，直播任务结束后自动清理直播间。 * TEMPLATE：直播间模板。
    * sceneScripts  默认直播剧本列表。
    * interactionConfig  interactionConfig
    * interactionRules  互动规则列表
    * playPolicy  playPolicy
    * videoConfig  videoConfig
    * outputUrls  **参数解释**： RTMP视频推流第三方直播平台地址。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * streamKeys  **参数解释**： RTMP视频推流第三方直播平台流密钥，与推流地址对应。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * backupModelAssetIds  **参数解释**： 主播轮换时备选主播数字人资产ID（仅形象资产，不包含声音）。  **约束限制**： 不涉及 **取值范围**： 当前最大支持5个备选主播。 数字人资产ID，字符长度0-64位。 **默认取值**： 不涉及
    * liveEventCallbackConfig  liveEventCallbackConfig
    * rtcCallbackConfig  rtcCallbackConfig
    * reviewConfig  reviewConfig
    * sharedConfig  sharedConfig
    * viewMode  **参数解释**： 横竖屏类型。 **约束限制**： 用户无需填写，通过video_config中分辨率判断 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL： 竖屏。
    * coStreamerConfig  coStreamerConfig
    * privData  **参数解释**： 匹配值私有数据，用户填写，原样带回。 **约束限制**： 不涉及 **取值范围**： 字符长度0-8192 **默认取值**： 不涉及。
    * relationLivePlatformInfo  relationLivePlatformInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roomName' => 'room_name',
            'roomDescription' => 'room_description',
            'roomType' => 'room_type',
            'sceneScripts' => 'scene_scripts',
            'interactionConfig' => 'interaction_config',
            'interactionRules' => 'interaction_rules',
            'playPolicy' => 'play_policy',
            'videoConfig' => 'video_config',
            'outputUrls' => 'output_urls',
            'streamKeys' => 'stream_keys',
            'backupModelAssetIds' => 'backup_model_asset_ids',
            'liveEventCallbackConfig' => 'live_event_callback_config',
            'rtcCallbackConfig' => 'rtc_callback_config',
            'reviewConfig' => 'review_config',
            'sharedConfig' => 'shared_config',
            'viewMode' => 'view_mode',
            'coStreamerConfig' => 'co_streamer_config',
            'privData' => 'priv_data',
            'relationLivePlatformInfo' => 'relation_live_platform_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roomName  **参数解释**： 直播间名称。 **约束限制**： 不涉及。 **取值范围**： 字符长度1-256位。 **默认取值**： 不涉及。
    * roomDescription  **参数解释**： 直播间描述。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-1024位。 **默认取值**： 不涉及。
    * roomType  **参数解释**： 直播间类型。 **约束限制**： 不涉及。 **取值范围**： * NORMAL：普通直播间，直播间一直存在，可以反复开播 * TEMP：临时直播间，直播任务结束后自动清理直播间。 * TEMPLATE：直播间模板。
    * sceneScripts  默认直播剧本列表。
    * interactionConfig  interactionConfig
    * interactionRules  互动规则列表
    * playPolicy  playPolicy
    * videoConfig  videoConfig
    * outputUrls  **参数解释**： RTMP视频推流第三方直播平台地址。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * streamKeys  **参数解释**： RTMP视频推流第三方直播平台流密钥，与推流地址对应。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * backupModelAssetIds  **参数解释**： 主播轮换时备选主播数字人资产ID（仅形象资产，不包含声音）。  **约束限制**： 不涉及 **取值范围**： 当前最大支持5个备选主播。 数字人资产ID，字符长度0-64位。 **默认取值**： 不涉及
    * liveEventCallbackConfig  liveEventCallbackConfig
    * rtcCallbackConfig  rtcCallbackConfig
    * reviewConfig  reviewConfig
    * sharedConfig  sharedConfig
    * viewMode  **参数解释**： 横竖屏类型。 **约束限制**： 用户无需填写，通过video_config中分辨率判断 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL： 竖屏。
    * coStreamerConfig  coStreamerConfig
    * privData  **参数解释**： 匹配值私有数据，用户填写，原样带回。 **约束限制**： 不涉及 **取值范围**： 字符长度0-8192 **默认取值**： 不涉及。
    * relationLivePlatformInfo  relationLivePlatformInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'roomName' => 'setRoomName',
            'roomDescription' => 'setRoomDescription',
            'roomType' => 'setRoomType',
            'sceneScripts' => 'setSceneScripts',
            'interactionConfig' => 'setInteractionConfig',
            'interactionRules' => 'setInteractionRules',
            'playPolicy' => 'setPlayPolicy',
            'videoConfig' => 'setVideoConfig',
            'outputUrls' => 'setOutputUrls',
            'streamKeys' => 'setStreamKeys',
            'backupModelAssetIds' => 'setBackupModelAssetIds',
            'liveEventCallbackConfig' => 'setLiveEventCallbackConfig',
            'rtcCallbackConfig' => 'setRtcCallbackConfig',
            'reviewConfig' => 'setReviewConfig',
            'sharedConfig' => 'setSharedConfig',
            'viewMode' => 'setViewMode',
            'coStreamerConfig' => 'setCoStreamerConfig',
            'privData' => 'setPrivData',
            'relationLivePlatformInfo' => 'setRelationLivePlatformInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roomName  **参数解释**： 直播间名称。 **约束限制**： 不涉及。 **取值范围**： 字符长度1-256位。 **默认取值**： 不涉及。
    * roomDescription  **参数解释**： 直播间描述。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-1024位。 **默认取值**： 不涉及。
    * roomType  **参数解释**： 直播间类型。 **约束限制**： 不涉及。 **取值范围**： * NORMAL：普通直播间，直播间一直存在，可以反复开播 * TEMP：临时直播间，直播任务结束后自动清理直播间。 * TEMPLATE：直播间模板。
    * sceneScripts  默认直播剧本列表。
    * interactionConfig  interactionConfig
    * interactionRules  互动规则列表
    * playPolicy  playPolicy
    * videoConfig  videoConfig
    * outputUrls  **参数解释**： RTMP视频推流第三方直播平台地址。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * streamKeys  **参数解释**： RTMP视频推流第三方直播平台流密钥，与推流地址对应。 > 直播过程中刷新地址，需要调用COMMAND命令REFRESH_OUTPUT_URL。  **约束限制**： 不涉及 **取值范围**： 当前仅支持一条RTMP出流地址。 **默认取值**： 不涉及。
    * backupModelAssetIds  **参数解释**： 主播轮换时备选主播数字人资产ID（仅形象资产，不包含声音）。  **约束限制**： 不涉及 **取值范围**： 当前最大支持5个备选主播。 数字人资产ID，字符长度0-64位。 **默认取值**： 不涉及
    * liveEventCallbackConfig  liveEventCallbackConfig
    * rtcCallbackConfig  rtcCallbackConfig
    * reviewConfig  reviewConfig
    * sharedConfig  sharedConfig
    * viewMode  **参数解释**： 横竖屏类型。 **约束限制**： 用户无需填写，通过video_config中分辨率判断 **取值范围**： * LANDSCAPE：横屏。 * VERTICAL： 竖屏。
    * coStreamerConfig  coStreamerConfig
    * privData  **参数解释**： 匹配值私有数据，用户填写，原样带回。 **约束限制**： 不涉及 **取值范围**： 字符长度0-8192 **默认取值**： 不涉及。
    * relationLivePlatformInfo  relationLivePlatformInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'roomName' => 'getRoomName',
            'roomDescription' => 'getRoomDescription',
            'roomType' => 'getRoomType',
            'sceneScripts' => 'getSceneScripts',
            'interactionConfig' => 'getInteractionConfig',
            'interactionRules' => 'getInteractionRules',
            'playPolicy' => 'getPlayPolicy',
            'videoConfig' => 'getVideoConfig',
            'outputUrls' => 'getOutputUrls',
            'streamKeys' => 'getStreamKeys',
            'backupModelAssetIds' => 'getBackupModelAssetIds',
            'liveEventCallbackConfig' => 'getLiveEventCallbackConfig',
            'rtcCallbackConfig' => 'getRtcCallbackConfig',
            'reviewConfig' => 'getReviewConfig',
            'sharedConfig' => 'getSharedConfig',
            'viewMode' => 'getViewMode',
            'coStreamerConfig' => 'getCoStreamerConfig',
            'privData' => 'getPrivData',
            'relationLivePlatformInfo' => 'getRelationLivePlatformInfo'
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
    const ROOM_TYPE_NORMAL = 'NORMAL';
    const ROOM_TYPE_TEMP = 'TEMP';
    const ROOM_TYPE_TEMPLATE = 'TEMPLATE';
    const VIEW_MODE_LANDSCAPE = 'LANDSCAPE';
    const VIEW_MODE_VERTICAL = 'VERTICAL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRoomTypeAllowableValues()
    {
        return [
            self::ROOM_TYPE_NORMAL,
            self::ROOM_TYPE_TEMP,
            self::ROOM_TYPE_TEMPLATE,
        ];
    }

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
        $this->container['roomName'] = isset($data['roomName']) ? $data['roomName'] : null;
        $this->container['roomDescription'] = isset($data['roomDescription']) ? $data['roomDescription'] : null;
        $this->container['roomType'] = isset($data['roomType']) ? $data['roomType'] : null;
        $this->container['sceneScripts'] = isset($data['sceneScripts']) ? $data['sceneScripts'] : null;
        $this->container['interactionConfig'] = isset($data['interactionConfig']) ? $data['interactionConfig'] : null;
        $this->container['interactionRules'] = isset($data['interactionRules']) ? $data['interactionRules'] : null;
        $this->container['playPolicy'] = isset($data['playPolicy']) ? $data['playPolicy'] : null;
        $this->container['videoConfig'] = isset($data['videoConfig']) ? $data['videoConfig'] : null;
        $this->container['outputUrls'] = isset($data['outputUrls']) ? $data['outputUrls'] : null;
        $this->container['streamKeys'] = isset($data['streamKeys']) ? $data['streamKeys'] : null;
        $this->container['backupModelAssetIds'] = isset($data['backupModelAssetIds']) ? $data['backupModelAssetIds'] : null;
        $this->container['liveEventCallbackConfig'] = isset($data['liveEventCallbackConfig']) ? $data['liveEventCallbackConfig'] : null;
        $this->container['rtcCallbackConfig'] = isset($data['rtcCallbackConfig']) ? $data['rtcCallbackConfig'] : null;
        $this->container['reviewConfig'] = isset($data['reviewConfig']) ? $data['reviewConfig'] : null;
        $this->container['sharedConfig'] = isset($data['sharedConfig']) ? $data['sharedConfig'] : null;
        $this->container['viewMode'] = isset($data['viewMode']) ? $data['viewMode'] : null;
        $this->container['coStreamerConfig'] = isset($data['coStreamerConfig']) ? $data['coStreamerConfig'] : null;
        $this->container['privData'] = isset($data['privData']) ? $data['privData'] : null;
        $this->container['relationLivePlatformInfo'] = isset($data['relationLivePlatformInfo']) ? $data['relationLivePlatformInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['roomName'] === null) {
            $invalidProperties[] = "'roomName' can't be null";
        }
            if ((mb_strlen($this->container['roomName']) > 256)) {
                $invalidProperties[] = "invalid value for 'roomName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['roomName']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roomDescription']) && (mb_strlen($this->container['roomDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'roomDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['roomDescription']) && (mb_strlen($this->container['roomDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'roomDescription', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getRoomTypeAllowableValues();
                if (!is_null($this->container['roomType']) && !in_array($this->container['roomType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'roomType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['roomType']) && (mb_strlen($this->container['roomType']) > 16)) {
                $invalidProperties[] = "invalid value for 'roomType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['roomType']) && (mb_strlen($this->container['roomType']) < 0)) {
                $invalidProperties[] = "invalid value for 'roomType', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getViewModeAllowableValues();
                if (!is_null($this->container['viewMode']) && !in_array($this->container['viewMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'viewMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['privData']) && (mb_strlen($this->container['privData']) > 8192)) {
                $invalidProperties[] = "invalid value for 'privData', the character length must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['privData']) && (mb_strlen($this->container['privData']) < 0)) {
                $invalidProperties[] = "invalid value for 'privData', the character length must be bigger than or equal to 0.";
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
    * Gets roomName
    *  **参数解释**： 直播间名称。 **约束限制**： 不涉及。 **取值范围**： 字符长度1-256位。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getRoomName()
    {
        return $this->container['roomName'];
    }

    /**
    * Sets roomName
    *
    * @param string $roomName **参数解释**： 直播间名称。 **约束限制**： 不涉及。 **取值范围**： 字符长度1-256位。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRoomName($roomName)
    {
        $this->container['roomName'] = $roomName;
        return $this;
    }

    /**
    * Gets roomDescription
    *  **参数解释**： 直播间描述。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-1024位。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getRoomDescription()
    {
        return $this->container['roomDescription'];
    }

    /**
    * Sets roomDescription
    *
    * @param string|null $roomDescription **参数解释**： 直播间描述。 **约束限制**： 不涉及。 **取值范围**： 字符长度0-1024位。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRoomDescription($roomDescription)
    {
        $this->container['roomDescription'] = $roomDescription;
        return $this;
    }

    /**
    * Gets roomType
    *  **参数解释**： 直播间类型。 **约束限制**： 不涉及。 **取值范围**： * NORMAL：普通直播间，直播间一直存在，可以反复开播 * TEMP：临时直播间，直播任务结束后自动清理直播间。 * TEMPLATE：直播间模板。
    *
    * @return string|null
    */
    public function getRoomType()
    {
        return $this->container['roomType'];
    }

    /**
    * Sets roomType
    *
    * @param string|null $roomType **参数解释**： 直播间类型。 **约束限制**： 不涉及。 **取值范围**： * NORMAL：普通直播间，直播间一直存在，可以反复开播 * TEMP：临时直播间，直播任务结束后自动清理直播间。 * TEMPLATE：直播间模板。
    *
    * @return $this
    */
    public function setRoomType($roomType)
    {
        $this->container['roomType'] = $roomType;
        return $this;
    }

    /**
    * Gets sceneScripts
    *  默认直播剧本列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveVideoScriptInfo[]|null
    */
    public function getSceneScripts()
    {
        return $this->container['sceneScripts'];
    }

    /**
    * Sets sceneScripts
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveVideoScriptInfo[]|null $sceneScripts 默认直播剧本列表。
    *
    * @return $this
    */
    public function setSceneScripts($sceneScripts)
    {
        $this->container['sceneScripts'] = $sceneScripts;
        return $this;
    }

    /**
    * Gets interactionConfig
    *  interactionConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveRoomInteractionConfig|null
    */
    public function getInteractionConfig()
    {
        return $this->container['interactionConfig'];
    }

    /**
    * Sets interactionConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveRoomInteractionConfig|null $interactionConfig interactionConfig
    *
    * @return $this
    */
    public function setInteractionConfig($interactionConfig)
    {
        $this->container['interactionConfig'] = $interactionConfig;
        return $this;
    }

    /**
    * Gets interactionRules
    *  互动规则列表
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveRoomInteractionRuleInfo[]|null
    */
    public function getInteractionRules()
    {
        return $this->container['interactionRules'];
    }

    /**
    * Sets interactionRules
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveRoomInteractionRuleInfo[]|null $interactionRules 互动规则列表
    *
    * @return $this
    */
    public function setInteractionRules($interactionRules)
    {
        $this->container['interactionRules'] = $interactionRules;
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
    * Gets backupModelAssetIds
    *  **参数解释**： 主播轮换时备选主播数字人资产ID（仅形象资产，不包含声音）。  **约束限制**： 不涉及 **取值范围**： 当前最大支持5个备选主播。 数字人资产ID，字符长度0-64位。 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getBackupModelAssetIds()
    {
        return $this->container['backupModelAssetIds'];
    }

    /**
    * Sets backupModelAssetIds
    *
    * @param string[]|null $backupModelAssetIds **参数解释**： 主播轮换时备选主播数字人资产ID（仅形象资产，不包含声音）。  **约束限制**： 不涉及 **取值范围**： 当前最大支持5个备选主播。 数字人资产ID，字符长度0-64位。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setBackupModelAssetIds($backupModelAssetIds)
    {
        $this->container['backupModelAssetIds'] = $backupModelAssetIds;
        return $this;
    }

    /**
    * Gets liveEventCallbackConfig
    *  liveEventCallbackConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveRoomEventCallBackConfig|null
    */
    public function getLiveEventCallbackConfig()
    {
        return $this->container['liveEventCallbackConfig'];
    }

    /**
    * Sets liveEventCallbackConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveRoomEventCallBackConfig|null $liveEventCallbackConfig liveEventCallbackConfig
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
    * Gets reviewConfig
    *  reviewConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig|null
    */
    public function getReviewConfig()
    {
        return $this->container['reviewConfig'];
    }

    /**
    * Sets reviewConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig|null $reviewConfig reviewConfig
    *
    * @return $this
    */
    public function setReviewConfig($reviewConfig)
    {
        $this->container['reviewConfig'] = $reviewConfig;
        return $this;
    }

    /**
    * Gets sharedConfig
    *  sharedConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SharedConfig|null
    */
    public function getSharedConfig()
    {
        return $this->container['sharedConfig'];
    }

    /**
    * Sets sharedConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SharedConfig|null $sharedConfig sharedConfig
    *
    * @return $this
    */
    public function setSharedConfig($sharedConfig)
    {
        $this->container['sharedConfig'] = $sharedConfig;
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
    * Gets privData
    *  **参数解释**： 匹配值私有数据，用户填写，原样带回。 **约束限制**： 不涉及 **取值范围**： 字符长度0-8192 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPrivData()
    {
        return $this->container['privData'];
    }

    /**
    * Sets privData
    *
    * @param string|null $privData **参数解释**： 匹配值私有数据，用户填写，原样带回。 **约束限制**： 不涉及 **取值范围**： 字符长度0-8192 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPrivData($privData)
    {
        $this->container['privData'] = $privData;
        return $this;
    }

    /**
    * Gets relationLivePlatformInfo
    *  relationLivePlatformInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\PlatformLiveInfo|null
    */
    public function getRelationLivePlatformInfo()
    {
        return $this->container['relationLivePlatformInfo'];
    }

    /**
    * Sets relationLivePlatformInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\PlatformLiveInfo|null $relationLivePlatformInfo relationLivePlatformInfo
    *
    * @return $this
    */
    public function setRelationLivePlatformInfo($relationLivePlatformInfo)
    {
        $this->container['relationLivePlatformInfo'] = $relationLivePlatformInfo;
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


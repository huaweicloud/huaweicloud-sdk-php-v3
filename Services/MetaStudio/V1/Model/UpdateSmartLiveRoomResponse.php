<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSmartLiveRoomResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSmartLiveRoomResponse';

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
    * roomId  直播间ID
    * relationLivePlatformInfo  relationLivePlatformInfo
    * createTime  直播间创建时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * updateTime  直播间更新时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * coverUrl  直播间封面图URL
    * thumbnail  直播间封面图新URL
    * roomState  直播间配置状态。 - ENABLE: 直播间正常可用。 - DISABLE： 直播间不可用。不可用原因在error_info中说明。 - BLOCKED：直播间被冻结。冻结原因在error_info中说明。
    * errorInfo  errorInfo
    * xRequestId  xRequestId
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
            'liveEventCallbackConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventCallBackConfig',
            'rtcCallbackConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RTCLiveEventCallBackConfig',
            'reviewConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig',
            'sharedConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SharedConfig',
            'viewMode' => 'string',
            'coStreamerConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\CoStreamerConfig',
            'privData' => 'string',
            'roomId' => 'string',
            'relationLivePlatformInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\PlatformLiveDetailInfo',
            'createTime' => 'string',
            'updateTime' => 'string',
            'coverUrl' => 'string',
            'thumbnail' => 'string',
            'roomState' => 'string',
            'errorInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse',
            'xRequestId' => 'string'
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
    * roomId  直播间ID
    * relationLivePlatformInfo  relationLivePlatformInfo
    * createTime  直播间创建时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * updateTime  直播间更新时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * coverUrl  直播间封面图URL
    * thumbnail  直播间封面图新URL
    * roomState  直播间配置状态。 - ENABLE: 直播间正常可用。 - DISABLE： 直播间不可用。不可用原因在error_info中说明。 - BLOCKED：直播间被冻结。冻结原因在error_info中说明。
    * errorInfo  errorInfo
    * xRequestId  xRequestId
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
        'roomId' => null,
        'relationLivePlatformInfo' => null,
        'createTime' => null,
        'updateTime' => null,
        'coverUrl' => null,
        'thumbnail' => null,
        'roomState' => null,
        'errorInfo' => null,
        'xRequestId' => null
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
    * roomId  直播间ID
    * relationLivePlatformInfo  relationLivePlatformInfo
    * createTime  直播间创建时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * updateTime  直播间更新时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * coverUrl  直播间封面图URL
    * thumbnail  直播间封面图新URL
    * roomState  直播间配置状态。 - ENABLE: 直播间正常可用。 - DISABLE： 直播间不可用。不可用原因在error_info中说明。 - BLOCKED：直播间被冻结。冻结原因在error_info中说明。
    * errorInfo  errorInfo
    * xRequestId  xRequestId
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
            'roomId' => 'room_id',
            'relationLivePlatformInfo' => 'relation_live_platform_info',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'coverUrl' => 'cover_url',
            'thumbnail' => 'thumbnail',
            'roomState' => 'room_state',
            'errorInfo' => 'error_info',
            'xRequestId' => 'X-Request-Id'
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
    * roomId  直播间ID
    * relationLivePlatformInfo  relationLivePlatformInfo
    * createTime  直播间创建时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * updateTime  直播间更新时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * coverUrl  直播间封面图URL
    * thumbnail  直播间封面图新URL
    * roomState  直播间配置状态。 - ENABLE: 直播间正常可用。 - DISABLE： 直播间不可用。不可用原因在error_info中说明。 - BLOCKED：直播间被冻结。冻结原因在error_info中说明。
    * errorInfo  errorInfo
    * xRequestId  xRequestId
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
            'roomId' => 'setRoomId',
            'relationLivePlatformInfo' => 'setRelationLivePlatformInfo',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'coverUrl' => 'setCoverUrl',
            'thumbnail' => 'setThumbnail',
            'roomState' => 'setRoomState',
            'errorInfo' => 'setErrorInfo',
            'xRequestId' => 'setXRequestId'
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
    * roomId  直播间ID
    * relationLivePlatformInfo  relationLivePlatformInfo
    * createTime  直播间创建时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * updateTime  直播间更新时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * coverUrl  直播间封面图URL
    * thumbnail  直播间封面图新URL
    * roomState  直播间配置状态。 - ENABLE: 直播间正常可用。 - DISABLE： 直播间不可用。不可用原因在error_info中说明。 - BLOCKED：直播间被冻结。冻结原因在error_info中说明。
    * errorInfo  errorInfo
    * xRequestId  xRequestId
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
            'roomId' => 'getRoomId',
            'relationLivePlatformInfo' => 'getRelationLivePlatformInfo',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'coverUrl' => 'getCoverUrl',
            'thumbnail' => 'getThumbnail',
            'roomState' => 'getRoomState',
            'errorInfo' => 'getErrorInfo',
            'xRequestId' => 'getXRequestId'
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
    const ROOM_STATE_ENABLE = 'ENABLE';
    const ROOM_STATE_DISABLE = 'DISABLE';
    const ROOM_STATE_BLOCKED = 'BLOCKED';
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRoomStateAllowableValues()
    {
        return [
            self::ROOM_STATE_ENABLE,
            self::ROOM_STATE_DISABLE,
            self::ROOM_STATE_BLOCKED,
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
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['relationLivePlatformInfo'] = isset($data['relationLivePlatformInfo']) ? $data['relationLivePlatformInfo'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['coverUrl'] = isset($data['coverUrl']) ? $data['coverUrl'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['roomState'] = isset($data['roomState']) ? $data['roomState'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
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
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) < 0)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['coverUrl']) && (mb_strlen($this->container['coverUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'coverUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['coverUrl']) && (mb_strlen($this->container['coverUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'coverUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['thumbnail']) && (mb_strlen($this->container['thumbnail']) > 2048)) {
                $invalidProperties[] = "invalid value for 'thumbnail', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['thumbnail']) && (mb_strlen($this->container['thumbnail']) < 0)) {
                $invalidProperties[] = "invalid value for 'thumbnail', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getRoomStateAllowableValues();
                if (!is_null($this->container['roomState']) && !in_array($this->container['roomState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'roomState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['roomState']) && (mb_strlen($this->container['roomState']) > 32)) {
                $invalidProperties[] = "invalid value for 'roomState', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['roomState']) && (mb_strlen($this->container['roomState']) < 0)) {
                $invalidProperties[] = "invalid value for 'roomState', the character length must be bigger than or equal to 0.";
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
    * Gets roomId
    *  直播间ID
    *
    * @return string|null
    */
    public function getRoomId()
    {
        return $this->container['roomId'];
    }

    /**
    * Sets roomId
    *
    * @param string|null $roomId 直播间ID
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets relationLivePlatformInfo
    *  relationLivePlatformInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\PlatformLiveDetailInfo|null
    */
    public function getRelationLivePlatformInfo()
    {
        return $this->container['relationLivePlatformInfo'];
    }

    /**
    * Sets relationLivePlatformInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\PlatformLiveDetailInfo|null $relationLivePlatformInfo relationLivePlatformInfo
    *
    * @return $this
    */
    public function setRelationLivePlatformInfo($relationLivePlatformInfo)
    {
        $this->container['relationLivePlatformInfo'] = $relationLivePlatformInfo;
        return $this;
    }

    /**
    * Gets createTime
    *  直播间创建时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
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
    * @param string|null $createTime 直播间创建时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  直播间更新时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 直播间更新时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets coverUrl
    *  直播间封面图URL
    *
    * @return string|null
    */
    public function getCoverUrl()
    {
        return $this->container['coverUrl'];
    }

    /**
    * Sets coverUrl
    *
    * @param string|null $coverUrl 直播间封面图URL
    *
    * @return $this
    */
    public function setCoverUrl($coverUrl)
    {
        $this->container['coverUrl'] = $coverUrl;
        return $this;
    }

    /**
    * Gets thumbnail
    *  直播间封面图新URL
    *
    * @return string|null
    */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
    * Sets thumbnail
    *
    * @param string|null $thumbnail 直播间封面图新URL
    *
    * @return $this
    */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;
        return $this;
    }

    /**
    * Gets roomState
    *  直播间配置状态。 - ENABLE: 直播间正常可用。 - DISABLE： 直播间不可用。不可用原因在error_info中说明。 - BLOCKED：直播间被冻结。冻结原因在error_info中说明。
    *
    * @return string|null
    */
    public function getRoomState()
    {
        return $this->container['roomState'];
    }

    /**
    * Sets roomState
    *
    * @param string|null $roomState 直播间配置状态。 - ENABLE: 直播间正常可用。 - DISABLE： 直播间不可用。不可用原因在error_info中说明。 - BLOCKED：直播间被冻结。冻结原因在error_info中说明。
    *
    * @return $this
    */
    public function setRoomState($roomState)
    {
        $this->container['roomState'] = $roomState;
        return $this;
    }

    /**
    * Gets errorInfo
    *  errorInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null $errorInfo errorInfo
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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


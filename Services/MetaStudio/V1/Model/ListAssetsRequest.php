<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAssetsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAssetsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * limit  每页显示的条目数量。
    * offset  偏移量，表示从此偏移量开始查询。
    * name  按名称模糊查询。
    * tag  按标签模糊查询。
    * tagCombinationType  标签查询组合方式 INTERSECTION：交集 UNION_SET：并集
    * startTime  最近直播任务起始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * endTime  最近直播任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T10:43:17Z\"。
    * assetType  资产类型。多个类型使用英文逗号分割。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型（仅系统管理员可上传） * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * HUMAN_MODEL_2D: 2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐 * AUDIO: 音频
    * sortKey  排序字段，支持的排序方式有： - 按创建时间排序：create_time - 按更新时间排序：update_time - 按资产排序：asset_order
    * sortDir  排序方式。 * asc：升序 * desc：降序  默认asc升序。
    * assetSource  资产来源。 * SYSTEM：系统资产 * CUSTOMIZATION：租户资产 * ALL：所有资产  默认查询租户资产。
    * assetState  资产状态。多个资产状态使用英文逗号分割。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK：资产被冻结，资产不可用，不可查看文件。 默认查询所有状态的资产。
    * styleId  基于风格化ID查询关联资产。 * system_male_001：男性风格01 * system_female_001：女性风格01 * system_male_002：男性风格02  * system_female_002：女性风格02
    * accurateQueryField  使用精确查询的字段
    * renderEngine  可用引擎。 * UE：UE引擎 * MetaEngine：MetaEngine引擎 > 该字段当前只对MetaEngine白名单用户生效
    * assetId  资产id
    * sex  性别。多选使用英文逗号分隔。
    * language  语言。多选使用英文逗号分隔。
    * systemProperty  系统属性。  key和value间用\":\"分隔，多个key之间用\",\"分隔。  如system_property=BACKGROUND_IMG:Yes,RENDER_ENGINE:MetaEngine。  不同Key对应Value取值如下：  公共资产属性： * BACKGROUND_IMG：视频制作的2D背景图片，可取值Yes * CREATED_BY_PLATFORM：是否平台生成，可取值Yes  分身数字人资产属性： * MATERIAL_IMG：素材图片，用作前景。可取值Yes * MATERIAL_VIDEO：素材视频，用作前景。可取值Yes * TO_BE_TRANSLATED_VIDEO: 视频翻译的源视频。可取值Yes  3D数字人资产属性： * STYLE_ID：风格Id * RENDER_ENGINE：引擎类型，可取值UE或MetaEngine * BACKGROUND_SCENE：视频制作的2D背景场景，可取值Horizontal（横屏）或者Vertical（竖屏）
    * actionEditable  动作是否可编辑。仅在分身数字人模型查询时有效。
    * isWithActionLibrary  分身数字人是否带原子动作库。 > * 带原子动作库的分身数字人可做动作编排。
    * isMovable  分身数字人是否支持走动。仅在分身数字人模型查询时有效。
    * voiceProvider  取值：HUAWEI_METASTUDIO、MOBVOI。 HUAWEI_METASTUDIO：MetaStudio自研音色 MOBVOI：出门问问音色
    * role  角色。 SHARER：共享方，SHAREE：被共享方
    * isRealtimeVoice  音色是否支持实时合成。仅在音色查询时有效。 > * 支持实时合成的音色，可以用于直播和智能交互场景。否则只能用于视频制作。
    * humanModel2dVersion  模型版本
    * includeDeviceName  资产已执行的任务名称
    * excludeDeviceName  资产已执行的任务名称
    * supportedService  资产支持的业务类型。默认查询所有资产。 * VIDEO_2D：分身数字人视频制作 * LIVE_2D：分身数字人直播 * CHAT_2D：分身数字人智能交互
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorization' => 'string',
            'xSdkDate' => 'string',
            'xAppUserId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'name' => 'string',
            'tag' => 'string',
            'tagCombinationType' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'assetType' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'assetSource' => 'string',
            'assetState' => 'string',
            'styleId' => 'string',
            'accurateQueryField' => 'string[]',
            'renderEngine' => 'string',
            'assetId' => 'string[]',
            'sex' => 'string',
            'language' => 'string',
            'systemProperty' => 'string',
            'actionEditable' => 'bool',
            'isWithActionLibrary' => 'bool',
            'isMovable' => 'bool',
            'voiceProvider' => 'string',
            'role' => 'string',
            'isRealtimeVoice' => 'bool',
            'humanModel2dVersion' => 'string',
            'includeDeviceName' => 'string',
            'excludeDeviceName' => 'string',
            'supportedService' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * limit  每页显示的条目数量。
    * offset  偏移量，表示从此偏移量开始查询。
    * name  按名称模糊查询。
    * tag  按标签模糊查询。
    * tagCombinationType  标签查询组合方式 INTERSECTION：交集 UNION_SET：并集
    * startTime  最近直播任务起始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * endTime  最近直播任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T10:43:17Z\"。
    * assetType  资产类型。多个类型使用英文逗号分割。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型（仅系统管理员可上传） * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * HUMAN_MODEL_2D: 2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐 * AUDIO: 音频
    * sortKey  排序字段，支持的排序方式有： - 按创建时间排序：create_time - 按更新时间排序：update_time - 按资产排序：asset_order
    * sortDir  排序方式。 * asc：升序 * desc：降序  默认asc升序。
    * assetSource  资产来源。 * SYSTEM：系统资产 * CUSTOMIZATION：租户资产 * ALL：所有资产  默认查询租户资产。
    * assetState  资产状态。多个资产状态使用英文逗号分割。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK：资产被冻结，资产不可用，不可查看文件。 默认查询所有状态的资产。
    * styleId  基于风格化ID查询关联资产。 * system_male_001：男性风格01 * system_female_001：女性风格01 * system_male_002：男性风格02  * system_female_002：女性风格02
    * accurateQueryField  使用精确查询的字段
    * renderEngine  可用引擎。 * UE：UE引擎 * MetaEngine：MetaEngine引擎 > 该字段当前只对MetaEngine白名单用户生效
    * assetId  资产id
    * sex  性别。多选使用英文逗号分隔。
    * language  语言。多选使用英文逗号分隔。
    * systemProperty  系统属性。  key和value间用\":\"分隔，多个key之间用\",\"分隔。  如system_property=BACKGROUND_IMG:Yes,RENDER_ENGINE:MetaEngine。  不同Key对应Value取值如下：  公共资产属性： * BACKGROUND_IMG：视频制作的2D背景图片，可取值Yes * CREATED_BY_PLATFORM：是否平台生成，可取值Yes  分身数字人资产属性： * MATERIAL_IMG：素材图片，用作前景。可取值Yes * MATERIAL_VIDEO：素材视频，用作前景。可取值Yes * TO_BE_TRANSLATED_VIDEO: 视频翻译的源视频。可取值Yes  3D数字人资产属性： * STYLE_ID：风格Id * RENDER_ENGINE：引擎类型，可取值UE或MetaEngine * BACKGROUND_SCENE：视频制作的2D背景场景，可取值Horizontal（横屏）或者Vertical（竖屏）
    * actionEditable  动作是否可编辑。仅在分身数字人模型查询时有效。
    * isWithActionLibrary  分身数字人是否带原子动作库。 > * 带原子动作库的分身数字人可做动作编排。
    * isMovable  分身数字人是否支持走动。仅在分身数字人模型查询时有效。
    * voiceProvider  取值：HUAWEI_METASTUDIO、MOBVOI。 HUAWEI_METASTUDIO：MetaStudio自研音色 MOBVOI：出门问问音色
    * role  角色。 SHARER：共享方，SHAREE：被共享方
    * isRealtimeVoice  音色是否支持实时合成。仅在音色查询时有效。 > * 支持实时合成的音色，可以用于直播和智能交互场景。否则只能用于视频制作。
    * humanModel2dVersion  模型版本
    * includeDeviceName  资产已执行的任务名称
    * excludeDeviceName  资产已执行的任务名称
    * supportedService  资产支持的业务类型。默认查询所有资产。 * VIDEO_2D：分身数字人视频制作 * LIVE_2D：分身数字人直播 * CHAT_2D：分身数字人智能交互
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorization' => null,
        'xSdkDate' => null,
        'xAppUserId' => null,
        'limit' => 'uint32',
        'offset' => 'uint32',
        'name' => null,
        'tag' => null,
        'tagCombinationType' => null,
        'startTime' => null,
        'endTime' => null,
        'assetType' => null,
        'sortKey' => null,
        'sortDir' => null,
        'assetSource' => null,
        'assetState' => null,
        'styleId' => null,
        'accurateQueryField' => null,
        'renderEngine' => null,
        'assetId' => null,
        'sex' => null,
        'language' => null,
        'systemProperty' => null,
        'actionEditable' => null,
        'isWithActionLibrary' => null,
        'isMovable' => null,
        'voiceProvider' => null,
        'role' => null,
        'isRealtimeVoice' => null,
        'humanModel2dVersion' => null,
        'includeDeviceName' => null,
        'excludeDeviceName' => null,
        'supportedService' => null
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
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * limit  每页显示的条目数量。
    * offset  偏移量，表示从此偏移量开始查询。
    * name  按名称模糊查询。
    * tag  按标签模糊查询。
    * tagCombinationType  标签查询组合方式 INTERSECTION：交集 UNION_SET：并集
    * startTime  最近直播任务起始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * endTime  最近直播任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T10:43:17Z\"。
    * assetType  资产类型。多个类型使用英文逗号分割。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型（仅系统管理员可上传） * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * HUMAN_MODEL_2D: 2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐 * AUDIO: 音频
    * sortKey  排序字段，支持的排序方式有： - 按创建时间排序：create_time - 按更新时间排序：update_time - 按资产排序：asset_order
    * sortDir  排序方式。 * asc：升序 * desc：降序  默认asc升序。
    * assetSource  资产来源。 * SYSTEM：系统资产 * CUSTOMIZATION：租户资产 * ALL：所有资产  默认查询租户资产。
    * assetState  资产状态。多个资产状态使用英文逗号分割。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK：资产被冻结，资产不可用，不可查看文件。 默认查询所有状态的资产。
    * styleId  基于风格化ID查询关联资产。 * system_male_001：男性风格01 * system_female_001：女性风格01 * system_male_002：男性风格02  * system_female_002：女性风格02
    * accurateQueryField  使用精确查询的字段
    * renderEngine  可用引擎。 * UE：UE引擎 * MetaEngine：MetaEngine引擎 > 该字段当前只对MetaEngine白名单用户生效
    * assetId  资产id
    * sex  性别。多选使用英文逗号分隔。
    * language  语言。多选使用英文逗号分隔。
    * systemProperty  系统属性。  key和value间用\":\"分隔，多个key之间用\",\"分隔。  如system_property=BACKGROUND_IMG:Yes,RENDER_ENGINE:MetaEngine。  不同Key对应Value取值如下：  公共资产属性： * BACKGROUND_IMG：视频制作的2D背景图片，可取值Yes * CREATED_BY_PLATFORM：是否平台生成，可取值Yes  分身数字人资产属性： * MATERIAL_IMG：素材图片，用作前景。可取值Yes * MATERIAL_VIDEO：素材视频，用作前景。可取值Yes * TO_BE_TRANSLATED_VIDEO: 视频翻译的源视频。可取值Yes  3D数字人资产属性： * STYLE_ID：风格Id * RENDER_ENGINE：引擎类型，可取值UE或MetaEngine * BACKGROUND_SCENE：视频制作的2D背景场景，可取值Horizontal（横屏）或者Vertical（竖屏）
    * actionEditable  动作是否可编辑。仅在分身数字人模型查询时有效。
    * isWithActionLibrary  分身数字人是否带原子动作库。 > * 带原子动作库的分身数字人可做动作编排。
    * isMovable  分身数字人是否支持走动。仅在分身数字人模型查询时有效。
    * voiceProvider  取值：HUAWEI_METASTUDIO、MOBVOI。 HUAWEI_METASTUDIO：MetaStudio自研音色 MOBVOI：出门问问音色
    * role  角色。 SHARER：共享方，SHAREE：被共享方
    * isRealtimeVoice  音色是否支持实时合成。仅在音色查询时有效。 > * 支持实时合成的音色，可以用于直播和智能交互场景。否则只能用于视频制作。
    * humanModel2dVersion  模型版本
    * includeDeviceName  资产已执行的任务名称
    * excludeDeviceName  资产已执行的任务名称
    * supportedService  资产支持的业务类型。默认查询所有资产。 * VIDEO_2D：分身数字人视频制作 * LIVE_2D：分身数字人直播 * CHAT_2D：分身数字人智能交互
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorization' => 'Authorization',
            'xSdkDate' => 'X-Sdk-Date',
            'xAppUserId' => 'X-App-UserId',
            'limit' => 'limit',
            'offset' => 'offset',
            'name' => 'name',
            'tag' => 'tag',
            'tagCombinationType' => 'tag_combination_type',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'assetType' => 'asset_type',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'assetSource' => 'asset_source',
            'assetState' => 'asset_state',
            'styleId' => 'style_id',
            'accurateQueryField' => 'accurate_query_field',
            'renderEngine' => 'render_engine',
            'assetId' => 'asset_id',
            'sex' => 'sex',
            'language' => 'language',
            'systemProperty' => 'system_property',
            'actionEditable' => 'action_editable',
            'isWithActionLibrary' => 'is_with_action_library',
            'isMovable' => 'is_movable',
            'voiceProvider' => 'voice_provider',
            'role' => 'role',
            'isRealtimeVoice' => 'is_realtime_voice',
            'humanModel2dVersion' => 'human_model_2d_version',
            'includeDeviceName' => 'include_device_name',
            'excludeDeviceName' => 'exclude_device_name',
            'supportedService' => 'supported_service'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * limit  每页显示的条目数量。
    * offset  偏移量，表示从此偏移量开始查询。
    * name  按名称模糊查询。
    * tag  按标签模糊查询。
    * tagCombinationType  标签查询组合方式 INTERSECTION：交集 UNION_SET：并集
    * startTime  最近直播任务起始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * endTime  最近直播任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T10:43:17Z\"。
    * assetType  资产类型。多个类型使用英文逗号分割。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型（仅系统管理员可上传） * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * HUMAN_MODEL_2D: 2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐 * AUDIO: 音频
    * sortKey  排序字段，支持的排序方式有： - 按创建时间排序：create_time - 按更新时间排序：update_time - 按资产排序：asset_order
    * sortDir  排序方式。 * asc：升序 * desc：降序  默认asc升序。
    * assetSource  资产来源。 * SYSTEM：系统资产 * CUSTOMIZATION：租户资产 * ALL：所有资产  默认查询租户资产。
    * assetState  资产状态。多个资产状态使用英文逗号分割。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK：资产被冻结，资产不可用，不可查看文件。 默认查询所有状态的资产。
    * styleId  基于风格化ID查询关联资产。 * system_male_001：男性风格01 * system_female_001：女性风格01 * system_male_002：男性风格02  * system_female_002：女性风格02
    * accurateQueryField  使用精确查询的字段
    * renderEngine  可用引擎。 * UE：UE引擎 * MetaEngine：MetaEngine引擎 > 该字段当前只对MetaEngine白名单用户生效
    * assetId  资产id
    * sex  性别。多选使用英文逗号分隔。
    * language  语言。多选使用英文逗号分隔。
    * systemProperty  系统属性。  key和value间用\":\"分隔，多个key之间用\",\"分隔。  如system_property=BACKGROUND_IMG:Yes,RENDER_ENGINE:MetaEngine。  不同Key对应Value取值如下：  公共资产属性： * BACKGROUND_IMG：视频制作的2D背景图片，可取值Yes * CREATED_BY_PLATFORM：是否平台生成，可取值Yes  分身数字人资产属性： * MATERIAL_IMG：素材图片，用作前景。可取值Yes * MATERIAL_VIDEO：素材视频，用作前景。可取值Yes * TO_BE_TRANSLATED_VIDEO: 视频翻译的源视频。可取值Yes  3D数字人资产属性： * STYLE_ID：风格Id * RENDER_ENGINE：引擎类型，可取值UE或MetaEngine * BACKGROUND_SCENE：视频制作的2D背景场景，可取值Horizontal（横屏）或者Vertical（竖屏）
    * actionEditable  动作是否可编辑。仅在分身数字人模型查询时有效。
    * isWithActionLibrary  分身数字人是否带原子动作库。 > * 带原子动作库的分身数字人可做动作编排。
    * isMovable  分身数字人是否支持走动。仅在分身数字人模型查询时有效。
    * voiceProvider  取值：HUAWEI_METASTUDIO、MOBVOI。 HUAWEI_METASTUDIO：MetaStudio自研音色 MOBVOI：出门问问音色
    * role  角色。 SHARER：共享方，SHAREE：被共享方
    * isRealtimeVoice  音色是否支持实时合成。仅在音色查询时有效。 > * 支持实时合成的音色，可以用于直播和智能交互场景。否则只能用于视频制作。
    * humanModel2dVersion  模型版本
    * includeDeviceName  资产已执行的任务名称
    * excludeDeviceName  资产已执行的任务名称
    * supportedService  资产支持的业务类型。默认查询所有资产。 * VIDEO_2D：分身数字人视频制作 * LIVE_2D：分身数字人直播 * CHAT_2D：分身数字人智能交互
    *
    * @var string[]
    */
    protected static $setters = [
            'authorization' => 'setAuthorization',
            'xSdkDate' => 'setXSdkDate',
            'xAppUserId' => 'setXAppUserId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'name' => 'setName',
            'tag' => 'setTag',
            'tagCombinationType' => 'setTagCombinationType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'assetType' => 'setAssetType',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'assetSource' => 'setAssetSource',
            'assetState' => 'setAssetState',
            'styleId' => 'setStyleId',
            'accurateQueryField' => 'setAccurateQueryField',
            'renderEngine' => 'setRenderEngine',
            'assetId' => 'setAssetId',
            'sex' => 'setSex',
            'language' => 'setLanguage',
            'systemProperty' => 'setSystemProperty',
            'actionEditable' => 'setActionEditable',
            'isWithActionLibrary' => 'setIsWithActionLibrary',
            'isMovable' => 'setIsMovable',
            'voiceProvider' => 'setVoiceProvider',
            'role' => 'setRole',
            'isRealtimeVoice' => 'setIsRealtimeVoice',
            'humanModel2dVersion' => 'setHumanModel2dVersion',
            'includeDeviceName' => 'setIncludeDeviceName',
            'excludeDeviceName' => 'setExcludeDeviceName',
            'supportedService' => 'setSupportedService'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * limit  每页显示的条目数量。
    * offset  偏移量，表示从此偏移量开始查询。
    * name  按名称模糊查询。
    * tag  按标签模糊查询。
    * tagCombinationType  标签查询组合方式 INTERSECTION：交集 UNION_SET：并集
    * startTime  最近直播任务起始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * endTime  最近直播任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T10:43:17Z\"。
    * assetType  资产类型。多个类型使用英文逗号分割。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型（仅系统管理员可上传） * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * HUMAN_MODEL_2D: 2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐 * AUDIO: 音频
    * sortKey  排序字段，支持的排序方式有： - 按创建时间排序：create_time - 按更新时间排序：update_time - 按资产排序：asset_order
    * sortDir  排序方式。 * asc：升序 * desc：降序  默认asc升序。
    * assetSource  资产来源。 * SYSTEM：系统资产 * CUSTOMIZATION：租户资产 * ALL：所有资产  默认查询租户资产。
    * assetState  资产状态。多个资产状态使用英文逗号分割。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK：资产被冻结，资产不可用，不可查看文件。 默认查询所有状态的资产。
    * styleId  基于风格化ID查询关联资产。 * system_male_001：男性风格01 * system_female_001：女性风格01 * system_male_002：男性风格02  * system_female_002：女性风格02
    * accurateQueryField  使用精确查询的字段
    * renderEngine  可用引擎。 * UE：UE引擎 * MetaEngine：MetaEngine引擎 > 该字段当前只对MetaEngine白名单用户生效
    * assetId  资产id
    * sex  性别。多选使用英文逗号分隔。
    * language  语言。多选使用英文逗号分隔。
    * systemProperty  系统属性。  key和value间用\":\"分隔，多个key之间用\",\"分隔。  如system_property=BACKGROUND_IMG:Yes,RENDER_ENGINE:MetaEngine。  不同Key对应Value取值如下：  公共资产属性： * BACKGROUND_IMG：视频制作的2D背景图片，可取值Yes * CREATED_BY_PLATFORM：是否平台生成，可取值Yes  分身数字人资产属性： * MATERIAL_IMG：素材图片，用作前景。可取值Yes * MATERIAL_VIDEO：素材视频，用作前景。可取值Yes * TO_BE_TRANSLATED_VIDEO: 视频翻译的源视频。可取值Yes  3D数字人资产属性： * STYLE_ID：风格Id * RENDER_ENGINE：引擎类型，可取值UE或MetaEngine * BACKGROUND_SCENE：视频制作的2D背景场景，可取值Horizontal（横屏）或者Vertical（竖屏）
    * actionEditable  动作是否可编辑。仅在分身数字人模型查询时有效。
    * isWithActionLibrary  分身数字人是否带原子动作库。 > * 带原子动作库的分身数字人可做动作编排。
    * isMovable  分身数字人是否支持走动。仅在分身数字人模型查询时有效。
    * voiceProvider  取值：HUAWEI_METASTUDIO、MOBVOI。 HUAWEI_METASTUDIO：MetaStudio自研音色 MOBVOI：出门问问音色
    * role  角色。 SHARER：共享方，SHAREE：被共享方
    * isRealtimeVoice  音色是否支持实时合成。仅在音色查询时有效。 > * 支持实时合成的音色，可以用于直播和智能交互场景。否则只能用于视频制作。
    * humanModel2dVersion  模型版本
    * includeDeviceName  资产已执行的任务名称
    * excludeDeviceName  资产已执行的任务名称
    * supportedService  资产支持的业务类型。默认查询所有资产。 * VIDEO_2D：分身数字人视频制作 * LIVE_2D：分身数字人直播 * CHAT_2D：分身数字人智能交互
    *
    * @var string[]
    */
    protected static $getters = [
            'authorization' => 'getAuthorization',
            'xSdkDate' => 'getXSdkDate',
            'xAppUserId' => 'getXAppUserId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'name' => 'getName',
            'tag' => 'getTag',
            'tagCombinationType' => 'getTagCombinationType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'assetType' => 'getAssetType',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'assetSource' => 'getAssetSource',
            'assetState' => 'getAssetState',
            'styleId' => 'getStyleId',
            'accurateQueryField' => 'getAccurateQueryField',
            'renderEngine' => 'getRenderEngine',
            'assetId' => 'getAssetId',
            'sex' => 'getSex',
            'language' => 'getLanguage',
            'systemProperty' => 'getSystemProperty',
            'actionEditable' => 'getActionEditable',
            'isWithActionLibrary' => 'getIsWithActionLibrary',
            'isMovable' => 'getIsMovable',
            'voiceProvider' => 'getVoiceProvider',
            'role' => 'getRole',
            'isRealtimeVoice' => 'getIsRealtimeVoice',
            'humanModel2dVersion' => 'getHumanModel2dVersion',
            'includeDeviceName' => 'getIncludeDeviceName',
            'excludeDeviceName' => 'getExcludeDeviceName',
            'supportedService' => 'getSupportedService'
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
    const TAG_COMBINATION_TYPE_INTERSECTION = 'INTERSECTION';
    const TAG_COMBINATION_TYPE_UNION_SET = 'UNION_SET';
    const ASSET_SOURCE_SYSTEM = 'SYSTEM';
    const ASSET_SOURCE_CUSTOMIZATION = 'CUSTOMIZATION';
    const ASSET_SOURCE_ALL = 'ALL';
    const ROLE_SHARER = 'SHARER';
    const ROLE_SHAREE = 'SHAREE';
    const SUPPORTED_SERVICE_VIDEO_2_D = 'VIDEO_2D';
    const SUPPORTED_SERVICE_LIVE_2_D = 'LIVE_2D';
    const SUPPORTED_SERVICE_CHAT_2_D = 'CHAT_2D';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTagCombinationTypeAllowableValues()
    {
        return [
            self::TAG_COMBINATION_TYPE_INTERSECTION,
            self::TAG_COMBINATION_TYPE_UNION_SET,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssetSourceAllowableValues()
    {
        return [
            self::ASSET_SOURCE_SYSTEM,
            self::ASSET_SOURCE_CUSTOMIZATION,
            self::ASSET_SOURCE_ALL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_SHARER,
            self::ROLE_SHAREE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSupportedServiceAllowableValues()
    {
        return [
            self::SUPPORTED_SERVICE_VIDEO_2_D,
            self::SUPPORTED_SERVICE_LIVE_2_D,
            self::SUPPORTED_SERVICE_CHAT_2_D,
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
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['xSdkDate'] = isset($data['xSdkDate']) ? $data['xSdkDate'] : null;
        $this->container['xAppUserId'] = isset($data['xAppUserId']) ? $data['xAppUserId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['tagCombinationType'] = isset($data['tagCombinationType']) ? $data['tagCombinationType'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['assetType'] = isset($data['assetType']) ? $data['assetType'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['assetSource'] = isset($data['assetSource']) ? $data['assetSource'] : null;
        $this->container['assetState'] = isset($data['assetState']) ? $data['assetState'] : null;
        $this->container['styleId'] = isset($data['styleId']) ? $data['styleId'] : null;
        $this->container['accurateQueryField'] = isset($data['accurateQueryField']) ? $data['accurateQueryField'] : null;
        $this->container['renderEngine'] = isset($data['renderEngine']) ? $data['renderEngine'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['systemProperty'] = isset($data['systemProperty']) ? $data['systemProperty'] : null;
        $this->container['actionEditable'] = isset($data['actionEditable']) ? $data['actionEditable'] : null;
        $this->container['isWithActionLibrary'] = isset($data['isWithActionLibrary']) ? $data['isWithActionLibrary'] : null;
        $this->container['isMovable'] = isset($data['isMovable']) ? $data['isMovable'] : null;
        $this->container['voiceProvider'] = isset($data['voiceProvider']) ? $data['voiceProvider'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['isRealtimeVoice'] = isset($data['isRealtimeVoice']) ? $data['isRealtimeVoice'] : null;
        $this->container['humanModel2dVersion'] = isset($data['humanModel2dVersion']) ? $data['humanModel2dVersion'] : null;
        $this->container['includeDeviceName'] = isset($data['includeDeviceName']) ? $data['includeDeviceName'] : null;
        $this->container['excludeDeviceName'] = isset($data['excludeDeviceName']) ? $data['excludeDeviceName'] : null;
        $this->container['supportedService'] = isset($data['supportedService']) ? $data['supportedService'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) > 256)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) > 16)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) < 16)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be bigger than or equal to 16.";
            }
            if (!is_null($this->container['xAppUserId']) && (mb_strlen($this->container['xAppUserId']) > 256)) {
                $invalidProperties[] = "invalid value for 'xAppUserId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['xAppUserId']) && (mb_strlen($this->container['xAppUserId']) < 1)) {
                $invalidProperties[] = "invalid value for 'xAppUserId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 1024)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 0)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTagCombinationTypeAllowableValues();
                if (!is_null($this->container['tagCombinationType']) && !in_array($this->container['tagCombinationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tagCombinationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['tagCombinationType']) && (mb_strlen($this->container['tagCombinationType']) > 1024)) {
                $invalidProperties[] = "invalid value for 'tagCombinationType', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['tagCombinationType']) && (mb_strlen($this->container['tagCombinationType']) < 0)) {
                $invalidProperties[] = "invalid value for 'tagCombinationType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tagCombinationType']) && !preg_match("/INTERSECTION|UNION_SET/", $this->container['tagCombinationType'])) {
                $invalidProperties[] = "invalid value for 'tagCombinationType', must be conform to the pattern /INTERSECTION|UNION_SET/.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetType']) && (mb_strlen($this->container['assetType']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetType']) && (mb_strlen($this->container['assetType']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAssetSourceAllowableValues();
                if (!is_null($this->container['assetSource']) && !in_array($this->container['assetSource'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'assetSource', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['assetState']) && (mb_strlen($this->container['assetState']) > 512)) {
                $invalidProperties[] = "invalid value for 'assetState', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['assetState']) && (mb_strlen($this->container['assetState']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetState', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['styleId']) && (mb_strlen($this->container['styleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['styleId']) && (mb_strlen($this->container['styleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['renderEngine']) && (mb_strlen($this->container['renderEngine']) > 128)) {
                $invalidProperties[] = "invalid value for 'renderEngine', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['renderEngine']) && (mb_strlen($this->container['renderEngine']) < 1)) {
                $invalidProperties[] = "invalid value for 'renderEngine', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sex']) && (mb_strlen($this->container['sex']) > 128)) {
                $invalidProperties[] = "invalid value for 'sex', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sex']) && (mb_strlen($this->container['sex']) < 1)) {
                $invalidProperties[] = "invalid value for 'sex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 128)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 1)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['systemProperty']) && (mb_strlen($this->container['systemProperty']) > 1024)) {
                $invalidProperties[] = "invalid value for 'systemProperty', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['systemProperty']) && (mb_strlen($this->container['systemProperty']) < 1)) {
                $invalidProperties[] = "invalid value for 'systemProperty', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['voiceProvider']) && (mb_strlen($this->container['voiceProvider']) > 128)) {
                $invalidProperties[] = "invalid value for 'voiceProvider', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['voiceProvider']) && (mb_strlen($this->container['voiceProvider']) < 1)) {
                $invalidProperties[] = "invalid value for 'voiceProvider', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getRoleAllowableValues();
                if (!is_null($this->container['role']) && !in_array($this->container['role'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'role', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['humanModel2dVersion']) && (mb_strlen($this->container['humanModel2dVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'humanModel2dVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['humanModel2dVersion']) && (mb_strlen($this->container['humanModel2dVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'humanModel2dVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['includeDeviceName']) && (mb_strlen($this->container['includeDeviceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'includeDeviceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['includeDeviceName']) && (mb_strlen($this->container['includeDeviceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'includeDeviceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['excludeDeviceName']) && (mb_strlen($this->container['excludeDeviceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'excludeDeviceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['excludeDeviceName']) && (mb_strlen($this->container['excludeDeviceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'excludeDeviceName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSupportedServiceAllowableValues();
                if (!is_null($this->container['supportedService']) && !in_array($this->container['supportedService'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'supportedService', must be one of '%s'",
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
    * Gets authorization
    *  使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return string|null
    */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
    * Sets authorization
    *
    * @param string|null $authorization 使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return $this
    */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;
        return $this;
    }

    /**
    * Gets xSdkDate
    *  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    *
    * @return string|null
    */
    public function getXSdkDate()
    {
        return $this->container['xSdkDate'];
    }

    /**
    * Sets xSdkDate
    *
    * @param string|null $xSdkDate 使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    *
    * @return $this
    */
    public function setXSdkDate($xSdkDate)
    {
        $this->container['xSdkDate'] = $xSdkDate;
        return $this;
    }

    /**
    * Gets xAppUserId
    *  第三方用户ID。不允许输入中文。
    *
    * @return string|null
    */
    public function getXAppUserId()
    {
        return $this->container['xAppUserId'];
    }

    /**
    * Sets xAppUserId
    *
    * @param string|null $xAppUserId 第三方用户ID。不允许输入中文。
    *
    * @return $this
    */
    public function setXAppUserId($xAppUserId)
    {
        $this->container['xAppUserId'] = $xAppUserId;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示的条目数量。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，表示从此偏移量开始查询。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets name
    *  按名称模糊查询。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 按名称模糊查询。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets tag
    *  按标签模糊查询。
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 按标签模糊查询。
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets tagCombinationType
    *  标签查询组合方式 INTERSECTION：交集 UNION_SET：并集
    *
    * @return string|null
    */
    public function getTagCombinationType()
    {
        return $this->container['tagCombinationType'];
    }

    /**
    * Sets tagCombinationType
    *
    * @param string|null $tagCombinationType 标签查询组合方式 INTERSECTION：交集 UNION_SET：并集
    *
    * @return $this
    */
    public function setTagCombinationType($tagCombinationType)
    {
        $this->container['tagCombinationType'] = $tagCombinationType;
        return $this;
    }

    /**
    * Gets startTime
    *  最近直播任务起始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 最近直播任务起始时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  最近直播任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T10:43:17Z\"。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 最近直播任务结束时间。格式遵循：RFC 3339 如\"2021-01-10T10:43:17Z\"。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets assetType
    *  资产类型。多个类型使用英文逗号分割。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型（仅系统管理员可上传） * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * HUMAN_MODEL_2D: 2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐 * AUDIO: 音频
    *
    * @return string|null
    */
    public function getAssetType()
    {
        return $this->container['assetType'];
    }

    /**
    * Sets assetType
    *
    * @param string|null $assetType 资产类型。多个类型使用英文逗号分割。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型（仅系统管理员可上传） * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * HUMAN_MODEL_2D: 2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐 * AUDIO: 音频
    *
    * @return $this
    */
    public function setAssetType($assetType)
    {
        $this->container['assetType'] = $assetType;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段，支持的排序方式有： - 按创建时间排序：create_time - 按更新时间排序：update_time - 按资产排序：asset_order
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序字段，支持的排序方式有： - 按创建时间排序：create_time - 按更新时间排序：update_time - 按资产排序：asset_order
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序方式。 * asc：升序 * desc：降序  默认asc升序。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序方式。 * asc：升序 * desc：降序  默认asc升序。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets assetSource
    *  资产来源。 * SYSTEM：系统资产 * CUSTOMIZATION：租户资产 * ALL：所有资产  默认查询租户资产。
    *
    * @return string|null
    */
    public function getAssetSource()
    {
        return $this->container['assetSource'];
    }

    /**
    * Sets assetSource
    *
    * @param string|null $assetSource 资产来源。 * SYSTEM：系统资产 * CUSTOMIZATION：租户资产 * ALL：所有资产  默认查询租户资产。
    *
    * @return $this
    */
    public function setAssetSource($assetSource)
    {
        $this->container['assetSource'] = $assetSource;
        return $this;
    }

    /**
    * Gets assetState
    *  资产状态。多个资产状态使用英文逗号分割。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK：资产被冻结，资产不可用，不可查看文件。 默认查询所有状态的资产。
    *
    * @return string|null
    */
    public function getAssetState()
    {
        return $this->container['assetState'];
    }

    /**
    * Sets assetState
    *
    * @param string|null $assetState 资产状态。多个资产状态使用英文逗号分割。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK：资产被冻结，资产不可用，不可查看文件。 默认查询所有状态的资产。
    *
    * @return $this
    */
    public function setAssetState($assetState)
    {
        $this->container['assetState'] = $assetState;
        return $this;
    }

    /**
    * Gets styleId
    *  基于风格化ID查询关联资产。 * system_male_001：男性风格01 * system_female_001：女性风格01 * system_male_002：男性风格02  * system_female_002：女性风格02
    *
    * @return string|null
    */
    public function getStyleId()
    {
        return $this->container['styleId'];
    }

    /**
    * Sets styleId
    *
    * @param string|null $styleId 基于风格化ID查询关联资产。 * system_male_001：男性风格01 * system_female_001：女性风格01 * system_male_002：男性风格02  * system_female_002：女性风格02
    *
    * @return $this
    */
    public function setStyleId($styleId)
    {
        $this->container['styleId'] = $styleId;
        return $this;
    }

    /**
    * Gets accurateQueryField
    *  使用精确查询的字段
    *
    * @return string[]|null
    */
    public function getAccurateQueryField()
    {
        return $this->container['accurateQueryField'];
    }

    /**
    * Sets accurateQueryField
    *
    * @param string[]|null $accurateQueryField 使用精确查询的字段
    *
    * @return $this
    */
    public function setAccurateQueryField($accurateQueryField)
    {
        $this->container['accurateQueryField'] = $accurateQueryField;
        return $this;
    }

    /**
    * Gets renderEngine
    *  可用引擎。 * UE：UE引擎 * MetaEngine：MetaEngine引擎 > 该字段当前只对MetaEngine白名单用户生效
    *
    * @return string|null
    */
    public function getRenderEngine()
    {
        return $this->container['renderEngine'];
    }

    /**
    * Sets renderEngine
    *
    * @param string|null $renderEngine 可用引擎。 * UE：UE引擎 * MetaEngine：MetaEngine引擎 > 该字段当前只对MetaEngine白名单用户生效
    *
    * @return $this
    */
    public function setRenderEngine($renderEngine)
    {
        $this->container['renderEngine'] = $renderEngine;
        return $this;
    }

    /**
    * Gets assetId
    *  资产id
    *
    * @return string[]|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string[]|null $assetId 资产id
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets sex
    *  性别。多选使用英文逗号分隔。
    *
    * @return string|null
    */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
    * Sets sex
    *
    * @param string|null $sex 性别。多选使用英文逗号分隔。
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets language
    *  语言。多选使用英文逗号分隔。
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 语言。多选使用英文逗号分隔。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets systemProperty
    *  系统属性。  key和value间用\":\"分隔，多个key之间用\",\"分隔。  如system_property=BACKGROUND_IMG:Yes,RENDER_ENGINE:MetaEngine。  不同Key对应Value取值如下：  公共资产属性： * BACKGROUND_IMG：视频制作的2D背景图片，可取值Yes * CREATED_BY_PLATFORM：是否平台生成，可取值Yes  分身数字人资产属性： * MATERIAL_IMG：素材图片，用作前景。可取值Yes * MATERIAL_VIDEO：素材视频，用作前景。可取值Yes * TO_BE_TRANSLATED_VIDEO: 视频翻译的源视频。可取值Yes  3D数字人资产属性： * STYLE_ID：风格Id * RENDER_ENGINE：引擎类型，可取值UE或MetaEngine * BACKGROUND_SCENE：视频制作的2D背景场景，可取值Horizontal（横屏）或者Vertical（竖屏）
    *
    * @return string|null
    */
    public function getSystemProperty()
    {
        return $this->container['systemProperty'];
    }

    /**
    * Sets systemProperty
    *
    * @param string|null $systemProperty 系统属性。  key和value间用\":\"分隔，多个key之间用\",\"分隔。  如system_property=BACKGROUND_IMG:Yes,RENDER_ENGINE:MetaEngine。  不同Key对应Value取值如下：  公共资产属性： * BACKGROUND_IMG：视频制作的2D背景图片，可取值Yes * CREATED_BY_PLATFORM：是否平台生成，可取值Yes  分身数字人资产属性： * MATERIAL_IMG：素材图片，用作前景。可取值Yes * MATERIAL_VIDEO：素材视频，用作前景。可取值Yes * TO_BE_TRANSLATED_VIDEO: 视频翻译的源视频。可取值Yes  3D数字人资产属性： * STYLE_ID：风格Id * RENDER_ENGINE：引擎类型，可取值UE或MetaEngine * BACKGROUND_SCENE：视频制作的2D背景场景，可取值Horizontal（横屏）或者Vertical（竖屏）
    *
    * @return $this
    */
    public function setSystemProperty($systemProperty)
    {
        $this->container['systemProperty'] = $systemProperty;
        return $this;
    }

    /**
    * Gets actionEditable
    *  动作是否可编辑。仅在分身数字人模型查询时有效。
    *
    * @return bool|null
    */
    public function getActionEditable()
    {
        return $this->container['actionEditable'];
    }

    /**
    * Sets actionEditable
    *
    * @param bool|null $actionEditable 动作是否可编辑。仅在分身数字人模型查询时有效。
    *
    * @return $this
    */
    public function setActionEditable($actionEditable)
    {
        $this->container['actionEditable'] = $actionEditable;
        return $this;
    }

    /**
    * Gets isWithActionLibrary
    *  分身数字人是否带原子动作库。 > * 带原子动作库的分身数字人可做动作编排。
    *
    * @return bool|null
    */
    public function getIsWithActionLibrary()
    {
        return $this->container['isWithActionLibrary'];
    }

    /**
    * Sets isWithActionLibrary
    *
    * @param bool|null $isWithActionLibrary 分身数字人是否带原子动作库。 > * 带原子动作库的分身数字人可做动作编排。
    *
    * @return $this
    */
    public function setIsWithActionLibrary($isWithActionLibrary)
    {
        $this->container['isWithActionLibrary'] = $isWithActionLibrary;
        return $this;
    }

    /**
    * Gets isMovable
    *  分身数字人是否支持走动。仅在分身数字人模型查询时有效。
    *
    * @return bool|null
    */
    public function getIsMovable()
    {
        return $this->container['isMovable'];
    }

    /**
    * Sets isMovable
    *
    * @param bool|null $isMovable 分身数字人是否支持走动。仅在分身数字人模型查询时有效。
    *
    * @return $this
    */
    public function setIsMovable($isMovable)
    {
        $this->container['isMovable'] = $isMovable;
        return $this;
    }

    /**
    * Gets voiceProvider
    *  取值：HUAWEI_METASTUDIO、MOBVOI。 HUAWEI_METASTUDIO：MetaStudio自研音色 MOBVOI：出门问问音色
    *
    * @return string|null
    */
    public function getVoiceProvider()
    {
        return $this->container['voiceProvider'];
    }

    /**
    * Sets voiceProvider
    *
    * @param string|null $voiceProvider 取值：HUAWEI_METASTUDIO、MOBVOI。 HUAWEI_METASTUDIO：MetaStudio自研音色 MOBVOI：出门问问音色
    *
    * @return $this
    */
    public function setVoiceProvider($voiceProvider)
    {
        $this->container['voiceProvider'] = $voiceProvider;
        return $this;
    }

    /**
    * Gets role
    *  角色。 SHARER：共享方，SHAREE：被共享方
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 角色。 SHARER：共享方，SHAREE：被共享方
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets isRealtimeVoice
    *  音色是否支持实时合成。仅在音色查询时有效。 > * 支持实时合成的音色，可以用于直播和智能交互场景。否则只能用于视频制作。
    *
    * @return bool|null
    */
    public function getIsRealtimeVoice()
    {
        return $this->container['isRealtimeVoice'];
    }

    /**
    * Sets isRealtimeVoice
    *
    * @param bool|null $isRealtimeVoice 音色是否支持实时合成。仅在音色查询时有效。 > * 支持实时合成的音色，可以用于直播和智能交互场景。否则只能用于视频制作。
    *
    * @return $this
    */
    public function setIsRealtimeVoice($isRealtimeVoice)
    {
        $this->container['isRealtimeVoice'] = $isRealtimeVoice;
        return $this;
    }

    /**
    * Gets humanModel2dVersion
    *  模型版本
    *
    * @return string|null
    */
    public function getHumanModel2dVersion()
    {
        return $this->container['humanModel2dVersion'];
    }

    /**
    * Sets humanModel2dVersion
    *
    * @param string|null $humanModel2dVersion 模型版本
    *
    * @return $this
    */
    public function setHumanModel2dVersion($humanModel2dVersion)
    {
        $this->container['humanModel2dVersion'] = $humanModel2dVersion;
        return $this;
    }

    /**
    * Gets includeDeviceName
    *  资产已执行的任务名称
    *
    * @return string|null
    */
    public function getIncludeDeviceName()
    {
        return $this->container['includeDeviceName'];
    }

    /**
    * Sets includeDeviceName
    *
    * @param string|null $includeDeviceName 资产已执行的任务名称
    *
    * @return $this
    */
    public function setIncludeDeviceName($includeDeviceName)
    {
        $this->container['includeDeviceName'] = $includeDeviceName;
        return $this;
    }

    /**
    * Gets excludeDeviceName
    *  资产已执行的任务名称
    *
    * @return string|null
    */
    public function getExcludeDeviceName()
    {
        return $this->container['excludeDeviceName'];
    }

    /**
    * Sets excludeDeviceName
    *
    * @param string|null $excludeDeviceName 资产已执行的任务名称
    *
    * @return $this
    */
    public function setExcludeDeviceName($excludeDeviceName)
    {
        $this->container['excludeDeviceName'] = $excludeDeviceName;
        return $this;
    }

    /**
    * Gets supportedService
    *  资产支持的业务类型。默认查询所有资产。 * VIDEO_2D：分身数字人视频制作 * LIVE_2D：分身数字人直播 * CHAT_2D：分身数字人智能交互
    *
    * @return string|null
    */
    public function getSupportedService()
    {
        return $this->container['supportedService'];
    }

    /**
    * Sets supportedService
    *
    * @param string|null $supportedService 资产支持的业务类型。默认查询所有资产。 * VIDEO_2D：分身数字人视频制作 * LIVE_2D：分身数字人直播 * CHAT_2D：分身数字人智能交互
    *
    * @return $this
    */
    public function setSupportedService($supportedService)
    {
        $this->container['supportedService'] = $supportedService;
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


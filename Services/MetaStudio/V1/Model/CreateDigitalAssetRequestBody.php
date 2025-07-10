<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDigitalAssetRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDigitalAssetRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetName  **参数解释**： 资产名称。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度0-256位。 **默认取值**： 不涉及。
    * assetDescription  **参数解释**： 资产描述。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度0-4096位。 **默认取值**： 不涉及。
    * assetType  **参数解释**： 资产类型。 **约束限制**： VOICE_MODEL，HUMAN_MODEL_2D 普通用户均无法上传。 **取值范围**： 公共资产类型： * VOICE_MODEL：音色模型 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MUSIC: 音乐 * AUDIO: 音频 * COMMON_FILE：通用文件  分身数字人资产： * HUMAN_MODEL_2D: 分身数字人模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板  **默认取值**： 不涉及。
    * reviewConfig  reviewConfig
    * tags  **参数解释**： 标签列表。 > 分身形象系统资产的tag定义如下： > - 行业：NEWS,BUSINESS,E_COMMERCE,MARKETING,KNOWLEDGE,EDUCATION,MEDICAL,SPORTS > - 性别：MALE,FEMALE > - 姿势：FULL_BODY,HALF_BODY,STANDING,SITTING,FRONT_PHOTO,SIDE_PHOTO > - 区域：ASIAN,WESTERN,MIDDLE_EASTERNER,AFRICAN,LATINO  **约束限制**： 不涉及 **取值范围**： 标签个数最大为50个。 标签内容为中英文，字符长度0-128位。 **默认取值**： 不涉及
    * assetExtraMeta  assetExtraMeta
    * systemProperties  **参数解释**： 设置系统属性。内部参数，普通用户无需设置。 **约束限制**： 不涉及 **取值范围**： 个数最大为50个。 **默认取值**： 不涉及
    * sharedConfig  sharedConfig
    * isNeedGenerateCover  **参数解释**： 是否需要生成封面。 **约束限制**： 仅用于视频类资产。 **取值范围**： * true：自动生成封面。 * false：不自动生成封面。
    * assetOrder  **参数解释**： 用于console控制台展示顺序。 如果取值相同，则默认最新的排在前面。 **约束限制**： 不涉及 **默认取值**： 不涉及
    * supportedService  支持的业务类型。： * VIDEO_2D：分身数字人视频制作 * LIVE_2D：分身数字人直播 * CHAT_2D：分身数字人智能交互
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetName' => 'string',
            'assetDescription' => 'string',
            'assetType' => 'string',
            'reviewConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig',
            'tags' => 'string[]',
            'assetExtraMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AssetExtraMeta',
            'systemProperties' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SystemProperty[]',
            'sharedConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AssetSharedConfig',
            'isNeedGenerateCover' => 'bool',
            'assetOrder' => 'int',
            'supportedService' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SupportedServiceEnum[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetName  **参数解释**： 资产名称。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度0-256位。 **默认取值**： 不涉及。
    * assetDescription  **参数解释**： 资产描述。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度0-4096位。 **默认取值**： 不涉及。
    * assetType  **参数解释**： 资产类型。 **约束限制**： VOICE_MODEL，HUMAN_MODEL_2D 普通用户均无法上传。 **取值范围**： 公共资产类型： * VOICE_MODEL：音色模型 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MUSIC: 音乐 * AUDIO: 音频 * COMMON_FILE：通用文件  分身数字人资产： * HUMAN_MODEL_2D: 分身数字人模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板  **默认取值**： 不涉及。
    * reviewConfig  reviewConfig
    * tags  **参数解释**： 标签列表。 > 分身形象系统资产的tag定义如下： > - 行业：NEWS,BUSINESS,E_COMMERCE,MARKETING,KNOWLEDGE,EDUCATION,MEDICAL,SPORTS > - 性别：MALE,FEMALE > - 姿势：FULL_BODY,HALF_BODY,STANDING,SITTING,FRONT_PHOTO,SIDE_PHOTO > - 区域：ASIAN,WESTERN,MIDDLE_EASTERNER,AFRICAN,LATINO  **约束限制**： 不涉及 **取值范围**： 标签个数最大为50个。 标签内容为中英文，字符长度0-128位。 **默认取值**： 不涉及
    * assetExtraMeta  assetExtraMeta
    * systemProperties  **参数解释**： 设置系统属性。内部参数，普通用户无需设置。 **约束限制**： 不涉及 **取值范围**： 个数最大为50个。 **默认取值**： 不涉及
    * sharedConfig  sharedConfig
    * isNeedGenerateCover  **参数解释**： 是否需要生成封面。 **约束限制**： 仅用于视频类资产。 **取值范围**： * true：自动生成封面。 * false：不自动生成封面。
    * assetOrder  **参数解释**： 用于console控制台展示顺序。 如果取值相同，则默认最新的排在前面。 **约束限制**： 不涉及 **默认取值**： 不涉及
    * supportedService  支持的业务类型。： * VIDEO_2D：分身数字人视频制作 * LIVE_2D：分身数字人直播 * CHAT_2D：分身数字人智能交互
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetName' => null,
        'assetDescription' => null,
        'assetType' => null,
        'reviewConfig' => null,
        'tags' => null,
        'assetExtraMeta' => null,
        'systemProperties' => null,
        'sharedConfig' => null,
        'isNeedGenerateCover' => null,
        'assetOrder' => 'int32',
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
    * assetName  **参数解释**： 资产名称。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度0-256位。 **默认取值**： 不涉及。
    * assetDescription  **参数解释**： 资产描述。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度0-4096位。 **默认取值**： 不涉及。
    * assetType  **参数解释**： 资产类型。 **约束限制**： VOICE_MODEL，HUMAN_MODEL_2D 普通用户均无法上传。 **取值范围**： 公共资产类型： * VOICE_MODEL：音色模型 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MUSIC: 音乐 * AUDIO: 音频 * COMMON_FILE：通用文件  分身数字人资产： * HUMAN_MODEL_2D: 分身数字人模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板  **默认取值**： 不涉及。
    * reviewConfig  reviewConfig
    * tags  **参数解释**： 标签列表。 > 分身形象系统资产的tag定义如下： > - 行业：NEWS,BUSINESS,E_COMMERCE,MARKETING,KNOWLEDGE,EDUCATION,MEDICAL,SPORTS > - 性别：MALE,FEMALE > - 姿势：FULL_BODY,HALF_BODY,STANDING,SITTING,FRONT_PHOTO,SIDE_PHOTO > - 区域：ASIAN,WESTERN,MIDDLE_EASTERNER,AFRICAN,LATINO  **约束限制**： 不涉及 **取值范围**： 标签个数最大为50个。 标签内容为中英文，字符长度0-128位。 **默认取值**： 不涉及
    * assetExtraMeta  assetExtraMeta
    * systemProperties  **参数解释**： 设置系统属性。内部参数，普通用户无需设置。 **约束限制**： 不涉及 **取值范围**： 个数最大为50个。 **默认取值**： 不涉及
    * sharedConfig  sharedConfig
    * isNeedGenerateCover  **参数解释**： 是否需要生成封面。 **约束限制**： 仅用于视频类资产。 **取值范围**： * true：自动生成封面。 * false：不自动生成封面。
    * assetOrder  **参数解释**： 用于console控制台展示顺序。 如果取值相同，则默认最新的排在前面。 **约束限制**： 不涉及 **默认取值**： 不涉及
    * supportedService  支持的业务类型。： * VIDEO_2D：分身数字人视频制作 * LIVE_2D：分身数字人直播 * CHAT_2D：分身数字人智能交互
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetName' => 'asset_name',
            'assetDescription' => 'asset_description',
            'assetType' => 'asset_type',
            'reviewConfig' => 'review_config',
            'tags' => 'tags',
            'assetExtraMeta' => 'asset_extra_meta',
            'systemProperties' => 'system_properties',
            'sharedConfig' => 'shared_config',
            'isNeedGenerateCover' => 'is_need_generate_cover',
            'assetOrder' => 'asset_order',
            'supportedService' => 'supported_service'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetName  **参数解释**： 资产名称。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度0-256位。 **默认取值**： 不涉及。
    * assetDescription  **参数解释**： 资产描述。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度0-4096位。 **默认取值**： 不涉及。
    * assetType  **参数解释**： 资产类型。 **约束限制**： VOICE_MODEL，HUMAN_MODEL_2D 普通用户均无法上传。 **取值范围**： 公共资产类型： * VOICE_MODEL：音色模型 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MUSIC: 音乐 * AUDIO: 音频 * COMMON_FILE：通用文件  分身数字人资产： * HUMAN_MODEL_2D: 分身数字人模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板  **默认取值**： 不涉及。
    * reviewConfig  reviewConfig
    * tags  **参数解释**： 标签列表。 > 分身形象系统资产的tag定义如下： > - 行业：NEWS,BUSINESS,E_COMMERCE,MARKETING,KNOWLEDGE,EDUCATION,MEDICAL,SPORTS > - 性别：MALE,FEMALE > - 姿势：FULL_BODY,HALF_BODY,STANDING,SITTING,FRONT_PHOTO,SIDE_PHOTO > - 区域：ASIAN,WESTERN,MIDDLE_EASTERNER,AFRICAN,LATINO  **约束限制**： 不涉及 **取值范围**： 标签个数最大为50个。 标签内容为中英文，字符长度0-128位。 **默认取值**： 不涉及
    * assetExtraMeta  assetExtraMeta
    * systemProperties  **参数解释**： 设置系统属性。内部参数，普通用户无需设置。 **约束限制**： 不涉及 **取值范围**： 个数最大为50个。 **默认取值**： 不涉及
    * sharedConfig  sharedConfig
    * isNeedGenerateCover  **参数解释**： 是否需要生成封面。 **约束限制**： 仅用于视频类资产。 **取值范围**： * true：自动生成封面。 * false：不自动生成封面。
    * assetOrder  **参数解释**： 用于console控制台展示顺序。 如果取值相同，则默认最新的排在前面。 **约束限制**： 不涉及 **默认取值**： 不涉及
    * supportedService  支持的业务类型。： * VIDEO_2D：分身数字人视频制作 * LIVE_2D：分身数字人直播 * CHAT_2D：分身数字人智能交互
    *
    * @var string[]
    */
    protected static $setters = [
            'assetName' => 'setAssetName',
            'assetDescription' => 'setAssetDescription',
            'assetType' => 'setAssetType',
            'reviewConfig' => 'setReviewConfig',
            'tags' => 'setTags',
            'assetExtraMeta' => 'setAssetExtraMeta',
            'systemProperties' => 'setSystemProperties',
            'sharedConfig' => 'setSharedConfig',
            'isNeedGenerateCover' => 'setIsNeedGenerateCover',
            'assetOrder' => 'setAssetOrder',
            'supportedService' => 'setSupportedService'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetName  **参数解释**： 资产名称。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度0-256位。 **默认取值**： 不涉及。
    * assetDescription  **参数解释**： 资产描述。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度0-4096位。 **默认取值**： 不涉及。
    * assetType  **参数解释**： 资产类型。 **约束限制**： VOICE_MODEL，HUMAN_MODEL_2D 普通用户均无法上传。 **取值范围**： 公共资产类型： * VOICE_MODEL：音色模型 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MUSIC: 音乐 * AUDIO: 音频 * COMMON_FILE：通用文件  分身数字人资产： * HUMAN_MODEL_2D: 分身数字人模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板  **默认取值**： 不涉及。
    * reviewConfig  reviewConfig
    * tags  **参数解释**： 标签列表。 > 分身形象系统资产的tag定义如下： > - 行业：NEWS,BUSINESS,E_COMMERCE,MARKETING,KNOWLEDGE,EDUCATION,MEDICAL,SPORTS > - 性别：MALE,FEMALE > - 姿势：FULL_BODY,HALF_BODY,STANDING,SITTING,FRONT_PHOTO,SIDE_PHOTO > - 区域：ASIAN,WESTERN,MIDDLE_EASTERNER,AFRICAN,LATINO  **约束限制**： 不涉及 **取值范围**： 标签个数最大为50个。 标签内容为中英文，字符长度0-128位。 **默认取值**： 不涉及
    * assetExtraMeta  assetExtraMeta
    * systemProperties  **参数解释**： 设置系统属性。内部参数，普通用户无需设置。 **约束限制**： 不涉及 **取值范围**： 个数最大为50个。 **默认取值**： 不涉及
    * sharedConfig  sharedConfig
    * isNeedGenerateCover  **参数解释**： 是否需要生成封面。 **约束限制**： 仅用于视频类资产。 **取值范围**： * true：自动生成封面。 * false：不自动生成封面。
    * assetOrder  **参数解释**： 用于console控制台展示顺序。 如果取值相同，则默认最新的排在前面。 **约束限制**： 不涉及 **默认取值**： 不涉及
    * supportedService  支持的业务类型。： * VIDEO_2D：分身数字人视频制作 * LIVE_2D：分身数字人直播 * CHAT_2D：分身数字人智能交互
    *
    * @var string[]
    */
    protected static $getters = [
            'assetName' => 'getAssetName',
            'assetDescription' => 'getAssetDescription',
            'assetType' => 'getAssetType',
            'reviewConfig' => 'getReviewConfig',
            'tags' => 'getTags',
            'assetExtraMeta' => 'getAssetExtraMeta',
            'systemProperties' => 'getSystemProperties',
            'sharedConfig' => 'getSharedConfig',
            'isNeedGenerateCover' => 'getIsNeedGenerateCover',
            'assetOrder' => 'getAssetOrder',
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
    const ASSET_TYPE_HUMAN_MODEL = 'HUMAN_MODEL';
    const ASSET_TYPE_VOICE_MODEL = 'VOICE_MODEL';
    const ASSET_TYPE_SCENE = 'SCENE';
    const ASSET_TYPE_ANIMATION = 'ANIMATION';
    const ASSET_TYPE_VIDEO = 'VIDEO';
    const ASSET_TYPE_IMAGE = 'IMAGE';
    const ASSET_TYPE_PPT = 'PPT';
    const ASSET_TYPE_MATERIAL = 'MATERIAL';
    const ASSET_TYPE_NORMAL_MODEL = 'NORMAL_MODEL';
    const ASSET_TYPE_COMMON_FILE = 'COMMON_FILE';
    const ASSET_TYPE_HUMAN_MODEL_2_D = 'HUMAN_MODEL_2D';
    const ASSET_TYPE_BUSINESS_CARD_TEMPLET = 'BUSINESS_CARD_TEMPLET';
    const ASSET_TYPE_MUSIC = 'MUSIC';
    const ASSET_TYPE_AUDIO = 'AUDIO';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssetTypeAllowableValues()
    {
        return [
            self::ASSET_TYPE_HUMAN_MODEL,
            self::ASSET_TYPE_VOICE_MODEL,
            self::ASSET_TYPE_SCENE,
            self::ASSET_TYPE_ANIMATION,
            self::ASSET_TYPE_VIDEO,
            self::ASSET_TYPE_IMAGE,
            self::ASSET_TYPE_PPT,
            self::ASSET_TYPE_MATERIAL,
            self::ASSET_TYPE_NORMAL_MODEL,
            self::ASSET_TYPE_COMMON_FILE,
            self::ASSET_TYPE_HUMAN_MODEL_2_D,
            self::ASSET_TYPE_BUSINESS_CARD_TEMPLET,
            self::ASSET_TYPE_MUSIC,
            self::ASSET_TYPE_AUDIO,
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
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['assetDescription'] = isset($data['assetDescription']) ? $data['assetDescription'] : null;
        $this->container['assetType'] = isset($data['assetType']) ? $data['assetType'] : null;
        $this->container['reviewConfig'] = isset($data['reviewConfig']) ? $data['reviewConfig'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['assetExtraMeta'] = isset($data['assetExtraMeta']) ? $data['assetExtraMeta'] : null;
        $this->container['systemProperties'] = isset($data['systemProperties']) ? $data['systemProperties'] : null;
        $this->container['sharedConfig'] = isset($data['sharedConfig']) ? $data['sharedConfig'] : null;
        $this->container['isNeedGenerateCover'] = isset($data['isNeedGenerateCover']) ? $data['isNeedGenerateCover'] : null;
        $this->container['assetOrder'] = isset($data['assetOrder']) ? $data['assetOrder'] : null;
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
        if ($this->container['assetName'] === null) {
            $invalidProperties[] = "'assetName' can't be null";
        }
            if ((mb_strlen($this->container['assetName']) > 256)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['assetName']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetDescription']) && (mb_strlen($this->container['assetDescription']) > 4096)) {
                $invalidProperties[] = "invalid value for 'assetDescription', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['assetDescription']) && (mb_strlen($this->container['assetDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetDescription', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['assetType'] === null) {
            $invalidProperties[] = "'assetType' can't be null";
        }
            $allowedValues = $this->getAssetTypeAllowableValues();
                if (!is_null($this->container['assetType']) && !in_array($this->container['assetType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'assetType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['assetOrder']) && ($this->container['assetOrder'] > 32767)) {
                $invalidProperties[] = "invalid value for 'assetOrder', must be smaller than or equal to 32767.";
            }
            if (!is_null($this->container['assetOrder']) && ($this->container['assetOrder'] < 0)) {
                $invalidProperties[] = "invalid value for 'assetOrder', must be bigger than or equal to 0.";
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
    * Gets assetName
    *  **参数解释**： 资产名称。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度0-256位。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getAssetName()
    {
        return $this->container['assetName'];
    }

    /**
    * Sets assetName
    *
    * @param string $assetName **参数解释**： 资产名称。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度0-256位。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;
        return $this;
    }

    /**
    * Gets assetDescription
    *  **参数解释**： 资产描述。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度0-4096位。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getAssetDescription()
    {
        return $this->container['assetDescription'];
    }

    /**
    * Sets assetDescription
    *
    * @param string|null $assetDescription **参数解释**： 资产描述。 **约束限制**： 不涉及。 **取值范围**： 只能使用中英文字符，字符长度0-4096位。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAssetDescription($assetDescription)
    {
        $this->container['assetDescription'] = $assetDescription;
        return $this;
    }

    /**
    * Gets assetType
    *  **参数解释**： 资产类型。 **约束限制**： VOICE_MODEL，HUMAN_MODEL_2D 普通用户均无法上传。 **取值范围**： 公共资产类型： * VOICE_MODEL：音色模型 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MUSIC: 音乐 * AUDIO: 音频 * COMMON_FILE：通用文件  分身数字人资产： * HUMAN_MODEL_2D: 分身数字人模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板  **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getAssetType()
    {
        return $this->container['assetType'];
    }

    /**
    * Sets assetType
    *
    * @param string $assetType **参数解释**： 资产类型。 **约束限制**： VOICE_MODEL，HUMAN_MODEL_2D 普通用户均无法上传。 **取值范围**： 公共资产类型： * VOICE_MODEL：音色模型 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MUSIC: 音乐 * AUDIO: 音频 * COMMON_FILE：通用文件  分身数字人资产： * HUMAN_MODEL_2D: 分身数字人模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板  **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAssetType($assetType)
    {
        $this->container['assetType'] = $assetType;
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
    * Gets tags
    *  **参数解释**： 标签列表。 > 分身形象系统资产的tag定义如下： > - 行业：NEWS,BUSINESS,E_COMMERCE,MARKETING,KNOWLEDGE,EDUCATION,MEDICAL,SPORTS > - 性别：MALE,FEMALE > - 姿势：FULL_BODY,HALF_BODY,STANDING,SITTING,FRONT_PHOTO,SIDE_PHOTO > - 区域：ASIAN,WESTERN,MIDDLE_EASTERNER,AFRICAN,LATINO  **约束限制**： 不涉及 **取值范围**： 标签个数最大为50个。 标签内容为中英文，字符长度0-128位。 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags **参数解释**： 标签列表。 > 分身形象系统资产的tag定义如下： > - 行业：NEWS,BUSINESS,E_COMMERCE,MARKETING,KNOWLEDGE,EDUCATION,MEDICAL,SPORTS > - 性别：MALE,FEMALE > - 姿势：FULL_BODY,HALF_BODY,STANDING,SITTING,FRONT_PHOTO,SIDE_PHOTO > - 区域：ASIAN,WESTERN,MIDDLE_EASTERNER,AFRICAN,LATINO  **约束限制**： 不涉及 **取值范围**： 标签个数最大为50个。 标签内容为中英文，字符长度0-128位。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets assetExtraMeta
    *  assetExtraMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AssetExtraMeta|null
    */
    public function getAssetExtraMeta()
    {
        return $this->container['assetExtraMeta'];
    }

    /**
    * Sets assetExtraMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AssetExtraMeta|null $assetExtraMeta assetExtraMeta
    *
    * @return $this
    */
    public function setAssetExtraMeta($assetExtraMeta)
    {
        $this->container['assetExtraMeta'] = $assetExtraMeta;
        return $this;
    }

    /**
    * Gets systemProperties
    *  **参数解释**： 设置系统属性。内部参数，普通用户无需设置。 **约束限制**： 不涉及 **取值范围**： 个数最大为50个。 **默认取值**： 不涉及
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SystemProperty[]|null
    */
    public function getSystemProperties()
    {
        return $this->container['systemProperties'];
    }

    /**
    * Sets systemProperties
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SystemProperty[]|null $systemProperties **参数解释**： 设置系统属性。内部参数，普通用户无需设置。 **约束限制**： 不涉及 **取值范围**： 个数最大为50个。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSystemProperties($systemProperties)
    {
        $this->container['systemProperties'] = $systemProperties;
        return $this;
    }

    /**
    * Gets sharedConfig
    *  sharedConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AssetSharedConfig|null
    */
    public function getSharedConfig()
    {
        return $this->container['sharedConfig'];
    }

    /**
    * Sets sharedConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AssetSharedConfig|null $sharedConfig sharedConfig
    *
    * @return $this
    */
    public function setSharedConfig($sharedConfig)
    {
        $this->container['sharedConfig'] = $sharedConfig;
        return $this;
    }

    /**
    * Gets isNeedGenerateCover
    *  **参数解释**： 是否需要生成封面。 **约束限制**： 仅用于视频类资产。 **取值范围**： * true：自动生成封面。 * false：不自动生成封面。
    *
    * @return bool|null
    */
    public function getIsNeedGenerateCover()
    {
        return $this->container['isNeedGenerateCover'];
    }

    /**
    * Sets isNeedGenerateCover
    *
    * @param bool|null $isNeedGenerateCover **参数解释**： 是否需要生成封面。 **约束限制**： 仅用于视频类资产。 **取值范围**： * true：自动生成封面。 * false：不自动生成封面。
    *
    * @return $this
    */
    public function setIsNeedGenerateCover($isNeedGenerateCover)
    {
        $this->container['isNeedGenerateCover'] = $isNeedGenerateCover;
        return $this;
    }

    /**
    * Gets assetOrder
    *  **参数解释**： 用于console控制台展示顺序。 如果取值相同，则默认最新的排在前面。 **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getAssetOrder()
    {
        return $this->container['assetOrder'];
    }

    /**
    * Sets assetOrder
    *
    * @param int|null $assetOrder **参数解释**： 用于console控制台展示顺序。 如果取值相同，则默认最新的排在前面。 **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAssetOrder($assetOrder)
    {
        $this->container['assetOrder'] = $assetOrder;
        return $this;
    }

    /**
    * Gets supportedService
    *  支持的业务类型。： * VIDEO_2D：分身数字人视频制作 * LIVE_2D：分身数字人直播 * CHAT_2D：分身数字人智能交互
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SupportedServiceEnum[]|null
    */
    public function getSupportedService()
    {
        return $this->container['supportedService'];
    }

    /**
    * Sets supportedService
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SupportedServiceEnum[]|null $supportedService 支持的业务类型。： * VIDEO_2D：分身数字人视频制作 * LIVE_2D：分身数字人直播 * CHAT_2D：分身数字人智能交互
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


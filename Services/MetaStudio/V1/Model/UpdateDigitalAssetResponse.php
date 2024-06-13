<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDigitalAssetResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDigitalAssetResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  租户id
    * assetId  资产ID。
    * assetName  资产名称。
    * assetDescription  资产描述。
    * appUserId  第三方用户ID。 > * 即创建资产是通过X-App-UserId头域传入的值。
    * createTime  资产创建时间。
    * updateTime  资产更新时间。
    * assetType  资产类型。  公共资产类型： * VOICE_MODEL：音色模型 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MUSIC: 音乐 * AUDIO: 音频 * COMMON_FILE：通用文件  分身数字人资产类型： * HUMAN_MODEL_2D：分身数字人模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板  3D数字人资产类型： * HUMAN_MODEL：3D数字人模型 * SCENE：场景模型 * ANIMATION：动作动画 * MATERIAL：风格化素材 * NORMAL_MODEL: 普通模型
    * assetState  资产状态。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK: 资产被冻结，资产不可用，不可查看文件。
    * failType  失败原因。 * AUTOMATIC_REVIEW_REJECT：自动审核失败 * MANUAL_REVIEW_REJECT：人工审核失败
    * reason  冻结/解冻/失败 原因。
    * tags  标签列表。
    * assetExtraMeta  assetExtraMeta
    * systemProperties  设置系统属性。
    * files  资产下的文件。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'assetId' => 'string',
            'assetName' => 'string',
            'assetDescription' => 'string',
            'appUserId' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'assetType' => 'string',
            'assetState' => 'string',
            'failType' => 'string',
            'reason' => 'string',
            'tags' => 'string[]',
            'assetExtraMeta' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AssetExtraMeta',
            'systemProperties' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SystemProperty[]',
            'files' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AssetFileInfo[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  租户id
    * assetId  资产ID。
    * assetName  资产名称。
    * assetDescription  资产描述。
    * appUserId  第三方用户ID。 > * 即创建资产是通过X-App-UserId头域传入的值。
    * createTime  资产创建时间。
    * updateTime  资产更新时间。
    * assetType  资产类型。  公共资产类型： * VOICE_MODEL：音色模型 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MUSIC: 音乐 * AUDIO: 音频 * COMMON_FILE：通用文件  分身数字人资产类型： * HUMAN_MODEL_2D：分身数字人模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板  3D数字人资产类型： * HUMAN_MODEL：3D数字人模型 * SCENE：场景模型 * ANIMATION：动作动画 * MATERIAL：风格化素材 * NORMAL_MODEL: 普通模型
    * assetState  资产状态。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK: 资产被冻结，资产不可用，不可查看文件。
    * failType  失败原因。 * AUTOMATIC_REVIEW_REJECT：自动审核失败 * MANUAL_REVIEW_REJECT：人工审核失败
    * reason  冻结/解冻/失败 原因。
    * tags  标签列表。
    * assetExtraMeta  assetExtraMeta
    * systemProperties  设置系统属性。
    * files  资产下的文件。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'assetId' => null,
        'assetName' => null,
        'assetDescription' => null,
        'appUserId' => null,
        'createTime' => null,
        'updateTime' => null,
        'assetType' => null,
        'assetState' => null,
        'failType' => null,
        'reason' => null,
        'tags' => null,
        'assetExtraMeta' => null,
        'systemProperties' => null,
        'files' => null,
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
    * projectId  租户id
    * assetId  资产ID。
    * assetName  资产名称。
    * assetDescription  资产描述。
    * appUserId  第三方用户ID。 > * 即创建资产是通过X-App-UserId头域传入的值。
    * createTime  资产创建时间。
    * updateTime  资产更新时间。
    * assetType  资产类型。  公共资产类型： * VOICE_MODEL：音色模型 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MUSIC: 音乐 * AUDIO: 音频 * COMMON_FILE：通用文件  分身数字人资产类型： * HUMAN_MODEL_2D：分身数字人模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板  3D数字人资产类型： * HUMAN_MODEL：3D数字人模型 * SCENE：场景模型 * ANIMATION：动作动画 * MATERIAL：风格化素材 * NORMAL_MODEL: 普通模型
    * assetState  资产状态。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK: 资产被冻结，资产不可用，不可查看文件。
    * failType  失败原因。 * AUTOMATIC_REVIEW_REJECT：自动审核失败 * MANUAL_REVIEW_REJECT：人工审核失败
    * reason  冻结/解冻/失败 原因。
    * tags  标签列表。
    * assetExtraMeta  assetExtraMeta
    * systemProperties  设置系统属性。
    * files  资产下的文件。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'assetId' => 'asset_id',
            'assetName' => 'asset_name',
            'assetDescription' => 'asset_description',
            'appUserId' => 'app_user_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'assetType' => 'asset_type',
            'assetState' => 'asset_state',
            'failType' => 'fail_type',
            'reason' => 'reason',
            'tags' => 'tags',
            'assetExtraMeta' => 'asset_extra_meta',
            'systemProperties' => 'system_properties',
            'files' => 'files',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  租户id
    * assetId  资产ID。
    * assetName  资产名称。
    * assetDescription  资产描述。
    * appUserId  第三方用户ID。 > * 即创建资产是通过X-App-UserId头域传入的值。
    * createTime  资产创建时间。
    * updateTime  资产更新时间。
    * assetType  资产类型。  公共资产类型： * VOICE_MODEL：音色模型 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MUSIC: 音乐 * AUDIO: 音频 * COMMON_FILE：通用文件  分身数字人资产类型： * HUMAN_MODEL_2D：分身数字人模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板  3D数字人资产类型： * HUMAN_MODEL：3D数字人模型 * SCENE：场景模型 * ANIMATION：动作动画 * MATERIAL：风格化素材 * NORMAL_MODEL: 普通模型
    * assetState  资产状态。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK: 资产被冻结，资产不可用，不可查看文件。
    * failType  失败原因。 * AUTOMATIC_REVIEW_REJECT：自动审核失败 * MANUAL_REVIEW_REJECT：人工审核失败
    * reason  冻结/解冻/失败 原因。
    * tags  标签列表。
    * assetExtraMeta  assetExtraMeta
    * systemProperties  设置系统属性。
    * files  资产下的文件。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'assetId' => 'setAssetId',
            'assetName' => 'setAssetName',
            'assetDescription' => 'setAssetDescription',
            'appUserId' => 'setAppUserId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'assetType' => 'setAssetType',
            'assetState' => 'setAssetState',
            'failType' => 'setFailType',
            'reason' => 'setReason',
            'tags' => 'setTags',
            'assetExtraMeta' => 'setAssetExtraMeta',
            'systemProperties' => 'setSystemProperties',
            'files' => 'setFiles',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  租户id
    * assetId  资产ID。
    * assetName  资产名称。
    * assetDescription  资产描述。
    * appUserId  第三方用户ID。 > * 即创建资产是通过X-App-UserId头域传入的值。
    * createTime  资产创建时间。
    * updateTime  资产更新时间。
    * assetType  资产类型。  公共资产类型： * VOICE_MODEL：音色模型 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MUSIC: 音乐 * AUDIO: 音频 * COMMON_FILE：通用文件  分身数字人资产类型： * HUMAN_MODEL_2D：分身数字人模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板  3D数字人资产类型： * HUMAN_MODEL：3D数字人模型 * SCENE：场景模型 * ANIMATION：动作动画 * MATERIAL：风格化素材 * NORMAL_MODEL: 普通模型
    * assetState  资产状态。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK: 资产被冻结，资产不可用，不可查看文件。
    * failType  失败原因。 * AUTOMATIC_REVIEW_REJECT：自动审核失败 * MANUAL_REVIEW_REJECT：人工审核失败
    * reason  冻结/解冻/失败 原因。
    * tags  标签列表。
    * assetExtraMeta  assetExtraMeta
    * systemProperties  设置系统属性。
    * files  资产下的文件。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'assetId' => 'getAssetId',
            'assetName' => 'getAssetName',
            'assetDescription' => 'getAssetDescription',
            'appUserId' => 'getAppUserId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'assetType' => 'getAssetType',
            'assetState' => 'getAssetState',
            'failType' => 'getFailType',
            'reason' => 'getReason',
            'tags' => 'getTags',
            'assetExtraMeta' => 'getAssetExtraMeta',
            'systemProperties' => 'getSystemProperties',
            'files' => 'getFiles',
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
    const ASSET_STATE_CREATING = 'CREATING';
    const ASSET_STATE_FAILED = 'FAILED';
    const ASSET_STATE_UNACTIVED = 'UNACTIVED';
    const ASSET_STATE_ACTIVED = 'ACTIVED';
    const ASSET_STATE_DELETING = 'DELETING';
    const ASSET_STATE_DELETED = 'DELETED';
    const ASSET_STATE_BLOCK = 'BLOCK';
    const FAIL_TYPE_AUTOMATIC_REVIEW_REJECT = 'AUTOMATIC_REVIEW_REJECT';
    const FAIL_TYPE_MANUAL_REVIEW_REJECT = 'MANUAL_REVIEW_REJECT';
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssetStateAllowableValues()
    {
        return [
            self::ASSET_STATE_CREATING,
            self::ASSET_STATE_FAILED,
            self::ASSET_STATE_UNACTIVED,
            self::ASSET_STATE_ACTIVED,
            self::ASSET_STATE_DELETING,
            self::ASSET_STATE_DELETED,
            self::ASSET_STATE_BLOCK,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFailTypeAllowableValues()
    {
        return [
            self::FAIL_TYPE_AUTOMATIC_REVIEW_REJECT,
            self::FAIL_TYPE_MANUAL_REVIEW_REJECT,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['assetDescription'] = isset($data['assetDescription']) ? $data['assetDescription'] : null;
        $this->container['appUserId'] = isset($data['appUserId']) ? $data['appUserId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['assetType'] = isset($data['assetType']) ? $data['assetType'] : null;
        $this->container['assetState'] = isset($data['assetState']) ? $data['assetState'] : null;
        $this->container['failType'] = isset($data['failType']) ? $data['failType'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['assetExtraMeta'] = isset($data['assetExtraMeta']) ? $data['assetExtraMeta'] : null;
        $this->container['systemProperties'] = isset($data['systemProperties']) ? $data['systemProperties'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
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
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 256)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) > 256)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetDescription']) && (mb_strlen($this->container['assetDescription']) > 4096)) {
                $invalidProperties[] = "invalid value for 'assetDescription', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['assetDescription']) && (mb_strlen($this->container['assetDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appUserId']) && (mb_strlen($this->container['appUserId']) > 256)) {
                $invalidProperties[] = "invalid value for 'appUserId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['appUserId']) && (mb_strlen($this->container['appUserId']) < 0)) {
                $invalidProperties[] = "invalid value for 'appUserId', the character length must be bigger than or equal to 0.";
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
            $allowedValues = $this->getAssetTypeAllowableValues();
                if (!is_null($this->container['assetType']) && !in_array($this->container['assetType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'assetType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAssetStateAllowableValues();
                if (!is_null($this->container['assetState']) && !in_array($this->container['assetState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'assetState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getFailTypeAllowableValues();
                if (!is_null($this->container['failType']) && !in_array($this->container['failType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'failType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 256)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) < 0)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 0.";
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
    * Gets projectId
    *  租户id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 租户id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets assetId
    *  资产ID。
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
    * @param string|null $assetId 资产ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets assetName
    *  资产名称。
    *
    * @return string|null
    */
    public function getAssetName()
    {
        return $this->container['assetName'];
    }

    /**
    * Sets assetName
    *
    * @param string|null $assetName 资产名称。
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
    *  资产描述。
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
    * @param string|null $assetDescription 资产描述。
    *
    * @return $this
    */
    public function setAssetDescription($assetDescription)
    {
        $this->container['assetDescription'] = $assetDescription;
        return $this;
    }

    /**
    * Gets appUserId
    *  第三方用户ID。 > * 即创建资产是通过X-App-UserId头域传入的值。
    *
    * @return string|null
    */
    public function getAppUserId()
    {
        return $this->container['appUserId'];
    }

    /**
    * Sets appUserId
    *
    * @param string|null $appUserId 第三方用户ID。 > * 即创建资产是通过X-App-UserId头域传入的值。
    *
    * @return $this
    */
    public function setAppUserId($appUserId)
    {
        $this->container['appUserId'] = $appUserId;
        return $this;
    }

    /**
    * Gets createTime
    *  资产创建时间。
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
    * @param string|null $createTime 资产创建时间。
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
    *  资产更新时间。
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
    * @param string|null $updateTime 资产更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets assetType
    *  资产类型。  公共资产类型： * VOICE_MODEL：音色模型 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MUSIC: 音乐 * AUDIO: 音频 * COMMON_FILE：通用文件  分身数字人资产类型： * HUMAN_MODEL_2D：分身数字人模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板  3D数字人资产类型： * HUMAN_MODEL：3D数字人模型 * SCENE：场景模型 * ANIMATION：动作动画 * MATERIAL：风格化素材 * NORMAL_MODEL: 普通模型
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
    * @param string|null $assetType 资产类型。  公共资产类型： * VOICE_MODEL：音色模型 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MUSIC: 音乐 * AUDIO: 音频 * COMMON_FILE：通用文件  分身数字人资产类型： * HUMAN_MODEL_2D：分身数字人模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板  3D数字人资产类型： * HUMAN_MODEL：3D数字人模型 * SCENE：场景模型 * ANIMATION：动作动画 * MATERIAL：风格化素材 * NORMAL_MODEL: 普通模型
    *
    * @return $this
    */
    public function setAssetType($assetType)
    {
        $this->container['assetType'] = $assetType;
        return $this;
    }

    /**
    * Gets assetState
    *  资产状态。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK: 资产被冻结，资产不可用，不可查看文件。
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
    * @param string|null $assetState 资产状态。 * CREATING：资产创建中，主文件尚未上传 * FAILED：主文件上传失败 * UNACTIVED：主文件上传成功，资产未激活，资产不可用于其他业务（用户可更新状态） * ACTIVED：主文件上传成功，资产激活，资产可用于其他业务（用户可更新状态） * DELETING：资产删除中，资产不可用，资产可恢复 * DELETED：资产文件已删除，资产不可用，资产不可恢复 * BLOCK: 资产被冻结，资产不可用，不可查看文件。
    *
    * @return $this
    */
    public function setAssetState($assetState)
    {
        $this->container['assetState'] = $assetState;
        return $this;
    }

    /**
    * Gets failType
    *  失败原因。 * AUTOMATIC_REVIEW_REJECT：自动审核失败 * MANUAL_REVIEW_REJECT：人工审核失败
    *
    * @return string|null
    */
    public function getFailType()
    {
        return $this->container['failType'];
    }

    /**
    * Sets failType
    *
    * @param string|null $failType 失败原因。 * AUTOMATIC_REVIEW_REJECT：自动审核失败 * MANUAL_REVIEW_REJECT：人工审核失败
    *
    * @return $this
    */
    public function setFailType($failType)
    {
        $this->container['failType'] = $failType;
        return $this;
    }

    /**
    * Gets reason
    *  冻结/解冻/失败 原因。
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 冻结/解冻/失败 原因。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表。
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
    * @param string[]|null $tags 标签列表。
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
    *  设置系统属性。
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
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SystemProperty[]|null $systemProperties 设置系统属性。
    *
    * @return $this
    */
    public function setSystemProperties($systemProperties)
    {
        $this->container['systemProperties'] = $systemProperties;
        return $this;
    }

    /**
    * Gets files
    *  资产下的文件。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AssetFileInfo[]|null
    */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
    * Sets files
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AssetFileInfo[]|null $files 资产下的文件。
    *
    * @return $this
    */
    public function setFiles($files)
    {
        $this->container['files'] = $files;
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


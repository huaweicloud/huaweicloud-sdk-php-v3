<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

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
    * assetName  资产名称。
    * assetDescription  资产描述。
    * assetType  资产类型。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型（仅系统管理员可上传） * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * NORMAL_MODEL: 普通模型 * COMMON_FILE：通用文件 * HUMAN_MODEL_2D: 2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐
    * assetOwner  项目ID。
    * tags  标签列表。
    * assetExtraMeta  assetExtraMeta
    * systemProperties  设置系统属性。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetName' => 'string',
            'assetDescription' => 'string',
            'assetType' => 'string',
            'assetOwner' => 'string',
            'tags' => 'string[]',
            'assetExtraMeta' => '\HuaweiCloud\SDK\MetaStudio\v1\Model\AssetExtraMeta',
            'systemProperties' => '\HuaweiCloud\SDK\MetaStudio\v1\Model\SystemProperty[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetName  资产名称。
    * assetDescription  资产描述。
    * assetType  资产类型。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型（仅系统管理员可上传） * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * NORMAL_MODEL: 普通模型 * COMMON_FILE：通用文件 * HUMAN_MODEL_2D: 2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐
    * assetOwner  项目ID。
    * tags  标签列表。
    * assetExtraMeta  assetExtraMeta
    * systemProperties  设置系统属性。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetName' => null,
        'assetDescription' => null,
        'assetType' => null,
        'assetOwner' => null,
        'tags' => null,
        'assetExtraMeta' => null,
        'systemProperties' => null
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
    * assetName  资产名称。
    * assetDescription  资产描述。
    * assetType  资产类型。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型（仅系统管理员可上传） * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * NORMAL_MODEL: 普通模型 * COMMON_FILE：通用文件 * HUMAN_MODEL_2D: 2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐
    * assetOwner  项目ID。
    * tags  标签列表。
    * assetExtraMeta  assetExtraMeta
    * systemProperties  设置系统属性。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetName' => 'asset_name',
            'assetDescription' => 'asset_description',
            'assetType' => 'asset_type',
            'assetOwner' => 'asset_owner',
            'tags' => 'tags',
            'assetExtraMeta' => 'asset_extra_meta',
            'systemProperties' => 'system_properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetName  资产名称。
    * assetDescription  资产描述。
    * assetType  资产类型。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型（仅系统管理员可上传） * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * NORMAL_MODEL: 普通模型 * COMMON_FILE：通用文件 * HUMAN_MODEL_2D: 2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐
    * assetOwner  项目ID。
    * tags  标签列表。
    * assetExtraMeta  assetExtraMeta
    * systemProperties  设置系统属性。
    *
    * @var string[]
    */
    protected static $setters = [
            'assetName' => 'setAssetName',
            'assetDescription' => 'setAssetDescription',
            'assetType' => 'setAssetType',
            'assetOwner' => 'setAssetOwner',
            'tags' => 'setTags',
            'assetExtraMeta' => 'setAssetExtraMeta',
            'systemProperties' => 'setSystemProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetName  资产名称。
    * assetDescription  资产描述。
    * assetType  资产类型。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型（仅系统管理员可上传） * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * NORMAL_MODEL: 普通模型 * COMMON_FILE：通用文件 * HUMAN_MODEL_2D: 2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐
    * assetOwner  项目ID。
    * tags  标签列表。
    * assetExtraMeta  assetExtraMeta
    * systemProperties  设置系统属性。
    *
    * @var string[]
    */
    protected static $getters = [
            'assetName' => 'getAssetName',
            'assetDescription' => 'getAssetDescription',
            'assetType' => 'getAssetType',
            'assetOwner' => 'getAssetOwner',
            'tags' => 'getTags',
            'assetExtraMeta' => 'getAssetExtraMeta',
            'systemProperties' => 'getSystemProperties'
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
        $this->container['assetOwner'] = isset($data['assetOwner']) ? $data['assetOwner'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['assetExtraMeta'] = isset($data['assetExtraMeta']) ? $data['assetExtraMeta'] : null;
        $this->container['systemProperties'] = isset($data['systemProperties']) ? $data['systemProperties'] : null;
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

            if (!is_null($this->container['assetOwner']) && (mb_strlen($this->container['assetOwner']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetOwner', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetOwner']) && (mb_strlen($this->container['assetOwner']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetOwner', the character length must be bigger than or equal to 1.";
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
    *  资产名称。
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
    * @param string $assetName 资产名称。
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
    * Gets assetType
    *  资产类型。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型（仅系统管理员可上传） * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * NORMAL_MODEL: 普通模型 * COMMON_FILE：通用文件 * HUMAN_MODEL_2D: 2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐
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
    * @param string $assetType 资产类型。 * HUMAN_MODEL：数字人模型 * VOICE_MODEL：音色模型（仅系统管理员可上传） * SCENE：场景模型 * ANIMATION：动作动画 * VIDEO：视频文件 * IMAGE：图片文件 * PPT：幻灯片文件 * MATERIAL：风格化素材 * NORMAL_MODEL: 普通模型 * COMMON_FILE：通用文件 * HUMAN_MODEL_2D: 2D数字人网络模型 * BUSINESS_CARD_TEMPLET: 数字人名片模板 * MUSIC: 音乐
    *
    * @return $this
    */
    public function setAssetType($assetType)
    {
        $this->container['assetType'] = $assetType;
        return $this;
    }

    /**
    * Gets assetOwner
    *  项目ID。
    *
    * @return string|null
    */
    public function getAssetOwner()
    {
        return $this->container['assetOwner'];
    }

    /**
    * Sets assetOwner
    *
    * @param string|null $assetOwner 项目ID。
    *
    * @return $this
    */
    public function setAssetOwner($assetOwner)
    {
        $this->container['assetOwner'] = $assetOwner;
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
    * @return \HuaweiCloud\SDK\MetaStudio\v1\Model\AssetExtraMeta|null
    */
    public function getAssetExtraMeta()
    {
        return $this->container['assetExtraMeta'];
    }

    /**
    * Sets assetExtraMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\v1\Model\AssetExtraMeta|null $assetExtraMeta assetExtraMeta
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
    * @return \HuaweiCloud\SDK\MetaStudio\v1\Model\SystemProperty[]|null
    */
    public function getSystemProperties()
    {
        return $this->container['systemProperties'];
    }

    /**
    * Sets systemProperties
    *
    * @param \HuaweiCloud\SDK\MetaStudio\v1\Model\SystemProperty[]|null $systemProperties 设置系统属性。
    *
    * @return $this
    */
    public function setSystemProperties($systemProperties)
    {
        $this->container['systemProperties'] = $systemProperties;
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

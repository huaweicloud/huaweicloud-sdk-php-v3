<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackgroundConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackgroundConfigInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backgroundType  背景类型。 - IMAGE：图片，用于3D数字人演示素材讲解模式的图片或分身数字背景图片 - IMAGE_2D：图片，用于3D数字人主播播报模式的2D场景背景图片 - VIDEO：视频 - AUDIO：音频 > * 分身数字人视频制作仅支持IMAGE
    * backgroundTitle  背景标题。 > * 分身数字人视频制作此参数不生效。
    * humanPosition2d  humanPosition2d
    * humanSize2d  humanSize2d
    * backgroundCoverUrl  视频文件封面图片的下载URL。  演示素材为视频时有效。 > * 分身数字人视频制作此参数不生效。
    * backgroundConfig  背景文件的URL。 > * 通过资产库查询获取，不支持外部URL。
    * backgroundAssetId  背景资产ID。 > * 背景是背景图片时，填图片资产ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backgroundType' => 'string',
            'backgroundTitle' => 'string',
            'humanPosition2d' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\HumanPosition2D',
            'humanSize2d' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\HumanSize2D',
            'backgroundCoverUrl' => 'string',
            'backgroundConfig' => 'string',
            'backgroundAssetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backgroundType  背景类型。 - IMAGE：图片，用于3D数字人演示素材讲解模式的图片或分身数字背景图片 - IMAGE_2D：图片，用于3D数字人主播播报模式的2D场景背景图片 - VIDEO：视频 - AUDIO：音频 > * 分身数字人视频制作仅支持IMAGE
    * backgroundTitle  背景标题。 > * 分身数字人视频制作此参数不生效。
    * humanPosition2d  humanPosition2d
    * humanSize2d  humanSize2d
    * backgroundCoverUrl  视频文件封面图片的下载URL。  演示素材为视频时有效。 > * 分身数字人视频制作此参数不生效。
    * backgroundConfig  背景文件的URL。 > * 通过资产库查询获取，不支持外部URL。
    * backgroundAssetId  背景资产ID。 > * 背景是背景图片时，填图片资产ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backgroundType' => null,
        'backgroundTitle' => null,
        'humanPosition2d' => null,
        'humanSize2d' => null,
        'backgroundCoverUrl' => null,
        'backgroundConfig' => null,
        'backgroundAssetId' => null
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
    * backgroundType  背景类型。 - IMAGE：图片，用于3D数字人演示素材讲解模式的图片或分身数字背景图片 - IMAGE_2D：图片，用于3D数字人主播播报模式的2D场景背景图片 - VIDEO：视频 - AUDIO：音频 > * 分身数字人视频制作仅支持IMAGE
    * backgroundTitle  背景标题。 > * 分身数字人视频制作此参数不生效。
    * humanPosition2d  humanPosition2d
    * humanSize2d  humanSize2d
    * backgroundCoverUrl  视频文件封面图片的下载URL。  演示素材为视频时有效。 > * 分身数字人视频制作此参数不生效。
    * backgroundConfig  背景文件的URL。 > * 通过资产库查询获取，不支持外部URL。
    * backgroundAssetId  背景资产ID。 > * 背景是背景图片时，填图片资产ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backgroundType' => 'background_type',
            'backgroundTitle' => 'background_title',
            'humanPosition2d' => 'human_position_2d',
            'humanSize2d' => 'human_size_2d',
            'backgroundCoverUrl' => 'background_cover_url',
            'backgroundConfig' => 'background_config',
            'backgroundAssetId' => 'background_asset_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backgroundType  背景类型。 - IMAGE：图片，用于3D数字人演示素材讲解模式的图片或分身数字背景图片 - IMAGE_2D：图片，用于3D数字人主播播报模式的2D场景背景图片 - VIDEO：视频 - AUDIO：音频 > * 分身数字人视频制作仅支持IMAGE
    * backgroundTitle  背景标题。 > * 分身数字人视频制作此参数不生效。
    * humanPosition2d  humanPosition2d
    * humanSize2d  humanSize2d
    * backgroundCoverUrl  视频文件封面图片的下载URL。  演示素材为视频时有效。 > * 分身数字人视频制作此参数不生效。
    * backgroundConfig  背景文件的URL。 > * 通过资产库查询获取，不支持外部URL。
    * backgroundAssetId  背景资产ID。 > * 背景是背景图片时，填图片资产ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'backgroundType' => 'setBackgroundType',
            'backgroundTitle' => 'setBackgroundTitle',
            'humanPosition2d' => 'setHumanPosition2d',
            'humanSize2d' => 'setHumanSize2d',
            'backgroundCoverUrl' => 'setBackgroundCoverUrl',
            'backgroundConfig' => 'setBackgroundConfig',
            'backgroundAssetId' => 'setBackgroundAssetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backgroundType  背景类型。 - IMAGE：图片，用于3D数字人演示素材讲解模式的图片或分身数字背景图片 - IMAGE_2D：图片，用于3D数字人主播播报模式的2D场景背景图片 - VIDEO：视频 - AUDIO：音频 > * 分身数字人视频制作仅支持IMAGE
    * backgroundTitle  背景标题。 > * 分身数字人视频制作此参数不生效。
    * humanPosition2d  humanPosition2d
    * humanSize2d  humanSize2d
    * backgroundCoverUrl  视频文件封面图片的下载URL。  演示素材为视频时有效。 > * 分身数字人视频制作此参数不生效。
    * backgroundConfig  背景文件的URL。 > * 通过资产库查询获取，不支持外部URL。
    * backgroundAssetId  背景资产ID。 > * 背景是背景图片时，填图片资产ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'backgroundType' => 'getBackgroundType',
            'backgroundTitle' => 'getBackgroundTitle',
            'humanPosition2d' => 'getHumanPosition2d',
            'humanSize2d' => 'getHumanSize2d',
            'backgroundCoverUrl' => 'getBackgroundCoverUrl',
            'backgroundConfig' => 'getBackgroundConfig',
            'backgroundAssetId' => 'getBackgroundAssetId'
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
    const BACKGROUND_TYPE_IMAGE = 'IMAGE';
    const BACKGROUND_TYPE_IMAGE_2_D = 'IMAGE_2D';
    const BACKGROUND_TYPE_VIDEO = 'VIDEO';
    const BACKGROUND_TYPE_AUDIO = 'AUDIO';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBackgroundTypeAllowableValues()
    {
        return [
            self::BACKGROUND_TYPE_IMAGE,
            self::BACKGROUND_TYPE_IMAGE_2_D,
            self::BACKGROUND_TYPE_VIDEO,
            self::BACKGROUND_TYPE_AUDIO,
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
        $this->container['backgroundType'] = isset($data['backgroundType']) ? $data['backgroundType'] : null;
        $this->container['backgroundTitle'] = isset($data['backgroundTitle']) ? $data['backgroundTitle'] : null;
        $this->container['humanPosition2d'] = isset($data['humanPosition2d']) ? $data['humanPosition2d'] : null;
        $this->container['humanSize2d'] = isset($data['humanSize2d']) ? $data['humanSize2d'] : null;
        $this->container['backgroundCoverUrl'] = isset($data['backgroundCoverUrl']) ? $data['backgroundCoverUrl'] : null;
        $this->container['backgroundConfig'] = isset($data['backgroundConfig']) ? $data['backgroundConfig'] : null;
        $this->container['backgroundAssetId'] = isset($data['backgroundAssetId']) ? $data['backgroundAssetId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['backgroundType'] === null) {
            $invalidProperties[] = "'backgroundType' can't be null";
        }
            $allowedValues = $this->getBackgroundTypeAllowableValues();
                if (!is_null($this->container['backgroundType']) && !in_array($this->container['backgroundType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'backgroundType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['backgroundType']) > 2048)) {
                $invalidProperties[] = "invalid value for 'backgroundType', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['backgroundType']) < 1)) {
                $invalidProperties[] = "invalid value for 'backgroundType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['backgroundTitle']) && (mb_strlen($this->container['backgroundTitle']) > 256)) {
                $invalidProperties[] = "invalid value for 'backgroundTitle', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['backgroundTitle']) && (mb_strlen($this->container['backgroundTitle']) < 0)) {
                $invalidProperties[] = "invalid value for 'backgroundTitle', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backgroundCoverUrl']) && (mb_strlen($this->container['backgroundCoverUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'backgroundCoverUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['backgroundCoverUrl']) && (mb_strlen($this->container['backgroundCoverUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'backgroundCoverUrl', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['backgroundConfig'] === null) {
            $invalidProperties[] = "'backgroundConfig' can't be null";
        }
            if ((mb_strlen($this->container['backgroundConfig']) > 2048)) {
                $invalidProperties[] = "invalid value for 'backgroundConfig', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['backgroundConfig']) < 1)) {
                $invalidProperties[] = "invalid value for 'backgroundConfig', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['backgroundAssetId']) && (mb_strlen($this->container['backgroundAssetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'backgroundAssetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['backgroundAssetId']) && (mb_strlen($this->container['backgroundAssetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'backgroundAssetId', the character length must be bigger than or equal to 0.";
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
    * Gets backgroundType
    *  背景类型。 - IMAGE：图片，用于3D数字人演示素材讲解模式的图片或分身数字背景图片 - IMAGE_2D：图片，用于3D数字人主播播报模式的2D场景背景图片 - VIDEO：视频 - AUDIO：音频 > * 分身数字人视频制作仅支持IMAGE
    *
    * @return string
    */
    public function getBackgroundType()
    {
        return $this->container['backgroundType'];
    }

    /**
    * Sets backgroundType
    *
    * @param string $backgroundType 背景类型。 - IMAGE：图片，用于3D数字人演示素材讲解模式的图片或分身数字背景图片 - IMAGE_2D：图片，用于3D数字人主播播报模式的2D场景背景图片 - VIDEO：视频 - AUDIO：音频 > * 分身数字人视频制作仅支持IMAGE
    *
    * @return $this
    */
    public function setBackgroundType($backgroundType)
    {
        $this->container['backgroundType'] = $backgroundType;
        return $this;
    }

    /**
    * Gets backgroundTitle
    *  背景标题。 > * 分身数字人视频制作此参数不生效。
    *
    * @return string|null
    */
    public function getBackgroundTitle()
    {
        return $this->container['backgroundTitle'];
    }

    /**
    * Sets backgroundTitle
    *
    * @param string|null $backgroundTitle 背景标题。 > * 分身数字人视频制作此参数不生效。
    *
    * @return $this
    */
    public function setBackgroundTitle($backgroundTitle)
    {
        $this->container['backgroundTitle'] = $backgroundTitle;
        return $this;
    }

    /**
    * Gets humanPosition2d
    *  humanPosition2d
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\HumanPosition2D|null
    */
    public function getHumanPosition2d()
    {
        return $this->container['humanPosition2d'];
    }

    /**
    * Sets humanPosition2d
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\HumanPosition2D|null $humanPosition2d humanPosition2d
    *
    * @return $this
    */
    public function setHumanPosition2d($humanPosition2d)
    {
        $this->container['humanPosition2d'] = $humanPosition2d;
        return $this;
    }

    /**
    * Gets humanSize2d
    *  humanSize2d
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\HumanSize2D|null
    */
    public function getHumanSize2d()
    {
        return $this->container['humanSize2d'];
    }

    /**
    * Sets humanSize2d
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\HumanSize2D|null $humanSize2d humanSize2d
    *
    * @return $this
    */
    public function setHumanSize2d($humanSize2d)
    {
        $this->container['humanSize2d'] = $humanSize2d;
        return $this;
    }

    /**
    * Gets backgroundCoverUrl
    *  视频文件封面图片的下载URL。  演示素材为视频时有效。 > * 分身数字人视频制作此参数不生效。
    *
    * @return string|null
    */
    public function getBackgroundCoverUrl()
    {
        return $this->container['backgroundCoverUrl'];
    }

    /**
    * Sets backgroundCoverUrl
    *
    * @param string|null $backgroundCoverUrl 视频文件封面图片的下载URL。  演示素材为视频时有效。 > * 分身数字人视频制作此参数不生效。
    *
    * @return $this
    */
    public function setBackgroundCoverUrl($backgroundCoverUrl)
    {
        $this->container['backgroundCoverUrl'] = $backgroundCoverUrl;
        return $this;
    }

    /**
    * Gets backgroundConfig
    *  背景文件的URL。 > * 通过资产库查询获取，不支持外部URL。
    *
    * @return string
    */
    public function getBackgroundConfig()
    {
        return $this->container['backgroundConfig'];
    }

    /**
    * Sets backgroundConfig
    *
    * @param string $backgroundConfig 背景文件的URL。 > * 通过资产库查询获取，不支持外部URL。
    *
    * @return $this
    */
    public function setBackgroundConfig($backgroundConfig)
    {
        $this->container['backgroundConfig'] = $backgroundConfig;
        return $this;
    }

    /**
    * Gets backgroundAssetId
    *  背景资产ID。 > * 背景是背景图片时，填图片资产ID。
    *
    * @return string|null
    */
    public function getBackgroundAssetId()
    {
        return $this->container['backgroundAssetId'];
    }

    /**
    * Sets backgroundAssetId
    *
    * @param string|null $backgroundAssetId 背景资产ID。 > * 背景是背景图片时，填图片资产ID。
    *
    * @return $this
    */
    public function setBackgroundAssetId($backgroundAssetId)
    {
        $this->container['backgroundAssetId'] = $backgroundAssetId;
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


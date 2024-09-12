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
    * backgroundType  **参数解释**： 背景类型。 **约束限制**： 不涉及。 **取值范围**： * IMAGE：图片背景，指定图片用作分身数字人背景。 * COLOR：纯色背景，指定颜色RGB值作为分身数字人背景。  **默认取值**： 不涉及
    * backgroundConfig  **参数解释**： 背景文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 * background_type=IMAGE时需要填写。  **取值范围**： 字符长度1-2048位 **默认取值**： 不涉及。
    * backgroundColorConfig  **参数解释**： 纯色背景的RGB颜色值。 **约束限制**： background_type=COLOR时需要填写。 **取值范围**： 字符长度0-16位
    * backgroundAssetId  **参数解释**： 背景资产ID。 > 背景是背景图片时，填图片资产ID。  **约束限制**： 不涉及 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backgroundType' => 'string',
            'backgroundConfig' => 'string',
            'backgroundColorConfig' => 'string',
            'backgroundAssetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backgroundType  **参数解释**： 背景类型。 **约束限制**： 不涉及。 **取值范围**： * IMAGE：图片背景，指定图片用作分身数字人背景。 * COLOR：纯色背景，指定颜色RGB值作为分身数字人背景。  **默认取值**： 不涉及
    * backgroundConfig  **参数解释**： 背景文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 * background_type=IMAGE时需要填写。  **取值范围**： 字符长度1-2048位 **默认取值**： 不涉及。
    * backgroundColorConfig  **参数解释**： 纯色背景的RGB颜色值。 **约束限制**： background_type=COLOR时需要填写。 **取值范围**： 字符长度0-16位
    * backgroundAssetId  **参数解释**： 背景资产ID。 > 背景是背景图片时，填图片资产ID。  **约束限制**： 不涉及 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backgroundType' => null,
        'backgroundConfig' => null,
        'backgroundColorConfig' => null,
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
    * backgroundType  **参数解释**： 背景类型。 **约束限制**： 不涉及。 **取值范围**： * IMAGE：图片背景，指定图片用作分身数字人背景。 * COLOR：纯色背景，指定颜色RGB值作为分身数字人背景。  **默认取值**： 不涉及
    * backgroundConfig  **参数解释**： 背景文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 * background_type=IMAGE时需要填写。  **取值范围**： 字符长度1-2048位 **默认取值**： 不涉及。
    * backgroundColorConfig  **参数解释**： 纯色背景的RGB颜色值。 **约束限制**： background_type=COLOR时需要填写。 **取值范围**： 字符长度0-16位
    * backgroundAssetId  **参数解释**： 背景资产ID。 > 背景是背景图片时，填图片资产ID。  **约束限制**： 不涉及 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backgroundType' => 'background_type',
            'backgroundConfig' => 'background_config',
            'backgroundColorConfig' => 'background_color_config',
            'backgroundAssetId' => 'background_asset_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backgroundType  **参数解释**： 背景类型。 **约束限制**： 不涉及。 **取值范围**： * IMAGE：图片背景，指定图片用作分身数字人背景。 * COLOR：纯色背景，指定颜色RGB值作为分身数字人背景。  **默认取值**： 不涉及
    * backgroundConfig  **参数解释**： 背景文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 * background_type=IMAGE时需要填写。  **取值范围**： 字符长度1-2048位 **默认取值**： 不涉及。
    * backgroundColorConfig  **参数解释**： 纯色背景的RGB颜色值。 **约束限制**： background_type=COLOR时需要填写。 **取值范围**： 字符长度0-16位
    * backgroundAssetId  **参数解释**： 背景资产ID。 > 背景是背景图片时，填图片资产ID。  **约束限制**： 不涉及 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'backgroundType' => 'setBackgroundType',
            'backgroundConfig' => 'setBackgroundConfig',
            'backgroundColorConfig' => 'setBackgroundColorConfig',
            'backgroundAssetId' => 'setBackgroundAssetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backgroundType  **参数解释**： 背景类型。 **约束限制**： 不涉及。 **取值范围**： * IMAGE：图片背景，指定图片用作分身数字人背景。 * COLOR：纯色背景，指定颜色RGB值作为分身数字人背景。  **默认取值**： 不涉及
    * backgroundConfig  **参数解释**： 背景文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 * background_type=IMAGE时需要填写。  **取值范围**： 字符长度1-2048位 **默认取值**： 不涉及。
    * backgroundColorConfig  **参数解释**： 纯色背景的RGB颜色值。 **约束限制**： background_type=COLOR时需要填写。 **取值范围**： 字符长度0-16位
    * backgroundAssetId  **参数解释**： 背景资产ID。 > 背景是背景图片时，填图片资产ID。  **约束限制**： 不涉及 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'backgroundType' => 'getBackgroundType',
            'backgroundConfig' => 'getBackgroundConfig',
            'backgroundColorConfig' => 'getBackgroundColorConfig',
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
    const BACKGROUND_TYPE_COLOR = 'COLOR';
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
            self::BACKGROUND_TYPE_COLOR,
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
        $this->container['backgroundConfig'] = isset($data['backgroundConfig']) ? $data['backgroundConfig'] : null;
        $this->container['backgroundColorConfig'] = isset($data['backgroundColorConfig']) ? $data['backgroundColorConfig'] : null;
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
            if (!is_null($this->container['backgroundConfig']) && (mb_strlen($this->container['backgroundConfig']) > 2048)) {
                $invalidProperties[] = "invalid value for 'backgroundConfig', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['backgroundConfig']) && (mb_strlen($this->container['backgroundConfig']) < 1)) {
                $invalidProperties[] = "invalid value for 'backgroundConfig', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['backgroundColorConfig']) && (mb_strlen($this->container['backgroundColorConfig']) > 16)) {
                $invalidProperties[] = "invalid value for 'backgroundColorConfig', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['backgroundColorConfig']) && (mb_strlen($this->container['backgroundColorConfig']) < 0)) {
                $invalidProperties[] = "invalid value for 'backgroundColorConfig', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backgroundColorConfig']) && !preg_match("/^#[0-9A-Fa-f]{6}$/", $this->container['backgroundColorConfig'])) {
                $invalidProperties[] = "invalid value for 'backgroundColorConfig', must be conform to the pattern /^#[0-9A-Fa-f]{6}$/.";
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
    *  **参数解释**： 背景类型。 **约束限制**： 不涉及。 **取值范围**： * IMAGE：图片背景，指定图片用作分身数字人背景。 * COLOR：纯色背景，指定颜色RGB值作为分身数字人背景。  **默认取值**： 不涉及
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
    * @param string $backgroundType **参数解释**： 背景类型。 **约束限制**： 不涉及。 **取值范围**： * IMAGE：图片背景，指定图片用作分身数字人背景。 * COLOR：纯色背景，指定颜色RGB值作为分身数字人背景。  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setBackgroundType($backgroundType)
    {
        $this->container['backgroundType'] = $backgroundType;
        return $this;
    }

    /**
    * Gets backgroundConfig
    *  **参数解释**： 背景文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 * background_type=IMAGE时需要填写。  **取值范围**： 字符长度1-2048位 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getBackgroundConfig()
    {
        return $this->container['backgroundConfig'];
    }

    /**
    * Sets backgroundConfig
    *
    * @param string|null $backgroundConfig **参数解释**： 背景文件的URL。 **约束限制**： * 仅直播支持外部URL，其他业务通过资产库查询获取，不支持外部URL。 * background_type=IMAGE时需要填写。  **取值范围**： 字符长度1-2048位 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setBackgroundConfig($backgroundConfig)
    {
        $this->container['backgroundConfig'] = $backgroundConfig;
        return $this;
    }

    /**
    * Gets backgroundColorConfig
    *  **参数解释**： 纯色背景的RGB颜色值。 **约束限制**： background_type=COLOR时需要填写。 **取值范围**： 字符长度0-16位
    *
    * @return string|null
    */
    public function getBackgroundColorConfig()
    {
        return $this->container['backgroundColorConfig'];
    }

    /**
    * Sets backgroundColorConfig
    *
    * @param string|null $backgroundColorConfig **参数解释**： 纯色背景的RGB颜色值。 **约束限制**： background_type=COLOR时需要填写。 **取值范围**： 字符长度0-16位
    *
    * @return $this
    */
    public function setBackgroundColorConfig($backgroundColorConfig)
    {
        $this->container['backgroundColorConfig'] = $backgroundColorConfig;
        return $this;
    }

    /**
    * Gets backgroundAssetId
    *  **参数解释**： 背景资产ID。 > 背景是背景图片时，填图片资产ID。  **约束限制**： 不涉及 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
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
    * @param string|null $backgroundAssetId **参数解释**： 背景资产ID。 > 背景是背景图片时，填图片资产ID。  **约束限制**： 不涉及 **取值范围**： 字符长度0-64位 **默认取值**： 不涉及
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


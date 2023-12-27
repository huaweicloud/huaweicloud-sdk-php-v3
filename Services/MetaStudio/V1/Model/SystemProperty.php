<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SystemProperty implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SystemProperty';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  操作。 - ADD：增加 - DELETE：删除
    * key  系统属性。  公共资产属性： * BACKGROUND_IMG：视频制作的背景图片。value设置成Yes * CREATED_BY_PLATFORM: 是否平台生成。  分身数字人资产属性： * MATERIAL_IMG：素材图片，用作前景。value设置成Yes。 * MATERIAL_VIDEO：素材视频，用作前景。value设置成Yes。 * BUSSINESS_CARD_VIDEO：名片视频。 * TO_BE_TRANSLATED_VIDEO: 视频翻译的源视频。可取值Yes。  3D数字人资产属性： * STYLE_ID：风格Id。 * DH_ID：数字人ID(尚未启用)。 * PLATFORM_AVAILABLE：是否平台可用(尚未启用)。 * RENDER_ENGINE：引擎类型。value可选UE或MetaEngine。 * BACKGROUND_SCENE：视频制作的2D背景场景。value可选Horizontal（横屏）或者Vertical（竖屏）。
    * value  属性值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'key' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  操作。 - ADD：增加 - DELETE：删除
    * key  系统属性。  公共资产属性： * BACKGROUND_IMG：视频制作的背景图片。value设置成Yes * CREATED_BY_PLATFORM: 是否平台生成。  分身数字人资产属性： * MATERIAL_IMG：素材图片，用作前景。value设置成Yes。 * MATERIAL_VIDEO：素材视频，用作前景。value设置成Yes。 * BUSSINESS_CARD_VIDEO：名片视频。 * TO_BE_TRANSLATED_VIDEO: 视频翻译的源视频。可取值Yes。  3D数字人资产属性： * STYLE_ID：风格Id。 * DH_ID：数字人ID(尚未启用)。 * PLATFORM_AVAILABLE：是否平台可用(尚未启用)。 * RENDER_ENGINE：引擎类型。value可选UE或MetaEngine。 * BACKGROUND_SCENE：视频制作的2D背景场景。value可选Horizontal（横屏）或者Vertical（竖屏）。
    * value  属性值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'key' => null,
        'value' => null
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
    * action  操作。 - ADD：增加 - DELETE：删除
    * key  系统属性。  公共资产属性： * BACKGROUND_IMG：视频制作的背景图片。value设置成Yes * CREATED_BY_PLATFORM: 是否平台生成。  分身数字人资产属性： * MATERIAL_IMG：素材图片，用作前景。value设置成Yes。 * MATERIAL_VIDEO：素材视频，用作前景。value设置成Yes。 * BUSSINESS_CARD_VIDEO：名片视频。 * TO_BE_TRANSLATED_VIDEO: 视频翻译的源视频。可取值Yes。  3D数字人资产属性： * STYLE_ID：风格Id。 * DH_ID：数字人ID(尚未启用)。 * PLATFORM_AVAILABLE：是否平台可用(尚未启用)。 * RENDER_ENGINE：引擎类型。value可选UE或MetaEngine。 * BACKGROUND_SCENE：视频制作的2D背景场景。value可选Horizontal（横屏）或者Vertical（竖屏）。
    * value  属性值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'key' => 'key',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  操作。 - ADD：增加 - DELETE：删除
    * key  系统属性。  公共资产属性： * BACKGROUND_IMG：视频制作的背景图片。value设置成Yes * CREATED_BY_PLATFORM: 是否平台生成。  分身数字人资产属性： * MATERIAL_IMG：素材图片，用作前景。value设置成Yes。 * MATERIAL_VIDEO：素材视频，用作前景。value设置成Yes。 * BUSSINESS_CARD_VIDEO：名片视频。 * TO_BE_TRANSLATED_VIDEO: 视频翻译的源视频。可取值Yes。  3D数字人资产属性： * STYLE_ID：风格Id。 * DH_ID：数字人ID(尚未启用)。 * PLATFORM_AVAILABLE：是否平台可用(尚未启用)。 * RENDER_ENGINE：引擎类型。value可选UE或MetaEngine。 * BACKGROUND_SCENE：视频制作的2D背景场景。value可选Horizontal（横屏）或者Vertical（竖屏）。
    * value  属性值。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'key' => 'setKey',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  操作。 - ADD：增加 - DELETE：删除
    * key  系统属性。  公共资产属性： * BACKGROUND_IMG：视频制作的背景图片。value设置成Yes * CREATED_BY_PLATFORM: 是否平台生成。  分身数字人资产属性： * MATERIAL_IMG：素材图片，用作前景。value设置成Yes。 * MATERIAL_VIDEO：素材视频，用作前景。value设置成Yes。 * BUSSINESS_CARD_VIDEO：名片视频。 * TO_BE_TRANSLATED_VIDEO: 视频翻译的源视频。可取值Yes。  3D数字人资产属性： * STYLE_ID：风格Id。 * DH_ID：数字人ID(尚未启用)。 * PLATFORM_AVAILABLE：是否平台可用(尚未启用)。 * RENDER_ENGINE：引擎类型。value可选UE或MetaEngine。 * BACKGROUND_SCENE：视频制作的2D背景场景。value可选Horizontal（横屏）或者Vertical（竖屏）。
    * value  属性值。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'key' => 'getKey',
            'value' => 'getValue'
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
    const ACTION_ADD = 'ADD';
    const ACTION_DELETE = 'DELETE';
    const KEY_STYLE_ID = 'STYLE_ID';
    const KEY_DH_ID = 'DH_ID';
    const KEY_PLATFORM_AVAILABLE = 'PLATFORM_AVAILABLE';
    const KEY_RENDER_ENGINE = 'RENDER_ENGINE';
    const KEY_BACKGROUND_IMG = 'BACKGROUND_IMG';
    const KEY_BACKGROUND_SCENE = 'BACKGROUND_SCENE';
    const KEY_CREATED_BY_PLATFORM = 'CREATED_BY_PLATFORM';
    const KEY_MATERIAL_IMG = 'MATERIAL_IMG';
    const KEY_MATERIAL_VIDEO = 'MATERIAL_VIDEO';
    const KEY_BUSSINESS_CARD_VIDEO = 'BUSSINESS_CARD_VIDEO';
    const KEY_TO_BE_TRANSLATED_VIDEO = 'TO_BE_TRANSLATED_VIDEO';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_ADD,
            self::ACTION_DELETE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeyAllowableValues()
    {
        return [
            self::KEY_STYLE_ID,
            self::KEY_DH_ID,
            self::KEY_PLATFORM_AVAILABLE,
            self::KEY_RENDER_ENGINE,
            self::KEY_BACKGROUND_IMG,
            self::KEY_BACKGROUND_SCENE,
            self::KEY_CREATED_BY_PLATFORM,
            self::KEY_MATERIAL_IMG,
            self::KEY_MATERIAL_VIDEO,
            self::KEY_BUSSINESS_CARD_VIDEO,
            self::KEY_TO_BE_TRANSLATED_VIDEO,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getKeyAllowableValues();
                if (!is_null($this->container['key']) && !in_array($this->container['key'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'key', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 256)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 1024)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 1)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
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
    * Gets action
    *  操作。 - ADD：增加 - DELETE：删除
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 操作。 - ADD：增加 - DELETE：删除
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets key
    *  系统属性。  公共资产属性： * BACKGROUND_IMG：视频制作的背景图片。value设置成Yes * CREATED_BY_PLATFORM: 是否平台生成。  分身数字人资产属性： * MATERIAL_IMG：素材图片，用作前景。value设置成Yes。 * MATERIAL_VIDEO：素材视频，用作前景。value设置成Yes。 * BUSSINESS_CARD_VIDEO：名片视频。 * TO_BE_TRANSLATED_VIDEO: 视频翻译的源视频。可取值Yes。  3D数字人资产属性： * STYLE_ID：风格Id。 * DH_ID：数字人ID(尚未启用)。 * PLATFORM_AVAILABLE：是否平台可用(尚未启用)。 * RENDER_ENGINE：引擎类型。value可选UE或MetaEngine。 * BACKGROUND_SCENE：视频制作的2D背景场景。value可选Horizontal（横屏）或者Vertical（竖屏）。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 系统属性。  公共资产属性： * BACKGROUND_IMG：视频制作的背景图片。value设置成Yes * CREATED_BY_PLATFORM: 是否平台生成。  分身数字人资产属性： * MATERIAL_IMG：素材图片，用作前景。value设置成Yes。 * MATERIAL_VIDEO：素材视频，用作前景。value设置成Yes。 * BUSSINESS_CARD_VIDEO：名片视频。 * TO_BE_TRANSLATED_VIDEO: 视频翻译的源视频。可取值Yes。  3D数字人资产属性： * STYLE_ID：风格Id。 * DH_ID：数字人ID(尚未启用)。 * PLATFORM_AVAILABLE：是否平台可用(尚未启用)。 * RENDER_ENGINE：引擎类型。value可选UE或MetaEngine。 * BACKGROUND_SCENE：视频制作的2D背景场景。value可选Horizontal（横屏）或者Vertical（竖屏）。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  属性值。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 属性值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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


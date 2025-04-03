<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubtitleConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubtitleConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dx  **参数解释**： 字幕框左下角像素点坐标。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * dy  **参数解释**： 字幕框左下角像素点坐标。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * h  **参数解释**： 字幕框高度。 **约束限制**： 参数h用于方便前端计算字幕框左上角坐标，后台不使用该参数。
    * w  **参数解释**： 字幕框宽度。 **约束限制**： * 字幕框宽度固定为屏幕宽度的80% * 参数w用于方便前端计算字幕框左上角坐标，后台不使用该参数
    * fontName  **参数解释**： 字体。当前支持的字体请参考[服务支持的字体](metastudio_02_0041.xml) **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位
    * fontSize  **参数解释**： 字体大小。接口的取值范围为0-120，实际业务使用的取值范围要求为24-120，请以业务实际使用要求为准。 **约束限制**： 不涉及。
    * fontColor  **参数解释**： 字幕字体颜色的RGB颜色值。 **约束限制**： 无 **取值范围**： 字符长度0-7位，固定长度
    * strokeColor  **参数解释**： 字幕字体描边颜色的RGB颜色值。 **约束限制**： 无 **取值范围**： 字符长度0-7位，固定长度
    * strokeThickness  **参数解释**： 字幕字体描边粗细像素值。 **约束限制**： 无 **取值范围**： 0-50
    * opacity  **参数解释**： 字幕字体不透明度，0表示完全透明，1表示完全不透明。默认1。 **约束限制**： 无 **取值范围**： 0-1
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dx' => 'int',
            'dy' => 'int',
            'h' => 'int',
            'w' => 'int',
            'fontName' => 'string',
            'fontSize' => 'int',
            'fontColor' => 'string',
            'strokeColor' => 'string',
            'strokeThickness' => 'float',
            'opacity' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dx  **参数解释**： 字幕框左下角像素点坐标。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * dy  **参数解释**： 字幕框左下角像素点坐标。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * h  **参数解释**： 字幕框高度。 **约束限制**： 参数h用于方便前端计算字幕框左上角坐标，后台不使用该参数。
    * w  **参数解释**： 字幕框宽度。 **约束限制**： * 字幕框宽度固定为屏幕宽度的80% * 参数w用于方便前端计算字幕框左上角坐标，后台不使用该参数
    * fontName  **参数解释**： 字体。当前支持的字体请参考[服务支持的字体](metastudio_02_0041.xml) **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位
    * fontSize  **参数解释**： 字体大小。接口的取值范围为0-120，实际业务使用的取值范围要求为24-120，请以业务实际使用要求为准。 **约束限制**： 不涉及。
    * fontColor  **参数解释**： 字幕字体颜色的RGB颜色值。 **约束限制**： 无 **取值范围**： 字符长度0-7位，固定长度
    * strokeColor  **参数解释**： 字幕字体描边颜色的RGB颜色值。 **约束限制**： 无 **取值范围**： 字符长度0-7位，固定长度
    * strokeThickness  **参数解释**： 字幕字体描边粗细像素值。 **约束限制**： 无 **取值范围**： 0-50
    * opacity  **参数解释**： 字幕字体不透明度，0表示完全透明，1表示完全不透明。默认1。 **约束限制**： 无 **取值范围**： 0-1
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dx' => 'int32',
        'dy' => 'int32',
        'h' => 'int32',
        'w' => 'int32',
        'fontName' => null,
        'fontSize' => 'int32',
        'fontColor' => null,
        'strokeColor' => null,
        'strokeThickness' => 'float',
        'opacity' => 'float'
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
    * dx  **参数解释**： 字幕框左下角像素点坐标。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * dy  **参数解释**： 字幕框左下角像素点坐标。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * h  **参数解释**： 字幕框高度。 **约束限制**： 参数h用于方便前端计算字幕框左上角坐标，后台不使用该参数。
    * w  **参数解释**： 字幕框宽度。 **约束限制**： * 字幕框宽度固定为屏幕宽度的80% * 参数w用于方便前端计算字幕框左上角坐标，后台不使用该参数
    * fontName  **参数解释**： 字体。当前支持的字体请参考[服务支持的字体](metastudio_02_0041.xml) **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位
    * fontSize  **参数解释**： 字体大小。接口的取值范围为0-120，实际业务使用的取值范围要求为24-120，请以业务实际使用要求为准。 **约束限制**： 不涉及。
    * fontColor  **参数解释**： 字幕字体颜色的RGB颜色值。 **约束限制**： 无 **取值范围**： 字符长度0-7位，固定长度
    * strokeColor  **参数解释**： 字幕字体描边颜色的RGB颜色值。 **约束限制**： 无 **取值范围**： 字符长度0-7位，固定长度
    * strokeThickness  **参数解释**： 字幕字体描边粗细像素值。 **约束限制**： 无 **取值范围**： 0-50
    * opacity  **参数解释**： 字幕字体不透明度，0表示完全透明，1表示完全不透明。默认1。 **约束限制**： 无 **取值范围**： 0-1
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dx' => 'dx',
            'dy' => 'dy',
            'h' => 'h',
            'w' => 'w',
            'fontName' => 'font_name',
            'fontSize' => 'font_size',
            'fontColor' => 'font_color',
            'strokeColor' => 'stroke_color',
            'strokeThickness' => 'stroke_thickness',
            'opacity' => 'opacity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dx  **参数解释**： 字幕框左下角像素点坐标。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * dy  **参数解释**： 字幕框左下角像素点坐标。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * h  **参数解释**： 字幕框高度。 **约束限制**： 参数h用于方便前端计算字幕框左上角坐标，后台不使用该参数。
    * w  **参数解释**： 字幕框宽度。 **约束限制**： * 字幕框宽度固定为屏幕宽度的80% * 参数w用于方便前端计算字幕框左上角坐标，后台不使用该参数
    * fontName  **参数解释**： 字体。当前支持的字体请参考[服务支持的字体](metastudio_02_0041.xml) **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位
    * fontSize  **参数解释**： 字体大小。接口的取值范围为0-120，实际业务使用的取值范围要求为24-120，请以业务实际使用要求为准。 **约束限制**： 不涉及。
    * fontColor  **参数解释**： 字幕字体颜色的RGB颜色值。 **约束限制**： 无 **取值范围**： 字符长度0-7位，固定长度
    * strokeColor  **参数解释**： 字幕字体描边颜色的RGB颜色值。 **约束限制**： 无 **取值范围**： 字符长度0-7位，固定长度
    * strokeThickness  **参数解释**： 字幕字体描边粗细像素值。 **约束限制**： 无 **取值范围**： 0-50
    * opacity  **参数解释**： 字幕字体不透明度，0表示完全透明，1表示完全不透明。默认1。 **约束限制**： 无 **取值范围**： 0-1
    *
    * @var string[]
    */
    protected static $setters = [
            'dx' => 'setDx',
            'dy' => 'setDy',
            'h' => 'setH',
            'w' => 'setW',
            'fontName' => 'setFontName',
            'fontSize' => 'setFontSize',
            'fontColor' => 'setFontColor',
            'strokeColor' => 'setStrokeColor',
            'strokeThickness' => 'setStrokeThickness',
            'opacity' => 'setOpacity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dx  **参数解释**： 字幕框左下角像素点坐标。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * dy  **参数解释**： 字幕框左下角像素点坐标。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * h  **参数解释**： 字幕框高度。 **约束限制**： 参数h用于方便前端计算字幕框左上角坐标，后台不使用该参数。
    * w  **参数解释**： 字幕框宽度。 **约束限制**： * 字幕框宽度固定为屏幕宽度的80% * 参数w用于方便前端计算字幕框左上角坐标，后台不使用该参数
    * fontName  **参数解释**： 字体。当前支持的字体请参考[服务支持的字体](metastudio_02_0041.xml) **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位
    * fontSize  **参数解释**： 字体大小。接口的取值范围为0-120，实际业务使用的取值范围要求为24-120，请以业务实际使用要求为准。 **约束限制**： 不涉及。
    * fontColor  **参数解释**： 字幕字体颜色的RGB颜色值。 **约束限制**： 无 **取值范围**： 字符长度0-7位，固定长度
    * strokeColor  **参数解释**： 字幕字体描边颜色的RGB颜色值。 **约束限制**： 无 **取值范围**： 字符长度0-7位，固定长度
    * strokeThickness  **参数解释**： 字幕字体描边粗细像素值。 **约束限制**： 无 **取值范围**： 0-50
    * opacity  **参数解释**： 字幕字体不透明度，0表示完全透明，1表示完全不透明。默认1。 **约束限制**： 无 **取值范围**： 0-1
    *
    * @var string[]
    */
    protected static $getters = [
            'dx' => 'getDx',
            'dy' => 'getDy',
            'h' => 'getH',
            'w' => 'getW',
            'fontName' => 'getFontName',
            'fontSize' => 'getFontSize',
            'fontColor' => 'getFontColor',
            'strokeColor' => 'getStrokeColor',
            'strokeThickness' => 'getStrokeThickness',
            'opacity' => 'getOpacity'
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
        $this->container['dx'] = isset($data['dx']) ? $data['dx'] : null;
        $this->container['dy'] = isset($data['dy']) ? $data['dy'] : null;
        $this->container['h'] = isset($data['h']) ? $data['h'] : null;
        $this->container['w'] = isset($data['w']) ? $data['w'] : null;
        $this->container['fontName'] = isset($data['fontName']) ? $data['fontName'] : null;
        $this->container['fontSize'] = isset($data['fontSize']) ? $data['fontSize'] : null;
        $this->container['fontColor'] = isset($data['fontColor']) ? $data['fontColor'] : null;
        $this->container['strokeColor'] = isset($data['strokeColor']) ? $data['strokeColor'] : null;
        $this->container['strokeThickness'] = isset($data['strokeThickness']) ? $data['strokeThickness'] : null;
        $this->container['opacity'] = isset($data['opacity']) ? $data['opacity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dx']) && ($this->container['dx'] > 1920)) {
                $invalidProperties[] = "invalid value for 'dx', must be smaller than or equal to 1920.";
            }
            if (!is_null($this->container['dx']) && ($this->container['dx'] < 0)) {
                $invalidProperties[] = "invalid value for 'dx', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dy']) && ($this->container['dy'] > 1920)) {
                $invalidProperties[] = "invalid value for 'dy', must be smaller than or equal to 1920.";
            }
            if (!is_null($this->container['dy']) && ($this->container['dy'] < 0)) {
                $invalidProperties[] = "invalid value for 'dy', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['h']) && ($this->container['h'] > 1920)) {
                $invalidProperties[] = "invalid value for 'h', must be smaller than or equal to 1920.";
            }
            if (!is_null($this->container['h']) && ($this->container['h'] < 0)) {
                $invalidProperties[] = "invalid value for 'h', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['w']) && ($this->container['w'] > 1920)) {
                $invalidProperties[] = "invalid value for 'w', must be smaller than or equal to 1920.";
            }
            if (!is_null($this->container['w']) && ($this->container['w'] < 0)) {
                $invalidProperties[] = "invalid value for 'w', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fontName']) && (mb_strlen($this->container['fontName']) > 64)) {
                $invalidProperties[] = "invalid value for 'fontName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fontName']) && (mb_strlen($this->container['fontName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fontName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fontSize']) && ($this->container['fontSize'] > 120)) {
                $invalidProperties[] = "invalid value for 'fontSize', must be smaller than or equal to 120.";
            }
            if (!is_null($this->container['fontSize']) && ($this->container['fontSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'fontSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fontColor']) && (mb_strlen($this->container['fontColor']) > 16)) {
                $invalidProperties[] = "invalid value for 'fontColor', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['fontColor']) && (mb_strlen($this->container['fontColor']) < 0)) {
                $invalidProperties[] = "invalid value for 'fontColor', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fontColor']) && !preg_match("/^#[0-9A-Fa-f]{6}$/", $this->container['fontColor'])) {
                $invalidProperties[] = "invalid value for 'fontColor', must be conform to the pattern /^#[0-9A-Fa-f]{6}$/.";
            }
            if (!is_null($this->container['strokeColor']) && !preg_match("/^#[0-9A-Fa-f]{6}$/", $this->container['strokeColor'])) {
                $invalidProperties[] = "invalid value for 'strokeColor', must be conform to the pattern /^#[0-9A-Fa-f]{6}$/.";
            }
            if (!is_null($this->container['strokeThickness']) && ($this->container['strokeThickness'] > 5E+1)) {
                $invalidProperties[] = "invalid value for 'strokeThickness', must be smaller than or equal to 5E+1.";
            }
            if (!is_null($this->container['strokeThickness']) && ($this->container['strokeThickness'] < 0)) {
                $invalidProperties[] = "invalid value for 'strokeThickness', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['opacity']) && ($this->container['opacity'] > 1)) {
                $invalidProperties[] = "invalid value for 'opacity', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['opacity']) && ($this->container['opacity'] < 0)) {
                $invalidProperties[] = "invalid value for 'opacity', must be bigger than or equal to 0.";
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
    * Gets dx
    *  **参数解释**： 字幕框左下角像素点坐标。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getDx()
    {
        return $this->container['dx'];
    }

    /**
    * Sets dx
    *
    * @param int|null $dx **参数解释**： 字幕框左下角像素点坐标。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDx($dx)
    {
        $this->container['dx'] = $dx;
        return $this;
    }

    /**
    * Gets dy
    *  **参数解释**： 字幕框左下角像素点坐标。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getDy()
    {
        return $this->container['dy'];
    }

    /**
    * Sets dy
    *
    * @param int|null $dy **参数解释**： 字幕框左下角像素点坐标。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDy($dy)
    {
        $this->container['dy'] = $dy;
        return $this;
    }

    /**
    * Gets h
    *  **参数解释**： 字幕框高度。 **约束限制**： 参数h用于方便前端计算字幕框左上角坐标，后台不使用该参数。
    *
    * @return int|null
    */
    public function getH()
    {
        return $this->container['h'];
    }

    /**
    * Sets h
    *
    * @param int|null $h **参数解释**： 字幕框高度。 **约束限制**： 参数h用于方便前端计算字幕框左上角坐标，后台不使用该参数。
    *
    * @return $this
    */
    public function setH($h)
    {
        $this->container['h'] = $h;
        return $this;
    }

    /**
    * Gets w
    *  **参数解释**： 字幕框宽度。 **约束限制**： * 字幕框宽度固定为屏幕宽度的80% * 参数w用于方便前端计算字幕框左上角坐标，后台不使用该参数
    *
    * @return int|null
    */
    public function getW()
    {
        return $this->container['w'];
    }

    /**
    * Sets w
    *
    * @param int|null $w **参数解释**： 字幕框宽度。 **约束限制**： * 字幕框宽度固定为屏幕宽度的80% * 参数w用于方便前端计算字幕框左上角坐标，后台不使用该参数
    *
    * @return $this
    */
    public function setW($w)
    {
        $this->container['w'] = $w;
        return $this;
    }

    /**
    * Gets fontName
    *  **参数解释**： 字体。当前支持的字体请参考[服务支持的字体](metastudio_02_0041.xml) **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位
    *
    * @return string|null
    */
    public function getFontName()
    {
        return $this->container['fontName'];
    }

    /**
    * Sets fontName
    *
    * @param string|null $fontName **参数解释**： 字体。当前支持的字体请参考[服务支持的字体](metastudio_02_0041.xml) **约束限制**： 不涉及。 **取值范围**： 字符长度0-64位
    *
    * @return $this
    */
    public function setFontName($fontName)
    {
        $this->container['fontName'] = $fontName;
        return $this;
    }

    /**
    * Gets fontSize
    *  **参数解释**： 字体大小。接口的取值范围为0-120，实际业务使用的取值范围要求为24-120，请以业务实际使用要求为准。 **约束限制**： 不涉及。
    *
    * @return int|null
    */
    public function getFontSize()
    {
        return $this->container['fontSize'];
    }

    /**
    * Sets fontSize
    *
    * @param int|null $fontSize **参数解释**： 字体大小。接口的取值范围为0-120，实际业务使用的取值范围要求为24-120，请以业务实际使用要求为准。 **约束限制**： 不涉及。
    *
    * @return $this
    */
    public function setFontSize($fontSize)
    {
        $this->container['fontSize'] = $fontSize;
        return $this;
    }

    /**
    * Gets fontColor
    *  **参数解释**： 字幕字体颜色的RGB颜色值。 **约束限制**： 无 **取值范围**： 字符长度0-7位，固定长度
    *
    * @return string|null
    */
    public function getFontColor()
    {
        return $this->container['fontColor'];
    }

    /**
    * Sets fontColor
    *
    * @param string|null $fontColor **参数解释**： 字幕字体颜色的RGB颜色值。 **约束限制**： 无 **取值范围**： 字符长度0-7位，固定长度
    *
    * @return $this
    */
    public function setFontColor($fontColor)
    {
        $this->container['fontColor'] = $fontColor;
        return $this;
    }

    /**
    * Gets strokeColor
    *  **参数解释**： 字幕字体描边颜色的RGB颜色值。 **约束限制**： 无 **取值范围**： 字符长度0-7位，固定长度
    *
    * @return string|null
    */
    public function getStrokeColor()
    {
        return $this->container['strokeColor'];
    }

    /**
    * Sets strokeColor
    *
    * @param string|null $strokeColor **参数解释**： 字幕字体描边颜色的RGB颜色值。 **约束限制**： 无 **取值范围**： 字符长度0-7位，固定长度
    *
    * @return $this
    */
    public function setStrokeColor($strokeColor)
    {
        $this->container['strokeColor'] = $strokeColor;
        return $this;
    }

    /**
    * Gets strokeThickness
    *  **参数解释**： 字幕字体描边粗细像素值。 **约束限制**： 无 **取值范围**： 0-50
    *
    * @return float|null
    */
    public function getStrokeThickness()
    {
        return $this->container['strokeThickness'];
    }

    /**
    * Sets strokeThickness
    *
    * @param float|null $strokeThickness **参数解释**： 字幕字体描边粗细像素值。 **约束限制**： 无 **取值范围**： 0-50
    *
    * @return $this
    */
    public function setStrokeThickness($strokeThickness)
    {
        $this->container['strokeThickness'] = $strokeThickness;
        return $this;
    }

    /**
    * Gets opacity
    *  **参数解释**： 字幕字体不透明度，0表示完全透明，1表示完全不透明。默认1。 **约束限制**： 无 **取值范围**： 0-1
    *
    * @return float|null
    */
    public function getOpacity()
    {
        return $this->container['opacity'];
    }

    /**
    * Sets opacity
    *
    * @param float|null $opacity **参数解释**： 字幕字体不透明度，0表示完全透明，1表示完全不透明。默认1。 **约束限制**： 无 **取值范围**： 0-1
    *
    * @return $this
    */
    public function setOpacity($opacity)
    {
        $this->container['opacity'] = $opacity;
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


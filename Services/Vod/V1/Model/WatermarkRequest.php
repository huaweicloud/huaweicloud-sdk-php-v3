<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WatermarkRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WatermarkRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  水印模板ID
    * input  input
    * imageWatermark  imageWatermark
    * textContext  文字水印内容，内容需做Base64编码，若类型为文字水印 (type字段为Text)，则此配置项不能为空
    * textWatermark  textWatermark
    * svgContext  svg水印的内容
    * svgWatermark  svgWatermark
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'input' => '\HuaweiCloud\SDK\Vod\V1\Model\ObsInfo',
            'imageWatermark' => '\HuaweiCloud\SDK\Vod\V1\Model\ImageWatermark',
            'textContext' => 'string',
            'textWatermark' => '\HuaweiCloud\SDK\Vod\V1\Model\TextWatermark',
            'svgContext' => 'string',
            'svgWatermark' => '\HuaweiCloud\SDK\Vod\V1\Model\SVGWatermark'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  水印模板ID
    * input  input
    * imageWatermark  imageWatermark
    * textContext  文字水印内容，内容需做Base64编码，若类型为文字水印 (type字段为Text)，则此配置项不能为空
    * textWatermark  textWatermark
    * svgContext  svg水印的内容
    * svgWatermark  svgWatermark
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'input' => null,
        'imageWatermark' => null,
        'textContext' => null,
        'textWatermark' => null,
        'svgContext' => null,
        'svgWatermark' => null
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
    * templateId  水印模板ID
    * input  input
    * imageWatermark  imageWatermark
    * textContext  文字水印内容，内容需做Base64编码，若类型为文字水印 (type字段为Text)，则此配置项不能为空
    * textWatermark  textWatermark
    * svgContext  svg水印的内容
    * svgWatermark  svgWatermark
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'input' => 'input',
            'imageWatermark' => 'image_watermark',
            'textContext' => 'text_context',
            'textWatermark' => 'text_watermark',
            'svgContext' => 'svg_context',
            'svgWatermark' => 'svg_watermark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  水印模板ID
    * input  input
    * imageWatermark  imageWatermark
    * textContext  文字水印内容，内容需做Base64编码，若类型为文字水印 (type字段为Text)，则此配置项不能为空
    * textWatermark  textWatermark
    * svgContext  svg水印的内容
    * svgWatermark  svgWatermark
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'input' => 'setInput',
            'imageWatermark' => 'setImageWatermark',
            'textContext' => 'setTextContext',
            'textWatermark' => 'setTextWatermark',
            'svgContext' => 'setSvgContext',
            'svgWatermark' => 'setSvgWatermark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  水印模板ID
    * input  input
    * imageWatermark  imageWatermark
    * textContext  文字水印内容，内容需做Base64编码，若类型为文字水印 (type字段为Text)，则此配置项不能为空
    * textWatermark  textWatermark
    * svgContext  svg水印的内容
    * svgWatermark  svgWatermark
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'input' => 'getInput',
            'imageWatermark' => 'getImageWatermark',
            'textContext' => 'getTextContext',
            'textWatermark' => 'getTextWatermark',
            'svgContext' => 'getSvgContext',
            'svgWatermark' => 'getSvgWatermark'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['imageWatermark'] = isset($data['imageWatermark']) ? $data['imageWatermark'] : null;
        $this->container['textContext'] = isset($data['textContext']) ? $data['textContext'] : null;
        $this->container['textWatermark'] = isset($data['textWatermark']) ? $data['textWatermark'] : null;
        $this->container['svgContext'] = isset($data['svgContext']) ? $data['svgContext'] : null;
        $this->container['svgWatermark'] = isset($data['svgWatermark']) ? $data['svgWatermark'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) > 128)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['textContext']) && (mb_strlen($this->container['textContext']) > 1024)) {
                $invalidProperties[] = "invalid value for 'textContext', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['textContext']) && (mb_strlen($this->container['textContext']) < 0)) {
                $invalidProperties[] = "invalid value for 'textContext', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['svgContext']) && (mb_strlen($this->container['svgContext']) > 2000000)) {
                $invalidProperties[] = "invalid value for 'svgContext', the character length must be smaller than or equal to 2000000.";
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
    * Gets templateId
    *  水印模板ID
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 水印模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets input
    *  input
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo|null $input input
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets imageWatermark
    *  imageWatermark
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ImageWatermark|null
    */
    public function getImageWatermark()
    {
        return $this->container['imageWatermark'];
    }

    /**
    * Sets imageWatermark
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ImageWatermark|null $imageWatermark imageWatermark
    *
    * @return $this
    */
    public function setImageWatermark($imageWatermark)
    {
        $this->container['imageWatermark'] = $imageWatermark;
        return $this;
    }

    /**
    * Gets textContext
    *  文字水印内容，内容需做Base64编码，若类型为文字水印 (type字段为Text)，则此配置项不能为空
    *
    * @return string|null
    */
    public function getTextContext()
    {
        return $this->container['textContext'];
    }

    /**
    * Sets textContext
    *
    * @param string|null $textContext 文字水印内容，内容需做Base64编码，若类型为文字水印 (type字段为Text)，则此配置项不能为空
    *
    * @return $this
    */
    public function setTextContext($textContext)
    {
        $this->container['textContext'] = $textContext;
        return $this;
    }

    /**
    * Gets textWatermark
    *  textWatermark
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\TextWatermark|null
    */
    public function getTextWatermark()
    {
        return $this->container['textWatermark'];
    }

    /**
    * Sets textWatermark
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\TextWatermark|null $textWatermark textWatermark
    *
    * @return $this
    */
    public function setTextWatermark($textWatermark)
    {
        $this->container['textWatermark'] = $textWatermark;
        return $this;
    }

    /**
    * Gets svgContext
    *  svg水印的内容
    *
    * @return string|null
    */
    public function getSvgContext()
    {
        return $this->container['svgContext'];
    }

    /**
    * Sets svgContext
    *
    * @param string|null $svgContext svg水印的内容
    *
    * @return $this
    */
    public function setSvgContext($svgContext)
    {
        $this->container['svgContext'] = $svgContext;
        return $this;
    }

    /**
    * Gets svgWatermark
    *  svgWatermark
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\SVGWatermark|null
    */
    public function getSvgWatermark()
    {
        return $this->container['svgWatermark'];
    }

    /**
    * Sets svgWatermark
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\SVGWatermark|null $svgWatermark svgWatermark
    *
    * @return $this
    */
    public function setSvgWatermark($svgWatermark)
    {
        $this->container['svgWatermark'] = $svgWatermark;
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


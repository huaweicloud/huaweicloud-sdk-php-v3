<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

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
    * input  input
    * templateId  水印模板。可通过新建水印模板接口创建水印模板。
    * textContext  文字水印内容，内容需做Base64编码，若类型为文字水印 (type字段为Text)，则此配置项不能为空  示例：若想添加文字水印“测试文字水印”，那么Content的值为：5rWL6K+V5paH5a2X5rC05Y2w
    * imageWatermark  imageWatermark
    * textWatermark  textWatermark
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'input' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'templateId' => 'string',
            'textContext' => 'string',
            'imageWatermark' => '\HuaweiCloud\SDK\Mpc\V1\Model\ImageWatermark',
            'textWatermark' => '\HuaweiCloud\SDK\Mpc\V1\Model\TextWatermark'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * input  input
    * templateId  水印模板。可通过新建水印模板接口创建水印模板。
    * textContext  文字水印内容，内容需做Base64编码，若类型为文字水印 (type字段为Text)，则此配置项不能为空  示例：若想添加文字水印“测试文字水印”，那么Content的值为：5rWL6K+V5paH5a2X5rC05Y2w
    * imageWatermark  imageWatermark
    * textWatermark  textWatermark
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'input' => null,
        'templateId' => null,
        'textContext' => null,
        'imageWatermark' => null,
        'textWatermark' => null
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
    * input  input
    * templateId  水印模板。可通过新建水印模板接口创建水印模板。
    * textContext  文字水印内容，内容需做Base64编码，若类型为文字水印 (type字段为Text)，则此配置项不能为空  示例：若想添加文字水印“测试文字水印”，那么Content的值为：5rWL6K+V5paH5a2X5rC05Y2w
    * imageWatermark  imageWatermark
    * textWatermark  textWatermark
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'input' => 'input',
            'templateId' => 'template_id',
            'textContext' => 'text_context',
            'imageWatermark' => 'image_watermark',
            'textWatermark' => 'text_watermark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * input  input
    * templateId  水印模板。可通过新建水印模板接口创建水印模板。
    * textContext  文字水印内容，内容需做Base64编码，若类型为文字水印 (type字段为Text)，则此配置项不能为空  示例：若想添加文字水印“测试文字水印”，那么Content的值为：5rWL6K+V5paH5a2X5rC05Y2w
    * imageWatermark  imageWatermark
    * textWatermark  textWatermark
    *
    * @var string[]
    */
    protected static $setters = [
            'input' => 'setInput',
            'templateId' => 'setTemplateId',
            'textContext' => 'setTextContext',
            'imageWatermark' => 'setImageWatermark',
            'textWatermark' => 'setTextWatermark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * input  input
    * templateId  水印模板。可通过新建水印模板接口创建水印模板。
    * textContext  文字水印内容，内容需做Base64编码，若类型为文字水印 (type字段为Text)，则此配置项不能为空  示例：若想添加文字水印“测试文字水印”，那么Content的值为：5rWL6K+V5paH5a2X5rC05Y2w
    * imageWatermark  imageWatermark
    * textWatermark  textWatermark
    *
    * @var string[]
    */
    protected static $getters = [
            'input' => 'getInput',
            'templateId' => 'getTemplateId',
            'textContext' => 'getTextContext',
            'imageWatermark' => 'getImageWatermark',
            'textWatermark' => 'getTextWatermark'
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
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['textContext'] = isset($data['textContext']) ? $data['textContext'] : null;
        $this->container['imageWatermark'] = isset($data['imageWatermark']) ? $data['imageWatermark'] : null;
        $this->container['textWatermark'] = isset($data['textWatermark']) ? $data['textWatermark'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) > 16)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 16.";
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
    * Gets input
    *  input
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null $input input
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets templateId
    *  水印模板。可通过新建水印模板接口创建水印模板。
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
    * @param string|null $templateId 水印模板。可通过新建水印模板接口创建水印模板。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets textContext
    *  文字水印内容，内容需做Base64编码，若类型为文字水印 (type字段为Text)，则此配置项不能为空  示例：若想添加文字水印“测试文字水印”，那么Content的值为：5rWL6K+V5paH5a2X5rC05Y2w
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
    * @param string|null $textContext 文字水印内容，内容需做Base64编码，若类型为文字水印 (type字段为Text)，则此配置项不能为空  示例：若想添加文字水印“测试文字水印”，那么Content的值为：5rWL6K+V5paH5a2X5rC05Y2w
    *
    * @return $this
    */
    public function setTextContext($textContext)
    {
        $this->container['textContext'] = $textContext;
        return $this;
    }

    /**
    * Gets imageWatermark
    *  imageWatermark
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ImageWatermark|null
    */
    public function getImageWatermark()
    {
        return $this->container['imageWatermark'];
    }

    /**
    * Sets imageWatermark
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ImageWatermark|null $imageWatermark imageWatermark
    *
    * @return $this
    */
    public function setImageWatermark($imageWatermark)
    {
        $this->container['imageWatermark'] = $imageWatermark;
        return $this;
    }

    /**
    * Gets textWatermark
    *  textWatermark
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\TextWatermark|null
    */
    public function getTextWatermark()
    {
        return $this->container['textWatermark'];
    }

    /**
    * Sets textWatermark
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\TextWatermark|null $textWatermark textWatermark
    *
    * @return $this
    */
    public function setTextWatermark($textWatermark)
    {
        $this->container['textWatermark'] = $textWatermark;
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


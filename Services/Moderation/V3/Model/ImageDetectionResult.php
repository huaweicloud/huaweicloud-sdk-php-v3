<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageDetectionResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageDetectionResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * suggestion  审核结果是否通过。  block：包含敏感信息，不通过  pass：不包含敏感信息，通过  review：需要人工复检
    * category  检测结果的一级标签。 支持category列表如下： politics: 涉政 terrorism: 暴恐 porn: 色情 image_text: 图文审核
    * details  details
    * ocrText  图文审核检测出的文本，只有在category参数配置image_text且检测出文本时展示该字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'suggestion' => 'string',
            'category' => 'string',
            'details' => '\HuaweiCloud\SDK\Moderation\V3\Model\ImageDetectionResultDetail',
            'ocrText' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * suggestion  审核结果是否通过。  block：包含敏感信息，不通过  pass：不包含敏感信息，通过  review：需要人工复检
    * category  检测结果的一级标签。 支持category列表如下： politics: 涉政 terrorism: 暴恐 porn: 色情 image_text: 图文审核
    * details  details
    * ocrText  图文审核检测出的文本，只有在category参数配置image_text且检测出文本时展示该字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'suggestion' => null,
        'category' => null,
        'details' => null,
        'ocrText' => null
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
    * suggestion  审核结果是否通过。  block：包含敏感信息，不通过  pass：不包含敏感信息，通过  review：需要人工复检
    * category  检测结果的一级标签。 支持category列表如下： politics: 涉政 terrorism: 暴恐 porn: 色情 image_text: 图文审核
    * details  details
    * ocrText  图文审核检测出的文本，只有在category参数配置image_text且检测出文本时展示该字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'suggestion' => 'suggestion',
            'category' => 'category',
            'details' => 'details',
            'ocrText' => 'ocr_text'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * suggestion  审核结果是否通过。  block：包含敏感信息，不通过  pass：不包含敏感信息，通过  review：需要人工复检
    * category  检测结果的一级标签。 支持category列表如下： politics: 涉政 terrorism: 暴恐 porn: 色情 image_text: 图文审核
    * details  details
    * ocrText  图文审核检测出的文本，只有在category参数配置image_text且检测出文本时展示该字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'suggestion' => 'setSuggestion',
            'category' => 'setCategory',
            'details' => 'setDetails',
            'ocrText' => 'setOcrText'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * suggestion  审核结果是否通过。  block：包含敏感信息，不通过  pass：不包含敏感信息，通过  review：需要人工复检
    * category  检测结果的一级标签。 支持category列表如下： politics: 涉政 terrorism: 暴恐 porn: 色情 image_text: 图文审核
    * details  details
    * ocrText  图文审核检测出的文本，只有在category参数配置image_text且检测出文本时展示该字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'suggestion' => 'getSuggestion',
            'category' => 'getCategory',
            'details' => 'getDetails',
            'ocrText' => 'getOcrText'
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
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['ocrText'] = isset($data['ocrText']) ? $data['ocrText'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets suggestion
    *  审核结果是否通过。  block：包含敏感信息，不通过  pass：不包含敏感信息，通过  review：需要人工复检
    *
    * @return string|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string|null $suggestion 审核结果是否通过。  block：包含敏感信息，不通过  pass：不包含敏感信息，通过  review：需要人工复检
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
        return $this;
    }

    /**
    * Gets category
    *  检测结果的一级标签。 支持category列表如下： politics: 涉政 terrorism: 暴恐 porn: 色情 image_text: 图文审核
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 检测结果的一级标签。 支持category列表如下： politics: 涉政 terrorism: 暴恐 porn: 色情 image_text: 图文审核
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets details
    *  details
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\ImageDetectionResultDetail|null
    */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
    * Sets details
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\ImageDetectionResultDetail|null $details details
    *
    * @return $this
    */
    public function setDetails($details)
    {
        $this->container['details'] = $details;
        return $this;
    }

    /**
    * Gets ocrText
    *  图文审核检测出的文本，只有在category参数配置image_text且检测出文本时展示该字段。
    *
    * @return string|null
    */
    public function getOcrText()
    {
        return $this->container['ocrText'];
    }

    /**
    * Sets ocrText
    *
    * @param string|null $ocrText 图文审核检测出的文本，只有在category参数配置image_text且检测出文本时展示该字段。
    *
    * @return $this
    */
    public function setOcrText($ocrText)
    {
        $this->container['ocrText'] = $ocrText;
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


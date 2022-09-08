<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoModerationImageDetailList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoModerationImageDetailList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * confidence  置信度，可选值在0-1之间，值越大，可信度越高。
    * category  检测结果的一级标签。 支持category列表如下： politics: 涉政  terrorism: 暴恐  porn: 色情  image_text: 图文审核
    * suggestion  审核结果是否通过。  block：包含敏感信息，不通过  review：需要人工复检
    * label  识别的详细标签。
    * faceLocation  faceLocation
    * qrLocation  qrLocation
    * qrContent  图片中二维码指向的链接，当请求参数categories中包含image_text时存在。
    * segments  image_text场景下命中的文本片段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'confidence' => 'float',
            'category' => 'string',
            'suggestion' => 'string',
            'label' => 'string',
            'faceLocation' => '\HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationImageDetailListFaceLocation',
            'qrLocation' => '\HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationImageDetailListQrLocation',
            'qrContent' => 'string',
            'segments' => '\HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationDetailSegment[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * confidence  置信度，可选值在0-1之间，值越大，可信度越高。
    * category  检测结果的一级标签。 支持category列表如下： politics: 涉政  terrorism: 暴恐  porn: 色情  image_text: 图文审核
    * suggestion  审核结果是否通过。  block：包含敏感信息，不通过  review：需要人工复检
    * label  识别的详细标签。
    * faceLocation  faceLocation
    * qrLocation  qrLocation
    * qrContent  图片中二维码指向的链接，当请求参数categories中包含image_text时存在。
    * segments  image_text场景下命中的文本片段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'confidence' => 'float',
        'category' => null,
        'suggestion' => null,
        'label' => null,
        'faceLocation' => null,
        'qrLocation' => null,
        'qrContent' => null,
        'segments' => null
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
    * confidence  置信度，可选值在0-1之间，值越大，可信度越高。
    * category  检测结果的一级标签。 支持category列表如下： politics: 涉政  terrorism: 暴恐  porn: 色情  image_text: 图文审核
    * suggestion  审核结果是否通过。  block：包含敏感信息，不通过  review：需要人工复检
    * label  识别的详细标签。
    * faceLocation  faceLocation
    * qrLocation  qrLocation
    * qrContent  图片中二维码指向的链接，当请求参数categories中包含image_text时存在。
    * segments  image_text场景下命中的文本片段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'confidence' => 'confidence',
            'category' => 'category',
            'suggestion' => 'suggestion',
            'label' => 'label',
            'faceLocation' => 'face_location',
            'qrLocation' => 'qr_location',
            'qrContent' => 'qr_content',
            'segments' => 'segments'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * confidence  置信度，可选值在0-1之间，值越大，可信度越高。
    * category  检测结果的一级标签。 支持category列表如下： politics: 涉政  terrorism: 暴恐  porn: 色情  image_text: 图文审核
    * suggestion  审核结果是否通过。  block：包含敏感信息，不通过  review：需要人工复检
    * label  识别的详细标签。
    * faceLocation  faceLocation
    * qrLocation  qrLocation
    * qrContent  图片中二维码指向的链接，当请求参数categories中包含image_text时存在。
    * segments  image_text场景下命中的文本片段。
    *
    * @var string[]
    */
    protected static $setters = [
            'confidence' => 'setConfidence',
            'category' => 'setCategory',
            'suggestion' => 'setSuggestion',
            'label' => 'setLabel',
            'faceLocation' => 'setFaceLocation',
            'qrLocation' => 'setQrLocation',
            'qrContent' => 'setQrContent',
            'segments' => 'setSegments'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * confidence  置信度，可选值在0-1之间，值越大，可信度越高。
    * category  检测结果的一级标签。 支持category列表如下： politics: 涉政  terrorism: 暴恐  porn: 色情  image_text: 图文审核
    * suggestion  审核结果是否通过。  block：包含敏感信息，不通过  review：需要人工复检
    * label  识别的详细标签。
    * faceLocation  faceLocation
    * qrLocation  qrLocation
    * qrContent  图片中二维码指向的链接，当请求参数categories中包含image_text时存在。
    * segments  image_text场景下命中的文本片段。
    *
    * @var string[]
    */
    protected static $getters = [
            'confidence' => 'getConfidence',
            'category' => 'getCategory',
            'suggestion' => 'getSuggestion',
            'label' => 'getLabel',
            'faceLocation' => 'getFaceLocation',
            'qrLocation' => 'getQrLocation',
            'qrContent' => 'getQrContent',
            'segments' => 'getSegments'
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
    const CATEGORY_POLITICS = 'politics';
    const CATEGORY_TERRORISM = 'terrorism';
    const CATEGORY_PORN = 'porn';
    const CATEGORY_IMAGE_TEXT = 'image_text';
    const SUGGESTION_BLOCK = 'block';
    const SUGGESTION_REVIEW = 'review';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_POLITICS,
            self::CATEGORY_TERRORISM,
            self::CATEGORY_PORN,
            self::CATEGORY_IMAGE_TEXT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSuggestionAllowableValues()
    {
        return [
            self::SUGGESTION_BLOCK,
            self::SUGGESTION_REVIEW,
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
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['faceLocation'] = isset($data['faceLocation']) ? $data['faceLocation'] : null;
        $this->container['qrLocation'] = isset($data['qrLocation']) ? $data['qrLocation'] : null;
        $this->container['qrContent'] = isset($data['qrContent']) ? $data['qrContent'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSuggestionAllowableValues();
                if (!is_null($this->container['suggestion']) && !in_array($this->container['suggestion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'suggestion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets confidence
    *  置信度，可选值在0-1之间，值越大，可信度越高。
    *
    * @return float|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param float|null $confidence 置信度，可选值在0-1之间，值越大，可信度越高。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets category
    *  检测结果的一级标签。 支持category列表如下： politics: 涉政  terrorism: 暴恐  porn: 色情  image_text: 图文审核
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
    * @param string|null $category 检测结果的一级标签。 支持category列表如下： politics: 涉政  terrorism: 暴恐  porn: 色情  image_text: 图文审核
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets suggestion
    *  审核结果是否通过。  block：包含敏感信息，不通过  review：需要人工复检
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
    * @param string|null $suggestion 审核结果是否通过。  block：包含敏感信息，不通过  review：需要人工复检
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
        return $this;
    }

    /**
    * Gets label
    *  识别的详细标签。
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 识别的详细标签。
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets faceLocation
    *  faceLocation
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationImageDetailListFaceLocation|null
    */
    public function getFaceLocation()
    {
        return $this->container['faceLocation'];
    }

    /**
    * Sets faceLocation
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationImageDetailListFaceLocation|null $faceLocation faceLocation
    *
    * @return $this
    */
    public function setFaceLocation($faceLocation)
    {
        $this->container['faceLocation'] = $faceLocation;
        return $this;
    }

    /**
    * Gets qrLocation
    *  qrLocation
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationImageDetailListQrLocation|null
    */
    public function getQrLocation()
    {
        return $this->container['qrLocation'];
    }

    /**
    * Sets qrLocation
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationImageDetailListQrLocation|null $qrLocation qrLocation
    *
    * @return $this
    */
    public function setQrLocation($qrLocation)
    {
        $this->container['qrLocation'] = $qrLocation;
        return $this;
    }

    /**
    * Gets qrContent
    *  图片中二维码指向的链接，当请求参数categories中包含image_text时存在。
    *
    * @return string|null
    */
    public function getQrContent()
    {
        return $this->container['qrContent'];
    }

    /**
    * Sets qrContent
    *
    * @param string|null $qrContent 图片中二维码指向的链接，当请求参数categories中包含image_text时存在。
    *
    * @return $this
    */
    public function setQrContent($qrContent)
    {
        $this->container['qrContent'] = $qrContent;
        return $this;
    }

    /**
    * Gets segments
    *  image_text场景下命中的文本片段。
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationDetailSegment[]|null
    */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
    * Sets segments
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationDetailSegment[]|null $segments image_text场景下命中的文本片段。
    *
    * @return $this
    */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;
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


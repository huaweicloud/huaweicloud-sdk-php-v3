<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageDetectionResultDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageDetectionResultDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * suggestion  审核结果是否通过。 block：包含敏感信息，不通过 review：需要人工复检
    * category  检测结果的一级标签。 支持category列表如下： terrorism: 暴恐 porn: 色情 image_text: 图文审核
    * confidence  置信度，可选值在0-1之间，值越大，可信度越高。
    * faceLocation  faceLocation
    * qrLocation  qrLocation
    * qrContent  图片中二维码指向的链接，当请求参数categories中包含image_text时存在。
    * segments  image_text场景下命中的文本片段。
    * label  识别的详细标签。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'suggestion' => 'string',
            'category' => 'string',
            'confidence' => 'float',
            'faceLocation' => '\HuaweiCloud\SDK\Moderation\V3\Model\FaceLocationDetail',
            'qrLocation' => '\HuaweiCloud\SDK\Moderation\V3\Model\QRLocationDetail',
            'qrContent' => 'string',
            'segments' => '\HuaweiCloud\SDK\Moderation\V3\Model\OCRTextDetail[]',
            'label' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * suggestion  审核结果是否通过。 block：包含敏感信息，不通过 review：需要人工复检
    * category  检测结果的一级标签。 支持category列表如下： terrorism: 暴恐 porn: 色情 image_text: 图文审核
    * confidence  置信度，可选值在0-1之间，值越大，可信度越高。
    * faceLocation  faceLocation
    * qrLocation  qrLocation
    * qrContent  图片中二维码指向的链接，当请求参数categories中包含image_text时存在。
    * segments  image_text场景下命中的文本片段。
    * label  识别的详细标签。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'suggestion' => null,
        'category' => null,
        'confidence' => 'float',
        'faceLocation' => null,
        'qrLocation' => null,
        'qrContent' => null,
        'segments' => null,
        'label' => null
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
    * suggestion  审核结果是否通过。 block：包含敏感信息，不通过 review：需要人工复检
    * category  检测结果的一级标签。 支持category列表如下： terrorism: 暴恐 porn: 色情 image_text: 图文审核
    * confidence  置信度，可选值在0-1之间，值越大，可信度越高。
    * faceLocation  faceLocation
    * qrLocation  qrLocation
    * qrContent  图片中二维码指向的链接，当请求参数categories中包含image_text时存在。
    * segments  image_text场景下命中的文本片段。
    * label  识别的详细标签。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'suggestion' => 'suggestion',
            'category' => 'category',
            'confidence' => 'confidence',
            'faceLocation' => 'face_location',
            'qrLocation' => 'qr_location',
            'qrContent' => 'qr_content',
            'segments' => 'segments',
            'label' => 'label'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * suggestion  审核结果是否通过。 block：包含敏感信息，不通过 review：需要人工复检
    * category  检测结果的一级标签。 支持category列表如下： terrorism: 暴恐 porn: 色情 image_text: 图文审核
    * confidence  置信度，可选值在0-1之间，值越大，可信度越高。
    * faceLocation  faceLocation
    * qrLocation  qrLocation
    * qrContent  图片中二维码指向的链接，当请求参数categories中包含image_text时存在。
    * segments  image_text场景下命中的文本片段。
    * label  识别的详细标签。
    *
    * @var string[]
    */
    protected static $setters = [
            'suggestion' => 'setSuggestion',
            'category' => 'setCategory',
            'confidence' => 'setConfidence',
            'faceLocation' => 'setFaceLocation',
            'qrLocation' => 'setQrLocation',
            'qrContent' => 'setQrContent',
            'segments' => 'setSegments',
            'label' => 'setLabel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * suggestion  审核结果是否通过。 block：包含敏感信息，不通过 review：需要人工复检
    * category  检测结果的一级标签。 支持category列表如下： terrorism: 暴恐 porn: 色情 image_text: 图文审核
    * confidence  置信度，可选值在0-1之间，值越大，可信度越高。
    * faceLocation  faceLocation
    * qrLocation  qrLocation
    * qrContent  图片中二维码指向的链接，当请求参数categories中包含image_text时存在。
    * segments  image_text场景下命中的文本片段。
    * label  识别的详细标签。
    *
    * @var string[]
    */
    protected static $getters = [
            'suggestion' => 'getSuggestion',
            'category' => 'getCategory',
            'confidence' => 'getConfidence',
            'faceLocation' => 'getFaceLocation',
            'qrLocation' => 'getQrLocation',
            'qrContent' => 'getQrContent',
            'segments' => 'getSegments',
            'label' => 'getLabel'
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
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['faceLocation'] = isset($data['faceLocation']) ? $data['faceLocation'] : null;
        $this->container['qrLocation'] = isset($data['qrLocation']) ? $data['qrLocation'] : null;
        $this->container['qrContent'] = isset($data['qrContent']) ? $data['qrContent'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['suggestion'] === null) {
            $invalidProperties[] = "'suggestion' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['confidence'] === null) {
            $invalidProperties[] = "'confidence' can't be null";
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
    * Gets suggestion
    *  审核结果是否通过。 block：包含敏感信息，不通过 review：需要人工复检
    *
    * @return string
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string $suggestion 审核结果是否通过。 block：包含敏感信息，不通过 review：需要人工复检
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
    *  检测结果的一级标签。 支持category列表如下： terrorism: 暴恐 porn: 色情 image_text: 图文审核
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category 检测结果的一级标签。 支持category列表如下： terrorism: 暴恐 porn: 色情 image_text: 图文审核
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets confidence
    *  置信度，可选值在0-1之间，值越大，可信度越高。
    *
    * @return float
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param float $confidence 置信度，可选值在0-1之间，值越大，可信度越高。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets faceLocation
    *  faceLocation
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\FaceLocationDetail|null
    */
    public function getFaceLocation()
    {
        return $this->container['faceLocation'];
    }

    /**
    * Sets faceLocation
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\FaceLocationDetail|null $faceLocation faceLocation
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
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\QRLocationDetail|null
    */
    public function getQrLocation()
    {
        return $this->container['qrLocation'];
    }

    /**
    * Sets qrLocation
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\QRLocationDetail|null $qrLocation qrLocation
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
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\OCRTextDetail[]|null
    */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
    * Sets segments
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\OCRTextDetail[]|null $segments image_text场景下命中的文本片段。
    *
    * @return $this
    */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;
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


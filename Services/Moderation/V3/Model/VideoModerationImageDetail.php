<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoModerationImageDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoModerationImageDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * suggestion  图像审核结果是否通过。 block：包含敏感信息，不通过  review：需要人工复检
    * category  检测结果的一级标签。 支持category列表如下： politics: 涉政  terrorism: 暴恐  porn: 色情  image_text: 图文审核
    * ocrText  图文审核检测出的文本，只有在category参数配置image_text且检测出文本时展示该字段。
    * time  截帧在视频文件中的时间，单位为秒
    * detail  图像帧审核详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'suggestion' => 'string',
            'category' => 'string',
            'ocrText' => 'string',
            'time' => 'int',
            'detail' => '\HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationImageDetailList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * suggestion  图像审核结果是否通过。 block：包含敏感信息，不通过  review：需要人工复检
    * category  检测结果的一级标签。 支持category列表如下： politics: 涉政  terrorism: 暴恐  porn: 色情  image_text: 图文审核
    * ocrText  图文审核检测出的文本，只有在category参数配置image_text且检测出文本时展示该字段。
    * time  截帧在视频文件中的时间，单位为秒
    * detail  图像帧审核详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'suggestion' => null,
        'category' => null,
        'ocrText' => null,
        'time' => 'int32',
        'detail' => null
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
    * suggestion  图像审核结果是否通过。 block：包含敏感信息，不通过  review：需要人工复检
    * category  检测结果的一级标签。 支持category列表如下： politics: 涉政  terrorism: 暴恐  porn: 色情  image_text: 图文审核
    * ocrText  图文审核检测出的文本，只有在category参数配置image_text且检测出文本时展示该字段。
    * time  截帧在视频文件中的时间，单位为秒
    * detail  图像帧审核详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'suggestion' => 'suggestion',
            'category' => 'category',
            'ocrText' => 'ocr_text',
            'time' => 'time',
            'detail' => 'detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * suggestion  图像审核结果是否通过。 block：包含敏感信息，不通过  review：需要人工复检
    * category  检测结果的一级标签。 支持category列表如下： politics: 涉政  terrorism: 暴恐  porn: 色情  image_text: 图文审核
    * ocrText  图文审核检测出的文本，只有在category参数配置image_text且检测出文本时展示该字段。
    * time  截帧在视频文件中的时间，单位为秒
    * detail  图像帧审核详情
    *
    * @var string[]
    */
    protected static $setters = [
            'suggestion' => 'setSuggestion',
            'category' => 'setCategory',
            'ocrText' => 'setOcrText',
            'time' => 'setTime',
            'detail' => 'setDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * suggestion  图像审核结果是否通过。 block：包含敏感信息，不通过  review：需要人工复检
    * category  检测结果的一级标签。 支持category列表如下： politics: 涉政  terrorism: 暴恐  porn: 色情  image_text: 图文审核
    * ocrText  图文审核检测出的文本，只有在category参数配置image_text且检测出文本时展示该字段。
    * time  截帧在视频文件中的时间，单位为秒
    * detail  图像帧审核详情
    *
    * @var string[]
    */
    protected static $getters = [
            'suggestion' => 'getSuggestion',
            'category' => 'getCategory',
            'ocrText' => 'getOcrText',
            'time' => 'getTime',
            'detail' => 'getDetail'
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
    const SUGGESTION_BLOCK = 'block';
    const SUGGESTION_REVIEW = 'review';
    const CATEGORY_POLITICS = 'politics';
    const CATEGORY_TERRORISM = 'terrorism';
    const CATEGORY_PORN = 'porn';
    const CATEGORY_IMAGE_TEXT = 'image_text';
    

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
        $this->container['ocrText'] = isset($data['ocrText']) ? $data['ocrText'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSuggestionAllowableValues();
                if (!is_null($this->container['suggestion']) && !in_array($this->container['suggestion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'suggestion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
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
    * Gets suggestion
    *  图像审核结果是否通过。 block：包含敏感信息，不通过  review：需要人工复检
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
    * @param string|null $suggestion 图像审核结果是否通过。 block：包含敏感信息，不通过  review：需要人工复检
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
    * Gets time
    *  截帧在视频文件中的时间，单位为秒
    *
    * @return int|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int|null $time 截帧在视频文件中的时间，单位为秒
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets detail
    *  图像帧审核详情
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationImageDetailList[]|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationImageDetailList[]|null $detail 图像帧审核详情
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
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


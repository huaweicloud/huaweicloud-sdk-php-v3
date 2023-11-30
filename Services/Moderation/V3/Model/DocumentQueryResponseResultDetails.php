<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DocumentQueryResponseResultDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DocumentQueryResponse_result_details';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * suggestion  当前内容片段的处置建议： block：包含敏感信息，不通过 review：需要人工复检
    * type  当前内容片段的类型，可取值有： text: 文本 image: 图像 video: 视频
    * label  当前内容片段的风险类型： politics：涉政 terrorism：暴恐 porn：色情 sexy：性感 abuse：辱骂 ad：广告 qr_code：二维码 watermark：水印 meaningless：无意义 ban：违禁 bad_scene：不良场景 moan：娇喘
    * index  当前处理的片段索引
    * text  当前内容片段中的文本内容，仅当type为text时存在
    * startPosition  当前文本内容片段在输入中的起始位置，仅当type为text时存在
    * endPosition  当前文本内容片段在输入中的结束位置，仅当type为text时存在
    * imageUrl  网页图片url，仅当type为image且文档格式为webpage时存在
    * segments  命中的风险片段信息列表，仅在有命中敏感词时才返回
    * videoImageDetails  网页视频中截帧部分审核详情
    * audioDetails  网页视频中音频部分审核详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'suggestion' => 'string',
            'type' => 'string',
            'label' => 'string',
            'index' => 'int',
            'text' => 'string',
            'startPosition' => 'int',
            'endPosition' => 'int',
            'imageUrl' => 'string',
            'segments' => '\HuaweiCloud\SDK\Moderation\V3\Model\DocumentQueryResponseResultSegments[]',
            'videoImageDetails' => '\HuaweiCloud\SDK\Moderation\V3\Model\DocumentVideoImageDetail[]',
            'audioDetails' => '\HuaweiCloud\SDK\Moderation\V3\Model\DocumentAudioDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * suggestion  当前内容片段的处置建议： block：包含敏感信息，不通过 review：需要人工复检
    * type  当前内容片段的类型，可取值有： text: 文本 image: 图像 video: 视频
    * label  当前内容片段的风险类型： politics：涉政 terrorism：暴恐 porn：色情 sexy：性感 abuse：辱骂 ad：广告 qr_code：二维码 watermark：水印 meaningless：无意义 ban：违禁 bad_scene：不良场景 moan：娇喘
    * index  当前处理的片段索引
    * text  当前内容片段中的文本内容，仅当type为text时存在
    * startPosition  当前文本内容片段在输入中的起始位置，仅当type为text时存在
    * endPosition  当前文本内容片段在输入中的结束位置，仅当type为text时存在
    * imageUrl  网页图片url，仅当type为image且文档格式为webpage时存在
    * segments  命中的风险片段信息列表，仅在有命中敏感词时才返回
    * videoImageDetails  网页视频中截帧部分审核详情
    * audioDetails  网页视频中音频部分审核详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'suggestion' => null,
        'type' => null,
        'label' => null,
        'index' => 'int32',
        'text' => null,
        'startPosition' => 'int32',
        'endPosition' => 'int32',
        'imageUrl' => null,
        'segments' => null,
        'videoImageDetails' => null,
        'audioDetails' => null
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
    * suggestion  当前内容片段的处置建议： block：包含敏感信息，不通过 review：需要人工复检
    * type  当前内容片段的类型，可取值有： text: 文本 image: 图像 video: 视频
    * label  当前内容片段的风险类型： politics：涉政 terrorism：暴恐 porn：色情 sexy：性感 abuse：辱骂 ad：广告 qr_code：二维码 watermark：水印 meaningless：无意义 ban：违禁 bad_scene：不良场景 moan：娇喘
    * index  当前处理的片段索引
    * text  当前内容片段中的文本内容，仅当type为text时存在
    * startPosition  当前文本内容片段在输入中的起始位置，仅当type为text时存在
    * endPosition  当前文本内容片段在输入中的结束位置，仅当type为text时存在
    * imageUrl  网页图片url，仅当type为image且文档格式为webpage时存在
    * segments  命中的风险片段信息列表，仅在有命中敏感词时才返回
    * videoImageDetails  网页视频中截帧部分审核详情
    * audioDetails  网页视频中音频部分审核详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'suggestion' => 'suggestion',
            'type' => 'type',
            'label' => 'label',
            'index' => 'index',
            'text' => 'text',
            'startPosition' => 'start_position',
            'endPosition' => 'end_position',
            'imageUrl' => 'image_url',
            'segments' => 'segments',
            'videoImageDetails' => 'video_image_details',
            'audioDetails' => 'audio_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * suggestion  当前内容片段的处置建议： block：包含敏感信息，不通过 review：需要人工复检
    * type  当前内容片段的类型，可取值有： text: 文本 image: 图像 video: 视频
    * label  当前内容片段的风险类型： politics：涉政 terrorism：暴恐 porn：色情 sexy：性感 abuse：辱骂 ad：广告 qr_code：二维码 watermark：水印 meaningless：无意义 ban：违禁 bad_scene：不良场景 moan：娇喘
    * index  当前处理的片段索引
    * text  当前内容片段中的文本内容，仅当type为text时存在
    * startPosition  当前文本内容片段在输入中的起始位置，仅当type为text时存在
    * endPosition  当前文本内容片段在输入中的结束位置，仅当type为text时存在
    * imageUrl  网页图片url，仅当type为image且文档格式为webpage时存在
    * segments  命中的风险片段信息列表，仅在有命中敏感词时才返回
    * videoImageDetails  网页视频中截帧部分审核详情
    * audioDetails  网页视频中音频部分审核详情
    *
    * @var string[]
    */
    protected static $setters = [
            'suggestion' => 'setSuggestion',
            'type' => 'setType',
            'label' => 'setLabel',
            'index' => 'setIndex',
            'text' => 'setText',
            'startPosition' => 'setStartPosition',
            'endPosition' => 'setEndPosition',
            'imageUrl' => 'setImageUrl',
            'segments' => 'setSegments',
            'videoImageDetails' => 'setVideoImageDetails',
            'audioDetails' => 'setAudioDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * suggestion  当前内容片段的处置建议： block：包含敏感信息，不通过 review：需要人工复检
    * type  当前内容片段的类型，可取值有： text: 文本 image: 图像 video: 视频
    * label  当前内容片段的风险类型： politics：涉政 terrorism：暴恐 porn：色情 sexy：性感 abuse：辱骂 ad：广告 qr_code：二维码 watermark：水印 meaningless：无意义 ban：违禁 bad_scene：不良场景 moan：娇喘
    * index  当前处理的片段索引
    * text  当前内容片段中的文本内容，仅当type为text时存在
    * startPosition  当前文本内容片段在输入中的起始位置，仅当type为text时存在
    * endPosition  当前文本内容片段在输入中的结束位置，仅当type为text时存在
    * imageUrl  网页图片url，仅当type为image且文档格式为webpage时存在
    * segments  命中的风险片段信息列表，仅在有命中敏感词时才返回
    * videoImageDetails  网页视频中截帧部分审核详情
    * audioDetails  网页视频中音频部分审核详情
    *
    * @var string[]
    */
    protected static $getters = [
            'suggestion' => 'getSuggestion',
            'type' => 'getType',
            'label' => 'getLabel',
            'index' => 'getIndex',
            'text' => 'getText',
            'startPosition' => 'getStartPosition',
            'endPosition' => 'getEndPosition',
            'imageUrl' => 'getImageUrl',
            'segments' => 'getSegments',
            'videoImageDetails' => 'getVideoImageDetails',
            'audioDetails' => 'getAudioDetails'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['startPosition'] = isset($data['startPosition']) ? $data['startPosition'] : null;
        $this->container['endPosition'] = isset($data['endPosition']) ? $data['endPosition'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
        $this->container['videoImageDetails'] = isset($data['videoImageDetails']) ? $data['videoImageDetails'] : null;
        $this->container['audioDetails'] = isset($data['audioDetails']) ? $data['audioDetails'] : null;
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
    *  当前内容片段的处置建议： block：包含敏感信息，不通过 review：需要人工复检
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
    * @param string|null $suggestion 当前内容片段的处置建议： block：包含敏感信息，不通过 review：需要人工复检
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
        return $this;
    }

    /**
    * Gets type
    *  当前内容片段的类型，可取值有： text: 文本 image: 图像 video: 视频
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 当前内容片段的类型，可取值有： text: 文本 image: 图像 video: 视频
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets label
    *  当前内容片段的风险类型： politics：涉政 terrorism：暴恐 porn：色情 sexy：性感 abuse：辱骂 ad：广告 qr_code：二维码 watermark：水印 meaningless：无意义 ban：违禁 bad_scene：不良场景 moan：娇喘
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
    * @param string|null $label 当前内容片段的风险类型： politics：涉政 terrorism：暴恐 porn：色情 sexy：性感 abuse：辱骂 ad：广告 qr_code：二维码 watermark：水印 meaningless：无意义 ban：违禁 bad_scene：不良场景 moan：娇喘
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets index
    *  当前处理的片段索引
    *
    * @return int|null
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param int|null $index 当前处理的片段索引
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
    * Gets text
    *  当前内容片段中的文本内容，仅当type为text时存在
    *
    * @return string|null
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param string|null $text 当前内容片段中的文本内容，仅当type为text时存在
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
    * Gets startPosition
    *  当前文本内容片段在输入中的起始位置，仅当type为text时存在
    *
    * @return int|null
    */
    public function getStartPosition()
    {
        return $this->container['startPosition'];
    }

    /**
    * Sets startPosition
    *
    * @param int|null $startPosition 当前文本内容片段在输入中的起始位置，仅当type为text时存在
    *
    * @return $this
    */
    public function setStartPosition($startPosition)
    {
        $this->container['startPosition'] = $startPosition;
        return $this;
    }

    /**
    * Gets endPosition
    *  当前文本内容片段在输入中的结束位置，仅当type为text时存在
    *
    * @return int|null
    */
    public function getEndPosition()
    {
        return $this->container['endPosition'];
    }

    /**
    * Sets endPosition
    *
    * @param int|null $endPosition 当前文本内容片段在输入中的结束位置，仅当type为text时存在
    *
    * @return $this
    */
    public function setEndPosition($endPosition)
    {
        $this->container['endPosition'] = $endPosition;
        return $this;
    }

    /**
    * Gets imageUrl
    *  网页图片url，仅当type为image且文档格式为webpage时存在
    *
    * @return string|null
    */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
    * Sets imageUrl
    *
    * @param string|null $imageUrl 网页图片url，仅当type为image且文档格式为webpage时存在
    *
    * @return $this
    */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;
        return $this;
    }

    /**
    * Gets segments
    *  命中的风险片段信息列表，仅在有命中敏感词时才返回
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\DocumentQueryResponseResultSegments[]|null
    */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
    * Sets segments
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\DocumentQueryResponseResultSegments[]|null $segments 命中的风险片段信息列表，仅在有命中敏感词时才返回
    *
    * @return $this
    */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;
        return $this;
    }

    /**
    * Gets videoImageDetails
    *  网页视频中截帧部分审核详情
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\DocumentVideoImageDetail[]|null
    */
    public function getVideoImageDetails()
    {
        return $this->container['videoImageDetails'];
    }

    /**
    * Sets videoImageDetails
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\DocumentVideoImageDetail[]|null $videoImageDetails 网页视频中截帧部分审核详情
    *
    * @return $this
    */
    public function setVideoImageDetails($videoImageDetails)
    {
        $this->container['videoImageDetails'] = $videoImageDetails;
        return $this;
    }

    /**
    * Gets audioDetails
    *  网页视频中音频部分审核详情
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\DocumentAudioDetail[]|null
    */
    public function getAudioDetails()
    {
        return $this->container['audioDetails'];
    }

    /**
    * Sets audioDetails
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\DocumentAudioDetail[]|null $audioDetails 网页视频中音频部分审核详情
    *
    * @return $this
    */
    public function setAudioDetails($audioDetails)
    {
        $this->container['audioDetails'] = $audioDetails;
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


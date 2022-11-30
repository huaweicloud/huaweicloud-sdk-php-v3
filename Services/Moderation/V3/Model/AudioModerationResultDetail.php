<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AudioModerationResultDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AudioModerationResultDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  音频片段开始时间
    * suggestion  音频片段审核处理建议： block：包含敏感信息，不通过 review：需要人工复检
    * endTime  音频片段结束时间
    * label  音频片段标签
    * audioText  音频片段文本内容
    * segments  命中的风险片段信息列表，如果命中语义算法模型，则该字段不会存在
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'float',
            'suggestion' => 'string',
            'endTime' => 'float',
            'label' => 'string',
            'audioText' => 'string',
            'segments' => '\HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationDetailSegment[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  音频片段开始时间
    * suggestion  音频片段审核处理建议： block：包含敏感信息，不通过 review：需要人工复检
    * endTime  音频片段结束时间
    * label  音频片段标签
    * audioText  音频片段文本内容
    * segments  命中的风险片段信息列表，如果命中语义算法模型，则该字段不会存在
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'float',
        'suggestion' => null,
        'endTime' => 'float',
        'label' => null,
        'audioText' => null,
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
    * startTime  音频片段开始时间
    * suggestion  音频片段审核处理建议： block：包含敏感信息，不通过 review：需要人工复检
    * endTime  音频片段结束时间
    * label  音频片段标签
    * audioText  音频片段文本内容
    * segments  命中的风险片段信息列表，如果命中语义算法模型，则该字段不会存在
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'suggestion' => 'suggestion',
            'endTime' => 'end_time',
            'label' => 'label',
            'audioText' => 'audio_text',
            'segments' => 'segments'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  音频片段开始时间
    * suggestion  音频片段审核处理建议： block：包含敏感信息，不通过 review：需要人工复检
    * endTime  音频片段结束时间
    * label  音频片段标签
    * audioText  音频片段文本内容
    * segments  命中的风险片段信息列表，如果命中语义算法模型，则该字段不会存在
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'suggestion' => 'setSuggestion',
            'endTime' => 'setEndTime',
            'label' => 'setLabel',
            'audioText' => 'setAudioText',
            'segments' => 'setSegments'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  音频片段开始时间
    * suggestion  音频片段审核处理建议： block：包含敏感信息，不通过 review：需要人工复检
    * endTime  音频片段结束时间
    * label  音频片段标签
    * audioText  音频片段文本内容
    * segments  命中的风险片段信息列表，如果命中语义算法模型，则该字段不会存在
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'suggestion' => 'getSuggestion',
            'endTime' => 'getEndTime',
            'label' => 'getLabel',
            'audioText' => 'getAudioText',
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
    const SUGGESTION_BLOCK = 'block';
    const SUGGESTION_REVIEW = 'review';
    

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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['audioText'] = isset($data['audioText']) ? $data['audioText'] : null;
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
    * Gets startTime
    *  音频片段开始时间
    *
    * @return float|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param float|null $startTime 音频片段开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets suggestion
    *  音频片段审核处理建议： block：包含敏感信息，不通过 review：需要人工复检
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
    * @param string|null $suggestion 音频片段审核处理建议： block：包含敏感信息，不通过 review：需要人工复检
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
        return $this;
    }

    /**
    * Gets endTime
    *  音频片段结束时间
    *
    * @return float|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param float|null $endTime 音频片段结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets label
    *  音频片段标签
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
    * @param string|null $label 音频片段标签
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets audioText
    *  音频片段文本内容
    *
    * @return string|null
    */
    public function getAudioText()
    {
        return $this->container['audioText'];
    }

    /**
    * Sets audioText
    *
    * @param string|null $audioText 音频片段文本内容
    *
    * @return $this
    */
    public function setAudioText($audioText)
    {
        $this->container['audioText'] = $audioText;
        return $this;
    }

    /**
    * Gets segments
    *  命中的风险片段信息列表，如果命中语义算法模型，则该字段不会存在
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
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationDetailSegment[]|null $segments 命中的风险片段信息列表，如果命中语义算法模型，则该字段不会存在
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


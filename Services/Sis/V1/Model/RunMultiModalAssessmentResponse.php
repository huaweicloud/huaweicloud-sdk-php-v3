<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunMultiModalAssessmentResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunMultiModalAssessmentResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * score  综合评分，0-100
    * completeness  完整性评分，0-100 表示有多少比例的单词发音是清楚的
    * duration  音频/视频时长，单位秒
    * pronunciation  pronunciation
    * fluency  fluency
    * words  单词评测打分表
    * traceId  评测失败时定位问题使用的字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'score' => 'float',
            'completeness' => 'float',
            'duration' => 'float',
            'pronunciation' => '\HuaweiCloud\SDK\Sis\V1\Model\Pronunciation',
            'fluency' => '\HuaweiCloud\SDK\Sis\V1\Model\Fluency',
            'words' => '\HuaweiCloud\SDK\Sis\V1\Model\Word[]',
            'traceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * score  综合评分，0-100
    * completeness  完整性评分，0-100 表示有多少比例的单词发音是清楚的
    * duration  音频/视频时长，单位秒
    * pronunciation  pronunciation
    * fluency  fluency
    * words  单词评测打分表
    * traceId  评测失败时定位问题使用的字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'score' => 'float',
        'completeness' => 'float',
        'duration' => 'float',
        'pronunciation' => null,
        'fluency' => null,
        'words' => null,
        'traceId' => null
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
    * score  综合评分，0-100
    * completeness  完整性评分，0-100 表示有多少比例的单词发音是清楚的
    * duration  音频/视频时长，单位秒
    * pronunciation  pronunciation
    * fluency  fluency
    * words  单词评测打分表
    * traceId  评测失败时定位问题使用的字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'score' => 'score',
            'completeness' => 'completeness',
            'duration' => 'duration',
            'pronunciation' => 'pronunciation',
            'fluency' => 'fluency',
            'words' => 'words',
            'traceId' => 'traceId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * score  综合评分，0-100
    * completeness  完整性评分，0-100 表示有多少比例的单词发音是清楚的
    * duration  音频/视频时长，单位秒
    * pronunciation  pronunciation
    * fluency  fluency
    * words  单词评测打分表
    * traceId  评测失败时定位问题使用的字段
    *
    * @var string[]
    */
    protected static $setters = [
            'score' => 'setScore',
            'completeness' => 'setCompleteness',
            'duration' => 'setDuration',
            'pronunciation' => 'setPronunciation',
            'fluency' => 'setFluency',
            'words' => 'setWords',
            'traceId' => 'setTraceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * score  综合评分，0-100
    * completeness  完整性评分，0-100 表示有多少比例的单词发音是清楚的
    * duration  音频/视频时长，单位秒
    * pronunciation  pronunciation
    * fluency  fluency
    * words  单词评测打分表
    * traceId  评测失败时定位问题使用的字段
    *
    * @var string[]
    */
    protected static $getters = [
            'score' => 'getScore',
            'completeness' => 'getCompleteness',
            'duration' => 'getDuration',
            'pronunciation' => 'getPronunciation',
            'fluency' => 'getFluency',
            'words' => 'getWords',
            'traceId' => 'getTraceId'
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
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['completeness'] = isset($data['completeness']) ? $data['completeness'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['pronunciation'] = isset($data['pronunciation']) ? $data['pronunciation'] : null;
        $this->container['fluency'] = isset($data['fluency']) ? $data['fluency'] : null;
        $this->container['words'] = isset($data['words']) ? $data['words'] : null;
        $this->container['traceId'] = isset($data['traceId']) ? $data['traceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['score']) && ($this->container['score'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'score', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['score']) && ($this->container['score'] < 0)) {
                $invalidProperties[] = "invalid value for 'score', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['completeness']) && ($this->container['completeness'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'completeness', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['completeness']) && ($this->container['completeness'] < 0)) {
                $invalidProperties[] = "invalid value for 'completeness', must be bigger than or equal to 0.";
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
    * Gets score
    *  综合评分，0-100
    *
    * @return float|null
    */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
    * Sets score
    *
    * @param float|null $score 综合评分，0-100
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }

    /**
    * Gets completeness
    *  完整性评分，0-100 表示有多少比例的单词发音是清楚的
    *
    * @return float|null
    */
    public function getCompleteness()
    {
        return $this->container['completeness'];
    }

    /**
    * Sets completeness
    *
    * @param float|null $completeness 完整性评分，0-100 表示有多少比例的单词发音是清楚的
    *
    * @return $this
    */
    public function setCompleteness($completeness)
    {
        $this->container['completeness'] = $completeness;
        return $this;
    }

    /**
    * Gets duration
    *  音频/视频时长，单位秒
    *
    * @return float|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param float|null $duration 音频/视频时长，单位秒
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets pronunciation
    *  pronunciation
    *
    * @return \HuaweiCloud\SDK\Sis\V1\Model\Pronunciation|null
    */
    public function getPronunciation()
    {
        return $this->container['pronunciation'];
    }

    /**
    * Sets pronunciation
    *
    * @param \HuaweiCloud\SDK\Sis\V1\Model\Pronunciation|null $pronunciation pronunciation
    *
    * @return $this
    */
    public function setPronunciation($pronunciation)
    {
        $this->container['pronunciation'] = $pronunciation;
        return $this;
    }

    /**
    * Gets fluency
    *  fluency
    *
    * @return \HuaweiCloud\SDK\Sis\V1\Model\Fluency|null
    */
    public function getFluency()
    {
        return $this->container['fluency'];
    }

    /**
    * Sets fluency
    *
    * @param \HuaweiCloud\SDK\Sis\V1\Model\Fluency|null $fluency fluency
    *
    * @return $this
    */
    public function setFluency($fluency)
    {
        $this->container['fluency'] = $fluency;
        return $this;
    }

    /**
    * Gets words
    *  单词评测打分表
    *
    * @return \HuaweiCloud\SDK\Sis\V1\Model\Word[]|null
    */
    public function getWords()
    {
        return $this->container['words'];
    }

    /**
    * Sets words
    *
    * @param \HuaweiCloud\SDK\Sis\V1\Model\Word[]|null $words 单词评测打分表
    *
    * @return $this
    */
    public function setWords($words)
    {
        $this->container['words'] = $words;
        return $this;
    }

    /**
    * Gets traceId
    *  评测失败时定位问题使用的字段
    *
    * @return string|null
    */
    public function getTraceId()
    {
        return $this->container['traceId'];
    }

    /**
    * Sets traceId
    *
    * @param string|null $traceId 评测失败时定位问题使用的字段
    *
    * @return $this
    */
    public function setTraceId($traceId)
    {
        $this->container['traceId'] = $traceId;
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


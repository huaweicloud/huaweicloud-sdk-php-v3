<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Word implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Word';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * text  去除了所有标点符号后的原始文本 前端调用接口后推荐使用“​text​”来在UI 中展示结果
    * textOriginal  接口接收的原始文本
    * textNormalised  原始文本规范化后切分成的单词 如175 会 规范为 [\"one\", \"\"hundred\", \"and\", \"seventy\", \"five\"]
    * outOfVocabulary  是否命中模型发音字典 如果未命中，则表明会根据发音规律推测正确发音
    * startTime  起始时间
    * endTime  结束时间
    * score  综合评分
    * pronunciation  pronunciation
    * fluency  fluency
    * phonemes  音节打分表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'text' => 'string',
            'textOriginal' => 'string',
            'textNormalised' => 'string[]',
            'outOfVocabulary' => 'bool',
            'startTime' => 'float',
            'endTime' => 'float',
            'score' => 'float',
            'pronunciation' => '\HuaweiCloud\SDK\Sis\V1\Model\WordPronunciation',
            'fluency' => '\HuaweiCloud\SDK\Sis\V1\Model\WordFluency',
            'phonemes' => '\HuaweiCloud\SDK\Sis\V1\Model\Phoneme[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * text  去除了所有标点符号后的原始文本 前端调用接口后推荐使用“​text​”来在UI 中展示结果
    * textOriginal  接口接收的原始文本
    * textNormalised  原始文本规范化后切分成的单词 如175 会 规范为 [\"one\", \"\"hundred\", \"and\", \"seventy\", \"five\"]
    * outOfVocabulary  是否命中模型发音字典 如果未命中，则表明会根据发音规律推测正确发音
    * startTime  起始时间
    * endTime  结束时间
    * score  综合评分
    * pronunciation  pronunciation
    * fluency  fluency
    * phonemes  音节打分表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'text' => null,
        'textOriginal' => null,
        'textNormalised' => null,
        'outOfVocabulary' => null,
        'startTime' => 'float',
        'endTime' => 'float',
        'score' => 'float',
        'pronunciation' => null,
        'fluency' => null,
        'phonemes' => null
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
    * text  去除了所有标点符号后的原始文本 前端调用接口后推荐使用“​text​”来在UI 中展示结果
    * textOriginal  接口接收的原始文本
    * textNormalised  原始文本规范化后切分成的单词 如175 会 规范为 [\"one\", \"\"hundred\", \"and\", \"seventy\", \"five\"]
    * outOfVocabulary  是否命中模型发音字典 如果未命中，则表明会根据发音规律推测正确发音
    * startTime  起始时间
    * endTime  结束时间
    * score  综合评分
    * pronunciation  pronunciation
    * fluency  fluency
    * phonemes  音节打分表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'text' => 'text',
            'textOriginal' => 'text_original',
            'textNormalised' => 'text_normalised',
            'outOfVocabulary' => 'out_of_vocabulary',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'score' => 'score',
            'pronunciation' => 'pronunciation',
            'fluency' => 'fluency',
            'phonemes' => 'phonemes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * text  去除了所有标点符号后的原始文本 前端调用接口后推荐使用“​text​”来在UI 中展示结果
    * textOriginal  接口接收的原始文本
    * textNormalised  原始文本规范化后切分成的单词 如175 会 规范为 [\"one\", \"\"hundred\", \"and\", \"seventy\", \"five\"]
    * outOfVocabulary  是否命中模型发音字典 如果未命中，则表明会根据发音规律推测正确发音
    * startTime  起始时间
    * endTime  结束时间
    * score  综合评分
    * pronunciation  pronunciation
    * fluency  fluency
    * phonemes  音节打分表
    *
    * @var string[]
    */
    protected static $setters = [
            'text' => 'setText',
            'textOriginal' => 'setTextOriginal',
            'textNormalised' => 'setTextNormalised',
            'outOfVocabulary' => 'setOutOfVocabulary',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'score' => 'setScore',
            'pronunciation' => 'setPronunciation',
            'fluency' => 'setFluency',
            'phonemes' => 'setPhonemes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * text  去除了所有标点符号后的原始文本 前端调用接口后推荐使用“​text​”来在UI 中展示结果
    * textOriginal  接口接收的原始文本
    * textNormalised  原始文本规范化后切分成的单词 如175 会 规范为 [\"one\", \"\"hundred\", \"and\", \"seventy\", \"five\"]
    * outOfVocabulary  是否命中模型发音字典 如果未命中，则表明会根据发音规律推测正确发音
    * startTime  起始时间
    * endTime  结束时间
    * score  综合评分
    * pronunciation  pronunciation
    * fluency  fluency
    * phonemes  音节打分表
    *
    * @var string[]
    */
    protected static $getters = [
            'text' => 'getText',
            'textOriginal' => 'getTextOriginal',
            'textNormalised' => 'getTextNormalised',
            'outOfVocabulary' => 'getOutOfVocabulary',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'score' => 'getScore',
            'pronunciation' => 'getPronunciation',
            'fluency' => 'getFluency',
            'phonemes' => 'getPhonemes'
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['textOriginal'] = isset($data['textOriginal']) ? $data['textOriginal'] : null;
        $this->container['textNormalised'] = isset($data['textNormalised']) ? $data['textNormalised'] : null;
        $this->container['outOfVocabulary'] = isset($data['outOfVocabulary']) ? $data['outOfVocabulary'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['pronunciation'] = isset($data['pronunciation']) ? $data['pronunciation'] : null;
        $this->container['fluency'] = isset($data['fluency']) ? $data['fluency'] : null;
        $this->container['phonemes'] = isset($data['phonemes']) ? $data['phonemes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        if ($this->container['textOriginal'] === null) {
            $invalidProperties[] = "'textOriginal' can't be null";
        }
        if ($this->container['textNormalised'] === null) {
            $invalidProperties[] = "'textNormalised' can't be null";
        }
            if (!is_null($this->container['score']) && ($this->container['score'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'score', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['score']) && ($this->container['score'] < 0)) {
                $invalidProperties[] = "invalid value for 'score', must be bigger than or equal to 0.";
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
    * Gets text
    *  去除了所有标点符号后的原始文本 前端调用接口后推荐使用“​text​”来在UI 中展示结果
    *
    * @return string
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param string $text 去除了所有标点符号后的原始文本 前端调用接口后推荐使用“​text​”来在UI 中展示结果
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
    * Gets textOriginal
    *  接口接收的原始文本
    *
    * @return string
    */
    public function getTextOriginal()
    {
        return $this->container['textOriginal'];
    }

    /**
    * Sets textOriginal
    *
    * @param string $textOriginal 接口接收的原始文本
    *
    * @return $this
    */
    public function setTextOriginal($textOriginal)
    {
        $this->container['textOriginal'] = $textOriginal;
        return $this;
    }

    /**
    * Gets textNormalised
    *  原始文本规范化后切分成的单词 如175 会 规范为 [\"one\", \"\"hundred\", \"and\", \"seventy\", \"five\"]
    *
    * @return string[]
    */
    public function getTextNormalised()
    {
        return $this->container['textNormalised'];
    }

    /**
    * Sets textNormalised
    *
    * @param string[] $textNormalised 原始文本规范化后切分成的单词 如175 会 规范为 [\"one\", \"\"hundred\", \"and\", \"seventy\", \"five\"]
    *
    * @return $this
    */
    public function setTextNormalised($textNormalised)
    {
        $this->container['textNormalised'] = $textNormalised;
        return $this;
    }

    /**
    * Gets outOfVocabulary
    *  是否命中模型发音字典 如果未命中，则表明会根据发音规律推测正确发音
    *
    * @return bool|null
    */
    public function getOutOfVocabulary()
    {
        return $this->container['outOfVocabulary'];
    }

    /**
    * Sets outOfVocabulary
    *
    * @param bool|null $outOfVocabulary 是否命中模型发音字典 如果未命中，则表明会根据发音规律推测正确发音
    *
    * @return $this
    */
    public function setOutOfVocabulary($outOfVocabulary)
    {
        $this->container['outOfVocabulary'] = $outOfVocabulary;
        return $this;
    }

    /**
    * Gets startTime
    *  起始时间
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
    * @param float|null $startTime 起始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
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
    * @param float|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets score
    *  综合评分
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
    * @param float|null $score 综合评分
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }

    /**
    * Gets pronunciation
    *  pronunciation
    *
    * @return \HuaweiCloud\SDK\Sis\V1\Model\WordPronunciation|null
    */
    public function getPronunciation()
    {
        return $this->container['pronunciation'];
    }

    /**
    * Sets pronunciation
    *
    * @param \HuaweiCloud\SDK\Sis\V1\Model\WordPronunciation|null $pronunciation pronunciation
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
    * @return \HuaweiCloud\SDK\Sis\V1\Model\WordFluency|null
    */
    public function getFluency()
    {
        return $this->container['fluency'];
    }

    /**
    * Sets fluency
    *
    * @param \HuaweiCloud\SDK\Sis\V1\Model\WordFluency|null $fluency fluency
    *
    * @return $this
    */
    public function setFluency($fluency)
    {
        $this->container['fluency'] = $fluency;
        return $this;
    }

    /**
    * Gets phonemes
    *  音节打分表
    *
    * @return \HuaweiCloud\SDK\Sis\V1\Model\Phoneme[]|null
    */
    public function getPhonemes()
    {
        return $this->container['phonemes'];
    }

    /**
    * Sets phonemes
    *
    * @param \HuaweiCloud\SDK\Sis\V1\Model\Phoneme[]|null $phonemes 音节打分表
    *
    * @return $this
    */
    public function setPhonemes($phonemes)
    {
        $this->container['phonemes'] = $phonemes;
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


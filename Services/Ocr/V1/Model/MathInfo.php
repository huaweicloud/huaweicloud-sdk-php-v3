<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MathInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MathInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * questionNumber  数学试卷返回结果，表示题号。
    * answerBlockCount  数学试卷答案的文字块数目。
    * answerBlockList  数学试卷答案识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'questionNumber' => 'string',
            'answerBlockCount' => 'int',
            'answerBlockList' => '\HuaweiCloud\SDK\Ocr\V1\Model\AnswerBlockList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * questionNumber  数学试卷返回结果，表示题号。
    * answerBlockCount  数学试卷答案的文字块数目。
    * answerBlockList  数学试卷答案识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'questionNumber' => null,
        'answerBlockCount' => 'int32',
        'answerBlockList' => null
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
    * questionNumber  数学试卷返回结果，表示题号。
    * answerBlockCount  数学试卷答案的文字块数目。
    * answerBlockList  数学试卷答案识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'questionNumber' => 'question_number',
            'answerBlockCount' => 'answer_block_count',
            'answerBlockList' => 'answer_block_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * questionNumber  数学试卷返回结果，表示题号。
    * answerBlockCount  数学试卷答案的文字块数目。
    * answerBlockList  数学试卷答案识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $setters = [
            'questionNumber' => 'setQuestionNumber',
            'answerBlockCount' => 'setAnswerBlockCount',
            'answerBlockList' => 'setAnswerBlockList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * questionNumber  数学试卷返回结果，表示题号。
    * answerBlockCount  数学试卷答案的文字块数目。
    * answerBlockList  数学试卷答案识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $getters = [
            'questionNumber' => 'getQuestionNumber',
            'answerBlockCount' => 'getAnswerBlockCount',
            'answerBlockList' => 'getAnswerBlockList'
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
        $this->container['questionNumber'] = isset($data['questionNumber']) ? $data['questionNumber'] : null;
        $this->container['answerBlockCount'] = isset($data['answerBlockCount']) ? $data['answerBlockCount'] : null;
        $this->container['answerBlockList'] = isset($data['answerBlockList']) ? $data['answerBlockList'] : null;
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
    * Gets questionNumber
    *  数学试卷返回结果，表示题号。
    *
    * @return string|null
    */
    public function getQuestionNumber()
    {
        return $this->container['questionNumber'];
    }

    /**
    * Sets questionNumber
    *
    * @param string|null $questionNumber 数学试卷返回结果，表示题号。
    *
    * @return $this
    */
    public function setQuestionNumber($questionNumber)
    {
        $this->container['questionNumber'] = $questionNumber;
        return $this;
    }

    /**
    * Gets answerBlockCount
    *  数学试卷答案的文字块数目。
    *
    * @return int|null
    */
    public function getAnswerBlockCount()
    {
        return $this->container['answerBlockCount'];
    }

    /**
    * Sets answerBlockCount
    *
    * @param int|null $answerBlockCount 数学试卷答案的文字块数目。
    *
    * @return $this
    */
    public function setAnswerBlockCount($answerBlockCount)
    {
        $this->container['answerBlockCount'] = $answerBlockCount;
        return $this;
    }

    /**
    * Gets answerBlockList
    *  数学试卷答案识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\AnswerBlockList[]|null
    */
    public function getAnswerBlockList()
    {
        return $this->container['answerBlockList'];
    }

    /**
    * Sets answerBlockList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\AnswerBlockList[]|null $answerBlockList 数学试卷答案识别文字块列表，输出顺序从左到右，从上到下。
    *
    * @return $this
    */
    public function setAnswerBlockList($answerBlockList)
    {
        $this->container['answerBlockList'] = $answerBlockList;
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


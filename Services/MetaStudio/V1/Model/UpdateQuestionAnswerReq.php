<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateQuestionAnswerReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateQuestionAnswerReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * question  标准问题。
    * answer  问题答案。
    * similarQuestions  所有相似问题，多个相似问题间用换行符\\n分隔。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'question' => 'string',
            'answer' => 'string',
            'similarQuestions' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * question  标准问题。
    * answer  问题答案。
    * similarQuestions  所有相似问题，多个相似问题间用换行符\\n分隔。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'question' => null,
        'answer' => null,
        'similarQuestions' => null
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
    * question  标准问题。
    * answer  问题答案。
    * similarQuestions  所有相似问题，多个相似问题间用换行符\\n分隔。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'question' => 'question',
            'answer' => 'answer',
            'similarQuestions' => 'similar_questions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * question  标准问题。
    * answer  问题答案。
    * similarQuestions  所有相似问题，多个相似问题间用换行符\\n分隔。
    *
    * @var string[]
    */
    protected static $setters = [
            'question' => 'setQuestion',
            'answer' => 'setAnswer',
            'similarQuestions' => 'setSimilarQuestions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * question  标准问题。
    * answer  问题答案。
    * similarQuestions  所有相似问题，多个相似问题间用换行符\\n分隔。
    *
    * @var string[]
    */
    protected static $getters = [
            'question' => 'getQuestion',
            'answer' => 'getAnswer',
            'similarQuestions' => 'getSimilarQuestions'
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
        $this->container['question'] = isset($data['question']) ? $data['question'] : null;
        $this->container['answer'] = isset($data['answer']) ? $data['answer'] : null;
        $this->container['similarQuestions'] = isset($data['similarQuestions']) ? $data['similarQuestions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['question']) && (mb_strlen($this->container['question']) > 256)) {
                $invalidProperties[] = "invalid value for 'question', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['question']) && (mb_strlen($this->container['question']) < 1)) {
                $invalidProperties[] = "invalid value for 'question', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['answer']) && (mb_strlen($this->container['answer']) > 2000)) {
                $invalidProperties[] = "invalid value for 'answer', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['answer']) && (mb_strlen($this->container['answer']) < 1)) {
                $invalidProperties[] = "invalid value for 'answer', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['similarQuestions']) && (mb_strlen($this->container['similarQuestions']) > 65535)) {
                $invalidProperties[] = "invalid value for 'similarQuestions', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['similarQuestions']) && (mb_strlen($this->container['similarQuestions']) < 0)) {
                $invalidProperties[] = "invalid value for 'similarQuestions', the character length must be bigger than or equal to 0.";
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
    * Gets question
    *  标准问题。
    *
    * @return string|null
    */
    public function getQuestion()
    {
        return $this->container['question'];
    }

    /**
    * Sets question
    *
    * @param string|null $question 标准问题。
    *
    * @return $this
    */
    public function setQuestion($question)
    {
        $this->container['question'] = $question;
        return $this;
    }

    /**
    * Gets answer
    *  问题答案。
    *
    * @return string|null
    */
    public function getAnswer()
    {
        return $this->container['answer'];
    }

    /**
    * Sets answer
    *
    * @param string|null $answer 问题答案。
    *
    * @return $this
    */
    public function setAnswer($answer)
    {
        $this->container['answer'] = $answer;
        return $this;
    }

    /**
    * Gets similarQuestions
    *  所有相似问题，多个相似问题间用换行符\\n分隔。
    *
    * @return string|null
    */
    public function getSimilarQuestions()
    {
        return $this->container['similarQuestions'];
    }

    /**
    * Sets similarQuestions
    *
    * @param string|null $similarQuestions 所有相似问题，多个相似问题间用换行符\\n分隔。
    *
    * @return $this
    */
    public function setSimilarQuestions($similarQuestions)
    {
        $this->container['similarQuestions'] = $similarQuestions;
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


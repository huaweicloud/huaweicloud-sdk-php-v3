<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KnowledgeQuestionUpdateInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KnowledgeQuestionUpdateInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * questionId  问法ID。
    * question  问法。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'questionId' => 'string',
            'question' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * questionId  问法ID。
    * question  问法。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'questionId' => null,
        'question' => null
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
    * questionId  问法ID。
    * question  问法。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'questionId' => 'question_id',
            'question' => 'question'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * questionId  问法ID。
    * question  问法。
    *
    * @var string[]
    */
    protected static $setters = [
            'questionId' => 'setQuestionId',
            'question' => 'setQuestion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * questionId  问法ID。
    * question  问法。
    *
    * @var string[]
    */
    protected static $getters = [
            'questionId' => 'getQuestionId',
            'question' => 'getQuestion'
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
        $this->container['questionId'] = isset($data['questionId']) ? $data['questionId'] : null;
        $this->container['question'] = isset($data['question']) ? $data['question'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['questionId'] === null) {
            $invalidProperties[] = "'questionId' can't be null";
        }
            if ((mb_strlen($this->container['questionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'questionId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['questionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'questionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['question'] === null) {
            $invalidProperties[] = "'question' can't be null";
        }
            if ((mb_strlen($this->container['question']) > 64)) {
                $invalidProperties[] = "invalid value for 'question', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['question']) < 1)) {
                $invalidProperties[] = "invalid value for 'question', the character length must be bigger than or equal to 1.";
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
    * Gets questionId
    *  问法ID。
    *
    * @return string
    */
    public function getQuestionId()
    {
        return $this->container['questionId'];
    }

    /**
    * Sets questionId
    *
    * @param string $questionId 问法ID。
    *
    * @return $this
    */
    public function setQuestionId($questionId)
    {
        $this->container['questionId'] = $questionId;
        return $this;
    }

    /**
    * Gets question
    *  问法。
    *
    * @return string
    */
    public function getQuestion()
    {
        return $this->container['question'];
    }

    /**
    * Sets question
    *
    * @param string $question 问法。
    *
    * @return $this
    */
    public function setQuestion($question)
    {
        $this->container['question'] = $question;
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


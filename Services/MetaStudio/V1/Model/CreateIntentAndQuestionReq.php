<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateIntentAndQuestionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateIntentAndQuestionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  主题。
    * answer  问题答案。
    * skillId  技能ID。
    * questionList  问法列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'answer' => 'string',
            'skillId' => 'string',
            'questionList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeQuestionCreateInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  主题。
    * answer  问题答案。
    * skillId  技能ID。
    * questionList  问法列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'answer' => null,
        'skillId' => null,
        'questionList' => null
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
    * name  主题。
    * answer  问题答案。
    * skillId  技能ID。
    * questionList  问法列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'answer' => 'answer',
            'skillId' => 'skill_id',
            'questionList' => 'question_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  主题。
    * answer  问题答案。
    * skillId  技能ID。
    * questionList  问法列表
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'answer' => 'setAnswer',
            'skillId' => 'setSkillId',
            'questionList' => 'setQuestionList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  主题。
    * answer  问题答案。
    * skillId  技能ID。
    * questionList  问法列表
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'answer' => 'getAnswer',
            'skillId' => 'getSkillId',
            'questionList' => 'getQuestionList'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['answer'] = isset($data['answer']) ? $data['answer'] : null;
        $this->container['skillId'] = isset($data['skillId']) ? $data['skillId'] : null;
        $this->container['questionList'] = isset($data['questionList']) ? $data['questionList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['answer'] === null) {
            $invalidProperties[] = "'answer' can't be null";
        }
            if ((mb_strlen($this->container['answer']) > 2000)) {
                $invalidProperties[] = "invalid value for 'answer', the character length must be smaller than or equal to 2000.";
            }
            if ((mb_strlen($this->container['answer']) < 1)) {
                $invalidProperties[] = "invalid value for 'answer', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['skillId'] === null) {
            $invalidProperties[] = "'skillId' can't be null";
        }
            if ((mb_strlen($this->container['skillId']) > 64)) {
                $invalidProperties[] = "invalid value for 'skillId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['skillId']) < 1)) {
                $invalidProperties[] = "invalid value for 'skillId', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  主题。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 主题。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets answer
    *  问题答案。
    *
    * @return string
    */
    public function getAnswer()
    {
        return $this->container['answer'];
    }

    /**
    * Sets answer
    *
    * @param string $answer 问题答案。
    *
    * @return $this
    */
    public function setAnswer($answer)
    {
        $this->container['answer'] = $answer;
        return $this;
    }

    /**
    * Gets skillId
    *  技能ID。
    *
    * @return string
    */
    public function getSkillId()
    {
        return $this->container['skillId'];
    }

    /**
    * Sets skillId
    *
    * @param string $skillId 技能ID。
    *
    * @return $this
    */
    public function setSkillId($skillId)
    {
        $this->container['skillId'] = $skillId;
        return $this;
    }

    /**
    * Gets questionList
    *  问法列表
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeQuestionCreateInfo[]|null
    */
    public function getQuestionList()
    {
        return $this->container['questionList'];
    }

    /**
    * Sets questionList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeQuestionCreateInfo[]|null $questionList 问法列表
    *
    * @return $this
    */
    public function setQuestionList($questionList)
    {
        $this->container['questionList'] = $questionList;
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


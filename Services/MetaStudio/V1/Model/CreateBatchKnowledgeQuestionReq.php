<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBatchKnowledgeQuestionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBatchKnowledgeQuestionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * intentId  意图ID。
    * questionList  问法列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'intentId' => 'string',
            'questionList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeQuestionCreateInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * intentId  意图ID。
    * questionList  问法列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'intentId' => null,
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
    * intentId  意图ID。
    * questionList  问法列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'intentId' => 'intent_id',
            'questionList' => 'question_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * intentId  意图ID。
    * questionList  问法列表
    *
    * @var string[]
    */
    protected static $setters = [
            'intentId' => 'setIntentId',
            'questionList' => 'setQuestionList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * intentId  意图ID。
    * questionList  问法列表
    *
    * @var string[]
    */
    protected static $getters = [
            'intentId' => 'getIntentId',
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
        $this->container['intentId'] = isset($data['intentId']) ? $data['intentId'] : null;
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
        if ($this->container['intentId'] === null) {
            $invalidProperties[] = "'intentId' can't be null";
        }
            if ((mb_strlen($this->container['intentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'intentId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['intentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'intentId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['questionList'] === null) {
            $invalidProperties[] = "'questionList' can't be null";
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
    * Gets intentId
    *  意图ID。
    *
    * @return string
    */
    public function getIntentId()
    {
        return $this->container['intentId'];
    }

    /**
    * Sets intentId
    *
    * @param string $intentId 意图ID。
    *
    * @return $this
    */
    public function setIntentId($intentId)
    {
        $this->container['intentId'] = $intentId;
        return $this;
    }

    /**
    * Gets questionList
    *  问法列表
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeQuestionCreateInfo[]
    */
    public function getQuestionList()
    {
        return $this->container['questionList'];
    }

    /**
    * Sets questionList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeQuestionCreateInfo[] $questionList 问法列表
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


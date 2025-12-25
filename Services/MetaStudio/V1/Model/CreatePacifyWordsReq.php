<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePacifyWordsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePacifyWordsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * robotId  应用ID。
    * pacifyWordsType  安抚话术类型 > 0:通用安抚话术, 1:意图匹配安抚话术
    * intent  意图名称
    * pacifyWords  安抚话术。
    * language  language
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'robotId' => 'string',
            'pacifyWordsType' => 'int',
            'intent' => 'string',
            'pacifyWords' => 'string',
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * robotId  应用ID。
    * pacifyWordsType  安抚话术类型 > 0:通用安抚话术, 1:意图匹配安抚话术
    * intent  意图名称
    * pacifyWords  安抚话术。
    * language  language
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'robotId' => null,
        'pacifyWordsType' => null,
        'intent' => null,
        'pacifyWords' => null,
        'language' => null
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
    * robotId  应用ID。
    * pacifyWordsType  安抚话术类型 > 0:通用安抚话术, 1:意图匹配安抚话术
    * intent  意图名称
    * pacifyWords  安抚话术。
    * language  language
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'robotId' => 'robot_id',
            'pacifyWordsType' => 'pacify_words_type',
            'intent' => 'intent',
            'pacifyWords' => 'pacify_words',
            'language' => 'language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * robotId  应用ID。
    * pacifyWordsType  安抚话术类型 > 0:通用安抚话术, 1:意图匹配安抚话术
    * intent  意图名称
    * pacifyWords  安抚话术。
    * language  language
    *
    * @var string[]
    */
    protected static $setters = [
            'robotId' => 'setRobotId',
            'pacifyWordsType' => 'setPacifyWordsType',
            'intent' => 'setIntent',
            'pacifyWords' => 'setPacifyWords',
            'language' => 'setLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * robotId  应用ID。
    * pacifyWordsType  安抚话术类型 > 0:通用安抚话术, 1:意图匹配安抚话术
    * intent  意图名称
    * pacifyWords  安抚话术。
    * language  language
    *
    * @var string[]
    */
    protected static $getters = [
            'robotId' => 'getRobotId',
            'pacifyWordsType' => 'getPacifyWordsType',
            'intent' => 'getIntent',
            'pacifyWords' => 'getPacifyWords',
            'language' => 'getLanguage'
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
        $this->container['robotId'] = isset($data['robotId']) ? $data['robotId'] : null;
        $this->container['pacifyWordsType'] = isset($data['pacifyWordsType']) ? $data['pacifyWordsType'] : null;
        $this->container['intent'] = isset($data['intent']) ? $data['intent'] : null;
        $this->container['pacifyWords'] = isset($data['pacifyWords']) ? $data['pacifyWords'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['robotId'] === null) {
            $invalidProperties[] = "'robotId' can't be null";
        }
            if ((mb_strlen($this->container['robotId']) > 64)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['robotId']) < 1)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['pacifyWordsType'] === null) {
            $invalidProperties[] = "'pacifyWordsType' can't be null";
        }
            if (($this->container['pacifyWordsType'] > 32)) {
                $invalidProperties[] = "invalid value for 'pacifyWordsType', must be smaller than or equal to 32.";
            }
            if (($this->container['pacifyWordsType'] < 0)) {
                $invalidProperties[] = "invalid value for 'pacifyWordsType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['intent']) && (mb_strlen($this->container['intent']) > 64)) {
                $invalidProperties[] = "invalid value for 'intent', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['intent']) && (mb_strlen($this->container['intent']) < 1)) {
                $invalidProperties[] = "invalid value for 'intent', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['pacifyWords'] === null) {
            $invalidProperties[] = "'pacifyWords' can't be null";
        }
            if ((mb_strlen($this->container['pacifyWords']) > 512)) {
                $invalidProperties[] = "invalid value for 'pacifyWords', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['pacifyWords']) < 1)) {
                $invalidProperties[] = "invalid value for 'pacifyWords', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
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
    * Gets robotId
    *  应用ID。
    *
    * @return string
    */
    public function getRobotId()
    {
        return $this->container['robotId'];
    }

    /**
    * Sets robotId
    *
    * @param string $robotId 应用ID。
    *
    * @return $this
    */
    public function setRobotId($robotId)
    {
        $this->container['robotId'] = $robotId;
        return $this;
    }

    /**
    * Gets pacifyWordsType
    *  安抚话术类型 > 0:通用安抚话术, 1:意图匹配安抚话术
    *
    * @return int
    */
    public function getPacifyWordsType()
    {
        return $this->container['pacifyWordsType'];
    }

    /**
    * Sets pacifyWordsType
    *
    * @param int $pacifyWordsType 安抚话术类型 > 0:通用安抚话术, 1:意图匹配安抚话术
    *
    * @return $this
    */
    public function setPacifyWordsType($pacifyWordsType)
    {
        $this->container['pacifyWordsType'] = $pacifyWordsType;
        return $this;
    }

    /**
    * Gets intent
    *  意图名称
    *
    * @return string|null
    */
    public function getIntent()
    {
        return $this->container['intent'];
    }

    /**
    * Sets intent
    *
    * @param string|null $intent 意图名称
    *
    * @return $this
    */
    public function setIntent($intent)
    {
        $this->container['intent'] = $intent;
        return $this;
    }

    /**
    * Gets pacifyWords
    *  安抚话术。
    *
    * @return string
    */
    public function getPacifyWords()
    {
        return $this->container['pacifyWords'];
    }

    /**
    * Sets pacifyWords
    *
    * @param string $pacifyWords 安抚话术。
    *
    * @return $this
    */
    public function setPacifyWords($pacifyWords)
    {
        $this->container['pacifyWords'] = $pacifyWords;
        return $this;
    }

    /**
    * Gets language
    *  language
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum $language language
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
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


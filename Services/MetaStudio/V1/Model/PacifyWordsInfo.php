<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PacifyWordsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PacifyWordsInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pacifyWordsId  安抚话术ID。
    * pacifyWords  安抚话术。
    * language  language
    * robotId  应用ID。
    * pacifyWordsType  安抚话术类型 > 0:通用安抚话术, 1:基于意图匹配安抚话术
    * intent  意图名称
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pacifyWordsId' => 'string',
            'pacifyWords' => 'string',
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum',
            'robotId' => 'string',
            'pacifyWordsType' => 'int',
            'intent' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pacifyWordsId  安抚话术ID。
    * pacifyWords  安抚话术。
    * language  language
    * robotId  应用ID。
    * pacifyWordsType  安抚话术类型 > 0:通用安抚话术, 1:基于意图匹配安抚话术
    * intent  意图名称
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pacifyWordsId' => null,
        'pacifyWords' => null,
        'language' => null,
        'robotId' => null,
        'pacifyWordsType' => null,
        'intent' => null,
        'createTime' => null,
        'updateTime' => null
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
    * pacifyWordsId  安抚话术ID。
    * pacifyWords  安抚话术。
    * language  language
    * robotId  应用ID。
    * pacifyWordsType  安抚话术类型 > 0:通用安抚话术, 1:基于意图匹配安抚话术
    * intent  意图名称
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pacifyWordsId' => 'pacify_words_id',
            'pacifyWords' => 'pacify_words',
            'language' => 'language',
            'robotId' => 'robot_id',
            'pacifyWordsType' => 'pacify_words_type',
            'intent' => 'intent',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pacifyWordsId  安抚话术ID。
    * pacifyWords  安抚话术。
    * language  language
    * robotId  应用ID。
    * pacifyWordsType  安抚话术类型 > 0:通用安抚话术, 1:基于意图匹配安抚话术
    * intent  意图名称
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'pacifyWordsId' => 'setPacifyWordsId',
            'pacifyWords' => 'setPacifyWords',
            'language' => 'setLanguage',
            'robotId' => 'setRobotId',
            'pacifyWordsType' => 'setPacifyWordsType',
            'intent' => 'setIntent',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pacifyWordsId  安抚话术ID。
    * pacifyWords  安抚话术。
    * language  language
    * robotId  应用ID。
    * pacifyWordsType  安抚话术类型 > 0:通用安抚话术, 1:基于意图匹配安抚话术
    * intent  意图名称
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'pacifyWordsId' => 'getPacifyWordsId',
            'pacifyWords' => 'getPacifyWords',
            'language' => 'getLanguage',
            'robotId' => 'getRobotId',
            'pacifyWordsType' => 'getPacifyWordsType',
            'intent' => 'getIntent',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['pacifyWordsId'] = isset($data['pacifyWordsId']) ? $data['pacifyWordsId'] : null;
        $this->container['pacifyWords'] = isset($data['pacifyWords']) ? $data['pacifyWords'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['robotId'] = isset($data['robotId']) ? $data['robotId'] : null;
        $this->container['pacifyWordsType'] = isset($data['pacifyWordsType']) ? $data['pacifyWordsType'] : null;
        $this->container['intent'] = isset($data['intent']) ? $data['intent'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['pacifyWordsId']) && (mb_strlen($this->container['pacifyWordsId']) > 64)) {
                $invalidProperties[] = "invalid value for 'pacifyWordsId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['pacifyWordsId']) && (mb_strlen($this->container['pacifyWordsId']) < 1)) {
                $invalidProperties[] = "invalid value for 'pacifyWordsId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pacifyWords']) && (mb_strlen($this->container['pacifyWords']) > 512)) {
                $invalidProperties[] = "invalid value for 'pacifyWords', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['pacifyWords']) && (mb_strlen($this->container['pacifyWords']) < 1)) {
                $invalidProperties[] = "invalid value for 'pacifyWords', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) > 64)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) < 1)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pacifyWordsType']) && ($this->container['pacifyWordsType'] > 32)) {
                $invalidProperties[] = "invalid value for 'pacifyWordsType', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['pacifyWordsType']) && ($this->container['pacifyWordsType'] < 0)) {
                $invalidProperties[] = "invalid value for 'pacifyWordsType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['intent']) && (mb_strlen($this->container['intent']) > 64)) {
                $invalidProperties[] = "invalid value for 'intent', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['intent']) && (mb_strlen($this->container['intent']) < 1)) {
                $invalidProperties[] = "invalid value for 'intent', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
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
    * Gets pacifyWordsId
    *  安抚话术ID。
    *
    * @return string|null
    */
    public function getPacifyWordsId()
    {
        return $this->container['pacifyWordsId'];
    }

    /**
    * Sets pacifyWordsId
    *
    * @param string|null $pacifyWordsId 安抚话术ID。
    *
    * @return $this
    */
    public function setPacifyWordsId($pacifyWordsId)
    {
        $this->container['pacifyWordsId'] = $pacifyWordsId;
        return $this;
    }

    /**
    * Gets pacifyWords
    *  安抚话术。
    *
    * @return string|null
    */
    public function getPacifyWords()
    {
        return $this->container['pacifyWords'];
    }

    /**
    * Sets pacifyWords
    *
    * @param string|null $pacifyWords 安抚话术。
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
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null $language language
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets robotId
    *  应用ID。
    *
    * @return string|null
    */
    public function getRobotId()
    {
        return $this->container['robotId'];
    }

    /**
    * Sets robotId
    *
    * @param string|null $robotId 应用ID。
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
    *  安抚话术类型 > 0:通用安抚话术, 1:基于意图匹配安抚话术
    *
    * @return int|null
    */
    public function getPacifyWordsType()
    {
        return $this->container['pacifyWordsType'];
    }

    /**
    * Sets pacifyWordsType
    *
    * @param int|null $pacifyWordsType 安抚话术类型 > 0:通用安抚话术, 1:基于意图匹配安抚话术
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
    * Gets createTime
    *  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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


<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KnowledgeIntentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KnowledgeIntentInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * intentId  意图ID。
    * name  主题。
    * identify  意图标识。
    * answer  问题答案。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'intentId' => 'string',
            'name' => 'string',
            'identify' => 'string',
            'answer' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * intentId  意图ID。
    * name  主题。
    * identify  意图标识。
    * answer  问题答案。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'intentId' => null,
        'name' => null,
        'identify' => null,
        'answer' => null,
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
    * intentId  意图ID。
    * name  主题。
    * identify  意图标识。
    * answer  问题答案。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'intentId' => 'intent_id',
            'name' => 'name',
            'identify' => 'identify',
            'answer' => 'answer',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * intentId  意图ID。
    * name  主题。
    * identify  意图标识。
    * answer  问题答案。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'intentId' => 'setIntentId',
            'name' => 'setName',
            'identify' => 'setIdentify',
            'answer' => 'setAnswer',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * intentId  意图ID。
    * name  主题。
    * identify  意图标识。
    * answer  问题答案。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'intentId' => 'getIntentId',
            'name' => 'getName',
            'identify' => 'getIdentify',
            'answer' => 'getAnswer',
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
        $this->container['intentId'] = isset($data['intentId']) ? $data['intentId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['identify'] = isset($data['identify']) ? $data['identify'] : null;
        $this->container['answer'] = isset($data['answer']) ? $data['answer'] : null;
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
            if (!is_null($this->container['intentId']) && (mb_strlen($this->container['intentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'intentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['intentId']) && (mb_strlen($this->container['intentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'intentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['identify']) && (mb_strlen($this->container['identify']) > 32)) {
                $invalidProperties[] = "invalid value for 'identify', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['identify']) && (mb_strlen($this->container['identify']) < 1)) {
                $invalidProperties[] = "invalid value for 'identify', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['answer']) && (mb_strlen($this->container['answer']) > 2000)) {
                $invalidProperties[] = "invalid value for 'answer', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['answer']) && (mb_strlen($this->container['answer']) < 1)) {
                $invalidProperties[] = "invalid value for 'answer', the character length must be bigger than or equal to 1.";
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
    * Gets intentId
    *  意图ID。
    *
    * @return string|null
    */
    public function getIntentId()
    {
        return $this->container['intentId'];
    }

    /**
    * Sets intentId
    *
    * @param string|null $intentId 意图ID。
    *
    * @return $this
    */
    public function setIntentId($intentId)
    {
        $this->container['intentId'] = $intentId;
        return $this;
    }

    /**
    * Gets name
    *  主题。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 主题。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets identify
    *  意图标识。
    *
    * @return string|null
    */
    public function getIdentify()
    {
        return $this->container['identify'];
    }

    /**
    * Sets identify
    *
    * @param string|null $identify 意图标识。
    *
    * @return $this
    */
    public function setIdentify($identify)
    {
        $this->container['identify'] = $identify;
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


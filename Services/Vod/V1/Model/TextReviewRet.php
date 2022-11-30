<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TextReviewRet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TextReviewRet';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * suggestion  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。
    * politics  涉政敏感词列表
    * porn  涉黄敏感词列表
    * abuse  辱骂敏感词列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'suggestion' => 'string',
            'politics' => 'string',
            'porn' => 'string',
            'abuse' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * suggestion  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。
    * politics  涉政敏感词列表
    * porn  涉黄敏感词列表
    * abuse  辱骂敏感词列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'suggestion' => null,
        'politics' => null,
        'porn' => null,
        'abuse' => null
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
    * suggestion  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。
    * politics  涉政敏感词列表
    * porn  涉黄敏感词列表
    * abuse  辱骂敏感词列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'suggestion' => 'suggestion',
            'politics' => 'politics',
            'porn' => 'porn',
            'abuse' => 'abuse'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * suggestion  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。
    * politics  涉政敏感词列表
    * porn  涉黄敏感词列表
    * abuse  辱骂敏感词列表
    *
    * @var string[]
    */
    protected static $setters = [
            'suggestion' => 'setSuggestion',
            'politics' => 'setPolitics',
            'porn' => 'setPorn',
            'abuse' => 'setAbuse'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * suggestion  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。
    * politics  涉政敏感词列表
    * porn  涉黄敏感词列表
    * abuse  辱骂敏感词列表
    *
    * @var string[]
    */
    protected static $getters = [
            'suggestion' => 'getSuggestion',
            'politics' => 'getPolitics',
            'porn' => 'getPorn',
            'abuse' => 'getAbuse'
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
    const SUGGESTION_BLOCK = 'block';
    const SUGGESTION_PASS = 'pass';
    const SUGGESTION_REVIEW = 'review';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSuggestionAllowableValues()
    {
        return [
            self::SUGGESTION_BLOCK,
            self::SUGGESTION_PASS,
            self::SUGGESTION_REVIEW,
        ];
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
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
        $this->container['politics'] = isset($data['politics']) ? $data['politics'] : null;
        $this->container['porn'] = isset($data['porn']) ? $data['porn'] : null;
        $this->container['abuse'] = isset($data['abuse']) ? $data['abuse'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['suggestion'] === null) {
            $invalidProperties[] = "'suggestion' can't be null";
        }
            $allowedValues = $this->getSuggestionAllowableValues();
                if (!is_null($this->container['suggestion']) && !in_array($this->container['suggestion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'suggestion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets suggestion
    *  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。
    *
    * @return string
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string $suggestion 检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
        return $this;
    }

    /**
    * Gets politics
    *  涉政敏感词列表
    *
    * @return string|null
    */
    public function getPolitics()
    {
        return $this->container['politics'];
    }

    /**
    * Sets politics
    *
    * @param string|null $politics 涉政敏感词列表
    *
    * @return $this
    */
    public function setPolitics($politics)
    {
        $this->container['politics'] = $politics;
        return $this;
    }

    /**
    * Gets porn
    *  涉黄敏感词列表
    *
    * @return string|null
    */
    public function getPorn()
    {
        return $this->container['porn'];
    }

    /**
    * Sets porn
    *
    * @param string|null $porn 涉黄敏感词列表
    *
    * @return $this
    */
    public function setPorn($porn)
    {
        $this->container['porn'] = $porn;
        return $this;
    }

    /**
    * Gets abuse
    *  辱骂敏感词列表
    *
    * @return string|null
    */
    public function getAbuse()
    {
        return $this->container['abuse'];
    }

    /**
    * Sets abuse
    *
    * @param string|null $abuse 辱骂敏感词列表
    *
    * @return $this
    */
    public function setAbuse($abuse)
    {
        $this->container['abuse'] = $abuse;
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


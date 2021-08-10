<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PictureReviewRet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PictureReviewRet';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * suggestion  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。
    * offset  截图在视频中的时间偏移值。封面不涉及此字段  单位：秒。
    * url  对应截图/封面的访问URL。
    * politics  政治因素审核结果。
    * terrorism  暴恐元素审核结果。
    * porn  涉黄内容审核结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'suggestion' => 'string',
            'offset' => 'int',
            'url' => 'string',
            'politics' => '\HuaweiCloud\SDK\Vod\V1\Model\ReviewDetail[]',
            'terrorism' => '\HuaweiCloud\SDK\Vod\V1\Model\ReviewDetail[]',
            'porn' => '\HuaweiCloud\SDK\Vod\V1\Model\ReviewDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * suggestion  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。
    * offset  截图在视频中的时间偏移值。封面不涉及此字段  单位：秒。
    * url  对应截图/封面的访问URL。
    * politics  政治因素审核结果。
    * terrorism  暴恐元素审核结果。
    * porn  涉黄内容审核结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'suggestion' => null,
        'offset' => null,
        'url' => null,
        'politics' => null,
        'terrorism' => null,
        'porn' => null
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
    * offset  截图在视频中的时间偏移值。封面不涉及此字段  单位：秒。
    * url  对应截图/封面的访问URL。
    * politics  政治因素审核结果。
    * terrorism  暴恐元素审核结果。
    * porn  涉黄内容审核结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'suggestion' => 'suggestion',
            'offset' => 'offset',
            'url' => 'url',
            'politics' => 'politics',
            'terrorism' => 'terrorism',
            'porn' => 'porn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * suggestion  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。
    * offset  截图在视频中的时间偏移值。封面不涉及此字段  单位：秒。
    * url  对应截图/封面的访问URL。
    * politics  政治因素审核结果。
    * terrorism  暴恐元素审核结果。
    * porn  涉黄内容审核结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'suggestion' => 'setSuggestion',
            'offset' => 'setOffset',
            'url' => 'setUrl',
            'politics' => 'setPolitics',
            'terrorism' => 'setTerrorism',
            'porn' => 'setPorn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * suggestion  检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。
    * offset  截图在视频中的时间偏移值。封面不涉及此字段  单位：秒。
    * url  对应截图/封面的访问URL。
    * politics  政治因素审核结果。
    * terrorism  暴恐元素审核结果。
    * porn  涉黄内容审核结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'suggestion' => 'getSuggestion',
            'offset' => 'getOffset',
            'url' => 'getUrl',
            'politics' => 'getPolitics',
            'terrorism' => 'getTerrorism',
            'porn' => 'getPorn'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['politics'] = isset($data['politics']) ? $data['politics'] : null;
        $this->container['terrorism'] = isset($data['terrorism']) ? $data['terrorism'] : null;
        $this->container['porn'] = isset($data['porn']) ? $data['porn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSuggestionAllowableValues();
                if (!is_null($this->container['suggestion']) && !in_array($this->container['suggestion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'suggestion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
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
    * @return string|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string|null $suggestion 检测结果是否通过。  取值如下： - block：包含敏感信息，不通过。 - pass：不包含敏感信息，通过。 - review：需要人工复检。
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
        return $this;
    }

    /**
    * Gets offset
    *  截图在视频中的时间偏移值。封面不涉及此字段  单位：秒。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 截图在视频中的时间偏移值。封面不涉及此字段  单位：秒。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets url
    *  对应截图/封面的访问URL。
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url 对应截图/封面的访问URL。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets politics
    *  政治因素审核结果。
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ReviewDetail[]|null
    */
    public function getPolitics()
    {
        return $this->container['politics'];
    }

    /**
    * Sets politics
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ReviewDetail[]|null $politics 政治因素审核结果。
    *
    * @return $this
    */
    public function setPolitics($politics)
    {
        $this->container['politics'] = $politics;
        return $this;
    }

    /**
    * Gets terrorism
    *  暴恐元素审核结果。
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ReviewDetail[]|null
    */
    public function getTerrorism()
    {
        return $this->container['terrorism'];
    }

    /**
    * Sets terrorism
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ReviewDetail[]|null $terrorism 暴恐元素审核结果。
    *
    * @return $this
    */
    public function setTerrorism($terrorism)
    {
        $this->container['terrorism'] = $terrorism;
        return $this;
    }

    /**
    * Gets porn
    *  涉黄内容审核结果。
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ReviewDetail[]|null
    */
    public function getPorn()
    {
        return $this->container['porn'];
    }

    /**
    * Sets porn
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ReviewDetail[]|null $porn 涉黄内容审核结果。
    *
    * @return $this
    */
    public function setPorn($porn)
    {
        $this->container['porn'] = $porn;
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


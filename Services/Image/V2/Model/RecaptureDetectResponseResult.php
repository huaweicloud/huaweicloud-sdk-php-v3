<?php

namespace HuaweiCloud\SDK\Image\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecaptureDetectResponseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecaptureDetectResponse_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * suggestion  总体的结论： true：真实 false：虚假 uncertainty：不确定
    * category  标签（如果suggestion为真时，则该值为空字符串，否则不为空）。recapture：翻拍图
    * score  总体置信度，取值范围（0~1）。
    * detail  识别结果详情。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'suggestion' => 'string',
            'category' => 'string',
            'score' => 'string',
            'detail' => '\HuaweiCloud\SDK\Image\V2\Model\RecaptureDetectResponseResultDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * suggestion  总体的结论： true：真实 false：虚假 uncertainty：不确定
    * category  标签（如果suggestion为真时，则该值为空字符串，否则不为空）。recapture：翻拍图
    * score  总体置信度，取值范围（0~1）。
    * detail  识别结果详情。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'suggestion' => null,
        'category' => null,
        'score' => null,
        'detail' => null
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
    * suggestion  总体的结论： true：真实 false：虚假 uncertainty：不确定
    * category  标签（如果suggestion为真时，则该值为空字符串，否则不为空）。recapture：翻拍图
    * score  总体置信度，取值范围（0~1）。
    * detail  识别结果详情。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'suggestion' => 'suggestion',
            'category' => 'category',
            'score' => 'score',
            'detail' => 'detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * suggestion  总体的结论： true：真实 false：虚假 uncertainty：不确定
    * category  标签（如果suggestion为真时，则该值为空字符串，否则不为空）。recapture：翻拍图
    * score  总体置信度，取值范围（0~1）。
    * detail  识别结果详情。
    *
    * @var string[]
    */
    protected static $setters = [
            'suggestion' => 'setSuggestion',
            'category' => 'setCategory',
            'score' => 'setScore',
            'detail' => 'setDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * suggestion  总体的结论： true：真实 false：虚假 uncertainty：不确定
    * category  标签（如果suggestion为真时，则该值为空字符串，否则不为空）。recapture：翻拍图
    * score  总体置信度，取值范围（0~1）。
    * detail  识别结果详情。
    *
    * @var string[]
    */
    protected static $getters = [
            'suggestion' => 'getSuggestion',
            'category' => 'getCategory',
            'score' => 'getScore',
            'detail' => 'getDetail'
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
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
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
    * Gets suggestion
    *  总体的结论： true：真实 false：虚假 uncertainty：不确定
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
    * @param string|null $suggestion 总体的结论： true：真实 false：虚假 uncertainty：不确定
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
        return $this;
    }

    /**
    * Gets category
    *  标签（如果suggestion为真时，则该值为空字符串，否则不为空）。recapture：翻拍图
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 标签（如果suggestion为真时，则该值为空字符串，否则不为空）。recapture：翻拍图
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets score
    *  总体置信度，取值范围（0~1）。
    *
    * @return string|null
    */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
    * Sets score
    *
    * @param string|null $score 总体置信度，取值范围（0~1）。
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }

    /**
    * Gets detail
    *  识别结果详情。
    *
    * @return \HuaweiCloud\SDK\Image\V2\Model\RecaptureDetectResponseResultDetail[]|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param \HuaweiCloud\SDK\Image\V2\Model\RecaptureDetectResponseResultDetail[]|null $detail 识别结果详情。
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
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


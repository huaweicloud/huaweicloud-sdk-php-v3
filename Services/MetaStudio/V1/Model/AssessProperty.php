<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssessProperty implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssessProperty';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * expected  预期信息
    * actual  实际信息
    * suggestion  中文建议
    * suggestionEn  英文建议
    * status  是否超出范围
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'expected' => 'string',
            'actual' => 'string',
            'suggestion' => 'string',
            'suggestionEn' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * expected  预期信息
    * actual  实际信息
    * suggestion  中文建议
    * suggestionEn  英文建议
    * status  是否超出范围
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'expected' => null,
        'actual' => null,
        'suggestion' => null,
        'suggestionEn' => null,
        'status' => null
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
    * expected  预期信息
    * actual  实际信息
    * suggestion  中文建议
    * suggestionEn  英文建议
    * status  是否超出范围
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'expected' => 'expected',
            'actual' => 'actual',
            'suggestion' => 'suggestion',
            'suggestionEn' => 'suggestion_en',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * expected  预期信息
    * actual  实际信息
    * suggestion  中文建议
    * suggestionEn  英文建议
    * status  是否超出范围
    *
    * @var string[]
    */
    protected static $setters = [
            'expected' => 'setExpected',
            'actual' => 'setActual',
            'suggestion' => 'setSuggestion',
            'suggestionEn' => 'setSuggestionEn',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * expected  预期信息
    * actual  实际信息
    * suggestion  中文建议
    * suggestionEn  英文建议
    * status  是否超出范围
    *
    * @var string[]
    */
    protected static $getters = [
            'expected' => 'getExpected',
            'actual' => 'getActual',
            'suggestion' => 'getSuggestion',
            'suggestionEn' => 'getSuggestionEn',
            'status' => 'getStatus'
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
        $this->container['expected'] = isset($data['expected']) ? $data['expected'] : null;
        $this->container['actual'] = isset($data['actual']) ? $data['actual'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
        $this->container['suggestionEn'] = isset($data['suggestionEn']) ? $data['suggestionEn'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['expected']) && (mb_strlen($this->container['expected']) > 2048)) {
                $invalidProperties[] = "invalid value for 'expected', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['expected']) && (mb_strlen($this->container['expected']) < 1)) {
                $invalidProperties[] = "invalid value for 'expected', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['actual']) && (mb_strlen($this->container['actual']) > 2048)) {
                $invalidProperties[] = "invalid value for 'actual', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['actual']) && (mb_strlen($this->container['actual']) < 1)) {
                $invalidProperties[] = "invalid value for 'actual', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['suggestion']) && (mb_strlen($this->container['suggestion']) > 2048)) {
                $invalidProperties[] = "invalid value for 'suggestion', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['suggestion']) && (mb_strlen($this->container['suggestion']) < 1)) {
                $invalidProperties[] = "invalid value for 'suggestion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['suggestionEn']) && (mb_strlen($this->container['suggestionEn']) > 2048)) {
                $invalidProperties[] = "invalid value for 'suggestionEn', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['suggestionEn']) && (mb_strlen($this->container['suggestionEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'suggestionEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 1)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < -1)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to -1.";
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
    * Gets expected
    *  预期信息
    *
    * @return string|null
    */
    public function getExpected()
    {
        return $this->container['expected'];
    }

    /**
    * Sets expected
    *
    * @param string|null $expected 预期信息
    *
    * @return $this
    */
    public function setExpected($expected)
    {
        $this->container['expected'] = $expected;
        return $this;
    }

    /**
    * Gets actual
    *  实际信息
    *
    * @return string|null
    */
    public function getActual()
    {
        return $this->container['actual'];
    }

    /**
    * Sets actual
    *
    * @param string|null $actual 实际信息
    *
    * @return $this
    */
    public function setActual($actual)
    {
        $this->container['actual'] = $actual;
        return $this;
    }

    /**
    * Gets suggestion
    *  中文建议
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
    * @param string|null $suggestion 中文建议
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
        return $this;
    }

    /**
    * Gets suggestionEn
    *  英文建议
    *
    * @return string|null
    */
    public function getSuggestionEn()
    {
        return $this->container['suggestionEn'];
    }

    /**
    * Sets suggestionEn
    *
    * @param string|null $suggestionEn 英文建议
    *
    * @return $this
    */
    public function setSuggestionEn($suggestionEn)
    {
        $this->container['suggestionEn'] = $suggestionEn;
        return $this;
    }

    /**
    * Gets status
    *  是否超出范围
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 是否超出范围
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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


<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegexTestRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RegexTestRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pattern  待测试的正则表达式
    * text  待匹配的文本内容
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pattern' => 'string',
            'text' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pattern  待测试的正则表达式
    * text  待匹配的文本内容
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pattern' => null,
        'text' => null
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
    * pattern  待测试的正则表达式
    * text  待匹配的文本内容
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pattern' => 'pattern',
            'text' => 'text'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pattern  待测试的正则表达式
    * text  待匹配的文本内容
    *
    * @var string[]
    */
    protected static $setters = [
            'pattern' => 'setPattern',
            'text' => 'setText'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pattern  待测试的正则表达式
    * text  待匹配的文本内容
    *
    * @var string[]
    */
    protected static $getters = [
            'pattern' => 'getPattern',
            'text' => 'getText'
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
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pattern'] === null) {
            $invalidProperties[] = "'pattern' can't be null";
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
    * Gets pattern
    *  待测试的正则表达式
    *
    * @return string
    */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
    * Sets pattern
    *
    * @param string $pattern 待测试的正则表达式
    *
    * @return $this
    */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;
        return $this;
    }

    /**
    * Gets text
    *  待匹配的文本内容
    *
    * @return string|null
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param string|null $text 待匹配的文本内容
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
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


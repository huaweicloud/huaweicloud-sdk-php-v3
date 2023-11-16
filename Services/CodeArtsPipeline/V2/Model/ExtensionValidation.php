<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtensionValidation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtensionValidation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requiredMessage  消息
    * regex  正则
    * regexMessage  正则消息
    * maxLength  最大长度
    * minLength  最小长度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requiredMessage' => 'string',
            'regex' => 'string',
            'regexMessage' => 'string',
            'maxLength' => 'int',
            'minLength' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requiredMessage  消息
    * regex  正则
    * regexMessage  正则消息
    * maxLength  最大长度
    * minLength  最小长度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requiredMessage' => null,
        'regex' => null,
        'regexMessage' => null,
        'maxLength' => 'int32',
        'minLength' => 'int32'
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
    * requiredMessage  消息
    * regex  正则
    * regexMessage  正则消息
    * maxLength  最大长度
    * minLength  最小长度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requiredMessage' => 'required_message',
            'regex' => 'regex',
            'regexMessage' => 'regex_message',
            'maxLength' => 'max_length',
            'minLength' => 'min_length'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requiredMessage  消息
    * regex  正则
    * regexMessage  正则消息
    * maxLength  最大长度
    * minLength  最小长度
    *
    * @var string[]
    */
    protected static $setters = [
            'requiredMessage' => 'setRequiredMessage',
            'regex' => 'setRegex',
            'regexMessage' => 'setRegexMessage',
            'maxLength' => 'setMaxLength',
            'minLength' => 'setMinLength'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requiredMessage  消息
    * regex  正则
    * regexMessage  正则消息
    * maxLength  最大长度
    * minLength  最小长度
    *
    * @var string[]
    */
    protected static $getters = [
            'requiredMessage' => 'getRequiredMessage',
            'regex' => 'getRegex',
            'regexMessage' => 'getRegexMessage',
            'maxLength' => 'getMaxLength',
            'minLength' => 'getMinLength'
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
        $this->container['requiredMessage'] = isset($data['requiredMessage']) ? $data['requiredMessage'] : null;
        $this->container['regex'] = isset($data['regex']) ? $data['regex'] : null;
        $this->container['regexMessage'] = isset($data['regexMessage']) ? $data['regexMessage'] : null;
        $this->container['maxLength'] = isset($data['maxLength']) ? $data['maxLength'] : null;
        $this->container['minLength'] = isset($data['minLength']) ? $data['minLength'] : null;
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
    * Gets requiredMessage
    *  消息
    *
    * @return string|null
    */
    public function getRequiredMessage()
    {
        return $this->container['requiredMessage'];
    }

    /**
    * Sets requiredMessage
    *
    * @param string|null $requiredMessage 消息
    *
    * @return $this
    */
    public function setRequiredMessage($requiredMessage)
    {
        $this->container['requiredMessage'] = $requiredMessage;
        return $this;
    }

    /**
    * Gets regex
    *  正则
    *
    * @return string|null
    */
    public function getRegex()
    {
        return $this->container['regex'];
    }

    /**
    * Sets regex
    *
    * @param string|null $regex 正则
    *
    * @return $this
    */
    public function setRegex($regex)
    {
        $this->container['regex'] = $regex;
        return $this;
    }

    /**
    * Gets regexMessage
    *  正则消息
    *
    * @return string|null
    */
    public function getRegexMessage()
    {
        return $this->container['regexMessage'];
    }

    /**
    * Sets regexMessage
    *
    * @param string|null $regexMessage 正则消息
    *
    * @return $this
    */
    public function setRegexMessage($regexMessage)
    {
        $this->container['regexMessage'] = $regexMessage;
        return $this;
    }

    /**
    * Gets maxLength
    *  最大长度
    *
    * @return int|null
    */
    public function getMaxLength()
    {
        return $this->container['maxLength'];
    }

    /**
    * Sets maxLength
    *
    * @param int|null $maxLength 最大长度
    *
    * @return $this
    */
    public function setMaxLength($maxLength)
    {
        $this->container['maxLength'] = $maxLength;
        return $this;
    }

    /**
    * Gets minLength
    *  最小长度
    *
    * @return int|null
    */
    public function getMinLength()
    {
        return $this->container['minLength'];
    }

    /**
    * Sets minLength
    *
    * @param int|null $minLength 最小长度
    *
    * @return $this
    */
    public function setMinLength($minLength)
    {
        $this->container['minLength'] = $minLength;
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


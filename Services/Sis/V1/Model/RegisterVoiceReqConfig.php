<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegisterVoiceReqConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RegisterVoiceReq_config';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * voiceName  注册声音的名称，不能以数字、下划线开头。仅包含大、小写英文字母、数字和下划线，且长度不超过20个字符。一个project id下的声音名称不能重复。
    * language  data中语音数据的语种，取值chinese、english。 默认是chinese。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'voiceName' => 'string',
            'language' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * voiceName  注册声音的名称，不能以数字、下划线开头。仅包含大、小写英文字母、数字和下划线，且长度不超过20个字符。一个project id下的声音名称不能重复。
    * language  data中语音数据的语种，取值chinese、english。 默认是chinese。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'voiceName' => null,
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
    * voiceName  注册声音的名称，不能以数字、下划线开头。仅包含大、小写英文字母、数字和下划线，且长度不超过20个字符。一个project id下的声音名称不能重复。
    * language  data中语音数据的语种，取值chinese、english。 默认是chinese。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'voiceName' => 'voice_name',
            'language' => 'language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * voiceName  注册声音的名称，不能以数字、下划线开头。仅包含大、小写英文字母、数字和下划线，且长度不超过20个字符。一个project id下的声音名称不能重复。
    * language  data中语音数据的语种，取值chinese、english。 默认是chinese。
    *
    * @var string[]
    */
    protected static $setters = [
            'voiceName' => 'setVoiceName',
            'language' => 'setLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * voiceName  注册声音的名称，不能以数字、下划线开头。仅包含大、小写英文字母、数字和下划线，且长度不超过20个字符。一个project id下的声音名称不能重复。
    * language  data中语音数据的语种，取值chinese、english。 默认是chinese。
    *
    * @var string[]
    */
    protected static $getters = [
            'voiceName' => 'getVoiceName',
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
        $this->container['voiceName'] = isset($data['voiceName']) ? $data['voiceName'] : null;
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
        if ($this->container['voiceName'] === null) {
            $invalidProperties[] = "'voiceName' can't be null";
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
    * Gets voiceName
    *  注册声音的名称，不能以数字、下划线开头。仅包含大、小写英文字母、数字和下划线，且长度不超过20个字符。一个project id下的声音名称不能重复。
    *
    * @return string
    */
    public function getVoiceName()
    {
        return $this->container['voiceName'];
    }

    /**
    * Sets voiceName
    *
    * @param string $voiceName 注册声音的名称，不能以数字、下划线开头。仅包含大、小写英文字母、数字和下划线，且长度不超过20个字符。一个project id下的声音名称不能重复。
    *
    * @return $this
    */
    public function setVoiceName($voiceName)
    {
        $this->container['voiceName'] = $voiceName;
        return $this;
    }

    /**
    * Gets language
    *  data中语音数据的语种，取值chinese、english。 默认是chinese。
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language data中语音数据的语种，取值chinese、english。 默认是chinese。
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


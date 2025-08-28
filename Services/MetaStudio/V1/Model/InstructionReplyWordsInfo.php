<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstructionReplyWordsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstructionReplyWordsInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * language  language
    * replyWords  回复话术，多个回复话术间用换行符\\n分隔。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum',
            'replyWords' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * language  language
    * replyWords  回复话术，多个回复话术间用换行符\\n分隔。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'language' => null,
        'replyWords' => null
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
    * language  language
    * replyWords  回复话术，多个回复话术间用换行符\\n分隔。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'language' => 'language',
            'replyWords' => 'reply_words'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * language  language
    * replyWords  回复话术，多个回复话术间用换行符\\n分隔。
    *
    * @var string[]
    */
    protected static $setters = [
            'language' => 'setLanguage',
            'replyWords' => 'setReplyWords'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * language  language
    * replyWords  回复话术，多个回复话术间用换行符\\n分隔。
    *
    * @var string[]
    */
    protected static $getters = [
            'language' => 'getLanguage',
            'replyWords' => 'getReplyWords'
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
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['replyWords'] = isset($data['replyWords']) ? $data['replyWords'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['replyWords'] === null) {
            $invalidProperties[] = "'replyWords' can't be null";
        }
            if ((mb_strlen($this->container['replyWords']) > 65535)) {
                $invalidProperties[] = "invalid value for 'replyWords', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['replyWords']) < 0)) {
                $invalidProperties[] = "invalid value for 'replyWords', the character length must be bigger than or equal to 0.";
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
    * Gets replyWords
    *  回复话术，多个回复话术间用换行符\\n分隔。
    *
    * @return string
    */
    public function getReplyWords()
    {
        return $this->container['replyWords'];
    }

    /**
    * Sets replyWords
    *
    * @param string $replyWords 回复话术，多个回复话术间用换行符\\n分隔。
    *
    * @return $this
    */
    public function setReplyWords($replyWords)
    {
        $this->container['replyWords'] = $replyWords;
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


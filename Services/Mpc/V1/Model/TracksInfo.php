<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TracksInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TracksInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * channelLayout  音频轨的声道layout
    * language  音频轨对应语言描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'channelLayout' => 'string',
            'language' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * channelLayout  音频轨的声道layout
    * language  音频轨对应语言描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'channelLayout' => null,
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
    * channelLayout  音频轨的声道layout
    * language  音频轨对应语言描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'channelLayout' => 'channel_layout',
            'language' => 'language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * channelLayout  音频轨的声道layout
    * language  音频轨对应语言描述
    *
    * @var string[]
    */
    protected static $setters = [
            'channelLayout' => 'setChannelLayout',
            'language' => 'setLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * channelLayout  音频轨的声道layout
    * language  音频轨对应语言描述
    *
    * @var string[]
    */
    protected static $getters = [
            'channelLayout' => 'getChannelLayout',
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
        $this->container['channelLayout'] = isset($data['channelLayout']) ? $data['channelLayout'] : null;
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
            if (!is_null($this->container['channelLayout']) && (mb_strlen($this->container['channelLayout']) > 64)) {
                $invalidProperties[] = "invalid value for 'channelLayout', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['channelLayout']) && (mb_strlen($this->container['channelLayout']) < 0)) {
                $invalidProperties[] = "invalid value for 'channelLayout', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 16)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 0)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 0.";
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
    * Gets channelLayout
    *  音频轨的声道layout
    *
    * @return string|null
    */
    public function getChannelLayout()
    {
        return $this->container['channelLayout'];
    }

    /**
    * Sets channelLayout
    *
    * @param string|null $channelLayout 音频轨的声道layout
    *
    * @return $this
    */
    public function setChannelLayout($channelLayout)
    {
        $this->container['channelLayout'] = $channelLayout;
        return $this;
    }

    /**
    * Gets language
    *  音频轨对应语言描述
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
    * @param string|null $language 音频轨对应语言描述
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


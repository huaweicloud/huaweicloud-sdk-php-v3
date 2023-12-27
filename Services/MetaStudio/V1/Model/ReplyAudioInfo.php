<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplyAudioInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplyAudioInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * audioUrl  音频URL
    * audioName  音频名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'audioUrl' => 'string',
            'audioName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * audioUrl  音频URL
    * audioName  音频名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'audioUrl' => null,
        'audioName' => null
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
    * audioUrl  音频URL
    * audioName  音频名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'audioUrl' => 'audio_url',
            'audioName' => 'audio_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * audioUrl  音频URL
    * audioName  音频名
    *
    * @var string[]
    */
    protected static $setters = [
            'audioUrl' => 'setAudioUrl',
            'audioName' => 'setAudioName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * audioUrl  音频URL
    * audioName  音频名
    *
    * @var string[]
    */
    protected static $getters = [
            'audioUrl' => 'getAudioUrl',
            'audioName' => 'getAudioName'
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
        $this->container['audioUrl'] = isset($data['audioUrl']) ? $data['audioUrl'] : null;
        $this->container['audioName'] = isset($data['audioName']) ? $data['audioName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['audioUrl']) && (mb_strlen($this->container['audioUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'audioUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['audioUrl']) && (mb_strlen($this->container['audioUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioName']) && (mb_strlen($this->container['audioName']) > 256)) {
                $invalidProperties[] = "invalid value for 'audioName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['audioName']) && (mb_strlen($this->container['audioName']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioName', the character length must be bigger than or equal to 0.";
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
    * Gets audioUrl
    *  音频URL
    *
    * @return string|null
    */
    public function getAudioUrl()
    {
        return $this->container['audioUrl'];
    }

    /**
    * Sets audioUrl
    *
    * @param string|null $audioUrl 音频URL
    *
    * @return $this
    */
    public function setAudioUrl($audioUrl)
    {
        $this->container['audioUrl'] = $audioUrl;
        return $this;
    }

    /**
    * Gets audioName
    *  音频名
    *
    * @return string|null
    */
    public function getAudioName()
    {
        return $this->container['audioName'];
    }

    /**
    * Sets audioName
    *
    * @param string|null $audioName 音频名
    *
    * @return $this
    */
    public function setAudioName($audioName)
    {
        $this->container['audioName'] = $audioName;
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


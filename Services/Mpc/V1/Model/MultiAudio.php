<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MultiAudio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MultiAudio';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tracksInfo  音轨信息
    * audioFiles  音频文件
    * defaultLanguage  默认语言
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tracksInfo' => '\HuaweiCloud\SDK\Mpc\V1\Model\TracksInfo[]',
            'audioFiles' => '\HuaweiCloud\SDK\Mpc\V1\Model\AudioFile[]',
            'defaultLanguage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tracksInfo  音轨信息
    * audioFiles  音频文件
    * defaultLanguage  默认语言
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tracksInfo' => null,
        'audioFiles' => null,
        'defaultLanguage' => null
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
    * tracksInfo  音轨信息
    * audioFiles  音频文件
    * defaultLanguage  默认语言
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tracksInfo' => 'tracks_info',
            'audioFiles' => 'audio_files',
            'defaultLanguage' => 'default_language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tracksInfo  音轨信息
    * audioFiles  音频文件
    * defaultLanguage  默认语言
    *
    * @var string[]
    */
    protected static $setters = [
            'tracksInfo' => 'setTracksInfo',
            'audioFiles' => 'setAudioFiles',
            'defaultLanguage' => 'setDefaultLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tracksInfo  音轨信息
    * audioFiles  音频文件
    * defaultLanguage  默认语言
    *
    * @var string[]
    */
    protected static $getters = [
            'tracksInfo' => 'getTracksInfo',
            'audioFiles' => 'getAudioFiles',
            'defaultLanguage' => 'getDefaultLanguage'
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
        $this->container['tracksInfo'] = isset($data['tracksInfo']) ? $data['tracksInfo'] : null;
        $this->container['audioFiles'] = isset($data['audioFiles']) ? $data['audioFiles'] : null;
        $this->container['defaultLanguage'] = isset($data['defaultLanguage']) ? $data['defaultLanguage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['defaultLanguage']) && (mb_strlen($this->container['defaultLanguage']) > 16)) {
                $invalidProperties[] = "invalid value for 'defaultLanguage', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['defaultLanguage']) && (mb_strlen($this->container['defaultLanguage']) < 0)) {
                $invalidProperties[] = "invalid value for 'defaultLanguage', the character length must be bigger than or equal to 0.";
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
    * Gets tracksInfo
    *  音轨信息
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\TracksInfo[]|null
    */
    public function getTracksInfo()
    {
        return $this->container['tracksInfo'];
    }

    /**
    * Sets tracksInfo
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\TracksInfo[]|null $tracksInfo 音轨信息
    *
    * @return $this
    */
    public function setTracksInfo($tracksInfo)
    {
        $this->container['tracksInfo'] = $tracksInfo;
        return $this;
    }

    /**
    * Gets audioFiles
    *  音频文件
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\AudioFile[]|null
    */
    public function getAudioFiles()
    {
        return $this->container['audioFiles'];
    }

    /**
    * Sets audioFiles
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\AudioFile[]|null $audioFiles 音频文件
    *
    * @return $this
    */
    public function setAudioFiles($audioFiles)
    {
        $this->container['audioFiles'] = $audioFiles;
        return $this;
    }

    /**
    * Gets defaultLanguage
    *  默认语言
    *
    * @return string|null
    */
    public function getDefaultLanguage()
    {
        return $this->container['defaultLanguage'];
    }

    /**
    * Sets defaultLanguage
    *
    * @param string|null $defaultLanguage 默认语言
    *
    * @return $this
    */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->container['defaultLanguage'] = $defaultLanguage;
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


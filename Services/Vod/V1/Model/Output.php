<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Output implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Output';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * playType  协议类型。  取值如下： - hls - dash - mp4
    * url  播放URL。
    * encrypted  标记流是否已被加密。  取值如下： - 0：表示未加密。 - 1：表示已被加密。
    * quality  清晰度。  取值如下： - FLUENT：流畅 - SD：标清 - HD：高清 - FULL_HD：超清
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'playType' => 'string',
            'url' => 'string',
            'encrypted' => 'int',
            'quality' => 'string',
            'metaData' => '\HuaweiCloud\SDK\Vod\V1\Model\MetaData'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * playType  协议类型。  取值如下： - hls - dash - mp4
    * url  播放URL。
    * encrypted  标记流是否已被加密。  取值如下： - 0：表示未加密。 - 1：表示已被加密。
    * quality  清晰度。  取值如下： - FLUENT：流畅 - SD：标清 - HD：高清 - FULL_HD：超清
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'playType' => null,
        'url' => null,
        'encrypted' => null,
        'quality' => null,
        'metaData' => null
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
    * playType  协议类型。  取值如下： - hls - dash - mp4
    * url  播放URL。
    * encrypted  标记流是否已被加密。  取值如下： - 0：表示未加密。 - 1：表示已被加密。
    * quality  清晰度。  取值如下： - FLUENT：流畅 - SD：标清 - HD：高清 - FULL_HD：超清
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'playType' => 'play_type',
            'url' => 'url',
            'encrypted' => 'encrypted',
            'quality' => 'quality',
            'metaData' => 'meta_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * playType  协议类型。  取值如下： - hls - dash - mp4
    * url  播放URL。
    * encrypted  标记流是否已被加密。  取值如下： - 0：表示未加密。 - 1：表示已被加密。
    * quality  清晰度。  取值如下： - FLUENT：流畅 - SD：标清 - HD：高清 - FULL_HD：超清
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $setters = [
            'playType' => 'setPlayType',
            'url' => 'setUrl',
            'encrypted' => 'setEncrypted',
            'quality' => 'setQuality',
            'metaData' => 'setMetaData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * playType  协议类型。  取值如下： - hls - dash - mp4
    * url  播放URL。
    * encrypted  标记流是否已被加密。  取值如下： - 0：表示未加密。 - 1：表示已被加密。
    * quality  清晰度。  取值如下： - FLUENT：流畅 - SD：标清 - HD：高清 - FULL_HD：超清
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $getters = [
            'playType' => 'getPlayType',
            'url' => 'getUrl',
            'encrypted' => 'getEncrypted',
            'quality' => 'getQuality',
            'metaData' => 'getMetaData'
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
    const PLAY_TYPE_HLS = 'HLS';
    const PLAY_TYPE_DASH = 'DASH';
    const PLAY_TYPE_MP4 = 'MP4';
    const PLAY_TYPE_MP3 = 'MP3';
    const PLAY_TYPE_AAC = 'AAC';
    const QUALITY_FLUENT = 'FLUENT';
    const QUALITY_SD = 'SD';
    const QUALITY_HD = 'HD';
    const QUALITY_FULL_HD = 'FULL_HD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPlayTypeAllowableValues()
    {
        return [
            self::PLAY_TYPE_HLS,
            self::PLAY_TYPE_DASH,
            self::PLAY_TYPE_MP4,
            self::PLAY_TYPE_MP3,
            self::PLAY_TYPE_AAC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getQualityAllowableValues()
    {
        return [
            self::QUALITY_FLUENT,
            self::QUALITY_SD,
            self::QUALITY_HD,
            self::QUALITY_FULL_HD,
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
        $this->container['playType'] = isset($data['playType']) ? $data['playType'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['encrypted'] = isset($data['encrypted']) ? $data['encrypted'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['playType'] === null) {
            $invalidProperties[] = "'playType' can't be null";
        }
            $allowedValues = $this->getPlayTypeAllowableValues();
                if (!is_null($this->container['playType']) && !in_array($this->container['playType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'playType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
            $allowedValues = $this->getQualityAllowableValues();
                if (!is_null($this->container['quality']) && !in_array($this->container['quality'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'quality', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['metaData'] === null) {
            $invalidProperties[] = "'metaData' can't be null";
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
    * Gets playType
    *  协议类型。  取值如下： - hls - dash - mp4
    *
    * @return string
    */
    public function getPlayType()
    {
        return $this->container['playType'];
    }

    /**
    * Sets playType
    *
    * @param string $playType 协议类型。  取值如下： - hls - dash - mp4
    *
    * @return $this
    */
    public function setPlayType($playType)
    {
        $this->container['playType'] = $playType;
        return $this;
    }

    /**
    * Gets url
    *  播放URL。
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
    * @param string $url 播放URL。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets encrypted
    *  标记流是否已被加密。  取值如下： - 0：表示未加密。 - 1：表示已被加密。
    *
    * @return int|null
    */
    public function getEncrypted()
    {
        return $this->container['encrypted'];
    }

    /**
    * Sets encrypted
    *
    * @param int|null $encrypted 标记流是否已被加密。  取值如下： - 0：表示未加密。 - 1：表示已被加密。
    *
    * @return $this
    */
    public function setEncrypted($encrypted)
    {
        $this->container['encrypted'] = $encrypted;
        return $this;
    }

    /**
    * Gets quality
    *  清晰度。  取值如下： - FLUENT：流畅 - SD：标清 - HD：高清 - FULL_HD：超清
    *
    * @return string|null
    */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
    * Sets quality
    *
    * @param string|null $quality 清晰度。  取值如下： - FLUENT：流畅 - SD：标清 - HD：高清 - FULL_HD：超清
    *
    * @return $this
    */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;
        return $this;
    }

    /**
    * Gets metaData
    *  metaData
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\MetaData
    */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
    * Sets metaData
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\MetaData $metaData metaData
    *
    * @return $this
    */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;
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


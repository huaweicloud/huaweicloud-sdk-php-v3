<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoCreateRequestData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoCreateRequest_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  视频url地址
    * frameInterval  截帧频率间隔，单位为秒，取值范围为1~60s；若不传递默认5s截帧一次
    * language  支持的语言，默认为zh zh：中文
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'frameInterval' => 'int',
            'language' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  视频url地址
    * frameInterval  截帧频率间隔，单位为秒，取值范围为1~60s；若不传递默认5s截帧一次
    * language  支持的语言，默认为zh zh：中文
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'frameInterval' => 'int32',
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
    * url  视频url地址
    * frameInterval  截帧频率间隔，单位为秒，取值范围为1~60s；若不传递默认5s截帧一次
    * language  支持的语言，默认为zh zh：中文
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'frameInterval' => 'frame_interval',
            'language' => 'language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  视频url地址
    * frameInterval  截帧频率间隔，单位为秒，取值范围为1~60s；若不传递默认5s截帧一次
    * language  支持的语言，默认为zh zh：中文
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'frameInterval' => 'setFrameInterval',
            'language' => 'setLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  视频url地址
    * frameInterval  截帧频率间隔，单位为秒，取值范围为1~60s；若不传递默认5s截帧一次
    * language  支持的语言，默认为zh zh：中文
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'frameInterval' => 'getFrameInterval',
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
    const LANGUAGE_ZH = 'zh';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_ZH,
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['frameInterval'] = isset($data['frameInterval']) ? $data['frameInterval'] : null;
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
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
            $allowedValues = $this->getLanguageAllowableValues();
                if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets url
    *  视频url地址
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
    * @param string $url 视频url地址
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets frameInterval
    *  截帧频率间隔，单位为秒，取值范围为1~60s；若不传递默认5s截帧一次
    *
    * @return int|null
    */
    public function getFrameInterval()
    {
        return $this->container['frameInterval'];
    }

    /**
    * Sets frameInterval
    *
    * @param int|null $frameInterval 截帧频率间隔，单位为秒，取值范围为1~60s；若不传递默认5s截帧一次
    *
    * @return $this
    */
    public function setFrameInterval($frameInterval)
    {
        $this->container['frameInterval'] = $frameInterval;
        return $this;
    }

    /**
    * Gets language
    *  支持的语言，默认为zh zh：中文
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
    * @param string|null $language 支持的语言，默认为zh zh：中文
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


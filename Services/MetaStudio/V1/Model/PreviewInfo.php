<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PreviewInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PreviewInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * textSha256  文本内容hash值
    * audioFileDownloadUrl  文本对应音频文件下载链接
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'textSha256' => 'string',
            'audioFileDownloadUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * textSha256  文本内容hash值
    * audioFileDownloadUrl  文本对应音频文件下载链接
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'textSha256' => null,
        'audioFileDownloadUrl' => null
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
    * textSha256  文本内容hash值
    * audioFileDownloadUrl  文本对应音频文件下载链接
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'textSha256' => 'text_sha256',
            'audioFileDownloadUrl' => 'audio_file_download_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * textSha256  文本内容hash值
    * audioFileDownloadUrl  文本对应音频文件下载链接
    *
    * @var string[]
    */
    protected static $setters = [
            'textSha256' => 'setTextSha256',
            'audioFileDownloadUrl' => 'setAudioFileDownloadUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * textSha256  文本内容hash值
    * audioFileDownloadUrl  文本对应音频文件下载链接
    *
    * @var string[]
    */
    protected static $getters = [
            'textSha256' => 'getTextSha256',
            'audioFileDownloadUrl' => 'getAudioFileDownloadUrl'
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
        $this->container['textSha256'] = isset($data['textSha256']) ? $data['textSha256'] : null;
        $this->container['audioFileDownloadUrl'] = isset($data['audioFileDownloadUrl']) ? $data['audioFileDownloadUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['textSha256']) && (mb_strlen($this->container['textSha256']) > 64)) {
                $invalidProperties[] = "invalid value for 'textSha256', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['textSha256']) && (mb_strlen($this->container['textSha256']) < 64)) {
                $invalidProperties[] = "invalid value for 'textSha256', the character length must be bigger than or equal to 64.";
            }
            if (!is_null($this->container['audioFileDownloadUrl']) && (mb_strlen($this->container['audioFileDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'audioFileDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['audioFileDownloadUrl']) && (mb_strlen($this->container['audioFileDownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'audioFileDownloadUrl', the character length must be bigger than or equal to 1.";
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
    * Gets textSha256
    *  文本内容hash值
    *
    * @return string|null
    */
    public function getTextSha256()
    {
        return $this->container['textSha256'];
    }

    /**
    * Sets textSha256
    *
    * @param string|null $textSha256 文本内容hash值
    *
    * @return $this
    */
    public function setTextSha256($textSha256)
    {
        $this->container['textSha256'] = $textSha256;
        return $this;
    }

    /**
    * Gets audioFileDownloadUrl
    *  文本对应音频文件下载链接
    *
    * @return string|null
    */
    public function getAudioFileDownloadUrl()
    {
        return $this->container['audioFileDownloadUrl'];
    }

    /**
    * Sets audioFileDownloadUrl
    *
    * @param string|null $audioFileDownloadUrl 文本对应音频文件下载链接
    *
    * @return $this
    */
    public function setAudioFileDownloadUrl($audioFileDownloadUrl)
    {
        $this->container['audioFileDownloadUrl'] = $audioFileDownloadUrl;
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


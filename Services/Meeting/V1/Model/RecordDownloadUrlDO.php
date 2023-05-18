<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordDownloadUrlDO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordDownloadUrlDO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * token  下载鉴权token，下载文件时，使用该token鉴权。（一小时内有效，使用后立即失效）。
    * fileType  文件类型。 * Aux：辅流（会议中的共享画面；分辨率为720p） * Hd：高清（会议中的视频画面；分辨率和会议中视频画面的分辨率一致，1080p或者720p） * Sd：标清（会议中视频画面和共享画面的合成画面，视频画面是大画面，共享画面是小画面，共享画面布局在右下方；分辨率为4CIF） > 单个MP4文件大小不超过1GB。
    * url  文件下载url，最大1000个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'token' => 'string',
            'fileType' => 'string',
            'url' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * token  下载鉴权token，下载文件时，使用该token鉴权。（一小时内有效，使用后立即失效）。
    * fileType  文件类型。 * Aux：辅流（会议中的共享画面；分辨率为720p） * Hd：高清（会议中的视频画面；分辨率和会议中视频画面的分辨率一致，1080p或者720p） * Sd：标清（会议中视频画面和共享画面的合成画面，视频画面是大画面，共享画面是小画面，共享画面布局在右下方；分辨率为4CIF） > 单个MP4文件大小不超过1GB。
    * url  文件下载url，最大1000个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'token' => null,
        'fileType' => null,
        'url' => null
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
    * token  下载鉴权token，下载文件时，使用该token鉴权。（一小时内有效，使用后立即失效）。
    * fileType  文件类型。 * Aux：辅流（会议中的共享画面；分辨率为720p） * Hd：高清（会议中的视频画面；分辨率和会议中视频画面的分辨率一致，1080p或者720p） * Sd：标清（会议中视频画面和共享画面的合成画面，视频画面是大画面，共享画面是小画面，共享画面布局在右下方；分辨率为4CIF） > 单个MP4文件大小不超过1GB。
    * url  文件下载url，最大1000个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'token' => 'token',
            'fileType' => 'fileType',
            'url' => 'url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * token  下载鉴权token，下载文件时，使用该token鉴权。（一小时内有效，使用后立即失效）。
    * fileType  文件类型。 * Aux：辅流（会议中的共享画面；分辨率为720p） * Hd：高清（会议中的视频画面；分辨率和会议中视频画面的分辨率一致，1080p或者720p） * Sd：标清（会议中视频画面和共享画面的合成画面，视频画面是大画面，共享画面是小画面，共享画面布局在右下方；分辨率为4CIF） > 单个MP4文件大小不超过1GB。
    * url  文件下载url，最大1000个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'token' => 'setToken',
            'fileType' => 'setFileType',
            'url' => 'setUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * token  下载鉴权token，下载文件时，使用该token鉴权。（一小时内有效，使用后立即失效）。
    * fileType  文件类型。 * Aux：辅流（会议中的共享画面；分辨率为720p） * Hd：高清（会议中的视频画面；分辨率和会议中视频画面的分辨率一致，1080p或者720p） * Sd：标清（会议中视频画面和共享画面的合成画面，视频画面是大画面，共享画面是小画面，共享画面布局在右下方；分辨率为4CIF） > 单个MP4文件大小不超过1GB。
    * url  文件下载url，最大1000个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'token' => 'getToken',
            'fileType' => 'getFileType',
            'url' => 'getUrl'
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
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
    * Gets token
    *  下载鉴权token，下载文件时，使用该token鉴权。（一小时内有效，使用后立即失效）。
    *
    * @return string|null
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string|null $token 下载鉴权token，下载文件时，使用该token鉴权。（一小时内有效，使用后立即失效）。
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
        return $this;
    }

    /**
    * Gets fileType
    *  文件类型。 * Aux：辅流（会议中的共享画面；分辨率为720p） * Hd：高清（会议中的视频画面；分辨率和会议中视频画面的分辨率一致，1080p或者720p） * Sd：标清（会议中视频画面和共享画面的合成画面，视频画面是大画面，共享画面是小画面，共享画面布局在右下方；分辨率为4CIF） > 单个MP4文件大小不超过1GB。
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType 文件类型。 * Aux：辅流（会议中的共享画面；分辨率为720p） * Hd：高清（会议中的视频画面；分辨率和会议中视频画面的分辨率一致，1080p或者720p） * Sd：标清（会议中视频画面和共享画面的合成画面，视频画面是大画面，共享画面是小画面，共享画面布局在右下方；分辨率为4CIF） > 单个MP4文件大小不超过1GB。
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets url
    *  文件下载url，最大1000个字符。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 文件下载url，最大1000个字符。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
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


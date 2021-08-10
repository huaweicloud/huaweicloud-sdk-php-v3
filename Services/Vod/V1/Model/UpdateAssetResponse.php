<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAssetResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAssetResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  媒资ID。
    * videoUploadUrl  视频上传地址。  用于客户端上传不超过20MB的小视频文件（<=20MB）。该URL中携带了临时授权信息，当文件大于20MB时，需要采用分段方式上传。  > 您可以使用PUT请求向“**video_upload_url**”中上传视频文件。其中，“**Content-Type**”需要根据上传的视频文件类型进行设置，如下所示：视频文件：video/视频格式，如：“video/mp4”。
    * coverUploadUrl  封面上传地址，用于上传封面文件。  > 您可以使用PUT请求向“**cover_upload_url**”中上传封面图片。其中，“**Content-Type**”需要根据上传的封面文件类型进行设置，如下所示：图片文件：image/图片格式，如：“image/png”。
    * subtitleUploadUrls  字幕上传地址，用于上传字幕。  > 您可以使用PUT请求向“**subtitle_upload_urls**”中上传字幕文件。其中，“**Content-Type**”需要根据上传的字幕文件类型进行设置，如下所示：字幕文件：application/octet-stream。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'videoUploadUrl' => 'string',
            'coverUploadUrl' => 'string',
            'subtitleUploadUrls' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  媒资ID。
    * videoUploadUrl  视频上传地址。  用于客户端上传不超过20MB的小视频文件（<=20MB）。该URL中携带了临时授权信息，当文件大于20MB时，需要采用分段方式上传。  > 您可以使用PUT请求向“**video_upload_url**”中上传视频文件。其中，“**Content-Type**”需要根据上传的视频文件类型进行设置，如下所示：视频文件：video/视频格式，如：“video/mp4”。
    * coverUploadUrl  封面上传地址，用于上传封面文件。  > 您可以使用PUT请求向“**cover_upload_url**”中上传封面图片。其中，“**Content-Type**”需要根据上传的封面文件类型进行设置，如下所示：图片文件：image/图片格式，如：“image/png”。
    * subtitleUploadUrls  字幕上传地址，用于上传字幕。  > 您可以使用PUT请求向“**subtitle_upload_urls**”中上传字幕文件。其中，“**Content-Type**”需要根据上传的字幕文件类型进行设置，如下所示：字幕文件：application/octet-stream。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'videoUploadUrl' => null,
        'coverUploadUrl' => null,
        'subtitleUploadUrls' => null
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
    * assetId  媒资ID。
    * videoUploadUrl  视频上传地址。  用于客户端上传不超过20MB的小视频文件（<=20MB）。该URL中携带了临时授权信息，当文件大于20MB时，需要采用分段方式上传。  > 您可以使用PUT请求向“**video_upload_url**”中上传视频文件。其中，“**Content-Type**”需要根据上传的视频文件类型进行设置，如下所示：视频文件：video/视频格式，如：“video/mp4”。
    * coverUploadUrl  封面上传地址，用于上传封面文件。  > 您可以使用PUT请求向“**cover_upload_url**”中上传封面图片。其中，“**Content-Type**”需要根据上传的封面文件类型进行设置，如下所示：图片文件：image/图片格式，如：“image/png”。
    * subtitleUploadUrls  字幕上传地址，用于上传字幕。  > 您可以使用PUT请求向“**subtitle_upload_urls**”中上传字幕文件。其中，“**Content-Type**”需要根据上传的字幕文件类型进行设置，如下所示：字幕文件：application/octet-stream。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'videoUploadUrl' => 'video_upload_url',
            'coverUploadUrl' => 'cover_upload_url',
            'subtitleUploadUrls' => 'subtitle_upload_urls'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  媒资ID。
    * videoUploadUrl  视频上传地址。  用于客户端上传不超过20MB的小视频文件（<=20MB）。该URL中携带了临时授权信息，当文件大于20MB时，需要采用分段方式上传。  > 您可以使用PUT请求向“**video_upload_url**”中上传视频文件。其中，“**Content-Type**”需要根据上传的视频文件类型进行设置，如下所示：视频文件：video/视频格式，如：“video/mp4”。
    * coverUploadUrl  封面上传地址，用于上传封面文件。  > 您可以使用PUT请求向“**cover_upload_url**”中上传封面图片。其中，“**Content-Type**”需要根据上传的封面文件类型进行设置，如下所示：图片文件：image/图片格式，如：“image/png”。
    * subtitleUploadUrls  字幕上传地址，用于上传字幕。  > 您可以使用PUT请求向“**subtitle_upload_urls**”中上传字幕文件。其中，“**Content-Type**”需要根据上传的字幕文件类型进行设置，如下所示：字幕文件：application/octet-stream。
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'videoUploadUrl' => 'setVideoUploadUrl',
            'coverUploadUrl' => 'setCoverUploadUrl',
            'subtitleUploadUrls' => 'setSubtitleUploadUrls'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  媒资ID。
    * videoUploadUrl  视频上传地址。  用于客户端上传不超过20MB的小视频文件（<=20MB）。该URL中携带了临时授权信息，当文件大于20MB时，需要采用分段方式上传。  > 您可以使用PUT请求向“**video_upload_url**”中上传视频文件。其中，“**Content-Type**”需要根据上传的视频文件类型进行设置，如下所示：视频文件：video/视频格式，如：“video/mp4”。
    * coverUploadUrl  封面上传地址，用于上传封面文件。  > 您可以使用PUT请求向“**cover_upload_url**”中上传封面图片。其中，“**Content-Type**”需要根据上传的封面文件类型进行设置，如下所示：图片文件：image/图片格式，如：“image/png”。
    * subtitleUploadUrls  字幕上传地址，用于上传字幕。  > 您可以使用PUT请求向“**subtitle_upload_urls**”中上传字幕文件。其中，“**Content-Type**”需要根据上传的字幕文件类型进行设置，如下所示：字幕文件：application/octet-stream。
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'videoUploadUrl' => 'getVideoUploadUrl',
            'coverUploadUrl' => 'getCoverUploadUrl',
            'subtitleUploadUrls' => 'getSubtitleUploadUrls'
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
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['videoUploadUrl'] = isset($data['videoUploadUrl']) ? $data['videoUploadUrl'] : null;
        $this->container['coverUploadUrl'] = isset($data['coverUploadUrl']) ? $data['coverUploadUrl'] : null;
        $this->container['subtitleUploadUrls'] = isset($data['subtitleUploadUrls']) ? $data['subtitleUploadUrls'] : null;
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
    * Gets assetId
    *  媒资ID。
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 媒资ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets videoUploadUrl
    *  视频上传地址。  用于客户端上传不超过20MB的小视频文件（<=20MB）。该URL中携带了临时授权信息，当文件大于20MB时，需要采用分段方式上传。  > 您可以使用PUT请求向“**video_upload_url**”中上传视频文件。其中，“**Content-Type**”需要根据上传的视频文件类型进行设置，如下所示：视频文件：video/视频格式，如：“video/mp4”。
    *
    * @return string|null
    */
    public function getVideoUploadUrl()
    {
        return $this->container['videoUploadUrl'];
    }

    /**
    * Sets videoUploadUrl
    *
    * @param string|null $videoUploadUrl 视频上传地址。  用于客户端上传不超过20MB的小视频文件（<=20MB）。该URL中携带了临时授权信息，当文件大于20MB时，需要采用分段方式上传。  > 您可以使用PUT请求向“**video_upload_url**”中上传视频文件。其中，“**Content-Type**”需要根据上传的视频文件类型进行设置，如下所示：视频文件：video/视频格式，如：“video/mp4”。
    *
    * @return $this
    */
    public function setVideoUploadUrl($videoUploadUrl)
    {
        $this->container['videoUploadUrl'] = $videoUploadUrl;
        return $this;
    }

    /**
    * Gets coverUploadUrl
    *  封面上传地址，用于上传封面文件。  > 您可以使用PUT请求向“**cover_upload_url**”中上传封面图片。其中，“**Content-Type**”需要根据上传的封面文件类型进行设置，如下所示：图片文件：image/图片格式，如：“image/png”。
    *
    * @return string|null
    */
    public function getCoverUploadUrl()
    {
        return $this->container['coverUploadUrl'];
    }

    /**
    * Sets coverUploadUrl
    *
    * @param string|null $coverUploadUrl 封面上传地址，用于上传封面文件。  > 您可以使用PUT请求向“**cover_upload_url**”中上传封面图片。其中，“**Content-Type**”需要根据上传的封面文件类型进行设置，如下所示：图片文件：image/图片格式，如：“image/png”。
    *
    * @return $this
    */
    public function setCoverUploadUrl($coverUploadUrl)
    {
        $this->container['coverUploadUrl'] = $coverUploadUrl;
        return $this;
    }

    /**
    * Gets subtitleUploadUrls
    *  字幕上传地址，用于上传字幕。  > 您可以使用PUT请求向“**subtitle_upload_urls**”中上传字幕文件。其中，“**Content-Type**”需要根据上传的字幕文件类型进行设置，如下所示：字幕文件：application/octet-stream。
    *
    * @return string[]|null
    */
    public function getSubtitleUploadUrls()
    {
        return $this->container['subtitleUploadUrls'];
    }

    /**
    * Sets subtitleUploadUrls
    *
    * @param string[]|null $subtitleUploadUrls 字幕上传地址，用于上传字幕。  > 您可以使用PUT请求向“**subtitle_upload_urls**”中上传字幕文件。其中，“**Content-Type**”需要根据上传的字幕文件类型进行设置，如下所示：字幕文件：application/octet-stream。
    *
    * @return $this
    */
    public function setSubtitleUploadUrls($subtitleUploadUrls)
    {
        $this->container['subtitleUploadUrls'] = $subtitleUploadUrls;
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


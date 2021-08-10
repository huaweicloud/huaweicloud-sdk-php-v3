<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAssetByFileUploadResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAssetByFileUploadResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  媒体ID
    * videoUploadUrl  视频上传URL
    * coverUploadUrl  封面上传地址
    * subtitleUploadUrls  字幕文件上传url数组
    * target  target
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'videoUploadUrl' => 'string',
            'coverUploadUrl' => 'string',
            'subtitleUploadUrls' => 'string[]',
            'target' => '\HuaweiCloud\SDK\Vod\V1\Model\FileAddr'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  媒体ID
    * videoUploadUrl  视频上传URL
    * coverUploadUrl  封面上传地址
    * subtitleUploadUrls  字幕文件上传url数组
    * target  target
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'videoUploadUrl' => null,
        'coverUploadUrl' => null,
        'subtitleUploadUrls' => null,
        'target' => null
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
    * assetId  媒体ID
    * videoUploadUrl  视频上传URL
    * coverUploadUrl  封面上传地址
    * subtitleUploadUrls  字幕文件上传url数组
    * target  target
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'videoUploadUrl' => 'video_upload_url',
            'coverUploadUrl' => 'cover_upload_url',
            'subtitleUploadUrls' => 'subtitle_upload_urls',
            'target' => 'target'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  媒体ID
    * videoUploadUrl  视频上传URL
    * coverUploadUrl  封面上传地址
    * subtitleUploadUrls  字幕文件上传url数组
    * target  target
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'videoUploadUrl' => 'setVideoUploadUrl',
            'coverUploadUrl' => 'setCoverUploadUrl',
            'subtitleUploadUrls' => 'setSubtitleUploadUrls',
            'target' => 'setTarget'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  媒体ID
    * videoUploadUrl  视频上传URL
    * coverUploadUrl  封面上传地址
    * subtitleUploadUrls  字幕文件上传url数组
    * target  target
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'videoUploadUrl' => 'getVideoUploadUrl',
            'coverUploadUrl' => 'getCoverUploadUrl',
            'subtitleUploadUrls' => 'getSubtitleUploadUrls',
            'target' => 'getTarget'
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
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
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
    *  媒体ID
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
    * @param string|null $assetId 媒体ID
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
    *  视频上传URL
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
    * @param string|null $videoUploadUrl 视频上传URL
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
    *  封面上传地址
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
    * @param string|null $coverUploadUrl 封面上传地址
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
    *  字幕文件上传url数组
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
    * @param string[]|null $subtitleUploadUrls 字幕文件上传url数组
    *
    * @return $this
    */
    public function setSubtitleUploadUrls($subtitleUploadUrls)
    {
        $this->container['subtitleUploadUrls'] = $subtitleUploadUrls;
        return $this;
    }

    /**
    * Gets target
    *  target
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\FileAddr|null
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\FileAddr|null $target target
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
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


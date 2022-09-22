<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageDetectionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageDetectionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventType  事件类型。 可选值如下： head_image：头像 album：相册 dynamic：动态 article：帖子 comment：评论 room_cover：房间封面 group_message：群聊图片 message：私聊图片 product：商品图片
    * categories  检测场景，可添加的检测场景如下，华为云当前支持全场景的，以下仅展示部门检测能力，如果有其它检测场景的需求，请在开通服务时咨询华为云工程师：  terrorism：涉政暴恐内容的检测。  porn：鉴黄内容的检测。  politics：政治敏感人物内容的检测 image_text：图文违规内容的检测。（检测图片中出现的广告、色情、暴恐、涉政的文字违规内容以及二维码内容）  备注：资料上线需要删除politics
    * imageTextConfig  imageTextConfig
    * url  图片url, 与image二选一。 图片的URL路径，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详情请见配置OBS访问权限。 ​ 说明： 接口响应时间依赖图片的下载时间，如果图片下载时间过长，会返回接口调用失败。请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。 图片url, 与image二选一。 图片的URL路径，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详情请见配置OBS访问权限。  说明： 接口响应时间依赖图片的下载时间，如果图片下载时间过长，会返回接口调用失败。请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。
    * image  与url二选一。 ​ 图片文件Base64编码字符串。要求base64编码后大小不超过10M。 ​ 支持JPG/PNG/BMP/WEBP等格式。 与url二选一。  图片文件Base64编码字符串。要求base64编码后大小不超过10M。  支持JPG/PNG/BMP/WEBP等格式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventType' => 'string',
            'categories' => 'string[]',
            'imageTextConfig' => '\HuaweiCloud\SDK\Moderation\V3\Model\ImgTextConfig',
            'url' => 'string',
            'image' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventType  事件类型。 可选值如下： head_image：头像 album：相册 dynamic：动态 article：帖子 comment：评论 room_cover：房间封面 group_message：群聊图片 message：私聊图片 product：商品图片
    * categories  检测场景，可添加的检测场景如下，华为云当前支持全场景的，以下仅展示部门检测能力，如果有其它检测场景的需求，请在开通服务时咨询华为云工程师：  terrorism：涉政暴恐内容的检测。  porn：鉴黄内容的检测。  politics：政治敏感人物内容的检测 image_text：图文违规内容的检测。（检测图片中出现的广告、色情、暴恐、涉政的文字违规内容以及二维码内容）  备注：资料上线需要删除politics
    * imageTextConfig  imageTextConfig
    * url  图片url, 与image二选一。 图片的URL路径，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详情请见配置OBS访问权限。 ​ 说明： 接口响应时间依赖图片的下载时间，如果图片下载时间过长，会返回接口调用失败。请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。 图片url, 与image二选一。 图片的URL路径，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详情请见配置OBS访问权限。  说明： 接口响应时间依赖图片的下载时间，如果图片下载时间过长，会返回接口调用失败。请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。
    * image  与url二选一。 ​ 图片文件Base64编码字符串。要求base64编码后大小不超过10M。 ​ 支持JPG/PNG/BMP/WEBP等格式。 与url二选一。  图片文件Base64编码字符串。要求base64编码后大小不超过10M。  支持JPG/PNG/BMP/WEBP等格式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventType' => null,
        'categories' => null,
        'imageTextConfig' => null,
        'url' => null,
        'image' => null
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
    * eventType  事件类型。 可选值如下： head_image：头像 album：相册 dynamic：动态 article：帖子 comment：评论 room_cover：房间封面 group_message：群聊图片 message：私聊图片 product：商品图片
    * categories  检测场景，可添加的检测场景如下，华为云当前支持全场景的，以下仅展示部门检测能力，如果有其它检测场景的需求，请在开通服务时咨询华为云工程师：  terrorism：涉政暴恐内容的检测。  porn：鉴黄内容的检测。  politics：政治敏感人物内容的检测 image_text：图文违规内容的检测。（检测图片中出现的广告、色情、暴恐、涉政的文字违规内容以及二维码内容）  备注：资料上线需要删除politics
    * imageTextConfig  imageTextConfig
    * url  图片url, 与image二选一。 图片的URL路径，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详情请见配置OBS访问权限。 ​ 说明： 接口响应时间依赖图片的下载时间，如果图片下载时间过长，会返回接口调用失败。请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。 图片url, 与image二选一。 图片的URL路径，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详情请见配置OBS访问权限。  说明： 接口响应时间依赖图片的下载时间，如果图片下载时间过长，会返回接口调用失败。请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。
    * image  与url二选一。 ​ 图片文件Base64编码字符串。要求base64编码后大小不超过10M。 ​ 支持JPG/PNG/BMP/WEBP等格式。 与url二选一。  图片文件Base64编码字符串。要求base64编码后大小不超过10M。  支持JPG/PNG/BMP/WEBP等格式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventType' => 'event_type',
            'categories' => 'categories',
            'imageTextConfig' => 'image_text_config',
            'url' => 'url',
            'image' => 'image'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventType  事件类型。 可选值如下： head_image：头像 album：相册 dynamic：动态 article：帖子 comment：评论 room_cover：房间封面 group_message：群聊图片 message：私聊图片 product：商品图片
    * categories  检测场景，可添加的检测场景如下，华为云当前支持全场景的，以下仅展示部门检测能力，如果有其它检测场景的需求，请在开通服务时咨询华为云工程师：  terrorism：涉政暴恐内容的检测。  porn：鉴黄内容的检测。  politics：政治敏感人物内容的检测 image_text：图文违规内容的检测。（检测图片中出现的广告、色情、暴恐、涉政的文字违规内容以及二维码内容）  备注：资料上线需要删除politics
    * imageTextConfig  imageTextConfig
    * url  图片url, 与image二选一。 图片的URL路径，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详情请见配置OBS访问权限。 ​ 说明： 接口响应时间依赖图片的下载时间，如果图片下载时间过长，会返回接口调用失败。请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。 图片url, 与image二选一。 图片的URL路径，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详情请见配置OBS访问权限。  说明： 接口响应时间依赖图片的下载时间，如果图片下载时间过长，会返回接口调用失败。请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。
    * image  与url二选一。 ​ 图片文件Base64编码字符串。要求base64编码后大小不超过10M。 ​ 支持JPG/PNG/BMP/WEBP等格式。 与url二选一。  图片文件Base64编码字符串。要求base64编码后大小不超过10M。  支持JPG/PNG/BMP/WEBP等格式。
    *
    * @var string[]
    */
    protected static $setters = [
            'eventType' => 'setEventType',
            'categories' => 'setCategories',
            'imageTextConfig' => 'setImageTextConfig',
            'url' => 'setUrl',
            'image' => 'setImage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventType  事件类型。 可选值如下： head_image：头像 album：相册 dynamic：动态 article：帖子 comment：评论 room_cover：房间封面 group_message：群聊图片 message：私聊图片 product：商品图片
    * categories  检测场景，可添加的检测场景如下，华为云当前支持全场景的，以下仅展示部门检测能力，如果有其它检测场景的需求，请在开通服务时咨询华为云工程师：  terrorism：涉政暴恐内容的检测。  porn：鉴黄内容的检测。  politics：政治敏感人物内容的检测 image_text：图文违规内容的检测。（检测图片中出现的广告、色情、暴恐、涉政的文字违规内容以及二维码内容）  备注：资料上线需要删除politics
    * imageTextConfig  imageTextConfig
    * url  图片url, 与image二选一。 图片的URL路径，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详情请见配置OBS访问权限。 ​ 说明： 接口响应时间依赖图片的下载时间，如果图片下载时间过长，会返回接口调用失败。请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。 图片url, 与image二选一。 图片的URL路径，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详情请见配置OBS访问权限。  说明： 接口响应时间依赖图片的下载时间，如果图片下载时间过长，会返回接口调用失败。请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。
    * image  与url二选一。 ​ 图片文件Base64编码字符串。要求base64编码后大小不超过10M。 ​ 支持JPG/PNG/BMP/WEBP等格式。 与url二选一。  图片文件Base64编码字符串。要求base64编码后大小不超过10M。  支持JPG/PNG/BMP/WEBP等格式。
    *
    * @var string[]
    */
    protected static $getters = [
            'eventType' => 'getEventType',
            'categories' => 'getCategories',
            'imageTextConfig' => 'getImageTextConfig',
            'url' => 'getUrl',
            'image' => 'getImage'
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
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['imageTextConfig'] = isset($data['imageTextConfig']) ? $data['imageTextConfig'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['eventType'] === null) {
            $invalidProperties[] = "'eventType' can't be null";
        }
        if ($this->container['categories'] === null) {
            $invalidProperties[] = "'categories' can't be null";
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
    * Gets eventType
    *  事件类型。 可选值如下： head_image：头像 album：相册 dynamic：动态 article：帖子 comment：评论 room_cover：房间封面 group_message：群聊图片 message：私聊图片 product：商品图片
    *
    * @return string
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string $eventType 事件类型。 可选值如下： head_image：头像 album：相册 dynamic：动态 article：帖子 comment：评论 room_cover：房间封面 group_message：群聊图片 message：私聊图片 product：商品图片
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets categories
    *  检测场景，可添加的检测场景如下，华为云当前支持全场景的，以下仅展示部门检测能力，如果有其它检测场景的需求，请在开通服务时咨询华为云工程师：  terrorism：涉政暴恐内容的检测。  porn：鉴黄内容的检测。  politics：政治敏感人物内容的检测 image_text：图文违规内容的检测。（检测图片中出现的广告、色情、暴恐、涉政的文字违规内容以及二维码内容）  备注：资料上线需要删除politics
    *
    * @return string[]
    */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
    * Sets categories
    *
    * @param string[] $categories 检测场景，可添加的检测场景如下，华为云当前支持全场景的，以下仅展示部门检测能力，如果有其它检测场景的需求，请在开通服务时咨询华为云工程师：  terrorism：涉政暴恐内容的检测。  porn：鉴黄内容的检测。  politics：政治敏感人物内容的检测 image_text：图文违规内容的检测。（检测图片中出现的广告、色情、暴恐、涉政的文字违规内容以及二维码内容）  备注：资料上线需要删除politics
    *
    * @return $this
    */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;
        return $this;
    }

    /**
    * Gets imageTextConfig
    *  imageTextConfig
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\ImgTextConfig|null
    */
    public function getImageTextConfig()
    {
        return $this->container['imageTextConfig'];
    }

    /**
    * Sets imageTextConfig
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\ImgTextConfig|null $imageTextConfig imageTextConfig
    *
    * @return $this
    */
    public function setImageTextConfig($imageTextConfig)
    {
        $this->container['imageTextConfig'] = $imageTextConfig;
        return $this;
    }

    /**
    * Gets url
    *  图片url, 与image二选一。 图片的URL路径，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详情请见配置OBS访问权限。 ​ 说明： 接口响应时间依赖图片的下载时间，如果图片下载时间过长，会返回接口调用失败。请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。 图片url, 与image二选一。 图片的URL路径，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详情请见配置OBS访问权限。  说明： 接口响应时间依赖图片的下载时间，如果图片下载时间过长，会返回接口调用失败。请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。
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
    * @param string|null $url 图片url, 与image二选一。 图片的URL路径，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详情请见配置OBS访问权限。 ​ 说明： 接口响应时间依赖图片的下载时间，如果图片下载时间过长，会返回接口调用失败。请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。 图片url, 与image二选一。 图片的URL路径，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详情请见配置OBS访问权限。  说明： 接口响应时间依赖图片的下载时间，如果图片下载时间过长，会返回接口调用失败。请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets image
    *  与url二选一。 ​ 图片文件Base64编码字符串。要求base64编码后大小不超过10M。 ​ 支持JPG/PNG/BMP/WEBP等格式。 与url二选一。  图片文件Base64编码字符串。要求base64编码后大小不超过10M。  支持JPG/PNG/BMP/WEBP等格式。
    *
    * @return string|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param string|null $image 与url二选一。 ​ 图片文件Base64编码字符串。要求base64编码后大小不超过10M。 ​ 支持JPG/PNG/BMP/WEBP等格式。 与url二选一。  图片文件Base64编码字符串。要求base64编码后大小不超过10M。  支持JPG/PNG/BMP/WEBP等格式。
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
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


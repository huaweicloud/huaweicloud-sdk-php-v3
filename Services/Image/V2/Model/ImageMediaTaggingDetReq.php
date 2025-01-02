<?php

namespace HuaweiCloud\SDK\Image\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageMediaTaggingDetReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageMediaTaggingDetReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10M，最短边至少1px，最长边最大10000px，支持JPG、PNG、BMP、WEBP格式。
    * url  与image二选一  图片的URL路径，目前支持：  - 公网HTTP/HTTPS URL  - 华为云OBS提供的URL，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详请参见[[配置OBS服务的访问权限](https://support.huaweicloud.com/api-moderation/moderation_03_0020.html)](tag:hc)[[配置OBS服务的访问权限](https://support.huaweicloud.com/intl/zh-cn/api-moderation/moderation_03_0020.html)](tag:hk)。  > - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 > - 请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。 > - lmage不支持跨区域OBS，OBS的区域需要和服务保持一致。
    * language  zh：返回标签的语言类型为中文。  en：返回标签的语言类型为英文。  默认值为zh。
    * threshold  置信度的阈值（0~100），低于此置信数的标签，将不会返回。  默认值：20。  最小值：0。  最大值：100。
    * limit  最多返回的tag数（取值范围：1~50），默认值： 10
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'image' => 'string',
            'url' => 'string',
            'language' => 'string',
            'threshold' => 'float',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10M，最短边至少1px，最长边最大10000px，支持JPG、PNG、BMP、WEBP格式。
    * url  与image二选一  图片的URL路径，目前支持：  - 公网HTTP/HTTPS URL  - 华为云OBS提供的URL，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详请参见[[配置OBS服务的访问权限](https://support.huaweicloud.com/api-moderation/moderation_03_0020.html)](tag:hc)[[配置OBS服务的访问权限](https://support.huaweicloud.com/intl/zh-cn/api-moderation/moderation_03_0020.html)](tag:hk)。  > - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 > - 请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。 > - lmage不支持跨区域OBS，OBS的区域需要和服务保持一致。
    * language  zh：返回标签的语言类型为中文。  en：返回标签的语言类型为英文。  默认值为zh。
    * threshold  置信度的阈值（0~100），低于此置信数的标签，将不会返回。  默认值：20。  最小值：0。  最大值：100。
    * limit  最多返回的tag数（取值范围：1~50），默认值： 10
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'image' => null,
        'url' => null,
        'language' => null,
        'threshold' => 'float',
        'limit' => null
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
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10M，最短边至少1px，最长边最大10000px，支持JPG、PNG、BMP、WEBP格式。
    * url  与image二选一  图片的URL路径，目前支持：  - 公网HTTP/HTTPS URL  - 华为云OBS提供的URL，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详请参见[[配置OBS服务的访问权限](https://support.huaweicloud.com/api-moderation/moderation_03_0020.html)](tag:hc)[[配置OBS服务的访问权限](https://support.huaweicloud.com/intl/zh-cn/api-moderation/moderation_03_0020.html)](tag:hk)。  > - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 > - 请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。 > - lmage不支持跨区域OBS，OBS的区域需要和服务保持一致。
    * language  zh：返回标签的语言类型为中文。  en：返回标签的语言类型为英文。  默认值为zh。
    * threshold  置信度的阈值（0~100），低于此置信数的标签，将不会返回。  默认值：20。  最小值：0。  最大值：100。
    * limit  最多返回的tag数（取值范围：1~50），默认值： 10
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'image' => 'image',
            'url' => 'url',
            'language' => 'language',
            'threshold' => 'threshold',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10M，最短边至少1px，最长边最大10000px，支持JPG、PNG、BMP、WEBP格式。
    * url  与image二选一  图片的URL路径，目前支持：  - 公网HTTP/HTTPS URL  - 华为云OBS提供的URL，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详请参见[[配置OBS服务的访问权限](https://support.huaweicloud.com/api-moderation/moderation_03_0020.html)](tag:hc)[[配置OBS服务的访问权限](https://support.huaweicloud.com/intl/zh-cn/api-moderation/moderation_03_0020.html)](tag:hk)。  > - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 > - 请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。 > - lmage不支持跨区域OBS，OBS的区域需要和服务保持一致。
    * language  zh：返回标签的语言类型为中文。  en：返回标签的语言类型为英文。  默认值为zh。
    * threshold  置信度的阈值（0~100），低于此置信数的标签，将不会返回。  默认值：20。  最小值：0。  最大值：100。
    * limit  最多返回的tag数（取值范围：1~50），默认值： 10
    *
    * @var string[]
    */
    protected static $setters = [
            'image' => 'setImage',
            'url' => 'setUrl',
            'language' => 'setLanguage',
            'threshold' => 'setThreshold',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10M，最短边至少1px，最长边最大10000px，支持JPG、PNG、BMP、WEBP格式。
    * url  与image二选一  图片的URL路径，目前支持：  - 公网HTTP/HTTPS URL  - 华为云OBS提供的URL，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详请参见[[配置OBS服务的访问权限](https://support.huaweicloud.com/api-moderation/moderation_03_0020.html)](tag:hc)[[配置OBS服务的访问权限](https://support.huaweicloud.com/intl/zh-cn/api-moderation/moderation_03_0020.html)](tag:hk)。  > - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 > - 请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。 > - lmage不支持跨区域OBS，OBS的区域需要和服务保持一致。
    * language  zh：返回标签的语言类型为中文。  en：返回标签的语言类型为英文。  默认值为zh。
    * threshold  置信度的阈值（0~100），低于此置信数的标签，将不会返回。  默认值：20。  最小值：0。  最大值：100。
    * limit  最多返回的tag数（取值范围：1~50），默认值： 10
    *
    * @var string[]
    */
    protected static $getters = [
            'image' => 'getImage',
            'url' => 'getUrl',
            'language' => 'getLanguage',
            'threshold' => 'getThreshold',
            'limit' => 'getLimit'
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
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
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
    * Gets image
    *  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10M，最短边至少1px，最长边最大10000px，支持JPG、PNG、BMP、WEBP格式。
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
    * @param string|null $image 与url二选一  图像数据，base64编码，要求base64编码后大小不超过10M，最短边至少1px，最长边最大10000px，支持JPG、PNG、BMP、WEBP格式。
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets url
    *  与image二选一  图片的URL路径，目前支持：  - 公网HTTP/HTTPS URL  - 华为云OBS提供的URL，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详请参见[[配置OBS服务的访问权限](https://support.huaweicloud.com/api-moderation/moderation_03_0020.html)](tag:hc)[[配置OBS服务的访问权限](https://support.huaweicloud.com/intl/zh-cn/api-moderation/moderation_03_0020.html)](tag:hk)。  > - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 > - 请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。 > - lmage不支持跨区域OBS，OBS的区域需要和服务保持一致。
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
    * @param string|null $url 与image二选一  图片的URL路径，目前支持：  - 公网HTTP/HTTPS URL  - 华为云OBS提供的URL，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权。详请参见[[配置OBS服务的访问权限](https://support.huaweicloud.com/api-moderation/moderation_03_0020.html)](tag:hc)[[配置OBS服务的访问权限](https://support.huaweicloud.com/intl/zh-cn/api-moderation/moderation_03_0020.html)](tag:hk)。  > - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 > - 请保证被检测图片所在的存储服务稳定可靠，建议您使用华为云OBS存储。 > - lmage不支持跨区域OBS，OBS的区域需要和服务保持一致。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets language
    *  zh：返回标签的语言类型为中文。  en：返回标签的语言类型为英文。  默认值为zh。
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
    * @param string|null $language zh：返回标签的语言类型为中文。  en：返回标签的语言类型为英文。  默认值为zh。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets threshold
    *  置信度的阈值（0~100），低于此置信数的标签，将不会返回。  默认值：20。  最小值：0。  最大值：100。
    *
    * @return float|null
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param float|null $threshold 置信度的阈值（0~100），低于此置信数的标签，将不会返回。  默认值：20。  最小值：0。  最大值：100。
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
        return $this;
    }

    /**
    * Gets limit
    *  最多返回的tag数（取值范围：1~50），默认值： 10
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 最多返回的tag数（取值范围：1~50），默认值： 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

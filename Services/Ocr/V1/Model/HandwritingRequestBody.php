<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HandwritingRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HandwritingRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于8px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一  图片的URL路径，目前支持：  - 公网http/https url  - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。  > 说明：  - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。  - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    * quickMode  快速模式开关，针对单行文字图片（要求图片只包含一行文字，且文字区域占比超过50%），打开时可以更快返回识别内容。可选值包括：  - true：打开快速模式；  - false：关闭快速模式。  > 说明：  - 未传入该参数时默认为false，即关闭快速模式
    * charSet  字符集设置，用户可以根据实际需要限定输出字符集范围。可选值如下所示。  - \"digit\": 数字模式；  - \"letter\": 大小写字母模式；  - \"digit_letter\": 数字+字母模式；  - \"general\": 数字+字母+中文模式；  > 说明：  - 未传入该参数时，默认为“general”模式。
    * detectDirection  校正图片的倾斜角度开关，可选值如下所示。  - true：校正图片的倾斜角度；  - false：不校正图片的倾斜角度。  > 说明：  - 支持任意角度的校正，未传入该参数时默认为“false”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'image' => 'string',
            'url' => 'string',
            'quickMode' => 'bool',
            'charSet' => 'string',
            'detectDirection' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于8px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一  图片的URL路径，目前支持：  - 公网http/https url  - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。  > 说明：  - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。  - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    * quickMode  快速模式开关，针对单行文字图片（要求图片只包含一行文字，且文字区域占比超过50%），打开时可以更快返回识别内容。可选值包括：  - true：打开快速模式；  - false：关闭快速模式。  > 说明：  - 未传入该参数时默认为false，即关闭快速模式
    * charSet  字符集设置，用户可以根据实际需要限定输出字符集范围。可选值如下所示。  - \"digit\": 数字模式；  - \"letter\": 大小写字母模式；  - \"digit_letter\": 数字+字母模式；  - \"general\": 数字+字母+中文模式；  > 说明：  - 未传入该参数时，默认为“general”模式。
    * detectDirection  校正图片的倾斜角度开关，可选值如下所示。  - true：校正图片的倾斜角度；  - false：不校正图片的倾斜角度。  > 说明：  - 支持任意角度的校正，未传入该参数时默认为“false”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'image' => null,
        'url' => null,
        'quickMode' => null,
        'charSet' => null,
        'detectDirection' => null
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
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于8px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一  图片的URL路径，目前支持：  - 公网http/https url  - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。  > 说明：  - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。  - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    * quickMode  快速模式开关，针对单行文字图片（要求图片只包含一行文字，且文字区域占比超过50%），打开时可以更快返回识别内容。可选值包括：  - true：打开快速模式；  - false：关闭快速模式。  > 说明：  - 未传入该参数时默认为false，即关闭快速模式
    * charSet  字符集设置，用户可以根据实际需要限定输出字符集范围。可选值如下所示。  - \"digit\": 数字模式；  - \"letter\": 大小写字母模式；  - \"digit_letter\": 数字+字母模式；  - \"general\": 数字+字母+中文模式；  > 说明：  - 未传入该参数时，默认为“general”模式。
    * detectDirection  校正图片的倾斜角度开关，可选值如下所示。  - true：校正图片的倾斜角度；  - false：不校正图片的倾斜角度。  > 说明：  - 支持任意角度的校正，未传入该参数时默认为“false”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'image' => 'image',
            'url' => 'url',
            'quickMode' => 'quick_mode',
            'charSet' => 'char_set',
            'detectDirection' => 'detect_direction'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于8px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一  图片的URL路径，目前支持：  - 公网http/https url  - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。  > 说明：  - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。  - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    * quickMode  快速模式开关，针对单行文字图片（要求图片只包含一行文字，且文字区域占比超过50%），打开时可以更快返回识别内容。可选值包括：  - true：打开快速模式；  - false：关闭快速模式。  > 说明：  - 未传入该参数时默认为false，即关闭快速模式
    * charSet  字符集设置，用户可以根据实际需要限定输出字符集范围。可选值如下所示。  - \"digit\": 数字模式；  - \"letter\": 大小写字母模式；  - \"digit_letter\": 数字+字母模式；  - \"general\": 数字+字母+中文模式；  > 说明：  - 未传入该参数时，默认为“general”模式。
    * detectDirection  校正图片的倾斜角度开关，可选值如下所示。  - true：校正图片的倾斜角度；  - false：不校正图片的倾斜角度。  > 说明：  - 支持任意角度的校正，未传入该参数时默认为“false”。
    *
    * @var string[]
    */
    protected static $setters = [
            'image' => 'setImage',
            'url' => 'setUrl',
            'quickMode' => 'setQuickMode',
            'charSet' => 'setCharSet',
            'detectDirection' => 'setDetectDirection'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于8px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一  图片的URL路径，目前支持：  - 公网http/https url  - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。  > 说明：  - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。  - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    * quickMode  快速模式开关，针对单行文字图片（要求图片只包含一行文字，且文字区域占比超过50%），打开时可以更快返回识别内容。可选值包括：  - true：打开快速模式；  - false：关闭快速模式。  > 说明：  - 未传入该参数时默认为false，即关闭快速模式
    * charSet  字符集设置，用户可以根据实际需要限定输出字符集范围。可选值如下所示。  - \"digit\": 数字模式；  - \"letter\": 大小写字母模式；  - \"digit_letter\": 数字+字母模式；  - \"general\": 数字+字母+中文模式；  > 说明：  - 未传入该参数时，默认为“general”模式。
    * detectDirection  校正图片的倾斜角度开关，可选值如下所示。  - true：校正图片的倾斜角度；  - false：不校正图片的倾斜角度。  > 说明：  - 支持任意角度的校正，未传入该参数时默认为“false”。
    *
    * @var string[]
    */
    protected static $getters = [
            'image' => 'getImage',
            'url' => 'getUrl',
            'quickMode' => 'getQuickMode',
            'charSet' => 'getCharSet',
            'detectDirection' => 'getDetectDirection'
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
        $this->container['quickMode'] = isset($data['quickMode']) ? $data['quickMode'] : null;
        $this->container['charSet'] = isset($data['charSet']) ? $data['charSet'] : null;
        $this->container['detectDirection'] = isset($data['detectDirection']) ? $data['detectDirection'] : null;
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
    *  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于8px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
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
    * @param string|null $image 与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于8px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
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
    *  与image二选一  图片的URL路径，目前支持：  - 公网http/https url  - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。  > 说明：  - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。  - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
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
    * @param string|null $url 与image二选一  图片的URL路径，目前支持：  - 公网http/https url  - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。  > 说明：  - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。  - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets quickMode
    *  快速模式开关，针对单行文字图片（要求图片只包含一行文字，且文字区域占比超过50%），打开时可以更快返回识别内容。可选值包括：  - true：打开快速模式；  - false：关闭快速模式。  > 说明：  - 未传入该参数时默认为false，即关闭快速模式
    *
    * @return bool|null
    */
    public function getQuickMode()
    {
        return $this->container['quickMode'];
    }

    /**
    * Sets quickMode
    *
    * @param bool|null $quickMode 快速模式开关，针对单行文字图片（要求图片只包含一行文字，且文字区域占比超过50%），打开时可以更快返回识别内容。可选值包括：  - true：打开快速模式；  - false：关闭快速模式。  > 说明：  - 未传入该参数时默认为false，即关闭快速模式
    *
    * @return $this
    */
    public function setQuickMode($quickMode)
    {
        $this->container['quickMode'] = $quickMode;
        return $this;
    }

    /**
    * Gets charSet
    *  字符集设置，用户可以根据实际需要限定输出字符集范围。可选值如下所示。  - \"digit\": 数字模式；  - \"letter\": 大小写字母模式；  - \"digit_letter\": 数字+字母模式；  - \"general\": 数字+字母+中文模式；  > 说明：  - 未传入该参数时，默认为“general”模式。
    *
    * @return string|null
    */
    public function getCharSet()
    {
        return $this->container['charSet'];
    }

    /**
    * Sets charSet
    *
    * @param string|null $charSet 字符集设置，用户可以根据实际需要限定输出字符集范围。可选值如下所示。  - \"digit\": 数字模式；  - \"letter\": 大小写字母模式；  - \"digit_letter\": 数字+字母模式；  - \"general\": 数字+字母+中文模式；  > 说明：  - 未传入该参数时，默认为“general”模式。
    *
    * @return $this
    */
    public function setCharSet($charSet)
    {
        $this->container['charSet'] = $charSet;
        return $this;
    }

    /**
    * Gets detectDirection
    *  校正图片的倾斜角度开关，可选值如下所示。  - true：校正图片的倾斜角度；  - false：不校正图片的倾斜角度。  > 说明：  - 支持任意角度的校正，未传入该参数时默认为“false”。
    *
    * @return bool|null
    */
    public function getDetectDirection()
    {
        return $this->container['detectDirection'];
    }

    /**
    * Sets detectDirection
    *
    * @param bool|null $detectDirection 校正图片的倾斜角度开关，可选值如下所示。  - true：校正图片的倾斜角度；  - false：不校正图片的倾斜角度。  > 说明：  - 支持任意角度的校正，未传入该参数时默认为“false”。
    *
    * @return $this
    */
    public function setDetectDirection($detectDirection)
    {
        $this->container['detectDirection'] = $detectDirection;
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


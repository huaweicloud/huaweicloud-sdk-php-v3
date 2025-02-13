<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MvsInvoiceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MvsInvoiceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一  要求base64编码后大小不超过10MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * returnTextLocation  如果为True，返回体中会包含text_location对象，内容是各字段的检测框四点坐标。如果是False或者没有这个key，则返回体中不包含text_location对象。
    * returnConfidence  如果为True，返回体中会包含confidence对象，内容是各字段的置信度。如果是False或者没有这个key，则返回体中不包含confidence对象。
    * type  如果没有type字段则默认返回原机动车销售发票出参； 若存在type字段但是不属于 auto、new或者used三个枚举值，API返回AIS.0101入参错误； 如果type为auto，API自动判断发票类型，并在返回参数中添加type出参以指明发票类型； 如果type为new，API在检测出的类型为机动车发票时返回原版机动车发票出参并添加type出参（机动车销售统一发票），不一致时报错AIS.0104图像质量差； 如果type为used，API在检测出的类型为二手车时返回二手车发票出参，并添加type出参（二手车销售统一发票），不一致时报错AIS.0104图像质量差。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'image' => 'string',
            'url' => 'string',
            'returnTextLocation' => 'bool',
            'returnConfidence' => 'bool',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一  要求base64编码后大小不超过10MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * returnTextLocation  如果为True，返回体中会包含text_location对象，内容是各字段的检测框四点坐标。如果是False或者没有这个key，则返回体中不包含text_location对象。
    * returnConfidence  如果为True，返回体中会包含confidence对象，内容是各字段的置信度。如果是False或者没有这个key，则返回体中不包含confidence对象。
    * type  如果没有type字段则默认返回原机动车销售发票出参； 若存在type字段但是不属于 auto、new或者used三个枚举值，API返回AIS.0101入参错误； 如果type为auto，API自动判断发票类型，并在返回参数中添加type出参以指明发票类型； 如果type为new，API在检测出的类型为机动车发票时返回原版机动车发票出参并添加type出参（机动车销售统一发票），不一致时报错AIS.0104图像质量差； 如果type为used，API在检测出的类型为二手车时返回二手车发票出参，并添加type出参（二手车销售统一发票），不一致时报错AIS.0104图像质量差。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'image' => null,
        'url' => null,
        'returnTextLocation' => null,
        'returnConfidence' => null,
        'type' => null
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
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一  要求base64编码后大小不超过10MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * returnTextLocation  如果为True，返回体中会包含text_location对象，内容是各字段的检测框四点坐标。如果是False或者没有这个key，则返回体中不包含text_location对象。
    * returnConfidence  如果为True，返回体中会包含confidence对象，内容是各字段的置信度。如果是False或者没有这个key，则返回体中不包含confidence对象。
    * type  如果没有type字段则默认返回原机动车销售发票出参； 若存在type字段但是不属于 auto、new或者used三个枚举值，API返回AIS.0101入参错误； 如果type为auto，API自动判断发票类型，并在返回参数中添加type出参以指明发票类型； 如果type为new，API在检测出的类型为机动车发票时返回原版机动车发票出参并添加type出参（机动车销售统一发票），不一致时报错AIS.0104图像质量差； 如果type为used，API在检测出的类型为二手车时返回二手车发票出参，并添加type出参（二手车销售统一发票），不一致时报错AIS.0104图像质量差。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'image' => 'image',
            'url' => 'url',
            'returnTextLocation' => 'return_text_location',
            'returnConfidence' => 'return_confidence',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一  要求base64编码后大小不超过10MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * returnTextLocation  如果为True，返回体中会包含text_location对象，内容是各字段的检测框四点坐标。如果是False或者没有这个key，则返回体中不包含text_location对象。
    * returnConfidence  如果为True，返回体中会包含confidence对象，内容是各字段的置信度。如果是False或者没有这个key，则返回体中不包含confidence对象。
    * type  如果没有type字段则默认返回原机动车销售发票出参； 若存在type字段但是不属于 auto、new或者used三个枚举值，API返回AIS.0101入参错误； 如果type为auto，API自动判断发票类型，并在返回参数中添加type出参以指明发票类型； 如果type为new，API在检测出的类型为机动车发票时返回原版机动车发票出参并添加type出参（机动车销售统一发票），不一致时报错AIS.0104图像质量差； 如果type为used，API在检测出的类型为二手车时返回二手车发票出参，并添加type出参（二手车销售统一发票），不一致时报错AIS.0104图像质量差。
    *
    * @var string[]
    */
    protected static $setters = [
            'image' => 'setImage',
            'url' => 'setUrl',
            'returnTextLocation' => 'setReturnTextLocation',
            'returnConfidence' => 'setReturnConfidence',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * image  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一  要求base64编码后大小不超过10MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * returnTextLocation  如果为True，返回体中会包含text_location对象，内容是各字段的检测框四点坐标。如果是False或者没有这个key，则返回体中不包含text_location对象。
    * returnConfidence  如果为True，返回体中会包含confidence对象，内容是各字段的置信度。如果是False或者没有这个key，则返回体中不包含confidence对象。
    * type  如果没有type字段则默认返回原机动车销售发票出参； 若存在type字段但是不属于 auto、new或者used三个枚举值，API返回AIS.0101入参错误； 如果type为auto，API自动判断发票类型，并在返回参数中添加type出参以指明发票类型； 如果type为new，API在检测出的类型为机动车发票时返回原版机动车发票出参并添加type出参（机动车销售统一发票），不一致时报错AIS.0104图像质量差； 如果type为used，API在检测出的类型为二手车时返回二手车发票出参，并添加type出参（二手车销售统一发票），不一致时报错AIS.0104图像质量差。
    *
    * @var string[]
    */
    protected static $getters = [
            'image' => 'getImage',
            'url' => 'getUrl',
            'returnTextLocation' => 'getReturnTextLocation',
            'returnConfidence' => 'getReturnConfidence',
            'type' => 'getType'
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
        $this->container['returnTextLocation'] = isset($data['returnTextLocation']) ? $data['returnTextLocation'] : null;
        $this->container['returnConfidence'] = isset($data['returnConfidence']) ? $data['returnConfidence'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    *  与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
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
    * @param string|null $image 与url二选一  图像数据，base64编码，要求base64编码后大小不超过10MB。图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
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
    *  与image二选一  要求base64编码后大小不超过10MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
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
    * @param string|null $url 与image二选一  要求base64编码后大小不超过10MB。 图片最小边不小于100px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets returnTextLocation
    *  如果为True，返回体中会包含text_location对象，内容是各字段的检测框四点坐标。如果是False或者没有这个key，则返回体中不包含text_location对象。
    *
    * @return bool|null
    */
    public function getReturnTextLocation()
    {
        return $this->container['returnTextLocation'];
    }

    /**
    * Sets returnTextLocation
    *
    * @param bool|null $returnTextLocation 如果为True，返回体中会包含text_location对象，内容是各字段的检测框四点坐标。如果是False或者没有这个key，则返回体中不包含text_location对象。
    *
    * @return $this
    */
    public function setReturnTextLocation($returnTextLocation)
    {
        $this->container['returnTextLocation'] = $returnTextLocation;
        return $this;
    }

    /**
    * Gets returnConfidence
    *  如果为True，返回体中会包含confidence对象，内容是各字段的置信度。如果是False或者没有这个key，则返回体中不包含confidence对象。
    *
    * @return bool|null
    */
    public function getReturnConfidence()
    {
        return $this->container['returnConfidence'];
    }

    /**
    * Sets returnConfidence
    *
    * @param bool|null $returnConfidence 如果为True，返回体中会包含confidence对象，内容是各字段的置信度。如果是False或者没有这个key，则返回体中不包含confidence对象。
    *
    * @return $this
    */
    public function setReturnConfidence($returnConfidence)
    {
        $this->container['returnConfidence'] = $returnConfidence;
        return $this;
    }

    /**
    * Gets type
    *  如果没有type字段则默认返回原机动车销售发票出参； 若存在type字段但是不属于 auto、new或者used三个枚举值，API返回AIS.0101入参错误； 如果type为auto，API自动判断发票类型，并在返回参数中添加type出参以指明发票类型； 如果type为new，API在检测出的类型为机动车发票时返回原版机动车发票出参并添加type出参（机动车销售统一发票），不一致时报错AIS.0104图像质量差； 如果type为used，API在检测出的类型为二手车时返回二手车发票出参，并添加type出参（二手车销售统一发票），不一致时报错AIS.0104图像质量差。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 如果没有type字段则默认返回原机动车销售发票出参； 若存在type字段但是不属于 auto、new或者used三个枚举值，API返回AIS.0101入参错误； 如果type为auto，API自动判断发票类型，并在返回参数中添加type出参以指明发票类型； 如果type为new，API在检测出的类型为机动车发票时返回原版机动车发票出参并添加type出参（机动车销售统一发票），不一致时报错AIS.0104图像质量差； 如果type为used，API在检测出的类型为二手车时返回二手车发票出参，并添加type出参（二手车销售统一发票），不一致时报错AIS.0104图像质量差。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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


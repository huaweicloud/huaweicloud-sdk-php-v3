<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MyanmarIdcardRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MyanmarIdcardRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * image  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。
    * url  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/intl/zh-cn/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * convertUnicode  - true：输出为unicode格式 - false：输出为zawgyi格式 如果参数值为空或无该参数，默认输出为zawgyi格式。
    * returnConfidence  是否返回置信度的开关，可选值如下所示。 - true：返回置信度 - false：不返回置信度 如果无该参数，系统默认不返回置信度。如果输入参数不是Boolean类型，则会报非法参数错误。
    * returnPortraitImage  是否返回头像内容开关，可选值如下所示： - true：返回身份证头像照片的 base64 编码 - false：不返回身份证头像照片的 base64 编码
    * returnPortraitLocation  是否返回头像坐标的开关，可选值如下所示： - true：返回身份证头像的位置 - false：不返回身份证头像的位置
    * returnIdcardType  是否返回身份证类型的开关，可选值如下所示： - true：返回身份证的类型，类型包括身份证原件以及身份证复印件 - false：不返回身份证的类型 未传入该参数时默认为false，即不返回身份证头像照片的 base64 编码。
    * returnTranslation  是否返回转译信息的开关，可选值如下所示： - true: 返回转译信息。 - false：不返回转译信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'image' => 'string',
            'url' => 'string',
            'convertUnicode' => 'bool',
            'returnConfidence' => 'bool',
            'returnPortraitImage' => 'bool',
            'returnPortraitLocation' => 'bool',
            'returnIdcardType' => 'bool',
            'returnTranslation' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * image  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。
    * url  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/intl/zh-cn/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * convertUnicode  - true：输出为unicode格式 - false：输出为zawgyi格式 如果参数值为空或无该参数，默认输出为zawgyi格式。
    * returnConfidence  是否返回置信度的开关，可选值如下所示。 - true：返回置信度 - false：不返回置信度 如果无该参数，系统默认不返回置信度。如果输入参数不是Boolean类型，则会报非法参数错误。
    * returnPortraitImage  是否返回头像内容开关，可选值如下所示： - true：返回身份证头像照片的 base64 编码 - false：不返回身份证头像照片的 base64 编码
    * returnPortraitLocation  是否返回头像坐标的开关，可选值如下所示： - true：返回身份证头像的位置 - false：不返回身份证头像的位置
    * returnIdcardType  是否返回身份证类型的开关，可选值如下所示： - true：返回身份证的类型，类型包括身份证原件以及身份证复印件 - false：不返回身份证的类型 未传入该参数时默认为false，即不返回身份证头像照片的 base64 编码。
    * returnTranslation  是否返回转译信息的开关，可选值如下所示： - true: 返回转译信息。 - false：不返回转译信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'image' => null,
        'url' => null,
        'convertUnicode' => null,
        'returnConfidence' => null,
        'returnPortraitImage' => null,
        'returnPortraitLocation' => null,
        'returnIdcardType' => null,
        'returnTranslation' => null
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
    * image  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。
    * url  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/intl/zh-cn/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * convertUnicode  - true：输出为unicode格式 - false：输出为zawgyi格式 如果参数值为空或无该参数，默认输出为zawgyi格式。
    * returnConfidence  是否返回置信度的开关，可选值如下所示。 - true：返回置信度 - false：不返回置信度 如果无该参数，系统默认不返回置信度。如果输入参数不是Boolean类型，则会报非法参数错误。
    * returnPortraitImage  是否返回头像内容开关，可选值如下所示： - true：返回身份证头像照片的 base64 编码 - false：不返回身份证头像照片的 base64 编码
    * returnPortraitLocation  是否返回头像坐标的开关，可选值如下所示： - true：返回身份证头像的位置 - false：不返回身份证头像的位置
    * returnIdcardType  是否返回身份证类型的开关，可选值如下所示： - true：返回身份证的类型，类型包括身份证原件以及身份证复印件 - false：不返回身份证的类型 未传入该参数时默认为false，即不返回身份证头像照片的 base64 编码。
    * returnTranslation  是否返回转译信息的开关，可选值如下所示： - true: 返回转译信息。 - false：不返回转译信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'image' => 'image',
            'url' => 'url',
            'convertUnicode' => 'convert_unicode',
            'returnConfidence' => 'return_confidence',
            'returnPortraitImage' => 'return_portrait_image',
            'returnPortraitLocation' => 'return_portrait_location',
            'returnIdcardType' => 'return_idcard_type',
            'returnTranslation' => 'return_translation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * image  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。
    * url  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/intl/zh-cn/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * convertUnicode  - true：输出为unicode格式 - false：输出为zawgyi格式 如果参数值为空或无该参数，默认输出为zawgyi格式。
    * returnConfidence  是否返回置信度的开关，可选值如下所示。 - true：返回置信度 - false：不返回置信度 如果无该参数，系统默认不返回置信度。如果输入参数不是Boolean类型，则会报非法参数错误。
    * returnPortraitImage  是否返回头像内容开关，可选值如下所示： - true：返回身份证头像照片的 base64 编码 - false：不返回身份证头像照片的 base64 编码
    * returnPortraitLocation  是否返回头像坐标的开关，可选值如下所示： - true：返回身份证头像的位置 - false：不返回身份证头像的位置
    * returnIdcardType  是否返回身份证类型的开关，可选值如下所示： - true：返回身份证的类型，类型包括身份证原件以及身份证复印件 - false：不返回身份证的类型 未传入该参数时默认为false，即不返回身份证头像照片的 base64 编码。
    * returnTranslation  是否返回转译信息的开关，可选值如下所示： - true: 返回转译信息。 - false：不返回转译信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'image' => 'setImage',
            'url' => 'setUrl',
            'convertUnicode' => 'setConvertUnicode',
            'returnConfidence' => 'setReturnConfidence',
            'returnPortraitImage' => 'setReturnPortraitImage',
            'returnPortraitLocation' => 'setReturnPortraitLocation',
            'returnIdcardType' => 'setReturnIdcardType',
            'returnTranslation' => 'setReturnTranslation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * image  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。
    * url  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/intl/zh-cn/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * convertUnicode  - true：输出为unicode格式 - false：输出为zawgyi格式 如果参数值为空或无该参数，默认输出为zawgyi格式。
    * returnConfidence  是否返回置信度的开关，可选值如下所示。 - true：返回置信度 - false：不返回置信度 如果无该参数，系统默认不返回置信度。如果输入参数不是Boolean类型，则会报非法参数错误。
    * returnPortraitImage  是否返回头像内容开关，可选值如下所示： - true：返回身份证头像照片的 base64 编码 - false：不返回身份证头像照片的 base64 编码
    * returnPortraitLocation  是否返回头像坐标的开关，可选值如下所示： - true：返回身份证头像的位置 - false：不返回身份证头像的位置
    * returnIdcardType  是否返回身份证类型的开关，可选值如下所示： - true：返回身份证的类型，类型包括身份证原件以及身份证复印件 - false：不返回身份证的类型 未传入该参数时默认为false，即不返回身份证头像照片的 base64 编码。
    * returnTranslation  是否返回转译信息的开关，可选值如下所示： - true: 返回转译信息。 - false：不返回转译信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'image' => 'getImage',
            'url' => 'getUrl',
            'convertUnicode' => 'getConvertUnicode',
            'returnConfidence' => 'getReturnConfidence',
            'returnPortraitImage' => 'getReturnPortraitImage',
            'returnPortraitLocation' => 'getReturnPortraitLocation',
            'returnIdcardType' => 'getReturnIdcardType',
            'returnTranslation' => 'getReturnTranslation'
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
        $this->container['convertUnicode'] = isset($data['convertUnicode']) ? $data['convertUnicode'] : null;
        $this->container['returnConfidence'] = isset($data['returnConfidence']) ? $data['returnConfidence'] : null;
        $this->container['returnPortraitImage'] = isset($data['returnPortraitImage']) ? $data['returnPortraitImage'] : null;
        $this->container['returnPortraitLocation'] = isset($data['returnPortraitLocation']) ? $data['returnPortraitLocation'] : null;
        $this->container['returnIdcardType'] = isset($data['returnIdcardType']) ? $data['returnIdcardType'] : null;
        $this->container['returnTranslation'] = isset($data['returnTranslation']) ? $data['returnTranslation'] : null;
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
    *  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。
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
    * @param string|null $image 与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。
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
    *  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/intl/zh-cn/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
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
    * @param string|null $url 与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px，支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/intl/zh-cn/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets convertUnicode
    *  - true：输出为unicode格式 - false：输出为zawgyi格式 如果参数值为空或无该参数，默认输出为zawgyi格式。
    *
    * @return bool|null
    */
    public function getConvertUnicode()
    {
        return $this->container['convertUnicode'];
    }

    /**
    * Sets convertUnicode
    *
    * @param bool|null $convertUnicode - true：输出为unicode格式 - false：输出为zawgyi格式 如果参数值为空或无该参数，默认输出为zawgyi格式。
    *
    * @return $this
    */
    public function setConvertUnicode($convertUnicode)
    {
        $this->container['convertUnicode'] = $convertUnicode;
        return $this;
    }

    /**
    * Gets returnConfidence
    *  是否返回置信度的开关，可选值如下所示。 - true：返回置信度 - false：不返回置信度 如果无该参数，系统默认不返回置信度。如果输入参数不是Boolean类型，则会报非法参数错误。
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
    * @param bool|null $returnConfidence 是否返回置信度的开关，可选值如下所示。 - true：返回置信度 - false：不返回置信度 如果无该参数，系统默认不返回置信度。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @return $this
    */
    public function setReturnConfidence($returnConfidence)
    {
        $this->container['returnConfidence'] = $returnConfidence;
        return $this;
    }

    /**
    * Gets returnPortraitImage
    *  是否返回头像内容开关，可选值如下所示： - true：返回身份证头像照片的 base64 编码 - false：不返回身份证头像照片的 base64 编码
    *
    * @return bool|null
    */
    public function getReturnPortraitImage()
    {
        return $this->container['returnPortraitImage'];
    }

    /**
    * Sets returnPortraitImage
    *
    * @param bool|null $returnPortraitImage 是否返回头像内容开关，可选值如下所示： - true：返回身份证头像照片的 base64 编码 - false：不返回身份证头像照片的 base64 编码
    *
    * @return $this
    */
    public function setReturnPortraitImage($returnPortraitImage)
    {
        $this->container['returnPortraitImage'] = $returnPortraitImage;
        return $this;
    }

    /**
    * Gets returnPortraitLocation
    *  是否返回头像坐标的开关，可选值如下所示： - true：返回身份证头像的位置 - false：不返回身份证头像的位置
    *
    * @return bool|null
    */
    public function getReturnPortraitLocation()
    {
        return $this->container['returnPortraitLocation'];
    }

    /**
    * Sets returnPortraitLocation
    *
    * @param bool|null $returnPortraitLocation 是否返回头像坐标的开关，可选值如下所示： - true：返回身份证头像的位置 - false：不返回身份证头像的位置
    *
    * @return $this
    */
    public function setReturnPortraitLocation($returnPortraitLocation)
    {
        $this->container['returnPortraitLocation'] = $returnPortraitLocation;
        return $this;
    }

    /**
    * Gets returnIdcardType
    *  是否返回身份证类型的开关，可选值如下所示： - true：返回身份证的类型，类型包括身份证原件以及身份证复印件 - false：不返回身份证的类型 未传入该参数时默认为false，即不返回身份证头像照片的 base64 编码。
    *
    * @return bool|null
    */
    public function getReturnIdcardType()
    {
        return $this->container['returnIdcardType'];
    }

    /**
    * Sets returnIdcardType
    *
    * @param bool|null $returnIdcardType 是否返回身份证类型的开关，可选值如下所示： - true：返回身份证的类型，类型包括身份证原件以及身份证复印件 - false：不返回身份证的类型 未传入该参数时默认为false，即不返回身份证头像照片的 base64 编码。
    *
    * @return $this
    */
    public function setReturnIdcardType($returnIdcardType)
    {
        $this->container['returnIdcardType'] = $returnIdcardType;
        return $this;
    }

    /**
    * Gets returnTranslation
    *  是否返回转译信息的开关，可选值如下所示： - true: 返回转译信息。 - false：不返回转译信息。
    *
    * @return bool|null
    */
    public function getReturnTranslation()
    {
        return $this->container['returnTranslation'];
    }

    /**
    * Sets returnTranslation
    *
    * @param bool|null $returnTranslation 是否返回转译信息的开关，可选值如下所示： - true: 返回转译信息。 - false：不返回转译信息。
    *
    * @return $this
    */
    public function setReturnTranslation($returnTranslation)
    {
        $this->container['returnTranslation'] = $returnTranslation;
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

